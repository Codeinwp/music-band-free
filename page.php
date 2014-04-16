<?php
/*
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package cwp
 */

get_header(); ?>
<?php 
	while ( have_posts() ) : the_post();
		$id = get_the_ID();
		
		
		if(get_theme_mod('multiple_select_setting')):
			$top_banner = get_theme_mod('multiple_select_setting');
		endif;
		
			if(isset($top_banner) && !empty($top_banner)):
				foreach($top_banner as $p):		
					if($id == $p):
						if(get_theme_mod('top_banner_image')):
							$top_banner_image = get_theme_mod('top_banner_image');
						endif;	
						if(get_theme_mod('top_banner_title')):
							$top_banner_title = get_theme_mod('top_banner_title');
						endif;	
						if(get_theme_mod('top_banner_text')):
							$top_banner_text = get_theme_mod('top_banner_text');
						endif;	
						
						if(isset($top_banner_image) && $top_banner_image != ''):
						?>
							<section id="subheader" class="subheader_news" style="background-image: url(<?php echo $top_banner_image; ?>);">
								<?php 
									if(isset($top_banner_title) && $top_banner_title != '')
										echo '<div class="album_title">'.$top_banner_title.'</div>';
									if(isset($top_banner_text) && $top_banner_text != '')	
										echo '<p>'.$top_banner_text.'</p>';
								?>
							</section><!--/subheader-->
						<?php
						else:
						?>
							<section id="subheader" class="subheader_news" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/abovefooterbg.png);">
								<?php 
									if(isset($top_banner_title) && $top_banner_title != '')
										echo '<div class="album_title">'.$top_banner_title.'</div>';
									if(isset($top_banner_text) && $top_banner_text != '')	
										echo '<p>'.$top_banner_text.'</p>';
								?>
							</section><!--/subheader-->
						<?php
						endif;
					endif;
				endforeach;
			endif;
 ?>
		<div class="headerborder"></div>
		
		<!--Content Start-->
		<div id="wraper">
			<section id="content">
				<?php 
					if(get_theme_mod('fi_pages')):
						$fi_pages = get_theme_mod('fi_pages');
					endif;	
					if((isset($fi_pages) && $fi_pages == 'show') || (!isset($fi_pages)) ){
						if(has_post_thumbnail($post->ID)) {
							$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
					?>
						<div class="about_banner">
							<img src="<?php echo $url; ?>" alt="<?php bloginfo('name'); ?>" >
							
							<?php 
								$caption = get_post_meta($id, 'cpi_caption_option');
								if(isset($caption[0]) && $caption[0] != '')	
									echo '<div class="year">'.$caption[0].'</div>';
							?>
						</div>
					<?php
						}
						?>
						<div class="about_content">
							<h3 class="about_content_title"><?php the_title(); ?></h3>
							<?php the_content(); ?>
							<?php wp_link_pages(); ?>
							<?php comments_template(); ?>
						</div>
					<?php	
					}	
					else {
					?>
						<div class="about_content">
							<h3 class="about_content_title"><?php the_title(); ?></h3>
							<?php the_content(); ?>
							<?php wp_link_pages(); ?>
							<?php comments_template(); ?>
						</div>
					<?php
					}					
					?>
			
			</section><!--/content-->
			<aside id="sidebar">
				<?php get_sidebar(); ?>
			</aside><!--/sidebar-->
			<div class="clearfix"></div>
		</div><!--/wraper-->
		
<?php		
		if(get_theme_mod('multiple_select_setting_footer')):
			$footer_section = get_theme_mod('multiple_select_setting_footer');
		endif;
		
			if(isset($footer_section) && !empty($footer_section)):
				foreach($footer_section as $f):		
					if($id == $f):
						get_template_part('/inc/footer-section');
					endif;
				endforeach;
			endif;
		
		
 endwhile;	
?>
<?php get_footer(); ?>