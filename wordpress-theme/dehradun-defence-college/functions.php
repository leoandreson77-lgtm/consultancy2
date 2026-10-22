<?php
/**
 * Dehradun Defence College - Theme Functions & Definitions
 * 
 * @package Dehradun_Defence_College
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

// Load Admission Email Engine & SMTP Mailer
if (file_exists(get_template_directory() . '/includes/email-templates.php')) {
    require_once get_template_directory() . '/includes/email-templates.php';
}
if (file_exists(get_template_directory() . '/includes/smtp-mailer.php')) {
    require_once get_template_directory() . '/includes/smtp-mailer.php';
}

/**
 * Configure WordPress to dispatch emails via official Gmail SMTP
 */
function ddc_configure_phpmailer_smtp($phpmailer) {
    $phpmailer->isSMTP();
    $phpmailer->Host       = 'smtp.gmail.com';
    $phpmailer->SMTPAuth   = true;
    $phpmailer->Port       = 465;
    $phpmailer->SMTPSecure = 'ssl';
    $phpmailer->Username   = 'dehradundefencecollege@gmail.com';
    $phpmailer->Password   = 'owspotavnlkavvxp';
    $phpmailer->From       = 'dehradundefencecollege@gmail.com';
    $phpmailer->FromName   = 'Dehradun Defence College Admissions';
}
add_action('phpmailer_init', 'ddc_configure_phpmailer_smtp');

/**
 * Theme Setup
 */
function ddc_theme_setup() {
    // Make theme available for translation
    load_theme_textdomain('dehradun-defence-college', get_template_directory() . '/languages');

    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(800, 500, true);
    add_image_size('ddc-course-thumb', 600, 380, true);
    add_image_size('ddc-square', 400, 400, true);

    // Register Navigation Menus
    register_nav_menus([
        'primary-menu' => __('Primary Navigation Menu', 'dehradun-defence-college'),
        'footer-courses' => __('Footer Courses Menu', 'dehradun-defence-college'),
        'footer-links'   => __('Footer Useful Links', 'dehradun-defence-college')
    ]);

    // Switch default core markup to output valid HTML5
    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script'
    ]);

    // Custom Logo support
    add_theme_support('custom-logo', [
        'height'      => 80,
        'width'       => 280,
        'flex-height' => true,
        'flex-width'  => true,
    ]);

    // Responsive embeds
    add_theme_support('responsive-embeds');
}
add_action('after_setup_theme', 'ddc_theme_setup');

/**
 * Enqueue Styles and Scripts
 */
function ddc_enqueue_scripts() {
    // Google Fonts: Outfit and Inter
    wp_enqueue_style(
        'ddc-google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@400;500;600;700;800;900&display=swap',
        [],
        null
    );

    // Main Theme Stylesheet
    wp_enqueue_style(
        'ddc-main-style',
        get_template_directory_uri() . '/assets/css/style.css',
        ['ddc-google-fonts'],
        '1.0.0'
    );

    // WordPress Root Theme Style
    wp_enqueue_style(
        'ddc-theme-style',
        get_stylesheet_uri(),
        ['ddc-main-style'],
        '1.0.0'
    );

    // Frontend Main JavaScript
    wp_enqueue_script(
        'ddc-main-script',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        '1.0.0',
        true
    );

    // Localize Script for AJAX Form Handler
    wp_localize_script('ddc-main-script', 'ddc_vars', [
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce'    => wp_create_nonce('ddc_enquiry_nonce')
    ]);
}
add_action('wp_enqueue_scripts', 'ddc_enqueue_scripts');

/**
 * Register Custom Post Types: Courses, Testimonials, Achievers
 */
