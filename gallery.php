<?php
/**
 * Gallery & Campus Life - Dehradun Defence College
 */
require_once __DIR__ . '/config.php';

$page_title = 'College Activity & Campus Gallery | Dehradun Defence College';
$page_desc = 'Explore the college activities, campus photos, GTO obstacle grounds, parade drills, hostel life, and celebrations at Dehradun Defence College in Dehradun.';
$current_page = 'gallery';

include __DIR__ . '/includes/header.php';

$gallery_images = [
    [
        'src'      => 'assets/images/campus-building-main.jpg',
        'title'    => 'Main Campus Building — Cadets Battalion Flag Assembly & Academic Complex in Maldevta Foothills',
        'category' => 'campus'
    ],
    [
        'src'      => 'assets/images/campus-front-office.jpg',
        'title'    => 'Official Front Office & Admission Helpdesk — Cadets & Counseling Staff at Sahastradhara Road',
        'category' => 'campus'
    ],
    [
        'src'      => 'assets/images/cadets-parade-assembly.jpg',
        'title'    => 'Grand Parade Ground Assembly — Cadets in Formation with Majestic Himalayan Valley Backdrop',
        'category' => 'parade'
    ],
    [
        'src'      => 'assets/images/nda-girls-wing-formation.jpg',
        'title'    => 'Dehradun\'s First Dedicated In-House NDA (Girls) Wing — Cadets Morning Formation in Uniform',
        'category' => 'parade'
    ],
    [
        'src'      => 'assets/images/classroom-lecture-hall-real.jpg',
        'title'    => 'Stepped Smart Lecture Theatre — Cadets in Full Uniform Engaged in UPSC Defence Examination Prep',
        'category' => 'classroom'
    ],
    [
        'src'      => 'assets/images/classroom-faculty-session.jpg',
        'title'    => 'Senior Defence Faculty Mentorship — Conceptual Academic Instruction & Problem Solving',
        'category' => 'classroom'
    ],
    [
        'src'      => 'assets/images/classroom-smart-board-real.jpg',
        'title'    => 'Interactive Smart Board Audio-Visual Lecture — Modern Defence Pedagogy & Exam Strategy',
        'category' => 'classroom'
    ],
    [
        'src'      => 'assets/images/campus-study-library.jpg',
        'title'    => 'Cadet Study Hall & Self-Study Facility — Structured Evening Study with Resident Mentors',
        'category' => 'campus'
    ],
    [
        'src'      => 'assets/images/campus-ground-physical-training.jpg',
        'title'    => 'Cadet Physical Agility & Endurance Drills on Campus Training Grounds',
        'category' => 'obstacle'
    ],
    [
        'src'      => 'assets/images/campus-obstacle-drill-ground.jpg',
        'title'    => 'Campus Obstacle Course & Physical Conditioning Ground in Scenic Maldevta Valley',
        'category' => 'obstacle'
    ],
    [
        'src'      => 'assets/images/campus-ceremony-celebration.jpg',
        'title'    => 'Campus Investiture & Annual Cadets Honor Ceremony Celebrating Defence Achievements',
        'category' => 'celebrations'
    ],
    [
        'src'      => 'assets/images/cadet-officer-portrait.jpg',
        'title'    => 'Cadet in Academy Uniform — Bearing, Pride, and Officer-Like Discipline',
        'category' => 'parade'
    ],
    [
        'src'      => 'assets/images/cadet-indoor-training.jpg',
        'title'    => 'Indoor Academy Conditioning & Officer-Like Quality Development',
        'category' => 'campus'
    ],
    [
        'src'      => 'assets/images/kabaddi-outdoor-ground.jpg',
        'title'    => 'Outdoor Kabaddi Match — Physical Agility & Team Coordination Training in Maldevta',
        'category' => 'obstacle'
    ],
    [
        'src'      => 'assets/images/defence-motivation-wall.jpg',
        'title'    => 'Defence Motivation Wall — "Nation First", "Courage Honor Commitment" Inspiring Our Cadets',
        'category' => 'campus'
    ],
    [
        'src'      => 'assets/images/smart-classroom-lecture-hall.jpg',
        'title'    => 'Full Batch Smart Classroom Lecture Hall — Interactive Digital Audio-Visual Pedagogy',
        'category' => 'classroom'
    ],
    [
        'src'      => 'assets/images/ssb-smart-panel-instruction.jpg',
        'title'    => 'SSB GTO Obstacle Course Strategy Session on Interactive Smart Panel with Defence Instructor',
        'category' => 'classroom'
    ],
    [
        'src'      => 'assets/images/badminton-outdoor-court.jpg',
        'title'    => 'Outdoor Badminton & Sports Session — Physical Agility & Reflex Conditioning',
        'category' => 'obstacle'
    ],
    [
        'src'      => 'assets/images/chess-indoor-session.jpg',
        'title'    => 'Indoor Chess Strategy Session — Cadets Building Tactical Thinking & Decision-Making',
        'category' => 'campus'
    ],
    [
        'src'      => 'assets/images/ssb-gto-ground.jpg',
        'title'    => 'SSB GTO Obstacle Ground Training — Burma Bridge, Commando Walk & PGT',
        'category' => 'obstacle'
    ],
    [
        'src'      => 'assets/images/nda-success-cadets.jpg',
        'title'    => 'Recommendation Letter Celebrations & Qualified Cadets Joining Armed Forces',
        'category' => 'celebrations'
    ],
    [
        'src'      => 'assets/images/director-mahendra.jpg',
        'title'    => 'Mr. Mahendra Kukreja — Managing Director, Dehradun Defence College',
        'category' => 'campus'
    ],
    [
        'src'      => 'assets/images/director-zaheer.jpg',
        'title'    => 'Mr. Zaheer Ahmed — Director, DDC & Managing Director, Doon Public Sr. Sec. School',
        'category' => 'campus'
    ],
    [
        'src'      => 'assets/images/director-gaurav.jpg',
        'title'    => 'Mr. Gaurav Sharma — Director, DDC & Principal, Doon Public Sr. Sec. School',
        'category' => 'campus'
    ],
    [
        'src'      => 'assets/images/director-neha.jpg',
        'title'    => 'Ms. Neha Kukreja — Director, Dehradun Defence College',
        'category' => 'campus'
    ]
];
?>

    <!-- Page Header Banner -->
    <section class="section-padding-sm bg-navy" style="background-image: linear-gradient(135deg, #0B1B3D 0%, #162B56 100%);">
        <div class="container" style="text-align: center;">
            <span class="badge-gold">Campus Life &amp; Cadets Routine</span>
            <h1 style="color: #FFFFFF; margin: 0.75rem 0 0.5rem 0;">College Activity &amp; Campus Gallery</h1>
            <p style="color: rgba(255,255,255,0.85); font-size: 1.1rem; max-width: 720px; margin: 0 auto;">
                A glimpse into the vibrant college activities, daily military discipline, classroom rigour, and obstacle training of our cadets.
            </p>
        </div>
    </section>

    <!-- Photo Gallery Section -->
    <section class="section-padding bg-slate">
        <div class="container">
            <div class="section-header">
                <span class="badge-navy">Cadet Life in Pictures</span>
                <h2>Glimpses of Dehradun Defence College</h2>
                <div class="gold-divider"></div>
                <p>Click on any image to inspect in high-definition full screen view.</p>
            </div>

            <!-- Gallery Grid with Lightbox Triggers -->
            <div class="gallery-grid">
                <?php foreach ($gallery_images as $img): ?>
                <div class="gallery-item" data-src="<?php echo $img['src']; ?>" tabindex="0" role="button" aria-label="View <?php echo htmlspecialchars($img['title']); ?>">
                    <img src="<?php echo $img['src']; ?>" alt="<?php echo htmlspecialchars($img['title']); ?>" loading="lazy">
                    <div class="gallery-hover-overlay">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="margin-bottom: 0.5rem;"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
                        <h4 style="color: #FFFFFF; font-size: 1rem;"><?php echo htmlspecialchars($img['title']); ?></h4>
                        <span style="font-size: 0.75rem; color: var(--accent-gold); text-transform: uppercase;">Click to Enlarge</span>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Video Gallery Section -->
    <section class="section-padding" id="videos">
        <div class="container">
            <div class="section-header">
                <span class="badge-gold">Live Action</span>
                <h2>Cadet Video Features & Drill Sessions</h2>
                <div class="gold-divider"></div>
                <p>Watch our cadets in training, hear parent testimonials, and experience our obstacle grounds.</p>
            </div>

            <div class="video-features-grid">
                <!-- Video 1 -->
                <div style="background: #FFFFFF; border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-md); border: 1px solid var(--border-light);">
                    <div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; background-color: #000;">
                        <iframe style="position: absolute; top:0; left: 0; width: 100%; height: 100%; border:0;" src="https://www.youtube-nocookie.com/embed/SVfVbkNvUu8" title="Dehradun Defence College Training" allowfullscreen loading="lazy"></iframe>
                    </div>
                    <div style="padding: 1.25rem;">
                        <h4 style="color: var(--primary-navy); margin-bottom: 0.4rem;">GTO Ground Obstacle Training</h4>
                        <p style="font-size: 0.85rem; color: var(--text-muted); margin: 0;">Cadets negotiating Burma Bridge and command tasks in Maldevta campus.</p>
                    </div>
                </div>

                <!-- Video 2 -->
                <div style="background: #FFFFFF; border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-md); border: 1px solid var(--border-light);">
                    <div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; background-color: #000;">
                        <iframe style="position: absolute; top:0; left: 0; width: 100%; height: 100%; border:0;" src="https://www.youtube-nocookie.com/embed/aq6AHwJRf3c" title="Campus Tour and Classroom Drill" allowfullscreen loading="lazy"></iframe>
                    </div>
                    <div style="padding: 1.25rem;">
                        <h4 style="color: var(--primary-navy); margin-bottom: 0.4rem;">Academic Lecture & SSB Mock Session</h4>
                        <p style="font-size: 0.85rem; color: var(--text-muted); margin: 0;">Inside our digital classrooms with retired military faculty mentors.</p>
                    </div>
                </div>

                <!-- Video 3 -->
                <div style="background: #FFFFFF; border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-md); border: 1px solid var(--border-light);">
                    <div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; background-color: #000;">
                        <iframe style="position: absolute; top:0; left: 0; width: 100%; height: 100%; border:0;" src="https://www.youtube-nocookie.com/embed/h_60M9pGfoM" title="Cadet Recommendation Story" allowfullscreen loading="lazy"></iframe>
                    </div>
                    <div style="padding: 1.25rem;">
                        <h4 style="color: var(--primary-navy); margin-bottom: 0.4rem;">Cadet & Parent Success Review</h4>
                        <p style="font-size: 0.85rem; color: var(--text-muted); margin: 0;">Hear directly from parents on discipline, hostel life, and final NDA recommendations.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Visit Us CTA Banner -->
    <section class="section-padding bg-navy" style="text-align: center;">
        <div class="container" style="max-width: 780px;">
            <span class="badge-gold">Experience It Live</span>
            <h2 style="color: #FFFFFF; margin: 1rem 0;">Witness Campus Life With Your Own Eyes</h2>
            <p style="color: rgba(255,255,255,0.85); font-size: 1.15rem; margin-bottom: 2rem;">
                Schedule an official campus visit with your family. We welcome prospective cadets and parents all 7 days of the week.
            </p>
            <div style="display: flex; justify-content: center; gap: 1.25rem; flex-wrap: wrap;">
                <button type="button" class="btn btn-gold btn-lg open-enquiry-modal" data-course="Campus Inspection Tour">
                    Book Free Campus Visit
                </button>
                <a href="<?php echo WHATSAPP_LINK; ?>" class="btn btn-outline-white btn-lg" target="_blank" rel="noopener">
                    WhatsApp For Directions
                </a>
            </div>
        </div>
    </section>

<?php include __DIR__ . '/includes/footer.php'; ?>
