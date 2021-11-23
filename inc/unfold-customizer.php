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
    'label'     =>  __('Enable About Section ?','unfold'),
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
    'label'     =>  __( 'Section Title', 'unfold' ),
    'settings'  =>  'about_section_title',
    'section'   =>  'about_section',
    'type'      =>  'text',
    'default'   =>  'About Me',
]);

// About Section Description
Kirki::add_field( 'unfold_config', [
    'label'     =>  __( 'Section Description', 'unfold'),
    'settings'  =>  'about_section_desc',
    'section'   =>  'about_section',
    'type'      =>  'textarea',
    'default'   =>  'Nunc id dui at sapien faucibus fermentum ut vel diam. Nullam tempus, nunc id efficitur sagittis, urna est ultricies eros, ac porta sem turpis quis leo.'
]);

// About me title
Kirki::add_field( 'unfold_config', [
    'label'     =>  __('About me title', 'unfold'),
    'settings'  =>  'about_me_title',
    'section'   =>  'about_section',
    'type'      =>  'text',
    'default'   =>  'Hi There! I\'m Mark Parker'
]);

// About me description
Kirki::add_field( 'unfold_config', [
    'label'     =>  __('About me description', 'unfold'),
    'settings'  =>  'about_me_desc',
    'section'   =>  'about_section',
    'type'      =>  'textarea',
    'default'   =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'
]);

// About me single info
Kirki::add_field( 'unfold_config', [
    'type'      =>  'repeater',
    'label'     =>  esc_html__('About Me info', 'unfold'),
    'settings'  =>  'about_me_single_info',
    'section'   =>  'about_section',
    'row_label' =>  [
        'type'  =>  'field',
        'value' =>  esc_html__('Item', 'unfold'),
        'field' =>  'info_label'
    ],
    'default'   =>  [
        [
            'info_icon'     =>  'lni-calendar',
            'info_label'    =>  esc_html__('Date of birth:', 'unfold'),
            'info_value'    =>  esc_html__('8 June 1995', 'unfold')
        ],
        [
            'info_icon'     =>  'lni-envelope',
            'info_label'    =>  esc_html__('Email:', 'unfold'),
            'info_value'    =>  esc_html__('jhon@mysite.com', 'unfold')
        ],
        [
            'info_icon'     =>  'lni-phone-handset',
            'info_label'    =>  esc_html__('Phone:', 'unfold'),
            'info_value'    =>  esc_html__('+1-202-555-0138', 'unfold')
        ],
        [
            'info_icon'     =>  'lni-calendar',
            'info_label'    =>  esc_html__('Location:', 'unfold'),
            'info_value'    =>  esc_html__('4373, El Centro, CA', 'unfold')
        ],
    ],
    'fields'    =>  [
        'info_icon'  =>      [
            'type'          =>  'select',
            'label'         =>  esc_html__('Icon', 'unfold'),
            'description'   =>  esc_html__('select icon from dropdown list.', 'unfold'),
            'default'       =>  '',
            'placeholder'   =>  esc_html__('Select icon', 'unfold'),
            'multiple'      =>  false,
            'choices'       =>  [
                ''                       =>  esc_html__( 'Select', 'unfold'),
                'lni-calendar'              =>  esc_html__( 'Calendar', 'unfold'),
                'lni-envelope'              =>  esc_html__( 'Envelope', 'unfold'),
                'lni-phone-handset'         =>  esc_html__( 'Phone Handset', 'unfold'),
                'lni-map-marker'            =>  esc_html__( 'Map marker', 'unfold'),
                'lni-facebook'              =>  esc_html__( 'Facebook', 'unfold'),
                'lni-facebook-messenger'    =>  esc_html__( 'Facebook messenger', 'unfold'),
                'lni-facebook-original'     =>  esc_html__( 'Facebook Original', 'unfold'),
                'lni-facebook-filled'       =>  esc_html__( 'Facebook Filled', 'unfold'),
                'lni-twitter'               =>  esc_html__( 'Twiiter', 'unfold'),
                'lni-twitter-original'      =>  esc_html__( 'Twitter Original', 'unfold'),
                'lni-twitter-filled'        =>  esc_html__( 'Twitter Filled', 'unfold'),
                'lni-linkedin'              =>  esc_html__( 'Linkedin', 'unfold'),
                'lni-linkedin-original'     =>  esc_html__( 'Linkedin Original', 'unfold'),
                'lni-linkedin-filled'       =>  esc_html__( 'Linkedin Filled', 'unfold'),
                'lni-git'                   =>  esc_html__( 'Git', 'unfold'),
                'lni-github'                =>  esc_html__( 'Github', 'unfold'),
                'lni-github-original'       =>  esc_html__( 'Github Original', 'unfold'),
                'lni-stackoverflow'         =>  esc_html__( 'Stackoverflow', 'unfold'),
                'lni-website'               =>  esc_html__( 'Website', 'unfold'),
                'lni-youtube'               =>  esc_html__( 'Youtube', 'unfold'),
                'lni-wechat'                =>  esc_html__( 'Wechat', 'unfold'),
                'lni-whatsapp'              =>  esc_html__( 'Whatsapp', 'unfold'),
                'lni-slack'                 =>  esc_html__( 'Slack', 'unfold'),
                'lni-skype'                 =>  esc_html__( 'Skype', 'unfold'),
            ]
        ],
        'info_label' =>  [
            'type'          =>  'text',
            'label'         =>  esc_html__( 'Label', 'unfold'),
            'placeholder'   =>  esc_html__( 'Email, Phone', 'unfold'),
        ],
        'info_value' =>  [
            'type'          =>  'text',
            'label'         =>  esc_html__( 'Value', 'unfold'),
            'placeholder'   =>  esc_html__( 'mail@example.com', 'unfold')
        ]
    ]
]);

