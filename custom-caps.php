<?php
/**
 * Template Name: Custom Caps
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Double Darn
 */

get_header(); ?>

	<div id="primary" class="custom-caps content-area">

		<?php while ( have_posts() ) : the_post(); ?>

			<h1><?php the_title(); ?></h1>

			<div class="custom-caps-intro">
				<?php the_content(); ?>
			</div>

			<div class="disclaimers">
				<div class="disclaimer-section wholesale">
					<?php the_field('wholesale'); ?>
				</div>
				<div class="disclaimer-section small_runs">
					<?php the_field('small_runs'); ?>
				</div>
			</div>

			<div class="custom-caps-form">

				<?php echo do_shortcode('[gravityform id=1 title=false description=true]'); ?>

			</div>

		<?php endwhile; // end of the loop. ?>

	</div><!-- #primary -->

<?php get_footer(); ?>
