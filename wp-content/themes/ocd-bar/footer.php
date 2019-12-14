<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

		</div><!-- #main -->

	</div><!-- #page -->

	<div class="social-media">
		<?php
			if ( is_active_sidebar( 'social-media' ) ) : ?>
				<div id="social-media-widget" class="chw-widget-area widget-area" role="complementary">
					<?php dynamic_sidebar( 'social-media' ); ?>
				</div> 
			<?php endif; ?>	
	</div>
	<footer>
		<div class="container">
			Footer
			<!-- Section: Address (Tlf, Email, Address) / Newsletter -->
		</div>
	</footer>




	<?php wp_footer(); ?>
</body>
</html>