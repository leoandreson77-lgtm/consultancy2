<?php
/**
 * Main Template File - Dehradun Defence College
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 *
 * @package Dehradun_Defence_College
 */

get_header();
?>

    <section class="section-padding-sm bg-navy" style="background-image: linear-gradient(135deg, #0B1B3D 0%, #162B56 100%);">
        <div class="container" style="text-align: center;">
            <span class="badge-gold">Dehradun Defence College</span>
            <h1 style="color: #FFFFFF; margin: 0.75rem 0 0.5rem 0;">
                <?php
                if (is_home() && !is_front_page()) {
                    single_post_title();
                } elseif (is_archive()) {
                    the_archive_title();
                } elseif (is_search()) {
                    printf(__('Search Results for: %s', 'dehradun-defence-college'), '<span>' . get_search_query() . '</span>');
                } else {
                    the_title();
                }
                ?>
            </h1>
            <p style="color: rgba(255,255,255,0.85); font-size: 1.05rem; max-width: 720px; margin: 0 auto;">
                Official News, Updates &amp; Academic Resources from Dehradun Defence College.
            </p>
        </div>
    </section>

    <div class="section-padding bg-slate">
        <div class="container">
            <?php if (have_posts()) : ?>
                <div class="blog-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); gap: 2rem;">
                    <?php while (have_posts()) : the_post(); ?>
                        <article <?php post_class('blog-card'); ?> style="background: #FFFFFF; border-radius: var(--radius-md); overflow: hidden; box-shadow: var(--shadow-sm); border: 1px solid rgba(0,0,0,0.06); display: flex; flex-direction: column;">
                            <div class="blog-card-thumb" style="height: 220px; overflow: hidden; position: relative;">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('medium_large', ['style' => 'width: 100%; height: 100%; object-fit: cover;']); ?>
                                <?php else : ?>
                                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/classroom-batch-study.jpg'); ?>" alt="<?php the_title_attribute(); ?>" style="width: 100%; height: 100%; object-fit: cover;">
                                <?php endif; ?>
                            </div>
                            <div class="blog-card-content" style="padding: 1.5rem; flex: 1; display: flex; flex-direction: column;">
                                <div style="font-size: 0.8rem; color: var(--accent-gold-hover); font-weight: 700; margin-bottom: 0.4rem;">
                                    <?php echo get_the_date(); ?>
                                </div>
                                <h3 style="font-size: 1.25rem; color: var(--primary-navy); margin-bottom: 0.65rem;">
                                    <a href="<?php the_permalink(); ?>" style="color: inherit;"><?php the_title(); ?></a>
                                </h3>
                                <p style="color: var(--text-muted); font-size: 0.9rem; line-height: 1.6; flex: 1;">
                                    <?php echo wp_trim_words(get_the_excerpt(), 22); ?>
                                </p>
                                <div style="margin-top: 1rem;">
                                    <a href="<?php the_permalink(); ?>" class="btn btn-outline-navy btn-sm">Read Article &rarr;</a>
                                </div>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </div>

                <div style="margin-top: 3rem; text-align: center;">
                    <?php the_posts_pagination(); ?>
                </div>
            <?php else : ?>
                <div style="text-align: center; padding: 4rem 1rem;">
                    <h3>No posts or articles found.</h3>
                    <p style="color: var(--text-muted);">Please check back soon or browse our defence courses.</p>
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-gold" style="margin-top: 1rem;">Return to Homepage</a>
                </div>
            <?php endif; ?>
        </div>
    </div>

<?php get_footer(); ?>
