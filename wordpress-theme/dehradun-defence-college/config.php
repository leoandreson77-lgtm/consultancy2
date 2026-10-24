<?php
/**
 * Configuration File - Dehradun Defence College
 * 
 * Central configuration for site identity, contact information,
 * office hours, SMTP credentials, and security parameters.
 */

// Prevent direct script execution if accessed in an unexpected manner
if (!defined('DDC_ROOT')) {
    define('DDC_ROOT', __DIR__);
}

// Load .env variables if .env file exists
if (file_exists(__DIR__ . '/.env')) {
    $lines = file(__DIR__ . '/.env', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0) continue;
        list($name, $value) = explode('=', $line, 2) + [NULL, NULL];
        if ($name && $value !== NULL) {
            putenv(trim($name) . '=' . trim($value));
        }
    }
}

// Helper to get environment variable with fallback
if (!function_exists('ddc_env')) {
    function ddc_env($key, $default = '') {
        $val = getenv($key);
        return ($val !== false && $val !== '') ? $val : $default;
    }
}

// -------------------------------------------------------------
// Site Identity & Branding
// -------------------------------------------------------------
define('SITE_NAME', 'Dehradun Defence College');
define('SITE_TAGLINE', 'Best NDA, CDS, AFCAT & SSB Coaching in Dehradun');
define('SITE_MOTTO', 'Gurukul of Next Generation');
define('SITE_SLOGAN', 'Nurturing Humanity and Transmuting Values');
define('SITE_LOGO', 'assets/images/logo.png');
define('SITE_FAVICON', 'assets/images/favicon.png');
define('SITE_URL', ddc_env('SITE_URL', 'http://localhost/consultancy'));

// Master SEO Keywords List
$DDC_SEO_KEYWORDS = [
    'Best NDA Coaching in Dehradun',
    'Top NDA Coaching Institute in India',
    'Dreamers Hub Education',
    'Dreamers Edu Hub Dehradun',
    'Doon Defence Dreamers',
    'Dreamers Hub Defence Coaching',
    'Best Defence Academy in Dehradun',
    'NDA Coaching with Hostel and Mess Facilities',
    'NDA Coaching with Schooling in Dehradun',
    'NDA Foundation Course after 10th',
    'Pre-NDA Foundation Course (8th to 10th class)',
    'CDS Coaching in Dehradun',
    'CDS OTA Coaching Institute',
    'AFCAT Exam Preparation Coaching',
    'SSB Interview Coaching Dehradun',
    'Best GTO Ground for SSB Training',
    'RIMC and Sainik School Coaching Dehradun',
    'Military Nursing Service (MNS) Coaching',
    'NDA coaching near Sahastradhara Road Dehradun',
    'Top-rated defence academy near JK Tower Dehradun',
    'Best NDA written and SSB coaching in Uttarakhand'
];
define('SITE_KEYWORDS', implode(', ', $DDC_SEO_KEYWORDS));

// Director & Leadership Team
define('DIRECTOR_NAME', 'Mr. Mahendra Kukreja (Managing Director), Mr. Zaheer Ahmed, Mr. Gaurav Sharma & Ms. Neha Kukreja (Directors)');
define('DIRECTOR_ROLE', 'Board of Directors');

$DDC_LEADERSHIP = [
    'mahendra_kukreja' => [
        'name'  => 'Mr. Mahendra Kukreja',
        'role'  => 'Managing Director',
        'badge' => 'Managing Director — Dehradun Defence College',
        'image' => 'assets/images/director-mahendra.jpg',
        'bio'   => 'Managing Director of Dehradun Defence College, guiding defence coaching pedagogy, institutional excellence, and mentoring cadets to build unshakeable character and Officer-Like Qualities.'
    ],
    'zaheer_ahmed' => [
        'name'  => 'Mr. Zaheer Ahmed',
        'role'  => 'Director',
        'badge' => 'Director — DDC & Managing Director — Doon Public Senior Secondary School',
        'image' => 'assets/images/director-zaheer.jpg',
        'bio'   => 'Director of Dehradun Defence College and Managing Director of Doon Public Senior Secondary School, establishing the bedrock of academic schooling, values, and holistic youth empowerment in Dehradun.'
    ],
    'gaurav_sharma' => [
        'name'  => 'Mr. Gaurav Sharma',
        'role'  => 'Director & Principal',
        'badge' => 'Director — DDC & Principal — Doon Public Senior Secondary School',
        'image' => 'assets/images/director-gaurav.jpg',
        'bio'   => 'Director of Dehradun Defence College and Principal of Doon Public Senior Secondary School, spearheading strategic NDA examination preparation, UPSC academic mastery, and Officer-Like Qualities (OLQ) development.'
    ],
    'neha_kukreja' => [
        'name'  => 'Ms. Neha Kukreja',
        'role'  => 'Director',
        'badge' => 'Director — Dehradun Defence College (DDC)',
        'image' => 'assets/images/director-neha.jpg',
        'bio'   => 'Director of Dehradun Defence College, leading academic admissions, candidate counseling roadmaps, batch enrollments, and student-parent onboarding.'
    ]
];

// -------------------------------------------------------------
// Contact Details (Centralized & Verified from Reference)
// -------------------------------------------------------------
define('CONTACT_PHONE_1', '+91 9719104024');
define('CONTACT_PHONE_1_RAW', '+919719104024');
define('CONTACT_PHONE_2', '+91 8650666609');
define('CONTACT_PHONE_2_RAW', '+918650666609');
define('CONTACT_PHONE_3', '+91 7895510755');
define('CONTACT_PHONE_3_RAW', '+917895510755');

define('CONTACT_EMAIL', 'dehradundefencecollege@gmail.com');
define('CONTACT_ADDRESS', 'Maldevta Road, Near Laal Pull (Red Bridge), Lwarkha, Dehradun, Uttarakhand - 248008');
define('OFFICE_HOURS', 'Monday - Sunday: 8:00 AM - 6:00 PM');

