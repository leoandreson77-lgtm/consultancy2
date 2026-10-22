<?php
/**
 * Quick Admission Enquiry Modal - Dehradun Defence College
 */
require_once __DIR__ . '/../config.php';
?>
<!-- Quick Admission Enquiry Modal Window -->
<div class="ddc-modal-overlay" id="enquiryModal" role="dialog" aria-modal="true" aria-labelledby="modalTitle">
    <div class="ddc-modal-box">
        <button type="button" class="ddc-modal-close close-enquiry-modal" aria-label="Close Modal">&times;</button>
        
        <div class="hero-form-header" style="margin-top: 0.5rem; text-align: center;">
            <div style="display: flex; align-items: center; justify-content: center; gap: 0.85rem; margin-bottom: 0.65rem;">
                <img src="assets/images/logo.png" alt="Dehradun Defence College Logo" style="width: 54px; height: 54px; object-fit: contain; filter: drop-shadow(0 2px 6px rgba(0,0,0,0.3)); flex-shrink: 0;">
                <div style="text-align: left;">
                    <div style="font-size: 1.05rem; font-weight: 800; color: #FFFFFF; line-height: 1.2;">Dehradun Defence College</div>
                    <span class="badge-gold" style="font-size: 0.68rem; padding: 2px 7px; display: inline-block; margin-top: 2px;">★ Admissions Open 2026-2027</span>
                </div>
            </div>
            <h3 id="modalTitle" style="margin: 0.35rem 0 0.25rem 0; font-size: 1.35rem; color: var(--accent-gold);">Admission Enquiry &amp; Registration</h3>
            <p style="font-size: 0.85rem; color: rgba(255,255,255,0.85); margin-bottom: 0;">Fill out the form below. Our senior defence counselor will contact you within 24 hours.</p>
        </div>

        <form action="send-enquiry.php" method="POST" class="ddc-enquiry-form" novalidate>
            <!-- Anti-Spam Hidden Fields -->
            <input type="text" name="website_url_check" class="hp-field" tabindex="-1" autocomplete="off">
            <input type="hidden" name="form_start_time" value="<?php echo time(); ?>">

            <!-- Form Status Messages -->
            <div class="form-status-alert" role="alert"></div>

            <div class="form-group">
                <label class="form-label" for="modal_name">Full Name *</label>
                <input type="text" id="modal_name" name="full_name" class="form-control" placeholder="Candidate's Full Name" required>
                <div class="form-error-feedback"></div>
            </div>

            <div class="form-row-2col">
                <div class="form-group">
                    <label class="form-label" for="modal_mobile">Mobile Number *</label>
                    <input type="tel" id="modal_mobile" name="mobile_number" class="form-control" placeholder="10-Digit Mobile" required>
                    <div class="form-error-feedback"></div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="modal_email">Email Address *</label>
                    <input type="email" id="modal_email" name="email" class="form-control" placeholder="active.email@example.com" required>
                    <div class="form-error-feedback"></div>
                </div>
            </div>

            <div class="form-row-2col">
                <div class="form-group">
                    <label class="form-label" for="modal_course">Course of Interest *</label>
                    <select id="modal_course" name="course_interest" class="form-control" required>
                        <option value="">Select Course</option>
                        <option value="NDA Foundation After 10th">NDA Foundation After 10th</option>
                        <option value="NDA (Girls) After 10th">NDA (Girls) Special Wing</option>
                        <option value="NDA Target / Dropper Batch (After 12th)">NDA Target / Dropper Batch (After 12th)</option>
                        <option value="CDS Training (Combined Defence Services)">CDS Training (IMA, OTA, AFA, INA)</option>
                        <option value="AFCAT Coaching">AFCAT Coaching</option>
                        <option value="SSB Interview 14-Day Camp">SSB Interview Comprehensive Training</option>
                        <option value="RIMC & Sainik School Coaching">RIMC & Sainik School Coaching</option>
                        <option value="CAPF (AC) & OTA Wing">CAPF (AC) & OTA Wing</option>
                    </select>
                    <div class="form-error-feedback"></div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="modal_edu">Current Education Level</label>
                    <select id="modal_edu" name="education_level" class="form-control">
                        <option value="10th Appearing / Passed">10th Appearing / Passed</option>
                        <option value="11th Studying">11th Studying</option>
                        <option value="12th Appearing / Passed">12th Appearing / Passed</option>
                        <option value="Graduate / Final Year">Graduate / Final Year</option>
                        <option value="8th or Below (RIMC/Sainik)">8th or Below (RIMC/Sainik)</option>
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
                <label class="form-label" for="modal_msg">Message / Query (Optional)</label>
                <textarea id="modal_msg" name="message" class="form-control" rows="2" placeholder="Tell us if you need hostel accommodation, specific batch dates, etc."></textarea>
            </div>

            <div class="form-check">
                <input type="checkbox" id="modal_consent" name="privacy_consent" checked required>
                <label for="modal_consent">
                    I agree to the <a href="privacy-policy.php" target="_blank" style="color: var(--primary-navy); font-weight: 600; text-decoration: underline;">Privacy Policy</a> and authorize Dehradun Defence College to contact me via Call, SMS, or WhatsApp regarding admission guidance.
                </label>
                <div class="form-error-feedback"></div>
            </div>

            <button type="submit" class="btn btn-gold" style="width: 100%;">
                <span>Submit Admission Enquiry</span>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </button>
        </form>
    </div>
</div>

<!-- Dedicated Scholarship & Fee Concession Modal (Client Requested) -->
<div class="ddc-modal-overlay" id="scholarshipModal" role="dialog" aria-modal="true" aria-labelledby="scholarshipTitle">
    <div class="ddc-modal-box scholarship-modal-card">
        <button type="button" class="ddc-modal-close close-scholarship-modal" aria-label="Close Modal">&times;</button>
        
        <div class="hero-form-header" style="margin-top: 0.25rem;">
            <span class="badge-gold">National Defence Scholarship 2026-2027</span>
            <h3 id="scholarshipTitle" style="margin-top: 0.4rem; color: var(--primary-navy);">Defence & Meritorious Scholarship Scheme</h3>
            <p>Dehradun Defence College honors national service with special institutional concessions and grants.</p>
        </div>

        <div class="scholarship-scheme-grid">
            <div class="scholarship-scheme-item">
                <h4>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" style="color: #166534;"><path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"/></svg>
                    Veer Naris & Martyr's Children
                </h4>
                <p><strong>100% Tuition Fee Waiver</strong> in honor of their ultimate supreme sacrifice for Bharat. Full academic preparation for NDA, CDS, AFCAT & SSB.</p>
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
                    Serving & Ex-Servicemen Wards
                </h4>
                <p>Up to <strong>25% Fee Concession</strong> for children of Army, Navy, Air Force, Coast Guard & Paramilitary personnel.</p>
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
