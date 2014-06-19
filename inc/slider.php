					<section id="subheader">
						<div class="subheader_center" id="sliderr">
							<div id="ciwslidernavnew">
								<div class="slidesjs-previous slidesjs-navigation left slider-buttons"><a href=""></a></div>
								<div class="right slidesjs-next slidesjs-navigation slider-buttons"><a href=""></a></div>
							</div><!--/slidernavnew-->
							<div class="sliderWrapper">
							
							
							<?php
								/* images */
								if ( get_theme_mod( 'slider_image1' )):
									$slider_image1 = get_theme_mod( 'slider_image1' );
								endif;	
								if ( get_theme_mod( 'slider_image2' )):
									$slider_image2 = get_theme_mod( 'slider_image2' );
								endif;	
								if ( get_theme_mod( 'slider_image3' )):
									$slider_image3 = get_theme_mod( 'slider_image3' );
								endif;	
								
								/* big titles */
								if ( get_theme_mod( 'slider_bigtitle1' )):
									$slider_bigtitle1 = get_theme_mod( 'slider_bigtitle1' );
								endif;	
								if ( get_theme_mod( 'slider_bigtitle2' )):
									$slider_bigtitle2 = get_theme_mod( 'slider_bigtitle2' );
								endif;	
								if ( get_theme_mod( 'slider_bigtitle3' )):
									$slider_bigtitle3 = get_theme_mod( 'slider_bigtitle3' );
								endif;	
								
								/* titles */
								if ( get_theme_mod( 'slider_title1' )):
									$slider_title1 = get_theme_mod( 'slider_title1' );
								endif;	
								if ( get_theme_mod( 'slider_title2' )):
									$slider_title2 = get_theme_mod( 'slider_title2' );
								endif;	
								if ( get_theme_mod( 'slider_title3' )):
									$slider_title3 = get_theme_mod( 'slider_title3' );
								endif;	
								
								/* texts */
								if ( get_theme_mod( 'slider_text1' )):
									$slider_text1 = get_theme_mod( 'slider_text1' );
								endif;	
								if ( get_theme_mod( 'slider_text2' )):
									$slider_text2 = get_theme_mod( 'slider_text2' );
								endif;	
								if ( get_theme_mod( 'slider_text3' )):
									$slider_text3 = get_theme_mod( 'slider_text3' );
								endif;	
								
								/*
								* FIRST SLIDE
								*/
								
								if ( isset( $slider_image1 ) && $slider_image1 != '' ){
								?>
									<div class="slide" 										style="background-image: url('<?php echo $slider_image1; ?>');">
										<div class="slide_details">
											<div class="album_details">
												<?php 
												if ( isset( $slider_title1 ) && $slider_title1 != '' )
													echo '<h3>' . $slider_title1 . '</h3>';
												if ( isset( $slider_text1 ) && $slider_text1 != '' )	
													echo '<p>' . $slider_text1 . '</p>';	
												?>
											</div>
											<?php 
												if ( isset( $slider_bigtitle1 ) && $slider_bigtitle1 != '' ) 
													echo '<div class="album_title">' . $slider_bigtitle1 . '</div>'; 
											?>
										</div>
									</div>
								<?php
								}
								else {
								?>
									<div class="slide" 										style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/slideone.png');">
										<div class="slide_details">
											<div class="album_details">
												<?php 
												if ( isset( $slider_title1 ) && $slider_title1 != '' )
													echo '<h3>' . $slider_title1 . '</h3>';
												if ( isset( $slider_text1 ) && $slider_text1 != '' )	
													echo '<p>' . $slider_text1 . '</p>';
												?>
											</div>
											<?php 
												if ( isset( $slider_bigtitle1 ) && $slider_bigtitle1 != '' ) 
													echo '<div class="album_title">' . $slider_bigtitle1 . '</div>'; 
											?>
										</div>
									</div>
								<?php
								}
								
								/*
								* SECOND SLIDE
								*/
								
								
								if ( isset( $slider_image2 ) && $slider_image2 != '' ) {
								?>
									<div class="slide"										style="background-image: url('<?php echo $slider_image2; ?>');">
										<div class="slide_details">
											<div class="album_details">
												<?php 
												if ( isset( $slider_title2 ) && $slider_title2 != '' )
													echo '<h3>' . $slider_title2 . '</h3>';
												if ( isset( $slider_text2 ) && $slider_text2 != '' )	
													echo '<p>' . $slider_text2 . '</p>';
												?>
											</div>
											<?php 
												if ( isset( $slider_bigtitle2 ) && $slider_bigtitle2 != '' ) 
													echo '<div class="album_title">' . $slider_bigtitle2 . '</div>'; 
											?>
										</div>
									</div>
								<?php
								}
								else {
								?>
									<div class="slide" 										style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/slideone.png' );">
										<div class="slide_details">
											<div class="album_details">
												<?php 
												if ( isset( $slider_title2 ) && $slider_title2 != '' )
													echo '<h3>' . $slider_title2 . '</h3>';
												if ( isset( $slider_text2 ) && $slider_text2 != '' )	
													echo '<p>' . $slider_text2 . '</p>';
												?>
											</div>
											<?php 
												if ( isset( $slider_bigtitle2 ) && $slider_bigtitle2 != '' ) 
													echo '<div class="album_title">' . $slider_bigtitle2 . '</div>'; 
											?>
										</div>
									</div>
								<?php
								}
								/*
								* THIRD SLIDE
								*/
								
								
								if ( isset( $slider_image3 ) && $slider_image3 != '/images/slideone.png' ) {
								?>
									<div class="slide" 										style="background-image: url('<?php echo $slider_image3; ?>' );">
										<div class="slide_details">
											<div class="album_details">
												<?php 
												if ( isset( $slider_title3 ) && $slider_title3 != '' )
													echo '<h3>' . $slider_title3 . '</h3>';
												if ( isset( $slider_text3 ) && $slider_text3 != '' )	
													echo '<p>' . $slider_text3 . '</p>';
												?>
											</div>
											<?php 
												if ( isset( $slider_bigtitle3 ) && $slider_bigtitle3 != '' ) 
													echo '<div class="album_title">' . $slider_bigtitle3 . '</div>'; 
											?>
										</div>
									</div>
								<?php
								}
								else {
								?>
									<div class="slide" 										style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/slideone.png');">
										<div class="slide_details">
											<div class="album_details">
												<?php 
												if ( isset( $slider_title3 ) && $slider_title3 != '' )
													echo '<h3>' . $slider_title3 . '</h3>';
												if ( isset( $slider_text3 ) && $slider_text3 != '' )	
													echo '<p>' . $slider_text3 . '</p>';
												?>
											</div>
											<?php 
												if ( isset( $slider_bigtitle3 ) && $slider_bigtitle3 != '' ) 
													echo '<div class="album_title">' . $slider_bigtitle3 . '</div>'; 
											?>
										</div>
									</div>
								<?php
								}
							?>
						</div><!-- end .slider-wrapper -->
						</div>
					</section>