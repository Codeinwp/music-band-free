<?php 
/*
Template Name: About
*/
get_header();
?>
<?php 
	while ( have_posts() ) : the_post();
		$id = get_the_ID();
		
		if( get_theme_mod( 'multiple_select_setting' )):
			$top_banner = get_theme_mod( 'multiple_select_setting' );
		endif;
			if( isset( $top_banner) && !empty( $top_banner)):
				foreach( $top_banner as $p):		
					if( $id == $p):
						if( get_theme_mod( 'top_banner_image' )):
							$top_banner_image = get_theme_mod( 'top_banner_image' );
						endif;
						if( get_theme_mod( 'top_banner_title' )):
							$top_banner_title = get_theme_mod( 'top_banner_title' );
						endif;	
						if( get_theme_mod( 'top_banner_text' )):
							$top_banner_text = get_theme_mod( 'top_banner_text' );
						endif;	
						if( isset( $top_banner_image) && $top_banner_image != '' ):
						?>
							<section id="subheader" class="subheader_news" style="background-image: url(<?php echo $top_banner_image; ?>);">
								<?php 
									if( isset( $top_banner_title) && $top_banner_title != '' )
										echo '<div class="album_title">'.$top_banner_title.'</div>';
									if( isset( $top_banner_text) && $top_banner_text != '' )	
										echo '<p>'.$top_banner_text.'</p>';
								?>
							</section><!--/subheader-->
						<?php
						else:
						?>
							<section id="subheader" class="subheader_news" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/abovefooterbg.png);">
								<?php 
									if( isset( $top_banner_title) && $top_banner_title != '' )
										echo '<div class="album_title">'.$top_banner_title.'</div>';
									if( isset( $top_banner_text) && $top_banner_text != '' )	
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
					if( get_theme_mod( 'fi_pages' )):
						$fi_pages = get_theme_mod( 'fi_pages' );
					endif;	
					if ( ( isset( $fi_pages) && $fi_pages == 'show' ) || ( ! isset( $fi_pages) ) ){
					
						if( has_post_thumbnail( $post->ID)) {
							$url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID) );
					?>
						<div class="about_banner">
							<img src="<?php echo $url; ?>" alt="About us">
							
							<?php 
								$caption = get_post_meta( $id, 'cpi_caption_option' );
								if( isset( $caption[0]) && $caption[0] != '' )	
									echo '<div class="year">'.$caption[0].'</div>';
							?>
						</div>
					<?php
						}
					?>	
						<div class="about_content">
							<h3 class="about_content_title"><?php the_title(); ?></h3>
							<?php the_content(); ?>
						</div>
					<?php
					}
					else {
					?>
						<div class="about_content">
							<h3 class="about_content_title"><?php the_title(); ?></h3>
							<?php the_content(); ?>
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
		$queryObject = new WP_Query( array(
			'tax_query' => array(
				array(                
					'taxonomy' => 'post_format',
					'field' => 'slug',
					'terms' => array( 
						'post-format-aside'
					   
					)
				)
			)
		) );
		if ( $queryObject->have_posts()) {
		?>
			<div class="pagetitle pagetitlemobile" style="margin-top: -55px;">
				<div class="pagetitlecenter">
					<h3><?php _e( 'Band MEMBERS', 'cwp' ); ?></h3>
				</div>
			</div>
			<div id="bandmembers">
				<div class="bandmembers_center">
					<?php
						while ( $queryObject->have_posts()) {
							$queryObject->the_post();
							
							$career = get_post_meta( $id, 'cpi_career_option' );
					?>
							<div class="member">
								<div class="name"><?php the_title(); ?></div>
								<?php 
									if( isset( $career[0]) && $career[0] != '' )
										echo '<div class="position">' . $career[0] . '</div>'; 
								the_excerpt();
									if ( has_post_thumbnail() ) {
										$url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID) );
										echo '<div class="img" style="background-image: url('.$url.' );"></div>';	
									}	
									
								?>
							</div>						
					<?php
						}	
					}
					 wp_reset_postdata();	
					?>
				</div>	
			</div>	
		
		<div class="clearfix"></div>
<?php		
		if( get_theme_mod( 'multiple_select_setting_footer' )):
			$footer_section = get_theme_mod( 'multiple_select_setting_footer' );
		endif;
		
			if( isset( $footer_section) && !empty( $footer_section)):
				foreach( $footer_section as $f):		
					if( $id == $f):
						get_template_part( '/inc/footer-section' );
					endif;
				endforeach;
			endif;
		
		
 endwhile;	
?>	
<?php get_footer(); ?>