// Social & Messaging Links
define('WHATSAPP_NUMBER', '919719104024');
define('WHATSAPP_LINK', 'https://wa.me/919719104024?text=' . urlencode('Hello Dehradun Defence College, I am interested in admission for NDA/Defence exam coaching. Please share course and batch details.'));
define('WHATSAPP_GROUP_LINK', 'https://whatsapp.com/channel/0029Va7Vlq9GJP8JqjCFIY0H');
define('FACEBOOK_LINK', 'https://www.facebook.com/profile.php?id=61590307295275');
define('INSTAGRAM_LINK', 'https://www.instagram.com/dehradun_defence7/');
define('YOUTUBE_LINK', 'https://www.youtube.com/@dehradundefencecollege');

// Google Maps Embed URL
define('GOOGLE_MAPS_EMBED_URL', 'https://maps.google.com/maps?q=Dehradun%20Defence%20College%20Maldevta%20-%20NDA%20Coaching%20in%20Dehradun&t=m&z=14&output=embed&iwloc=near');

// -------------------------------------------------------------
// Official Bank & Online Fee Payment Credentials
// -------------------------------------------------------------
define('BANK_HOLDER_NAME', 'Dehradun Defence College');
define('BANK_ACCOUNT_NO', '120003029000');
define('BANK_NAME', 'Canara Bank');
define('BANK_IFSC', 'CNRB0018515');
define('BANK_BRANCH', 'Dehradun, Uttarakhand');
define('PAYMENT_QR_IMAGE', 'assets/images/ddc-payment-qr.png');
define('DEFAULT_REGISTRATION_FEE', '500');
define('UPLOADS_DIR', __DIR__ . '/uploads');
define('UPLOADS_URL', 'uploads');

// -------------------------------------------------------------
// Key Academy Statistics
// -------------------------------------------------------------
$DDC_STATS = [
    'years_of_excellence' => '5+',
    'expert_faculties'    => '18+',
    'defence_courses'     => '8+',
    'trained_cadets'      => '970+',
    'officer_qualifiers'  => '68+',
    'nda_entry_recent'    => '25+' // 25+ joined NDA 2021-2024
];

