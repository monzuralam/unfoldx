<?php
if( class_exists('Kirki') ):
// Kirki
Kirki::add_config( 'unfold_config', array(
    'capability'    =>  'edit_theme_options',
    'option_type'   =>  'theme_mod'
));

Kirki::add_panel( 'unfold_panel', array(
    'title'         =>  __( 'UnfoldX Options', 'unfoldx' ),
    'description'   =>  __( 'Unfold Description', 'unfoldx'), 
    'priority'      =>  20
));

// Hero Section
Kirki::add_section( 'hero_section', [
    'title'         =>  __('Hero Section', 'unfoldx' ),
    'panel'         =>  'unfold_panel'
]);

// Hero Section intro Title
Kirki::add_field( 'unfold_config', [
    'label'     =>  __( 'Intro Title', 'unfoldx' ),
    'settings'  =>  'hero_section_intro_title',
    'section'   =>  'hero_section',
    'type'      =>  'text',
    'default'   =>  'Hello, I\'m',
]);

// Hero Section Title
Kirki::add_field( 'unfold_config', [
    'label'     =>  __( 'Name', 'unfoldx' ),
    'settings'  =>  'hero_section_title',
    'section'   =>  'hero_section',
    'type'      =>  'text',
    'default'   =>  'MARK PARKER',
]);

// Hero Section Sub Title
Kirki::add_field( 'unfold_config', [
    'label'     =>  __( 'Subtitle', 'unfoldx' ),
    'settings'  =>  'hero_section_sub_title',
    'section'   =>  'hero_section',
    'type'      =>  'text',
    'default'   =>  'A Freelance UI Designer & Web Developer',
]);

// Hero Section Button
Kirki::add_field( 'unfold_config', [
    'label'     =>  __( 'Button Text', 'unfoldx' ),
    'settings'  =>  'hero_section_btn',
    'section'   =>  'hero_section',
    'type'      =>  'text',
    'default'   =>  'Download',
]);

// Hero Section CV
Kirki::add_field( 'unfold_config', [
    'label'     =>  __( 'CV Attachment', 'unfoldx' ),
    'settings'  =>  'hero_section_cv',
    'section'   =>  'hero_section',
    'type'      =>  'upload',
    'default'   =>  '',
]);

// Hero Section Photo
Kirki::add_field( 'unfold_config', [
    'label'     =>  __( 'Photo', 'unfoldx' ),
    'settings'  =>  'hero_section_photo',
    'section'   =>  'hero_section',
    'type'      =>  'image',
    'default'   =>  get_theme_file_uri('assets/images/banner/hero.png')
]);

// Enable Hero social 
Kirki::add_field( 'unfold_config', array(
    'label'     =>  __('Enable Social Link ?','unfoldx'),
    'settings'  =>  'hero_section_social_enable',
    'section'   =>  'hero_section',
    'type'      =>  'switch',
    'default'   =>  'on',
    'choices'   =>  [
        'on'    =>  esc_html__('Yes', 'unfoldx'),
        'off'   =>  esc_html__('No', 'unfoldx')
    ]
));

// Hero Social control
Kirki::add_field( 'footer_panel', [
    'label'         =>  esc_html__('Social Media', 'unfoldx'),
    'settings'      =>  'hero_section_social',
    'section'       =>  'hero_section',
    'type'          =>  'repeater',
    'default'       =>  [],
    'row_label'     =>  [
        'type'      =>  'field',
        'value'     =>  esc_html__('Social','unfoldx'),
        'field'     =>  'social_icon'
    ],
    'fields'        =>  [
        'social_icon'          =>  [
            'type'          =>  'select',
            'label'         =>  esc_html__('Social icon', 'unfoldx'),
            'description'   =>  esc_html__('select icon from dropdown list.', 'unfoldx'),
            'default'       =>  '',
            'placeholder'   =>  esc_html__('Select icon', 'unfoldx'),
            'multiple'      =>  false,
            'choices'       =>  [
                ''                          =>  esc_html__( 'Select', 'unfoldx'),
                'lni-facebook'              =>  esc_html__( 'Facebook', 'unfoldx'),
                'lni-facebook-messenger'    =>  esc_html__( 'Facebook messenger', 'unfoldx'),
                'lni-facebook-original'     =>  esc_html__( 'Facebook Original', 'unfoldx'),
                'lni-facebook-filled'       =>  esc_html__( 'Facebook Filled', 'unfoldx'),
                'lni-twitter'               =>  esc_html__( 'Twiiter', 'unfoldx'),
                'lni-twitter-original'      =>  esc_html__( 'Twitter Original', 'unfoldx'),
                'lni-twitter-filled'        =>  esc_html__( 'Twitter Filled', 'unfoldx'),
                'lni-linkedin'              =>  esc_html__( 'Linkedin', 'unfoldx'),
                'lni-linkedin-original'     =>  esc_html__( 'Linkedin Original', 'unfoldx'),
                'lni-linkedin-filled'       =>  esc_html__( 'Linkedin Filled', 'unfoldx'),
                'lni-git'                   =>  esc_html__( 'Git', 'unfoldx'),
                'lni-github'                =>  esc_html__( 'Github', 'unfoldx'),
                'lni-github-original'       =>  esc_html__( 'Github Original', 'unfoldx'),
                'lni-stackoverflow'         =>  esc_html__( 'Stackoverflow', 'unfoldx'),
                'lni-website'               =>  esc_html__( 'Website', 'unfoldx'),
                'lni-youtube'               =>  esc_html__( 'Youtube', 'unfoldx'),
                'lni-wechat'                =>  esc_html__( 'Wechat', 'unfoldx'),
                'lni-whatsapp'              =>  esc_html__( 'Whatsapp', 'unfoldx'),
                'lni-slack'                 =>  esc_html__( 'Slack', 'unfoldx'),
                'lni-skype'                 =>  esc_html__( 'Skype', 'unfoldx'),
                'lni-pinterest'             =>  esc_html__( 'Pinterest', 'unfoldx'),
            ]
        ],
        'social_url' => [
			'type'        => 'url',
			'label'       => esc_html__( 'URL', 'unfoldx' ),
			'default'     => '',
		]
    ]
]);

