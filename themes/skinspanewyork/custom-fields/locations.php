<?php

//Defines Custom Fields in Locations Post-type
	add_action("admin_init", "add_location");
	add_action('save_post', 'update_location_options');
	function add_location(){
		add_meta_box("location_details", "Location Details", "location_options", "locations", "normal", "high");
		add_meta_box("location_more_details", "Additional Details", "location_settings", "locations", "normal", "high");
		add_meta_box("location_details", "Location Details", "location_options", "location-boston", "normal", "high");
		add_meta_box("location_more_details", "Additional Details", "location_settings", "location-boston", "normal", "high");
	}
	function location_options(){
		global $post;
		$custom = get_post_custom($post->ID);
		$address1 = $custom["address1"][0];
		$address2 = $custom["address2"][0];
		$phone = $custom["phone"][0];
		
		$sun_open = $custom["sun-open"][0];
		$mon_open = $custom["mon-open"][0];
		$tues_open = $custom["tues-open"][0];		
		$wed_open = $custom["wed-open"][0];
		$thurs_open = $custom["thurs-open"][0];
		$fri_open = $custom["fri-open"][0];
		$sat_open = $custom["sat-open"][0];

		$sunday_openingtime = $custom["sunday-openingtime"][0];
		$monday_openingtime = $custom["monday-openingtime"][0];
		$tuesday_openingtime = $custom["tuesday-openingtime"][0];		
		$wednesday_openingtime = $custom["wednesday-openingtime"][0];
		$thursday_openingtime = $custom["thursday-openingtime"][0];
		$friday_openingtime = $custom["friday-openingtime"][0];
		$saturday_openingtime = $custom["saturday-openingtime"][0];

		$sunday_closingtime = $custom["sunday-closingtime"][0];
		$monday_closingtime = $custom["monday-closingtime"][0];
		$tuesday_closingtime = $custom["tuesday-closingtime"][0];		
		$wednesday_closingtime = $custom["wednesday-closingtime"][0];
		$thursday_closingtime = $custom["thursday-closingtime"][0];
		$friday_closingtime = $custom["friday-closingtime"][0];
		$saturday_closingtime = $custom["saturday-closingtime"][0];
		
		$spabooker_url = $custom["spabooker-url"][0];
		$mobile_url = $custom["mobile-url"][0];
		

?>		

<div id="location-options">
		<p><label>Address 1:</label><input name="address1" value="<?php echo $address1; ?>" /></p>
		<p><label>Address 2:</label><input name="address2" value="<?php echo $address2; ?>" /></p>		
		<p><label>Phone:</label><input name="phone" value="<?php echo $phone; ?>" /></p>	
		<h3>Hours:</h3>
		
		<table style="border:1px solid #dcdcdc; margin-top:8px; background-color:#fbfbfb;" cellpadding="10" >
			<tr>
				<td><strong>Open?</strong></td>
				<td><strong>Day of Week</strong></td>
				<td><strong>Opening - Closing Times</strong></td>
			</tr>
			<tr>
				<td><input type="checkbox" name="sun-open" <?php if($sun_open == 'on'){echo "checked='checked'";} ?>></td>
				<td>Sunday</td>
				<td><?php hours_dropdown('sunday', $sunday_openingtime, $sunday_closingtime); ?></td>
			</tr>
			<tr>
				<td><input type="checkbox" name="mon-open" <?php if($mon_open == 'on'){echo "checked='checked'";} ?>></td>
				<td>Monday</td>
				<td><?php hours_dropdown('monday', $monday_openingtime, $monday_closingtime); ?></td>
			</tr>
			<tr>
				<td><input type="checkbox" name="tues-open" <?php if($tues_open == 'on'){echo "checked='checked'";} ?>></td>
				<td>Tuesday</td>
				<td><?php hours_dropdown('tuesday', $tuesday_openingtime, $tuesday_closingtime); ?></td>
			</tr>
			<tr>
				<td><input type="checkbox" name="wed-open" <?php if($wed_open == 'on'){echo "checked='checked'";} ?>></td>
				<td>Wednesday</td>
				<td><?php hours_dropdown('wednesday', $wednesday_openingtime, $wednesday_closingtime); ?></td>
			</tr>
			<tr>
				<td><input type="checkbox" name="thurs-open" <?php if($thurs_open == 'on'){echo "checked='checked'";} ?>></td>
				<td>Thursday</td>
				<td><?php hours_dropdown('thursday', $thursday_openingtime, $thursday_closingtime); ?></td>
			</tr>
			<tr>
				<td><input type="checkbox" name="fri-open" <?php if($fri_open == 'on'){echo "checked='checked'";} ?>></td>
				<td>Friday</td>
				<td><?php hours_dropdown('friday', $friday_openingtime, $friday_closingtime); ?></td>
			</tr>
			<tr>
				<td><input type="checkbox" name="sat-open" <?php if($sat_open == 'on'){echo "checked='checked'";} ?>></td>
				<td>Saturday</td>
				<td><?php hours_dropdown('saturday', $saturday_openingtime, $saturday_closingtime); ?></td>
			</tr>
		
		</table>
		
		<p><label>Spa-Booker URL:</label><input name="spabooker-url" value="<?php echo $spabooker_url; ?>" /></p>
		<p><label>Mobile URL:</label><input name="mobile-url" value="<?php echo $mobile_url; ?>" /></p>
				
		<p style="color:red">Dont forget to add a photo as a featured image</p>	
	</div><!--end location-options-->   
	
<?php
		}
		
		
	function location_settings(){
		global $post;
		$custom = get_post_custom($post->ID);
		$ip_address = $custom["ip-address"][0];
		$spabooker_location_id = $custom["spabooker-location-id"][0];
		?>
		
		<div id="location-settings">
		<p><label>SpaBooker Location ID:</label><input name="spabooker-location-id" value="<?php echo $spabooker_location_id; ?>" /></p>
		<p><label>IP Address:</label><input name="ip-address" value="<?php echo $ip_address; ?>" /></p>	
		
<?php
	}	
		
	function update_location_options(){
		if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ){
		//Do Nothing
		}else{

		global $post;
			if (get_post_type($post->ID) == 'locations' || get_post_type($post->ID) == 'location-boston'){
				update_post_meta($post->ID, "address1", $_POST["address1"]);
				update_post_meta($post->ID, "address2", $_POST["address2"]);
				update_post_meta($post->ID, "phone", $_POST["phone"]);
				
				update_post_meta($post->ID, "sun-open", $_POST["sun-open"]);
				update_post_meta($post->ID, "mon-open", $_POST["mon-open"]);
				update_post_meta($post->ID, "tues-open", $_POST["tues-open"]);
				update_post_meta($post->ID, "wed-open", $_POST["wed-open"]);
				update_post_meta($post->ID, "thurs-open", $_POST["thurs-open"]);
				update_post_meta($post->ID, "fri-open", $_POST["fri-open"]);
				update_post_meta($post->ID, "sat-open", $_POST["sat-open"]);
				
				update_post_meta($post->ID, "sunday-openingtime", $_POST["sunday-openingtime"]);
				update_post_meta($post->ID, "monday-openingtime", $_POST["monday-openingtime"]);
				update_post_meta($post->ID, "tuesday-openingtime", $_POST["tuesday-openingtime"]);
				update_post_meta($post->ID, "wednesday-openingtime", $_POST["wednesday-openingtime"]);
				update_post_meta($post->ID, "thursday-openingtime", $_POST["thursday-openingtime"]);
				update_post_meta($post->ID, "friday-openingtime", $_POST["friday-openingtime"]);
				update_post_meta($post->ID, "saturday-openingtime", $_POST["saturday-openingtime"]);				

				update_post_meta($post->ID, "sunday-closingtime", $_POST["sunday-closingtime"]);
				update_post_meta($post->ID, "monday-closingtime", $_POST["monday-closingtime"]);
				update_post_meta($post->ID, "tuesday-closingtime", $_POST["tuesday-closingtime"]);
				update_post_meta($post->ID, "wednesday-closingtime", $_POST["wednesday-closingtime"]);
				update_post_meta($post->ID, "thursday-closingtime", $_POST["thursday-closingtime"]);
				update_post_meta($post->ID, "friday-closingtime", $_POST["friday-closingtime"]);
				update_post_meta($post->ID, "saturday-closingtime", $_POST["saturday-closingtime"]);
															}
				update_post_meta($post->ID, "spabooker-url", $_POST["spabooker-url"]);
				update_post_meta($post->ID, "mobile-url", $_POST["mobile-url"]);
				
				update_post_meta($post->ID, "ip-address", $_POST["ip-address"]);
				update_post_meta($post->ID, "spabooker-location-id", $_POST["spabooker-location-id"]);
		}
	}
	

	
