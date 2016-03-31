<?php 
/**
Template Name:Locations
 *
 * Template for the feedback page of the site
 *
 */
 ?>
<?php get_header() ?>



</div><!-- .top-block -->

<div id="content">
	<div class="content-shadow"></div>

	<?php the_post() ?>
				<div id="post-<?php the_ID(); ?>" class="<?php thematic_post_class() ?>">
	    			<h2 class="entry-title"><?php the_title(); ?></h2>
					<div class="entry-content">
	<?php the_content() ?>
	
<ul class="location-list">
					
					
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
					
						<li>
							<a class="location_block" href="<?php the_permalink(); ?>">
								<?php if(has_post_thumbnail()){
									the_post_thumbnail('',array('class'=>'img'));
									}
								?>
							
								<div class="info">
									<h2><?php the_title(); ?></h2>
									<address>
										<span><?php echo get_post_meta($post->ID,'address1',true); ?></span>
										<span><?php echo get_post_meta($post->ID,'address2',true); ?></span>
										<span><?php echo get_post_meta($post->ID,'phone',true); ?></span>
									</address>
								</div>
							</a>
						</li>
						
						
					<?php endwhile; ?>
						<div class="clear"></div>
						
					</ul>
		
	<?php edit_post_link(__('Edit', 'thematic'),'<span class="edit-link">','</span>') ?>
	
					</div>
				</div><!-- .post -->

</div>

<?php get_footer() ?>