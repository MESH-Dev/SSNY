					<div id="tabs" class="tab">
						<ul class="tabs">
							<?php if( wpsc_the_product_description() || wpsc_the_product_additional_description() ) : ?>
							<li><a href="#tab-description" class="current"><?php _e( 'Description', 'wpsc' ); ?></a></li>
							<?php endif; ?>
							<?php if( !empty($weight)|| !empty($height) || !empty($width) || !empty($length) ) : ?>
							<li><a href="#tab-attributes"><?php _e( 'Attributes', 'wpsc' ); ?></a></li>
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