// -------------------------------------------------------------
// Available Courses List
// -------------------------------------------------------------
$DDC_COURSES = [
    'nda-foundation-10' => [
        'title'           => 'NDA Foundation After 10th',
        'badge'           => 'Most Popular • 2 Years',
        'target'          => '10th Passed / Appearing Students',
        'duration'        => '2 Years (Class 11 + 12 + NDA Coaching)',
        'description'     => 'Comprehensive 2-year integrated schooling and NDA preparation balancing academic board exams with intensive defence training and SSB grooming.',
        'eligibility'     => 'Passed Class 10th with minimum 60% marks',
        'timetable_pdf'   => 'assets/downloads/ddc-nda-foundation-timetable.pdf',
        'timetable_title' => 'NDA Foundation (Class 11-12) Timetable & Study Plan',
        'timetable_hours' => '2-3 hrs weekdays, 5-6 hrs weekends',
        'daily_routine'   => [
            ['time' => '6:00 - 6:45 AM', 'activity' => 'Morning Running, Exercise & Fitness Drill'],
            ['time' => '5:00 - 6:30 PM', 'activity' => 'NDA Mathematics (New Concept & Problem Solving)'],
            ['time' => '7:30 - 8:15 PM', 'activity' => 'GAT: Science or Social Science (Alternate Days)'],
            ['time' => '8:30 - 9:00 PM', 'activity' => 'English Vocabulary, Grammar & Defence Current Affairs'],
            ['time' => 'Saturday',       'activity' => 'Topic-Wise Subject Tests & Weak-Area Work'],
            ['time' => 'Sunday',         'activity' => 'Full 2 to 3 Hour Sectional Paper & Deep Analysis']
        ],
        'features'        => ['Integrated CBSE/State Board Schooling', 'Daily NDA Syllabus Lectures & Maths Tricks', 'Morning PT & Physical Fitness Drill', 'Ex-SSB Officer Mentoring & GTO Practice', 'In-Campus Hostel & Balanced Nutritious Food']
    ],
    'nda-pre-foundation' => [
        'title'           => 'NDA Pre-Foundation (Class 9-10)',
        'badge'           => 'Early Bird • 2 Years',
        'target'          => 'Students in Class 8th or 9th',
        'duration'        => '2 Years (Class 9 + 10 Foundation)',
        'description'     => 'Build unshakable foundational mathematics, science concepts, physical fitness, and officer-like habits early before entering Senior Secondary.',
        'eligibility'     => 'Passed Class 8th or studying in Class 9th/10th',
        'timetable_pdf'   => 'assets/downloads/ddc-nda-pre-foundation-timetable.pdf',
        'timetable_title' => 'NDA Pre-Foundation (Class 9-10) Timetable & Plan',
        'timetable_hours' => '1.5-2 hrs weekdays, 2-3 hrs weekends',
        'daily_routine'   => [
            ['time' => '6:00 - 6:45 AM', 'activity' => 'Morning Running, Exercise & Body Conditioning'],
            ['time' => '5:00 - 5:45 PM', 'activity' => 'Maths Practice (NCERT Concepts + Vedic Speed Shortcuts)'],
            ['time' => '7:00 - 7:30 PM', 'activity' => 'Science Concept Reading & Visual Diagrams'],
            ['time' => '8:30 - 9:00 PM', 'activity' => 'English Newspaper Reading & 5 New Vocabulary Words'],
            ['time' => 'Saturday',       'activity' => 'Maths & Science Chapter Tests and Review'],
            ['time' => 'Sunday',         'activity' => 'General Knowledge, Sports, Personality & Hobby Work']
        ],
        'features'        => ['NCERT Class 9-10 Conceptual Mastery', 'Speed Calculations (Tables, Squares, Cubes)', 'Early Physical Conditioning (1.6 km Run, Push-ups)', 'Debate, Public Speaking & Personality Building', 'Residential Boarding & Disciplined Gurukul Routine']
    ],
    'nda-girls-10' => [
        'title'           => 'NDA (Girls) Special Wing',
        'badge'           => 'Special Wing • Dedicated Hostel',
        'target'          => 'Female Defence Aspirants (10th/12th)',
        'duration'        => '2 Years Integrated / 1 Year Target',
        'description'     => 'Specialized batches for female aspirants preparing to join the National Defence Academy with dedicated residential facilities and women mentors.',
        'eligibility'     => 'Girls passed Class 10th/12th aspiring for NDA entry',
        'timetable_pdf'   => 'assets/downloads/ddc-nda-foundation-timetable.pdf',
        'timetable_title' => 'NDA Girls Wing Timetable & Academic Routine',
        'timetable_hours' => '2-3 hrs weekdays, 5-6 hrs weekends',
        'daily_routine'   => [
            ['time' => '6:00 - 6:45 AM', 'activity' => 'Morning Physical Conditioning & Stamina Running'],
            ['time' => '5:00 - 6:30 PM', 'activity' => 'UPSC NDA Mathematics & Speed Problem Solving'],
            ['time' => '7:30 - 8:15 PM', 'activity' => 'General Ability Test (Physics, Chemistry & History)'],
            ['time' => '8:30 - 9:00 PM', 'activity' => 'English Communication, Vocabulary & Current Affairs'],
            ['time' => 'Saturday',       'activity' => 'Weekly Sectional Evaluation & Confidence Building'],
            ['time' => 'Sunday',         'activity' => 'Mock UPSC Test & Women Officer Interaction']
        ],
        'features'        => ['Secure Dedicated Girls Hostel Wing', 'Personalized Physical Fitness Conditioning', 'Targeted UPSC NDA Written Exam Prep', 'Women Officer Mentorship & SSB Guidance', 'Confidence & Public Speaking Development']
    ],
    'nda-target-12' => [
        'title'           => 'NDA Target / Dropper Batch (After 12th)',
        'badge'           => 'Fast Track • Intensive',
        'target'          => '12th Passed / Appearing Candidates',
        'duration'        => '6 Months / 1 Year Intensive Batch',
        'description'     => 'Rigorous exam-focused program covering UPSC Mathematics, General Ability Test (GAT), and English with weekly full-length mock tests.',
        'eligibility'     => '12th Appearing or Passed (PCM preferred for Air Force/Navy)',
        'timetable_pdf'   => 'assets/downloads/ddc-nda-target-timetable.pdf',
        'timetable_title' => 'NDA After 12th (6 & 12 Month) Timetable & Study Plan',
        'timetable_hours' => '8-10 hrs Daily Intensive Routine',
        'daily_routine'   => [
            ['time' => '5:30 - 6:30 AM', 'activity' => 'Morning Running, Exercise & Obstacle Warmup'],
            ['time' => '7:30 - 10:30 AM', 'activity' => 'UPSC Mathematics (Core Concept + 60+ MCQs Practice)'],
            ['time' => '11:00 AM - 1:00 PM', 'activity' => 'GAT Science (Physics/Chemistry) & Social Science'],
            ['time' => '3:00 - 5:30 PM', 'activity' => 'Maths Advanced Practice, PYQs & Doubt Clearance'],
            ['time' => '6:00 - 7:00 PM', 'activity' => 'English Grammar, Comprehension & Spotting Errors'],
            ['time' => '8:00 - 9:30 PM', 'activity' => 'Daily Defence Current Affairs & Revision Notes'],
            ['time' => 'Saturday',       'activity' => 'Sectional Timed Tests & Weak-Area Drill'],
            ['time' => 'Sunday',         'activity' => 'Full 5-Hour UPSC Mock (Maths 2.5h + GAT 2.5h) & Analysis']
        ],
        'features'        => ['Comprehensive UPSC Syllabus Coverage', 'Mathematics Speed Techniques & Shortcuts', 'Current Affairs & Defence GK Modules', 'Daily 6-Hour Academic Schedule + Evening Doubt Classes', 'Complete SSB Interview Dossier Training']
    ],
    'cds-training' => [
        'title'           => 'CDS Training (IMA, OTA, AFA, INA)',
        'badge'           => 'Graduate Entry',
        'target'          => 'Graduates / Final Year Degree Students',
        'duration'        => '6 Months / 1 Year',
        'description'     => 'Complete preparation for Combined Defence Services Examination for permanent and short service commissions across Army, Navy, and Air Force.',
        'eligibility'     => 'Graduation in any discipline (B.Tech for Naval & Air Force Academy)',
        'timetable_pdf'   => 'assets/downloads/ddc-cds-syllabus-timetable.pdf',
        'timetable_title' => 'CDS Syllabus, Timetable & Study Plan (IMA/OTA/AFA)',
        'timetable_hours' => '5-6 hrs Daily Preparation Plan',
        'daily_routine'   => [
            ['time' => '5:30 - 6:30 AM', 'activity' => 'Running, Physical Conditioning & Stamina Drill'],
            ['time' => '7:00 - 8:30 AM', 'activity' => 'Elementary Mathematics (Arithmetic, Algebra, Geometry)'],
            ['time' => '6:00 - 7:00 PM', 'activity' => 'English: Grammar, Idioms, Vocab & Cloze Test'],
            ['time' => '7:30 - 8:30 PM', 'activity' => 'General Knowledge (History, Polity, Geo, Science)'],
            ['time' => '8:30 - 9:15 PM', 'activity' => 'National & International Defence Current Affairs'],
            ['time' => '9:15 - 9:45 PM', 'activity' => 'Revision, Error Notebook & Next Day Planning'],
            ['time' => 'Sunday',         'activity' => 'Full 3-Paper UPSC Mock Simulation (2 hrs each) & Review']
        ],
        'features'        => ['Advanced Elementary Mathematics Coaching', 'Intensive English & Comprehensive General Knowledge', 'Special OTA Paper Strategy (General Knowledge + English)', 'Mock Tests Designed on Latest UPSC Pattern', 'Rigorous 14-Day SSB Orientation & Interview Prep']
    ],
    'afcat-coaching' => [
        'title'           => 'AFCAT Coaching (Flying & Ground Duty)',
        'badge'           => 'Air Force Entry',
        'target'          => 'Graduates Aiming for Indian Air Force',
        'duration'        => '3 to 6 Months Special Batches',
        'description'     => 'Specialized curriculum targeting AFCAT Numerical Ability, Verbal Ability, Reasoning & Military Aptitude, and General Awareness.',
        'eligibility'     => 'Graduate with minimum 60% marks and 10+2 with Maths & Physics',
        'timetable_pdf'   => 'assets/downloads/ddc-afcat-syllabus-timetable.pdf',
        'timetable_title' => 'AFCAT Syllabus, Timetable & 3-6 Month Plan',
        'timetable_hours' => '5-6 hrs Daily Study Plan',
        'daily_routine'   => [
            ['time' => '5:30 - 6:30 AM', 'activity' => 'Running & AFSB Physical Fitness Drill (1.6 km in 7-8 min)'],
            ['time' => '7:00 - 8:00 AM', 'activity' => 'Numerical Ability: Speed Arithmetic & Shortcuts'],
            ['time' => '6:30 - 7:30 PM', 'activity' => 'Reasoning & Military Aptitude (Spatial & Non-Verbal)'],
            ['time' => '7:30 - 8:30 PM', 'activity' => 'English: Comprehension, Vocabulary & Sentence Ordering'],
            ['time' => '8:30 - 9:15 PM', 'activity' => 'General Awareness (Aviation, Defence, Sports, Static GK)'],
            ['time' => '9:15 - 9:45 PM', 'activity' => 'Daily Newspaper & Air Force Current Affairs'],
            ['time' => 'Sunday',         'activity' => 'Full 2-Hour Online Computer Mock + 2 hrs Performance Analysis']
        ],
        'features'        => ['Complete Spatial & Military Aptitude Training', 'Computer-Based Mock Test Series (CBTS)', 'Speed Maths & Reasoning Shortcut Techniques', 'Daily Aviation & Defence Current Affairs', 'AFSB Preparation (Air Force Selection Board)']
    ],
    'rimc-sainik' => [
        'title'           => 'RIMC Dehradun Coaching (Rashtriya Indian Military College)',
        'badge'           => 'School Entry (Class 8)',
        'target'          => 'Young Aspirants for RIMC Dehradun Entrance',
        'duration'        => '1 Year Intensive Gurukul Batch',
        'description'     => 'Premier entrance coaching for admission to Rashtriya Indian Military College (RIMC) Dehradun. Covers English writing, advanced Mathematics, General Knowledge, and Viva-Voce mock interviews.',
        'eligibility'     => 'Boys & Girls studying in Class 7th or passed Class 7th (Age 11.5 - 13 Years)',
        'timetable_pdf'   => 'assets/downloads/ddc-rimc-entrance-timetable.pdf',
        'timetable_title' => 'RIMC Dehradun Entrance Exam Timetable & Plan',
        'timetable_hours' => '3-4 hrs Specialized Daily Mentoring',
        'daily_routine'   => [
            ['time' => '6:00 - 6:45 AM', 'activity' => 'Morning Running, Exercises & Team Games'],
            ['time' => '4:30 - 5:30 PM', 'activity' => 'Mathematics: Class 6-7 Concepts + 20 Problem Solutions'],
            ['time' => '6:00 - 6:45 PM', 'activity' => 'English: Grammar, Composition, Essay & Letter Writing'],
            ['time' => '7:30 - 8:00 PM', 'activity' => 'General Knowledge: Child-Friendly Newspaper & GK Book'],
            ['time' => '8:00 - 8:15 PM', 'activity' => 'Mistake Notebook & Formula Revision'],
            ['time' => 'Saturday',       'activity' => 'Full Paper Timed Practice or Subject Sectional Test'],
            ['time' => 'Sunday',         'activity' => 'Viva-Voce Mock Interview, General Facts & Outdoor Hobby']
        ],
        'features'        => ['Subjective English Descriptive Mastery', 'Speed Mathematics & Conceptual Problem Solving', 'Child-Friendly Gurukul Residential Boarding', 'Personal Interview & Communication Grooming', 'Rigorous Mock Papers on Past 15 Years RIMC Trends']
    ],
    'rms-school' => [
        'title'           => 'RMS Coaching (Rashtriya Military Schools - Class 6 & 9)',
        'badge'           => 'Class 6 & 9 Entrance',
        'target'          => 'Cadets targeting Chail, Ajmer, Belgaum, Bengaluru & Dholpur',
        'duration'        => '6 Months to 1 Year Residential Batch',
        'description'     => 'Specialized Common Entrance Test (CET) coaching for admission to all 5 Rashtriya Military Schools. Comprehensive syllabus coverage for Intelligence Test, Mathematics, English, General Science, and Social Studies.',
        'eligibility'     => 'Students studying in Class 5th (for Class 6 entry) or Class 8th (for Class 9 entry)',
        'timetable_pdf'   => 'assets/downloads/ddc-rimc-entrance-timetable.pdf',
        'timetable_title' => 'RMS (Rashtriya Military Schools) CET Timetable',
        'timetable_hours' => '3-4 hrs Daily Study Plan',
        'daily_routine'   => [
            ['time' => '6:00 - 6:45 AM', 'activity' => 'Physical PT, Running & Sports Stamina'],
            ['time' => '4:30 - 5:30 PM', 'activity' => 'Mathematics & Intelligence Reasoning Test (CET Pattern)'],
            ['time' => '5:45 - 6:45 PM', 'activity' => 'English Grammar & Vocabulary Drills'],
            ['time' => '7:00 - 8:00 PM', 'activity' => 'General Knowledge, Social Science & Everyday Science'],
            ['time' => '8:15 - 8:45 PM', 'activity' => 'Daily Revision Test & Mistake Clearing'],
            ['time' => 'Sunday',         'activity' => 'OMR Based Mock CET Exam Simulation & Assessment']
        ],
        'features'        => ['Full CET Syllabus for Class 6 & 9', 'Intelligence & Non-Verbal Reasoning Tricks', 'OMR Speed Training & Time Management', 'Separate Hostel Accommodation with Caretakers', 'Mock Interviews for Medical & Final Merit List']
    ],
    'afmc-neet' => [
        'title'           => 'AFMC Pune (MBBS) with NEET UG',
        'badge'           => 'Medical Defence • Premier',
        'target'          => 'Medical Aspirants Aiming for Uniformed Service',
        'duration'        => '1 Year Repeater / 2 Years Integrated',
        'description'     => 'Integrated NEET UG medical preparation combined with AFMC ToELR (English & Logic), Psychological Assessment Test (PAT), and Medical Interview grooming.',
        'eligibility'     => 'Class 12th with Physics, Chemistry, Biology & English (min 60%)',
        'timetable_pdf'   => 'assets/downloads/ddc-afmc-neet-timetable.pdf',
        'timetable_title' => 'AFMC Pune (NEET UG) Timetable & Study Plan',
        'timetable_hours' => '8-10 hrs Daily Intensive Routine',
        'daily_routine'   => [
            ['time' => '5:30 - 6:30 AM', 'activity' => 'Morning Physical Exercise (Medical Fitness Standard)'],
            ['time' => '7:00 - 10:00 AM', 'activity' => 'NCERT Biology (Line-by-Line Botany & Zoology)'],
            ['time' => '10:30 AM - 1:00 PM', 'activity' => 'Physics: Theory Concepts & 45+ Numericals Solving'],
            ['time' => '2:30 - 5:00 PM', 'activity' => 'Chemistry: Physical, Organic, Inorganic Rotation'],
            ['time' => '5:30 - 7:00 PM', 'activity' => 'High-Volume MCQ Practice from Day’s Chapters'],
            ['time' => '8:00 - 9:00 PM', 'activity' => 'ToELR (English Comprehension & Logical Reasoning) Practice'],
            ['time' => 'Sunday',         'activity' => 'Full 3h 20m NEET Pattern Mock + AFMC Interview Prep']
        ],
        'features'        => ['Complete NCERT Class 11-12 Line-by-Line Pedagogy', 'Dedicated ToELR Screening Preparation (80 Marks)', 'Psychological Assessment Test (PAT) Guidance', 'Military Doctor Mock Interviews & Medical Board Fitness', 'Residential Campus with Focus Study Halls']
    ],
    'mns-nursing' => [
        'title'           => 'MNS BSc Nursing (with NEET UG)',
        'badge'           => 'Military Nursing • Women Commission',
        'target'          => 'Female Candidates Aiming for Military Nursing Service',
        'duration'        => '1 Year Intensive / 2 Years Integrated',
        'description'     => 'Specialized preparation for female aspirants seeking commissioning as Lieutenants in the Military Nursing Service via NEET UG and AFMS ToGIGE screening.',
        'eligibility'     => 'Unmarried Female, Class 12 with PCB & English (min 50%)',
        'timetable_pdf'   => 'assets/downloads/ddc-mns-nursing-timetable.pdf',
        'timetable_title' => 'MNS BSc Nursing (NEET UG) Timetable & Plan',
        'timetable_hours' => '8-10 hrs Daily Routine',
        'daily_routine'   => [
            ['time' => '5:30 - 6:30 AM', 'activity' => 'Morning Fitness & Stamina Conditioning'],
            ['time' => '7:00 - 10:00 AM', 'activity' => 'NCERT Biology (360 Marks NEET Priority)'],
            ['time' => '10:30 AM - 1:00 PM', 'activity' => 'Physics Theory & Standard Numericals'],
            ['time' => '2:30 - 5:00 PM', 'activity' => 'Chemistry (Organic Reactions & Inorganic Facts)'],
            ['time' => '5:30 - 7:00 PM', 'activity' => 'Daily Chapter MCQ Drills & Time-Management Work'],
            ['time' => '8:00 - 9:00 PM', 'activity' => 'ToGIGE Preparation (General Intelligence & English)'],
            ['time' => 'Sunday',         'activity' => 'Full NEET Mock Test & Military Nursing Interview Sessions']
        ],
        'features'        => ['Female Cadet Dedicated Hostel & Safe Campus', 'NEET UG Core PCB Exam Preparation', 'ToGIGE (General Intelligence & General English) Training', 'AFMS Medical Standards Conditioning', 'Commissioned MNS Officer Mock Interviews']
    ],
    'ssb-interview' => [
        'title'           => 'SSB Interview Comprehensive Training',
        'badge'           => '14-Day Practical Camp',
        'target'          => 'Candidates with SSB / AFSB / NSB Calls',
        'duration'        => '14 Days / 21 Days Live Ground Camp',
        'description'     => 'Complete outdoor GTO ground obstacle course, psychology dossier evaluation (TAT, WAT, SRT, SDT), and one-on-one personal interview mocks by retired defence assessors.',
        'eligibility'     => 'All NDA, CDS, AFCAT, TGC, NCC, and Direct Entry Call letter holders',
        'timetable_pdf'   => 'assets/downloads/ddc-nda-target-timetable.pdf',
        'timetable_title' => 'SSB 14-Day Practical Bootcamp Schedule',
        'timetable_hours' => 'Full-Day Immersive Military Routine',
        'daily_routine'   => [
            ['time' => '6:00 - 7:00 AM', 'activity' => 'Morning Physical Training & Obstacle Run'],
            ['time' => '9:00 AM - 1:00 PM', 'activity' => 'Outdoor GTO Ground: PGT, HGT, Snake Race & Individual Obstacles'],
            ['time' => '2:30 - 5:00 PM', 'activity' => 'Psychology Dossier: TAT, WAT, SRT, SDT Real-Time Tests'],
            ['time' => '5:30 - 7:30 PM', 'activity' => 'Group Discussion (GD), Lecturette & Personal Mock Interviews'],
            ['time' => '8:30 - 9:30 PM', 'activity' => 'Individual Assessment Feedback & OLQ Cultivation Guidance']
        ],
        'features'        => ['Live GTO Ground Obstacle Course on Campus', 'Individual Psychology Test Evaluation & Feedback', 'Personal Mock Interviews with Ex-Interviewing Officers', 'Group Discussions (GD) & Lecturette Practice Daily', 'Officer Like Qualities (OLQ) Inculcation Program']
    ],
    'capf-ota' => [
        'title'           => 'CAPF (AC) & OTA Special Wing',
        'badge'           => 'Paramilitary & Army',
        'target'          => 'Candidates targeting BSF, CRPF, CISF, ITBP & OTA',
        'duration'        => '6 Months to 1 Year',
        'description'     => 'Specialized coaching for Central Armed Police Forces (Assistant Commandant) and Officers Training Academy Chennai short service commissions.',
        'eligibility'     => 'Graduate candidates within prescribed age brackets',
        'timetable_pdf'   => 'assets/downloads/ddc-cds-syllabus-timetable.pdf',
        'timetable_title' => 'CAPF & OTA Daily Study & Fitness Schedule',
        'timetable_hours' => '6-8 hrs Daily Study & PET Routine',
        'daily_routine'   => [
            ['time' => '5:30 - 6:30 AM', 'activity' => 'PET Physical Efficiency Drill (Running, Long Jump, Shot Put)'],
            ['time' => '7:00 - 8:30 AM', 'activity' => 'Paper I: General Studies (Polity, History, Geo, Economics)'],
            ['time' => '6:00 - 7:00 PM', 'activity' => 'Paper II: Essay, Precise Writing, Argument & Report'],
            ['time' => '7:30 - 8:30 PM', 'activity' => 'National Security, Border Issues & Current Affairs'],
            ['time' => '8:30 - 9:30 PM', 'activity' => 'Descriptive Answer Writing Practice & Feedback']
        ],
        'features'        => ['Paper 1 (General Studies) & Paper 2 (Essay & Comprehension)', 'Answer Writing Practice for Descriptive Paper', 'Physical Efficiency Test (PET) Training', 'Personality Test / Interview Mock Sessions', 'Regular Doubt Removal & Mentor Sessions']
    ]
];

