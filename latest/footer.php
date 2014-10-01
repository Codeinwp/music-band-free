<?php
/*
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package music-band-lite
 */
?><?php get_template_part( '/inc/footer-section' ); ?>
		<footer>
			<div class="footercenter">
				<div class="copyright">
					<?php
						if ( get_theme_mod( 'codeinwp_copyright' ) ):
							echo get_theme_mod( 'codeinwp_copyright' );
						endif;		
					?>					<a href="https://themeisle.com/themes/music-band-lite/" target="_blank">Music Band Lite</a><?php _e(' powered by ','music-band-lite'); ?><a href="http://wordpress.org/" target="_blank"><?php _e('WordPress','music-band-lite'); ?></a>
				</div>				<nav id="footer_nav">						<?php wp_nav_menu( array( 'theme_location' => 'footer_menu', 'container' => '', 'depth' => -1 ) ); ?>				</nav>
				<div class="clearfix"></div>
			</div><!--/footercenter-->
		</footer>

<?php wp_footer(); ?>

</body>
</html>