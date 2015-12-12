<?php
/**
 * The Template for displaying all single products.
 *
 * Override this template by copying it to yourtheme/woocommerce/single-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

<script>

	jQuery(document).ready(function(){
		jQuery('.product-images').slick({
		  slidesToShow: 1,
		  slidesToScroll: 1,
		  dots: true,
		  arrows: false,
		});
	});

</script>

	<?php while ( have_posts() ) : the_post(); ?>

		<div class="single-product-container">

			<div class="product-images">

				<?php if( get_field('product_gallery') ) : ?>

					<?php

					$images = get_field('product_gallery');

					if( $images ): ?>
						<?php foreach( $images as $image ): ?>

							<picture class="portal-image">
								<!--[if IE 9]><video style="display: none"><![endif]-->
								<source
									srcset="<?php echo $image['sizes']['portal-mobile']; ?>"
									media="(max-width: 500px)" />
								<source
									srcset="<?php echo $image['sizes']['portal-tablet']; ?>"
									media="(max-width: 860px)" />
								<source
									srcset="<?php echo $image['sizes']['portal-desktop']; ?>"
									media="(max-width: 1180px)" />
								<source
									srcset="<?php echo $image['sizes']['portal-retina']; ?>"
									media="(min-width: 1181px)" />
								<!--[if IE 9]></video><![endif]-->
								<img srcset="<?php echo $image['sizes']['portal-desktop']; ?>">
							</picture>

						<?php endforeach; ?>
					<?php endif; ?>

				<?php else: ?>

					<?php $mobile_page_banner = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'portal-mobile'); ?>
					<?php $tablet_page_banner = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'portal-tablet'); ?>
					<?php $desktop_page_banner = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'portal-desktop'); ?>
					<?php $retina_page_banner = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'portal-retina'); ?>

					<picture class="single-image">
						<!--[if IE 9]><video style="display: none"><![endif]-->
						<source
							srcset="<?php echo $mobile_page_banner[0]; ?>"
							media="(max-width: 500px)" />
						<source
							srcset="<?php echo $tablet_page_banner[0]; ?>"
							media="(max-width: 860px)" />
						<source
							srcset="<?php echo $desktop_page_banner[0]; ?>"
							media="(max-width: 1180px)" />
						<source
							srcset="<?php echo $retina_page_banner[0]; ?>"
							media="(min-width: 1181px)" />
						<!--[if IE 9]></video><![endif]-->
						<img srcset="<?php echo $image[0]; ?>">
					</picture>

				<?php endif; ?>

			</div>

			<div class="summary">

				<div class="project-title-description">
					<h1><?php the_title(); ?></h1>

					<h5><?php the_field('product_quick_description'); ?></h5>
				</div>

				<div class="product-selection">
					<?php
						/**
						 * woocommerce_single_product_summary hook
						 *
						 * @hooked woocommerce_template_single_title - 5
						 * @hooked woocommerce_template_single_rating - 10
						 * @hooked woocommerce_template_single_price - 10
						 * @hooked woocommerce_template_single_excerpt - 20
						 * @hooked woocommerce_template_single_add_to_cart - 30
						 * @hooked woocommerce_template_single_meta - 40
						 * @hooked woocommerce_template_single_sharing - 50
					 	*/
						remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
						    remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
						do_action( 'woocommerce_single_product_summary' );
					?>
				</div>

			</div>

		</div>

		<div class="sizing-info">

			<?php the_field('cap_sizing','149'); ?>

		</div>

	<?php endwhile; // end of the loop. ?>

	<div class="related-products">

		<?php

		    $args = array(
		        'post_type' => 'product',
				'posts_per_page' => '3',
				'orderby' => 'rand',
				'post__not_in' => array($post->ID),
				// 'tax_query' => array(
				// 	array(
				// 		'taxonomy' => 'product_cat',
				// 		'field' => 'slug',
				// 		'terms' => ''
				// 	),
				// ),
		    );
		    $query = new WP_Query($args);

		    if($query->have_posts()) : ?>

			<h2>Related Items</h2>

		    <?php while($query->have_posts()) : ?>

		        <?php $query->the_post(); ?>

				<div class="product-portal">

					<?php $mobile_page_banner = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'portal-mobile'); ?>
					<?php $tablet_page_banner = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'portal-tablet'); ?>
					<?php $desktop_page_banner = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'portal-desktop'); ?>
					<?php $retina_page_banner = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'portal-retina'); ?>

					<picture class="single-image">
						<!--[if IE 9]><video style="display: none"><![endif]-->
						<source
							srcset="<?php echo $mobile_page_banner[0]; ?>"
							media="(max-width: 500px)" />
						<source
							srcset="<?php echo $tablet_page_banner[0]; ?>"
							media="(max-width: 860px)" />
						<source
							srcset="<?php echo $desktop_page_banner[0]; ?>"
							media="(max-width: 1180px)" />
						<source
							srcset="<?php echo $retina_page_banner[0]; ?>"
							media="(min-width: 1181px)" />
						<!--[if IE 9]></video><![endif]-->
						<img srcset="<?php echo $image[0]; ?>">
					</picture>

					<a href="<?php the_permalink(); ?>"><?php the_title() ?></a>

				</div>

		    <?php endwhile; ?>

		<?php endif; ?>

	</div>

<?php get_footer( 'shop' ); ?>
