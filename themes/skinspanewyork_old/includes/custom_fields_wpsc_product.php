<?php

//Defines Custom Fields in WPSC Product Post-type
	add_action("admin_init", "add_more_wpsc_product_fields");
	add_action('save_post', 'update_more_wpsc_product_options');
	function add_more_wpsc_product_fields(){
		add_meta_box("wpsc_product_details", "Additional Details", "more_wpsc_product_options", "wpsc-product", "normal", "low");
	}
	function more_wpsc_product_options(){
		global $post;
		$custom = get_post_custom($post->ID);
		$google_conversion_label = $custom["google-conversion-label"][0];
?>

	<div id="more_wpsc_product-options">
		<p><label>Google Conversion Label:</label><input name="google-conversion-label" value="<?php echo $google_conversion_label; ?>" /></p>
	</div><!--end more_wpsc_product-options-->   

<?php
	}
	function update_more_wpsc_product_options(){
		if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ){
		//Do Nothing
		}else{
			global $post;
			if (get_post_type($post->ID) == 'wpsc-product'){
				update_post_meta($post->ID, "google-conversion-label", $_POST["google-conversion-label"]);
			}
		}
	}
//End Custom Fields in WPSC Product Post-type


?>