<?php
/**
 * Template Name: Results & Achievements Page
 * 
 * @package Dehradun_Defence_College
 */

get_header();

$theme_uri = get_template_directory_uri();
?>

    <section class="section-padding-sm bg-navy" style="background-image: linear-gradient(135deg, #0B1B3D 0%, #162B56 100%);">
        <div class="container" style="text-align: center;">
            <span class="badge-gold">Proven Track Record</span>
            <h1 style="color: #FFFFFF; margin: 0.75rem 0 0.5rem 0;">Hall of Fame & Selection Achievements</h1>
            <p style="color: rgba(255,255,255,0.85); font-size: 1.1rem; max-width: 720px; margin: 0 auto;">
                Celebrating our cadets who earned their recommendation letters and joined the prestigious academies of the Indian Armed Forces.
            </p>
        </div>
    </section>

    <!-- Metrics Strip -->
    <section class="stats-strip">
        <div class="container stats-grid">
            <div class="stat-item">
                <div class="stat-number">25+</div>
                <div class="stat-label">NDA Selections</div>
                <div class="stat-sublabel">Commissioned into NDA (2021-2024)</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">68+</div>
                <div class="stat-label">Total Qualifiers</div>
                <div class="stat-sublabel">Across NDA, CDS, AFCAT & OTA</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">970+</div>
                <div class="stat-label">Aspirants Trained</div>
                <div class="stat-sublabel">Comprehensive Written & SSB Prep</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">104+</div>
                <div class="stat-label">5-Star Google Reviews</div>
                <div class="stat-sublabel">4.9 / 5.0 Average Rating</div>
            </div>
        </div>
    </section>

    <!-- Hall of Fame Showcase -->
    <section class="section-padding bg-slate" id="results-hall">
        <div class="container">
            <div class="section-header">
                <span class="badge-saffron">Our Pride & National Duty</span>
                <h2>Official 2025-2026 Selection Roll of Honor</h2>
                <div class="gold-divider"></div>
                <p>Saluting the courageous DDCIANs who earned their recommendation letters and entered the Armed Forces wearing the uniform.</p>
            </div>

            <!-- Army Motto Banner -->
            <div style="background: linear-gradient(135deg, #0B1B3D 0%, #162B56 100%); color: #FFFFFF; border-radius: var(--radius-md); padding: 1.25rem 2rem; border-left: 5px solid var(--accent-gold); margin-bottom: 2.5rem; text-align: center; box-shadow: var(--shadow-sm);">
                <p style="font-family: var(--font-heading); font-size: 1.2rem; font-weight: 800; color: var(--accent-gold); letter-spacing: 0.5px; margin: 0; text-transform: uppercase;">
                    “One who is an officer is an officer now, and will remain one, rest of one's life for!”
                </p>
            </div>

            <!-- Official Merit Poster 2025-2026 Unobstructed Spotlight -->
            <div class="selection-feature-grid" style="margin-bottom: 3.5rem;">
                <!-- Left: Framed High-Res Poster with Zoom -->
                <div class="selection-poster-frame">
                    <a href="<?php echo esc_url($theme_uri . '/assets/images/ddc-selections-2025-2026.jpg'); ?>" target="_blank" rel="noopener" title="Click to open full high-resolution merit poster">
                        <img src="<?php echo esc_url($theme_uri . '/assets/images/ddc-selections-2025-2026.jpg'); ?>" alt="Official Merit Poster - Our Latest Selection of 2025-2026" class="selection-poster-img" loading="eager">
                    </a>
                    <div style="background: rgba(11,37,69,0.95); padding: 0.85rem 1.25rem; display: flex; justify-content: space-between; align-items: center;">
                        <span style="color: #FFFFFF; font-size: 0.85rem; font-weight: 700;">Official Merit Board 2025-2026</span>
                        <a href="<?php echo esc_url($theme_uri . '/assets/images/ddc-selections-2025-2026.jpg'); ?>" target="_blank" rel="noopener" class="btn btn-gold btn-sm" style="padding: 0.35rem 0.75rem; font-size: 0.75rem;">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="margin-right: 4px;"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
                            Click to Zoom High-Res
                        </a>
                    </div>
                </div>

                <!-- Right: Selection Narrative & Key Commissions -->
                <div>
                    <span class="badge-gold">Star Commission & Recommendations</span>
                    <h3 style="font-size: 1.85rem; color: var(--primary-navy); margin: 0.75rem 0 1rem 0;">
                        From Dehradun Classrooms to NDA & Air Force Flying Cockpits
                    </h3>
                    <p style="color: var(--text-muted); line-height: 1.7; margin-bottom: 1.25rem;">
                        Passing the Union Public Service Commission written examination is step one. Earning the recommendation letter through psychological screening, group testing, and interview assessment at 11 SSB Allahabad, 33 SSB Bhopal, 19 SSB, and 1 AFSB Dehradun is what sets Dehradun Defence College apart.
                    </p>

                    <!-- Top 2 Star Cadets Feature Cards -->
                    <div class="form-row-2col" style="margin-bottom: 1.5rem;">
                        <div style="background: #FFFFFF; border-radius: var(--radius-md); padding: 1.25rem; border: 2px solid var(--accent-gold); box-shadow: var(--shadow-sm); text-align: center;">
                            <img src="<?php echo esc_url($theme_uri . '/assets/images/cadets/cadet-aadarsh-mishra.jpg'); ?>" alt="Aadarsh Mishra Flying Officer" class="cadet-card-photo" loading="lazy" width="76" height="76">
                            <span class="cadet-card-badge cadet-badge-iaf">Air Force Commission</span>
                            <h4 style="font-size: 1.1rem; color: var(--primary-navy); margin: 0.35rem 0 0.2rem 0;">Aadarsh Mishra</h4>
                            <p style="font-size: 0.825rem; color: var(--accent-gold-hover); font-weight: 700; margin-bottom: 0.25rem;">(DDCIAN)</p>
                            <p style="font-size: 0.8rem; color: var(--text-muted); margin: 0;">Joined Indian Air Force as <strong>Flying Officer</strong></p>
                        </div>

                        <div style="background: #FFFFFF; border-radius: var(--radius-md); padding: 1.25rem; border: 2px solid var(--accent-gold); box-shadow: var(--shadow-sm); text-align: center;">
                            <img src="<?php echo esc_url($theme_uri . '/assets/images/cadets/cadet-sanskar-jha.jpg'); ?>" alt="Sanskar Jha NDA Cadet" class="cadet-card-photo" loading="lazy" width="76" height="76">
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
                    </div>
                </div>
            </div>

            <!-- Dedicated Individual Congratulations Selection Cards Grid -->
            <div style="margin-bottom: 3.5rem;">
                <div style="text-align: center; margin-bottom: 1.75rem;">
                    <span class="badge-saffron">★ Individual Congratulations Spotlight</span>
                    <h3 style="font-size: 1.75rem; color: var(--primary-navy); margin: 0.5rem 0;">
                        Congratulations to Our Star DDCIAN Qualifiers
                    </h3>
                    <p style="color: var(--text-muted); font-size: 0.95rem; max-width: 680px; margin: 0 auto;">
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
                <div style="background: #FFFFFF; border-radius: var(--radius-lg); overflow: hidden; border: 2px solid var(--accent-gold); box-shadow: var(--shadow-md); display: grid; grid-template-columns: 320px 1fr; align-items: center;" class="selection-banner-2col">
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
                            <button type="button" class="btn btn-gold btn-sm open-enquiry-modal" data-course="NDA Coaching 2026 Batch"><span>Enquire for April 2026 Batch</span></button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Complete 13 Selected Cadets Grid -->
            <div style="margin-bottom: 3.5rem;">
                <h3 style="font-size: 1.45rem; color: var(--primary-navy); margin-bottom: 1.25rem; text-align: center;">
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

            <!-- Spotlight Achiever Hero -->
            <div class="results-poster-grid" style="background: #FFFFFF; border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-xl); border: 1px solid var(--border-light); margin-bottom: 3.5rem;">
                <div>
                    <img src="<?php echo esc_url($theme_uri . '/assets/images/nda-success-cadets.jpg'); ?>" alt="NDA Achievers" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div style="padding: 3rem 2.5rem;">
                    <span class="badge-gold">SSB Recommended</span>
                    <h3 style="font-size: 1.85rem; margin: 0.75rem 0 1rem 0;">From Dehradun Classrooms to Officer Cadets</h3>
                    <p style="color: var(--text-muted); line-height: 1.8; margin-bottom: 1.25rem;">
                        Our structured training programs ensure that students achieve peak physical condition, rock-solid academic foundations in mathematics and science, and the psychological maturity necessary to earn a recommendation letter.
                    </p>
                    <button type="button" class="btn btn-primary open-enquiry-modal" data-course="Next Batch Admission">
                        <span>Join the Next Selection Batch</span>
                    </button>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
