<?php
/**
 * Demo Content Setup
 *
 * Provides functions to easily set up demo content for the theme
 *
 * @package D_Pongkor_Partners
 * @since 1.0.0
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Create demo team members
 */
function dpattorney_create_demo_team_members() {
    $team_members = array(
        array(
            'name' => 'Dion Pongkor',
            'title' => 'Senior Partner & Founder',
            'excerpt' => 'Pengacara berpengalaman dengan keahlian di bidang hukum korporat dan transaksi internasional.',
            'role' => 'Senior Partner',
            'email' => 'dion@dpattorney.com',
            'phone' => '+62 21 1234 5678',
            'linkedin' => 'https://linkedin.com/in/dionpongkor',
            'expertise' => 'Corporate Law, M&A, International Transactions',
            'education' => "Harvard Law School - J.D.\nUniversity of Indonesia - S.H.",
            'experience' => "20+ years in international corporate law\nHead of M&A Practice\nRepresented Fortune 500 companies",
            'languages' => 'Indonesian, English, Mandarin',
            'awards' => 'Best Lawyer in Corporate Law (Asia)\nTop 100 Lawyers in Southeast Asia',
        ),
        array(
            'name' => 'Maya Wijaya',
            'title' => 'Senior Associate - Intellectual Property',
            'excerpt' => 'Spesialis dalam hak kekayaan intelektual dengan pengalaman puluhan tahun.',
            'role' => 'Senior Associate',
            'email' => 'maya@dpattorney.com',
            'phone' => '+62 21 1234 5679',
            'linkedin' => 'https://linkedin.com/in/mayawijaya',
            'expertise' => 'Intellectual Property, Trademarks, Patents',
            'education' => "Yale Law School - LL.M.\nUniversity of Padjadjaran - S.H.",
            'experience' => "15+ years in IP law\nHandled 200+ trademark registrations\nPatent prosecution experience",
            'languages' => 'Indonesian, English, Japanese',
            'awards' => 'IP Lawyer of the Year 2022\nRecognized by Legal 500 Asia',
        ),
        array(
            'name' => 'Budi Santoso',
            'title' => 'Associate - Corporate Law',
            'excerpt' => 'Pengacara muda berbakat dengan fokus pada hukum perusahaan dan perpajakan.',
            'role' => 'Associate',
            'email' => 'budi@dpattorney.com',
            'phone' => '+62 21 1234 5680',
            'linkedin' => 'https://linkedin.com/in/budisantoso',
            'expertise' => 'Corporate Law, Taxation, Contract Law',
            'education' => "National University of Singapore - LL.B.\nUniversity of Indonesia - S.H.",
            'experience' => "8 years in corporate and tax law\nAssisted in major cross-border transactions",
            'languages' => 'Indonesian, English, Hokkien',
            'awards' => 'Young Lawyer Award 2021',
        ),
    );

    foreach ($team_members as $member) {
        // Check if already exists
        $exists = new WP_Query(array(
            'post_type' => 'team_member',
            'title' => $member['name'],
            'posts_per_page' => 1,
        ));

        if ($exists->found_posts > 0) {
            continue;
        }

        // Create post
        $post_id = wp_insert_post(array(
            'post_type' => 'team_member',
            'post_title' => $member['name'],
            'post_content' => $member['excerpt'],
            'post_excerpt' => $member['excerpt'],
            'post_status' => 'publish',
            'meta_input' => array(
                '_team_role' => $member['role'],
                '_team_email' => $member['email'],
                '_team_phone' => $member['phone'],
                '_team_linkedin' => $member['linkedin'],
                '_team_expertise' => $member['expertise'],
                '_team_education' => $member['education'],
                '_team_experience' => $member['experience'],
                '_team_languages' => $member['languages'],
                '_team_awards' => $member['awards'],
            ),
        ));

        if (!is_wp_error($post_id)) {
            // Add team type taxonomy
            wp_set_post_terms($post_id, array('partner'), 'team_type');
        }
    }
}

