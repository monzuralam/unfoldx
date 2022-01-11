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

    /**
     * Custom logo
     */
    $defaults = array(
        'width'     =>  '150',
        'height'    =>  '50',
        'flex-width'=>  true,
        'flex-height'=> true,
        'header-text'=> array( 'site-title', 'site-description')
    );
    add_theme_support('custom-logo');

    /*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

    // Feed link
    add_theme_support( 'automatic-feed-links' );

    /**
     * Custom image size
     */
    add_image_size('blog_thumb', 360, 360, true);

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

    // register menu
    register_nav_menus(array(
        'primary_menu'  =>  __('Primary Menu','unfoldx'),
    ));    
    
    // load textdomain
    load_theme_textdomain( 'unfoldx', get_theme_file_path() . '/languages' );

    // Align
    add_theme_support( "align-wide" );

    // block style
    add_theme_support( "wp-block-styles" );
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
 * Nav Walker
 */
include_once ( get_theme_file_path('inc/class-wp-bootstrap-navwalker.php') );

/**
 * Customizer JS
 */
function unfold_customizer_live_preview(){
    wp_enqueue_script('customizer', get_theme_file_uri() . '/assets/js/customizer.js', array('jquery', 'customize-preview'), '', true);
}
add_action('customize_preview_init','unfold_customizer_live_preview');

/**
 * TGM
 */
require_once( get_theme_file_path('inc/tgm.php') );

/**
 * Pagination
 */
if( ! function_exists('unfold_pagination') ){
    function unfold_pagination(){
        global $wp_query;
        $links = paginate_links( array(
            'current'   =>  max( 1, get_query_var('paged')),
            'total'     =>  $wp_query->max_num_pages,
            'mid'       =>  '',
            'type'      =>  'list'
        ) );
        $links = str_replace("page-numbers","pagination",$links);
        $links = str_replace("<li>","<li class=\"page-item\">",$links);
        $links = str_replace("class=\"pagination\"","class=\"page-link\"",$links);
        $links = str_replace("class=\"pagination current\"","class=\"page-link current\"",$links);
        $links = str_replace("class=\"next pagination\"","class=\"next page-link\"",$links);
        $links = str_replace("<a class=\"prev pagination\"","<a class=\"prev page-link\"",$links);
        echo wp_kses_post( $links );
    }
}

if( ! function_exists('unfold_sidebar_registration') ){
    function unfold_sidebar_registration() {

        // Sidebar #1.
        register_sidebar(
            array(
                'name'        => __( 'Sidebar', 'unfoldx' ),
                'id'          => 'sidebar-1',
                'description' => __( 'Widgets in this area will be displayed in the sidebar.', 'unfoldx' ),
                'before_title'  => '<h2 class="widget-title subheading heading-size-3">',
                'after_title'   => '</h2>',
                'before_widget' => '<div class="widget %2$s"><div class="widget-content">',
                'after_widget'  => '</div></div>',
            )
        );
    
    }
    add_action( 'widgets_init', 'unfold_sidebar_registration' );
}