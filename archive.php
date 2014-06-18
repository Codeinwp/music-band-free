<?php
/*
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package cwp
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
							printf( __( 'Author: %s', 'cwp' ), '<span class="vcard">' 
							rewind_posts();

						elseif ( is_day() ) :
							printf( __( 'Day: %s', 'cwp' ), '<span>' . get_the_date() . '</span>' );

						elseif ( is_month() ) :
							printf( __( 'Month: %s', 'cwp' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );

						elseif ( is_year() ) :
							printf( __( 'Year: %s', 'cwp' ), '<span>' . get_the_date( 'Y' ) . '</span>' );

						elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
							_e( 'Asides', 'cwp' );

						elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
							_e( 'Images', 'cwp');

						elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
							_e( 'Videos', 'cwp' );

						elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
							_e( 'Quotes', 'cwp' );

						elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
							_e( 'Links', 'cwp' );

						else :
							_e( 'Archives', 'cwp' );

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
							<?php
						</div>
					</div><!--/topdetails-->
					<div class="readmore"><a href="<?php the_permalink(); ?>"><?php _e('Read More','cwp'); ?></a></div>
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
					<div class="prev"><?php previous_posts_link( __( 'Prev', 'cwp' ) ); ?></div>	
					<div class="next"><?php next_posts_link( __( 'Next', 'cwp' ) ); ?></div>
				</div><!-- /pagination-->
			</section><!--/content-->
			<aside id="sidebar">
				<?php get_sidebar(); ?>
			</aside><!--/sidebar-->
			<div class="clearfix"></div>
		</div><!--/wraper-->
<?php get_footer(); ?>