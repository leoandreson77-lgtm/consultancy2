<?php
/**
 * Footer Template - Dehradun Defence College Custom Theme
 * 
 * @package Dehradun_Defence_College
 */

$phone1       = get_theme_mod('ddc_phone_1', '+91 9719104024');
$phone2       = get_theme_mod('ddc_phone_2', '+91 8650666609');
$email        = get_theme_mod('ddc_email', 'dehradundefencecollege@gmail.com');
$address      = get_theme_mod('ddc_address', 'Maldevta Road, Near Laal Pull (Red Bridge), Lwarkha, Dehradun, Uttarakhand - 248008');
$office_hours = get_theme_mod('ddc_office_hours', 'Monday - Sunday: 8:00 AM - 6:00 PM');
$theme_uri    = get_template_directory_uri();
?>

    <footer class="site-footer">
        <div class="footer-top">
            <div class="container footer-grid">
                <!-- Col 1: About -->
                <div class="footer-col">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="brand-logo" style="margin-bottom: 1.25rem;">
                        <img src="<?php echo esc_url($theme_uri . '/assets/images/logo.png'); ?>" alt="<?php bloginfo('name'); ?>" class="brand-logo-img footer-logo-img">
                        <div class="brand-text">
                            <span class="brand-title" style="color: #FFFFFF;"><?php bloginfo('name'); ?></span>
                            <span class="brand-subtitle">Gurukul of Next Generation</span>
                        </div>
                    </a>
                    <p class="footer-desc">
                        A modern Next-Generation Gurukul dedicated to preparing future officers for the Indian Armed Forces. Located in scenic Maldevta Valley, Dehradun, blending academic UPSC excellence with full-fledged GTO obstacle training and residential hostel facilities.
                    </p>
                    <div style="margin-top: 1.5rem;">
                        <span class="badge-gold">Board of Directors</span>
                        <p style="margin-top: 0.4rem; font-weight: 700; color: #FFFFFF; font-size: 0.9rem; line-height: 1.5;">
                            Mr. Mahendra Kukreja (Managing Director)<br>
                            <span style="font-weight: 400; color: rgba(255,255,255,0.85); font-size: 0.825rem;">Mr. Zaheer Ahmed, Mr. Gaurav Sharma &amp; Ms. Neha Kukreja (Directors)</span>
                        </p>
                    </div>
                </div>

                <!-- Col 2: Courses Menu -->
                <div class="footer-col">
                    <h4>Defence Courses</h4>
                    <?php
                    if (has_nav_menu('footer-courses')) {
                        wp_nav_menu([
                            'theme_location' => 'footer-courses',
                            'container'      => false,
                            'menu_class'     => 'footer-links',
                        ]);
                    } else {
                    ?>
                    <ul class="footer-links">
                        <li><a href="<?php echo esc_url(home_url('/defence-courses/')); ?>">NDA Foundation (10th)</a></li>
                        <li><a href="<?php echo esc_url(home_url('/defence-courses/')); ?>">NDA (Girls) Special Wing</a></li>
                        <li><a href="<?php echo esc_url(home_url('/defence-courses/')); ?>">NDA Target Dropper Batch</a></li>
                        <li><a href="<?php echo esc_url(home_url('/defence-courses/')); ?>">CDS (IMA / OTA / AFA)</a></li>
                        <li><a href="<?php echo esc_url(home_url('/defence-courses/')); ?>">AFCAT Coaching</a></li>
                        <li><a href="<?php echo esc_url(home_url('/defence-courses/')); ?>">SSB 14-Day Practical Camp</a></li>
                    </ul>
                    <?php } ?>
                </div>

                <!-- Col 3: Useful Links -->
                <div class="footer-col">
                    <h4>Official Portals</h4>
                    <ul class="footer-links">
                        <li><a href="https://www.upsc.gov.in" target="_blank" rel="noopener">UPSC Official Portal ↗</a></li>
                        <li><a href="https://www.nda.nic.in" target="_blank" rel="noopener">National Defence Academy ↗</a></li>
                        <li><a href="https://joinindianarmy.nic.in" target="_blank" rel="noopener">Join Indian Army ↗</a></li>
                        <li><a href="https://indianairforce.nic.in" target="_blank" rel="noopener">Indian Air Force ↗</a></li>
                        <li><a href="https://www.joinindiannavy.gov.in" target="_blank" rel="noopener">Indian Navy Careers ↗</a></li>
                        <li><a href="<?php echo esc_url(SCHOLARSHIP_TEST_URL); ?>" target="_blank" rel="noopener" style="color: #FFD700; font-weight: 700;">🔥 Scholarship Test 2027 (Class 9 &amp; 10) ↗</a></li>
                    </ul>

                </div>

                <!-- Col 4: Campus Contact -->
                <div class="footer-col">
                    <h4>Campus & Admissions</h4>
                    <div class="footer-contact-item">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                        <span><?php echo esc_html($address); ?></span>
                    </div>

                    <div class="footer-contact-item">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                        <span>
                            <a href="tel:<?php echo esc_attr(preg_replace('/[^\d\+]/', '', $phone1)); ?>"><?php echo esc_html($phone1); ?></a><br>
                            <a href="tel:<?php echo esc_attr(preg_replace('/[^\d\+]/', '', $phone2)); ?>"><?php echo esc_html($phone2); ?></a>
                        </span>
                    </div>

                    <div class="footer-contact-item">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                        <span><a href="mailto:<?php echo esc_attr($email); ?>"><?php echo esc_html($email); ?></a></span>
                    </div>

                    <div style="margin-top: 1rem;">
                        <button type="button" class="btn btn-gold btn-sm open-enquiry-modal" data-course="Direct Campus Visit" style="width: 100%;">
                            Schedule Campus Tour
                        </button>
                    </div>
                </div>
        </div>

        <!-- Popular Search Terms & SEO Discovery Hub -->
        <div class="footer-seo-section">
            <div class="container">
                <div class="footer-seo-title">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" style="color: var(--accent-gold);"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                    <span>Popular Search Terms & Defence Aspirants Quick Links:</span>
                </div>
                <div class="footer-seo-tags-cloud">
                    <a href="<?php echo esc_url(home_url('/defence-courses/')); ?>" class="seo-tag-item">Best NDA Coaching in Dehradun</a>
                    <a href="<?php echo esc_url(home_url('/defence-courses/')); ?>" class="seo-tag-item">Top NDA Coaching Institute in India</a>
                    <a href="<?php echo esc_url(home_url('/defence-courses/')); ?>" class="seo-tag-item">NDA Foundation Course After 12th</a>
                    <a href="<?php echo esc_url(home_url('/defence-courses/')); ?>" class="seo-tag-item">NDA Girls Special Residential Wing</a>
                    <a href="<?php echo esc_url(home_url('/defence-courses/')); ?>" class="seo-tag-item">Best Defence Academy in Dehradun</a>
                    <a href="<?php echo esc_url(home_url('/faculty-campus/')); ?>" class="seo-tag-item">NDA Coaching with Hostel and Mess Facilities</a>
                    <a href="<?php echo esc_url(home_url('/defence-courses/')); ?>" class="seo-tag-item">NDA Coaching with Schooling in Dehradun</a>
                    <a href="<?php echo esc_url(home_url('/defence-courses/')); ?>" class="seo-tag-item">NDA Foundation Course after 10th</a>
                    <a href="<?php echo esc_url(home_url('/defence-courses/')); ?>" class="seo-tag-item">Pre-NDA Foundation Course (8th to 10th class)</a>
                    <a href="<?php echo esc_url(home_url('/defence-courses/')); ?>" class="seo-tag-item">CDS Coaching in Dehradun</a>
                    <a href="<?php echo esc_url(home_url('/defence-courses/')); ?>" class="seo-tag-item">CDS OTA Coaching Institute</a>
                    <a href="<?php echo esc_url(home_url('/defence-courses/')); ?>" class="seo-tag-item">AFCAT Exam Preparation Coaching</a>
                    <a href="<?php echo esc_url(home_url('/defence-courses/')); ?>" class="seo-tag-item">SSB Interview Coaching Dehradun</a>
                    <a href="<?php echo esc_url(home_url('/faculty-campus/')); ?>" class="seo-tag-item">Best GTO Ground for SSB Training</a>
                    <a href="<?php echo esc_url(home_url('/defence-courses/')); ?>" class="seo-tag-item">RIMC and Sainik School Coaching Dehradun</a>
                    <a href="<?php echo esc_url(home_url('/defence-courses/')); ?>" class="seo-tag-item">Military Nursing Service (MNS) Coaching</a>
                    <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="seo-tag-item">NDA coaching near Sahastradhara Road Dehradun</a>
                    <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="seo-tag-item">Top-rated defence academy near JK Tower Dehradun</a>
                    <a href="<?php echo esc_url(home_url('/results-selections/')); ?>" class="seo-tag-item">Best NDA written and SSB coaching in Uttarakhand</a>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container footer-bottom-content">
                <p>© <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All Rights Reserved. Excellence is the only aim.</p>
                <div class="footer-legal-links">
                    <a href="<?php echo esc_url(home_url('/privacy-policy/')); ?>">Privacy Policy</a>
                    <a href="<?php echo esc_url(home_url('/terms/')); ?>">Terms & Conditions</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Gallery Lightbox Modal Container -->
    <div class="lightbox-modal" id="galleryLightbox" role="dialog" aria-modal="true" aria-label="Image Preview">
        <div class="lightbox-content-wrap">
            <button type="button" class="lightbox-close-btn" aria-label="Close Preview">&times;</button>
            <img src="" alt="Enlarged Campus View" id="lightboxImg">
        </div>
    </div>

    <!-- Template Parts: Modal & WhatsApp Button -->
    <?php get_template_part('template-parts/enquiry-modal'); ?>
    <?php get_template_part('template-parts/whatsapp-btn'); ?>

    <?php wp_footer(); ?>
</body>
</html>
