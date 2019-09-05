<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?>


<footer>
	<?php if (is_home()) { ?>
	<div id="mainFooter" class="home-footer">
	<?php } else { ?>
	<div id="mainFooter">
	<?php } ?>
        <div class="container">
            <div class="mainFooter">
            	<div class="footerMenu">
            		<?php    $defaults = array(
						'theme_location'  => 'footer',
						'container'       => false,
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'footer-nav clearfix noList',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '<span>',
						'link_after'      => '</span>',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						);
					wp_nav_menu( $defaults );?>
            	</div>
            
				<div class="footerSocial">
					<div class="socialIcon"><a href="https://www.facebook.com/houstonpetset/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/facebook.png" /></a></div>
					<div class="socialIcon"><a href="https://www.instagram.com/houstonpetset/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/instagram.png" /></a></div>
					<div class="socialIcon"><a href="https://www.linkedin.com/company/houston-petset---501c3-nonprofit/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/linkedin.png" /></a></div>
					<div class="socialIcon"><a href="https://twitter.com/HoustonPetSet" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/twitter.png" /></a></div>
				</div>
            </div>
        </div>
	</div>
	<div class="footer-widget">
		<?php dynamic_sidebar('sidebar-2'); ?>
	</div><!-- .footerMenu.info-widget -->
</footer><!-- .site-footer -->


<?php wp_footer(); ?>
</body>
</html>
