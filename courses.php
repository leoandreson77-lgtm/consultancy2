<?php
/**
 * Courses & Programs - Dehradun Defence College
 */
require_once __DIR__ . '/config.php';

$page_title = 'Defence Courses & Programs | NDA, CDS, AFCAT, SSB | Dehradun Defence College';
$page_desc = 'Explore complete defence courses at Dehradun Defence College: NDA Foundation after 10th, NDA Girls Wing, NDA 12th Dropper Batch, CDS, AFCAT, SSB 14-day training camp, RIMC & Sainik School.';
$current_page = 'courses';

include __DIR__ . '/includes/header.php';
?>

    <!-- Page Header Banner -->
    <section class="section-padding-sm bg-navy" style="background-image: linear-gradient(135deg, #0B1B3D 0%, #162B56 100%);">
        <div class="container" style="text-align: center;">
            <span class="badge-gold">Academic Excellence</span>
            <h1 style="color: #FFFFFF; margin: 0.75rem 0 0.5rem 0;">Defence Courses & Preparation Programs</h1>
            <p style="color: rgba(255,255,255,0.85); font-size: 1.1rem; max-width: 720px; margin: 0 auto;">
                Scientifically designed training modules combining UPSC syllabus mastery, physical conditioning, and SSB personality development.
            </p>
        </div>
    </section>

    <!-- Courses Grid Section -->
    <section class="section-padding bg-slate">
        <div class="container">
            <div class="section-header">
                <span class="badge-navy">Online Registration for 2027</span>
                <h2>Choose Your Pathway to Commission</h2>
                <div class="gold-divider"></div>
                <p>Select your educational qualification to find the ideal batch and preparation track.</p>
            </div>

            <!-- Official Online Scholarship Test Banner (Class 9th & 10th) -->
            <div class="test-alert-banner">
                <div class="test-alert-banner-left">
                    <span class="test-alert-badge">🔥 SCHOLARSHIP TEST 2027</span>
                    <div class="test-alert-text">
                        <strong>For Class 9th &amp; 10th Students:</strong> Attempt our 50-Question Online Test to qualify for up to <strong>100% Tuition Fee Scholarship</strong> on NDA Foundation.
                    </div>
                </div>
                <a href="<?php echo SCHOLARSHIP_TEST_URL; ?>" target="_blank" rel="noopener" class="btn btn-gold btn-sm" style="white-space: nowrap; font-weight: 800;">
                    <span>START TEST NOW →</span>
                </a>
            </div>

            <!-- Filter Buttons -->
            <div class="course-filter-nav">

                <button type="button" class="course-filter-btn active" data-filter="all">All Programs</button>
                <button type="button" class="course-filter-btn" data-filter="nda">NDA Foundation</button>
                <button type="button" class="course-filter-btn" data-filter="graduate">Graduate Entries (CDS/AFCAT)</button>
                <button type="button" class="course-filter-btn" data-filter="ssb">SSB & School Entries</button>
            </div>

            <div class="courses-grid">
                <?php foreach ($DDC_COURSES as $slug => $c): 
                    $category = 'nda';
                    if (strpos($slug, 'cds') !== false || strpos($slug, 'afcat') !== false || strpos($slug, 'capf') !== false) {
                        $category = 'graduate';
                    } elseif (strpos($slug, 'ssb') !== false || strpos($slug, 'rimc') !== false) {
                        $category = 'ssb';
                    }

                    $img = 'assets/images/classroom-lecture-hall-real.jpg';
                    if (strpos($slug, 'ssb') !== false) $img = 'assets/images/ssb-gto-ground.jpg';
                    if (strpos($slug, 'girls') !== false) $img = 'assets/images/nda-girls-wing-formation.jpg';
                    if (strpos($slug, 'target') !== false) $img = 'assets/images/classroom-lecture-hall-real.jpg';
                    if (strpos($slug, 'foundation') !== false) $img = 'assets/images/campus-building-main.jpg';
                    if (strpos($slug, 'cds') !== false) $img = 'assets/images/cadets-parade-assembly.jpg';
                    if (strpos($slug, 'rimc') !== false || strpos($slug, 'rms') !== false) $img = 'assets/images/campus-building-main.jpg';
                    if (strpos($slug, 'mns') !== false) $img = 'assets/images/nda-girls-wing-formation.jpg';
                    if (strpos($slug, 'afcat') !== false) $img = 'assets/images/classroom-smart-board-real.jpg';
                ?>
                <div class="course-card" data-category="<?php echo $category; ?>">
                    <div class="course-card-banner">
                        <img src="<?php echo $img; ?>" alt="<?php echo htmlspecialchars($c['title']); ?>">
                        <span class="course-card-badge"><?php echo htmlspecialchars($c['badge']); ?></span>
                    </div>
                    <div class="course-card-body">
                        <span class="course-target-tag"><?php echo htmlspecialchars($c['target']); ?></span>
                        <h3 class="course-card-title"><?php echo htmlspecialchars($c['title']); ?></h3>
                        <p class="course-card-desc"><?php echo htmlspecialchars($c['description']); ?></p>

                        <div style="background-color: var(--bg-slate); padding: 0.75rem 1rem; border-radius: var(--radius-sm); margin-bottom: 1rem; font-size: 0.85rem;">
                            <strong>Eligibility:</strong> <?php echo htmlspecialchars($c['eligibility']); ?><br>
                            <strong>Duration:</strong> <?php echo htmlspecialchars($c['duration']); ?>
                        </div>

                        <div class="course-features-summary">
                            <?php foreach (array_slice($c['features'], 0, 3) as $f): ?>
                            <div class="course-feature-line">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>
                                <span><?php echo htmlspecialchars($f); ?></span>
                            </div>
                            <?php endforeach; ?>
                        </div>

                        <div class="course-card-footer">
                            <a href="course-detail.php?course=<?php echo $slug; ?>" class="btn btn-outline-navy btn-sm">Full Details</a>
                            <button type="button" class="btn btn-gold btn-sm open-enquiry-modal" data-course="<?php echo htmlspecialchars($c['title']); ?>">
                                Apply / Enquire
                            </button>
                        </div>

                        <?php if (!empty($c['timetable_pdf'])): ?>
                        <div style="margin-top: 0.85rem; padding-top: 0.75rem; border-top: 1px dashed var(--border-light);">
                            <a href="<?php echo htmlspecialchars($c['timetable_pdf']); ?>" download class="btn btn-outline-navy btn-sm" style="width: 100%; justify-content: center; font-size: 0.825rem; padding: 0.5rem 0.75rem; background-color: var(--bg-light-blue); border-color: rgba(11, 27, 61, 0.15); gap: 0.5rem;">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" style="color: var(--accent-gold-hover);"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                                <span>Download Timetable (PDF)</span>
                            </a>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Official Batch Timetables & Study Plans Download Center -->
    <section class="section-padding bg-slate" id="timetable-download-center">
        <div class="container">
            <div class="section-header">
                <span class="badge-gold">Download Center</span>
                <h2>Official Course Timetables & Daily Study Plans</h2>
                <div class="gold-divider"></div>
                <p>Download our verified batch timetables, daily hourly schedules, SSB preparation routines, and exam roadmaps in PDF format.</p>
            </div>

            <div class="timetable-dl-grid">
                <!-- 1. NDA Foundation -->
                <div style="background: #FFFFFF; border-radius: var(--radius-lg); padding: 1.75rem; border: 1px solid var(--border-light); box-shadow: var(--shadow-sm); display: flex; flex-direction: column; justify-content: space-between; position: relative;">
                    <div style="position: absolute; top: 1rem; right: 1rem;">
                        <span class="badge-saffron" style="font-size: 0.7rem;">Class 11-12</span>
                    </div>
                    <div>
                        <div style="width: 44px; height: 44px; border-radius: 10px; background: rgba(212, 175, 55, 0.15); display: flex; align-items: center; justify-content: center; color: var(--accent-gold-hover); margin-bottom: 1rem;">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line></svg>
                        </div>
                        <h3 style="font-size: 1.15rem; color: var(--primary-navy); margin-bottom: 0.35rem;">NDA Foundation Plan</h3>
                        <p style="font-size: 0.85rem; color: var(--text-muted); margin-bottom: 0.75rem;">Weekday routine (2-3 hrs) + weekend test plan (5-6 hrs) alongside Class 11-12 school.</p>
                        <div style="font-size: 0.8rem; background: var(--bg-slate); padding: 0.5rem 0.75rem; border-radius: var(--radius-sm); margin-bottom: 1.25rem;">
                            <strong>Routine:</strong> 6:00 AM PT • 5:00 PM Maths • GAT • English
                        </div>
                    </div>
                    <div>
                        <a href="assets/downloads/ddc-nda-foundation-timetable.pdf" download class="btn btn-gold btn-sm" style="width: 100%; justify-content: center; gap: 0.5rem; margin-bottom: 0.5rem;">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                            <span>Download PDF</span>
                        </a>
                        <a href="assets/downloads/ddc-nda-foundation-timetable.pdf" target="_blank" rel="noopener" style="display: block; text-align: center; font-size: 0.785rem; color: var(--text-muted); text-decoration: underline;">
                            View in Browser
                        </a>
                    </div>
                </div>

                <!-- 2. NDA Pre-Foundation -->
                <div style="background: #FFFFFF; border-radius: var(--radius-lg); padding: 1.75rem; border: 1px solid var(--border-light); box-shadow: var(--shadow-sm); display: flex; flex-direction: column; justify-content: space-between; position: relative;">
                    <div style="position: absolute; top: 1rem; right: 1rem;">
                        <span class="badge-navy" style="font-size: 0.7rem;">Class 9-10</span>
                    </div>
                    <div>
                        <div style="width: 44px; height: 44px; border-radius: 10px; background: rgba(11, 27, 61, 0.08); display: flex; align-items: center; justify-content: center; color: var(--primary-navy); margin-bottom: 1rem;">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line></svg>
                        </div>
                        <h3 style="font-size: 1.15rem; color: var(--primary-navy); margin-bottom: 0.35rem;">NDA Pre-Foundation</h3>
                        <p style="font-size: 0.85rem; color: var(--text-muted); margin-bottom: 0.75rem;">1.5 to 2 hrs daily routine for Class 9 & 10 to build foundational maths & fitness early.</p>
                        <div style="font-size: 0.8rem; background: var(--bg-slate); padding: 0.5rem 0.75rem; border-radius: var(--radius-sm); margin-bottom: 1.25rem;">
                            <strong>Routine:</strong> 6:00 AM PT • Maths NCERT • Science • Vocab
                        </div>
                    </div>
                    <div>
                        <a href="assets/downloads/ddc-nda-pre-foundation-timetable.pdf" download class="btn btn-gold btn-sm" style="width: 100%; justify-content: center; gap: 0.5rem; margin-bottom: 0.5rem;">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                            <span>Download PDF</span>
                        </a>
                        <a href="assets/downloads/ddc-nda-pre-foundation-timetable.pdf" target="_blank" rel="noopener" style="display: block; text-align: center; font-size: 0.785rem; color: var(--text-muted); text-decoration: underline;">
                            View in Browser
                        </a>
                    </div>
                </div>

                <!-- 3. NDA Target / Dropper -->
                <div style="background: #FFFFFF; border-radius: var(--radius-lg); padding: 1.75rem; border: 2px solid var(--accent-gold); box-shadow: var(--shadow-md); display: flex; flex-direction: column; justify-content: space-between; position: relative;">
                    <div style="position: absolute; top: 1rem; right: 1rem;">
                        <span class="badge-gold" style="font-size: 0.7rem;">6M & 12M Intensive</span>
                    </div>
                    <div>
                        <div style="width: 44px; height: 44px; border-radius: 10px; background: linear-gradient(135deg, #0B1B3D 0%, #162B56 100%); display: flex; align-items: center; justify-content: center; color: var(--accent-gold); margin-bottom: 1rem;">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line></svg>
                        </div>
                        <h3 style="font-size: 1.15rem; color: var(--primary-navy); margin-bottom: 0.35rem;">NDA After 12th Batches</h3>
                        <p style="font-size: 0.85rem; color: var(--text-muted); margin-bottom: 0.75rem;">Full-time 6M (8-10 hrs) & 12M (6-8 hrs) daily schedules, weekly mocks & SSB plans.</p>
                        <div style="font-size: 0.8rem; background: var(--bg-slate); padding: 0.5rem 0.75rem; border-radius: var(--radius-sm); margin-bottom: 1.25rem;">
                            <strong>Routine:</strong> 5:30 AM PT • Maths Core • GAT • 5h Mock Sunday
                        </div>
                    </div>
                    <div>
                        <a href="assets/downloads/ddc-nda-target-timetable.pdf" download class="btn btn-gold btn-sm" style="width: 100%; justify-content: center; gap: 0.5rem; margin-bottom: 0.5rem;">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                            <span>Download PDF</span>
                        </a>
                        <a href="assets/downloads/ddc-nda-target-timetable.pdf" target="_blank" rel="noopener" style="display: block; text-align: center; font-size: 0.785rem; color: var(--text-muted); text-decoration: underline;">
                            View in Browser
                        </a>
                    </div>
                </div>

                <!-- 4. CDS Training -->
                <div style="background: #FFFFFF; border-radius: var(--radius-lg); padding: 1.75rem; border: 1px solid var(--border-light); box-shadow: var(--shadow-sm); display: flex; flex-direction: column; justify-content: space-between; position: relative;">
                    <div style="position: absolute; top: 1rem; right: 1rem;">
                        <span class="badge-navy" style="font-size: 0.7rem;">Graduates</span>
                    </div>
                    <div>
                        <div style="width: 44px; height: 44px; border-radius: 10px; background: rgba(212, 175, 55, 0.15); display: flex; align-items: center; justify-content: center; color: var(--accent-gold-hover); margin-bottom: 1rem;">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line></svg>
                        </div>
                        <h3 style="font-size: 1.15rem; color: var(--primary-navy); margin-bottom: 0.35rem;">CDS Syllabus & Timetable</h3>
                        <p style="font-size: 0.85rem; color: var(--text-muted); margin-bottom: 0.75rem;">IMA, INA, AFA & OTA 5-6 hrs study plan, syllabus breakdown and SSB stages.</p>
                        <div style="font-size: 0.8rem; background: var(--bg-slate); padding: 0.5rem 0.75rem; border-radius: var(--radius-sm); margin-bottom: 1.25rem;">
                            <strong>Routine:</strong> 5:30 AM PT • Maths • English • GK • Sunday Mocks
                        </div>
                    </div>
                    <div>
                        <a href="assets/downloads/ddc-cds-syllabus-timetable.pdf" download class="btn btn-gold btn-sm" style="width: 100%; justify-content: center; gap: 0.5rem; margin-bottom: 0.5rem;">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                            <span>Download PDF</span>
                        </a>
                        <a href="assets/downloads/ddc-cds-syllabus-timetable.pdf" target="_blank" rel="noopener" style="display: block; text-align: center; font-size: 0.785rem; color: var(--text-muted); text-decoration: underline;">
                            View in Browser
                        </a>
                    </div>
                </div>

                <!-- 5. AFCAT Coaching -->
                <div style="background: #FFFFFF; border-radius: var(--radius-lg); padding: 1.75rem; border: 1px solid var(--border-light); box-shadow: var(--shadow-sm); display: flex; flex-direction: column; justify-content: space-between; position: relative;">
                    <div style="position: absolute; top: 1rem; right: 1rem;">
                        <span class="badge-saffron" style="font-size: 0.7rem;">Air Force</span>
                    </div>
                    <div>
                        <div style="width: 44px; height: 44px; border-radius: 10px; background: rgba(11, 27, 61, 0.08); display: flex; align-items: center; justify-content: center; color: var(--primary-navy); margin-bottom: 1rem;">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line></svg>
                        </div>
                        <h3 style="font-size: 1.15rem; color: var(--primary-navy); margin-bottom: 0.35rem;">AFCAT Syllabus & Routine</h3>
                        <p style="font-size: 0.85rem; color: var(--text-muted); margin-bottom: 0.75rem;">3-6 month plan, EKT technical add-on, AFSB guidance & speed reasoning routine.</p>
                        <div style="font-size: 0.8rem; background: var(--bg-slate); padding: 0.5rem 0.75rem; border-radius: var(--radius-sm); margin-bottom: 1.25rem;">
                            <strong>Routine:</strong> Numerical Ability • Reasoning • English • AFSB Prep
                        </div>
                    </div>
                    <div>
                        <a href="assets/downloads/ddc-afcat-syllabus-timetable.pdf" download class="btn btn-gold btn-sm" style="width: 100%; justify-content: center; gap: 0.5rem; margin-bottom: 0.5rem;">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                            <span>Download PDF</span>
                        </a>
                        <a href="assets/downloads/ddc-afcat-syllabus-timetable.pdf" target="_blank" rel="noopener" style="display: block; text-align: center; font-size: 0.785rem; color: var(--text-muted); text-decoration: underline;">
                            View in Browser
                        </a>
                    </div>
                </div>

                <!-- 6. RIMC Dehradun -->
                <div style="background: #FFFFFF; border-radius: var(--radius-lg); padding: 1.75rem; border: 1px solid var(--border-light); box-shadow: var(--shadow-sm); display: flex; flex-direction: column; justify-content: space-between; position: relative;">
                    <div style="position: absolute; top: 1rem; right: 1rem;">
                        <span class="badge-gold" style="font-size: 0.7rem;">Class 8 Entry</span>
                    </div>
                    <div>
                        <div style="width: 44px; height: 44px; border-radius: 10px; background: rgba(212, 175, 55, 0.15); display: flex; align-items: center; justify-content: center; color: var(--accent-gold-hover); margin-bottom: 1rem;">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line></svg>
                        </div>
                        <h3 style="font-size: 1.15rem; color: var(--primary-navy); margin-bottom: 0.35rem;">RIMC Dehradun Entrance</h3>
                        <p style="font-size: 0.85rem; color: var(--text-muted); margin-bottom: 0.75rem;">Daily 2-3 hrs routine for young cadets (Class 6-7), Maths, English & Viva-Voce prep.</p>
                        <div style="font-size: 0.8rem; background: var(--bg-slate); padding: 0.5rem 0.75rem; border-radius: var(--radius-sm); margin-bottom: 1.25rem;">
                            <strong>Routine:</strong> 6:00 AM Games • 4:30 PM Maths • English • Viva Voce
                        </div>
                    </div>
                    <div>
                        <a href="assets/downloads/ddc-rimc-entrance-timetable.pdf" download class="btn btn-gold btn-sm" style="width: 100%; justify-content: center; gap: 0.5rem; margin-bottom: 0.5rem;">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                            <span>Download PDF</span>
                        </a>
                        <a href="assets/downloads/ddc-rimc-entrance-timetable.pdf" target="_blank" rel="noopener" style="display: block; text-align: center; font-size: 0.785rem; color: var(--text-muted); text-decoration: underline;">
                            View in Browser
                        </a>
                    </div>
                </div>

                <!-- 7. AFMC Pune (NEET UG) -->
                <div style="background: #FFFFFF; border-radius: var(--radius-lg); padding: 1.75rem; border: 1px solid var(--border-light); box-shadow: var(--shadow-sm); display: flex; flex-direction: column; justify-content: space-between; position: relative;">
                    <div style="position: absolute; top: 1rem; right: 1rem;">
                        <span class="badge-saffron" style="font-size: 0.7rem;">Medical Defence</span>
                    </div>
                    <div>
                        <div style="width: 44px; height: 44px; border-radius: 10px; background: rgba(11, 27, 61, 0.08); display: flex; align-items: center; justify-content: center; color: var(--primary-navy); margin-bottom: 1rem;">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line></svg>
                        </div>
                        <h3 style="font-size: 1.15rem; color: var(--primary-navy); margin-bottom: 0.35rem;">AFMC Pune (NEET UG)</h3>
                        <p style="font-size: 0.85rem; color: var(--text-muted); margin-bottom: 0.75rem;">NEET 8-10 hrs timetable, NCERT PCB line-by-line strategy, ToELR logic & interview plan.</p>
                        <div style="font-size: 0.8rem; background: var(--bg-slate); padding: 0.5rem 0.75rem; border-radius: var(--radius-sm); margin-bottom: 1.25rem;">
                            <strong>Routine:</strong> 5:30 AM PT • 7:00 AM Bio • Physics • Chem • ToELR
                        </div>
                    </div>
                    <div>
                        <a href="assets/downloads/ddc-afmc-neet-timetable.pdf" download class="btn btn-gold btn-sm" style="width: 100%; justify-content: center; gap: 0.5rem; margin-bottom: 0.5rem;">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                            <span>Download PDF</span>
                        </a>
                        <a href="assets/downloads/ddc-afmc-neet-timetable.pdf" target="_blank" rel="noopener" style="display: block; text-align: center; font-size: 0.785rem; color: var(--text-muted); text-decoration: underline;">
                            View in Browser
                        </a>
                    </div>
                </div>

                <!-- 8. MNS BSc Nursing -->
                <div style="background: #FFFFFF; border-radius: var(--radius-lg); padding: 1.75rem; border: 1px solid var(--border-light); box-shadow: var(--shadow-sm); display: flex; flex-direction: column; justify-content: space-between; position: relative;">
                    <div style="position: absolute; top: 1rem; right: 1rem;">
                        <span class="badge-navy" style="font-size: 0.7rem;">Military Nursing</span>
                    </div>
                    <div>
                        <div style="width: 44px; height: 44px; border-radius: 10px; background: rgba(212, 175, 55, 0.15); display: flex; align-items: center; justify-content: center; color: var(--accent-gold-hover); margin-bottom: 1rem;">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line></svg>
                        </div>
                        <h3 style="font-size: 1.15rem; color: var(--primary-navy); margin-bottom: 0.35rem;">MNS Nursing (NEET UG)</h3>
                        <p style="font-size: 0.85rem; color: var(--text-muted); margin-bottom: 0.75rem;">NEET UG + ToGIGE test timetable, biology high-yield drills & medical board fitness.</p>
                        <div style="font-size: 0.8rem; background: var(--bg-slate); padding: 0.5rem 0.75rem; border-radius: var(--radius-sm); margin-bottom: 1.25rem;">
                            <strong>Routine:</strong> 5:30 AM PT • Bio • Physics • Chem • ToGIGE English
                        </div>
                    </div>
                    <div>
                        <a href="assets/downloads/ddc-mns-nursing-timetable.pdf" download class="btn btn-gold btn-sm" style="width: 100%; justify-content: center; gap: 0.5rem; margin-bottom: 0.5rem;">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                            <span>Download PDF</span>
                        </a>
                        <a href="assets/downloads/ddc-mns-nursing-timetable.pdf" target="_blank" rel="noopener" style="display: block; text-align: center; font-size: 0.785rem; color: var(--text-muted); text-decoration: underline;">
                            View in Browser
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Comprehensive Course Comparison Table -->
    <section class="section-padding">
        <div class="container">
            <div class="section-header">
                <span class="badge-gold">Comparison</span>
                <h2>Course Comparison & Eligibility Matrix</h2>
                <div class="gold-divider"></div>
                <p>Quick reference guide to evaluate courses against your current academic standing.</p>
            </div>

            <div class="table-responsive" style="background: #FFFFFF; border-radius: var(--radius-lg); box-shadow: var(--shadow-md); border: 1px solid var(--border-light);">
                <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.925rem;">
                    <thead>
                        <tr style="background-color: var(--primary-navy); color: #FFFFFF; border-bottom: 3px solid var(--accent-gold);">
                            <th style="padding: 1.25rem 1.5rem; font-family: var(--font-heading);">Course Program</th>
                            <th style="padding: 1.25rem 1.5rem; font-family: var(--font-heading);">Target Entry</th>
                            <th style="padding: 1.25rem 1.5rem; font-family: var(--font-heading);">Eligibility</th>
                            <th style="padding: 1.25rem 1.5rem; font-family: var(--font-heading);">Duration</th>
                            <th style="padding: 1.25rem 1.5rem; font-family: var(--font-heading);">Hostel Facility</th>
                            <th style="padding: 1.25rem 1.5rem; font-family: var(--font-heading);">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="border-bottom: 1px solid var(--border-light);">
                            <td style="padding: 1.1rem 1.5rem; font-weight: 700; color: var(--primary-navy);">NDA Foundation 10th</td>
                            <td style="padding: 1.1rem 1.5rem;">NDA (Army, Navy, Air Force)</td>
                            <td style="padding: 1.1rem 1.5rem;">Passed Class 10th</td>
                            <td style="padding: 1.1rem 1.5rem;">2 Years (Integrated)</td>
                            <td style="padding: 1.1rem 1.5rem;"><span class="badge-navy">Included (Optional)</span></td>
                            <td style="padding: 1.1rem 1.5rem;">
                                <button type="button" class="btn btn-gold btn-sm open-enquiry-modal" data-course="NDA Foundation 10th">Enquire</button>
                            </td>
                        </tr>
                        <tr style="border-bottom: 1px solid var(--border-light); background-color: var(--bg-slate);">
                            <td style="padding: 1.1rem 1.5rem; font-weight: 700; color: var(--primary-navy);">NDA (Girls) Special Wing</td>
                            <td style="padding: 1.1rem 1.5rem;">NDA Cadets (Female)</td>
                            <td style="padding: 1.1rem 1.5rem;">10th / 12th Pass or Appearing</td>
                            <td style="padding: 1.1rem 1.5rem;">1 Year / 2 Years</td>
                            <td style="padding: 1.1rem 1.5rem;"><span class="badge-saffron">Dedicated Girls Wing</span></td>
                            <td style="padding: 1.1rem 1.5rem;">
                                <button type="button" class="btn btn-gold btn-sm open-enquiry-modal" data-course="NDA Girls Special Wing">Enquire</button>
                            </td>
                        </tr>
                        <tr style="border-bottom: 1px solid var(--border-light);">
                            <td style="padding: 1.1rem 1.5rem; font-weight: 700; color: var(--primary-navy);">NDA Target 12th / Dropper</td>
                            <td style="padding: 1.1rem 1.5rem;">Upcoming UPSC NDA Exam</td>
                            <td style="padding: 1.1rem 1.5rem;">12th Appearing or Passed</td>
                            <td style="padding: 1.1rem 1.5rem;">6 Months / 1 Year</td>
                            <td style="padding: 1.1rem 1.5rem;"><span class="badge-navy">Available</span></td>
                            <td style="padding: 1.1rem 1.5rem;">
                                <button type="button" class="btn btn-gold btn-sm open-enquiry-modal" data-course="NDA Target 12th">Enquire</button>
                            </td>
                        </tr>
                        <tr style="border-bottom: 1px solid var(--border-light); background-color: var(--bg-slate);">
                            <td style="padding: 1.1rem 1.5rem; font-weight: 700; color: var(--primary-navy);">CDS Training</td>
                            <td style="padding: 1.1rem 1.5rem;">IMA, OTA, AFA, INA</td>
                            <td style="padding: 1.1rem 1.5rem;">Graduates / Final Year</td>
                            <td style="padding: 1.1rem 1.5rem;">6 Months / 1 Year</td>
                            <td style="padding: 1.1rem 1.5rem;"><span class="badge-navy">Available</span></td>
                            <td style="padding: 1.1rem 1.5rem;">
                                <button type="button" class="btn btn-gold btn-sm open-enquiry-modal" data-course="CDS Training">Enquire</button>
                            </td>
                        </tr>
                        <tr style="border-bottom: 1px solid var(--border-light);">
                            <td style="padding: 1.1rem 1.5rem; font-weight: 700; color: var(--primary-navy);">AFCAT Exam Coaching</td>
                            <td style="padding: 1.1rem 1.5rem;">Indian Air Force (Commissioned)</td>
                            <td style="padding: 1.1rem 1.5rem;">Graduates (Min 60%)</td>
                            <td style="padding: 1.1rem 1.5rem;">3 to 6 Months</td>
                            <td style="padding: 1.1rem 1.5rem;"><span class="badge-navy">Available</span></td>
                            <td style="padding: 1.1rem 1.5rem;">
                                <button type="button" class="btn btn-gold btn-sm open-enquiry-modal" data-course="AFCAT Coaching">Enquire</button>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 1.1rem 1.5rem; font-weight: 700; color: var(--primary-navy);">SSB 14-Day Practical Camp</td>
                            <td style="padding: 1.1rem 1.5rem;">SSB / AFSB / NSB Interview</td>
                            <td style="padding: 1.1rem 1.5rem;">Written Qualified or Direct Entry</td>
                            <td style="padding: 1.1rem 1.5rem;">14 Days (Intensive)</td>
                            <td style="padding: 1.1rem 1.5rem;"><span class="badge-gold">Full Boarding Included</span></td>
                            <td style="padding: 1.1rem 1.5rem;">
                                <button type="button" class="btn btn-gold btn-sm open-enquiry-modal" data-course="SSB 14-Day Camp">Enquire</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Admission & Counseling Assistance -->
    <section class="section-padding bg-navy" style="text-align: center;">
        <div class="container" style="max-width: 780px;">
            <span class="badge-gold">Admission Desk</span>
            <h2 style="color: #FFFFFF; margin: 1rem 0;">Confused Which Course is Best for You?</h2>
            <p style="color: rgba(255,255,255,0.85); font-size: 1.15rem; margin-bottom: 2rem;">
                Speak directly with our senior admission mentors for age eligibility verification, syllabus evaluation, and scholarship guidance.
            </p>
            <div style="display: flex; justify-content: center; gap: 1.25rem; flex-wrap: wrap;">
                <button type="button" class="btn btn-gold btn-lg open-enquiry-modal" data-course="Counseling Assistance">
                    Request Free Counseling Call
                </button>
                <a href="tel:<?php echo CONTACT_PHONE_1_RAW; ?>" class="btn btn-outline-white btn-lg">
                    Call: <?php echo CONTACT_PHONE_1; ?>
                </a>
            </div>
        </div>
    </section>

<?php include __DIR__ . '/includes/footer.php'; ?>
