<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php
        if ( is_single() ) { single_post_title(); }
        elseif ( is_home() ) { bloginfo('name'); print ' | '; bloginfo('description'); pageGetPageNo(); }
        elseif ( is_page() ) { single_post_title(''); }
        elseif ( is_search() ) { bloginfo('name'); print ' | Search results for ' . wp_specialchars($s); pageGetPageNo(); }
        elseif ( is_404() ) { bloginfo('name'); print ' | Not Found'; }
        else { bloginfo('name'); wp_title('|'); pageGetPageNo(); }
    ?></title>
	
    <meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
	<meta name="description" content="<?php bloginfo('description') ?>" />
	<?php if(is_search()) { ?>
	<meta name="robots" content="noindex, nofollow" /> 
	<meta property="og:title" content="Skin Spa New York" />
	<meta property="og:type" content="company" />
	<meta property="og:url" content="http://skinspanewyork.com/" />
	<meta property="og:image" content="" />
	<meta property="og:site_name" content="Skin Spa New York" />
	<meta property="fb:admins" content="1410503" />
    <?php }?>
	
	<link rel="shortcut icon" href="<?php echo WP_CONTENT_URL ?>/themes/skinspanewyork/images/favicon.ico" >
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
  	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url') ?>" title="<?php echo wp_specialchars(get_bloginfo('name'), 1) ?> <?php _e('Posts RSS feed', 'thematic'); ?>" />
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php echo wp_specialchars(get_bloginfo('name'), 1) ?> <?php _e('Comments RSS feed', 'thematic'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />

 <?php //wp_enqueue_script('jquery');?>
 
	<?php if(is_page('secret-shopper-survey') || is_page('corporate-relations')){ ?>
	 	<link rel="stylesheet" type="text/css" href="<?php echo WP_CONTENT_URL ?>/themes/skinspanewyork/styles/cforms.css" />
	<?php } ?> 
	
	<?php if(is_page_template('template-page-lma.php')){ ?>
		<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
		 <?php 
		 		wp_enqueue_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js'); 
				wp_enqueue_script('jquery-ui-accordion', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js');
		 ?>
		
	<?php } ?>
	
	<link href='http://fonts.googleapis.com/css?family=Quicksand:300,400,700' rel='stylesheet' type='text/css'>
	<link type="text/css" rel="stylesheet" href="http://fast.fonts.com/cssapi/2113f4ad-41e4-4254-94e2-42d0f30c9941.css"/>
	
<?php wp_head();?>

	<script type="text/javascript" src="<?php echo WP_CONTENT_URL; ?>/themes/skinspanewyork/js/update_cart.js"></script>
	
	<?php if(is_page_template('template-page-lma.php')){ ?>
		<script type="text/javascript" src="<?php echo WP_CONTENT_URL; ?>/themes/skinspanewyork/js/accordion.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function() {
				jQuery("#accordion").accordion({ collapsible: true, autoHeight: false, active: false });
				jQuery(".accordion").accordion({ collapsible: true, autoHeight: false, active: false });
			});
		</script>
	<?php } ?>

<!--[if lt IE 9]>
		<script type="text/javascript" src="<?php echo WP_CONTENT_URL; ?>/themes/skinspanewyork/js/html5.js"></script>
		<script type="text/javascript" src="<?php echo WP_CONTENT_URL; ?>/themes/skinspanewyork/js/respond.min.js"></script>
	<![endif]-->
	<!--[if gte IE 9]>
		<style type="text/css">
			.gradient {filter: none !important;}
		</style>
	<![endif]-->
	<script type="text/javascript">
	
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-34622576-1']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	
	</script>
	<script type="text/javascript">
	var fb_param = {};
	fb_param.pixel_id = '6014986379160';
	fb_param.value = '0.00';
	fb_param.currency = 'USD';
	(function(){
	  var fpw = document.createElement('script');
	  fpw.async = true;
	  fpw.src = '//connect.facebook.net/en_US/fp.js';
	  var ref = document.getElementsByTagName('script')[0];
	  ref.parentNode.insertBefore(fpw, ref);
	})();
	</script>
	<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/offsite_event.php?id=6014986379160&amp;value=0&amp;currency=USD" /></noscript>

</head>

<body class="<?php thematic_body_class() ?>">

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=612424422104972";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="wrapper">
		<header id="header">
			<h1 class="logo"><a href="<?php bloginfo('url'); ?>">Skin Spa New York</a></h1>
			<?php include(WP_CONTENT_DIR."/themes/skinspanewyork/partials/_header_panel.php");s ?>
		</header>
		<div id="main">
			<div class="top-block">
				<?php if(is_front_page()): ?>
				
					<?php
						$show_default = get_option( 'show_default', $default = false );
						
						if($show_default): ?>
						
							<div id="home-default-image"><img data-src-767px="<?php echo WP_CONTENT_URL;?>/themes/skinspanewyork/images/homepage.jpg" src="<?php echo WP_CONTENT_URL;?>/themes/skinspanewyork/images/homepage_mobile.jpg" alt="Skin Spa New York" /></div>

						<?php else: ?>
					
							<a id="home-offer-image" href="<?php bloginfo('url');?>/lp/summer-is-here/#sales"><img data-src-767px="<?php echo WP_CONTENT_URL;?>/themes/skinspanewyork/images/summer-2014-home.jpg" src="<?php echo WP_CONTENT_URL;?>/themes/skinspanewyork/images/summer-2014-centered.jpg" alt="Summer Deals on Spa Services!" /></a>
					
						<?php endif; ?>
				
				<?php elseif(is_page_template('template-page-membership.php')): ?>	
  				<img src="<?php echo WP_CONTENT_URL;?>/themes/skinspanewyork/images/membership-bg.jpg" alt="Background Image" />
				<?php else: ?>
					<img src="<?php echo WP_CONTENT_URL;?>/themes/skinspanewyork/images/shoulder_love.jpg" alt="Background Image" />				
				<?php endif; ?>
				<nav class="main_navigation">
					<span class="shadow">&nbsp;</span>
					<?php do_action('wp_menubar','mainmenu'); ?>
				</nav>
				<a id="lma-home" href="<?php bloginfo('url')?>/last-minute-appointments/#lma">
					<img src="<?php echo WP_CONTENT_URL;?>/themes/skinspanewyork/images/lma-home-dark.jpg" alt="Last Minute Appointments" />	
				</a>
				
				<div class="social-block">
					<div class="holder">
					<figure id="home-deals">
					<span class="deals-title">SIGN UP FOR SPECIAL OFFERS & GET A $25 GIFT CARD!</span>
							
					<form action="http://amail.altumdesign.com/t/r/s/yhslrt/" method="post">
						<fieldset>
								<span class="text">
									<input type="text" name="cm-yhslrt-yhslrt" id="yhslrt-yhslrt" placeholder="Email Address..." />
								</span>
								<div class="submit">
									<input type="submit" value="Subscribe" />
								</div>
						</fieldset>
					</form>
				</figure>
						<ul>
							<li><a class="facebook" href="http://www.facebook.com/SkinSpaNewYork" target="_blank">facebook</a></li>
							<li><a class="twitter" href="http://twitter.com/SkinSpaNewYork" target="_blank">twitter</a></li>
							<li><a class="ico03" href="<?php bloginfo('url') ?>/beauty-blog">blog</a></li>
						</ul>
						<span class="separator">&nbsp;</span>
						<strong class="title">Contact us</strong>
						<a href="<?php bloginfo('url'); ?>/appointments/" class="btn-book">Book online now &raquo;</a>
					</div>
				</div>