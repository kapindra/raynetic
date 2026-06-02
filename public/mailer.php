<?php
/**
 * Raynetic Solutions — Contact Form Mailer
 * Place this file at the root of your cPanel public_html directory (or alongside your site).
 * It receives POST data from the contact form and forwards it to your inbox via cPanel mail.
 */

// ─────────────────────────────────────────
// CONFIGURATION — Edit these values
// ─────────────────────────────────────────
$TO_EMAIL    = "info@rayneticsolutions.com.au";   // ← Your cPanel inbox email
$TO_NAME     = "Raynetic Solutions";
$FROM_EMAIL  = "no-reply@rayneticsolutions.com.au"; // ← Must be a cPanel email on same domain
$SITE_ORIGIN = "https://rayneticsolutions.com.au";  // ← Your live website URL (no trailing slash)
// ─────────────────────────────────────────

// CORS — Only allow requests from your own site
$origin = $_SERVER['HTTP_ORIGIN'] ?? '';
if ($origin === $SITE_ORIGIN) {
    header("Access-Control-Allow-Origin: $SITE_ORIGIN");
} else {
    http_response_code(403);
    echo json_encode(['ok' => false, 'error' => 'Origin not allowed.']);
    exit;
}

header("Access-Control-Allow-Methods: POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Accept");
header("Content-Type: application/json; charset=UTF-8");

// Handle CORS preflight
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(204);
    exit;
}

// Only allow POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['ok' => false, 'error' => 'Method not allowed.']);
    exit;
}

// ─────────────────────────────────────────
// Sanitize & Validate Inputs
// ─────────────────────────────────────────
function clean($value) {
    return htmlspecialchars(strip_tags(trim($value ?? '')), ENT_QUOTES, 'UTF-8');
}

$name       = clean($_POST['name'] ?? '');
$email      = filter_var(trim($_POST['email'] ?? ''), FILTER_VALIDATE_EMAIL);
$company    = clean($_POST['company'] ?? '');
$phone      = clean($_POST['phone'] ?? '');
$service    = clean($_POST['service'] ?? '');
$budget     = clean($_POST['budget'] ?? '');
$message    = clean($_POST['message'] ?? '');
$newsletter = isset($_POST['newsletter']) ? 'Yes' : 'No';

// Honeypot spam check
if (!empty($_POST['_gotcha'])) {
    http_response_code(200); // Silently succeed to fool bots
    echo json_encode(['ok' => true]);
    exit;
}

// Basic required field validation
if (!$name || !$email || !$company || !$service || !$budget || strlen($message) < 20) {
    http_response_code(422);
    echo json_encode(['ok' => false, 'error' => 'Please fill in all required fields.']);
    exit;
}

// ─────────────────────────────────────────
// Build Email
// ─────────────────────────────────────────
$subject = "New Inquiry from $name — Raynetic Solutions";

$body = "
==============================================
  NEW CLIENT INQUIRY — Raynetic Solutions
==============================================

CONTACT DETAILS
---------------
Name:     $name
Email:    $email
Company:  $company
Phone:    " . ($phone ?: 'Not provided') . "

INQUIRY DETAILS
---------------
Service:  $service
Budget:   $budget
Newsletter Opt-in: $newsletter

MESSAGE
-------
$message

==============================================
Submitted: " . date('D, d M Y H:i:s T') . "
IP Address: " . ($_SERVER['REMOTE_ADDR'] ?? 'unknown') . "
==============================================
";

// Email headers
$headers  = "From: $TO_NAME <$FROM_EMAIL>\r\n";
$headers .= "Reply-To: $name <$email>\r\n";
$headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// ─────────────────────────────────────────
// Send Email
// ─────────────────────────────────────────
$sent = mail($TO_EMAIL, $subject, $body, $headers);

if ($sent) {
    // Send an auto-reply confirmation to the client
    $autoReplySubject = "We've received your inquiry — Raynetic Solutions";
    $autoReplyBody = "
Hi $name,

Thank you for reaching out to Raynetic Solutions!

We've received your inquiry and one of our senior consultants will review it and get back to you within 1 business day.

Here's a summary of what you submitted:
  - Service: $service
  - Budget: $budget

If your inquiry is urgent, feel free to reach us directly at:
  Email: $TO_EMAIL
  Phone: +61 7 3000 0000

Warm regards,
The Raynetic Solutions Team
Brisbane, QLD 4000, Australia
https://rayneticsolutions.com.au
";
    $autoReplyHeaders  = "From: $TO_NAME <$FROM_EMAIL>\r\n";
    $autoReplyHeaders .= "Reply-To: $TO_EMAIL\r\n";
    $autoReplyHeaders .= "Content-Type: text/plain; charset=UTF-8\r\n";

    mail($email, $autoReplySubject, $autoReplyBody, $autoReplyHeaders);

    http_response_code(200);
    echo json_encode(['ok' => true, 'message' => 'Message sent successfully.']);
} else {
    http_response_code(500);
    echo json_encode(['ok' => false, 'error' => 'Mail server error. Please try again or email us directly.']);
}
?>
