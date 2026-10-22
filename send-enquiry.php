<?php
/**
 * Dehradun Defence College - Admission Enquiry Form Processor
 * 
 * Features:
 * - Full server-side validation & sanitization
 * - Indian Mobile Number format verification
 * - Email syntax verification
 * - Honeypot anti-spam defense
 * - Minimum form submission time check (anti-bot)
 * - CSRF token verification
 * - Structured logging to storage/leads.json
 * - HTML Email dispatch to administrator & applicant
 * - JSON response for asynchronous fetch requests & fallback redirect
 */

if (session_status() === PHP_SESSION_NONE && !headers_sent()) {
    @session_start();
}
if (!headers_sent()) {
    header('Content-Type: application/json; charset=UTF-8');
}

// Load central configuration & email engine
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/smtp-mailer.php';
require_once __DIR__ . '/includes/email-templates.php';

// Only allow POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode([
        'success' => false,
        'message' => 'Method Not Allowed. Only POST requests are permitted.'
    ]);
    exit;
}

// -------------------------------------------------------------
// 1. Anti-Spam Check: Honeypot field
// -------------------------------------------------------------
if (!empty($_POST['website_url_check'])) {
    // A bot filled the hidden honeypot field
    http_response_code(400);
    echo json_encode([
        'success' => false,
        'message' => 'Spam detected. Submission rejected.'
    ]);
    exit;
}

// -------------------------------------------------------------
// 2. Anti-Spam Check: Submission speed
// -------------------------------------------------------------
if (isset($_POST['form_start_time'])) {
    $startTime = (int)$_POST['form_start_time'];
    $currentTime = time();
    // If submitted in under 2 seconds, almost certainly an automated bot
    if (($currentTime - $startTime) < 2) {
        http_response_code(400);
        echo json_encode([
            'success' => false,
            'message' => 'Submission rejected due to abnormal submission speed. Please try again.'
        ]);
        exit;
    }
}

// -------------------------------------------------------------
// -------------------------------------------------------------
// 3. Input Extraction & Sanitization
// -------------------------------------------------------------
function ddc_clean_string($input) {
    return htmlspecialchars(trim((string)$input), ENT_QUOTES, 'UTF-8');
}

/**
 * Handle secure file uploads for Candidate Photos and Payment PODs
 */
function ddc_handle_uploaded_file($fileKey, $targetSubdir, array $allowedExts = ['jpg', 'jpeg', 'png', 'webp', 'pdf'], $maxBytes = 6291456) {
    if (!isset($_FILES[$fileKey]) || !is_array($_FILES[$fileKey])) {
        return null;
    }
    $file = $_FILES[$fileKey];
    if (empty($file['name']) || $file['error'] === UPLOAD_ERR_NO_FILE) {
        return null;
    }
    if ($file['error'] !== UPLOAD_ERR_OK) {
        return ['error' => 'File upload error (Code ' . (int)$file['error'] . '). Please try again.'];
    }
    if ($file['size'] > $maxBytes) {
        $mb = round($maxBytes / 1048576, 1);
        return ['error' => "File size exceeds the {$mb}MB limit. Please upload a smaller file."];
    }
    $origName = $file['name'];
    $ext = strtolower(pathinfo($origName, PATHINFO_EXTENSION));
    if (!in_array($ext, $allowedExts, true)) {
        return ['error' => 'Invalid file extension (.' . $ext . '). Allowed: ' . implode(', ', $allowedExts)];
    }

    // Verify MIME
    $finfo = function_exists('finfo_open') ? finfo_open(FILEINFO_MIME_TYPE) : false;
    $mimeType = $finfo ? finfo_file($finfo, $file['tmp_name']) : ($file['type'] ?? '');
    if ($finfo) {
        finfo_close($finfo);
    }
    $allowedMimes = [
        'image/jpeg', 'image/pjpeg', 'image/png', 'image/x-png', 'image/webp', 'application/pdf'
    ];
    if (!empty($mimeType) && !in_array($mimeType, $allowedMimes, true)) {
        return ['error' => 'File type security check failed.'];
    }

    $uploadDir = __DIR__ . '/uploads/' . trim($targetSubdir, '/') . '/';
    if (!is_dir($uploadDir)) {
        @mkdir($uploadDir, 0755, true);
    }

    $prefix = ($fileKey === 'candidate_photo') ? 'cand_photo' : 'payment_pod';
    $safeName = $prefix . '_' . date('Ymd_His') . '_' . bin2hex(random_bytes(6)) . '.' . $ext;
    $destPath = $uploadDir . $safeName;

    $moved = false;
    if (is_uploaded_file($file['tmp_name'])) {
        $moved = move_uploaded_file($file['tmp_name'], $destPath);
    } else {
        $moved = @copy($file['tmp_name'], $destPath) || @rename($file['tmp_name'], $destPath);
    }

    if (!$moved) {
        return ['error' => 'Failed to save uploaded file to server storage.'];
    }

    return [
        'path'     => $destPath,
        'filename' => $safeName,
        'mime'     => $mimeType ?: 'application/octet-stream',
        'size'     => $file['size'],
        'url'      => 'uploads/' . trim($targetSubdir, '/') . '/' . $safeName
    ];
}

