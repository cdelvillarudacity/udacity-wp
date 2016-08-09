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

<footer class="site-footer wrap" role="contentinfo">
	<div class="container">
		<div class="row">
			<div class="col-sm-2">
				<div class="mark">
					 <img src="<?php  echo get_bloginfo('template_directory');?>/images/udacity_mark.png" width="100%" alt="Udacity" />
				</div>
			</div>

			<div class="col-sm-10">
				<nav class="foot">
					<ul class="footer_nav">
						<li class="footer_nav_toggle">
							<h3>Popular Nanodegree Programs</h3>
							<ul class="nav_list">


								<li><a href="https://www.udacity.com/course/data-analyst-nanodegree--nd002">Data Analyst </a></li>


								<li><a href="https://www.udacity.com/course/ios-developer-nanodegree--nd003">iOS Developer </a></li>


								<li><a href="https://www.udacity.com/course/tech-entrepreneur-nanodegree--nd007">Tech Entrepreneur </a></li>


								<li><a href="https://www.udacity.com/course/machine-learning-engineer-nanodegree--nd009">Machine Learning
										Engineer </a></li>


								<li><a href="https://www.udacity.com/course/beginning-ruby--nd010">Beginning Ruby BETA</a></li>


								<li><a href="https://www.udacity.com/course/android-developer-nanodegree--nd801">Android Developer </a></li>


								<li><a href="https://www.udacity.com/course/senior-web-developer--nd802">Senior Web Developer</a></li>


							</ul>
						</li>
						<li class="footer_nav_toggle">
							<h3>Student Resources</h3>
							<ul class="nav_list">
								<li><a href="http://blog.udacity.com">Blog</a></li>
								<li><a href="https://www.udacity.com/faq">Help&nbsp;&amp;&nbsp;FAQ</a></li>
								<li><a href="https://www.udacity.com/courses/all">Catalog</a></li>
								<li><a href="https://www.udacity.com/veterans">Veteran Programs</a></li>
								<li><a href="https://play.google.com/store/apps/details?id=com.udacity.android">Android
										App</a></li>
								<li><a href="https://itunes.apple.com/us/app/id819700933?mt=8">iOS App</a></li>
							</ul>
						</li>
						<li class="footer_nav_toggle">
							<h3>Udacity</h3>
							<ul class="nav_list">
								<li><a href="https://www.udacity.com/us">About</a></li>
								<li><a href="https://www.udacity.com/press">In the News</a></li>
								<li><a href="https://www.udacity.com/jobs">Jobs @ Udacity</a></li>
								<li><a href="https://www.udacity.com/georgia-tech">Georgia Tech</a></li>
								<li><a href="https://www.udacity.com/business">Udacity for Business</a></li>
								<li><a href="https://www.udacity.com/employers">Hire Graduates</a></li>
								<li><a href="https://www.udacity.com/success">Student Success</a></li>
							</ul>
						</li>
						<li class="footer_nav_toggle">
							<h3>Inquiries</h3>
							<ul class="nav_list">
								<!-- <li><a href="#">Press</a></li> -->
								<li><a href="https://www.udacity.com/contact">Contact Us</a></li>
								<li><a href="https://www.udacity.com/catalog-api">Developer API</a></li>
								<li><a href="https://www.udacity.com/legal">Legal</a></li>
								<li><a href="http://status.udacity.com">Service Status</a></li>
								<li><a href="https://www.udacity.com/sitemap">Site Map</a></li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>

			<!--			<div class="col-md-10">-->
			<!--				<div class="row">-->
			<!--					<div class="widget-area" role="complementary">-->
			<!--						--><?php //dynamic_sidebar('sidebar-footer'); ?>
			<!--					</div>-->
			<!--				</div>-->
			<!--			</div>-->
		</div>

		<div class="row site-info-row">
			<div class="col-sm-6">
				<div class="site-info">
					Nanodegree is a trademark of Udacity.
					<br/>
					&copy; 2011-<?php echo date('Y'); ?> Udacity, Inc.
				</div><!-- .site-info -->
			</div>
			<div class="col-sm-6">
				<nav class="social">
					<ul class="social_links">
						<li><a href="https://twitter.com/udacity"><img
									src="https://endor-dev.s3-us-west-2.amazonaws.com/sites/566671d2495b2d0018000000/theme/images/twitter.min.svg?1455666592"
									alt="Twitter"></a></li>
						<li><a href="https://www.facebook.com/Udacity"><img
									src="https://endor-dev.s3-us-west-2.amazonaws.com/sites/566671d2495b2d0018000000/theme/images/facebook.min.svg?1455666592"
									alt="Facebook"></a></li>
						<li><a href="https://plus.google.com/+Udacity/posts"><img
									src="https://endor-dev.s3-us-west-2.amazonaws.com/sites/566671d2495b2d0018000000/theme/images/g_plus.min.svg?1455666592"
									alt="Google +"></a></li>
						<li><a href="https://www.linkedin.com/company/udacity"><img
									src="https://endor-dev.s3-us-west-2.amazonaws.com/sites/566671d2495b2d0018000000/theme/images/linkedin.min.svg?1455666592"
									alt="LinkedIn"></a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</footer><!-- #colophon -->

<!-- Subscribe Modal -->
<!--comment test-->
<div class="modal fade" id="subscribeModal" tabindex="-1" role="dialog" aria-labelledby="subscribeModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
						aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<h3 class="modal-title" id="subscribeModalLabel">Subscribe To Our Newsletter</h3>
				<small>learning = growing</small>
				<p>Sign up for Udacity blog updates to get the latest in guidance and inspiration as you discover
					programming, web development, data science, and more.</p>
				<form class="form-inline" action="http://udacity.us9.list-manage.com/subscribe/post">
					<div class="form-group">
						<input type="hidden" name="u" value="4d05b2ee9291e1caafe0113a7">
						<input type="hidden" name="id" value="cbed5f65c4">
						<input type="email" name="MERGE0" class="form-control" id="MERGE0" placeholder="Email Address">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</form>
				<p>
					<small>By subscribing you agree to our <a href="">terms and conditions</a></small>
				</p>
			</div>
		</div>
	</div>
</div>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
