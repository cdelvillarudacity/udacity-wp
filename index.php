<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Udacity
 */

get_header(); ?>

<div class="wrap page-masthead"
     style="background:url('http://localhost/Udacity/wp-content/uploads/2016/01/photo-1448932223592-d1fc686e76ea.jpeg') no-repeat bottom center;">
	<div class="after">
		<div class="container">

			<?php
			$args = array(
				'post_type' => 'post',
				'posts_per_page' => 1,
				'post_status' => 'publish',
				'category_name' => 'featured',
			);
			$author_query = new WP_Query($args);

			if ($author_query->have_posts()) :
				while ($author_query->have_posts()) :
					$author_query->the_post(); ?>

					<div class="row category">
						<?php the_category(' - '); ?>
					</div>
					<div class="row title">
						<?php the_title(); ?>
						<br/>
						<a href="<?php echo get_permalink(); ?>" class="btn btn-primary">Read More</a>
					</div>
					<?php
				endwhile;
			endif;
			?>

		</div>
	</div>
</div>

<div class="container">

	<div id="content" class="site-content">

		<div class="row page-features">

			<div class="col-sm-9">

				<ul class="tab_list">
					<li class="active"><a href="#">All Posts</a></li>
					<?php wp_list_categories('&title_li='); ?>
				</ul>

			</div>

			<?php get_search_form(); ?>

		</div>

		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

				<?php if (have_posts()) : ?>

					<?php if (is_home() && !is_front_page()) : ?>
						<header>
							<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
						</header>
					<?php endif; ?>

					<?php /* Start the Loop */ ?>
					<?php while (have_posts()) : the_post(); ?>

						<?php

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part('template-parts/content', get_post_format());
						?>

					<?php endwhile; ?>

					<?php the_posts_navigation(); ?>

				<?php else : ?>

					<?php get_template_part('template-parts/content', 'none'); ?>

				<?php endif; ?>

			</main><!-- #main -->
		</div><!-- #primary -->

		<?php get_sidebar(); ?>

	</div><!-- #content -->

</div><!-- .container -->

<?php get_footer(); ?>
