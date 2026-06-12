<?php
/**
 * Lead form handler — server-side validation, SMTP via PHPMailer (Hostinger).
 * Returns JSON for AJAX requests from product page lead forms.
 * No reCAPTCHA required — per user instruction.
 */
require_once dirname(__DIR__) . '/includes/bootstrap.php';
require_once dirname(__DIR__) . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

header('Content-Type: application/json');

// Only accept POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Invalid request method.']);
    exit;
}

// CSRF check
if (!verifyCsrf()) {
    echo json_encode(['success' => false, 'message' => 'Security token mismatch. Please refresh the page and try again.']);
    exit;
}

// Sanitise inputs
$name    = clean($_POST['full_name']    ?? '');
$phone   = clean($_POST['phone']        ?? '');
$zip     = clean($_POST['zip']          ?? '');
$email   = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
$product = clean($_POST['product_page'] ?? 'Unknown Product Page');

$errors = [];

// ── Full Name: required, letters/spaces/hyphens/apostrophes only ──
if (strlen($name) === 0) {
    $errors[] = 'Full Name is required.';
} elseif (strlen($name) < 2) {
    $errors[] = 'Full Name must be at least 2 characters.';
} elseif (!preg_match('/^[A-Za-z\s\-\']+$/', $name)) {
    $errors[] = 'Full Name can only contain letters, spaces, hyphens. No numbers or special characters.';
}

// ── Phone Number: required, exactly 10 digits ──
if (strlen($phone) === 0) {
    $errors[] = 'Phone Number is required.';
} elseif (!preg_match('/^\d{10}$/', $phone)) {
    $errors[] = 'Phone Number must be exactly 10 digits.';
}

// ── ZIP Code: required, exactly 5 digits ──
if (strlen($zip) === 0) {
    $errors[] = 'ZIP Code is required.';
} elseif (!preg_match('/^\d{5}$/', $zip)) {
    $errors[] = 'ZIP Code must be exactly 5 digits.';
}

// ── Email Address: required, valid format ──
if (strlen($email) === 0) {
    $errors[] = 'Email Address is required.';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Please enter a valid email address.';
}

if ($errors) {
    echo json_encode(['success' => false, 'message' => implode(' ', $errors)]);
    exit;
}

// ── Send email via PHPMailer SMTP (Hostinger) ──────────────
$mail = new PHPMailer(true);

try {
    // SMTP configuration
    $mail->isSMTP();
    $mail->Host       = SMTP_HOST;
    $mail->SMTPAuth   = true;
    $mail->Username   = SMTP_USERNAME;
    $mail->Password   = SMTP_PASSWORD;
    $mail->SMTPSecure = SMTP_SECURE;
    $mail->Port       = SMTP_PORT;

    // Sender & recipient
    $mail->setFrom(MAIL_FROM, MAIL_FROM_NAME);
    $mail->addAddress(MAIL_TO, SITE_SHORT);
    $mail->addReplyTo($email, $name);

    // Email content
    $mail->isHTML(false);
    $mail->Subject = 'New Lead from Product Page: ' . $name;
    $mail->Body    = "── NEW PRODUCT PAGE LEAD ──\n\n"
                   . "Product Page: {$product}\n\n"
                   . "Name:  {$name}\n"
                   . "Phone: +1 {$phone}\n"
                   . "Email: {$email}\n"
                   . "ZIP:   {$zip}\n\n"
                   . "---\nSent from " . SITE_DOMAIN . " (Product Page Lead Form)";

    $mail->send();

    // Regenerate CSRF token after submission
    unset($_SESSION['csrf_token']);

    echo json_encode([
        'success' => true,
        'message' => 'Thanks, ' . htmlspecialchars($name) . '! We will call you back within one business day.'
    ]);

} catch (Exception $e) {
    // Regenerate CSRF token after submission
    unset($_SESSION['csrf_token']);

    if (APP_ENV === 'development') {
        echo json_encode(['success' => false, 'message' => 'Mailer Error: ' . $mail->ErrorInfo]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Sorry, we could not send your message right now. Please call us at ' . PHONE_DISPLAY . '.']);
    }
}
exit;
