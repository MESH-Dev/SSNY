<?php
	/*
	**
	** Functions below are for LMA Functionality **
	**
	*/
?>

<?php

function print_days(){

	$today = date('l');
	$four_days_ago = strtotime("-4 days");
	
	$target1 = "Monday";
	$target2 = "Friday";
	
	$monday = strtotime("next $target1", $four_days_ago);
	$tuesday = strtotime("+1 day", $monday);
	$wednesday = strtotime("+2 days", $monday);
	$thursday = strtotime("+3 days", $monday);
		
	$friday = strtotime("next $target2", $four_days_ago);
	$saturday = strtotime("+1 days", $friday);
	$sunday = strtotime("+2 days", $friday);

	switch ($today){
		
		case "Monday":
			$r .= print_day(date('l - F j, Y', $monday),'day1');
		case "Tuesday":
			$r .= print_day(date('l - F j, Y', $tuesday),'day2');
		case "Wednesday":
			$r .= print_day(date('l - F j, Y', $wednesday),'day3');
			$r .= print_day(date('l - F j, Y', $thursday),'day4');
									
			break;
			
		case "Thursday":
			$r .= print_day(date('l - F j, Y', $thursday),'day4');	
		case "Friday":
			$r .= print_day(date('l - F j, Y', $friday),'day1');
		case "Saturday":
			$r .= print_day(date('l - F j, Y', $saturday),'day2');
		case "Sunday":
			$r .= print_day(date('l - F j, Y', $sunday),'day3');
			$r .= print_day(date('l - F j, Y', $monday),'day4');
								
			break;
	}
	
	return ($r);
	
}

function print_day($date,$day){
	global $post;
	
	$r = "<h3>$date</h3>";
	$r .= "<div>";
		$r .= "<div class='accordion'>";
			//Make this a loop through all of the selected treatments for this location
			$terms = get_the_terms( $post->ID, 'lma_treatment_categories' );
						
			if ( $terms && ! is_wp_error( $terms ) ){
			
				foreach ( $terms as $term ) {
				$r .= print_treatment_category($term->term_id, $day);
				}

			}
		$r .= "</div>";
	$r .= "</div>";
	
	return ($r);
}

function print_treatment_category($treatment_category, $day){
	//Get Treatment Name from Treatment Category ID
	$treatment_category_obj = get_term_by('id', $treatment_category, 'lma_treatment_categories');

	$r = "<h3>".$treatment_category_obj->name."</h3>";
	$r .= "<div>";
		$r .= "<table>";
			$r .= print_available_times($treatment_category, $day);
			$r .= print_table_header();
			$r .= print_treatments($treatment_category);
	
		$r .= "</table>";
	$r .= "</div>";
	
	return($r);
}

function print_table_header(){
	$r = "<tr>";
		$r .= "<td class='header'>Treatment:</td>";
		$r .= "<td class='header'>Regular Price:</td>";
		$r .= "<td class='header'>Special Price:</td>";
	$r .= "</tr>";
		
	return($r);
}

function print_available_times($treatment_category, $day){
	global $post;
	
	$r = "<tr><td class='header'>Available Times</td></tr>";
	$r .= "<tr>";
		$r .= "<td>";
			$r .= "<ul class='available-times'>";
			
				$serialized_times_by_days = get_post_meta($post->ID, "available_times");
				$unserialized_times_by_days = unserialize($serialized_times_by_days[0]);
				
				foreach ($unserialized_times_by_days as $stored_day => $times_by_terms){
					if ($stored_day == $day){
						foreach ($times_by_terms as $term => $times){
							if ($term == $treatment_category){
								foreach ($times as $time){
								$r .= "<li>".$time."</li>";							
								}
							}	
						}
					}
				}
			$r .= "<div class='clear'></div>";
			$r .= "</ul>";
		$r .= "</td>";
		$r .= "<td></td>";
		$r .= "<td></td>";
	$r .= "</tr>";

	return($r);
}

function print_treatments($treatment_category_id){

			$r .= "<tr>";
				$r .= "<td>"."test"."</td>";
				$r .= "<td>$".$treatment_category_id."</td>";
				$r .= "<td>$".'temp'."</td>";		
			$r .= "</tr>";


  	$args = array(
  			'post_type' => 'wpsc-product',
  			'numberposts' => -1,
			'order_by' => 'menu_order',
			'order' => 'ASC',
			'tax_query' => array(
					array(
						'taxonomy' => 'lma_treatment_categories',
						'field' => 'id',
						'terms' => $treatment_category_id
					)
				)
	);
	$posts = get_posts( $args );
	
	global $post;
	$tmp_post = $post;
	
	$r = '';

	foreach( $posts as $post ) : setup_postdata($post);	
			$r .= "<tr class='treatment'>";
				$r .= "<td style='width:50%;'>".get_the_title()."</td>";
				$r .= "<td style='width:30%;'>".wpsc_product_normal_price(true)."</td>";
				$r .= "<td style='width:19%;'>".wpsc_the_product_price(true)."</td>";		
			$r .= "</tr>";
			
	endforeach;
	$post = $tmp_post;

	return($r);
}

function build_available_times(){

	$times = array('9:00am','9:15am','9:30am','9:45am','10:00am','10:15am','10:30am','10:45am','11:00am','11:15am','11:30am','11:45am','12:00pm','12:15pm','12:30pm','12:45pm','1:00pm','1:15pm','1:30pm','1:45pm','2:00pm','2:15pm','2:30pm','2:45pm','3:00pm','3:15pm','3:30pm','3:45pm','4:00pm','4:15pm','4:30pm','4:45pm','5:00pm','5:15pm','5:30pm','5:45pm'
	);
	
	return ($times);

}

function choose_random_times($times){
	
	$number_of_slots = rand(2,4);	
	$random_keys = array_rand($times, $number_of_slots);
	
	$r = array();
    foreach($random_keys as $random_key){
        $r[] = $times[$random_key];
    }
	
	return ($r);
}

?>