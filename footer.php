<?php
/*
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package cwp
 */
?>
		<footer>
			<div class="footercenter">
				<div class="copyright">
					<?php
						if ( get_theme_mod( 'codeinwp_copyright' ) ):
							echo get_theme_mod( 'codeinwp_copyright' );
						endif;		
					?>
				</div>
				<?php  					$menu_html = wp_nav_menu( array(						'echo' => false,						'theme_location' => 'footer_menu', 						'depth' => -1, 						'walker' => new cwp_custom_menu_walker, 						'items_wrap' => '<nav class="fnav">%3$s</nav>',					) );										// For some reason the menu outputs many empty menu items					// which breaks the HTML validation.					if ( ! preg_match( '#<a href=[\'\"]+></a>#', $menu_html ) ) {						echo $menu_html;					}				?>
				<div class="clearfix"></div>
			</div><!--/footercenter-->
		</footer>

<?php wp_footer(); ?>

</body>
</html>