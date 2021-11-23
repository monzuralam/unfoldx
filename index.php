<?php
get_header();
?>
<!--====== ABOUT PART START ======-->
<?php
    if( true == get_theme_mod( 'about_section_enable' ) ){
?>
<section id="about" class="about-area pt-125 pb-130">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center">
                    <h2 class="title">
                        <?php 
                            echo esc_html(get_theme_mod('about_section_title')); 
                        ?>
                    </h2>
                    <p><?php echo esc_html(get_theme_mod('about_section_desc')); ?></p>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row">
            <div class="col-lg-6">
                <div class="about-content mt-50">
                    <h5 class="about-title"><?php echo esc_html(get_theme_mod('about_me_title')); ?></h5>
                    <p><?php echo esc_html(get_theme_mod('about_me_desc')); ?></p>
                    <ul class="clearfix">
                        <?php
                            $about_me_item = get_theme_mod( 'about_me_single_info' );
                            foreach( $about_me_item as $about_me_items){
                        ?>
                        <li>
                            <div class="single-info d-flex align-items-center">
                                <div class="info-icon">
                                    <i class="<?php echo $about_me_items['info_icon']; ?>"></i>
                                </div>
                                <div class="info-text">
                                    <p><span><?php echo $about_me_items['info_label']; ?></span> <?php echo $about_me_items['info_value']; ?></p>
                                </div>
                            </div> <!-- single info -->
                        </li>
                        <?php 
                            }
                        ?>
                    </ul>
                </div> <!-- about content -->
            </div>
            <div class="col-xl-5 offset-xl-1 col-lg-6">
                <div class="about-skills pt-25">
                    <?php 
                        $skills = get_theme_mod( 'about_me_skill' );
                        foreach( $skills as $skill ){
                    ?>
                    <div class="skill-item mt-25">
                        <div class="skill-header">
                            <h6 class="skill-title"><?php echo $skill['skill_title']; ?></h6>
                            <div class="skill-percentage">
                                <div class="count-box counted">
                                    <span class="counter"><?php echo $skill['skill_percentage']; ?></span>
                                </div>
                                %
                            </div>
                        </div>
                        <div class="skill-bar">
                            <div class="bar-inner">
                                <div class="bar progress-line" data-width="<?php echo $skill['skill_percentage']; ?>"></div>
                            </div>
                        </div>
                    </div> <!-- skill item -->
                    <?php
                        }
                    ?>
                </div> <!-- about skills -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>
<?php
    }
?>
<!--====== ABOUT PART ENDS ======-->

<!--====== SERVICES PART START ======-->
<?php 
    if( true == get_theme_mod('service_section_enable') ){
?>
<section id="service" class="services-area gray-bg pt-125 pb-130">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center pb-30">
                    <h2 class="title"><?php echo esc_html(get_theme_mod('service_section_title')); ?></h2>
                    <p><?php echo esc_html(get_theme_mod('service_section_desc')); ?></p>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row justify-content-center">
            <?php
                $service_section_item = get_theme_mod('service_section_item');
                foreach( $service_section_item as $serive_item ){
            ?>
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="single-service text-center mt-30">
                    <div class="service-icon">
                        <i class="<?php echo $serive_item['service_item_icon']; ?>"></i>
                    </div>
                    <div class="service-content">
                        <h4 class="service-title"><a href="<?php echo $serive_item['service_item_link']; ?>"><?php echo $serive_item['service_item_title']; ?></a></h4>
                        <p><?php echo $serive_item['service_item_desc']; ?></p>
                    </div>
                </div> <!-- single service -->
            </div>
            <?php 
                }
            ?>
        </div> <!-- row -->
    </div> <!-- container -->
</section>
<?php
    }
?>
<!--====== SERVICES PART ENDS ======-->

<!--====== CALL TO ACTION PART START ======-->
<?php
    if( true == get_theme_mod('cta_section_enable') ){
?>
<section id="call-to-action" class="call-to-action pt-125 pb-130 bg_cover" style="background-image: url(<?php echo esc_attr( get_theme_mod('cta_section_bg')['background-image'] ); ?>);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-9">
                <div class="call-action-content text-center">
                    <h2 class="action-title"><?php echo esc_html__(get_theme_mod('cta_title')); ?></h2>
                    <p><?php echo esc_html__( get_theme_mod('cta_description') ); ?></p>
                    <ul>
                        <li>
                            <a class="main-btn custom" href="<?php echo esc_url(get_theme_mod('cta_btn_1_link')); ?>">
                                <?php echo esc_html__(get_theme_mod('cta_btn_1')); ?>
                            </a>
                        </li>
                        <li>
                            <a class="main-btn custom-2" href="<?php echo esc_url(get_theme_mod('cta_btn_2_link')); ?>">
                                <?php echo esc_html__(get_theme_mod('cta_btn_2')); ?>
                            </a>
                        </li>
                    </ul>
                </div> <!-- call action content -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>
<?php
    }
