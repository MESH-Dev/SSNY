<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
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
	
	<link rel="shortcut icon" href="<?php echo WP_CONTENT_URL ?>/themes/skinspanewyork/images/favicon.ico" >

	<link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,300,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('url'); ?>/wp-content/themes/skinspanewyork/campaigns/styles/single-service-offers.css" />
	
	<?php
		if($custom_css_file){ ?>
			<link rel="stylesheet" type="text/css" href="<?php bloginfo('url'); ?>/wp-content/themes/skinspanewyork/campaigns/styles/<?php echo $custom_css_file; ?>" />
	<?php } ?>
	
	<style>
		body {
			background: url('<?php echo WP_CONTENT_URL ?>/themes/skinspanewyork/campaigns/images/single-service-offers/bg<?php echo rand(1,3); ?>.jpg') no-repeat center center fixed!important; 
			-webkit-background-size: cover!important;
			-moz-background-size: cover!important;
			-o-background-size: cover!important;
			background-size: cover!important;
		}
	</style>
	
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script> 
	<script type="text/javascript">
	    $( document ).ready(function () {
	    	$('#form-success').hide();
	        $('#subForm').submit(function (e) {
	            e.preventDefault();
	            $.getJSON(
	            this.action + "?callback=?",
	            $(this).serialize(),
	            function (data) {
	                if (data.Status === 400) {
	                    alert("Error: " + data.Message);
	                } else { // 200
	                    $('#form-section').hide();
	                    $('#form-success').show();
	                    
	                    _gaq.push(['_trackEvent', 'Service Specific Offers', 'Subscribe', '<?php echo $offer ?>']);
	                }
	            });
	        });
	    });
	</script>

		
<?php //wp_head();?>


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

<body>

    	<div class="logo"></div>


		<div id="box-wrap">
			<h1><?php echo $title; ?><sup>*</sup></h1>
			<p class="services-heading">Example Full Price Services</p>
			
			<?php echo $pricing_table ?>
			
			
			<div class="horizontal-line"></div>
			<div id="form-section">
				<p class="prompt">Enter your email to receive your $<?php echo $gift_amount ?> gift card</p>
	
				<form action="http://amail.altumdesign.com/t/r/s/<?php echo $amail_id ?>/" method="post" id="subForm">
					<div class="input-wrapper"><input id="fieldEmail" type="email" name="cm-<?php echo $amail_id."-".$amail_id ?>" required /></div>
					<div class="horizontal-line"></div>
					
					<input type="submit" value="Submit &raquo;" />
					<div class="clear"></div>
				</form>
				
				
			</div>
			<p id="form-success">Thank you! Please check your email for a gift card.</p>
		</div>
		
		<p class="restrictions centered">
			<?php echo $restrictions; ?>
		</p>
		
		<h2 class="locations-heading centered">Available at all 7 Manhattan Locations</h2>
		
		<h3 class="locations centered">Flatiron/Chelsea  &sdot;  SOHO  &sdot;  Fashion District  &sdot;  Midtown West  &sdot;  Midtown  &sdot;  Upper East Side  &sdot;  Midtown East/Murray Hill</h3>
	
</body>

</html>