Kirki::add_section( 'about_section', array(
    'title'         =>  __( 'About Section', 'unfoldx' ),
    'panel'         =>  'unfold_panel'
));

// Enable About Section
Kirki::add_field( 'unfold_config', array(
    'label'     =>  __('Enable About Section ?','unfoldx'),
    'settings'  =>  'about_section_enable',
    'section'   =>  'about_section',
    'type'      =>  'switch',
    'default'   =>  'on',
    'choices'   =>  [
        'on'    =>  esc_html__('Yes', 'unfoldx'),
        'off'   =>  esc_html__('No', 'unfoldx')
    ]
));

// About Section Title
Kirki::add_field( 'unfold_config', [
    'label'     =>  __( 'Section Title', 'unfoldx' ),
    'settings'  =>  'about_section_title',
    'section'   =>  'about_section',
    'type'      =>  'text',
    'default'   =>  'About Me',
]);

// About Section Description
Kirki::add_field( 'unfold_config', [
    'label'     =>  __( 'Section Description', 'unfoldx'),
    'settings'  =>  'about_section_desc',
    'section'   =>  'about_section',
    'type'      =>  'textarea',
    'default'   =>  'Nunc id dui at sapien faucibus fermentum ut vel diam. Nullam tempus, nunc id efficitur sagittis, urna est ultricies eros, ac porta sem turpis quis leo.'
]);

// About me title
Kirki::add_field( 'unfold_config', [
    'label'     =>  __('About me title', 'unfoldx'),
    'settings'  =>  'about_me_title',
    'section'   =>  'about_section',
    'type'      =>  'text',
    'default'   =>  'Hi There! I\'m Mark Parker'
]);

// About me description
Kirki::add_field( 'unfold_config', [
    'label'     =>  __('About me description', 'unfoldx'),
    'settings'  =>  'about_me_desc',
    'section'   =>  'about_section',
    'type'      =>  'textarea',
    'default'   =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'
]);