?>
<!--====== CALL TO ACTION PART ENDS ======-->

<!--====== WORK PART START ======-->
<?php
    if( true == get_theme_mod('work_section_enable') ){
?>
<section id="work" class="work-area pt-125 pb-130">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="section-title pb-25">
                    <h2 class="title"><?php echo esc_html(get_theme_mod('work_section_title')); ?></h2>
                    <p><?php echo esc_html(get_theme_mod('work_section_desc')); ?></p>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row">
            <?php
                $work_section_items = get_theme_mod('work_section_items');
                foreach( $work_section_items as $work_section_item ){
            ?>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-work text-center mt-30">
                    <div class="work-image">
                        <img src="<?php echo wp_get_attachment_image_src( $work_section_item['work_img'], null, false)[0];?>" alt="work">
                    </div>
                    <div class="work-overlay">
                        <div class="work-content">
                            <h3 class="work-title"><?php echo esc_html( $work_section_item['work_title'] ); ?></h3>
                            <ul>
                                <li>
                                    <a class="image-popup" href="<?php echo esc_url( wp_get_attachment_image_src( $work_section_item['work_img'], null, false )[0] );?>">
                                        <i class="lni-plus"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo esc_url($work_section_item['work_link']); ?>">
                                        <i class="lni-link"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- single work -->
            </div>
            <?php 
                }
            ?>
        </div> <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="work-more text-center mt-50">
                    <a class="main-btn" href="<?php echo esc_url( get_theme_mod('work_section_link') );?>">
                        <?php echo esc_html( get_theme_mod('work_section_btn') ); ?>
                    </a>
                </div> <!-- work more -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>
<?php
    }
?>
<!--====== WORK PART ENDS ======-->

<!--====== PRICING PART START ======-->
<?php
    if( true == get_theme_mod('price_section_enable') ){
?>
<section id="pricing" class="pricing-area gray-bg pt-125 pb-130">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center pb-25">
                    <h2 class="title">
                        <?php 
                            $price_section_title = get_theme_mod('price_section_title');
                            printf( __('%1$s', 'unfold'), $price_section_title );
                        ?>
                    </h2>
                    <p>
                        <?php
                            $price_section_desc = get_theme_mod('price_section_desc');
                            printf( __('%1$s', 'unfold'), $price_section_desc );
                        ?>
                    </p>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row justify-content-center">
            <?php
                $price_table = get_theme_mod('price_section_table');
                foreach( $price_table as $table_data ){
            ?>
            <div class="col-lg-4 col-md-8 col-sm-9">
                <div class="single-pricing <?php echo esc_attr(isset($table_data['price_table_recommended'])) ? 'active' : ''  ?> text-center mt-30">
                    <div class="pricing-package">
                        <h4 class="package-title"><?php echo esc_html($table_data['price_table_title']); ?></h4>
                    </div>
                    <div class="pricing-body">
                        <div class="pricing-text">
                            <p><?php echo esc_html($table_data['price_table_desc']); ?></p>
                            <span class="price"><?php echo esc_html($table_data['price_table_price']); ?></span>
                        </div>
                        <div class="pricing-list">
                            <ul>
                                <li><?php echo esc_html($table_data['price_table_fea_1']); ?></li>
                                <li><?php echo esc_html($table_data['price_table_fea_2']); ?></li>
                                <li><?php echo esc_html($table_data['price_table_fea_3']); ?></li>
                                <li><?php echo esc_html($table_data['price_table_fea_4']); ?></li>
                                <li><?php echo esc_html($table_data['price_table_fea_5']); ?></li>
                                <li><?php echo esc_html($table_data['price_table_fea_6']); ?></li>
                            </ul>
                        </div>
                        <div class="pricing-btn">
                            <a class="main-btn" href="<?php echo esc_url($table_data['price_table_link']); ?>">
                                <?php echo esc_html($table_data['price_table_btn']); ?>
                            </a>
                        </div>
                    </div>
                </div> <!-- single pricing -->
            </div>
            <?php
                }
            ?>
        </div> <!-- row -->
    </div> <!-- container -->
</section>
<?php 
    }
?>
<!--====== PRICING PART ENDS ======-->

