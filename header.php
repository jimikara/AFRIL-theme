<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href="https://fonts.googleapis.com/css?family=Asap:500|Source+Sans+Pro:400,600" rel="stylesheet">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	<div class="off-canvas-wrapper">
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>

	<div class="translation-outer">
		<div class="row">
			<div class="small-7 medium-5 large-4 columns">
				<div class="translation-wrap">
					<?php echo do_shortcode('[gtranslate]'); ?>

				</div>
			</div>
			<div class="small-5 medium-7 large-8 columns text-right">
				<a class="button donate-button donate-primary" href="<?php echo get_permalink('169'); ?>">
					Donate
				</a>
			</div>
		</div>
	</div>
	<header class="site-header" role="banner">
		<div class="site-title-bar title-bar" <?php foundationpress_title_bar_responsive_toggle() ?> data-hide-for=>
			<div class="title-bar-right">
				<button class="menu-icon" type="button" data-toggle="<?php foundationpress_mobile_menu_id(); ?>"></button>
				<span class="site-mobile-title title-bar-title">
					<a class="custom-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php the_custom_logo(); ?></a>
				</span>

			</div>
		</div>
		<nav class="site-navigation top-bar" role="navigation">
			<div class="row small-collapse medium-collapse large-uncollapse">
				<div class="small-12 columns flex-container align-justify">
					<div class="top-bar-left">
						<div class="site-desktop-title top-bar-title">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php the_custom_logo(); ?></a>
						</div>
					</div>
					<div class="top-bar-right flex-container align-middle">
						<?php foundationpress_top_bar_r(); ?>

						<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
							<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<a id="donateFixed" class="button donate-button donate-fixed" href="<?php echo get_permalink('169'); ?>">
				Donate
			</a>
		</nav>
	</header>

	<section class="container">
		<?php do_action( 'foundationpress_after_header' );
