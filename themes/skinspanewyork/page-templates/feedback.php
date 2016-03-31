<?php 
/**
Template Name: Feedback (Yelp)
 *
 * Template for the Feedback Landing page of the site
 *
 */
 ?>
 
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
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('url'); ?>/wp-content/themes/skinspanewyork/page-templates/feedback/styles/single-service-offers.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('url'); ?>/wp-content/themes/skinspanewyork/page-templates/feedback/styles/feedback.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('url'); ?>/wp-content/themes/skinspanewyork/page-templates/feedback/js/raty/jquery.raty.css" />
	
	<style>
		body {
			background: url('<?php echo WP_CONTENT_URL ?>/themes/skinspanewyork/page-templates/feedback/images/single-service-offers/bg<?php echo rand(1,3); ?>.jpg') no-repeat center center fixed!important; 
			-webkit-background-size: cover!important;
			-moz-background-size: cover!important;
			-o-background-size: cover!important;
			background-size: cover!important;
		}
	</style>
	
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 

	<script type="text/javascript" src="<?php echo WP_CONTENT_URL ?>/themes/skinspanewyork/page-templates/feedback/js/raty/jquery.raty.js"></script> 

  <script type="text/javascript">
    $(document).ready(function () {
    	 $('.rating').raty({
    	  starType : 'i',
        score: function() {
           return $(this).attr('data-score');
        }
    	  
    	 });
	   });
  </script>

	<script type="text/javascript">
	    $( document ).ready(function () {
	       
	    
	    	$('#form-success').hide();
	    	$('#form-thanks').hide();
        $('#feedbackForm').submit(function (e) {
            e.preventDefault();
            var score = $('[name="score"]').val();
            var location = $('#locations').val();
            var treatment = $('#treatment').val();
            var technician = $('#technician-name').val();
            var date = $('#date-of-visit').val();
            var review = $('#review').val();
            var email = $('#fieldEmail').val();
            
            var params = 'score='+score+'&location='+location+'&technician='+technician+'&treatment='+treatment+'&date='+date+'&review='+review+'&email='+email;
            
            $.ajax({
              type: "POST",
              url: '/wp-content/themes/skinspanewyork/page-templates/feedback/includes/mail_feedback.php',
              data: params
            });
            
            var defaultYelpUrl = "wmv9vGht17V8Jrob-k15ug";
            
            if($('#locations').find(':selected').attr('data-yelp-url')){
              var locationUrl = $('#locations').find(':selected').attr('data-yelp-url')
            }else{
              var locationUrl = defaultYelpUrl;
            }
            var yelpUrl = "https://www.yelp.com/writeareview/biz/" + locationUrl;
            console.log(yelpUrl);
            
            $('#yelp-button').click(function(){
              window.open(yelpUrl);
            });
            
                        
            if(score >= 4){
              $('#form-section').hide();
              $('#form-success').show();
              $('#customer-review').text(review);
/*                 window.open("https://www.yelp.com/signup"); */

            }else{
              $('#form-section').hide();
              $('#form-thanks').show();
            }
             
             _gaq.push(['_trackEvent', 'Feedback Form', 'Submitted', score]);
             
                      
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

<form id="feedbackForm" action="" method="post">
		<div id="box-wrap">
			
			<div id="form-section">
  			<h1>How did we do?</h1>
  			<div class="rating"></div>
  			
  			<h1>Tell us more about your visit:</h1>
  			<select id="locations">
  			  <option value="None Selected">Which location?</option>
  			  <option value="Midtown" data-yelp-url="wmv9vGht17V8Jrob-k15ug">Midtown</option>
  			  <option value="Mid-East / Murray Hill" data-yelp-url="3iFSCR-yjB7_16LThiNyUg">Mid-East / Murray Hill</option>
  			  <option value="Mid-West / 57th St" data-yelp-url="eLJjlobAMEI4OBeWaXjXkw">Mid-West / 57th St</option>
  			  <option value="Fashion District" data-yelp-url="jelNtQELe-kym8n4xsCh0A">Fashion District</option>
  			  <option value="Flatiron / Chelsea" data-yelp-url="KQo0KPZZCt2srDmmt0Qy-Q">Flatiron / Chelsea</option>
  			  <option value="Soho" data-yelp-url="6UeM65PNZH1MHKRMZjREAg">Soho</option>
  			  <option value="Upper East Side" data-yelp-url="BcAlljW7YRcj8rL5q9WsNQ">Upper East Side</option>
  			</select>
  			
  			<input type="text" id="treatment" placeholder="What treatment did you get?" />
  			<input type="text" id="technician-name" placeholder="Who performed the treatment?" />
  			<input type="text" id="date-of-visit" placeholder="When did you visit us?" />
  			
  			<textarea id="review" placeholder="How was it?"></textarea>
  			
  			<div class="horizontal-line"></div>
			
				<p class="prompt">Email address (optional)</p>
	
					<div class="input-wrapper"><input id="fieldEmail" type="email" name="email" /></div>
					<div class="horizontal-line"></div>
					
					<input type="submit" value="Submit &raquo;" />
					<div class="clear"></div>

			</div>
			<div id="form-success">
			  <h1>Wow! Thanks for your great review!</h1>
			  <p>Post your review on Yelp, bring it in, and get $20 off your next visit!</p>
			  <br />
			  <img id="yelp-button" src="<?php echo WP_CONTENT_URL;?>/themes/skinspanewyork/page-templates/feedback/images/yelp.png" />
			  <p><b>Your review:</b></p>
			  <p id="customer-review"></p>
		  </div>
			<h1 id="form-thanks">Thank you for your feedback.</h1>
		</div>
</form>		
		
		<h3 class="locations centered">Flatiron/Chelsea  &sdot;  SOHO  &sdot;  Fashion District  &sdot;  Midtown West  &sdot;  Midtown  &sdot;  Upper East Side  &sdot;  Midtown East/Murray Hill</h3>
	
</body>

</html>