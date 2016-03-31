<li>
						
	<?php if(wpsc_the_product_thumbnail()) : ?>
		<a class="<?php echo wpsc_the_product_image_link_classes(); ?>" href="<?php echo esc_url( wpsc_the_product_permalink() ); ?>">
			<img class="product_image" id="product_image_<?php echo wpsc_the_product_id(); ?>" alt="<?php echo wpsc_the_product_title(); ?>" title="<?php echo wpsc_the_product_title(); ?>" src="<?php echo wpsc_the_product_thumbnail(); ?>"/>					
		</a>
	<?php endif; ?>
	
				
	<a class="wpsc_product_title" href="<?php echo esc_url( wpsc_the_product_permalink() ); ?>"><?php echo wpsc_the_product_title(); ?></a>
	
	
	<?php echo wpsc_the_product_description();?>
	
	
  <?php wpsc_the_product_price_display(); ?>
		
  <?php 
    // PRODUCT OPTIONS FORM
    //include('partials/_products_form.php') ?>
		
	<?php if(wpsc_product_on_special()) : ?><span class="sale"><?php _e('Sale', 'wpsc'); ?></span><?php endif; ?>
	
	
</li>