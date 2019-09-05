<?php
/**
 * Template Name: Home Page
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

$bannerImage = get_field('home_page_banner_-_image');
$bannerSubtitle = get_field('home_page_banner_-_subtitle');
$bannerTitle = get_field('home_page_banner_-_title');

$mosaicImageTop = get_field('mosiac_top_left_image');
$mosaicImageBottom = get_field('mosaic_bottom_left_image');

$mosaicVideoImage = get_field('mosaic_video_thumbnail');
$mosaicVideoURL = get_field('mosaic_video_embed_url');

$eventBoxText = get_field('events_box_text');

?>

<div id="hero" style="background-image: url('<?php echo $bannerImage; ?>');">
	<div class="container heroText">
        <div class="homeHerosubTitle"><?php echo $bannerSubtitle; ?></div>
        <h1 class="homeHeroTitle"><?php echo $bannerTitle; ?></h1>
        <div class="homeHeroDonateTitle">Help Houston PetSet support Houston-area animal non-profits.</div>
        <!-- <div class="homeHeroDonate"><a href="<?php echo bloginfo('url'); ?>/support" class="orangeButton">Donate</a></div> -->
		<div class="homeHeroDonate"><a href="https://www.flipcause.com/secure/cause_pdetails/MzUzOTU=?fbclid=IwAR3zjplMELNCizbQE3PFeKiyO5Xfwa0l7XMce8tNRt-koY-d8GJ-d8jdpD8" class="orangeButton" target="_blank">Buy Tickets</a></div>
    </div>
</div>

<div class="homepageBlogPosts-row clearfix visible-xs">
	<?php query_posts( 'post_type=post&posts_per_page=1');
        if (have_posts()) : while (have_posts()) : the_post();
		$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
		$categories = get_the_category();
    ?>
		<a href="<?php the_permalink(); ?>">
			<div class="homepageBlogPosts" style="background-image: url('<?php echo $featured_img_url; ?>');">
				<div class="homePageOverlay"></div>
				<div class="FeaturedBlogSubtitle"><?php echo $categories[0]->name; ?></div>
				<div class="FeaturedBlogTitle"><?php echo the_title(); ?></div>
			</div>
		</a>

    <?php endwhile; ?>
    <?php endif; wp_reset_query(); ?>
	
</div>

<div class="homepageBlogPosts-row clearfix hidden-xs">
	<?php query_posts( 'post_type=post&posts_per_page=2');
        if (have_posts()) : while (have_posts()) : the_post();
		$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
		$categories = get_the_category();
    ?>
		<a href="<?php the_permalink(); ?>">
			<div class="homepageBlogPosts" style="background-image: url('<?php echo $featured_img_url; ?>');">
				<div class="homePageOverlay"></div>
				<div class="FeaturedBlogSubtitle"><?php echo $categories[0]->name; ?></div>
				<div class="FeaturedBlogTitle"><?php echo the_title(); ?></div>
			</div>
		</a>

    <?php endwhile; ?>
    <?php endif; wp_reset_query(); ?>
	
</div>

<div class="homeSection1 firstTextArea">
	<div class="container">
    	<div class="itemTitle">MISSION</div>
        <span class="homeText ">Houston PetSet is a 501(c)(3) umbrella organization dedicated to ending homelessness and suffering of companion animals and elevating their status in society.</span>
        <a href="http://www.houstonpetset.org/wp-content/uploads/2019/02/PetSet_OnePager_msolano-copy-3.pdf" class="orangeButton" target="_blank">The Solution</a>

    </div>
</div>

<div class="homeMosiacSection clearfix">
	<div class="mosiacLeftSide">
		<!-- <div class="mosiacLeft-ImageTop" style="background-image: url('<?php echo $mosaicImageTop; ?>');"></div>
		<div class="mosiacLeft-ImageBottom" style="background-image: url('<?php echo $mosaicImageBottom; ?>');"></div> -->
		<div class="mosiacRight-TopVideo" style="background-image: url('<?php echo $mosaicVideoImage; ?>');"><a id="videoModel" href="#" data-toggle="modal" data-target="#videoModal"><div class="mosiacVideoPlay"></div></a></div>
	</div>
	<div class="mosiacRightSide">
		<!-- <div class="mosiacRight-TopVideo" style="background-image: url('<?php echo $mosaicVideoImage; ?>');"><a id="videoModel" href="#" data-toggle="modal" data-target="#videoModal"><div class="mosiacVideoPlay"></div></a></div> -->
		<div class="mosiacRight-BottomSection">
			<?php echo $eventBoxText; ?>
		</div>
	</div>
</div>

<div class="modal fade" id="videoModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
	<div class="modal-content">
		<!-- <iframe id="youtubeiframe" width="700" height="375" src="<?php echo $mosaicVideoURL; ?>" frameborder="0" allowfullscreen name="youtube_iframe"></iframe> -->
		<iframe width="700" height="375" src="https://www.youtube.com/embed/mDc2gqieqic" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>
  </div>
</div>

<?php get_footer(); ?>
