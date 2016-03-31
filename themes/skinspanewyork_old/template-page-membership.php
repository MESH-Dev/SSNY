<?php 
/**
Template Name:Membership
 *
 * Template for the feedback page of the site
 *
 */
 ?>
 
<?php get_header() ?>
<script src="//unslider.com/unslider.min.js"></script>
<script>
jQuery(function() {
    jQuery('.slideshow').unslider();
});
</script>
</div><!-- .top-block -->

<div id="content">
	<div class="content-shadow"></div>

	<?php the_post() ?>
				<div id="post-<?php the_ID(); ?>" class="<?php thematic_post_class() ?>">
	    			<h2 class="entry-title"><?php the_title(); ?></h2>
					<div class="entry-content">
          	<?php the_content() ?>

            <div class="product">
              <div class="slideshow">
                <ul>
                 <li><img src="<?php echo WP_CONTENT_URL;?>/themes/skinspanewyork/images/membership3.jpg" alt="Membership" /></li>
                  <li><img src="<?php echo WP_CONTENT_URL;?>/themes/skinspanewyork/images/membership2.jpg" alt="Membership" /></li>
                  <li><img src="<?php echo WP_CONTENT_URL;?>/themes/skinspanewyork/images/membership1.jpg" alt="Membership" /></li>
                </ul>
              </div>
              <div class="description">
                <h1 class="high-maintenance">HIGH MAINTENANCE?</h1>
                
                <p class="new"><b>NEW!</b> SKIN SPA MEMBERSHIP</p>
                <p class="membership-text">Join by July 31st and get the first <br /> <b>THREE</b> months for <b>ONLY</b>...</p>
                
                <div class="prices">
                  <p class="price">$49 Each!<br />
                    <span class="regular-price">(reg $60)</span>
                  </p>
                </div>


                <form class='product_form' enctype="multipart/form-data" action="<?php echo get_option('shopping_cart_url'); ?>" method="post" name="1" id="product_<?php echo wpsc_the_product_id(); ?>">
                  <?php echo wpsc_add_to_cart_button(MEMBERSHIP_PRODUCT_ID); ?>
                </form>
              
              </div>
            </div>      
          		
          	<?php edit_post_link(__('Edit', 'thematic'),'<span class="edit-link">','</span>') ?>
          	
					</div>
				</div><!-- .post -->

  <div class="membership-more-info">
    <div class="what-you-get">
      <h2 class="header">what you get.</h2>
      <ul class="what-you-get-list">
      <li>First Membership Treatment* FREE Each Month</li>
      <li>Any Additional Membership Treatment each month only $50</li>
      <li>25% Off any Additional Services</li>
      <li>10% Off all Product Purchases</li>

      <p class="plus">PLUS...</p>
      
      <li>Your 10th Membership Treatment is FREE!</li>
      <li>Each Month you are a Member you get a $10 Credit to use toward ANY Service. Redeemable after 6 months!</li>
      <li>A FREE Membership Treatment on your Birthday!</li>
      <li>You never lose a treatment . . . . any first Membership Treatment not used in a Month can be used in future months</li>
      <li>Membership may be cancelled by the 20th of the month</li>
      <li>Bring a Friend who is new to SKIN SPA and they get 30% OFF their first treatment</li>
      </ul>
    </div>
    <div class="membership-treatments">
      <h2 class="header">membership treatments.</h2>
      <ul>
        <li>Customized Facial</li>
        <li>Microdermabrasion Treatment</li>
        <li>Power Peel</li>
        <li>Swedish Massage (50 Minutes)</li>
        <li>Deep Tissue Massage (50 Minutes)</li>
        <li>Brazilian Wax + Choice of Upper Lip, Chin or Underarm Wax</li>
      </ul>
      
      <h3>TERMS AND RESTRICTIONS:</h3>
      <ul style="list-style:none;">
        <li>Membership Fee billed on First of Each Month</li>
        <li>Unused First Service Can be Rolled Over to Future Months</li>
        <li>Cancelable at any time before the 20th of Each Month</li>
        <li>Can’t be combined with any other Offers</li> 
        <li>Non-transferrable</li>
        <li>No cash value</li>
        <li>Members are encouraged to tip on the full price of services</li>
      </ul>
    </div>

  </div>				
</div>





<?php get_footer() ?>