// -------------------------------------------------------------
// Comprehensive Fee Structure Breakdown
// -------------------------------------------------------------
$DDC_FEE_STRUCTURE = [
    [
        'category'     => 'NDA Foundation',
        'course'       => 'NDA Foundation (Class 11 NDA + Schooling)',
        'duration'     => '2 Years (Integrated)',
        'academic_fee' => '₹2,00,000 / Year',
        'tuition_fee'  => '₹2,00,000 / Year',
        'hostel_fee'   => '₹1,20,000 / Year',
        'total_fee'    => '3,20,000/-',
        'features'     => 'In-House Separate Hostel, 4 Meals Mess, Daily PT, GTO Ground & CBSE Schooling',
        'course_key'   => 'nda-foundation-10'
    ],
    [
        'category'     => 'Pre-NDA Foundation',
        'course'       => 'Pre-NDA Foundation (Class 9th & 10th)',
        'duration'     => '2 - 3 Years',
        'academic_fee' => '₹1,60,000 / Year',
        'tuition_fee'  => '₹1,60,000 / Year',
        'hostel_fee'   => '₹1,20,000 / Year',
        'total_fee'    => '2,80,000/-',
        'features'     => 'Early Defence Grooming, Speed Maths, NCERT Core Mastery, Physical Conditioning',
        'course_key'   => 'nda-pre-foundation'
    ],
    [
        'category'     => 'NDA Dropper / Target',
        'course'       => 'NDA Target / Dropper Batch (After 12th)',
        'duration'     => '6 Months / 1 Year',
        'academic_fee' => '₹45,000 (6 Mo) / ₹75,000 (1 Yr)',
        'tuition_fee'  => '₹45,000 (6 Mo) / ₹75,000 (1 Yr)',
        'hostel_fee'   => '₹45,000 (6 Mo) / ₹85,000 (1 Yr)',
        'total_fee'    => '10,000/- Per Month (Hostel Charge) + NDA Fee',
        'features'     => 'Intensive 8-10 Hrs Daily Study, Test Series, 14-Day SSB Interview Included',
        'course_key'   => 'nda-target-12'
    ],
    [
        'category'     => 'School Entrance',
        'course'       => '6th, 7th & 8th, Sainik School, RIMC Dehradun & RMS (Military Schools CET)',
        'duration'     => '1 Year',
        'academic_fee' => '₹1,50,000 / Year',
        'tuition_fee'  => '₹1,50,000 / Year',
        'hostel_fee'   => '₹1,00,000 / Year',
        'total_fee'    => '2,50,000/-',
        'features'     => 'Subjective English Writing, Intelligence Reasoning, Caring Residential Gurukul',
        'course_key'   => 'rimc-sainik'
    ],
    [
        'category'     => 'Graduate Armed Forces',
        'course'       => 'CDS (IMA, OTA, AFA, INA) & AFCAT Coaching',
        'duration'     => '6 Months / 1 Year',
        'academic_fee' => '₹48,000 (6 Mo) / ₹65,000 (1 Yr)',
        'tuition_fee'  => '₹48,000 (6 Mo) / ₹65,000 (1 Yr)',
        'hostel_fee'   => '₹10,000 / Month (Optional)',
        'total_fee'    => '—',
        'features'     => 'Ex-Defence Faculty, Special OTA Paper Strategy, SSB Orientation Included',
        'course_key'   => 'cds-training'
    ],
    [
        'category'     => 'SSB Practical Ground',
        'course'       => 'SSB Interview 14-Day Practical Obstacle Camp',
        'duration'     => '14 Days Immersive',
        'academic_fee' => '₹18,500 (All Modules)',
        'tuition_fee'  => '₹18,500 (All Modules)',
        'hostel_fee'   => '₹10,000 (14-Day Food & Stay)',
        'total_fee'    => '—',
        'features'     => 'Real Military GTO Ground, Psych Dossier TAT/WAT/SRT, Ex-Interviewing Officers',
        'course_key'   => 'ssb-interview'
    ],
    [
        'category'     => 'Defence Medical',
        'course'       => 'NEET/Military Nursing Service (MNS) & AFMC NEET Wing',
        'duration'     => '1 Year / 2 Years',
        'academic_fee' => '₹75,000 / Year',
        'tuition_fee'  => '₹75,000 / Year',
        'hostel_fee'   => '1,20,000/- Per Year',
        'total_fee'    => '1,95,000/-',
        'features'     => 'Dedicated Girls Residential Wing, NCERT PCB Mastery, ToGIGE & Medical Interview',
        'course_key'   => 'mns-nursing'
    ]
];