//End Custom Fields in Locations Post-type


?>

<?php
//A function to output a dropdown for hours of operation
function hours_dropdown($dayofweek, $openingtime, $closingtime){
	
	echo "<select name='$dayofweek-openingtime'>";
		hours_dropdown_options($openingtime);
	echo "</select>";
	echo "&nbsp;&nbsp;-&nbsp;&nbsp;";
	echo "<select name='$dayofweek-closingtime'>";
		hours_dropdown_options($closingtime);
	echo "</select>";

}

function hours_dropdown_options($selectedtime){
		echo "<option value='$selectedtime'>$selectedtime</option>"; 
		echo "<option value='12:00am'>12:00am</option>";
		echo "<option value='12:30am'>12:30am</option>";
		echo "<option value='1:00am'>1:00am</option>";
		echo "<option value='1:30am'>1:30am</option>";
		echo "<option value='2:00am'>2:00am</option>";	
		echo "<option value='2:30am'>2:30am</option>";	
		echo "<option value='3:00am'>3:00am</option>";
		echo "<option value='3:30am'>3:30am</option>";
		echo "<option value='4:00am'>4:00am</option>";
		echo "<option value='4:30am'>4:30am</option>";
		echo "<option value='5:00am'>5:00am</option>";	
		echo "<option value='5:30am'>5:30am</option>";	
		echo "<option value='6:00am'>6:00am</option>";
		echo "<option value='6:30am'>6:30am</option>";
		echo "<option value='7:00am'>7:00am</option>";	
		echo "<option value='7:30am'>7:30am</option>";	
		echo "<option value='8:00am'>8:00am</option>";
		echo "<option value='8:30am'>8:30am</option>";
		echo "<option value='9:00am'>9:00am</option>";
		echo "<option value='9:30am'>9:30am</option>";
		echo "<option value='10:00am'>10:00am</option>";	
		echo "<option value='10:30am'>10:30am</option>";	
		echo "<option value='11:00am'>11:00am</option>";	
		echo "<option value='11:30am'>11:30am</option>";
		echo "<option value='12:00pm'>12:00pm</option>";
		echo "<option value='12:30pm'>12:30pm</option>";
		echo "<option value='1:00pm'>1:00pm</option>";
		echo "<option value='1:30pm'>1:30pm</option>";
		echo "<option value='2:00pm'>2:00pm</option>";	
		echo "<option value='2:30pm'>2:30pm</option>";	
		echo "<option value='3:00pm'>3:00pm</option>";
		echo "<option value='3:30pm'>3:30pm</option>";
		echo "<option value='4:00pm'>4:00pm</option>";
		echo "<option value='4:30pm'>4:30pm</option>";
		echo "<option value='5:00pm'>5:00pm</option>";	
		echo "<option value='5:30pm'>5:30pm</option>";	
		echo "<option value='6:00pm'>6:00pm</option>";
		echo "<option value='6:30pm'>6:30pm</option>";
		echo "<option value='7:00pm'>7:00pm</option>";	
		echo "<option value='7:30pm'>7:30pm</option>";	
		echo "<option value='8:00pm'>8:00pm</option>";
		echo "<option value='8:30pm'>8:30pm</option>";
		echo "<option value='9:00pm'>9:00pm</option>";
		echo "<option value='9:30pm'>9:30pm</option>";
		echo "<option value='10:00pm'>10:00pm</option>";	
		echo "<option value='10:30pm'>10:30pm</option>";	
		echo "<option value='11:00pm'>11:00pm</option>";	
		echo "<option value='11:30pm'>11:30pm</option>";
}

?>
<?php
function print_hours($open, $openingtime, $closingtime){
	if ($open == 'on'){
		echo $openingtime." - ".$closingtime;
	}else{
		echo "Closed";
	}
}
?>