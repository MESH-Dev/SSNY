<?php
	// Setup globals
	// @todo: Get these out of template
	global $wp_query;

	// Setup image width and height variables
	// @todo: Investigate if these are still needed here
	$image_width  = get_option( 'single_view_image_width' );
	$image_height = get_option( 'single_view_image_height' );
?>

<div id="single_product_page_container">

	<?php
		// Breadcrumbs
		wpsc_output_breadcrumbs();

		// Plugin hook for adding things to the top of the products page, like the live search
		do_action( 'wpsc_top_of_products_page' );
	?>

	<div class="single_product_display group product">
<?php
		/**
		 * Start the product loop here.
		 * This is single products view, so there should be only one
		 */

		while ( wpsc_have_products() ) : wpsc_the_product(); ?>		
				<?php
				/**
				* Form data
				*/
				?>
				<form class="product_form" enctype="multipart/form-data" action="<?php echo esc_url( wpsc_this_page_url() ); ?>" method="post" name="1" id="product_<?php echo wpsc_the_product_id(); ?>">
				<?php do_action ( 'wpsc_product_form_fields_begin' ); ?>
					<div class="imagecol images">
						<?php if ( wpsc_the_product_thumbnail() ) : ?>
								<a id="imageBoxa" rel="<?php echo wpsc_the_product_title(); ?>" class="<?php echo wpsc_the_product_image_link_classes(); ?>" href="<?php echo esc_url( wpsc_the_product_image() ); ?>">
								<div class="imageBoxouter">
									<div id="imageBox">
										<img class="product_image" id="product_image_<?php echo wpsc_the_product_id(); ?>" alt="<?php echo wpsc_the_product_title(); ?>" title="<?php echo wpsc_the_product_title(); ?>" src="<?php echo wpsc_the_product_thumbnail(); ?>"/>
									</div>
								</div>
								</a>
								<?php
								if ( function_exists( 'gold_shpcrt_display_gallery' ) )
									echo gold_shpcrt_display_gallery( wpsc_the_product_id() );
								?>
						<?php else: ?>
									<a href="<?php echo esc_url( wpsc_the_product_permalink() ); ?>">
									<img class="no-image" id="product_image_<?php echo wpsc_the_product_id(); ?>" alt="No Image" title="<?php echo wpsc_the_product_title(); ?>" src="<?php echo WPSC_CORE_THEME_URL; ?>wpsc-images/noimage.png" width="<?php echo get_option('product_image_width'); ?>" height="<?php echo get_option('product_image_height'); ?>" />
									</a>
						<?php endif; ?>
						<?php if ( wpsc_the_product_thumbnail()) : //if the product has any images...								
						  wpe_get_images_for_product();//...and then display all the rest of the images
						endif; ?>							
					</div><!--close imagecol-->

					<div class="productcol summary">
					
							<?php
							/**
							 * Price options 
							 */
							?>
							<h1 class="product_title entry-title" itemprop="name"><?php echo wpsc_the_product_title(); ?></h1>
							<div class="wpsc_product_price">
								<?php if(wpsc_show_stock_availability()): ?>
									<?php if(wpsc_product_has_stock()) : ?>
										<div id="stock_display_<?php echo wpsc_the_product_id(); ?>" class="in_stock"><?php _e('Product in stock', 'wpsc'); ?></div>
									<?php else: ?>
										<div id="stock_display_<?php echo wpsc_the_product_id(); ?>" class="out_of_stock"><?php _e('Product out of stock', 'wpsc'); ?></div>
									<?php endif; ?>
								<?php endif; ?>
								<?php if(wpsc_product_is_donation()) : ?>
									<label for="donation_price_<?php echo wpsc_the_product_id(); ?>"><?php _e('Donation', 'wpsc'); ?>: </label>
									<input type="text" id="donation_price_<?php echo wpsc_the_product_id(); ?>" name="donation_price" value="<?php echo wpsc_calculate_price(wpsc_the_product_id()); ?>" size="6" />
								<?php else : ?>
									<?php wpsc_the_product_price_display(); ?>
									 <!-- multi currency code -->
                                    <?php if(wpsc_product_has_multicurrency()) : ?>
	                                    <?php echo wpsc_display_product_multicurrency(); ?>
                                    <?php endif; ?>
									<?php if(wpsc_show_pnp()) : ?>
										<p class="pricedisplay"><?php _e('Shipping', 'wpsc'); ?>:<span class="pp_price"><?php echo wpsc_product_postage_and_packaging(); ?></span></p>
									<?php endif; ?>
								<?php endif; ?>
							</div><!--close wpsc_product_price-->
							
							
							<?php if ( wpsc_the_product_additional_description() ) : ?>
									<div class="single_additional_description">
										<p><?php echo wpsc_the_product_additional_description(); ?></p>
									</div><!--close single_additional_description-->
								<?php endif; ?>
							
							
							<?php
						/**
						* Produc variation options 
						*/
						?>
                        <?php if (wpsc_have_variation_groups()) { ?>
                        <fieldset><legend><?php _e('Product Options', 'wpsc'); ?></legend>
						<div class="wpsc_variation_forms">
                        	<table>
							<?php while (wpsc_have_variation_groups()) : wpsc_the_variation_group(); ?>
								<tr><td class="col1"><label for="<?php echo wpsc_vargrp_form_id(); ?>"><?php echo wpsc_the_vargrp_name(); ?>:</label></td>
								<?php /** the variation HTML and loop */?>
								<td class="col2"><select class="wpsc_select_variation" name="variation[<?php echo wpsc_vargrp_id(); ?>]" id="<?php echo wpsc_vargrp_form_id(); ?>">
								<?php while (wpsc_have_variations()) : wpsc_the_variation(); ?>
									<option value="<?php echo wpsc_the_variation_id(); ?>" <?php echo wpsc_the_variation_out_of_stock(); ?>><?php echo wpsc_the_variation_name(); ?></option>
								<?php endwhile; ?>
								</select></td></tr>
							<?php endwhile; ?>
                            </table>
   							<div id="variation_display_<?php echo wpsc_the_product_id(); ?>" class="is_variation"><?php _e('', 'wpsc'); ?></div>
						</div><!--close wpsc_variation_forms-->
                        </fieldset>
						<?php } ?>
						<input type="hidden" value="add_to_cart" name="wpsc_ajax_action" />
						<input type="hidden" value="<?php echo wpsc_the_product_id(); ?>" name="product_id" />
						<?php if( wpsc_product_is_customisable() ) : ?>
							<input type="hidden" value="true" name="is_customisable"/>
						<?php endif; ?>
						<?php
						/**
						 * Cart Options
						 */
						?>
						<?php
						/**
						 * Quantity options - MUST be enabled in Admin Settings
						 */
						?>
						<?php if(wpsc_has_multi_adding()): ?>
							<div class="wpsc_quantity_container"><span><?php _e('Quantity', 'wpsc'); ?></span>
							<div class="wpsc_quantity_update">
							<input type="text" id="wpsc_quantity_update_<?php echo wpsc_the_product_id(); ?>" name="wpsc_quantity_update" size="2" value="1" />
							<input type="hidden" name="key" value="<?php echo wpsc_the_cart_item_key(); ?>"/>
							<input type="hidden" name="wpsc_update_quantity" value="true" />
							</div><!--close wpsc_quantity_update-->
							</div>
						<?php endif ;?>
						<?php if((get_option('hide_addtocart_button') == 0) &&  (get_option('addtocart_or_buynow') !='1')) : ?>
							<?php if(wpsc_product_has_stock()) : ?>
								<div class="wpsc_buy_button_container">
										<?php if(wpsc_product_external_link(wpsc_the_product_id()) != '') : ?>
										<?php $action = wpsc_product_external_link( wpsc_the_product_id() ); ?>
										<input class="wpsc_buy_button" type="submit" value="<?php echo wpsc_product_external_link_text( wpsc_the_product_id(), __( 'Buy Now', 'wpsc' ) ); ?>" onclick="return gotoexternallink('<?php echo esc_url( $action ); ?>', '<?php echo wpsc_product_external_link_target( wpsc_the_product_id() ); ?>')">
										<?php else: ?>
									<input type="submit" value="<?php _e('Add To Cart', 'wpsc'); ?>" name="Buy" class="wpsc_buy_button" id="product_<?php echo wpsc_the_product_id(); ?>_submit_button"/>
										<?php endif; ?>
									<div class="wpsc_loading_animation">
										<img title="Loading" alt="Loading" src="<?php echo wpsc_loading_animation_url(); ?>" />
										<?php _e('Updating cart...', 'wpsc'); ?>
									</div><!--close wpsc_loading_animation-->
								</div><!--close wpsc_buy_button_container-->
							<?php else : ?>
								<p class="soldout"><?php _e('This product has sold out.', 'wpsc'); ?></p>
							<?php endif ; ?>
						<?php endif ; ?>

						<?php
						/**
						 * Share this options 
						 */
						?>
						<!-- ShareThis -->
						<?php if ( get_option( 'wpsc_share_this' ) == 1 ): ?>
						<div class="st_sharethis" displayText="ShareThis"></div>
						<?php endif; ?>
						<!-- End ShareThis -->
						
						<?php
						/**
						 * Facebook like options 
						 */
						?>
						<!-- facebook likes -->
						<?php if(wpsc_show_fb_like()): ?>
	                        <div class="FB_like">
	                        <iframe src="https://www.facebook.com/plugins/like.php?href=<?php echo wpsc_the_product_permalink(); ?>&amp;layout=standard&amp;show_faces=true&amp;width=435&amp;action=like&amp;font=arial&amp;colorscheme=light" frameborder="0"></iframe>
	                        </div><!--close FB_like-->
                        <?php endif; ?>
						<!-- facebook likes -->
					</div><!--close productcol-->
					
					<?php  
					$id_product = wpsc_the_product_id();
					$metadata = get_product_meta($id_product, 'product_metadata', true);					
					$keys = array_keys($metadata);				
					
					$metadata_keys = array('dimensions', 'weight', 'weight_unit');
					$dimension_keys = array('height', 'height_unit', 'width', 'width_unit', 'length', 'length_unit');
					if(isset($metadata) && !empty($metadata )) :
						foreach($metadata_keys as $metadata_key){
							if(in_array($metadata_key, $keys)) :							
								$dimension = $metadata['dimensions'];			 
								$weight = $metadata['weight'];
								$weight_unit = $metadata['weight_unit'];
							else:
								$dimension = '';
								$weight = '';
								$weight_unit = '';
							endif;
						}
					endif;
					if(isset($dimension) && !empty($dimension )) :
						$height = $dimension['height'];
						$heightunit = $dimension['height_unit'];						
						$width = $dimension['width'];
						$widthunit = $dimension['width_unit'];						
						$length = $dimension['length'];
						$length_unit = $dimension['length_unit'];
					else: 
						$height = '';
						$heightunit = '';						
						$width = '';
						$widthunit = '';						
						$length = '';
						$length_unit = '';
					endif; 				
					?>
					<div id="tabs" class="tab">
						<ul class="tabs">
							<?php if( wpsc_the_product_description() || wpsc_the_product_additional_description() ) : ?>
							<li><a href="#tab-description" class="current"><?php _e( 'Description', 'wpsc' ); ?></a></li>
							<?php endif; ?>
							<?php if( !empty($weight)|| !empty($height) || !empty($width) || !empty($length) ) : ?>
							<li><a href="#tab-attributes"><?php _e( 'Attributes', 'wpsc' ); ?></a></li>
							<?php endif; ?>
							<?php if ( wpsc_have_custom_meta() ) : ?>
							<li><a href="#tab-customize"><?php _e( 'Advanced', 'wpsc' ); ?></a></li>
							<?php endif; ?>
							<?php if ( wpsc_product_has_personal_text() || wpsc_product_has_supplied_file() ) : ?>
							<li><a href="#tab-personalisation"><?php _e( 'Personalisation ', 'wpsc' ); ?></a></li>
							<?php endif; ?>
						</ul>
						<div class="tab_content">
							<?php if( wpsc_the_product_description() || wpsc_the_product_additional_description() ) : ?>
							<div id="tab-description" class="panel tabs_tab" style="display: block;">
								<?php do_action('wpsc_product_before_description', wpsc_the_product_id(), $wp_query->post); ?>
								<div class="product_description">
									<?php $content = wpsc_the_product_description(); echo templatemela_strip_images($content); ?>
								</div><!--close product_description -->
								<?php do_action( 'wpsc_product_addons', wpsc_the_product_id() ); ?>
								<?php do_action( 'wpsc_product_addon_after_descr', wpsc_the_product_id() ); ?>
							</div>
							<?php endif; ?>
							
							<?php if( !empty($weight)|| !empty($height) || !empty($width) || !empty($length) ) : ?>
							<div id="tab-attributes" class="panel tabs_tab" style="display: none;">
								<table class="shop_attributes">
								  <tbody>
									<?php if($weight) : ?>
									<tr>
									  <th><?php _e( 'Weight', 'wpsc' ); ?></th>
									  <td><?php echo $weight.$weight_unit; ?></td>
									</tr>
									<?php endif; ?>
									<?php if($height) : ?>
									<tr>
									  <th><?php _e( 'Height', 'wpsc' ); ?></th>
									  <td><?php echo $height.$heightunit; ?></td>
									</tr>
									<?php endif; ?>
									<?php if($width) : ?>
									<tr>
									  <th><?php _e( 'Width', 'wpsc' ); ?></th>
									 <td><?php echo $width.$widthunit; ?></td>
									</tr>
									<?php endif; ?>
									<?php if($length) : ?>
									<tr>
									  <th><?php _e( 'Length', 'wpsc' ); ?></th>
									  <td><?php echo $length.$length_unit; ?></td>
									</tr>
									<?php endif; ?>		
								  </tbody>
								</table>							
							</div>
							<?php endif; ?>
							
							<?php if ( wpsc_have_custom_meta() ) : ?>
							<div id="tab-customize" class="panel tabs_tab" style="display: none;">
								<?php
								/**
								 * Custom meta HTML and loop
								 */
								?>
								<?php 								
								if (wpsc_have_custom_meta()) : ?>
								<div class="custom_meta">
									<?php while ( wpsc_have_custom_meta() ) : wpsc_the_custom_meta(); ?>
										<?php if (stripos(wpsc_custom_meta_name(),'g:') !== FALSE) continue; ?>
										<strong><?php echo wpsc_custom_meta_name(); ?>: </strong><?php echo wpsc_custom_meta_value(); ?><br />
									<?php endwhile; ?>
								</div><!--close custom_meta-->
								<?php endif; ?>
							</div>
							<?php endif; ?>
							
							<?php if ( wpsc_product_has_personal_text() || wpsc_product_has_supplied_file() ) : ?>
							<div id="tab-personalisation" class="panel tabs_tab" style="display: none;">
								<?php
								/**
								 * Personalize Your Product options 
								 */
								?>
						
								<?php if ( wpsc_product_has_personal_text() ) : ?>
									<fieldset class="custom_text">
										<legend><?php _e( 'Personalize Your Product', 'wpsc' ); ?></legend>
										<p><?php _e( 'Complete this form to include a personalized message with your purchase.', 'wpsc' ); ?></p>
										<textarea cols='55' rows='5' name="custom_text"></textarea>
									</fieldset>
								<?php endif; ?>
	
								<?php if ( wpsc_product_has_supplied_file() ) : ?>
	
									<fieldset class="custom_file">
										<legend><?php _e( 'Upload a File', 'wpsc' ); ?></legend>
										<p><?php _e( 'Select a file from your computer to include with this purchase.', 'wpsc' ); ?></p>
										<input type="file" name="custom_file" />
									</fieldset>
								<?php endif; ?>
							</div>
							<?php endif; ?>
						</div>
					</div>
					
					
					<?php do_action ( 'wpsc_product_form_fields_end' ); ?>
					</form><!--close product_form-->
					
					

					
							<?php
							if ( (get_option( 'hide_addtocart_button' ) == 0 ) && ( get_option( 'addtocart_or_buynow' ) == '1' ) )
								echo wpsc_buy_now_button( wpsc_the_product_id() );

							echo wpsc_product_rater();

							echo wpe_also_bought( wpsc_the_product_id() ); ?>

					<form onsubmit="submitform(this);return false;" action="<?php echo esc_url( wpsc_this_page_url() ); ?>" method="post" name="product_<?php echo wpsc_the_product_id(); ?>" id="product_extra_<?php echo wpsc_the_product_id(); ?>">
						<input type="hidden" value="<?php echo wpsc_the_product_id(); ?>" name="prodid"/>
						<input type="hidden" value="<?php echo wpsc_the_product_id(); ?>" name="item"/>
					</form>
		</div><!--close single_product_display-->

		<?php echo wpsc_product_comments(); ?>

<?php endwhile;

    do_action( 'wpsc_theme_footer' ); ?>

</div><!--close single_product_page_container-->
