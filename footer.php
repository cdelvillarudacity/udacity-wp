<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Udacity
 */

?>

	</div><!-- #content -->

</div><!-- .container -->

<footer id="colophon" class="site-footer container-fluid" role="contentinfo">
	<div class="container">
		<div class="site-info">
			<a href="<?php echo esc_url(__('https://wordpress.org/', 'udacity_wp')); ?>"><?php printf(esc_html__('Proudly powered by %s', 'udacity_wp'), 'WordPress'); ?></a>
			<span class="sep"> | </span>
			<?php printf(esc_html__('Theme: %1$s by %2$s.', 'udacity_wp'), 'udacity_wp', '<a href="http://automattic.com/" rel="designer">Automattic</a>'); ?>
		</div><!-- .site-info -->
	</div><!-- .container -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
