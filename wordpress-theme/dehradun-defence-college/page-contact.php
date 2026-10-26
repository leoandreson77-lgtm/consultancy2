<?php
/**
 * Template Name: Contact Us Page
 * 
 * @package Dehradun_Defence_College
 */

get_header();

$phone1  = get_theme_mod('ddc_phone_1', '+91 9719104024');
$phone2  = get_theme_mod('ddc_phone_2', '+91 8650666609');
$email   = get_theme_mod('ddc_email', 'dehradundefencecollege@gmail.com');
$address = get_theme_mod('ddc_address', 'Maldevta Road, Near Laal Pull (Red Bridge), Lwarkha, Dehradun, Uttarakhand - 248008');
?>

    <section class="section-padding-sm bg-navy" style="background-image: linear-gradient(135deg, #0B1B3D 0%, #162B56 100%);">
        <div class="container" style="text-align: center;">
            <span class="badge-gold">Get in Touch</span>
            <h1 style="color: #FFFFFF; margin: 0.75rem 0 0.5rem 0;">Contact Us & Campus Location</h1>
            <p style="color: rgba(255,255,255,0.85); font-size: 1.1rem; max-width: 720px; margin: 0 auto;">
                Connect with our admissions desk, request a callback, or plan your visit to our scenic residential campus in Dehradun.
            </p>
        </div>
    </section>

    <section class="section-padding bg-slate">
        <div class="container contact-layout-grid">
            <!-- Left Info Cards -->
            <div>
                <span class="badge-navy">Admissions Office</span>
                <h2 style="margin: 0.75rem 0 1.25rem 0; font-size: 2rem;">We Are Here to Guide You</h2>
                <p style="color: var(--text-muted); line-height: 1.7; margin-bottom: 2rem;">
                    Available 7 days a week to assist aspirants and parents with batch counseling and hostel tours.
                </p>

                <div style="background: #FFFFFF; padding: 1.5rem; border-radius: var(--radius-md); border: 1px solid var(--border-light); box-shadow: var(--shadow-sm); margin-bottom: 1.25rem;">
                    <h4 style="font-size: 1.05rem; color: var(--primary-navy); margin-bottom: 0.25rem;">Direct Admission Hotlines</h4>
                    <p style="font-size: 0.95rem; margin: 0; line-height: 1.6;">
                        <a href="tel:<?php echo esc_attr(preg_replace('/[^\d\+]/', '', $phone1)); ?>" style="color: var(--primary-navy); font-weight: 700;"><?php echo esc_html($phone1); ?></a><br>
                        <a href="tel:<?php echo esc_attr(preg_replace('/[^\d\+]/', '', $phone2)); ?>" style="color: var(--primary-navy); font-weight: 700;"><?php echo esc_html($phone2); ?></a>
                    </p>
                </div>

                <div style="background: #FFFFFF; padding: 1.5rem; border-radius: var(--radius-md); border: 1px solid var(--border-light); box-shadow: var(--shadow-sm); margin-bottom: 1.25rem;">
                    <h4 style="font-size: 1.05rem; color: var(--primary-navy); margin-bottom: 0.25rem;">Email Address</h4>
                    <a href="mailto:<?php echo esc_attr($email); ?>" style="color: var(--primary-navy); font-weight: 600;"><?php echo esc_html($email); ?></a>
                </div>

                <div style="background: #FFFFFF; padding: 1.5rem; border-radius: var(--radius-md); border: 1px solid var(--border-light); box-shadow: var(--shadow-sm);">
                    <h4 style="font-size: 1.05rem; color: var(--primary-navy); margin-bottom: 0.25rem;">Campus Location</h4>
                    <p style="font-size: 0.925rem; color: var(--text-muted); line-height: 1.6; margin: 0;">
                        <?php echo esc_html($address); ?>
                        <br><small style="color: var(--primary-navy); font-weight: 600; display: block; margin-top: 0.35rem;">Conveniently accessible from Sahastradhara Road, JK Tower, Raipur, and Dehradun Railway Station.</small>
                    </p>
                </div>
            </div>

            <!-- Right Form -->
            <div style="background: #FFFFFF; padding: 2.75rem 2.25rem; border-radius: var(--radius-lg); border: 2px solid var(--accent-gold); box-shadow: var(--shadow-lg);">
                <div class="hero-form-header" style="text-align: left; margin-bottom: 1.75rem;">
                    <div style="display: flex; align-items: center; gap: 0.85rem; margin-bottom: 0.75rem; padding-bottom: 0.75rem; border-bottom: 1px solid rgba(212, 175, 55, 0.3);">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo.png'); ?>" alt="Dehradun Defence College Official Emblem" style="width: 52px; height: 52px; object-fit: contain; filter: drop-shadow(0 2px 6px rgba(11,27,61,0.15)); flex-shrink: 0;">
                        <div>
                            <div style="font-size: 1.1rem; font-weight: 800; color: var(--primary-navy); line-height: 1.2;">Dehradun Defence College</div>
                            <span class="badge-saffron" style="font-size: 0.7rem; padding: 2px 8px; margin-top: 2px; display: inline-block;">★ Online Registration for 2027</span>
                        </div>
                    </div>
                    <span class="badge-saffron">Online Registration for 2027</span>
                    <h3 style="font-size: 1.85rem; margin-top: 0.5rem;">Send an Admission Enquiry</h3>
                </div>

                <form action="<?php echo esc_url(admin_url('admin-ajax.php')); ?>" method="POST" class="ddc-enquiry-form" novalidate>
                    <input type="hidden" name="action" value="ddc_submit_enquiry">
                    <input type="hidden" name="nonce" value="<?php echo wp_create_nonce('ddc_enquiry_nonce'); ?>">
                    <input type="text" name="website_url_check" class="hp-field" tabindex="-1" autocomplete="off">
                    <input type="hidden" name="form_start_time" value="<?php echo time(); ?>">

                    <div class="form-status-alert" role="alert"></div>

                    <div class="form-group">
                        <label class="form-label">Full Name *</label>
                        <input type="text" name="full_name" class="form-control" placeholder="Candidate's Full Name" required>
                        <div class="form-error-feedback"></div>
                    </div>

                    <div class="form-row-2col">
                        <div class="form-group">
                            <label class="form-label">Mobile Number *</label>
                            <input type="tel" name="mobile_number" class="form-control" placeholder="10-digit Mobile" required>
                            <div class="form-error-feedback"></div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Email Address *</label>
                            <input type="email" name="email" class="form-control" placeholder="active.email@example.com" required>
                            <div class="form-error-feedback"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Course of Interest *</label>
                        <select name="course_interest" class="form-control" required>
                            <option value="">Select Course</option>
                            <option value="NDA Foundation after 10th">NDA Foundation after 10th</option>
                            <option value="NDA (Girls) after 10th">NDA (Girls) Special Wing</option>
                            <option value="NDA Target Batch 12th">NDA Target / Dropper Batch</option>
                            <option value="CDS Training">CDS Training (IMA, OTA, AFA)</option>
                            <option value="AFCAT">AFCAT Coaching</option>
                            <option value="SSB Training">SSB Interview 14-Day Practical Camp</option>
                        </select>
                        <div class="form-error-feedback"></div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Message / Query</label>
                        <textarea name="message" class="form-control" rows="3" placeholder="Tell us if you need hostel accommodation."></textarea>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" id="wp_c_consent" name="privacy_consent" checked required>
                        <label for="wp_c_consent">I agree to the privacy policy.</label>
                        <div class="form-error-feedback"></div>
                    </div>

                    <button type="submit" class="btn btn-gold btn-lg" style="width: 100%;">
                        <span>Submit Admission Enquiry</span>
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Authentic Campus & Front Office Visual Preview -->
    <section class="section-padding" style="background: #FFFFFF; border-bottom: 1px solid var(--border-light);">
        <div class="container">
            <div class="section-header">
                <span class="badge-navy">Visit Our Campus</span>
                <h2>Front Office Reception & Residential Academy</h2>
                <div class="gold-divider"></div>
                <p>Experience our state-of-the-art infrastructure, transparent parent counseling, and authentic military gurukul atmosphere.</p>
            </div>

            <div class="contact-cards-grid">
                <div style="background: var(--bg-slate); border-radius: var(--radius-lg); overflow: hidden; border: 1px solid var(--border-light); box-shadow: var(--shadow-sm);">
                    <div style="height: 260px; overflow: hidden;">
                        <img src="<?php echo esc_url($theme_uri . '/assets/images/campus-front-office.jpg'); ?>" alt="Official Front Office Reception & Admission Helpdesk" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div style="padding: 1.5rem;">
                        <span class="badge-gold" style="font-size: 0.75rem; margin-bottom: 0.5rem; display: inline-block;">Central Reception</span>
                        <h3 style="font-size: 1.25rem; color: var(--primary-navy); margin-bottom: 0.5rem;">Front Office & Admission Helpdesk</h3>
                        <p style="color: var(--text-muted); font-size: 0.9rem; line-height: 1.6; margin: 0;">
                            Located on Sahastradhara Road, Dehradun. Meet senior admission directors for one-on-one SSB eligibility roadmaps, fee structures, and immediate prospectus allotment.
                        </p>
                    </div>
                </div>

                <div style="background: var(--bg-slate); border-radius: var(--radius-lg); overflow: hidden; border: 1px solid var(--border-light); box-shadow: var(--shadow-sm);">
                    <div style="height: 260px; overflow: hidden;">
                        <img src="<?php echo esc_url($theme_uri . '/assets/images/campus-building-main.jpg'); ?>" alt="Dehradun Defence College Main Campus Building and Hostels" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div style="padding: 1.5rem;">
                        <span class="badge-navy" style="font-size: 0.75rem; margin-bottom: 0.5rem; display: inline-block;">Maldevta Valley</span>
                        <h3 style="font-size: 1.25rem; color: var(--primary-navy); margin-bottom: 0.5rem;">10-Acre Residential Campus</h3>
                        <p style="color: var(--text-muted); font-size: 0.9rem; line-height: 1.6; margin: 0;">
                            Dehradun's 1st defence academy with 100% in-house separate boys & girls hostels, full-scale outdoor obstacle grounds, and distraction-free Himalayan foothill surroundings.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Google Map Embed & Transit Directions -->
    <section class="section-padding" style="background-color: var(--bg-slate);">
        <div class="container">
            <div class="section-header">
                <span class="badge-gold">Directions</span>
                <h2>How to Reach Dehradun Defence College</h2>
                <div class="gold-divider"></div>
                <p>Located on Maldevta Road near Laal Pull (Red Bridge) in the serene foothills of Dehradun.</p>
            </div>
            <div style="border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-lg); border: 2px solid var(--border-light); height: 420px; margin-bottom: 3.5rem;">
                <iframe 
                    src="https://maps.google.com/maps?q=Dehradun%20Defence%20College%20Maldevta%20-%20NDA%20Coaching%20in%20Dehradun&t=m&z=14&output=embed&iwloc=near" 
                    width="100%" 
                    height="100%" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    title="Campus Location Map">
                </iframe>
            </div>

            <!-- Transit Guide Cards -->
            <div class="facilities-grid">
                <div class="feature-box">
                    <div class="feature-icon-wrapper">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M7 17h10"/><path d="M7 13h10"/><path d="M7 9h10"/></svg>
                    </div>
                    <h3>From Dehradun Railway Station</h3>
                    <p style="color: var(--text-muted); font-size: 0.925rem; line-height: 1.6;">
                        <strong>Distance:</strong> ~16 km (Approx. 35 mins)<br>
                        Taxis, auto-rickshaws, and city Vikram vans are readily available towards Raipur / Maldevta. Direct pickup can be arranged on prior intimation.
                    </p>
                </div>

                <div class="feature-box">
                    <div class="feature-icon-wrapper">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17.8 19.2L16 11l3.5-3.5C21 6 21.5 4 21 3.5c-.5-.5-2.5 0-4 1.5L13.5 8.5 5.3 6.7c-.7-.2-1.4.1-1.8.7l-.5.7 6.2 3.8-3.4 3.4-2.8-.7c-.4-.1-.8.1-1.1.4l-.4.4 2.8 2.2 2.2 2.8.4-.4c.3-.3.5-.7.4-1.1l-.7-2.8 3.4-3.4 3.8 6.2.7-.5c.6-.4.9-1.1.7-1.8z"/></svg>
                    </div>
                    <h3>From Jolly Grant Airport (DED)</h3>
                    <p style="color: var(--text-muted); font-size: 0.925rem; line-height: 1.6;">
                        <strong>Distance:</strong> ~28 km (Approx. 45 mins)<br>
                        Direct scenic drive via Thano - Raipur route without entering crowded city traffic. Airport cabs take you directly to our Maldevta campus gates.
                    </p>
                </div>

                <div class="feature-box">
                    <div class="feature-icon-wrapper">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="1" y="3" width="15" height="13"/><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg>
                    </div>
                    <h3>From ISBT Dehradun (Bus Stand)</h3>
                    <p style="color: var(--text-muted); font-size: 0.925rem; line-height: 1.6;">
                        <strong>Distance:</strong> ~22 km (Approx. 45 mins)<br>
                        Interstate buses connect Delhi, Chandigarh, UP, Bihar, and Haryana to ISBT Dehradun. Local connecting taxis operate regularly to Maldevta.
                    </p>
                </div>

                <div class="feature-box">
                    <div class="feature-icon-wrapper">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                    </div>
                    <h3>From Sahastradhara Rd / JK Tower</h3>
                    <p style="color: var(--text-muted); font-size: 0.925rem; line-height: 1.6;">
                        <strong>Distance:</strong> ~11 km (Approx. 20 mins)<br>
                        Aspirants seeking <strong>NDA coaching near Sahastradhara Road Dehradun</strong> or a <strong>top-rated defence academy near JK Tower Dehradun</strong> reach our Maldevta campus via Raipur Road in just 20 minutes, with institute transport available.
                    </p>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
