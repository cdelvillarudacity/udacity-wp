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
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
	<script src="//cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header id="masthead" class="site-header" role="banner">
		<div class="container container-small">
			<div class="site-branding col-md-4">
				<?php if (is_front_page() || is_home()) : ?>
					<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
					                          rel="home"><?php bloginfo('name'); ?></a></h1>
				<?php else : ?>
					<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
					                         rel="home"><?php bloginfo('name'); ?></a></p>
				<?php endif; ?>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation navbar navbar-default col-md-8" role="navigation">
				<a class="skip-link screen-reader-text"
				   href="#content"><?php _e('Skip to content', 'udacity_wp'); ?></a>
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse"
					        data-target="#navbar-collapse-main">
						<span class="sr-only"><?php _e('Toggle navigation', 'udacity_wp'); ?></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!--<a class="navbar-brand" href="#">Brand</a>-->
				</div>

				<div class="collapse navbar-collapse " id="navbar-collapse-main">
					<ul class="nav navbar-nav">
						<?php if (has_nav_menu('primary')) :
							wp_nav_menu(array(
								            'theme_location' => 'primary',
								            'container' => false,
								            //'menu_class'      => 'nav navbar-nav',//  'nav navbar-right'
								            'walker' => new Bootstrap_Nav_Menu(),
								            'fallback_cb' => null,
								            'items_wrap' => '%3$s',// skip the containing <ul>
							            )
							);
						else :
							wp_list_pages(array(
								              'menu_class' => 'nav navbar-nav',//  'nav navbar-right'
								              'walker' => new Bootstrap_Page_Menu(),
								              'title_li' => null,
							              )
							);
						endif; ?>
					</ul>
					<?php // get_search_form(); ?>
				</div><!-- /.navbar-collapse -->

			</nav><!-- #site-navigation -->
		</div>

		<div id="featured-post" class="container-fluid">

		</div>

	</header><!-- #masthead -->

	<div class="container container-small">

		<div id="content" class="site-content">
