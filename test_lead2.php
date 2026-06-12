<?php
require_once 'includes/bootstrap.php';

$_SERVER['REQUEST_METHOD'] = 'POST';
$token = csrfToken();
$_POST['csrf_token'] = $token;
$_POST['full_name'] = 'John Doe';
$_POST['phone'] = '1234567890';
$_POST['zip'] = '33647';
$_POST['email'] = 'test@example.com';
$_POST['product_page'] = 'Test';

ob_start();
require 'handlers/lead-handler.php';
$output = ob_get_clean();
echo "RESULT: " . $output;
