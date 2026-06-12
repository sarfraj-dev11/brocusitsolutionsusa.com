<?php
/**
 * Service-page lead form handler — CSRF, validation, SMTP via PHPMailer.
 * Uses session flash + redirect (same as contact-handler.php) — no AJAX.
 */
require_once dirname(__DIR__) . '/includes/bootstrap.php';
require_once dirname(__DIR__) . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Only accept POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ' . BASE_PATH . '/home-security/');
    exit;
}

// Get the return URL from the form (reliable, unlike HTTP_REFERER)
$returnUrl = clean($_POST['return_url'] ?? '');
// Validate it stays within our site (prevent open redirect)
if (empty($returnUrl) || strpos($returnUrl, BASE_PATH) === false) {
    $returnUrl = BASE_PATH . '/home-security/professional-monitoring/';
}
$returnUrl = rtrim($returnUrl, '/') . '/';

// CSRF check
if (!verifyCsrf()) {
    $_SESSION['svc_form_error'] = 'Security token mismatch. Please refresh and try again.';
    header('Location: ' . $returnUrl . '#quote-form');
    exit;
}

// Sanitise inputs
$name        = clean($_POST['full_name']    ?? '');
$phone       = clean($_POST['phone']        ?? '');
$zip         = clean($_POST['zip']          ?? '');
$email       = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
$servicePage = clean($_POST['service_page'] ?? 'Service Page');

// Store values for re-population on error
$_SESSION['svc_form_values'] = compact('name', 'phone', 'zip', 'email');

$errors = [];

if (strlen($name) === 0) {
    $errors[] = 'Full Name is required.';
} elseif (strlen($name) < 2) {
    $errors[] = 'Full Name must be at least 2 characters.';
} elseif (!preg_match('/^[A-Za-z\s\-\']+$/', $name)) {
    $errors[] = 'Full Name can only contain letters, spaces, and hyphens.';
}

if (strlen($phone) === 0) {
    $errors[] = 'Phone Number is required.';
} elseif (!preg_match('/^\d{10}$/', $phone)) {
    $errors[] = 'Phone Number must be exactly 10 digits.';
}

if (strlen($zip) === 0) {
    $errors[] = 'ZIP Code is required.';
} elseif (!preg_match('/^\d{5}$/', $zip)) {
    $errors[] = 'ZIP Code must be exactly 5 digits.';
}

if (strlen($email) === 0) {
    $errors[] = 'Email Address is required.';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Please enter a valid email address.';
}

// Redirect back with errors
if ($errors) {
    $_SESSION['svc_form_error'] = implode('<br>', $errors);
    header('Location: ' . $returnUrl . '#quote-form');
    exit;
}

unset($_SESSION['svc_form_values']);

// ── Send email via PHPMailer SMTP ──────────────────────────
$smtpDebug = '';
$mail = new PHPMailer(true);

try {
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

    $mail->SMTPOptions = [
        'ssl' => [
            'verify_peer'       => false,
            'verify_peer_name'  => false,
            'allow_self_signed' => true,
        ],
    ];

    $mail->Hostname = SITE_DOMAIN;

    $mail->setFrom(MAIL_FROM, MAIL_FROM_NAME);
    $mail->addAddress(MAIL_TO, SITE_SHORT);
    $mail->addReplyTo($email, $name);

    $mail->isHTML(false);
    $mail->Subject = 'New Lead from Service Page: ' . $name;
    $mail->Body    = "── NEW SERVICE PAGE LEAD ──\n\n"
                   . "Service Page: {$servicePage}\n\n"
                   . "Name:  {$name}\n"
                   . "Phone: +1 {$phone}\n"
                   . "Email: {$email}\n"
                   . "ZIP:   {$zip}\n\n"
                   . "---\nSent from " . SITE_DOMAIN . " (Service Page Lead Form)";

    $mail->send();

    unset($_SESSION['csrf_token']);
    $_SESSION['svc_form_success'] = 'Thanks, ' . htmlspecialchars($name) . '! We will call you back within one business day.';
    $_SESSION['svc_smtp_debug']   = $smtpDebug;

} catch (Exception $e) {
    unset($_SESSION['csrf_token']);
    $_SESSION['svc_form_error']  = 'Mailer Error: ' . htmlspecialchars($mail->ErrorInfo) . ' | Exception: ' . htmlspecialchars($e->getMessage());
    $_SESSION['svc_smtp_debug']  = $smtpDebug;
}

header('Location: ' . $returnUrl . '#quote-form');
exit;
