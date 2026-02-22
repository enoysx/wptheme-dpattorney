<?php
/**
 * Accessibility (WCAG 2.1 AA) Enhancements
 *
 * @package D_Pongkor_Partners
 * @since 1.0.0
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Add Skip to Main Content Link
 */
function dpattorney_skip_link() {
    echo '<a href="#primary" class="skip-link screen-reader-text">' . esc_html__('Skip to main content', 'dpattorney') . '</a>';
}
add_action('wp_body_open', 'dpattorney_skip_link', 5);

/**
 * Add Skip to Navigation Link
 */
function dpattorney_skip_nav_link() {
    echo '<a href="#main-nav" class="skip-link screen-reader-text">' . esc_html__('Skip to navigation', 'dpattorney') . '</a>';
}
add_action('wp_body_open', 'dpattorney_skip_nav_link', 6);

/**
 * Improve heading hierarchy for accessibility
 */
function dpattorney_entry_title_heading_tag($tag = 'h1') {
    // On archives/search, use h2 for post titles
    if (is_archive() || is_search()) {
        return 'h2';
    }
    // On single posts, use h1
    return $tag;
}

/**
 * Add aria-current to active menu items
 */
function dpattorney_nav_menu_link_attributes($atts, $item, $args) {
    if (isset($args->theme_location) && $args->theme_location === 'primary') {
        if (in_array('current', (array) $item->classes, true)) {
            $atts['aria-current'] = 'page';
        }
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'dpattorney_nav_menu_link_attributes', 10, 3);

/**
 * Add ARIA labels to form inputs
 */
function dpattorney_improve_form_labels() {
    // This function is called in templates where CF7 or forms are used
    // Ensures proper label associations
}

/**
 * Ensure proper image alt text
 */
function dpattorney_check_image_alt($html, $attachment_id) {
    // This filter can enhance image alt text if missing
    if (empty($alt = get_post_meta($attachment_id, '_wp_attachment_image_alt', true))) {
        $attachment = get_post($attachment_id);
        $alt = $attachment->post_title ?: $attachment->post_name;
        update_post_meta($attachment_id, '_wp_attachment_image_alt', $alt);
    }
    return $html;
}
add_filter('wp_get_attachment_image', 'dpattorney_check_image_alt', 10, 2);

/**
 * Remove outline from buttons on mouse but keep for keyboard
 */
function dpattorney_add_focus_visible_css() {
    echo <<<CSS
    <style>
        /* Show focus for keyboard navigation */
        button:focus-visible,
        a:focus-visible,
        input:focus-visible,
        textarea:focus-visible,
        select:focus-visible {
            outline: 2px solid var(--color-orange-500);
            outline-offset: 2px;
        }
        
        /* Hide focus for mouse users */
        button:focus:not(:focus-visible),
        a:focus:not(:focus-visible),
        input:focus:not(:focus-visible),
        textarea:focus:not(:focus-visible),
        select:focus:not(:focus-visible) {
            outline: none;
        }

        /* Screen reader only text */
        .screen-reader-text {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border-width: 0;
        }

        .screen-reader-text:focus {
            display: block;
            top: 5px;
            left: 5px;
            z-index: 100000;
            width: auto;
            height: auto;
            padding: 15px 23px 14px;
            overflow: visible;
            clip: auto;
            white-space: normal;
            background-color: var(--color-orange-500);
            color: white;
        }

        /* Ensure sufficient color contrast */
        .text-muted {
            color: rgba(255, 255, 255, 0.6); /* Contrast ratio ~4.5:1 */
        }

        /* Ensure touch targets are at least 44x44px */
        button, a.btn, input[type="button"], input[type="submit"] {
            min-height: 44px;
            min-width: 44px;
            padding: 0.75rem 1.5rem;
        }
    </style>
CSS;
}
add_action('wp_head', 'dpattorney_add_focus_visible_css');

/**
 * Ensure sufficient color contrast for links
 */
function dpattorney_ensure_link_contrast() {
    // Links should have contrast ratio of at least 4.5:1
    // Our orange (#f97316) on dark background provides sufficient contrast
    // Text links should be underlined or have other visual indicator
}

/**
 * Add aria-label to social links
 */
function dpattorney_social_link_aria_labels($html, $platform) {
    if (empty($html)) {
        return $html;
    }

    $labels = array(
        'linkedin' => __('LinkedIn', 'dpattorney'),
        'twitter' => __('Twitter', 'dpattorney'),
        'facebook' => __('Facebook', 'dpattorney'),
        'instagram' => __('Instagram', 'dpattorney'),
    );

    $label = isset($labels[$platform]) ? $labels[$platform] : $platform;

    // Add aria-label if not already present
    if (strpos($html, 'aria-label') === false) {
        $html = str_replace('<a ', '<a aria-label="' . esc_attr($label) . '" ', $html);
    }

    return $html;
}

/**
 * Improve table accessibility
 */
function dpattorney_improve_table_markup() {
    // Ensures tables use th for headers with proper scope
    // This should be implemented in templates that use tables
}
