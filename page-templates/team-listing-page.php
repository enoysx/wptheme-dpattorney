<?php
/**
 * Template Name: Team Listing Page
 *
 * The template for displaying team members listing with filters
 *
 * @package D_Pongkor_Partners
 * @since 2.0.0
 */

get_header();

$current_type = isset($_GET['type']) ? sanitize_text_field($_GET['type']) : '';
$team_members = $current_type ? dpattorney_get_team_members($current_type) : dpattorney_get_team_members();

// Get all team types for filter
$team_types = get_terms([
    'taxonomy' => 'team_type',
    'hide_empty' => true,
]);
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
                <span class="team-label"><?php _e('Tim Kami', 'dpattorney'); ?></span>
                <h1 class="team-title"><?php _e('Profesional Hukum Berpengalaman', 'dpattorney'); ?></h1>
                <p class="team-description">
                    <?php _e('Bertemu dengan tim ahli kami yang berdedikasi untuk memberikan solusi hukum terbaik.', 'dpattorney'); ?>
                </p>
            </div>
        </div>
    </section>
    
    <!-- Team Type Filter -->
    <?php if (!empty($team_types) && !is_wp_error($team_types)) : ?>
    <section class="section" style="padding-bottom: 2rem; border-bottom: 1px solid rgba(255,255,255,0.1);">
        <div class="container">
            <div class="reveal" style="display: flex; gap: 1rem; flex-wrap: wrap; justify-content: center;">
                <a href="<?php echo esc_url(remove_query_arg('type')); ?>" class="team-type-filter <?php echo empty($current_type) ? 'active' : ''; ?>" style="padding: 0.75rem 1.5rem; border-radius: 2rem; border: 1px solid rgba(255,255,255,0.2); color: <?php echo empty($current_type) ? '#f97316' : 'rgba(255,255,255,0.6)'; ?>; transition: all 0.3s ease; cursor: pointer;">
                    <?php _e('Semua', 'dpattorney'); ?>
                </a>
                <?php 
                foreach ($team_types as $type) {
                    $type_slug = $type->slug;
                    $is_active = $current_type === $type_slug;
                    $type_url = add_query_arg('type', $type_slug);
                    ?>
                    <a href="<?php echo esc_url($type_url); ?>" class="team-type-filter <?php echo $is_active ? 'active' : ''; ?>" style="padding: 0.75rem 1.5rem; border-radius: 2rem; border: 1px solid rgba(255,255,255,0.2); color: <?php echo $is_active ? '#f97316' : 'rgba(255,255,255,0.6)'; ?>; transition: all 0.3s ease; cursor: pointer;">
                        <?php echo esc_html($type->name); ?>
                    </a>
                    <?php
                }
                ?>
            </div>
        </div>
    </section>
    <?php endif; ?>
    
    <!-- Team Members Grid -->
    <section class="section">
        <div class="container">
            <?php if (!empty($team_members)) : ?>
                <div class="team-grid reveal-children" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 2rem;">
                    <?php 
                    foreach ($team_members as $member) {
                        $member_url = get_permalink($member->ID);
                        $member_position = get_post_meta($member->ID, '_dpattorney_position', true);
                        $member_email = get_post_meta($member->ID, '_dpattorney_email', true);
                        $member_phone = get_post_meta($member->ID, '_dpattorney_phone', true);
                        $member_bio = wp_trim_words($member->post_excerpt ?: $member->post_content, 15);
                        $member_image = get_post_meta($member->ID, '_dpattorney_featured_image', true);
                        ?>
                        <div class="team-member-card reveal" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-radius: 1rem; overflow: hidden; transition: all 0.3s ease;">
                            <a href="<?php echo esc_url($member_url); ?>" class="team-member-link">
                                <div class="team-member-image" style="position: relative; aspect-ratio: 3/4; overflow: hidden; background: rgba(249, 115, 22, 0.1);">
                                    <?php if ($member_image) : ?>
                                        <img src="<?php echo esc_url($member_image); ?>" alt="<?php echo esc_attr($member->post_title); ?>" loading="lazy" style="width: 100%; height: 100%; object-fit: cover;">
                                    <?php else : ?>
                                        <div style="width: 100%; height: 100%; display: flex; align-items: center; justify-content: center;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color: rgba(255,255,255,0.3);"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div style="padding: 1.5rem;">
                                    <h3 style="font-size: 1.125rem; font-weight: 600; color: #fff; margin-bottom: 0.25rem;">
                                        <?php echo esc_html($member->post_title); ?>
                                    </h3>
                                    <?php if ($member_position) : ?>
                                        <p style="font-size: 0.875rem; color: #f97316; margin-bottom: 0.75rem;">
                                            <?php echo esc_html($member_position); ?>
                                        </p>
                                    <?php endif; ?>
                                    <p style="font-size: 0.875rem; color: rgba(255,255,255,0.6); line-height: 1.5;">
                                        <?php echo esc_html($member_bio); ?>
                                    </p>
                                    <?php if ($member_email || $member_phone) : ?>
                                        <div style="display: flex; gap: 0.5rem; margin-top: 1rem; padding-top: 1rem; border-top: 1px solid rgba(255,255,255,0.1);">
                                            <?php if ($member_email) : ?>
                                                <a href="mailto:<?php echo esc_attr($member_email); ?>" style="display: flex; align-items: center; justify-content: center; width: 32px; height: 32px; border-radius: 0.5rem; background: rgba(249, 115, 22, 0.1); color: #f97316; transition: all 0.3s ease;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                                                </a>
                                            <?php endif; ?>
                                            <?php if ($member_phone) : ?>
                                                <a href="tel:<?php echo esc_attr($member_phone); ?>" style="display: flex; align-items: center; justify-content: center; width: 32px; height: 32px; border-radius: 0.5rem; background: rgba(249, 115, 22, 0.1); color: #f97316; transition: all 0.3s ease;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                                                </a>
                                            <?php endif; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </a>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            <?php else : ?>
                <div style="text-align: center; padding: 4rem 2rem; color: rgba(255,255,255,0.5);">
                    <p><?php _e('Belum ada anggota tim ditemukan.', 'dpattorney'); ?></p>
                </div>
            <?php endif; ?>
        </div>
    </section>
    
</main>

<?php 
get_footer();