/**
 * Create demo practice areas
 */
function dpattorney_create_demo_practice_areas() {
    $practice_areas = array(
        array(
            'name' => 'Corporate Law',
            'description' => 'Kami menyediakan layanan hukum perusahaan komprehensif termasuk penggabungan, akuisisi, dan reorganisasi korporat.',
            'icon' => 'building-2',
            'tags' => 'Mergers, Acquisitions, Corporate Governance',
        ),
        array(
            'name' => 'Intellectual Property',
            'description' => 'Perlindungan komprehensif untuk merek dagang, paten, hak cipta, dan desain industri Anda.',
            'icon' => 'lightbulb',
            'tags' => 'Trademarks, Patents, Copyright, IP Litigation',
        ),
        array(
            'name' => 'Dispute Resolution',
            'description' => 'Litigasi dan arbitrase dalam perselisihan komersial, konstruksi, dan perburuhan.',
            'icon' => 'scale',
            'tags' => 'Litigation, Arbitration, Mediation',
        ),
        array(
            'name' => 'Taxation',
            'description' => 'Strategi pajak dan perencanaan pajak untuk individu dan korporasi multinasional.',
            'icon' => 'calculator',
            'tags' => 'Income Tax, VAT, Transfer Pricing',
        ),
        array(
            'name' => 'Employment Law',
            'description' => 'Konsultasi dan advokasi dalam hukum ketenagakerjaan dan hak asasi manusia.',
            'icon' => 'users',
            'tags' => 'Labor Law, Employment Disputes, Compliance',
        ),
        array(
            'name' => 'Real Estate',
            'description' => 'Transaksi real estat, properti komersial, dan pengembangan lahan.',
            'icon' => 'home',
            'tags' => 'Property Transactions, Land Acquisition, Leasing',
        ),
    );

    foreach ($practice_areas as $area) {
        // Check if already exists
        $exists = new WP_Query(array(
            'post_type' => 'practice_area',
            'title' => $area['name'],
            'posts_per_page' => 1,
        ));

        if ($exists->found_posts > 0) {
            continue;
        }

        // Create post
        $post_id = wp_insert_post(array(
            'post_type' => 'practice_area',
            'post_title' => $area['name'],
            'post_content' => $area['description'],
            'post_excerpt' => $area['description'],
            'post_status' => 'publish',
            'meta_input' => array(
                '_practice_icon' => $area['icon'],
                '_practice_tags' => $area['tags'],
            ),
        ));
    }
}

/**
 * Create demo insights/articles
 */
function dpattorney_create_demo_insights() {
    $insights = array(
        array(
            'title' => 'Perubahan Regulasi Pajak 2024',
            'excerpt' => 'Ikhtisar lengkap tentang perubahan undang-undang pajak terbaru dan dampaknya terhadap bisnis Anda.',
            'content' => 'Pemerintah telah mengumumkan serangkaian perubahan pada ketentuan perpajakan yang akan berlaku mulai tahun fiskal berikutnya. Artikel ini memberikan gambaran lengkap tentang perubahan dan strategi yang dapat diterapkan perusahaan Anda.',
        ),
        array(
            'title' => 'Panduan Perlindungan Merek Dagang di Asia',
            'excerpt' => 'Pelajari cara melindungi merek dagang Anda di berbagai yurisdiksi Asia Tenggara.',
            'content' => 'Seiring dengan pertumbuhan bisnis regional, penting untuk memahami proses pendaftaran merek di setiap negara. Panduan komprehensif ini mencakup persyaratan, biaya, dan timeline untuk masing-masing yurisdiksi.',
        ),
        array(
            'title' => 'Tren Litigasi Korporat di Indonesia',
            'excerpt' => 'Analisis mendalam tentang litigasi korporat dan strategi penyelesaian sengketa yang efektif.',
            'content' => 'Tim ahli kami telah menganalisis tren litigasi korporat terkini dan mengidentifikasi faktor-faktor yang mempengaruhi hasil keputusan pengadilan. Pelajari strategi untuk meminimalkan risiko litigasi Anda.',
        ),
    );

    foreach ($insights as $insight) {
        // Check if already exists
        $exists = new WP_Query(array(
            'post_type' => 'insight',
            'title' => $insight['title'],
            'posts_per_page' => 1,
        ));

        if ($exists->found_posts > 0) {
            continue;
        }

        // Create post
        wp_insert_post(array(
            'post_type' => 'insight',
            'post_title' => $insight['title'],
            'post_content' => $insight['content'],
            'post_excerpt' => $insight['excerpt'],
            'post_status' => 'publish',
        ));
    }
}

