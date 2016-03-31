<?php
/* Template Name: Last Minute Appointments */ 
get_header(); ?>

		<script type="text/javascript" src="<?php echo WP_CONTENT_URL; ?>/themes/skinspanewyork/js/lma.js"></script>


	<?php if (get_option('tmoption_layout')=='3' || get_option('tmoption_layout')=='4' || get_option('tmoption_layout')=='5' ) { ?>	
		<?php get_sidebar('secondary'); ?>
	<?php } ?>
<div class="overlay-main">	
  <div class="overlay-content-main">
    <div class="content-wrapper">
    	<div id="primary" class="content-area">
    		<?php templatemela_breadcrumbs(); ?>
    		<div id="content" class="site-content" role="main">
    			<a name="lma"></a>
	    			
					<div class="entry-content">
							
						<h1>LAST MINUTE APPOINTMENTS!</h1>
						
						<p style="font-size:14px;">Available Last Minute Appointment times may change based on availability. <br />Please call to book a time listed or to check other available times.</p>						
						
						<div id="accordion">
						
							<?php
							  	$args = array(
							  			'post_type' => 'locations',
										'posts_per_page' => -1,
										'orderby' => 'menu_order',
										'order' => 'ASC'
								);
								$locations_query = new WP_Query( $args );
							?>
	
							<?php while ($locations_query->have_posts()): $locations_query->the_post(); ?>					
							
								<?php 
								$has_terms = get_the_terms($post->ID, 'lma_treatment_categories');
								
								if($has_terms): ?> 
								
								<h3><a href="#"><?php the_title(); ?> - <?php echo get_post_meta($post->ID,'phone',true); ?></a></h3>
								<div>
									<div class="accordion">
										<?php echo print_days(); ?>
							    	</div><!-- accordion -->
								</div>
								<?php endif; ?>
							<?php endwhile; ?>
						    
						</div><!-- #accordion -->
				
					</div>

    
    		</div><!-- #content -->
    	</div><!-- #primary -->
    </div>
  </div>
</div>
<?php get_footer(); ?>