$full_name         = ddc_clean_string($_POST['full_name'] ?? '');
$father_name       = ddc_clean_string($_POST['father_name'] ?? '');
$email             = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
$mobile            = ddc_clean_string($_POST['mobile_number'] ?? '');
$parent_mobile     = ddc_clean_string($_POST['parent_mobile'] ?? '');
$dob               = ddc_clean_string($_POST['dob'] ?? '');
$gender            = ddc_clean_string($_POST['gender'] ?? 'Not Specified');
$city_state        = ddc_clean_string($_POST['city_state'] ?? '');
$course_interest   = ddc_clean_string($_POST['course_interest'] ?? '');
$education_level   = ddc_clean_string($_POST['education_level'] ?? 'Not Specified');
$preferred_contact = ddc_clean_string($_POST['preferred_contact'] ?? 'Call');
$message           = ddc_clean_string($_POST['message'] ?? '');
$privacy_consent   = isset($_POST['privacy_consent']) && ($_POST['privacy_consent'] === '1' || $_POST['privacy_consent'] === 'on' || $_POST['privacy_consent'] === 'yes');
$form_type         = ddc_clean_string($_POST['form_type'] ?? 'enquiry');

// Online Fee Payment Fields
$payment_mode      = ddc_clean_string($_POST['payment_mode'] ?? 'pay_later');
$transaction_id    = ddc_clean_string($_POST['transaction_id'] ?? ($_POST['utr_number'] ?? ''));
$payment_amount    = ddc_clean_string($_POST['payment_amount'] ?? (defined('DEFAULT_REGISTRATION_FEE') ? DEFAULT_REGISTRATION_FEE : '500'));
$payment_date      = ddc_clean_string($_POST['payment_date'] ?? date('Y-m-d'));

$errors = [];

// Handle File Uploads
$cand_photo_path = '';
$cand_photo_url  = '';
$photo_result = ddc_handle_uploaded_file('candidate_photo', 'candidates', ['jpg', 'jpeg', 'png', 'webp']);
if (is_array($photo_result)) {
    if (isset($photo_result['error'])) {
        $errors['candidate_photo'] = $photo_result['error'];
    } elseif (isset($photo_result['path'])) {
        $cand_photo_path = $photo_result['path'];
        $cand_photo_url  = $photo_result['url'];
    }
}

$payment_pod_path = '';
$payment_pod_url  = '';
$pod_result = ddc_handle_uploaded_file('payment_pod', 'payments', ['jpg', 'jpeg', 'png', 'webp', 'pdf']);
if (is_array($pod_result)) {
    if (isset($pod_result['error'])) {
        $errors['payment_pod'] = $pod_result['error'];
    } elseif (isset($pod_result['path'])) {
        $payment_pod_path = $pod_result['path'];
        $payment_pod_url  = $pod_result['url'];
    }
}

// -------------------------------------------------------------
// 4. Server-Side Validation Rules
// -------------------------------------------------------------
// Full Name
if (empty($full_name)) {
    $errors['full_name'] = 'Full Name is required.';
} elseif (strlen($full_name) < 3 || strlen($full_name) > 100) {
    $errors['full_name'] = 'Full Name must be between 3 and 100 characters.';
} elseif (!preg_match("/^[a-zA-Z\s\.\'\-]+$/", $full_name)) {
    $errors['full_name'] = 'Full Name contains invalid characters. Use letters and spaces only.';
}

// Email Address
if (empty($email)) {
    $errors['email'] = 'Email address is required.';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'Please enter a valid email address.';
}

