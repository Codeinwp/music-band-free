<?php
/*
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package music-band-lite
 */

get_header(); ?>
		<div class="pagetitle">
			<div class="pagetitlecenter">
				<h3>
					<?php
						if ( is_category() ) :
							single_cat_title();

						elseif ( is_tag() ) :
							single_tag_title();

						elseif ( is_author() ) :
							the_post();
							printf( __( 'Author: %s', 'music-band-lite' ), '<span class="vcard">' 								. get_the_author() . '</span>' );
							rewind_posts();

						elseif ( is_day() ) :
							printf( __( 'Day: %s', 'music-band-lite' ), '<span>' . get_the_date() . '</span>' );

						elseif ( is_month() ) :
							printf( __( 'Month: %s', 'music-band-lite' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );

						elseif ( is_year() ) :
							printf( __( 'Year: %s', 'music-band-lite' ), '<span>' . get_the_date( 'Y' ) . '</span>' );

						elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
							_e( 'Asides', 'music-band-lite' );

						elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
							_e( 'Images', 'music-band-lite');

						elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
							_e( 'Videos', 'music-band-lite' );

						elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
							_e( 'Quotes', 'music-band-lite' );

						elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
							_e( 'Links', 'music-band-lite' );

						else :
							_e( 'Archives', 'music-band-lite' );

						endif;
					?>
				</h3>
			</div><!--/pagetitlecenter-->
		</div><!--/pagetitle-->
		
		<!--Content Start-->
		<div id="wraper">
			<section id="content">
				<?php while ( have_posts() ) : the_post(); ?>
				<div class="post">
					<div class="topdetails">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<div class="details">
							<?php								/* date */								echo get_the_date('F j, Y').' &#8226; ';								/* author */								echo '<a href="' . get_author_posts_url( get_the_author_meta( 'ID' ) ).'">' . get_the_author().'</a> &#8226; ';								/* comments */								comments_number( __('No Comments', 'music-band-lite'), __('one Comment', 'music-band-lite'), '% ' 									. __('Comments','music-band-lite') );								echo ' &#8226; ';								/* categories */									$cat = get_the_category();								if(!empty($cat)) :										foreach($cat as $cat_item):											echo '<a href="' . get_category_link($cat_item->cat_ID).'">'											 . $cat_item->cat_name . '</a> &#8226; ';										endforeach;								endif;								if ( has_tag() ):									the_tags();									echo ' &#8226; ';								endif;							?>
						</div>
					</div><!--/topdetails-->
					<div class="readmore"><a href="<?php the_permalink(); ?>"><?php _e('Read More','music-band-lite'); ?></a></div>
					<div class="clearfix"></div>
					<?php 
						if ( get_theme_mod('fi_index') ) :
							$fi_index = get_theme_mod('fi_index');
						endif;	
						if ( (isset($fi_index) && $fi_index == 'show') || (!isset($fi_index)) ) {
							if ( has_post_thumbnail() ) {
								echo '<figure>' . get_the_post_thumbnail() . '</figure>';
							}
						}
					?>
					<article>
						<?php the_excerpt(); ?>
					</article>
				</div><!--/post-->
				<?php endwhile; ?>
				<div class="pagination">
					<div class="prev"><?php previous_posts_link( __( 'Prev', 'music-band-lite' ) ); ?></div>	
					<div class="next"><?php next_posts_link( __( 'Next', 'music-band-lite' ) ); ?></div>
				</div><!-- /pagination-->
			</section><!--/content-->
			<aside id="sidebar">
				<?php get_sidebar(); ?>
			</aside><!--/sidebar-->
			<div class="clearfix"></div>
		</div><!--/wraper-->
<?php get_footer(); ?>