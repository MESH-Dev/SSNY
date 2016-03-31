<?php include(WP_CONTENT_DIR."/themes/skinspanewyork/custom-fields/locations.php") ?>
<?php include(WP_CONTENT_DIR."/themes/skinspanewyork/functions/wpec-prevent-duplicate-charges.php") ?>
<?php include(WP_CONTENT_DIR."/themes/skinspanewyork/functions/gift-certificates.php") ?>
<?php include(WP_CONTENT_DIR."/themes/skinspanewyork/functions/custom-capabilities.php") ?>

<?php
//This function should be moved to BookerPress plugin
//Adds document overview
add_action('sksp_additional_user_profile_links', 'add_user_documents_overview' );

function add_user_documents_overview(){
?>
  <a href="<?php echo get_option( 'user_account_url' ) . "?tab=documents"; ?>">Your Waivers</a>"
<?php 
} 
?>

<?php
function sksp_user_profile_section_documents(){
  echo "<h3>Documents Overview</h3>";
}
add_action('wpsc_user_profile_section_documents', 'sksp_user_profile_section_documents');
?>

<?php
function sksp_remove_excess_links($array){
  unset($array['downloads']);
  return $array;
}
add_filter('wpsc_user_profile_tabs','sksp_remove_excess_links');
?>
<?php
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

function shorten_description($description, $length = 75){ 		    	
  return implode(' ', array_slice(explode(' ', $description), 0, $length));
}

function the_slug() {
  $post_data = get_post($post->ID, ARRAY_A);
  $slug = $post_data['post_name'];
  return $slug;
}