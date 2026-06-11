<?php
/**
 * Contact form handler — CSRF protection, validation, PHP mail.
 * Called via POST from contact.php
 */
require_once dirname(__DIR__) . '/includes/bootstrap.php';

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

// Sanitise + validate
$name    = clean($_POST['full_name'] ?? '');
$phone   = clean($_POST['phone']     ?? '');
$email   = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
$zip     = clean($_POST['zip']       ?? '');
$message = clean($_POST['message']   ?? '');

$errors = [];
if (strlen($name)  < 2)              $errors[] = 'Please enter your full name.';
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Please enter a valid email address.';
if (!validPhone($phone))             $errors[] = 'Please enter a valid US phone number.';

if ($errors) {
    $_SESSION['form_error']  = implode(' ', $errors);
    $_SESSION['form_values'] = compact('name','phone','email','zip','message');
    header('Location: ' . BASE_PATH . '/contact.php#contact-form');
    exit;
}

// Build email
$subject  = 'New callback request from ' . $name;
$body     = "Name: {$name}\nPhone: {$phone}\nEmail: {$email}\nZIP: {$zip}\n\nMessage:\n{$message}\n\n---\nSent from " . SITE_DOMAIN;
$headers  = [
    'From: '       . MAIL_FROM_NAME . ' <' . MAIL_FROM . '>',
    'Reply-To: '   . $name . ' <' . $email . '>',
    'Content-Type: text/plain; charset=UTF-8',
    'X-Mailer: PHP/' . phpversion(),
];

$sent = mail(MAIL_TO, $subject, $body, implode("\r\n", $headers));

// Regenerate CSRF token after submission
unset($_SESSION['csrf_token']);

if ($sent) {
    $_SESSION['form_success'] = 'Thanks, ' . htmlspecialchars($name) . '! We will call you back within one business day.';
} else {
    $_SESSION['form_error'] = 'Sorry, we could not send your message right now. Please call us at ' . PHONE_DISPLAY . '.';
}

header('Location: ' . BASE_PATH . '/contact.php#contact-form');
exit;
