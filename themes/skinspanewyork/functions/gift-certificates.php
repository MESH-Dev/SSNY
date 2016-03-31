<?php
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
	echo "<td><label style='width: 70px; display: inline-block;'>From:</label> <input type='text' name='gift-from-$product_id-$number' class='text' placeholder='From Name...' /></td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td><label style='width: 70px; display: inline-block;'>To:</label> <input type='text' name='gift-to-$product_id-$number' class='text' placeholder='To Name...' /></td>";
	echo "</tr>";
	echo "<tr>";	
	echo "<td><label style='width: 70px; display: inline-block;'>Message:</label> <textarea class='text' name='message-$product_id-$number'></textarea></td>";
	echo "</tr>";
}

function generate_gift_certificate_checkout_forms(){

	global $wpsc_cart;

	while (wpsc_have_cart_items()) : wpsc_the_cart_item();
	
	$product_id = $wpsc_cart->cart_item->product_id;
/* 	$sku = get_post_meta($product_id,'_wpsc_sku',TRUE); */
	$is_gift_certificate = get_post_meta($product_id,'gift_certificate',TRUE);
	
	if($is_gift_certificate){ //If this is a gift certificate, print out a gift form.
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
		$is_gift_certificate = get_post_meta($purchase_log_data_item['prodid'],'gift_certificate',TRUE);
		
		if($is_gift_certificate){
		
		  if($sku == '997'){
  		  $value = get_post_meta($purchase_log_data_item['prodid'],'_wpsc_price',TRUE);
		  }else{
  		  $value = -1;
		  }

			$i=0;
			while($i < $purchase_log_data_item['quantity']){
			
			  $title = $purchase_log_data_item['name'];
			  
				$insert_result = $wpdb->insert('wp_gift_certificate_purchases', 
						array(
							'gift_certificate_code' => generate_certificate_id(),
							'title' => $title,
							'value' => $value,
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
	$purchase_log_data_items_sql = mysql_query("SELECT * FROM wp_wpsc_cart_contents WHERE purchaseid = ".$purchase_log_id.";")or die(mysql_error());
	return $purchase_log_data_items_sql;
}

function purchase_processed($purchase_log_id){
	$purchase_log_data_items_sql = mysql_query("SELECT * FROM wp_wpsc_purchase_logs WHERE id = ".$purchase_log_id.";")or die(mysql_error());
	$purchase_log_details = mysql_fetch_array($purchase_log_data_items_sql);
	if($purchase_log_details['processed'] == 3){
  	return true;
	}else{
  	return false;
	}
}

function get_gift_certificate_log($purchase_log_id){
	$gift_certificate_log_data_items_sql = mysql_query("SELECT * FROM wp_gift_certificate_purchases WHERE purchase_log_id = ".$purchase_log_id.";")or die(mysql_error());
	return $gift_certificate_log_data_items_sql;
}

function get_form_id_by_name($name){
	$form_id_sql = mysql_query("SELECT * FROM wp_wpsc_checkout_forms WHERE unique_name = '$name';") or die(mysql_error());
	$form_id = mysql_fetch_assoc($form_id_sql);
	return $form_id['id'];
}

function get_email_by_purchase_log_id($purchase_log_id){
	$name = "billingemail";
	$form_id = get_form_id_by_name($name);
	
	$customer_email_sql = mysql_query("SELECT value FROM wp_wpsc_submited_form_data WHERE log_id = ".$purchase_log_id." AND form_id = ".$form_id.";") or die(mysql_error());
	$customer_email = mysql_fetch_assoc($customer_email_sql);
	return $customer_email['value'];
}

function process_checkout_for_gift_certificates($purchase_log_id){
	error_log("process_checkout_for_gift_certificates() is running!");
	$gift_certificate_log_data_items_sql = get_gift_certificate_log($purchase_log_id);
		
 	if (purchase_processed($purchase_log_id)){
 		while($gift_certificate_log_data_item = mysql_fetch_array( $gift_certificate_log_data_items_sql )){
 		
 			$code = $gift_certificate_log_data_item['gift_certificate_code'];
 			$title = $gift_certificate_log_data_item['title'];
 			$to = $gift_certificate_log_data_item['to'];
 			$from = $gift_certificate_log_data_item['from'];
 			$message = $gift_certificate_log_data_item['message'];
 			$value = $gift_certificate_log_data_item['value'];
 			$email = get_email_by_purchase_log_id($purchase_log_id);
 			
 			error_log("TO EMAIL: ".$email);
 			 		
			send_gift_certificate_email($code,$title,$to,$from,$message,$value,$email);
		}
	}
}

add_action('wpsc_confirm_checkout','process_checkout_for_gift_certificates');

function send_gift_certificate_email($gift_certificate_code,$title,$to_name,$from_name,$gift_message,$value,$to_email){

     error_log("send_gift_certificate_email() is running!");
    $gift_certificate_img = WP_CONTENT_URL."/themes/skinspanewyork/images/gift_card.jpg";
    
    if($value == -1){
      $gift_value = $title;
    }else{
      $gift_value = "$".$value;
    }
    
    $to_name = stripcslashes($to_name);
    $from_name = stripcslashes($from_name);
    $gift_message = stripcslashes($gift_message);    
        
    $from_email = "Skin Spa New York <info@skinspanewyork.com>"; 
    $subject = "Skin Spa Gift Certificate - ".$gift_certificate_code; 

    $today = date('F d, Y');
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
			    			<td>$gift_value</td>
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
						      		<li><b>Midtown West:</b> 212.707.8730</li>
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
     
    // now lets send the email, but only once.
    if (time() - wpsc_get_customer_meta('gc_email_sent_'.$gift_certificate_code) > 300 ){ //Will only send once within a 5 minute timeframe
      //Send the email if we didn't already send it.
      wp_mail($to_email, $subject, $message, $headers);
      //Add timestamp of send.
      wpsc_update_customer_meta('gc_email_sent_'.$gift_certificate_code, time());  
    }
}

?>