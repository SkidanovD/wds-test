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
$featured_product = get_field('featured_product');
if (!empty($featured_product['category'])) {
	$args = [
		'status' => 'publish',
    	'limit'  => $featured_product['number_of_products'],
		'category' => $featured_product['category']->slug,
		'order' => 'ASC',
	];
	$featured_product_slider = wc_get_products($args);
}

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
			<?php if (!empty($featured_product_slider)) : ?>
				<div class="featured-product-block">
					<div class="featured-product-wrapper width-container">
						<?php if (!empty($featured_product['subtitle'])) : ?>
							<div class="featured-product-subtitle h5"><?php echo $featured_product['subtitle']; ?></div>
						<?php endif; ?>
						<?php if (!empty($featured_product['title'])) : ?>
							<h2 class="featured-product-title"><?php echo $featured_product['title']; ?></h2>
						<?php endif; ?>
						<?php if (!empty($featured_product['text'])) : ?>
							<div class="featured-product-text"><?php echo $featured_product['text']; ?></div>
						<?php endif; ?>
						<div class="featured-slider-block dsflex">
							<div class="banner-column">
								<div class="banner dsflex-ai-end"<?php echo !empty($featured_product['image']) ? ' style="background-image: url(' . $featured_product['image'] . ')"' : ''; ?>>
									<div class="text-wrapper">
										<?php if (!empty($featured_product['title_banner'])) : ?>
											<h3 class="banner-title h2"><?php echo $featured_product['title_banner']; ?></h3>
										<?php endif; ?>
										<?php if (!empty($featured_product['text_banner'])) : ?>
											<div class="banner-text"><?php echo $featured_product['text_banner']; ?></div>
										<?php endif; ?>
									</div>
								</div>
							</div>
							<div class="slider-column">
								<div class="swiper">
									<div class="swiper-wrapper">
										<?php foreach ($featured_product_slider as $product) : ?>
											<div class="swiper-slide">
												<a class="min-product">
													<div class="image-wrapper">
														<?php do_action( 'woocommerce_before_shop_loop_item_title' ); ?>
													</div>
													<div class="text-wrapper">
														<p class="min-product-title"><?php echo $product->get_title(); ?></p>
														<div class="min-product-category"><?php echo $featured_product['category']->name; ?></div>
														<div class="min-product-price"><?php echo $product->get_price_html(); ?></div>
													</div>
												</a>
											</div>
										<?php endforeach; ?>
									</div>
								</div>
								<div class="swiper-nav-wrapper">
									<div class="swiper-button-prev"></div>
									<div class="swiper-button-next"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php endif; ?>
      </div>
	</main><!-- #main -->

<?php
get_footer();

