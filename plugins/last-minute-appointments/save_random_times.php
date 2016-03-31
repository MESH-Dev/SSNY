<?php
/*
This is meant to be run by a cronjob on every Monday and Thursday in order to randomize a set of times and store them. We are generating 2 - 4 time slots for each treatment category and then all of that again four times (day 1 - 4) so that they're not the same across days. We are then serializing all of that and storing it in a location's meta data. Each location gets a different set of available times.
*/


//Load WP Core
require('../../../core/wp-load.php');

//Loop through locations


 	$args = array(
  			'post_type' => 'locations',
			'posts_per_page' => -1,
			'orderby' => 'menu_order',
			'order' => 'ASC'
	);
	$locations_query = new WP_Query( $args );
	
	query_posts(); while ($locations_query->have_posts()): $locations_query->the_post();
		$random_times = array();
		$days = array('day1','day2','day3','day4');
		
		$terms = get_the_terms( $post->ID, 'lma_treatment_categories' );
						
		if ( $terms && ! is_wp_error( $terms ) ){
		
			foreach($days as $day){

				foreach ( $terms as $term ) {
					//Get list of random times and put them in an array with keys based on the treatment category
					$random_times_by_term[$term->term_id] = choose_random_times(build_available_times());
				}
				
				$random_times[$day] = $random_times_by_term;
			}
			
		}
				
		//Serialize the Array
		$serialized_times = serialize($random_times);
		echo $serialized_times."<br /><br />";
		
		//Save the Array
		$success = update_post_meta($post->ID, "available_times", $serialized_times);
				
	endwhile;


?>