/**
 * Create demo job openings
 */
function dpattorney_create_demo_job_openings() {
    $jobs = array(
        array(
            'title' => 'Senior Lawyer - Corporate Law',
            'excerpt' => 'Kami mencari Senior Lawyer berpengalaman untuk memperkuat tim Corporate Law kami.',
            'content' => 'Posisi ini menawarkan kesempatan untuk bekerja dengan klien-klien terkemuka dalam transaksi korporat skala besar. Requirements: Minimal 10 tahun pengalaman di bidang corporate law.',
        ),
        array(
            'title' => 'IP Paralegal',
            'excerpt' => 'Paralegal berpengalaman untuk mendukung tim Intellectual Property kami.',
            'content' => 'Kami mencari profesional paralegal untuk membantu dalam persiapan dokumen, penelitian, dan administrasi kasus IP. Requirements: Pengetahuan tentang IP law dan pengalaman paralegal minimal 3 tahun.',
        ),
    );

    foreach ($jobs as $job) {
        // Check if already exists
        $exists = new WP_Query(array(
            'post_type' => 'job_opening',
            'title' => $job['title'],
            'posts_per_page' => 1,
        ));

        if ($exists->found_posts > 0) {
            continue;
        }

        // Create post
        wp_insert_post(array(
            'post_type' => 'job_opening',
            'post_title' => $job['title'],
            'post_content' => $job['content'],
            'post_excerpt' => $job['excerpt'],
            'post_status' => 'publish',
        ));
    }
}

/**
 * Create demo taxonomies
 */
function dpattorney_create_demo_taxonomies() {
    // Team types
    $team_types = array('Partner', 'Senior Associate', 'Associate', 'Counsel');
    foreach ($team_types as $type) {
        if (!term_exists($type, 'team_type')) {
            wp_insert_term($type, 'team_type');
        }
    }

    // Practice categories
    $practice_cats = array('Corporate', 'Litigation', 'Intellectual Property');
    foreach ($practice_cats as $cat) {
        if (!term_exists($cat, 'practice_category')) {
            wp_insert_term($cat, 'practice_category');
        }
    }

    // Insight categories
    $insight_cats = array('News', 'Tips', 'Analysis');
    foreach ($insight_cats as $cat) {
        if (!term_exists($cat, 'insight_category')) {
            wp_insert_term($cat, 'insight_category');
        }
    }
}

/**
 * Admin notice for demo content setup
 */
function dpattorney_demo_content_notice() {
    $screen = get_current_screen();

    if (!isset($_GET['dpattorney_demo_setup']) || $_GET['dpattorney_demo_setup'] !== '1') {
        return;
    }

    // Check if user can manage options
    if (!current_user_can('manage_options')) {
        return;
    }

    // Create demo content
    dpattorney_create_demo_taxonomies();
    dpattorney_create_demo_team_members();
    dpattorney_create_demo_practice_areas();
    dpattorney_create_demo_insights();
    dpattorney_create_demo_job_openings();

    // Show success message
    add_action('admin_notices', function() {
        ?>
        <div class="notice notice-success is-dismissible">
            <p>
                <?php _e('Demo content has been created successfully!', 'dpattorney'); ?>
            </p>
        </div>
        <?php
    });
}

// Uncomment to enable automatic demo setup on theme activation
// add_action('admin_init', 'dpattorney_demo_content_notice', 11);
