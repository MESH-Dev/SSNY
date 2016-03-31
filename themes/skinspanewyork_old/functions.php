<?php
function my_admin_theme_style() {
    wp_enqueue_style('my-admin-theme', get_stylesheet_directory_uri().'/styles/sksp-wp-admin.css');
}
add_action('admin_enqueue_scripts', 'my_admin_theme_style');
add_action('login_enqueue_scripts', 'my_admin_theme_style');

?>

<?php
	include("includes/homepage_setting.php");
	include("includes/custom_fields_wpsc_product.php");
?>

<?php

//Defines Custom Fields in Reviews Post-type
	add_action("admin_init", "add_review");
	add_action('save_post', 'update_review_options');
	function add_review(){
		add_meta_box("review_details", "Review Details", "review_options", "reviews", "normal", "high");
	}
	function review_options(){
		global $post;
		$custom = get_post_custom($post->ID);
		$rating = $custom["rating"][0];
?>

	<div id="review-options">
		<p>
			<label>Rating:</label>
			<select name="rating" value="<?php echo $rating; ?>">
				<option value="5">5 Stars!</option>
				<option value="4">4 Stars</option>
			</select>
		</p>
	</div><!--end review-options-->   

<?php
	}
	function update_review_options(){
		if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ){
		//Do Nothing
		}else{
			global $post;
			if (get_post_type($post->ID) == 'reviews'){
				update_post_meta($post->ID, "rating", $_POST["rating"]);
			}
		}
	}
//End Custom Fields in Reviews Post-type


?>

<?php

//Defines Custom Fields in Team Members Post-type
	add_action("admin_init", "add_teammember");
	add_action('save_post', 'update_teammember_options');
	function add_teammember(){
		add_meta_box("teammember_details", "Team Member Details", "teammember_options", "teammembers", "normal", "high");
	}
	function teammember_options(){
		global $post;
		$custom = get_post_custom($post->ID);
		$position = $custom["position"][0];
		$email_address = $custom["email_address"][0];
		$twitter_handle = $custom["twitter_handle"][0];
		$linkedin_url = $custom["linkedin_url"][0];
?>

	<div id="teammember-options">
		<p><label>Position:</label><input name="position" value="<?php echo $position; ?>" /></p>
		<p><label>Twitter Handle:</label><input name="twitter_handle" value="<?php echo $twitter_handle; ?>" /></p>		
		<p><label>Email Address:</label><input name="email_address" value="<?php echo $email_address; ?>" /></p>	
		<p><label>LinkedIn URL:</label><input name="linkedin_url" value="<?php echo $linkedin_url; ?>" /></p>
		<p style="color:red">Dont forget to add a photo as a featured image</p>	
	</div><!--end teammember-options-->   

<?php
	}
	function update_teammember_options(){
		if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ){
		//Do Nothing
		}else{

		global $post;
			if (get_post_type($post->ID) == 'reviews'){
				update_post_meta($post->ID, "position", $_POST["position"]);
				update_post_meta($post->ID, "email_address", $_POST["email_address"]);
				update_post_meta($post->ID, "twitter_handle", $_POST["twitter_handle"]);
				update_post_meta($post->ID, "linkedin_url", $_POST["linkedin_url"]);
			}
		}
	}
//End Custom Fields in Team Members Post-type


?>

<?php

