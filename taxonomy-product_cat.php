<?php
/**
 * The Template for displaying products in a product category. Simply includes the archive template.
 *
 * Override this template by copying it to yourtheme/woocommerce/taxonomy-product_cat.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header(); ?>

	<div id="primary" class="product-category-page">

		<section class="shop-category-title">

			<h2><?php single_cat_title(); ?></h2>

		</section>

		<section class="shop-category-meta">

			<!-- Product Category image/title -->
			<?php do_action( 'woocommerce_archive_description' ); ?>

		</section>

		<?php if (have_posts() ) : ?>

			<section class="product-category-grid">

				<?php while ( have_posts() ) : the_post(); ?>

					<article class="product-portal">

						<a href="<?php the_permalink(); ?>">
							<?php $mobile = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'mobile' ); ?>
							<?php $tablet = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'tablet' ); ?>
							<?php $desktop = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'desktop' ); ?>
							<?php $retina = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'retina' ); ?>

							<picture>
								<!--[if IE 9]><video style="display: none;"><![endif]-->
								<source
									srcset="<?php echo $mobile[0]; ?>"
									media="(max-width: 500px)" />
								<source
									srcset="<?php echo $tablet[0]; ?>"
									media="(max-width: 860px)" />
								<source
									srcset="<?php echo $desktop[0]; ?>"
									media="(max-width: 1180px)" />
								<source
									srcset="<?php echo $retina[0]; ?>"
									media="(min-width: 1181px)" />
								<!--[if IE 9]></video><![endif]-->
								<img srcset="<?php echo $image[0]; ?>">
							</picture>
						</a>

						<a href="<?php the_permalink(); ?>">
							<?php the_field('color'); ?>
						</a>

					</article>

				<?php endwhile; ?>

			</section>

		<?php endif; ?>

	</div><!-- #primary -->

<?php get_footer(); ?>
