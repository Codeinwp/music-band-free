<?php
	/* images */
	if ( get_theme_mod( 'slider_image1' )):
		$slider_image1 = get_theme_mod( 'slider_image1' );
	if ( get_theme_mod( 'slider_image2' )):
	if ( get_theme_mod( 'slider_image3' )):
	/* big titles */
	if ( get_theme_mod( 'slider_bigtitle1' )):
	if ( get_theme_mod( 'slider_bigtitle2' )):
	if ( get_theme_mod( 'slider_bigtitle3' )):
	/* titles */
	if ( get_theme_mod( 'slider_title1' )):
	if ( get_theme_mod( 'slider_title2' )):
	if ( get_theme_mod( 'slider_title3' )):
	/* texts */
	if ( get_theme_mod( 'slider_text1' )):
		$slider_text1 = get_theme_mod( 'slider_text1' );
	if ( get_theme_mod( 'slider_text2' )):
	if ( get_theme_mod( 'slider_text3' )):
								
				* FIRST SLIDE
				if ( !empty( $slider_image1 ) ){
					?>
					<div class="slide" style="background-image: url('<?php echo $slider_image1; ?>');">
						<div class="slide_details">
							<div class="album_details">
								<?php 
									if ( !empty( $slider_title1 ) ) {
										echo '<h3>' . $slider_title1 . '</h3>';
									if ( !empty( $slider_text1 ) ) {
										echo '<p>' . $slider_text1 . '</p>';
								?>
							</div>
							<?php 
								if ( !empty( $slider_bigtitle1 ) ) { 
									echo '<div class="album_title">' . $slider_bigtitle1 . '</div>';
							?>
						</div>
					</div>
					<?php
				}
								
				* SECOND SLIDE
				*/
				if ( !empty( $slider_image2 ) ) {
					?>
					<div class="slide" style="background-image: url('<?php echo $slider_image2; ?>');">
						<div class="slide_details">
							<div class="album_details">
								<?php 
									if ( !empty( $slider_title2 ) ) {
										echo '<h3>' . $slider_title2 . '</h3>';
									if ( !empty( $slider_text2 ) ) {
										echo '<p>' . $slider_text2 . '</p>';
								?>
							</div>
							<?php 
								if ( !empty( $slider_bigtitle2 ) ) { 
									echo '<div class="album_title">' . $slider_bigtitle2 . '</div>'; 
							?>
						</div>
					</div>
					<?php
				}
				/*
				* THIRD SLIDE
				*/
								
				?>
					<div class="slide" style="background-image: url('<?php echo $slider_image3; ?>' );">
						<div class="slide_details">
							<div class="album_details">
								<?php 
									if ( !empty( $slider_title3 ) ) {
										echo '<h3>' . $slider_title3 . '</h3>';
									if ( !empty( $slider_text3 ) ) {
										echo '<p>' . $slider_text3 . '</p>';
								?>
							</div>
							<?php 
								if ( !empty( $slider_bigtitle3 ) ) { 
									echo '<div class="album_title">' . $slider_bigtitle3 . '</div>'; 
							?>
						</div>
					</div>
					<?php
				}
								
?>