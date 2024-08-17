<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wds-test
 */
	$args = [
		'numberposts' => 2,
	];
	$last_posts = get_posts($args);
?>
	<footer id="colophon" class="site-footer">
		<div class="site-footer-wrapper width-container dsflex">
			<div class="info-column">
				<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
					<?php dynamic_sidebar( 'footer-1' ); ?>
				<?php endif; ?>
			</div>
			<div class="posts-column">
				<?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
					<?php dynamic_sidebar( 'footer-2' ); ?>
					<?php if (!empty($last_posts)) : ?>
						<div class="footer-posts-block">
							<?php foreach ($last_posts as $l_post) : ?>
								<a href="<?php echo $l_post->guid; ?>" class="footer-post dsflex-ai-center">
									<div class="image-column">
										<div class="image-wrapper">
											<?php echo get_the_post_thumbnail( $l_post->ID, 'thumbnail'); ?>
										</div>
									</div>
									<div class="text-column">
										<p class="title"><?php echo $l_post->post_title; ?></p>
										<div class="date"><?php echo get_the_date('F d, Y', $l_post->ID) ?></div>
									</div>
								</a>
							<?php endforeach; ?>
						</div>
					<?php endif; ?>
				<?php endif; ?>
			</div>
			<div class="stores-column">
				<?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
					<?php dynamic_sidebar( 'footer-3' ); ?>
				<?php endif; ?>
			</div>
			<div class="links-column">
				<?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
					<?php dynamic_sidebar( 'footer-4' ); ?>
				<?php endif; ?>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