// About me skill
Kirki::add_field( 'unfold_config', [
    'label'     =>  esc_html__('Skills ', 'unfold'),
    'settings'  =>  'about_me_skill',
    'section'   =>  'about_section',
    'type'      =>  'repeater',
    'default'   =>  [],
    'row_label' =>   [
        'type'      =>  'field',
        'value'     =>  esc_html__( 'Skill', 'unfold'),
        'field'     =>  'skill_title'
    ],
    'fields'     =>  [
        'skill_title'   =>  [
            'type'          =>  'text',
            'label'         =>  esc_html__( 'Title', 'unfold'),
            'placeholder'   =>  esc_html__( 'HTML', 'unfold')
        ],
        'skill_percentage'  =>  [
            'type'          =>  'number',
            'label'         =>  esc_html__( 'Percentage', 'unfold'),
            'placeholder'   =>  esc_html__( '80', 'unfold')
        ]
    ]
]);

// Service Section
Kirki::add_section( 'service_section', array(
    'title'     =>  __( 'Services Section', 'unfold'),
    'panel'     =>  'unfold_panel',
));

// Enable Services section
Kirki::add_field( 'unfold_config', [
    'label'         =>  esc_html__( 'Enable Services Section', 'unfold' ),
    'settings'      =>  'service_section_enable',
    'section'       =>  'service_section',
    'type'          =>  'switch',
    'default'       =>  'on',
    'choices'       =>  [
        'on'    =>  esc_html__( 'On', 'unfold' ),
        'off'   =>  esc_html__( 'Off', 'unfold' ),
    ]
]);

// Services Section title
Kirki::add_field( 'unfold_config', [
    'label'         =>  esc_html__( 'Section Title', 'unfold'),
    'settings'      =>  'service_section_title',
    'section'       =>  'service_section',
    'type'          =>  'text',
    'placeholder'   =>  esc_html__( 'Services', 'unfold'),
    'default'       =>  'My Services',
]);

