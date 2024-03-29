<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package siteorigin-corp
 * @license GPL 2.0 
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if (has_post_thumbnail() && siteorigin_setting('pages_featured_image')) : ?>
		<div class="entry-thumbnail">
			<?php the_post_thumbnail(); ?>
		</div>
	<?php endif; ?>

	<?php if (
		siteorigin_page_setting('overlap') == 'disabled' ||
		siteorigin_page_setting('overlap') != 'disabled' &&
		(has_post_thumbnail() && siteorigin_setting('pages_featured_image'))
	) :
	?>
		<?php if (siteorigin_page_setting('page_title')) : ?>
			<div class="entry-header">
				<?php the_title('<h1 class="page-title" style="">', '</h1>'); ?>
			</div><!-- .entry-header -->
		<?php endif; ?>
	<?php endif; ?>

	<div class="entry-content <?php if (!is_front_page()) {
									echo 'min-content';
								} ?>">
		<?php
		the_content();

		wp_link_pages(array(
			'before' => '<div class="page-links"><span class="page-links-title">' . esc_html__('Pages:', 'siteorigin-corp') . '</span>',
			'after'  => '</div>',
			'link_before' => '<span>',
			'link_after'  => '</span>',
		));
		?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->