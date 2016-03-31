 <?php 
/**
Template Name:Last Minute Appointments
 *
 * Template for the last minute appointments page of the site
 *
 */
 ?>
<?php get_header() ?>

</div><!-- .top-block -->

<div id="content">
	<div class="content-shadow"></div>

				<div id="post" class="">
					<a name="lma"></a>
	    			
					<div class="entry-content">
							
						<h2>LAST MINUTE APPOINTMENTS!</h2>
						
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
	
							<?php query_posts(); while ($locations_query->have_posts()): $locations_query->the_post(); ?>					
							
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
					
				</div><!-- .post -->

</div>

		</div><!-- #main -->
	</div><!-- #wrapper -->

	<div class="clear"></div>
f
				
<?php get_footer() ?>