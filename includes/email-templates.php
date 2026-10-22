<?php
/**
 * Dehradun Defence College - Premium HTML Email Templates
 * 
 * Generates responsive, branded, high-conversion email templates
 * for admissions administrators and prospective cadets.
 */

if (!defined('SITE_NAME')) {
    require_once __DIR__ . '/../config.php';
}

/**
 * Generate Administrator Lead Notification Email HTML
 *
 * @param array $data Lead details
 * @return string HTML email content
 */
function ddc_build_admin_lead_email(array $data): string {
    $fullName         = htmlspecialchars($data['full_name'] ?? 'Candidate', ENT_QUOTES, 'UTF-8');
    $fatherName       = htmlspecialchars($data['father_name'] ?? '', ENT_QUOTES, 'UTF-8');
    $email            = htmlspecialchars($data['email'] ?? '', ENT_QUOTES, 'UTF-8');
    $mobile           = htmlspecialchars($data['mobile_number'] ?? $data['cleaned_mobile'] ?? '', ENT_QUOTES, 'UTF-8');
    $parentMobile     = htmlspecialchars($data['parent_mobile'] ?? '', ENT_QUOTES, 'UTF-8');
    $dob              = htmlspecialchars($data['dob'] ?? '', ENT_QUOTES, 'UTF-8');
    $gender           = htmlspecialchars($data['gender'] ?? 'Not Specified', ENT_QUOTES, 'UTF-8');
    $cityState        = htmlspecialchars($data['city_state'] ?? '', ENT_QUOTES, 'UTF-8');
    $courseInterest   = htmlspecialchars($data['course_interest'] ?? 'General Defence Admission', ENT_QUOTES, 'UTF-8');
    $educationLevel   = htmlspecialchars($data['education_level'] ?? 'Not Specified', ENT_QUOTES, 'UTF-8');
    $preferredContact = htmlspecialchars($data['preferred_contact'] ?? 'Call / WhatsApp', ENT_QUOTES, 'UTF-8');
    $message          = htmlspecialchars($data['message'] ?? '', ENT_QUOTES, 'UTF-8');
    $formType         = htmlspecialchars($data['form_type'] ?? 'enquiry', ENT_QUOTES, 'UTF-8');
    $leadId           = htmlspecialchars($data['lead_id'] ?? ('DDC_' . strtoupper(substr(md5(uniqid()), 0, 8))), ENT_QUOTES, 'UTF-8');
    $timestamp        = date('d M Y, h:i A') . ' IST';
    $ipAddress        = htmlspecialchars($data['ip_address'] ?? ($_SERVER['REMOTE_ADDR'] ?? 'UNKNOWN'), ENT_QUOTES, 'UTF-8');

    $isRegistration = ($formType === 'online_registration');
    $badgeText      = $isRegistration ? '🎖️ OFFICIAL ONLINE REGISTRATION' : '🔥 NEW ADMISSION LEAD';
    $portalLabel    = $isRegistration ? 'Online Registration Portal • Session 2026-2027' : 'Website Lead Generation Engine • Session 2026';
    $badgeBg        = $isRegistration ? '#FF9933' : '#D4AF37';

    $logoUrl = 'https://dehradundefencecollege.com/assets/images/logo.png';

    return "
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>" . ($isRegistration ? 'New Online Registration' : 'New Admission Lead') . "</title>
</head>
<body style='margin: 0; padding: 20px 10px; background-color: #0f172a; font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif; -webkit-font-smoothing: antialiased; line-height: 1.5;'>
    
    <!-- Outer Wrapper -->
    <table role='presentation' width='100%' border='0' cellspacing='0' cellpadding='0' style='max-width: 650px; margin: 0 auto; background-color: #ffffff; border-radius: 12px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.35); border: 1px solid #334155;'>
        
        <!-- Top Tricolor Ribbon -->
        <tr>
            <td style='height: 5px; background: linear-gradient(90deg, #FF9933 33.33%, #FFFFFF 33.33%, #FFFFFF 66.66%, #138808 66.66%);'></td>
        </tr>

        <!-- Branded Header -->
        <tr>
            <td style='background: linear-gradient(135deg, #07142b 0%, #0b1b3d 60%, #0f2756 100%); padding: 26px 28px; border-bottom: 3px solid #D4AF37;'>
                <table role='presentation' width='100%' border='0' cellspacing='0' cellpadding='0'>
                    <tr>
                        <td width='72' style='vertical-align: middle;'>
                            <img src='{$logoUrl}' alt='Dehradun Defence College' width='64' height='64' style='display: block; border-radius: 8px; border: 2px solid #D4AF37; background: #07142b; object-fit: contain;'>
                        </td>
                        <td style='padding-left: 16px; vertical-align: middle;'>
                            <div style='color: #FFD700; font-size: 11px; font-weight: 800; letter-spacing: 1.5px; text-transform: uppercase; margin-bottom: 3px;'>
                                {$portalLabel}
                            </div>
                            <h1 style='margin: 0; color: #FFFFFF; font-size: 22px; font-weight: 800; letter-spacing: 0.3px; line-height: 1.2;'>
                                Dehradun Defence College
                            </h1>
                            <div style='color: #cbd5e1; font-size: 12px; margin-top: 4px; font-weight: 500;'>
                                Uttarakhand's Premier Gurukul for NDA &bull; CDS &bull; SSB &bull; Foundation
                            </div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <!-- Alert Notification Bar -->
        <tr>
            <td style='background-color: #f8fafc; padding: 14px 28px; border-bottom: 1px solid #e2e8f0;'>
                <table role='presentation' width='100%' border='0' cellspacing='0' cellpadding='0'>
                    <tr>
                        <td style='vertical-align: middle;'>
                            <span style='display: inline-block; background-color: {$badgeBg}; color: #07142b; font-size: 11px; font-weight: 800; padding: 4px 10px; border-radius: 999px; letter-spacing: 0.5px;'>
                                {$badgeText}
                            </span>
                        </td>
                        <td align='right' style='vertical-align: middle; font-size: 12px; color: #64748b; font-weight: 600;'>
                            ID: <span style='color: #0b1b3d; font-family: monospace; font-size: 12px;'>{$leadId}</span>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <!-- Main Body -->
        <tr>
            <td style='padding: 24px 28px;'>
                
                <!-- Candidate Spotlight Hero Box -->
                <div style='background: linear-gradient(135deg, #f0f7ff 0%, #e2effe 100%); border-radius: 10px; padding: 18px 20px; border-left: 5px solid #0284c7; margin-bottom: 24px;'>
                    <div style='font-size: 11px; font-weight: 800; text-transform: uppercase; color: #0369a1; letter-spacing: 0.8px;'>
                        APPLICANT HIGHLIGHT
                    </div>
                    <div style='font-size: 22px; font-weight: 800; color: #0b1b3d; margin: 4px 0;'>
                        {$fullName}
                    </div>
                    <div style='display: inline-block; background-color: #0b1b3d; color: #FFD700; font-size: 12px; font-weight: 700; padding: 4px 12px; border-radius: 6px; margin-top: 4px;'>
                        Target Course: {$courseInterest}
                    </div>
                </div>

                <!-- Instant 1-Click Action Bar -->
                <div style='margin-bottom: 24px; text-align: center;'>
                    <table role='presentation' width='100%' border='0' cellspacing='0' cellpadding='0'>
                        <tr>
                            <td width='48%' style='padding-right: 6px;'>
                                <a href='https://wa.me/91{$mobile}?text=" . rawurlencode("Hello {$fullName}, Greetings from Dehradun Defence College! We received your admission registration for {$courseInterest}. How may we assist you with batch details and hostel admission?") . "' target='_blank' style='display: block; background-color: #25d366; color: #ffffff; text-decoration: none; padding: 12px 14px; border-radius: 8px; font-weight: 700; font-size: 13px; text-align: center; box-shadow: 0 4px 10px rgba(37,211,102,0.3);'>
                                    💬 Chat on WhatsApp (+91 {$mobile})
                                </a>
                            </td>
                            <td width='4%'></td>
                            <td width='48%' style='padding-left: 6px;'>
                                <a href='tel:+91{$mobile}' style='display: block; background-color: #0b1b3d; color: #ffffff; text-decoration: none; padding: 12px 14px; border-radius: 8px; font-weight: 700; font-size: 13px; text-align: center; box-shadow: 0 4px 10px rgba(11,27,61,0.25);'>
                                    📞 Call Candidate Now
                                </a>
                            </td>
                        </tr>
                    </table>
                </div>

                <!-- Full Lead Data Cards -->
                <div style='border: 1px solid #e2e8f0; border-radius: 10px; overflow: hidden; margin-bottom: 24px;'>
                    <div style='background-color: #0b1b3d; color: #ffffff; font-weight: 700; font-size: 13px; padding: 10px 16px; letter-spacing: 0.5px;'>
                        📋 COMPLETE APPLICATION DOSSIER
                    </div>
                    <table role='presentation' width='100%' border='0' cellspacing='0' cellpadding='0' style='font-size: 13px; border-collapse: collapse;'>
                        <tr style='border-bottom: 1px solid #f1f5f9; background-color: #ffffff;'>
                            <td width='35%' style='padding: 11px 16px; font-weight: 700; color: #475569;'>Candidate Name</td>
                            <td style='padding: 11px 16px; font-weight: 700; color: #0b1b3d;'>{$fullName}</td>
                        </tr>" . (!empty($fatherName) ? "
                        <tr style='border-bottom: 1px solid #f1f5f9; background-color: #f8fafc;'>
                            <td style='padding: 11px 16px; font-weight: 700; color: #475569;'>Father's / Guardian Name</td>
                            <td style='padding: 11px 16px; color: #0f172a;'>{$fatherName}</td>
                        </tr>" : "") . "
                        <tr style='border-bottom: 1px solid #f1f5f9; background-color: #ffffff;'>
                            <td style='padding: 11px 16px; font-weight: 700; color: #475569;'>Candidate Mobile</td>
                            <td style='padding: 11px 16px;'>
                                <a href='tel:+91{$mobile}' style='color: #0284c7; text-decoration: none; font-weight: 700;'>+91 {$mobile}</a>
                            </td>
                        </tr>" . (!empty($parentMobile) ? "
                        <tr style='border-bottom: 1px solid #f1f5f9; background-color: #f8fafc;'>
                            <td style='padding: 11px 16px; font-weight: 700; color: #475569;'>Parents / Alternate Mobile</td>
                            <td style='padding: 11px 16px;'>
                                <a href='tel:+91{$parentMobile}' style='color: #0284c7; text-decoration: none;'>+91 {$parentMobile}</a>
                            </td>
                        </tr>" : "") . "
                        <tr style='border-bottom: 1px solid #f1f5f9; background-color: #ffffff;'>
                            <td style='padding: 11px 16px; font-weight: 700; color: #475569;'>Email Address</td>
                            <td style='padding: 11px 16px;'>
                                <a href='mailto:{$email}' style='color: #0284c7; text-decoration: none;'>{$email}</a>
                            </td>
                        </tr>
                        <tr style='border-bottom: 1px solid #f1f5f9; background-color: #f8fafc;'>
                            <td style='padding: 11px 16px; font-weight: 700; color: #475569;'>Applied Course</td>
                            <td style='padding: 11px 16px; font-weight: 800; color: #0b1b3d;'>{$courseInterest}</td>
                        </tr>
                        <tr style='border-bottom: 1px solid #f1f5f9; background-color: #ffffff;'>
                            <td style='padding: 11px 16px; font-weight: 700; color: #475569;'>Current Education / Class</td>
                            <td style='padding: 11px 16px; color: #0f172a;'>{$educationLevel}</td>
                        </tr>" . (!empty($dob) ? "
                        <tr style='border-bottom: 1px solid #f1f5f9; background-color: #f8fafc;'>
                            <td style='padding: 11px 16px; font-weight: 700; color: #475569;'>Date of Birth</td>
                            <td style='padding: 11px 16px; color: #0f172a;'>{$dob}</td>
                        </tr>" : "") . ($gender !== 'Not Specified' ? "
                        <tr style='border-bottom: 1px solid #f1f5f9; background-color: #ffffff;'>
                            <td style='padding: 11px 16px; font-weight: 700; color: #475569;'>Gender</td>
                            <td style='padding: 11px 16px; color: #0f172a;'>{$gender}</td>
                        </tr>" : "") . (!empty($cityState) ? "
                        <tr style='border-bottom: 1px solid #f1f5f9; background-color: #f8fafc;'>
                            <td style='padding: 11px 16px; font-weight: 700; color: #475569;'>City / State</td>
                            <td style='padding: 11px 16px; color: #0f172a;'>{$cityState}</td>
                        </tr>" : "") . "
                        <tr style='border-bottom: 1px solid #f1f5f9; background-color: #ffffff;'>
                            <td style='padding: 11px 16px; font-weight: 700; color: #475569;'>Hostel Preference</td>
                            <td style='padding: 11px 16px; color: #0f172a; font-weight: 600;'>{$preferredContact}</td>
                        </tr>
                        <tr style='background-color: #f8fafc;'>
                            <td style='padding: 11px 16px; font-weight: 700; color: #475569; vertical-align: top;'>Candidate Message / Query</td>
                            <td style='padding: 11px 16px; color: #334155;'>
                                " . (empty($message) ? '<em style=\"color: #94a3b8;\">No specific message submitted</em>' : nl2br($message)) . "
                            </td>
                        </tr>
                    </table>
                </div>

                <!-- Admissions Counselor SOP Box -->
                <div style='background-color: #fefce8; border: 1px solid #fef08a; border-radius: 8px; padding: 14px 18px; margin-bottom: 20px;'>
                    <div style='color: #854d0e; font-size: 12px; font-weight: 800; margin-bottom: 4px;'>
                        ⚡ ADMISSION COUNSELOR SOP CHECKLIST:
                    </div>
                    <ol style='margin: 0; padding-left: 20px; font-size: 12px; color: #713f12; line-height: 1.6;'>
                        <li>Connect with applicant via Call/WhatsApp within <strong>24 business hours</strong>.</li>
                        <li>Brief about UPSC NDA 2026 written syllabus, daily physical drill & SSB GTO ground.</li>
                        <li>Confirm hostel requirement and schedule campus visit / scholarship test.</li>
                    </ol>
                </div>

                <!-- Submission Metadata -->
                <div style='font-size: 11px; color: #94a3b8; text-align: center;'>
                    Submitted on {$timestamp} &bull; Remote IP: {$ipAddress} &bull; Form: {$formType}
                </div>

            </td>
        </tr>

        <!-- Official Footer -->
        <tr>
            <td style='background-color: #0b1b3d; padding: 22px 28px; border-top: 2px solid #D4AF37; text-align: center; color: #cbd5e1; font-size: 12px;'>
                <div style='font-weight: 700; color: #FFD700; font-size: 13px; margin-bottom: 6px;'>
                    DEHRADUN DEFENCE COLLEGE
                </div>
                <div style='margin-bottom: 8px; line-height: 1.5; color: #94a3b8;'>
                    Maldevta Road, Near Laal Pull (Red Bridge), Lwarkha, Dehradun, Uttarakhand - 248008<br>
                    Helplines: <a href='tel:+919719104024' style='color: #FFD700; text-decoration: none;'>+91 9719104024</a> / <a href='tel:+918650666609' style='color: #FFD700; text-decoration: none;'>+91 8650666609</a> &bull; Email: <a href='mailto:dehradundefencecollege@gmail.com' style='color: #FFD700; text-decoration: none;'>dehradundefencecollege@gmail.com</a>
                </div>
                <div style='font-size: 11px; color: #64748b; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 8px;'>
                    © " . date('Y') . " Dehradun Defence College. Confidential Admissions Lead Document.
                </div>
            </td>
        </tr>

    </table>

</body>
</html>
";
}

