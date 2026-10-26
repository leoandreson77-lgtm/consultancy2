<?php
/**
 * Individual Course Details - Dehradun Defence College
 */
require_once __DIR__ . '/config.php';

$course_slug = $_GET['course'] ?? 'nda-foundation-10';

// Match or fallback to NDA Foundation
if (!isset($DDC_COURSES[$course_slug])) {
    $course_slug = 'nda-foundation-10';
}

$c = $DDC_COURSES[$course_slug];

$page_title = $c['title'] . ' | Dehradun Defence College';
$page_desc = $c['description'] . ' Join Dehradun Defence College in Dehradun for top results, hostel facilities, and SSB training.';
$current_page = 'course-detail';

include __DIR__ . '/includes/header.php';
?>

    <!-- Course Banner -->
    <section class="section-padding-sm bg-navy" style="background-image: linear-gradient(135deg, #0B1B3D 0%, #162B56 100%);">
        <div class="container">
            <div style="display: flex; gap: 0.5rem; font-size: 0.85rem; color: var(--accent-gold); margin-bottom: 0.75rem;">
                <a href="index.php" style="color: #FFFFFF;">Home</a> &gt; 
                <a href="courses.php" style="color: #FFFFFF;">Courses</a> &gt; 
                <span class="course-title-dynamic"><?php echo htmlspecialchars($c['title']); ?></span>
            </div>
            <span class="badge-gold course-badge-dynamic"><?php echo htmlspecialchars($c['badge']); ?></span>
            <h1 style="color: #FFFFFF; margin: 0.75rem 0 0.75rem 0; font-size: 2.65rem;" class="course-title-dynamic"><?php echo htmlspecialchars($c['title']); ?></h1>
            <p style="color: rgba(255,255,255,0.85); font-size: 1.15rem; max-width: 800px;" class="course-desc-dynamic">
                <?php echo htmlspecialchars($c['description']); ?>
            </p>
        </div>
    </section>

    <!-- Course Detail Grid & Sidebar Form -->
    <section class="section-padding bg-slate">
        <div class="container course-detail-layout">
            <!-- Left Main Content -->
            <div class="course-main-content">
                <!-- Course Overview Box -->
                <div class="course-overview-box course-content-block" style="background: #FFFFFF; border-radius: var(--radius-lg); border: 1px solid var(--border-light); box-shadow: var(--shadow-sm); margin-bottom: 2.5rem;">
                    <h2 style="font-size: 1.75rem; margin-bottom: 1.25rem;">Program Highlights & Structure</h2>
                    
                    <div class="course-specs-grid">
                        <div>
                            <span style="font-size: 0.8rem; text-transform: uppercase; color: var(--text-muted); font-weight: 700;">Target Audience:</span>
                            <div style="font-weight: 700; color: var(--primary-navy);" class="course-target-dynamic"><?php echo htmlspecialchars($c['target']); ?></div>
                        </div>
                        <div>
                            <span style="font-size: 0.8rem; text-transform: uppercase; color: var(--text-muted); font-weight: 700;">Batch Duration:</span>
                            <div style="font-weight: 700; color: var(--primary-navy);" class="course-duration-dynamic"><?php echo htmlspecialchars($c['duration']); ?></div>
                        </div>
                        <div class="course-specs-full">
                            <span style="font-size: 0.8rem; text-transform: uppercase; color: var(--text-muted); font-weight: 700;">Eligibility Requirement:</span>
                            <div style="font-weight: 700; color: var(--primary-navy);" class="course-eligibility-dynamic"><?php echo htmlspecialchars($c['eligibility']); ?></div>
                        </div>
                    </div>

                    <h3 style="font-size: 1.35rem; margin: 1.5rem 0 1rem 0;">Key Deliverables Included:</h3>
                    <ul style="display: grid; grid-template-columns: 1fr; gap: 0.75rem;" id="course-features-list">
                        <?php foreach ($c['features'] as $f): ?>
                        <li style="display: flex; align-items: center; gap: 0.75rem; font-size: 0.95rem;">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" style="color: var(--tricolor-green); flex-shrink: 0;"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                            <span><?php echo htmlspecialchars($f); ?></span>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!-- Daily Timetable & Preparation Plan Section -->
                <div id="course-timetable-section" class="course-content-block" style="background: #FFFFFF; border-radius: var(--radius-lg); border: 1px solid var(--border-light); box-shadow: var(--shadow-sm); margin-bottom: 2.5rem;">
                    <div style="display: flex; justify-content: space-between; align-items: flex-start; flex-wrap: wrap; gap: 1rem; margin-bottom: 1.25rem;">
                        <div>
                            <span class="badge-gold">Official Batch Schedule</span>
                            <h2 style="font-size: 1.75rem; margin-top: 0.5rem; margin-bottom: 0.25rem;">Daily Timetable & Preparation Plan</h2>
                            <p style="color: var(--text-muted); font-size: 0.95rem;" class="course-hours-dynamic">
                                <?php echo htmlspecialchars($c['timetable_hours'] ?? 'Disciplined Cadets Daily Routine'); ?>
                            </p>
                        </div>
                        <?php if (!empty($c['timetable_pdf'])): ?>
                        <a href="<?php echo htmlspecialchars($c['timetable_pdf']); ?>" download class="btn btn-gold btn-sm course-timetable-dl-btn" style="box-shadow: var(--shadow-gold); gap: 0.5rem;">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                            <span>Download Timetable (PDF)</span>
                        </a>
                        <?php endif; ?>
                    </div>

                    <div class="table-responsive" style="border: 1px solid var(--border-light); border-radius: var(--radius-md); margin-bottom: 1.25rem;">
                        <table class="course-routine-table" style="width: 100%; border-collapse: collapse; font-size: 0.925rem;">
                            <thead>
                                <tr style="background-color: var(--primary-navy); color: #FFFFFF; text-align: left;">
                                    <th style="padding: 0.85rem 1.25rem; font-family: var(--font-heading); width: 28%;">Time / Slot</th>
                                    <th style="padding: 0.85rem 1.25rem; font-family: var(--font-heading);">Activity & Routine</th>
                                </tr>
                            </thead>
                            <tbody id="course-routine-tbody">
                                <?php if (!empty($c['daily_routine'])): ?>
                                    <?php foreach ($c['daily_routine'] as $idx => $slot): ?>
                                    <tr style="border-bottom: 1px solid var(--border-light); <?php echo ($idx % 2 === 1) ? 'background-color: var(--bg-slate);' : ''; ?>">
                                        <td style="padding: 0.85rem 1.25rem; font-weight: 700; color: var(--primary-navy); white-space: nowrap;">
                                             <?php echo htmlspecialchars($slot['time']); ?>
                                        </td>
                                        <td style="padding: 0.85rem 1.25rem; color: var(--text-main);">
                                            <?php echo htmlspecialchars($slot['activity']); ?>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>

                    <div style="background-color: var(--bg-light-blue); border-left: 3px solid var(--accent-gold); padding: 1rem 1.25rem; border-radius: var(--radius-sm); display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 0.75rem;">
                        <div style="font-size: 0.875rem; color: var(--text-main);">
                            <strong>Need offline access or printable sheet?</strong> Download the official PDF timetable document.
                        </div>
                        <?php if (!empty($c['timetable_pdf'])): ?>
                        <a href="<?php echo htmlspecialchars($c['timetable_pdf']); ?>" download class="course-timetable-dl-link" style="color: var(--primary-navy); font-weight: 700; font-size: 0.85rem; text-decoration: underline; display: inline-flex; align-items: center; gap: 0.35rem;">
                            <span>Download PDF Now</span> →
                        </a>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Academic Syllabus & Pedagogy -->
                <div class="course-content-block" style="background: #FFFFFF; border-radius: var(--radius-lg); border: 1px solid var(--border-light); box-shadow: var(--shadow-sm); margin-bottom: 2.5rem;">
                    <h2 style="font-size: 1.75rem; margin-bottom: 1.25rem;">Academic Curriculum & UPSC Module</h2>
                    <p style="color: var(--text-muted); line-height: 1.7; margin-bottom: 1.25rem;">
                        Our teaching methodology combines conceptual depth with rigorous shortcut techniques to maximize marks within the strict UPSC time limits.
                    </p>

                    <div style="display: flex; flex-direction: column; gap: 1rem;">
                        <div style="border: 1px solid var(--border-light); padding: 1.25rem; border-radius: var(--radius-md);">
                            <h4 style="color: var(--primary-navy); margin-bottom: 0.4rem;">1. Mathematics Mastery (Paper I)</h4>
                            <p style="font-size: 0.9rem; color: var(--text-muted);">
                                Algebra, Trigonometry, Matrices & Determinants, Analytical Geometry, Differential & Integral Calculus, Vector Algebra, Statistics and Probability. Daily speed solving drills.
                            </p>
                        </div>
                        <div style="border: 1px solid var(--border-light); padding: 1.25rem; border-radius: var(--radius-md);">
                            <h4 style="color: var(--primary-navy); margin-bottom: 0.4rem;">2. General Ability Test (GAT - Paper II)</h4>
                            <p style="font-size: 0.9rem; color: var(--text-muted);">
                                English Grammar, Vocabulary, Comprehension, Physics, Chemistry, General Science, Indian History, Freedom Movement, Geography, and Defense Current Affairs.
                            </p>
                        </div>
                        <div style="border: 1px solid var(--border-light); padding: 1.25rem; border-radius: var(--radius-md);">
                            <h4 style="color: var(--primary-navy); margin-bottom: 0.4rem;">3. Stage II: SSB Practical Orientation</h4>
                            <p style="font-size: 0.9rem; color: var(--text-muted);">
                                Officer Intelligence Rating (OIR), Picture Perception & Discussion Test (PPDT), GTO tasks on the outdoor campus ground, Psychological assessment (TAT/WAT/SRT), and Personal Interview.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Visual Campus Facilities for Course -->
                <div class="course-content-block" style="background: #FFFFFF; border-radius: var(--radius-lg); border: 1px solid var(--border-light); box-shadow: var(--shadow-sm);">
                    <h2 style="font-size: 1.75rem; margin-bottom: 1rem;">Residential Campus & Military Training Grounds</h2>
                    <?php
                        $facility_img1 = 'assets/images/campus-building-main.jpg';
                        $facility_cap1 = 'Dehradun Defence College 10-Acre Campus & Residential Hostels';
                        
                        $facility_img2 = 'assets/images/classroom-lecture-hall-real.jpg';
                        $facility_cap2 = 'Tiered Smart Lecture Hall With Cadets in Uniform';
                        
                        if (strpos($course_slug, 'girls') !== false) {
                            $facility_img2 = 'assets/images/nda-girls-wing-formation.jpg';
                            $facility_cap2 = 'Dedicated In-House NDA (Girls) Wing Morning Parade Drill';
                        } elseif (strpos($course_slug, 'ssb') !== false) {
                            $facility_img2 = 'assets/images/cadets-parade-assembly.jpg';
                            $facility_cap2 = 'Live SSB GTO Obstacle Course & Cadets Drill Formation';
                        } elseif (strpos($course_slug, 'cds') !== false) {
                            $facility_img2 = 'assets/images/cadets-parade-assembly.jpg';
                            $facility_cap2 = 'Cadets Morning Assembly with Himalayan Foothills Backdrop';
                        }
                    ?>
                    <div class="course-facilities-preview-grid">
                        <div style="border-radius: var(--radius-md); overflow: hidden; border: 1px solid var(--border-light);">
                            <img src="<?php echo $facility_img1; ?>" alt="<?php echo $facility_cap1; ?>" style="width: 100%; height: 200px; object-fit: cover;">
                            <div style="padding: 0.5rem 0.75rem; font-size: 0.8rem; background: var(--bg-slate); color: var(--primary-navy); font-weight: 600;">
                                <?php echo $facility_cap1; ?>
                            </div>
                        </div>
                        <div style="border-radius: var(--radius-md); overflow: hidden; border: 1px solid var(--border-light);">
                            <img src="<?php echo $facility_img2; ?>" alt="<?php echo $facility_cap2; ?>" style="width: 100%; height: 200px; object-fit: cover;">
                            <div style="padding: 0.5rem 0.75rem; font-size: 0.8rem; background: var(--bg-slate); color: var(--primary-navy); font-weight: 600;">
                                <?php echo $facility_cap2; ?>
                            </div>
                        </div>
                    </div>
                    <p style="color: var(--text-muted); line-height: 1.7; margin: 0;">
                        Every enrolled cadet has access to our 100% in-house residential campus with separate boys and girls hostel wings, 4-meal nutritious military mess, outdoor sports grounds, obstacle courses, and resident faculty mentorship in the peaceful Maldevta foothills.
                    </p>
                </div>
            </div>

            <!-- Right Sidebar: Direct Course Registration Form -->
            <aside class="course-sidebar-col">
                <div class="course-sidebar-card">
                    <div class="hero-form-header">
                        <div style="display: flex; align-items: center; justify-content: center; gap: 0.75rem; margin-bottom: 0.85rem; padding-bottom: 0.75rem; border-bottom: 1px solid rgba(212, 175, 55, 0.3);">
                            <img src="assets/images/logo.png" alt="Dehradun Defence College Official Emblem" style="width: 48px; height: 48px; object-fit: contain; filter: drop-shadow(0 2px 6px rgba(11,27,61,0.15)); flex-shrink: 0;">
                            <div style="text-align: left;">
                                <div style="font-size: 1rem; font-weight: 800; color: var(--primary-navy); line-height: 1.2;">Dehradun Defence College</div>
                                <span class="badge-saffron" style="font-size: 0.65rem; padding: 2px 7px; margin-top: 2px; display: inline-block;">★ Online Registration for 2027</span>
                            </div>
                        </div>
                        <span class="badge-saffron">Online Registration for 2027</span>
                        <h3>Register for 2027 Batch</h3>
                        <p>Direct admission guidance & fee breakdown for <strong><?php echo htmlspecialchars($c['title']); ?></strong></p>
                    </div>

                    <form action="send-enquiry.php" method="POST" class="ddc-enquiry-form" novalidate>
                        <input type="text" name="website_url_check" class="hp-field" tabindex="-1" autocomplete="off">
                        <input type="hidden" name="form_start_time" value="<?php echo time(); ?>">

                        <div class="form-status-alert" role="alert"></div>

                        <div class="form-group">
                            <label class="form-label">Full Name *</label>
                            <input type="text" name="full_name" class="form-control" placeholder="Candidate's Name" required>
                            <div class="form-error-feedback"></div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Mobile Number *</label>
                            <input type="tel" name="mobile_number" class="form-control" placeholder="10-digit Mobile" required>
                            <div class="form-error-feedback"></div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Email Address *</label>
                            <input type="email" name="email" class="form-control" placeholder="your.email@example.com" required>
                            <div class="form-error-feedback"></div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Selected Course</label>
                            <select name="course_interest" class="form-control" required>
                                <option value="<?php echo htmlspecialchars($c['title']); ?>" selected><?php echo htmlspecialchars($c['title']); ?></option>
                            </select>
                            <div class="form-error-feedback"></div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Hostel Accommodation Needed?</label>
                            <select name="education_level" class="form-control">
                                <option value="Hostel Accommodation Required">Yes, Need Residential Hostel</option>
                                <option value="Day Scholar (Local Dehradun)">No, Day Scholar (Local Dehradun)</option>
                            </select>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" id="cd_consent" name="privacy_consent" checked required>
                            <label for="cd_consent">I agree to the privacy policy & admissions terms.</label>
                            <div class="form-error-feedback"></div>
                        </div>

                        <button type="submit" class="btn btn-gold btn-course-submit">
                            <span>Submit Registration</span>
                        </button>
                    </form>

                    <div class="course-sidebar-help">
                        <p>Prefer instant WhatsApp assistance?</p>
                        <a href="<?php echo WHATSAPP_LINK; ?>" class="btn btn-primary btn-sm" style="width: 100%;" target="_blank" rel="noopener">
                            <span>Chat With Admission Desk</span>
                        </a>
                    </div>
                </div>

                <!-- Sidebar Timetable Download Card -->
                <?php if (!empty($c['timetable_pdf'])): ?>
                <div id="course-sidebar-timetable-box" class="course-sidebar-timetable">
                    <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.75rem;">
                        <div style="width: 40px; height: 40px; border-radius: 8px; background: rgba(212,175,55,0.2); display: flex; align-items: center; justify-content: center; color: var(--accent-gold); flex-shrink: 0;">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line></svg>
                        </div>
                        <div>
                            <h4 style="color: #FFFFFF; font-size: 1.05rem; margin-bottom: 2px;">Official Timetable</h4>
                            <span style="font-size: 0.75rem; color: var(--accent-gold); font-weight: 700; text-transform: uppercase;">Free PDF Study Plan</span>
                        </div>
                    </div>
                    <p style="font-size: 0.85rem; color: rgba(255,255,255,0.85); margin-bottom: 1rem; line-height: 1.5;">
                        Complete batch timetable, daily study hours, weekly mock test schedule & exam pattern.
                    </p>
                    <a href="<?php echo htmlspecialchars($c['timetable_pdf']); ?>" download class="btn btn-gold btn-sm course-timetable-dl-btn" style="width: 100%; justify-content: center; gap: 0.5rem;">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                        <span>Download Timetable (PDF)</span>
                    </a>
                </div>
                <?php endif; ?>
            </aside>
        </div>
    </section>

    <!-- Client-Side Dynamic Course Loader for Static Hosting -->
    <script id="ddc-courses-data" type="application/json">
    <?php echo json_encode($DDC_COURSES, JSON_HEX_TAG | JSON_HEX_AMP); ?>
    </script>
    <script>
    (function() {
        var params = new URLSearchParams(window.location.search);
        var slug = params.get('course');
        if (!slug) return;
        try {
            var dataEl = document.getElementById('ddc-courses-data');
            if (!dataEl) return;
            var allCourses = JSON.parse(dataEl.textContent);
            if (!allCourses[slug]) return;
            var c = allCourses[slug];

            document.title = c.title + " | Dehradun Defence College";
            document.querySelectorAll('.course-title-dynamic').forEach(function(el) { el.textContent = c.title; });
            document.querySelectorAll('.course-badge-dynamic').forEach(function(el) { el.textContent = c.badge; });
            document.querySelectorAll('.course-desc-dynamic').forEach(function(el) { el.textContent = c.description; });
            document.querySelectorAll('.course-target-dynamic').forEach(function(el) { el.textContent = c.target; });
            document.querySelectorAll('.course-duration-dynamic').forEach(function(el) { el.textContent = c.duration; });
            document.querySelectorAll('.course-eligibility-dynamic').forEach(function(el) { el.textContent = c.eligibility; });

            if (c.timetable_hours) {
                document.querySelectorAll('.course-hours-dynamic').forEach(function(el) { el.textContent = c.timetable_hours; });
            }

            // Update Timetable PDF links
            if (c.timetable_pdf) {
                document.querySelectorAll('.course-timetable-dl-btn, .course-timetable-dl-link').forEach(function(el) {
                    el.setAttribute('href', c.timetable_pdf);
                    el.setAttribute('download', '');
                });
            }

            // Update Routine Table Rows
            var routineTbody = document.getElementById('course-routine-tbody');
            if (routineTbody && c.daily_routine && c.daily_routine.length > 0) {
                routineTbody.innerHTML = '';
                c.daily_routine.forEach(function(slot, idx) {
                    var tr = document.createElement('tr');
                    tr.style.borderBottom = '1px solid var(--border-light)';
                    if (idx % 2 === 1) {
                        tr.style.backgroundColor = 'var(--bg-slate)';
                    }
                    tr.innerHTML = '<td style="padding: 0.85rem 1.25rem; font-weight: 700; color: var(--primary-navy); white-space: nowrap;">' + slot.time + '</td><td style="padding: 0.85rem 1.25rem; color: var(--text-main);">' + slot.activity + '</td>';
                    routineTbody.appendChild(tr);
                });
            }

            var featUl = document.getElementById('course-features-list');
            if (featUl && c.features) {
                featUl.innerHTML = '';
                c.features.forEach(function(f) {
                    var li = document.createElement('li');
                    li.style.cssText = 'display: flex; align-items: center; gap: 0.75rem; font-size: 0.95rem;';
                    li.innerHTML = '<svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" style="color: var(--tricolor-green); flex-shrink: 0;"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg><span>' + f + '</span>';
                    featUl.appendChild(li);
                });
            }

            var selectEl = document.querySelector('select[name="course_interest"]');
            if (selectEl) {
                selectEl.innerHTML = '<option value="' + c.title + '" selected>' + c.title + '</option>';
            }
        } catch(e) {
            console.error('Course dynamic update error:', e);
        }
    })();
    </script>

<?php include __DIR__ . '/includes/footer.php'; ?>
