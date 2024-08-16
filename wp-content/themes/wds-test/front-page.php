<?php
/**
 * The template for displaying front page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wds-test
 */
$main_banner = get_field('main_banner');

get_header();
?>
	<main id="primary" class="site-main">
      <div class="site-main-wrapper">
			<?php if (!empty($main_banner['image'])) : ?>
				<div class="main-banner" style="background-image: url(<?php echo $main_banner['image']['url']; ?>);">
					<div class="main-banner-wrapper width-container dsflex-ai-center">
						<div class="text-wrapper">
							<?php if (!empty($main_banner['subtitle'])) : ?>
								<div class="subtitle h5"><?php echo $main_banner['subtitle'] ?></div>
							<?php endif; ?>
							<?php if (!empty($main_banner['title'])) : ?>
								<h1 class="title"><?php echo $main_banner['title'] ?></h1>
							<?php endif; ?>
							<?php if (!empty($main_banner['text'])) : ?>
								<div class="text"><?php echo $main_banner['text'] ?></div>
							<?php endif; ?>
							<?php if (!empty($main_banner['button_1']) || !empty($main_banner['button_2'])) : ?>
								<div class="buttons-wrapper">
									<?php if (!empty($main_banner['button_1'])) : ?>
										<a href="<?php echo $main_banner['button_1']['url']; ?>" class="button button-white hover-default" title="<?php echo $main_banner['button_1']['title']; ?>"<?php echo !empty($main_banner['button_1']['target']) ? 'target="'.$main_banner['button_1']['target'].'"' : ''; ?>><?php echo $main_banner['button_1']['title']; ?></a>
									<?php endif; ?>
									<?php if (!empty($main_banner['button_2'])) : ?>
										<a href="<?php echo $main_banner['button_2']['url']; ?>" class="button button-contour-dark hover-default" title="<?php echo $main_banner['button_2']['title']; ?>"<?php echo !empty($main_banner['button_2']['target']) ? 'target="'.$main_banner['button_2']['target'].'"' : ''; ?>><?php echo $main_banner['button_2']['title']; ?></a>
									<?php endif; ?>
								</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			<?php endif; ?>
      </div>
	</main><!-- #main -->

<?php
get_footer();

