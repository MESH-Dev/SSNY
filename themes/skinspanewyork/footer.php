<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Templatemela
 * @since Templatemela 1.0
 */
?>
		</div><!-- #main -->
		<?php templatemela_main_after(); ?>
	<?php if ( 'page' == get_option('show_on_front') && is_front_page() ) :?>
	</div>
	<?php endif; ?>

		<div class="call-to-book">
		  <a class="call-btn" href="#">Call Now to Book an Appointment</a>

		  <div class="phone-numbers">
		    <a class="close-btn" href="#">x</a>
		    <h4>Select a Location:</h4>
		    <a id="midtown" class="phone-number" href="tel:212-684-4914">Midtown</a>
		    <a id="mid-east" class="phone-number" href="tel:212-883-1125">Mid-East / Murray Hill</a>
		    <a id="mid-west" class="phone-number" href="tel:212-707-8730">Mid-West / 57th St</a>
		    <a id="fashion-district" class="phone-number" href="tel:212-631-7705">Fashion District</a>
		    <a id="flatiron" class="phone-number" href="tel:212-620-0033">Flatiron / Chelsea</a>
		    <a id="soho" class="phone-number" href="tel:212-925-1956">Soho</a>
		    <a id="ues" class="phone-number" href="tel:212-486-2110">Upper East Side</a>
		    <a id="back-bay" class="phone-number" href="tel:617-236-1444">Boston Back Bay</a>
		  </div>
		</div>
		<?php templatemela_go_top(); ?>
		<?php templatemela_footer_before(); ?>
		<footer id="colophon" class="site-footer" role="contentinfo">

		<?php if (!is_front_page() ){ ?>
		<div class="full-width-strip">
 
			<div class="locations-area">
				  <div class="light-shadow"></div>
	          	  <div class="location-link">
	  			    	<a href="<?php bloginfo('url')?>/locations/" class="locations-link">Locations</a>
	    			  	<div class="separator-line"></div>
	          	  </div>
		          <div class="location-list">
		            <div class="loc">
		              <h3><a href="<?php bloginfo('url'); ?>/locations/flatiron-chelsea/">Flatiron/Chelsea &raquo;</a></h3>
		              <p>(212) 620-0033</p>
		            </div>

		            <div class="loc">
		              <h3><a href="<?php bloginfo('url'); ?>/locations/soho/">SOHO &raquo;</a></h3>
		              <p>(212) 925-1956</p>
		            </div>

		            <div class="loc">
		              <h3><a href="<?php bloginfo('url'); ?>/locations/midtown-west/">Fashion District &raquo;</a></h3>
		              <p>(212) 631-7705</p>
		            </div>

		            <div class="loc">
		              <h3><a href="<?php bloginfo('url'); ?>/locations/midtown/">Midtown &raquo;</a></h3>
		              <p>(212) 684-4914</p>
		            </div>

		            <div class="loc">
		              <h3><a href="<?php bloginfo('url'); ?>/locations/upper-east-side/">Upper East Side &raquo;</a></h3>
		              <p>(212) 486-2110</p>
		            </div>

		            <div class="loc">
		              <h3><a href="<?php bloginfo('url'); ?>/locations/midtown-east-murray-hill/">Murray Hill &raquo;</a></h3>
		              <p>(212) 883-1125</p>
		            </div>

		            <div class="loc">
		              <h3><a href="<?php bloginfo('url'); ?>/locations/midtown-west/">Midtown West &raquo;</a></h3>
		              <p>(212) 707-8730</p>
		            </div>
		            <div class="loc">
		              <h3><a href="<?php bloginfo('url'); ?>/location-boston/back-bay/">Boston Back Bay &raquo;</a></h3>
		              <p>(617) 236-1444</p>
		            </div>
		          </div>        
			  </div>
			  
		</div>
		<?php }?>




		  <div class="newsletter-wrapper">
		    <div class="newsletter">
  				<form action="http://amail.altumdesign.com/t/r/s/yhslrt/" method="post" id="mobileForm" class="mail-form">
  					<fieldset>
  						<label for="newsletter">SIGN UP FOR SPECIAL OFFERS & GET A $25 GIFT CARD!</label>
  						<div class='form-input'>
    						<input type="text" name="cm-yhslrt-yhslrt" id="yhslrt-yhslrt" placeholder="Email Address..." />
    						<input type="submit" class="deal-sign-up" value="Sign up for Deals" />
  						</div>
  						<div class="social">
  						  <a class="fb" href="https://www.facebook.com/SkinSpaNewYork" target="_blank"></a>
  						  <a class="tw" href="https://twitter.com/skinspanewyork" target="_blank"></a>
  						</div>
  					</fieldset>
  				</form>
					<div class="footer-note">
						<div class="footer-note-position">
							One per person, valid toward full priced services or packages $50 or more.
						</div>
					</div>
  		   </div>
		  </div>

			<div class="footer-main">
				<?php templatemela_footer_inside(); ?>

				<?php get_sidebar('footer'); ?>
				<div class="footer-bottom">
					<?php if(is_page(3100)){ ?>
						<div class="fifth-widget widget hb-animate-element right-to-left " style="width: 50%;">
							<h3 class="widget-title">Contact</h3>
							284 Newbury Street, 3rd Floor <br>

							Entrance on Gloucester<br>
							617-236-1444
						</div>

						<div   class="sixth-widget widget hb-animate-element left-to-right " style="width: 47%;">
							<h3 class="widget-title">Media Inquiries:</h3>
							Image Unlimited Communications<br>
							Email: news@iucboston.com<br>
							Phone: 617-236-1444
						</div><!-- #sixth .widget-area -->




					<?php } ?>


				<?php if ( is_active_sidebar( 'fifth-footer-widget-area' ) ) : ?>
				<div id="fifth" class="fifth-widget widget hb-animate-element right-to-left">
					<?php templatemela_get_widget( 'fifth-footer-widget-area' ); ?>
				</div><!-- #fifth .widget-area -->
				<?php endif; ?>

				<?php if ( is_active_sidebar( 'sixth-footer-widget-area' ) ) : ?>
				<div id="sixth" class="sixth-widget widget hb-animate-element left-to-right">
					<?php templatemela_get_widget( 'sixth-footer-widget-area' ); ?>
				</div><!-- #sixth .widget-area -->
				<?php endif; ?>
				</div>


			<div class="footer-bottom-border"><!--Start footer-bottom-border -->
				<div class="site-info-outer">
					<div class="site-info">
						Copyright &copy; <?php echo date("Y"); ?>  <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<?php //bloginfo( 'name' ); ?></a><?php echo get_option('tmoption_footer_slog');?>
						<?php do_action( 'templatemela_credits' ); ?>

					</div>
				</div><!-- .site-info -->

				<div class="footer-menu-links">
					<?php
					$tm_footer_menu=array(
					'menu' => 'TM Footer Navigation',
					'depth'=> 1,
					'echo' => false,
					'menu_class'      => 'footer-menu',
					'container'       => '',
					'container_class' => '',
					'theme_location' => 'footer-menu'
					);
					echo wp_nav_menu($tm_footer_menu);
					?>
				</div><!-- #footer-menu-links -->

				</div><!-- End footer-bottom-border-->
			</div>
		</footer><!-- #colophon -->
		<?php templatemela_footer_after(); ?>
	</div><!-- #page -->


