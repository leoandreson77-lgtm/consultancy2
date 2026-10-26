<?php
/**
 * Contact Us & Location - Dehradun Defence College
 */
require_once __DIR__ . '/config.php';

$page_title = 'Contact Us & Campus Directions | Dehradun Defence College';
$page_desc = 'Contact Dehradun Defence College admissions office. Phone: +91 9719104024. Campus location: Maldevta Road, Near Laal Pull, Dehradun, Uttarakhand. How to reach & map.';
$current_page = 'contact';

include __DIR__ . '/includes/header.php';
?>

    <!-- Page Header Banner -->
    <section class="section-padding-sm bg-navy" style="background-image: linear-gradient(135deg, #0B1B3D 0%, #162B56 100%);">
        <div class="container" style="text-align: center;">
            <span class="badge-gold">Get in Touch</span>
            <h1 style="color: #FFFFFF; margin: 0.75rem 0 0.5rem 0;">Contact Us & Campus Location</h1>
            <p style="color: rgba(255,255,255,0.85); font-size: 1.1rem; max-width: 720px; margin: 0 auto;">
                Connect with our admissions desk, request a callback, or plan your visit to our scenic residential campus in Dehradun.
            </p>
        </div>
    </section>

    <!-- Main Contact & Enquiry Section -->
    <section class="section-padding bg-slate">
        <div class="container contact-layout-grid">
            <!-- Left Contact Info Cards -->
            <div class="contact-info-panel">
                <span class="badge-navy">Admissions Office</span>
                <h2 style="margin: 0.75rem 0 1.25rem 0; font-size: 2rem;">We Are Here to Guide You</h2>
                <p style="color: var(--text-muted); line-height: 1.7; margin-bottom: 2rem;">
                    Whether you are an aspirant seeking career guidance or a parent evaluating hostel facilities, our team is available 7 days a week to assist you.
                </p>

                <!-- Phone Contact Box -->
                <div style="background: #FFFFFF; padding: 1.5rem; border-radius: var(--radius-md); border: 1px solid var(--border-light); box-shadow: var(--shadow-sm); margin-bottom: 1.25rem; display: flex; gap: 1.25rem; align-items: flex-start;">
                    <div style="width: 48px; height: 48px; background-color: var(--bg-light-blue); color: var(--primary-navy); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                    </div>
                    <div>
                        <h4 style="font-size: 1.05rem; color: var(--primary-navy); margin-bottom: 0.25rem;">Direct Admission Hotlines</h4>
                        <p style="font-size: 0.95rem; margin: 0; line-height: 1.6;">
                            <a href="tel:<?php echo CONTACT_PHONE_1_RAW; ?>" style="color: var(--primary-navy); font-weight: 700;"><?php echo CONTACT_PHONE_1; ?></a><br>
                            <a href="tel:<?php echo CONTACT_PHONE_2_RAW; ?>" style="color: var(--primary-navy); font-weight: 700;"><?php echo CONTACT_PHONE_2; ?></a><br>
                            <a href="tel:<?php echo CONTACT_PHONE_3_RAW; ?>" style="color: var(--primary-navy); font-weight: 700;"><?php echo CONTACT_PHONE_3; ?></a>
                        </p>
                    </div>
                </div>

                <!-- WhatsApp Contact Box -->
                <div style="background: #FFFFFF; padding: 1.5rem; border-radius: var(--radius-md); border: 1px solid var(--border-light); box-shadow: var(--shadow-sm); margin-bottom: 1.25rem; display: flex; gap: 1.25rem; align-items: flex-start;">
                    <div style="width: 48px; height: 48px; background-color: rgba(37, 211, 102, 0.12); color: #25D366; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
                    </div>
                    <div>
                        <h4 style="font-size: 1.05rem; color: var(--primary-navy); margin-bottom: 0.25rem;">WhatsApp Admissions Desk</h4>
                        <p style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 0.5rem;">Immediate responses on batch dates & brochure PDFs.</p>
                        <a href="<?php echo WHATSAPP_LINK; ?>" class="btn btn-primary btn-sm" style="background-color: #25D366; border-color: #25D366; color: #fff;" target="_blank" rel="noopener">
                            Chat on WhatsApp Now
                        </a>
                    </div>
                </div>

                <!-- Email & Office Hours Box -->
                <div style="background: #FFFFFF; padding: 1.5rem; border-radius: var(--radius-md); border: 1px solid var(--border-light); box-shadow: var(--shadow-sm); margin-bottom: 1.25rem; display: flex; gap: 1.25rem; align-items: flex-start;">
                    <div style="width: 48px; height: 48px; background-color: var(--bg-light-blue); color: var(--primary-navy); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                    </div>
                    <div>
                        <h4 style="font-size: 1.05rem; color: var(--primary-navy); margin-bottom: 0.25rem;">Email Address</h4>
                        <a href="mailto:<?php echo CONTACT_EMAIL; ?>" style="color: var(--primary-navy); font-weight: 600; font-size: 0.95rem;"><?php echo CONTACT_EMAIL; ?></a>
                        <p style="font-size: 0.85rem; color: var(--text-muted); margin-top: 0.25rem;">
                            <strong>Office Hours:</strong> <?php echo OFFICE_HOURS; ?>
                        </p>
                    </div>
                </div>

                <!-- Campus Address Box -->
                <div style="background: #FFFFFF; padding: 1.5rem; border-radius: var(--radius-md); border: 1px solid var(--border-light); box-shadow: var(--shadow-sm); display: flex; gap: 1.25rem; align-items: flex-start;">
                    <div style="width: 48px; height: 48px; background-color: var(--bg-light-blue); color: var(--primary-navy); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                    </div>
                    <div>
                        <h4 style="font-size: 1.05rem; color: var(--primary-navy); margin-bottom: 0.25rem;">Campus Location</h4>
                        <p style="font-size: 0.925rem; color: var(--text-muted); line-height: 1.6; margin: 0;">
                            <?php echo CONTACT_ADDRESS; ?>
                            <br><small style="color: var(--primary-navy); font-weight: 600; display: block; margin-top: 0.35rem;">Conveniently accessible from Sahastradhara Road, JK Tower, Raipur, and Dehradun Railway Station.</small>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Right Comprehensive Enquiry Form -->
            <div style="background: #FFFFFF; padding: 2.75rem 2.25rem; border-radius: var(--radius-lg); border: 2px solid var(--accent-gold); box-shadow: var(--shadow-lg);">
                <div class="hero-form-header" style="text-align: left; margin-bottom: 1.75rem;">
                    <div style="display: flex; align-items: center; gap: 0.85rem; margin-bottom: 0.75rem; padding-bottom: 0.75rem; border-bottom: 1px solid rgba(212, 175, 55, 0.3);">
                        <img src="assets/images/logo.png" alt="Dehradun Defence College Official Emblem" style="width: 52px; height: 52px; object-fit: contain; filter: drop-shadow(0 2px 6px rgba(11,27,61,0.15)); flex-shrink: 0;">
                        <div>
                            <div style="font-size: 1.1rem; font-weight: 800; color: var(--primary-navy); line-height: 1.2;">Dehradun Defence College</div>
                            <span class="badge-saffron" style="font-size: 0.7rem; padding: 2px 8px; margin-top: 2px; display: inline-block;">★ Online Registration for 2027</span>
                        </div>
                    </div>
                    <h3 style="font-size: 1.75rem; margin-top: 0.25rem;">Send an Admission Enquiry</h3>
                    <p>Complete this form to receive our official prospectus, fee breakdown, and counseling call.</p>
                </div>

                <form action="send-enquiry.php" method="POST" class="ddc-enquiry-form" novalidate>
                    <input type="text" name="website_url_check" class="hp-field" tabindex="-1" autocomplete="off">
                    <input type="hidden" name="form_start_time" value="<?php echo time(); ?>">

                    <div class="form-status-alert" role="alert"></div>

                    <div class="form-group">
                        <label class="form-label" for="contact_name">Full Name *</label>
                        <input type="text" id="contact_name" name="full_name" class="form-control" placeholder="Candidate's Full Name" required>
                        <div class="form-error-feedback"></div>
                    </div>

                    <div class="form-row-2col">
                        <div class="form-group">
                            <label class="form-label" for="contact_mobile">Mobile Number (WhatsApp Preferred) *</label>
                            <input type="tel" id="contact_mobile" name="mobile_number" class="form-control" placeholder="10-digit Mobile" required>
                            <div class="form-error-feedback"></div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="contact_email">Email Address *</label>
                            <input type="email" id="contact_email" name="email" class="form-control" placeholder="active.email@example.com" required>
                            <div class="form-error-feedback"></div>
                        </div>
                    </div>

                    <div class="form-row-2col">
                        <div class="form-group">
                            <label class="form-label" for="contact_course">Course of Interest *</label>
                            <select id="contact_course" name="course_interest" class="form-control" required>
                                <option value="">Select Course</option>
                                <option value="NDA Foundation after 10th">NDA Foundation after 10th</option>
                                <option value="NDA (Girls) after 10th">NDA (Girls) Special Wing</option>
                                <option value="NDA Foundation after 12th">NDA Target / Dropper Batch (After 12th)</option>
                                <option value="CDS Training">CDS Training (IMA, OTA, AFA)</option>
                                <option value="AFCAT">AFCAT Coaching</option>
                                <option value="SSB Training">SSB Interview 14-Day Practical Camp</option>
                                <option value="RIMC / Sainik School">RIMC & Sainik School Coaching</option>
                                <option value="CAPF (AC) Wing">CAPF (AC) & OTA Special Wing</option>
                            </select>
                            <div class="form-error-feedback"></div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="contact_edu">Current Education Level</label>
                            <select id="contact_edu" name="education_level" class="form-control">
                                <option value="10th Appearing / Passed">10th Appearing / Passed</option>
                                <option value="11th Class">11th Class</option>
                                <option value="12th Appearing / Passed">12th Appearing / Passed</option>
                                <option value="Graduate / Final Year">Graduate / Final Year</option>
                                <option value="Below 10th (RIMC / Sainik)">Below 10th (RIMC / Sainik)</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Preferred Contact Method</label>
                        <div style="display: flex; gap: 1.5rem; font-size: 0.9rem; padding: 0.25rem 0;">
                            <label style="display: flex; align-items: center; gap: 0.4rem; cursor: pointer;">
                                <input type="radio" name="preferred_contact" value="Call" checked> Phone Call
                            </label>
                            <label style="display: flex; align-items: center; gap: 0.4rem; cursor: pointer;">
                                <input type="radio" name="preferred_contact" value="WhatsApp"> WhatsApp
                            </label>
                            <label style="display: flex; align-items: center; gap: 0.4rem; cursor: pointer;">
                                <input type="radio" name="preferred_contact" value="Email"> Email
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="contact_msg">Your Query or Specific Questions</label>
                        <textarea id="contact_msg" name="message" class="form-control" rows="3" placeholder="Tell us about your background, need for hostel accommodation, or preferred batch start date."></textarea>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" id="c_consent" name="privacy_consent" checked required>
                        <label for="c_consent">
                            I accept the privacy policy and authorize Dehradun Defence College to send me course notifications.
                        </label>
                        <div class="form-error-feedback"></div>
                    </div>

                    <button type="submit" class="btn btn-gold btn-lg" style="width: 100%;">
                        <span>Submit Admission Enquiry</span>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
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
                        <img src="assets/images/campus-front-office.jpg" alt="Official Front Office Reception & Admission Helpdesk" style="width: 100%; height: 100%; object-fit: cover;">
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
                        <img src="assets/images/campus-building-main.jpg" alt="Dehradun Defence College Main Campus Building and Hostels" style="width: 100%; height: 100%; object-fit: cover;">
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

    <!-- Google Map Embed & How to Reach Instructions -->
    <section class="section-padding" id="how-to-reach" style="background-color: var(--bg-slate);">
        <div class="container">
            <div class="section-header">
                <span class="badge-gold">Directions</span>
                <h2>How to Reach Dehradun Defence College</h2>
                <div class="gold-divider"></div>
                <p>Located on Maldevta Road near Laal Pull (Red Bridge) in the peaceful outskirts of Dehradun.</p>
            </div>

            <!-- Google Map -->
            <div style="border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-lg); border: 2px solid var(--border-light); height: 420px; margin-bottom: 3.5rem;">
                <iframe 
                    src="<?php echo GOOGLE_MAPS_EMBED_URL; ?>" 
                    width="100%" 
                    height="100%" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade"
                    title="Dehradun Defence College Campus Location Map">
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

<?php include __DIR__ . '/includes/footer.php'; ?>
