<?php
/**
 * Template Name: Soiree
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); 

$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 

?>
<!--
<div class="pageTopTitle soireeBanner" style="background-image: url('<?php echo $featured_img_url; ?>');">
</div>
-->

<?php if($featured_img_url){ ?>
<div class="soireeTopArea">
	<img src="<?php echo $featured_img_url; ?>" class="img-responsive" />
</div>
<?php } ?>

<div id="primary" class="content-area clearfix">
	<div class="container">
    	<div class="row">
            <div class="col-md-12">
				<div class="soireeTitle"><?php the_title(); ?></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
				<div class="soireeContent"><?php the_content(); ?></div>
				<!--<div class="soireeButton"><a href="https://houstonpetset.salsalabs.org/2018soiree/index.html" class="orangeButton">Tickets | Tables</a></div>-->
				
           		<div class="soireeSocialRow">
           			<div class="footerSocial">
						<div class="socialIcon leftmostSocial"><a href="https://www.facebook.com/houstonpetset/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/facebook.png" /></a></div>
						<div class="socialIcon"><a href="https://www.instagram.com/houstonpetset/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/instagram.png" /></a></div>
						<div class="socialIcon"><a href="https://www.linkedin.com/company/houston-petset---501c3-nonprofit/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/linkedin.png" /></a></div>
						<div class="socialIcon"><a href="https://twitter.com/HoustonPetSet" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/twitter.png" /></a></div>
					</div>
           		</div>
           		
            </div>
        </div>
	</div>
</div><!-- .content-area -->

<div class="soireeGalleryContainer">
	<div class="container">
		<!-- <div class="soireeGalleryTitle">Fierce and fabulous soiree photos</div>
		<div class="soireeGallerySubtitle">Thursday, March 2, 2017</div> -->
		<div class="soireeGallery">
			<?php 

			$images = get_field('soiree_gallery');

			if( $images ): ?>
					<?php foreach( $images as $image ): ?>
						<a href="<?php echo $image['url']; ?>" rel="lightbox">
							<div class="soireegalleryItem" style="background-image:url('<?php echo $image['sizes']['medium']; ?>');">
							</div>
						</a>
					<?php endforeach; ?>
			<?php endif; ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
