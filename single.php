<?php
								echo '<a href="'.get_author_posts_url( get_the_author_meta( 'ID' )).'">'.get_the_author().'</a> &#8226; ';
								comments_number( __( 'No Comments', 'music-band-lite' ), __( 'one Comment', 'music-band-lite' ), 
								$cat = get_the_category();
									the_tags();