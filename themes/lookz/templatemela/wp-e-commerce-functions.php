<?php

$product_image_width = get_option('product_image_width');
$product_image_height = get_option('product_image_height');

$category_image_width = get_option('category_image_width');
$category_image_height = get_option('category_image_height');

$single_view_image_width = get_option('single_view_image_width');
$single_view_image_height = get_option('single_view_image_height');

// Start wp-e-commerce //

if ( ! function_exists( 'wpe_get_images_for_product' ) ) :
function wpe_get_images_for_product(){
	global $wpdb;
	$postContent =  wpsc_the_product_description();
	$searchPattern = '~<img [^\>]*\ />~';
	// Run preg_match_all to grab all the images and save the results in $aPics
	preg_match_all( $searchPattern, $postContent, $aPics );
	// Check to see if we have at least 1 image
	$thumbs = count($aPics[0]);
	$thumb_image_width = 86;
	$thumb_image_height = 88;
	if ( $thumbs > 0 ) :
	?>
	<div id="thumblist" class="porduct_thumbs products_block">
		<div class="customNavigation" style="display: block;">
			<a class="btn prev"> </a>
			<a class="btn next"> </a>
		</div>
		<ul class="products" style="opacity: 0;">
		    <?php for ( $i=0; $i < $thumbs ; $i++ ) {
			$img_full = $aPics[0][$i];
			preg_match('/<img\s.*?\bsrc="(.*?)".*?>/si', $img_full, $matches);
			$largeimage = $matches[1];
			 ?>
			 <li class="single-thumb">
				<a rel="lightbox[<?php echo wpsc_the_product_title(); ?>]" href="<?php echo $largeimage; ?>" class="<?php echo wpsc_the_product_image_link_classes(); ?>">

				<?php templatemela_print_images_thumb($matches[1], get_the_title(get_the_ID()) ,$thumb_image_width, $thumb_image_height, 'left'); ?>
				</a>
			</li>
   			<?php } ?>
			<span class="thumblist_default_width" style="display: none; visibility: hidden;"></span>
   		</ul>
	</div>
	<?php endif; ?>
<?php }
endif;

if ( ! function_exists( 'wpe_excerpt' ) ) :
function wpe_excerpt($limit)
{
      $excerpt = explode(' ', templatemela_strip_images(wpsc_the_product_description()), $limit);
      if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).'&nbsp;.';
      } else {
        $excerpt = implode(" ",$excerpt);
      }
      $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
      return $excerpt;
}
endif;


