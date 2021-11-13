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
                    <h2 class="title"><?php echo get_theme_mod('about_section_title'); ?></h2>
                    <p><?php echo get_theme_mod('about_section_desc'); ?></p>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row">
            <div class="col-lg-6">
                <div class="about-content mt-50">
                    <h5 class="about-title"><?php echo get_theme_mod('about_me_title'); ?></h5>
                    <p><?php echo get_theme_mod('about_me_desc'); ?></p>
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
                    <h2 class="title"><?php echo get_theme_mod('service_section_title'); ?></h2>
                    <p><?php echo get_theme_mod('service_section_desc'); ?></p>
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
                    <h2 class="title"><?php echo esc_html__(get_theme_mod('work_section_title'),'unfold'); ?></h2>
                    <p><?php echo esc_html__(get_theme_mod('work_section_desc'), 'unfold'); ?></p>
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
                            <h3 class="work-title"><?php echo esc_html__($work_section_item['work_title'], 'unfold'); ?></h3>
                            <ul>
                                <li>
                                    <a class="image-popup" href="<?php echo wp_get_attachment_image_src( $work_section_item['work_img'], null, false)[0];?>">
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
                    <a class="main-btn" href="<?php echo esc_url( get_theme_mod('work_section_link'), 'unfold' );?>">
                        <?php echo esc_html__( get_theme_mod('work_section_btn'), 'unfold' ); ?>
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

<section id="pricing" class="pricing-area gray-bg pt-125 pb-130">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center pb-25">
                    <h2 class="title">My Pricing Plans</h2>
                    <p>Nunc id dui at sapien faucibus fermentum ut vel diam. Nullam tempus, nunc id efficitur sagittis, urna est ultricies eros, ac porta sem turpis quis leo.</p>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-8 col-sm-9">
                <div class="single-pricing text-center mt-30">
                    <div class="pricing-package">
                        <h4 class="package-title">Basic</h4>
                    </div>
                    <div class="pricing-body">
                        <div class="pricing-text">
                            <p>Simple project management for teams and small businesses.</p>
                            <span class="price">$19.00</span>
                        </div>
                        <div class="pricing-list">
                            <ul>
                                <li>Unlimited Tasks</li>
                                <li>Unlimited Public</li>
                                <li>Private Projects</li>
                                <li>Unlimited Teams</li>
                                <li>All Integrations</li>
                                <li>Public API</li>
                            </ul>
                        </div>
                        <div class="pricing-btn">
                            <a class="main-btn" href="#contact">get quote</a>
                        </div>
                    </div>
                </div> <!-- single pricing -->
            </div>
            <div class="col-lg-4 col-md-8 col-sm-9">
                <div class="single-pricing active text-center mt-30">
                    <div class="pricing-package">
                        <h4 class="package-title">Standard</h4>
                    </div>
                    <div class="pricing-body">
                        <div class="pricing-text">
                            <p>Simple project management for teams and small businesses.</p>
                            <span class="price">$39.00</span>
                        </div>
                        <div class="pricing-list">
                            <ul>
                                <li>Unlimited Tasks</li>
                                <li>Unlimited Public</li>
                                <li>Private Projects</li>
                                <li>Unlimited Teams</li>
                                <li>All Integrations</li>
                                <li>Public API</li>
                            </ul>
                        </div>
                        <div class="pricing-btn">
                            <a class="main-btn" href="#contact">get quote</a>
                        </div>
                    </div>
                </div> <!-- single pricing -->
            </div>
            <div class="col-lg-4 col-md-8 col-sm-9">
                <div class="single-pricing text-center mt-30">
                    <div class="pricing-package">
                        <h4 class="package-title">Premium</h4>
                    </div>
                    <div class="pricing-body">
                        <div class="pricing-text">
                            <p>Simple project management for teams and small businesses.</p>
                            <span class="price">$29.00</span>
                        </div>
                        <div class="pricing-list">
                            <ul>
                                <li>Unlimited Tasks</li>
                                <li>Unlimited Public</li>
                                <li>Private Projects</li>
                                <li>Unlimited Teams</li>
                                <li>All Integrations</li>
                                <li>Public API</li>
                            </ul>
                        </div>
                        <div class="pricing-btn">
                            <a class="main-btn" href="#contact">get quote</a>
                        </div>
                    </div>
                </div> <!-- single pricing -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== PRICING PART ENDS ======-->

