widthClassOptions = [];

var widthClassOptions = ({

	bestseller            : 'topsellers_default_width',		

	featured              : 'featured_default_width',

	special               : 'special_default_width',

	latest      	      : 'latest_default_width',

	recentlyview          : 'recentlyview_default_width',

	brand	              : 'brand_default_width',

	thumblist 			  : 'thumblist_default_width',

	module				  : 'grid_default_width',

	shop				  : 'shop_default_width',

	wpe_shop			  : 'wpeshop_default_width',

	upsells               : 'upsells_default_width',

	related 			  : 'related_default_width',

	crosssells			  : 'crosssells_default_width',	

	testimonial			  : 'testimonial_default_width',
	category 			  : 'category_default_width',

});

itemClassOptions = [];

var itemClassOptions = ({

	bestseller            : 3,		

	featured              : 3,

	special               : 3,

	latest      	      : 3,

	recentlyview          : 3,

	brand	              : 3,

	thumblist 			  : 3,

	module				  : 3,

	shop				  : 3,

	upsells               : 3,

	related 			  : 3,

	crosssells			  : 3,	
	category              : 4,

	testimonial			  : 3

});

jQuery(document).ready(function() {	

	jQuery("ul.products li").wrapInner("<div class='product-block'></div>");

	jQuery(".customNavigation").hide();	

	jQuery(".woocommerce div#container").wrap("<div class='shop-page'><div id='primary' class='site-content'></div></div>");		

	jQuery('input[type="checkbox"]').tmMark(); 

	jQuery('input[type="radio"]').tmMark();

	jQuery('select.orderby').customSelect();

	jQuery('select.wpsc_select_product_rating').customSelect();

	jQuery('select#rating').customSelect();

	jQuery('select#shipping_method').customSelect();

	/*jQuery('.newsletter-submit').val("Sign Up");*/
	

	jQuery(".products li .product-block .wpsc_buy_button_container").wrap("<div class='block_hover'></div>");


	jQuery(".products li .product-block").find(".product_footer").each(function(i){

		 jQuery(this).prependTo(jQuery(this).parent().parent().find(".block_hover"));

	});	 

	 // to remove extra text from price

	jQuery(".products li .wpsc_product_price p").contents().filter(function () {

     	return this.nodeType === 3; 

	}).remove();

	jQuery(".products li .wpsc-product-old-price").contents().filter(function () {

     	return this.nodeType === 3; 

	}).remove();

	jQuery(".products li .wpsc-product-price").contents().filter(function () {

     	return this.nodeType === 3; 

	}).remove();	

	jQuery(".products li .wpsc_loading_animation").contents().filter(function () {

     	return this.nodeType === 3; 

	}).remove();		

	jQuery('.cart-widget-remove .remove_button').val("Remove");

	

	// to remove FROM text from price

	jQuery(".pricedisplay").each(function(i){

	   var originalString = jQuery(this).html();

	   var updatedString = originalString.replace("from", "");

	   jQuery(this).html(updatedString);

 	 });	

	jQuery("ul.products li .product-block a img").wrap("<div class='image-block'></div>");	


	// upsells

	jQuery(".upsells.products").wrap("<div id='upsells' class='home-products block products_block'></div>");

	jQuery( "<span style='display: none; visibility: hidden;' class='upsells_default_width'></span>" ).appendTo( jQuery( "div#upsells" ) );

	jQuery( '<div class="customNavigation" style="display: block;"><a class="btn prev">&nbsp;</a><a class="btn next">&nbsp;</a></div>' ).prependTo( jQuery( "div#upsells" ) );
	

	// cross-sells


	jQuery(".cross-sells").wrap("<div id='crosssells' class='home-products block products_block'></div>");

	jQuery( "<span style='display: none; visibility: hidden;' class='crosssells_default_width'></span>" ).appendTo( jQuery( "div#crosssells" ) );

	jQuery( '<div class="customNavigation" style="display: block;"><a class="btn prev">&nbsp;</a><a class="btn next">&nbsp;</a></div>' ).prependTo( jQuery( "div#crosssells" ) );

	

	// related products

	jQuery(".related.products").wrap("<div id='related' class='home-products block products_block'></div>");

	jQuery( "<span style='display: none; visibility: hidden;' class='related_default_width'></span>" ).appendTo( jQuery( "div#related" ) );

	jQuery( '<div class="customNavigation" style="display: block;"><a class="btn prev">&nbsp;</a><a class="btn next">&nbsp;</a></div>' ).prependTo( jQuery( "div#related" ) );

	
	jQuery(".nav-menu:first > li").each(function(i){

	    jQuery(this).addClass("menu" + (i+1));

 	 }); 

	

	jQuery(".service").each(function(i){ jQuery(this).addClass("services" + (i+1));}); 

	jQuery(".home_offer").each(function(i){ jQuery(this).addClass("home_offer" + (i+1));}); 

	jQuery('<div class="extra"></div>').appendTo('#options li a');

	jQuery('<div class="extra"></div>').appendTo('.single-wpsc-product #tabs li a');

	jQuery(".related.products h2").wrap("<div class='h_outer'></div>");

	jQuery(".upsells.products h2").wrap("<div class='h_outer'></div>");

	jQuery(".recentcomments").addClass(".one_third_comment");

	jQuery(".type-product").find(".onsale").each(function(i){

  		 jQuery(this).prependTo(jQuery(this).parent().parent().find(".images"));

 	  });

	

//=================== start search toggle ========================//	

if (jQuery(window).width() > 999){

jQuery(document).ready(function(){

 jQuery(".search_toggle").click(function() {                      

    jQuery('html').click(function() {

        jQuery(this).unbind('click'); 

        jQuery('.header-middle-top .search-form').toggle();    

     }); 

    jQuery('.header-middle-top .search-form').toggle(); 

    jQuery(".header-middle-top input#s.search-field").focus(); 

    return false; 

  });

});

}

//=================== end search toggle ========================//

//=================== header fix ========================//

if (jQuery(window).width() > 999){

jQuery(window).scroll(function() {							   

 if (jQuery(this).scrollTop() > 200){    

      jQuery('.top_main').addClass("fixed");

    }else {

      jQuery('.top_main').removeClass("fixed");

      }

}); 

}

//=================== end header fix ========================//



//=================== start parralex ========================//

var $k = jQuery.noConflict();

$k(document).ready(function(){

	// Cache the Window object

	$window = $k(window);

                

   $k('div[data-type="background"]').each(function(){

     var $bgobj = $k(this); // assigning the object

                    

      $k(window).scroll(function() {

                    

		// Scroll the background at var speed

		// the yPos is a negative value because we're scrolling it UP!								

		var yPos = -($window.scrollTop() / $bgobj.data('speed')); 

		

		// Put together our final background position

		var coords = '50% '+ yPos + 'px';



		// Move the background

		$bgobj.css({ backgroundPosition: coords });

		

}); // window scroll Ends



 });	



}); 

/* 

 * Create HTML5 elements for IE's sake

 */



document.createElement("article");

document.createElement("section");







//=================== end parralex ========================//



	//=================== Show or hide Go Top button ========================//

	jQuery(window).scroll(function() {

		if (jQuery(this).scrollTop() > 200) {

			jQuery('.go-top').fadeIn(200);

		} else {

			jQuery('.go-top').fadeOut(200);

		}

	});	

				

	//=================== Animate the scroll to top ========================//

	jQuery('.go-top').click(function(event) {

		event.preventDefault();		

		jQuery('html, body').animate({scrollTop: 0}, 300);

	});	

	/* Toggle */

	(function ($) {	

		$('.togg a.tog').click(function (i) { 

			var dropDown = $(this).parent().find('.tab_content');

			

			$(this).parent().find('.tab_content').not(dropDown).slideUp();

			

			if ($(this).hasClass('current')) { 

				$(this).removeClass('current');

			} else { 

				$(this).addClass('current');

			}

			

			dropDown.stop(false, true).slideToggle().css( { display : 'block' } );

			

			i.preventDefault();

		} );

	} )(jQuery);

	

	/* Accordion */

	(function ($) { 

		$('.accordion a.tog').click(function (j) { 

			var dropDown = $(this).parent().find('.tab_content');

			

			$(this).parent().parent().find('.tab_content').not(dropDown).slideUp();

			

			if ($(this).hasClass('current')) { 

				$(this).removeClass('current');

			} else { 

				$(this).parent().parent().find('.tog').removeClass('current');

				$(this).addClass('current');

			}

			

			dropDown.stop(false, true).slideToggle().css( { display : 'block' } );

			

			j.preventDefault();

		} );

	} )(jQuery);



	/* Tabs */

	(function ($) { 

		$('.tab ul.tabs li:first-child a').addClass('current');

		$('.tab .tab_content div.tabs_tab:first-child').show();

		

		$('.tab ul.tabs li a').click(function (g) { 

			var tab = $(this).parent().parent().parent(), 

				index = $(this).parent().index();

			

			tab.find('ul.tabs').find('a').removeClass('current');

			$(this).addClass('current');

			

			tab.find('.tab_content').find('div.tabs_tab').not('div.tabs_tab:eq(' + index + ')').slideUp();

			tab.find('.tab_content').find('div.tabs_tab:eq(' + index + ')').slideDown();

			

			g.preventDefault();

		} );

	} )(jQuery);

	

	/* Tour */

	(function ($) { 

		$('.tour_content ul.tour li:first-child').addClass('current');

		$('.tour_content div.tour_box:first').show();

		

		$('.tour_content ul.tour li a').click(function (f) { 

			var tour = $(this).parent().parent().parent().parent(), 

				index = $('ul.tour li').index($(this).parent());

			

			tour.find('ul.tour').find('li').removeClass('current');

			$(this).parent().addClass('current');

			

			tour.find('div.tour_box').not('div.tour_box:eq(' + index + ')').slideUp();

			tour.find('div.tour_box:eq(' + index + ')').slideDown();

			

			f.preventDefault();

		} );

	} )(jQuery);

		

	// Responsive Open Menu

	var $responsive_menu = jQuery.noConflict(); 

	$responsive_menu(".nav-button").click(function () {

		$responsive_menu(".nav-button, .primary-nav").toggleClass("open");

	});	

	

	



	//Add class to Products Block

	jQuery(".products_block").each(function() {

		var objectID = jQuery(this).attr('id');	

		jQuery("#porduct_thumbs").addClass("products");

		var porducts_count = jQuery("#" + objectID + " ul.products li").length;

		var item_count = itemClassOptions[objectID];

		jQuery("div.products").addClass("block_content");

		if(porducts_count > 0)

		{

			if(porducts_count > item_count)

			{			

				jQuery("#" + objectID + " .customNavigation").show();

				jQuery("#" + objectID + " ul.products").attr("id", objectID + "-carousel");					

				jQuery("#" + objectID + " ul.products").addClass("product-carousel");

				jQuery("#" + objectID + " ul.products li").addClass("slider-item");				

			}else{

				jQuery("#" + objectID + " .customNavigation").hide();

				jQuery("#" + objectID + " ul.products").attr("id", objectID + "-grid");

				jQuery("#" + objectID + " ul.products").addClass("product_list");

				jQuery("#" + objectID + " ul.products li").addClass("product-list-item");

			}		

		}

	});

	jQuery(".archive .shop-page ul.products").addClass("product_list");

	jQuery('.site-main .secondary-sidebar .widget ul').addClass('main-ul');

	jQuery(".archive .shop-page ul.products").wrap('<div class="products_block"></div>');

	jQuery(".archive .shop-page ul.products").attr("id","shop-grid");

	jQuery( "<span style='display: none; visibility: hidden;' class='shop_default_width'></span>" ).appendTo( jQuery( ".archive .shop-page .products_block" ) );

	jQuery("#commentform textarea").addClass("required");

	jQuery("#commentform #author").addClass("required");

	jQuery("#commentform #email").addClass("required");

	jQuery("#commentform").validate();

    jQuery("#contactform").validate();

});