// About me single info
Kirki::add_field( 'unfold_config', [
    'type'      =>  'repeater',
    'label'     =>  esc_html__('About Me info', 'unfoldx'),
    'settings'  =>  'about_me_single_info',
    'section'   =>  'about_section',
    'row_label' =>  [
        'type'  =>  'field',
        'value' =>  esc_html__('Item', 'unfoldx'),
        'field' =>  'info_label'
    ],
    'default'   =>  [
        [
            'info_icon'     =>  'lni-calendar',
            'info_label'    =>  esc_html__('Date of birth:', 'unfoldx'),
            'info_value'    =>  esc_html__('8 June 1995', 'unfoldx')
        ],
        [
            'info_icon'     =>  'lni-envelope',
            'info_label'    =>  esc_html__('Email:', 'unfoldx'),
            'info_value'    =>  esc_html__('jhon@mysite.com', 'unfoldx')
        ],
        [
            'info_icon'     =>  'lni-phone-handset',
            'info_label'    =>  esc_html__('Phone:', 'unfoldx'),
            'info_value'    =>  esc_html__('+1-202-555-0138', 'unfoldx')
        ],
        [
            'info_icon'     =>  'lni-calendar',
            'info_label'    =>  esc_html__('Location:', 'unfoldx'),
            'info_value'    =>  esc_html__('4373, El Centro, CA', 'unfoldx')
        ],
    ],
    'fields'    =>  [
        'info_icon'  =>      [
            'type'          =>  'select',
            'label'         =>  esc_html__('Icon', 'unfoldx'),
            'description'   =>  esc_html__('select icon from dropdown list.', 'unfoldx'),
            'default'       =>  '',
            'placeholder'   =>  esc_html__('Select icon', 'unfoldx'),
            'multiple'      =>  false,
            'choices'       =>  [
                ''                       =>  esc_html__( 'Select', 'unfoldx'),
                'lni-calendar'              =>  esc_html__( 'Calendar', 'unfoldx'),
                'lni-envelope'              =>  esc_html__( 'Envelope', 'unfoldx'),
                'lni-phone-handset'         =>  esc_html__( 'Phone Handset', 'unfoldx'),
                'lni-map-marker'            =>  esc_html__( 'Map marker', 'unfoldx'),
                'lni-facebook'              =>  esc_html__( 'Facebook', 'unfoldx'),
                'lni-facebook-messenger'    =>  esc_html__( 'Facebook messenger', 'unfoldx'),
                'lni-facebook-original'     =>  esc_html__( 'Facebook Original', 'unfoldx'),
                'lni-facebook-filled'       =>  esc_html__( 'Facebook Filled', 'unfoldx'),
                'lni-twitter'               =>  esc_html__( 'Twiiter', 'unfoldx'),
                'lni-twitter-original'      =>  esc_html__( 'Twitter Original', 'unfoldx'),
                'lni-twitter-filled'        =>  esc_html__( 'Twitter Filled', 'unfoldx'),
                'lni-linkedin'              =>  esc_html__( 'Linkedin', 'unfoldx'),
                'lni-linkedin-original'     =>  esc_html__( 'Linkedin Original', 'unfoldx'),
                'lni-linkedin-filled'       =>  esc_html__( 'Linkedin Filled', 'unfoldx'),
                'lni-git'                   =>  esc_html__( 'Git', 'unfoldx'),
                'lni-github'                =>  esc_html__( 'Github', 'unfoldx'),
                'lni-github-original'       =>  esc_html__( 'Github Original', 'unfoldx'),
                'lni-stackoverflow'         =>  esc_html__( 'Stackoverflow', 'unfoldx'),
                'lni-website'               =>  esc_html__( 'Website', 'unfoldx'),
                'lni-youtube'               =>  esc_html__( 'Youtube', 'unfoldx'),
                'lni-wechat'                =>  esc_html__( 'Wechat', 'unfoldx'),
                'lni-whatsapp'              =>  esc_html__( 'Whatsapp', 'unfoldx'),
                'lni-slack'                 =>  esc_html__( 'Slack', 'unfoldx'),
                'lni-skype'                 =>  esc_html__( 'Skype', 'unfoldx'),
            ]
        ],
        'info_label' =>  [
            'type'          =>  'text',
            'label'         =>  esc_html__( 'Label', 'unfoldx'),
            'placeholder'   =>  esc_html__( 'Email, Phone', 'unfoldx'),
        ],
        'info_value' =>  [
            'type'          =>  'text',
            'label'         =>  esc_html__( 'Value', 'unfoldx'),
            'placeholder'   =>  esc_html__( 'mail@example.com', 'unfoldx')
        ]
    ]
]);

// About me skill
Kirki::add_field( 'unfold_config', [
    'label'     =>  esc_html__('Skills ', 'unfoldx'),
    'settings'  =>  'about_me_skill',
    'section'   =>  'about_section',
    'type'      =>  'repeater',
    'default'   =>  [],
    'row_label' =>   [
        'type'      =>  'field',
        'value'     =>  esc_html__( 'Skill', 'unfoldx'),
        'field'     =>  'skill_title'
    ],
    'fields'     =>  [
        'skill_title'   =>  [
            'type'          =>  'text',
            'label'         =>  esc_html__( 'Title', 'unfoldx'),
            'placeholder'   =>  esc_html__( 'HTML', 'unfoldx')
        ],
        'skill_percentage'  =>  [
            'type'          =>  'number',
            'label'         =>  esc_html__( 'Percentage', 'unfoldx'),
            'placeholder'   =>  esc_html__( '80', 'unfoldx')
        ]
    ]
]);

// Service Section
Kirki::add_section( 'service_section', array(
    'title'     =>  __( 'Services Section', 'unfoldx'),
    'panel'     =>  'unfold_panel',
));

// Enable Services section
Kirki::add_field( 'unfold_config', [
    'label'         =>  esc_html__( 'Enable Services Section', 'unfoldx' ),
    'settings'      =>  'service_section_enable',
    'section'       =>  'service_section',
    'type'          =>  'switch',
    'default'       =>  'on',
    'choices'       =>  [
        'on'    =>  esc_html__( 'On', 'unfoldx' ),
        'off'   =>  esc_html__( 'Off', 'unfoldx' ),
    ]
]);

// Services Section title
Kirki::add_field( 'unfold_config', [
    'label'         =>  esc_html__( 'Section Title', 'unfoldx'),
    'settings'      =>  'service_section_title',
    'section'       =>  'service_section',
    'type'          =>  'text',
    'placeholder'   =>  esc_html__( 'Services', 'unfoldx'),
    'default'       =>  'My Services',
]);

// Services section description 
Kirki::add_field( 'unfold_config', [
    'label'         =>  esc_html__( 'Section Description', 'unfoldx'),
    'settings'      =>  'service_section_desc',
    'section'       =>  'service_section',
    'type'          =>  'textarea',
    'default'       =>  'Nunc id dui at sapien faucibus fermentum ut vel diam. Nullam tempus, nunc id efficitur sagittis, urna est ultricies eros, ac porta sem turpis quis leo.',
]);

