<?php
/**
 * The template for displaying the front page
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package rjmconstruction
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
			<section class="about">
				<div class="inner-wrapper">
					<p><?php the_field('about') ?></p>
				</div>
			</section>

			<?php $addressBackground = get_field('address_background', 'option'); ?>
			<section class="address" style="background-image: url(<?php echo $addressBackground['url']; ?>);">
				<div class="inner-wrapper">
					<p class="branded-font">RJM Construction</p>
					<p><?php the_field('address', 'option') ?></p>
				</div>
			</section>

			<section class="form">
				<div class="form__container">
					<h2>Contact Us</h2>
					<?php the_field('home_form') ?>
				</div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();