/**
 * Generate Candidate Auto-Acknowledgement Welcome Email HTML
 *
 * @param array $data Lead details
 * @return string HTML email content
 */
function ddc_build_student_welcome_email(array $data): string {
    $fullName       = htmlspecialchars($data['full_name'] ?? 'Candidate', ENT_QUOTES, 'UTF-8');
    $courseInterest = htmlspecialchars($data['course_interest'] ?? 'Defence Preparation', ENT_QUOTES, 'UTF-8');
    $leadId         = htmlspecialchars($data['lead_id'] ?? ('DDC_' . strtoupper(substr(md5(uniqid()), 0, 8))), ENT_QUOTES, 'UTF-8');
    $logoUrl        = 'https://dehradundefencecollege.com/assets/images/logo.png';

    return "
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Registration Confirmation - Dehradun Defence College</title>
</head>
<body style='margin: 0; padding: 20px 10px; background-color: #f1f5f9; font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif; line-height: 1.6;'>
    
    <table role='presentation' width='100%' border='0' cellspacing='0' cellpadding='0' style='max-width: 600px; margin: 0 auto; background-color: #ffffff; border-radius: 12px; overflow: hidden; box-shadow: 0 8px 24px rgba(0,0,0,0.08); border: 1px solid #e2e8f0;'>
        
        <!-- Tricolor Stripe -->
        <tr>
            <td style='height: 4px; background: linear-gradient(90deg, #FF9933 33.33%, #FFFFFF 33.33%, #FFFFFF 66.66%, #138808 66.66%);'></td>
        </tr>

        <!-- Header -->
        <tr>
            <td style='background: linear-gradient(135deg, #07142b 0%, #0b1b3d 100%); padding: 28px 24px; text-align: center; border-bottom: 3px solid #D4AF37;'>
                <img src='{$logoUrl}' alt='Dehradun Defence College' width='70' height='70' style='display: block; margin: 0 auto 12px auto; border-radius: 8px; border: 2px solid #D4AF37; background: #07142b; object-fit: contain;'>
                <h1 style='margin: 0; color: #FFFFFF; font-size: 22px; font-weight: 800; letter-spacing: 0.5px;'>
                    Dehradun Defence College
                </h1>
                <p style='margin: 6px 0 0; color: #FFD700; font-size: 13px; font-weight: 600;'>
                    Where Excellence Meets Uniform &bull; Dehradun, Uttarakhand
                </p>
            </td>
        </tr>

        <!-- Body Content -->
        <tr>
            <td style='padding: 28px 24px; color: #334155;'>
                
                <p style='font-size: 17px; font-weight: 700; color: #0b1b3d; margin-top: 0;'>
                    Dear {$fullName},
                </p>

                <p style='font-size: 14px; line-height: 1.6;'>
                    Thank you for applying to <strong>Dehradun Defence College</strong>! We have successfully registered your admission application for <strong>{$courseInterest}</strong>.
                </p>

                <!-- Confirmation Card -->
                <div style='background-color: #f8fafc; border-radius: 8px; padding: 16px; border: 1px solid #e2e8f0; margin: 20px 0;'>
                    <div style='font-size: 12px; color: #64748b; font-weight: 600;'>Application Reference ID:</div>
                    <div style='font-size: 16px; font-weight: 800; color: #0b1b3d; font-family: monospace;'>{$leadId}</div>
                    <div style='font-size: 12px; color: #0284c7; font-weight: 700; margin-top: 6px;'>Program: {$courseInterest}</div>
                </div>

                <h3 style='color: #0b1b3d; font-size: 15px; margin: 20px 0 8px 0;'>What Happens Next?</h3>
                <ul style='margin: 0 0 20px 0; padding-left: 20px; font-size: 13px; color: #475569; line-height: 1.7;'>
                    <li>Our Senior Defence Admission Mentor will call you within <strong>24 business hours</strong> to guide you through eligibility, syllabus, batch schedules, and scholarship grants.</li>
                    <li>You and your parents are warmly invited to visit our <strong>dedicated campus & Gurukul hostels</strong> in Dehradun to experience real obstacle grounds and meet ex-military instructors.</li>
                </ul>

                <!-- Direct WhatsApp Helpdesk Button -->
                <div style='text-align: center; margin: 26px 0;'>
                    <a href='https://wa.me/919719104024?text=" . rawurlencode("Hello Admissions Team, my application reference is {$leadId}. I have registered for {$courseInterest} and would like more details.") . "' style='display: inline-block; background-color: #25d366; color: #ffffff; text-decoration: none; padding: 12px 24px; border-radius: 8px; font-weight: 700; font-size: 14px; box-shadow: 0 4px 12px rgba(37,211,102,0.35);'>
                        💬 Connect with Us on WhatsApp (+91 9719104024)
                    </a>
                </div>

                <!-- Contact Box -->
                <div style='background-color: #f0fdf4; border: 1px solid #bbf7d0; border-radius: 8px; padding: 14px 16px; font-size: 13px; color: #166534;'>
                    <strong>Admissions Helpline Contacts:</strong><br>
                    📞 Phone: +91 9719104024 / +91 8650666609<br>
                    📍 Campus: Maldevta Road, Near Laal Pull, Lwarkha, Dehradun, Uttarakhand<br>
                    🌐 Website: <a href='https://dehradundefencecollege.com' style='color: #166534;'>dehradundefencecollege.com</a>
                </div>

                <p style='margin-top: 24px; margin-bottom: 0; font-size: 13px;'>
                    Wishing you supreme success in your uniform journey,<br>
                    <strong>Directorate of Admissions</strong><br>
                    Dehradun Defence College
                </p>

            </td>
        </tr>

        <!-- Footer -->
        <tr>
            <td style='background-color: #0b1b3d; padding: 16px; text-align: center; color: #94a3b8; font-size: 11px;'>
                © " . date('Y') . " Dehradun Defence College. Excellence is our only aim.
            </td>
        </tr>

    </table>

</body>
</html>
";
}