add_shortcode( 'featured_products', 'wpe_featured_products' );
function wpe_featured_products( $atts )
{
	global $post;
	$sticky = get_option( 'sticky_products' );
	extract(shortcode_atts( array(
		'post_type' => 'wpsc-product',
		'posts_per_page' => -1,
		'post__in' => $sticky,
		'orderby' => 'date',
		'order' => 'DESC',
		'post_status' => 'publish',
	), $atts ) );

	$args = array(
		'post_type' 	  => $post_type,
		'posts_per_page'  => $posts_per_page,
		'post__in'  	  => $post__in,
		'orderby'         => $orderby,
		'order' 	  => $order,
		'post_status'     => $post_status
	);
	$pro_query = new WP_Query( $args );
	?>
	<ul class="featured-list products">
		<?php
			if ( $pro_query->have_posts() ) :
				while ( $pro_query->have_posts() ) : $pro_query->the_post(); ?>
					<li>
						<div class="imagecol" id="imagecol_<?php echo wpsc_the_product_id(); ?>">
						<?php if(wpsc_the_product_thumbnail()) :

						?>
							<a rel="<?php echo wpsc_the_product_title(); ?>" title="<?php printf(__('Permanent Link to %s','rys'), get_the_title()); ?>" href="<?php echo esc_url( wpsc_the_product_permalink() ); ?>">
								<img class="product_image" id="product_image_<?php echo wpsc_the_product_id(); ?>" alt="<?php echo wpsc_the_product_title(); ?>" title="<?php echo wpsc_the_product_title(); ?>" src="<?php echo wpsc_the_product_thumbnail(get_option('product_image_width'), get_option('product_image_height'),'','single'); ?>"/>

							</a>
						<?php else: ?>
								<style>
									div.default_product_display .imagecol img.no-image,
									#content div.default_product_display .imagecol img.no-image { height: auto !important; width: auto !important;}
								</style>
								<a href="<?php echo esc_url( wpsc_the_product_permalink() ); ?>">
								<img class="no-image" id="product_image_<?php echo wpsc_the_product_id(); ?>" alt="<?php esc_attr_e( 'No Image', 'wpsc' ); ?>" title="<?php echo wpsc_the_product_title(); ?>" src="<?php echo WPSC_CORE_THEME_URL; ?>wpsc-images/noimage.png" width="<?php echo get_option('product_image_width'); ?>" height="<?php echo get_option('product_image_height'); ?>" />
								</a>
						<?php endif; ?>

						</div><!--close imagecol-->
						<h2 class="prodtitle entry-title">
							<?php if(get_option('hide_name_link') == 1) : ?>
								<?php echo wpsc_the_product_title(); ?>
							<?php else: ?>
								<a class="wpsc_product_title" href="<?php echo esc_url( wpsc_the_product_permalink() ); ?>"><?php echo wpsc_the_product_title(); ?></a>
							<?php endif; ?>
						</h2>
						<?php if(wpsc_product_external_link(wpsc_the_product_id()) != '') : ?>
							<?php $action =  wpsc_product_external_link(wpsc_the_product_id()); ?>
						<?php else: ?>
						<?php $action = wpsc_this_page_url(); ?>
						<?php endif; ?>
						<form class="product_form"  enctype="multipart/form-data" action="<?php echo esc_url( $action ); ?>" method="post" name="product_<?php echo wpsc_the_product_id(); ?>" id="product_<?php echo wpsc_the_product_id(); ?>" >
						<?php do_action ( 'wpsc_product_form_fields_begin' ); ?>
							<div class="wpsc_product_price">
								<?php if( wpsc_show_stock_availability() ): ?>
									<?php if(wpsc_product_has_stock()) : ?>
										<div id="stock_display_<?php echo wpsc_the_product_id(); ?>" class="in_stock"><?php _e('In stock', 'wpsc'); ?></div>
									<?php else: ?>
										<div id="stock_display_<?php echo wpsc_the_product_id(); ?>" class="out_of_stock"><?php _e('Out of stock', 'wpsc'); ?></div>
									<?php endif; ?>
								<?php endif; ?>
								<?php if(wpsc_product_is_donation()) : ?>
									<label for="donation_price_<?php echo wpsc_the_product_id(); ?>"><?php _e('Donation', 'wpsc'); ?>: </label>
									<input type="text" id="donation_price_<?php echo wpsc_the_product_id(); ?>" name="donation_price" value="<?php echo wpsc_calculate_price(wpsc_the_product_id()); ?>" size="6" />

								<?php else : ?>
									<?php wpsc_the_product_price_display(); ?>
								<?php endif; ?>
							</div><!--close wpsc_product_price-->

							<input type="hidden" value="add_to_cart" name="wpsc_ajax_action"/>
							<input type="hidden" value="<?php echo wpsc_the_product_id(); ?>" name="product_id"/>

							<!-- END OF QUANTITY OPTION -->
							<?php if((get_option('hide_addtocart_button') == 0) &&  (get_option('addtocart_or_buynow') !='1')) : ?>
								<?php if(wpsc_product_has_stock()) : ?>
									<div class="wpsc_buy_button_container">
										<div class="wpsc_loading_animation">
											<img title="" alt="<?php esc_attr_e( 'Loading', 'wpsc' ); ?>" src="<?php echo wpsc_loading_animation_url(); ?>" />
											<?php _e('Updating cart...', 'wpsc'); ?>
										</div><!--close wpsc_loading_animation-->
											<?php if(wpsc_product_external_link(wpsc_the_product_id()) != '') : ?>
											<?php $action = wpsc_product_external_link( wpsc_the_product_id() ); ?>
											<input class="wpsc_buy_button" type="submit" value="<?php echo wpsc_product_external_link_text( wpsc_the_product_id(), __( 'Buy Now', 'wpsc' ) ); ?>" onclick="return gotoexternallink('<?php echo esc_url( $action ); ?>', '<?php echo wpsc_product_external_link_target( wpsc_the_product_id() ); ?>')">
											<?php else: ?>
										<input type="submit" value="<?php _e('Add To Cart', 'wpsc'); ?>" name="Buy" class="wpsc_buy_button" id="product_<?php echo wpsc_the_product_id(); ?>_submit_button"/>
											<?php endif; ?>
									</div><!--close wpsc_buy_button_container-->
								<?php endif ; ?>
							<?php endif ; ?>
						</form><!--close product_form-->
						<?php echo wpsc_product_rater(); ?>
						<?php if(wpsc_product_on_special()) : ?><span class="sale"><?php _e('Sale', 'wpsc'); ?></span><?php endif; ?>
					</li><?php
				endwhile;
			endif;

			/* Restore original Post Data */
			wp_reset_postdata();
		?>
	</ul>
	<?php
}


