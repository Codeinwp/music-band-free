<?php
/*
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package music-band-lite
 */
get_header(); ?><?php 	if ( have_posts() ) :	while ( have_posts() ) :		the_post(); ?>		
		<!--Content Start-->
		<div id="wraper">
			<section id="content">
				<div class="about_content">
					<h3 class="about_content_title"><?php the_title(); ?></h3>					<?php						if ( has_post_thumbnail()) {							echo '<figure>'.get_the_post_thumbnail().'</figure>';						}												the_content();
						wp_link_pages();
						comments_template(); ?>
				</div>
			
			</section><!--/content-->
			<aside id="sidebar">
				<?php get_sidebar(); ?>
			</aside><!--/sidebar-->
			<div class="clearfix"></div>
		</div><!--/wraper-->
<?php	endwhile;endif;
?>
<?php get_footer(); ?>