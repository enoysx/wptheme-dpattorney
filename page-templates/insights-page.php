<?php
/**
 * Template Name: Insights/Blog Page
 *
 * The template for displaying insights and articles landing page
 *
 * @package D_Pongkor_Partners
 * @since 2.0.0
 */

get_header();

$insights = dpattorney_get_insights();
$page = isset($_GET['paged']) ? intval($_GET['paged']) : 1;
$per_page = 9;
$total = count($insights);
$total_pages = ceil($total / $per_page);
$offset = ($page - 1) * $per_page;
$insights_page = array_slice($insights, $offset, $per_page);
?>

<main id="primary" class="main-content">
    
    <!-- Page Header -->
    <section class="page-header" style="padding-top: 3rem; padding-bottom: 4rem;">
        <div class="container">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="team-detail-breadcrumb">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg>
                <?php _e('Beranda', 'dpattorney'); ?>
            </a>
            
            <div class="team-header reveal" style="margin-top: 2rem;">
                <span class="team-label"><?php _e('Pengetahuan Hukum', 'dpattorney'); ?></span>
                <h1 class="team-title"><?php _e('Wawasan & Artikel', 'dpattorney'); ?></h1>
                <p class="team-description">
                    <?php _e('Pelajari tren hukum terbaru dan dapatkan wawasan dari para ahli kami.', 'dpattorney'); ?>
                </p>
            </div>
        </div>
    </section>
    
    <!-- Insights Grid -->
    <section class="section">
        <div class="container">
            <?php if (!empty($insights_page)) : ?>
                <div class="insights-grid reveal-children">
                    <?php 
                    foreach ($insights_page as $insight) {
                        $insight_url = get_permalink($insight->ID);
                        $insight_date = get_the_date('d F Y', $insight->ID);
                        $insight_author = get_post_meta($insight->ID, '_dpattorney_author_name', true);
                        $insight_excerpt = wp_trim_words($insight->post_excerpt ?: $insight->post_content, 20);
                        $insight_image = get_post_meta($insight->ID, '_dpattorney_featured_image', true);
                        ?>
                        <article class="insight-card reveal" style="transition-delay: calc(var(--reveal-index) * 0.1s);">
                            <a href="<?php echo esc_url($insight_url); ?>" class="insight-card-link">
                                <div class="insight-card-image">
                                    <?php if ($insight_image) : ?>
                                        <img src="<?php echo esc_url($insight_image); ?>" alt="<?php echo esc_attr($insight->post_title); ?>" loading="lazy">
                                    <?php else : ?>
                                        <div class="insight-card-placeholder"></div>
                                    <?php endif; ?>
                                </div>
                                <div class="insight-card-content">
                                    <div class="insight-card-meta">
                                        <time datetime="<?php echo esc_attr(get_post_time('c', false, $insight->ID)); ?>" class="insight-card-date">
                                            <?php echo esc_html($insight_date); ?>
                                        </time>
                                        <?php if ($insight_author) : ?>
                                            <span class="insight-card-author"><?php echo esc_html($insight_author); ?></span>
                                        <?php endif; ?>
                                    </div>
                                    <h3 class="insight-card-title"><?php echo esc_html($insight->post_title); ?></h3>
                                    <p class="insight-card-excerpt"><?php echo esc_html($insight_excerpt); ?></p>
                                    <div class="insight-card-footer">
                                        <span class="insight-read-more">
                                            <?php _e('Baca Selengkapnya', 'dpattorney'); ?>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </article>
                        <?php
                    }
                    ?>
                </div>
                
                <!-- Pagination -->
                <?php if ($total_pages > 1) : ?>
                    <nav class="pagination-nav" style="margin-top: 4rem; text-align: center;">
                        <div style="display: flex; align-items: center; justify-content: center; gap: 0.5rem; flex-wrap: wrap;">
                            <?php 
                            for ($i = 1; $i <= $total_pages; $i++) {
                                if ($i === $page) {
                                    echo '<span class="pagination-current" style="padding: 0.5rem 0.75rem; border-radius: 0.375rem; background: rgba(249, 115, 22, 0.1); border: 1px solid rgba(249, 115, 22, 0.3); color: #f97316; font-weight: 600;">' . $i . '</span>';
                                } else {
                                    echo '<a href="' . esc_url(add_query_arg('paged', $i)) . '" class="pagination-link" style="padding: 0.5rem 0.75rem; border-radius: 0.375rem; border: 1px solid rgba(255,255,255,0.1); color: rgba(255,255,255,0.6); transition: all 0.3s ease;">' . $i . '</a>';
                                }
                            }
                            ?>
                        </div>
                    </nav>
                <?php endif; ?>
            <?php else : ?>
                <div style="text-align: center; padding: 4rem 2rem; color: rgba(255,255,255,0.5);">
                    <p><?php _e('Belum ada artikel yang tersedia.', 'dpattorney'); ?></p>
                </div>
            <?php endif; ?>
        </div>
    </section>
    
    <!-- Newsletter Section -->
    <section class="section" style="background: linear-gradient(135deg, rgba(249, 115, 22, 0.1) 0%, rgba(0, 0, 0, 0) 100%); border-top: 1px solid rgba(249, 115, 22, 0.2); border-bottom: 1px solid rgba(249, 115, 22, 0.2); padding: 4rem 0;">
        <div class="container">
            <div class="cta-section reveal" style="text-align: center; max-width: 600px; margin: 0 auto;">
                <h2 class="cta-title" style="font-size: 2rem; line-height: 1.2; margin-bottom: 1rem;">
                    <?php _e('Dapatkan Wawasan Terbaru', 'dpattorney'); ?>
                </h2>
                <p class="cta-description" style="color: rgba(255,255,255,0.6); margin-bottom: 2rem;">
                    <?php _e('Berlangganan newsletter kami untuk menerima artikel dan analisis hukum terbaru langsung ke inbox Anda.', 'dpattorney'); ?>
                </p>
                <form style="display: flex; gap: 0.5rem; flex-direction: column; gap: 1rem;">
                    <input type="email" placeholder="<?php _e('Email Anda', 'dpattorney'); ?>" required style="padding: 0.875rem 1rem; border-radius: 0.5rem; border: 1px solid rgba(255,255,255,0.2); background: rgba(255,255,255,0.05); color: #fff; font-size: 1rem;">
                    <button type="submit" class="btn btn-primary" style="width: 100%;">
                        <?php _e('Berlangganan', 'dpattorney'); ?>
                    </button>
                </form>
            </div>
        </div>
    </section>
    
</main>

<?php 
get_footer();
