<?php
/**
 * CSS and JS enqueueing
 */
add_action( 'wp_enqueue_scripts', function () {
    // Styles
    wp_enqueue_style( 'add_google_fonts', 'https://fonts.googleapis.com/css2?family=Jost&display=swap', [], '1.0.0', 'all' );
    wp_enqueue_style( 'main-style', get_template_directory_uri() . '/css/main-style.css', ['add_google_fonts'], '1.0.0', 'all' );

    // JS
} );

/**
 * Theme Features
 */
add_action( 'after_setup_theme', function () {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'menus' );

    // Registering Menus
    register_nav_menu( 'primary', 'Header Navigation Menu' );
} );

/**
 * WPBakery elements include
 */
// if ( file_exists( get_template_directory() . '/custom-vc-param-type/file_picker.php' ) ) {
//     require_once get_template_directory() . '/custom-vc-param-type/file_picker.php';
// }
if ( file_exists( get_template_directory() . '/template-shortcodes/section_1-hero.php' ) ) {
    require_once get_template_directory() . '/template-shortcodes/section_1-hero.php';
}
if ( file_exists( get_template_directory() . '/template-shortcodes/section_2-about.php' ) ) {
    require_once get_template_directory() . '/template-shortcodes/section_2-about.php';
}
if ( file_exists( get_template_directory() . '/template-shortcodes/section_3-experience.php' ) ) {
    require_once get_template_directory() . '/template-shortcodes/section_3-experience.php';
}
if ( file_exists( get_template_directory() . '/template-shortcodes/section_4-footer.php' ) ) {
    require_once get_template_directory() . '/template-shortcodes/section_4-footer.php';
}