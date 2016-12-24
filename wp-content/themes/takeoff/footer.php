<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package takeoff
 */

?>

	<footer id="contact" class="footer" role="contentinfo">
		<div class="container-fluid">
			<div class="contact-area col-sm-10 col-sm-offset-1">
				<h2>Reach Out to Us</h2>
				<?php echo do_shortcode( '[contact-form-7 id="35" title="Contact Us"]' ); ?>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

	<?php wp_footer(); ?>

</div> <!-- #site-container -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/slick/slick.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/masonry.pkgd.min"></script>
	<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/init.js"></script>
</body>
</html>