// Services item
Kirki::add_field( 'unfold_config', [
    'label'         =>  esc_html__( 'Service item', 'unfoldx'),
    'settings'      =>  'service_section_item',
    'section'       =>  'service_section',
    'type'          =>  'repeater',
    'default'       =>  [],
    'row_label'     =>  [
        'type'      =>  'field',
        'value'     =>  esc_html__( 'service', 'unfoldx'),
        'field'     =>  'service_item_title'
    ],
    'fields'        =>  [
        'service_item_icon'     =>  [
            'type'      =>  'select',
            'label'     =>  esc_html__( 'Icon', 'unfoldx'),
            'default'   =>  '',
            'multiple'  =>  false,
            'choices'   =>  [
                ''                  =>  esc_html__('Select Icon', 'unfoldx'),
                'lni-code-alt'      =>  esc_html__('Code alt', 'unfoldx'),
                'lni-color-pallet'  =>  esc_html__('Color pallet', 'unfoldx'),
                'lni-mobile'        =>  esc_html__('Mobile', 'unfoldx'),
                'lni-vector'        =>  esc_html__('Vector', 'unfoldx'),
                'lni-website'       =>  esc_html__('Website', 'unfoldx'),
                'lni-support'       =>  esc_html__('Support', 'unfoldx'),
                'lni-ruler'         =>  esc_html__('Ruler', 'unfoldx'),
                'lni-ruler-pencil'  =>  esc_html__('Ruler pencil', 'unfoldx'),
                'lni-brush'         =>  esc_html__('Brush', 'unfoldx'),
                'lni-paint-bucket'  =>  esc_html__('Paint bucket', 'unfoldx'),
                'lni-bulb'          =>  esc_html__('Bulb', 'unfoldx'),
                'lni-highlight-alt' =>  esc_html__('Highlight alt', 'unfoldx'),
                'lni-highlight'     =>  esc_html__('Hightlight', 'unfoldx'),
                'lni-handshake'     =>  esc_html__('Handshake', 'unfoldx'),
                'lni-briefcase'     =>  esc_html__('Briefcase', 'unfoldx'),
                'lni-funnel'        =>  esc_html__('funnel', 'unfoldx'),
                'lni-world'         =>  esc_html__('World', 'unfoldx'),
                'lni-calculator'    =>  esc_html__('Calculator', 'unfoldx'),
                'lni-target-revenue'=>  esc_html__('Target revenue', 'unfoldx'),
                'lni-revenue'       =>  esc_html__('Revenue', 'unfoldx'),
                'lni-invention'     =>  esc_html__('Invention', 'unfoldx'),
                'lni-network'       =>  esc_html__('Network', 'unfoldx'),
                'lni-credit-cards'  =>  esc_html__('Credit cards', 'unfoldx'),
                'lni-pie-chart'     =>  esc_html__('Pie chart', 'unfoldx'),
                'lni-archive'       =>  esc_html__('Archive', 'unfoldx'),
                'lni-magnifier'     =>  esc_html__('Magnifier', 'unfoldx'),
                'lni-agenda'        =>  esc_html__('Agenda', 'unfoldx'),
                'lni-tag'           =>  esc_html__('tag', 'unfoldx'),
                'lni-target'        =>  esc_html__('Target', 'unfoldx'),
                'lni-stamp'         =>  esc_html__('Stamp', 'unfoldx'),
                'lni-clipboard'     =>  esc_html__('Clipboard', 'unfoldx'),
                'lni-licencse'      =>  esc_html__('Licencse', 'unfoldx'),
                'lni-paperclip'     =>  esc_html__('Paperclip', 'unfoldx'),
                'lni-stats-up'      =>  esc_html__('Stats up', 'unfoldx'),
                'lni-stats-down'    =>  esc_html__('Stats down', 'unfoldx'),
                'lni-bar-chart'     =>  esc_html__('Bar chart', 'unfoldx'),
                'lni-bullhorn'      =>  esc_html__('Bullhorn', 'unfoldx'),
                'lni-calendar'      =>  esc_html__('Calendar', 'unfoldx'),
                'lni-quotation'     =>  esc_html__('Quotation', 'unfoldx'),
                'lni-bus'           =>  esc_html__('Bus', 'unfoldx'),
                'lni-car-alt'       =>  esc_html__('Car alt', 'unfoldx'),
                'lni-car'          =>   esc_html__('Car', 'unfoldx'),
            ]    
        ],

        'service_item_title'    =>  [
            'type'      =>  'text',
            'label'     =>  esc_html__('Service title', 'unfoldx'),
            'default'   =>  '',
        ],

        'service_item_desc'     =>  [
            'type'      =>  'textarea',
            'label'     =>  esc_html__('Service Description', 'unfoldx'),
            'default'   =>  ''
        ],

        'service_item_link'     =>  [
            'type'      =>  'url',
            'label'     =>  esc_html__('Link', 'unfoldx'),
            'default'   =>  '#'
        ]
    ]
]);

