<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); 
$currentArchive = get_query_var('cat');

?>

<div class="pageTopTitle">
	<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
</div>

<div id="primary" class="content-area clearfix">
   <div class="blogCategoryBar">
	<div class="container hidden-xs">
    	<ul class="blogCategoryMenu">
        	<li><a href="<?php bloginfo('url'); ?>/blog/">All</a></li>
            <?php
				$args = array(
				  'orderby' => 'name',
				  'order' => 'ASC'
				  );
				$categories = get_categories($args);
				  foreach($categories as $category) {
					
				$name = $category->slug;
				$termID = $category->term_id;
				if($currentArchive == $termID){ $active = "selectedArchive"; }else{ $active = ""; }
				
				echo '<li><a href="' . get_category_link( $category->term_id ) . '" class="' . $active . '"  title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name . "</a></li>";
				
				} 
			?>
        </ul>
    </div>
</div>
	<div class="container">
    	<div class="row">
            <div class="col-md-8">
                <div class="clearfix">
				<?php if ( have_posts() ) :
                                    
                // Start the Loop.
                while ( have_posts() ) : the_post();
    
                    /*
                     * Include the Post-Format-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                     */
                    ?>
                    
                    	<div class="blogBlock">                      
                            <div class="blogTitle"><a href="<?php the_permalink(); ?>" title="Read More" class=""><?php the_title(); ?></a></div>	
                            <div class="blogMeta">By <?php the_author(); ?> - <span class="txtGn"><?php the_time('F j, Y'); ?></span></div>   
                            <?php the_excerpt(); ?>
                            <a href="<?php the_permalink(); ?>" title="Read More" class="learnMoreLink">Read More</a>				
                        </div>          
                    
                    <?php
    
                // End the loop.
                endwhile;
    
                ?>
                </div>
                    <div id="nav-below" class="navigation clearfix">
                            <div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'twentyten' ) ); ?></div>
                            <div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?></div>
                    </div><!-- #nav-below -->
                <?php
    
                // If no content, include the "No posts found" template.
                else :
                    get_template_part( 'template-parts/content', 'none' );
        
                endif;
                ?>
            </div>
            
            <div class="col-md-4">
                <?php get_sidebar(); ?>
            </div>
        </div>
	</div>

	</div><!-- .content-area -->

<?php get_footer(); ?>