function productCarouselAutoSet() { 

	jQuery(".products_block .product-carousel").each(function() {

															

		var objectID = jQuery(this).attr('id');

		if(widthClassOptions[objectID.replace('-carousel','')])

			var myDefClass= widthClassOptions[objectID.replace('-carousel','')];

		else

			var myDefClass= 'grid_default_width';

		var slider = jQuery(".products_block #" + objectID);

		slider.sliderCarousel({

			defWidthClss : myDefClass,

			subElement   : '.slider-item',

			firstClass   : 'first_item_tm',

			lastClass    : 'last_item_tm',

			slideSpeed : 200,

			paginationSpeed : 800,

			autoPlay : false,

			stopOnHover : false,

			goToFirst : true,

			goToFirstSpeed : 5000,

			goToFirstNav : true,

			pagination : true,

			paginationNumbers: false,

			responsive: true,

			responsiveRefreshRate : 200,

			baseClass : "slider-carousel",

			theme : "slider-theme",

			autoHeight : true

		});

		

		var nextButton = jQuery(this).parent().parent().find('.next');

		var prevButton = jQuery(this).parent().parent().find('.prev');

		nextButton.click(function(){

			slider.trigger('slider.next');

		})

		prevButton.click(function(){

			slider.trigger('slider.prev');

		})

	});

}

