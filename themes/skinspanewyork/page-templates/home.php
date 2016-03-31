<?php
/* Template Name: Home Page */ 
?>
<?php get_header(); ?>
<div class="full-width">

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
		<div id="homepage">
			<div class="cmsblock_content">  
				<?php templatemela_get_widget('homepage-services-area');?>      
		  	</div>
		
			<div class="home_product">
			<?php if ( in_array( 'wp-e-commerce/wp-shopping-cart.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) : ?>
			<div id="horizontalTab">
					  <ul class="resp-tabs-list">
					  	<?php if ( is_active_sidebar( 'home-featured-products-widget' ) ) : ?>	
						  <li><div class="special-offers-title">Today's Special Offers</div><div class="extra"></div></li>
						 <?php endif; ?>							  
					  </ul>	
					  <div class="resp-tabs-container">	 
					  <?php if ( is_active_sidebar( 'home-featured-products-widget' ) ) : ?>							
								<?php if ( in_array( 'wp-e-commerce/wp-shopping-cart.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) : ?>		
							<div id="featured" class="home-products block products_block">
								<div class="customNavigation">
									<a class="btn prev">&nbsp;</a>
									<a class="btn next">&nbsp;</a>
								</div>				
												
									<?php templatemela_get_widget('home-featured-products-widget'); ?>
									
								<span class="featured_default_width" style="display:none; visibility:hidden"></span>		
							</div>
							<?php endif; ?>	
							<?php endif; ?>	
							
					</div>
			</div>
			
			<?php endif; ?>	
			</div>
			
			<?php if ( function_exists('is_sidebar_active') && is_sidebar_active('homepage-blog') ) : ?>
			<div class="homepage_blog">
				<?php templatemela_get_widget('homepage-blog');?>
			</div>
			<?php endif; ?>
			
			
<!--
			<div class="homepage_parralex" data-speed="10" data-type="background">
			
				<div class="homepage_parralex_inner">
				<?php if ( is_active_sidebar( 'home-offer-widget' ) ): ?>	
					<?php templatemela_get_widget('home-offer-widget');?>
				<?php endif; ?>
				
					<?php if ( is_active_sidebar( 'home-offer-slider-widget' ) ): ?>	
					<div class="offer_slider hb-animate-element left-to-right">
						<div class="offer_slider_inner">
							<div class="title"><?php echo get_option("tmoption_offer_title"); ?></div>
							<div class="flexslider">
								<ul class="slides">
									<?php templatemela_get_widget('home-offer-slider-widget');?>
								</ul>
							</div>
						</div>
					</div>
					<?php endif; ?>
				</div>
			</div>
-->

			<div class="full-width-strip">
			  <div class="programs">
  			  <div class="dark-shadow"></div>
			    <div class="program">
			      <h3>Secret Shopper</h3>
			      <p>Get 50% Off of your service during your “Secret Shop”</p>
			      <a href="<?php bloginfo('url')?>/secret-shopper/" class="read-more">Read More &raquo;</a>
			    </div>
			    <div class="separator-line"></div>
			    <div class="program">
			      <h3>Corporate Relations</h3>
			      <p>Interested in adding Skin Spa New York to your employee benefits?</p>
			      <a href="<?php bloginfo('url')?>/corporate-relations/" class="read-more">Read More &raquo;</a>
			    </div>
			    <div class="separator-line"></div>
			    <div class="program">
			      <h3>Refer a Friend</h3>
			      <p>Get a coupon for each friend that buys a service!</p>
			      <a href="<?php bloginfo('url')?>/refer-a-friend/" class="read-more">Read More &raquo;</a>
			    </div>
			    
			  </div>
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

			
			
			<?php /*?><div class="home_testimonial">
				<?php templatemela_get_widget('home-testimonial-widget');?>
			</div><?php */?>
			<?php if ( is_active_sidebar( 'home-testimonial-widget' ) ): ?>
			<div class="home_testimonial">
			<div id="testimonial" class="testimonial block products_block">	
			<h2 class="testimonial_title"><?php echo get_option("tmoption_testimonial_title"); ?></h2>
			<div class="trustpilot-widget" data-locale="en-US" data-template-id="53aa8912dec7e10d38f59f36" data-businessunit-id="562f7a4d0000ff000584d15d" data-style-height="130px" data-style-width="100%" data-theme="light" data-stars="4,5">
    <a href="https://www.trustpilot.com/review/skinspanewyork.com" target="_blank">Trustpilot</a>
</div>
	<!--
		<div class="customNavigation">
				<a class="btn prev"> </a>
				<a class="btn next"> </a>
			</div>	
				<div class="home_testimonial_product products">
				<ul class="products">					
-->
					<?php //templatemela_get_widget('home-testimonial-widget');?>
<!--
				</ul>	
				</div>
				<span class="testimonial_default_width" style="display:none; visibility:hidden"></span>		
			</div>
-->
			</div>
			<?php endif; ?>
			
			<?php if ( is_active_sidebar( 'logo-partner-widget' ) ): ?>
			<div id="brand" class="home-logo-slider block products_block">	
			<h2 class="brand_title"><?php echo get_option("tmoption_brandlogo_title"); ?></h2>
			<div class="customNavigation">
				<a class="btn prev"> </a>
				<a class="btn next"> </a>
			</div>	
				<div class="brand-logo products">
				<ul class="products">					
					<?php templatemela_get_widget('logo-partner-widget');?>
				</ul>	
				</div>
				<span class="brand_default_width" style="display:none; visibility:hidden"></span>		
			</div>
			<?php endif; ?>
		</div><!-- #homepage -->
		</div><!-- #content -->
	</div><!-- #primary -->
	
</div>

<?php get_footer(); ?>