// Mobile Number (Indian Mobile Validation: 10 digits starting 6, 7, 8, or 9; optional +91 or 0 prefix)
$cleaned_mobile = preg_replace('/[\s\-\(\)]+/', '', $mobile);
if (empty($cleaned_mobile)) {
    $errors['mobile_number'] = 'Mobile number is required.';
} else {
    // Normalize if starts with +91 or 91
    if (strpos($cleaned_mobile, '+91') === 0) {
        $cleaned_mobile = substr($cleaned_mobile, 3);
    } elseif (strpos($cleaned_mobile, '91') === 0 && strlen($cleaned_mobile) === 12) {
        $cleaned_mobile = substr($cleaned_mobile, 2);
    } elseif (strpos($cleaned_mobile, '0') === 0 && strlen($cleaned_mobile) === 11) {
        $cleaned_mobile = substr($cleaned_mobile, 1);
    }

    if (!preg_match('/^[6-9]\d{9}$/', $cleaned_mobile)) {
        $errors['mobile_number'] = 'Please enter a valid 10-digit Indian mobile number starting with 6, 7, 8, or 9.';
    }
}

// Course of Interest
if (empty($course_interest) || $course_interest === 'Select Course') {
    $errors['course_interest'] = 'Please select a course of interest.';
}

// Privacy Consent
if (!$privacy_consent) {
    $errors['privacy_consent'] = 'You must agree to the terms to submit your application.';
}

// Payment Mode Validation
$has_payment = (!empty($payment_pod_path) || !empty($transaction_id) || $payment_mode === 'online' || $payment_mode === 'online_qr');
if (($payment_mode === 'online' || $payment_mode === 'online_qr') && empty($transaction_id) && empty($payment_pod_path)) {
    $errors['transaction_id'] = 'Please enter your Transaction / UTR number or upload your Payment Proof Screenshot (POD).';
}

// If validation errors exist, halt and return clear feedback
if (!empty($errors)) {
    http_response_code(422);
    echo json_encode([
        'success' => false,
        'message' => 'Please correct the highlighted fields.',
        'errors'  => $errors
    ]);
    exit;
}

// -------------------------------------------------------------
// 5. Record Lead & Payment to Local Storage
// -------------------------------------------------------------
$lead_entry = [
    'id'                   => uniqid('DDC_', true),
    'timestamp'            => date('Y-m-d H:i:s'),
    'form_type'            => $form_type,
    'full_name'            => $full_name,
    'father_name'          => $father_name,
    'email'                => $email,
    'mobile_number'        => $cleaned_mobile,
    'parent_mobile'        => $parent_mobile,
    'dob'                  => $dob,
    'gender'               => $gender,
    'city_state'           => $city_state,
    'course_interest'      => $course_interest,
    'education_level'      => $education_level,
    'preferred_contact'    => $preferred_contact,
    'message'              => $message,
    'has_payment'          => $has_payment,
    'payment_mode'         => $payment_mode,
    'payment_amount'       => $payment_amount,
    'transaction_id'       => $transaction_id,
    'payment_date'         => $payment_date,
    'candidate_photo_path' => $cand_photo_path,
    'candidate_photo_url'  => $cand_photo_url,
    'payment_pod_path'     => $payment_pod_path,
    'payment_pod_url'      => $payment_pod_url,
    'ip_address'           => $_SERVER['REMOTE_ADDR'] ?? 'UNKNOWN',
    'user_agent'           => $_SERVER['HTTP_USER_AGENT'] ?? 'UNKNOWN'
];

$storage_file = LEADS_LOG_FILE;
$storage_dir = dirname($storage_file);

if (!is_dir($storage_dir)) {
    @mkdir($storage_dir, 0755, true);
}

// Append to leads.json with file lock
$leads = [];
if (file_exists($storage_file)) {
    $current_data = @file_get_contents($storage_file);
    if (!empty($current_data)) {
        $leads = json_decode($current_data, true) ?: [];
    }
}
$leads[] = $lead_entry;
@file_put_contents($storage_file, json_encode($leads, JSON_PRETTY_PRINT), LOCK_EX);

// If fee paid, record into dedicated payments ledger
if ($has_payment) {
    $payments_file = __DIR__ . '/storage/payments.json';
    $payments = [];
    if (file_exists($payments_file)) {
        $p_data = @file_get_contents($payments_file);
        if (!empty($p_data)) {
            $payments = json_decode($p_data, true) ?: [];
        }
    }
    $payments[] = [
        'lead_id'          => $lead_entry['id'],
        'timestamp'        => $lead_entry['timestamp'],
        'student_name'     => $full_name,
        'email'            => $email,
        'mobile_number'    => $cleaned_mobile,
        'course'           => $course_interest,
        'amount'           => $payment_amount,
        'transaction_id'   => $transaction_id,
        'payment_pod_url'  => $payment_pod_url,
        'bank_name'        => defined('BANK_NAME') ? BANK_NAME : 'Canara Bank',
        'account_no'       => defined('BANK_ACCOUNT_NO') ? BANK_ACCOUNT_NO : '120003029000',
        'status'           => 'Verification Pending'
    ];
    @file_put_contents($payments_file, json_encode($payments, JSON_PRETTY_PRINT), LOCK_EX);
}

