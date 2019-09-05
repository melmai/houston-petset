<?php
/**
 * Template Name: Club Petset Page
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

$main_title = get_field('main_title');
$main_text = get_field('main_text');
$main_button_text = get_field('main_button_text');
$main_button_link = get_field('main_button_link');

?>

<div class="clubSection1">
	<div class="container">
    	<div class="itemTitle"><?php echo $main_title; ?></div>
        <span class="homeText "><?php echo $main_text; ?></span>
        <!--<a href="<?php echo $main_button_link; ?>" class="orangeButton"><?php echo $main_button_text; ?></a>-->
		<div style="background:#ff5b34; border-radius:0px 0px 0px 0px;font-weight:Bold; border:none;box-shadow:none;left: 50%; margin-left:-150px;clear: both;display: block; width:300px;height:45px; line-height:2.8; position:relative; font-size:16px;text-align:center; cursor:pointer;color:#fff;text-decoration: none; z-index:1" onclick="open_window('MzUzOTg=')">Join Today</div>
    </div>
</div>


<div class="clubSection2 clearfix">
	<div class="clubSection2-left">
		<div class="soireeGallery">
			<?php 

			$images = get_field('club_petset_gallery');

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
	<div class="clubSection2-right">
		<div class="mosiacLoopItems clearfix">
				<?php query_posts( 'post_type=event&cat=11&posts_per_page=2');
					if (have_posts()) : while (have_posts()) : the_post();
					$event_date = get_field('event_date');
					$event_short_summary = get_field('event_short_summary');
				?>
					<div class="mosiacEvents-Item">
						<div class="mosiacEvents-ItemTitle"><?php echo the_title(); ?></div>
						<div class="mosiacEvents-ItemDate"><?php echo $event_date; ?></div>
						<div class="mosiacEvents-ItemExcerpt"><?php echo $event_short_summary; ?></div>
						<div class="mosiacEvents-ItemButton"><a href="<?php echo bloginfo('url'); ?>/events/" class="orangeButton">View</a></div>
					</div>

				<?php endwhile; ?>
				<?php endif; wp_reset_query(); ?>
			</div>
			<div class="mosiacEvents-ViewAll">
				<a href="<?php echo bloginfo('url'); ?>/events/" class="mosiacEvents-ViewAllLink">View All <img class="arrowRight" src="<?php echo bloginfo('template_url'); ?>/images/arrow.png" /></a>
			</div>
	</div>
</div>

<?php get_footer(); ?>
