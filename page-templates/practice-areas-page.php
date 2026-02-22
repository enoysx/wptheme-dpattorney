<?php
/**
 * Template Name: Practice Areas Page
 *
 * The template for displaying all practice areas
 *
 * @package D_Pongkor_Partners
 * @since 2.0.0
 */

get_header();

$practice_areas = dpattorney_get_practice_areas();
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
                <span class="team-label"><?php _e('Keahlian Kami', 'dpattorney'); ?></span>
                <h1 class="team-title"><?php _e('Area Praktik', 'dpattorney'); ?></h1>
                <p class="team-description">
                    <?php _e('Layanan hukum spesialis yang disesuaikan dengan tantangan unik pasar Asia.', 'dpattorney'); ?>
                </p>
            </div>
        </div>
    </section>
    
    <!-- Practice Areas Grid -->
    <section class="section">
        <div class="container">
            <div class="practice-areas-grid reveal-children">
                <?php 
                if (!empty($practice_areas)) {
                    foreach ($practice_areas as $area) {
                        $area_url = get_permalink($area->ID);
                        $area_icon = get_post_meta($area->ID, '_dpattorney_practice_icon', true);
                        $area_excerpt = wp_trim_words($area->post_excerpt ?: $area->post_content, 15);
                        ?>
                        <div class="practice-area-card reveal" style="transition-delay: calc(var(--reveal-index) * 0.1s);">
                            <a href="<?php echo esc_url($area_url); ?>" class="practice-area-link">
                                <div class="practice-area-icon">
                                    <?php if ($area_icon) : ?>
                                        <img src="<?php echo esc_url($area_icon); ?>" alt="<?php echo esc_attr($area->post_title); ?>" loading="lazy">
                                    <?php else : ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"/><path d="M21 3v5h-5"/><path d="M21 12a9 9 0 0 1-9 9 9.75 9.75 0 0 1-6.74-2.74L3 16"/><path d="M3 21v-5h5"/></svg>
                                    <?php endif; ?>
                                </div>
                                <h3 class="practice-area-title"><?php echo esc_html($area->post_title); ?></h3>
                                <p class="practice-area-excerpt"><?php echo esc_html($area_excerpt); ?></p>
                                <div class="practice-area-arrow">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                                </div>
                            </a>
                        </div>
                        <?php
                    }
                } else {
                    echo '<p style="grid-column: 1 / -1; text-align: center; color: rgba(255,255,255,0.5);">' . __('No practice areas found.', 'dpattorney') . '</p>';
                }
                ?>
            </div>
        </div>
    </section>
    
    <!-- CTA Section -->
    <section class="section" style="padding-bottom: 6rem;">
        <div class="container">
            <div class="cta-section reveal">
                <h2 class="cta-title" style="font-size: 2.5rem; line-height: 1.2;">
                    <?php _e('Butuh solusi hukum khusus?', 'dpattorney'); ?>
                </h2>
                <p class="cta-description" style="margin-top: 1rem; margin-bottom: 2rem; color: rgba(255,255,255,0.6);">
                    <?php _e('Tim ahli kami siap membantu Anda mengatasi tantangan hukum bisnis.', 'dpattorney'); ?>
                </p>
                <a href="<?php echo esc_url(get_page_link(get_page_by_path('kontak')->ID ?? 0)); ?>" class="btn btn-primary">
                    <?php _e('Hubungi Kami', 'dpattorney'); ?>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                </a>
            </div>
        </div>
    </section>
    
</main>

<?php 
get_footer();