// Services section description 
Kirki::add_field( 'unfold_config', [
    'label'         =>  esc_html__( 'Section Description', 'unfold'),
    'settings'      =>  'service_section_desc',
    'section'       =>  'service_section',
    'type'          =>  'textarea',
    'default'       =>  'Nunc id dui at sapien faucibus fermentum ut vel diam. Nullam tempus, nunc id efficitur sagittis, urna est ultricies eros, ac porta sem turpis quis leo.',
]);

// Services item
Kirki::add_field( 'unfold_config', [
    'label'         =>  esc_html__( 'Service item', 'unfold'),
    'settings'      =>  'service_section_item',
    'section'       =>  'service_section',
    'type'          =>  'repeater',
    'default'       =>  [],
    'row_label'     =>  [
        'type'      =>  'field',
        'value'     =>  esc_html__( 'service', 'unfold'),
        'field'     =>  'service_item_title'
    ],
    'fields'        =>  [
        'service_item_icon'     =>  [
            'type'      =>  'select',
            'label'     =>  esc_html__( 'Icon', 'unfold'),
            'default'   =>  '',
            'multiple'  =>  false,
            'choices'   =>  [
                ''                  =>  esc_html__('Select Icon', 'unfold'),
                'lni-code-alt'      =>  esc_html__('Code alt', 'unfold'),
                'lni-color-pallet'  =>  esc_html__('Color pallet', 'unfold'),
                'lni-mobile'        =>  esc_html__('Mobile', 'unfold'),
                'lni-vector'        =>  esc_html__('Vector', 'unfold'),
                'lni-website'       =>  esc_html__('Website', 'unfold'),
                'lni-support'       =>  esc_html__('Support', 'unfold'),
                'lni-ruler'         =>  esc_html__('Ruler', 'unfold'),
                'lni-ruler-pencil'  =>  esc_html__('Ruler pencil', 'unfold'),
                'lni-brush'         =>  esc_html__('Brush', 'unfold'),
                'lni-paint-bucket'  =>  esc_html__('Paint bucket', 'unfold'),
                'lni-bulb'          =>  esc_html__('Bulb', 'unfold'),
                'lni-highlight-alt' =>  esc_html__('Highlight alt', 'unfold'),
                'lni-highlight'     =>  esc_html__('Hightlight', 'unfold'),
                'lni-handshake'     =>  esc_html__('Handshake', 'unfold'),
                'lni-briefcase'     =>  esc_html__('Briefcase', 'unfold'),
                'lni-funnel'        =>  esc_html__('funnel', 'unfold'),
                'lni-world'         =>  esc_html__('World', 'unfold'),
                'lni-calculator'    =>  esc_html__('Calculator', 'unfold'),
                'lni-target-revenue'=>  esc_html__('Target revenue', 'unfold'),
                'lni-revenue'       =>  esc_html__('Revenue', 'unfold'),
                'lni-invention'     =>  esc_html__('Invention', 'unfold'),
                'lni-network'       =>  esc_html__('Network', 'unfold'),
                'lni-credit-cards'  =>  esc_html__('Credit cards', 'unfold'),
                'lni-pie-chart'     =>  esc_html__('Pie chart', 'unfold'),
                'lni-archive'       =>  esc_html__('Archive', 'unfold'),
                'lni-magnifier'     =>  esc_html__('Magnifier', 'unfold'),
                'lni-agenda'        =>  esc_html__('Agenda', 'unfold'),
                'lni-tag'           =>  esc_html__('tag', 'unfold'),
                'lni-target'        =>  esc_html__('Target', 'unfold'),
                'lni-stamp'         =>  esc_html__('Stamp', 'unfold'),
                'lni-clipboard'     =>  esc_html__('Clipboard', 'unfold'),
                'lni-licencse'      =>  esc_html__('Licencse', 'unfold'),
                'lni-paperclip'     =>  esc_html__('Paperclip', 'unfold'),
                'lni-stats-up'      =>  esc_html__('Stats up', 'unfold'),
                'lni-stats-down'    =>  esc_html__('Stats down', 'unfold'),
                'lni-bar-chart'     =>  esc_html__('Bar chart', 'unfold'),
                'lni-bullhorn'      =>  esc_html__('Bullhorn', 'unfold'),
                'lni-calendar'      =>  esc_html__('Calendar', 'unfold'),
                'lni-quotation'     =>  esc_html__('Quotation', 'unfold'),
                'lni-bus'           =>  esc_html__('Bus', 'unfold'),
                'lni-car-alt'       =>  esc_html__('Car alt', 'unfold'),
                'lni-car'          =>   esc_html__('Car', 'unfold'),
            ]    
        ],

        'service_item_title'    =>  [
            'type'      =>  'text',
            'label'     =>  esc_html__('Service title', 'unfold'),
            'default'   =>  '',
        ],

        'service_item_desc'     =>  [
            'type'      =>  'textarea',
            'label'     =>  esc_html__('Service Description', 'unfold'),
            'default'   =>  ''
        ],

        'service_item_link'     =>  [
            'type'      =>  'url',
            'label'     =>  esc_html__('Link', 'unfold'),
            'default'   =>  '#'
        ]
    ]
]);

