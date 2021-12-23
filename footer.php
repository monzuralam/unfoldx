<!--====== FOOTER PART START ======-->

<footer id="footer" class="footer-area">
    <div class="footer-widget pt-130 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="footer-content text-center">
                        <a href="<?php echo esc_url(home_url()); ?>">
                            <?php if( !empty(get_theme_mod('footer_section_logo')) ): ?>
                            <img src="<?php echo esc_url(get_theme_mod('footer_section_logo')); ?>" alt="<?php echo esc_url(home_url()); ?>">
                            <?php else: ?>
                                <?php echo get_bloginfo( 'name' ); ?>
                            <?php endif; ?>
                        </a>
                        <p class="mt-">
                            <?php 
                                $footer_section_desc = get_theme_mod('footer_section_desc');
                                if( !empty($footer_section_desc) ){
                                    echo esc_html($footer_section_desc);
                                }else{
                                    echo get_bloginfo( 'description' );
                                }
                                
                            ?>
                        </p>
                        <ul>
                            <?php 
                                $footer_section_social = get_theme_mod('footer_section_social');
                                if( !empty($footer_section_social) ){
                                    foreach($footer_section_social as $fss){
                                        ?>
                                        <li><a href="<?php echo esc_url($fss['social_url']);?>"><i class="<?php echo esc_attr($fss['social_icon']); ?>"></i></a></li>
                                        <?php
                                    }
                                }
                            ?>
                        </ul>
                    </div> <!-- footer content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- footer widget -->
    <div class="footer-copyright pb-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-text text-center pt-20">
                        <p>© <?php echo date('Y'); ?> - <a href="https://profiles.wordpress.org/monzuralam" target="_blank" class="text-white">Unfold</a> | All rights reserved.</p>
                    </div> <!-- copyright text -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- footer widget -->
</footer>

<!--====== FOOTER PART ENDS ======-->

<!--====== BACK TOP TOP PART START ======-->

<a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

<!--====== BACK TOP TOP PART ENDS ======-->
<?php wp_footer(); ?>
</body>

</html>