<?php
/**
 * Front Page Template - Dehradun Defence College
 * 
 * @package Dehradun_Defence_College
 */

get_header();

$theme_uri = get_template_directory_uri();
?>

    <!-- 1. Hero Split Section: Dynamic Carousel (Left) & Persistent Enquiry Form (Right) -->
    <section class="hero-split-section" id="hero" aria-label="Dehradun Defence College Hero Showcase">
        <div class="container hero-split-grid">
            <!-- Left Side: Dynamic Multi-Slide Showcase Carousel -->
            <div class="hero-slider-wrap">
                <div class="hero-slider" id="hero-slider" aria-label="Hero Highlights Slider">
                    <!-- Slide 1: Welcome & Best NDA Coaching -->
                    <div class="hero-slide active" style="background-image: url('<?php echo esc_url($theme_uri . '/assets/images/campus-building-main.jpg'); ?>');">
                        <div class="hero-slide-overlay"></div>
                        <div class="hero-slide-content">
                            <div class="hero-badge-wrap">
                                <span class="badge-gold">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                    India’s Premier Defence Gurukul
                                </span>
                                <span class="badge-campus-tag">
                                    🏛️ 2-Acre Residential Campus • Maldevta, Dehradun
                                </span>
                            </div>
                            <h1>
                                Where Excellence Meets Uniform: <br>
                                <span class="gold-highlight">Best NDA Coaching</span> in Dehradun
                            </h1>
                            <p class="hero-slide-subtext">
                                Transforming young aspirants into commissioned officers of the Indian Armed Forces. Specialized preparation for <strong>NDA (Foundation & Target), CDS, AFCAT & SSB Interviews</strong> with ex-defence officers, comprehensive UPSC academics, and in-campus residential hostel.
                            </p>
                            <div class="hero-actions">
                                <a href="#courses" class="btn btn-gold btn-lg">
                                    <span>Explore Courses</span>
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                </a>
                                <a href="#selections" class="btn btn-outline-white btn-lg">
                                    <span>2025-2026 Selections</span>
                                </a>
                            </div>
                            <div class="hero-trust-bullets">
                                <div class="hero-trust-item">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                                    <span>400+ DDCIAN Officers Commissioned</span>
                                </div>
                                <div class="hero-trust-item">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                                    <span>1st In-House Separate Hostels</span>
                                </div>
                                <div class="hero-trust-item">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                                    <span>Live 2-Acre SSB Obstacle GTO Ground</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2: Latest Selection of 2025-2026 (Unobstructed Crystal Clear Showcase) -->
                    <div class="hero-slide slide-selection-showcase" style="background: radial-gradient(ellipse at 70% 30%, #0d2850 0%, #06152d 100%);">
                        <div class="hero-slide-overlay" style="background: linear-gradient(90deg, rgba(6, 21, 45, 0.75) 0%, rgba(6, 21, 45, 0.35) 100%);"></div>
                        <div class="hero-slide-content">
                            <div class="slide-selection-layout">
                                <!-- Left Column: Text & 4 Real Cadet Selection Photos -->
                                <div class="slide-selection-text">
                                    <div class="hero-badge-wrap">
                                        <span class="badge-saffron pulse-badge">
                                            <span class="pulsing-dot-white"></span>
                                            🔥 LATEST 2026 SELECTIONS
                                        </span>
                                        <span class="badge-campus-tag">
                                            🎖️ Durshya (Sep 2026) &amp; Akshant (Apr 2026)
                                        </span>
                                    </div>
                                    <h2 style="font-size: clamp(1.4rem, 2.4vw, 2.1rem); margin: 0.5rem 0 0.6rem 0;">
                                        Saluting Our Latest Heroes: <br>
                                        <span class="gold-highlight">2026 DDCIAN Qualifiers</span>
                                    </h2>
                                    <p class="hero-slide-subtext" style="font-size: 0.88rem; margin-bottom: 0.75rem; line-height: 1.5;">
                                        Huge congratulations to <strong style="color: #FFD700; text-shadow: 0 0 10px rgba(255,215,0,0.5);">Durshya Biradar</strong> (NDA-2 Sep 2026 Written), <strong style="color: #FFD700; text-shadow: 0 0 10px rgba(255,215,0,0.5);">Akshant Chuksey</strong> (NDA-1 April 2026), Flying Officer <strong>Aadarsh Mishra</strong> (IAF), <strong>Sanskar Jha</strong> (NDA) &amp; our 13+ champions!
                                    </p>

                                    <!-- 4 Individual Cadet Celebration Cards with Real Photos & Glowing Badges -->
                                    <div class="hero-cadet-photos-grid">
                                        <a href="#selections" class="hero-cadet-photo-item is-latest-highlight" title="Durshya Biradar - NDA-2 (Sep 2026) Written Selection!">
                                            <span class="hero-cadet-pill-badge">★ NEW 2026</span>
                                            <img src="<?php echo esc_url($theme_uri . '/assets/images/cadets/cadet-durshya-biradar.jpg'); ?>" alt="Durshya Biradar NDA-2 Selection" class="hero-cadet-photo-thumb">
                                            <span class="hero-cadet-photo-name">Durshya Biradar</span>
                                            <span class="hero-cadet-photo-sub">NDA-2 (Sep 2026)</span>
                                        </a>
                                        <a href="#selections" class="hero-cadet-photo-item is-latest-highlight" title="Akshant Chuksey - NDA-1 (April 2026) Selection!">
                                            <span class="hero-cadet-pill-badge">★ NEW 2026</span>
                                            <img src="<?php echo esc_url($theme_uri . '/assets/images/cadets/cadet-akshant-chuksey.jpg'); ?>" alt="Akshant Chuksey NDA-1 Selection" class="hero-cadet-photo-thumb">
                                            <span class="hero-cadet-photo-name">Akshant Chuksey</span>
                                            <span class="hero-cadet-photo-sub">NDA-1 (Apr 2026)</span>
                                        </a>
                                        <a href="#selections" class="hero-cadet-photo-item" title="Flying Officer Aadarsh Mishra - Commissioned IAF!">
                                            <span class="hero-cadet-pill-badge pill-officer">OFFICER</span>
                                            <img src="<?php echo esc_url($theme_uri . '/assets/images/cadets/cadet-aadarsh-mishra.jpg'); ?>" alt="Aadarsh Mishra IAF" class="hero-cadet-photo-thumb">
                                            <span class="hero-cadet-photo-name">Aadarsh Mishra</span>
                                            <span class="hero-cadet-photo-sub">Flying Officer IAF</span>
                                        </a>
                                        <a href="#selections" class="hero-cadet-photo-item" title="Sanskar Jha - NDA Recommended!">
                                            <span class="hero-cadet-pill-badge pill-nda">NDA SSB</span>
                                            <img src="<?php echo esc_url($theme_uri . '/assets/images/cadets/cadet-sanskar-jha.jpg'); ?>" alt="Sanskar Jha NDA" class="hero-cadet-photo-thumb">
                                            <span class="hero-cadet-photo-name">Sanskar Jha</span>
                                            <span class="hero-cadet-photo-sub">NDA Recommended</span>
                                        </a>
                                    </div>

                                    <div class="hero-actions" style="margin-top: 0.5rem;">
                                        <a href="#selections" class="btn btn-gold btn-md" style="font-size: 0.85rem; padding: 0.5rem 1rem;">
                                            <span>View 2026 Selections Below</span>
                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                        </a>
                                        <a href="<?php echo esc_url(home_url('/results-selections/')); ?>" class="btn btn-outline-white btn-md" style="font-size: 0.85rem; padding: 0.5rem 1rem;">
                                            <span>Full Hall of Fame</span>
                                        </a>
                                    </div>
                                </div>

                                <!-- Right Column: Crystal Clear, Unobstructed Official Merit Board -->
                                <div class="slide-selection-poster-box">
                                    <a href="<?php echo esc_url($theme_uri . '/assets/images/ddc-selections-2025-2026.jpg'); ?>" target="_blank" rel="noopener" class="slide-selection-poster-link" title="Click to view full high-resolution merit poster">
                                        <img src="<?php echo esc_url($theme_uri . '/assets/images/ddc-selections-2025-2026.jpg'); ?>" alt="Official Merit Poster - 13+ Cadets Selected" class="slide-selection-poster-img" loading="eager">
                                    </a>
                                    <div class="slide-selection-poster-bar">
                                        <span>Official 2025-2026 Merit Board</span>
                                        <a href="<?php echo esc_url($theme_uri . '/assets/images/ddc-selections-2025-2026.jpg'); ?>" target="_blank" rel="noopener">
                                            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
                                            Click to Zoom
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3: Dehradun's 1st In-House Separate Hostels -->
                    <div class="hero-slide" style="background-image: url('<?php echo esc_url($theme_uri . '/assets/images/cadets-parade-assembly.jpg'); ?>');">
                        <div class="hero-slide-overlay"></div>
                        <div class="hero-slide-content">
                            <div class="hero-badge-wrap">
                                <span class="badge-gold">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                    Dehradun's First Dedicated Defence Campus
                                </span>
                                <span class="badge-campus-tag">
                                    🪖 In-Campus Separate Hostels for Boys & Girls
                                </span>
                            </div>
                            <h2>
                                In-House Separate Hostels <br>
                                <span class="gold-highlight">for Boys & Girls</span>
                            </h2>
                            <p class="hero-slide-subtext">
                                Complete security, zero travel fatigue, 24/7 dedicated female wardens, biometric safety, hygienic 4-meal military mess, and focused evening academic study in peaceful Maldevta valley.
                            </p>
                            <div class="hero-actions">
                                <a href="#hostel-usp" class="btn btn-gold btn-lg">
                                    <span>Explore Hostel Facilities</span>
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                </a>
                                <a href="<?php echo esc_url(home_url('/faculty-facilities/')); ?>" class="btn btn-outline-white btn-lg">
                                    <span>Campus Infrastructure</span>
                                </a>
                            </div>
                            <div class="hero-trust-bullets">
                                <div class="hero-trust-item">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                                    <span>100% In-Campus Distinct Wings</span>
                                </div>
                                <div class="hero-trust-item">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                                    <span>Dietitian-Balanced 4-Meal Mess</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 4: Real Live SSB GTO Ground & Ex-Officers -->
                    <div class="hero-slide" style="background-image: url('<?php echo esc_url($theme_uri . '/assets/images/ssb-gto-ground.jpg'); ?>');">
                        <div class="hero-slide-overlay"></div>
                        <div class="hero-slide-content">
                            <div class="hero-badge-wrap">
                                <span class="badge-gold">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                    Authentic Military Obstacle Grounds
                                </span>
                                <span class="badge-campus-tag">
                                    🎯 Live 2-Acre Military Obstacle Training Ground
                                </span>
                            </div>
                            <h2>
                                Live SSB GTO Ground & <br>
                                <span class="gold-highlight">Ex-Defence Officer Mentors</span>
                            </h2>
                            <p class="hero-slide-subtext">
                                Train on Burma Bridge, Tiger Leap, Tarzan Swing, Commando Walk, PGT & HGT obstacles built to exact military testing dimensions. Individual psychological dossiers assessed by retired board psychologists.
                            </p>
                            <div class="hero-actions">
                                <a href="#courses" class="btn btn-gold btn-lg">
                                    <span>SSB 14-Day Practical Camp</span>
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                </a>
                                <a href="<?php echo esc_url($theme_uri . '/assets/downloads/ddc-nda-target-timetable.pdf'); ?>" download class="btn btn-outline-white btn-lg">
                                    <span>SSB Daily Schedule</span>
                                </a>
                            </div>
                            <div class="hero-trust-bullets">
                                <div class="hero-trust-item">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                                    <span>Ex-Colonel & Brigadier Assessors</span>
                                </div>
                                <div class="hero-trust-item">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                                    <span>Personal Mock Interviews & Dais Speech</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 5: RIMC, RMS, MNS & AFMC NEET Wings -->
                    <div class="hero-slide" style="background-image: url('<?php echo esc_url($theme_uri . '/assets/images/classroom-lecture-hall-real.jpg'); ?>');">
                        <div class="hero-slide-overlay"></div>
                        <div class="hero-slide-content">
                            <div class="hero-badge-wrap">
                                <span class="badge-saffron">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                    Junior & Medical Defence Wings
                                </span>
                                <span class="badge-campus-tag">
                                    📚 Smart Interactive Classrooms & High-Tech Labs
                                </span>
                            </div>
                            <h2>
                                RIMC, RMS Military Schools, <br>
                                <span class="gold-highlight">MNS & AFMC NEET</span> Wings
                            </h2>
                            <p class="hero-slide-subtext">
                                Specialized coaching for <strong>RIMC Dehradun & RMS (Class 6 & 9 CET)</strong>, alongside our dedicated women wing for <strong>Military Nursing Service (MNS)</strong> and <strong>AFMC Pune MBBS via NEET UG</strong>.
                            </p>
                            <div class="hero-actions">
                                <a href="#courses" class="btn btn-gold btn-lg">
                                    <span>View All Programs</span>
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                </a>
                                <a href="#fee-structure" class="btn btn-outline-white btn-lg">
                                    <span>Fee Structure</span>
                                </a>
                            </div>
                            <div class="hero-trust-bullets">
                                <div class="hero-trust-item">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                                    <span>RIMC & RMS CET Comprehensive Prep</span>
                                </div>
                                <div class="hero-trust-item">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                                    <span>MNS Lieutenant Commission & NEET PCB</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slider Navigation Controls -->
                    <button type="button" class="slider-btn slider-btn-prev" aria-label="Previous Slide">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="15 18 9 12 15 6"></polyline></svg>
                    </button>
                    <button type="button" class="slider-btn slider-btn-next" aria-label="Next Slide">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </button>

                    <!-- Slider Pagination Dots -->
                    <div class="slider-dots">
                        <span class="slider-dot active" data-slide="0" role="button" aria-label="Slide 1"></span>
                        <span class="slider-dot" data-slide="1" role="button" aria-label="Slide 2"></span>
                        <span class="slider-dot" data-slide="2" role="button" aria-label="Slide 3"></span>
                        <span class="slider-dot" data-slide="3" role="button" aria-label="Slide 4"></span>
                        <span class="slider-dot" data-slide="4" role="button" aria-label="Slide 5"></span>
                    </div>

                    <!-- Auto slide progress bar -->
                    <div class="slider-progress-bar"></div>
                </div>
            </div>

            <!-- Right Side: Persistent Eye-Catching Enquiry / Admission Registration Form Card -->
            <div class="hero-persistent-form-wrap">
                <div class="eye-catchy-form-card" id="hero-enquiry-card">
                    <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.65rem; padding-bottom: 0.65rem; border-bottom: 1px solid rgba(255,215,0,0.25);">
                        <img src="<?php echo esc_url($theme_uri . '/assets/images/logo.png'); ?>" alt="Dehradun Defence College Official Emblem" style="width: 44px; height: 44px; object-fit: contain; filter: drop-shadow(0 2px 5px rgba(0,0,0,0.3)); flex-shrink: 0;">
                        <div>
                            <div style="font-size: 0.95rem; font-weight: 800; color: #FFFFFF; line-height: 1.2;">Dehradun Defence College</div>
                            <span style="font-size: 0.7rem; color: var(--accent-gold); font-weight: 700;">★ Official Admission Portal</span>
                        </div>
                    </div>
                    <div class="pulse-live-badge">
                        <span class="live-dot"></span>
                        <span>Admissions Open • 2026-2027 Batch</span>
                    </div>
                    <h3 class="form-card-title">Register For Admission</h3>
                    <p class="form-card-sub">Get personalized counseling, fee structure &amp; scholarship guidance</p>

                    <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="POST" class="ddc-enquiry-form" novalidate>
                        <input type="hidden" name="action" value="ddc_lead_enquiry">
                        <input type="text" name="website_url_check" class="hp-field" tabindex="-1" autocomplete="off">
                        <input type="hidden" name="form_start_time" value="<?php echo time(); ?>">

                        <div class="form-status-alert" role="alert"></div>

                        <div class="form-group" style="margin-bottom: 0.85rem;">
                            <label class="form-label" for="hero_split_name_wp" style="color: #FFFFFF; font-size: 0.825rem;">Student's Full Name *</label>
                            <input type="text" id="hero_split_name_wp" name="full_name" class="form-control" placeholder="e.g. Aman Sharma" required style="background: rgba(255,255,255,0.95); height: 44px;">
                            <div class="form-error-feedback"></div>
                        </div>

                        <div class="form-group" style="margin-bottom: 0.85rem;">
                            <label class="form-label" for="hero_split_mobile_wp" style="color: #FFFFFF; font-size: 0.825rem;">Contact Mobile Number *</label>
                            <input type="tel" id="hero_split_mobile_wp" name="mobile_number" class="form-control" placeholder="10-digit Mobile Number" required style="background: rgba(255,255,255,0.95); height: 44px;">
                            <div class="form-error-feedback"></div>
                        </div>

                        <div class="form-group" style="margin-bottom: 0.85rem;">
                            <label class="form-label" for="hero_split_email_wp" style="color: #FFFFFF; font-size: 0.825rem;">Email Address *</label>
                            <input type="email" id="hero_split_email_wp" name="email" class="form-control" placeholder="candidate@email.com" required style="background: rgba(255,255,255,0.95); height: 44px;">
                            <div class="form-error-feedback"></div>
                        </div>

                        <div class="form-group" style="margin-bottom: 0.85rem;">
                            <label class="form-label" for="hero_split_course_wp" style="color: #FFFFFF; font-size: 0.825rem;">Course of Interest *</label>
                            <select id="hero_split_course_wp" name="course_interest" class="form-control" required style="background: rgba(255,255,255,0.95); height: 44px;">
                                <option value="">Select Course</option>
                                <option value="NDA Foundation after 10th">NDA Foundation after 10th (2 Years + Schooling)</option>
                                <option value="NDA (Girls) Special Wing">NDA (Girls) Special Wing + Safe Hostel</option>
                                <option value="NDA Target after 12th">NDA Target / Dropper Batch (After 12th)</option>
                                <option value="Pre-NDA Foundation (8th-10th)">Pre-NDA Foundation (8th to 10th Class)</option>
                                <option value="RIMC / RMS Military Schools">RIMC & RMS Military Schools (Class 6 & 9)</option>
                                <option value="CDS / AFCAT Graduate Entry">CDS (IMA/OTA) & AFCAT Coaching</option>
                                <option value="SSB 14-Day Practical Ground">SSB Interview 14-Day Practical Camp</option>
                                <option value="MNS / AFMC NEET Wing">Military Nursing (MNS) & AFMC NEET</option>
                            </select>
                            <div class="form-error-feedback"></div>
                        </div>

                        <div class="form-check" style="margin-bottom: 1rem;">
                            <input type="checkbox" id="hero_split_consent_wp" name="privacy_consent" checked required>
                            <label for="hero_split_consent_wp" style="color: rgba(255,255,255,0.85); font-size: 0.775rem;">
                                I authorize DDC to contact me regarding admission & scholarship details.
                            </label>
                            <div class="form-error-feedback"></div>
                        </div>

                        <button type="submit" class="btn btn-gold btn-lg" style="width: 100%; height: 48px; font-weight: 800; font-size: 1rem; box-shadow: 0 4px 15px rgba(212,175,55,0.45);">
                            <span>Register Now (April 2026 Batch)</span>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </button>
                    </form>

                    <div class="form-guarantee-note">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="var(--accent-gold)"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                        <span>Fast 15-Minute Callback • Zero Hidden Charges</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. Statistics Strip -->
    <section class="stats-strip">
        <div class="container stats-grid">
            <div class="stat-item">
                <div class="stat-number">12+</div>
                <div class="stat-label">Years of Legacy</div>
                <div class="stat-sublabel">Pioneering Defence Mentorship</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">400+</div>
                <div class="stat-label">Officers & DDCIANs</div>
                <div class="stat-sublabel">Commissioned & Recommended in NDA/CDS</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">1st</div>
                <div class="stat-label">In-House Separate Hostels</div>
                <div class="stat-sublabel">Dehradun's Only Campus for Boys & Girls</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">2-Acre</div>
                <div class="stat-label">Live SSB GTO Ground</div>
                <div class="stat-sublabel">Real Military Obstacles & Burma Bridge</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">4.9 ★</div>
                <div class="stat-label">Google Verified</div>
                <div class="stat-sublabel">104+ Student & Parent Reviews</div>
            </div>
        </div>
    </section>

    <!-- 3. Our Latest Selection of 2025-2026 -->
    <section class="section-padding bg-slate" id="selections" style="padding-top: 5.5rem; padding-bottom: 6rem;">
        <div class="container">
            <div class="section-header" style="margin-bottom: 3.25rem;">
                <span class="badge-saffron">Our Pride & National Duty</span>
                <h2>Our Latest Selection of 2025-2026</h2>
                <div class="gold-divider"></div>
                <p>Saluting the courageous DDCIANs who answered the call of duty and earned their place in the Indian Armed Forces.</p>
            </div>

            <div style="background: linear-gradient(135deg, #0B1B3D 0%, #162B56 100%); color: #FFFFFF; border-radius: var(--radius-md); padding: 1.5rem 2.25rem; border-left: 5px solid var(--accent-gold); margin-bottom: 3.75rem; text-align: center; box-shadow: 0 10px 28px rgba(11, 27, 61, 0.15);">
                <p style="font-family: var(--font-heading); font-size: 1.25rem; font-weight: 800; color: var(--accent-gold); letter-spacing: 0.5px; margin: 0; text-transform: uppercase;">
                    “One who is an officer is an officer now, and will remain one, rest of one's life for!”
                </p>
            </div>

            <div class="selection-feature-grid">
                <div class="selection-poster-frame">
                    <img src="<?php echo esc_url($theme_uri . '/assets/images/ddc-selections-2025-2026.jpg'); ?>" alt="Official Merit Poster - Our Latest Selection of 2025-2026" class="selection-poster-img" loading="lazy">
                    <div style="background: rgba(11,37,69,0.95); padding: 0.85rem 1.25rem; display: flex; justify-content: space-between; align-items: center;">
                        <span style="color: #FFFFFF; font-size: 0.85rem; font-weight: 700;">Official Merit Board 2025-2026</span>
                        <a href="<?php echo esc_url($theme_uri . '/assets/images/ddc-selections-2025-2026.jpg'); ?>" target="_blank" rel="noopener" class="btn btn-gold btn-sm" style="padding: 0.35rem 0.75rem; font-size: 0.75rem;">View Full Poster</a>
                    </div>
                </div>

                <div style="padding-left: 0.5rem;">
                    <span class="badge-gold">★ Latest 2025-2026 Selections Spotlight</span>
                    <h3 style="font-size: 1.85rem; color: var(--primary-navy); margin: 0.75rem 0 0.85rem 0; line-height: 1.3;">
                        From Dehradun Classrooms to NDA &amp; Armed Forces Cockpits
                    </h3>
                    <p style="color: var(--text-muted); line-height: 1.6; margin-bottom: 1.25rem; font-size: 0.95rem;">
                        Clearing UPSC and earning a recommendation from the Services Selection Board (SSB) requires mental toughness, unshakeable character, and relentless physical conditioning. We proudly celebrate our latest 2025-2026 batch qualifiers:
                    </p>

                    <!-- Latest 2025-2026 Star Cadets Highlight Grid (4 Key Selections with Photos) -->
                    <div class="selection-highlight-grid">
                        <!-- Card 1: Durshya Biradar -->
                        <div class="selection-highlight-card">
                            <span class="cadet-card-badge cadet-badge-nda" style="background: #FEF3C7; color: #92400E; font-weight: 800; border: 1px solid #FDE68A;">★ LATEST 2026 SELECTION</span>
                            <img src="<?php echo esc_url($theme_uri . '/assets/images/cadets/cadet-durshya-biradar.jpg'); ?>" alt="Durshya Biradar NDA-2 Selection" class="cadet-card-photo" loading="lazy" width="76" height="76">
                            <h4 style="font-size: 1.05rem; color: var(--primary-navy); margin: 0.2rem 0 0.15rem 0; font-weight: 800;">Durshya Biradar</h4>
                            <p style="font-size: 0.8rem; color: var(--accent-gold-hover); font-weight: 700; margin-bottom: 0.25rem;">(DDCIAN)</p>
                            <p style="font-size: 0.775rem; color: var(--text-dark); margin: 0; line-height: 1.35;">Qualified <strong>NDA-2 (Sep 2026)</strong> Written Exam</p>
                        </div>

                        <!-- Card 2: Akshant Chuksey -->
                        <div class="selection-highlight-card">
                            <span class="cadet-card-badge cadet-badge-nda" style="background: #FEF3C7; color: #92400E; font-weight: 800; border: 1px solid #FDE68A;">★ LATEST 2026 SELECTION</span>
                            <img src="<?php echo esc_url($theme_uri . '/assets/images/cadets/cadet-akshant-chuksey.jpg'); ?>" alt="Akshant Chuksey NDA-1 Selection" class="cadet-card-photo" loading="lazy" width="76" height="76">
                            <h4 style="font-size: 1.05rem; color: var(--primary-navy); margin: 0.2rem 0 0.15rem 0; font-weight: 800;">Akshant Chuksey</h4>
                            <p style="font-size: 0.8rem; color: var(--accent-gold-hover); font-weight: 700; margin-bottom: 0.25rem;">(DDCIAN)</p>
                            <p style="font-size: 0.775rem; color: var(--text-dark); margin: 0; line-height: 1.35;">Qualified <strong>NDA-1 (Apr 2026)</strong> Written Exam</p>
                        </div>

                        <!-- Card 3: Aadarsh Mishra -->
                        <div class="selection-highlight-card">
                            <span class="cadet-card-badge cadet-badge-iaf" style="background: #E0F2FE; color: #0369A1; font-weight: 800; border: 1px solid #BAE6FD;">★ AIR FORCE COMMISSION</span>
                            <img src="<?php echo esc_url($theme_uri . '/assets/images/cadets/cadet-aadarsh-mishra.jpg'); ?>" alt="Aadarsh Mishra Flying Officer" class="cadet-card-photo" loading="lazy" width="76" height="76">
                            <h4 style="font-size: 1.05rem; color: var(--primary-navy); margin: 0.2rem 0 0.15rem 0; font-weight: 800;">Aadarsh Mishra</h4>
                            <p style="font-size: 0.8rem; color: var(--accent-gold-hover); font-weight: 700; margin-bottom: 0.25rem;">(DDCIAN)</p>
                            <p style="font-size: 0.775rem; color: var(--text-dark); margin: 0; line-height: 1.35;">Commissioned as <strong>Flying Officer</strong> in IAF</p>
                        </div>

                        <!-- Card 4: Sanskar Jha -->
                        <div class="selection-highlight-card">
                            <span class="cadet-card-badge cadet-badge-ota" style="background: #DCFCE7; color: #166534; font-weight: 800; border: 1px solid #BBF7D0;">★ SSB RECOMMENDED</span>
                            <img src="<?php echo esc_url($theme_uri . '/assets/images/cadets/cadet-sanskar-jha.jpg'); ?>" alt="Sanskar Jha NDA Cadet" class="cadet-card-photo" loading="lazy" width="76" height="76">
                            <h4 style="font-size: 1.05rem; color: var(--primary-navy); margin: 0.2rem 0 0.15rem 0; font-weight: 800;">Sanskar Jha</h4>
                            <p style="font-size: 0.8rem; color: var(--accent-gold-hover); font-weight: 700; margin-bottom: 0.25rem;">(DDCIAN)</p>
                            <p style="font-size: 0.775rem; color: var(--text-dark); margin: 0; line-height: 1.35;">Cleared <strong>NDA Written &amp; SSB Board</strong></p>
                        </div>
                    </div>

                    <!-- Verified Selections Trust Strip -->
                    <div style="background: linear-gradient(135deg, rgba(11,27,61,0.04) 0%, rgba(212,175,55,0.08) 100%); border: 1px dashed var(--accent-gold); border-radius: var(--radius-md); padding: 0.75rem 1rem; margin-bottom: 1.5rem; display: flex; align-items: center; gap: 0.75rem;">
                        <span style="font-size: 1.25rem; line-height: 1;">🎖️</span>
                        <div style="flex: 1; font-size: 0.825rem; color: var(--primary-navy); line-height: 1.4;">
                            <strong>13+ Selections in 2025-2026 Batches</strong> • 100% Genuine UPSC Roll Numbers &amp; SSB Call Letters verified on campus.
                        </div>
                    </div>

                    <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                        <button type="button" class="btn btn-gold open-enquiry-modal" data-course="Direct Admission 2026 Batch">
                            <span>Join Next Officer Batch 2026</span>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </button>
                        <a href="<?php echo esc_url(home_url('/results-selections/')); ?>" class="btn btn-outline-navy">
                            <span>View All 13+ Selections</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Dedicated Individual Selection Cards Showcase -->
            <div style="margin-top: 2.5rem;">
                <div style="text-align: center; margin-bottom: 1.5rem;">
                    <span class="badge-saffron">★ Individual Congratulations Spotlight</span>
                    <h3 style="font-size: 1.65rem; color: var(--primary-navy); margin: 0.5rem 0;">
                        Congratulations to Our Star DDCIAN Qualifiers
                    </h3>
                    <p style="color: var(--text-muted); font-size: 0.95rem; max-width: 650px; margin: 0 auto;">
                        Authentic qualification cards honoring students who achieved their dream uniform recommendations through Dehradun Defence College.
                    </p>
                </div>

                <div class="individual-selections-grid">
                    <div class="individual-selection-card is-latest-selection">
                        <span class="selection-ribbon-badge">★ LATEST 2026 SELECTION</span>
                        <img src="<?php echo esc_url($theme_uri . '/assets/images/cadets/cadet-durshya-biradar.jpg'); ?>" alt="Durshya Biradar - NDA-2 Selection" class="individual-selection-img" loading="lazy">
                        <div class="individual-selection-meta">
                            <h4>Durshya Biradar</h4>
                            <p>NDA-2 Written Selection • DDCIAN</p>
                            <span class="selection-exam-tag">UPSC NDA-2 (Sep 2026)</span>
                        </div>
                    </div>
                    <div class="individual-selection-card is-latest-selection">
                        <span class="selection-ribbon-badge">★ LATEST 2026 SELECTION</span>
                        <img src="<?php echo esc_url($theme_uri . '/assets/images/cadets/cadet-akshant-chuksey.jpg'); ?>" alt="Akshant Chuksey - NDA-1 Selection" class="individual-selection-img" loading="lazy">
                        <div class="individual-selection-meta">
                            <h4>Akshant Chuksey</h4>
                            <p>NDA-1 Selection • DDCIAN</p>
                            <span class="selection-exam-tag">UPSC NDA-1 (April 2026)</span>
                        </div>
                    </div>
                    <div class="individual-selection-card">
                        <img src="<?php echo esc_url($theme_uri . '/assets/images/cadets/cadet-aadarsh-mishra.jpg'); ?>" alt="Aadarsh Mishra - Flying Officer IAF" class="individual-selection-img" loading="lazy">
                        <div class="individual-selection-meta">
                            <h4>Aadarsh Mishra</h4>
                            <p>Flying Officer • Indian Air Force</p>
                            <span class="selection-exam-tag" style="background: rgba(0, 119, 182, 0.25); border-color: rgba(0, 119, 182, 0.6); color: #90e0ef;">IAF Commissioned</span>
                        </div>
                    </div>
                    <div class="individual-selection-card">
                        <img src="<?php echo esc_url($theme_uri . '/assets/images/cadets/cadet-sanskar-jha.jpg'); ?>" alt="Sanskar Jha - NDA Recommended" class="individual-selection-img" loading="lazy">
                        <div class="individual-selection-meta">
                            <h4>Sanskar Jha</h4>
                            <p>NDA Written &amp; SSB Cleared • DDCIAN</p>
                            <span class="selection-exam-tag" style="background: rgba(45, 106, 79, 0.25); border-color: rgba(45, 106, 79, 0.6); color: #95d5b2;">NDA Recommended</span>
                        </div>
                    </div>
                    <div class="individual-selection-card">
                        <img src="<?php echo esc_url($theme_uri . '/assets/images/selection-aravind-kumar.jpg'); ?>" alt="Aravind Kumar - Congratulations Selection" class="individual-selection-img" loading="lazy">
                        <div class="individual-selection-meta">
                            <h4>Aravind Kumar</h4>
                            <p>Recommended & Commissioned • DDCIAN</p>
                            <span class="selection-exam-tag" style="background: rgba(255, 255, 255, 0.08); border-color: rgba(255, 255, 255, 0.2); color: #e0e0e0;">NDA Commissioned</span>
                        </div>
                    </div>
                    <div class="individual-selection-card">
                        <img src="<?php echo esc_url($theme_uri . '/assets/images/selection-rajesh-sharma.jpg'); ?>" alt="Rajesh Sharma - Congratulations Selection" class="individual-selection-img" loading="lazy">
                        <div class="individual-selection-meta">
                            <h4>Rajesh Sharma</h4>
                            <p>Recommended & Commissioned • DDCIAN</p>
                            <span class="selection-exam-tag" style="background: rgba(255, 255, 255, 0.08); border-color: rgba(255, 255, 255, 0.2); color: #e0e0e0;">NDA Commissioned</span>
                        </div>
                    </div>
                    <div class="individual-selection-card">
                        <img src="<?php echo esc_url($theme_uri . '/assets/images/selection-vikram-singh.jpg'); ?>" alt="Vikram Singh - Congratulations Selection" class="individual-selection-img" loading="lazy">
                        <div class="individual-selection-meta">
                            <h4>Vikram Singh</h4>
                            <p>Recommended & Commissioned • DDCIAN</p>
                            <span class="selection-exam-tag" style="background: rgba(255, 255, 255, 0.08); border-color: rgba(255, 255, 255, 0.2); color: #e0e0e0;">NDA Commissioned</span>
                        </div>
                    </div>
                    <div class="individual-selection-card">
                        <img src="<?php echo esc_url($theme_uri . '/assets/images/selection-sanjay-gupta.jpg'); ?>" alt="Sanjay Gupta - Congratulations Selection" class="individual-selection-img" loading="lazy">
                        <div class="individual-selection-meta">
                            <h4>Sanjay Gupta</h4>
                            <p>Recommended & Commissioned • DDCIAN</p>
                            <span class="selection-exam-tag" style="background: rgba(255, 255, 255, 0.08); border-color: rgba(255, 255, 255, 0.2); color: #e0e0e0;">NDA Commissioned</span>
                        </div>
                    </div>
                </div>

                <!-- 21 Final Selections in Last 2 Years Official Banner Box -->
                <div style="background: #FFFFFF; border-radius: var(--radius-lg); overflow: hidden; border: 2px solid var(--accent-gold); box-shadow: var(--shadow-md); margin-bottom: 2.5rem; display: grid; grid-template-columns: 320px 1fr; align-items: center;" class="selection-banner-2col">
                    <div style="background: #0B1B3D; padding: 0.75rem; display: flex; align-items: center; justify-content: center;">
                        <a href="<?php echo esc_url($theme_uri . '/assets/images/selection-21-nda-banner.jpg'); ?>" data-lightbox="true" style="display: block; width: 100%; text-align: center; cursor: zoom-in;" title="Click to enlarge 21 Final Selections in NDA Official Poster">
                            <img src="<?php echo esc_url($theme_uri . '/assets/images/selection-21-nda-banner.jpg'); ?>" alt="21 Final Selections in NDA - Official Poster" style="width: 100%; height: auto; max-height: 280px; object-fit: contain; border-radius: var(--radius-sm);" loading="lazy">
                        </a>
                    </div>
                    <div style="padding: 2rem 2.25rem;">
                        <span class="badge-gold">Proven Track Record</span>
                        <h3 style="font-size: 1.5rem; color: var(--primary-navy); margin: 0.5rem 0 0.75rem 0;">
                            21+ Final Selections in NDA in Last 2 Years
                        </h3>
                        <p style="color: var(--text-muted); line-height: 1.65; margin-bottom: 1rem;">
                            Dehradun Defence College has consistently set benchmark records in Uttarakhand with exceptional UPSC written hit-rates and SSB recommendations. Our holistic Gurukul model provides comprehensive NDA coaching, SSB GTO outdoor obstacle practice, and daily personal psychology assessment.
                        </p>
                        <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                            <a href="<?php echo esc_url(home_url('/results-selections/')); ?>" class="btn btn-gold btn-sm"><span>View All Academy Selections</span></a>
                            <button type="button" class="btn btn-outline-navy btn-sm open-enquiry-modal" data-course="NDA Coaching 2026 Batch"><span>Enquire for April 2026 Batch</span></button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Complete 13 Selected Cadets Grid -->
            <div style="margin-top: 1rem;">
                <h3 style="font-size: 1.35rem; color: var(--primary-navy); margin-bottom: 1.25rem; text-align: center;">
                    Roll of Honor: 2025-2026 Recommended DDCIANs
                </h3>
                <div class="selection-cadets-grid">
                    <?php 
                    $cadets = function_exists('ddc_get_latest_selections') ? ddc_get_latest_selections() : [];
                    foreach ($cadets as $cadet): 
                    ?>
                        <div class="cadet-card">
                            <div>
                                <?php 
                                    $badge_class = 'cadet-badge-nda';
                                    if (strpos($cadet['tag'], 'Air Force') !== false) {
                                        $badge_class = 'cadet-badge-iaf';
                                    } elseif (strpos($cadet['tag'], 'OTA') !== false || strpos($cadet['tag'], 'CDS') !== false) {
                                        $badge_class = 'cadet-badge-ota';
                                    } elseif (strpos($cadet['tag'], 'Girls') !== false) {
                                        $badge_class = 'cadet-badge-girls';
                                    } elseif (strpos($cadet['tag'], 'JEE') !== false) {
                                        $badge_class = 'cadet-badge-jee';
                                    }
                                ?>
                                <span class="cadet-card-badge <?php echo $badge_class; ?>">
                                    <?php echo esc_html($cadet['tag']); ?>
                                </span>
                                <?php if (!empty($cadet['photo'])): ?>
                                    <img src="<?php echo esc_url($theme_uri . '/assets/images/cadets/' . $cadet['photo']); ?>" alt="<?php echo esc_attr($cadet['name']); ?> Selection" class="cadet-card-photo" loading="lazy" width="76" height="76">
                                <?php endif; ?>
                                <h4 class="cadet-name"><?php echo esc_html($cadet['name']); ?></h4>
                                <div class="cadet-role"><?php echo esc_html($cadet['role']); ?> • <?php echo esc_html($cadet['org']); ?></div>
                            </div>
                            <div>
                                <p class="cadet-detail"><?php echo esc_html($cadet['detail']); ?></p>
                                <span style="display: inline-block; margin-top: 0.65rem; font-size: 0.75rem; font-weight: 700; color: var(--accent-gold-hover); background: var(--bg-light-blue); padding: 0.2rem 0.55rem; border-radius: var(--radius-sm);">
                                    <?php echo esc_html($cadet['badge']); ?>
                                </span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Dehradun's 1st In-House Separate Hostels for Boys & Girls -->
    <section class="section-padding" id="hostel-usp">
        <div class="container">
            <div class="hostel-banner-box">
                <div style="max-width: 860px; margin: 0 auto; text-align: center;">
                    <span class="badge-gold">Dehradun's First Dedicated Defence Campus</span>
                    <h2 style="font-size: 2.6rem; color: #FFFFFF; margin: 0.75rem 0 1rem 0;">
                        In-House Separate Hostels for Boys & Girls
                    </h2>
                    <div class="gold-divider" style="margin: 1rem auto;"></div>
                    <p style="color: rgba(255, 255, 255, 0.9); font-size: 1.15rem; line-height: 1.7; margin-bottom: 2rem;">
                        Dehradun Defence College is proud to be the valley's premier institution providing <strong>100% in-house, fully separate residential wings</strong> for male and female defence aspirants.
                    </p>
                </div>

                <div class="hostel-pillars-grid">
                    <div class="hostel-pillar-card">
                        <div class="hostel-pillar-icon">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                        </div>
                        <h4 style="color: #FFFFFF; font-size: 1.15rem; margin-bottom: 0.5rem;">Separate Secure Wings</h4>
                        <p style="color: rgba(255, 255, 255, 0.8); font-size: 0.875rem; line-height: 1.6; margin: 0;">
                            Completely isolated residential complexes for girls and boys with biometric gate entry and 24/7 CCTV surveillance.
                        </p>
                    </div>

                    <div class="hostel-pillar-card">
                        <div class="hostel-pillar-icon">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                        </div>
                        <h4 style="color: #FFFFFF; font-size: 1.15rem; margin-bottom: 0.5rem;">Dedicated Female Wardens</h4>
                        <p style="color: rgba(255, 255, 255, 0.8); font-size: 0.875rem; line-height: 1.6; margin: 0;">
                            Round-the-clock resident female wardens and staff ensuring safety, disciplined routines, and personal guidance.
                        </p>
                    </div>

                    <div class="hostel-pillar-card">
                        <div class="hostel-pillar-icon">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M18 8h1a4 4 0 0 1 0 8h-1"></path><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path><line x1="6" y1="1" x2="6" y2="4"></line><line x1="10" y1="1" x2="10" y2="4"></line><line x1="14" y1="1" x2="14" y2="4"></line></svg>
                        </div>
                        <h4 style="color: #FFFFFF; font-size: 1.15rem; margin-bottom: 0.5rem;">4-Meal Military Mess</h4>
                        <p style="color: rgba(255, 255, 255, 0.8); font-size: 0.875rem; line-height: 1.6; margin: 0;">
                            Freshly prepared, high-protein breakfast, wholesome lunch, evening high-tea snacks, and balanced dinner.
                        </p>
                    </div>

                    <div class="hostel-pillar-card">
                        <div class="hostel-pillar-icon">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 12h-4l-3 9L9 3l-3 9H2"></path></svg>
                        </div>
                        <h4 style="color: #FFFFFF; font-size: 1.15rem; margin-bottom: 0.5rem;">Mentored Study & Health Care</h4>
                        <p style="color: rgba(255, 255, 255, 0.8); font-size: 0.875rem; line-height: 1.6; margin: 0;">
                            Evening doubt-clearing sessions supervised by resident faculty, 24/7 on-campus first-aid infirmary, and doctor on call.
                        </p>
                    </div>
                </div>

                <!-- Real Campus & In-House Hostels Photo Showcase -->
                <div class="campus-hostels-showcase-grid">
                    <div style="background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.15); border-radius: var(--radius-lg); overflow: hidden;">
                        <div style="height: 220px; overflow: hidden; position: relative;">
                            <img src="<?php echo esc_url($theme_uri . '/assets/images/campus-building-main.jpg'); ?>" alt="Authentic Dehradun Defence College Campus Building and In-House Boys Hostel" style="width: 100%; height: 100%; object-fit: cover;">
                            <span class="badge-gold" style="position: absolute; top: 10px; left: 10px; font-size: 0.75rem;">Boys In-House Wing & Campus Complex</span>
                        </div>
                        <div style="padding: 1.25rem; text-align: left;">
                            <h4 style="color: #FFFFFF; font-size: 1.1rem; margin-bottom: 0.35rem;">Grand 10-Acre Foothills Campus</h4>
                            <p style="color: rgba(255,255,255,0.8); font-size: 0.85rem; line-height: 1.5; margin: 0;">
                                Multi-storey residential complex with full cadet formation, flag post, badminton & kabaddi courts in tranquil Maldevta.
                            </p>
                        </div>
                    </div>

                    <div style="background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.15); border-radius: var(--radius-lg); overflow: hidden;">
                        <div style="height: 220px; overflow: hidden; position: relative;">
                            <img src="<?php echo esc_url($theme_uri . '/assets/images/nda-girls-wing-formation.jpg'); ?>" alt="Dedicated NDA Girls Wing Cadets Morning Drill in Uniform" style="width: 100%; height: 100%; object-fit: cover;">
                            <span class="badge-gold" style="position: absolute; top: 10px; left: 10px; font-size: 0.75rem;">Dedicated In-House Girls Wing</span>
                        </div>
                        <div style="padding: 1.25rem; text-align: left;">
                            <h4 style="color: #FFFFFF; font-size: 1.1rem; margin-bottom: 0.35rem;">Dehradun's 1st Secure Girls Wing</h4>
                            <p style="color: rgba(255,255,255,0.8); font-size: 0.85rem; line-height: 1.5; margin: 0;">
                                100% separate residential quarters, dedicated female wardens, morning drill formations, and biometric surveillance.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. Campus Activities Gallery -->
    <section class="section-padding bg-slate" id="campus-life">
        <div class="container">
            <div class="section-header">
                <span class="badge-navy">Cadet Life in Action</span>
                <h2>Campus Infrastructure & Student Activities</h2>
                <div class="gold-divider"></div>
                <p>Real glimpses of physical drills, sports grounds, tactical chess, smart classes, and obstacle training.</p>
            </div>

            <div class="activities-masonry-grid">
                <!-- Activity 1: Grand Campus Building -->
                <div class="activity-tile">
                    <img src="<?php echo esc_url($theme_uri . '/assets/images/campus-building-main.jpg'); ?>" alt="Dehradun Defence College Campus Building and Cadets Flag Assembly" loading="lazy">
                    <div class="activity-tile-overlay">
                        <span class="activity-tile-tag">Main Campus Complex</span>
                        <h4 class="activity-tile-title">Academic & Hostel Complex in Foothills</h4>
                    </div>
                </div>

                <!-- Activity 2: Front Office Reception Desk -->
                <div class="activity-tile">
                    <img src="<?php echo esc_url($theme_uri . '/assets/images/campus-front-office.jpg'); ?>" alt="Official Front Office Reception & Admission Counseling Helpdesk" loading="lazy">
                    <div class="activity-tile-overlay">
                        <span class="activity-tile-tag">Central Reception</span>
                        <h4 class="activity-tile-title">Front Office & Admission Helpdesk</h4>
                    </div>
                </div>

                <!-- Activity 3: Grand Parade Ground Assembly -->
                <div class="activity-tile">
                    <img src="<?php echo esc_url($theme_uri . '/assets/images/cadets-parade-assembly.jpg'); ?>" alt="Cadets Drill and Morning Parade Assembly with Himalayan Backdrop" loading="lazy">
                    <div class="activity-tile-overlay">
                        <span class="activity-tile-tag">Morning Parade Assembly</span>
                        <h4 class="activity-tile-title">Cadets Drill in Foothills Valley</h4>
                    </div>
                </div>

                <!-- Activity 4: Dedicated NDA Girls Wing -->
                <div class="activity-tile">
                    <img src="<?php echo esc_url($theme_uri . '/assets/images/nda-girls-wing-formation.jpg'); ?>" alt="Dehradun First Dedicated NDA Girls Wing in Morning Drill Formation" loading="lazy">
                    <div class="activity-tile-overlay">
                        <span class="activity-tile-tag">Dedicated Girls Wing</span>
                        <h4 class="activity-tile-title">NDA (Girls) Wing Morning Parade</h4>
                    </div>
                </div>

                <!-- Activity 5: Stepped Smart Lecture Halls -->
                <div class="activity-tile">
                    <img src="<?php echo esc_url($theme_uri . '/assets/images/classroom-lecture-hall-real.jpg'); ?>" alt="Stepped Smart Lecture Hall Packed with Uniform Cadets in UPSC Prep" loading="lazy">
                    <div class="activity-tile-overlay">
                        <span class="activity-tile-tag">Academic Rigor</span>
                        <h4 class="activity-tile-title">Stepped UPSC Lecture Theatres</h4>
                    </div>
                </div>

                <!-- Activity 6: Physical Conditioning & Agility Drills -->
                <div class="activity-tile">
                    <img src="<?php echo esc_url($theme_uri . '/assets/images/campus-ground-physical-training.jpg'); ?>" alt="Cadet Physical Training and Obstacle Agility Grounds" loading="lazy">
                    <div class="activity-tile-overlay">
                        <span class="activity-tile-tag">Physical Conditioning</span>
                        <h4 class="activity-tile-title">Physical Training & Agility Grounds</h4>
                    </div>
                </div>

                <!-- Activity 7: Campus Investiture & Annual Celebrations -->
                <div class="activity-tile">
                    <img src="<?php echo esc_url($theme_uri . '/assets/images/campus-ceremony-celebration.jpg'); ?>" alt="Annual Campus Investiture & Cadets Achievement Ceremony" loading="lazy">
                    <div class="activity-tile-overlay">
                        <span class="activity-tile-tag">Campus Celebrations</span>
                        <h4 class="activity-tile-title">Investiture & Honor Ceremony</h4>
                    </div>
                </div>

                <!-- Activity 8: Cadet Study Hall & Library -->
                <div class="activity-tile">
                    <img src="<?php echo esc_url($theme_uri . '/assets/images/campus-study-library.jpg'); ?>" alt="Cadet Evening Study Hall and Reference Library" loading="lazy">
                    <div class="activity-tile-overlay">
                        <span class="activity-tile-tag">Focused Gurukul</span>
                        <h4 class="activity-tile-title">Mentored Evening Study Hall</h4>
                    </div>
                </div>
            </div>

            <div style="text-align: center; margin-top: 2.5rem;">
                <a href="<?php echo esc_url(home_url('/gallery/')); ?>" class="btn btn-primary">
                    <span>View Full Photo Gallery</span>
                </a>
            </div>
        </div>
    </section>

    <!-- 5.5 All-India Scholarship & Admission Test (Class 9th & 10th - Session 2027) -->
    <section class="section-padding scholarship-test-section" id="scholarship-test" aria-label="Class 9th and 10th Online Scholarship Test">
        <div class="container">
            <div class="scholarship-test-container">
                <div class="scholarship-test-header">
                    <div class="hero-badge-wrap" style="justify-content: center; margin-bottom: 0.75rem;">
                        <span class="badge-saffron pulse-badge">
                            <span class="pulsing-dot-white"></span>
                            🔥 ONLINE SCHOLARSHIP TEST • SESSION 2027
                        </span>
                        <span class="badge-campus-tag" style="background: rgba(255, 215, 0, 0.15); color: #FFD700; border-color: rgba(255, 215, 0, 0.4);">
                            🎯 For Class 9th &amp; 10th Students
                        </span>
                    </div>

                    <h2 class="scholarship-test-title">
                        All-India Scholarship &amp; Admission Test
                    </h2>
                    
                    <p class="scholarship-test-motto">
                        "Be brave. Be confident. Be the future officer of India."
                    </p>

                    <p class="scholarship-test-subtitle">
                        Step towards your dream of wearing the Indian Armed Forces uniform. Attempt the official <strong>50-Question Online Evaluation</strong> to qualify for up to <strong>100% Tuition Fee Waiver</strong> for our NDA Foundation residential coaching batches in Dehradun.
                    </p>
                </div>

                <!-- 4 Quick Highlights Cards Grid -->
                <div class="scholarship-highlights-grid">
                    <div class="test-highlight-card">
                        <div class="test-highlight-icon">
                            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                        </div>
                        <div class="test-highlight-info">
                            <span class="test-highlight-label">Pattern &amp; Marking</span>
                            <h4>50 Questions • 100 Marks</h4>
                            <p>Objective MCQ pattern &bull; 2 Marks each &bull; 60 Mins online duration.</p>
                        </div>
                    </div>

                    <div class="test-highlight-card">
                        <div class="test-highlight-icon">
                            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                        </div>
                        <div class="test-highlight-info">
                            <span class="test-highlight-label">Tested Syllabus</span>
                            <h4>Class 9th &amp; 10th Level</h4>
                            <p>Mathematics, General Science (PCB), English Grammar &amp; Defence GK.</p>
                        </div>
                    </div>

                    <div class="test-highlight-card highlight-glow">
                        <div class="test-highlight-icon" style="color: #FFD700;">
                            <svg width="26" height="26" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        </div>
                        <div class="test-highlight-info">
                            <span class="test-highlight-label" style="color: #FEF08A;">Scholarship Grants</span>
                            <h4 style="color: #FFD700;">Up to 100% Fee Waiver</h4>
                            <p>Merit-based fee concession on NDA Foundation residential batches.</p>
                        </div>
                    </div>

                    <div class="test-highlight-card">
                        <div class="test-highlight-icon">
                            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg>
                        </div>
                        <div class="test-highlight-info">
                            <span class="test-highlight-label">Test Format</span>
                            <h4>100% Online &amp; Free</h4>
                            <p>Attempt anytime from home on your Mobile, Tablet, or Laptop.</p>
                        </div>
                    </div>
                </div>

                <!-- Call to Action Box -->
                <div class="scholarship-test-cta-box">
                    <div class="test-cta-content">
                        <div class="test-cta-badge">⚡ NO REGISTRATION FEE &bull; OFFICIAL ONLINE EVALUATION</div>
                        <h3>Ready to Test Your Defence Potential?</h3>
                        <p>Attempt 50 MCQs online. Our Senior Defence Admission Committee will evaluate your score for scholarship grants and NDA Foundation admission.</p>
                    </div>
                    <div class="test-cta-actions">
                        <a href="<?php echo SCHOLARSHIP_TEST_URL; ?>" target="_blank" rel="noopener" class="btn btn-gold btn-xl test-cta-btn">
                            <span>START ONLINE TEST NOW</span>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </a>
                        <a href="tel:<?php echo CONTACT_PHONE_1_RAW; ?>" class="btn btn-outline-white btn-lg" style="border-color: rgba(255,255,255,0.4);">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                            <span>Helpline: <?php echo CONTACT_PHONE_1; ?></span>
                        </a>
                    </div>
                </div>

                <!-- Footer reassurance note -->
                <div class="test-trust-note">
                    🔒 Official Google Assessment Link &bull; Dehradun Defence College Admission Cell &bull; Session 2027
                </div>
            </div>
        </div>
    </section>

    <!-- 6. Transparent Fee Structure & Scholarship Details -->
    <section class="section-padding" id="fee-structure">

        <div class="container">
            <div class="section-header">
                <span class="badge-gold">Transparent Investment</span>
                <h2>Course Fee Structure &amp; Scholarships</h2>
                <div class="gold-divider"></div>
                <p>Quality defence mentorship made accessible with transparent fee schedules, zero hidden charges, and merit-based concessions.</p>
            </div>

            <!-- Fee Structure Table -->
            <div class="fee-table-wrap">
                <table class="fee-table">
                    <thead>
                        <tr>
                            <th>Course</th>
                            <th>Duration</th>
                            <th>Academic + NDA + SSB</th>
                            <th>Hostel &amp; Mess Charges</th>
                            <th>Total Fees</th>
                            <th style="text-align: center;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $fee_structure = [
                            [
                                'category'     => 'NDA Foundation',
                                'course'       => 'NDA Foundation (Class 11 NDA + Schooling)',
                                'duration'     => '2 Years (Integrated)',
                                'academic_fee' => '₹2,00,000 / Year',
                                'hostel_fee'   => '₹1,20,000 / Year',
                                'total_fee'    => '3,20,000/-',
                            ],
                            [
                                'category'     => 'Pre-NDA Foundation',
                                'course'       => 'Pre-NDA Foundation (Class 9th & 10th)',
                                'duration'     => '2 - 3 Years',
                                'academic_fee' => '₹1,60,000 / Year',
                                'hostel_fee'   => '₹1,20,000 / Year',
                                'total_fee'    => '2,80,000/-',
                            ],
                            [
                                'category'     => 'NDA Dropper / Target',
                                'course'       => 'NDA Target / Dropper Batch (After 12th)',
                                'duration'     => '6 Months / 1 Year',
                                'academic_fee' => '₹45,000 (6 Mo) / ₹75,000 (1 Yr)',
                                'hostel_fee'   => '₹45,000 (6 Mo) / ₹85,000 (1 Yr)',
                                'total_fee'    => '10,000/- Per Month (Hostel Charge) + NDA Fee',
                            ],
                            [
                                'category'     => 'School Entrance',
                                'course'       => '6th, 7th & 8th, Sainik School, RIMC Dehradun & RMS (Military Schools CET)',
                                'duration'     => '1 Year',
                                'academic_fee' => '₹1,50,000 / Year',
                                'hostel_fee'   => '₹1,00,000 / Year',
                                'total_fee'    => '2,50,000/-',
                            ],
                            [
                                'category'     => 'Graduate Armed Forces',
                                'course'       => 'CDS (IMA, OTA, AFA, INA) & AFCAT Coaching',
                                'duration'     => '6 Months / 1 Year',
                                'academic_fee' => '₹48,000 (6 Mo) / ₹65,000 (1 Yr)',
                                'hostel_fee'   => '₹10,000 / Month (Optional)',
                                'total_fee'    => '—',
                            ],
                            [
                                'category'     => 'SSB Practical Ground',
                                'course'       => 'SSB Interview 14-Day Practical Obstacle Camp',
                                'duration'     => '14 Days Immersive',
                                'academic_fee' => '₹18,500 (All Modules)',
                                'hostel_fee'   => '₹10,000 (14-Day Food & Stay)',
                                'total_fee'    => '—',
                            ],
                            [
                                'category'     => 'Defence Medical',
                                'course'       => 'NEET/Military Nursing Service (MNS) & AFMC NEET Wing',
                                'duration'     => '1 Year / 2 Years',
                                'academic_fee' => '₹75,000 / Year',
                                'hostel_fee'   => '1,20,000/- Per Year',
                                'total_fee'    => '1,95,000/-',
                            ]
                        ];
                        foreach ($fee_structure as $fee):
                        ?>
                            <tr>
                                <td>
                                    <strong style="color: var(--primary-navy); font-size: 0.95rem; line-height: 1.35; display: block;"><?php echo esc_html($fee['course']); ?></strong>
                                    <div class="fee-subtag"><?php echo esc_html($fee['category']); ?></div>
                                </td>
                                <td>
                                    <span style="background: var(--bg-light-blue); padding: 0.3rem 0.65rem; border-radius: var(--radius-sm); font-size: 0.825rem; font-weight: 600; display: inline-block; white-space: nowrap;">
                                        <?php echo esc_html($fee['duration']); ?>
                                    </span>
                                </td>
                                <td>
                                    <div class="fee-price-tag"><?php echo esc_html($fee['academic_fee']); ?></div>
                                </td>
                                <td>
                                    <div class="fee-hostel-tag"><?php echo esc_html($fee['hostel_fee']); ?></div>
                                </td>
                                <td>
                                    <div class="fee-total-tag">
                                        <?php echo (!empty($fee['total_fee']) && $fee['total_fee'] !== '—') ? esc_html($fee['total_fee']) : '<span style="color: var(--text-muted); font-weight: 500;">—</span>'; ?>
                                    </div>
                                </td>
                                <td style="text-align: center;">
                                    <button type="button" class="btn btn-gold btn-sm open-enquiry-modal" data-course="<?php echo esc_attr($fee['course']); ?>">
                                        <span>Enquire</span>
                                    </button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <!-- Scholarship & Fee Concessions Box -->
            <div style="margin-top: 2.5rem; background: #F8FAFC; border: 1px solid var(--border-light); border-radius: var(--radius-lg); padding: 2.25rem; box-shadow: var(--shadow-sm);">
                <div style="display: flex; align-items: center; gap: 0.65rem; margin-bottom: 1rem;">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="var(--accent-gold)"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                    <h3 style="font-size: 1.35rem; color: var(--primary-navy); margin: 0;">DDC Merit Scholarships &amp; Defence Concessions</h3>
                </div>
                <div class="feature-check-list" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1rem;">
                    <div class="feature-check-item">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                        <span><strong>100% Tuition Fee Waiver</strong> for Wards of Martyrs &amp; Gallantry Award Winners.</span>
                    </div>
                    <div class="feature-check-item">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                        <span><strong>Special Girls Cadet Concession</strong> on tuition fees to empower future women officers.</span>
                    </div>
                    <div class="feature-check-item">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                        <span><strong>Up to 50% Merit Scholarships</strong> on All-India Entrance &amp; Aptitude Test scores.</span>
                    </div>
                    <div class="feature-check-item">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                        <span><strong>Serving / Ex-Servicemen Wards</strong> get 15-25% dedicated institutional fee rebate.</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. Director's Desk Spotlight -->
    <section class="section-padding" id="directors-desk">
        <div class="container">
            <div class="section-header">
                <span class="badge-gold">Guiding Vision</span>
                <h2>Director's Desk & Leadership Spotlight</h2>
                <div class="gold-divider"></div>
                <p>Guided by visionary leaders dedicated to parent trust, cadet welfare, and India's finest defence training standards.</p>
            </div>

            <div style="background: #FFFFFF; border-radius: var(--radius-lg); border: 2px solid var(--accent-gold); box-shadow: var(--shadow-md); padding: 2.5rem 2rem; margin-bottom: 2.5rem;">
                <div style="display: grid; grid-template-columns: 240px 1fr; gap: 2.5rem; align-items: center;" class="director-detail-grid">
                    <div style="text-align: center;">
                        <img src="<?php echo esc_url($theme_uri . '/assets/images/director-neha.jpg'); ?>" alt="Ms. Neha Kukreja - Director" style="width: 200px; height: 220px; object-fit: cover; border-radius: var(--radius-md); border: 3px solid var(--accent-gold); margin: 0 auto;">
                        <h3 style="font-size: 1.25rem; color: var(--primary-navy); margin-top: 1rem; margin-bottom: 0.2rem;">Ms. Neha Kukreja</h3>
                        <span class="badge-navy" style="font-size: 0.75rem; padding: 0.25rem 0.65rem;">Director</span>
                    </div>
                    <div>
                        <h3 style="font-size: 1.5rem; color: var(--primary-navy); margin-bottom: 0.75rem;">
                            “A Sacred Responsibility to Sculpt Officers & Leaders”
                        </h3>
                        <p style="color: var(--text-muted); line-height: 1.7; font-size: 0.95rem; margin-bottom: 1rem;">
                            <em>"When a parent entrusts their child to Dehradun Defence College, we treat it as our sacred duty to provide uncompromised personal care, moral character, and top-tier academic coaching. As Dehradun's first campus with in-house separate hostels for girls and boys, we ensure round-the-clock safety, dedicated female wardens, and zero outside distraction."</em>
                        </p>
                        <a href="<?php echo esc_url(home_url('/directors/')); ?>" class="btn btn-gold btn-sm">
                            <span>Read Full Message on Director Page</span>
                        </a>
                    </div>
                </div>
            </div>

            <div style="background: #FFFFFF; border-radius: var(--radius-lg); border: 2px solid var(--border-light); box-shadow: var(--shadow-md); padding: 2.5rem 2rem;">
                <div style="display: grid; grid-template-columns: 240px 1fr; gap: 2.5rem; align-items: center;" class="director-detail-grid">
                    <div style="text-align: center;">
                        <img src="<?php echo esc_url($theme_uri . '/assets/images/director-mahendra.jpg'); ?>" alt="Mr. Mahendra Kukreja - Managing Director" style="width: 200px; height: 220px; object-fit: cover; border-radius: var(--radius-md); border: 3px solid var(--primary-navy); margin: 0 auto;">
                        <h3 style="font-size: 1.25rem; color: var(--primary-navy); margin-top: 1rem; margin-bottom: 0.2rem;">Mr. Mahendra Kukreja</h3>
                        <span class="badge-gold" style="font-size: 0.75rem; padding: 0.25rem 0.65rem; font-weight: 800;">Managing Director</span>
                    </div>
                    <div>
                        <h3 style="font-size: 1.5rem; color: var(--primary-navy); margin-bottom: 0.75rem;">
                            “Discipline, Stamina & Unbroken Character”
                        </h3>
                        <p style="color: var(--text-muted); line-height: 1.7; font-size: 0.95rem; margin-bottom: 1rem;">
                            <em>"Clearing defence examinations is never about luck; it is the natural consequence of daily 5:30 AM PT, rigorous concept-based lectures, and living by the Fauji ethos. At DDC, every cadet is trained to master both written exams and the Services Selection Board with confidence and poise."</em>
                        </p>
                        <a href="<?php echo esc_url(home_url('/directors/')); ?>" class="btn btn-primary btn-sm">
                            <span>Visit Complete Leadership & Directors Page</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