// -------------------------------------------------------------
// Latest DDCIAN Selections of 2025-2026
// -------------------------------------------------------------
$DDC_LATEST_SELECTIONS_2026 = [
    [
        'name'        => 'Durshya Biradar',
        'photo'       => 'assets/images/cadets/cadet-durshya-biradar.jpg',
        'role'        => 'Cadet',
        'org'         => 'NDA-2 (Sep 2026)',
        'badge'       => 'Written NDA Qualified',
        'detail'      => 'Cleared UPSC NDA-2 Written Examination • Sep 2026 Selection Batch',
        'tag'         => 'NDA Written'
    ],
    [
        'name'        => 'Akshant Chuksey',
        'photo'       => 'assets/images/cadets/cadet-akshant-chuksey.jpg',
        'role'        => 'Cadet',
        'org'         => 'NDA-1 (April 2026)',
        'badge'       => 'NDA-1 Selection',
        'detail'      => 'Selected & Cleared UPSC NDA-1 Examination • April 2026 Entry',
        'tag'         => 'NDA Cadet'
    ],
    [
        'name'        => 'Aadarsh Mishra (DDCIAN)',
        'photo'       => 'assets/images/cadets/cadet-aadarsh-mishra.jpg',
        'role'        => 'Flying Officer',
        'org'         => 'Indian Air Force',
        'badge'       => 'Commissioned Officer',
        'detail'      => 'Joined Indian Air Force as Flying Officer',
        'tag'         => 'Air Force Pilot'
    ],
    [
        'name'        => 'Sanskar Jha (DDCIAN)',
        'photo'       => 'assets/images/cadets/cadet-sanskar-jha.jpg',
        'role'        => 'Cadet',
        'org'         => 'National Defence Academy',
        'badge'       => 'Cleared Written & SSB',
        'detail'      => 'Cleared NDA Written Exam & Recommended for NDA Entry',
        'tag'         => 'NDA Cadet'
    ],
    [
        'name'        => 'Arindam',
        'photo'       => 'assets/images/cadets/cadet-arindam.jpg',
        'role'        => 'Officer Cadet',
        'org'         => 'OTA Chennai',
        'badge'       => 'Chest #4',
        'detail'      => 'Recommended for Officers Training Academy (OTA)',
        'tag'         => 'OTA Army'
    ],
    [
        'name'        => 'Praneet Singh',
        'photo'       => 'assets/images/cadets/cadet-praneet-singh.jpg',
        'role'        => 'Cadet',
        'org'         => 'NDA - 18 SSB Allahabad',
        'badge'       => 'Chest #4',
        'detail'      => 'Cleared NDA Examination & Recommended from 18 SSB Allahabad',
        'tag'         => 'NDA Army'
    ],
    [
        'name'        => 'Karuna',
        'photo'       => 'assets/images/cadets/cadet-karuna.jpg',
        'role'        => 'Cadet (Girls Wing)',
        'org'         => 'SSB Bhopal, NDA',
        'badge'       => 'Chest #20',
        'detail'      => 'Proud DDCIAN Cadet recommended for National Defence Academy',
        'tag'         => 'NDA Girls'
    ],
    [
        'name'        => 'Rishabh Kala',
        'photo'       => 'assets/images/cadets/cadet-rishabh-kala.jpg',
        'role'        => 'Gentleman Cadet',
        'org'         => 'CDS, 18 SSB Allahabad',
        'badge'       => 'Chest #21',
        'detail'      => 'Recommended for Indian Military Academy via Combined Defence Services',
        'tag'         => 'CDS IMA'
    ],
    [
        'name'        => 'Ayush Pathak',
        'photo'       => 'assets/images/cadets/cadet-ayush-pathak.jpg',
        'role'        => 'Air Force Cadet',
        'org'         => '18-SSB Allahabad Board',
        'badge'       => 'Chest #7',
        'detail'      => 'Air Force Uniform entry recommended through 18 SSB Allahabad',
        'tag'         => 'Air Force'
    ],
    [
        'name'        => 'Leroy Fernandes',
        'photo'       => 'assets/images/cadets/cadet-leroy-fernandes.jpg',
        'role'        => 'Cadet',
        'org'         => 'NDA - 143 Course',
        'badge'       => 'Chest #3',
        'detail'      => 'Recommended for prestigious NDA 143 Course at Khadakwasla',
        'tag'         => 'NDA 143'
    ],
    [
        'name'        => 'Pooja Ahlawat',
        'photo'       => 'assets/images/cadets/cadet-pooja-ahlawat.jpg',
        'role'        => 'Cadet (Girls Wing)',
        'org'         => 'NDA Selection',
        'badge'       => 'Chest #6',
        'detail'      => 'Selected for National Defence Academy from DDC Girls Residential Wing',
        'tag'         => 'NDA Girls'
    ],
    [
        'name'        => 'Kshitij Pandey',
        'photo'       => 'assets/images/cadets/cadet-kshitij-pandey.jpg',
        'role'        => 'Cadet',
        'org'         => 'NDA Selection',
        'badge'       => 'Chest #32',
        'detail'      => 'Cleared NDA Written & SSB Interview with flying colours',
        'tag'         => 'NDA Cadet'
    ],
    [
        'name'        => 'Yashraj Yadav',
        'photo'       => 'assets/images/cadets/cadet-yashraj-yadav.jpg',
        'role'        => 'Cadet',
        'org'         => '19 SSB Allahabad, NDA-143',
        'badge'       => 'Chest #02',
        'detail'      => 'Recommended from 19 SSB Allahabad for NDA 143 Batch',
        'tag'         => 'NDA 143'
    ],
    [
        'name'        => 'Akhand Pratap Singh',
        'photo'       => 'assets/images/cadets/cadet-akhand-pratap-singh.jpg',
        'role'        => 'Star Performer',
        'org'         => 'IIT-JEE Main 2025-26 & NDA',
        'badge'       => 'Dual Qualifier',
        'detail'      => 'Outstanding merit in IIT-JEE Main alongside NDA Written qualification',
        'tag'         => 'Engineering & NDA'
    ],
    [
        'name'        => 'Sujal Singh',
        'photo'       => 'assets/images/cadets/cadet-sujal-singh.jpg',
        'role'        => 'Star Performer',
        'org'         => 'IIT-JEE Main 2025-26 & NDA',
        'badge'       => 'Dual Qualifier',
        'detail'      => 'Cracked IIT-JEE Main 2025-26 and qualified NDA defence entrance',
        'tag'         => 'Engineering & NDA'
    ]
];

