<?php
/**
 * Template Name: Contact Page
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
   		<div class="row">
   			<div class="col-sm-12">
   				<h1 class="contactTitle"><?php the_title(); ?></h1>
   				<div class="contactSubTitle">Thank you for contacting Houston PetSet. We welcome your suggestions and comments.</div>
   			</div>
   		</div>
    	<div class="row">
            <div class="col-sm-6">
                <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]'); ?>
            </div>
            <div class="col-sm-6">
                <div class="contactInfoRow iconEmail">info@houstonpetset.org</div>
                <div class="contactInfoRow iconPhone">(713) 960-6622</div>
                <div class="contactInfoRow iconPin">4265 San Felipe, Suite 1010<br/>Houston, TX 77027</div>
                <div class="socialRow">
                	<div class="footerSocialText">Are you social?</div>
                	<div class="footerSocial">
						<div class="socialIcon leftmostSocial"><a href="https://www.facebook.com/houstonpetset/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/contact-facebook.png" /></a></div>
					<div class="socialIcon"><a href="https://www.instagram.com/houstonpetset/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/contact-instagram.png" /></a></div>
					<div class="socialIcon"><a href="https://www.linkedin.com/company/houston-petset---501c3-nonprofit/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/contact-linkedin.png" /></a></div>
					<div class="socialIcon"><a href="https://twitter.com/HoustonPetSet" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/contact-twitter.png" /></a></div>
					</div>
                </div>
				<!-- <div style="margin-top: 20px;">
					<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fhoustonpetset%2F&tabs=timeline&width=500&height=400&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="500" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
				</div> -->
            </div>
        </div>
	</div>
</div><!-- .content-area -->


<?php get_footer(); ?>