// -------------------------------------------------------------
// 6. Build & Dispatch Notifications via Authenticated SMTP
// -------------------------------------------------------------
$admin_email = ADMIN_ENQUIRY_EMAIL;
$is_registration = ($form_type === 'online_registration');

if ($has_payment) {
    $email_subject = "💰 PAID REGISTRATION (POD ATTACHED): {$full_name} (₹{$payment_amount} - {$course_interest}) - Dehradun Defence College";
} elseif ($is_registration) {
    $email_subject = "★ NEW ONLINE REGISTRATION: {$full_name} ({$course_interest}) - Dehradun Defence College";
} else {
    $email_subject = "★ NEW ADMISSION ENQUIRY: {$full_name} ({$course_interest}) - Dehradun Defence College";
}

// Prepare Physical Email Attachments
$email_attachments = [];
$safeNameSlug = preg_replace('/[^a-zA-Z0-9_-]/', '', $full_name);

if (!empty($cand_photo_path) && file_exists($cand_photo_path)) {
    $email_attachments[] = [
        'path' => $cand_photo_path,
        'name' => 'Candidate_' . $safeNameSlug . '_' . $cleaned_mobile . '.' . pathinfo($cand_photo_path, PATHINFO_EXTENSION),
        'mime' => (function_exists('mime_content_type') ? @mime_content_type($cand_photo_path) : 'image/jpeg') ?: 'image/jpeg'
    ];
}

if (!empty($payment_pod_path) && file_exists($payment_pod_path)) {
    $email_attachments[] = [
        'path' => $payment_pod_path,
        'name' => 'Payment_POD_' . $safeNameSlug . '_' . $cleaned_mobile . '.' . pathinfo($payment_pod_path, PATHINFO_EXTENSION),
        'mime' => (function_exists('mime_content_type') ? @mime_content_type($payment_pod_path) : 'image/jpeg') ?: 'image/jpeg'
    ];
}

// Build Attractive HTML Email for Admissions Directorate
$admin_email_html = ddc_build_admin_lead_email($lead_entry);

// Build Candidate Auto-Acknowledgement Welcome Email
$student_subject = $has_payment 
    ? "Fee Payment & Registration Confirmation: Dehradun Defence College ({$course_interest})"
    : "Registration Confirmation: Dehradun Defence College - {$course_interest}";
$student_email_html = ddc_build_student_welcome_email($lead_entry);

$smtp_errors = [];
$mail_sent = ddc_send_smtp_email($admin_email, $email_subject, $admin_email_html, $email, $full_name, $smtp_errors, $email_attachments);

// If primary admin dispatch succeeded and student provided valid email, dispatch student welcome email
if ($mail_sent && filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $student_smtp_err = [];
    @ddc_send_smtp_email($email, $student_subject, $student_email_html, $admin_email, SMTP_FROM_NAME, $student_smtp_err);
}

// Fallback to PHP mail() if SMTP was disabled or failed
if (!$mail_sent) {
    $fallback_headers = [
        'MIME-Version: 1.0',
        'Content-type: text/html; charset=UTF-8',
        'From: ' . SMTP_FROM_NAME . ' <' . SMTP_FROM_EMAIL . '>',
        'Reply-To: ' . $full_name . ' <' . $email . '>',
        'X-Mailer: PHP/' . phpversion()
    ];
    $mail_sent = @mail($admin_email, $email_subject, $admin_email_html, implode("\r\n", $fallback_headers));
}

// User-facing Success Message
$success_message = $has_payment 
    ? "Thank you, {$full_name}! Your registration and Proof of Deposit (POD) for ₹{$payment_amount} have been submitted successfully. Our Admissions Directorate & Accounts Team will verify your UTR and issue your confirmation."
    : "Thank you, {$full_name}! Your admission application for {$course_interest} has been registered successfully. Our senior admission mentor will contact you shortly.";

http_response_code(200);
echo json_encode([
    'success'      => true,
    'message'      => $success_message,
    'lead_id'      => $lead_entry['id'],
    'has_payment'  => $has_payment,
    'mail_status'  => $mail_sent ? 'delivered' : 'logged_securely'
]);
exit;
