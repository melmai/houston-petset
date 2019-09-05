<?php
/**
 * Template Name: Blog 
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

<script>
	jQuery(document).ready(function($) {
		$('.owl-carousel').owlCarousel({
			loop: false,
			items: 1,
			nav: false,
			responsiveClass:true,
			responsive:{
				0:{
					items:1
				},
				767:{
					items:1
				},
				996:{
					items:1
				},
				1200:{
					items:1
				}
			}
		});
	});
</script>

<div class="pageTopTitle hidden-xs">
	<div class="owl-carousel owl-theme">
		<?php 	
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			query_posts( 'post_type=documents&paged='.$paged );
			query_posts( 'post_type=post&posts_per_page=5&category_name=featured&paged='.$paged );
			if (have_posts()) : while (have_posts()) : the_post(); 
		?>
			<div class="item">
				<div class="blogBannerTitle"><?php echo the_title(); ?></div>
				<div class="blog-top-button"><a href="<?php echo the_permalink(); ?>"  class="orangeButton">Read More</a></div>
			</div>
		<?php $blogRowCount++; endwhile; ?>
		<?php endif; wp_reset_query(); ?>

	</div>
</div>


<div id="primary" class="content-area clearfix">
    <!-- <div class="blogCategoryBar">
        <div class="container hidden-xs">
            <ul class="blogCategoryMenu">
                <li><a href="<?php bloginfo('url'); ?>/blog/" class="selectedArchive">All</a></li>
                <?php
                    $args = array(
                      'orderby' => 'name',
                      'order' => 'ASC'
                      );
                    $categories = get_categories($args);
                      foreach($categories as $category) {  	
                    $name = $category->slug;
                        echo '<li><a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name . "</a></li>";
                        } 
                ?>
            </ul>
        </div>
    </div>-->
    <div class="container">
    	<div class="row blogFeedRow">
			<div class="blogitemTitle hidden-xs">See what else is new...</div>
			<div class="blogitemTitle visible-xs">See what is new</div>
			<?php 	
				$blogRowCount = 0;
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				query_posts( 'post_type=documents&paged='.$paged );
				query_posts( 'post_type=post&posts_per_page=5&paged='.$paged );
				if (have_posts()) : while (have_posts()) : the_post(); 
				$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'large'); 
			?>
					<?php if($blogRowCount == 3){ ?>
						</div>
						<div class="row blogFeedRow">
					<?php } ?>
					
					<div class="col-md-4">
						<a href="<?php the_permalink(); ?>" title="Read More" class="">
							<div class="blogThumbnail" style="background-image: url('<?php echo $featured_img_url; ?>');"></div>
							<div class="blogTitle"><?php the_title(); ?></div>
						</a>				
					</div>
			<?php $blogRowCount++; endwhile; ?>
			
		</div>
        <div class="row">
            <div id="nav-below" class="navigation clearfix">
                    <div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'twentyten' ) ); ?></div>
                    <div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?></div>
            </div><!-- #nav-below -->
                                  <?php endif; wp_reset_query(); ?>
        </div>
	</div>
</div><!-- .content-area -->


<?php get_footer(); ?>
