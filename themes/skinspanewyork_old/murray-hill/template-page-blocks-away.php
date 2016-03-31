<?php 
/**
Template Name:Landing: Murray Hill - Blocks Away
 *
 * Template for the Murray Hill - Blocks Away Landing page of the site
 *
 */
 ?>

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
    <?php }?>
	
	<link rel="shortcut icon" href="<?php echo WP_CONTENT_URL ?>/themes/skinspanewyork/images/favicon.ico" >
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('url'); ?>/wp-content/themes/skinspanewyork/murray-hill/styles/blocks-away.css" />
  	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url') ?>" title="<?php echo wp_specialchars(get_bloginfo('name'), 1) ?> <?php _e('Posts RSS feed', 'thematic'); ?>" />
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php echo wp_specialchars(get_bloginfo('name'), 1) ?> <?php _e('Comments RSS feed', 'thematic'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />

	<link href='http://fonts.googleapis.com/css?family=Quicksand:400,700' rel='stylesheet' type='text/css'>
 <?php //wp_enqueue_script('jquery');?>
	
	<?php if(is_page_template('template-page-lma.php')){ ?>
		<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
		 <?php 
		 		wp_enqueue_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js'); 
				wp_enqueue_script('jquery-ui-accordion', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js');
		 ?>
		
	<?php } ?>
	
<?php wp_head();?>

	<script type="text/javascript" src="http://fast.fonts.com/jsapi/12d2e990-4dce-4516-abb5-3cff6e93dc7c.js"></script>

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
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body class="<?php thematic_body_class() ?> landing-page">

<div id="wrapper">
		<header id="header">
			<h1 class="logo"><a href="<?php bloginfo('url'); ?>">Skin Spa New York</a></h1>
			<?php include(WP_CONTENT_DIR."/themes/skinspanewyork/partials/_header_panel.php"); ?>
		</header>
		<div id="main">
			<div class="top-block">
				<a id="blocks-away-offer-image" class="lp-offer-image" href="#sales" style="border-bottom:3px solid #A3884D;"><img data-src-767px="<?php echo WP_CONTENT_URL;?>/themes/skinspanewyork/images/blocks-away-home.jpg"  src="<?php echo WP_CONTENT_URL;?>/themes/skinspanewyork/murray-hill/images/blocks-away-centered.jpg" alt="Background Image" /></a>
				
				<nav class="main_navigation">
					<span class="shadow">&nbsp;</span>
					<?php do_action('wp_menubar','mainmenu'); ?>
				</nav>

				<a name="sales"></a>
				
				<?php include(WP_CONTENT_DIR."/themes/skinspanewyork/partials/_lp_offers.php") ?>				
				
						
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
							<li><a class="facebook" href="http://www.facebook.com/SkinSpaNewYork">facebook</a></li>
							<li><a class="twitter" href="http://twitter.com/SkinSpaNewYork">twitter</a></li>
							<li><a class="ico03" href="<?php bloginfo('url') ?>/beauty-blog">blog</a></li>
						</ul>
						<span class="separator">&nbsp;</span>
						<strong class="title">Contact us</strong>
						<a href="<?php bloginfo('url'); ?>/appointments/" class="btn-book">Book online now &raquo;</a>
					</div>
				</div>

			</div><!-- .top-block -->

<?php get_footer() ?>