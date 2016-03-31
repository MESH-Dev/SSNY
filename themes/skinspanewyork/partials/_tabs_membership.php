					<div id="tabs" class="tab membership-tabs">
						<ul class="tabs">
							<li><a href="#tab-description" class="current"><?php _e( 'Description', 'wpsc' ); ?></a></li>

							<li><a href="#tab-treatments"><?php _e( 'Treatments', 'wpsc' ); ?></a></li>

							<li><a href="#tab-terms"><?php _e( 'Terms ', 'wpsc' ); ?></a></li>

						</ul>
						<div class="tab_content">
							<div id="tab-description" class="panel tabs_tab" style="display: block;">
								<?php do_action('wpsc_product_before_description', wpsc_the_product_id(), $wp_query->post); ?>
								<div class="product_description">
									<?php $content = wpsc_the_product_description(); echo templatemela_strip_images($content); ?>
								</div><!--close product_description -->
								<?php do_action( 'wpsc_product_addons', wpsc_the_product_id() ); ?>
								<?php do_action( 'wpsc_product_addon_after_descr', wpsc_the_product_id() ); ?>
							</div>						

							<div id="tab-treatments" class="panel tabs_tab" style="display: none;">
							  <ul>
  							  <li>Customized Facial</li>
  							  <li>Microdermabrasion Treatment</li>
  							  <li>Power Peel</li>
  							  <li>Swedish Massage (50 Minutes)</li>
  							  <li>Deep Tissue Massage (50 Minutes)</li>
  							  <li>Organic Sunless Tanning</li>
  							  <li>Brazilian Wax + Choice of Upper Lip, Chin or Underarm Wax</li>
							  </ul>				
							</div>
							

							
							<div id="tab-terms" class="panel tabs_tab" style="display: none;">
							  <ul>
							    <li>Membership Fee billed on First of Each Month</li>
							    <li>Unused First Service Can be Rolled Over to Future Months</li>
							    <li>Cancelable at any time before the 20th of Each Month</li>
							    <li>Can’t be combined with any other Offers</li>
							    <li>Non-transferrable</li>
							    <li>No cash value</li>
							    <li>Members are encouraged to tip on the full price of services</li>
							  </ul>
							</div>

						</div>
						
					</div>