// Call to action
Kirki::add_section( 'cta_section', [
    'title'         =>  esc_html__('CTA Section', 'unfoldx'),
    'panel'         =>  'unfold_panel'
]);

// Enable cta section
Kirki::add_field( 'unfold_config', [
    'label'         =>  esc_html__('Enable CTA?', 'unfoldx'),
    'settings'      =>  'cta_section_enable',
    'section'       =>  'cta_section',
    'type'          =>  'switch',
    'default'       =>  'on',
    'choices'       =>  [
        'on'        =>  esc_html__('On','unfoldx'),
        'off'       =>  esc_html__('Off','unfoldx')
    ]
]);

// CTA Background image
Kirki::add_field( 'unfold_config', [
    'label'         =>  esc_html__('CTA Background','unfoldx'),
    'settings'      =>  'cta_section_bg',
    'section'       =>  'cta_section',
    'type'          =>  'background',
    'default'       =>  ''
]);

// CTA Title
Kirki::add_field( 'unfold_config', [
    'label'         =>  esc_html__('CTA title','unfoldx'),
    'settings'      =>  'cta_title',
    'section'       =>  'cta_section',
    'type'          =>  'text',
    'default'       =>  'Have any project on mind?'
]);

// CTA Description
Kirki::add_field( 'unfold_config', [
    'label'         =>  esc_html__('CTA Description','unfoldx'),
    'settings'      =>  'cta_description',
    'section'       =>  'cta_section',
    'type'          =>  'textarea',
    'default'       =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua nostrud.',
]);

// CTA button 1 
Kirki::add_field( 'unfold_config', [
    'label'         =>  esc_html__('CTA Button 1','unfoldx'),
    'settings'      =>  'cta_btn_1',
    'section'       =>  'cta_section',
    'type'          =>  'text',
    'default'       =>  '',
]);

// CTA button link 1 
Kirki::add_field( 'unfold_config', [
    'label'         =>  esc_html__('CTA Button 1 Link', 'unfoldx'),
    'settings'      =>  'cta_btn_1_link',
    'section'       =>  'cta_section',
    'type'          =>  'url',
    'default'       =>  '#'
]);

// CTA button 2
Kirki::add_field( 'unfold_config', [
    'label'         =>  esc_html__('CTA Button 2','unfoldx'),
    'settings'      =>  'cta_btn_2',
    'section'       =>  'cta_section',
    'type'          =>  'text',
    'default'       =>  '',
]);

// CTA button link 2
Kirki::add_field( 'unfold_config', [
    'label'         =>  esc_html__('CTA Button 2 Link', 'unfoldx'),
    'settings'      =>  'cta_btn_2_link',
    'section'       =>  'cta_section',
    'type'          =>  'url',
    'default'       =>  '#'
]);

// Work Section
Kirki::add_section( 'work_section', [
    'title'         =>  esc_html__('Work Section', 'unfoldx'),
    'panel'         =>  'unfold_panel'
]);

// Enable work section
Kirki::add_field( 'unfold_config', [
    'label'         =>  esc_html__('Enable Work ?', 'unfoldx'),
    'settings'      =>  'work_section_enable',
    'section'       =>  'work_section',
    'type'          =>  'switch',
    'default'       =>  'on',
    'choices'       =>  [
        'on'        =>  esc_html__('On','unfoldx'),
        'off'       =>  esc_html__('Off','unfoldx')
    ]
]);

// Work section title
Kirki::add_field( 'unfold_config', [
    'label'         =>  esc_html__('Section Title', 'unfoldx'),
    'settings'      =>  'work_section_title',
    'section'       =>  'work_section',
    'type'          =>  'text',
    'default'       =>  'My Recent Works',
]);

// Work section description
Kirki::add_field( 'unfold_config', [
    'label'         =>  esc_html__('Section description', 'unfoldx'),
    'settings'      =>  'work_section_desc',
    'section'       =>  'work_section',
    'type'          =>  'textarea',
    'default'       =>  'Nunc id dui at sapien faucibus fermentum ut vel diam. Nullam tempus, nunc id efficitur sagittis, urna est ultricies eros, ac porta sem turpis quis leo.'
]);

// Work Section item
Kirki::add_field( 'unfold_config', [
    'label'         =>  esc_html__('Work Item', 'unfoldx'),
    'settings'      =>  'work_section_items',
    'section'       =>  'work_section',
    'type'          =>  'repeater',
    'default'       =>  '',
    'row_label'     =>  [
        'type'      =>  'field',
        'value'     =>  esc_html__('Item', 'unfoldx'),
        'field'     =>  'work_title'
    ],
    'fields'        =>  [
        'work_title'    =>  [
            'type'      =>  'text',
            'label'     =>  esc_html__('Title', 'unfoldx'),
        ],

        'work_img'      =>  [
            'type'      =>  'image',
            'label'     =>  esc_html__('Photo', 'unfoldx')
        ],

        'work_link'     =>  [
            'type'      =>  'url',
            'label'     =>  esc_html__('URL', 'unfoldx'),
            'default'   =>  '#'
        ]
    ]
]);

