<?php
require_once __DIR__ . '/includes/functions.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: /index.php');
    exit;
}

$redirectTo = $_POST['redirect_to'] ?? '/thank-you.php';
// Only allow redirecting back to a relative path on this site.
if (!preg_match('#^/[a-zA-Z0-9/_\-\.]*$#', $redirectTo)) {
    $redirectTo = '/thank-you.php';
}

if (!csrf_verify()) {
    set_flash('error', 'Your session expired. Please try submitting the form again.');
    header('Location: ' . $redirectTo);
    exit;
}

$name = clean($_POST['name'] ?? '');
$phone = clean($_POST['phone'] ?? '');
$email = clean($_POST['email'] ?? '');
$serviceRequired = clean($_POST['service_required'] ?? '');
$preferredCountry = clean($_POST['preferred_country'] ?? '');
$message = clean($_POST['message'] ?? '');
$sourcePage = clean($_POST['source_page'] ?? 'website');

$errors = [];

if ($name === '' || mb_strlen($name) > 150) {
    $errors[] = 'Please enter your full name.';
}
if (!preg_match('/^[0-9+\-\s()]{7,20}$/', $phone)) {
    $errors[] = 'Please enter a valid mobile number.';
}
if ($email !== '' && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Please enter a valid email address.';
}
if ($serviceRequired === '') {
    $errors[] = 'Please select a service.';
}

if (!empty($errors)) {
    set_flash('error', implode(' ', $errors));
    header('Location: ' . $redirectTo);
    exit;
}

try {
    $pdo = getDB();
    $stmt = $pdo->prepare(
        'INSERT INTO leads (name, phone, email, service_required, preferred_country, message, source_page, status)
         VALUES (:name, :phone, :email, :service_required, :preferred_country, :message, :source_page, "new")'
    );
    $stmt->execute([
        ':name' => $name,
        ':phone' => $phone,
        ':email' => $email !== '' ? $email : null,
        ':service_required' => $serviceRequired,
        ':preferred_country' => $preferredCountry !== '' ? $preferredCountry : null,
        ':message' => $message !== '' ? $message : null,
        ':source_page' => $sourcePage,
    ]);
} catch (PDOException $e) {
    error_log('Lead insert failed: ' . $e->getMessage());
    set_flash('error', 'Something went wrong on our end. Please call us directly or try again.');
    header('Location: ' . $redirectTo);
    exit;
}

// Optional: send a notification email to the office here with mail() or PHPMailer/SMTP.

set_flash('success', 'Thank you, ' . $name . '! Our team will contact you shortly.');
header('Location: /thank-you.php');
exit;
