<?php
/**
 * TemplateMela
 * @copyright  Copyright (c) 2010 TemplateMela. (http://www.templatemela.com)
 * @license    http://www.templatemela.com/license/
 */
?>
<?php 
//  Creating Widget 
// Reference : http://codex.wordpress.org/Widgets_API

/**
 * Register widgetized areas, including two sidebars and four widget-ready columns in the footer.
 *
 * To override templatemela_widgets_init() in a child theme, remove the action hook and add your own
 * function tied to the init hook.
 *
 
 * @uses register_sidebar
 */
function templatemela_register_sidebars() {
	register_sidebar( array(
		'name' => __( 'Primary Sidebar', 'templatemela' ),
		'id' => 'sidebar-4',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</li></ul></aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3><ul class="main-ul"><li>',
	));
	register_sidebar( array(
		'name' => __( 'Secondary Sidebar', 'templatemela' ),
		'id' => 'sidebar-5',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</li></ul></aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3><ul class="main-ul"><li>',
	));
	register_sidebar( array(
		'name' => __( 'Header Area', 'templatemela' ),
		'id' => 'header-widget',
		'description' => __( 'The primary widget area on header', 'templatemela' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s tab_content">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'Footer Area', 'templatemela' ),
		'id' => 'footer-widget',
		'description' => __( 'The footer widget area', 'templatemela' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</li></ul></aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3><ul class="main-ul"><li>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Header Login Area', 'templatemela' ),
		'id' => 'header-login',
		'description' => __( 'The Header Login widget area', 'templatemela' ),
		'before_widget' => '<aside id="%1$s" class="%2$s tab_content header-login">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );		
	register_sidebar( array(
		'name' => __( 'Header Search Area', 'templatemela' ),
		'id' => 'header-search',
		'description' => __( 'The Header Seacrh widget area', 'templatemela' ),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',
	) );
	register_sidebar( array(
		'name' => __( 'Homepage Services Area', 'templatemela' ),
		'id' => 'homepage-services-area',
		'description' => __( 'The homepage Services widget area', 'templatemela' ),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',
	) );
	
	register_sidebar( array(
		'name' => __( 'Homepage Featured Products Widget Area', 'templatemela' ),
		'id' => 'home-featured-products-widget',
		'description' => __( 'The Homepage Featured Products widget area', 'templatemela' ),
		'before_widget' => '',
		'after_widget' => "",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );	
	register_sidebar( array(
		'name' => __( 'Homepage Offer Content Widget Area', 'templatemela' ),
		'id' => 'home-offer-widget',
		'description' => __( 'The Homepage  Offer Content widget area', 'templatemela' ),
		'before_widget' => '',
		'after_widget' => "",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );	
	register_sidebar( array(
		'name' => __( 'Homepage Offer slider Widget Area', 'templatemela' ),
		'id' => 'home-offer-slider-widget',
		'description' => __( 'The Homepage  Offer Slider widget area', 'templatemela' ),
		'before_widget' => '',
		'after_widget' => "",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );	
	register_sidebar( array(
		'name' => __( 'Homepage Testimonial Widget Area', 'templatemela' ),
		'id' => 'home-testimonial-widget',
		'description' => __( 'The Homepage  Testimonial widget area', 'templatemela' ),
		'before_widget' => '',
		'after_widget' => "",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );	
	register_sidebar( array(
		'name' => __( 'About Us Content Widget Area', 'templatemela' ),
		'id' => 'about-us-widget',
		'description' => __( 'About Us Content Content widget area', 'templatemela' ),
		'before_widget' => '',
		'after_widget' => "",
		'before_title' => '<h3 class="widget-title"><span class="title_inner">',
		'after_title' => '</span></h3>',
	) );	
	register_sidebar( array(
		'name' => __( 'About Team Widget Area', 'templatemela' ),
		'id' => 'about-team-widget',
		'description' => __( 'About Team widget area', 'templatemela' ),
		'before_widget' => '',
		'after_widget' => "",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );	
	register_sidebar( array(
		'name' => __( 'About Latest News Widget Area', 'templatemela' ),
		'id' => 'about-latest-news-widget',
		'description' => __( 'About Latest News widget area', 'templatemela' ),
		'before_widget' => '',
		'after_widget' => "",
		'before_title' => '<div class="title_outer"><span class="title_dot"><span class="title_inner_dot"><span class="widget-title">',
		'after_title' => '</span></span></span></div>',
	) );	

	register_sidebar( array(
		'name' => __( 'Our Team Widget Area', 'templatemela' ),
		'id' => 'our-team-widget',
		'description' => __( 'Our Team Widget Area', 'templatemela' ),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'Logo Partner Widget Area', 'templatemela' ),
		'id' => 'logo-partner-widget',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</li></ul></aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3><ul class="main-ul"><li>',
	) );
	register_sidebar( array(
		'name' => __( 'First Footer Widget Area', 'templatemela' ),
		'id' => 'first-footer-widget-area',
		'description' => __( 'The first footer widget area', 'templatemela' ),
		'before_widget' => '<aside id="%1$s" class="%2$s">',
		'after_widget' => "</li></ul></aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3><ul class="main-ul"><li>',
	) );
	register_sidebar( array(
		'name' => __( 'Second Footer Widget Area', 'templatemela' ),
		'id' => 'second-footer-widget-area',
		'description' => __( 'The second footer widget area', 'templatemela' ),
		'before_widget' => '<aside id="%1$s" class="%2$s">',
		'after_widget' => "</li></ul></aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3><ul class="main-ul"><li>',
	) );
	register_sidebar( array(
		'name' => __( 'Third Footer Widget Area', 'templatemela' ),
		'id' => 'third-footer-widget-area',
		'description' => __( 'The third footer widget area', 'templatemela' ),
		'before_widget' => '<aside id="%1$s" class="%2$s">',
		'after_widget' => "</li></ul></aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3><ul class="main-ul"><li>',
	) );
	register_sidebar( array(
		'name' => __( 'Fourth Footer Widget Area', 'templatemela' ),
		'id' => 'forth-footer-widget-area',
		'description' => __( 'The forth footer widget area', 'templatemela' ),
		'before_widget' => '<aside id="%1$s" class="%2$s">',
		'after_widget' => "</li></ul></aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3><ul class="main-ul"><li>',
	) );
	register_sidebar( array(
		'name' => __( 'Fifth Footer Widget Area', 'templatemela' ),
		'id' => 'fifth-footer-widget-area',
		'description' => __( 'The fifth footer widget area', 'templatemela' ),
	) );
	register_sidebar( array(
		'name' => __( 'sixth Footer Widget Area', 'templatemela' ),
		'id' => 'sixth-footer-widget-area',
		'description' => __( 'The sixth footer widget area', 'templatemela' ),
	) );	
}
?>
<?php
/** Register sidebars by running templatemela_widgets_init() on the widgets_init hook. */
add_action( 'widgets_init', 'templatemela_register_sidebars' );
include_once(TEMPLATEPATH . '/templatemela/widgets/about.php'); 
include_once(TEMPLATEPATH . '/templatemela/widgets/adsense.php'); 
include_once(TEMPLATEPATH . '/templatemela/widgets/TM_ephemera.php');
include_once(TEMPLATEPATH . '/templatemela/widgets/advertise.php');
include_once(TEMPLATEPATH . '/templatemela/widgets/subsribefeed.php');
include_once(TEMPLATEPATH . '/templatemela/widgets/followus.php');
include_once(TEMPLATEPATH . '/templatemela/widgets/latest-news.php');
include_once(TEMPLATEPATH . '/templatemela/widgets/recent-posts.php');
include_once(TEMPLATEPATH . '/templatemela/widgets/testimonials.php');
include_once(TEMPLATEPATH . '/templatemela/widgets/flickr.php');
include_once(TEMPLATEPATH . '/templatemela/widgets/twitter.php');
include_once(TEMPLATEPATH . '/templatemela/widgets/home_services.php');
include_once(TEMPLATEPATH . '/templatemela/widgets/brand-logo.php');
include_once(TEMPLATEPATH . '/templatemela/widgets/footer-service.php');
include_once(TEMPLATEPATH . '/templatemela/widgets/header-top.php');
include_once(TEMPLATEPATH . '/templatemela/widgets/footer_contactus.php');
include_once(TEMPLATEPATH . '/templatemela/widgets/our-team.php');
include_once(TEMPLATEPATH . '/templatemela/widgets/home-products.php');
include_once(TEMPLATEPATH . '/templatemela/widgets/header_login.php');
include_once(TEMPLATEPATH . '/templatemela/widgets/offer_content.php');
include_once(TEMPLATEPATH . '/templatemela/widgets/offer_slider.php');
include_once(TEMPLATEPATH . '/templatemela/widgets/left-banner.php');
?>