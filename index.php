<?php
/*
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package music-band-lite
 */

get_header(); ?>
		<div class="pagetitle">
			<div class="pagetitlecenter">
				<h3><?php _e( 'Latest News','music-band-lite' ); ?></h3>
			</div><!--/pagetitlecenter-->
		</div><!--/pagetitle-->
		<!--Content Start-->
		<div id="wraper">
			<section id="content">
				<?php 
				while ( have_posts() ) : the_post();
				?>
				<div <?php post_class(); ?>>
					<div class="topdetails">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<div class="details">
							<?php								/* date */								echo get_the_date( 'F j, Y' ) . ' &#8226; ';								/* author */								echo '<a href="' 									. get_author_posts_url( get_the_author_meta( 'ID' ) )									. '">' . get_the_author() . '</a> &#8226; ';								/* comments */								comments_number( __( 'No Comments', 'music-band-lite' ), __( 'one Comment','music-band-lite' ), 									'% ' . __( 'Comments', 'music-band-lite' ) );								echo ' &#8226; ';								/* categories */									$cat = get_the_category();								if ( !empty($cat) ) :										foreach ( $cat as $cat_item ) :											echo '<a href="' 												. get_category_link( $cat_item->cat_ID ) . '">'												. $cat_item->cat_name 												. '</a> &#8226; ';										endforeach;								endif;								if ( has_tag() ):									the_tags();									echo ' &#8226; ';								endif;								?>
						</div>
					</div><!--/topdetails-->
					
					<div class="clearfix"></div>
					<?php 
							if ( has_post_thumbnail() ) {
								echo '<figure>' . get_the_post_thumbnail() . '</figure>';
							}
					?>
					<article>
						<?php the_excerpt(); ?>						<div class="readmore"><a href="<?php the_permalink(); ?>">							<?php _e( 'Read More','music-band-lite' ); ?></a>						</div>						<div class="clearfix"></div>
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
		<!--Content End -->
<?php get_footer(); ?>