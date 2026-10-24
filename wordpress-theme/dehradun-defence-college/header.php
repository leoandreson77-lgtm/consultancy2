<?php
/**
 * Header Template - Dehradun Defence College Custom Theme
 * 
 * @package Dehradun_Defence_College
 */

$phone1   = get_theme_mod('ddc_phone_1', '+91 9719104024');
$email    = get_theme_mod('ddc_email', 'dehradundefencecollege@gmail.com');
$whatsapp  = get_theme_mod('ddc_whatsapp', '919719104024');
$theme_uri = get_template_directory_uri();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="icon" type="image/png" href="<?php echo esc_url($theme_uri . '/assets/images/favicon.png'); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <!-- 1. Top Announcement Bar -->
    <div class="top-notice-bar">
        <div class="container top-notice-content">
            <div class="top-notice-left">
                <span class="top-notice-item">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                    <span>Admissions:</span>
                    <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9+]/', '', $phone1)); ?>"><?php echo esc_html($phone1); ?></a>
                </span>
                <span class="top-notice-item top-visiting-hours">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 16 14"></polyline></svg>
                    <span>Mon - Sun: 8:00 AM - 6:00 PM</span>
                </span>
                <button type="button" class="btn-top-schedule-tour open-enquiry-modal" data-course="Schedule Campus Tour">
                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                    <span>Schedule Tour</span>
                </button>
            </div>

            <div class="top-marquee-wrap">
                <span class="top-marquee-tag">Admissions 2026</span>
                <marquee behavior="scroll" direction="left" scrollamount="5" style="color: rgba(255,255,255,0.9); font-size: 0.825rem;">
                    ★ Admissions Open for NDA Foundation, CDS, AFCAT & SSB 14-Day Practical Batches in Dehradun Campus! Limited Residential Seats. ★
                </marquee>
            </div>

            <div class="top-social-links">
                <a href="https://wa.me/<?php echo esc_attr($whatsapp); ?>" target="_blank" rel="noopener" aria-label="WhatsApp">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
                </a>
                <a href="https://www.youtube.com/@dehradundefencecollege" target="_blank" rel="noopener" aria-label="YouTube">
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
                    <span>Apply Scholarship →</span>
                </button>
                <button type="button" class="btn-scholarship-close" id="closeScholarshipBar" aria-label="Dismiss Scholarship Notice">&times;</button>
            </div>
        </div>
    </div>

    <!-- 2. Sticky Header Bar -->
    <header class="site-header" id="masthead">
        <div class="container header-container">
            <!-- Brand Logo -->
            <a href="<?php echo esc_url(home_url('/')); ?>" class="brand-logo" rel="home">
                <?php if (has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <img src="<?php echo esc_url($theme_uri . '/assets/images/logo.png'); ?>" alt="<?php bloginfo('name'); ?>" class="brand-logo-img">
                    <div class="brand-text">
                        <span class="brand-title"><?php bloginfo('name'); ?></span>
                        <span class="brand-subtitle">Gurukul of Next Generation</span>
                    </div>
                <?php endif; ?>
            </a>

            <!-- Navigation Menu -->
            <nav class="nav-menu" id="primaryNav" aria-label="<?php esc_attr_e('Main Navigation', 'dehradun-defence-college'); ?>">
                <?php
                if (has_nav_menu('primary-menu')) {
                    wp_nav_menu([
                        'theme_location' => 'primary-menu',
                        'container'      => false,
                        'items_wrap'     => '%3$s',
                        'fallback_cb'    => false,
                    ]);
                } else {
                ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="nav-link">Home</a>
                    <a href="<?php echo esc_url(home_url('/about/')); ?>" class="nav-link">About Us</a>
                    <a href="<?php echo esc_url(home_url('/defence-courses/')); ?>" class="nav-link">Courses</a>
                    <a href="<?php echo esc_url(home_url('/faculty-facilities/')); ?>" class="nav-link">Faculty & Campus</a>
                    <a href="<?php echo esc_url(home_url('/results/')); ?>" class="nav-link">Results</a>
                    <a href="<?php echo esc_url(home_url('/gallery/')); ?>" class="nav-link">Gallery</a>
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="nav-link">Contact</a>
                <?php } ?>

                <div class="mobile-nav-footer">
                    <a href="tel:<?php echo esc_attr(get_theme_mod('ddc_phone_1', '+919997001313')); ?>" class="btn btn-outline-navy btn-sm" style="width: 100%; justify-content: center; gap: 0.5rem;">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                        <span>Call Admissions</span>
                    </a>
                    <button type="button" class="btn btn-gold btn-sm open-enquiry-modal" data-course="General Website Enquiry" style="width: 100%; justify-content: center;">
                        <span>Enquire Now</span>
                    </button>
                </div>
            </nav>

            <!-- Header Action CTAs -->
            <div class="header-cta-group">
                <button type="button" class="btn btn-gold btn-sm open-enquiry-modal" data-course="General Website Enquiry">
                    <span>Enquire Now</span>
                </button>

                <button type="button" class="mobile-nav-toggle" aria-label="Toggle Navigation Menu" aria-expanded="false">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                </button>
            </div>
        </div>
    </header>
