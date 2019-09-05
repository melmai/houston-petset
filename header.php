<?php

/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <?php if (is_singular() && pings_open(get_queried_object())) : ?>
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php endif; ?>
    <?php wp_head(); ?>

    <?php if (current_user_can('edit_pages')) { /* A user with editor privileges or higher */ ?>
    <?php  } else { /* A user without or lower than editor privileges and not on a url that includes 'staging' */ ?>
        <script>
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-79874310-1', 'auto'); // <-------------------------GOOGLE ANALYTICS CODE HERE
            ga('require', 'displayfeatures');
            ga('require', 'linkid');
            ga('send', 'pageview');
        </script>
        <script async src="https://www.googletagmanager.com/gtag/js?id=AW-CONVERSION_ID"></script>

        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }

            gtag('js', new Date());

            gtag('config', 'AW-850620149');
        </script>
        <!-- Hotjar Tracking Code -->
        <!-- Event snippet for Donation conversion page In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
        <script>
            function gtag_report_conversion(url) {
                var callback = function() {
                    if (typeof(url) != 'undefined') {
                        //window.location = url;
                    }
                };
                gtag('event', 'conversion', {
                    'send_to': 'AW-850620149/A0L-CNiy2IcBEPXdzZUD',
                    'transaction_id': '',
                    'event_callback': callback
                });
                return false;
            }
        </script>

    <?php } ?>

</head>

<body id="main-body" <?php body_class(); ?>>
    <!-- <a href="https://houstonpetset.salsalabs.org/emergencyhutsformutts/index.html" target="_blank" rel="nofollow"><div class="announcementBanner">Click Here to Provide Shelter for Animals Suffering in the Cold</div></a> -->
    <header>
        <div class="headerSecondBar">
            <div class="container">
                <?php if (!is_front_page()) { ?>
                <div class="header-btn-container">
                    <a href="/make-a-difference/support/" class="header-btn">Donate</a>
                    <a href="#" class="header-btn">Report Cruelty</a>
                </div>
                <?php } ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="mainheader clearfix">
                            <div class="mainLogo">
                                <a href="<?php bloginfo('url'); ?>">
                                    <img src="<?php echo bloginfo('template_url'); ?>/images/default-logo.png" alt="Main Logo" />
                                </a>
                            </div>
                            <div>
                                <div class="mainHeadermenu d-none d-sm-block">
                                    <?php $defaults = array(
                                        'theme_location'  => 'primary',
                                        'container'       => false,
                                        'container_class' => '',
                                        'container_id'    => 'mainNavRight',
                                        'menu_class'      => 'main-nav clearfix noList',
                                        'echo'            => true,
                                        'fallback_cb'     => 'wp_page_menu',
                                        'before'          => '',
                                        'after'           => '',
                                        'link_before'     => '<span>',
                                        'link_after'      => '</span>',
                                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                    );
                                    wp_nav_menu($defaults); ?>
                                </div>
                                <div id="collapse-menu-toggle" class="d-block d-sm-none">
                                    <button type="button" data-toggle="collapse" class="visible-xs collapsed" data-target="#collapse-item" style="">
                                        <span class="button-icon-bars">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header><!-- .site-header -->



    <div class="collapseHolder">
        <div id="collapse-item" class="collapse" style="">
            <div class="collapseContainer">
                <div class="collapsed-nav">
                    <?php $defaults = array(
                        'theme_location'  => 'mobile',
                        'container'       => false,
                        'container_class' => 'collapsed-nav',
                        'container_id'    => 'header1',
                        'menu_class'      => '',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'before'          => '',
                        'after'           => '',
                        'link_before'     => '<span>',
                        'link_after'      => '</span>',
                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    );
                    wp_nav_menu($defaults); ?>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>