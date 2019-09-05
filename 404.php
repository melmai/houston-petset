<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div id="primary" class="content-area clearfix">
	<div class="container">
    	<div class="row">
            <div class="col-md-8">
                <section class="error-404 not-found">
                    <header class="page-header">
                        <h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'twentysixteen' ); ?></h1>
                    </header><!-- .page-header -->
    
                    <div class="page-content">
                        <p><?php _e( 'It looks like nothing was found at this location. Please explore the other pages of our site.', 'twentysixteen' ); ?></p>
                        <?php	$defaults = array(
						'theme_location'  => 'mobile',
						'container'       => false,
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '<span>',
						'link_after'      => '</span>',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						);
						wp_nav_menu( $defaults );?>
                    </div><!-- .page-content -->
                </section><!-- .error-404 -->
 			</div>
        </div>
	</div>
</div><!-- .content-area -->
<?php get_footer(); ?>
