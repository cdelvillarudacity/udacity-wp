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

<footer id="colophon" class="site-footer wrap" role="contentinfo">
	<div class="container container-small">
		<div class="row">
			<div class="col-md-3">
				<div class="mark">
					<img src="<?php echo get_bloginfo('template_directory');?>/images/udacity_mark.png" width="100%" alt="Udacity, Inc." />
				</div>
			</div>

			<div class="col-md-9">
				<div class="row">
					<div class="widget-area" role="complementary">
						<?php dynamic_sidebar('sidebar-footer'); ?>
					</div><!-- .widget-area -->
				</div>
			</div>
		</div>

		<div class="row site-info-row">
			<div class="col-md-2">

			</div>
			<div class="col-md-6">
				<div class="site-info">
					Nanodegree is a trademark of Udacity.
					<span class="sep"> | </span>
					&copy; 2011-<?php echo date('Y'); ?> Udacity, Inc.
				</div><!-- .site-info -->
			</div>
			<div class="col-md-4">

			</div>
		</div>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
