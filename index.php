<?php
/**
 * Homepage - Dehradun Defence College
 * Complete overhauled version with Front Hero Carousel, 2025-2026 Selections,
 * Separate Girls & Boys Hostels USP, RIMC/RMS/MNS/NEET courses, Fee Structure,
 * Campus Activities Gallery, Faculty & Director Spotlight.
 */
require_once __DIR__ . '/config.php';

$page_title = 'Best NDA Coaching in Dehradun | Dehradun Defence College';
$page_desc = 'Join Dehradun Defence College: Best NDA Coaching in Dehradun, 2025-2026 Selections, 1st Campus with In-House Separate Hostels for Boys & Girls, GTO Ground, RIMC, RMS, MNS, NEET & CDS.';
$current_page = 'home';

include __DIR__ . '/includes/header.php';
?>

    <!-- 1. Hero Split Section: Dynamic Carousel (Left) & Persistent Enquiry Form (Right) -->
    <section class="hero-split-section" id="hero" aria-label="Dehradun Defence College Hero Showcase">
        <div class="container hero-split-grid">
            <!-- Left Side: Dynamic Multi-Slide Showcase Carousel -->
            <div class="hero-slider-wrap">
                <div class="hero-slider" id="hero-slider" aria-label="Hero Highlights Slider">
                    <!-- Slide 1: Welcome & Best NDA Coaching -->
                    <div class="hero-slide active" style="background-image: url('assets/images/campus-building-main.jpg');">
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
                                            <img src="assets/images/cadets/cadet-durshya-biradar.jpg" alt="Durshya Biradar NDA-2 Selection" class="hero-cadet-photo-thumb">
                                            <span class="hero-cadet-photo-name">Durshya Biradar</span>
                                            <span class="hero-cadet-photo-sub">NDA-2 (Sep 2026)</span>
                                        </a>
                                        <a href="#selections" class="hero-cadet-photo-item is-latest-highlight" title="Akshant Chuksey - NDA-1 (April 2026) Selection!">
                                            <span class="hero-cadet-pill-badge">★ NEW 2026</span>
                                            <img src="assets/images/cadets/cadet-akshant-chuksey.jpg" alt="Akshant Chuksey NDA-1 Selection" class="hero-cadet-photo-thumb">
                                            <span class="hero-cadet-photo-name">Akshant Chuksey</span>
                                            <span class="hero-cadet-photo-sub">NDA-1 (Apr 2026)</span>
                                        </a>
                                        <a href="#selections" class="hero-cadet-photo-item" title="Flying Officer Aadarsh Mishra - Commissioned IAF!">
                                            <span class="hero-cadet-pill-badge pill-officer">OFFICER</span>
                                            <img src="assets/images/cadets/cadet-aadarsh-mishra.jpg" alt="Aadarsh Mishra IAF" class="hero-cadet-photo-thumb">
                                            <span class="hero-cadet-photo-name">Aadarsh Mishra</span>
                                            <span class="hero-cadet-photo-sub">Flying Officer IAF</span>
                                        </a>
                                        <a href="#selections" class="hero-cadet-photo-item" title="Sanskar Jha - NDA Recommended!">
                                            <span class="hero-cadet-pill-badge pill-nda">NDA SSB</span>
                                            <img src="assets/images/cadets/cadet-sanskar-jha.jpg" alt="Sanskar Jha NDA" class="hero-cadet-photo-thumb">
                                            <span class="hero-cadet-photo-name">Sanskar Jha</span>
                                            <span class="hero-cadet-photo-sub">NDA Recommended</span>
                                        </a>
                                    </div>

                                    <div class="hero-actions" style="margin-top: 0.5rem;">
                                        <a href="#selections" class="btn btn-gold btn-md" style="font-size: 0.85rem; padding: 0.5rem 1rem;">
                                            <span>View 2026 Selections Below</span>
                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                        </a>
                                        <a href="results.php" class="btn btn-outline-white btn-md" style="font-size: 0.85rem; padding: 0.5rem 1rem;">
                                            <span>Full Hall of Fame</span>
                                        </a>
                                    </div>
                                </div>

                                <!-- Right Column: Crystal Clear, Unobstructed Official Merit Board -->
                                <div class="slide-selection-poster-box">
                                    <a href="assets/images/ddc-selections-2025-2026.jpg" target="_blank" rel="noopener" class="slide-selection-poster-link" title="Click to view full high-resolution merit poster">
                                        <img src="assets/images/ddc-selections-2025-2026.jpg" alt="Official Merit Poster - 13+ Cadets Selected" class="slide-selection-poster-img" loading="eager">
                                    </a>
                                    <div class="slide-selection-poster-bar">
                                        <span>Official 2025-2026 Merit Board</span>
                                        <a href="assets/images/ddc-selections-2025-2026.jpg" target="_blank" rel="noopener">
                                            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
                                            Click to Zoom
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3: Dehradun's 1st In-House Separate Hostels -->
                    <div class="hero-slide" style="background-image: url('assets/images/cadets-parade-assembly.jpg');">
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
                                <a href="faculty-facilities.php" class="btn btn-outline-white btn-lg">
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
                    <div class="hero-slide" style="background-image: url('assets/images/ssb-gto-ground.jpg');">
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
                                <a href="course-detail.php?course=ssb-interview" class="btn btn-gold btn-lg">
                                    <span>SSB 14-Day Practical Camp</span>
                                    <svg width="18" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                </a>
                                <a href="assets/downloads/ddc-nda-target-timetable.pdf" download class="btn btn-outline-white btn-lg">
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
                    <div class="hero-slide" style="background-image: url('assets/images/classroom-lecture-hall-real.jpg');">
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
                        <img src="assets/images/logo.png" alt="Dehradun Defence College Official Emblem" style="width: 44px; height: 44px; object-fit: contain; filter: drop-shadow(0 2px 5px rgba(0,0,0,0.3)); flex-shrink: 0;">
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

                    <form action="send-enquiry.php" method="POST" class="ddc-enquiry-form" novalidate>
                        <input type="text" name="website_url_check" class="hp-field" tabindex="-1" autocomplete="off">
                        <input type="hidden" name="form_start_time" value="<?php echo time(); ?>">

                        <div class="form-status-alert" role="alert"></div>

                        <div class="form-group" style="margin-bottom: 0.85rem;">
                            <label class="form-label" for="hero_split_name" style="color: #FFFFFF; font-size: 0.825rem;">Student's Full Name *</label>
                            <input type="text" id="hero_split_name" name="full_name" class="form-control" placeholder="e.g. Aman Sharma" required style="background: rgba(255,255,255,0.95); height: 44px;">
                            <div class="form-error-feedback"></div>
                        </div>

                        <div class="form-group" style="margin-bottom: 0.85rem;">
                            <label class="form-label" for="hero_split_mobile" style="color: #FFFFFF; font-size: 0.825rem;">Contact Mobile Number *</label>
                            <input type="tel" id="hero_split_mobile" name="mobile_number" class="form-control" placeholder="10-digit Mobile Number" required style="background: rgba(255,255,255,0.95); height: 44px;">
                            <div class="form-error-feedback"></div>
                        </div>

                        <div class="form-group" style="margin-bottom: 0.85rem;">
                            <label class="form-label" for="hero_split_email" style="color: #FFFFFF; font-size: 0.825rem;">Email Address *</label>
                            <input type="email" id="hero_split_email" name="email" class="form-control" placeholder="candidate@email.com" required style="background: rgba(255,255,255,0.95); height: 44px;">
                            <div class="form-error-feedback"></div>
                        </div>

                        <div class="form-group" style="margin-bottom: 0.85rem;">
                            <label class="form-label" for="hero_split_course" style="color: #FFFFFF; font-size: 0.825rem;">Course of Interest *</label>
                            <select id="hero_split_course" name="course_interest" class="form-control" required style="background: rgba(255,255,255,0.95); height: 44px;">
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
                            <input type="checkbox" id="hero_split_consent" name="privacy_consent" checked required>
                            <label for="hero_split_consent" style="color: rgba(255,255,255,0.85); font-size: 0.775rem;">
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

    <!-- 2. Proven Track Record / Statistics Strip -->
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

    <!-- 3. Our Latest Selection of 2025-2026 (Wall of Fame Section) -->
    <section class="section-padding bg-slate" id="selections">
        <div class="container">
            <div class="section-header">
                <span class="badge-saffron">Our Pride & National Duty</span>
                <h2>Our Latest Selection of 2025-2026</h2>
                <div class="gold-divider"></div>
                <p>Saluting the courageous DDCIANs who answered the call of duty and earned their place in the Indian Armed Forces.</p>
            </div>

            <!-- Army Motto Banner -->
            <div style="background: linear-gradient(135deg, #0B1B3D 0%, #162B56 100%); color: #FFFFFF; border-radius: var(--radius-md); padding: 1.25rem 2rem; border-left: 5px solid var(--accent-gold); margin-bottom: 2.5rem; text-align: center; box-shadow: var(--shadow-sm);">
                <p style="font-family: var(--font-heading); font-size: 1.2rem; font-weight: 800; color: var(--accent-gold); letter-spacing: 0.5px; margin: 0; text-transform: uppercase;">
                    “One who is an officer is an officer now, and will remain one, rest of one's life for!”
                </p>
            </div>

            <!-- High-Res Official Poster & Officer Spotlight Grid -->
            <div class="selection-feature-grid">
                <!-- Left: Framed Poster -->
                <div class="selection-poster-frame">
                    <img src="assets/images/ddc-selections-2025-2026.jpg" alt="Official Merit Poster - Our Latest Selection of 2025-2026" class="selection-poster-img" loading="lazy">
                    <div style="background: rgba(11,37,69,0.95); padding: 0.85rem 1.25rem; display: flex; justify-content: space-between; align-items: center;">
                        <span style="color: #FFFFFF; font-size: 0.85rem; font-weight: 700;">Official Merit Board 2025-2026</span>
                        <a href="assets/images/ddc-selections-2025-2026.jpg" target="_blank" rel="noopener" class="btn btn-gold btn-sm" style="padding: 0.35rem 0.75rem; font-size: 0.75rem;">View Full Poster</a>
                    </div>
                </div>

                <!-- Right: Commission Spotlight & Cutouts -->
                <div>
                    <span class="badge-gold">Star Commission & Recommendations</span>
                    <h3 style="font-size: 1.85rem; color: var(--primary-navy); margin: 0.75rem 0 1rem 0;">
                        From Dehradun Classrooms to NDA & Air Force Flying Cockpits
                    </h3>
                    <p style="color: var(--text-muted); line-height: 1.7; margin-bottom: 1.25rem;">
                        Clearing UPSC and earning a recommendation from the Services Selection Board (SSB) requires mental toughness, unshakeable character, and relentless physical conditioning. We celebrate our cadets of the 2025-2026 batch who have made their families and the nation proud.
                    </p>

                    <!-- Top 2 Star Cadets Feature Cards -->
                    <div class="form-row-2col" style="margin-bottom: 1.5rem;">
                        <div style="background: #FFFFFF; border-radius: var(--radius-md); padding: 1.25rem; border: 2px solid var(--accent-gold); box-shadow: var(--shadow-sm); text-align: center;">
                            <img src="assets/images/cadets/cadet-aadarsh-mishra.jpg" alt="Aadarsh Mishra Flying Officer" class="cadet-card-photo" loading="lazy" width="76" height="76">
                            <span class="cadet-card-badge cadet-badge-iaf">Air Force Commission</span>
                            <h4 style="font-size: 1.1rem; color: var(--primary-navy); margin: 0.35rem 0 0.2rem 0;">Aadarsh Mishra</h4>
                            <p style="font-size: 0.825rem; color: var(--accent-gold-hover); font-weight: 700; margin-bottom: 0.25rem;">(DDCIAN)</p>
                            <p style="font-size: 0.8rem; color: var(--text-muted); margin: 0;">Joined Indian Air Force as <strong>Flying Officer</strong></p>
                        </div>

                        <div style="background: #FFFFFF; border-radius: var(--radius-md); padding: 1.25rem; border: 2px solid var(--accent-gold); box-shadow: var(--shadow-sm); text-align: center;">
                            <img src="assets/images/cadets/cadet-sanskar-jha.jpg" alt="Sanskar Jha NDA Cadet" class="cadet-card-photo" loading="lazy" width="76" height="76">
                            <span class="cadet-card-badge cadet-badge-nda">NDA Recommendation</span>
                            <h4 style="font-size: 1.1rem; color: var(--primary-navy); margin: 0.35rem 0 0.2rem 0;">Sanskar Jha</h4>
                            <p style="font-size: 0.825rem; color: var(--accent-gold-hover); font-weight: 700; margin-bottom: 0.25rem;">(DDCIAN)</p>
                            <p style="font-size: 0.8rem; color: var(--text-muted); margin: 0;">Cleared <strong>NDA Written Exam &amp; SSB Board</strong></p>
                        </div>
                    </div>

                    <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                        <button type="button" class="btn btn-gold open-enquiry-modal" data-course="Direct Admission 2026 Batch">
                            <span>Join Next Officer Batch 2026</span>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </button>
                        <a href="results.php" class="btn btn-outline-navy">
                            <span>View All Results</span>
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
                        <img src="assets/images/cadets/cadet-durshya-biradar.jpg" alt="Durshya Biradar - NDA-2 Selection" class="individual-selection-img" loading="lazy">
                        <div class="individual-selection-meta">
                            <h4>Durshya Biradar</h4>
                            <p>NDA-2 Written Selection • DDCIAN</p>
                            <span class="selection-exam-tag">UPSC NDA-2 (Sep 2026)</span>
                        </div>
                    </div>
                    <div class="individual-selection-card is-latest-selection">
                        <span class="selection-ribbon-badge">★ LATEST 2026 SELECTION</span>
                        <img src="assets/images/cadets/cadet-akshant-chuksey.jpg" alt="Akshant Chuksey - NDA-1 Selection" class="individual-selection-img" loading="lazy">
                        <div class="individual-selection-meta">
                            <h4>Akshant Chuksey</h4>
                            <p>NDA-1 Selection • DDCIAN</p>
                            <span class="selection-exam-tag">UPSC NDA-1 (April 2026)</span>
                        </div>
                    </div>
                    <div class="individual-selection-card">
                        <img src="assets/images/cadets/cadet-aadarsh-mishra.jpg" alt="Aadarsh Mishra - Flying Officer IAF" class="individual-selection-img" loading="lazy">
                        <div class="individual-selection-meta">
                            <h4>Aadarsh Mishra</h4>
                            <p>Flying Officer • Indian Air Force</p>
                            <span class="selection-exam-tag" style="background: rgba(0, 119, 182, 0.25); border-color: rgba(0, 119, 182, 0.6); color: #90e0ef;">IAF Commissioned</span>
                        </div>
                    </div>
                    <div class="individual-selection-card">
                        <img src="assets/images/cadets/cadet-sanskar-jha.jpg" alt="Sanskar Jha - NDA Recommended" class="individual-selection-img" loading="lazy">
                        <div class="individual-selection-meta">
                            <h4>Sanskar Jha</h4>
                            <p>NDA Written &amp; SSB Cleared • DDCIAN</p>
                            <span class="selection-exam-tag" style="background: rgba(45, 106, 79, 0.25); border-color: rgba(45, 106, 79, 0.6); color: #95d5b2;">NDA Recommended</span>
                        </div>
                    </div>
                    <div class="individual-selection-card">
                        <img src="assets/images/selection-aravind-kumar.jpg" alt="Aravind Kumar - Congratulations Selection" class="individual-selection-img" loading="lazy">
                        <div class="individual-selection-meta">
                            <h4>Aravind Kumar</h4>
                            <p>Recommended & Commissioned • DDCIAN</p>
                            <span class="selection-exam-tag" style="background: rgba(255, 255, 255, 0.08); border-color: rgba(255, 255, 255, 0.2); color: #e0e0e0;">NDA Commissioned</span>
                        </div>
                    </div>
                    <div class="individual-selection-card">
                        <img src="assets/images/selection-rajesh-sharma.jpg" alt="Rajesh Sharma - Congratulations Selection" class="individual-selection-img" loading="lazy">
                        <div class="individual-selection-meta">
                            <h4>Rajesh Sharma</h4>
                            <p>Recommended & Commissioned • DDCIAN</p>
                            <span class="selection-exam-tag" style="background: rgba(255, 255, 255, 0.08); border-color: rgba(255, 255, 255, 0.2); color: #e0e0e0;">NDA Commissioned</span>
                        </div>
                    </div>
                    <div class="individual-selection-card">
                        <img src="assets/images/selection-vikram-singh.jpg" alt="Vikram Singh - Congratulations Selection" class="individual-selection-img" loading="lazy">
                        <div class="individual-selection-meta">
                            <h4>Vikram Singh</h4>
                            <p>Recommended & Commissioned • DDCIAN</p>
                            <span class="selection-exam-tag" style="background: rgba(255, 255, 255, 0.08); border-color: rgba(255, 255, 255, 0.2); color: #e0e0e0;">NDA Commissioned</span>
                        </div>
                    </div>
                    <div class="individual-selection-card">
                        <img src="assets/images/selection-sanjay-gupta.jpg" alt="Sanjay Gupta - Congratulations Selection" class="individual-selection-img" loading="lazy">
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
                        <a href="assets/images/selection-21-nda-banner.jpg" data-lightbox="true" style="display: block; width: 100%; text-align: center; cursor: zoom-in;" title="Click to enlarge 21 Final Selections in NDA Official Poster">
                            <img src="assets/images/selection-21-nda-banner.jpg" alt="21 Final Selections in NDA - Official Poster" style="width: 100%; height: auto; max-height: 280px; object-fit: contain; border-radius: var(--radius-sm);" loading="lazy">
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
                            <a href="results.php" class="btn btn-gold btn-sm"><span>View All Academy Selections</span></a>
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
                    <?php foreach ($DDC_LATEST_SELECTIONS_2026 as $cadet): ?>
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
                                    <?php echo htmlspecialchars($cadet['tag']); ?>
                                </span>
                                <?php if (!empty($cadet['photo'])): ?>
                                    <img src="<?php echo htmlspecialchars($cadet['photo']); ?>" alt="<?php echo htmlspecialchars($cadet['name']); ?> Selection" class="cadet-card-photo" loading="lazy" width="76" height="76">
                                <?php endif; ?>
                                <h4 class="cadet-name"><?php echo htmlspecialchars($cadet['name']); ?></h4>
                                <div class="cadet-role"><?php echo htmlspecialchars($cadet['role']); ?> • <?php echo htmlspecialchars($cadet['org']); ?></div>
                            </div>
                            <div>
                                <p class="cadet-detail"><?php echo htmlspecialchars($cadet['detail']); ?></p>
                                <span style="display: inline-block; margin-top: 0.65rem; font-size: 0.75rem; font-weight: 700; color: var(--accent-gold-hover); background: var(--bg-light-blue); padding: 0.2rem 0.55rem; border-radius: var(--radius-sm);">
                                    <?php echo htmlspecialchars($cadet['badge']); ?>
                                </span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Dehradun's 1st In-House Separate Hostels for Boys & Girls (USP Banner) -->
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
                        Dehradun Defence College is proud to be the valley's premier institution providing <strong>100% in-house, fully separate residential wings</strong> for male and female defence aspirants. Located away from city traffic in the pristine foothills of Maldevta, our cadets enjoy an uncompromised, zero-distraction military gurukul lifestyle.
                    </p>
                </div>

                <!-- 4 Pillars Grid -->
                <div class="hostel-pillars-grid">
                    <div class="hostel-pillar-card">
                        <div class="hostel-pillar-icon">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                        </div>
                        <h4 style="color: #FFFFFF; font-size: 1.15rem; margin-bottom: 0.5rem;">Separate Secure Wings</h4>
                        <p style="color: rgba(255, 255, 255, 0.8); font-size: 0.875rem; line-height: 1.6; margin: 0;">
                            Completely isolated residential complexes for girls and boys with biometric gate entry, 24/7 CCTV surveillance, and dedicated campus boundaries.
                        </p>
                    </div>

                    <div class="hostel-pillar-card">
                        <div class="hostel-pillar-icon">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                        </div>
                        <h4 style="color: #FFFFFF; font-size: 1.15rem; margin-bottom: 0.5rem;">Dedicated Female Wardens</h4>
                        <p style="color: rgba(255, 255, 255, 0.8); font-size: 0.875rem; line-height: 1.6; margin: 0;">
                            Round-the-clock resident female wardens and staff ensuring safety, disciplined routines, personal guidance, and emotional well-being for female cadets.
                        </p>
                    </div>

                    <div class="hostel-pillar-card">
                        <div class="hostel-pillar-icon">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M18 8h1a4 4 0 0 1 0 8h-1"></path><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path><line x1="6" y1="1" x2="6" y2="4"></line><line x1="10" y1="1" x2="10" y2="4"></line><line x1="14" y1="1" x2="14" y2="4"></line></svg>
                        </div>
                        <h4 style="color: #FFFFFF; font-size: 1.15rem; margin-bottom: 0.5rem;">4-Meal Military Mess</h4>
                        <p style="color: rgba(255, 255, 255, 0.8); font-size: 0.875rem; line-height: 1.6; margin: 0;">
                            Freshly prepared, high-protein breakfast, wholesome lunch, evening high-tea snacks, and balanced dinner crafted specifically for physical endurance.
                        </p>
                    </div>

                    <div class="hostel-pillar-card">
                        <div class="hostel-pillar-icon">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 12h-4l-3 9L9 3l-3 9H2"></path></svg>
                        </div>
                        <h4 style="color: #FFFFFF; font-size: 1.15rem; margin-bottom: 0.5rem;">Mentored Study & Health Care</h4>
                        <p style="color: rgba(255, 255, 255, 0.8); font-size: 0.875rem; line-height: 1.6; margin: 0;">
                            Evening doubt-clearing sessions supervised by resident faculty, 24/7 on-campus first-aid infirmary, tie-ups with leading hospitals, and doctor on call.
                        </p>
                    </div>
                </div>

                <!-- Real Campus & In-House Hostels Photo Showcase -->
                <div class="campus-hostels-showcase-grid">
                    <div style="background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.15); border-radius: var(--radius-lg); overflow: hidden;">
                        <div style="height: 220px; overflow: hidden; position: relative;">
                            <img src="assets/images/campus-building-main.jpg" alt="Authentic Dehradun Defence College Campus Building and In-House Boys Hostel" style="width: 100%; height: 100%; object-fit: cover;">
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
                            <img src="assets/images/nda-girls-wing-formation.jpg" alt="Dedicated NDA Girls Wing Cadets Morning Drill in Uniform" style="width: 100%; height: 100%; object-fit: cover;">
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

                <div style="text-align: center; margin-top: 2.5rem; display: flex; justify-content: center; gap: 1.25rem; flex-wrap: wrap;">
                    <button type="button" class="btn btn-gold btn-lg open-enquiry-modal" data-course="Residential Hostel Inquiry">
                        <span>Book Campus & Hostel Tour</span>
                    </button>
                    <a href="assets/downloads/ddc-nda-foundation-timetable.pdf" download class="btn btn-outline-white btn-lg">
                        <span>Download Hostel Daily Routine (PDF)</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. Elite Defence Courses Section (Expanded with RIMC, RMS, MNS, NEET) -->
    <section class="section-padding bg-slate" id="courses">
        <div class="container">
            <div class="section-header">
                <span class="badge-gold">Training Programs</span>
                <h2>Our Elite Defence Courses</h2>
                <div class="gold-divider"></div>
                <p>Comprehensive military entrance training from school foundations (RIMC & RMS) to NDA, CDS, AFCAT, MNS, and AFMC NEET.</p>
            </div>

            <!-- Filter Buttons -->
            <div class="course-filter-nav">
                <button type="button" class="course-filter-btn active" data-filter="all">All Programs (10)</button>
                <button type="button" class="course-filter-btn" data-filter="nda">NDA Foundation & Target</button>
                <button type="button" class="course-filter-btn" data-filter="school">RIMC & RMS Military</button>
                <button type="button" class="course-filter-btn" data-filter="medical">MNS & AFMC NEET</button>
                <button type="button" class="course-filter-btn" data-filter="graduate">CDS & AFCAT</button>
                <button type="button" class="course-filter-btn" data-filter="ssb">SSB Practical Camp</button>
            </div>

            <!-- Courses Grid -->
            <div class="courses-grid">
                <!-- Course 1: NDA Foundation After 10th -->
                <div class="course-card" data-category="nda">
                    <div class="course-card-banner">
                        <img src="assets/images/classroom-batch-study.jpg" alt="NDA Foundation After 10th Classroom Study">
                        <span class="course-card-badge">2 Years Integrated</span>
                    </div>
                    <div class="course-card-body">
                        <span class="course-target-tag">Class 10th Passed / Appearing</span>
                        <h3 class="course-card-title">NDA Foundation (After 10th)</h3>
                        <p class="course-card-desc">
                            Integrated 11th & 12th CBSE schooling with NDA written syllabus, speed mathematics, and early SSB ground training.
                        </p>
                        <div class="course-features-summary">
                            <div class="course-feature-line">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>
                                <span>CBSE Schooling with Doon Public Sr. Sec.</span>
                            </div>
                            <div class="course-feature-line">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>
                                <span>Mathematics Shortcuts & 10-Yr Pyq Drills</span>
                            </div>
                            <div class="course-feature-line">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>
                                <span>Morning 5:30 AM PT & Live GTO Obstacles</span>
                            </div>
                        </div>
                        <div class="course-card-footer">
                            <a href="course-detail.php?course=nda-foundation-10" class="btn btn-outline-navy btn-sm">Course Details</a>
                            <button type="button" class="btn btn-gold btn-sm open-enquiry-modal" data-course="NDA Foundation After 10th">Enquire</button>
                        </div>
                        <div style="margin-top: 0.65rem;">
                            <a href="assets/downloads/ddc-nda-foundation-timetable.pdf" download class="btn btn-outline-navy btn-sm" style="width: 100%; justify-content: center; font-size: 0.8rem; padding: 0.45rem 0.65rem; background-color: var(--bg-light-blue); gap: 0.4rem;">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" style="color: var(--accent-gold-hover);"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                                <span>Download Timetable (PDF)</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Course 2: NDA Girls Special Batch -->
                <div class="course-card" data-category="nda">
                    <div class="course-card-banner">
                        <img src="assets/images/nda-girls-wing-formation.jpg" alt="NDA Girls Special Wing Cadets Formation">
                        <span class="course-card-badge" style="background-color: rgba(230, 90, 0, 0.9);">Special Girls Wing</span>
                    </div>
                    <div class="course-card-body">
                        <span class="course-target-tag">Female Defence Aspirants</span>
                        <h3 class="course-card-title">NDA (Girls) Special Wing</h3>
                        <p class="course-card-desc">
                            Dedicated residential program designed specifically for female defence aspirants cracking the National Defence Academy with women mentors.
                        </p>
                        <div class="course-features-summary">
                            <div class="course-feature-line">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>
                                <span>In-House Separate Girls Hostel & Female Wardens</span>
                            </div>
                            <div class="course-feature-line">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>
                                <span>Officer-Led Fitness & Stamina Training</span>
                            </div>
                            <div class="course-feature-line">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>
                                <span>Mock SSB Interviews & Dais Public Speaking</span>
                            </div>
                        </div>
                        <div class="course-card-footer">
                            <a href="course-detail.php?course=nda-girls-10" class="btn btn-outline-navy btn-sm">Course Details</a>
                            <button type="button" class="btn btn-gold btn-sm open-enquiry-modal" data-course="NDA Girls Special Wing">Enquire</button>
                        </div>
                        <div style="margin-top: 0.65rem;">
                            <a href="assets/downloads/ddc-nda-girls-timetable.pdf" download class="btn btn-outline-navy btn-sm" style="width: 100%; justify-content: center; font-size: 0.8rem; padding: 0.45rem 0.65rem; background-color: var(--bg-light-blue); gap: 0.4rem;">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" style="color: var(--accent-gold-hover);"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                                <span>Download Timetable (PDF)</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Course 3: NDA Target / Dropper Batch -->
                <div class="course-card" data-category="nda">
                    <div class="course-card-banner">
                        <img src="assets/images/classroom-lecture-hall-real.jpg" alt="NDA Target Batch After 12th in Stepped Lecture Hall">
                        <span class="course-card-badge" style="background-color: var(--primary-navy);">6 Mo / 1 Yr Target</span>
                    </div>
                    <div class="course-card-body">
                        <span class="course-target-tag">12th Passed / Dropper</span>
                        <h3 class="course-card-title">NDA Target (After 12th)</h3>
                        <p class="course-card-desc">
                            High-velocity full-day immersion program designed for 12th passed students with 8-10 hours daily study and test series.
                        </p>
                        <div class="course-features-summary">
                            <div class="course-feature-line">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>
                                <span>8-10 Hours Daily Intensive Class Modules</span>
                            </div>
                            <div class="course-feature-line">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>
                                <span>Daily OMR Tests with Rank Leaderboard</span>
                            </div>
                            <div class="course-feature-line">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>
                                <span>Comprehensive 14-Day SSB Interview Included</span>
                            </div>
                        </div>
                        <div class="course-card-footer">
                            <a href="course-detail.php?course=nda-target-12" class="btn btn-outline-navy btn-sm">Course Details</a>
                            <button type="button" class="btn btn-gold btn-sm open-enquiry-modal" data-course="NDA Target Batch After 12th">Enquire</button>
                        </div>
                        <div style="margin-top: 0.65rem;">
                            <a href="assets/downloads/ddc-nda-target-timetable.pdf" download class="btn btn-outline-navy btn-sm" style="width: 100%; justify-content: center; font-size: 0.8rem; padding: 0.45rem 0.65rem; background-color: var(--bg-light-blue); gap: 0.4rem;">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" style="color: var(--accent-gold-hover);"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                                <span>Download Timetable (PDF)</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Course 4: Pre-NDA Foundation (8th to 10th) -->
                <div class="course-card" data-category="nda">
                    <div class="course-card-banner">
                        <img src="assets/images/cadet-presentation-smart-board.jpg" alt="Pre-NDA Foundation Class 8th to 10th">
                        <span class="course-card-badge">Junior Foundation</span>
                    </div>
                    <div class="course-card-body">
                        <span class="course-target-tag">Class 8th, 9th & 10th</span>
                        <h3 class="course-card-title">Pre-NDA Foundation</h3>
                        <p class="course-card-desc">
                            Early foundation grooming young minds in NCERT maths, science, spoken English, and officer traits before Class 11th.
                        </p>
                        <div class="course-features-summary">
                            <div class="course-feature-line">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>
                                <span>Strong Math & Science Conceptual Clarity</span>
                            </div>
                            <div class="course-feature-line">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>
                                <span>English Communication & Public Speaking</span>
                            </div>
                            <div class="course-feature-line">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>
                                <span>Physical Conditioning & Obstacle Agility</span>
                            </div>
                        </div>
                        <div class="course-card-footer">
                            <a href="course-detail.php?course=nda-pre-foundation" class="btn btn-outline-navy btn-sm">Course Details</a>
                            <button type="button" class="btn btn-gold btn-sm open-enquiry-modal" data-course="Pre-NDA Foundation">Enquire</button>
                        </div>
                        <div style="margin-top: 0.65rem;">
                            <a href="assets/downloads/ddc-nda-foundation-timetable.pdf" download class="btn btn-outline-navy btn-sm" style="width: 100%; justify-content: center; font-size: 0.8rem; padding: 0.45rem 0.65rem; background-color: var(--bg-light-blue); gap: 0.4rem;">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" style="color: var(--accent-gold-hover);"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                                <span>Download Timetable (PDF)</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Course 5: RIMC Dehradun -->
                <div class="course-card" data-category="school">
                    <div class="course-card-banner">
                        <img src="assets/images/campus-building-main.jpg" alt="RIMC Dehradun Entrance Coaching Campus">
                        <span class="course-card-badge" style="background-color: var(--accent-gold-hover); color: #fff;">RIMC Dehradun</span>
                    </div>
                    <div class="course-card-body">
                        <span class="course-target-tag">Boys & Girls (Age 11.5 - 13)</span>
                        <h3 class="course-card-title">RIMC Dehradun Entrance</h3>
                        <p class="course-card-desc">
                            Specialized coaching for Rashtriya Indian Military College (RIMC) entrance: Maths subjective, English essay, and Viva-Voce.
                        </p>
                        <div class="course-features-summary">
                            <div class="course-feature-line">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>
                                <span>Subjective Step-by-Step Maths Solution Drills</span>
                            </div>
                            <div class="course-feature-line">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>
                                <span>High-Scoring English Composition & Essay Writing</span>
                            </div>
                            <div class="course-feature-line">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>
                                <span>Mock Viva-Voce Interviews with Retired Officers</span>
                            </div>
                        </div>
                        <div class="course-card-footer">
                            <a href="course-detail.php?course=rimc-sainik" class="btn btn-outline-navy btn-sm">Course Details</a>
                            <button type="button" class="btn btn-gold btn-sm open-enquiry-modal" data-course="RIMC Dehradun Entrance">Enquire</button>
                        </div>
                        <div style="margin-top: 0.65rem;">
                            <a href="assets/downloads/ddc-rimc-entrance-timetable.pdf" download class="btn btn-outline-navy btn-sm" style="width: 100%; justify-content: center; font-size: 0.8rem; padding: 0.45rem 0.65rem; background-color: var(--bg-light-blue); gap: 0.4rem;">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" style="color: var(--accent-gold-hover);"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                                <span>Download Timetable (PDF)</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Course 6: RMS Military Schools (Class 6 & 9) -->
                <div class="course-card" data-category="school">
                    <div class="course-card-banner">
                        <img src="assets/images/badminton-outdoor-court.jpg" alt="Rashtriya Military Schools (RMS) CET Coaching">
                        <span class="course-card-badge" style="background-color: var(--secondary-navy);">RMS Military Schools</span>
                    </div>
                    <div class="course-card-body">
                        <span class="course-target-tag">Class 6 & 9 CET Aspirants</span>
                        <h3 class="course-card-title">RMS Military Schools (CET)</h3>
                        <p class="course-card-desc">
                            Targeted preparation for all 5 Rashtriya Military Schools (Chail, Ajmer, Belgaum, Bengaluru, Dholpur) Common Entrance Test.
                        </p>
                        <div class="course-features-summary">
                            <div class="course-feature-line">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>
                                <span>Full CET Syllabus: Maths, Intelligence, English, GK</span>
                            </div>
                            <div class="course-feature-line">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>
                                <span>Speed Solving & Non-Verbal Reasoning Tricks</span>
                            </div>
                            <div class="course-feature-line">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>
                                <span>Residential Care & Separate Junior Hostel</span>
                            </div>
                        </div>
                        <div class="course-card-footer">
                            <a href="course-detail.php?course=rms-school" class="btn btn-outline-navy btn-sm">Course Details</a>
                            <button type="button" class="btn btn-gold btn-sm open-enquiry-modal" data-course="RMS Military Schools CET">Enquire</button>
                        </div>
                        <div style="margin-top: 0.65rem;">
                            <a href="assets/downloads/ddc-rimc-entrance-timetable.pdf" download class="btn btn-outline-navy btn-sm" style="width: 100%; justify-content: center; font-size: 0.8rem; padding: 0.45rem 0.65rem; background-color: var(--bg-light-blue); gap: 0.4rem;">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" style="color: var(--accent-gold-hover);"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                                <span>Download Timetable (PDF)</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Course 7: Military Nursing Service (MNS + NEET) -->
                <div class="course-card" data-category="medical">
                    <div class="course-card-banner">
                        <img src="assets/images/smart-classroom-lecture-hall.jpg" alt="Military Nursing Service (MNS) BSc Nursing">
                        <span class="course-card-badge" style="background-color: #9D174D;">MNS • Women Commission</span>
                    </div>
                    <div class="course-card-body">
                        <span class="course-target-tag">Female PCB Students</span>
                        <h3 class="course-card-title">MNS Nursing (with NEET UG)</h3>
                        <p class="course-card-desc">
                            Commission as Lieutenants in Military Nursing Service via NEET UG score, ToGIGE general intelligence, and medical boards.
                        </p>
                        <div class="course-features-summary">
                            <div class="course-feature-line">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>
                                <span>NEET UG Biology Line-by-Line NCERT (360/360)</span>
                            </div>
                            <div class="course-feature-line">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>
                                <span>ToGIGE Screening & General English Guidance</span>
                            </div>
                            <div class="course-feature-line">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>
                                <span>Safe In-House Girls Hostel Wing & Female Mentors</span>
                            </div>
                        </div>
                        <div class="course-card-footer">
                            <a href="course-detail.php?course=mns-nursing" class="btn btn-outline-navy btn-sm">Course Details</a>
                            <button type="button" class="btn btn-gold btn-sm open-enquiry-modal" data-course="MNS BSc Nursing Wing">Enquire</button>
                        </div>
                        <div style="margin-top: 0.65rem;">
                            <a href="assets/downloads/ddc-mns-nursing-timetable.pdf" download class="btn btn-outline-navy btn-sm" style="width: 100%; justify-content: center; font-size: 0.8rem; padding: 0.45rem 0.65rem; background-color: var(--bg-light-blue); gap: 0.4rem;">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" style="color: var(--accent-gold-hover);"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                                <span>Download Timetable (PDF)</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Course 8: AFMC Pune (MBBS) + NEET UG -->
                <div class="course-card" data-category="medical">
                    <div class="course-card-banner">
                        <img src="assets/images/ssb-smart-panel-instruction.jpg" alt="AFMC Pune MBBS NEET UG Coaching">
                        <span class="course-card-badge" style="background-color: #047857;">AFMC Pune MBBS</span>
                    </div>
                    <div class="course-card-body">
                        <span class="course-target-tag">Armed Forces Medical Aspirants</span>
                        <h3 class="course-card-title">AFMC Pune (with NEET UG)</h3>
                        <p class="course-card-desc">
                            Combined medical exam coaching for AFMC Pune MBBS: high-scoring NEET UG syllabus + ToELR logic test and medical interviews.
                        </p>
                        <div class="course-features-summary">
                            <div class="course-feature-line">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>
                                <span>NCERT Line-by-Line Botany, Zoology, Physics & Chem</span>
                            </div>
                            <div class="course-feature-line">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>
                                <span>ToELR English & Logical Reasoning Special Training</span>
                            </div>
                            <div class="course-feature-line">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>
                                <span>Military Doctor Interviews & PAT Psychology Grooming</span>
                            </div>
                        </div>
                        <div class="course-card-footer">
                            <a href="course-detail.php?course=afmc-neet" class="btn btn-outline-navy btn-sm">Course Details</a>
                            <button type="button" class="btn btn-gold btn-sm open-enquiry-modal" data-course="AFMC Pune MBBS Program">Enquire</button>
                        </div>
                        <div style="margin-top: 0.65rem;">
                            <a href="assets/downloads/ddc-afmc-neet-timetable.pdf" download class="btn btn-outline-navy btn-sm" style="width: 100%; justify-content: center; font-size: 0.8rem; padding: 0.45rem 0.65rem; background-color: var(--bg-light-blue); gap: 0.4rem;">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" style="color: var(--accent-gold-hover);"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                                <span>Download Timetable (PDF)</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Course 9: CDS Training (Graduate Entry) -->
                <div class="course-card" data-category="graduate">
                    <div class="course-card-banner">
                        <img src="assets/images/cadets-parade-assembly.jpg" alt="CDS Combined Defence Services Cadets Assembly">
                        <span class="course-card-badge">Graduates (IMA / OTA / AFA)</span>
                    </div>
                    <div class="course-card-body">
                        <span class="course-target-tag">College Final Year / Graduates</span>
                        <h3 class="course-card-title">CDS Training (IMA, OTA, AFA)</h3>
                        <p class="course-card-desc">
                            Combined Defence Services exam coaching for permanent and short service commissions with deep GS analysis and English.
                        </p>
                        <div class="course-features-summary">
                            <div class="course-feature-line">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>
                                <span>Specialized OTA Paper Guidance (GS & English)</span>
                            </div>
                            <div class="course-feature-line">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>
                                <span>Elementary Maths Shortcut Modules for IMA / INA / AFA</span>
                            </div>
                            <div class="course-feature-line">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>
                                <span>Direct Mentorship from Ex-Military Assessors</span>
                            </div>
                        </div>
                        <div class="course-card-footer">
                            <a href="course-detail.php?course=cds-training" class="btn btn-outline-navy btn-sm">Course Details</a>
                            <button type="button" class="btn btn-gold btn-sm open-enquiry-modal" data-course="CDS Training Program">Enquire</button>
                        </div>
                        <div style="margin-top: 0.65rem;">
                            <a href="assets/downloads/ddc-cds-syllabus-timetable.pdf" download class="btn btn-outline-navy btn-sm" style="width: 100%; justify-content: center; font-size: 0.8rem; padding: 0.45rem 0.65rem; background-color: var(--bg-light-blue); gap: 0.4rem;">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" style="color: var(--accent-gold-hover);"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                                <span>Download Timetable (PDF)</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Course 10: SSB Interview Practical Bootcamp -->
                <div class="course-card" data-category="ssb">
                    <div class="course-card-banner">
                        <img src="assets/images/ssb-gto-ground.jpg" alt="SSB Interview 14-Day Practical Bootcamp">
                        <span class="course-card-badge" style="background-color: var(--tricolor-saffron);">14-Day Practical Camp</span>
                    </div>
                    <div class="course-card-body">
                        <span class="course-target-tag">NDA, CDS, AFCAT & Direct Entries</span>
                        <h3 class="course-card-title">SSB Interview Comprehensive</h3>
                        <p class="course-card-desc">
                            Complete outdoor obstacle ground, psychology dossier evaluation (TAT, WAT, SRT, SDT), and personal interview mocks.
                        </p>
                        <div class="course-features-summary">
                            <div class="course-feature-line">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>
                                <span>Full-Scale Live GTO Ground on Campus</span>
                            </div>
                            <div class="course-feature-line">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>
                                <span>Individual Psychological Dossier Assessment</span>
                            </div>
                            <div class="course-feature-line">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>
                                <span>1-on-1 Interview Mocks with Ex-Presidents</span>
                            </div>
                        </div>
                        <div class="course-card-footer">
                            <a href="course-detail.php?course=ssb-interview" class="btn btn-outline-navy btn-sm">Course Details</a>
                            <button type="button" class="btn btn-gold btn-sm open-enquiry-modal" data-course="SSB 14-Day Practical Camp">Enquire</button>
                        </div>
                        <div style="margin-top: 0.65rem;">
                            <a href="assets/downloads/ddc-nda-target-timetable.pdf" download class="btn btn-outline-navy btn-sm" style="width: 100%; justify-content: center; font-size: 0.8rem; padding: 0.45rem 0.65rem; background-color: var(--bg-light-blue); gap: 0.4rem;">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" style="color: var(--accent-gold-hover);"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                                <span>Download Timetable (PDF)</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Download Timetables Bar -->
            <div style="margin-top: 3.5rem; background: var(--primary-navy); border-radius: var(--radius-lg); padding: 2rem 2.5rem; color: #FFFFFF; border: 2px solid var(--accent-gold);">
                <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1.5rem; margin-bottom: 1.5rem;">
                    <div>
                        <span class="badge-gold">Free Official Resources</span>
                        <h3 style="color: #FFFFFF; font-size: 1.5rem; margin: 0.35rem 0 0.25rem 0;">Download Course Daily Schedules & Study Plans</h3>
                        <p style="color: rgba(255,255,255,0.8); font-size: 0.95rem; margin: 0;">Access hour-by-hour timetables covering academic classes, morning drills, and SSB obstacle ground.</p>
                    </div>
                    <button type="button" class="btn btn-gold open-enquiry-modal" data-course="Complete Timetable Bundle">
                        <span>Get All PDF Bundles</span>
                    </button>
                </div>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 0.85rem;">
                    <a href="assets/downloads/ddc-nda-foundation-timetable.pdf" download style="background: rgba(255,255,255,0.08); padding: 0.85rem; border-radius: var(--radius-md); border: 1px solid rgba(212,175,55,0.3); color: #FFFFFF; display: flex; align-items: center; gap: 0.6rem;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="color: var(--accent-gold); flex-shrink: 0;"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line></svg>
                        <span style="font-size: 0.825rem; font-weight: 600;">NDA Foundation (10th)</span>
                    </a>
                    <a href="assets/downloads/ddc-nda-girls-timetable.pdf" download style="background: rgba(255,255,255,0.08); padding: 0.85rem; border-radius: var(--radius-md); border: 1px solid rgba(212,175,55,0.3); color: #FFFFFF; display: flex; align-items: center; gap: 0.6rem;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="color: var(--accent-gold); flex-shrink: 0;"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line></svg>
                        <span style="font-size: 0.825rem; font-weight: 600;">NDA Girls Special Wing</span>
                    </a>
                    <a href="assets/downloads/ddc-rimc-entrance-timetable.pdf" download style="background: rgba(255,255,255,0.08); padding: 0.85rem; border-radius: var(--radius-md); border: 1px solid rgba(212,175,55,0.3); color: #FFFFFF; display: flex; align-items: center; gap: 0.6rem;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="color: var(--accent-gold); flex-shrink: 0;"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line></svg>
                        <span style="font-size: 0.825rem; font-weight: 600;">RIMC & RMS Military</span>
                    </a>
                    <a href="assets/downloads/ddc-mns-nursing-timetable.pdf" download style="background: rgba(255,255,255,0.08); padding: 0.85rem; border-radius: var(--radius-md); border: 1px solid rgba(212,175,55,0.3); color: #FFFFFF; display: flex; align-items: center; gap: 0.6rem;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="color: var(--accent-gold); flex-shrink: 0;"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line></svg>
                        <span style="font-size: 0.825rem; font-weight: 600;">MNS & AFMC NEET</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. Transparent Fee Structure & Scholarship Details -->
    <section class="section-padding" id="fee-structure">
        <div class="container">
            <div class="section-header">
                <span class="badge-gold">Transparent Investment</span>
                <h2>Course Fee Structure & Scholarships</h2>
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
                        <?php foreach ($DDC_FEE_STRUCTURE as $fee): ?>
                            <tr>
                                <td>
                                    <strong style="color: var(--primary-navy); font-size: 0.95rem; line-height: 1.35; display: block;"><?php echo htmlspecialchars($fee['course']); ?></strong>
                                    <div class="fee-subtag"><?php echo htmlspecialchars($fee['category']); ?></div>
                                </td>
                                <td>
                                    <span style="background: var(--bg-light-blue); padding: 0.3rem 0.65rem; border-radius: var(--radius-sm); font-size: 0.825rem; font-weight: 600; display: inline-block; white-space: nowrap;">
                                        <?php echo htmlspecialchars($fee['duration']); ?>
                                    </span>
                                </td>
                                <td>
                                    <div class="fee-price-tag"><?php echo htmlspecialchars($fee['academic_fee'] ?? $fee['tuition_fee']); ?></div>
                                </td>
                                <td>
                                    <div class="fee-hostel-tag"><?php echo htmlspecialchars($fee['hostel_fee']); ?></div>
                                </td>
                                <td>
                                    <div class="fee-total-tag">
                                        <?php echo (!empty($fee['total_fee']) && $fee['total_fee'] !== '—') ? htmlspecialchars($fee['total_fee']) : '<span style="color: var(--text-muted); font-weight: 500;">—</span>'; ?>
                                    </div>
                                </td>
                                <td style="text-align: center;">
                                    <button type="button" class="btn btn-gold btn-sm open-enquiry-modal" data-course="<?php echo htmlspecialchars($fee['course']); ?>">
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
                    <h3 style="font-size: 1.35rem; color: var(--primary-navy); margin: 0;">DDC Merit Scholarships & Defence Concessions</h3>
                </div>
                <div class="feature-check-list" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1rem;">
                    <div class="feature-check-item">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                        <span><strong>DDC-SET Scholarship Test:</strong> Up to 50% tuition fee waiver based on performance in our entrance examination.</span>
                    </div>
                    <div class="feature-check-item">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                        <span><strong>Defence Personnel Ward Concession:</strong> 15% tuition waiver for wards of serving and retired Army, Navy & Air Force personnel.</span>
                    </div>
                    <div class="feature-check-item">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                        <span><strong>Veer Naris & Martyr's Children:</strong> 100% Tuition Fee Waiver in honor of their ultimate supreme sacrifice for Bharat.</span>
                    </div>
                    <div class="feature-check-item">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                        <span><strong>Betiyon Ka Raksha Samman:</strong> Special fee grants for meritorious female cadets applying for NDA Girls and MNS Nursing.</span>
                    </div>
                </div>
                <div style="text-align: right; margin-top: 1.25rem;">
                    <button type="button" class="btn btn-outline-navy btn-sm open-enquiry-modal" data-course="Scholarship & Fee Concession Inquiry">
                        <span>Apply for Scholarship / Fee Concession</span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. Campus Life & Student Activities Gallery (Real Campus Pics) -->
    <section class="section-padding bg-slate" id="campus-life">
        <div class="container">
            <div class="section-header">
                <span class="badge-navy">Cadet Life in Action</span>
                <h2>Campus Infrastructure & Student Activities</h2>
                <div class="gold-divider"></div>
                <p>Real glimpses of physical drills, sports grounds, tactical chess, smart classes, and obstacle training in Maldevta Valley.</p>
            </div>

            <div class="activities-masonry-grid">
                <!-- Activity 1: Grand Campus Building -->
                <div class="activity-tile">
                    <img src="assets/images/campus-building-main.jpg" alt="Dehradun Defence College Campus Building and Cadets Flag Assembly" loading="lazy">
                    <div class="activity-tile-overlay">
                        <span class="activity-tile-tag">Main Campus Complex</span>
                        <h4 class="activity-tile-title">Academic & Hostel Complex in Foothills</h4>
                    </div>
                </div>

                <!-- Activity 2: Front Office Reception Desk -->
                <div class="activity-tile">
                    <img src="assets/images/campus-front-office.jpg" alt="Official Front Office Reception & Admission Counseling Helpdesk" loading="lazy">
                    <div class="activity-tile-overlay">
                        <span class="activity-tile-tag">Central Reception</span>
                        <h4 class="activity-tile-title">Front Office & Admission Helpdesk</h4>
                    </div>
                </div>

                <!-- Activity 3: Grand Parade Ground Assembly -->
                <div class="activity-tile">
                    <img src="assets/images/cadets-parade-assembly.jpg" alt="Cadets Drill and Morning Parade Assembly with Himalayan Backdrop" loading="lazy">
                    <div class="activity-tile-overlay">
                        <span class="activity-tile-tag">Morning Parade Assembly</span>
                        <h4 class="activity-tile-title">Cadets Drill in Foothills Valley</h4>
                    </div>
                </div>

                <!-- Activity 4: Dedicated NDA Girls Wing -->
                <div class="activity-tile">
                    <img src="assets/images/nda-girls-wing-formation.jpg" alt="Dehradun First Dedicated NDA Girls Wing in Morning Drill Formation" loading="lazy">
                    <div class="activity-tile-overlay">
                        <span class="activity-tile-tag">Dedicated Girls Wing</span>
                        <h4 class="activity-tile-title">NDA (Girls) Wing Morning Parade</h4>
                    </div>
                </div>

                <!-- Activity 5: Stepped Smart Lecture Halls -->
                <div class="activity-tile">
                    <img src="assets/images/classroom-lecture-hall-real.jpg" alt="Stepped Smart Lecture Hall Packed with Uniform Cadets in UPSC Prep" loading="lazy">
                    <div class="activity-tile-overlay">
                        <span class="activity-tile-tag">Academic Rigor</span>
                        <h4 class="activity-tile-title">Stepped UPSC Lecture Theatres</h4>
                    </div>
                </div>

                <!-- Activity 6: Physical Conditioning & Agility Drills -->
                <div class="activity-tile">
                    <img src="assets/images/campus-ground-physical-training.jpg" alt="Cadet Physical Training and Obstacle Agility Grounds" loading="lazy">
                    <div class="activity-tile-overlay">
                        <span class="activity-tile-tag">Physical Conditioning</span>
                        <h4 class="activity-tile-title">Physical Training & Agility Grounds</h4>
                    </div>
                </div>

                <!-- Activity 7: Campus Investiture & Annual Celebrations -->
                <div class="activity-tile">
                    <img src="assets/images/campus-ceremony-celebration.jpg" alt="Annual Campus Investiture & Cadets Achievement Ceremony" loading="lazy">
                    <div class="activity-tile-overlay">
                        <span class="activity-tile-tag">Campus Celebrations</span>
                        <h4 class="activity-tile-title">Investiture & Honor Ceremony</h4>
                    </div>
                </div>

                <!-- Activity 8: Cadet Study Hall & Library -->
                <div class="activity-tile">
                    <img src="assets/images/campus-study-library.jpg" alt="Cadet Evening Study Hall and Reference Library" loading="lazy">
                    <div class="activity-tile-overlay">
                        <span class="activity-tile-tag">Focused Gurukul</span>
                        <h4 class="activity-tile-title">Mentored Evening Study Hall</h4>
                    </div>
                </div>
            </div>

            <div style="text-align: center; margin-top: 2.5rem;">
                <a href="gallery.php" class="btn btn-primary">
                    <span>View Full 40+ Campus Photo Gallery</span>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </a>
            </div>
        </div>
    </section>

    <!-- 8. Faculty Mentors & Ex-Defence Officers Showcase -->
    <section class="section-padding bg-navy-dark" id="faculty-panel" style="color: #FFFFFF;">
        <div class="container">
            <div class="section-header">
                <span class="badge-gold">Experienced Assessors</span>
                <h2>Faculty Mentors & Ex-Defence Officers</h2>
                <div class="gold-divider"></div>
                <p>Direct mentorship from retired Armed Forces officers, SSB board assessors, and premier UPSC subject masters.</p>
            </div>

            <div class="facilities-grid">
                <!-- Mentor 1 -->
                <div style="background: rgba(255, 255, 255, 0.06); border-radius: var(--radius-lg); border: 1px solid rgba(255, 255, 255, 0.12); padding: 2rem 1.5rem; text-align: center;">
                    <div style="width: 110px; height: 110px; border-radius: 50%; background: var(--primary-navy); color: var(--accent-gold); display: flex; align-items: center; justify-content: center; margin: 0 auto 1.25rem auto; border: 3px solid var(--accent-gold); font-size: 2rem; font-family: var(--font-heading); font-weight: 800;">
                        COL
                    </div>
                    <h3 style="color: #FFFFFF; font-size: 1.25rem; margin-bottom: 0.25rem;">Senior GTO Officer (Retd.)</h3>
                    <p style="color: var(--accent-gold); font-weight: 700; font-size: 0.825rem; text-transform: uppercase; margin-bottom: 0.75rem;">Ex-Senior GTO, Selection Center</p>
                    <p style="color: rgba(255, 255, 255, 0.75); font-size: 0.875rem; line-height: 1.6; margin: 0;">
                        28+ years of Army service guiding cadets through Progressive Group Tasks, Half Group Tasks, and command situations on our live obstacle grounds.
                    </p>
                </div>

                <!-- Mentor 2 -->
                <div style="background: rgba(255, 255, 255, 0.06); border-radius: var(--radius-lg); border: 1px solid rgba(255, 255, 255, 0.12); padding: 2rem 1.5rem; text-align: center;">
                    <div style="width: 110px; height: 110px; border-radius: 50%; background: var(--primary-navy); color: #FFFFFF; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.25rem auto; border: 3px solid var(--accent-gold); font-size: 2rem; font-family: var(--font-heading); font-weight: 800;">
                        PSY
                    </div>
                    <h3 style="color: #FFFFFF; font-size: 1.25rem; margin-bottom: 0.25rem;">Defence Psychologist Panel</h3>
                    <p style="color: var(--accent-gold); font-weight: 700; font-size: 0.825rem; text-transform: uppercase; margin-bottom: 0.75rem;">Ex-DIPR Trained Assessors</p>
                    <p style="color: rgba(255, 255, 255, 0.75); font-size: 0.875rem; line-height: 1.6; margin: 0;">
                        Conducting rigorous psychological evaluation of TAT stories, WAT reactions, SRT dossiers, and Self Description tests with 1-on-1 counseling.
                    </p>
                </div>

                <!-- Mentor 3 -->
                <div style="background: rgba(255, 255, 255, 0.06); border-radius: var(--radius-lg); border: 1px solid rgba(255, 255, 255, 0.12); padding: 2rem 1.5rem; text-align: center;">
                    <div style="width: 110px; height: 110px; border-radius: 50%; background: var(--primary-navy); color: var(--accent-gold); display: flex; align-items: center; justify-content: center; margin: 0 auto 1.25rem auto; border: 3px solid var(--accent-gold); font-size: 2rem; font-family: var(--font-heading); font-weight: 800;">
                        MTH
                    </div>
                    <h3 style="color: #FFFFFF; font-size: 1.25rem; margin-bottom: 0.25rem;">UPSC Mathematics Experts</h3>
                    <p style="color: var(--accent-gold); font-weight: 700; font-size: 0.825rem; text-transform: uppercase; margin-bottom: 0.75rem;">15+ Years Defence Entrance Specialists</p>
                    <p style="color: rgba(255, 255, 255, 0.75); font-size: 0.875rem; line-height: 1.6; margin: 0;">
                        Mastery over NDA Paper 1 Mathematics shortcuts, calculus, trigonometry, coordinate geometry, and timed elimination strategies.
                    </p>
                </div>

                <!-- Mentor 4 -->
                <div style="background: rgba(255, 255, 255, 0.06); border-radius: var(--radius-lg); border: 1px solid rgba(255, 255, 255, 0.12); padding: 2rem 1.5rem; text-align: center;">
                    <div style="width: 110px; height: 110px; border-radius: 50%; background: var(--primary-navy); color: #FFFFFF; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.25rem auto; border: 3px solid var(--accent-gold); font-size: 2rem; font-family: var(--font-heading); font-weight: 800;">
                        GAT
                    </div>
                    <h3 style="color: #FFFFFF; font-size: 1.25rem; margin-bottom: 0.25rem;">General Ability & English Faculty</h3>
                    <p style="color: var(--accent-gold); font-weight: 700; font-size: 0.825rem; text-transform: uppercase; margin-bottom: 0.75rem;">History, Polity, Physics & Vocabulary</p>
                    <p style="color: rgba(255, 255, 255, 0.75); font-size: 0.875rem; line-height: 1.6; margin: 0;">
                        Comprehensive GAT coverage with daily newspaper editorial analysis, international relations, map reading, and physics concept drilling.
                    </p>
                </div>
            </div>

            <div style="text-align: center; margin-top: 2.5rem;">
                <a href="faculty-facilities.php" class="btn btn-gold">
                    <span>Meet All Faculty Mentors & Leadership</span>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </a>
            </div>
        </div>
    </section>

    <!-- 9. Leadership & Directors' Desk (Next & Last Section Highlight) -->
    <section class="section-padding bg-slate" id="directors-desk">
        <div class="container">
            <div class="section-header">
                <span class="badge-gold">Guiding Vision</span>
                <h2>Director's Desk & Leadership Spotlight</h2>
                <div class="gold-divider"></div>
                <p>Guided by visionary leaders dedicated to parent trust, cadet welfare, and India's finest defence training standards.</p>
            </div>

            <!-- UPPER SIDE: Ms. Neha Kukreja -->
            <div style="background: #FFFFFF; border-radius: var(--radius-lg); border: 2px solid var(--accent-gold); box-shadow: var(--shadow-md); padding: 2.5rem 2rem; margin-bottom: 2.5rem;">
                <div style="display: grid; grid-template-columns: 240px 1fr; gap: 2.5rem; align-items: center;" class="director-detail-grid">
                    <div style="text-align: center;">
                        <img src="assets/images/director-neha.jpg" alt="Ms. Neha Kukreja - Director" style="width: 200px; height: 220px; object-fit: cover; border-radius: var(--radius-md); border: 3px solid var(--accent-gold); margin: 0 auto; box-shadow: var(--shadow-sm);">
                        <h3 style="font-size: 1.25rem; color: var(--primary-navy); margin-top: 1rem; margin-bottom: 0.2rem;">Ms. Neha Kukreja</h3>
                        <span class="badge-navy" style="font-size: 0.75rem; padding: 0.25rem 0.65rem;">Director</span>
                        <p style="font-size: 0.8rem; color: var(--text-muted); margin-top: 0.35rem;">Director — DDC & Student Welfare</p>
                    </div>
                    <div>
                        <span class="badge-saffron" style="font-size: 0.75rem; margin-bottom: 0.5rem; display: inline-block;">Director's Pledge to Parents</span>
                        <h3 style="font-size: 1.5rem; color: var(--primary-navy); margin-bottom: 0.75rem;">
                            “A Sacred Responsibility to Sculpt Officers & Leaders”
                        </h3>
                        <p style="color: var(--text-muted); line-height: 1.7; font-size: 0.95rem; margin-bottom: 1rem;">
                            <em>"When a parent entrusts their child to Dehradun Defence College, we treat it as our sacred duty to provide uncompromised personal care, moral character, and top-tier academic coaching. As Dehradun's first campus with in-house separate hostels for girls and boys, we ensure round-the-clock safety, dedicated female wardens, and zero outside distraction."</em>
                        </p>
                        <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                            <a href="director.php" class="btn btn-gold btn-sm">
                                <span>Read Full Message on Director Page</span>
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </a>
                            <button type="button" class="btn btn-outline-navy btn-sm open-enquiry-modal" data-course="Direct Counseling - Ms. Neha Kukreja">
                                <span>Counseling with Director</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- LOWER SIDE: Mr. Mahendra Kukreja -->
            <div style="background: #FFFFFF; border-radius: var(--radius-lg); border: 2px solid var(--border-light); box-shadow: var(--shadow-md); padding: 2.5rem 2rem; margin-bottom: 2rem;">
                <div style="display: grid; grid-template-columns: 240px 1fr; gap: 2.5rem; align-items: center;" class="director-detail-grid">
                    <div style="text-align: center;">
                        <img src="assets/images/director-mahendra.jpg" alt="Mr. Mahendra Kukreja - Managing Director" style="width: 200px; height: 220px; object-fit: cover; border-radius: var(--radius-md); border: 3px solid var(--primary-navy); margin: 0 auto; box-shadow: var(--shadow-sm);">
                        <h3 style="font-size: 1.25rem; color: var(--primary-navy); margin-top: 1rem; margin-bottom: 0.2rem;">Mr. Mahendra Kukreja</h3>
                        <span class="badge-gold" style="font-size: 0.75rem; padding: 0.25rem 0.65rem; font-weight: 800;">Managing Director</span>
                        <p style="font-size: 0.8rem; color: var(--text-muted); margin-top: 0.35rem;">Managing Director — Dehradun Defence College</p>
                    </div>
                    <div>
                        <span class="badge-navy" style="font-size: 0.75rem; margin-bottom: 0.5rem; display: inline-block;">Managing Director's Vision</span>
                        <h3 style="font-size: 1.5rem; color: var(--primary-navy); margin-bottom: 0.75rem;">
                            “Discipline, Stamina & Unbroken Character”
                        </h3>
                        <p style="color: var(--text-muted); line-height: 1.7; font-size: 0.95rem; margin-bottom: 1rem;">
                            <em>"Clearing defence examinations is never about luck; it is the natural consequence of daily 5:30 AM PT, rigorous concept-based lectures, and living by the Fauji ethos. At DDC, every cadet is trained to master both written exams and the Services Selection Board with confidence and poise."</em>
                        </p>
                        <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                            <a href="director.php" class="btn btn-primary btn-sm">
                                <span>Visit Complete Leadership & Directors Page</span>
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 10. A Day in the Life of a Cadet (Gurukul Routine) -->
    <section class="section-padding" id="cadet-routine">
        <div class="container">
            <div class="section-header">
                <span class="badge-navy">Fauji Lifestyle</span>
                <h2>Daily Routine of a DDC Cadet</h2>
                <div class="gold-divider"></div>
                <p>Instilling military discipline, time management, and stamina through an unbroken daily schedule.</p>
            </div>

            <div class="routine-timeline">
                <div class="routine-step highlight">
                    <div class="routine-time">05:30 AM</div>
                    <div class="routine-title">Reveille & Morning PT</div>
                    <div class="routine-desc">Physical training, 5km cross-country run, calisthenics, and parade drill on the main ground.</div>
                </div>

                <div class="routine-step">
                    <div class="routine-time">08:00 AM</div>
                    <div class="routine-title">Breakfast & Inspection</div>
                    <div class="routine-desc">Nutritious high-protein breakfast in the mess, followed by room and uniform inspection.</div>
                </div>

                <div class="routine-step highlight">
                    <div class="routine-time">09:00 AM - 01:30 PM</div>
                    <div class="routine-title">Academic UPSC Classes</div>
                    <div class="routine-desc">Intensive syllabus lectures on Mathematics, Physics, English, History, and Current Affairs.</div>
                </div>

                <div class="routine-step">
                    <div class="routine-time">03:30 PM</div>
                    <div class="routine-title">SSB Drills & GTO Ground</div>
                    <div class="routine-desc">Group planning exercises, lecturette practice, obstacle negotiating, and psychological tests.</div>
                </div>

                <div class="routine-step highlight">
                    <div class="routine-time">06:00 PM - 08:30 PM</div>
                    <div class="routine-title">Evening Mentored Study</div>
                    <div class="routine-desc">Guided self-study hours with faculty on hand for one-on-one doubt clearing and formula revision.</div>
                </div>
            </div>
        </div>
    </section>

    <!-- 11. Student & Parent Testimonials (Google Verified) -->
    <section class="section-padding bg-slate" id="testimonials">
        <div class="container">
            <div class="section-header">
                <div class="google-reviews-badge">
                    <svg class="google-logo-icon" viewBox="0 0 24 24">
                        <path fill="#4285F4" d="M23.745 12.27c0-.7-.06-1.4-.19-2.07H12v4.51h6.6c-.29 1.52-1.14 2.82-2.4 3.68v3.05h3.88c2.27-2.09 3.665-5.17 3.665-9.17z"/>
                        <path fill="#34A853" d="M12 24c3.24 0 5.95-1.08 7.93-2.91l-3.88-3.05c-1.08.72-2.45 1.16-4.05 1.16-3.12 0-5.77-2.1-6.72-4.93H1.25v3.15C3.26 21.36 7.33 24 12 24z"/>
                        <path fill="#FBBC05" d="M5.28 14.27c-.25-.72-.38-1.49-.38-2.27s.13-1.55.38-2.27V6.58H1.25C.45 8.18 0 9.99 0 12s.45 3.82 1.25 5.42l4.03-3.15z"/>
                        <path fill="#EA4335" d="M12 4.75c1.77 0 3.35.61 4.6 1.8l3.42-3.42C17.95 1.19 15.24 0 12 0 7.33 0 3.26 2.64 1.25 6.58l4.03 3.15c.95-2.83 3.6-4.98 6.72-4.98z"/>
                    </svg>
                    <div>
                        <div style="font-weight: 800; color: var(--primary-navy); font-size: 1.1rem;">4.9 ★★★★★ EXCELLENT</div>
                        <div style="font-size: 0.8rem; color: var(--text-muted);">Based on 104+ Verified Reviews on Google</div>
                    </div>
                </div>

                <h2>What Our Students & Parents Say</h2>
                <div class="gold-divider"></div>
                <p>Real stories of hard work, transformation, and ultimate victory from cadets who trained at Dehradun Defence College.</p>
            </div>

            <div class="testimonials-grid">
                <!-- Testimonial 1 -->
                <div class="testimonial-card">
                    <div class="testimonial-rating">★★★★★</div>
                    <p class="testimonial-text">
                        “My biggest challenge was always the written exam mathematics. The faculty at Dehradun Defence College didn't just teach; they mentored. Their specific focus on NDA-oriented shortcuts and constant mock tests gave me the confidence I needed. I finally cracked the written on my first attempt with them!”
                    </p>
                    <div class="testimonial-author">
                        <div class="author-avatar">RS</div>
                        <div>
                            <div class="author-name">Rahul Sharma</div>
                            <div class="author-sub">NDA 151 Batch Qualified</div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="testimonial-card">
                    <div class="testimonial-rating">★★★★★</div>
                    <p class="testimonial-text">
                        “DDC goes beyond the classrooms. While the written prep is excellent, it was the SSB guidance that changed the game for me. The psychology dossier assessments and practical sessions on the GTO ground were intense but necessary. They transformed me from a shy student into a confident speaker ready for the Services Selection Board.”
                    </p>
                    <div class="testimonial-author">
                        <div class="author-avatar">PS</div>
                        <div>
                            <div class="author-name">Priya Singh</div>
                            <div class="author-sub">CDS Aspirant (SSB Recommended)</div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="testimonial-card">
                    <div class="testimonial-rating">★★★★★</div>
                    <p class="testimonial-text">
                        “Coming from a civilian non-defence background, I needed an environment that lived and breathed discipline. Dehradun Defence College provided exactly that. The morning 5:30 AM PT, the schedule, and being surrounded by focused aspirants kept me on track. Highly recommended for any serious defence aspirant.”
                    </p>
                    <div class="testimonial-author">
                        <div class="author-avatar">VR</div>
                        <div>
                            <div class="author-name">Vikram Singh Rathore</div>
                            <div class="author-sub">AFCAT Qualified</div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 4 -->
                <div class="testimonial-card">
                    <div class="testimonial-rating">★★★★★</div>
                    <p class="testimonial-text">
                        “I joined Dehradun Defence College specifically for SSB Interview Preparation, and the training is world-class. Real-time mock interviews, GTO tasks, psychology rounds, and personal feedback from ex-army officers. If you're looking to succeed in the SSB, this is the best place in Dehradun.”
                    </p>
                    <div class="testimonial-author">
                        <div class="author-avatar">NS</div>
                        <div>
                            <div class="author-name">Nidhi Sood</div>
                            <div class="author-sub">Verified Google Reviewer</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 12. Frequently Asked Questions (FAQ) -->
    <section class="section-padding" id="faqs">
        <div class="container">
            <div class="section-header">
                <span class="badge-navy">Clear Answers</span>
                <h2>Frequently Asked Questions</h2>
                <div class="gold-divider"></div>
                <p>Everything you need to know about admissions, batches, eligibility, and facilities.</p>
            </div>

            <div class="faq-accordion">
                <!-- FAQ 1: Best NDA Coaching in Dehradun -->
                <div class="faq-item active">
                    <button type="button" class="faq-question">
                        <span>1. Which is the Best NDA Coaching in Dehradun & Top NDA Coaching Institute in India?</span>
                        <span class="faq-toggle-icon">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </span>
                    </button>
                    <div class="faq-answer">
                        <strong>Dehradun Defence College (DDC)</strong> is widely recognized as the <strong>Best NDA Coaching in Dehradun</strong> and among the top NDA coaching institutes in India. With a dedicated 10-acre residential campus, retired armed forces faculty, daily 8-10 hours academic rigor, an authentic outdoor GTO obstacle ground, and direct integration with Doon Public Senior Secondary School, DDC produces top officer selections year after year in UPSC NDA, CDS, AFCAT, and SSB boards.
                    </div>
                </div>

                <!-- FAQ 2: Schooling & Hostel -->
                <div class="faq-item">
                    <button type="button" class="faq-question">
                        <span>2. Do you provide NDA Coaching with Schooling, Hostel and Mess Facilities in Dehradun?</span>
                        <span class="faq-toggle-icon">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </span>
                    </button>
                    <div class="faq-answer">
                        Yes! DDC specializes in integrated <strong>NDA Coaching with Schooling in Dehradun</strong> in partnership with <em>Doon Public Senior Secondary School</em>. Students prepare for their CBSE 11th & 12th board exams and NDA syllabus simultaneously. Our <strong>NDA Coaching with Hostel and Mess Facilities</strong> includes Dehradun's first 100% in-house separate residential buildings for boys and girls, hygienic dining mess providing nutritious military diet, 24/7 female wardens, evening library study halls, and disciplined daily routines.
                    </div>
                </div>

                <!-- FAQ 3: NDA Foundation & Pre-NDA -->
                <div class="faq-item">
                    <button type="button" class="faq-question">
                        <span>3. What is the NDA Foundation Course after 10th and Pre-NDA Foundation Course (8th to 10th)?</span>
                        <span class="faq-toggle-icon">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </span>
                    </button>
                    <div class="faq-answer">
                        Our <strong>NDA Foundation Course after 10th</strong> is a comprehensive 2-year integrated program covering Class 11th & 12th PCM along with UPSC NDA Mathematics, GAT, and SSB interview conditioning. For younger cadets, our <strong>Pre-NDA Foundation Course (8th to 10th class)</strong> builds rock-solid conceptual mastery in NCERT Mathematics, English, General Science, and officer personality traits so they easily clear defence entrances on their first attempt.
                    </div>
                </div>

                <!-- FAQ 4: CDS, OTA & AFCAT -->
                <div class="faq-item">
                    <button type="button" class="faq-question">
                        <span>4. Do you offer CDS Coaching in Dehradun, CDS OTA Coaching, and AFCAT Preparation?</span>
                        <span class="faq-toggle-icon">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </span>
                    </button>
                    <div class="faq-answer">
                        Yes. We are a premier <strong>CDS Coaching in Dehradun</strong> and leading <strong>CDS OTA Coaching Institute</strong> for graduate defence aspirants targeting IMA, INA, AFA, and OTA Chennai. Furthermore, our <strong>AFCAT Exam Preparation Coaching</strong> targets numerical ability, verbal ability, military reasoning, and general awareness with specialized shortcut solving methods and regular full-length mock drills.
                    </div>
                </div>

                <!-- FAQ 5: SSB & GTO Ground -->
                <div class="faq-item">
                    <button type="button" class="faq-question">
                        <span>5. Why is DDC rated for the Best GTO Ground and SSB Interview Coaching in Dehradun?</span>
                        <span class="faq-toggle-icon">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </span>
                    </button>
                    <div class="faq-answer">
                        Dehradun Defence College features the <strong>Best GTO Ground for SSB Training</strong> in Uttarakhand, complete with Burma Bridge, Tiger Leap, Tarzan Swing, Commando Walk, Double Ditch, PGT, HGT, and Snake Race obstacles built to exact military testing dimensions. Our <strong>SSB Interview Coaching Dehradun</strong> includes individual psychology dossiers (TAT, WAT, SRT, SDT), daily Group Discussions, and 1-on-1 personal interview mocks led by ex-SSB board presidents and psychologists.
                    </div>
                </div>

                <!-- FAQ 6: RIMC, Sainik & MNS -->
                <div class="faq-item">
                    <button type="button" class="faq-question">
                        <span>6. Do you provide RIMC, RMS Military School, and Military Nursing Service (MNS) Coaching?</span>
                        <span class="faq-toggle-icon">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </span>
                    </button>
                    <div class="faq-answer">
                        Yes! We provide specialized <strong>RIMC and Rashtriya Military Schools (RMS) Coaching</strong> for Class 6th and 9th young entrants, including CET written exam practice and viva-voce interview grooming. Additionally, our dedicated women wing conducts <strong>Military Nursing Service (MNS) Coaching</strong> integrated with NEET UG, ToGIGE screening, and medical fitness training to commission female aspirants as Nursing Officers in the Armed Forces.
                    </div>
                </div>

                <!-- FAQ 7: Location & Sahastradhara / JK Tower -->
                <div class="faq-item">
                    <button type="button" class="faq-question">
                        <span>7. How is DDC connected to Sahastradhara Road, JK Tower, and Dreamers Edu Hub Dehradun?</span>
                        <span class="faq-toggle-icon">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </span>
                    </button>
                    <div class="faq-answer">
                        Aspirants searching for <strong>NDA coaching near Sahastradhara Road Dehradun</strong>, <strong>top-rated defence academy near JK Tower Dehradun</strong>, or hubs like <strong>Dreamers Edu Hub Dehradun</strong> / <strong>Doon Defence Dreamers</strong> can reach our expansive residential campus in under 20 minutes via Raipur - Maldevta Road. Situated in a pollution-free green valley, our campus provides the ideal quiet atmosphere, clean mountain air, and physical obstacle grounds that crowded city centers cannot offer.
                    </div>
                </div>

                <!-- FAQ 8: Best in Uttarakhand -->
                <div class="faq-item">
                    <button type="button" class="faq-question">
                        <span>8. Why choose DDC as the Best NDA written and SSB coaching in Uttarakhand?</span>
                        <span class="faq-toggle-icon">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </span>
                    </button>
                    <div class="faq-answer">
                        Dehradun Defence College stands as the <strong>Best NDA written and SSB coaching in Uttarakhand</strong> because of its complete 360-degree ecosystem: CBSE school education, experienced UPSC faculty, exhaustive chapter-wise question banks, weekly OMR mock tests, daily SSB Officer-Like Qualities (OLQ) training, and dedicated physical fitness conditioning led by ex-officers.
                    </div>
                </div>
            </div>

            <!-- Schema.org FAQPage Structured Data -->
            <script type="application/ld+json">
            {
              "@context": "https://schema.org",
              "@type": "FAQPage",
              "mainEntity": [
                {
                  "@type": "Question",
                  "name": "Which is the Best NDA Coaching in Dehradun & Top NDA Coaching Institute in India?",
                  "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Dehradun Defence College is widely recognized as the Best NDA Coaching in Dehradun and among the top NDA coaching institutes in India, offering expert faculty, schooling integration with Doon Public Senior Secondary School, in-campus hostel, and authentic outdoor GTO obstacle grounds."
                  }
                },
                {
                  "@type": "Question",
                  "name": "Do you provide NDA Coaching with Schooling, Hostel and Mess Facilities in Dehradun?",
                  "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, DDC offers comprehensive NDA Coaching with Schooling in Dehradun in partnership with Doon Public Senior Secondary School, along with Dehradun's 1st in-house separate residential hostels for boys and girls."
                  }
                },
                {
                  "@type": "Question",
                  "name": "What is the NDA Foundation Course after 10th and Pre-NDA Foundation Course?",
                  "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The NDA Foundation Course after 10th covers CBSE 11th & 12th board syllabus alongside UPSC NDA preparation. The Pre-NDA Foundation Course (8th to 10th class) builds core fundamentals in Maths, Science, and English for younger cadets."
                  }
                },
                {
                  "@type": "Question",
                  "name": "Do you offer CDS Coaching in Dehradun, CDS OTA Coaching, and AFCAT Preparation?",
                  "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, Dehradun Defence College provides premier CDS Coaching in Dehradun, CDS OTA Coaching for short service commission, and specialized AFCAT Exam Preparation Coaching."
                  }
                },
                {
                  "@type": "Question",
                  "name": "Why is DDC rated for the Best GTO Ground and SSB Interview Coaching in Dehradun?",
                  "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "DDC features the Best GTO Ground for SSB Training in Uttarakhand with full-scale outdoor obstacles, psychological dossier evaluations (TAT, WAT, SRT), and 1-on-1 interview mocks led by ex-defence officers."
                  }
                }
              ]
            }
            </script>
        </div>
    </section>

    <!-- 13. Final Call To Action Banner -->
    <section class="section-padding bg-navy" style="background-image: linear-gradient(135deg, #0B1B3D 0%, #162B56 100%); position: relative;">
        <div class="container" style="text-align: center; max-width: 820px;">
            <span class="badge-gold">Take The First Step</span>
            <h2 style="color: #FFFFFF; margin: 1rem 0 1.25rem 0; font-size: 2.5rem;">
                Ready to Wear the Olive Green, White, or Air Force Blue?
            </h2>
            <p style="color: rgba(255,255,255,0.85); font-size: 1.15rem; margin-bottom: 2.25rem;">
                Admissions for the 2026 Batch are actively underway. Seats for in-house separate residential hostel batches are limited to maintain personal attention.
            </p>
            <div style="display: flex; justify-content: center; gap: 1.25rem; flex-wrap: wrap;">
                <button type="button" class="btn btn-gold btn-lg open-enquiry-modal" data-course="Direct Admission 2026">
                    <span>Enquire for 2026 Batch</span>
                </button>
                <a href="<?php echo WHATSAPP_LINK; ?>" class="btn btn-outline-white btn-lg" target="_blank" rel="noopener">
                    <span>Chat on WhatsApp</span>
                </a>
                <a href="director.php" class="btn btn-outline-white btn-lg">
                    <span>Director's Message</span>
                </a>
            </div>
        </div>
    </section>

<?php include __DIR__ . '/includes/footer.php'; ?>
