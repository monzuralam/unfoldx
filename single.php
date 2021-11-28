<?php
/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage unfold
 * @since unfold 1.0
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
