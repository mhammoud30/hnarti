<?php
/**
 * Hnarti Theme Functions
 */

// Theme setup
function hnarti_theme_setup() {
    // Add default posts and comments RSS feed links to head
    add_theme_support( 'automatic-feed-links' );

    // Let WordPress manage the document title
    add_theme_support( 'title-tag' );

    // Enable support for Post Thumbnails on posts and pages
    add_theme_support( 'post-thumbnails' );

    // Add support for responsive embeds
    add_theme_support( 'responsive-embeds' );

    // Add support for custom logo
    add_theme_support( 'custom-logo' );

    // Register nav menus
    register_nav_menus(
        array(
            'header-left'  => esc_html__( 'Header Left Menu', 'hnarti' ),
            'header-right' => esc_html__( 'Header Right Menu', 'hnarti' ),
            'primary'      => esc_html__( 'Primary Menu', 'hnarti' ),
            'footer'       => esc_html__( 'Footer Menu', 'hnarti' )
        )
    );
}
add_action( 'after_setup_theme', 'hnarti_theme_setup' );

// Enqueue scripts and styles
function hnarti_enqueue_assets() {
    // Enqueue header stylesheet
    wp_enqueue_style('hnarti-header-style', get_template_directory_uri() . '/assets/css/header.css', array(), '1.0.0');
    // Enqueue main stylesheet
    wp_enqueue_style('hnarti-style', get_template_directory_uri() . '/assets/css/main.css', array('hnarti-header-style'), '1.0.0');
    
    // Enqueue main JavaScript file
    wp_enqueue_script('hnarti-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true);

    // If you're using the comment form, enqueue the reply script
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action('wp_enqueue_scripts', 'hnarti_enqueue_assets');

// Add custom image sizes if needed
// add_image_size( 'hnarti-thumbnail', 300, 200, true );

// Register widget area if needed
function hnarti_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'hnarti' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here.', 'hnarti' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'hnarti_widgets_init' );

// Custom template tags for this theme
require get_template_directory() . '/inc/template-tags.php';

// Functions which enhance the theme by hooking into WordPress
require get_template_directory() . '/inc/template-functions.php';

// Customizer additions
require get_template_directory() . '/inc/customizer.php';

function enqueue_custom_font() {
    wp_enqueue_style('custom-font', get_template_directory_uri() . '/fonts/font-style.css');
}
add_action('wp_enqueue_scripts', 'enqueue_custom_font');

function enqueue_compass_script() {
    wp_enqueue_script(
        'compass-script',
        get_template_directory_uri() . '/assets/js/compass.js',
        array('jquery'), // Add jQuery as a dependency if you're using it
        '1.0.0',
        true // Load in footer for better performance
    );
}
add_action('wp_enqueue_scripts', 'enqueue_compass_script');