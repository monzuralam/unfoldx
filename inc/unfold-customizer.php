<?php
function unfold_cusomize_register($wp_customize){

    $wp_customize->add_section(
        'hero_section',
        array(
            'title'     =>  esc_html__('Hero Section', 'unfold'),
            'capability' =>  'edit_theme_options',
            'priority'  =>  35
        )
    );

    $wp_customize->add_setting( 'hero_sub_title', array(
        'default'   =>  'HELLO, I’M',
        'transport' =>  'postMessage' //PostMessage
    ));

    $wp_customize->add_control( 'hero_subtitle_ctrl', array(
        'label'    =>  __('Sub Title', 'unfold'),
        'settings'  =>  'hero_sub_title',
        'section'   =>  'hero_section',
        'type'      =>  'text'
    ));

    $wp_customize -> add_setting( 'hero_sub_title_color', array(
        'default'   =>  '#754ef9',
        'transport' =>  'postMessage' // PostMessage
    ));

    $wp_customize -> add_control( new WP_Customize_Color_Control( $wp_customize, 'hero_sub_title_color_ctrl', array(
        'label' =>  __('Sub Title color','unfold'),
        'settings'  =>  'hero_sub_title_color',
        'section'   =>  'hero_section'
    )));

    $wp_customize->add_setting( 'hero_title', array(
        'default'   =>  'MARK PARKER',
        'transport' =>  'refresh' //PostMessage
    ));

    $wp_customize->add_control('hero_title_ctrl', array(
        'label'     =>  __('Name', 'unfold'),
        'settings'  =>  'hero_title',
        'section'   =>  'hero_section',
        'type'      =>  'text',
    ));

    $wp_customize->add_setting( 'hero_description', array(
        'default'   =>  'A Freelance UI Designer & Web Developer',
        'transport' =>  'refresh' //PostMessage
    ));

    $wp_customize->add_control( 'hero_description_ctrl', array(
        'label'    =>  __('Subtitle', 'unfold'),
        'settings'  =>  'hero_description',
        'section'   =>  'hero_section',
        'type'      =>  'text'
    ));

    $wp_customize->add_setting( 'hero_button_text', array(
        'default'   =>  'View My Work',
        'transport' =>  'refresh'   // PostMessage
    ));

    $wp_customize->add_control( 'hero_button_text_ctrl', array(
        'label'     =>  __('Button Text','unfold'),
        'settings'  =>  'hero_button_text',
        'section'   =>  'hero_section',
        'type'      =>  'text'
    ));

    $wp_customize->add_setting( 'hero_button_url', array(
        'default'   =>  '#',
        'transport' =>  'refresh' // PostMessage
    ));

    $wp_customize->add_control( 'hero_button_url_ctrl', array(
        'label'     =>  __('Button URL','unfold'),
        'settings'  =>  'hero_button_url',
        'section'   =>  'hero_section',
        'type'      =>  'url'
    ));

    $wp_customize->add_setting( 'hero_img', array(
        'default'   =>  get_theme_file_uri('assets/images/banner/hero.png'),
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control( new WP_Customize_Image_control( $wp_customize, 'hero_img_ctrl', array(
        'label'     =>  __('Image','unfold'),
        'settings'  =>  'hero_img',
        'section'   =>  'hero_section',
    )));

    $wp_customize->add_setting( 'social_icon', array(
        'default'   =>  'true',
        'transport' =>  'refresh', // postMessage
        'sanitize_callback' =>  'unfold_social_icon_sanitize_checkbox'
    ));

    $wp_customize->add_control( 'social_icon_ctrl', array(
        'label'     =>  __('Social icon enable ?','unfold'),
        'settings'  =>  'social_icon',
        'section'   =>  'hero_section',
        'type'      =>  'checkbox'
    ));

    function unfold_social_icon_sanitize_checkbox( $checked ){
        return ( (isset( $checked ) && true == $checked ) ? true : false );
    }

    // facebook 
    $wp_customize->add_setting( 'facebook_link', array(
        'default'   =>  'https://facebook.com/#',
        'transport' =>  'refresh' // postMessage
    ));

    $wp_customize->add_control( 'facebook_link_ctrl', array(
        'label'     =>  __('Facebook','unfold'),
        'settings'  =>  'facebook_link',
        'section'   =>  'hero_section',
        'type'      =>  'url'
    ));

    // twitter
    $wp_customize->add_setting( 'twitter_link', array(
        'default'   =>  'https://twiiter.com/#',
        'transport' =>  'refresh' // postMessage
    ));

    $wp_customize->add_control( 'twitter_link_ctrl', array(
        'label'     =>  __('Twitter','unfold'),
        'settings'  =>  'twitter_link',
        'section'   =>  'hero_section',
        'type'      =>  'url'
    ));

    // behance
    $wp_customize->add_setting( 'behance_link', array(
        'default'   =>  'https://behance.com/#',
        'transport' =>  'refresh' // postMessage
    ));

    $wp_customize->add_control( 'behance_link_ctrl', array(
        'label'     =>  __('Behance','unfold'),
        'settings'  =>  'behance_link',
        'section'   =>  'hero_section',
        'type'      =>  'url'
    ));

    // linkedin
    $wp_customize->add_setting( 'linkedin_link', array(
        'default'   =>  'https://linkedin.com/#',
        'transport' =>  'refresh' // postMessage
    ));

    $wp_customize->add_control( 'linkedin_link_ctrl', array(
        'label'     =>  __('Linkedin','unfold'),
        'settings'  =>  'linkedin_link',
        'section'   =>  'hero_section',
        'type'      =>  'url'
    ));
}
add_action('customize_register', 'unfold_cusomize_register');

// Kirki
Kirki::add_config( 'unfold_config', array(
    'capability'    =>  'edit_theme_options',
    'option_type'   =>  'theme_mod'
));

Kirki::add_panel( 'unfold_panel', array(
    'title'         =>  __( 'Unfold Options', 'unfold' ),
    'description'   =>  __( 'Unfold Description', 'unfold'), 
    'priority'      =>  20
));

Kirki::add_section( 'about_section', array(
    'title'         =>  __( 'About Section', 'unfold' ),
    'panel'         =>  'unfold_panel'
));

// Enable About Section
Kirki::add_field( 'unfold_config', array(
    'label'     =>  __('Enable About Section ?'),
    'settings'  =>  'about_section_enable',
    'section'   =>  'about_section',
    'type'      =>  'switch',
    'default'   =>  'on',
    'choices'   =>  [
        'on'    =>  esc_html__('Yes', 'unfold'),
        'off'   =>  esc_html__('No', 'unfold')
    ]
));

// About Section Title
Kirki::add_field( 'unfold_config', [
    'label'     =>  __( 'About Section Title', 'unfold' ),
    'settings'  =>  'about_section_title',
    'section'   =>  'about_section',
    'type'      =>  'text',
    'default'   =>  'About Me',
]);

// About Section Description
Kirki::add_field( 'unfold_config', [
    'label'     =>  __( 'About Section Description', 'unfold'),
    'settings'  =>  'about_section_desc',
    'section'   =>  'about_section',
    'type'      =>  'textarea',
    'default'   =>  'Nunc id dui at sapien faucibus fermentum ut vel diam. Nullam tempus, nunc id efficitur sagittis, urna est ultricies eros, ac porta sem turpis quis leo.'
]);