<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Udacity
 */

get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

	<?php
	$large_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
	?>

	<div class="wrap single-post-masthead"
	     style="background:url('http://localhost/Udacity/wp-content/uploads/2016/01/photo-1448932223592-d1fc686e76ea.jpeg') no-repeat bottom center;">
		<div class="after">
			<div class="container container-small">

				<div class="row category">
					<?php the_category(' - '); ?>
				</div>
				<div class="row title">
					<?php the_title(); ?>
				</div>
				<div class="row meta">
					<?php echo get_avatar(get_the_author_meta('ID'), 35); ?>
					<p>
						By <strong><i><?php the_author_meta('display_name'); ?></i></strong>
						<br/> <?php the_date('F j, Y', '', ''); ?>
					</p>
				</div>

			</div>
		</div>
	</div>

	<div class="container container-small">

		<div id="content" class="site-content">

			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

					<?php get_template_part('template-parts/content', 'single'); ?>

				</main><!-- #main -->
			</div><!-- #primary -->

			<?php get_sidebar(); ?>

		</div><!-- #content -->
	</div><!-- .container -->

	<div class="wrap post-author-wrap">
		<div class="container container-small">
			<div class="row">
				<?php echo get_avatar(get_the_author_meta('ID'), 50); ?>
			</div>
			<div class="row">
				<div class="col-md-7 post-author-data">
					<div class="row">
						<h4><?php the_author_meta('display_name'); ?></h4>
						<p><?php the_author_meta('description'); ?></p>
						<h5 class="author-posts">Posts by <?php the_author_meta('first_name'); ?></h5>
						<?php
						$args = array(
							'post_type' => 'post',
							'posts_per_page' => 3,
							'post_status' => 'publish',
							'author_name' => get_the_author_meta('login'),
							'post__not_in' => array($post->ID)
						);
						$author_query = new WP_Query($args);

						if ($author_query->have_posts()) :
							while ($author_query->have_posts()) : $author_query->the_post();

								the_title(sprintf('<div class="author-entry col-md-3"><h2><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2></div>');

							endwhile;
						endif;

						wp_reset_postdata();
						?>
					</div>
				</div>
				<div class="col-md-5">
				</div>
			</div>
		</div>
	</div>

	<div class="wrap">
		<div class="container container-small">
			<div class="row post-navigation">
				<div class="post-navigation-left col-md-6">
					<h5>Previous Post</h5>
					<?php previous_post('<span>&larr;</span> %', '', 'yes'); ?>
				</div>
				<div class="post-navigation-right col-md-6">
					<h5>Next Post</h5>
					<?php next_post('% <span>&rarr;</span>', '', 'yes'); ?>
				</div>
			</div>
		</div>
	</div>

	<?php
	// If comments are open or we have at least one comment, load up the comment template.
	if (comments_open() || get_comments_number()) :
		// comments_template();
	endif;
	?>

<?php endwhile; // End of the loop. ?>

<?php get_footer(); ?>
