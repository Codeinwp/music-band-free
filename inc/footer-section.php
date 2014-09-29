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
			
			
			if ( !empty( $footer_section_image) ):
			?>
				<div id="abovefooter" style="background-image: url( <?php echo $footer_section_image; ?>);">
					<div class="abovefooter_center">
						<?php 
							if ( !empty($footer_section_title1) || !empty($footer_section_text1)):
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
							if ( !empty($footer_section_title2) || !empty($footer_section_text2)):
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
							if ( !empty($footer_section_title3) || !empty($footer_section_text3)):
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
							if ( !empty($facebook) || !empty($twitter) || !empty($linkedin)):
						?>
								<div id="footersocialmedia">
									<?php
										if ( !empty($facebook) ):
											echo '<div class="social"><a href="'.$facebook.'"><img src="'.get_template_directory_uri().'/images/facebook.png" alt="Facebook"></a></div>';										endif;	
										if ( !empty($twitter) ):
											echo '<div class="social"><a href="'.$twitter.'"><img src="'.get_template_directory_uri().'/images/twitter.png" alt="Twitter"></a></div>';											endif;	
										if ( !empty($linkedin) ):
											echo '<div class="social"><a href="'.$linkedin.'"><img src="'.get_template_directory_uri().'/images/linkedin.png" alt="Linkedin"></a></div>';											endif;	
									?>
								</div><!--/footersocialmedia-->
						<?php endif; ?>
					</div><!--/abovefooter_center-->
				</div><!--/abovefooter-->
			<?php
			endif;
?>		