<?php

	if((get_the_id() == '3073') || (get_the_id() == '3100')) {
		echo '<script src="https://i.simpli.fi/dpx.js?cid=25&action=100&segment=3385804&m=1"></script>';

	}

?>

<?php
if(trim(get_option('tmoption_google_analytics_id'))!=''):
?>

<?php endif; ?>
<?php templatemela_get_widget('before-end-body-widget'); ?>
<style>
<?php templatemela_custom_css(); ?>
</style>

<script src="<?php echo get_stylesheet_directory_uri() ?>/js/jquery.viewport.min.js" type="text/javascript"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/js/custom.js" type="text/javascript"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/js/featherlight/featherlight.min.js" type="text/javascript"></script>

<?php if(is_page_template('page-templates/lma.php')){?>

  <link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
  <?php wp_enqueue_script('jquery-ui-accordion', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js');
   ?>
<?php } ?>
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/custom.css" rel="stylesheet" type="text/css"/>

<?php wp_footer(); ?>

		<?php
				//TODO: Figure out how to have the appropriate label on the Special Offers Page.
				//This outputs the conversion label for the last product on the page instead of the page itself
				$custom = get_post_custom($post->ID);
				$google_conversion_label = $custom["google-conversion-label"][0];
		?>
		<script type="text/javascript">
		/* <![CDATA[ */
		var google_conversion_id = 998697320;
		var google_conversion_label = "<?php if($google_conversion_label){ echo $google_conversion_label; }else{ echo 'HHsrCKj7oAQQ6NKb3AM'; }?>";
		var google_custom_params = window.google_tag_params;
		var google_remarketing_only = true;
		/* ]]> */
		</script>
		<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
		</script>
		<noscript>
		<div style="display:inline;">
		<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/998697320/?value=0&amp;label=HHsrCKj7oAQQ6NKb3AM&amp;guid=ON&amp;script=0"/>
		</div>
		</noscript>

  <script>(function() {
    var _fbq = window._fbq || (window._fbq = []);
    if (!_fbq.loaded) {
      var fbds = document.createElement('script');
      fbds.async = true;
      fbds.src = '//connect.facebook.net/en_US/fbds.js';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(fbds, s);
      _fbq.loaded = true;
    }
  })();
  window._fbq = window._fbq || [];
  window._fbq.push(['track', '6014986379160', {'value':'0.00','currency':'USD'}]);
  </script>
  <noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6014986379160&amp;cd[value]=0.00&amp;cd[currency]=USD&amp;noscript=1" /></noscript>

  <?php if(!is_page('transaction-results')): ?>
    <script type="text/javascript">
    adroll_adv_id = "R7SCXC4MN5F3DDDXPNF5IG";
    adroll_pix_id = "TMYLFTS6LVCYFP444D3DXQ";
    (function () {
    var oldonload = window.onload;
    window.onload = function(){
       __adroll_loaded=true;
       var scr = document.createElement("script");
       var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
       scr.setAttribute('async', 'true');
       scr.type = "text/javascript";
       scr.src = host + "/j/roundtrip.js";
       ((document.getElementsByTagName('head') || [null])[0] ||
        document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
       if(oldonload){oldonload()}};
    }());
    </script>
  <?php endif; ?>

  <script type="text/javascript">
    rlrctTRKDOM="rtsys.rtrk.com";
    (function() {
    var rct_load = document.createElement("script");
    rct_load.type = "text/javascript";
    rct_load.src = document.location.protocol+"//"+rlrctTRKDOM+"/rct_lct/js/rlrct1.js";
    (document.getElementsByTagName("head")[0] || document.getElementsByTagName("body")[0]).appendChild(rct_load); }
    )();
  </script>

	<?php if(is_page(array( 1613,  147, 148,  'new-customer-offers' )) || is_single( array(1612,148) ) || is_tax('wpsc_product_category','new-customer-offers') ){ ?>
	<!-- Facebook Conversion Code for Leads - A180551_SkinSpaNewYork_US 1 -->
	<script>(function() {
	  var _fbq = window._fbq || (window._fbq = []);
	  if (!_fbq.loaded) {
	    var fbds = document.createElement('script');
	    fbds.async = true;
	    fbds.src = '//connect.facebook.net/en_US/fbds.js';
	    var s = document.getElementsByTagName('script')[0];
	    s.parentNode.insertBefore(fbds, s);
	    _fbq.loaded = true;
	  }
	})();
	window._fbq = window._fbq || [];
	window._fbq.push(['track', '6042866420241', {'value':'0.00','currency':'USD'}]);
	</script>
	<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6042866420241&amp;cd[value]=0.00&amp;cd[currency]=USD&amp;noscript=1" /></noscript>
	<?php } ?>

	<script type="text/javascript">
rlrctTRKDOM="rtsys.rtrk.com";
(function() {
var rct_load = document.createElement("script");
rct_load.type = "text/javascript";
rct_load.src = document.location.protocol+"//"+rlrctTRKDOM+"/rct_lct/js/rlrct1.js";
(document.getElementsByTagName("head")[0] || document.getElementsByTagName("body")[0]).appendChild(rct_load); }
)(); </script>




</body>
  <script src="https://i.simpli.fi/dpx.js?cid=25&action=100&segment=3385804&m=1"></script>
</html>
