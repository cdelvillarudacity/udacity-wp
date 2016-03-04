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
	$large_image_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
	if($large_image_url == '') {
		$large_image_url = get_bloginfo('template_directory')."/images/masthead-default.jpg";
	}
	?>

	<div class="wrap single-post-masthead"
	     style="background-image:url('<?php header_image(); ?>');">
		<div class="after">
			<div class="container">

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
					<div class="social-share">
						<a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&via=udacity&text=<?php the_title(); ?>"
						   target="_blank" onclick="var w=window.open(this.href,this.target,'width=500,height=400');
return w?false:true" class="twitter"></a>
						<a href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank"
						   onclick="var w=window.open(this.href,this.target,'width=500,height=400');
return w?false:true" class="facebook"></a>
						<a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" target="_blank" onclick="var w=window.open(this.href,this.target,'width=500,height=400');
return w?false:true" class="google"></a>
						<a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>"
						   target="_blank" onclick="var w=window.open(this.href,this.target,'width=500,height=400');
return w?false:true" class="linkedin"></a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">

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
		<div class="container">
			<div class="row">
				<?php echo get_avatar(get_the_author_meta('ID'), 50); ?>
			</div>
			<div class="row">
				<div class="col-md-7 post-author-data">
					<div class="row">
						<h4><?php the_author_meta('display_name'); ?></h4>
						<p><?php the_author_meta('description'); ?></p>
						<h5 class="author-posts">Posts by <?php the_author_meta('first_name'); ?></h5>
					</div>
					<div class="row">
						<?php
						$args = array(
							'post_type' => 'post',
							'posts_per_page' => 2,
							'post_status' => 'publish',
							'author_name' => get_the_author_meta('login'),
							'post__not_in' => array($post->ID)
						);
						$author_query = new WP_Query($args);

						if ($author_query->have_posts()) :
							while ($author_query->have_posts()) : $author_query->the_post();
								the_title(sprintf('<div class="col-sm-6"><a href="%s" class="category_btn"><span>', esc_url(get_permalink())), '</span></a></div>');

							endwhile;
						endif;

						wp_reset_postdata();
						?>
					</div>
				</div>
				<div class="col-md-5 social-share">
					<div class="row">
						<h4>Share This Post</h4>
						<ul class="share-post">
							<a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&via=udacity&text=<?php the_title(); ?>"
							   target="_blank" onclick="var w=window.open(this.href,this.target,'width=500,height=400');
return w?false:true">
								<li class="twitter">Twitter</li>
							</a>
							<a href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"
							   target="_blank" onclick="var w=window.open(this.href,this.target,'width=500,height=400');
return w?false:true">
								<li class="facebook">Facebook</li>
							</a>
							<a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" target="_blank"
							   onclick="var w=window.open(this.href,this.target,'width=500,height=400');
return w?false:true">
								<li class="google">Google+</li>
							</a>
							<a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>"
							   target="_blank" onclick="var w=window.open(this.href,this.target,'width=500,height=400');
return w?false:true">
								<li class="linkedin">LinkedIn</li>
							</a>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="wrap">
		<div class="container">
			<div class="row post-navigation">
				<div class="post-navigation-left col-md-6">
					<?php previous_post('<h5>Previous Post</h5> <span>&larr;</span> %', '', 'yes'); ?>
				</div>
				<div class="post-navigation-right col-md-6">
					<?php next_post('<h5>Next Post</h5> % <span>&rarr;</span>', '', 'yes'); ?>
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
