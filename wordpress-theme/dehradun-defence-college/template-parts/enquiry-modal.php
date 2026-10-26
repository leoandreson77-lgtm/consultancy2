<?php
/**
 * Template Part: Admission Enquiry Modal Window
 * 
 * @package Dehradun_Defence_College
 */
?>
<!-- Quick Admission Enquiry Modal Window -->
<div class="ddc-modal-overlay" id="enquiryModal" role="dialog" aria-modal="true" aria-labelledby="wpModalTitle">
    <div class="ddc-modal-box">
        <button type="button" class="ddc-modal-close close-enquiry-modal" aria-label="<?php esc_attr_e('Close Modal', 'dehradun-defence-college'); ?>">&times;</button>
        
        <div class="hero-form-header" style="background: linear-gradient(135deg, #0B1B3D 0%, #162B56 100%); padding: 1.25rem 1.5rem; border-radius: var(--radius-md); margin-bottom: 1.5rem; text-align: center; border: 2px solid var(--accent-gold); box-shadow: 0 4px 15px rgba(11,27,61,0.15);">
            <div style="display: flex; align-items: center; justify-content: center; gap: 0.85rem; margin-bottom: 0.65rem;">
                <img src="<?php echo esc_url($theme_uri . '/assets/images/logo.png'); ?>" alt="Dehradun Defence College Logo" style="width: 52px; height: 52px; object-fit: contain; filter: drop-shadow(0 2px 6px rgba(0,0,0,0.3)); flex-shrink: 0;">
                <div style="text-align: left;">
                    <div style="font-size: 1.1rem; font-weight: 800; color: #FFFFFF; line-height: 1.2;">Dehradun Defence College</div>
                    <span class="badge-gold" style="font-size: 0.68rem; padding: 2px 7px; display: inline-block; margin-top: 2px;">★ Online Registration for 2027</span>
                </div>
            </div>
            <h3 id="wpModalTitle" style="margin: 0.4rem 0 0.35rem 0; font-size: 1.45rem; color: #FFD700; font-weight: 800; text-shadow: 0 1px 3px rgba(0,0,0,0.4);">Career Counselling Form</h3>
            <p style="font-size: 0.875rem; color: #FFFFFF; margin-bottom: 0; line-height: 1.45; font-weight: 500;">Fill out the form below. Our senior defence counselor will contact you within 24 hours.</p>
        </div>

        <form action="<?php echo esc_url(admin_url('admin-ajax.php')); ?>" method="POST" class="ddc-enquiry-form" novalidate>
            <input type="hidden" name="action" value="ddc_submit_enquiry">
            <input type="hidden" name="nonce" value="<?php echo wp_create_nonce('ddc_enquiry_nonce'); ?>">
            <!-- Anti-Spam Hidden Field -->
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
                    <input type="tel" name="mobile_number" class="form-control" placeholder="10-Digit Mobile" required>
                    <div class="form-error-feedback"></div>
                </div>

                <div class="form-group">
                    <label class="form-label">Email Address *</label>
                    <input type="email" name="email" class="form-control" placeholder="active.email@example.com" required>
                    <div class="form-error-feedback"></div>
                </div>
            </div>

            <div class="form-row-2col">
                <div class="form-group">
                    <label class="form-label">Course of Interest *</label>
                    <select name="course_interest" class="form-control" required>
                        <option value="">Select Course</option>
                        <option value="NDA Foundation After 10th">NDA Foundation After 10th</option>
                        <option value="NDA (Girls) After 10th">NDA (Girls) Special Wing</option>
                        <option value="NDA Target / Dropper Batch (After 12th)">NDA Target / Dropper Batch</option>
                        <option value="CDS Training (Combined Defence Services)">CDS Training (IMA, OTA, AFA, INA)</option>
                        <option value="AFCAT Coaching">AFCAT Coaching</option>
                        <option value="SSB Interview 14-Day Camp">SSB Interview Comprehensive Training</option>
                        <option value="RIMC & Sainik School Coaching">RIMC & Sainik School Coaching</option>
                    </select>
                    <div class="form-error-feedback"></div>
                </div>

                <div class="form-group">
                    <label class="form-label">Current Education Level</label>
                    <select name="education_level" class="form-control">
                        <option value="10th Appearing / Passed">10th Appearing / Passed</option>
                        <option value="11th Studying">11th Studying</option>
                        <option value="12th Appearing / Passed">12th Appearing / Passed</option>
                        <option value="Graduate / Final Year">Graduate / Final Year</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">Preferred Contact Method</label>
                <div style="display: flex; gap: 1.5rem; font-size: 0.875rem; padding: 0.2rem 0;">
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
                <label class="form-label">Message / Query (Optional)</label>
                <textarea name="message" class="form-control" rows="2" placeholder="Hostel requirements or specific queries"></textarea>
            </div>

            <div class="form-check">
                <input type="checkbox" id="wp_modal_consent" name="privacy_consent" checked required>
                <label for="wp_modal_consent">
                    I agree to the <a href="<?php echo esc_url(home_url('/privacy-policy/')); ?>" target="_blank" style="color: var(--primary-navy); font-weight: 600; text-decoration: underline;">Privacy Policy</a> and authorize Dehradun Defence College to contact me.
                </label>
                <div class="form-error-feedback"></div>
            </div>

            <button type="submit" class="btn btn-gold" style="width: 100%;">
                <span>Submit Admission Enquiry</span>
            </button>
        </form>
    </div>
