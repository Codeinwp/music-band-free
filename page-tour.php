<?php 
/*
Template Name: Tour
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
										echo '<div class="album_title">' . $top_banner_title . '</div>';
									if ( isset( $top_banner_text ) && $top_banner_text != '' )	
										echo '<p>' . $top_banner_text . '</p>';
								?>
							</section><!--/subheader-->
						<?php
						else:
						?>
							<section id="subheader" class="subheader_news" 								style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/abovefooterbg.png');">
								<?php 
									if ( isset( $top_banner_title ) && $top_banner_title != '' )
										echo '<div class="album_title">' . $top_banner_title . '</div>';
									if ( isset( $top_banner_text ) && $top_banner_text != '' )	
										echo '<p>' . $top_banner_text . '</p>';
								?>
							</section><!--/subheader-->
						<?php
						endif;
					endif;
				endforeach;
			endif;
		?>
		
		<!--Subheader End-->

		<div class="pagetitle">
			<div class="pagetitlecenter">
				<h3><?php _e( 'upcoming events', 'cwp' ); ?></h3>
			</div><!--/pagetitlecenter-->
		</div><!--/pagetitle-->
		
		<!--Content Start-->
		<div id="wraper">
			<section id="content">
					<?php
					$queryObject = new WP_Query( array(
						'tax_query' => array(
							array(                
								'taxonomy' => 'post_format',
								'field' => 'slug',
								'terms' => array( 
									'post-format-image'
								   
								)
							)
						)
					) );
					if ( $queryObject->have_posts()) {
						while ( $queryObject->have_posts()) {
							$queryObject->the_post();
							?>
								<div class="event">
									<?php 
										if ( has_post_thumbnail()) {
											echo '<div class="img">';
												echo get_the_post_thumbnail();
											echo '</div>';	
										}	
									?>	
									
									<div class="title"><?php the_title(); ?></div>
									<?php 
										$day = get_post_meta( $id, 'cpi_day_option' );
										$month = get_post_meta( $id, 'cpi_month_option' );
										$tickets = get_post_meta( $id, 'cpi_tickets_option' );
										
										if ( isset( $day[0] ) && $day[0] != '' )
											echo '<div class="day">' . $day[0] . '</div>';
									?>
									
									<div class="eventcontent">
										<?php 
											if ( isset( $month[0] ) && $month[0] != '' )
												echo '<span>' . $month[0] . '</span><br />';
										?>
										<?php the_content(); ?>
									</div>
									<div class="clearfix"></div>
									<?php
										if ( isset( $tickets[0] ) && $tickets[0] != '' )
											echo '<div class="getticket"><a href="' . $tickets[0] . '">'.__( 'Get tickets', 'cwp' ).'</a></div>';
									?>
								</div>
								
							<?php
						}	
					}
					 wp_reset_postdata();
					?>
			</section><!--/content-->
			<aside id="sidebar">
				<?php get_sidebar(); ?>
			</aside><!--/sidebar-->
			<div class="clearfix"></div>
		</div><!--/wraper-->
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