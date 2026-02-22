<?php
/**
 * Template Name: Privacy Policy Page
 *
 * The template for displaying the privacy policy page
 *
 * @package D_Pongkor_Partners
 * @since 2.0.0
 */

get_header();
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
                <h1 class="team-title"><?php _e('Kebijakan Privasi', 'dpattorney'); ?></h1>
                <p class="team-description">
                    <?php _e('Informasi tentang bagaimana kami mengumpulkan, menggunakan, dan melindungi data pribadi Anda.', 'dpattorney'); ?>
                </p>
            </div>
        </div>
    </section>
    
    <!-- Content -->
    <section class="legal-page-content section">
        <div class="container">
            <div class="reveal legal-content" style="max-width: 900px; color: rgba(255,255,255,0.8); line-height: 1.8;">
                <?php 
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                        the_content();
                    }
                } else {
                    ?>
                    <h2 style="color: #fff; margin-bottom: 1.5rem; margin-top: 2rem;"><?php _e('1. Pengenalan', 'dpattorney'); ?></h2>
                    <p><?php _e('Dion Pongkor & Partners ("Perusahaan", "kami", "kami", atau "milik kami") mengoperasikan situs web dpattorney.com (selanjutnya disebut "Situs").', 'dpattorney'); ?></p>
                    <p><?php _e('Halaman kebijakan privasi ini menginformasikan kepada Anda tentang kebijakan kami mengenai pengumpulan, penggunaan, dan pengungkapan data pribadi ketika Anda menggunakan Situs kami dan pilihan yang Anda miliki terkait dengan data tersebut.', 'dpattorney'); ?></p>
                    
                    <h2 style="color: #fff; margin-bottom: 1.5rem; margin-top: 2rem;"><?php _e('2. Pengumpulan Data', 'dpattorney'); ?></h2>
                    <p><?php _e('Kami dapat mengumpulkan berbagai jenis informasi dalam koneksi dengan layanan yang kami sediakan, termasuk:', 'dpattorney'); ?></p>
                    <ul style="margin-left: 2rem; margin-bottom: 1rem;">
                        <li><?php _e('Nama, alamat email, dan informasi kontak lainnya', 'dpattorney'); ?></li>
                        <li><?php _e('Data yang Anda berikan melalui formulir di Situs kami', 'dpattorney'); ?></li>
                        <li><?php _e('Informasi tentang penggunaan Situs Anda (log akses, waktu, durasi)', 'dpattorney'); ?></li>
                    </ul>
                    
                    <h2 style="color: #fff; margin-bottom: 1.5rem; margin-top: 2rem;"><?php _e('3. Penggunaan Data', 'dpattorney'); ?></h2>
                    <p><?php _e('Kami menggunakan informasi yang dikumpulkan untuk tujuan berikut:', 'dpattorney'); ?></p>
                    <ul style="margin-left: 2rem; margin-bottom: 1rem;">
                        <li><?php _e('Menyediakan layanan kepada Anda', 'dpattorney'); ?></li>
                        <li><?php _e('Menjalankan dan memelihara Situs kami', 'dpattorney'); ?></li>
                        <li><?php _e('Meningkatkan dan mengoptimalkan Situs kami', 'dpattorney'); ?></li>
                        <li><?php _e('Mengirim komunikasi promosi dan marketing', 'dpattorney'); ?></li>
                    </ul>
                    
                    <h2 style="color: #fff; margin-bottom: 1.5rem; margin-top: 2rem;"><?php _e('4. Keamanan Data', 'dpattorney'); ?></h2>
                    <p><?php _e('Keamanan data pribadi Anda sangat penting bagi kami. Kami menggunakan langkah-langkah keamanan yang sesuai untuk melindungi informasi pribadi Anda dari akses, perubahan, pengungkapan, atau penghancuran yang tidak sah.', 'dpattorney'); ?></p>
                    
                    <h2 style="color: #fff; margin-bottom: 1.5rem; margin-top: 2rem;"><?php _e('5. Kontak Kami', 'dpattorney'); ?></h2>
                    <p><?php _e('Jika Anda memiliki pertanyaan tentang kebijakan privasi ini, silakan hubungi kami:', 'dpattorney'); ?></p>
                    <ul style="margin-left: 2rem; margin-bottom: 1rem;">
                        <li><?php _e('Email: privacy@dpattorney.com', 'dpattorney'); ?></li>
                        <li><?php _e('Alamat: Marina Bay Financial Centre, Singapore 018982', 'dpattorney'); ?></li>
                    </ul>
                    <?php
                }
                ?>
            </div>
        </div>
    </section>
    
    <!-- Last Updated -->
    <section class="section" style="border-top: 1px solid rgba(255,255,255,0.1); padding-top: 2rem; padding-bottom: 2rem;">
        <div class="container">
            <p style="text-align: center; color: rgba(255,255,255,0.5); font-size: 0.875rem;">
                <?php 
                echo sprintf(
                    __('Terakhir diperbarui: %s', 'dpattorney'),
                    esc_html(date_i18n(get_option('date_format')))
                );
                ?>
            </p>
        </div>
    </section>
    
</main>

<?php 
get_footer();
