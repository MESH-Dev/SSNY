<?php 
/**
Template Name:Landing: It's All About You (Anti Aging)
 *
 * Template for the It's All About You Landing (Anti Aging) page of the site
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
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('url'); ?>/wp-content/themes/skinspanewyork/styles/its-all-about-you.css" />
  	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url') ?>" title="<?php echo wp_specialchars(get_bloginfo('name'), 1) ?> <?php _e('Posts RSS feed', 'thematic'); ?>" />
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php echo wp_specialchars(get_bloginfo('name'), 1) ?> <?php _e('Comments RSS feed', 'thematic'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />

 <?php //wp_enqueue_script('jquery');?>
	
	<?php if(is_page_template('template-page-lma.php')){ ?>
		<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
		 <?php 
		 		wp_enqueue_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js'); 
				wp_enqueue_script('jquery-ui-accordion', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js');
		 ?>
		
	<?php } ?>
	
<?php wp_head();?>

	<script type="text/javascript" src="http://fast.fonts.com/jsapi/4a1c361a-2517-43b7-8609-fb9ca00f8860.js"></script>

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

<body class="<?php thematic_body_class() ?> landing-page anti-aging">

<div id="wrapper">
		<header id="header">
			<h1 class="logo"><a href="<?php bloginfo('url');?>">Skin Spa New York</a></h1>
			<?php include(WP_CONTENT_DIR."/themes/skinspanewyork/partials/_header_panel.php"); ?>
		</header>
		<div id="main">
			<div class="top-block">
				<a href="#sales"><img style="border-bottom:3px solid #A3884D;" src="<?php echo WP_CONTENT_URL;?>/themes/skinspanewyork/images/its-all-about-you-home-anti-aging.jpg" alt="Background Image" /></a>
				<a name="sales"></a>
				
				<div class="shop-sales-wrapper">
					<h1>IT'S ALL ABOUT YOU!</h1>
					
					<!-- BLOCK 1 -->
					
					<div class="shop-sale-block">
						<h2>For the Face*</h2>
						<h3>FACIAL TREATMENTS</h3>
						<div class="services">
							<h4 class="service-title">CHOOSE ANY 1 TREATMENT</h4>
							<p>
								CUSTOMIZED FACIAL, MICRODERMABRASION <i>OR</i> POWER PEEL**<br />
								<strong>SALE $49</strong> (Reg $80)
							</p>
							<h4 class="service-title">MULTI PACK SALE</h4>
							<p>
								3 TREATMENTS (IN ANY COMBINATION)<br />
								<strong>SALE $119</strong> (Reg $240)
							</p>
							
							<a href="<?php bloginfo('url'); ?>/store/face-web-offers/" class="shop-sale-button" target="_blank">shop sale</a>
							
							<p class="terms">
								*Offers valid for first time Skin Care Customers<br />
								**Your choice of Glycolic, Lactic or Beta-Salicylic
							</p>
													
						</div>
					</div>
					
					<!-- BLOCK 2 -->
					
					<div class="shop-sale-block">
						<h2>For the Body*</h2>
						<h3>50 MINUTE MASSAGES</h3>
						<div class="services">
							<h4 class="service-title">SINGLE SESSION SALE</h4>
							<p>
								SWEDISH MASSAGE<br />
								<strong>SALE $49</strong> (Reg $80)
							</p>
							<p>
								DEEP TISSUE MASSAGE<br />
								<strong>SALE $59</strong> (Reg $100)
							</p>
							<h4 class="service-title">3 PACK SALE</h4>
							<p>
								SWEDISH MASSAGE<br />
								<strong>SALE $119</strong> (Reg $240)
							</p>
							<p>
								DEEP TISSUE MASSAGE<br />
								<strong>SALE $139</strong> (Reg $300)
							</p>
							<a href="<?php bloginfo('url'); ?>/store/body-web-offers/" class="shop-sale-button" target="_blank">shop sale</a>
							
							<p class="terms">
								*Offers valid for first time Massage Customers
							</p>
													
						</div>
					</div>
					
					<!-- BLOCK 3 -->
					
					<div class="shop-sale-block">
						<h2>Getting Smooth*</h2>
						<h3>FULL BODY WAXING</h3>
						<div class="services">
							<h4 class="service-title">SINGLE SESSION SALE</h4>
							<p>
								BRAZILIAN BIKINI WAX<br />
								<strong>SALE $35</strong> (Reg $60)
							</p>
							<h4 class="service-title">3 PACK SALE</h4>
							<p>
								BRAZILIAN BIKINI WAX<br />
								<strong>SALE $99</strong> (Reg $180)
							</p>
							<h4 class="service-title">GIFT CARD SALE</h4>
							<p>
								$100 IN WAXING SERVICES**<br />
								<strong>SALE $40</strong> (Reg $100)
							</p>
							
							<a href="<?php bloginfo('url'); ?>/store/waxing-web-offers/" class="shop-sale-button" target="_blank">shop sale</a>
							
							<p class="terms">
								*Offers valid for first time Waxing Customers<br />
								**Good for use across multiple visits
							</p>
													
						</div>
					</div>
					
					<!-- BLOCK 4 -->
					
					<div class="shop-sale-block">
						<h2>Getting Glowing*</h2>
						<h3>ANTI-AGING</h3>
						<div class="services">
							<h4 class="service-title">SINGLE SESSION SALE</h4>
							<p>
								LASER GENESIS, PHOTOLIGHT, OR LIMELIGHT<br />
								<strong>SALE $99</strong> (Reg $200)
							</p>
							<h4 class="service-title">MULTI PACK SALE</h4>
							<p>
								6 PACK LASER GENESIS, PHOTOLIGHT, OR LIMELIGHT<br />
								<strong>SALE $499</strong> (Reg $1000)
							</p>
							
							<a href="<?php bloginfo('url'); ?>/store/anti-aging-web-offers/" class="shop-sale-button" target="_blank">shop sale</a>
							
							<p class="terms">
								*Services may be mixed and matched <br />
								*Valid for first time laser skin care clients only<br />
								*May not be combined with any other offer<br />
								*Best performed every three weeks in a series of 6 treatments<br />
								* Persons taking antibiotics or other photosensitizing medications should not be treated due to contraindications
							</p>
													
						</div>
					</div>				
				
				</div>
				
				
						
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
							<li><a class="facebook" href="http://www.facebook.com/pages/Skin-Spa-New-York/171690542878304">facebook</a></li>
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