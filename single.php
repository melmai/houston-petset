<?php

/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header();
//$featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');

$featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');

if ($featured_img_url) { ?>
	<div class="pageTopTitle defaultBanner" style="background-image: url('<?php echo $featured_img_url; ?>');"></div>
<?php
} else {
	echo '<br>';
}

?>

<!-- <div class="pageTopTitle" style="background-image:url('<?php //echo $featured_img_url; 
															?>');">
	<div class="homePageOverlay"></div>
</div> -->
<div id="primary" class="content-area clearfix blog-main">
	<div class="container">
		<div class="row">
			<h1 class="post-title col-lg-9 offset-lg-3 col-sm-12"><?php the_title(); ?></h1>
		</div>
		<!-- START CONTENT CONTAINER -->
		<div class="post-content">
			<!-- START SIDEBAR -->
			<aside class="blog-sidebar col-sm col-lg-3 col-md-12">
				<span class="post-date margin-bottom-30"><?php the_time('F jS, Y') ?></span>
				<? get_sidebar(); ?>
			</aside>
			<!-- END SIDEBAR -->

			<!-- START MAIN CONTENT -->
			<main class="main col-sm col-lg-9 col-md-12">
				<!-- <div class="row">
					<div class="col-md-12">
						<div class="backSingleButton"><a href="<?php //echo bloginfo('url'); 
																?>/blog">Back</a></div>
					</div>
				</div> -->

				<div class="row">
					<div class="col-md-12">
						<div class="entry-content"><?php the_content(); ?></div>
					</div>
				</div>
				<?php the_author() ?>
			</main>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END CONTENT CONTAINER -->
	</div>
</div><!-- .content-area -->

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