// Call to action
Kirki::add_section( 'cta_section', [
    'title'         =>  esc_html__('CTA Section', 'unfold'),
    'panel'         =>  'unfold_panel'
]);

// Enable cta section
Kirki::add_field( 'unfold_config', [
    'label'         =>  esc_html__('Enable CTA?', 'unfold'),
    'settings'      =>  'cta_section_enable',
    'section'       =>  'cta_section',
    'type'          =>  'switch',
    'default'       =>  'on',
    'choices'       =>  [
        'on'        =>  esc_html__('On','unfold'),
        'off'       =>  esc_html__('Off','unfold')
    ]
]);

// CTA Background image
Kirki::add_field( 'unfold_config', [
    'label'         =>  esc_html__('CTA Background','unfold'),
    'settings'      =>  'cta_section_bg',
    'section'       =>  'cta_section',
    'type'          =>  'background',
    'default'       =>  ''
]);

// CTA Title
Kirki::add_field( 'unfold_config', [
    'label'         =>  esc_html__('CTA title','unfold'),
    'settings'      =>  'cta_title',
    'section'       =>  'cta_section',
    'type'          =>  'text',
    'default'       =>  'Have any project on mind?'
]);

// CTA Description
Kirki::add_field( 'unfold_config', [
    'label'         =>  esc_html__('CTA Description','unfold'),
    'settings'      =>  'cta_description',
    'section'       =>  'cta_section',
    'type'          =>  'textarea',
    'default'       =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua nostrud.',
]);

// CTA button 1 
Kirki::add_field( 'unfold_config', [
    'label'         =>  esc_html__('CTA Button 1','unfold'),
    'settings'      =>  'cta_btn_1',
    'section'       =>  'cta_section',
    'type'          =>  'text',
    'default'       =>  '',
]);

// CTA button link 1 
Kirki::add_field( 'unfold_config', [
    'label'         =>  esc_html__('CTA Button 1 Link', 'unfold'),
    'settings'      =>  'cta_btn_1_link',
    'section'       =>  'cta_section',
    'type'          =>  'url',
    'default'       =>  '#'
]);

// CTA button 2
Kirki::add_field( 'unfold_config', [
    'label'         =>  esc_html__('CTA Button 2','unfold'),
    'settings'      =>  'cta_btn_2',
    'section'       =>  'cta_section',
    'type'          =>  'text',
    'default'       =>  '',
]);

// CTA button link 2
Kirki::add_field( 'unfold_config', [
    'label'         =>  esc_html__('CTA Button 2 Link', 'unfold'),
    'settings'      =>  'cta_btn_2_link',
    'section'       =>  'cta_section',
    'type'          =>  'url',
    'default'       =>  '#'
]);

// Work Section
Kirki::add_section( 'work_section', [
    'title'         =>  esc_html__('Work Section', 'unfold'),
    'panel'         =>  'unfold_panel'
]);

