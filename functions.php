<?php
function unfold_theme_setup(){
    /**
     * Custom Background
     */
    add_theme_support(
        'custom-background',array(
            'default-color' =>  '222'
        )
    );

    /*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

    // Title support
    add_theme_support( 'title-tag' );

    // Html Supports
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
            'navigation-widgets'
        )
    );

    // responsive embeds
    add_theme_support('responsive-embeds');

    // editor style
    add_editor_style('assets/css/editor-style.css');
}
add_action('after_setup_theme','unfold_theme_setup');

/**
 * Register Style
 * @1.0.0
 */
function unfold_register_style(){
    wp_enqueue_style( 'bootstrap', get_theme_file_uri() . '/assets/css/bootstrap.min.css', array(),'1.0.0', 'all' );
    wp_enqueue_style( 'lineIcons', get_theme_file_uri() . '/assets/css/LineIcons.css', array(),'1.0.0', 'all' );
    wp_enqueue_style( 'magnific-popup', get_theme_file_uri() . '/assets/css/magnific-popup.css', array(),'1.0.0', 'all' );
    wp_enqueue_style( 'default', get_theme_file_uri() . '/assets/css/default.css', array(),'1.0.0', 'all' );
    wp_enqueue_style( 'main-style', get_theme_file_uri() . '/assets/css/style.css', array(),'1.0.0', 'all' );
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action('wp_enqueue_scripts','unfold_register_style');

/**
 * Register Script
 * @1.0.0
 */
function unfold_register_script(){
    wp_enqueue_script( 'modernizer', get_theme_file_uri() . '/assets/js/vendor/modernizr-3.6.0.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'bootstrap', get_theme_file_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'popper', get_theme_file_uri() . '/assets/js/popper.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'magnific-popup', get_theme_file_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'parallax', get_theme_file_uri() . '/assets/js/parallax.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'waypoints', get_theme_file_uri() . '/assets/js/waypoints.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'counter', get_theme_file_uri() . '/assets/js/jquery.counterup.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'appear', get_theme_file_uri() . '/assets/js/jquery.appear.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'scrolling-nav', get_theme_file_uri() . '/assets/js/scrolling-nav.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'easing', get_theme_file_uri() . '/assets/js/jquery.easing.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'main', get_theme_file_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true );
}
add_action('wp_enqueue_scripts','unfold_register_script');

/**
 * Unfold Customizer
 */
include_once ( get_theme_file_path('inc/unfold-customizer.php') );

/**
 * Customizer Color
 */
function unfold_customizer_color(){
    ?>
    <style>
        .header-content-right .sub-title{
            color: <?php echo get_theme_mod('hero_sub_title_color'); ?>;
        }
    </style>
    <?php
}
add_action('wp_head','unfold_customizer_color');