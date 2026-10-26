<?php
/**
 * Template Name: Online Payment & POD Portal
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
                <span style="color: var(--accent-gold); font-weight: 600;">Online Fee Payment &amp; POD</span>
            </div>
            <span class="badge-gold">Official Banking Portal &bull; Session 2027</span>
            <h1 style="color: #FFFFFF; margin: 0.75rem 0 0.5rem 0; font-size: clamp(1.8rem, 3.5vw, 2.6rem);">Online Fee Payment &amp; POD Verification</h1>
            <p style="color: rgba(255,255,255,0.85); font-size: 1.05rem; max-width: 800px; margin: 0 auto; line-height: 1.6;">
                Scan our official Canara Bank QR code with any UPI app (GPay, PhonePe, Paytm, BHIM) or transfer via IMPS/NEFT, then upload your Proof of Deposit (POD) screenshot below for instant verification.
            </p>
        </div>
    </section>

    <!-- Main Payment & POD Section -->
    <section class="section-padding bg-slate">
        <div class="container">
            
            <div class="payment-portal-grid">
                
                <!-- Left Column (Desktop) / Second on Mobile: Proof of Deposit (POD) & Candidate Form -->
                <div class="registration-form-card payment-form-col" id="podFormSection">
                    <div style="display: flex; align-items: center; gap: 1.15rem; margin-bottom: 1.75rem; padding-bottom: 1.25rem; border-bottom: 2px solid rgba(212, 175, 55, 0.35);">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo.png'); ?>" alt="Dehradun Defence College Emblem" style="width: 64px; height: 64px; object-fit: contain; flex-shrink: 0;">
                        <div>
                            <div style="display: flex; gap: 0.5rem; align-items: center; flex-wrap: wrap; margin-bottom: 0.35rem;">
                                <span class="badge-saffron" style="font-size: 0.72rem; padding: 2px 8px;">★ Verified Bank Portal</span>
                                <span class="badge-gold" style="font-size: 0.72rem; padding: 2px 8px;">Instant POD Alert</span>
                            </div>
                            <h2 style="font-size: clamp(1.25rem, 2vw, 1.6rem); color: var(--primary-navy); margin: 0; line-height: 1.2;">Submit Proof of Deposit (POD)</h2>
                            <p style="color: var(--text-muted); font-size: 0.86rem; margin: 0.25rem 0 0 0;">
                                Fill in transaction details &amp; upload receipt screenshot for official verification.
                            </p>
                        </div>
                    </div>

                    <form action="<?php echo esc_url(admin_url('admin-ajax.php')); ?>" method="POST" enctype="multipart/form-data" class="ddc-enquiry-form" novalidate id="onlineRegistrationForm">
                        <input type="hidden" name="action" value="ddc_submit_enquiry">
                        <input type="hidden" name="nonce" value="<?php echo wp_create_nonce('ddc_enquiry_nonce'); ?>">
                        <input type="hidden" name="form_type" value="online_payment_pod">
                        <input type="hidden" name="payment_mode" value="online_qr">
                        <input type="text" name="website_url_check" class="hp-field" tabindex="-1" autocomplete="off">
                        <input type="hidden" name="form_start_time" value="<?php echo time(); ?>">

                        <div class="form-status-alert" role="alert"></div>

                        <!-- 1. Student Name & Father's Name -->
                        <div class="form-grid-2col" style="margin-bottom: 1.25rem;">
                            <div class="form-group">
                                <label class="form-label">Full Name of Student / Cadet *</label>
                                <input type="text" name="full_name" class="form-control" placeholder="Candidate's Name" required>
                                <div class="form-error-feedback"></div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Father's / Guardian's Name *</label>
                                <input type="text" name="father_name" class="form-control" placeholder="Father's Full Name" required>
                                <div class="form-error-feedback"></div>
                            </div>
                        </div>

                        <!-- 2. Mobile & Email -->
                        <div class="form-grid-2col" style="margin-bottom: 1.25rem;">
                            <div class="form-group">
                                <label class="form-label">Candidate / Parent Mobile Number *</label>
                                <input type="tel" name="mobile_number" class="form-control" placeholder="10-digit WhatsApp Number" required>
                                <div class="form-error-feedback"></div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Email Address (For Official E-Receipt) *</label>
                                <input type="email" name="email" class="form-control" placeholder="email@example.com" required>
                                <div class="form-error-feedback"></div>
                            </div>
                        </div>

                        <!-- 3. Course Enrolled & State -->
                        <div class="form-grid-2col" style="margin-bottom: 1.25rem;">
                            <div class="form-group">
                                <label class="form-label">Enrolled Course / Batch *</label>
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
                            <div class="form-group">
                                <label class="form-label">City &amp; State *</label>
                                <input type="text" name="city_state" class="form-control" placeholder="e.g. Dehradun / Delhi / Lucknow" required>
                                <div class="form-error-feedback"></div>
                            </div>
                        </div>

                        <!-- 4. Payment Details: UTR & Amount -->
                        <div class="form-grid-3col" style="margin-bottom: 1.25rem;">
                            <div class="form-group">
                                <label class="form-label">Transaction ID / UTR Number *</label>
                                <input type="text" name="transaction_id" id="transaction_id" class="form-control" placeholder="12-digit UTR Number" required style="font-family: monospace; font-size: 1rem; font-weight: 700; letter-spacing: 0.5px;">
                                <div class="form-error-feedback"></div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Amount Paid (₹) *</label>
                                <input type="number" name="payment_amount" id="payment_amount" class="form-control" value="5000" min="100" required style="font-weight: 700;">
                                <div class="form-error-feedback"></div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Date of Payment *</label>
                                <input type="date" name="payment_date" class="form-control" value="<?php echo date('Y-m-d'); ?>" required>
                                <div class="form-error-feedback"></div>
                            </div>
                        </div>

                        <!-- 5. Proof of Deposit (POD) Upload Box (Mandatory) -->
                        <div class="form-group" style="margin-bottom: 1.5rem;">
                            <label class="form-label">Upload Payment Receipt Screenshot (Proof of Deposit - POD) *</label>
                            <input type="file" id="payment_pod" name="payment_pod" accept="image/jpeg,image/png,image/webp,application/pdf" style="display: none;" required>
                            
                            <div class="pod-upload-zone" id="paymentPodBox">
                                <div class="upload-prompt">
                                    <div class="upload-icon-circle" style="width: 50px; height: 50px; border-radius: 50%; background: #dcfce7; color: #15803d; display: inline-flex; align-items: center; justify-content: center; margin-bottom: 8px;">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="17 8 12 3 7 8"></polyline><line x1="12" x2="12" y1="3" y2="15"></line></svg>
                                    </div>
                                    <div style="font-weight: 800; color: #166534; font-size: 1rem;">
                                        Click or Drag to Upload Payment Screenshot (POD)
                                    </div>
                                    <div style="font-size: 0.82rem; color: #475569;">
                                        Screenshot showing UTR number from GPay / PhonePe / Paytm / NetBanking (JPG, PNG, PDF - Max 5MB)
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

                        <!-- 6. Candidate Photograph Upload (Optional) -->
                        <div class="form-group" style="margin-bottom: 1.5rem;">
                            <label class="form-label">Upload Candidate Passport Photograph (Optional)</label>
                            <input type="file" id="candidate_photo" name="candidate_photo" accept="image/jpeg,image/png,image/webp" style="display: none;">
                            
                            <div class="candidate-photo-box" id="candidatePhotoBox">
                                <div class="upload-prompt">
                                    <div class="upload-icon-circle" style="width: 44px; height: 44px; font-size: 1.15rem;">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
                                    </div>
                                    <div style="font-weight: 700; color: var(--primary-navy); font-size: 0.9rem;">
                                        Upload Passport Photo for Cadet ID Card (Optional)
                                    </div>
                                    <div style="font-size: 0.78rem; color: var(--text-muted);">
                                        JPG, PNG, WEBP (Max 5MB)
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
                        </div>

                        <!-- 7. Remarks / Payment Note -->
                        <div class="form-group" style="margin-bottom: 1.25rem;">
                            <label class="form-label">Payment Remarks / Account Holder Name Used for Transfer</label>
                            <input type="text" name="message" class="form-control" placeholder="e.g. Transferred from father's account (Rajesh Kumar) via Google Pay">
                        </div>

                        <!-- 8. Consent Checkbox -->
                        <div class="form-check" style="margin-bottom: 1.75rem;">
                            <input type="checkbox" id="wp_pay_consent" name="privacy_consent" checked required>
                            <label for="wp_pay_consent" style="font-size: 0.85rem; color: var(--text-muted); line-height: 1.4;">
                                I confirm that the payment details and POD screenshot uploaded are genuine and correspond to my application at Dehradun Defence College.
                            </label>
                            <div class="form-error-feedback"></div>
                        </div>

                        <!-- 9. Submit Button -->
                        <button type="submit" class="btn btn-gold" style="width: 100%; height: 54px; font-size: 1.05rem; font-weight: 800; letter-spacing: 0.5px; border-radius: var(--radius-sm); box-shadow: 0 6px 20px rgba(212, 175, 55, 0.45); display: flex; align-items: center; justify-content: center; gap: 0.5rem;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                            <span>SUBMIT PROOF OF DEPOSIT (POD) &amp; VERIFY</span>
                        </button>
                    </form>

                    <!-- Trust Seal Footnote -->
                    <div style="margin-top: 1.5rem; text-align: center; font-size: 0.825rem; color: var(--text-muted); display: flex; align-items: center; justify-content: center; gap: 0.5rem;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--tricolor-green)" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path><path d="m9 12 2 2 4-4"></path></svg>
                        <span>Official Canara Bank Verification &bull; Email Alert with POD Dispatched Instantly</span>
                    </div>
                </div>

                <!-- Right Column (Desktop) / Top Column (Mobile): Official Standee QR & Bank Credentials Card -->
                <div class="payment-standee-col" id="officialPaymentStandee">
                    <!-- Standee Box -->
                    <div class="ddc-payment-standee-card">
                        <div style="text-align: center; margin-bottom: 1.25rem; border-bottom: 1px solid rgba(255,255,255,0.15); padding-bottom: 1rem;">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo.png'); ?>" alt="Dehradun Defence College Logo" style="width: 58px; height: 58px; object-fit: contain; margin: 0 auto 0.5rem auto; display: block;">
                            <h2 style="font-size: 1.25rem; color: #FFFFFF; margin: 0; font-weight: 800;">DEHRADUN DEFENCE COLLEGE</h2>
                            <p style="color: var(--accent-gold); font-size: 0.8rem; margin: 0.2rem 0 0 0; font-weight: 600; letter-spacing: 0.5px;">
                                "Cradle of Aspiring Indian Officers" &bull; NDA | CDS | AFCAT | SSB
                            </p>
                        </div>

                        <!-- Standee QR Image (Prominent & Larger) -->
                        <div class="standee-qr-frame">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/ddc-payment-qr.png'); ?>" alt="Dehradun Defence College Official Standee Payment QR Code">
                            <span class="scan-badge">SCAN TO PAY WITH ANY UPI APP</span>
                            <div style="font-size: 0.74rem; color: #475569; margin-top: 6px; font-weight: 700;">
                                PhonePe &bull; Google Pay &bull; Paytm &bull; BHIM &bull; Cred &bull; Any UPI
                            </div>
                        </div>

                        <!-- Bank Details Table -->
                        <div class="bank-details-wrapper">
                            <div class="bank-details-header">
                                <h4>
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect width="20" height="14" x="2" y="5" rx="2"></rect><line x1="2" x2="22" y1="10" y2="10"></line></svg>
                                    <span>Bank Account Details</span>
                                </h4>
                                <span style="background: rgba(22, 163, 74, 0.25); color: #86efac; border: 1px solid #22c55e; padding: 2px 8px; border-radius: 999px; font-size: 0.7rem; font-weight: 800;">
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
                                <span class="bank-lbl">Branch:</span>
                                <span class="bank-val">Dehradun, Uttarakhand</span>
                            </div>
                        </div>

                        <!-- Mobile Direct Jump to Form Button -->
                        <a href="#podFormSection" class="btn btn-gold payment-portal-jump-btn" style="width: 100%; margin-top: 1.25rem; height: 46px; font-size: 0.92rem; font-weight: 800; text-decoration: none; align-items: center; justify-content: center; gap: 0.5rem; border-radius: var(--radius-sm); box-shadow: 0 4px 15px rgba(212, 175, 55, 0.35);">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 5v14M19 12l-7 7-7-7"/></svg>
                            <span>Already Paid? Upload POD Receipt Below</span>
                        </a>
                    </div>

                    <!-- Instructions Card -->
                    <div class="registration-sidebar-box" style="margin-bottom: 0;">
                        <span class="badge-saffron">3 Simple Steps</span>
                        <h3 style="font-size: 1.15rem; color: var(--primary-navy); margin-top: 0.4rem; margin-bottom: 0.75rem;">
                            How to Complete Online Payment
                        </h3>
                        <ol style="padding-left: 1.25rem; font-size: 0.86rem; color: var(--text-dark); line-height: 1.7; margin: 0;">
                            <li>Open Google Pay, PhonePe, Paytm, BHIM, or your bank's mobile app and scan the QR code above (or use the Canara Bank Account &amp; IFSC).</li>
                            <li>Enter the amount (Registration fee: ₹5,000 / or specified seat token / term installment).</li>
                            <li>Take a screenshot of the successful transaction showing the 12-digit UTR / Reference Number and upload it in the form.</li>
                        </ol>

                        <div style="background: #f0fdf4; border: 1px solid #bbf7d0; border-radius: 8px; padding: 12px; margin-top: 1rem; font-size: 0.8rem; color: #166534;">
                            <strong>Helpline Support:</strong><br>
                            If you encounter any difficulty while transferring, call our Accounts Directorate at <a href="tel:+919719104024" style="color: #166534; font-weight: 700;">+91 9719104024</a> / <a href="tel:+918650666609" style="color: #166534; font-weight: 700;">+91 8650666609</a>.
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

<?php get_footer(); ?>
