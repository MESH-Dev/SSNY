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
						  <li><div><?php echo get_option("tmoption_featured_title"); ?></div><div class="extra"></div></li>
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
			
			
			<?php /*?><div class="home_testimonial">
				<?php templatemela_get_widget('home-testimonial-widget');?>
			</div><?php */?>
			<?php if ( is_active_sidebar( 'home-testimonial-widget' ) ): ?>
			<div class="home_testimonial">
			<div id="testimonial" class="testimonial block products_block">	
			<h2 class="testimonial_title"><?php echo get_option("tmoption_testimonial_title"); ?></h2>
			<div class="customNavigation">
				<a class="btn prev"> </a>
				<a class="btn next"> </a>
			</div>	
				<div class="home_testimonial_product products">
				<ul class="products">					
					<?php templatemela_get_widget('home-testimonial-widget');?>
				</ul>	
				</div>
				<span class="testimonial_default_width" style="display:none; visibility:hidden"></span>		
			</div>
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