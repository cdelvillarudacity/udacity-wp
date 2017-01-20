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
			<div class="col-sm-12">
				<div class="mark">
					 <img src="<?php  echo get_bloginfo('template_directory');?>/images/udacity_mark.png" width="100%" alt="Udacity" />
				</div>
			</div>

			<div class="col-sm-12 footer__primary">
				<nav class="foot">
					<ul class="footer__nav">
						<li class="footer__nav__col">
							<h6 class="footer__nav__toggle">Featured Programs</h6>
							<ul class="footer__nav__list">
								<li><a href="https://www.udacity.com/course/vr-developer-nanodegree--nd017">VR Developer</a></li>
								<li><a href="https://www.udacity.com/course/self-driving-car-engineer-nanodegree--nd013">Self-Driving Car Engineer</a></li>
								<li><a href="https://www.udacity.com/course/data-analyst-nanodegree--nd002">Data Analyst</a></li>
								<li><a href="https://www.udacity.com/course/ios-developer-nanodegree--nd003">Become an iOS Developer</a></li>
								<li><a href="https://www.udacity.com/course/front-end-web-developer-nanodegree--nd001">Front-End Web Developer</a></li>
								<li><a href="https://www.udacity.com/course/machine-learning-engineer-nanodegree--nd009">Machine Learning Engineer</a></li>
								<li><a href="https://www.udacity.com/course/android-developer-nanodegree--nd801">Android Developer </a></li>
                <li><a href="https://www.udacity.com/course/full-stack-web-developer-nanodegree--nd004">Full Stack Web Developer</a></li>
                <li><a href="https://www.udacity.com/course/predictive-analytics-for-business--nd008">Predictive Analytics for Business</a></li>
							</ul>
						</li>
            <li class="footer__nav__col">
              <h6 class="footer__nav__toggle">Learn With Udacity</h6>
              <ul class="footer__nav__list">
                <li><a href="https://www.udacity.com/degrees/nd803/info/android-basics-by-google-offers-the-fundamentals">Learn Android</a></li>
                <li><a href="https://www.udacity.com/degrees/nd803/info/create-mobile-apps-with-android-basics-by-google">Develop Android</a></li>
                <li><a href="https://www.udacity.com/degrees/nd803/info/android-basics-for-google-offers-intro-for-beginners">Android Tutorial</a></li>
                <li><a href="https://www.udacity.com/degrees/nd003/info/coding-as-an-ios-developer">Swift</a></li>
                <li><a href="https://www.udacity.com/degrees/nd003/info/coding-as-an-ios-developer">Junior Web Developer</a></li>
                <li><a href="https://www.udacity.com/degrees/nd803/info/improve-apps-with-android-basics-by-google">How To Make An App For Android</a></li>
                <li><a href="https://www.udacity.com/degrees/nd803/info/design-apps-with-the-help-of-android-basics-by-google">Create Mobile Apps</a></li>
                <li><a href="https://www.udacity.com/degrees/nd001/info/code-in-html-as-a-front-end-web-developer">Learn HTML</a></li>
                <li><a href="https://www.udacity.com/degrees/nd009/info/lessons-for-an-aspiring-machine-learning-engineer">Tensor Flow</a></li>
              </ul>
            </li>
						<li class="footer__nav__col">
							<h6 class="footer__nav__toggle">Resources</h6>
							<ul class="footer__nav__list">
                <li><a href="https://www.udacity.com/courses/all">Catalog</a></li>
                <li><a href="https://career-resource-center.udacity.com">Career Resource Center</a></li>
                <li><a href="https://www.udacity.com/success">Student Success</a></li>
                <li><a href="https://www.udacity.com/uconnect">Udacity Connect</a></li>
                <li><a href="https://www.udacity.com/talks">Udacity Talks</a></li>
              </ul>
              <h6 class="footer__nav__toggle">Programs</h6>
              <ul class="footer__nav__list">
                <li><a href="https://www.udacity.com/nanodegree/plus">Nanodegree Plus</a></li>
                <li><a href="https://www.udacity.com/veterans">Veteran Programs</a></li>
                <li><a href="https://www.udacity.com/georgia-tech">Georgia Tech</a></li>
                <li><a href="https://www.udacity.com/self-driving-car">Udacity Self-Driving Car</a></li>
              </ul>
						</li>
						<li class="footer__nav__col">
							<h6 class="footer__nav__toggle">Company</h6>
							<ul class="footer__nav__list">
                <li><a href="https://www.udacity.com/us">About</a></li>
                <li><a href="http://blog.udacity.com">Blog</a></li>
                <li><a href="https://www.udacity.com/press">In the News</a></li>
                <li><a href="https://www.udacity.com/jobs">Jobs</a></li>
                <li><a href="https://www.udacity.com/mobile">Mobile</a></li>
              </ul>
              <h6 class="footer__nav__toggle">Business</h6>
              <ul class="footer__nav__list">
                <li><a href="https://www.udacity.com/business">Udacity for Business</a></li>
                <li><a href="https://www.udacity.com/corporate-training">Corporate Training</a></li>
                <li><a href="https://www.udacity.com/employers">Hire Graduates</a></li>
              </ul>
            </li>
						<li class="footer__nav__col">
							<h6 class="footer__nav__toggle">Support</h6>
							<ul class="footer__nav__list">
								<li><a href="https://www.udacity.com/contact">Contact Us</a></li>
                <li><a href="http://support.udacity.com/">Help and FAQ</a></li>
								<li><a href="https://www.udacity.com/catalog-api">Developer API</a></li>
								<li><a href="http://status.udacity.com">Service Status</a></li>
								<li><a href="https://www.udacity.com/sitemap/guides">Course Guides</a></li>
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

		<div class="row footer__secondary">
			<div class="col-sm-6 footer__col">
				<div class="site-info">
					Nanodegree is a trademark of Udacity.  &copy; 2011-<?php echo date('Y'); ?> Udacity, Inc.
				</div><!-- .site-info -->
			</div>
			<div class="col-sm-6 footer__col">
				<nav class="social">
					<ul class="social_links">
						<li>
							<a href="https://www.facebook.com/Udacity" target="_blank"><img src="https://s3-us-west-1.amazonaws.com/udacity-blog/icon-social-facebook.svg" alt="FaceBook"></a>
						</li>
						<li>
							<a href="https://twitter.com/udacity" target="_blank"><img src="https://s3-us-west-1.amazonaws.com/udacity-blog/icon-social-twitter.svg" alt="Twitter"></a>
						</li>
						<li>
							<a href="https://medium.com/udacity" target="_blank"><img src="https://s3-us-west-1.amazonaws.com/udacity-blog/icon-social-medium.svg" alt="Medium"></a>
						</li>
						<li>
							<a href="https://www.linkedin.com/company/udacity" target="_blank"><img src="https://s3-us-west-1.amazonaws.com/udacity-blog/icon-social-linkedin.svg" alt="LinkedIn"></a>
						</li>
            <li>
              <a href="https://www.instagram.com/udacity/" target="_blank"><img src="https://s3-us-west-1.amazonaws.com/udacity-blog/icon-social-instagram.svg" alt="Instagram"></a>
            </li>
            <li>
              <a href="https://plus.google.com/+Udacity/posts" target="_blank"><img src="https://s3-us-west-1.amazonaws.com/udacity-blog/icon-social-googleplus.svg" alt="Google +"></a>
            </li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</footer><!-- #colophon -->

<!-- Subscribe Modal -->
<!-- new comment -->
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

					<!--form class="form-inline" action='https://app.getvero.com/forms/b9b296726ded18de88563dec47213605' method='post'>
					  <div class="form-group">
					  	<input type="hidden" name='email' type='email' />
					  	<input type="hidden" type='submit' value='Subscribe' />
					  	<input type="email" name="email" placeholder="Email Address" />
					  	<button type="submit" class="btn btn-primary">Submit</button>
					  </div>
					</form-->
					<form class="form-inline" action="http://udacity.us9.list-manage.com/subscribe/post">
						<div class="form-group">
							<input type="hidden" name="u" value="4d05b2ee9291e1caafe0113a7">
							<input type="hidden" name="id" value="cbed5f65c4">
							<input type="email" name="MERGE0" class="form-control" id="MERGE0" placeholder="Email Address">
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
					</form>
				<p>
				</p>
			</div>
		</div>
	</div>
</div>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>