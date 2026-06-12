<?php
/**
 * Contact form handler — CSRF protection, validation, reCAPTCHA v2, SMTP via PHPMailer.
 * Called via POST from contact.php
 */
require_once dirname(__DIR__) . '/includes/bootstrap.php';
require_once dirname(__DIR__) . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Only accept POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ' . BASE_PATH . '/contact.php');
    exit;
}

// CSRF check
if (!verifyCsrf()) {
    $_SESSION['form_error'] = 'Security token mismatch. Please try again.';
    header('Location: ' . BASE_PATH . '/contact.php#contact-form');
    exit;
}

// Sanitise inputs
$name    = clean($_POST['full_name'] ?? '');
$phone   = clean($_POST['phone']     ?? '');
$email   = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
$zip     = clean($_POST['zip']       ?? '');
$message = clean($_POST['message']   ?? '');

// Store values for re-populating form on error
$_SESSION['form_values'] = compact('name', 'phone', 'email', 'zip', 'message');

$errors = [];

// ── Full Name: required, letters/spaces/hyphens/apostrophes only ──
if (strlen($name) === 0) {
    $errors[] = 'Full Name is required.';
} elseif (strlen($name) < 2) {
    $errors[] = 'Full Name must be at least 2 characters.';
} elseif (!preg_match('/^[A-Za-z\s\-\']+$/', $name)) {
    $errors[] = 'Full Name can only contain letters, spaces, hyphens, and apostrophes. No numbers or special characters.';
}

// ── Phone Number: required, exactly 10 digits ──
if (strlen($phone) === 0) {
    $errors[] = 'Phone Number is required.';
} elseif (!preg_match('/^\d{10}$/', $phone)) {
    $errors[] = 'Phone Number must be exactly 10 digits. No letters or special characters.';
}

// ── Email Address: required, valid format ──
if (strlen($email) === 0) {
    $errors[] = 'Email Address is required.';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Please enter a valid email address.';
}

// ── ZIP Code: required, exactly 5 digits ──
if (strlen($zip) === 0) {
    $errors[] = 'ZIP Code is required.';
} elseif (!preg_match('/^\d{5}$/', $zip)) {
    $errors[] = 'ZIP Code must be exactly 5 digits. No letters or special characters.';
}

// ── Google reCAPTCHA v2 verification ──
$recaptchaResponse = $_POST['g-recaptcha-response'] ?? '';
if (empty($recaptchaResponse)) {
    $errors[] = 'Please complete the reCAPTCHA verification.';
} else {
    $recaptchaSecret = '6Ld7fxstAAAAAG2Kfg3fUFoKYth-N11gMTEmGlM7';
    $verifyUrl = 'https://www.google.com/recaptcha/api/siteverify';

    $recaptchaData = [
        'secret'   => $recaptchaSecret,
        'response' => $recaptchaResponse,
        'remoteip' => $_SERVER['REMOTE_ADDR'] ?? '',
    ];

    // Use cURL if available, otherwise file_get_contents
    if (function_exists('curl_init')) {
        $ch = curl_init($verifyUrl);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($recaptchaData));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
        $recaptchaResult = curl_exec($ch);
        curl_close($ch);

        if ($recaptchaResult === false) {
            $errors[] = 'reCAPTCHA verification failed. Please try again.';
        } else {
            $recaptchaJson = json_decode($recaptchaResult, true);
            if (!isset($recaptchaJson['success']) || $recaptchaJson['success'] !== true) {
                $errors[] = 'reCAPTCHA verification failed. Please complete the reCAPTCHA again.';
            }
        }
    } else {
        $options = [
            'http' => [
                'method'  => 'POST',
                'header'  => 'Content-Type: application/x-www-form-urlencoded',
                'content' => http_build_query($recaptchaData),
                'timeout' => 10,
            ],
        ];
        $context = stream_context_create($options);
        $recaptchaResult = @file_get_contents($verifyUrl, false, $context);

        if ($recaptchaResult === false) {
            $errors[] = 'reCAPTCHA verification failed. Please try again.';
        } else {
            $recaptchaJson = json_decode($recaptchaResult, true);
            if (!isset($recaptchaJson['success']) || $recaptchaJson['success'] !== true) {
                $errors[] = 'reCAPTCHA verification failed. Please complete the reCAPTCHA again.';
            }
        }
    }
}

if ($errors) {
    $_SESSION['form_error']  = implode('<br>', $errors);
    header('Location: ' . BASE_PATH . '/contact.php#contact-form');
    exit;
}

// Clear stored form values on success
unset($_SESSION['form_values']);

// ── Global debug buffer — captures SMTP transcript ──
$smtpDebug = '';

// ── Send email via PHPMailer SMTP (Hostinger) ──────────────
$mail = new PHPMailer(true);

try {
    // ── SMTP Debug: capture EVERY line into $smtpDebug ──
    $mail->SMTPDebug = 3;
    $mail->Debugoutput = function($str, $level) use (&$smtpDebug) {
        $line = gmdate('Y-m-d H:i:s') . " [{$level}] {$str}";
        $smtpDebug .= $line . "\n";
        file_put_contents(__DIR__ . '/smtp_debug.txt', $line . "\n", FILE_APPEND);
    };
    $mail->isSMTP();
    $mail->Host       = SMTP_HOST;
    $mail->SMTPAuth   = true;
    $mail->Username   = SMTP_USERNAME;
    $mail->Password   = SMTP_PASSWORD;
    $mail->SMTPSecure = SMTP_SECURE;
    $mail->Port       = SMTP_PORT;

    // Bypass SSL verification for localhost/shared hosting issues
    $mail->SMTPOptions = [
        'ssl' => [
            'verify_peer'       => false,
            'verify_peer_name'  => false,
            'allow_self_signed' => true,
        ],
    ];

    // Explicitly set Hostname to prevent 'localhost' in Message-ID and EHLO (helps with spam filters)
    $mail->Hostname = SITE_DOMAIN;

    // Sender & recipient
    $mail->setFrom(MAIL_FROM, MAIL_FROM_NAME);
    $mail->addAddress(MAIL_TO, SITE_SHORT);
    $mail->addReplyTo($email, $name);

    // Email content
    $mail->isHTML(false);
    $mail->Subject = 'New callback request from ' . $name;
    $mail->Body    = "Name: {$name}\n"
                   . "Phone: +1 {$phone}\n"
                   . "Email: {$email}\n"
                   . "ZIP: {$zip}\n\n"
                   . "Message:\n{$message}\n\n"
                   . "---\nSent from " . SITE_DOMAIN;

    $mail->send();

    // Regenerate CSRF token after submission
    unset($_SESSION['csrf_token']);

    $_SESSION['form_success'] = 'Thanks, ' . htmlspecialchars($name) . '! We will call you back within one business day.';
    $_SESSION['smtp_debug'] = $smtpDebug;

} catch (Exception $e) {
    // Regenerate CSRF token after submission
    unset($_SESSION['csrf_token']);

    // Always show the real error so we can debug
    $_SESSION['form_error'] = 'Mailer Error: ' . htmlspecialchars($mail->ErrorInfo) . ' | Exception: ' . htmlspecialchars($e->getMessage());
    $_SESSION['smtp_debug'] = $smtpDebug;
}

header('Location: ' . BASE_PATH . '/contact.php#contact-form');
exit;