jQuery(window).load(function(){productCarouselAutoSet();});

/*jQuery(window).resize(function(){productCarouselAutoSet();});*/



function productListAutoSet() { 

	jQuery(".products_block .product_list").each(function(){



		var objectID = jQuery(this).attr('id');
jQuery(this).css("opacity", "1");

		if(objectID.length >0) {

			if(widthClassOptions[objectID.replace('-grid','')])

				var myDefClass= widthClassOptions[objectID.replace('-grid','')];

		}else{

			var myDefClass= widthClassOptions[objectID];

		}

		jQuery(this).smartColumnsRows({

			defWidthClss : myDefClass,

			subElement   : 'li'

		});

	});		

}

jQuery(window).load(function(){productListAutoSet();});

jQuery(window).resize(function(){productListAutoSet();})



function productShopAutoSet() { 

	

	jQuery(".shop .product_list").each(function(){

		var objectID = jQuery(this).attr('id');

		

		if(objectID.length >0) {

			

			if(widthClassOptions[objectID.replace('-grid','')])

				var myDefClass= widthClassOptions[objectID.replace('-grid','')];

		}else{

			var myDefClass= widthClassOptions[objectID];

		}

		jQuery(this).smartColumnsRows({

			defWidthClss : myDefClass,

			subElement   : 'li'

		});

	});		

}

