<?php 
		if ( get_theme_mod( 'footer_section_image')):
			$footer_section_image = get_theme_mod( 'footer_section_image');
		endif;	
		if ( get_theme_mod( 'footer_section_title1')):
			$footer_section_title1 = get_theme_mod( 'footer_section_title1');
		endif;	
		if ( get_theme_mod( 'footer_section_title2')):
			$footer_section_title2 = get_theme_mod( 'footer_section_title2');
		endif;	
		if ( get_theme_mod( 'footer_section_title3')):
			$footer_section_title3 = get_theme_mod( 'footer_section_title3');
		endif;	
		if ( get_theme_mod( 'footer_section_text1')):	
			$footer_section_text1 = get_theme_mod( 'footer_section_text1');
		endif;	
		if ( get_theme_mod( 'footer_section_text2')):	
			$footer_section_text2 = get_theme_mod( 'footer_section_text2');
		endif;	
		if ( get_theme_mod( 'footer_section_text3')):	
			$footer_section_text3 = get_theme_mod( 'footer_section_text3');
		endif;	
		if ( get_theme_mod( 'facebook')):	
			$facebook = get_theme_mod( 'facebook');
		endif;	
		if ( get_theme_mod( 'twitter')):
			$twitter = get_theme_mod( 'twitter');
		endif;	
		if ( get_theme_mod( 'linkedin')):
			$linkedin = get_theme_mod( 'linkedin');
		endif;	
			
			
			if ( isset( $footer_section_image) && $footer_section_image != ''):
			?>
				<div id="abovefooter" style="background-image: url( <?php echo $footer_section_image; ?>);">
					<div class="abovefooter_center">
						<?php 
							if ( ( isset( $footer_section_title1) && $footer_section_title1 != '') 								|| ( isset( $footer_section_text1) && $footer_section_text1 != '')):
						?>
								<div class="box">
									<?php 
										if ( isset( $footer_section_title1) && $footer_section_title1 != '')
											echo '<div class="title">'.$footer_section_title1.'</div>';
										if ( isset( $footer_section_text1) && $footer_section_text1 != '')
											echo '<div class="subtitle">'.$footer_section_text1.'</div>';
									?>
								</div><!--/box-->
						<?php
							endif; 
							if ( ( isset( $footer_section_title2) && $footer_section_title2 != '') 								|| ( isset( $footer_section_text2) && $footer_section_text2 != '')):
						?>
								<div class="box center">
									<?php 
										if ( isset( $footer_section_title2) && $footer_section_title2 != '')
											echo '<div class="title">'.$footer_section_title2.'</div>';
										if ( isset( $footer_section_text2) && $footer_section_text2 != '')
											echo '<div class="subtitle">'.$footer_section_text2.'</div>';
									?>
								</div><!--/box-->
						<?php
							endif;
							if ( ( isset( $footer_section_title3) && $footer_section_title3 != '') 								|| ( isset( $footer_section_text3) && $footer_section_text3 != '')):
						?>
								<div class="box">
									<?php 
										if ( isset( $footer_section_title3) && $footer_section_title3 != '')
											echo '<div class="title">'.$footer_section_title3.'</div>';
										if ( isset( $footer_section_text3) && $footer_section_text3 != '')
											echo '<div class="subtitle">'.$footer_section_text3.'</div>';
									?>
								</div><!--/box-->
						<?php
							endif;
						?>
						<div class="clearfix"></div>
						<?php 
							if ( ( isset( $facebook) && $facebook != '') || ( isset( $twitter) && $twitter != '') 								|| ( isset( $linkedin) && $linkedin != '')):
						?>
								<div id="footersocialmedia">
									<?php
										if ( isset( $facebook) && $facebook != '')
											echo '<div class="social"><a href="'.$facebook.'"><img src="'.get_template_directory_uri().'/images/facebook.png" alt="Facebook"></a></div>';
										if ( isset( $twitter) && $twitter != '')
											echo '<div class="social"><a href="'.$twitter.'"><img src="'.get_template_directory_uri().'/images/twitter.png" alt="Twitter"></a></div>';	
										if ( isset( $linkedin) && $linkedin != '')
											echo '<div class="social"><a href="'.$linkedin.'"><img src="'.get_template_directory_uri().'/images/linkedin.png" alt="Linkedin"></a></div>';	
									?>
								</div><!--/footersocialmedia-->
						<?php endif; ?>
					</div><!--/abovefooter_center-->
				</div><!--/abovefooter-->
			<?php
			else:
			?>
				<div id="abovefooter" 					style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/abovefooterbg.png');">
					<div class="abovefooter_center">
						<?php 
							if ( ( isset( $footer_section_title1) && $footer_section_title1 != '') 								|| ( isset( $footer_section_text1) && $footer_section_text1 != '')):
						?>
								<div class="box" style="background: url('images/afbox1.png');">
									<?php 
										if ( isset( $footer_section_title1) && $footer_section_title1 != '')
											echo '<div class="title">'.$footer_section_title1.'</div>';
										if ( isset( $footer_section_text1) && $footer_section_text1 != '')
											echo '<div class="subtitle">'.$footer_section_text1.'</div>';
									?>
								</div><!--/box-->
						<?php
							endif; 
							if ( ( isset( $footer_section_title2) && $footer_section_title2 != '') 								|| ( isset( $footer_section_text2) && $footer_section_text2 != '')):
						?>
								<div class="box center" style="background: url('images/afbox2.png');">
									<?php 
										if ( isset( $footer_section_title2) && $footer_section_title2 != '')
											echo '<div class="title">'.$footer_section_title2.'</div>';
										if ( isset( $footer_section_text2) && $footer_section_text2 != '')
											echo '<div class="subtitle">'.$footer_section_text2.'</div>';
									?>
								</div><!--/box-->
						<?php
							endif;
							if ( (isset($footer_section_title3) && $footer_section_title3 != '') 								|| ( isset( $footer_section_text3) && $footer_section_text3 != '')):
						?>
								<div class="box" style="background: url('images/afbox3.png');">
									<?php 
										if ( isset( $footer_section_title3) && $footer_section_title3 != '')
											echo '<div class="title">'.$footer_section_title3.'</div>';
										if ( isset( $footer_section_text3) && $footer_section_text3 != '')
											echo '<div class="subtitle">'.$footer_section_text3.'</div>';
									?>
								</div><!--/box-->
						<?php
							endif;
						?>
						<div class="clearfix"></div>
						<?php 
							if ( ( isset($facebook) && $facebook != '') || (isset($twitter) && $twitter != '') 								|| ( isset( $linkedin) && $linkedin != '')):
						?>
								<div id="footersocialmedia">
									<?php
										if ( isset( $facebook) && $facebook != '')
											echo '<div class="social"><a href="'												.$facebook.'"><img src="'												.get_template_directory_uri()												.'/images/facebook.png" alt="Facebook"></a></div>';
										if ( isset( $twitter) && $twitter != '')
											echo '<div class="social"><a href="'.$twitter.'"><img src="'.get_template_directory_uri().'/images/twitter.png" alt="Twitter"></a></div>';	
										if ( isset( $linkedin) && $linkedin != '')
											echo '<div class="social"><a href="'.$linkedin.'"><img src="'.get_template_directory_uri().'/images/linkedin.png" alt="Linkedin"></a></div>';	
									?>
								</div><!--/footersocialmedia-->
						<?php endif; ?>		
					</div><!--/abovefooter_center-->
				</div><!--/abovefooter-->
			<?php
			endif;
?>		