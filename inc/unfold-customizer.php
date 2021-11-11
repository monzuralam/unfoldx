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
}
add_action('customize_register', 'unfold_cusomize_register');
