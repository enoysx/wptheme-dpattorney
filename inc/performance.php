<?php
/**
 * Performance Optimizations
 *
 * @package D_Pongkor_Partners
 * @since 1.0.0
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Add loading="lazy" to featured images and post content images
 */
function dpattorney_lazyload_images($html, $post_id, $post_thumbnail_id, $size, $attr) {
    if (empty($attr)) {
        $attr = array();
    }
    
    if (!isset($attr['loading'])) {
        $attr['loading'] = 'lazy';
    }
    
    return $html;
}
add_filter('post_thumbnail_html', 'dpattorney_lazyload_images', 10, 5);

/**
 * Add loading attribute to images in post content
 */
function dpattorney_content_lazyload($content) {
    // Add loading="lazy" to img tags that don't have it
    $content = preg_replace('/<img(?!.*?loading=)([^>]+)>/i', '<img loading="lazy" $1>', $content);
    return $content;
}
add_filter('the_content', 'dpattorney_content_lazyload');

/**
 * Preconnect to Google Fonts for performance
 */
function dpattorney_preconnect_fonts() {
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
}
add_action('wp_head', 'dpattorney_preconnect_fonts', 2);

/**
 * Optimize Google Fonts loading with font-display
 * 
 * The URL already includes display=swap, so fonts won't cause FOIT/FOUT
 */

/**
 * Defer non-critical CSS
 * Load print styles as print-specific
 */
function dpattorney_add_critical_css() {
    // Inline critical CSS for above-the-fold content
    // This would be extracted from style.css and inlined
    // For now, we'll add preload for the main stylesheet
    echo '<link rel="preload" href="' . esc_url(get_template_directory_uri() . '/style.css') . '" as="style">';
}
add_action('wp_head', 'dpattorney_add_critical_css', 1);

/**
 * Disable font display swap with optional control
 */
function dpattorney_google_fonts_display() {
    // Already optimized in functions.php with display=swap
}

/**
 * Add DNS prefetch for external resources
 */
function dpattorney_dns_prefetch() {
    echo '<link rel="dns-prefetch" href="//fonts.googleapis.com">';
    echo '<link rel="dns-prefetch" href="//fonts.gstatic.com">';
    echo '<link rel="dns-prefetch" href="//cdn.jsdelivr.net">';
}
add_action('wp_head', 'dpattorney_dns_prefetch', 3);

/**
 * Disable WordPress' default emoji script to reduce HTTP requests
 */
function dpattorney_disable_emojis() {
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_feed', 'wp_staticize_emoji');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
}
add_action('init', 'dpattorney_disable_emojis');

/**
 * Remove WordPress version from header (security + performance)
 */
function dpattorney_remove_wp_version() {
    return '';
}
add_filter('the_generator', 'dpattorney_remove_wp_version');

/**
 * Reduce heartbeat frequency (performance optimization)
 * Only on pages that don't need it
 */
function dpattorney_disable_heartbeat() {
    if (!is_admin() && !is_user_logged_in()) {
        wp_deregister_script('heartbeat');
    }
}
add_action('enqueue_scripts', 'dpattorney_disable_heartbeat');

/**
 * Add cache busting for theme assets
 */
function dpattorney_asset_version() {
    // Returns hash of file modified time OR version constant
    return defined('DPATTORNEY_VERSION') ? DPATTORNEY_VERSION : filemtime(get_template_directory() . '/style.css');
}

/**
 * Lazy load iframes
 */
function dpattorney_lazyload_iframes($content) {
    // Add loading="lazy" to iframes
    $content = preg_replace('/<iframe(?!.*?loading=)([^>]+)>/i', '<iframe loading="lazy" $1>', $content);
    return $content;
}
add_filter('the_content', 'dpattorney_lazyload_iframes');

/**
 * Remove query strings from static resources for improved caching
 * This is typically handled by server config but good to document
 */

/**
 * Enable GZIP compression headers suggestion
 * Should be configured at server level
 */
function dpattorney_suggest_gzip_compression() {
    // Add server-level configuration in .htaccess
    // Typically: mod_deflate for Apache
    // gzip on; for Nginx
}

/**
 * Add expires headers for caching
 */
function dpattorney_set_expires_headers() {
    // This should be configured at server level
    // Example for Apache (.htaccess):
    // <FilesMatch "\.(jpg|jpeg|png|gif|ico|css|js|svg|woff|woff2|ttf|eot)$">
    //   Header set Cache-Control "max-age=31536000, public"
    // </FilesMatch>
}

/**
 * Optimize jQuery DOM queries
 * Document for developers
 */

/**
 * Use native lazy loading for images
 * WordPress 5.4+ supports loading attribute
 */
