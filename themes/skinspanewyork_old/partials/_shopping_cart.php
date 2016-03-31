<div id="cart-overview" class="shoppingcart">
	<div class="content-shadow shadow-brown"></div>
		<h2>Shopping Cart</h2>
		
		<?php if (function_exists('wpsc_cart_item_count')) { // checks to see if this function exists
                  if (wpsc_cart_item_count() == 0 || isset($_GET['sessionid'])) { // checks if count is zero or sessionid is set
                      echo "<p>You have <em class='count'>0</em> items in your cart.</p>";
                  } elseif(wpsc_cart_item_count() == 1) { 
                      echo "<p>You have <em class='count'>1</em> item in your cart.</p>"; 
                  } else {
	                  echo "<p>You have <em class='count'>".wpsc_cart_item_count()."</em> items in your cart.</p>";
                  
                  }
              } 
              if (wpsc_cart_item_count() == 0){ ?>
              	<a class="go-checkout" href="<?php bloginfo('url')?>/special-offers/">Checkout our Special Offers! &raquo;</a>
          <?php }else{?>
              	<a class="go-checkout" href="<?php bloginfo('url')?>/store/checkout/">Go to Checkout &raquo;</a>
	     <?php } ?>		

</div>
