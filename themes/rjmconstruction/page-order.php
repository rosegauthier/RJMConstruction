<?php
/**
 * The template for displaying the order form
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package rjmconstruction
 */
?>

<?php get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php if ( have_posts() ) : ?>
			    <?php while ( have_posts() ) : the_post(); ?>
			    	<section class="form">
			    		<div class="form__container">
			        		<?php the_content(); ?>
			    		</div>
			    	</section>
			    <?php endwhile; ?>
			<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
