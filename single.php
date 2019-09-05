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

<!-- <div class="pageTopTitle" style="background-image:url('<?php //echo $featured_img_url; ?>');">
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


<?php get_footer(); ?>