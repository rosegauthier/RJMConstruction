<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rjmconstruction
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header" role="banner">
		<?php if( is_front_page() ) : ?>

			<?php $heroImage = get_field('hero'); ?>
			<div class="site-header_hero" style="background-image: url(<?php echo $heroImage['url']; ?>);">

					<h1 class="screen-reader-text">RJM Construction</h1>
					<?php $logo = get_field('logo'); ?>
					<div class="hero-content branded-font">
						<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?> ">
						<p class="tagline"><?php the_field('tagline'); ?></p>
					</div>

			</div> <!-- .hero-image -->

		<?php endif; ?>

		<?php if( is_page('order') ) : ?>

			<?php $addressBackground = get_field('address_background', 'option'); ?>
			<div class="address" style="background-image: url(<?php echo $addressBackground['url']; ?>);">

				<div class="inner-wrapper">
					<p class="branded-font">RJM Construction</p>
					<p><?php the_field('address', 'option') ?></p>
				</div>

			</div>
			
		<?php endif; ?>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