// Work section button
Kirki::add_field( 'unfold_config', [
    'label'         =>  esc_html__('Button Text', 'unfoldx'),
    'settings'      =>  'work_section_btn',
    'section'       =>  'work_section',
    'type'          =>  'text',
    'default'       =>  'More Works'
]);

// Work section button url
Kirki::add_field( 'unfold_config', [
    'label'         =>  esc_html__('Button URL', 'unfoldx'),
    'settings'      =>  'work_section_link',
    'section'       =>  'work_section',
    'type'          =>  'url',
    'default'       =>  '#'
]);

// Pricing Plan section
Kirki::add_section( 'price_section', [
    'title'         =>  esc_html__( 'Pricing Plan Seciton', 'unfoldx'),
    'panel'         =>  'unfold_panel',
]);

// Pricing plan enable
Kirki::add_field( 'unfold_config', [
    'label'         =>  esc_html__('Enable Pricing plan section', 'unfoldx'),
    'settings'      =>  'price_section_enable',
    'section'       =>  'price_section',
    'type'          =>  'switch',
    'default'       =>  'on',
    'choices'       =>  [
        'on'        =>  esc_html__('On','unfoldx'),
        'off'       =>  esc_html__('Off','unfoldx')
    ]
]);

// Pricing Title
Kirki::add_field( 'unfold_config', [
    'label'         =>  esc_html__( 'Section Title', 'unfoldx'),
    'settings'      =>  'price_section_title',
    'section'       =>  'price_section',
    'type'          =>  'text',
    'default'       =>  esc_html__( 'Pricing Plans', 'unfoldx')
]);

// Pricing Description
Kirki::add_field( 'unfold_config', [
    'label'         =>  esc_html__( 'Section desc', 'unfoldx'),
    'settings'      =>  'price_section_desc',
    'section'       =>  'price_section',
    'type'          =>  'text',
    'default'       =>  esc_html__( 'Nunc id dui at sapien faucibus fermentum ut vel diam. Nullam tempus, nunc id efficitur sagittis, urna est ultricies eros, ac porta sem turpis quis leo.', 'unfoldx'),
]);

// Pricing Table
Kirki::add_field( 'unfold_config', [
    'label'         =>  esc_html__('Pricing Package', 'unfoldx'),
    'settings'      =>  'price_section_table',
    'section'       =>  'price_section',
    'type'          =>  'repeater',
    'default'       =>  [],
    'row_label'     =>  [
        'type'      =>  'field',
        'value'     =>  esc_html__('Package','unfoldx'),
        'field'     =>  'price_table_title'
    ],
    'fields'        =>  [
        'price_table_title' =>  [
            'type'      =>   'text',
            'label'     =>  esc_html__('Package Title','unfoldx'),
            'default'   =>  'Basic',
        ],
        'price_table_desc'  =>  [
            'type'      =>  'textarea',
            'label'     =>  esc_html__('Package Description','unfoldx'),
            'default'   =>  '',
        ],
        'price_table_fea_1' =>  [
            'type'      =>  'text',
            'label'     =>  esc_html__('Feature 1','unfoldx'),
            'default'   =>  'Lorem Ipsum'
        ],
        'price_table_fea_2' =>  [
            'type'      =>  'text',
            'label'     =>  esc_html__('Feature 2','unfoldx'),
            'default'   => 'Lorem Ipsum'
        ],
        'price_table_fea_3' =>  [
            'type'      =>  'text',
            'label'     =>  esc_html__('Feature 3','unfoldx'),
            'default'   => 'Lorem Ipsum'
        ],
        'price_table_fea_4' =>  [
            'type'      =>  'text',
            'label'     =>  esc_html__('Feature 4','unfoldx'),
            'default'   => 'Lorem Ipsum'
        ],
        'price_table_fea_5' =>  [
            'type'      =>  'text',
            'label'     =>  esc_html__('Feature 5','unfoldx'),
            'default'   => 'Lorem Ipsum'
        ],
        'price_table_fea_6' =>  [
            'type'      =>  'text',
            'label'     =>  esc_html__('Feature 6','unfoldx'),
            'default'   => 'Lorem Ipsum'
        ],
        'price_table_price' =>  [
            'type'      =>  'text',
            'label'     =>  esc_html__('Package Price','unfoldx'),
            'default'   => '$18.00'
        ],
        'price_table_btn'   =>  [
            'type'      =>  'text',
            'label'     =>  esc_html__('Button Text','unfoldx'),
            'default'   => 'Quote'
        ],
        'price_table_link'   =>  [
            'type'      =>  'url',
            'label'     =>  esc_html__('Button URL','unfoldx'),
            'default'   =>  '#'
        ],
        'price_table_recommended'   =>  [
            'type'      =>  'checkbox',
            'label'     =>  esc_html__('Recommended Package','unfoldx'),
            'default'   =>  ''
        ],
    ]
]);