// -------------------------------------------------------------
// Academic Teaching Faculty Members
// -------------------------------------------------------------
$DDC_FACULTY_MEMBERS = [
    [
        'name'        => 'Shekhar Malik',
        'role'        => 'PGT Physics',
        'department'  => 'Senior Physics Faculty • Head of Physical Sciences',
        'photo'       => 'assets/images/faculty-shekhar-malik.jpg',
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
        'photo'       => 'assets/images/faculty-tarandeep-singh.jpg',
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
        'photo'       => 'assets/images/faculty-hemant-dubey.jpg',
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
        'photo'       => 'assets/images/faculty-ashish-shukla.jpg',
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
        'photo'       => 'assets/images/faculty-rishabh.jpg',
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
        'photo'       => 'assets/images/faculty-apoorva-chatterjee.jpg',
        'experience'  => '6+ Years Teaching Experience',
        'education'   => 'M.A. English (Manipal Univ) • B.A. English (RDVV) • UGC NET • Symbiosis Certified',
        'quote'       => 'Language and literature are the ultimate tools for confident communication, officer-grade expression, and competitive exam mastery.',
        'bio'         => 'I am an English educator with six years of teaching experience across English academics, communication skills, and phonics. I hold a Master\'s degree in English Literature from Manipal University and a Bachelor\'s degree in English Literature from Rani Durgawati Vishwavidyalaya. I am UGC NET qualified and also hold a certification in Creative Writing from Symbiosis. My teaching blends a strong grounding in literature with a practical focus on clear, confident communication and creative expression. I work with students at every level, from building early reading and pronunciation skills through phonics to developing language, writing, and literary analysis. I also have experience preparing candidates for competitive exams such as NDA and CDS, with a focus on grammar, vocabulary, comprehension, and exam strategy.',
        'exams'       => ['NDA', 'CDS', 'AFCAT', 'SSB Interview', 'UGC NET', 'CBSE Board', 'Communication Skills']
    ]
];

