<?php
/**
 * Template Name: Career Advisors Page
 * 
 * @package Dehradun_Defence_College
 */

get_header();

$theme_uri = get_template_directory_uri();
?>

    <!-- Page Hero Banner -->
    <section class="page-hero" style="background: linear-gradient(135deg, rgba(11,27,61,0.95), rgba(22,43,86,0.88)), url('<?php echo esc_url($theme_uri . '/assets/images/campus-building-main.jpg'); ?>') center/cover no-repeat; padding: 4.75rem 0 3.75rem 0; color: #FFFFFF; text-align: center;">
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
                <a href="<?php echo esc_url(home_url('/')); ?>" style="color: var(--accent-gold);">Home</a>
                <span style="color: rgba(255,255,255,0.4);">/</span>
                <a href="<?php echo esc_url(home_url('/about/')); ?>" style="color: var(--accent-gold);">About Us</a>
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

            <!-- Featured Advisor Card: Gouri Sharma -->
            <div class="advisor-card-featured" style="background: #FFFFFF; border-radius: var(--radius-lg); border: 2px solid var(--accent-gold); box-shadow: 0 16px 40px -10px rgba(11, 27, 61, 0.12); overflow: hidden; margin-bottom: 3.5rem;">
                <div class="advisor-grid" style="display: grid; grid-template-columns: 340px 1fr; align-items: stretch;">
                    
                    <!-- Left Column: Portrait & Quick CTAs -->
                    <div class="advisor-sidebar" style="background: linear-gradient(180deg, #F8FAFC 0%, #EFF6FF 100%); padding: 2.5rem 2rem; text-align: center; border-right: 1px solid var(--border-light); display: flex; flex-direction: column; align-items: center; justify-content: center;">
                        <div class="advisor-photo-wrap" style="position: relative; width: 230px; height: 280px; margin: 0 auto 1.5rem auto; border-radius: var(--radius-md); overflow: hidden; border: 4px solid var(--accent-gold); box-shadow: 0 10px 28px rgba(11, 27, 61, 0.2);">
                            <img src="<?php echo esc_url($theme_uri . '/assets/images/career-advisor-gouri-sharma.jpg'); ?>" alt="Gouri Sharma - Senior Career Advisor" class="advisor-photo" style="width: 100%; height: 100%; object-fit: cover; object-position: top center;">
                            <span class="badge-navy" style="position: absolute; bottom: 8px; left: 50%; transform: translateX(-50%); font-size: 0.75rem; padding: 0.3rem 0.75rem; white-space: nowrap; box-shadow: var(--shadow-sm);">
                                Career Advisor
                            </span>
                        </div>

                        <h3 style="font-size: 1.5rem; color: var(--primary-navy); margin-bottom: 0.25rem; font-family: var(--font-heading); font-weight: 800;">
                            Gouri Sharma
                        </h3>
                        <p style="color: var(--accent-gold-hover); font-weight: 700; font-size: 0.9rem; margin-bottom: 0.35rem;">
                            Senior Career Advisor
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
                            <a href="tel:+919719104024" class="btn btn-primary btn-sm" style="width: 100%; justify-content: center; gap: 0.5rem; padding: 0.65rem 1rem;">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                <span>Call: +91 9719104024</span>
                            </a>
                            <a href="https://wa.me/919719104024?text=<?php echo urlencode('Hello Gouri Ma\'am, I would like to seek career guidance for NDA/defence exams at Dehradun Defence College.'); ?>" target="_blank" rel="noopener" class="btn btn-outline-navy btn-sm" style="width: 100%; justify-content: center; gap: 0.5rem; padding: 0.65rem 1rem; color: #16a34a; border-color: #16a34a;">
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
                            Guiding Every Cadet Towards the Uniform
                        </h3>

                        <!-- Quote Banner -->
                        <div style="background: rgba(212, 175, 55, 0.08); border-left: 4px solid var(--accent-gold); padding: 1.15rem 1.35rem; border-radius: var(--radius-sm); margin-bottom: 1.35rem;">
                            <p style="font-size: 1.05rem; font-style: italic; color: var(--primary-navy); margin: 0; line-height: 1.65;">
                                “Every defence aspirant carries unique potential. Our mission as career advisors is to craft the exact academic, physical, and strategic roadmap that turns your dream of donning the uniform into reality.”
                            </p>
                        </div>

                        <!-- Bio Narrative -->
                        <p style="font-size: 0.985rem; line-height: 1.75; color: var(--text-dark); margin-bottom: 1rem;">
                            Gouri Sharma is a dedicated Senior Career Advisor at Dehradun Defence College, specializing in mentoring aspiring defence candidates and their parents through the competitive pathways of NDA, CDS, AFCAT, and SSB. With deep insight into UPSC examination patterns, age eligibility criteria, physical fitness benchmarks, and integrated schooling programs, she provides personalized 1-on-1 counseling to help students choose the optimal preparation track and achieve their dream of serving the nation as commissioned officers.
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
                            <div style="background: rgba(11, 27, 61, 0.03); border: 1px solid rgba(11, 27, 61, 0.08); border-left: 3px solid var(--accent-gold); border-radius: var(--radius-sm); padding: 0.55rem 0.85rem; font-size: 0.865rem; font-weight: 600; color: var(--primary-navy); display: flex; align-items: center; gap: 0.45rem;">
                                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                <span>NDA Foundation (Class 11 &amp; 12 Schooling + Defence)</span>
                            </div>
                            <div style="background: rgba(11, 27, 61, 0.03); border: 1px solid rgba(11, 27, 61, 0.08); border-left: 3px solid var(--accent-gold); border-radius: var(--radius-sm); padding: 0.55rem 0.85rem; font-size: 0.865rem; font-weight: 600; color: var(--primary-navy); display: flex; align-items: center; gap: 0.45rem;">
                                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                <span>NDA (Girls) Special Wing Admissions &amp; Support</span>
                            </div>
                            <div style="background: rgba(11, 27, 61, 0.03); border: 1px solid rgba(11, 27, 61, 0.08); border-left: 3px solid var(--accent-gold); border-radius: var(--radius-sm); padding: 0.55rem 0.85rem; font-size: 0.865rem; font-weight: 600; color: var(--primary-navy); display: flex; align-items: center; gap: 0.45rem;">
                                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                <span>NDA Target / Dropper Batch Strategic Planning</span>
                            </div>
                            <div style="background: rgba(11, 27, 61, 0.03); border: 1px solid rgba(11, 27, 61, 0.08); border-left: 3px solid var(--accent-gold); border-radius: var(--radius-sm); padding: 0.55rem 0.85rem; font-size: 0.865rem; font-weight: 600; color: var(--primary-navy); display: flex; align-items: center; gap: 0.45rem;">
                                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                <span>CDS &amp; AFCAT Graduate Entry Pathway Guidance</span>
                            </div>
                            <div style="background: rgba(11, 27, 61, 0.03); border: 1px solid rgba(11, 27, 61, 0.08); border-left: 3px solid var(--accent-gold); border-radius: var(--radius-sm); padding: 0.55rem 0.85rem; font-size: 0.865rem; font-weight: 600; color: var(--primary-navy); display: flex; align-items: center; gap: 0.45rem;">
                                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                <span>SSB Interview Mentorship &amp; Psychological Overview</span>
                            </div>
                            <div style="background: rgba(11, 27, 61, 0.03); border: 1px solid rgba(11, 27, 61, 0.08); border-left: 3px solid var(--accent-gold); border-radius: var(--radius-sm); padding: 0.55rem 0.85rem; font-size: 0.865rem; font-weight: 600; color: var(--primary-navy); display: flex; align-items: center; gap: 0.45rem;">
                                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                <span>Residential Campus, Hostel &amp; Parent Counseling</span>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                            <button type="button" class="btn btn-gold btn-md open-enquiry-modal" data-course="Career Guidance with Gouri Sharma" style="box-shadow: 0 4px 14px rgba(212, 175, 55, 0.35);">
                                <span>Book 1-on-1 Counseling Session</span>
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </button>
                            <a href="<?php echo esc_url(home_url('/gallery/')); ?>" class="btn btn-outline-navy btn-md">
                                <span>Explore College Activity &amp; Campus</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

<?php
get_footer();