// Blog Section
Kirki::add_section( 'blog_section', array(
    'title'         =>  __( 'Blog Section', 'unfoldx' ),
    'panel'         =>  'unfold_panel'
));

// Enable Blog Section
Kirki::add_field( 'unfold_config', array(
    'label'     =>  __('Enable Blog Section ?', 'unfoldx'),
    'settings'  =>  'blog_section_enable',
    'section'   =>  'blog_section',
    'type'      =>  'switch',
    'default'   =>  'on',
    'choices'   =>  [
        'on'    =>  esc_html__('Yes', 'unfoldx'),
        'off'   =>  esc_html__('No', 'unfoldx')
    ]
));

// Blog section title
Kirki::add_field( 'unfold_config', [
    'label'         =>  esc_html__('Section Title', 'unfoldx'),
    'settings'      =>  'blog_section_title',
    'section'       =>  'blog_section',
    'type'          =>  'text',
    'default'       =>  'Recent Blog',
]);

// Blog section description
Kirki::add_field( 'unfold_config', [
    'label'         =>  esc_html__('Section description', 'unfoldx'),
    'settings'      =>  'blog_section_desc',
    'section'       =>  'blog_section',
    'type'          =>  'textarea',
    'default'       =>  'Nunc id dui at sapien faucibus fermentum ut vel diam. Nullam tempus, nunc id efficitur sagittis, urna est ultricies eros, ac porta sem turpis quis leo.'
]);

// Blog Button Link
Kirki::add_field( 'unfold_config', [
    'label'         =>  esc_html__('Button Link','unfoldx'),
    'settings'      =>  'blog_section_link',
    'section'       =>  'blog_section',
    'type'          =>  'url',
    'default'       =>  '#'
]);

// Contact Section
Kirki::add_section( 'contact_section', array(
    'title'         =>  __( 'Contact Section', 'unfoldx' ),
    'panel'         =>  'unfold_panel'
));

// Enable Contact Section
Kirki::add_field( 'unfold_config', array(
    'label'     =>  __('Enable Contact Section ?', 'unfoldx'),
    'settings'  =>  'contact_section_enable',
    'section'   =>  'contact_section',
    'type'      =>  'switch',
    'default'   =>  'on',
    'choices'   =>  [
        'on'    =>  esc_html__('Yes', 'unfoldx'),
        'off'   =>  esc_html__('No', 'unfoldx')
    ]
));

// Contact section title
Kirki::add_field( 'unfold_config', [
    'label'         =>  esc_html__('Section Title', 'unfoldx'),
    'settings'      =>  'contact_section_title',
    'section'       =>  'contact_section',
    'type'          =>  'text',
    'default'       =>  'Contact',
]);

// Contact section description
Kirki::add_field( 'unfold_config', [
    'label'         =>  esc_html__('Section description', 'unfoldx'),
    'settings'      =>  'contact_section_desc',
    'section'       =>  'contact_section',
    'type'          =>  'textarea',
    'default'       =>  'Nunc id dui at sapien faucibus fermentum ut vel diam. Nullam tempus, nunc id efficitur sagittis, urna est ultricies eros, ac porta sem turpis quis leo.'
]);

// Contact section address
Kirki::add_field( 'unfold_config', [
    'label'         =>  esc_html__('Address', 'unfoldx'),
    'settings'      =>  'contact_section_address',
    'section'       =>  'contact_section',
    'type'          =>  'textarea',
    'default'       =>  '123 Stree New York City , United States Of America 750'
]);

// Contact section phone
Kirki::add_field( 'unfold_config', [
    'label'         =>  esc_html__('Phone Number ', 'unfoldx'),
    'settings'      =>  'contact_section_phone',
    'section'       =>  'contact_section',
    'type'          =>  'text',
    'default'       =>  '+931 2222 5555'
]);

// Contact section mobile
Kirki::add_field( 'unfold_config', [
    'label'         =>  esc_html__('Mobile Number ', 'unfoldx'),
    'settings'      =>  'contact_section_mobile',
    'section'       =>  'contact_section',
    'type'          =>  'text',
    'default'       =>  '+931 2222 6666'
]);

// Contact section email 1
Kirki::add_field( 'unfold_config', [
    'label'         =>  esc_html__('Email address 1 ', 'unfoldx'),
    'settings'      =>  'contact_section_email_1',
    'section'       =>  'contact_section',
    'type'          =>  'text',
    'default'       =>  'support@yourmail.com'
]);

// Contact section email 2
Kirki::add_field( 'unfold_config', [
    'label'         =>  esc_html__('Email address 2 ', 'unfoldx'),
    'settings'      =>  'contact_section_email_2',
    'section'       =>  'contact_section',
    'type'          =>  'text',
    'default'       =>  'info@yourmail.com'
]);

// Contact form 
Kirki::add_field( 'unfold_config', [
    'label'         =>  esc_html__('Contact Form 7 shortcode', 'unfoldx'),
    'settings'      =>  'contact_form_7',
    'section'       =>  'contact_section',
    'type'          =>  'text',
    'default'       =>  ''
]);

