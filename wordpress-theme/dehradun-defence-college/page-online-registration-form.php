<?php
/**
 * Template Name: Online Registration Form
 * 
 * @package Dehradun_Defence_College
 */

get_header();
?>

    <!-- Page Header Title Bar -->
    <section class="section-padding-sm bg-navy" style="background-image: linear-gradient(135deg, #0B1B3D 0%, #162B56 100%);">
        <div class="container" style="text-align: center;">
            <div style="display: flex; align-items: center; justify-content: center; gap: 0.5rem; margin-bottom: 0.5rem; font-size: 0.85rem; color: rgba(255,255,255,0.7);">
                <a href="<?php echo esc_url(home_url('/')); ?>" style="color: rgba(255,255,255,0.8); text-decoration: none;">Home</a>
                <span>/</span>
                <span style="color: var(--accent-gold); font-weight: 600;">Online Registration for 2027</span>
            </div>
            <span class="badge-gold">Admission Session 2027</span>
            <h1 style="color: #FFFFFF; margin: 0.75rem 0 0.5rem 0; font-size: 2.5rem;">Online Registration for 2027</h1>
            <p style="color: rgba(255,255,255,0.85); font-size: 1.1rem; max-width: 780px; margin: 0 auto;">
                Official online registration portal for NDA Foundation, CDS, AFCAT, and SSB practical training batches with residential campus hostel for 2027 session.
            </p>
        </div>
    </section>

    <!-- Main Section with Hero Banner and 2-Column Form Layout -->
    <section class="section-padding bg-slate">
        <div class="container">
            
            <!-- Real Official Hero Banner from DDC -->
            <div class="registration-hero-banner">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/online-registration-banner.jpg'); ?>" alt="Dehradun Defence College Latest Selections &amp; Cadets Registration Banner" loading="eager">
            </div>

            <div class="registration-layout-grid" id="registration-form-section">
                <!-- Left Column: The Comprehensive Online Registration Form -->
                <div class="registration-form-card">
                    <div style="display: flex; align-items: center; gap: 1.15rem; margin-bottom: 1.75rem; padding-bottom: 1.25rem; border-bottom: 2px solid rgba(212, 175, 55, 0.35);">
                        <img src="<?php echo esc_url($theme_uri . '/assets/images/logo.png'); ?>" alt="Dehradun Defence College Official Emblem" style="width: 72px; height: 72px; object-fit: contain; filter: drop-shadow(0 4px 10px rgba(11,27,61,0.2)); flex-shrink: 0;">
                        <div>
                            <div style="display: flex; gap: 0.5rem; align-items: center; flex-wrap: wrap; margin-bottom: 0.35rem;">
                                <span class="badge-saffron" style="font-size: 0.72rem; padding: 2px 8px;">★ Session 2027</span>
                                <span class="badge-gold" style="font-size: 0.72rem; padding: 2px 8px;">Official Application</span>
                            </div>
                            <h2 style="font-size: clamp(1.3rem, 2vw, 1.75rem); color: var(--primary-navy); margin: 0; line-height: 1.2;">Candidate Admission Application</h2>
                            <p style="color: var(--text-muted); font-size: 0.88rem; margin: 0.25rem 0 0 0; line-height: 1.4;">
                                Dehradun Defence College &bull; NDA, CDS, SSB &amp; Schooling Foundation
                            </p>
                        </div>
                    </div>

                    <!-- Scholarship Test Alert Banner for Aspirants -->
                    <div class="test-alert-banner" style="margin-bottom: 1.5rem; background: linear-gradient(90deg, #0B1B3D 0%, #162B56 100%);">
                        <div class="test-alert-banner-left">
                            <span class="test-alert-badge">CLASS 9 &amp; 10 TEST</span>
                            <div class="test-alert-text">
                                Have you taken the <strong>Scholarship Test 2027</strong>? Attempt 50 MCQs to unlock up to <strong>100% Tuition Waiver</strong>!
                            </div>
                        </div>
                        <a href="<?php echo SCHOLARSHIP_TEST_URL; ?>" target="_blank" rel="noopener" class="btn btn-gold btn-sm" style="white-space: nowrap; font-weight: 800;">
                            <span>Take Online Test →</span>
                        </a>
                    </div>

                    <form action="<?php echo esc_url(admin_url('admin-ajax.php')); ?>" method="POST" enctype="multipart/form-data" class="ddc-enquiry-form" novalidate id="onlineRegistrationForm">

                        <input type="hidden" name="action" value="ddc_submit_enquiry">
                        <input type="hidden" name="nonce" value="<?php echo wp_create_nonce('ddc_enquiry_nonce'); ?>">
                        <input type="hidden" name="form_type" value="online_registration">
                        <input type="hidden" name="payment_mode" value="online_qr">
                        <input type="text" name="website_url_check" class="hp-field" tabindex="-1" autocomplete="off">
                        <input type="hidden" name="form_start_time" value="<?php echo time(); ?>">

                        <div class="form-status-alert" role="alert"></div>

                        <!-- 1. Seat Reservation & Online Fee Payment (Official Canara Bank Standee & POD) -->
                        <div class="ddc-form-section-title" style="margin-top: 0.5rem;">
                            <span class="section-step-badge">1</span>
                            <h3>Online Fee Payment &amp; Seat Reservation (Canara Bank Standee QR)</h3>
                        </div>

                        <div id="onlinePaymentSection" style="margin-bottom: 2rem;">
                            <div class="ddc-payment-standee-card">
                                <div class="payment-standee-inner-grid">
                                    <!-- QR Frame -->
                                    <div class="standee-qr-frame">
                                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/ddc-payment-qr.png'); ?>" alt="Dehradun Defence College Official Payment Standee QR Code">
                                        <span class="scan-badge">SCAN TO PAY (ALL UPI)</span>
                                        <div style="font-size: 0.75rem; color: #475569; margin-top: 5px; font-weight: 600;">
                                            GPay &bull; PhonePe &bull; Paytm &bull; BHIM
                                        </div>
                                    </div>

                                    <!-- Bank Account Credentials -->
                                    <div class="bank-details-wrapper">
                                        <div class="bank-details-header">
                                            <h4>
                                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect width="20" height="14" x="2" y="5" rx="2"></rect><line x1="2" x2="22" y1="10" y2="10"></line></svg>
                                                <span>Official Bank Details</span>
                                            </h4>
                                            <span style="background: rgba(22, 163, 74, 0.25); color: #86efac; border: 1px solid #22c55e; padding: 2px 8px; border-radius: 999px; font-size: 0.72rem; font-weight: 800;">
                                                Verified Current A/C
                                            </span>
                                        </div>

                                        <div class="bank-row">
                                            <span class="bank-lbl">Holder Name:</span>
                                            <span class="bank-val">Dehradun Defence College</span>
                                        </div>

                                        <div class="bank-row">
                                            <span class="bank-lbl">Bank Name:</span>
                                            <span class="bank-val">Canara Bank</span>
                                        </div>

                                        <div class="bank-row">
                                            <span class="bank-lbl">Account Number:</span>
                                            <span class="bank-val mono">
                                                <span>120003029000</span>
                                                <button type="button" class="copy-badge-btn" data-copy="120003029000" title="Copy Account Number">
                                                    📋 Copy
                                                </button>
                                            </span>
                                        </div>

                                        <div class="bank-row">
                                            <span class="bank-lbl">IFSC Code:</span>
                                            <span class="bank-val mono">
                                                <span>CNRB0018515</span>
                                                <button type="button" class="copy-badge-btn" data-copy="CNRB0018515" title="Copy IFSC Code">
                                                    📋 Copy
                                                </button>
                                            </span>
                                        </div>

                                        <div class="bank-row">
                                            <span class="bank-lbl">Standard Fee:</span>
                                            <span class="bank-val" style="color: var(--accent-gold); font-size: 1.05rem;">₹ 5,000 (One-Time Registration / Seat Reservation)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Payment Inputs (UTR and Amount) -->
                            <div class="form-grid-2col" style="margin-bottom: 1.25rem;">
                                <div class="form-group">
                                    <label class="form-label">Transaction ID / UTR Number * (12 Digits)</label>
                                    <input type="text" name="transaction_id" id="transaction_id" class="form-control" placeholder="e.g. 428710294821 or UPI Ref ID" required style="font-family: monospace; font-size: 1rem; font-weight: 700; letter-spacing: 0.5px;">
                                    <small style="font-size: 0.76rem; color: var(--text-muted); display: block; margin-top: 3px;">
                                        Found in your UPI app receipt after scanning QR.
                                    </small>
                                    <div class="form-error-feedback"></div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Amount Deposited (₹) *</label>
                                    <input type="number" name="payment_amount" id="payment_amount" class="form-control" value="5000" min="100" required style="font-weight: 700;">
                                    <small style="font-size: 0.76rem; color: var(--text-muted); display: block; margin-top: 3px;">
                                        Standard Registration: ₹5,000 (or seat reservation token).
                                    </small>
                                    <div class="form-error-feedback"></div>
                                </div>
                            </div>

                            <!-- Proof of Deposit (POD) Upload Box -->
                            <div class="form-group">
                                <label class="form-label">Upload Proof of Deposit (POD Screenshot / Receipt) *</label>
                                <input type="file" id="payment_pod" name="payment_pod" accept="image/jpeg,image/png,image/webp,application/pdf" style="display: none;" required>
                                
                                <div class="pod-upload-zone" id="paymentPodBox">
                                    <div class="upload-prompt">
                                        <div class="upload-icon-circle" style="width: 48px; height: 48px; border-radius: 50%; background: #dcfce7; color: #15803d; display: inline-flex; align-items: center; justify-content: center; margin-bottom: 6px;">
                                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="17 8 12 3 7 8"></polyline><line x1="12" x2="12" y1="3" y2="15"></line></svg>
                                        </div>
                                        <div style="font-weight: 800; color: #166534; font-size: 0.95rem;">
                                            Click or Drag &amp; Drop Payment Screenshot (POD)
                                        </div>
                                        <div style="font-size: 0.8rem; color: #475569;">
                                            Upload screenshot from PhonePe / Google Pay / Paytm / Bank (JPG, PNG, WEBP, PDF - Max 5MB)
                                        </div>
                                    </div>

                                    <div class="pod-preview-wrap" id="paymentPodPreview">
                                        <img id="paymentPodThumb" src="" alt="Payment POD Preview">
                                        <div style="flex: 1;">
                                            <div style="display: flex; align-items: center; gap: 0.4rem; margin-bottom: 0.25rem;">
                                                <span style="background: #16a34a; color: #ffffff; font-size: 0.72rem; font-weight: 800; padding: 2px 7px; border-radius: 999px;">✓ POD Screenshot Attached</span>
                                                <span style="font-weight: 700; color: var(--primary-navy); font-size: 0.88rem;" id="paymentPodName">receipt.jpg</span>
                                            </div>
                                            <div style="font-size: 0.78rem; color: var(--text-muted); margin-bottom: 0.6rem;" id="paymentPodSize">0 KB</div>
                                            <button type="button" class="btn btn-sm btn-outline-navy" id="paymentPodChange" style="padding: 3px 10px; font-size: 0.76rem;">Change Receipt</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-error-feedback"></div>
                            </div>
                        </div>

                        <!-- 2. Candidate & Admission Information -->
                        <div class="ddc-form-section-title" style="margin-top: 1.5rem;">
                            <span class="section-step-badge">2</span>
                            <h3>Candidate &amp; Academic Details</h3>
                        </div>

                        <!-- Course Selection -->
                        <div class="form-group" style="margin-bottom: 1.5rem;">
                            <label class="form-label">Select Your Desired Course *</label>
                            <select name="course_interest" class="form-control" required style="font-weight: 600; color: var(--primary-navy);">
                                <option value="" disabled selected>Select Your Course</option>
                                <option value="NDA Foundation after 8th">NDA Foundation after 8th (Pre-Foundation)</option>
                                <option value="NDA Foundation after 10th">NDA Foundation after 10th (Class 11 &amp; 12 + NDA)</option>
                                <option value="NDA Foundation after 12th">NDA Foundation / Target Batch after 12th</option>
                                <option value="NDA (Girls) Special Wing">NDA (Girls) Special Residential Wing</option>
                                <option value="CDS">CDS (Combined Defence Services - IMA / OTA / AFA)</option>
                                <option value="AFCAT">AFCAT (Air Force Common Admission Test)</option>
                                <option value="CAPF">CAPF (Assistant Commandant)</option>
                                <option value="Sainik School">Sainik School &amp; Military School (RMS) Entrance</option>
                                <option value="RIMC">RIMC Dehradun (Rashtriya Indian Military College)</option>
                                <option value="SSB Interview Training">SSB Interview Training (14-Day Practical Ground Camp)</option>
                                <option value="MNS (Military Nursing Service)">MNS (Military Nursing Service) &amp; NEET Integrated</option>
                            </select>
                            <div class="form-error-feedback"></div>
                        </div>

                        <!-- Candidate Name & Father's Name (2-Cols) -->
                        <div class="form-grid-2col" style="margin-bottom: 1.25rem;">
                            <div class="form-group">
                                <label class="form-label">Full Name of Candidate *</label>
                                <input type="text" name="full_name" class="form-control" placeholder="Candidate's Name" required>
                                <div class="form-error-feedback"></div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Father's / Guardian's Name *</label>
                                <input type="text" name="father_name" class="form-control" placeholder="Father's Full Name" required>
                                <div class="form-error-feedback"></div>
                            </div>
                        </div>

                        <!-- Candidate Mobile, Parent Mobile & Email (3-Cols) -->
                        <div class="form-grid-3col" style="margin-bottom: 1.25rem;">
                            <div class="form-group">
                                <label class="form-label">Candidate Mobile *</label>
                                <input type="tel" name="mobile_number" class="form-control" placeholder="10-digit Mobile" required>
                                <div class="form-error-feedback"></div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Parents Mobile *</label>
                                <input type="tel" name="parent_mobile" class="form-control" placeholder="Parents Contact" required>
                                <div class="form-error-feedback"></div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Email Address *</label>
                                <input type="email" name="email" class="form-control" placeholder="candidate@example.com" required>
                                <div class="form-error-feedback"></div>
                            </div>
                        </div>

                        <!-- DOB, Gender & Current Class (3-Cols) -->
                        <div class="form-grid-3col" style="margin-bottom: 1.25rem;">
                            <div class="form-group">
                                <label class="form-label">Date of Birth *</label>
                                <input type="date" name="dob" class="form-control" required>
                                <div class="form-error-feedback"></div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Gender *</label>
                                <select name="gender" class="form-control" required>
                                    <option value="" disabled selected>Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                                <div class="form-error-feedback"></div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Current Academic Level *</label>
                                <select name="education_level" class="form-control" required>
                                    <option value="" disabled selected>Current Class</option>
                                    <option value="Class 8th / 9th">Class 8th / 9th</option>
                                    <option value="Class 10th (Appearing / Passed)">Class 10th (Appearing / Passed)</option>
                                    <option value="Class 11th">Class 11th</option>
                                    <option value="Class 12th (Appearing / Passed)">Class 12th (Appearing / Passed)</option>
                                    <option value="Graduate / Final Year">Graduate / Final Year (For CDS/AFCAT)</option>
                                </select>
                                <div class="form-error-feedback"></div>
                            </div>
                        </div>

                        <!-- City/State & Hostel Preference (2-Cols) -->
                        <div class="form-grid-2col" style="margin-bottom: 1.25rem;">
                            <div class="form-group">
                                <label class="form-label">State &amp; City of Residence *</label>
                                <input type="text" name="city_state" class="form-control" placeholder="e.g. Dehradun, Uttarakhand / Delhi / Patna" required>
                                <div class="form-error-feedback"></div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Hostel Accommodation Needed? *</label>
                                <select name="preferred_contact" class="form-control" required>
                                    <option value="Yes, Need In-Campus Residential Hostel" selected>Yes, Need In-Campus Residential Hostel</option>
                                    <option value="Day Scholar (Local Dehradun Resident)">No, Day Scholar (Local Dehradun Resident)</option>
                                </select>
                            </div>
                        </div>

                        <!-- 3. Candidate Passport Photograph Upload -->
                        <div class="ddc-form-section-title" style="margin-top: 1.5rem;">
                            <span class="section-step-badge">3</span>
                            <h3>Candidate Passport Photograph</h3>
                        </div>
                        <div class="form-group" style="margin-bottom: 1.5rem;">
                            <input type="file" id="candidate_photo" name="candidate_photo" accept="image/jpeg,image/png,image/webp" style="display: none;">
                            
                            <div class="candidate-photo-box" id="candidatePhotoBox">
                                <div class="upload-prompt">
                                    <div class="upload-icon-circle">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
                                    </div>
                                    <div style="font-weight: 700; color: var(--primary-navy); font-size: 0.95rem;">
                                        Click or Drag to Upload Candidate Passport Photo
                                    </div>
                                    <div style="font-size: 0.8rem; color: var(--text-muted);">
                                        Supported: JPG, PNG, WEBP (Max 5MB) &bull; Required for Cadet Identity Card &amp; Official Records
                                    </div>
                                </div>

                                <div class="candidate-photo-preview-wrap" id="candidatePhotoPreview">
                                    <img id="candidatePhotoThumb" src="" alt="Candidate Photo Preview">
                                    <div style="flex: 1;">
                                        <div style="display: flex; align-items: center; gap: 0.4rem; margin-bottom: 0.25rem;">
                                            <span style="background: #16a34a; color: #fff; font-size: 0.72rem; font-weight: 800; padding: 2px 7px; border-radius: 999px;">✓ Photo Ready</span>
                                            <span style="font-weight: 700; color: var(--primary-navy); font-size: 0.88rem;" id="candidatePhotoName">photo.jpg</span>
                                        </div>
                                        <div style="font-size: 0.78rem; color: var(--text-muted); margin-bottom: 0.6rem;" id="candidatePhotoSize">0 KB</div>
                                        <button type="button" class="btn btn-sm btn-outline-navy" id="candidatePhotoChange" style="padding: 3px 10px; font-size: 0.76rem;">Change Photo</button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-error-feedback"></div>
                        </div>

                        <!-- 4. Additional Message / Background -->
                        <div class="form-group" style="margin-bottom: 1.25rem;">
                            <label class="form-label">Additional Information / Prior Sports or NCC Achievements (Optional)</label>
                            <textarea name="message" class="form-control" rows="3" placeholder="Mention any NCC certificate, state/national sports achievements, or specific questions for the admissions counselor."></textarea>
                        </div>

                        <!-- 5. Consent Checkbox -->
                        <div class="form-check" style="margin-bottom: 1.75rem;">
                            <input type="checkbox" id="wp_reg_consent" name="privacy_consent" checked required>
                            <label for="wp_reg_consent" style="font-size: 0.85rem; color: var(--text-muted); line-height: 1.4;">
                                I confirm that all information provided is accurate and I agree to Dehradun Defence College admissions terms, privacy policy, and code of conduct.
                            </label>
                            <div class="form-error-feedback"></div>
                        </div>

                        <!-- 6. Submit Button -->
                        <button type="submit" class="btn btn-gold" style="width: 100%; height: 54px; font-size: 1.05rem; font-weight: 800; letter-spacing: 0.5px; border-radius: var(--radius-sm); box-shadow: 0 6px 20px rgba(212, 175, 55, 0.45); display: flex; align-items: center; justify-content: center; gap: 0.5rem;">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                            <span>SUBMIT ONLINE REGISTRATION FOR 2027 (₹5,000)</span>
                        </button>
                    </form>

                    <!-- Trust Seal Footnote -->
                    <div style="margin-top: 1.5rem; text-align: center; font-size: 0.825rem; color: var(--text-muted); display: flex; align-items: center; justify-content: center; gap: 0.5rem;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--tricolor-green)" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path><path d="m9 12 2 2 4-4"></path></svg>
                        <span>Official SSL Encrypted Portal &bull; Immediate Counselor Response Within 24 Hours</span>
                    </div>
                </div>

                <!-- Right Column: Admission Process, Document Checklist & Helpline Cards -->
                <div>
                    <!-- Card 1: 4 Steps Admission Process -->
                    <div class="registration-sidebar-box">
                        <span class="badge-gold">Step-by-Step</span>
                        <h3 style="font-size: 1.35rem; color: var(--primary-navy); margin-top: 0.4rem; margin-bottom: 0.25rem;">Admission Procedure</h3>
                        <p style="font-size: 0.875rem; color: var(--text-muted); margin-bottom: 1rem;">Simple 4-stage admission flow for enrolled cadets:</p>
                        
                        <div class="admission-steps-list">
                            <div class="admission-step-item">
                                <div class="admission-step-num">1</div>
                                <div class="admission-step-content">
                                    <h4>Online Application</h4>
                                    <p>Fill out the registration form with your chosen course and academic background.</p>
                                </div>
                            </div>
                            <div class="admission-step-item">
                                <div class="admission-step-num">2</div>
                                <div class="admission-step-content">
                                    <h4>Counseling &amp; Screening</h4>
                                    <p>Our senior faculty discusses eligibility, age criteria, and recommends the right batch.</p>
                                </div>
                            </div>
                            <div class="admission-step-item">
                                <div class="admission-step-num">3</div>
                                <div class="admission-step-content">
                                    <h4>Campus Visit / Verification</h4>
                                    <p>Visit our 10-acre residential campus in Maldevta to inspect hostel, mess, and GTO ground.</p>
                                </div>
                            </div>
                            <div class="admission-step-item">
                                <div class="admission-step-num">4</div>
                                <div class="admission-step-content">
                                    <h4>Seat Allotment &amp; Joining Kit</h4>
                                    <p>Receive your admission letter, cadet uniform, study material, and hostel room allotment.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2: Admission Help Desk Contact Box -->
                    <div class="registration-sidebar-box" style="border-left: 4px solid var(--accent-gold);">
                        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 0.5rem;">
                            <h3 style="font-size: 1.25rem; color: var(--primary-navy); margin: 0;">Direct Admission Desk</h3>
                            <span class="badge-saffron" style="font-size: 0.7rem; padding: 2px 7px;">★ Helpline</span>
                        </div>
                        <p style="font-size: 0.85rem; color: var(--text-muted); margin-bottom: 1rem; line-height: 1.5;">
                            Need immediate assistance? Connect with our senior defence counselor directly.
                        </p>
                        
                        <div style="display: flex; flex-direction: column; gap: 0.75rem; margin-bottom: 1.25rem;">
                            <a href="tel:+919719104024" class="btn btn-outline-navy btn-sm" style="width: 100%; justify-content: center; gap: 0.5rem; font-weight: 700;">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                <span>Talk to Best Counselor: +91 9719104024</span>
                            </a>
                            <a href="tel:+918650666609" class="btn btn-outline-navy btn-sm" style="width: 100%; justify-content: center; gap: 0.5rem; font-weight: 700;">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                <span>+91 8650666609 (Chief Counselor)</span>
                            </a>
                            <a href="https://wa.me/919719104024" target="_blank" rel="noopener" class="btn btn-primary btn-sm" style="width: 100%; justify-content: center; gap: 0.5rem; background-color: #25D366; border-color: #25D366;">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
                                <span>Chat on WhatsApp</span>
                            </a>
                        </div>
                        <p style="font-size: 0.775rem; color: var(--text-muted); margin: 0; text-align: center;">
                            Office Open: Monday to Sunday (8:00 AM &ndash; 6:00 PM)
                        </p>
                    </div>

                    <!-- Card 3: Documents Required Checklist -->
                    <div class="bank-details-card">
                        <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.75rem;">
                            <div style="width: 36px; height: 36px; border-radius: 8px; background: rgba(212,175,55,0.2); display: flex; align-items: center; justify-content: center; color: var(--accent-gold); flex-shrink: 0;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line></svg>
                            </div>
                            <h4 style="color: #FFFFFF; font-size: 1.1rem; margin: 0;">Documents at Joining</h4>
                        </div>
                        <p style="font-size: 0.85rem; color: rgba(255,255,255,0.85); margin-bottom: 0.75rem;">
                            Please keep photocopies of the following credentials ready:
                        </p>
                        <ul style="margin: 0; padding-left: 1.25rem; font-size: 0.85rem; color: rgba(255,255,255,0.9); line-height: 1.6;">
                            <li>6 Passport-size color photographs in formal attire</li>
                            <li>Aadhaar card copy of candidate &amp; parent</li>
                            <li>Marksheet of last passed exam (8th / 10th / 12th)</li>
                            <li>School Leaving / Transfer Certificate (TC)</li>
                            <li>Medical fitness certificate from registered MBBS doctor</li>
                        </ul>
                    </div>

                    <!-- Card 4: Scholarship Concessions Notice -->
                    <div class="registration-sidebar-box" style="background: #FDFBF7; border: 1px dashed var(--accent-gold);">
                        <div style="display: flex; align-items: center; gap: 0.5rem; margin-bottom: 0.5rem;">
                            <span class="badge-gold" style="font-size: 0.75rem;">Fee Concession</span>
                            <h4 style="font-size: 0.95rem; color: var(--primary-navy); margin: 0;">Scholarship Eligibility</h4>
                        </div>
                        <p style="font-size: 0.825rem; color: var(--text-muted); line-height: 1.5; margin: 0;">
                            <strong>Veer Naris &amp; Martyr Wards:</strong> 100% Tuition Fee Waiver.<br>
                            <strong>Betiyon Ka Raksha Samman:</strong> Special grants for Girls Wing.<br>
                            <strong>Serving / Retd Defence Wards:</strong> 15% Tuition concession.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Join Dehradun Defence College 4-Pillar Grid -->
    <section class="section-padding bg-white" style="border-top: 1px solid var(--border-light);">
        <div class="container">
            <div style="text-align: center; max-width: 750px; margin: 0 auto 3rem auto;">
                <span class="badge-navy">DDC Distinction</span>
                <h2 style="font-size: 2.2rem; margin-top: 0.5rem; margin-bottom: 0.75rem;">Why Cadets Choose DDC Dehradun</h2>
                <p style="color: var(--text-muted); font-size: 1rem;">
                    A premier defence gurukul that transforms young school students into commissioned officers of the Indian Armed Forces.
                </p>
            </div>

            <div class="ddc-distinction-grid">
                <div style="background: var(--bg-slate); padding: 2rem 1.5rem; border-radius: var(--radius-lg); border-top: 4px solid var(--accent-gold);">
                    <div style="font-size: 1.75rem; margin-bottom: 0.75rem; color: var(--accent-gold);">⚔️</div>
                    <h3 style="font-size: 1.2rem; color: var(--primary-navy); margin-bottom: 0.5rem;">Largest SSB GTO Ground</h3>
                    <p style="font-size: 0.9rem; color: var(--text-muted); line-height: 1.6; margin: 0;">
                        India's biggest in-campus SSB obstacle training ground with Double Ditch, Tiger Leap, Commando Walk, and full PGT/HGT structures.
                    </p>
                </div>

                <div style="background: var(--bg-slate); padding: 2rem 1.5rem; border-radius: var(--radius-lg); border-top: 4px solid var(--primary-navy);">
                    <div style="font-size: 1.75rem; margin-bottom: 0.75rem; color: var(--primary-navy);">🎖️</div>
                    <h3 style="font-size: 1.2rem; color: var(--primary-navy); margin-bottom: 0.5rem;">Ex-SSB Board Officers</h3>
                    <p style="font-size: 0.9rem; color: var(--text-muted); line-height: 1.6; margin: 0;">
                        Mentorship directly under retired Brigadier, Colonel, and Psychologist officers who served on actual Defence Selection Boards.
                    </p>
                </div>

                <div style="background: var(--bg-slate); padding: 2rem 1.5rem; border-radius: var(--radius-lg); border-top: 4px solid var(--tricolor-green);">
                    <div style="font-size: 1.75rem; margin-bottom: 0.75rem; color: var(--tricolor-green);">🏫</div>
                    <h3 style="font-size: 1.2rem; color: var(--primary-navy); margin-bottom: 0.5rem;">Integrated Schooling</h3>
                    <p style="font-size: 0.9rem; color: var(--text-muted); line-height: 1.6; margin: 0;">
                        CBSE affiliated Classes 9th to 12th board education combined synchronously with NDA written coaching and physical fitness drill.
                    </p>
                </div>

                <div style="background: var(--bg-slate); padding: 2rem 1.5rem; border-radius: var(--radius-lg); border-top: 4px solid var(--tricolor-saffron);">
                    <div style="font-size: 1.75rem; margin-bottom: 0.75rem; color: var(--tricolor-saffron);">🏔️</div>
                    <h3 style="font-size: 1.2rem; color: var(--primary-navy); margin-bottom: 0.5rem;">10-Acre Scenic Campus</h3>
                    <p style="font-size: 0.9rem; color: var(--text-muted); line-height: 1.6; margin: 0;">
                        Serene, distraction-free environment in the Himalayan foothills of Maldevta with separate boys &amp; girls hostels and 4-meal nutritious mess.
                    </p>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
