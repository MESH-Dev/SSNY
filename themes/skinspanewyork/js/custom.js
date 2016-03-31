jQuery(document).ready(function(){
		jQuery('.wpsc_buy_button', this).click(function(){
			var dropdowns = jQuery(this).closest('form').find('.wpsc_select_variation');
			var not_selected = false;
			dropdowns.each(function(){
				var t = jQuery(this);
				if(t.val() <= 0){
					not_selected = true;
					t.css('position','relative');
					t.animate({'left': '-=5px'}, 50, function(){
						t.animate({'left': '+=10px'}, 100, function(){
							t.animate({'left': '-=10px'}, 100, function(){
								t.animate({'left': '+=10px'}, 100, function(){
									t.animate({'left': '-=5px'}, 50);
								});
							});
						});
					});
				}
			});
			if (not_selected)
				return false;
		});
		
		jQuery('.call-to-book').on('click', function(){
  		jQuery('.call-btn').animate({
            height: "toggle",
            opacity: "toggle"
        }, "slow");
  		jQuery('.call-to-book .phone-numbers').animate({
            height: "toggle",
            opacity: "toggle"
        }, "slow");
		});
		
		jQuery('.phone-number').on('click', function(){
  		var location = jQuery(this).attr('id');
  		ga('send', 'event', 'telephone', 'call', 'slider-'+location);
		});
		
		jQuery('.location-number').on('click', function(){
  		var location = jQuery(this).attr('id');
  		ga('send', 'event', 'telephone', 'call', 'location-page-'+location);
		});

		jQuery('.deals-sign-up').on('click', function(){
  		var location = jQuery(this).attr('id');
  		ga('send', 'event', 'Weekly Deals Form', 'subscribe', 'footer');
		});					
});