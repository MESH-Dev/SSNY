<?php
global $wp_query;
$image_width = get_option('product_image_width');
/*
 * Most functions called in this page can be found in the wpsc_query.php file
 */
?>
<div id="default_products_page_container" class="wrap wpsc_container">

  <?php 		
    wpsc_output_breadcrumbs(array(
		  'show_home_page' => false
		)); 
	?>

	
	<div id="wpe_shop" class="">
		<ul class="product-list">
		<?php while (wpsc_have_products()) :  wpsc_the_product(); ?>
			
		  <li>
		    <div class="product-image">
  		    	<?php if(wpsc_the_product_thumbnail()) : ?>
          		<a class="<?php echo wpsc_the_product_image_link_classes(); ?>" href="<?php echo esc_url( wpsc_the_product_permalink() ); ?>">
          			<img class="" id="product_image_<?php echo wpsc_the_product_id(); ?>" alt="<?php echo wpsc_the_product_title(); ?>" title="<?php echo wpsc_the_product_title(); ?>" src="<?php echo wpsc_the_product_thumbnail(150); ?>"/>					
          		</a>
          	<?php endif; ?>   
		    </div>
		    <div class="product-body">
		      <h2 class="product-title"><a href="<?php echo esc_url( wpsc_the_product_permalink() ); ?>"><?php echo wpsc_the_product_title(); ?></a></h2>
  		    <div class="product-options">
    		    <?php include('partials/_products_form.php')?>
    		    
  		    </div>
  		    <div class="product-description">
  		      <?php 
  		        if(wpsc_the_product_additional_description()){
		            echo wpsc_the_product_additional_description();
		          }else{
  		          echo shorten_description(wp_strip_all_tags(wpsc_the_product_description()));
		          }
            ?>
<!--             <a class="read-more" href="<?php echo esc_url( wpsc_the_product_permalink() ); ?>">Read more &raquo;</a> -->
  		    </div>
		    </div>	  
		  </li>
			
		<?php endwhile; ?>
		</ul>
		
		
		<span class="wpeshop_default_width" style="display:none; visibility:hidden"></span>

		</div>
		
		<?php if(wpsc_product_count() == 0):?>
			<h3><?php  _e('There are no products in this group.', 'wpsc'); ?></h3>
		<?php endif ; ?>
	    <?php do_action( 'wpsc_theme_footer' ); ?>

</div><!--close default_products_page_container-->
