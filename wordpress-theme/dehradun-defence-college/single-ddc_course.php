<?php
/**
 * Single Course Template (ddc_course Custom Post Type)
 * 
 * @package Dehradun_Defence_College
 */

get_header();
?>

    <section class="section-padding-sm bg-navy" style="background-image: linear-gradient(135deg, #0B1B3D 0%, #162B56 100%);">
        <div class="container">
            <span class="badge-gold">Course Profile</span>
            <h1 style="color: #FFFFFF; margin: 0.75rem 0 0.5rem 0;"><?php the_title(); ?></h1>
            <p style="color: rgba(255,255,255,0.85); font-size: 1.15rem; max-width: 800px;">
                <?php echo get_the_excerpt(); ?>
            </p>
        </div>
    </section>

    <div class="section-padding bg-slate">
        <div class="container course-detail-layout">
            <main id="primary" class="site-main" style="background: #FFFFFF; padding: 3rem 2.5rem; border-radius: var(--radius-lg); border: 1px solid var(--border-light); box-shadow: var(--shadow-sm); line-height: 1.85;">
                <?php
                while (have_posts()) : the_post();
                    if (has_post_thumbnail()) {
                        echo '<div style="margin-bottom: 2rem; border-radius: var(--radius-md); overflow: hidden;">';
                        the_post_thumbnail('large', ['style' => 'width: 100%; height: auto;']);
                        echo '</div>';
                    }
                    the_content();
                endwhile;
                ?>
            </main>

            <!-- Course Sidebar Form -->
            <aside class="course-sidebar-col">
                <div class="course-sidebar-card">
                    <div class="hero-form-header">
                        <div style="display: flex; align-items: center; justify-content: center; gap: 0.75rem; margin-bottom: 0.85rem; padding-bottom: 0.75rem; border-bottom: 1px solid rgba(212, 175, 55, 0.3);">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo.png'); ?>" alt="Dehradun Defence College Official Emblem" style="width: 48px; height: 48px; object-fit: contain; filter: drop-shadow(0 2px 6px rgba(11,27,61,0.15)); flex-shrink: 0;">
                            <div style="text-align: left;">
                                <div style="font-size: 1rem; font-weight: 800; color: var(--primary-navy); line-height: 1.2;">Dehradun Defence College</div>
                                <span class="badge-saffron" style="font-size: 0.65rem; padding: 2px 7px; margin-top: 2px; display: inline-block;">★ Official Registration</span>
                            </div>
                        </div>
                        <span class="badge-saffron">Enrollment 2026</span>
                        <h3>Register for this Course</h3>
                        <p>Direct admission guidance & fee breakdown for <strong><?php the_title(); ?></strong></p>
                    </div>

                    <form action="<?php echo esc_url(admin_url('admin-ajax.php')); ?>" method="POST" class="ddc-enquiry-form" novalidate>
                        <input type="hidden" name="action" value="ddc_submit_enquiry">
                        <input type="hidden" name="nonce" value="<?php echo wp_create_nonce('ddc_enquiry_nonce'); ?>">
                        <input type="text" name="website_url_check" class="hp-field" tabindex="-1" autocomplete="off">
                        <input type="hidden" name="form_start_time" value="<?php echo time(); ?>">

                        <div class="form-status-alert" role="alert"></div>

                        <div class="form-group">
                            <label class="form-label">Full Name *</label>
                            <input type="text" name="full_name" class="form-control" placeholder="Candidate's Name" required>
                            <div class="form-error-feedback"></div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Mobile Number *</label>
                            <input type="tel" name="mobile_number" class="form-control" placeholder="10-digit Mobile" required>
                            <div class="form-error-feedback"></div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Email Address *</label>
                            <input type="email" name="email" class="form-control" placeholder="your.email@example.com" required>
                            <div class="form-error-feedback"></div>
                        </div>

                        <input type="hidden" name="course_interest" value="<?php the_title_attribute(); ?>">

                        <div class="form-check">
                            <input type="checkbox" id="wp_course_consent" name="privacy_consent" checked required>
                            <label for="wp_course_consent" style="font-size: 0.8rem;">I agree to the privacy policy.</label>
                            <div class="form-error-feedback"></div>
                        </div>

                        <button type="submit" class="btn btn-gold btn-course-submit">
                            <span>Submit Registration</span>
                        </button>
                    </form>
                </div>
            </aside>
        </div>
    </div>

<?php get_footer(); ?>
