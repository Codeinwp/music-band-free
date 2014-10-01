<?php
/*
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package music-band-lite
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
				<div class="clearfix"></div>
			</div><!--/footercenter-->
		</footer>

<?php wp_footer(); ?>

</body>
</html>