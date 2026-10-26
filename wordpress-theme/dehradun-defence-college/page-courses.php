<?php
/**
 * Template Name: Courses Catalog Page
 * 
 * @package Dehradun_Defence_College
 */

get_header();

$theme_uri = get_template_directory_uri();
?>

    <section class="section-padding-sm bg-navy" style="background-image: linear-gradient(135deg, #0B1B3D 0%, #162B56 100%);">
        <div class="container" style="text-align: center;">
            <span class="badge-gold">Academic Excellence</span>
            <h1 style="color: #FFFFFF; margin: 0.75rem 0 0.5rem 0;">Defence Courses & Preparation Programs</h1>
            <p style="color: rgba(255,255,255,0.85); font-size: 1.1rem; max-width: 720px; margin: 0 auto;">
                Scientifically designed training modules combining UPSC syllabus mastery, physical conditioning, and SSB personality development.
            </p>
        </div>
    </section>

    <section class="section-padding bg-slate">
        <div class="container">
            <div class="section-header">
                <span class="badge-navy">Online Registration for 2027</span>
                <h2>Choose Your Pathway to Commission</h2>
                <div class="gold-divider"></div>
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

            <div class="courses-grid">

                <?php
                $courses_query = new WP_Query([
                    'post_type'      => 'ddc_course',
                    'posts_per_page' => 12,
                ]);

                if ($courses_query->have_posts()) :
                    while ($courses_query->have_posts()) : $courses_query->the_post();
                ?>
                    <div class="course-card">
                        <div class="course-card-banner">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('ddc-course-thumb'); ?>
                            <?php else : ?>
                                <img src="<?php echo esc_url($theme_uri . '/assets/images/classroom-batch-study.jpg'); ?>" alt="<?php the_title_attribute(); ?>">
                            <?php endif; ?>
                            <span class="course-card-badge">Featured Program</span>
                        </div>
                        <div class="course-card-body">
                            <h3 class="course-card-title"><?php the_title(); ?></h3>
                            <p class="course-card-desc"><?php echo wp_trim_words(get_the_excerpt(), 22); ?></p>
                            <div class="course-card-footer">
                                <a href="<?php the_permalink(); ?>" class="btn btn-outline-navy btn-sm">Full Details</a>
                                <button type="button" class="btn btn-gold btn-sm open-enquiry-modal" data-course="<?php the_title_attribute(); ?>">Enquire</button>
                            </div>
                        </div>
                    </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    $static_courses = [
                        ['title' => 'NDA Foundation (After 10th)', 'badge' => '2 Years Integrated', 'desc' => 'Comprehensive 2-year integrated schooling and NDA preparation balancing academic board exams with intensive defence training.', 'pdf' => 'ddc-nda-foundation-timetable.pdf'],
                        ['title' => 'NDA (Girls) Special Batch', 'badge' => 'Dedicated Girls Wing', 'desc' => 'Specialized batches for female aspirants preparing to join the National Defence Academy with dedicated residential facilities.', 'pdf' => 'ddc-nda-foundation-timetable.pdf'],
                        ['title' => 'NDA Target & Dropper Batch', 'badge' => 'Fast Track 6M / 1Y', 'desc' => 'Rigorous exam-focused program covering UPSC Mathematics, General Ability Test (GAT), and English with weekly full-length mock tests.', 'pdf' => 'ddc-nda-target-timetable.pdf'],
                        ['title' => 'CDS Training Program', 'badge' => 'Graduate Entry', 'desc' => 'Complete preparation for Combined Defence Services Examination for permanent and short service commissions across Army, Navy, and Air Force.', 'pdf' => 'ddc-cds-syllabus-timetable.pdf'],
                        ['title' => 'AFCAT Coaching', 'badge' => 'Air Force Entry', 'desc' => 'Specialized curriculum targeting AFCAT Numerical Ability, Verbal Ability, Reasoning & Military Aptitude, and General Awareness.', 'pdf' => 'ddc-afcat-syllabus-timetable.pdf'],
                        ['title' => 'SSB 14-Day Practical Camp', 'badge' => 'Live Ground Camp', 'desc' => 'Complete outdoor GTO ground obstacle course, psychology dossier evaluation, and one-on-one personal interview mocks.', 'pdf' => 'ddc-cds-syllabus-timetable.pdf']
                    ];
                    foreach ($static_courses as $sc):
                ?>
                    <div class="course-card">
                        <div class="course-card-banner">
                            <img src="<?php echo esc_url($theme_uri . '/assets/images/classroom-batch-study.jpg'); ?>" alt="<?php echo esc_attr($sc['title']); ?>">
                            <span class="course-card-badge"><?php echo esc_html($sc['badge']); ?></span>
                        </div>
                        <div class="course-card-body">
                            <h3 class="course-card-title"><?php echo esc_html($sc['title']); ?></h3>
                            <p class="course-card-desc"><?php echo esc_html($sc['desc']); ?></p>
                            <div class="course-card-footer" style="display: flex; gap: 8px; flex-wrap: wrap;">
                                <a href="<?php echo esc_url($theme_uri . '/assets/downloads/' . $sc['pdf']); ?>" download class="btn btn-outline-navy btn-sm" style="flex: 1; text-align: center; white-space: nowrap;">
                                    Download Timetable
                                </a>
                                <button type="button" class="btn btn-gold btn-sm open-enquiry-modal" style="flex: 1;" data-course="<?php echo esc_attr($sc['title']); ?>">
                                    Enquire Now
                                </button>
                            </div>
                        </div>
                    </div>
                <?php endforeach; endif; ?>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
