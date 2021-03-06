<!doctype html>
<html <?php language_attributes(); ?>>

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>
    
    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader_34">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER ENDS START ======-->

    <!--====== HEADER PART START ======-->

    <header id="home" class="header-area">
        <div class="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <?php
                                $custom_logo_id = get_theme_mod('custom_logo');
                                $logo = wp_get_attachment_image_src( $custom_logo_id, 'full');
                            ?>
                            <a class="navbar-brand" href="<?php echo esc_url( home_url('/') ); ?>">
                                <?php
                                    if( has_custom_logo() ){
                                ?>
                                <img src="<?php echo esc_url( $logo[0] ) ?>" alt="<?php echo esc_attr(get_bloginfo('name'));  ?>">
                                <?php
                                    }else{
                                ?>
                                    <span><?php echo esc_html(get_bloginfo('name')); ?></span>
                                <?php
                                    }
                                ?>
                            </a> <!-- Logo -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <?php
                                    wp_nav_menu(array(
                                        'menu'      =>  '',
                                        'container' =>  'div',
                                        'container_class'   =>  'collapse navbar-collapse',
                                        'container_id'      =>  '',
                                        'menu_class'        =>  'navbar-nav ml-auto',
                                        'menu_id'           =>  '',
                                        'fallback_cb'       =>  'WP_Bootstrap_Navwalker::fallback',
                                        'before'            =>  '',
                                        'after'            =>  '',
                                        'depth'            =>   3,
                                        'walker'           =>   new WP_Bootstrap_Navwalker(),
                                        'theme_location'    =>  'primary_menu'
                                    ));
                                ?>
                            </div> <!-- navbar collapse -->
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navigation -->

        <?php
        if (is_page_template('template-home.php')) :
        ?>
            <div id="parallax" class="header-content d-flex align-items-center">
                <div class="header-shape shape-one layer" data-depth="0.10">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/banner/shape/shape-1.png" alt="Shape">
                </div> <!-- header shape -->
                <div class="header-shape shape-tow layer" data-depth="0.30">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/banner/shape/shape-2.png" alt="Shape">
                </div> <!-- header shape -->
                <div class="header-shape shape-three layer" data-depth="0.40">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/banner/shape/shape-3.png" alt="Shape">
                </div> <!-- header shape -->
                <div class="header-shape shape-fore layer" data-depth="0.60">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/banner/shape/shape-2.png" alt="Shape">
                </div> <!-- header shape -->
                <div class="header-shape shape-five layer" data-depth="0.20">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/banner/shape/shape-1.png" alt="Shape">
                </div> <!-- header shape -->
                <div class="header-shape shape-six layer" data-depth="0.15">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/banner/shape/shape-4.png" alt="Shape">
                </div> <!-- header shape -->
                <div class="header-shape shape-seven layer" data-depth="0.50">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/banner/shape/shape-5.png" alt="Shape">
                </div> <!-- header shape -->
                <div class="header-shape shape-eight layer" data-depth="0.40">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/banner/shape/shape-3.png" alt="Shape">
                </div> <!-- header shape -->
                <div class="header-shape shape-nine layer" data-depth="0.20">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/banner/shape/shape-6.png" alt="Shape">
                </div> <!-- header shape -->
                <div class="header-shape shape-ten layer" data-depth="0.30">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/banner/shape/shape-3.png" alt="Shape">
                </div> <!-- header shape -->
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-5 col-lg-6">
                            <div class="header-content-right">
                                <h4 class="sub-title">
                                    <?php
                                        echo esc_html( get_theme_mod('hero_section_intro_title') );  
                                    ?>
                                </h4>
                                <h1 class="title">
                                    <?php 
                                        echo esc_html( get_theme_mod('hero_section_title') );
                                    ?>
                                </h1>
                                <p>
                                    <?php 
                                        echo esc_html( get_theme_mod('hero_section_sub_title') );
                                    ?>
                                </p>
                                <a class="main-btn" href="<?php 
                                    $hero_section_cv = get_theme_mod('hero_section_cv');
                                    echo esc_url($hero_section_cv);?>">
                                    <?php 
                                        echo esc_html( get_theme_mod('hero_section_btn') );
                                    ?>
                                </a>
                            </div> <!-- header content right -->
                        </div>
                        <div class="col-lg-6 offset-xl-1">
                            <div class="header-image d-none d-lg-block">
                                <img src="<?php
                                    $hero_section_photo = get_theme_mod('hero_section_photo');
                                    echo esc_url($hero_section_photo);
                                ?>" alt="hero">
                            </div> <!-- header image -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
                <?php
                    $social_enable = get_theme_mod('hero_section_social_enable');
                    if( $social_enable ){
                ?>
                <div class="header-social">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="header-social-icon">
                                    <ul>
                                        <?php
                                            $hero_section_social = get_theme_mod('hero_section_social');
                                            foreach($hero_section_social as $hss){     
                                        ?>
                                        <li><a href="<?php echo esc_url($hss['social_url']); ?>"><i class="<?php echo esc_attr($hss['social_icon']); ?>"></i></a></li>
                                        <?php 
                                            }
                                        ?>
                                    </ul>
                                </div> <!-- header social -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                </div> <!-- header social -->
                <?php
                    }
                ?>
            </div> <!-- header content -->
        <?php
        endif;
        ?>
    </header>

    <!--====== HEADER PART ENDS ======-->