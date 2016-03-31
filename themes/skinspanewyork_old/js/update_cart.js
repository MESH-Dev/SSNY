jQuery(document).ready(function($) {
	     $("input.sksp_wpsc_buy_button").click(function() {
	          if($(this).parents("form:first").find("select.wpsc_select_variation[value=0]:first").length) { // if have variations and not selected prevent from clicking through
	               return false;      
	          }
	         var itemCount = parseInt($("#shopping-bag em.count").text()); // selects the current count of the header cart items
	        	itemCount++;
	        	  
	          $("#shopping-bag em.count").text(itemCount);
	     });
	});
