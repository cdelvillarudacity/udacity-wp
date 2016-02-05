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

<!-- Subscribe Modal -->
<div class="modal fade" id="subscribeModal" tabindex="-1" role="dialog" aria-labelledby="subscribeModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<h3 class="modal-title" id="subscribeModalLabel">Subscribe To Our Newsletter</h3>
				<small>learning = growing</small>
				<p>Sign up for Udacity blog updates to get the latest in guidance and inspiration as you discover programming, web development, data science, and more.</p>
				<form class="form-inline">
					<div class="form-group">
						<input type="email" class="form-control" id="subscribeEmail" placeholder="Email Address">
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
				<p><small>By subscribing you agree to our <a href="">terms and conditions</a></small></p>
			</div>
		</div>
	</div>
</div>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
