<?php
/**
 * Our Career Advisors Team - Dehradun Defence College
 * Dedicated Career Advisory & Admissions Counseling Showcase
 */
require_once __DIR__ . '/config.php';

$page_title = 'Our Career Advisors Team | Dehradun Defence College';
$page_desc = 'Meet our dedicated Career Advisors at Dehradun Defence College. Get expert 1-on-1 counseling from Senior Career Advisor Gouri Sharma for NDA Foundation, NDA Girls Wing, CDS, and SSB interview guidance.';
$page_keywords = 'Career Advisor Dehradun Defence College, Gouri Sharma Career Advisor, NDA Career Counseling Dehradun, Defence Admission Guidance, DDC Career Advisors Team';
$current_page = 'career-advisors';

include __DIR__ . '/includes/header.php';

$advisor = $DDC_CAREER_ADVISORS[0] ?? [
    'name'        => 'Gouri Sharma',
    'role'        => 'Senior Career Advisor & Admissions Specialist',
    'badge'       => 'Chief Career Counselor • DDC Admissions Wing',
    'photo'       => 'assets/images/career-advisor-gouri-sharma.jpg',
    'experience'  => 'Senior Defence Career & Admission Advisor',
    'education'   => 'Academic Career Guidance & Counseling Specialist',
    'quote'       => 'Every defence aspirant carries unique potential. Our mission as career advisors is to craft the exact academic, physical, and strategic roadmap that turns your dream of donning the uniform into reality.',
    'bio'         => 'Gouri Sharma is a dedicated Senior Career Advisor at Dehradun Defence College, specializing in mentoring aspiring defence candidates and their parents through the competitive pathways of NDA, CDS, AFCAT, and SSB. With deep insight into UPSC examination patterns, age eligibility criteria, physical fitness benchmarks, and integrated schooling programs, she provides personalized 1-on-1 counseling to help students choose the optimal preparation track and achieve their dream of serving the nation as commissioned officers.',
    'specialties' => [
        'NDA Foundation (Class 11 & 12 Schooling + Defence)',
        'NDA (Girls) Special Wing Admissions & Support',
        'NDA Target / Dropper Batch Strategic Planning',
        'CDS & AFCAT Graduate Entry Pathway Guidance',
        'SSB Interview Mentorship & Psychological Overview',
        'Residential Campus, Hostel & Parent Counseling',
        'Veer Nari & Merit Scholarship Assistance'
    ]
];
?>

    <!-- Page Hero Banner -->
    <section class="page-hero" style="background: linear-gradient(135deg, rgba(11,27,61,0.95), rgba(22,43,86,0.88)), url('assets/images/campus-building-main.jpg') center/cover no-repeat; padding: 4.75rem 0 3.75rem 0; color: #FFFFFF; text-align: center;">
        <div class="container">
            <span class="badge-gold" style="margin-bottom: 0.85rem; display: inline-flex; align-items: center; gap: 0.4rem;">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                Personalized Defence Guidance &amp; Mentorship
            </span>
            <h1 style="font-size: clamp(2rem, 3.5vw, 2.85rem); color: #FFFFFF; margin-bottom: 0.85rem; font-family: var(--font-heading); font-weight: 800;">
                Our Career Advisors Team
            </h1>
            <p style="font-size: clamp(1rem, 1.2vw, 1.15rem); max-width: 800px; margin: 0 auto; color: rgba(255,255,255,0.88); line-height: 1.7;">
                Steering your path to the Armed Forces. Get personalized 1-on-1 career mapping, eligibility analysis, course selection, and residential hostel guidance from our dedicated career counseling wing.
            </p>
            <div style="display: flex; justify-content: center; gap: 0.75rem; margin-top: 1.5rem; font-size: 0.9rem; font-weight: 500;">
                <a href="index.php" style="color: var(--accent-gold);">Home</a>
                <span style="color: rgba(255,255,255,0.4);">/</span>
                <a href="about.php" style="color: var(--accent-gold);">About Us</a>
                <span style="color: rgba(255,255,255,0.4);">/</span>
                <span style="color: #FFFFFF;">Career Advisors</span>
            </div>
        </div>
    </section>

    <!-- Main Advisor Profile Section -->
    <section class="section-padding bg-slate" id="career-advisors-team">
        <div class="container">

            <div class="section-header" style="text-align: center; max-width: 820px; margin: 0 auto 3rem auto;">
                <span class="badge-saffron">Admissions &amp; Career Guidance Wing</span>
                <h2 style="margin-top: 0.5rem;">Senior Career Advisor &amp; Counselor</h2>
                <div class="gold-divider" style="margin: 0.85rem auto;"></div>
                <p style="color: var(--text-muted); font-size: 1.05rem;">
                    Deciding the right defence entrance pathway after 10th, 12th, or Graduation requires tailored guidance. Meet our Senior Career Advisor dedicated to steering students and parents towards informed, confident decisions.
                </p>
            </div>

            <?php foreach ($DDC_CAREER_ADVISORS as $idx => $advisor): ?>
            <!-- Advisor Card: <?php echo htmlspecialchars($advisor['name']); ?> -->
            <div class="advisor-card-featured" style="background: #FFFFFF; border-radius: var(--radius-lg); border: 2px solid var(--accent-gold); box-shadow: 0 16px 40px -10px rgba(11, 27, 61, 0.12); overflow: hidden; margin-bottom: 3.5rem;">
                <div class="advisor-grid" style="display: grid; grid-template-columns: 340px 1fr; align-items: stretch;">
                    
                    <!-- Left Column: Portrait & Quick CTAs -->
                    <div class="advisor-sidebar" style="background: linear-gradient(180deg, #F8FAFC 0%, #EFF6FF 100%); padding: 2.5rem 2rem; text-align: center; border-right: 1px solid var(--border-light); display: flex; flex-direction: column; align-items: center; justify-content: center;">
                        <div class="advisor-photo-wrap" style="position: relative; width: 230px; height: 280px; margin: 0 auto 1.25rem auto; border-radius: var(--radius-md); overflow: hidden; border: 4px solid var(--accent-gold); box-shadow: 0 10px 28px rgba(11, 27, 61, 0.2);">
                            <img src="<?php echo htmlspecialchars($advisor['photo']); ?>" alt="<?php echo htmlspecialchars($advisor['name']); ?> - <?php echo htmlspecialchars($advisor['role']); ?>" class="advisor-photo" style="width: 100%; height: 100%; object-fit: cover; object-position: <?php echo htmlspecialchars($advisor['photo_position'] ?? 'center top'); ?>;">
                        </div>

                        <span style="display: inline-block; background-color: var(--primary-navy); color: #FFFFFF; font-size: 0.75rem; font-weight: 700; padding: 0.3rem 0.85rem; border-radius: 20px; border: 1.5px solid var(--accent-gold); margin-bottom: 0.65rem; box-shadow: var(--shadow-sm); letter-spacing: 0.3px;">
                            ★ <?php echo htmlspecialchars($advisor['badge_tag'] ?? 'Career Advisor'); ?>
                        </span>

                        <h3 style="font-size: 1.5rem; color: var(--primary-navy); margin-bottom: 0.25rem; font-family: var(--font-heading); font-weight: 800;">
                            <?php echo htmlspecialchars($advisor['name']); ?>
                        </h3>
                        <p style="color: var(--accent-gold-hover); font-weight: 700; font-size: 0.9rem; margin-bottom: 0.35rem;">
                            <?php echo htmlspecialchars($advisor['role']); ?>
                        </p>
                        <p style="font-size: 0.825rem; color: var(--text-muted); margin-bottom: 1.25rem;">
                            Dehradun Defence College Admissions Wing
                        </p>

                        <div style="background: rgba(11,27,61,0.05); border-radius: var(--radius-sm); padding: 0.65rem 0.85rem; width: 100%; margin-bottom: 1.25rem; font-size: 0.825rem; color: var(--text-dark);">
                            <div style="display: flex; align-items: center; justify-content: center; gap: 0.4rem; color: #16a34a; font-weight: 700; margin-bottom: 0.25rem;">
                                <span style="display: inline-block; width: 8px; height: 8px; border-radius: 50%; background: #16a34a; box-shadow: 0 0 6px #16a34a;"></span>
                                Available for 1-on-1 Counseling
                            </div>
                            <span style="color: var(--text-muted); font-size: 0.78rem;">Mon - Sun: 8:00 AM - 6:00 PM</span>
                        </div>

                        <!-- Direct Contact CTAs -->
                        <div style="display: flex; flex-direction: column; gap: 0.65rem; width: 100%;">
                            <a href="tel:<?php echo CONTACT_PHONE_1_RAW; ?>" class="btn btn-primary btn-sm" style="width: 100%; justify-content: center; gap: 0.5rem; padding: 0.65rem 1rem;">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                <span>Call: <?php echo CONTACT_PHONE_1; ?></span>
                            </a>
                            <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=<?php echo urlencode('Hello ' . $advisor['name'] . ', I would like to seek career guidance for NDA/defence exams at Dehradun Defence College.'); ?>" target="_blank" rel="noopener" class="btn btn-outline-navy btn-sm" style="width: 100%; justify-content: center; gap: 0.5rem; padding: 0.65rem 1rem; color: #16a34a; border-color: #16a34a;">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
                                <span>Chat on WhatsApp</span>
                            </a>
                        </div>
                    </div>

                    <!-- Right Column: Advisory Philosophy, Bio & Domains -->
                    <div class="advisor-content" style="padding: 2.75rem 2.5rem; display: flex; flex-direction: column; justify-content: center;">
                        <span class="badge-gold" style="align-self: flex-start; margin-bottom: 0.75rem;">
                            ★ Personalized 1-on-1 Mentorship
                        </span>

                        <h3 style="font-size: clamp(1.4rem, 2vw, 1.85rem); color: var(--primary-navy); margin-bottom: 0.75rem; font-family: var(--font-heading);">
                            <?php echo ($idx === 0) ? 'Guiding Every Cadet Towards the Uniform' : 'Empowering Defence Aspirants &amp; Parents'; ?>
                        </h3>

                        <!-- Quote Banner -->
                        <div style="background: rgba(212, 175, 55, 0.08); border-left: 4px solid var(--accent-gold); padding: 1.15rem 1.35rem; border-radius: var(--radius-sm); margin-bottom: 1.35rem;">
                            <p style="font-size: 1.05rem; font-style: italic; color: var(--primary-navy); margin: 0; line-height: 1.65;">
                                “<?php echo htmlspecialchars($advisor['quote']); ?>”
                            </p>
                        </div>

                        <!-- Bio Narrative -->
                        <p style="font-size: 0.985rem; line-height: 1.75; color: var(--text-dark); margin-bottom: 1rem;">
                            <?php echo htmlspecialchars($advisor['bio']); ?>
                        </p>
                        <p style="font-size: 0.965rem; line-height: 1.75; color: var(--text-muted); margin-bottom: 1.5rem;">
                            At Dehradun Defence College, we believe that academic readiness must be accompanied by emotional clarity and strong discipline. Whether a student is transitioning after 10th into Senior Secondary CBSE schooling, preparing for a drop year after 12th, or planning SSB preparation, our career guidance desk provides transparent, realistic counseling that helps parents and students make the best choices with complete peace of mind.
                        </p>

                        <!-- Key Guidance Areas / Specialties -->
                        <h4 style="font-size: 1.05rem; color: var(--primary-navy); margin-bottom: 0.75rem; display: flex; align-items: center; gap: 0.4rem;">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--accent-gold-hover)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            Key Counseling &amp; Admission Roadmaps Mastered:
                        </h4>

                        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(260px, 1fr)); gap: 0.65rem; margin-bottom: 2rem;">
                            <?php foreach ($advisor['specialties'] as $spec): ?>
                                <div style="background: rgba(11, 27, 61, 0.03); border: 1px solid rgba(11, 27, 61, 0.08); border-left: 3px solid var(--accent-gold); border-radius: var(--radius-sm); padding: 0.55rem 0.85rem; font-size: 0.865rem; font-weight: 600; color: var(--primary-navy); display: flex; align-items: center; gap: 0.45rem;">
                                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                    <span><?php echo htmlspecialchars($spec); ?></span>
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <!-- Action Buttons -->
                        <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                            <button type="button" class="btn btn-gold btn-md open-enquiry-modal" data-course="Career Guidance with <?php echo htmlspecialchars($advisor['name']); ?>" style="box-shadow: 0 4px 14px rgba(212, 175, 55, 0.35);">
                                <span>Book 1-on-1 Counseling with <?php echo htmlspecialchars($advisor['name']); ?></span>
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </button>
                            <a href="gallery.php" class="btn btn-outline-navy btn-md">
                                <span>Explore College Activity &amp; Campus</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>

            <!-- 4-Step Career Advisory Roadmap -->
            <div style="margin-top: 4.5rem;">
                <div class="section-header" style="text-align: center; max-width: 780px; margin: 0 auto 3rem auto;">
                    <span class="badge-gold">Structured Pathway</span>
                    <h2>How Our Career Counseling Works</h2>
                    <div class="gold-divider" style="margin: 0.85rem auto;"></div>
                    <p style="color: var(--text-muted); font-size: 1.05rem;">
                        A step-by-step approach ensuring transparent analysis, personalized batch allotment, and seamless hostel onboarding.
                    </p>
                </div>

                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 1.5rem;">
                    
                    <!-- Step 1 -->
                    <div style="background: #FFFFFF; border-radius: var(--radius-md); padding: 2rem 1.5rem; border: 1px solid var(--border-light); box-shadow: var(--shadow-sm); text-align: center; position: relative;">
                        <div style="width: 52px; height: 52px; border-radius: 50%; background: linear-gradient(135deg, var(--primary-navy), #162B56); color: var(--accent-gold); display: flex; align-items: center; justify-content: center; font-size: 1.35rem; font-weight: 800; margin: 0 auto 1.25rem auto; border: 2px solid var(--accent-gold);">
                            1
                        </div>
                        <h4 style="font-size: 1.15rem; color: var(--primary-navy); margin-bottom: 0.65rem;">Profile &amp; Eligibility Evaluation</h4>
                        <p style="color: var(--text-muted); font-size: 0.885rem; line-height: 1.65;">
                            We evaluate the student's age, academic marks, board syllabus, physical standards, and target UPSC examination notifications (NDA, CDS, AFCAT).
                        </p>
                    </div>

                    <!-- Step 2 -->
                    <div style="background: #FFFFFF; border-radius: var(--radius-md); padding: 2rem 1.5rem; border: 1px solid var(--border-light); box-shadow: var(--shadow-sm); text-align: center; position: relative;">
                        <div style="width: 52px; height: 52px; border-radius: 50%; background: linear-gradient(135deg, var(--primary-navy), #162B56); color: var(--accent-gold); display: flex; align-items: center; justify-content: center; font-size: 1.35rem; font-weight: 800; margin: 0 auto 1.25rem auto; border: 2px solid var(--accent-gold);">
                            2
                        </div>
                        <h4 style="font-size: 1.15rem; color: var(--primary-navy); margin-bottom: 0.65rem;">Customized Course Recommendation</h4>
                        <p style="color: var(--text-muted); font-size: 0.885rem; line-height: 1.65;">
                            Selecting between 2-Year NDA Foundation (11th-12th CBSE Schooling), 1-Year Dropper Target Batch, or SSB Practical Boot Camp based on candidate aptitude.
                        </p>
                    </div>

                    <!-- Step 3 -->
                    <div style="background: #FFFFFF; border-radius: var(--radius-md); padding: 2rem 1.5rem; border: 1px solid var(--border-light); box-shadow: var(--shadow-sm); text-align: center; position: relative;">
                        <div style="width: 52px; height: 52px; border-radius: 50%; background: linear-gradient(135deg, var(--primary-navy), #162B56); color: var(--accent-gold); display: flex; align-items: center; justify-content: center; font-size: 1.35rem; font-weight: 800; margin: 0 auto 1.25rem auto; border: 2px solid var(--accent-gold);">
                            3
                        </div>
                        <h4 style="font-size: 1.15rem; color: var(--primary-navy); margin-bottom: 0.65rem;">Hostel &amp; Campus Tour</h4>
                        <p style="color: var(--text-muted); font-size: 0.885rem; line-height: 1.65;">
                            Guiding outstation parents through separate boys &amp; girls residential wings, 4-meal hygienic mess, biometric security, and full GTO obstacle grounds in Maldevta.
                        </p>
                    </div>

                    <!-- Step 4 -->
                    <div style="background: #FFFFFF; border-radius: var(--radius-md); padding: 2rem 1.5rem; border: 1px solid var(--border-light); box-shadow: var(--shadow-sm); text-align: center; position: relative;">
                        <div style="width: 52px; height: 52px; border-radius: 50%; background: linear-gradient(135deg, var(--primary-navy), #162B56); color: var(--accent-gold); display: flex; align-items: center; justify-content: center; font-size: 1.35rem; font-weight: 800; margin: 0 auto 1.25rem auto; border: 2px solid var(--accent-gold);">
                            4
                        </div>
                        <h4 style="font-size: 1.15rem; color: var(--primary-navy); margin-bottom: 0.65rem;">Enrollment &amp; Mentor Handover</h4>
                        <p style="color: var(--text-muted); font-size: 0.885rem; line-height: 1.65;">
                            Seamless fee documentation, uniform kit allotment, study material dispatch, and introduction to senior academic faculty and ex-defence assessors.
                        </p>
                    </div>

                </div>
            </div>

            <!-- Why Consult Career Advisors Section -->
            <div style="margin-top: 4.5rem; background: #FFFFFF; border-radius: var(--radius-lg); padding: 3rem 2.5rem; border: 1px solid var(--border-light); box-shadow: var(--shadow-sm);">
                <div style="text-align: center; max-width: 750px; margin: 0 auto 2.5rem auto;">
                    <span class="badge-navy">Parent &amp; Student Assurance</span>
                    <h2 style="font-size: 1.85rem; color: var(--primary-navy); margin-top: 0.5rem;">Why Parents Trust Our Career Counseling</h2>
                    <div class="gold-divider" style="margin: 0.75rem auto;"></div>
                </div>

                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.75rem;">
                    
                    <div style="display: flex; gap: 1rem; align-items: flex-start;">
                        <div style="width: 44px; height: 44px; border-radius: var(--radius-sm); background: rgba(212, 175, 55, 0.15); color: var(--accent-gold-hover); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                        </div>
                        <div>
                            <h4 style="font-size: 1.1rem; color: var(--primary-navy); margin-bottom: 0.35rem;">Zero-Pressure Honest Guidance</h4>
                            <p style="font-size: 0.875rem; color: var(--text-muted); line-height: 1.6;">
                                We never force enrollments. If a candidate is better suited for a 1-year foundation or direct graduation route, our advisors provide honest, objective advice.
                            </p>
                        </div>
                    </div>

                    <div style="display: flex; gap: 1rem; align-items: flex-start;">
                        <div style="width: 44px; height: 44px; border-radius: var(--radius-sm); background: rgba(34, 197, 94, 0.15); color: #16a34a; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                        </div>
                        <div>
                            <h4 style="font-size: 1.1rem; color: var(--primary-navy); margin-bottom: 0.35rem;">Special Girls Wing Advisory</h4>
                            <p style="font-size: 0.875rem; color: var(--text-muted); line-height: 1.6;">
                                Dedicated support for female NDA &amp; MNS aspirants and their families, addressing boarding safety, daily routines, physical conditioning, and warden care.
                            </p>
                        </div>
                    </div>

                    <div style="display: flex; gap: 1rem; align-items: flex-start;">
                        <div style="width: 44px; height: 44px; border-radius: var(--radius-sm); background: rgba(255, 119, 34, 0.15); color: var(--tricolor-saffron); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                        </div>
                        <div>
                            <h4 style="font-size: 1.1rem; color: var(--primary-navy); margin-bottom: 0.35rem;">Eligibility &amp; Age-Cutoff Clarity</h4>
                            <p style="font-size: 0.875rem; color: var(--text-muted); line-height: 1.6;">
                                Calculating exact UPSC attempt counts based on date of birth to maximize the candidate's chances before reaching the upper age threshold.
                            </p>
                        </div>
                    </div>

                    <div style="display: flex; gap: 1rem; align-items: flex-start;">
                        <div style="width: 44px; height: 44px; border-radius: var(--radius-sm); background: rgba(59, 130, 246, 0.15); color: #2563eb; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                        </div>
                        <div>
                            <h4 style="font-size: 1.1rem; color: var(--primary-navy); margin-bottom: 0.35rem;">Campus &amp; Hostel Visit Booking</h4>
                            <p style="font-size: 0.875rem; color: var(--text-muted); line-height: 1.6;">
                                Schedule an on-campus meeting with Gouri Sharma and the leadership team, with guided tours of classrooms, obstacle grounds, and hostels.
                            </p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Direct Career Consultation Form -->
            <div style="margin-top: 4.5rem; background: linear-gradient(135deg, var(--primary-navy) 0%, #162B56 100%); border-radius: var(--radius-lg); padding: 3.5rem 2.5rem; color: #FFFFFF; position: relative; overflow: hidden;">
                <div style="position: absolute; top: -50px; right: -50px; width: 220px; height: 220px; border-radius: 50%; background: rgba(212, 175, 55, 0.1); pointer-events: none;"></div>
                
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: center;" class="advisor-form-grid">
                    <div>
                        <span class="badge-gold" style="margin-bottom: 0.75rem; display: inline-block;">Instant Callback</span>
                        <h2 style="color: #FFFFFF; font-size: clamp(1.8rem, 2.5vw, 2.4rem); margin-bottom: 1rem; font-family: var(--font-heading);">
                            Request a 1-on-1 Session with Career Advisor Gouri Sharma
                        </h2>
                        <p style="color: rgba(255,255,255,0.85); font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">
                            Fill in your basic information and our Senior Career Advisor will connect with you via phone or WhatsApp within 30 minutes to understand your aspirations and chart your roadmap.
                        </p>
                        
                        <div style="display: flex; flex-direction: column; gap: 0.85rem;">
                            <div style="display: flex; align-items: center; gap: 0.75rem; color: rgba(255,255,255,0.95); font-size: 0.95rem;">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--accent-gold)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                <span>Direct guidance on Class 11-12 NDA Foundation admission</span>
                            </div>
                            <div style="display: flex; align-items: center; gap: 0.75rem; color: rgba(255,255,255,0.95); font-size: 0.95rem;">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--accent-gold)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                <span>Fee structure, installments &amp; scholarship options explained</span>
                            </div>
                            <div style="display: flex; align-items: center; gap: 0.75rem; color: rgba(255,255,255,0.95); font-size: 0.95rem;">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--accent-gold)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                <span>Assistance with hostel bookings &amp; travel logistics from railway/airport</span>
                            </div>
                        </div>
                    </div>

                    <!-- Embedded Form -->
                    <div style="background: #FFFFFF; border-radius: var(--radius-md); padding: 2.25rem 2rem; color: var(--text-dark); box-shadow: var(--shadow-lg);">
                        <h3 style="font-size: 1.35rem; color: var(--primary-navy); margin-bottom: 0.25rem; font-family: var(--font-heading);">
                            Book Career Counseling
                        </h3>
                        <p style="font-size: 0.85rem; color: var(--text-muted); margin-bottom: 1.25rem;">
                            Speak directly with Senior Career Advisor Gouri Sharma
                        </p>

                        <form action="send-enquiry.php" method="POST" class="career-advisor-enquiry-form ddc-enquiry-form" novalidate>
                            <input type="text" name="website_url_check" class="hp-field" tabindex="-1" autocomplete="off">
                            <input type="hidden" name="form_start_time" value="<?php echo time(); ?>">
                            <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($_SESSION['csrf_token'] ?? ''); ?>">
                            <input type="hidden" name="form_source" value="Career Advisors Page - Gouri Sharma">

                            <div class="form-status-alert" role="alert"></div>

                            <div class="form-group" style="margin-bottom: 0.85rem;">
                                <label style="display: block; font-size: 0.825rem; font-weight: 700; color: var(--primary-navy); margin-bottom: 0.25rem;">Student / Candidate Name *</label>
                                <input type="text" name="full_name" required placeholder="Enter student's full name" style="width: 100%; padding: 0.65rem 0.85rem; border: 1px solid var(--border-light); border-radius: var(--radius-sm); font-size: 0.9rem;">
                                <div class="form-error-feedback"></div>
                            </div>

                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 0.75rem; margin-bottom: 0.85rem;">
                                <div class="form-group">
                                    <label style="display: block; font-size: 0.825rem; font-weight: 700; color: var(--primary-navy); margin-bottom: 0.25rem;">Mobile Number *</label>
                                    <input type="tel" name="mobile_number" required placeholder="10-digit number" style="width: 100%; padding: 0.65rem 0.85rem; border: 1px solid var(--border-light); border-radius: var(--radius-sm); font-size: 0.9rem;">
                                    <div class="form-error-feedback"></div>
                                </div>
                                <div class="form-group">
                                    <label style="display: block; font-size: 0.825rem; font-weight: 700; color: var(--primary-navy); margin-bottom: 0.25rem;">Target Course *</label>
                                    <select name="course_interest" required style="width: 100%; padding: 0.65rem 0.85rem; border: 1px solid var(--border-light); border-radius: var(--radius-sm); font-size: 0.9rem; background: #FFF;">
                                        <option value="NDA Foundation (After 10th)">NDA Foundation (After 10th)</option>
                                        <option value="NDA Girls Special Wing">NDA (Girls) Special Wing</option>
                                        <option value="NDA Target Batch (After 12th)">NDA Target Batch (After 12th)</option>
                                        <option value="CDS / OTA Coaching">CDS / OTA Coaching</option>
                                        <option value="AFCAT Exam Preparation">AFCAT Exam Preparation</option>
                                        <option value="SSB 14-Day Practical Boot Camp">SSB 14-Day Practical Camp</option>
                                        <option value="MNS Military Nursing">MNS Military Nursing</option>
                                        <option value="RIMC / Sainik School">RIMC / Sainik School</option>
                                    </select>
                                    <div class="form-error-feedback"></div>
                                </div>
                            </div>

                            <div class="form-group" style="margin-bottom: 1.25rem;">
                                <label style="display: block; font-size: 0.825rem; font-weight: 700; color: var(--primary-navy); margin-bottom: 0.25rem;">State / Current Class or Qualification</label>
                                <input type="text" name="city_qualification" placeholder="e.g. Class 10th appearing, Uttar Pradesh" style="width: 100%; padding: 0.65rem 0.85rem; border: 1px solid var(--border-light); border-radius: var(--radius-sm); font-size: 0.9rem;">
                                <div class="form-error-feedback"></div>
                            </div>

                            <button type="submit" class="btn btn-gold btn-md" style="width: 100%; justify-content: center; font-weight: 800; font-size: 0.95rem; box-shadow: 0 4px 12px rgba(212, 175, 55, 0.4);">
                                <span>Request Free Counseling Call</span>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- College Activity & Campus Life Banner -->
            <div style="margin-top: 4rem; text-align: center; background: #FFFFFF; border-radius: var(--radius-md); padding: 2.5rem; border: 1px solid var(--border-light);">
                <span class="badge-gold">Campus Life &amp; Cadets Routine</span>
                <h3 style="font-size: 1.6rem; color: var(--primary-navy); margin: 0.5rem 0 0.75rem 0;">
                    Experience Daily Cadet Routine in the Foothills of Maldevta
                </h3>
                <p style="color: var(--text-muted); max-width: 680px; margin: 0 auto 1.5rem auto; font-size: 0.95rem;">
                    From early morning physical endurance runs and obstacle clearing to smart digital classrooms and parade ground drill, see our cadets in action.
                </p>
                <div style="display: flex; justify-content: center; gap: 1rem; flex-wrap: wrap;">
                    <a href="gallery.php" class="btn btn-primary btn-md">
                        <span>View College Activity &amp; Photo Gallery</span>
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </a>
                    <button type="button" class="btn btn-outline-navy btn-md open-enquiry-modal" data-course="Schedule Campus Tour">
                        <span>Schedule Campus Tour</span>
                    </button>
                </div>
            </div>

        </div>
    </section>

<?php
include __DIR__ . '/includes/footer.php';
?>