function wpe_also_bought( $product_id ) {

	global $wpdb;

	if ( get_option( 'wpsc_also_bought' ) == 0 ) {
		return '';
	}

	// To be made customiseable in a future release
	$also_bought_limit = 3;
	$element_widths = 96;
	$image_display_height = get_option('product_image_height');
	$image_display_width = get_option('product_image_width');

	// Filter will be used by a plugin to provide 'Also Bought' functionality when this is deprecated from core.
	// Filter is currently private and should not be used by plugin/theme devs as it may only be temporary.
	$output = apply_filters( '_wpsc_also_bought', '', $product_id );
	if ( ! empty( $output ) ) {
		return $output;
	}

	// If above filter returns output then the following is ignore and can be deprecated in future.
	$also_bought = $wpdb->get_results( $wpdb->prepare( "SELECT `" . $wpdb->posts . "`.* FROM `" . WPSC_TABLE_ALSO_BOUGHT . "`, `" . $wpdb->posts . "` WHERE `selected_product`= %d AND `" . WPSC_TABLE_ALSO_BOUGHT . "`.`associated_product` = `" . $wpdb->posts . "`.`id` AND `" . $wpdb->posts . "`.`post_status` IN('publish','protected') ORDER BY `" . WPSC_TABLE_ALSO_BOUGHT . "`.`quantity` DESC LIMIT $also_bought_limit", $product_id ), ARRAY_A );
	if ( is_array( $also_bought ) && count( $also_bought ) > 0 ) { ?>
		<h2 class="prodtitles wpsc_also_bought">
			<?php echo __( 'People who bought this item also bought', 'wpsc' ); ?> </h2>
<div id="crosssells" class="products_block wpsc_also_bought products">
			<div class="customNavigation">
				<a class="btn prev">&nbsp;</a>
				<a class="btn next">&nbsp;</a>
			</div>
			<ul class="crosssells products test">
		<?php foreach ( $also_bought as $also_bought_data ) { ?>
			<li class="wpsc_also_bought_item">
			<?php if ( get_option( 'show_thumbnails' ) == 1 ) {
				$image_path = wpsc_the_product_thumbnail( $image_display_width, $image_display_height, $also_bought_data['ID'] );
				if ( $image_path ) { ?>
					<a href="<?php echo esc_attr( get_permalink( $also_bought_data['ID'] ) ); ?>" class="preview_link" rel="<?php esc_attr( sanitize_html_class( get_the_title( $also_bought_data['ID'] ) ) ) ;?>">
					<img src="<?php echo esc_attr( $image_path );?>" id="product_image_'<?php $also_bought_data['ID']; ?>" class="product_image" />
					</a>
				<?php } else {
					if ( get_option( 'product_image_width' ) != '' ) {
						$width_and_height = 'width="' . $image_display_height . '" height="' . $image_display_height . '" ';
					} else {
						$width_and_height = '';
					} ?>
					<img src="<?php echo WPSC_CORE_THEME_URL; ?>/wpsc-images/noimage.png" title="<?php esc_attr( get_the_title( $also_bought_data['ID'] ) ); ?>" alt="<?php esc_attr( get_the_title( $also_bought_data['ID'] ) ); ?>" id="product_image_<?php echo $also_bought_data['ID']; ?>" class="product_image" <?php echo width_and_height; ?>/>
				<?php }
			} ?>
			<a class="wpsc_product_name" href="<?php echo get_permalink( $also_bought_data['ID'] ); ?>">
				<?php echo get_the_title( $also_bought_data['ID'] );?> </a>

			<?php if ( ! wpsc_product_is_donation( $also_bought_data['ID'] ) ) {
				// Ideally use the wpsc_the_product_price_display() function here but needs some tweaking
				$price = get_product_meta( $also_bought_data['ID'], 'price', true );
				$special_price = get_product_meta( $also_bought_data['ID'], 'special_price', true ); ?>
			<div class="wpsc_product_price">
				<?php if ( ! empty( $special_price ) ) { ?>
					<span class="oldprice"><?php echo wpsc_currency_display( $price ); ?></span>
					<?php echo wpsc_currency_display( $special_price ); ?></span>
				<?php } else { ?>
					<span class="pricedisplay"><?php echo wpsc_currency_display( $price ); ?></span>
				<?php } ?>
				</div>
			<?php } ?>

			</li>
		<?php } ?>
			</ul>
			<span class="crosssells_default_width" style="display:none; visibility:hidden"></span>
		</div>
	<?php }
}
// End wp-e-commerce //
?>
