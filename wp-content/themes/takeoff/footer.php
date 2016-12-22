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

	<footer id="colophon" class="footer" role="contentinfo">
		<div class="container-fluid">
			<div class="contact-info col-sm-5">
				Contact Info
			</div>
			<div class="contact-form col-sm-7">
				Contact Form
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

<?php wp_footer(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/slick/slick.min.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/masonry.pkgd.min"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/init.js"></script>
</body>
</html>