</div>

<!-- Dedicated Scholarship & Fee Concession Modal (Client Requested) -->
<div class="ddc-modal-overlay" id="scholarshipModal" role="dialog" aria-modal="true" aria-labelledby="scholarshipTitle">
    <div class="ddc-modal-box scholarship-modal-card">
        <button type="button" class="ddc-modal-close close-scholarship-modal" aria-label="Close Modal">&times;</button>
        
        <div class="hero-form-header" style="margin-top: 0.25rem;">
            <span class="badge-gold">National Defence Scholarship 2027</span>
            <h3 id="scholarshipTitle" style="margin-top: 0.4rem; color: var(--primary-navy);">Defence &amp; Meritorious Scholarship Scheme</h3>
            <p>Dehradun Defence College honors national service with special institutional concessions and grants.</p>
        </div>

        <!-- Class 9th & 10th Online Test Callout Card -->
        <div style="background: linear-gradient(135deg, rgba(11,27,61,0.95) 0%, rgba(13,40,80,0.95) 100%); border: 1.5px solid #FFD700; border-radius: var(--radius-md); padding: 1.25rem; margin-bottom: 1.5rem; text-align: center; box-shadow: 0 4px 15px rgba(0,0,0,0.2);">
            <span class="badge-saffron pulse-badge" style="font-size: 0.72rem; padding: 2px 8px; margin-bottom: 0.5rem; display: inline-flex;">
                🔥 CLASS 9th &amp; 10th ONLINE TEST LIVE
            </span>
            <h4 style="color: #FFFFFF; font-size: 1.1rem; margin: 0.25rem 0 0.35rem 0;">Scholarship Test 9th &amp; 10th (Session 2027)</h4>
            <p style="color: #FFD700; font-style: italic; font-size: 0.85rem; margin-bottom: 0.75rem;">"Be brave. Be confident. Be the future officer of India"</p>
            <p style="color: rgba(255,255,255,0.85); font-size: 0.825rem; margin-bottom: 1rem; line-height: 1.4;">
                50 Questions • 100 Marks • Up to 100% Tuition Fee Waiver on NDA Foundation
            </p>
            <a href="<?php echo SCHOLARSHIP_TEST_URL; ?>" target="_blank" rel="noopener" class="btn btn-gold btn-sm" style="display: inline-flex; width: auto; font-weight: 800; padding: 0.55rem 1.25rem;">
                <span>START ONLINE TEST NOW 🚀</span>
            </a>
        </div>

        <div class="scholarship-scheme-grid">

            <div class="scholarship-scheme-item">
                <h4>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" style="color: #166534;"><path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"/></svg>
                    Veer Naris &amp; Martyr's Children
                </h4>
                <p><strong>100% Tuition Fee Waiver</strong> in honor of their ultimate supreme sacrifice for Bharat. Full academic preparation for NDA, CDS, AFCAT &amp; SSB.</p>
            </div>

            <div class="scholarship-scheme-item">
                <h4>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" style="color: #9D174D;"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
                    Betiyon Ka Raksha Samman
                </h4>
                <p>Special fee grants for meritorious female cadets applying for <strong>NDA (Girls) Wing</strong> and <strong>MNS BSc Nursing + NEET UG</strong> residential batches.</p>
            </div>

            <div class="scholarship-scheme-item">
                <h4>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" style="color: var(--accent-gold-hover);"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
                    Serving &amp; Ex-Servicemen Wards
                </h4>
                <p>Up to <strong>25% Fee Concession</strong> for children of Army, Navy, Air Force, Coast Guard &amp; Paramilitary personnel.</p>
            </div>
        </div>

        <div style="display: flex; gap: 0.75rem; flex-wrap: wrap;">
            <button type="button" class="btn btn-gold open-enquiry-modal close-scholarship-modal" data-course="Scholarship & Fee Concession" style="flex: 1; justify-content: center;">
                <span>Apply for Scholarship / Concession</span>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </button>
            <button type="button" class="btn btn-outline-navy close-scholarship-modal" style="justify-content: center;">
                <span>Close</span>
            </button>
        </div>
    </div>
</div>
