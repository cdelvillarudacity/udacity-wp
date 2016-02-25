<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Udacity
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
	<script src="//cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	<script>
		jQuery(document).ready(function () {
			jQuery(".nav_toggle").click(function (e) {
				jQuery("nav").toggleClass("nav--on"), e.preventDefault()
			}), jQuery(".footer_nav_toggle h3").click(function (e) {
				jQuery(this).parent().toggleClass("nav--on"), e.preventDefault()
			});
		});
	</script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header id="masthead" class="site-header" role="banner">
		<div class="container nav-container">
			<row>
				<div class="site-branding col-xs-4">
					<a href="<?php echo site_url(); ?>">
						 <img src="<?php  echo get_bloginfo('template_directory');?>/images/Udacity_Logo_SVG_200x35.svg" border="0" alt="Udacity" />
					</a>
				</div><!-- .site-branding -->

				<div class="col-xs-8 nav-block">
					<a data-navbar-guest="" href="https://www.udacity.com/account/auth#!/signup" class="sign_in_link"
					   style="display: block;">Sign Up</a>
					<a data-navbar-guest="" href="https://www.udacity.com/account/auth#!/signin" class="sign_in_link"
					   style="display: block;">Sign In</a>
					<nav class="main">
						<ul class="main_nav">
							<li class="home_link"><a href="/">Home</a></li>
							<li class="nanodegree_link"><a href="/nanodegree">Nanodegree</a></li>
							<li class="free_courses_link"><a href="/courses/all">Catalog</a></li>
						</ul>
						<a href="#" class="nav_toggle">
							<span class="bar bar_top"></span>

							<span class="bar bar_mid"></span>

							<span class="bar bar_bottom"></span>
						</a>
					</nav>
				</div>
			</row>
		</div>

		<div id="featured-post" class="container-fluid">

		</div>

	</header><!-- #masthead -->
