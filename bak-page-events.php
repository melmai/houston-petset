<?php
/**
 * Template Name: Events 
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

<div id="primary" class="content-area clearfix">
    
    <div class="container">
    	<div class="row blogFeedRow">
			<div class="eventpageTitle">Upcoming Events</div>
			<div class="row eventspageRow">
			
			<?php 
				$rowCounter = 0;
				query_posts( 'post_type=event&posts_per_page=-1');
				if (have_posts()) : while (have_posts()) : the_post();
				$event_date = get_field('event_date');
				$event_short_summary = get_field('event_short_summary');
				$event_button_text_1 = get_field('event_button_text_1');
				$event_button_link_1 = get_field('event_button_link_1');
				$event_button_text_2 = get_field('event_button_text_2');
				$event_button_link_2 = get_field('event_button_link_2');
				$postTitle = get_the_title();
				$postUrl = get_the_permalink();
				$tweetMessage = $postTitle . " #HoustonPetset " . $postUrl;	
				$image = get_field('event_gallery');
			?>
			
				<?php if($rowCounter == 2){ ?>
					</div>
					<div class="row clearfix eventspageRow">
				<?php $rowCounter = 0; } ?>
				
				<div class="col-md-6 eventItem">
					<div class="soireeGallery clearfix">
						<a href="<?php echo $image; ?>" rel="lightbox">
							<div class="soireegalleryItem" style="background-image:url('<?php echo $image; ?>');">
							</div>
						</a>
					</div>
					<div class="pageEvents-ItemTitle"><?php echo the_title(); ?></div>
					<div class="pageEvents-ItemDate"><?php echo $event_date; ?></div>
					<div class="pageEvents-ItemExcerpt"><?php echo $event_short_summary; ?></div>
					<div class="pageEvents-ItemButtons">
					<?php
						$eventpostid = get_the_id();
						if($eventpostid == '749')
						{ ?>
						<div style="background:#ff5b34;cursor: pointer; border-radius:0px 0px 0px 0px;font-weight:normal; border:none;box-shadow:none;left: 50%; margin-left:-100px;clear: both;display: block; width:200px;height:41px; line-height:2.5; position:relative; font-size:16px;text-align:center; cursor\:pointer;color:#ffffff;text-decoration: none; z-index:1" onclick="open_window('Mzg0MTk=')">REGISTER</div>
						<?php }
					?>
					<?php if($event_button_text_1 && $event_button_link_1){ ?><a href="<?php echo $event_button_link_1; ?>" class="orangeButton" target="_blank"><?php echo $event_button_text_1; ?></a><?php } ?>
					<?php if($event_button_text_2 && $event_button_link_2){ ?><a href="<?php echo $event_button_link_2; ?>" class="orangeButton" target="_blank"><?php echo $event_button_text_2; ?></a><?php } ?>
					</div>
					
					<div class="pageSocial">
						<div class="eventSocial">
							<div class="socialIcon">Share:</div>
							<div class="socialIcon"><a href="http://www.facebook.com/share.php?u=<?php echo urlencode($postUrl); ?>&title=<?php echo urlencode($postTitle);?>" class="shareButton" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/facebook.png" /></a></div>
							<div class="socialIcon"><a href="https://twitter.com/intent/tweet?text=<?php echo urlencode($tweetMessage);?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/twitter.png" /></a></div>
						</div>
					</div>
					
				</div>

			<?php $rowCounter++; endwhile; ?>
			<?php endif; wp_reset_query(); ?>
			</div>
		</div>
	</div>
</div><!-- .content-area -->

<div class="pastEventsSection">
	<div class="container">
		<div class="eventpageTitle">Past Events</div>
		<a href="<?php echo bloginfo('url'); ?>/gallery" class="orangeButton">View Gallery</a>
	</div>
</div>


<?php get_footer(); ?>
