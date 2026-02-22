<?php
/**
 * Schema Markup for SEO
 *
 * @package D_Pongkor_Partners
 * @since 1.0.0
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Output Organization Schema
 */
function dpattorney_organization_schema() {
    $schema = array(
        '@context' => 'https://schema.org',
        '@type' => 'LegalService',
        'name' => get_bloginfo('name'),
        'url' => get_home_url(),
        'image' => get_theme_mod('dpattorney_org_logo', get_template_directory_uri() . '/assets/images/logo.png'),
        'description' => get_bloginfo('description'),
        'telephone' => get_theme_mod('dpattorney_contact_phone', '+65 6123 4567'),
        'email' => get_theme_mod('dpattorney_contact_email', 'contact@dpattorney.com'),
        'address' => array(
            '@type' => 'PostalAddress',
            'streetAddress' => get_theme_mod('dpattorney_address_street', ''),
            'addressLocality' => get_theme_mod('dpattorney_address_city', ''),
            'addressRegion' => get_theme_mod('dpattorney_address_state', ''),
            'postalCode' => get_theme_mod('dpattorney_address_zip', ''),
            'addressCountry' => get_theme_mod('dpattorney_address_country', 'ID'),
        ),
        'sameAs' => array(
            get_theme_mod('dpattorney_linkedin', ''),
            get_theme_mod('dpattorney_twitter', ''),
            get_theme_mod('dpattorney_facebook', ''),
            get_theme_mod('dpattorney_instagram', ''),
        ),
    );

    // Filter out empty URLs
    $schema['sameAs'] = array_filter($schema['sameAs']);

    echo '<script type="application/ld+json">';
    echo wp_json_encode($schema);
    echo '</script>';
}
add_action('wp_head', 'dpattorney_organization_schema');

/**
 * Output Person Schema for Team Members
 */
function dpattorney_person_schema() {
    if (!is_singular('team_member')) {
        return;
    }

    $post_id = get_the_ID();
    $role = get_post_meta($post_id, '_team_role', true);
    $email = get_post_meta($post_id, '_team_email', true);
    $phone = get_post_meta($post_id, '_team_phone', true);
    $linkedin = get_post_meta($post_id, '_team_linkedin', true);
    $expertise = dpattorney_parse_comma_array(get_post_meta($post_id, '_team_expertise', true));

    $schema = array(
        '@context' => 'https://schema.org',
        '@type' => 'Person',
        'name' => get_the_title(),
        'jobTitle' => $role,
        'url' => get_permalink(),
        'sameAs' => array(),
    );

    if (has_post_thumbnail()) {
        $schema['image'] = get_the_post_thumbnail_url($post_id, 'full');
    }

    if ($email) {
        $schema['email'] = $email;
    }

    if ($phone) {
        $schema['telephone'] = dpattorney_format_phone($phone);
    }

    if ($linkedin) {
        $schema['sameAs'][] = $linkedin;
    }

    if (!empty($expertise)) {
        $schema['knowsAbout'] = $expertise;
    }

    // Add to organization schema
    $schema['worksFor'] = array(
        '@type' => 'LegalService',
        'name' => get_bloginfo('name'),
        'url' => get_home_url(),
    );

    echo '<script type="application/ld+json">';
    echo wp_json_encode($schema);
    echo '</script>';
}
add_action('wp_head', 'dpattorney_person_schema');

/**
 * Output Breadcrumb Schema
 */
function dpattorney_breadcrumb_schema() {
    if (is_front_page()) {
        return;
    }

    $breadcrumbs = array(
        array(
            '@type' => 'ListItem',
            'position' => 1,
            'name' => get_bloginfo('name'),
            'item' => get_home_url(),
        ),
    );

    $position = 2;

    // Add current page
    if (is_singular()) {
        if (is_singular('team_member')) {
            $breadcrumbs[] = array(
                '@type' => 'ListItem',
                'position' => $position++,
                'name' => __('Tim Kami', 'dpattorney'),
                'item' => get_post_type_archive_link('team_member'),
            );
        } elseif (is_singular('practice_area')) {
            $breadcrumbs[] = array(
                '@type' => 'ListItem',
                'position' => $position++,
                'name' => __('Area Praktik', 'dpattorney'),
                'item' => get_post_type_archive_link('practice_area'),
            );
        } elseif (is_singular('insight')) {
            $breadcrumbs[] = array(
                '@type' => 'ListItem',
                'position' => $position++,
                'name' => __('Wawasan', 'dpattorney'),
                'item' => get_post_type_archive_link('insight'),
            );
        }

        $breadcrumbs[] = array(
            '@type' => 'ListItem',
            'position' => $position,
            'name' => get_the_title(),
            'item' => get_permalink(),
        );
    } elseif (is_post_type_archive()) {
        $post_type = get_post_type();
        $post_type_object = get_post_type_object($post_type);
        $breadcrumbs[] = array(
            '@type' => 'ListItem',
            'position' => $position,
            'name' => $post_type_object ? $post_type_object->labels->name : __('Archive', 'dpattorney'),
            'item' => get_post_type_archive_link($post_type),
        );
    }

    $schema = array(
        '@context' => 'https://schema.org',
        '@type' => 'BreadcrumbList',
        'itemListElement' => $breadcrumbs,
    );

    echo '<script type="application/ld+json">';
    echo wp_json_encode($schema);
    echo '</script>';
}
add_action('wp_head', 'dpattorney_breadcrumb_schema');
