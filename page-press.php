<?php

/**
 * Template Name: Press
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
//$press2019 = get_field('2019_press_items');
// $press2018 = get_field('2018_press_items');
// $press2017 = get_field('2017_press_items');
// $press2016 = get_field('2016_press_items');
// $press2015 = get_field('2015_press_items');
// $press2014 = get_field('2014_press_items');

$featured_img = get_the_post_thumbnail_url(get_the_ID(), 'full');
$button_options = get_field('button_options');

if ($featured_img_url) : ?>
    <div class="pageTopTitle defaultBanner" style="background-image: url('<?php echo $featured_img_url; ?>');"></div>
<?php endif; ?>

<div id="primary" class="content-area clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="grantContentBox">
                    <h1 class="grantTitle"><?php the_title(); ?></h1>
                    <div class="grantSubTitle">
                        <div class="wpb_text_column wpb_content_element ">
                            <div class="wpb_wrapper">
                                <p><?php echo get_post_meta(get_the_ID(), 'page_text', true); ?></p>
                            </div>
                        </div>
                        <div class="vc_btn3-container  orange-background uppercase button vc_btn3-center">
                            <a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-flat vc_btn3-color-warning" href="<?php echo $button_options["button_url"]; ?>" title="Contact Us">
                                <?php echo $button_options["button_text"]; ?>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="news-wrapper">

                    <!-- START NEWS ACCORDION -->
                    <div class="grantListBox">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                            <?php
                            $current_year = date('Y');
                            $end_year = 2016;
                            $years = [];

                            for ($i = $current_year; $i >= $end_year; $i--) {
                                $years[] = $i;
                            }

                            foreach ($years as $year) {
                                $news_query = new WP_Query(array(
                                    'post_type' => 'article',
                                    'posts_per_page' => -1,
                                    'tax_query' => array(array(
                                        'taxonomy' => 'pub_dates',
                                        'field' => 'slug',
                                        'terms' => $year,
                                    )),
                                )); ?>

                                <!-- START NEWS PANEL -->
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingZero<?php echo $year; ?>">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseZero<?php echo $year; ?>" aria-expanded="true" aria-controls="collapseZero<?php echo $year; ?>">
                                                <?php echo $year; ?>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseZero<?php echo $year; ?>" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingZero<?php echo $year; ?>">
                                        <div class="panel-body">
                                            <div class="directorsContainer clearfix">
                                                <ul class="directorList">

                                                    <!-- START ARTICLE -->
                                                    <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
                                                        <?php $featured_img = get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>

                                                        <li class="directorItemHolder">
                                                            <div class="directorItemBox">
                                                                <a href="<?php echo get_post_meta(get_the_ID(), 'source_url', true) ?>" target="_blank">
                                                                    <div class="directorPortrait"><img src="<?php echo $featured_img; ?>" /></div>
                                                                </a>
                                                                <div class="directorName"><?php the_title(); ?></div>
                                                                <div class="directorTitle"><?php echo get_post_meta(get_the_ID(), 'subtitle', true); ?></div>
                                                            </div>
                                                        </li>

                                                    <?php endwhile;
                                                        wp_reset_query(); ?>
                                                    <!-- END ARTICLE -->

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .panel.panel-default -->
                                <!-- END NEWS PANEL -->

                            <?php } ?>
                        </div>
                    </div>
                    <!-- END NEWS ACCORDION -->

                    <?php the_content(); ?>
                </div>

            </div>
        </div>
    </div>
</div><!-- .content-area -->


<?php get_footer(); ?>