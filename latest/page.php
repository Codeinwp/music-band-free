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
get_header(); ?>
		<!--Content Start-->
		<div id="wraper">
			<section id="content">
				<div class="about_content">
					<h3 class="about_content_title"><?php the_title(); ?></h3>
						wp_link_pages();
						comments_template(); ?>
				</div>
			
			</section><!--/content-->
			<aside id="sidebar">
				<?php get_sidebar(); ?>
			</aside><!--/sidebar-->
			<div class="clearfix"></div>
		</div><!--/wraper-->
<?php
?>
<?php get_footer(); ?>