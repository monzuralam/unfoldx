<?php
get_header();
?>
<section id="blog" class="blog-area pt-125 pb-130">
    <div class="container">
        <div class="row">
            <?php
                if( have_posts()){
                    while( have_posts() ){
                        the_post();
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
    </div> <!-- container -->
    <div class="container">
        <div class="row">
            <nav class="unfold-pagination pt-50">
                <?php 
                    unfold_pagination();
                ?>
            </nav>
        </div>
    </div><!-- container -->
</section>
<?php
get_footer();
?>