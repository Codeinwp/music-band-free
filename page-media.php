<?php 
/*
Template Name: Media
*/
get_header();
?>
		<!--Subheader Start-->
		<?php
			while ( have_posts() ) : the_post(); 
				$id = get_the_ID();
			endwhile;
			if ( get_theme_mod( 'multiple_select_setting' )):
				$top_banner = get_theme_mod( 'multiple_select_setting' );
			endif;
			if ( isset( $top_banner ) && !empty( $top_banner )):
				foreach( $top_banner as $p ):		
					if ( $id == $p ):
						if ( get_theme_mod( 'top_banner_image' )):
							$top_banner_image = get_theme_mod( 'top_banner_image' );
						endif;	
						if ( get_theme_mod( 'top_banner_title' )):
							$top_banner_title = get_theme_mod( 'top_banner_title' );
						endif;	
						if ( get_theme_mod( 'top_banner_text' )):
							$top_banner_text = get_theme_mod( 'top_banner_text' );
						endif;	
						if ( isset( $top_banner_image ) && $top_banner_image != '' ):
						?>
							<section id="subheader" class="subheader_news" style="background-image: url('<?php echo $top_banner_image; ?>');">
								<?php 
									if ( isset( $top_banner_title ) && $top_banner_title != '' )
										echo '<div class="album_title">'.$top_banner_title.'</div>';
									if ( isset( $top_banner_text ) && $top_banner_text != '' )	
										echo '<p>'.$top_banner_text.'</p>';
								?>
							</section><!--/subheader-->
						<?php
						else:
						?>
							<section id="subheader" class="subheader_news" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/abovefooterbg.png');">
								<?php 
									if ( isset( $top_banner_title ) && $top_banner_title != '' )
										echo '<div class="album_title">'.$top_banner_title.'</div>';
									if ( isset( $top_banner_text ) && $top_banner_text != '' )	
										echo '<p>'.$top_banner_text.'</p>';
								?>
							</section><!--/subheader-->
						<?php
						endif;
					endif;
				endforeach;
			endif;
		?>

		<div class="pagetitle">
			<div class="pagetitlecenter">
				<h3><?php the_title(); ?></h3>
			</div><!--/pagetitlecenter-->
		</div><!--/pagetitle-->
		
		<!--Content Start-->
		<div class="media_bg">
			<div id="wraper">
				<section id="content">
				
					<?php
					$queryObject = new WP_Query( array(
						'tax_query' => array(
							array(                
								'taxonomy' => 'post_format',
								'field' => 'slug',
								'terms' => array( 
									'post-format-gallery'
								   
								)
							)
						)
					) );
					if ( $queryObject->have_posts()) {
						while ( $queryObject->have_posts()) {
							$queryObject->the_post();
							?>
								<div class="video_media">
									<div class="video_embed">
										<?php the_content(); ?>
									</div><!--/video_embed-->
									<a href=""><?php the_title(); ?></a>
									<span><?php _e( 'Added ', 'music-band-lite' ); echo get_the_date( 'F d, Y' ); ?></span>
								</div><!--/video-->
								
							<?php
						}	
					}
					?>

					<div class="clearfix"></div>
					<?php wp_reset_postdata(); ?>
				</section><!--/content-->
				<aside id="sidebar">
					<?php get_sidebar(); ?>
				</aside><!--/sidebar-->
				<div class="clearfix"></div>
			</div><!--/wraper-->
		</div><!--/media_bg-->
		<!--Content End -->
<?php		
		if ( get_theme_mod( 'multiple_select_setting_footer' )):
			$footer_section = get_theme_mod( 'multiple_select_setting_footer' );
		endif;
		
			if ( isset( $footer_section ) && !empty( $footer_section )):
				foreach( $footer_section as $f ):		
					if ( $id == $f ):
						get_template_part( '/inc/footer-section' );
					endif;
				endforeach;
			endif;
		
	
?>		
<?php get_footer(); ?>