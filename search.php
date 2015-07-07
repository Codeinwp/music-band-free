<?php
/*
 * The template for displaying Search Results pages.
 *
 * @package music-band-lite
 */

get_header(); ?>
<div class="pagetitle">
			<div class="pagetitlecenter">
				<h3>
					<?php printf( __( 'Search Results for: %s', 'music-band-lite' ), '<span>' . get_search_query() . '</span>' ); ?>
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
					
					<div class="clearfix"></div>
					<?php
				
						if ( has_post_thumbnail()) {
							echo '<figure>'.get_the_post_thumbnail().'</figure>';
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