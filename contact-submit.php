<?php
// Shiva Punch Art - secure contact form handler
// Update $adminEmail when the client provides the final receiving address.
$adminEmail = 'shivapunchart@gmail.com';
$siteName = 'Shiva Punch Art';
$fromEmail = 'no-reply@shivapunchart.com';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: contact.html'); exit;
}

function clean($value) {
    return trim(preg_replace('/[\r\n]+/', ' ', (string)$value));
}

$name = clean($_POST['name'] ?? '');
$email = clean($_POST['email'] ?? '');
$phone = preg_replace('/\D+/', '', (string)($_POST['phone'] ?? ''));
$subject = clean($_POST['subject'] ?? 'General Enquiry');
$message = trim((string)($_POST['message'] ?? ''));
$service = clean($_POST['service'] ?? '');
$source = clean($_POST['source'] ?? 'Contact-page');

$errors = [];
if ($name === '') $errors[] = 'Please enter your name.';
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Please enter a valid email address.';
if (!preg_match('/^[0-9]{10}$/', $phone)) $errors[] = 'Please enter a valid 10-digit Indian mobile number.';
if ($message === '') $errors[] = 'Please enter your message.';
if (strlen($message) > 5000) $errors[] = 'Message is too long.';

if ($errors) {
    http_response_code(422);
    header('Content-Type: application/json');
    echo json_encode(['ok'=>false,'message'=>implode(' ', $errors)]);
    exit;
}

$phoneDisplay = '+91 ' . substr($phone,0,5) . ' ' . substr($phone,5);
$subjectLine = '🚀 New Lead: ' . ($subject !== '' ? $subject : 'General Enquiry') . ' — ' . $name;

$adminHtml = '<!doctype html><html><body style="margin:0;background:#f4f7fb;font-family:Arial,sans-serif;color:#16213a"><div style="max-width:800px;margin:25px auto;background:#fff;border:1px solid #dbe3ef;border-radius:12px;overflow:hidden"><div style="background:#2f6095;color:#fff;padding:30px;text-align:center"><h1 style="margin:0;font-size:28px">🚀 New Lead — ' . htmlspecialchars($source) . '</h1></div><div style="padding:30px"><table style="width:100%;border-collapse:collapse;font-size:16px"><tr><td style="padding:12px 0;font-weight:700;width:180px">Full Name:</td><td>' . htmlspecialchars($name) . '</td></tr><tr><td style="padding:12px 0;font-weight:700">Phone:</td><td>' . htmlspecialchars($phoneDisplay) . '</td></tr><tr><td style="padding:12px 0;font-weight:700">Email:</td><td><a href="mailto:' . htmlspecialchars($email) . '">' . htmlspecialchars($email) . '</a></td></tr><tr><td style="padding:12px 0;font-weight:700">Subject:</td><td>' . htmlspecialchars($subject) . '</td></tr>' . ($service !== '' ? '<tr><td style="padding:12px 0;font-weight:700">Service:</td><td>' . htmlspecialchars($service) . '</td></tr>' : '') . '<tr><td style="padding:12px 0;font-weight:700;vertical-align:top">Message:</td><td style="white-space:pre-wrap">' . nl2br(htmlspecialchars($message)) . '</td></tr></table></div></div></body></html>';

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
$headers .= 'From: ' . $siteName . ' <' . $fromEmail . ">\r\n";
$headers .= 'Reply-To: ' . $email . "\r\n";

$adminSent = @mail($adminEmail, $subjectLine, $adminHtml, $headers);

// Customer acknowledgement
$customerSubject = 'Thank You for Contacting Shiva Punch Art';
$customerHtml = '<!doctype html><html><body style="margin:0;background:#f7f9fd;font-family:Arial,sans-serif;color:#16213a"><div style="max-width:680px;margin:30px auto;background:#fff;border-radius:16px;overflow:hidden;border:1px solid #e2e8f0"><div style="background:linear-gradient(135deg,#172b63,#2448b8);padding:28px;text-align:center"><img src="https://shivapunchart.com/assets/img/logo.png" alt="Shiva Punch Art" style="max-width:230px;height:auto;background:#fff;border-radius:8px;padding:8px"></div><div style="padding:34px"><h2 style="margin-top:0;color:#183b91">Dear ' . htmlspecialchars($name) . ',</h2><p style="font-size:16px;line-height:1.7">Thank you for contacting Shiva Punch Art and for sharing your requirements with us. We have successfully received your enquiry, and our team will review the details and get back to you shortly, usually within one business day.</p><p style="font-size:16px;line-height:1.7">We appreciate your interest in our printing and packaging solutions. If you have any urgent requirements, please feel free to contact us directly at +91 91367 30776 or shivapunchart@gmail.com.</p><p style="font-size:16px;line-height:1.7">Warm regards,<br><strong>Team Shiva Punch Art</strong><br>Printing &amp; Packaging Industry Die Maker</p></div></div></body></html>';
$customerHeaders = "MIME-Version: 1.0\r\nContent-Type: text/html; charset=UTF-8\r\n";
$customerHeaders .= 'From: ' . $siteName . ' <' . $fromEmail . ">\r\n";
$customerHeaders .= 'Reply-To: ' . $adminEmail . "\r\n";
$customerSent = @mail($email, $customerSubject, $customerHtml, $customerHeaders);

if (!$adminSent) {
    http_response_code(500);
    header('Content-Type: application/json');
    echo json_encode(['ok'=>false,'message'=>'We could not send your enquiry right now. Please try again or contact us directly.']);
    exit;
}

header('Location: thank-you.php');
exit;
