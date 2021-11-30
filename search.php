<?php
get_header();
    if( !have_posts() ){
        ?>
        <section class="pt-200 pb-125">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1><?php _e("No result found",'unfold'); ?></h1>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <?php get_search_form(); ?>
                    </div>
                </div>
            </div>
        </section>
        <?php
    }
    ?>
    <section class="pt-200 pb-125">
        <div class="container">
            <div class="row">
                <h1>
                    <?php
				        printf( __( 'Search Results for: %s', 'unfold' ), '<span>' . esc_html( get_search_query() ) . '</span>' );
				    ?>
                </h1>
            </div>
        </div>
        <div class="container">
            <div class="row">
    <?php
        if(have_posts()):
            while( have_posts() ) : the_post();
    ?>

            <div class="col-lg-12 col-md-8 col-sm-9">
                <div id="post-<?php the_ID(); ?>" <?php post_class('single-blog mt-30'); ?>>
                    <div class="p-4">
                        <h2 class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <span><?php echo date("F j, Y"); ?></span>
                        <p><?php the_excerpt(); ?></p>
                    </div>
                </div> <!-- single blog -->
            </div>

    <?php
            endwhile;
        endif;
        
    ?>
            </div>
        </div>
    </section>
<?php 
get_footer();
?>