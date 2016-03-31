<?php
	/**
	 * The Transaction Results Theme.
	 *
	 * Displays everything within transaction results.  Hopefully much more useable than the previous implementation.
	 *
	 * @package WPSC
	 * @since WPSC 3.8
	 */
	 
	 global $purchase_log, $errorcode, $sessionid, $echo_to_screen, $cart, $message_html;

?>

<div class="wpsc-transaction-results-wrap">
	<?php echo wpsc_transaction_theme(); ?>
</div>

<?php
		//SQL to Get the City Field. WPEC promises baked in functionality in 3.8.9 for Google e-commerce tracking
		$sql = 'SELECT value
		FROM  `wp_wpsc_submited_form_data` 
		WHERE log_id = ' . $purchase_log['id'] . '
		AND form_id =5';	
		//SQL fetch
		$form_data = mysql_query( $sql);
		$city = mysql_result($form_data, 0);	
?>

<script type="text/javascript">
  var gaJsHost = (("https:" == document.location.protocol ) ? "https://ssl." : "http://www.");
  document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
	try {
		var pageTracker = _gat._getTracker("UA-34622576-1");
		pageTracker._trackPageview();
		pageTracker._addTrans(
			"<?php echo $purchase_log['id']; ?>",
			"<?php echo get_bloginfo( 'name' ); ?>",
			"<?php echo $purchase_log['totalprice']; ?>",
			"<?php echo $purchase_log['wpec_taxes_total']; ?>",
			"<?php echo $purchase_log['base_shipping']; ?>",
			"<?php echo $city; ?>",
			"<?php echo wpsc_get_region( $purchase_log['billing_region'] ); ?>",
			"<?php echo wpsc_get_country( $purchase_log['billing_country'] ); ?>"
		);


<?php

		//SQL to get data that WPEC doesn't provide by default on this page.
		$purchase_log_data_items_sql = mysql_query("SELECT * FROM wp_wpsc_cart_contents WHERE purchaseid = ".$purchase_log['id'])or die(mysql_error());
		//$purchase_log_data_items = mysql_fetch_array($purchase_log_data_items_sql);
		while($purchase_log_data_item = mysql_fetch_array( $purchase_log_data_items_sql )){
		//foreach( $purchase_log_data_items as $purchase_log_data_item ) {
		
		$purchase_log_sku_sql = mysql_query("SELECT meta_value FROM wp_postmeta WHERE meta_key = '_wpsc_sku' AND post_id = '".$purchase_log_data_item['prodid']."' LIMIT 1")or die(mysql_error());
		$sku = mysql_fetch_assoc($purchase_log_sku_sql);
		if ($sku['meta_value'] == ''){
		$sku['meta_value'] = "NA";
		}
		
		$purchase_log_data_item_parent_sql = mysql_query("SELECT post_parent FROM wp_posts WHERE ID = '".$purchase_log_data_item['prodid']."' LIMIT 1")or die(mysql_error());
		$parent = mysql_fetch_assoc($purchase_log_data_item_parent_sql);
		
		$purchase_log_data_item_categoryid_sql = mysql_query("SELECT term_taxonomy_id FROM wp_term_relationships WHERE object_id = '".$parent['ID']."' LIMIT 1")or die(mysql_error());
		$categoryid = mysql_fetch_assoc($purchase_log_data_item_categoryid_sql);
		
		$purchase_log_data_item_category_sql = mysql_query("SELECT name FROM wp_terms WHERE term_id = '".$categoryid['term_taxonomy_id']."' LIMIT 1")or die(mysql_error());
		$category = mysql_fetch_assoc($purchase_log_data_item_category_sql);
		
		
		
?>

	pageTracker._addItem(
		"<?php echo $purchase_log['id']; ?>",
		"<?php echo $sku['meta_value']; ?>",
		"<?php echo $purchase_log_data_item['name']; ?>",
		"<?php echo $category['name']; ?>",
		"<?php echo $purchase_log_data_item['price']; ?>",
		"<?php echo $purchase_log_data_item['quantity']; ?>"
	);
<?php } ?>
		pageTracker._trackTrans();		
	} catch(err) {}
</script>

<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 998697320;
var google_conversion_label = "-IonCKD8oAQQ6NKb3AM";
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/998697320/?value=0&amp;label=-IonCKD8oAQQ6NKb3AM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<script type="text/javascript">
var fb_param = {};
fb_param.pixel_id = '6014986490160';
fb_param.value = '<?php echo $purchase_log['totalprice']; ?>';
fb_param.currency = 'USD';
(function(){
  var fpw = document.createElement('script');
  fpw.async = true;
  fpw.src = '//connect.facebook.net/en_US/fp.js';
  var ref = document.getElementsByTagName('script')[0];
  ref.parentNode.insertBefore(fpw, ref);
})();
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/offsite_event.php?id=6014986490160&amp;value=0&amp;currency=USD" /></noscript>

<script type="text/javascript">
adroll_adv_id = "R7SCXC4MN5F3DDDXPNF5IG";
adroll_pix_id = "TMYLFTS6LVCYFP444D3DXQ";
(function () {
var oldonload = window.onload;
window.onload = function(){
   __adroll_loaded=true;
   var scr = document.createElement("script");
   var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
   scr.setAttribute('async', 'true');
   scr.type = "text/javascript";
   scr.src = host + "/j/roundtrip.js";
   ((document.getElementsByTagName('head') || [null])[0] ||
    document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
   if(oldonload){oldonload()}};
}());
</script>


<script type="text/javascript">
  adroll_conversion_value_in_dollars = <?php echo $purchase_log['totalprice']; ?>
</script>