<!--====== BLOG PART START ======-->

<section id="blog" class="blog-area pt-125 pb-130">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center pb-25">
                    <h2 class="title">From The Blog</h2>
                    <p>Nunc id dui at sapien faucibus fermentum ut vel diam. Nullam tempus, nunc id efficitur sagittis, urna est ultricies eros, ac porta sem turpis quis leo.</p>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-8 col-sm-9">
                <div class="single-blog mt-30">
                    <div class="blog-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/b-1.jpg" alt="Blog">
                    </div>
                    <div class="blog-content">
                        <h4 class="blog-title"><a href="#">Hired Releases 2023 Brand Health.</a></h4>
                        <span>July 26, 2022</span>
                    </div>
                </div> <!-- single blog -->
            </div>
            <div class="col-lg-4 col-md-8 col-sm-9">
                <div class="single-blog mt-30">
                    <div class="blog-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/b-2.jpg" alt="Blog">
                    </div>
                    <div class="blog-content">
                        <h4 class="blog-title"><a href="#">Hired Releases 2023 Brand Health.</a></h4>
                        <span>July 26, 2022</span>
                    </div>
                </div> <!-- single blog -->
            </div>
            <div class="col-lg-4 col-md-8 col-sm-9">
                <div class="single-blog mt-30">
                    <div class="blog-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/b-3.jpg" alt="Blog">
                    </div>
                    <div class="blog-content">
                        <h4 class="blog-title"><a href="#">Hired Releases 2023 Brand Health.</a></h4>
                        <span>July 26, 2022</span>
                    </div>
                </div> <!-- single blog -->
            </div>
        </div> <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="blog-more text-center mt-50">
                    <a class="main-btn" href="#">More posts</a>
                </div> <!-- blog more -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== BLOG PART ENDS ======-->

<!--====== CONTACT PART START ======-->

<section id="contact" class="contact-area pt-125 pb-130 gray-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center pb-25">
                    <h2 class="title">Get In Touch</h2>
                    <p>Nunc id dui at sapien faucibus fermentum ut vel diam. Nullam tempus, nunc id efficitur sagittis, urna est ultricies eros, ac porta sem turpis quis leo.</p>
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
                        <h6 class="contact-title">Address</h6>
                        <p>123 Stree New York City , United States Of America 750</p>
                    </div>
                </div> <!-- contact box -->
            </div>
            <div class="col-lg-4 col-md-6 col-sm-7">
                <div class="contact-box text-center mt-30">
                    <div class="contact-icon">
                        <i class="lni-phone"></i>
                    </div>
                    <div class="contact-content">
                        <h6 class="contact-title">Phone</h6>
                        <p>+931 2222 5555</p>
                        <p>+547 5554 6663</p>
                    </div>
                </div> <!-- contact box -->
            </div>
            <div class="col-lg-4 col-md-6 col-sm-7">
                <div class="contact-box text-center mt-30">
                    <div class="contact-icon">
                        <i class="lni-envelope"></i>
                    </div>
                    <div class="contact-content">
                        <h6 class="contact-title">Email</h6>
                        <p>support@yourmail.com</p>
                        <p>info@helpline.com</p>
                    </div>
                </div> <!-- contact box -->
            </div>
        </div> <!-- row -->
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-form pt-30">
                    <form id="contact-form" action="assets/contact.php">
                        <div class="single-form">
                            <input type="text" name="name" placeholder="Name">
                        </div> <!-- single form -->
                        <div class="single-form">
                            <input type="email" name="email" placeholder="Email">
                        </div> <!-- single form -->
                        <div class="single-form">
                            <textarea name="message" placeholder="Message"></textarea>
                        </div> <!-- single form -->
                        <p class="form-message"></p>
                        <div class="single-form">
                            <button class="main-btn" type="submit">Send Message</button>
                        </div> <!-- single form -->
                    </form>
                </div> <!-- contact form -->
            </div>
            <div class="col-lg-6">
                <div class="contact-map mt-60">
                    <div class="gmap_canvas">
                        <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=Mission%20District%2C%20San%20Francisco%2C%20CA%2C%20USA&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    </div>
                </div> <!-- contact map -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== CONTACT PART ENDS ======-->

<?php
get_footer();
?>