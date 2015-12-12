<?php
/**
 * Template Name: Front Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Double Darn
 */

get_header(); ?>

	<div id="primary" class="front-page">

		<?php while ( have_posts() ) : the_post(); ?>

			<article class="intro-content">

				<h1>Handmade Caps</h1>
				<?php the_content(); ?>

			</article>

		<?php endwhile; // end of the loop. ?>

			<section class="category-portal-row">

				<div class="category-portal">

					<?php

					$args = array(
					'pagename' => 'front-page'
					);
					$query = new WP_Query($args);

					if($query->have_posts()) : ?>

						<?php while($query->have_posts()) : ?>

							<?php $query->the_post(); ?>

							<?php $term = get_field('column_one_link'); ?>

							<?php $term_link = get_term_link( $term ); ?>

							<?php $mobile_page_banner = wp_get_attachment_image_src(get_field('column_one_image'), 'portal-mobile'); ?>
							<?php $tablet_page_banner = wp_get_attachment_image_src(get_field('column_one_image'), 'portal-tablet'); ?>
							<?php $desktop_page_banner = wp_get_attachment_image_src(get_field('column_one_image'), 'portal-desktop'); ?>
							<?php $retina_page_banner = wp_get_attachment_image_src(get_field('column_one_image'), 'portal-retina'); ?>

							<a class="full_width_link" href="<?php echo $term_link; ?>">

								<picture class="picture document-header-image">
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

							</a>

							<a class="full_width_link" href="<?php echo $term_link; ?>">
								<?php the_field('column_one_title'); ?>
							</a>

						<?php endwhile; ?>

					<?php endif; ?>

				</div>

				<div class="category-portal">

					<?php

					$args = array(
					'pagename' => 'front-page'
					);
					$query = new WP_Query($args);

					if($query->have_posts()) : ?>

						<?php while($query->have_posts()) : ?>

							<?php $query->the_post(); ?>

							<?php $term = get_field('column_two_link'); ?>

							<?php $term_link = get_term_link( $term ); ?>

							<?php $mobile_page_banner = wp_get_attachment_image_src(get_field('column_two_image'), 'portal-mobile'); ?>
							<?php $tablet_page_banner = wp_get_attachment_image_src(get_field('column_two_image'), 'portal-tablet'); ?>
							<?php $desktop_page_banner = wp_get_attachment_image_src(get_field('column_two_image'), 'portal-desktop'); ?>
							<?php $retina_page_banner = wp_get_attachment_image_src(get_field('column_two_image'), 'portal-retina'); ?>

							<a class="full_width_link" href="<?php echo $term_link; ?>">

								<picture class="picture document-header-image">
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

							</a>

							<a class="full_width_link" href="<?php echo $term_link; ?>">
								<?php the_field('column_two_title'); ?>
							</a>

						<?php endwhile; ?>

					<?php endif; ?>

				</div>

				<div class="category-portal">

					<?php

					$args = array(
					'pagename' => 'front-page'
					);
					$query = new WP_Query($args);

					if($query->have_posts()) : ?>

						<?php while($query->have_posts()) : ?>

							<?php $query->the_post(); ?>

							<?php $term = get_field('column_three_link'); ?>

							<?php $term_link = get_term_link( $term ); ?>

							<?php $mobile_page_banner = wp_get_attachment_image_src(get_field('column_three_image'), 'portal-mobile'); ?>
							<?php $tablet_page_banner = wp_get_attachment_image_src(get_field('column_three_image'), 'portal-tablet'); ?>
							<?php $desktop_page_banner = wp_get_attachment_image_src(get_field('column_three_image'), 'portal-desktop'); ?>
							<?php $retina_page_banner = wp_get_attachment_image_src(get_field('column_three_image'), 'portal-retina'); ?>

							<a class="full_width_link" href="<?php echo $term_link; ?>">

								<picture class="picture document-header-image">
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

							</a>

							<a class="full_width_link" href="<?php echo $term_link; ?>">
								<?php the_field('column_three_title'); ?>
							</a>

						<?php endwhile; ?>

					<?php endif; ?>

				</div>

			</section>

			<?php

			    $args = array(
			        'pagename' => 'about'
			    );
			    $query = new WP_Query($args);

			    if($query->have_posts()) : ?>

			      <?php while($query->have_posts()) : ?>

			        <?php $query->the_post(); ?>

					<article class="about-blurb">

				        <h1>About Double Darn</h1>

						<div class="about-photo">
							<?php $mobile_page_banner = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'portal-mobile'); ?>
							<?php $tablet_page_banner = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'portal-tablet'); ?>
							<?php $desktop_page_banner = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'portal-desktop'); ?>
							<?php $retina_page_banner = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'portal-retina'); ?>

							<picture class="picture document-header-image">
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
						</div>

				        <div class="post-content"><?php the_content(); ?></div>

					</article>

			      <?php endwhile; ?>

			    <?php endif;

			?>

	</div><!-- #primary -->

<?php get_footer(); ?>
