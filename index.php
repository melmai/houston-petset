<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php if (have_posts()) : ?>

			<?php if (is_home() && !is_front_page()) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

		<?php
			// Start the loop.
			while (have_posts()) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part('template-parts/content', get_post_format());

			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination(array(
				'prev_text'          => __('Previous page', 'twentysixteen'),
				'next_text'          => __('Next page', 'twentysixteen'),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('Page', 'twentysixteen') . ' </span>',
			));

		// If no content, include the "No posts found" template.
		else :
			get_template_part('template-parts/content', 'none');

		endif;
		?>

	</main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_sidebar(); ?>

<div data-vc-full-width="true" data-vc-full-width-init="true" class="vc_row wpb_row vc_row-fluid mailchimp-container vc_custom_1567742399084 vc_row-has-fill" style="position: relative; left: -2.77778px; box-sizing: border-box; width: 1406px; padding-left: 2.77778px; padding-right: 3.22222px;">
	<div class="wpb_column vc_column_container vc_col-sm-12">
		<div class="vc_column-inner vc_custom_1567742601485">
			<div class="wpb_wrapper">
				<div class="wpb_text_column wpb_content_element  uppercase white-text">
					<div class="wpb_wrapper">
						<p style="text-align: center;">Sign Up For Our Newsletter</p>

					</div>
				</div>

				<div class="wpb_text_column wpb_content_element  mailchimp-form">
					<div class="wpb_wrapper">
						<script>
							(function() {
								if (!window.mc4wp) {
									window.mc4wp = {
										listeners: [],
										forms: {
											on: function(event, callback) {
												window.mc4wp.listeners.push({
													event: event,
													callback: callback
												});
											}
										}
									}
								}
							})();
						</script><!-- Mailchimp for WordPress v4.5.3 - https://wordpress.org/plugins/mailchimp-for-wp/ -->
						<form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-2026 mc4wp-form-theme mc4wp-form-theme-dark" method="post" data-id="2026" data-name="Newsletter Sign Up">
							<div class="mc4wp-form-fields">
								<p>
									<label>Email address: </label>
									<input type="email" name="EMAIL" placeholder="Your email address" required="">
								</p>

								<p>
									<input type="submit" value="Sign up">
								</p>
							</div><label style="display: none !important;">Leave this field empty if you're human: <input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off"></label><input type="hidden" name="_mc4wp_timestamp" value="1567752211"><input type="hidden" name="_mc4wp_form_id" value="2026"><input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1">
							<div class="mc4wp-response"></div>
						</form><!-- / Mailchimp for WordPress Plugin -->

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>