// Contact Section Maps
Kirki::add_field( 'unfold_config', [
    'label'         =>  esc_html__('Google maps Embed', 'unfoldx'),
    'settings'      =>  'contact_section_maps',
    'section'       =>  'contact_section',
    'type'          =>  'code',
    'default'       =>  ''
]);

// Footer Panel
Kirki::add_panel( 'footer_panel', array(
    'title'         =>  __( 'Footer', 'unfoldx' ),
    'description'   =>  __( 'Customize footer options.', 'unfoldx'), 
    'priority'      =>  20
));

// footer logo section
Kirki::add_section( 'footer_logo_section', [
    'title'         =>  esc_html__('Logo','unfoldx'),
    'panel'         =>  'footer_panel'
]);

// Footer Logo
Kirki::add_field( 'footer_panel', [
    'label'         =>  esc_html__('Light Logo', 'unfoldx'),
    'settings'      =>  'footer_section_logo',
    'section'       =>  'footer_logo_section',
    'type'          =>  'image',
    'default'       =>  ''
]);

// footer description section
Kirki::add_section( 'footer_desc_section', [
    'title'         =>  esc_html__('Description','unfoldx'),
    'panel'         =>  'footer_panel'
]);

// Footer Logo
Kirki::add_field( 'footer_panel', [
    'label'         =>  esc_html__('Description', 'unfoldx'),
    'settings'      =>  'footer_section_desc',
    'section'       =>  'footer_desc_section',
    'type'          =>  'textarea',
    'default'       =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci- didunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exe- rcitation ullamco laboris nisi ut aliquip ex ea commodo consequat'
]);

// footer social section
Kirki::add_section( 'footer_social_section', [
    'title'         =>  esc_html__('Social Media','unfoldx'),
    'panel'         =>  'footer_panel'
]);

// Footer Social control
Kirki::add_field( 'footer_panel', [
    'label'         =>  esc_html__('Social Media', 'unfoldx'),
    'settings'      =>  'footer_section_social',
    'section'       =>  'footer_social_section',
    'type'          =>  'repeater',
    'default'       =>  [],
    'row_label'     =>  [
        'type'      =>  'field',
        'value'     =>  esc_html__('Social','unfoldx'),
        'field'     =>  'social_icon'
    ],
    'fields'        =>  [
        'social_icon'          =>  [
            'type'          =>  'select',
            'label'         =>  esc_html__('Social icon', 'unfoldx'),
            'description'   =>  esc_html__('select icon from dropdown list.', 'unfoldx'),
            'default'       =>  '',
            'placeholder'   =>  esc_html__('Select icon', 'unfoldx'),
            'multiple'      =>  false,
            'choices'       =>  [
                ''                          =>  esc_html__( 'Select', 'unfoldx'),
                'lni-facebook'              =>  esc_html__( 'Facebook', 'unfoldx'),
                'lni-facebook-messenger'    =>  esc_html__( 'Facebook messenger', 'unfoldx'),
                'lni-facebook-original'     =>  esc_html__( 'Facebook Original', 'unfoldx'),
                'lni-facebook-filled'       =>  esc_html__( 'Facebook Filled', 'unfoldx'),
                'lni-twitter'               =>  esc_html__( 'Twiiter', 'unfoldx'),
                'lni-twitter-original'      =>  esc_html__( 'Twitter Original', 'unfoldx'),
                'lni-twitter-filled'        =>  esc_html__( 'Twitter Filled', 'unfoldx'),
                'lni-linkedin'              =>  esc_html__( 'Linkedin', 'unfoldx'),
                'lni-linkedin-original'     =>  esc_html__( 'Linkedin Original', 'unfoldx'),
                'lni-linkedin-filled'       =>  esc_html__( 'Linkedin Filled', 'unfoldx'),
                'lni-git'                   =>  esc_html__( 'Git', 'unfoldx'),
                'lni-github'                =>  esc_html__( 'Github', 'unfoldx'),
                'lni-github-original'       =>  esc_html__( 'Github Original', 'unfoldx'),
                'lni-stackoverflow'         =>  esc_html__( 'Stackoverflow', 'unfoldx'),
                'lni-website'               =>  esc_html__( 'Website', 'unfoldx'),
                'lni-youtube'               =>  esc_html__( 'Youtube', 'unfoldx'),
                'lni-wechat'                =>  esc_html__( 'Wechat', 'unfoldx'),
                'lni-whatsapp'              =>  esc_html__( 'Whatsapp', 'unfoldx'),
                'lni-slack'                 =>  esc_html__( 'Slack', 'unfoldx'),
                'lni-skype'                 =>  esc_html__( 'Skype', 'unfoldx'),
                'lni-pinterest'             =>  esc_html__( 'Pinterest', 'unfoldx'),
            ]
        ],
        'social_url' => [
			'type'        => 'url',
			'label'       => esc_html__( 'URL', 'unfoldx' ),
			'default'     => '',
		]
    ]
]);
endif;