function ddc_register_custom_post_types() {
    // 1. Courses CPT
    register_post_type('ddc_course', [
        'labels' => [
            'name'               => __('Courses', 'dehradun-defence-college'),
            'singular_name'      => __('Course', 'dehradun-defence-college'),
            'add_new'            => __('Add New Course', 'dehradun-defence-college'),
            'add_new_item'       => __('Add New Defence Course', 'dehradun-defence-college'),
            'edit_item'          => __('Edit Course', 'dehradun-defence-college'),
            'all_items'          => __('All Defence Courses', 'dehradun-defence-college'),
        ],
        'public'             => true,
        'has_archive'        => true,
        'menu_icon'          => 'dashicons-welcome-learn-more',
        'rewrite'            => ['slug' => 'defence-courses'],
        'supports'           => ['title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'],
        'show_in_rest'       => true,
    ]);

    // Course Category Taxonomy
    register_taxonomy('ddc_course_category', ['ddc_course'], [
        'labels' => [
            'name'          => __('Course Categories', 'dehradun-defence-college'),
            'singular_name' => __('Course Category', 'dehradun-defence-college'),
        ],
        'hierarchical'      => true,
        'show_in_rest'      => true,
        'rewrite'           => ['slug' => 'course-category'],
    ]);

    // 2. Testimonials CPT
    register_post_type('ddc_testimonial', [
        'labels' => [
            'name'          => __('Testimonials', 'dehradun-defence-college'),
            'singular_name' => __('Testimonial', 'dehradun-defence-college'),
            'add_new_item'  => __('Add New Testimonial', 'dehradun-defence-college'),
        ],
        'public'        => true,
        'menu_icon'     => 'dashicons-testimonial',
        'supports'      => ['title', 'editor', 'thumbnail', 'custom-fields'],
        'show_in_rest'  => true,
    ]);

    // 3. Results / Achievers CPT
    register_post_type('ddc_achiever', [
        'labels' => [
            'name'          => __('Hall of Fame / Achievers', 'dehradun-defence-college'),
            'singular_name' => __('Achiever', 'dehradun-defence-college'),
            'add_new_item'  => __('Add New Achiever', 'dehradun-defence-college'),
        ],
        'public'        => true,
        'menu_icon'     => 'dashicons-awards',
        'supports'      => ['title', 'editor', 'thumbnail', 'custom-fields'],
        'show_in_rest'  => true,
    ]);
}
add_action('init', 'ddc_register_custom_post_types');

/**
 * Customizer Settings for Contact Information & Leadership
 */
