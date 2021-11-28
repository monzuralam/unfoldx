<?php
/**
 * The template for displaying single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Unfold
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

<main id="site-content" role="main" class="site-content">
	<div class="single">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<?php
						if ( have_posts() ) {
							while ( have_posts() ) {
								the_post();
								?>
								<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
									<div class="post-img">
										<?php 
											if(has_post_thumbnail()){
												the_post_thumbnail('full');
											}
										?>
									</div>
									<div class="post-title">
										<h1><?php the_title(); ?></h1>
									</div>
									<div class="post-content">
										<?php the_content(); ?>
									</div>
									<div class="section-inner">
                                        <?php 
                                            wp_link_pages(
                                                array(
                                                    'before'      => '<nav class="post-nav-links bg-light-background" aria-label="' . esc_attr__( 'Page', 'unfold' ) . '"><span class="label">' . __( 'Pages:', 'unfold' ) . '</span>',
                                                    'after'       => '</nav>',
                                                    'link_before' => '<span class="page-number">',
                                                    'link_after'  => '</span>',
                                                )
                                            );
                                    
                                            edit_post_link();
                                        ?>
                                    </div>
									<div class="post-comments">
										<?php
											/*
											* Output comments wrapper if it's a post, or if comments are open,
											* or if there's a comment number – and check for password.
											*/
											if ( ( is_single() || is_page() ) && ( comments_open() || get_comments_number() ) && ! post_password_required() ) {
												?>
												<div class="comments-wrapper">
													<?php comments_template(); ?>
												</div><!-- .comments-wrapper -->
												<?php
											}
										?>
									</div>
								</article>
								<?php
							}
						}
					?>
				</div>
			</div>
		</div>
	</div>
</main><!-- #site-content -->

<?php get_footer(); ?>