<!--====== BLOG PART START ======-->
<?php
    if( true == get_theme_mod('blog_section_enable') ){
?>
<section id="blog" class="blog-area pt-125 pb-130">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center pb-25">
                    <h2 class="title">
                        <?php 
                            $blog_section_title = get_theme_mod('blog_section_title');
                            printf(
                                __('%1$s', 'unfold'),
                                $blog_section_title
                            );
                        ?>
                    </h2>
                    <p>
                        <?php 
                            $blog_section_desc = get_theme_mod('blog_section_desc');
                            printf(
                                __('%1$s', 'unfold'),
                                $blog_section_desc
                            );
                        ?>
                    </p>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row justify-content-center">
            <?php
                $blog = new WP_query(array(
                    'posts_per_page'    =>  3,
                ));
                if($blog->have_posts()){
                    while( $blog->have_posts() ){
                        $blog->the_post();
                        ?>
                        <div class="col-lg-4 col-md-8 col-sm-9">
                            <div id="post-<?php the_ID(); ?>" <?php post_class('single-blog mt-30'); ?>>
                                <div class="blog-image">
                                    <?php
                                        if( has_post_thumbnail() ){
                                            the_post_thumbnail( 'blog_thumb' );
                                        }
                                    ?>
                                </div>
                                <div class="blog-content">
                                    <h4 class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                    <span><?php echo date("F j, Y"); ?></span>
                                </div>
                            </div> <!-- single blog -->
                        </div>
                        <?php
                    }
                }
            ?>
        </div> <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="blog-more text-center mt-50">
                    <a class="main-btn" href="<?php echo esc_url(get_theme_mod('blog_section_link')); ?>">More posts</a>
                </div> <!-- blog more -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>
<?php 
    }
?>
<!--====== BLOG PART ENDS ======-->

<!--====== CONTACT PART START ======-->
<?php
    if( true == get_theme_mod('contact_section_enable') ){
?>
<section id="contact" class="contact-area pt-125 pb-130 gray-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center pb-25">
                    <h2 class="title">
                        <?php 
                            $contact_section_title = get_theme_mod('contact_section_title');
                            printf( 
                                __( '%1$s', 'unfold'), 
                                $contact_section_title 
                            ); 
                        ?>
                    </h2>
                    <p>
                        <?php
                            $contact_section_desc = get_theme_mod('contact_section_desc');
                            printf(
                                __( '%1$s', 'unfold'),
                                $contact_section_desc
                            );
                        ?>
                    </p>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-7">
                <div class="contact-box text-center mt-30">
                    <div class="contact-icon">
                        <i class="lni-map-marker"></i>
                    </div>
                    <div class="contact-content">
                        <h6 class="contact-title"><?php echo __('Address','unfold'); ?></h6>
                        <p>
                            <?php
                                $address = get_theme_mod('contact_section_address');
                                printf( 
                                    __('%1$s','unfold'),
                                    $address
                                );
                            ?>
                        </p>
                    </div>
                </div> <!-- contact box -->
            </div>
            <div class="col-lg-4 col-md-6 col-sm-7">
                <div class="contact-box text-center mt-30">
                    <div class="contact-icon">
                        <i class="lni-phone"></i>
                    </div>
                    <div class="contact-content">
                        <h6 class="contact-title"><?php echo __('Phone','unfold'); ?></h6>
                        <p>
                            <a href="tel:<?php echo esc_attr(get_theme_mod('contact_section_phone')) ?>">
                                <?php echo esc_html(get_theme_mod('contact_section_phone')); ?>
                            </a>
                        </p>
                        <p>
                            <a href="tel:<?php echo esc_attr(get_theme_mod('contact_section_mobile')) ?>">
                                <?php echo esc_html(get_theme_mod('contact_section_mobile')); ?>
                            </a>
                        </p>
                    </div>
                </div> <!-- contact box -->
            </div>
            <div class="col-lg-4 col-md-6 col-sm-7">
                <div class="contact-box text-center mt-30">
                    <div class="contact-icon">
                        <i class="lni-envelope"></i>
                    </div>
                    <div class="contact-content">
                        <h6 class="contact-title"><?php echo __('Email','unfold'); ?></h6>
                        <p>
                            <a href="mailto:<?php echo esc_attr(get_theme_mod('contact_section_email_1')) ?>">
                                <?php echo esc_html(get_theme_mod('contact_section_email_1')); ?>
                            </a>
                        </p>
                        <p>
                            <a href="mailto:<?php echo esc_attr(get_theme_mod('contact_section_email_2')) ?>">
                                <?php echo esc_html(get_theme_mod('contact_section_email_2')); ?>
                            </a>
                        </p>
                    </div>
                </div> <!-- contact box -->
            </div>
        </div> <!-- row -->
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-form pt-30">
                    <?php
                        $cf_7 = do_shortcode(get_theme_mod('contact_form_7'));
                        printf(
                            __('%1$s', 'unfold'),
                            $cf_7
                        )
                    ?>
                </div> <!-- contact form -->
            </div>
            <div class="col-lg-6">
                <div class="contact-map mt-60">
                    <div class="gmap_canvas">
                        <?php
                            $maps = get_theme_mod('contact_section_maps');

                            $allowed_html = [
                                'iframe'      => [
                                    'src'       => [],
                                    'loading'   => [],
                                    'style'     => [],
                                    'allowfullscreen' => [],
                                ],
                            ];
                            
                            echo wp_kses( $maps, $allowed_html );
                        ?>
                    </div>
                </div> <!-- contact map -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>
<?php 
    }
?>
<!--====== CONTACT PART ENDS ======-->

<?php
get_footer();
?>