<?php
/**
 * Template Name: Terms & Conditions Page
 *
 * The template for displaying the terms and conditions page
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
                <h1 class="team-title"><?php _e('Syarat & Ketentuan', 'dpattorney'); ?></h1>
                <p class="team-description">
                    <?php _e('Syarat dan ketentuan untuk penggunaan layanan dan situs web kami.', 'dpattorney'); ?>
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
                    <h2 style="color: #fff; margin-bottom: 1.5rem; margin-top: 2rem;"><?php _e('1. Penerimaan Persyaratan', 'dpattorney'); ?></h2>
                    <p><?php _e('Dengan mengakses dan menggunakan situs web Dion Pongkor & Partners, Anda menerima dan setuju untuk terikat oleh syarat dan ketentuan penggunaan ini.', 'dpattorney'); ?></p>
                    
                    <h2 style="color: #fff; margin-bottom: 1.5rem; margin-top: 2rem;"><?php _e('2. Lisensi Penggunaan', 'dpattorney'); ?></h2>
                    <p><?php _e('Izin diberikan untuk sementara untuk menampilkan (bukan mengunduh) satu salinan materi (informasi atau perangkat lunak) di situs Dion Pongkor & Partners untuk tujuan tampilan pribadi, tidak komersial saja. Ini adalah pemberian lisensi, bukan transfer kepemilikan, dan di bawah lisensi ini Anda tidak boleh:', 'dpattorney'); ?></p>
                    <ul style="margin-left: 2rem; margin-bottom: 1rem;">
                        <li><?php _e('Memodifikasi atau menyalin materi', 'dpattorney'); ?></li>
                        <li><?php _e('Menggunakan materi untuk tujuan komersial atau untuk tampilan publik', 'dpattorney'); ?></li>
                        <li><?php _e('Mencoba untuk mengkompilasi skema atau makna bersembunyi dari situs web ini', 'dpattorney'); ?></li>
                        <li><?php _e('Mengirim atau mengirimkan ulang materi ke orang lain atau "mencerminkan" materi di komputer server lain', 'dpattorney'); ?></li>
                        <li><?php _e('Menghapus pemberitahuan hak cipta atau kepemilikan dari materi', 'dpattorney'); ?></li>
                    </ul>
                    
                    <h2 style="color: #fff; margin-bottom: 1.5rem; margin-top: 2rem;"><?php _e('3. Pelepasan Tanggung Jawab', 'dpattorney'); ?></h2>
                    <p><?php _e('Materi di situs Dion Pongkor & Partners disediakan tanpa jaminan atau representasi jenis apa pun. Kami tidak membuat representasi tentang keakuratan, kelengkapan, atau kesesuaian informasi yang ada di situs web ini untuk tujuan apa pun.', 'dpattorney'); ?></p>
                    
                    <h2 style="color: #fff; margin-bottom: 1.5rem; margin-top: 2rem;"><?php _e('4. Pembatasan Tanggung Jawab', 'dpattorney'); ?></h2>
                    <p><?php _e('Dalam hal apa pun, Dion Pongkor & Partners atau penyerah lisensinya tidak akan bertanggung jawab kepada Anda atas kerugian atau kerusakan apa pun, termasuk tanpa batasan kerugian tidak langsung, insidental, khusus, atau konsekuensial.', 'dpattorney'); ?></p>
                    
                    <h2 style="color: #fff; margin-bottom: 1.5rem; margin-top: 2rem;"><?php _e('5. Akurasi Materi', 'dpattorney'); ?></h2>
                    <p><?php _e('Materi yang muncul di situs Dion Pongkor & Partners mungkin mencakup kesalahan teknis, tipografi, atau fotografi. Dion Pongkor & Partners tidak menjamin bahwa materi apa pun di situs internetnya akurat, lengkap, atau terkini.', 'dpattorney'); ?></p>
                    
                    <h2 style="color: #fff; margin-bottom: 1.5rem; margin-top: 2rem;"><?php _e('6. Modifikasi Syarat', 'dpattorney'); ?></h2>
                    <p><?php _e('Dion Pongkor & Partners dapat merevisi syarat dan ketentuan penggunaan situs webnya kapan saja tanpa pemberitahuan. Dengan menggunakan situs ini, Anda setuju untuk terikat oleh versi terbaru dari syarat dan ketentuan ini.', 'dpattorney'); ?></p>
                    
                    <h2 style="color: #fff; margin-bottom: 1.5rem; margin-top: 2rem;"><?php _e('7. Kontak Kami', 'dpattorney'); ?></h2>
                    <p><?php _e('Jika Anda memiliki pertanyaan tentang syarat dan ketentuan ini, silakan hubungi kami:', 'dpattorney'); ?></p>
                    <ul style="margin-left: 2rem; margin-bottom: 1rem;">
                        <li><?php _e('Email: legal@dpattorney.com', 'dpattorney'); ?></li>
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