// Enable work section
Kirki::add_field( 'unfold_config', [
    'label'         =>  esc_html__('Enable Work ?', 'unfold'),
    'settings'      =>  'work_section_enable',
    'section'       =>  'work_section',
    'type'          =>  'switch',
    'default'       =>  'on',
    'choices'       =>  [
        'on'        =>  esc_html__('On','unfold'),
        'off'       =>  esc_html__('Off','unfold')
    ]
]);

// Work section title
Kirki::add_field( 'unfold_config', [
    'label'         =>  esc_html__('Section Title', 'unfold'),
    'settings'      =>  'work_section_title',
    'section'       =>  'work_section',
    'type'          =>  'text',
    'default'       =>  'My Recent Works',
]);

// Work section description
Kirki::add_field( 'unfold_config', [
    'label'         =>  esc_html__('Section description', 'unfold'),
    'settings'      =>  'work_section_desc',
    'section'       =>  'work_section',
    'type'          =>  'textarea',
    'default'       =>  'Nunc id dui at sapien faucibus fermentum ut vel diam. Nullam tempus, nunc id efficitur sagittis, urna est ultricies eros, ac porta sem turpis quis leo.'
]);

// Work Section item
Kirki::add_field( 'unfold_config', [
    'label'         =>  esc_html__('Work Item', 'unfold'),
    'settings'      =>  'work_section_items',
    'section'       =>  'work_section',
    'type'          =>  'repeater',
    'default'       =>  '',
    'row_label'     =>  [
        'type'      =>  'field',
        'value'     =>  esc_html__('Item', 'unfold'),
        'field'     =>  'work_title'
    ],
    'fields'        =>  [
        'work_title'    =>  [
            'type'      =>  'text',
            'label'     =>  esc_html__('Title', 'unfold'),
        ],

        'work_img'      =>  [
            'type'      =>  'image',
            'label'     =>  esc_html__('Photo', 'unfold')
        ],

        'work_link'     =>  [
            'type'      =>  'url',
            'label'     =>  esc_html__('URL', 'unfold'),
            'default'   =>  '#'
        ]
    ]
]);

// Work section button
Kirki::add_field( 'unfold_config', [
    'label'         =>  esc_html__('Button Text', 'unfold'),
    'settings'      =>  'work_section_btn',
    'section'       =>  'work_section',
    'type'          =>  'text',
    'default'       =>  'More Works'
]);

// Work section button url
Kirki::add_field( 'unfold_config', [
    'label'         =>  esc_html__('Button URL', 'unfold'),
    'settings'      =>  'work_section_link',
    'section'       =>  'work_section',
    'type'          =>  'url',
    'default'       =>  '#'
]);

// Pricing Plan section
Kirki::add_section( 'price_section', [
    'title'         =>  esc_html__( 'Pricing Plan Seciton', 'unfold'),
    'panel'         =>  'unfold_panel',
]);

// Pricing plan enable
Kirki::add_field( 'unfold_config', [
    'label'         =>  esc_html__('Enable Pricing plan section', 'unfold'),
    'settings'      =>  'price_section_enable',
    'section'       =>  'price_section',
    'type'          =>  'switch',
    'default'       =>  'on',
    'choices'       =>  [
        'on'        =>  esc_html__('On','unfold'),
        'off'       =>  esc_html__('Off','unfold')
    ]
]);

// Pricing Title
Kirki::add_field( 'unfold_config', [
    'label'         =>  esc_html__( 'Section Title', 'unfold'),
    'settings'      =>  'price_section_title',
    'section'       =>  'price_section',
    'type'          =>  'text',
    'default'       =>  esc_html__( 'Pricing Plans', 'unfold')
]);

// Pricing Description
Kirki::add_field( 'unfold_config', [
    'label'         =>  esc_html__( 'Section desc', 'unfold'),
    'settings'      =>  'price_section_desc',
    'section'       =>  'price_section',
    'type'          =>  'text',
    'default'       =>  esc_html__( 'Nunc id dui at sapien faucibus fermentum ut vel diam. Nullam tempus, nunc id efficitur sagittis, urna est ultricies eros, ac porta sem turpis quis leo.', 'unfold'),
]);