function ddc_customize_register($wp_customize) {
    // Add Contact Section
    $wp_customize->add_section('ddc_contact_section', [
        'title'    => __('Academy Contact Information', 'dehradun-defence-college'),
        'priority' => 30,
    ]);

    // Primary Phone Number
    $wp_customize->add_setting('ddc_phone_1', [
        'default'           => '+91 9719104024',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('ddc_phone_1', [
        'label'    => __('Primary Contact Phone', 'dehradun-defence-college'),
        'section'  => 'ddc_contact_section',
        'type'     => 'text',
    ]);

    // Secondary Phone Number
    $wp_customize->add_setting('ddc_phone_2', [
        'default'           => '+91 8650666609',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('ddc_phone_2', [
        'label'    => __('Secondary Contact Phone', 'dehradun-defence-college'),
        'section'  => 'ddc_contact_section',
        'type'     => 'text',
    ]);

    // WhatsApp Number
    $wp_customize->add_setting('ddc_whatsapp', [
        'default'           => '919719104024',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('ddc_whatsapp', [
        'label'    => __('WhatsApp Number (with Country Code)', 'dehradun-defence-college'),
        'section'  => 'ddc_contact_section',
        'type'     => 'text',
    ]);

    // Official Email
    $wp_customize->add_setting('ddc_email', [
        'default'           => 'dehradundefencecollege@gmail.com',
        'sanitize_callback' => 'sanitize_email',
    ]);
    $wp_customize->add_control('ddc_email', [
        'label'    => __('Official Admission Email', 'dehradun-defence-college'),
        'section'  => 'ddc_contact_section',
        'type'     => 'email',
    ]);

    // Campus Physical Address
    $wp_customize->add_setting('ddc_address', [
        'default'           => 'Maldevta Road, Near Laal Pull (Red Bridge), Lwarkha, Dehradun, Uttarakhand - 248008',
        'sanitize_callback' => 'sanitize_textarea_field',
    ]);
    $wp_customize->add_control('ddc_address', [
        'label'    => __('Campus Physical Address', 'dehradun-defence-college'),
        'section'  => 'ddc_contact_section',
        'type'     => 'textarea',
    ]);

    // Office Hours
    $wp_customize->add_setting('ddc_office_hours', [
        'default'           => 'Monday - Sunday: 8:00 AM - 6:00 PM',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('ddc_office_hours', [
        'label'    => __('Admissions Office Hours', 'dehradun-defence-college'),
        'section'  => 'ddc_contact_section',
        'type'     => 'text',
    ]);
}
add_action('customize_register', 'ddc_customize_register');

/**
 * WordPress AJAX Handler for Admission Enquiry & Online Registration Form
 */
function ddc_ajax_submit_enquiry_handler() {
    // Verify request
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        wp_send_json_error(['message' => 'Invalid request method.'], 405);
    }

    // Anti-Spam Check: Honeypot
    if (!empty($_POST['website_url_check'])) {
        wp_send_json_error(['message' => 'Spam submission rejected.'], 400);
    }

    // Input sanitization
    $full_name         = sanitize_text_field($_POST['full_name'] ?? '');
    $father_name       = sanitize_text_field($_POST['father_name'] ?? '');
    $email             = sanitize_email($_POST['email'] ?? '');
    $mobile            = sanitize_text_field($_POST['mobile_number'] ?? '');
    $parent_mobile     = sanitize_text_field($_POST['parent_mobile'] ?? '');
    $dob               = sanitize_text_field($_POST['dob'] ?? '');
    $gender            = sanitize_text_field($_POST['gender'] ?? 'Not Specified');
    $course_interest   = sanitize_text_field($_POST['course_interest'] ?? '');
    $education_level   = sanitize_text_field($_POST['education_level'] ?? 'Not Specified');
    $city_state        = sanitize_text_field($_POST['city_state'] ?? '');
    $preferred_contact = sanitize_text_field($_POST['preferred_contact'] ?? 'Call / WhatsApp');
    $message           = sanitize_textarea_field($_POST['message'] ?? '');
    $form_type         = sanitize_text_field($_POST['form_type'] ?? 'enquiry');

    $errors = [];

    // Validation
    if (strlen($full_name) < 3) {
        $errors['full_name'] = 'Full Name must be at least 3 characters.';
    }
    if (!is_email($email)) {
        $errors['email'] = 'Valid email address required.';
    }

    $clean_mobile = preg_replace('/[^\d]/', '', $mobile);
    if (!preg_match('/^[6-9]\d{9}$/', substr($clean_mobile, -10))) {
        $errors['mobile_number'] = 'Please provide a valid 10-digit Indian mobile number.';
    }

    if (empty($course_interest) || $course_interest === 'Select Course') {
        $errors['course_interest'] = 'Please select a course.';
    }

    if (!empty($errors)) {
        wp_send_json_error([
            'message' => 'Please correct the highlighted form errors.',
            'errors'  => $errors
        ], 422);
    }

    // Normalized 10-digit mobile number
    $normalized_mobile = substr($clean_mobile, -10);

    // Construct lead data structure for templates & logging
    $lead_entry = [
        'lead_id'           => 'DDC_' . strtoupper(substr(md5(uniqid()), 0, 8)),
        'timestamp'         => current_time('mysql'),
        'form_type'         => $form_type,
        'full_name'         => $full_name,
        'father_name'       => $father_name,
        'email'             => $email,
        'mobile_number'     => $normalized_mobile,
        'parent_mobile'     => $parent_mobile,
        'dob'               => $dob,
        'gender'            => $gender,
        'city_state'        => $city_state,
        'course_interest'   => $course_interest,
        'education_level'   => $education_level,
        'preferred_contact' => $preferred_contact,
        'message'           => $message,
        'ip_address'        => $_SERVER['REMOTE_ADDR'] ?? 'UNKNOWN',
    ];

    $admin_email = get_theme_mod('ddc_email', 'dehradundefencecollege@gmail.com');
    $is_registration = ($form_type === 'online_registration');
    $subject = $is_registration 
        ? "★ NEW ONLINE REGISTRATION: {$full_name} ({$course_interest}) - Dehradun Defence College"
        : "★ NEW ADMISSION ENQUIRY: {$full_name} ({$course_interest}) - Dehradun Defence College";

    // Build Gorgeous HTML Email for Academy Directorate
    if (function_exists('ddc_build_admin_lead_email')) {
        $admin_email_html = ddc_build_admin_lead_email($lead_entry);
    } else {
        $admin_email_html = "<h2>New Admission Lead</h2><p><strong>Name:</strong> {$full_name}</p><p><strong>Mobile:</strong> {$normalized_mobile}</p><p><strong>Email:</strong> {$email}</p><p><strong>Course:</strong> {$course_interest}</p>";
    }

    $headers = [
        'Content-Type: text/html; charset=UTF-8',
        'From: Dehradun Defence College Admissions <dehradundefencecollege@gmail.com>',
        'Reply-To: ' . $full_name . ' <' . $email . '>'
    ];

    // Try WordPress wp_mail (routed through Gmail SMTP via phpmailer_init hook)
    $sent = wp_mail($admin_email, $subject, $admin_email_html, $headers);

    // Fallback to direct native socket SMTP client if wp_mail failed
    if (!$sent && function_exists('ddc_send_smtp_email')) {
        $smtp_err = [];
        $sent = ddc_send_smtp_email($admin_email, $subject, $admin_email_html, $email, $full_name, $smtp_err);
    }

    // Send Candidate Welcome Confirmation Email
    if ($sent && is_email($email) && function_exists('ddc_build_student_welcome_email')) {
        $student_subject = "Registration Confirmation: Dehradun Defence College - {$course_interest}";
        $student_email_html = ddc_build_student_welcome_email($lead_entry);
        $student_headers = [
            'Content-Type: text/html; charset=UTF-8',
            'From: Dehradun Defence College Admissions <dehradundefencecollege@gmail.com>',
            'Reply-To: Dehradun Defence College Admissions <' . $admin_email . '>'
        ];
        wp_mail($email, $student_subject, $student_email_html, $student_headers);
    }

    wp_send_json_success([
        'message' => "Thank you, {$full_name}! Your admission enquiry for {$course_interest} has been received. Our counselor will contact you shortly."
    ]);
}
add_action('wp_ajax_ddc_submit_enquiry', 'ddc_ajax_submit_enquiry_handler');
add_action('wp_ajax_nopriv_ddc_submit_enquiry', 'ddc_ajax_submit_enquiry_handler');

/**
 * Get Latest DDCIAN Selections of 2025-2026
 */
function ddc_get_latest_selections() {
    return [
        [
            'name'   => 'Durshya Biradar',
            'photo'  => 'cadet-durshya-biradar.jpg',
            'role'   => 'Cadet',
            'org'    => 'NDA-2 (Sep 2026)',
            'badge'  => 'Written NDA Qualified',
            'detail' => 'Cleared UPSC NDA-2 Written Examination • Sep 2026 Selection Batch',
            'tag'    => 'NDA Written'
        ],
        [
            'name'   => 'Akshant Chuksey',
            'photo'  => 'cadet-akshant-chuksey.jpg',
            'role'   => 'Cadet',
            'org'    => 'NDA-1 (April 2026)',
            'badge'  => 'NDA-1 Selection',
            'detail' => 'Selected & Cleared UPSC NDA-1 Examination • April 2026 Entry',
            'tag'    => 'NDA Cadet'
        ],
        [
            'name'   => 'Aadarsh Mishra (DDCIAN)',
            'photo'  => 'cadet-aadarsh-mishra.jpg',
            'role'   => 'Flying Officer',
            'org'    => 'Indian Air Force',
            'badge'  => 'Commissioned Officer',
            'detail' => 'Joined Indian Air Force as Flying Officer',
            'tag'    => 'Air Force Pilot'
        ],
        [
            'name'   => 'Sanskar Jha (DDCIAN)',
            'photo'  => 'cadet-sanskar-jha.jpg',
            'role'   => 'Cadet',
            'org'    => 'National Defence Academy',
            'badge'  => 'Cleared Written & SSB',
            'detail' => 'Cleared NDA Written Exam & Recommended for NDA Entry',
            'tag'    => 'NDA Cadet'
        ],
        [
            'name'   => 'Arindam',
            'photo'  => 'cadet-arindam.jpg',
            'role'   => 'Officer Cadet',
            'org'    => 'OTA Chennai',
            'badge'  => 'Chest #4',
            'detail' => 'Recommended for Officers Training Academy (OTA)',
            'tag'    => 'OTA Army'
        ],
        [
            'name'   => 'Praneet Singh',
            'photo'  => 'cadet-praneet-singh.jpg',
            'role'   => 'Cadet',
            'org'    => 'NDA - 18 SSB Allahabad',
            'badge'  => 'Chest #4',
            'detail' => 'Cleared NDA Examination & Recommended from 18 SSB Allahabad',
            'tag'    => 'NDA Army'
        ],
        [
            'name'   => 'Karuna',
            'photo'  => 'cadet-karuna.jpg',
            'role'   => 'Cadet (Girls Wing)',
            'org'    => 'SSB Bhopal, NDA',
            'badge'  => 'Chest #20',
            'detail' => 'Proud DDCIAN Cadet recommended for National Defence Academy',
            'tag'    => 'NDA Girls'
        ],
        [
            'name'   => 'Rishabh Kala',
            'photo'  => 'cadet-rishabh-kala.jpg',
            'role'   => 'Gentleman Cadet',
            'org'    => 'CDS, 18 SSB Allahabad',
            'badge'  => 'Chest #21',
            'detail' => 'Recommended for Indian Military Academy via Combined Defence Services',
            'tag'    => 'CDS IMA'
        ],
        [
            'name'   => 'Ayush Pathak',
            'photo'  => 'cadet-ayush-pathak.jpg',
            'role'   => 'Air Force Cadet',
            'org'    => '18-SSB Allahabad Board',
            'badge'  => 'Chest #7',
            'detail' => 'Air Force Uniform entry recommended through 18 SSB Allahabad',
            'tag'    => 'Air Force'
        ],
        [
            'name'   => 'Leroy Fernandes',
            'photo'  => 'cadet-leroy-fernandes.jpg',
            'role'   => 'Cadet',
            'org'    => 'NDA - 143 Course',
            'badge'  => 'Chest #3',
            'detail' => 'Recommended for prestigious NDA 143 Course at Khadakwasla',
            'tag'    => 'NDA 143'
        ],
        [
            'name'   => 'Pooja Ahlawat',
            'photo'  => 'cadet-pooja-ahlawat.jpg',
            'role'   => 'Cadet (Girls Wing)',
            'org'    => 'NDA Selection',
            'badge'  => 'Chest #6',
            'detail' => 'Selected for National Defence Academy from DDC Girls Residential Wing',
            'tag'    => 'NDA Girls'
        ],
        [
            'name'   => 'Kshitij Pandey',
            'photo'  => 'cadet-kshitij-pandey.jpg',
            'role'   => 'Cadet',
            'org'    => 'NDA Selection',
            'badge'  => 'Chest #32',
            'detail' => 'Cleared NDA Written & SSB Interview with flying colours',
            'tag'    => 'NDA Cadet'
        ],
        [
            'name'   => 'Yashraj Yadav',
            'photo'  => 'cadet-yashraj-yadav.jpg',
            'role'   => 'Cadet',
            'org'    => '19 SSB Allahabad, NDA-143',
            'badge'  => 'Chest #02',
            'detail' => 'Recommended from 19 SSB Allahabad for NDA 143 Batch',
            'tag'    => 'NDA 143'
        ],
        [
            'name'   => 'Akhand Pratap Singh',
            'photo'  => 'cadet-akhand-pratap-singh.jpg',
            'role'   => 'Star Performer',
            'org'    => 'IIT-JEE Main 2025-26 & NDA',
            'badge'  => 'Dual Qualifier',
            'detail' => 'Outstanding merit in IIT-JEE Main alongside NDA Written qualification',
            'tag'    => 'Engineering & NDA'
        ],
        [
            'name'   => 'Sujal Singh',
            'photo'  => 'cadet-sujal-singh.jpg',
            'role'   => 'Star Performer',
            'org'    => 'IIT-JEE Main 2025-26 & NDA',
            'badge'  => 'Dual Qualifier',
            'detail' => 'Cracked IIT-JEE Main 2025-26 and qualified NDA defence entrance',
            'tag'    => 'Engineering & NDA'
        ]
    ];
}

/**
 * Get Academic Teaching Faculty Members
 */
function ddc_get_faculty_members() {
    return [
        [
            'name'        => 'Shekhar Malik',
            'role'        => 'PGT Physics',
            'department'  => 'Senior Physics Faculty • Head of Physical Sciences',
            'photo'       => 'faculty-shekhar-malik.jpg',
            'experience'  => '15+ Years Teaching Experience',
            'education'   => 'M.Tech in Mechanical Engineering (NIT)',
            'quote'       => 'Physics is not just a collection of equation on a whiteboard , It is a systematic language built to decode the universe, in our lecture room and laboratories we challenge students to look beyond theoretical memorization, actively applying mechanical laws to build tangible real word innovations',
            'bio'         => 'I have completed my M.Tech in Mechanical engineering from National Institute of Technology. I have 15 years of experience of teaching PHYSICS at academic level and various competitive exams like NDA, IIT-JEE, NEET , AFCAT, CDS ,AIRFORCE (X), MERCHANT NAVY,MNS,BITSAT, UGEE,CUET,MHT CET, COMEDK, WBJEE, VITEEE. I love to breakdown difficult topics  in to easy one for students with daily life examples and concept building.',
            'exams'       => ['NDA', 'IIT-JEE', 'NEET', 'AFCAT', 'CDS', 'AIRFORCE (X)', 'MERCHANT NAVY', 'MNS', 'BITSAT', 'UGEE', 'CUET', 'MHT CET', 'COMEDK', 'WBJEE', 'VITEEE']
        ],
        [
            'name'        => 'Tarandeep Singh Kukreja (Ex-IMA)',
            'role'        => 'Mathematics Faculty • Ex-IMA',
            'department'  => 'Ex-Officer Cadet IMA (155 Regular Course) • AIR 16 UPSC CDS • 4-Time SSB Recommended',
            'photo'       => 'faculty-tarandeep-singh.jpg',
            'experience'  => '6+ Years Experience • 100% Written Success',
            'education'   => 'Ex-Cadet Indian Military Academy (IMA 155) • AIR 16 UPSC CDS (AFA) • AIR 74 CDS',
            'quote'       => 'Building strong mathematical fundamentals, developing analytical problem-solving skills, and simplifying complex concepts through structured and exam-oriented instruction.',
            'bio'         => 'Tarandeep Singh Kukreja is an accomplished Mathematics faculty member at Dehradun Defence College, bringing over six years of teaching experience and a strong background in defence examination preparation. An ex-Officer Cadet of the Indian Military Academy (IMA), 155 Regular Course, he combines academic expertise with firsthand experience of the selection process for the Indian Armed Forces. He has secured AIR 16 in UPSC CDS I 2025 for the Air Force Academy (AFA) and AIR 74 in UPSC CDS II 2022, along with several other notable ranks in the AFCAT examination. A four-time SSB-recommended candidate, he possesses a deep understanding of the academic requirements and competitive standards of defence entrance examinations. Since beginning his teaching journey in 2020, he has maintained a 100% success rate in the written examinations of NDA, CDS, and AFCAT among his students, reflecting his commitment to effective teaching, conceptual clarity, and result-oriented preparation.',
            'exams'       => ['NDA', 'UPSC CDS', 'AFCAT', 'SSB Interview', 'Air Force Academy (AFA)', 'Indian Military Academy (IMA)']
        ],
        [
            'name'        => 'Mr. Hemant Dubey',
            'role'        => 'Chemistry Faculty • 2x IIT GATE',
            'department'  => 'Senior Chemistry Faculty • NEET, JEE Main, CBSE, NDA & CDS Specialist',
            'photo'       => 'faculty-hemant-dubey.jpg',
            'experience'  => '10+ Years Teaching Experience',
            'education'   => 'B.Tech in Mechanical Engineering • 2x IIT GATE Qualified',
            'quote'       => 'Chemistry is mastered through strong fundamentals, analytical clarity, and connecting theoretical equations with tangible practical applications.',
            'bio'         => 'Mr. Hemant Dubey is an experienced Chemistry educator with over 10+ years of teaching experience and a strong academic background in Mechanical Engineering (B.Tech). Having qualified the IIT GATE examination twice, he brings analytical thinking, conceptual clarity, and a structured approach to Chemistry teaching. He has extensive experience in preparing students for various competitive and academic examinations, including NEET, JEE Main, CBSE Board Examinations, NDA and CDS. His teaching methodology emphasizes building strong fundamentals, simplifying complex concepts, developing problem-solving skills, and connecting theoretical knowledge with practical applications.',
            'exams'       => ['NEET', 'JEE Main', 'CBSE Board', 'NDA', 'CDS', 'IIT GATE']
        ],
        [
            'name'        => 'Ashish Shukla',
            'role'        => 'PGT Biology',
            'department'  => 'Senior Biology Faculty • M.Sc (Zoology), B.Ed',
            'photo'       => 'faculty-ashish-shukla.jpg',
            'experience'  => '9+ Years Teaching Experience',
            'education'   => 'M.Sc (Zoology) • B.Sc (Chem, Botany, Zoology) Univ of Rajasthan • B.Ed (Biological Science)',
            'quote'       => 'Biology is the study of life, and teaching biology is the art of inspiring life.',
            'bio'         => 'Ashish Shukla is a seasoned PGT Biology mentor with 9 years of teaching experience at college level and senior secondary school level across CBSE and RBSE Boards. He holds an M.Sc in Zoology and B.Sc in Chemistry, Botany, and Zoology from the University of Rajasthan, along with a Bachelor of Education (B.Ed) in Biological Science from CRSU. An accomplished scholar with District-Level Hindi Essay Competition Award (2012), MSME Certificate (2017), and National Level Science Conference Certificate from Jaipur National University, he prepares cadets and students for competitive examinations including NEET, NDA, CDS, CUET, and M.Sc Zoology entrance exams with high conceptual retention.',
            'exams'       => ['NEET', 'NDA', 'CDS', 'CUET', 'CBSE Board', 'RBSE Board', 'M.Sc Entrance (Zoology)']
        ],
        [
            'name'        => 'Rishabh Sir',
            'role'        => 'GS Faculty • CDS OTA AIR 59',
            'department'  => 'General Studies Specialist • 2x SSB Recommended (18 SSB & 24 SSB)',
            'photo'       => 'faculty-rishabh.jpg',
            'experience'  => '7+ Years Experience • AIR 59 CDS OTA',
            'education'   => 'M.A. (English), M.A. (Economics), B.Ed., NCC \'C\' Certificate',
            'quote'       => 'Transforming General Studies from mere memorization into an engaging, analytical learning experience with mind maps, structured concepts, and SSB-level critical thinking.',
            'bio'         => 'Rishabh Sir transforms General Studies from a subject of mere memorization into an engaging, analytical learning experience. Leveraging his strong academic background in Humanities and real-world experience, he breaks down complex topics in History, Geography, Polity, and Economics into clear, structured concepts. His teaching seamlessly bridges theoretical knowledge with exam-focused strategies—incorporating mind maps, real-world examples, interactive discussions, and previous years\' question analysis. Having himself cracked competitive defence exams and SSB interviews, he instills critical thinking, discipline, and practical application in his students, ensuring they not only master the GS syllabus for NDA, CDS, UPSC CSE, and CBSE exams but also develop the confidence to excel in competitive scenarios.',
            'exams'       => ['NDA', 'CDS OTA', 'UPSC CSE', 'SSB Interview', 'CBSE Board', 'AFCAT', 'NCC Special Entry']
        ],
        [
            'name'        => 'Apoorva Chatterjee',
            'role'        => 'English Faculty • UGC NET',
            'department'  => 'Senior English & Communication Faculty • UGC NET Qualified',
            'photo'       => 'faculty-apoorva-chatterjee.jpg',
            'experience'  => '6+ Years Teaching Experience',
            'education'   => 'M.A. English (Manipal Univ) • B.A. English (RDVV) • UGC NET • Symbiosis Certified',
            'quote'       => 'Language and literature are the ultimate tools for confident communication, officer-grade expression, and competitive exam mastery.',
            'bio'         => 'I am an English educator with six years of teaching experience across English academics, communication skills, and phonics. I hold a Master\'s degree in English Literature from Manipal University and a Bachelor\'s degree in English Literature from Rani Durgawati Vishwavidyalaya. I am UGC NET qualified and also hold a certification in Creative Writing from Symbiosis. My teaching blends a strong grounding in literature with a practical focus on clear, confident communication and creative expression. I work with students at every level, from building early reading and pronunciation skills through phonics to developing language, writing, and literary analysis. I also have experience preparing candidates for competitive exams such as NDA and CDS, with a focus on grammar, vocabulary, comprehension, and exam strategy.',
            'exams'       => ['NDA', 'CDS', 'AFCAT', 'SSB Interview', 'UGC NET', 'CBSE Board', 'Communication Skills']
        ]
    ];
}

/**
 * Automatic One-Click Page Setup for Dehradun Defence College Theme
 */
function ddc_auto_setup_pages() {
    $pages = [
        [
            'title'    => 'Home',
            'slug'     => 'home',
            'template' => 'front-page.php',
            'is_front' => true,
        ],
        [
            'title'    => 'About Us',
            'slug'     => 'about',
            'template' => 'page-about.php',
        ],
        [
            'title'    => 'Director Desk',
            'slug'     => 'director',
            'template' => 'page-director.php',
        ],
        [
            'title'    => 'Courses',
            'slug'     => 'courses',
            'template' => 'page-courses.php',
        ],
        [
            'title'    => 'Online Registration Form',
            'slug'     => 'online-registration-form',
            'template' => 'page-online-registration-form.php',
        ],
        [
            'title'    => 'Faculty & Facilities',
            'slug'     => 'faculty-facilities',
            'template' => 'page-faculty-facilities.php',
        ],
        [
            'title'    => 'Gallery',
            'slug'     => 'gallery',
            'template' => 'page-gallery.php',
        ],
        [
            'title'    => 'Results & Hall of Fame',
            'slug'     => 'results',
            'template' => 'page-results.php',
        ],
        [
            'title'    => 'Contact Us',
            'slug'     => 'contact',
            'template' => 'page-contact.php',
        ],
    ];

    $created_home_id = 0;

    foreach ($pages as $p) {
        $existing = get_page_by_path($p['slug']);
        if (!$existing) {
            $page_id = wp_insert_post([
                'post_title'     => $p['title'],
                'post_name'      => $p['slug'],
                'post_status'    => 'publish',
                'post_type'      => 'page',
                'comment_status' => 'closed',
            ]);
            if (!is_wp_error($page_id) && $page_id) {
                if (!empty($p['template'])) {
                    update_post_meta($page_id, '_wp_page_template', $p['template']);
                }
                if (!empty($p['is_front'])) {
                    $created_home_id = $page_id;
                }
            }
        } else {
            if (!empty($p['template'])) {
                update_post_meta($existing->ID, '_wp_page_template', $p['template']);
            }
            if (!empty($p['is_front'])) {
                $created_home_id = $existing->ID;
            }
        }
    }

    if ($created_home_id) {
        update_option('show_on_front', 'page');
        update_option('page_on_front', $created_home_id);
    }

    // Set postname permalinks
    if (get_option('permalink_structure') !== '/%postname%/') {
        update_option('permalink_structure', '/%postname%/');
    }
    flush_rewrite_rules();
}
add_action('after_switch_theme', 'ddc_auto_setup_pages');

// Admin notice with One-Click Setup button
function ddc_admin_setup_notice() {
    if (isset($_GET['ddc_do_setup']) && check_admin_referer('ddc_setup_action')) {
        ddc_auto_setup_pages();
        echo '<div class="notice notice-success is-dismissible"><p><strong>Success!</strong> All Dehradun Defence College pages, templates, and homepage settings have been created and configured successfully.</p></div>';
        return;
    }

    $home_page = get_page_by_path('results');
    if (!$home_page) {
        $setup_url = wp_nonce_url(admin_url('themes.php?ddc_do_setup=1'), 'ddc_setup_action');
        echo '<div class="notice notice-info is-dismissible" style="border-left-color: #D4AF37;">';
        echo '<p><strong>Dehradun Defence College Theme Activated!</strong> Click the button below to automatically create and configure all website pages (Home, Results, Courses, Gallery, About, Contact):</p>';
        echo '<p><a href="' . esc_url($setup_url) . '" class="button button-primary" style="background:#0B1B3D; border-color:#D4AF37;">✨ Setup All DDC Pages in 1 Click</a></p>';
        echo '</div>';
    }
}
add_action('admin_notices', 'ddc_admin_setup_notice');

