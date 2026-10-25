<?php
/**
 * Template Name: Gallery Page
 * 
 * @package Dehradun_Defence_College
 */

get_header();

$theme_uri = get_template_directory_uri();
?>

    <section class="section-padding-sm bg-navy" style="background-image: linear-gradient(135deg, #0B1B3D 0%, #162B56 100%);">
        <div class="container" style="text-align: center;">
            <span class="badge-gold">Campus Life &amp; Cadets Routine</span>
            <h1 style="color: #FFFFFF; margin: 0.75rem 0 0.5rem 0;">College Activity &amp; Campus Gallery</h1>
            <p style="color: rgba(255,255,255,0.85); font-size: 1.1rem; max-width: 720px; margin: 0 auto;">
                A glimpse into the vibrant college activities, daily military discipline, classroom rigour, and obstacle training of our cadets.
            </p>
        </div>
    </section>

    <section class="section-padding bg-slate">
        <div class="container">
            <div class="section-header">
                <span class="badge-navy">Cadet Life</span>
                <h2>Glimpses of Dehradun Defence College</h2>
                <div class="gold-divider"></div>
            </div>

            <div class="gallery-grid">
                <?php
                $gallery_items = [
                    ['src' => $theme_uri . '/assets/images/campus-building-main.jpg', 'title' => 'Main Campus Building — Cadets Battalion Flag Assembly & Academic Complex in Maldevta Foothills'],
                    ['src' => $theme_uri . '/assets/images/campus-front-office.jpg', 'title' => 'Official Front Office & Admission Helpdesk — Cadets & Counseling Staff at Sahastradhara Road'],
                    ['src' => $theme_uri . '/assets/images/cadets-parade-assembly.jpg', 'title' => 'Grand Parade Ground Assembly — Cadets in Formation with Majestic Himalayan Valley Backdrop'],
                    ['src' => $theme_uri . '/assets/images/nda-girls-wing-formation.jpg', 'title' => 'Dehradun\'s First Dedicated In-House NDA (Girls) Wing — Cadets Morning Formation in Uniform'],
                    ['src' => $theme_uri . '/assets/images/classroom-lecture-hall-real.jpg', 'title' => 'Stepped Smart Lecture Theatre — Cadets in Full Uniform Engaged in UPSC Defence Examination Prep'],
                    ['src' => $theme_uri . '/assets/images/classroom-faculty-session.jpg', 'title' => 'Senior Defence Faculty Mentorship — Conceptual Academic Instruction & Problem Solving'],
                    ['src' => $theme_uri . '/assets/images/classroom-smart-board-real.jpg', 'title' => 'Interactive Smart Board Audio-Visual Lecture — Modern Defence Pedagogy & Exam Strategy'],
                    ['src' => $theme_uri . '/assets/images/campus-study-library.jpg', 'title' => 'Cadet Study Hall & Self-Study Facility — Structured Evening Study with Resident Mentors'],
                    ['src' => $theme_uri . '/assets/images/campus-ground-physical-training.jpg', 'title' => 'Cadet Physical Agility & Endurance Drills on Campus Training Grounds'],
                    ['src' => $theme_uri . '/assets/images/campus-obstacle-drill-ground.jpg', 'title' => 'Campus Obstacle Course & Physical Conditioning Ground in Scenic Maldevta Valley'],
                    ['src' => $theme_uri . '/assets/images/campus-ceremony-celebration.jpg', 'title' => 'Campus Investiture & Annual Cadets Honor Ceremony Celebrating Defence Achievements'],
                    ['src' => $theme_uri . '/assets/images/cadet-officer-portrait.jpg', 'title' => 'Cadet in Academy Uniform — Bearing, Pride, and Officer-Like Discipline'],
                    ['src' => $theme_uri . '/assets/images/cadet-indoor-training.jpg', 'title' => 'Indoor Academy Conditioning & Officer-Like Quality Development'],
                    ['src' => $theme_uri . '/assets/images/kabaddi-outdoor-ground.jpg', 'title' => 'Outdoor Kabaddi Match — Physical Agility & Team Coordination in Maldevta'],
                    ['src' => $theme_uri . '/assets/images/defence-motivation-wall.jpg', 'title' => 'Defence Motivation Wall — "Nation First", "Courage Honor Commitment"'],
                    ['src' => $theme_uri . '/assets/images/smart-classroom-lecture-hall.jpg', 'title' => 'Full Batch Smart Classroom Lecture Hall — Interactive Digital Audio-Visual Pedagogy'],
                    ['src' => $theme_uri . '/assets/images/ssb-smart-panel-instruction.jpg', 'title' => 'SSB GTO Obstacle Course Strategy Session on Interactive Smart Panel with Defence Instructor'],
                    ['src' => $theme_uri . '/assets/images/badminton-outdoor-court.jpg', 'title' => 'Outdoor Badminton & Sports Session — Physical Agility & Reflex Conditioning'],
                    ['src' => $theme_uri . '/assets/images/chess-indoor-session.jpg', 'title' => 'Indoor Chess Strategy Session — Tactical Thinking & Decision-Making'],
                    ['src' => $theme_uri . '/assets/images/ssb-gto-ground.jpg', 'title' => 'SSB GTO Obstacle Ground Training — Burma Bridge, Commando Walk & PGT'],
                    ['src' => $theme_uri . '/assets/images/nda-success-cadets.jpg', 'title' => 'Recommendation Celebrations & Qualified Cadets Joining Armed Forces'],
                    ['src' => $theme_uri . '/assets/images/director-mahendra.jpg', 'title' => 'Mr. Mahendra Kukreja — Managing Director, Dehradun Defence College'],
                    ['src' => $theme_uri . '/assets/images/director-zaheer.jpg', 'title' => 'Mr. Zaheer Ahmed — Director, DDC & Managing Director, Doon Public Sr. Sec. School'],
                    ['src' => $theme_uri . '/assets/images/director-gaurav.jpg', 'title' => 'Mr. Gaurav Sharma — Director, DDC & Principal, Doon Public Sr. Sec. School'],
                    ['src' => $theme_uri . '/assets/images/director-neha.jpg', 'title' => 'Ms. Neha Kukreja — Director, Dehradun Defence College'],
                ];
                foreach ($gallery_items as $item):
                ?>
                <div class="gallery-item" data-src="<?php echo esc_url($item['src']); ?>" tabindex="0">
                    <img src="<?php echo esc_url($item['src']); ?>" alt="<?php echo esc_attr($item['title']); ?>" loading="lazy">
                    <div class="gallery-hover-overlay">
                        <h4 style="color: #FFFFFF; font-size: 1rem;"><?php echo esc_html($item['title']); ?></h4>
                        <span style="font-size: 0.75rem; color: var(--accent-gold);">Click to Enlarge</span>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Lightbox Modal -->
    <div class="lightbox-modal" id="galleryLightbox" role="dialog" aria-modal="true">
        <div class="lightbox-content-wrap">
            <button type="button" class="lightbox-close-btn" aria-label="Close Preview">&times;</button>
            <img src="" alt="Enlarged Campus View" id="lightboxImg">
        </div>
    </div>

<?php get_footer(); ?>