// Pricing Table
Kirki::add_field( 'unfold_config', [
    'label'         =>  esc_html__('Pricing Package', 'unfold'),
    'settings'      =>  'price_section_table',
    'section'       =>  'price_section',
    'type'          =>  'repeater',
    'default'       =>  [],
    'row_label'     =>  [
        'type'      =>  'field',
        'value'     =>  esc_html__('Package','unfold'),
        'field'     =>  'price_table_title'
    ],
    'fields'        =>  [
        'price_table_title' =>  [
            'type'      =>   'text',
            'label'     =>  esc_html__('Package Title','unfold'),
            'default'   =>  'Basic',
        ],
        'price_table_desc'  =>  [
            'type'      =>  'textarea',
            'label'     =>  esc_html__('Package Description','unfold'),
            'default'   =>  '',
        ],
        'price_table_fea_1' =>  [
            'type'      =>  'text',
            'label'     =>  esc_html__('Feature 1','unfold'),
            'default'   =>  'Lorem Ipsum'
        ],
        'price_table_fea_2' =>  [
            'type'      =>  'text',
            'label'     =>  esc_html__('Feature 2','unfold'),
            'default'   => 'Lorem Ipsum'
        ],
        'price_table_fea_3' =>  [
            'type'      =>  'text',
            'label'     =>  esc_html__('Feature 3','unfold'),
            'default'   => 'Lorem Ipsum'
        ],
        'price_table_fea_4' =>  [
            'type'      =>  'text',
            'label'     =>  esc_html__('Feature 4','unfold'),
            'default'   => 'Lorem Ipsum'
        ],
        'price_table_fea_5' =>  [
            'type'      =>  'text',
            'label'     =>  esc_html__('Feature 5','unfold'),
            'default'   => 'Lorem Ipsum'
        ],
        'price_table_fea_6' =>  [
            'type'      =>  'text',
            'label'     =>  esc_html__('Feature 6','unfold'),
            'default'   => 'Lorem Ipsum'
        ],
        'price_table_price' =>  [
            'type'      =>  'text',
            'label'     =>  esc_html__('Package Price','unfold'),
            'default'   => '$18.00'
        ],
        'price_table_btn'   =>  [
            'type'      =>  'text',
            'label'     =>  esc_html__('Button Text','unfold'),
            'default'   => 'Quote'
        ],
        'price_table_link'   =>  [
            'type'      =>  'url',
            'label'     =>  esc_html__('Button URL','unfold'),
            'default'   =>  '#'
        ],
        'price_table_recommended'   =>  [
            'type'      =>  'checkbox',
            'label'     =>  esc_html__('Recommended Package','unfold'),
            'default'   =>  ''
        ],
    ]
]);

// Blog Section
Kirki::add_section( 'blog_section', array(
    'title'         =>  __( 'Blog Section', 'unfold' ),
    'panel'         =>  'unfold_panel'
));

// Enable Blog Section
Kirki::add_field( 'unfold_config', array(
    'label'     =>  __('Enable Blog Section ?', 'unfold'),
    'settings'  =>  'blog_section_enable',
    'section'   =>  'blog_section',
    'type'      =>  'switch',
    'default'   =>  'on',
    'choices'   =>  [
        'on'    =>  esc_html__('Yes', 'unfold'),
        'off'   =>  esc_html__('No', 'unfold')
    ]
));

// Blog section title
Kirki::add_field( 'unfold_config', [
    'label'         =>  esc_html__('Section Title', 'unfold'),
    'settings'      =>  'blog_section_title',
    'section'       =>  'blog_section',
    'type'          =>  'text',
    'default'       =>  'Recent Blog',
]);

