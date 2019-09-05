<?php

/**
 * Template Name: Gallery Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div class="gallerySection1">
	<div class="container">

		<?php
		the_content();

		$events_query = new WP_Query(array(
			'post_type' => 'event',
			'posts_per_page' => -1,
			'meta_key' => 'event_date',
			'orderby' => 'meta_value_num',
			'order' => 'DESC'
		));
		$count = 0;

		while ($events_query->have_posts()) : $events_query->the_post();
			$date = get_post_meta(get_the_ID(), 'event_date', true);
			$date = new DateTime($date);
			?>

			<div class="galleryRow">
				<div class="galleryTitle"><?php the_title(); ?></div>
				<div class="gallerySubtitle"><?php echo $date->format('F j, Y'); ?></div>
				<div class="galleryTagline"></div>
				<div class="soireeGallery clearfix">

					<?php
						$images = get_field('event_images');
						// echo '<pre>'; var_dump($images); echo '</pre>';

						if ($images) : ?>
						<?php foreach ($images as $image) : ?>
							<?php //echo '<pre>'; var_dump($image); echo '</pre>'; 
										?>


							<a href="<?php echo $image["url"]; ?>" rel="lightbox[gallery<?php echo $count; ?>]">
								<div class="soireegalleryItem" style="background-image:url('<?php echo $image["sizes"]["large"]; ?> ');">
								</div>
							</a>

						<?php endforeach; ?>

				</div>

			<?php endif; ?>

			<?php
				$gallery_url = get_post_meta(get_the_ID(), 'gallery_url', true);
				if ($gallery_url) : ?>

				<div class="orange-background uppercase button">
					<a href="<?php echo get_post_meta(get_the_ID(), 'gallery_url', true); ?>" class="orange-background uppercase button" target="_blank">More Photos</a>
				</div>

			<?php endif; ?>

			</div>

		<?php $count++; endwhile; wp_reset_query(); ?>
	</div>
</div>

<?php get_footer(); ?>