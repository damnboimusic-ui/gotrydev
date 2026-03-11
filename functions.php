<?php
/**
 * Gotry Theme Functions
 */

// Підключення стилів та скриптів
function gotry_enqueue_styles() {
    // Автоматичне версіонування через filemtime для cache busting
    $style_version = file_exists(get_stylesheet_directory() . '/style.css') 
        ? filemtime(get_stylesheet_directory() . '/style.css') 
        : '3.1.0';
    
    // Google Fonts - Manrope (отличная кириллица для креативной студии)
    wp_enqueue_style(
        'google-fonts-manrope',
        'https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&display=swap',
        array(),
        null
    );
    
    // Lenis CSS для smooth scroll
    wp_enqueue_style(
        'lenis-css',
        'https://cdn.jsdelivr.net/npm/lenis@1.2.3/dist/lenis.css',
        array(),
        '1.2.3'
    );

    // Swiper styles
    wp_enqueue_style(
        'swiper',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css',
        array(),
        '11.0.0'
    );
    
    // Основні стилі теми
    wp_enqueue_style(
        'gotry-style',
        get_stylesheet_uri(),
        array('google-fonts-manrope', 'lenis-css', 'swiper'),
        $style_version
    );
    
    // Lenis smooth scroll library (потрібен для всіх сторінок)
    wp_enqueue_script(
        'lenis',
        'https://cdn.jsdelivr.net/npm/lenis@1.2.3/dist/lenis.min.js',
        array(),
        '1.2.3',
        true
    );

    // Swiper JS
    wp_enqueue_script(
        'swiper',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
        array(),
        '11.0.0',
        true
    );
    
    // Main JS для Lenis ініціалізації (для всіх сторінок)
    $main_js_version = file_exists(get_stylesheet_directory() . '/assets/js/main.js')
        ? filemtime(get_stylesheet_directory() . '/assets/js/main.js')
        : '3.1.0';
    
    wp_enqueue_script(
        'gotry-main',
        get_template_directory_uri() . '/assets/js/main.js',
        array('lenis', 'swiper'),
        $main_js_version,
        true
    );
    
    
    // Lens-effect прибрано для оптимізації
}
add_action('wp_enqueue_scripts', 'gotry_enqueue_styles');

// Очищення кешу при збереженні теми
function gotry_clear_cache() {
    // Спроба очистити різні типи кешу
    if (function_exists('wp_cache_flush')) {
        wp_cache_flush();
    }
    if (function_exists('w3tc_flush_all')) {
        w3tc_flush_all();
    }
    if (function_exists('wp_super_cache_flush')) {
        wp_super_cache_flush();
    }
}
add_action('after_switch_theme', 'gotry_clear_cache');

// Підтримка основних WordPress функцій
function gotry_setup() {
    // Title tag
    add_theme_support('title-tag');
    
    // HTML5 підтримка
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    
    // Post thumbnails
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'gotry_setup');

// Прибрати admin bar на головній для чистого вигляду
add_filter('show_admin_bar', function($show) {
    if (is_front_page() && !is_admin()) {
        return false;
    }
    return $show;
});

/**
 * Single source of truth for primary booking link.
 */
function gotry_get_booking_url() {
    $default_url = 'https://calendly.com/antongotry/30min';
    $raw_url = get_theme_mod('gotry_booking_url', $default_url);
    $booking_url = esc_url_raw(trim((string) $raw_url));

    if (empty($booking_url) || !wp_http_validate_url($booking_url)) {
        $booking_url = $default_url;
    }

    return apply_filters('gotry_booking_url', $booking_url);
}

/**
 * Contact form redirect helper.
 */
function gotry_contact_redirect_with_status($status) {
    $redirect_url = add_query_arg(
        'contact_status',
        sanitize_key($status),
        home_url('/#contact')
    );

    wp_safe_redirect($redirect_url);
    exit;
}

/**
 * Front-page contact form handler.
 */
function gotry_handle_contact_submit() {
    if (!isset($_POST['gotry_contact_nonce']) || !wp_verify_nonce($_POST['gotry_contact_nonce'], 'gotry_contact_submit')) {
        gotry_contact_redirect_with_status('invalid');
    }

    $name = isset($_POST['name']) ? sanitize_text_field(wp_unslash($_POST['name'])) : '';
    $email = isset($_POST['email']) ? sanitize_email(wp_unslash($_POST['email'])) : '';
    $message = isset($_POST['message']) ? sanitize_textarea_field(wp_unslash($_POST['message'])) : '';

    if (empty($name) || empty($email) || !is_email($email) || empty($message)) {
        gotry_contact_redirect_with_status('invalid');
    }

    $to = get_option('admin_email');
    $subject = sprintf('Нова заявка з сайту Gotry від %s', $name);
    $body = "Ім'я: {$name}\n";
    $body .= "Email: {$email}\n\n";
    $body .= "Повідомлення:\n{$message}\n";

    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        "Reply-To: {$name} <{$email}>",
    );

    $sent = wp_mail($to, $subject, $body, $headers);

    if ($sent) {
        gotry_contact_redirect_with_status('success');
    }

    gotry_contact_redirect_with_status('error');
}
add_action('admin_post_nopriv_gotry_contact_submit', 'gotry_handle_contact_submit');
add_action('admin_post_gotry_contact_submit', 'gotry_handle_contact_submit');
