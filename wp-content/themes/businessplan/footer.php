<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package businessplan
 */

?>

</div>
</div>
</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="container">
		<div class="row">
			<div class="col-md-2 col-md-2"></div>
			<div class="col-md-2 col-md-2"></div>
			<div class="col-md-2 col-md-2"></div>
			<div class="col-md-3 col-md-3"></div>
			<div class="col-md-3 col-md-3"></div>
		</div>

		<div class="footer-copy-right">
			<div class="row">
				<div class="col-md-12 col-lg-12 copy-right"><?php echo get_theme_mod('copy_right'); ?></div>
			</div>
		</div>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
