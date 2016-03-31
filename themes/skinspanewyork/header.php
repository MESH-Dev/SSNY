<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Templatemela
 * @since Templatemela 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<!--[if lt IE 9]>
	<script>
	document.createElement('header');
	document.createElement('nav');
	document.createElement('section');
	document.createElement('article');
	document.createElement('aside');
	document.createElement('footer');
	document.createElement('hgroup');
	</script>
	<![endif]-->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<?php if(get_option('tmoption_responsive') == 'yes'): ?>
	<meta name="viewport" content="width=device-width">
	<?php endif; ?>
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">	
	<link rel="shortcut icon" href="/favicon.ico">
	
	<?php wp_enqueue_style( 'Lato', "https://fonts.googleapis.com/css?family=Lato:300,700" ); ?>

	<?php templatemela_header(); ?>

	<?php wp_head(); ?>
	
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/campaigns/styles/exclusive-offers.css" rel="stylesheet" type="text/css"/>
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/js/featherlight/featherlight.min.css" rel="stylesheet" type="text/css"/>

	
	<?php if(get_option('tmoption_responsive') == 'yes'):
	wp_enqueue_style('responsive', get_stylesheet_directory_uri() . '/responsive.css');
	endif;
	?>
  <script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.sync.bootstrap.min.js"></script>

  <!-- Facebook Pixel Code -->
  <script>
  !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
  n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,document,'script','//connect.facebook.net/en_US/fbevents.js');

  fbq('init', '938473156233617');
  fbq('track', "PageView");</script>
  <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=938473156233617&ev=PageView&noscript=1"/></noscript>
  <!-- End Facebook Pixel Code -->

  <script type="text/javascript">(function () { var e = document.createElement('script'); e.type = 'text/javascript'; e.async = true; e.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://btn.createsend1.com/js/sb.min.js?v=3'; e.className = 'createsend-script'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(e, s); })();</script>

</head>

<body <?php body_class(); ?> style="test">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-34622576-1', 'auto');
  ga('require', 'displayfeatures');
  ga('send', 'pageview');

</script>
<?php if ( get_option('tmoption_control_panel') == 'yes' ) do_action('tm_show_panel'); ?>
	<div id="page" class="hfeed site">
	<?php templatemela_header_before(); ?>
		<header id="masthead" class="site-header" role="banner">
			<!-- Start header-main -->
			<div class="header-main">
				<!-- Start header-top -->
				<div class="header-top">
				
						<div class="header-link-left">
							<?php
							$tm_contact_header_menu =array(
							'menu' => 'TM Header Top Links',
							'depth'=> 1,
							'echo' => false,
							'menu_class'      => 'contact-header-menu', 
							'container'       => '', 
							'container_class' => '', 
							'theme_location' => 'contact-header-menu'
							);
							echo wp_nav_menu($tm_contact_header_menu);				    
							?>		
						</div>
				
					<div class="home-link logo">											
						<?php if (get_option('tmoption_logo_image') != '') : ?>
							<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">	
								<?php tm_get_logo(); ?>
							</a>
						<?php else: ?>
						<h1 class="site-title">
							<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">	
								<strong><?php bloginfo( 'name' ); ?></strong>
							</a>
						</h1>
						<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
						<?php endif; ?>
					</div>		
					<?php templatemela_header_inside(); ?>
					
				
					<div class="header-link-right">

						
						<div class="city-link"><a href="https://skinspanewyork.com/locations/midtown/">New York</a></div>
						<div class="city-link"><a title="Boston Back Bay" href="https://skinspanewyork.com/location-boston/back-bay/">Boston</a></div>
						<?php 
						//if ( in_array( 'wp-e-commerce/wp-shopping-cart.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) : ?>
							<!--<div class="header_login"> Start header cart -->
								 
							<!--</div> -->
						<?php //endif; ?>
					</div>
						
					
				
						
				</div><!-- End header-top -->
				
			</div><!-- End header-main -->		
			
		</header><!-- #masthead -->
		<?php templatemela_header_after(); ?>
		<div class="site-top">
			<div class="top_main">
				<!-- Start header-bottom -->	
				<div class="navbar-outer">	
				<div id="navbar" class="header-bottom navbar default">
					<nav id="site-navigation" class="navigation main-navigation" role="navigation">
						<h3 class="menu-toggle"><?php _e( 'Menu', 'templatemela' ); ?></h3>
						<a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'templatemela' ); ?>"><?php _e( 'Skip to content', 'templatemela' ); ?></a>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'before' => '<span></span>' ) ); ?>
						
					</nav><!-- #site-navigation -->
				</div>
				<!-- End header-bottom #navbar -->	
				
				
				
				
				
				<!-- Start header-middle -->
				<div class="header-middle">
				
				<?php if ( is_active_sidebar( 'header-search' ) ): ?>
					<!--Start header-middle-top -->
					<div class="header-middle-top"><!--Start header-middle-top -->	
						<div class="search_toggle"></div>	
						<?php /*?><?php get_search_form(); ?>		<?php */?>
						
						<?php templatemela_get_widget('header-search');  ?>							
					</div><!--End header-middle-top -->	
				<?php endif; ?>
				
					<!--Start header-middle-bottom -->
					<div class="header-middle-bottom">	
						<div class="header-top-contactus">
							<?php templatemela_get_widget('header-contact'); ?>	
						</div>	
							
							<?php 
					// wp-e-commerce Header Cart
					if ( in_array( 'wp-e-commerce/wp-shopping-cart.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) : ?>
					<div class="header_cart"><!-- Start header cart -->
					  
						<div class="togg">	
  						<span class="bag-label">Shopping Bag</span>
							<a id="shopping_cart" class="shopping_cart tog" href="#" title="<?php echo get_option("tmoption_cart_text"); ?>"> 
							<?php /*?><span class="item-text"><?php echo get_option("tmoption_cart_text"); ?></span>
							<span class="item-total"><?php echo wpsc_cart_item_count(); ?></span> <?php */?>
							<div class="right-arrow"></div>
							</a>
							<?php templatemela_get_widget('header-widget'); ?>		
						</div>	
					</div>							
					<?php endif; ?>	
					</div><!--End header-middle-bottom -->
				</div>
				</div><!-- End header-middle -->
				
				
				
				
				
				
				
							
			</div>	
			<?php if (is_page('home') ) : ?>		
				<div id="top-area">
					<div class="top-area-inner">
						<?php // include_once(TEMPLATEPATH . '/slider.php'); ?>
						<?php if ( in_array( 'revslider/revslider.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) : ?>	
						<?php echo do_shortcode('[rev_slider slider2]'); ?>
						<?php endif; ?>
						<div class="home-topbanner">
							<?php templatemela_get_widget('homepage-top-banners-area');?>
						</div>
					</div>
				</div>			
			<?php endif; ?>
			<?php if (is_page(3087) ) : ?>		
				<div id="top-area">
					<div class="top-area-inner">
						<?php // include_once(TEMPLATEPATH . '/slider.php'); ?>
						<?php if ( in_array( 'revslider/revslider.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) : ?>	
						<?php echo do_shortcode('[rev_slider lookz]'); ?>
						<?php endif; ?>
						<div class="home-topbanner">
							<?php templatemela_get_widget('homepage-top-banners-area');?>
						</div>
					</div>
				</div>			
			<?php endif; ?>
		</div>		
		
		
		<?php templatemela_main_before(); ?>

	<?php if ( 'page' == get_option('show_on_front') && is_front_page() ) :?>
	<div class="homepage">
	<?php endif; ?>
	<div id="main" class="site-main">	
