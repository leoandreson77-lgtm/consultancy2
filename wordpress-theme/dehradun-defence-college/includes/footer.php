<?php
/**
 * Master Footer Template - Dehradun Defence College
 */
require_once __DIR__ . '/../config.php';
?>

    <!-- 3. Site Footer -->
    <footer class="site-footer">
        <div class="footer-top">
            <div class="container footer-grid">
                <!-- Column 1: Brand & Philosophy -->
                <div class="footer-col">
                    <a href="index.php" class="brand-logo" style="margin-bottom: 1.25rem;">
                        <img src="assets/images/logo.png" alt="Dehradun Defence College Official Emblem" class="brand-logo-img footer-logo-img">
                        <div class="brand-text">
                            <span class="brand-title" style="color: #FFFFFF;">Dehradun Defence College</span>
                            <span class="brand-subtitle">Gurukul of Next Generation</span>
                        </div>
                    </a>
                    
                    <p class="footer-desc">
                        Dehradun Defence College is a modern Next-Generation Gurukul dedicated to preparing future officers for the Indian Army, Navy, and Air Force. Located in the scenic Maldevta Valley, our campus blends rigorous academic schooling with high-standard SSB obstacle training, daily physical drills, and personal mentorship.
                    </p>

                    <div style="margin-top: 1.5rem;">
                        <span class="badge-gold">Board of Directors</span>
                        <p style="margin-top: 0.4rem; font-weight: 700; color: #FFFFFF; font-size: 0.9rem; line-height: 1.5;">
                            Mr. Mahendra Kukreja (Managing Director)<br>
                            <span style="font-weight: 400; color: rgba(255,255,255,0.85); font-size: 0.825rem;">Mr. Zaheer Ahmed, Mr. Gaurav Sharma &amp; Ms. Neha Kukreja (Directors)</span>
                        </p>
                    </div>
                </div>

                <!-- Column 2: Popular Defence Courses -->
                <div class="footer-col">
                    <h4>Defence Courses</h4>
                    <ul class="footer-links">
                        <li><a href="course-detail.php?course=nda-foundation-10">NDA Foundation (10th)</a></li>
                        <li><a href="course-detail.php?course=nda-girls-10">NDA (Girls) Special Wing</a></li>
                        <li><a href="course-detail.php?course=nda-target-12">NDA Target / Dropper Batch</a></li>
                        <li><a href="course-detail.php?course=cds-training">CDS Coaching (IMA/OTA)</a></li>
                        <li><a href="course-detail.php?course=afcat-coaching">AFCAT Flying & Ground Duty</a></li>
                        <li><a href="course-detail.php?course=ssb-interview">SSB 14-Day Practical Ground</a></li>
                        <li><a href="course-detail.php?course=rimc-sainik">RIMC & Sainik School</a></li>
                        <li><a href="course-detail.php?course=capf-ota">CAPF (AC) Exam Coaching</a></li>
                    </ul>
                </div>

                <!-- Column 3: Official Portals & Navigation -->
                <div class="footer-col">
                    <h4>Official Portals</h4>
                    <ul class="footer-links">
                        <li><a href="https://www.upsc.gov.in" target="_blank" rel="noopener">UPSC Official Portal ↗</a></li>
                        <li><a href="https://www.nda.nic.in" target="_blank" rel="noopener">National Defence Academy ↗</a></li>
                        <li><a href="https://joinindianarmy.nic.in" target="_blank" rel="noopener">Join Indian Army ↗</a></li>
                        <li><a href="https://careerindianairforce.cdac.in" target="_blank" rel="noopener">Indian Air Force ↗</a></li>
                        <li><a href="https://www.joinindiannavy.gov.in" target="_blank" rel="noopener">Indian Navy Careers ↗</a></li>
                        <li><a href="online-registration-form.php" style="color: var(--accent-gold); font-weight: 700;">★ Online Registration Form 2026</a></li>
                        <li><a href="about.php">About The Academy</a></li>
                        <li><a href="faculty-facilities.php">Campus & Hostels</a></li>
                        <li><a href="results.php">Hall of Fame / Results</a></li>
                        <li><a href="gallery.php">Photo & Video Gallery</a></li>
                    </ul>
                </div>

                <!-- Column 4: Reach Campus & Contact -->
                <div class="footer-col">
                    <h4>Campus & Contact</h4>
                    <div class="footer-contact-item">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                        <span><?php echo CONTACT_ADDRESS; ?></span>
                    </div>

                    <div class="footer-contact-item">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                        <span>
                            <a href="tel:<?php echo CONTACT_PHONE_1_RAW; ?>"><?php echo CONTACT_PHONE_1; ?></a><br>
                            <a href="tel:<?php echo CONTACT_PHONE_2_RAW; ?>"><?php echo CONTACT_PHONE_2; ?></a>
                        </span>
                    </div>

                    <div class="footer-contact-item">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                        <span><a href="mailto:<?php echo CONTACT_EMAIL; ?>"><?php echo CONTACT_EMAIL; ?></a></span>
                    </div>

                    <div class="footer-contact-item">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                        <span><?php echo OFFICE_HOURS; ?></span>
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
                    <a href="courses.php" class="seo-tag-item">Best NDA Coaching in Dehradun</a>
                    <a href="courses.php" class="seo-tag-item">Top NDA Coaching Institute in India</a>
                    <a href="about.php" class="seo-tag-item">Dreamers Edu Hub Dehradun</a>
                    <a href="about.php" class="seo-tag-item">Doon Defence Dreamers</a>
                    <a href="courses.php" class="seo-tag-item">Best Defence Academy in Dehradun</a>
                    <a href="faculty-facilities.php" class="seo-tag-item">NDA Coaching with Hostel and Mess Facilities</a>
                    <a href="course-detail.php?course=nda-foundation-10" class="seo-tag-item">NDA Coaching with Schooling in Dehradun</a>
                    <a href="course-detail.php?course=nda-foundation-10" class="seo-tag-item">NDA Foundation Course after 10th</a>
                    <a href="course-detail.php?course=nda-pre-foundation" class="seo-tag-item">Pre-NDA Foundation Course (8th to 10th class)</a>
                    <a href="course-detail.php?course=cds-training" class="seo-tag-item">CDS Coaching in Dehradun</a>
                    <a href="course-detail.php?course=capf-ota" class="seo-tag-item">CDS OTA Coaching Institute</a>
                    <a href="course-detail.php?course=afcat-coaching" class="seo-tag-item">AFCAT Exam Preparation Coaching</a>
                    <a href="course-detail.php?course=ssb-interview" class="seo-tag-item">SSB Interview Coaching Dehradun</a>
                    <a href="faculty-facilities.php" class="seo-tag-item">Best GTO Ground for SSB Training</a>
                    <a href="course-detail.php?course=rimc-sainik" class="seo-tag-item">RIMC and Sainik School Coaching Dehradun</a>
                    <a href="course-detail.php?course=mns-nursing" class="seo-tag-item">Military Nursing Service (MNS) Coaching</a>
                    <a href="contact.php" class="seo-tag-item">NDA coaching near Sahastradhara Road Dehradun</a>
                    <a href="contact.php" class="seo-tag-item">Top-rated defence academy near JK Tower Dehradun</a>
                    <a href="results.php" class="seo-tag-item">Best NDA written and SSB coaching in Uttarakhand</a>
                </div>
            </div>
        </div>

        <!-- Footer Bottom Bar -->
        <div class="footer-bottom">
            <div class="container footer-bottom-content">
                <p>© <?php echo date('Y'); ?> <?php echo SITE_NAME; ?>. All Rights Reserved. Excellence is the only aim.</p>
                <div class="footer-legal-links">
                    <a href="privacy-policy.php">Privacy Policy</a>
                    <a href="terms.php">Terms & Conditions</a>
                    <a href="contact.php">How to Reach</a>
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

    <!-- Reusable Modal Window -->
    <?php include __DIR__ . '/enquiry-modal.php'; ?>

    <!-- Floating WhatsApp, Scroll To Top, and Mobile Sticky Action Bar -->
    <?php include __DIR__ . '/floating-widgets.php'; ?>

    <!-- Master Interactive Script -->
    <script src="assets/js/main.js"></script>
</body>
</html>
