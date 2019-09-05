<?php
/**
 * The template for displaying pages
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

if($featured_img_url){ ?>
		<div class="pageTopTitle defaultBanner" style="background-image: url('<?php echo $featured_img_url; ?>');"></div>
<?php
}else{
		echo '';
}

?>





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
            </div>
        </div>
	</div>
</div><!-- .content-area -->


<?php get_footer(); ?>
