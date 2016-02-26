<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Udacity
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="post-category">
			<?php the_category(' '); ?>
		</div>

		<?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>

		<?php if ('post' === get_post_type()) : ?>
			<div class="entry-meta">
				<?php //udacity_wp_posted_on(); ?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php
	$large_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
	echo '<a href="' . $large_image_url[0] . '" title="' . the_title_attribute('echo=0') . '">';
	the_post_thumbnail();
	echo '</a>';
	?>

	<div class="entry-content">
		<?php
		the_content(sprintf(
		            /* translators: %s: Name of current post. */
			            wp_kses(__('Continue reading %s <span class="meta-nav">&rarr;</span>', 'udacity_wp'), array('span' => array('class' => array()))),
			            the_title('<span class="screen-reader-text">"', '"</span>', false)
		            ));
		?>

		<?php
		wp_link_pages(array(
			              'before' => '<div class="page-links">' . esc_html__('Pages:', 'udacity_wp'),
			              'after' => '</div>',
		              ));
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php //udacity_wp_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