//Defines Custom Fields in Locations Post-type
	add_action("admin_init", "add_location");
	add_action('save_post', 'update_location_options');
	function add_location(){
		add_meta_box("location_details", "Location Details", "location_options", "locations", "normal", "high");
		add_meta_box("location_more_details", "Additional Details", "location_settings", "locations", "normal", "high");
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
			if (get_post_type($post->ID) == 'locations'){
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
// Puts link in excerpts more tag
function new_excerpt_more($more) {
       global $post;
	return '<a class="more" href="'. get_permalink($post->ID) . '"> more &raquo;</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');


function print_hours($open, $openingtime, $closingtime){
	if ($open == 'on'){
		echo $openingtime." - ".$closingtime;
	}else{
		echo "Closed";
	}
}

function add_transaction_id($content){
	global $purchase_log;
	
	$content .= "Transaction ID: ".$purchase_log['transactid'];
	
	return $content;
	
}

add_filter('wpsc_transaction_result_message_html','add_transaction_id');
add_filter('wpsc_transaction_result_message', 'add_transaction_id');

function add_date($content){
	global $purchase_log;
	
	$temp_content = $content;
	
	$content = date('F j, Y', $purchase_log['date'])."<br /><br />";
	$content .= $temp_content;
	
	return $content;
	
}

add_filter('wpsc_transaction_result_message_html','add_date');
add_filter('wpsc_transaction_result_message', 'add_date');

function add_disclaimer($content){
	$disclaimer_id = 733;
	$content_post = get_post($disclaimer_id);
	$disclaimer = $content_post->post_content;
	$disclaimer = apply_filters('the_content', $disclaimer);
	
	$content .= $disclaimer;
	
	return $content;
	
}

add_filter('wpsc_transaction_result_message_html','add_disclaimer');
add_filter('wpsc_transaction_result_message', 'add_disclaimer');


function sksp_generate_code($length) {
    global $wpdb;

    // Use only 0-9 and A-Z
    $chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $res = '';

    // Generate a random code $length long using the characters above
    for ($i = 0; $i < $length; $i++)
        $res .= $chars[mt_rand(0, strlen($chars)-1)];

    // TODO: Change the following so that it's saving & retrieving to/from a db table
    // Verify that the code doesn't exist
    if ( ! get_page_by_title( $res ) )
        return $res;
    else
        sksp_generate_code($length);
}

?>

<?php

function print_gift_certificate_form($product_id, $number){
	echo "<tr>";
	echo "<td>From</td>";
	echo "<td><input type='text' name='gift-from-$product_id-$number' class='text' placeholder='From Name...' /></td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>To</td>";
	echo "<td><input type='text' name='gift-to-$product_id-$number' class='text' placeholder='To Name...' /></td>";
	echo "</tr>";
	echo "<tr>";	
	echo "<td>Message</td>";
	echo "<td><textarea class='text' name='message-$product_id-$number'></textarea></td>";
	echo "</tr>";
}




function generate_gift_certificate_checkout_forms(){

	global $wpsc_cart;

	while (wpsc_have_cart_items()) : wpsc_the_cart_item();
	
	$product_id = $wpsc_cart->cart_item->product_id;
	$sku = get_post_meta($product_id,'_wpsc_sku',TRUE);
	
	if($sku == "997"){ //If this is a gift certificate, print out a gift form.
		echo "<table class='wpsc_checkout_table'>";
		$i = 0;
		
		while($i < wpsc_cart_item_quantity()){
			echo "<tr><td><h4>".get_the_title($product_id)."</h4></td><tr>";
			print_gift_certificate_form($product_id, $i);
			$i++; 
		}
		echo "</table>";
	}
	endwhile;
}

add_action('wpsc_inside_shopping_cart','generate_gift_certificate_checkout_forms');


function save_gift_certificate_data(){
	global $_POST, $wpsc_cart, $wpdb;
	
	$purchase_log_id = $wpsc_cart->log_id;
	
	$purchase_log_data_items_sql = get_purchase_log($purchase_log_id);
		
	while($purchase_log_data_item = mysql_fetch_array( $purchase_log_data_items_sql )){
		$sku = get_post_meta($purchase_log_data_item['prodid'],'_wpsc_sku',TRUE);
			
		
		if($sku == 997){

			$i=0;
			while($i < $purchase_log_data_item['quantity']){

				$insert_result = $wpdb->insert('wp_gift_certificate_purchases', 
						array(
							'gift_certificate_code' => generate_certificate_id(),
							'value' => get_post_meta($purchase_log_data_item['prodid'],'_wpsc_price',TRUE),
							'price_paid' => $purchase_log_data_item['price'],
							'from' => sanitize_text_field($_POST['gift-from-'.$purchase_log_data_item['prodid'].'-'.$i]),
							'to' => sanitize_text_field($_POST['gift-to-'.$purchase_log_data_item['prodid'].'-'.$i]),
							'message' => sanitize_text_field($_POST['message-'.$purchase_log_data_item['prodid'].'-'.$i]),
							'purchase_log_id' => $purchase_log_id
						)
				);
				
				$i++;
			}
		}
	}
}

add_action('wpsc_submit_checkout','save_gift_certificate_data');


function generate_certificate_id(){

    $character_set_array = array();
    $character_set_array[] = array('count' => 6, 'characters' => 'ABCDEFGHIJKLMNOPQRSTUVWXYZ');
    $character_set_array[] = array('count' => 2, 'characters' => '0123456789');
    $temp_array = array();
    foreach ($character_set_array as $character_set) {
        for ($i = 0; $i < $character_set['count']; $i++) {
            $temp_array[] = $character_set['characters'][rand(0, strlen($character_set['characters']) - 1)];
        }
    }
    shuffle($temp_array);
    return implode('', $temp_array);
}

function get_purchase_log($purchase_log_id){
	$purchase_log_data_items_sql = mysql_query("SELECT * FROM wp_wpsc_cart_contents WHERE purchaseid = ".$purchase_log_id)or die(mysql_error());
	return $purchase_log_data_items_sql;
}

function get_gift_certificate_log($purchase_log_id){
	$gift_certificate_log_data_items_sql = mysql_query("SELECT * FROM wp_gift_certificate_purchases WHERE purchase_log_id = ".$purchase_log_id)or die(mysql_error());
	return $gift_certificate_log_data_items_sql;
}

function get_form_id_by_name($name){
	$form_id_sql = mysql_query("SELECT * FROM wp_wpsc_checkout_forms WHERE unique_name = '$name'") or die(mysql_error());
	$form_id = mysql_fetch_assoc($form_id_sql);
	return $form_id['id'];
}

function get_email_by_purchase_log_id($purchase_log_id){
	$name = "billingemail";
	$form_id = get_form_id_by_name($name);
	
	$customer_email_sql = mysql_query("SELECT value FROM wp_wpsc_submited_form_data WHERE log_id = ".$purchase_log_id." AND form_id = ".$form_id) or die(mysql_error());
	$customer_email = mysql_fetch_assoc($customer_email_sql);
	return $customer_email['value'];
}

function process_checkout_for_gift_certificates(){
	global $purchase_log;
	
	$gift_certificate_log_data_items_sql = get_gift_certificate_log($purchase_log['id']);
		
 	if ($purchase_log['processed'] == 3){
 	
 		while($gift_certificate_log_data_item = mysql_fetch_array( $gift_certificate_log_data_items_sql )){
 		
 			$code = $gift_certificate_log_data_item['gift_certificate_code'];
 			$to = $gift_certificate_log_data_item['to'];
 			$from = $gift_certificate_log_data_item['from'];
 			$message = $gift_certificate_log_data_item['message'];
 			$value = $gift_certificate_log_data_item['value'];
 			$email = get_email_by_purchase_log_id($purchase_log['id']);
 			 		
			send_gift_certificate_email($code,$to,$from,$message,$value,$email);
		}
	}
}

add_action('wpsc_confirm_checkout','process_checkout_for_gift_certificates');

function send_gift_certificate_email($gift_certificate_code,$to_name,$from_name,$gift_message,$value,$to_email){
    $gift_certificate_img = WP_CONTENT_URL."/themes/skinspanewyork/images/gift_card.jpg";
    
    $to_name = stripcslashes($to_name);
    $from_name = stripcslashes($from_name);
    $gift_message = stripcslashes($gift_message);    
        
    $from_email = "info@skinspanewyork.com"; 
    $subject = "Skin Spa Gift Certificate - ".$gift_certificate_code; 

    $today = date();
    $expiration = date('F d, Y',strtotime(date("Y-m-d", mktime()) . " + 365 days"));

    //begin of HTML message 
    $message = <<<EOF
     
<html> 
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Skin Spa</title>
	<style type="text/css">
		h3{margin:0;padding:0;}
		p{margin:0;}
	</style>
</head>
  <body bgcolor="#ffffff">
      <center> 
		  <table width="600" bgcolor="#ffffff"> 
		  	<tr>
		    	<td colspan="2"><img src="$gift_certificate_img" alt="Gift Certificate" /></td>
		    </tr>
		    <tr>
		    	<td>&nbsp;</td>
		    </tr>
		    <tr>
		    	<td>
			    	<table>
			    		<tr>
			    			<td><h3>A Gift For:</h3></td>
			    			<td>$to_name</td>
						</tr>
			    		<tr>
			    			<td><h3>From:</h3></td>
			    			<td>$from_name</td>
						</tr>    	
			    	    <tr>
			    			<td><h3>Amount:</h3></td>
			    			<td>$$value</td>
						</tr>   
			    	    <tr>
			    			<td><h3>Expiration:</h3></td>
			    			<td>$expiration</td>
						</tr>
						<tr>
							<td>&nbsp;</td> 
							<td>&nbsp;</td>
						</tr>
						<tr>
							<td><h3>Gift Certificate Code:</h3></td> 
							<td>$gift_certificate_code</td>
						</tr>
			    	</table>
			    </td>
			    <td valign="top">
			    	<table>
			    		<tr>
			    			<td><h3>Message</h3></td>
			    		</tr>
			    		<tr>
					      	<td>$gift_message</td>
					     </tr>
			    	</table>
			    </td>
		      </tr>
		      <tr>
		      	<td></td>
				<td></td>
		      </tr>
	          <tr>
		      	<td valign="top">
			      	<table width="350">
			      		<tr>
					      	<td><h3>Details</h3></td>
					     </tr>
					     <tr>
					      	<td>
					      		<ul style="padding-left:10px;font-size:11px;">
					      			<li>Valid only on full price services and packages</li>
					      			<li>Appointments are required and subject to availability</li>
					      			<li>24-hour cancellation policy; voucher subject to forfeiture</li>
					      			<li>No cash value/cash back</li>
					      			<li>Whole (not partial) Vouchers can be gifted to friends</li>
					      			<li>Cannot be combined with any other offer or promotion</li>
					      			<li>May not be used for tax / tip</li>
					      		</ul>
					      	</td>
					     </tr>
					 </table>
				</td>
				<td>
			      	<table width="225">
			      		<tr>
					      	<td><h3>Instructions</h3></td>
					     </tr>
					     <tr>
					      	<td style="font-size:11px;">
					      		Call one of our locations to schedule your appointment using your code.<br />
					      		<ul style="list-style:none;padding-left:10px;">
						      		<li><b>Midtown:</b> 212-684-4914</li>
						      		<li><b>Soho:</b> 212-925-1956</li>
						      		<li><b>Flatiron/Chelsea:</b> 212.620.0033</li>
						      		<li><b>Upper East Side:</b> 212-486-2110</li>
						      		<li><b>Midtown East/Murray Hill:</b> 212.883.1125</li>
						      		<li><b>Fashion District:</b> 212.631.7705</li>
						      		<li><b>Midtown West:</b> 212.631.7709 Opening December 2012</li>
					      		</ul>
					      		Print out voucher and present at your appointment or display phone voucher.
					      	</td>
					     </tr>
					 </table>				
				</td>
		      </tr>
		      <tr>
		      	<td></td>
		      </tr>
	        </table>
	        <a href="http://skinspanewyork.com/" style="margin:0;padding:0;">www.skinspanewyork.com</a>
		</center>  
  </body> 
</html> 

EOF;
 
   //end of message 
    $headers  = "From: $from_email\r\n"; 
    $headers .= "Content-type: text/html\r\n"; 

    //options to send to cc+bcc 
    //$headers .= "Cc: [email]maa@p-i-s.cXom[/email]"; 
    //$headers .= "Bcc: [email]email@maaking.cXom[/email]"; 
     
    // now lets send the email. 
    mail($to_email, $subject, $message, $headers); 

}

?>
<?php
//Defines Custom Fields in Careers Post-type
	add_action("admin_init", "add_career");
	add_action('save_post', 'update_career_options');
	function add_career(){
		add_meta_box("career_details", "Other Career Details", "career_options", "careers", "normal", "high");
	}
	function career_options(){
		global $post;
		$custom = get_post_custom($post->ID);
		$jobcode = $custom["jobcode"][0];
		$remarketing_tag = $custom["remarketing_tag"][0];
?>

	<div id="career-options">
		<p><label>Job Code: </label><input name="jobcode" value="<?php echo $jobcode; ?>" /></p>		
	</div><!--end career-options-->   

	<div id="career-options">
		<p><label>Publish to Indeed? </label>

<?php
	//Adds the dropdown asking whether this career should be posted to Indeed
    		$indeed_publish = get_post_meta($_GET['post'], 'indeedpublish', true);

			$output = "<select id='indeedpublish' name='indeedpublish'>";

    		if ($indeed_publish == "No"){
			$output .="<option value='Yes'>Yes</option>";
	  		$output .="<option selected='selected' value='No'>No</option>";
    		}else{
	  		$output .="<option selected='selected' value='Yes'>Yes</option>";
	  		$output .="<option value='No'>No</option>";
    		}

   			$output .="</select></p>";
   			echo $output;
?>		

	<p><label>Remarketing Tag:</label><input name="remarketing_tag" value="<?php echo $remarketing_tag; ?>" /></p>
				
	</div><!--end career-options-->   




<?php
	}
	function update_career_options(){
		if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ){
		//Do Nothing
		}else{

		global $post;
		update_post_meta($post->ID, "jobcode", $_POST["jobcode"]);
		update_post_meta($post->ID, "indeedpublish", $_POST["indeedpublish"]);
		update_post_meta($post->ID, "remarketing_tag", $_POST["remarketing_tag"]);
		}
	}
//End Custom Fields in Careers Post-type
?>
<?php
add_action('admin_menu','wphidenag');
function wphidenag() {
	remove_action( 'admin_notices', 'update_nag', 3 );
}
?>
<?php
function my_login_redirect( $redirect_to, $request, $user ){
    //is there a user to check?
    global $user;
    if( isset( $user->roles ) && is_array( $user->roles ) ) {
        //check for admins
        if( in_array( "customer", $user->roles ) ) {
            // redirect them to the default place
            return admin_url('admin.php?page=bp_documents_overview');
        } elseif( in_array( "administrator", $user->roles ) || in_array( "editor", $user->roles ) ) {
            return $redirect_to;
        }
    }
    else {
        return $redirect_to;
    }
}
add_filter("login_redirect", "my_login_redirect", 10, 3);
?>
<?php
function remove_footer_admin () {
	echo '';
}
add_filter('admin_footer_text', 'remove_footer_admin');
add_filter( 'update_footer', 'remove_footer_admin', 11 );
?>
<?php
function wpbeginner_remove_version() {
	return '';
}
add_filter('the_generator', 'wpbeginner_remove_version');
?>
<?php
add_action( 'admin_menu', 'my_remove_menus', 999 );

function my_remove_menus() {
    if(!(is_user_logged_in() && current_user_can('manage_options'))){
		 	remove_menu_page( 'index.php' );
    }
}
?>