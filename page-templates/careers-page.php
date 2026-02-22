<?php
/**
 * Template Name: Careers Page
 *
 * The template for displaying careers landing page
 *
 * @package D_Pongkor_Partners
 * @since 2.0.0
 */

get_header();

$job_openings = dpattorney_get_job_openings();
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
                <span class="team-label"><?php _e('Bergabunglah Dengan Kami', 'dpattorney'); ?></span>
                <h1 class="team-title"><?php _e('Karir', 'dpattorney'); ?></h1>
                <p class="team-description">
                    <?php _e('Kami mencari talenta terbaik untuk bergabung dengan tim kami yang dinamis dan inovatif.', 'dpattorney'); ?>
                </p>
            </div>
        </div>
    </section>
    
    <!-- Career Benefits -->
    <section class="section">
        <div class="container">
            <div class="reveal">
                <h2 style="font-size: 2rem; color: #fff; margin-bottom: 3rem; text-align: center;">
                    <?php _e('Mengapa Bergabung Dengan Kami?', 'dpattorney'); ?>
                </h2>
            </div>
            
            <div class="benefits-grid reveal-children" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem;">
                <!-- Benefit Item -->
                <div class="benefit-item reveal" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-radius: 1rem; padding: 2rem; transition: all 0.3s ease;">
                    <div style="width: 48px; height: 48px; background: rgba(249, 115, 22, 0.1); border-radius: 0.75rem; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color: #f97316;"><path d="M12 6V2m0 20v-4m10-8h4m-20 0H2m17.66-7.07 2.83-2.83m-20 20 2.83-2.83m0-20L5.17 5.17m20 20-2.83-2.83"/></svg>
                    </div>
                    <h3 style="font-size: 1.25rem; color: #fff; margin-bottom: 0.75rem;">
                        <?php _e('Lingkungan Inovatif', 'dpattorney'); ?>
                    </h3>
                    <p style="color: rgba(255,255,255,0.6); line-height: 1.6;">
                        <?php _e('Bekerja dengan teknologi terkini dan praktik hukum yang progresif.', 'dpattorney'); ?>
                    </p>
                </div>
                
                <!-- Benefit Item -->
                <div class="benefit-item reveal" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-radius: 1rem; padding: 2rem; transition: all 0.3s ease;">
                    <div style="width: 48px; height: 48px; background: rgba(249, 115, 22, 0.1); border-radius: 0.75rem; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color: #f97316;"><path d="M19 14c1.49-1.46 3-3.46 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.04 1.51 4.04 3 5.5m15 0a8.3 8.3 0 0 1-5 2.3c-3.43 0-6.43-2.5-6.43-6.5"/></svg>
                    </div>
                    <h3 style="font-size: 1.25rem; color: #fff; margin-bottom: 0.75rem;">
                        <?php _e('Work-Life Balance', 'dpattorney'); ?>
                    </h3>
                    <p style="color: rgba(255,255,255,0.6); line-height: 1.6;">
                        <?php _e('Kami menghargai kehidupan pribadi Anda dengan kebijakan kerja yang fleksibel.', 'dpattorney'); ?>
                    </p>
                </div>
                
                <!-- Benefit Item -->
                <div class="benefit-item reveal" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-radius: 1rem; padding: 2rem; transition: all 0.3s ease;">
                    <div style="width: 48px; height: 48px; background: rgba(249, 115, 22, 0.1); border-radius: 0.75rem; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color: #f97316;"><path d="M2 8a4 4 0 0 0 4 4h12a4 4 0 0 0 4-4M6 20h12a4 4 0 0 1 4 4H2a4 4 0 0 1 4-4zm0-8h12M6 4h12a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z"/></svg>
                    </div>
                    <h3 style="font-size: 1.25rem; color: #fff; margin-bottom: 0.75rem;">
                        <?php _e('Kompensasi Kompetitif', 'dpattorney'); ?>
                    </h3>
                    <p style="color: rgba(255,255,255,0.6); line-height: 1.6;">
                        <?php _e('Paket gaji dan tunjangan yang kompetitif sesuai industri.', 'dpattorney'); ?>
                    </p>
                </div>
                
                <!-- Benefit Item -->
                <div class="benefit-item reveal" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-radius: 1rem; padding: 2rem; transition: all 0.3s ease;">
                    <div style="width: 48px; height: 48px; background: rgba(249, 115, 22, 0.1); border-radius: 0.75rem; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color: #f97316;"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20M4 19.5v-4a1.5 1.5 0 0 1 1.5-1.5M4 19.5a2.5 2.5 0 0 0 2.5 2.5h12a2.5 2.5 0 0 0 2.5-2.5m-15-7.5h10m-7.5-4h5"/></svg>
                    </div>
                    <h3 style="font-size: 1.25rem; color: #fff; margin-bottom: 0.75rem;">
                        <?php _e('Pengembangan Karir', 'dpattorney'); ?>
                    </h3>
                    <p style="color: rgba(255,255,255,0.6); line-height: 1.6;">
                        <?php _e('Program pelatihan dan mentoring untuk pengembangan profesional berkelanjutan.', 'dpattorney'); ?>
                    </p>
                </div>
                
                <!-- Benefit Item -->
                <div class="benefit-item reveal" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-radius: 1rem; padding: 2rem; transition: all 0.3s ease;">
                    <div style="width: 48px; height: 48px; background: rgba(249, 115, 22, 0.1); border-radius: 0.75rem; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color: #f97316;"><circle cx="12" cy="12" r="10"/><path d="M8 14s1.5 2 4 2 4-2 4-2M9 9h.01M15 9h.01"/></svg>
                    </div>
                    <h3 style="font-size: 1.25rem; color: #fff; margin-bottom: 0.75rem;">
                        <?php _e('Budaya Kolaboratif', 'dpattorney'); ?>
                    </h3>
                    <p style="color: rgba(255,255,255,0.6); line-height: 1.6;">
                        <?php _e('Tim yang supportif dan lingkungan kerja yang inklusif dan respek.', 'dpattorney'); ?>
                    </p>
                </div>
                
                <!-- Benefit Item -->
                <div class="benefit-item reveal" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-radius: 1rem; padding: 2rem; transition: all 0.3s ease;">
                    <div style="width: 48px; height: 48px; background: rgba(249, 115, 22, 0.1); border-radius: 0.75rem; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color: #f97316;"><path d="M12 2v20M2 12h20"/></svg>
                    </div>
                    <h3 style="font-size: 1.25rem; color: #fff; margin-bottom: 0.75rem;">
                        <?php _e('Dampak Bermakna', 'dpattorney'); ?>
                    </h3>
                    <p style="color: rgba(255,255,255,0.6); line-height: 1.6;">
                        <?php _e('Bekerja pada kasus yang membuat perbedaan positif di komunitas Asia.', 'dpattorney'); ?>
                    </p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Job Openings -->
    <?php if (!empty($job_openings)) : ?>
    <section class="section" style="border-top: 1px solid rgba(255,255,255,0.1);">
        <div class="container">
            <div class="reveal">
                <h2 style="font-size: 2rem; color: #fff; margin-bottom: 3rem; text-align: center;">
                    <?php _e('Lowongan Pekerjaan Terbuka', 'dpattorney'); ?>
                </h2>
            </div>
            
            <div class="job-openings-list reveal-children" style="display: grid; gap: 1.5rem;">
                <?php 
                foreach ($job_openings as $job) {
                    $job_url = get_permalink($job->ID);
                    $job_location = get_post_meta($job->ID, '_dpattorney_job_location', true);
                    $job_type = get_post_meta($job->ID, '_dpattorney_job_type', true);
                    $job_level = get_post_meta($job->ID, '_dpattorney_job_level', true);
                    $job_excerpt = wp_trim_words($job->post_excerpt ?: $job->post_content, 25);
                    ?>
                    <div class="job-opening-card reveal" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-radius: 1rem; padding: 2rem; transition: all 0.3s ease;">
                        <div style="display: flex; justify-content: space-between; align-items: start; gap: 2rem; margin-bottom: 1rem;">
                            <div>
                                <h3 style="font-size: 1.25rem; color: #fff; margin-bottom: 0.5rem;">
                                    <?php echo esc_html($job->post_title); ?>
                                </h3>
                                <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                                    <?php if ($job_location) : ?>
                                        <span style="display: flex; align-items: center; gap: 0.5rem; color: rgba(255,255,255,0.6); font-size: 0.875rem;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                                            <?php echo esc_html($job_location); ?>
                                        </span>
                                    <?php endif; ?>
                                    <?php if ($job_type) : ?>
                                        <span style="display: flex; align-items: center; gap: 0.5rem; color: rgba(255,255,255,0.6); font-size: 0.875rem;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="14" x="2" y="7" rx="2" ry="2"/><path d="M16 4V2M8 4V2M2 11h20"/></svg>
                                            <?php echo esc_html($job_type); ?>
                                        </span>
                                    <?php endif; ?>
                                    <?php if ($job_level) : ?>
                                        <span style="display: flex; align-items: center; gap: 0.5rem; color: rgba(255,255,255,0.6); font-size: 0.875rem;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v20M5 9h14a2 2 0 0 0-2-2h-10a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-6Z"/></svg>
                                            <?php echo esc_html($job_level); ?>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <a href="<?php echo esc_url($job_url); ?>" class="btn btn-primary btn-sm">
                                <?php _e('Lihat Detail', 'dpattorney'); ?>
                            </a>
                        </div>
                        <p style="color: rgba(255,255,255,0.6); line-height: 1.6;">
                            <?php echo esc_html($job_excerpt); ?>
                        </p>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </section>
    <?php endif; ?>
    
    <!-- CTA Section -->
    <section class="section" style="padding-bottom: 6rem;">
        <div class="container">
            <div class="cta-section reveal" style="text-align: center;">
                <h2 class="cta-title" style="font-size: 2rem; line-height: 1.2; margin-bottom: 1rem;">
                    <?php _e('Siap untuk petualangan baru?', 'dpattorney'); ?>
                </h2>
                <p class="cta-description" style="color: rgba(255,255,255,0.6); margin-bottom: 2rem;">
                    <?php _e('Jangan ragu untuk menghubungi kami dengan pertanyaan tentang peluang karir.', 'dpattorney'); ?>
                </p>
                <a href="<?php echo esc_url(get_page_link(get_page_by_path('kontak')->ID ?? 0)); ?>" class="btn btn-primary">
                    <?php _e('Hubungi HR Kami', 'dpattorney'); ?>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                </a>
            </div>
        </div>
    </section>
    
</main>

<?php 
get_footer();
