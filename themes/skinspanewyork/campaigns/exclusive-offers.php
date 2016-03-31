<?php 
/**
Template Name:Landing: Exclusive Offers
 *
 * Template for the Exclusive Offers Campaigns of the site
 *
 */
get_header(); ?>
<div class="main">	
  <div class="content-main">
    <div class="content-wrapper">
			<div class="top-block">
				<a id="offer-image" class="lp-offer-image" href="#sales">
  				<?php 
  				if ( has_post_thumbnail() ){
    				the_post_thumbnail(array('960','472')); 
    			}
  				?>
				</a>
				
				<a name="sales"></a>
				
				<?php include(WP_CONTENT_DIR."/themes/skinspanewyork/campaigns/partials/_lp_offers.php") ?>					
			</div><!-- .top-block -->
    </div>
  </div>
</div>

<?php get_footer() ?>