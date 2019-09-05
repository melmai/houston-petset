<?php
/**
 * The template part for displaying results in search pages
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
        <div class="blogBlock">                      
            <div class="blogTitle"><a href="<?php the_permalink(); ?>" title="Read More" class=""><?php the_title(); ?></a></div>	
            <div class="blogMeta">By <?php the_author(); ?> - <span class="txtGn"><?php the_time('F j, Y'); ?></span></div>   
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>" title="Read More" class="learnMoreLink">Read More</a>				
        </div> 