jQuery(window).load(function(){productShopAutoSet();});

//jQuery(window).resize(function(){productShopAutoSet();})



jQuery(document).ready(function() { mobileToggleColumn();});

jQuery(window).resize(function() { mobileToggleColumn();});

function mobileToggleColumn(){	

	if (jQuery(window).width() < 1000){

		jQuery('.site-main .widget ul.main-ul').css('display','none');

		jQuery('.footer-main .widget ul.main-ul').css('display','none');

		jQuery('.site-main .widget .widget-title .mobile_togglecolumn').removeClass('clearfix');

		jQuery('.site-main .widget .widget-title .mobile_togglecolumn').remove();

		jQuery('.site-main .widget .widget-title').append( "<span class='mobile_togglecolumn'>&nbsp;</span>" );

		jQuery('.site-main .widget .widget-title').addClass('toggle');

		jQuery('.site-main .widget .widget-title .mobile_togglecolumn').click(function(){

			jQuery(this).parent().toggleClass('active').parent().find('ul.main-ul').toggle('slow');

		});		

		jQuery('.footer-main .widget .widget-title .mobile_togglecolumn').removeClass('clearfix');

		jQuery('.footer-main .widget .widget-title .mobile_togglecolumn').remove();

		jQuery('.footer-main .widget .widget-title').append( "<span class='mobile_togglecolumn'>&nbsp;</span>" );

		jQuery('.footer-main .widget .widget-title').addClass('toggle');

		jQuery('.footer-main .widget .widget-title .mobile_togglecolumn').click(function(){

			jQuery(this).parent().toggleClass('active').parent().find('ul.main-ul').toggle('slow');

		});

	}

	else{

		jQuery('.footer-main .widget ul.main-ul').css('display','block');

		jQuery('.site-main .widget ul.main-ul').css('display','block');

		

		jQuery('.site-main .widget .widget-title').removeClass('toggle');

		jQuery('.site-main .widget .widget-title').removeClass('active');

		jQuery('.site-main .widget .widget-title .mobile_togglecolumn').remove();

		

		jQuery('.footer-main .widget .widget-title').removeClass('toggle');

		jQuery('.footer-main .widget .widget-title').removeClass('active');

		jQuery('.footer-main .widget .widget-title .mobile_togglecolumn').remove();

	}

}





/*****************start tab script*******************/

jQuery(document).ready(function () {

  jQuery('#horizontalTab').easyResponsiveTabs({

    type: 'default', //Types: default, vertical, accordion 

    width: 'auto', //auto or any width like 600px

    fit: true, // 100% fit in a container

    closed: 'accordion', // Start closed if in accordion view

    activate: function(event) { // Callback function if tab is switched

      var $tab = jQuery(this);

      var $info = jQuery('#tabInfo');

      var $name = jQuery('span', $info);



      $name.text($tab.text());



      $info.show();

    }

  });



  jQuery('#verticalTab').easyResponsiveTabs({

    type: 'vertical',

    width: 'auto',

    fit: true

  });

});

/*****************end tab script*******************/











/*****************start animation script*******************/



function hb_animated_contents() {

jQuery(".hb-animate-element:in-viewport").each(function (i) {

var $this = jQuery(this);

if (!$this.hasClass('hb-in-viewport')) {

setTimeout(function () {

$this.addClass('hb-in-viewport');

}, 180 * i);

}

});

}

jQuery(window).scroll(function () {

		 hb_animated_contents();

	});

	

	jQuery(window).load(function () { 

	  hb_animated_contents(); 

	});

/*****************end animation script*******************/







      