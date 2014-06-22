<?php 
/*
Template Name: Music
*/
get_header();
?>
		<!--Subheader Start-->
		<?php
			while ( have_posts() ) : the_post(); 
				$id = get_the_ID();
			endwhile;
			if ( get_theme_mod( 'multiple_select_setting')):
				$top_banner = get_theme_mod( 'multiple_select_setting');
			endif;
			if ( isset( $top_banner) && !empty( $top_banner)):
				foreach( $top_banner as $p):		
					if ( $id == $p):
						if ( get_theme_mod( 'top_banner_image')):
							$top_banner_image = get_theme_mod( 'top_banner_image');
						endif;	
						if ( get_theme_mod( 'top_banner_title')):
							$top_banner_title = get_theme_mod( 'top_banner_title');
						endif;	
						if ( get_theme_mod( 'top_banner_text')):
							$top_banner_text = get_theme_mod( 'top_banner_text');
						endif;	
						if ( isset( $top_banner_image) && $top_banner_image != ''):
						?>
							<section id="subheader" class="subheader_news" 								style="background-image: url('<?php echo $top_banner_image; ?>');">
								<?php 
									if ( isset( $top_banner_title) && $top_banner_title != '')
										echo '<div class="album_title">' . $top_banner_title . '</div>';
									if ( isset( $top_banner_text) && $top_banner_text != '')	
										echo '<p>' . $top_banner_text . '</p>';
								?>
							</section><!--/subheader-->
						<?php
						else:
						?>
							<section id="subheader" class="subheader_news" 								style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/abovefooterbg.png');">
								<?php 
									if ( isset( $top_banner_title) && $top_banner_title != '')
										echo '<div class="album_title">' . $top_banner_title . '</div>';
									if ( isset( $top_banner_text) && $top_banner_text != '')	
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
				<h3><?php the_title(); ?></h3>
			</div><!--/pagetitlecenter-->
		</div><!--/pagetitle-->
		
		<!--Content Start-->
		<div id="wraper">
			<section id="content">
				<?php
				$args = array(
						'tax_query' => array(
							array(                
								'taxonomy' => 'post_format',
								'field' => 'slug',
								'terms' => array( 
									'post-format-audio'
								   
								)
							)
						),
						'posts_per_page' => 10
					);
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
				?>
					<div class="music_item">
							<?php 								$price = get_post_meta( $id, 'cpi_price_option');																if ( has_post_thumbnail() || ( isset( $price[0]) && $price[0] != '')):									echo '<div class="left_side">';
									if ( has_post_thumbnail()):										echo '<div class="img">';
											echo '<figure>'.get_the_post_thumbnail().'</figure>';										echo '</div>';
									endif;
									if ( isset( $price[0]) && $price[0] != ''):
										echo '<div class="price">' . $price[0] . '</div>';									endif;										echo '</div>';								endif;	
						?>
					<div class="music_content">
						<a href="" class="title"><?php the_title(); ?></a>
						<?php the_content(); ?>
						<div class="tracklist">
							<div class="title"><?php _e( 'TRACK LIST','cwp'); ?></div>
							<?php 
								$song_counter = 1;
								$song_title1 = get_post_meta( $id, 'cpi_song1_option');
								$song_title2 = get_post_meta( $id, 'cpi_song2_option');
								$song_title3 = get_post_meta( $id, 'cpi_song3_option');
								$song_title4 = get_post_meta( $id, 'cpi_song4_option');
								$song_title5 = get_post_meta( $id, 'cpi_song5_option');
								$song_title6 = get_post_meta( $id, 'cpi_song6_option');
								$song_title7 = get_post_meta( $id, 'cpi_song7_option');
								$song_title8 = get_post_meta( $id, 'cpi_song8_option');
								$song_title9 = get_post_meta( $id, 'cpi_song9_option');
								$song_title10 = get_post_meta( $id, 'cpi_song10_option');
								$song_title11 = get_post_meta( $id, 'cpi_song11_option');
								$song_title12 = get_post_meta( $id, 'cpi_song12_option');
								$song_title13 = get_post_meta( $id, 'cpi_song13_option');
								$song_title14 = get_post_meta( $id, 'cpi_song14_option');
								$song_title15 = get_post_meta( $id, 'cpi_song15_option');
								$song_title16 = get_post_meta( $id, 'cpi_song16_option');
								$song_title17 = get_post_meta( $id, 'cpi_song17_option');
								$song_title18 = get_post_meta( $id, 'cpi_song18_option');
								$song_title19 = get_post_meta( $id, 'cpi_song19_option');
								$song_title20 = get_post_meta( $id, 'cpi_song20_option');
								
								$song_time1 = get_post_meta( $id, 'cpi_time1_option');
								$song_time2 = get_post_meta( $id, 'cpi_time2_option');
								$song_time3 = get_post_meta( $id, 'cpi_time3_option');
								$song_time4 = get_post_meta( $id, 'cpi_time4_option');
								$song_time5 = get_post_meta( $id, 'cpi_time5_option');
								$song_time6 = get_post_meta( $id, 'cpi_time6_option');
								$song_time7 = get_post_meta( $id, 'cpi_time7_option');
								$song_time8 = get_post_meta( $id, 'cpi_time8_option');
								$song_time9 = get_post_meta( $id, 'cpi_time9_option');
								$song_time10 = get_post_meta( $id, 'cpi_time10_option');
								$song_time11 = get_post_meta( $id, 'cpi_time11_option');
								$song_time12 = get_post_meta( $id, 'cpi_time12_option');
								$song_time13 = get_post_meta( $id, 'cpi_time13_option');
								$song_time14 = get_post_meta( $id, 'cpi_time14_option');
								$song_time15 = get_post_meta( $id, 'cpi_time15_option');
								$song_time16 = get_post_meta( $id, 'cpi_time16_option');
								$song_time17 = get_post_meta( $id, 'cpi_time17_option');
								$song_time18 = get_post_meta( $id, 'cpi_time18_option');
								$song_time19 = get_post_meta( $id, 'cpi_time19_option');
								$song_time20 = get_post_meta( $id, 'cpi_time20_option');
								
								$song_link1 = get_post_meta( $id, 'cpi_link1_option');
								$song_link2 = get_post_meta( $id, 'cpi_link2_option');
								$song_link3 = get_post_meta( $id, 'cpi_link3_option');
								$song_link4 = get_post_meta( $id, 'cpi_link4_option');
								$song_link5 = get_post_meta( $id, 'cpi_link5_option');
								$song_link6 = get_post_meta( $id, 'cpi_link6_option');
								$song_link7 = get_post_meta( $id, 'cpi_link7_option');
								$song_link8 = get_post_meta( $id, 'cpi_link8_option');
								$song_link9 = get_post_meta( $id, 'cpi_link9_option');
								$song_link10 = get_post_meta( $id, 'cpi_link10_option');
								$song_link11 = get_post_meta( $id, 'cpi_link11_option');
								$song_link12 = get_post_meta( $id, 'cpi_link12_option');
								$song_link13 = get_post_meta( $id, 'cpi_link13_option');
								$song_link14 = get_post_meta( $id, 'cpi_link14_option');
								$song_link15 = get_post_meta( $id, 'cpi_link15_option');
								$song_link16 = get_post_meta( $id, 'cpi_link16_option');
								$song_link17 = get_post_meta( $id, 'cpi_link17_option');
								$song_link18 = get_post_meta( $id, 'cpi_link18_option');
								$song_link19 = get_post_meta( $id, 'cpi_link19_option');
								$song_link20 = get_post_meta( $id, 'cpi_link20_option');
								
								
								if ( isset( $song_title1[0]) && $song_title1[0] != ''){
								?>
									<div class="track">
										<div class="nr"><?php echo $song_counter; ?></div>
										<div class="song"><?php echo $song_title1[0]; ?></div>
										<?php
											if ( isset( $song_time1[0]) && $song_time1[0] != '')
												echo '<div class="time">' . $song_time1[0] . '</div>';
												
											if ( isset( $song_link1[0]) && $song_link1[0] != '')	
												echo '<div class="lyrics"><a href="' . $song_link1[0] . '">'												. __( 'Lyrics','cwp').'</a></div>';
										?>
									</div>
								<?php
									$song_counter++;
								}
								if ( isset( $song_title2[0]) && $song_title2[0] != ''){
								?>
									<div class="track">
										<div class="nr"><?php echo $song_counter; ?></div>
										<div class="song"><?php echo $song_title2[0]; ?></div>
										<?php
											if( isset( $song_time2[0]) && $song_time2[0] != '')
												echo '<div class="time">' . $song_time2[0] . '</div>';
											if( isset( $song_link2[0]) && $song_link2[0] != '')	
												echo '<div class="lyrics"><a href="' . $song_link2[0] . '">'												. __( 'Lyrics','cwp').'</a></div>';	
										?>
									</div>
								<?php
									$song_counter++;
								}
								if( isset( $song_title3[0]) && $song_title3[0] != ''){
								?>
									<div class="track">
										<div class="nr"><?php echo $song_counter; ?></div>
										<div class="song"><?php echo $song_title3[0]; ?></div>
										<?php
											if( isset( $song_time3[0]) && $song_time3[0] != '')
												echo '<div class="time">' . $song_time3[0] . '</div>';
											if( isset( $song_link3[0]) && $song_link3[0] != '')	
												echo '<div class="lyrics"><a href="' . $song_link3[0] . '">'												. __( 'Lyrics','cwp').'</a></div>';	
										?>
									</div>
								<?php
									$song_counter++;
								}
								if( isset( $song_title4[0]) && $song_title4[0] != ''){
								?>
									<div class="track">
										<div class="nr"><?php echo $song_counter; ?></div>
										<div class="song"><?php echo $song_title4[0]; ?></div>
										<?php
											if( isset( $song_time4[0]) && $song_time4[0] != '')
												echo '<div class="time">' . $song_time4[0] . '</div>';
											if( isset( $song_link4[0]) && $song_link4[0] != '')	
												echo '<div class="lyrics"><a href="' . $song_link4[0] . '">'												. __( 'Lyrics','cwp').'</a></div>';	
										?>
									</div>
								<?php
									$song_counter++;
								}
								if( isset( $song_title5[0]) && $song_title5[0] != ''){
								?>
									<div class="track">
										<div class="nr"><?php echo $song_counter; ?></div>
										<div class="song"><?php echo $song_title5[0]; ?></div>
										<?php
											if( isset( $song_time5[0]) && $song_time5[0] != '')
												echo '<div class="time">' . $song_time5[0] . '</div>';
											if( isset( $song_link5[0]) && $song_link5[0] != '')	
												echo '<div class="lyrics"><a href="' . $song_link5[0] . '">'												. __( 'Lyrics','cwp').'</a></div>';	
										?>
									</div>
								<?php
									$song_counter++;
								}
								if( isset( $song_title6[0]) && $song_title6[0] != ''){
								?>
									<div class="track">
										<div class="nr"><?php echo $song_counter; ?></div>
										<div class="song"><?php echo $song_title6[0]; ?></div>
										<?php
											if( isset( $song_time6[0]) && $song_time6[0] != '')
												echo '<div class="time">' . $song_time6[0] . '</div>';
											if( isset( $song_link6[0]) && $song_link6[0] != '')	
												echo '<div class="lyrics"><a href="' . $song_link6[0] . '">'												. __( 'Lyrics','cwp').'</a></div>';	
										?>
									</div>
								<?php
									$song_counter++;
								}
								if( isset( $song_title7[0]) && $song_title7[0] != ''){
								?>
									<div class="track">
										<div class="nr"><?php echo $song_counter; ?></div>
										<div class="song"><?php echo $song_title7[0]; ?></div>
										<?php
											if( isset( $song_time7[0]) && $song_time7[0] != '')
												echo '<div class="time">' . $song_time7[0] . '</div>';
											if( isset( $song_link7[0]) && $song_link7[0] != '')	
												echo '<div class="lyrics"><a href="' . $song_link7[0] . '">'.__( 'Lyrics','cwp').'</a></div>';
										?>
									</div>
								<?php
									$song_counter++;
								}
								if( isset( $song_title8[0]) && $song_title8[0] != ''){
								?>
									<div class="track">
										<div class="nr"><?php echo $song_counter; ?></div>
										<div class="song"><?php echo $song_title8[0]; ?></div>
										<?php
											if( isset( $song_time8[0]) && $song_time8[0] != '')
												echo '<div class="time">' . $song_time8[0] . '</div>';
											if( isset( $song_link8[0]) && $song_link8[0] != '')	
												echo '<div class="lyrics"><a href="' . $song_link8[0] . '">'.__( 'Lyrics','cwp').'</a></div>';	
										?>
									</div>
								<?php
									$song_counter++;
								}
								if( isset( $song_title9[0]) && $song_title9[0] != ''){
								?>
									<div class="track">
										<div class="nr"><?php echo $song_counter; ?></div>
										<div class="song"><?php echo $song_title9[0]; ?></div>
										<?php
											if( isset( $song_time9[0]) && $song_time9[0] != '')
												echo '<div class="time">' . $song_time9[0] . '</div>';
											if( isset( $song_link9[0]) && $song_link9[0] != '')	
												echo '<div class="lyrics"><a href="' . $song_link9[0] . '">'.__( 'Lyrics','cwp').'</a></div>';
										?>
									</div>
								<?php
									$song_counter++;
								}
								if( isset( $song_title10[0]) && $song_title10[0] != ''){
								?>
									<div class="track">
										<div class="nr"><?php echo $song_counter; ?></div>
										<div class="song"><?php echo $song_title10[0]; ?></div>
										<?php
											if( isset( $song_time10[0]) && $song_time10[0] != '')
												echo '<div class="time">' . $song_time10[0] . '</div>';
											if( isset( $song_link10[0]) && $song_link10[0] != '')	
												echo '<div class="lyrics"><a href="' . $song_link10[0] . '">'.__( 'Lyrics','cwp').'</a></div>';	
										?>
									</div>
								<?php
									$song_counter++;
								}
								if( isset( $song_title11[0]) && $song_title11[0] != ''){
								?>
									<div class="track">
										<div class="nr"><?php echo $song_counter; ?></div>
										<div class="song"><?php echo $song_title11[0]; ?></div>
										<?php
											if( isset( $song_time11[0]) && $song_time11[0] != '')
												echo '<div class="time">' . $song_time11[0] . '</div>';
											if( isset( $song_link11[0]) && $song_link11[0] != '')	
												echo '<div class="lyrics"><a href="' . $song_link11[0] . '">'.__( 'Lyrics','cwp').'</a></div>';	
										?>
									</div>
								<?php
									$song_counter++;
								}
								if( isset( $song_title12[0]) && $song_title12[0] != ''){
								?>
									<div class="track">
										<div class="nr"><?php echo $song_counter; ?></div>
										<div class="song"><?php echo $song_title12[0]; ?></div>
										<?php
											if( isset( $song_time12[0]) && $song_time12[0] != '')
												echo '<div class="time">' . $song_time12[0] . '</div>';
											if( isset( $song_link12[0]) && $song_link12[0] != '')	
												echo '<div class="lyrics"><a href="' . $song_link12[0] . '">'.__( 'Lyrics','cwp').'</a></div>';	
										?>
									</div>
								<?php
									$song_counter++;
								}
								if( isset( $song_title13[0]) && $song_title13[0] != ''){
								?>
									<div class="track">
										<div class="nr"><?php echo $song_counter; ?></div>
										<div class="song"><?php echo $song_title13[0]; ?></div>
										<?php
											if( isset( $song_time13[0]) && $song_time13[0] != '')
												echo '<div class="time">' . $song_time13[0] . '</div>';
											if( isset( $song_link13[0]) && $song_link13[0] != '')	
												echo '<div class="lyrics"><a href="' . $song_link13[0] . '">'.__( 'Lyrics','cwp').'</a></div>';	
										?>
									</div>
								<?php
									$song_counter++;
								}
								if( isset( $song_title14[0]) && $song_title14[0] != ''){
								?>
									<div class="track">
										<div class="nr"><?php echo $song_counter; ?></div>
										<div class="song"><?php echo $song_title14[0]; ?></div>
										<?php
											if( isset( $song_time14[0]) && $song_time14[0] != '')
												echo '<div class="time">' . $song_time14[0] . '</div>';
											if( isset( $song_link14[0]) && $song_link14[0] != '')	
												echo '<div class="lyrics"><a href="' . $song_link14[0] . '">'.__( 'Lyrics','cwp').'</a></div>';	
										?>
									</div>
								<?php
									$song_counter++;
								}
								if( isset( $song_title15[0]) && $song_title15[0] != ''){
								?>
									<div class="track">
										<div class="nr"><?php echo $song_counter; ?></div>
										<div class="song"><?php echo $song_title15[0]; ?></div>
										<?php
											if( isset( $song_time15[0]) && $song_time15[0] != '')
												echo '<div class="time">' . $song_time15[0] . '</div>';
											if( isset( $song_link15[0]) && $song_link15[0] != '')	
												echo '<div class="lyrics"><a href="' . $song_link15[0] . '">'.__( 'Lyrics','cwp').'</a></div>';	
										?>
									</div>
								<?php
									$song_counter++;
								}
								if( isset( $song_title16[0]) && $song_title16[0] != ''){
								?>
									<div class="track">
										<div class="nr"><?php echo $song_counter; ?></div>
										<div class="song"><?php echo $song_title16[0]; ?></div>
										<?php
											if( isset( $song_time16[0]) && $song_time16[0] != '')
												echo '<div class="time">' . $song_time16[0] . '</div>';
											if( isset( $song_link16[0]) && $song_link16[0] != '')	
												echo '<div class="lyrics"><a href="' . $song_link16[0] . '">'.__( 'Lyrics','cwp').'</a></div>';	
										?>
									</div>
								<?php
									$song_counter++;
								}
								if( isset( $song_title17[0]) && $song_title17[0] != ''){
								?>
									<div class="track">
										<div class="nr"><?php echo $song_counter; ?></div>
										<div class="song"><?php echo $song_title17[0]; ?></div>
										<?php
											if( isset( $song_time17[0]) && $song_time17[0] != '')
												echo '<div class="time">' . $song_time17[0] . '</div>';
											if( isset( $song_link17[0]) && $song_link17[0] != '')	
												echo '<div class="lyrics"><a href="' . $song_link17[0] . '">'.__( 'Lyrics','cwp').'</a></div>';	
										?>
									</div>
								<?php
									$song_counter++;
								}
								if( isset( $song_title18[0]) && $song_title18[0] != ''){
								?>
									<div class="track">
										<div class="nr"><?php echo $song_counter; ?></div>
										<div class="song"><?php echo $song_title18[0]; ?></div>
										<?php
											if( isset( $song_time18[0]) && $song_time18[0] != '')
												echo '<div class="time">' . $song_time18[0] . '</div>';
											if( isset( $song_link18[0]) && $song_link18[0] != '')	
												echo '<div class="lyrics"><a href="' . $song_link18[0] . '">'.__( 'Lyrics','cwp').'</a></div>';	
										?>
									</div>
								<?php
									$song_counter++;
								}
								if( isset( $song_title19[0]) && $song_title19[0] != ''){
								?>
									<div class="track">
										<div class="nr"><?php echo $song_counter; ?></div>
										<div class="song"><?php echo $song_title19[0]; ?></div>
										<?php
											if( isset( $song_time19[0]) && $song_time19[0] != '')
												echo '<div class="time">' . $song_time19[0] . '</div>';
											if( isset( $song_link19[0]) && $song_link19[0] != '')	
												echo '<div class="lyrics"><a href="' . $song_link19[0] . '">'.__( 'Lyrics','cwp').'</a></div>';	
										?>
									</div>
								<?php
									$song_counter++;
								}
								if( isset( $song_title20[0]) && $song_title20[0] != ''){
								?>
									<div class="track">
										<div class="nr"><?php echo $song_counter; ?></div>
										<div class="song"><?php echo $song_title20[0]; ?></div>
										<?php
											if( isset( $song_time20[0]) && $song_time20[0] != '')
												echo '<div class="time">' . $song_time20[0] . '</div>';
											if( isset( $song_link20[0]) && $song_link20[0] != '')	
												echo '<div class="lyrics"><a href="' . $song_link20[0] . '">'.__( 'Lyrics','cwp').'</a></div>';	
										?>
									</div>
								<?php
									$song_counter++;
								}
							?>
							
							
						</div><!--/tracklist-->
					</div><!--/music_content-->
				</div><!--/music_item-->
				<?php
				endwhile;
				wp_reset_postdata();
				?>
			</section><!--/content-->
			<aside id="sidebar">
				<?php get_sidebar(); ?>
			</aside><!--/sidebar-->
			<div class="clearfix"></div>
		</div><!--/wraper-->
<?php		
		if( get_theme_mod( 'multiple_select_setting_footer')):
			$footer_section = get_theme_mod( 'multiple_select_setting_footer');
		endif;
		
		if( isset( $footer_section) && !empty( $footer_section)):
			foreach( $footer_section as $f):		
				if( $id == $f):
					get_template_part( '/inc/footer-section');
				endif;
			endforeach;
		endif;
?>		
<?php get_footer(); ?>