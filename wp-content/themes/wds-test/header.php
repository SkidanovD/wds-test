<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wds-test
 */

 	$logo_img = '';
	$custom_logo_id = get_theme_mod( 'custom_logo' );
	if( $custom_logo_id ){
		$logo_img = wp_get_attachment_image( $custom_logo_id, 'full', false, array(
			'class'    => 'custom-logo image-block-contain',
			'itemprop' => 'logo',
			'loading' => 'lazy'
		) );
	}
	$cart_total = WC()->cart->total;
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site-body-wrapper">
	<header class="site-header">
		<div class="site-header-wrapper width-container dsflex-ai-center">
			<div class="left-column dsflex-ai-center">
				<div class="site-logo">
					<?php
						if (!empty($logo_img)) {
					?>
						<a href="<?php echo get_home_url(); ?>" class="custom-logo-link">
							<?php echo $logo_img; ?>
						</a>
					<?php } ?>
				</div>
				<button class="nav-toggle">
					<span class="bar-top"></span>
					<span class="bar-mid"></span>
					<span class="bar-bot"></span>
				</button>
			</div>
			<div class="center-column">
				<nav id="site-navigation" class="site-navigation">
					<div class="site-navigation-wrapper dsflex-ai-center dsf-tablet">
						<?php
							wp_nav_menu(
								array(
									'theme_location'  => 'main-menu',
									'menu_id'         => 'main_menu',
									'container_class' => 'main-menu-wrapper',
									'container_id'    => 'main_menu_wrapper',
									'menu_class'     	=> 'site-main-menu dsflex-ai-center dsf-tablet marker-none'
								)
							);
							wp_nav_menu(
								array(
									'theme_location' => 'user-menu',
									'menu_id'        => 'user_menu',
									'container_class' => 'user-menu-wrapper',
									'container_id'    => 'user_menu_wrapper',
									'menu_class'     	=> 'site-user-menu dsflex-ai-center dsf-tablet marker-none'
								)
							);
						?>
					</div>
				</nav>
			</div>
			<div class="right-column dsflex-ai-center">
				<div class="header-search-block">
					<button class="header-search-button" type="button">
						<svg class="image-block-contain" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24" height="24">
							<g>
								<path d="M0 0h24v24H0z" fill="none"/>
								<path class="svg-hover" d="M11 2c4.968 0 9 4.032 9 9s-4.032 9-9 9-9-4.032-9-9 4.032-9 9-9zm0 16c3.867 0 7-3.133 7-7 0-3.868-3.133-7-7-7-3.868 0-7 3.132-7 7 0 3.867 3.132 7 7 7zm8.485.071l2.829 2.828-1.415 1.415-2.828-2.829 1.414-1.414z" fill="var(--white)"/>
							</g>
						</svg>
					</button>
					<div class="search-form-wrapper"><?php get_product_search_form(); ?></div>
				</div>
				<div class="header-cart-block">
					<a href="<?php echo wc_get_cart_url(); ?>" class="cart-link dsflex-ai-center">
						<span class="icon">
							<svg class="image-block-contain" viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg">
								<rect fill="none" height="256" width="256"/>
								<path class="svg-hover" d="M184,184H69.8L41.9,30.6A8,8,0,0,0,34.1,24H16" fill="none" stroke="var(--white)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/>
								<circle class="svg-hover" cx="80" cy="204" fill="none" r="20" stroke="var(--white)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/>
								<circle class="svg-hover" cx="184" cy="204" fill="none" r="20" stroke="var(--white)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/>
								<path class="svg-hover" d="M62.5,144H188.1a15.9,15.9,0,0,0,15.7-13.1L216,64H48" fill="none" stroke="var(--white)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/>
							</svg>
						</span>
						<span class="count"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
						<span class="total"><?php echo WC()->cart->get_total(); ?></span>
					</a>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->