// -------------------------------------------------------------
// Email & SMTP Configuration
// -------------------------------------------------------------
define('SMTP_ENABLED', ddc_env('SMTP_ENABLED', 'true') === 'true');
define('SMTP_HOST', ddc_env('SMTP_HOST', 'smtp.gmail.com'));
define('SMTP_PORT', (int)ddc_env('SMTP_PORT', 465));
define('SMTP_SECURE', ddc_env('SMTP_SECURE', 'ssl')); // 'ssl' on 465 or 'tls' on 587
define('SMTP_USERNAME', ddc_env('SMTP_USERNAME', 'dehradundefencecollege@gmail.com'));
define('SMTP_PASSWORD', ddc_env('SMTP_PASSWORD', 'owspotavnlkavvxp'));
define('SMTP_FROM_EMAIL', ddc_env('SMTP_FROM_EMAIL', 'dehradundefencecollege@gmail.com'));
define('SMTP_FROM_NAME', ddc_env('SMTP_FROM_NAME', 'Dehradun Defence College Admissions'));
define('ADMIN_ENQUIRY_EMAIL', ddc_env('ADMIN_ENQUIRY_EMAIL', 'dehradundefencecollege@gmail.com'));

// Security & Anti-Spam Tokens
define('CSRF_SECRET', ddc_env('CSRF_SECRET', 'ddc_dehradun_secure_token_secret_key_2026'));
define('ENABLE_LEADS_LOGGING', true);
define('LEADS_LOG_FILE', __DIR__ . '/storage/leads.json');