// Blog section description
Kirki::add_field( 'unfold_config', [
    'label'         =>  esc_html__('Section description', 'unfold'),
    'settings'      =>  'blog_section_desc',
    'section'       =>  'blog_section',
    'type'          =>  'textarea',
    'default'       =>  'Nunc id dui at sapien faucibus fermentum ut vel diam. Nullam tempus, nunc id efficitur sagittis, urna est ultricies eros, ac porta sem turpis quis leo.'
]);

// Blog Button Link
Kirki::add_field( 'unfold_config', [
    'label'         =>  esc_html__('Button Link','unfold'),
    'settings'      =>  'blog_section_link',
    'section'       =>  'blog_section',
    'type'          =>  'url',
    'default'       =>  '#'
]);

// Contact Section
Kirki::add_section( 'contact_section', array(
    'title'         =>  __( 'Contact Section', 'unfold' ),
    'panel'         =>  'unfold_panel'
));

// Enable Contact Section
Kirki::add_field( 'unfold_config', array(
    'label'     =>  __('Enable Contact Section ?', 'unfold'),
    'settings'  =>  'contact_section_enable',
    'section'   =>  'contact_section',
    'type'      =>  'switch',
    'default'   =>  'on',
    'choices'   =>  [
        'on'    =>  esc_html__('Yes', 'unfold'),
        'off'   =>  esc_html__('No', 'unfold')
    ]
));

// Contact section title
Kirki::add_field( 'unfold_config', [
    'label'         =>  esc_html__('Section Title', 'unfold'),
    'settings'      =>  'contact_section_title',
    'section'       =>  'contact_section',
    'type'          =>  'text',
    'default'       =>  'Contact',
]);

// Contact section description
Kirki::add_field( 'unfold_config', [
    'label'         =>  esc_html__('Section description', 'unfold'),
    'settings'      =>  'contact_section_desc',
    'section'       =>  'contact_section',
    'type'          =>  'textarea',
    'default'       =>  'Nunc id dui at sapien faucibus fermentum ut vel diam. Nullam tempus, nunc id efficitur sagittis, urna est ultricies eros, ac porta sem turpis quis leo.'
]);

// Contact section address
Kirki::add_field( 'unfold_config', [
    'label'         =>  esc_html__('Address', 'unfold'),
    'settings'      =>  'contact_section_address',
    'section'       =>  'contact_section',
    'type'          =>  'textarea',
    'default'       =>  '123 Stree New York City , United States Of America 750'
]);

// Contact section phone
Kirki::add_field( 'unfold_config', [
    'label'         =>  esc_html__('Phone Number ', 'unfold'),
    'settings'      =>  'contact_section_phone',
    'section'       =>  'contact_section',
    'type'          =>  'text',
    'default'       =>  '+931 2222 5555'
]);

// Contact section mobile
Kirki::add_field( 'unfold_config', [
    'label'         =>  esc_html__('Mobile Number ', 'unfold'),
    'settings'      =>  'contact_section_mobile',
    'section'       =>  'contact_section',
    'type'          =>  'text',
    'default'       =>  '+931 2222 6666'
]);

// Contact section email 1
Kirki::add_field( 'unfold_config', [
    'label'         =>  esc_html__('Email address 1 ', 'unfold'),
    'settings'      =>  'contact_section_email_1',
    'section'       =>  'contact_section',
    'type'          =>  'text',
    'default'       =>  'support@yourmail.com'
]);

// Contact section email 2
Kirki::add_field( 'unfold_config', [
    'label'         =>  esc_html__('Email address 2 ', 'unfold'),
    'settings'      =>  'contact_section_email_2',
    'section'       =>  'contact_section',
    'type'          =>  'text',
    'default'       =>  'info@yourmail.com'
]);

// Contact form 
Kirki::add_field( 'unfold_config', [
    'label'         =>  esc_html__('Contact Form 7 shortcode', 'unfold'),
    'settings'      =>  'contact_form_7',
    'section'       =>  'contact_section',
    'type'          =>  'text',
    'default'       =>  ''
]);