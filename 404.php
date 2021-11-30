<?php
get_header();
?>
<section class=" pt-125 pb-130">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center pb-25 pt-125">
                    <h1 class="title"> <?php _e('404', 'unfold'); ?> </h1>
                    <p>
                        <?php _e('page not found', 'unfold'); ?>
                    </p>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row justify-content-center text-center">
            <div class="col-lg-4 col-md-8 col-sm-9 pb-25">
                <a class="main-btn" href="<?php echo esc_url(home_url()); ?>"><?php _e('Back to Home', 'unfold'); ?></a>
            </div>
        </div>
    </div> <!-- container -->
</section>
<?php
get_footer();
?>