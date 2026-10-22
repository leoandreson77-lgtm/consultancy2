<?php
/**
 * Header Template - Dehradun Defence College
 */
require_once __DIR__ . '/../config.php';

// Default page variables if not defined by caller
$page_title = $page_title ?? (SITE_NAME . ' | ' . SITE_TAGLINE);
$page_desc = $page_desc ?? 'Join Dehradun Defence College for the best NDA coaching in Dehradun with expert faculty, SSB training, residential hostel, and complete defence exam preparation.';
$current_page = $current_page ?? 'home';
$canonical_url = $canonical_url ?? (SITE_URL . '/' . ($current_page === 'home' ? '' : $current_page . '.php'));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_desc); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($page_keywords ?? SITE_KEYWORDS); ?>">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <link rel="canonical" href="<?php echo htmlspecialchars($canonical_url); ?>">
    
    <!-- Favicon & Touch Icons -->
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon.png">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/apple-touch-icon.png">
    
    <!-- Open Graph Metadata -->
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($page_desc); ?>">
    <meta property="og:url" content="<?php echo htmlspecialchars($canonical_url); ?>">
    <meta property="og:site_name" content="<?php echo SITE_NAME; ?>">
    <meta property="og:image" content="<?php echo SITE_URL; ?>/assets/images/hero-cadets.jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($page_desc); ?>">
    <meta name="twitter:image" content="<?php echo SITE_URL; ?>/assets/images/hero-cadets.jpg">

    <!-- Schema.org Educational Organization Structured Data -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "EducationalOrganization",
      "name": "<?php echo SITE_NAME; ?>",
      "alternateName": ["Dehradun Defence College", "DDC Dehradun", "Best NDA Coaching in Dehradun", "Top NDA Coaching Institute in India"],
      "url": "<?php echo SITE_URL; ?>",
      "logo": "<?php echo SITE_URL; ?>/assets/images/logo.png",
      "description": "Premier defence coaching academy in Dehradun providing NDA Foundation, CDS, AFCAT, and SSB interview training with residential hostel campus.",
      "keywords": "<?php echo SITE_KEYWORDS; ?>",
      "knowsAbout": [
        "NDA Exam Preparation",
        "NDA Foundation Course after 10th",
        "Pre-NDA Foundation Course (8th to 10th class)",
        "SSB Interview Coaching",
        "Best GTO Ground for SSB Training",
        "CDS Coaching",
        "CDS OTA Coaching",
        "AFCAT Exam Preparation",
        "RIMC and Sainik School Coaching",
        "Military Nursing Service (MNS) Coaching"
      ],
      "areaServed": ["Dehradun", "Uttarakhand", "Sahastradhara Road", "JK Tower Area", "India"],
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Maldevta Road, Near Laal Pull (Red Bridge), Lwarkha",
        "addressLocality": "Dehradun",
        "addressRegion": "Uttarakhand",
        "postalCode": "248008",
        "addressCountry": "IN"
      },
      "telephone": ["<?php echo CONTACT_PHONE_1; ?>", "<?php echo CONTACT_PHONE_2; ?>", "<?php echo CONTACT_PHONE_3; ?>"],
      "email": "<?php echo CONTACT_EMAIL; ?>",
      "founder": {
        "@type": "Person",
        "name": "<?php echo DIRECTOR_NAME; ?>",
        "jobTitle": "<?php echo DIRECTOR_ROLE; ?>"
      },
      "openingHours": "Mo-Su 08:00-18:00"
    }
    </script>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <!-- 1. Top Announcement Bar -->
    <div class="top-notice-bar">
        <div class="container top-notice-content">
            <div class="top-notice-left">
                <span class="top-notice-item">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                    <span>Admissions:</span>
                    <a href="tel:<?php echo CONTACT_PHONE_1_RAW; ?>"><?php echo CONTACT_PHONE_1; ?></a>
                </span>
                <span class="top-notice-item top-visiting-hours">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                    <span>Monday - Sunday: 8:00 AM - 6:00 PM</span>
                </span>
                <button type="button" class="btn-top-schedule-tour open-enquiry-modal" data-course="Schedule Campus Tour">
                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                    <span>SCHEDULE CAMPUS TOUR</span>
                </button>
                <a href="online-registration-form.php" class="btn-top-schedule-tour" style="background: var(--accent-gold); color: var(--primary-navy); font-weight: 800; border-color: var(--accent-gold); text-decoration: none;">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><line x1="20" y1="8" x2="20" y2="14"></line><line x1="23" y1="11" x2="17" y2="11"></line></svg>
                    <span>ONLINE REGISTRATION</span>
                </a>
            </div>

            <div class="top-marquee-wrap">
                <span class="top-marquee-tag">Admissions 2026</span>
                <marquee behavior="scroll" direction="left" scrollamount="5" style="color: rgba(255,255,255,0.9); font-size: 0.825rem;">
                    ★ Fresh Batches for NDA 2 2026 & NDA Foundation (After 10th) Admissions Now Open! Limited Seats with In-Campus Hostel & Daily SSB Ground Training. ★
                </marquee>
            </div>

            <div class="top-social-links">
                <a href="<?php echo WHATSAPP_LINK; ?>" target="_blank" rel="noopener" aria-label="WhatsApp Us">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
                </a>
                <a href="<?php echo FACEBOOK_LINK; ?>" target="_blank" rel="noopener" aria-label="Facebook">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                </a>
                <a href="<?php echo INSTAGRAM_LINK; ?>" target="_blank" rel="noopener" aria-label="Instagram">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                </a>
                <a href="<?php echo YOUTUBE_LINK; ?>" target="_blank" rel="noopener" aria-label="YouTube">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                </a>
            </div>
        </div>
    </div>

    <!-- Top Scholarship Announcement Bar (Client Requested) -->
    <div class="top-scholarship-bar" id="topScholarshipBar">
        <div class="container top-scholarship-inner">
            <div class="top-scholarship-left">
                <span class="top-scholarship-badge">
                    <svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"/></svg>
                    SCHOLARSHIP NOTICE
                </span>
                <span class="top-scholarship-text">
                    <strong>Veer Naris &amp; Martyr's Children:</strong> 100% Tuition Fee Waiver &bull; <strong>Betiyon Ka Raksha Samman:</strong> Special grants for NDA Girls &amp; MNS Nursing
                </span>
            </div>
            <div class="top-scholarship-actions">
                <button type="button" class="btn-scholarship-apply" id="openScholarshipPopup">
                    <span>APPLY FOR SCHOLARSHIP / FEE CONCESSION</span>
                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </button>
                <button type="button" class="btn-scholarship-close" id="closeScholarshipBar" aria-label="Dismiss Scholarship Notice">&times;</button>
            </div>
        </div>
    </div>

    <!-- 2. Sticky Header Bar -->
    <header class="site-header" id="masthead">
        <div class="container header-container">
            <!-- Brand Identity -->
            <a href="index.php" class="brand-logo" title="<?php echo SITE_NAME; ?> — <?php echo SITE_MOTTO; ?>">
                <img src="assets/images/logo.png" alt="Dehradun Defence College Official Emblem" class="brand-logo-img">
                <div class="brand-text">
                    <span class="brand-title">Dehradun Defence College</span>
                    <span class="brand-subtitle">Gurukul of Next Generation</span>
                </div>
            </a>

            <!-- Navigation Links -->
            <nav class="nav-menu" id="primaryNav" aria-label="Main Navigation">
                <a href="index.php" class="nav-link <?php echo ($current_page === 'home') ? 'active' : ''; ?>">Home</a>
                <a href="about.php" class="nav-link <?php echo ($current_page === 'about') ? 'active' : ''; ?>">About Us</a>
                
                <!-- Courses Dropdown -->
                <div class="nav-dropdown">
                    <a href="courses.php" class="nav-link nav-dropdown-toggle <?php echo (strpos($current_page, 'course') !== false) ? 'active' : ''; ?>">
                        <span>Courses</span>
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </a>
                    <div class="dropdown-menu">
                        <a href="course-detail.php?course=nda-foundation-10" class="dropdown-item">NDA Foundation (After 10th)</a>
                        <a href="course-detail.php?course=nda-girls-10" class="dropdown-item">NDA (Girls) Special Wing</a>
                        <a href="course-detail.php?course=nda-target-12" class="dropdown-item">NDA Target / Dropper Batch</a>
                        <a href="course-detail.php?course=cds-training" class="dropdown-item">CDS Training (IMA/OTA/AFA)</a>
                        <a href="course-detail.php?course=afcat-coaching" class="dropdown-item">AFCAT (Air Force Exam)</a>
                        <a href="course-detail.php?course=ssb-interview" class="dropdown-item">SSB 14-Day Practical Camp</a>
                        <a href="course-detail.php?course=rimc-sainik" class="dropdown-item">RIMC & RMS Military Schools</a>
                        <a href="course-detail.php?course=mns-nursing" class="dropdown-item">MNS (Military Nursing) & NEET</a>
                        <a href="courses.php" class="dropdown-item" style="color: var(--accent-gold-hover); font-weight: 700; border-top: 1px solid var(--border-light); margin-top: 4px; padding-top: 8px;">View All 10 Courses & Fees →</a>
                    </div>
                </div>

                <a href="director.php" class="nav-link <?php echo ($current_page === 'director') ? 'active' : ''; ?>">Directors</a>
                <a href="faculty-facilities.php" class="nav-link <?php echo ($current_page === 'faculty-facilities') ? 'active' : ''; ?>">Faculty & Campus</a>
                <a href="results.php" class="nav-link <?php echo ($current_page === 'results') ? 'active' : ''; ?>">Selections 2026</a>
                <a href="gallery.php" class="nav-link <?php echo ($current_page === 'gallery') ? 'active' : ''; ?>">Activities</a>
                <a href="online-registration-form.php" class="nav-link <?php echo ($current_page === 'online-registration-form') ? 'active' : ''; ?>">Online Registration</a>
                <a href="contact.php" class="nav-link <?php echo ($current_page === 'contact') ? 'active' : ''; ?>">Contact</a>

                <div class="mobile-nav-footer">
                    <a href="tel:<?php echo CONTACT_PHONE_1_RAW; ?>" class="btn btn-outline-navy btn-sm" style="width: 100%; justify-content: center; gap: 0.5rem;">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                        <span>Call Admissions (<?php echo CONTACT_PHONE_1; ?>)</span>
                    </a>
                    <button type="button" class="btn btn-gold btn-sm open-enquiry-modal" data-course="General Enquiry" style="width: 100%; justify-content: center;">
                        <span>Enquire Now</span>
                    </button>
                </div>
            </nav>

            <!-- Header Action CTAs -->
            <div class="header-cta-group">
                <a href="tel:<?php echo CONTACT_PHONE_1_RAW; ?>" class="btn btn-primary btn-sm btn-icon-pulse" style="display: none;" id="headerCallBtn">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                    <span>Call Now</span>
                </a>

                <a href="online-registration-form.php" class="btn btn-gold btn-sm" style="font-weight: 800; gap: 0.4rem; display: inline-flex; align-items: center;">
                    <span>Register Now</span>
                </a>

                <!-- Mobile Hamburger Toggle -->
                <button type="button" class="mobile-nav-toggle" aria-label="Toggle Navigation Menu" aria-expanded="false">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                </button>
            </div>
        </div>
    </header>
