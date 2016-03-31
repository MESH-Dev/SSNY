<?php
//============================================ General Settings ===================================================================
$options5 = array(array());

$options5[] = array("id" => "tmoption_logo_image",
					"label" => "Logo Image",
					"type" => "upload",
					"description" => "Upload Your Logo.");	
								
$options5[] = array("id" => "tmoption_logo_image_alt",
					"label" => "Logo Image Alt",
					"type" => "textbox",
					"std" => "Lookz",
					"description" => "Define logo image alt here.");
					
$options5[] = array("id" => "tmoption_favicon_icon",
					"label" => "Favicon Icon",
					"type" => "upload-1",
					"description" => "Define favicon icon path here.");

$options5[] = array("id" => "tmoption_contact_email",
					"label" => "Contact Email",
					"type" => "textbox",
					"description" => "Email ID where to receive contact emails.");
					
$options5[] = array("id" => "tmoption_responsive",
          			"label" => "Do you want Respnsive Design?",
         			"type" => "select",
          			"description" => "Enable or Disable Responsive Design.",
          			"options" => array('yes' => 'Yes','no' => 'No'));		
					
$options5[] = array("id" => "tmoption_animation",
          			"label" => "Do you want animation?",
         			"type" => "select",
          			"description" => "Enable or Disable animation.",
          			"options" => array('yes' => 'Yes','no' => 'No'));													

$options5[] = array("id" => "tmoption_control_panel",
					"label" => "Show Control Panel?",
					"type" => "select",
					"description" => "Enable or Disable Control Panel.",
					"options" => array('yes' => 'Yes','no' => 'No'));
					
$options5[] = array("id" => "tmoption_featured_title",
				  "label" => "Homepage Featured Product Title",
				  "type" => "textbox",
				  "std" => "Featured products",
				  "description" => "Displays homepage featured product title.");
				  
$options5[] = array("id" => "tmoption_offer_title",
				  "label" => "Homepage Offer Slider Title",
				  "type" => "textbox",
				  "std" => "OFFER OF THE WEEK",
				  "description" => "Displays homepage Offer Slider title.");				  
				  
$options5[] = array("id" => "tmoption_testimonial_title",
				  "label" => "Homepage Testimonial Title",
				  "type" => "textbox",
				  "std" => "What People Say",
				  "description" => "Displays homepage Testimonial title.");
				  
$options5[] = array("id" => "tmoption_brandlogo_title",
				  "label" => "Homepage Brand Title",
				  "type" => "textbox",
				  "std" => "Our Brands",
				  "description" => "Displays homepage Brand title.");
				  
$options5[] = array("id" => "tmoption_aboutteam_title",
				  "label" => "AboutUspage Team Title",
				  "type" => "textbox",
				  "std" => "About the Team",
				  "description" => "Displays AboutUspage Team title.");
				  										
$options5[] = array("id" => "tmoption_shop_items",
					"label" => "Display number of Product Item in Shop Page",	
					"type" => "textbox", 
					"std" => "6",				
					"description" => "set number of Shop page Item");
					
$options5[] = array("id" => "tmoption_navigation_option",
					"label" => "Pagination",
					"type" => "select",
					"description" => "Choose the Pagination Option For Theme.",
					"options" => array('2' => 'Numbering','1' => 'Default'));	
					
/*$options5[] = array("id" => "tmoption_pagination_bkgcolor",
					"label" => "Pagination Background Color",
					"std" => "FFFFFF",
					"type" => "textbox-1",
					"description" => "Change your pagination background color.");
						
$options5[] = array("id" => "tmoption_pagination_active_hover_bkgcolor",
					"label" => "Pagination Active and Hover Background Color",
					"std" => "FFFFFF",
					"type" => "textbox-1",
					"description" => "Change your pagination Active and Hover background color.");*/
															
$options5[] = array("id" => "tmoption_google_analytics_id",
					"label" => "Google Analytic ID",
					"type" => "textbox",
					"description" => "Google Analytic ID (e.g UA-8934430-55 ), If Provide then it will enable Google Analytics.");
									
$options5[] = array("label" => "Backgroung Settings",
					"title" =>"Backgroung Settings",
					"type" => "Title-1");
					
$options5[] = array("id" => "tmoption_texture",
					"label" => "Predefined Background Image",
					"type" => "texture",
					"std" =>"body-bg.png",
					"options" => array('body-bg.png' => 'body-bg', 'body-bg2.png'=>'body-bg2', 'body-bg3.png'=>'body-bg3', 'body-bg4.png'=>'body-bg4', 'body-bg5.png'=>'body-bg5', 'body-bg6.png'=>'body-bg6', 'body-bg7.png'=>'body-bg7', 'body-bg8.png'=>'body-bg8', 'body-bg9.png'=>'body-bg9', 'body-bg10.png'=>'body-bg10', 'body-bg11.png'=>'body-bg11', 'body-bg12.png'=>'body-bg12', 'body-bg13.png'=>'body-bg13', 'body-bg14.png'=>'body-bg14', 'body-bg15.png'=>'body-bg15', 'body-bg16.png'=>'body-bg16'),
					"description" => "Choose your body background texture image.");
					
$options5[] = array("id" => "tmoption_background_upload",
					"label" => "Upload Background Image",
					"type" => "upload-3",
					"description" => "Upload Your Background.");	
					
$options5[] = array("id" => "tmoption_back_repeat",
					"label" => "Background Repeat",
					"type" => "select",
					"description" => "Choose Background repeate.",
					"options" => array('repeat' => 'repeat','no-repeat' => 'no-repeat','repeat-x' => 'repeat-x','repeat-y' => 'repeat-y'));	
					
$options5[] = array("id" => "tmoption_back_position",
					"label" => " Background Position",
					"type" => "select",
					"description" => "Choose Backgroung position.",
					"options" => array('top+left' => 'top left','top+center' => 'top center','top+right' => 'top right','center+right' => 'center right','center+left' => 'center left','center+center' => 'center center','bottom+right' => 'bottom right','bottom+center' => 'bottom center','bottom+left' => 'bottom left'));	
				
$options5[] = array("id" => "tmoption_back_attachment",
					"label" => "Background Attachment",
					"type" => "select",
					"description" => "Choose Background attachment.",
					"options" => array('scroll' => 'Scroll','Fixed' => 'fixed'));	

$options5[] = array("id" => "tmoption_bkg_color",
					"label" => "Body Background Color",
					"type" => "textbox-1",
					"std" => "FFFFFF",
					"description" => "Change your body background color.");

$options5[] = array("id" => "tmoption_bodyfont_color",
					"label" => "Body Font Color",
					"std" => "666666",
					"type" => "textbox-1",
					"description" => "Change your body font color.");			

$options5[] = array("id" => "tmoption_bodyfont",
					"label" => "Body Font",
					"type" => "select",
					"description" => "Change your body font.",
					"options" => array('Lato'=>'Lato','please-select'=>'please-select','Open+Sans'=>'Open Sans','Antic'=>'Antic','Bitter'=>'Bitter','Droid+Serif'=>'Droid Serif','Philosopher'=>'Philosopher','Oxygen'=>'Oxygen','Rokkitt'=>'Rokkitt','Galdeano'=>'Galdeano','Droid+Sans'=>'Droid Sans','Oswald'=>'Oswald','play'=>'play','Cabin'=>'Cabin','Cuprum'=>'Cuprum','varela'=>'varela','Andika'=>'Andika','Ubuntu' =>'Ubuntu','Other+Fonts'=>'Other Fonts'));
					
$options5[] = array("id" => "tmoption_bodyfont_other",
					"label" => "Specified Other Body Font",
					"type" => "textbox",
					"std" => "sans-serif",
					"description" => "Change your specified body font.");

									
//================================================================ Header Settings ===================================================================
$options2 = array(array());

$options2[] = array("id" => "tmoption_navfont_color",
					"label" => "Navigation Font Color",
					"type" => "textbox-1",
					"std" => "222222",
					"description" => "Change your Navigation Font color.");
					
$options2[] = array("id" => "tmoption_navfont_hover_color",
					"label" => "Navigation Font hover Color",
					"type" => "textbox-1",
					"std" => "222222",
					"description" => "Change your Navigation Font hover color.");
					
$options2[] = array("id" => "tmoption_submenu_navfont_color",
					"label" => "Submenu Navigation Font Color",
					"type" => "textbox-1",
					"std" => "777777",
					"description" => "Change your Submenu Navigation Font color.");
					
$options2[] = array("id" => "tmoption_submenu_navfont_hover_color",
					"label" => "Submenu Navigation Font Hover Color",
					"type" => "textbox-1",
					"std" => "222222",
					"description" => "Change your Submenu Navigation Font Hover color.");

$options2[] = array("id" => "tmoption_submenu_navbackground_hover_color",
					"label" => "Submenu Navigation Background Hover Color",
					"type" => "textbox-1",
					"std" => "EEEEEE",
					"description" => "Change your Submenu Navigation Background Hover color.");
														
$options2[] = array("id" => "tmoption_navfont",
					"label" => "Navigation Font",
					"type" => "select",
					"description" => "Change your navigation font.",
					"options" => array('Lato' =>'Lato','please-select'=>'please-select','Droid+Sans'=>'Droid Sans','Antic'=>'Antic','Bitter'=>'Bitter','Droid+Serif'=>'Droid Serif','Philosopher'=>'Philosopher','Oxygen'=>'Oxygen','Rokkitt'=>'Rokkitt','Galdeano'=>'Galdeano','Open+Sans'=>'Open Sans','Oswald'=>'Oswald','play'=>'play','Cuprum'=>'Cuprum','varela'=>'varela','Andika'=>'Andika','Other+Fonts'=>'Other Fonts'));
					
$options2[] = array("id" => "tmoption_navfont_other",
					"label" => "Specified Other Navigation Font",
					"type" => "textbox-3",
					"std" => "sans-serif",
					"description" => "Change your specified navigation font.");		
					
$options2[] = array("id" => "tmoption_cart_text",
					"label" => "Header Cart Text",
					"std" => "Cart",
					"type" => "textbox",
					"description" => "Change your header cart text.");
															
$options2[] = array("id" => "tmoption_myaccount_text",
					"label" => "Header My Account",
					"std" => "My Account",
					"type" => "textbox",
					"description" => "Change your header link myaccount text.");	
					
$options2[] = array("id" => "tmoption_register_text",
					"label" => "Header Login / Register Text",
					"std" => "Login / Register",
					"type" => "textbox",
					"description" => "Change your header link register text.");	
					
$options2[] = array("id" => "tmoption_logout_text",
					"label" => "Header Logout Text",
					"std" => "Logout",
					"type" => "textbox",
					"description" => "Change your header link logout text.");
		
//============================================= Content Settings ========================================================
	
$options10[] = array("id" => "tmoption_h1font",
					"label" => "H1 Font",
					"type" => "select",
					"description" => "Change your H1 font.",
					"options" => array('Lato' =>'Lato','please-select'=>'please-select','Droid+Sans'=>'Droid Sans','Antic'=>'Antic','Bitter'=>'Bitter','Droid+Serif'=>'Droid Serif','Philosopher'=>'Philosopher','Oxygen'=>'Oxygen','Rokkitt'=>'Rokkitt','Galdeano'=>'Galdeano','Open+Sans'=>'Open Sans','Oswald'=>'Oswald','play'=>'play','Cuprum'=>'Cuprum','varela'=>'varela','Andika'=>'Andika','Other+Fonts'=>'Other Fonts'));
					
$options10[] = array("id" => "tmoption_h1font_other",
					"label" => "Specified Other H1 Font",
					"type" => "textbox-3",
					"std" => "sans-serif",
					"description" => "Change your specified H1 font.");	

$options10[] = array("id" => "tmoption_h1color",
					"label" => "H1 Color",
					"type" => "textbox-1",
					"std" => "555555",
					"description" => "Change your H1 font color.");	
					
$options10[] = array("id" => "tmoption_h2font",
					"label" => "H2 Font",
					"type" => "select",
					"description" => "Change your H2 Font.",
					"options" => array('Lato' =>'Lato','please-select'=>'please-select','Droid+Sans'=>'Droid Sans','Antic'=>'Antic','Bitter'=>'Bitter','Droid+Serif'=>'Droid Serif','Philosopher'=>'Philosopher','Oxygen'=>'Oxygen','Rokkitt'=>'Rokkitt','Galdeano'=>'Galdeano','Open+Sans'=>'Open Sans','Oswald'=>'Oswald','play'=>'play','Cuprum'=>'Cuprum','varela'=>'varela','Andika'=>'Andika','Other+Fonts'=>'Other Fonts'));
					
$options10[] = array("id" => "tmoption_h2font_other",
					"label" => "Specified Other H2 Font",
					"type" => "textbox-3",
					"std" => "sans-serif",
					"description" => "Change your specified H2 font.");

$options10[] = array("id" => "tmoption_h2color",
					"label" => "H2 Color",
					"type" => "textbox-1",
					"std" => "555555",
					"description" => "Change your H2 font color.");		
					
$options10[] = array("id" => "tmoption_h3font",
					"label" => "H3 Font",
					"type" => "select",
					"description" => "Change your H3 font.",
					"options" => array('Lato' =>'Lato','please-select'=>'please-select','Droid+Sans'=>'Droid Sans','Antic'=>'Antic','Bitter'=>'Bitter','Droid+Serif'=>'Droid Serif','Philosopher'=>'Philosopher','Oxygen'=>'Oxygen','Rokkitt'=>'Rokkitt','Galdeano'=>'Galdeano','Open+Sans'=>'Open Sans','Oswald'=>'Oswald','play'=>'play','Cuprum'=>'Cuprum','varela'=>'varela','Andika'=>'Andika','Other+Fonts'=>'Other Fonts'));
					
$options10[] = array("id" => "tmoption_h3font_other",
					"label" => "Specified Other H3 Font",
					"type" => "textbox-3",
					"std" => "sans-serif",
					"description" => "Change your specified H3 font.");	

$options10[] = array("id" => "tmoption_h3color",
					"label" => "H3 Color",
					"type" => "textbox-1",
					"std" => "555555",
					"description" => "Change your H3 font color.");										
					
$options10[] = array("id" => "tmoption_h4font",
					"label" => "H4 Font",
					"type" => "select",
					"description" => "Change your H4 font.",
					"options" => array('Lato' =>'Lato','please-select'=>'please-select','Droid+Sans'=>'Droid Sans','Antic'=>'Antic','Bitter'=>'Bitter','Droid+Serif'=>'Droid Serif','Philosopher'=>'Philosopher','Oxygen'=>'Oxygen','Rokkitt'=>'Rokkitt','Galdeano'=>'Galdeano','Open+Sans'=>'Open Sans','Oswald'=>'Oswald','play'=>'play','Cuprum'=>'Cuprum','varela'=>'varela','Andika'=>'Andika','Other+Fonts'=>'Other Fonts'));
					
$options10[] = array("id" => "tmoption_h4font_other",
					"label" => "Specified Other H4 Font",
					"type" => "textbox-3",
					"std" => "sans-serif",
					"description" => "Change your specified H4 font.");	

$options10[] = array("id" => "tmoption_h4color",
					"label" => "H4 Color",
					"type" => "textbox-1",
					"std" => "555555",
					"description" => "Change your H4 font color.");	
					
$options10[] = array("id" => "tmoption_h5font",
					"label" => "H5 Font",
					"type" => "select",
					"description" => "Change your H5 font.",
					"options" => array('Lato' =>'Lato','please-select'=>'please-select','Droid+Sans'=>'Droid Sans','Antic'=>'Antic','Bitter'=>'Bitter','Droid+Serif'=>'Droid Serif','Philosopher'=>'Philosopher','Oxygen'=>'Oxygen','Rokkitt'=>'Rokkitt','Galdeano'=>'Galdeano','Open+Sans'=>'Open Sans','Oswald'=>'Oswald','play'=>'play','Cuprum'=>'Cuprum','varela'=>'varela','Andika'=>'Andika','Other+Fonts'=>'Other Fonts'));
					
$options10[] = array("id" => "tmoption_h5font_other",
					"label" => "Specified Other H5 Font",
					"type" => "textbox-3",
					"std" => "sans-serif",
					"description" => "Change your specified H5 font.");	

$options10[] = array("id" => "tmoption_h5color",
					"label" => "H5 Color",
					"type" => "textbox-1",
					"std" => "555555",
					"description" => "change your H5 font color.");	
					
$options10[] = array("id" => "tmoption_h6font",
					"label" => "H6 Font",
					"type" => "select",
					"description" => "Change your H6 font.",
					"options" => array('Lato' =>'Lato','please-select'=>'please-select','Droid+Sans'=>'Droid Sans','Antic'=>'Antic','Bitter'=>'Bitter','Droid+Serif'=>'Droid Serif','Philosopher'=>'Philosopher','Oxygen'=>'Oxygen','Rokkitt'=>'Rokkitt','Galdeano'=>'Galdeano','Open+Sans'=>'Open Sans','Oswald'=>'Oswald','play'=>'play','Cuprum'=>'Cuprum','varela'=>'varela','Andika'=>'Andika','Other+Fonts'=>'Other Fonts'));
					
$options10[] = array("id" => "tmoption_h6font_other",
					"label" => "Specified Other H6 Font",
					"type" => "textbox-3",
					"std" => "sans-serif",
					"description" => "Change your specified H6 font.");		

$options10[] = array("id" => "tmoption_h6color",
					"label" => "H6 Color",
					"type" => "textbox-1",
					"std" => "555555",
					"description" => "Change your H6 font color.");		
					
$options10[] = array("id" => "tmoption_link_color",
					"label" => "Link Color",
					"type" => "textbox-1",
					"std" => "666666",
					"description" => "Change your link color.");	
					
$options10[] = array("id" => "tmoption_hoverlink_color",
					"label" => "Link Hover Color",
					"type" => "textbox-1",
					"std" => "222222",
					"description" => "Change your link Hover color.");	
					
$options10[] = array("id" => "tmoption_button_bg_color",
					  "label" => "Button Background Color",
					  "type" => "textbox-1",
					  "std" => "8F8F8F",
					  "description" => "Change your Button Background color.");
          
$options10[] = array("id" => "tmoption_button_bg_hover_color",
					  "label" => "Button Hover Background Color",
					  "type" => "textbox-1",
					  "std" => "555555",
					  "description" => "Change your Button Hover Background color.");  					
		
//================================================================ Footer Settings ===================================================================
$options9 = array(array());

$options9[] = array("id" => "tmoption_footerbkg_color",
					"label" => "Footer Background Color",
					"type" => "textbox-1",
					"std" => "F7F7F7",
					"description" => "Change your footer background color.");

$options9[] = array("id" => "tmoption_footerlink_color",
					"label" => "Footer Link Color",
					"type" => "textbox-1",
					"std" => "666666",
					"description" => "Change your footer link color.");	
					
$options9[] = array("id" => "tmoption_footerhoverlink_color",
					"label" => "Footer Link Hover Color",
					"type" => "textbox-1",
					"std" => "222222",
					"description" => "Change your footer link hover color.");
					
$options9[] = array("id" => "tmoption_footerfont",
					"label" => "Footer Tag Font",
					"type" => "select",
					"description" => "Change your Footer font.",
					"options" => array('Lato' =>'Lato','please-select'=>'please-select','Droid+Sans'=>'Droid Sans','Antic'=>'Antic','Bitter'=>'Bitter','Droid+Serif'=>'Droid Serif','Philosopher'=>'Philosopher','Oxygen'=>'Oxygen','Rokkitt'=>'Rokkitt','Galdeano'=>'Galdeano','Oswald'=>'Oswald','play'=>'play','Cabin'=>'Cabin','Cuprum'=>'Cuprum','varela'=>'varela','Andika'=>'Andika','Ubuntu' =>'Ubuntu','Other+Fonts'=>'Other Fonts'));		
					
$options9[] = array("id" => "tmoption_footerfont_other",
					"label" => "Specified Other Footer Font",
					"type" => "textbox-3",
					"std" => "sans-serif",
					"description" => "Change your specified Footer font.");			

$options9[] = array("id" => "tmoption_footer_slog",
					"label" => "Footer copyright",
					"type" => "textbox",
					"description" => "Enter your copyright statement here.",
					"std" => "Templatemela.");	
					
//=============================================== Layout Settings ==================================================================
$options3 = array(array());

$options3[] = array("id" => "tmoption_layout",
					"label" => "Select Theme Layout",
					"type" => "radio",
					"description" => "Select Theme Layout.",	
					"std" =>"1",
					"options" => array('1' => 'Content on right ','2' => 'Content on left ','3' =>'2Column Left Sidebar','4' =>'2Column Right Sidebar','5' =>'3column'));
					
//=============================================== Portfolio Settings ==================================================================
$options8 = array(array());

$options8[] = array("id" => "tmoption_portfolio_cat",
					"label" => "Filter Portfolio?",
					"type" => "select",
					"description" => "Display portfolio filter?",
					"options" => array('yes' => 'Yes','no' => 'No'));
					
$options8[] = array("id" => "tmoption_portfolio_layout",
					"label" => "Portfolio Layout",
					"type" => "select",
					"description" => "Choose the portfolio layout If Display all Portfolio 'No'.",
					"options" => array('2' => 'Two Column','3' => 'Three Column','4' => 'Four Column'));
			
$options8[] = array("id" => "tmoption_portfolio_perpage",
					"label" => "Portfolio per page",
					"type" => "textbox",
					"description" => "Enter the number of portfolio shown per page If Display all Portfolio 'No'.",
					"std" => "4");		

?>

<!-- =========================================== Call Font Script =========================================== -->
<div class="main-block">
<div class="icon-templatemela"><img src="<?php echo get_option( 'siteurl' ).'/wp-content/themes/'.get_option( 'template' ).'/templatemela/logo.png'; ?>" /></div>
<h2 class="title-themeset">TemplateMela - Theme Settings</h2>
<?php  global $result;   
	if ($result=='success') 
	 echo '<div class="updated settings-error" id="setting-error-settings_updated"><p><strong>Settings saved.</strong></p></div>';
?>
<div class="tab_main">
<!-- =========================================== Start Tab =============================================== -->
<div id="tab-container" class='tab-container'>
 <ul class='etabs'>
   <li class="tab first">
   		<a href="#General" title="General Settings"><img src="<?php echo get_template_directory_uri(); ?>/templatemela/images/Setting.png" alt="general"/> <span class="title"><?php _e('General','templatemela');?></span></a>
   </li>
	<li class="tab header">
		<a href="#Header"><img src="<?php echo get_template_directory_uri(); ?>/templatemela/images/color.png" alt="color"/> <span class="title"><?php _e('Header','templatemela');?></span></a>
	</li>
	<li class="tab">
		<a href="#Content"><img src="<?php echo get_template_directory_uri(); ?>/templatemela/images/content_settings.png" alt="color"/> <span class="title"><?php _e('Content','templatemela');?></span></a>
	</li>	
	<li class="tab">
		<a href="#Footer"><img src="<?php echo get_template_directory_uri(); ?>/templatemela/images/footer_settings.png" alt="color"/> <span class="title"><?php _e('Footer','templatemela');?></span></a>
	</li>	
	<li class="tab layout">
		<a href="#Layout"><img src="<?php echo get_template_directory_uri(); ?>/templatemela/images/layout.png" alt="layout"/> <span class="title"><?php _e('Layout','templatemela');?></span></a>
	</li>	
	<li class="tab">
		<a href="#portfolio"><img src="<?php echo get_template_directory_uri(); ?>/templatemela/images/footer.png" alt="footer"/> <span class="title"><?php _e('Portfolio','templatemela');?></span></a>
	</li>	
 </ul>
  <!-- Start Panel-container -->
 <div class='panel-container'>
<!-- =========================================== Start General Setting =========================================== -->
<div id="General">
   <form enctype="multipart/form-data" method="post" id="settingForm5" name="settingForm5">
     <input type="hidden" name="action" value="save_options5"  />
     <?php 
	 if(!isset( $_REQUEST['action'])) {$_REQUEST['action']=''; }
	 if(!isset( $_REQUEST['reset5'])) {$_REQUEST['reset5']=''; }
       if ( 'save_options5' == $_REQUEST['action'] )
       {
 			foreach ($options5 as $value) {
				if(!isset( $value['id'] )) {$value['id']=''; }
				if(isset( $value['id'] ) && isset($_REQUEST[ $value['id'] ] )){
					update_option( $value['id'], $_REQUEST[ $value['id'] ] ); 
				}
						
			} 
       // foreach ($options5 as $value) {
	    //if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } } 
     	} 
	    else if( 'reset5' == $_REQUEST['reset5'] )
        {
 	    	foreach ($options5 as $value) 
	    	{
				if(!isset( $value['id'] )) {$value['id']=''; }
				delete_option( $value['id'] ); 
          	}
        }
    	?>
  <div class="form-table">
    <div class="main_tital">
      <h1><?php _e('General Settings', 'templatemela'); ?></h1> 
     </div>	 
     <?php
       $i= 0;
	   foreach ($options5 as $value) { 
	   if(!isset( $value['type'] )) {$value['type'] =''; }
	   switch ( $value['type'] ) {
	 

	 case 'textbox':?>
		
		<?php if( $i % 2 != 0) { ?>
		<div class="odd setting_main">
		<?php } else { ?>
		<div class="even setting_main">
		<?php }?>
        <div class="title"><label for="<?php echo $value['id']; ?>"><?php echo $value['label']; ?></label></div>
			<div class="content">
				<input class="regular-text" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="text" value="<?php if ( get_option( $value['id'] ) != "") { echo stripslashes(get_option( $value['id'] )); } else {  	 if(!isset( $value['std'] )) {$value['std'] =''; }  echo stripslashes($value['std']); } ?>" />
				<span class="description"><?php echo $value['description']; ?></span>
			</div>
	    </div><!--odd-even-->
		<?php
		break;
		
	case 'upload': ?>
		
		<?php if( $i % 2 != 0) { ?>
		<div class="odd setting_main">
		<?php } else { ?>
		<div class="even setting_main">
		<?php }?>
		<div class="title"><label for="<?php echo $value['id']; ?>"><?php echo $value['label']; ?></label><br /><br />
		
		<?php if(get_option('tmoption_logo_image') != '') { ?>	
			<img src="<?php echo get_option('tmoption_logo_image');?>" id="slider_logodisplay"/>&nbsp;<a id="slider_remove_link1" href="javascript:removeImage1();"><img src="<?php echo get_template_directory_uri(); ?>/templatemela/images/remove.png" /></a>
		<?php } ?>
		<script>
			function removeImage1() {
				document.getElementById("tmoption_logo_image").value="";
				document.getElementById("slider_logodisplay").src="";
				document.getElementById("slider_remove_link1").innerHTML="";					
			}
		</script>		 
		</div>
		<div class="content">
		<input style=" <?php if($value['id'] != 'tmoption_logo_image') { echo 'display:none' ; } ?> " class="regular-text" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="text" value="<?php echo get_option($value['id']); ?>" />
        <input id="upload_image_button" class="button-primary" type="button" value="Upload Logo" />
	    <span class="description"><?php echo $value['description']; ?></span>
		</div>
		</div><!--even odd setting-->	
		<?php	break;
		
	case 'select':	?>
		
		<?php if( $i % 2 != 0) { ?>
		<div class="odd setting_main">
		<?php } else { ?>
		<div class="even setting_main">
		<?php }?>
	    <div class="title"><label for="<?php echo $value['id']; ?>"><?php echo $value['label']; ?></label></div>
	  	<div class="content">
	  	<select class="select_input" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
	  	<?php foreach ($value['options'] as $op_id => $suboption) { ?>
	   	<option value="<?php echo $op_id; ?>" <?php if (get_option($value['id']) == $op_id) { echo ' selected="selected"'; } ?>><?php echo $suboption; ?></option>
	   	<?php } ?>
	   	</select>
	   	<span class="description"><?php echo $value['description']; ?></span>
		</div>
		</div><!--even-Odd-->			
		<?php	break; //end Switch
		
	case 'textbox-1':?>
		
		<?php if( $i % 2 != 0) { ?>
		<div class="odd setting_main">
		<?php } else { ?>
		<div class="even setting_main">
		<?php }?>
        <div class="title"><label for="<?php echo $value['id']; ?>"><?php echo $value['label']; ?></label></div>
		<div class="content">
		<?php if ( get_option( $value['id'] ) != "") { 
			$stylecolor =  stripslashes(get_option( $value['id'] )); 
			} else { 
			$stylecolor = stripslashes($value['std']); } 
			$stylecolor = 'style="background-color:#'.$stylecolor.'"';?>
		<input class="regular-text1" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="text" value="<?php if ( get_option( $value['id'] ) != "") { echo stripslashes(get_option( $value['id'] )); } else { echo stripslashes($value['std']); } ?>" <?php echo $stylecolor; ?> />
		<span class="description"><?php echo $value['description']; echo get_option( $value['id']);?></span>
		</div>
		</div><!--odd-even-->
		<?php	break;
		
	case 'upload-1': ?>

		<?php if( $i % 2 != 0) { ?>
		<div class="odd setting_main">
		<?php } else { ?>
		<div class="even setting_main">
		<?php }?>
     	<div class="title"><label for="<?php echo $value['id']; ?>"><?php echo $value['label']; ?></label><br /><br />
		
		<?php if(get_option('tmoption_favicon_icon') != '') { ?>	
			<img src="<?php echo get_option('tmoption_favicon_icon');?>" id="slider_favicondisplay"/>&nbsp;<a id="slider_remove_link2" href="javascript:removeImage2();"><img src="<?php echo get_template_directory_uri(); ?>/templatemela/images/remove.png" /></a>
		<?php }	?>
		<script>
			function removeImage2() {
				document.getElementById("tmoption_favicon_icon").value="";
				document.getElementById("slider_favicondisplay").src="";
				document.getElementById("slider_remove_link2").innerHTML="";					
			}
		</script>		
		</div>
	    <div class="content">
 		<input class"favicon-upload" style="<?php if($value['id'] != 'tmoption_favicon_icon') { echo 'display:none' ; } ?> " class="regular-text" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="text" value="<?php echo get_option($value['id']); ?>" />
        <input id="upload_favicon_icon" class="button-primary" type="button" value="Upload Favicon Icon" />
	    <span class="description"><?php echo $value['description']; ?></span><br />
		</div>
		</div><!--even odd setting-->	
		<?php	break;
		
	case 'upload-3': ?>
	
		<?php if( $i % 2 != 0) { ?>
		<div class="odd setting_main">
		<?php } else { ?>
		<div class="even setting_main">
		<?php }?>
	   	<div class="title"><label for="<?php echo $value['id']; ?>"><?php echo $value['label']; ?></label><br /><br />
			
				<?php if(get_option('tmoption_background_upload') != '') { ?>	
			<img src="<?php echo get_option('tmoption_background_upload');?>" id="slider_backgrounddisplay"/>&nbsp;<a id="slider_remove_link3" href="javascript:removeImage3();"><img src="<?php echo get_template_directory_uri(); ?>/templatemela/images/remove.png" /></a>
		<?php } ?>
		<script>
			function removeImage3() {
				document.getElementById("tmoption_background_upload").value="";
				document.getElementById("slider_backgrounddisplay").src="";
				document.getElementById("slider_remove_link3").innerHTML="";					
			}
		</script>
			
		</div>
	    <div class="content">
		<input style=" <?php if($value['id'] != 'tmoption_background_upload') { echo 'display:none' ; } ?> " class="regular-text" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="text" value="<?php echo get_option($value['id']); ?>" />
        <input id="upload_backgroundimage_button" class="button-primary" type="button" value="Upload Image" />
	    <span class="description"><?php echo $value['description']; ?></span><br />
		</div>
		</div><!--even odd setting-->	
		<?php	break;
		
	case 'texture': 	
		?>
		<?php if( $i % 2 != 0) { ?>
		<div class="odd setting_main">
		<?php } else { ?>
		<div class="even setting_main">
		<?php }
	    $img_dir = get_template_directory_uri() .'/templatemela/images/';
		?>
		<div class="title">
			<label for="<?php echo $value['id']; ?>"><?php echo $value['label']; ?></label>
		</div>
		<div class="content">
		<div class="tm_content">
		<div class="thumb-sel">
	      <img class="thumb" src="<?php if ( get_option( $value['id'] ) != ""){echo $img_dir.get_option($value['id']);}else{echo $img_dir.$value['std'];} ?>" />
		<span id="switch" class="close"></span>
		</div>
		<div class="thumb-list">
		<ul>
			<?php foreach ($value['options'] as $opt_key => $opt_val) { 
		    if ( get_option( $value['id'] ) != "")   {
            if($opt_key == get_option($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = "";}
            } else {
            if($opt_key == ($value['std'])) { $checked = "checked=\"checked\""; } else { $checked = ""; }
            } ?>
			<li>
				<input type="radio" name="<?php echo $value['id'] ?>" value="<?php echo $opt_key ?>" <?php echo $checked; ?>/>
					<img class="thumb" src="<?php echo $img_dir.$opt_key ?>" title="<?php echo $opt_val ?>" />
			</li>				
			<?php } ?>	
		</ul>
		</div>
		</div>
		<span class="description"><?php echo $value['description']; ?></span>
		</div>
		</div>
		<?php break;
		
	case 'Title-1':		
		 if(!isset( $value['id'] )) {$value['id'] =''; }
		?>  
		<div class="background-title"><label for="<?php echo $value['id']; ?>"><?php echo $value['label']; ?></label></div>
		<?php break;
		
		}
	   $i++;
      }?>
 	</div><!--from-table-->
   <div class="submit">
	    <input type="submit" value="Save Changes" class="button-primary" name="Submit" >
	</div>
 </form><!--mainform-->
<!-- reset Button -->
	<div class="reset-option">
    <form enctype="multipart/form-data" method="post" id="settingForm5" name="settingFormx"  >
	<p class="submit">
		<input type="hidden" name="reset5" value="reset5" />
		<input type="submit" value="Set Default" class="button-primary" name="reset"/>
	</p>
	</form>
	</div><!-- End Reset Button -->
</div><!--general-setting-->
   <div style="clear:both"></div>


<!-- portfolio -->
<div id="portfolio">
   <form enctype="multipart/form-data" method="post" id="settingForm8" name="settingForm8" >
   <input type="hidden" name="action" value="save_options8" />
    <?php
	if(!isset( $_REQUEST['action'])) {$_REQUEST['action']=''; }	
	if(!isset( $_REQUEST['reset8'])) {$_REQUEST['reset8']=''; }	
	
       if ( 'save_options8' == $_REQUEST['action'] )
        {
 	    	foreach ($options8 as $value) {
	    	
				if(!isset( $value['id'] )) {$value['id']=''; }
				if(isset( $value['id'] ) && isset($_REQUEST[ $value['id'] ] )){
					update_option( $value['id'], $_REQUEST[ $value['id'] ] ); 
				}

			} 
           //foreach ($options4 as $value) {
	        //if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } } 
	     } 
       else if( 'reset8' == $_REQUEST['reset8'] )
         {
 	     foreach ($options8 as $value) 
	     {
		 delete_option( $value['id'] ); 
         }
      }
     ?>	
    <div class="form-table">  
	  <div class="main_tital">
		<h1><?php _e('Portfolio Settings', 'templatemela'); ?></h1>
	  </div>	
<?php
        foreach ($options8 as $value) { 
if(!isset( $value['type'])) {$value['type']=''; }	
	    switch ( $value['type'] ) {
	
	case 'textbox':?>
		
		<?php if( $i % 2 != 0) { ?>
				<div class="odd setting_main">
				<?php } else { ?>
				<div class="even setting_main">
			<?php }?>
                <div class="title"><label for="<?php echo $value['id']; ?>"><?php echo $value['label']; ?></label></div>
				<div class="content">
				<input class="regular-text" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="text" value="<?php if ( get_option( $value['id'] ) != "") { echo stripslashes(get_option( $value['id'] )); } else { echo stripslashes($value['std']); } ?>" />
				<span class="description"><?php echo $value['description']; ?></span>
				</div>
		     </div><!--odd-even-->
			<?php break;
		
	case 'select':	
		?>  <?php if( $i % 2 != 0) { ?>
				<div class="odd setting_main">
				<?php } else { ?>
				<div class="even setting_main">
			<?php }?>
	            
			<div class="title"><label for="<?php echo $value['id']; ?>"><?php echo $value['label']; ?></label></div>
			 <div class="content">
			  <select class="select_input" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
	          <?php foreach ($value['options'] as $op_id => $suboption) { ?>
	          <option value="<?php echo $op_id; ?>" <?php if (get_option($value['id']) == $op_id) { echo ' selected="selected"'; } ?>><?php echo $suboption; ?></option>
	          <?php } ?>
	          </select>
			  <span class="description"><?php echo $value['description']; ?></span>
			  </div>
			</div>
		   <?php
		break;
       }
     $i++;
    }
   ?>
   </div><!--form-table-->
   <div class="submit">
         <input type="submit" value="Save Changes" class="button-primary" name="Submit" >
    </div>
   </form>
	<!-- reset Button -->
		<div class="reset-option">
			<form enctype="multipart/form-data" method="post" id="settingForm8" name="settingFormx" >
				<p class="submit">
					<input type="hidden" name="reset8" value="reset8" />
					<input type="submit" value="Set Default" class="button-primary" name="reset"/>
				</p>
			</form>
		</div><!-- End Reset Button -->

	</div><!--Font-->

	
<!-- =========================================== Conent =========================================== -->	
<div id="Content">
   <form enctype="multipart/form-data" method="post" id="settingForm10" name="settingForm10" >
   <input type="hidden" name="action" value="save_options10" />
    <?php
	 if(!isset( $_REQUEST['action'])) {$_REQUEST['action']=''; }
	 if(!isset( $_REQUEST['reset10'])) {$_REQUEST['reset10']=''; }

       if ( 'save_options10' == $_REQUEST['action'] )
           {
 	    	foreach ($options10 as $value) {
	    	
				if(!isset( $value['id'] )) {$value['id']=''; }
				if(isset( $value['id'] ) && isset($_REQUEST[ $value['id'] ] )){
					update_option( $value['id'], $_REQUEST[ $value['id'] ] ); 
				}

			 }
 
           //foreach ($options4 as $value) {
	        //if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } } 
	     } 
       else if( 'reset10' == $_REQUEST['reset10'] )
         {
 	     foreach ($options10 as $value) 
	     {
		 delete_option( $value['id'] ); 
         }
      }
     ?>
	
    <div class="form-table">
  
	  <div class="main_tital">
		<h1><?php _e('Content Settings', 'templatemela'); ?></h1>
	  </div>
	
<?php
        foreach ($options10 as $value) { 
	    switch ( $value['type'] ) {

		
		case 'select':
		
		?>
		  <?php if( $i % 2 != 0) { ?>
				<div class="odd setting_main">
				<?php } else { ?>
				<div class="even setting_main">
			<?php }?>
	            
			<div class="title"><label for="<?php echo $value['id']; ?>"><?php echo $value['label']; ?></label></div>
			 <div class="content">
			  <select class="select_input" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
	          <?php foreach ($value['options'] as $op_id => $suboption) { ?>
	          <option value="<?php echo $op_id; ?>" <?php if (get_option($value['id']) == $op_id) { echo ' selected="selected"'; } ?>><?php echo $suboption; ?></option>
	          <?php } ?>
	          </select>
			  <span class="description"><?php echo $value['description']; ?></span>
			  </div>
			</div>
		   <?php
		break;
		
		case 'textbox-3':?>
		
		<?php if( $i % 2 != 0) { ?>
		<div class="odd setting_main">
		<?php } else { ?>
		<div class="even setting_main">
		<?php }?>
        <div class="title"><label for="<?php echo $value['id']; ?>"><?php echo $value['label']; ?></label></div>
		<div class="content">
		<input class="regular-text" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="text" value="<?php if ( get_option( $value['id'] ) != "") { echo stripslashes(get_option( $value['id'] )); } else { echo stripslashes($value['std']); } ?>" />
		<span class="description"><?php echo $value['description']; ?></span>
		</div>
	    </div><!--odd-even-->
		<?php
		break;
		
		case 'textbox-1':?>
		
		<?php if( $i % 2 != 0) { ?>
				<div class="odd setting_main">
				<?php } else { ?>
				<div class="even setting_main">
			<?php }?>
                <div class="title"><label for="<?php echo $value['id']; ?>"><?php echo $value['label']; ?></label></div>
				<div class="content">
				<?php if ( get_option( $value['id'] ) != "") { 
					$stylecolor =  stripslashes(get_option( $value['id'] )); 
					} else { 
					$stylecolor = stripslashes($value['std']); } 
					$stylecolor = 'style="background-color:#'.$stylecolor.'"'; ?>
				<input class="regular-text1" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="text" value="<?php if ( get_option( $value['id'] ) != "") { echo stripslashes(get_option( $value['id'] )); } else { echo stripslashes($value['std']); } ?>" <?php echo $stylecolor; ?> />
				<span class="description"><?php echo $value['description']; echo get_option( $value['id']);?></span>
				</div>
		     </div><!--odd-even-->
			<?php
			
		break;
		case 'textbox':?>
		
		<?php if( $i % 2 != 0) { ?>
				<div class="odd setting_main">
				<?php } else { ?>
				<div class="even setting_main">
			<?php }?>
                <div class="title"><label for="<?php echo $value['id']; ?>"><?php echo $value['label']; ?></label></div>
				<div class="content">
				<input class="regular-text" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="text" value="<?php if ( get_option( $value['id'] ) != "") { echo stripslashes(get_option( $value['id'] )); } else { echo stripslashes($value['std']); } ?>" />
				<span class="description"><?php echo $value['description']; echo get_option( $value['id']);?></span>
				</div>
		     </div><!--odd-even-->
			<?php
			
		break;
       }
     $i++;
    }
   ?>
   </div><!--form-table-->
   <div class="submit">
         <input type="submit" value="Save Changes" class="button-primary" name="Submit" >
    </div>
   </form>
	<!-- reset Button -->
		<div class="reset-option">
			<form enctype="multipart/form-data" method="post" id="settingForm10" name="settingFormx" >
				<p class="submit">
					<input type="hidden" name="reset10" value="reset10" />
					<input type="submit" value="Set Default" class="button-primary" name="reset"/>
				</p>
			</form>
		</div><!-- End Reset Button -->

	</div><!--Font-->
	
	
<!-- =========================================== Portfolio =========================================== -->

	<div id="Layout" >

	<form enctype="multipart/form-data" method="post" id="settingForm3" name="settingForm3" onsubmit="change()">
	
	<input type="hidden" name="action" value="save_options3" />
	<?php
	if(!isset( $_REQUEST['action'])) {$_REQUEST['action']=''; }	
	if(!isset( $_REQUEST['reset3'])) {$_REQUEST['reset3']=''; }	
	if ( 'save_options3' == $_REQUEST['action'] ) { 
		foreach ($options3 as $value) {
				if(!isset( $value['id'] )) {$value['id']=''; }
				if(isset( $value['id'] ) && isset($_REQUEST[ $value['id'] ] )){
					update_option( $value['id'], $_REQUEST[ $value['id'] ] ); 
				}

		}		
	} 
    else if( 'reset3' == $_REQUEST['reset3'] ) {
 	    foreach ($options3 as $value) {		
			delete_option( $value['id'] );		
		}
	}
	?>
		                <div class="form-table" id="form-table">
						<div class="main_tital">
							<h1>Layout Settings</h1> 
						</div>
		      <?php $i=0;
			  foreach ($options3 as $value) { 
			if(!isset( $value['type'])) {$value['type']=''; }	

		      switch ( $value['type'] ) {			  
			  case 'radio':?>        
            <div class="title"><label for="<?php echo $value['id']; ?>"><?php echo $value['label']; ?></label></div>
              <div class="content cont-layout">
			  
              <?php
			 foreach ($value['options'] as $key=>$option) {
			 if ( get_option( $value['id'] ) != "")   {
			 if($key == get_option($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = "";}
			} else {
			if($key == ($value['std'])) { $checked = "checked=\"checked\""; } else { $checked = ""; }
			} ?>
						 <div class="cont-layout-option"><input type="radio" name="<?php echo $value['id']; ?>" value="<?php echo $key; ?>" <?php echo $checked; ?> /><br/><?php if($key == '1'){?><img src="<?php echo get_template_directory_uri() . '/templatemela/images/content-sidebar.png  ' ?>" width="136" height="122" alt="" /> <?php }if($key == '2'){?><img src="<?php echo get_template_directory_uri() . '/templatemela/images/sidebar-content.png' ?>" width="136" height="122" alt="" /><?php } ?><?php if($key == '3'){?><img src="<?php echo get_template_directory_uri() . '/templatemela/images/left-2.gif' ?>" width="136" height="122" alt="" /><?php } ?><?php if($key == '4'){?><img src="<?php echo get_template_directory_uri() . '/templatemela/images/right-2.gif' ?>" width="136" height="122" alt="" /><?php } ?><?php if($key == '5'){?><img src="<?php echo get_template_directory_uri() . '/templatemela/images/3col.gif' ?>" width="136" height="122" alt="" /><?php } ?><br/><?php echo $option; ?>
			</div>
			 <?php } ?>
			</div>
			<?php	break;
			
	case 'radio-1':?>
				 
			<div class="title"><label for="<?php echo $value['id']; ?>"><?php echo $value['label']; ?></label></div>
			<div class="content cont-layout">
			<?php
			 foreach ($value['options'] as $key=>$option) {
			 if ( get_option( $value['id'] ) != "")   {
			 if($key == get_option($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = "";}
			} else {
			if($key == ($value['std'])) { $checked = "checked=\"checked\""; } else { $checked = ""; }
			} ?>
			
			<div class="cont-layout-option">
			<input  type="radio" name="<?php echo $value['id']; ?>" value="<?php echo $key; ?>" <?php echo $checked; ?> /><br/>
			<?php if($key == '1'){?><img src="<?php echo get_template_directory_uri() . '/templatemela/images/default.png' ?>" width="136" height="122" alt="" /> 
			<?php }if($key == '2'){?><img src="<?php echo get_template_directory_uri() . '/templatemela/images/blue.png' ?>" width="136" height="122" alt="" />
			<?php }if($key == '3'){?><img src="<?php echo get_template_directory_uri() . '/templatemela/images/pink.png' ?>" width="136" height="122" alt="" /><?php }?><br/>
			<?php echo $option;?>
			</div>
			<?php } ?>
			</div>
			<?php break;	
			
   case 'select': ?>
			  <?php if( $i % 2 != 0) { ?>
					<div class="odd setting_main">
					<?php } else { ?>
					<div class="even setting_main">
			  <?php }?>
			<div class="title"><label for="<?php echo $value['id']; ?>"><?php echo $value['label']; ?></label></div>
			<div class="content">
			<select class="select_input" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
			<?php foreach ($value['options'] as $op_id => $suboption) { ?>
			<option value="<?php echo $op_id; ?>" <?php if (get_option($value['id']) == $op_id) { echo ' selected="selected"'; } ?>><?php echo $suboption; ?></option>
			<?php } ?>
			 </select>
			 <span class="description"><?php echo $value['description']; ?></span>
			 </div>
			</div><!--odd even-->
				<?php 
			 break;
					
	 case 'textbox':	?>
			 <?php if( $i % 2 != 0) { ?>
			  <div class="odd setting_main">
			  <?php } else { ?>
			   <div class="even setting_main">
			  <?php }?>
				
			  <div class="title"><label for="<?php echo $value['id']; ?>"><?php echo $value['label']; ?></label></div>
			  <div class="content">
			  <input class="regular-text" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="text" value="<?php if ( get_option( $value['id'] ) != "") { echo stripslashes(get_option( $value['id'] )); } else { echo stripslashes($value['std']); } ?>" />
				<span class="description"><?php echo $value['description']; ?></span>
				</div>
			 </div><!--odd-even-->
				
			<?php
			break;
		}$i++;
	} ?>
	</div><!--form table-->

      <div class="submit">
         <input type="submit" value="Save Changes" class="button-primary" name="Submit" onclick="getData()">
      </div>
    </form>
	<!-- reset Button -->
		<div class="reset-option">
			<form enctype="multipart/form-data" method="post" id="settingForm3" name="settingFormx" >
				<p class="submit">
					<input type="hidden" name="reset3" value="reset3" />
					<input type="submit" value="Set Default" class="button-primary" name="reset"/>
				</p>
			</form>
			
		</div><!-- End Reset Button -->
	</div><!--layout-->
	


	

<!-- =========================================== header Settings =========================================== -->

<div id="Header">

<form enctype="multipart/form-data" method="post" id="settingForm2" name="settingForm2"  >

<input type="hidden" name="action" value="save_options2" />
<?php

	if(!isset( $_REQUEST['action'] )) {$_REQUEST['action']=''; }
	if(!isset( $_REQUEST['reset2'] )) {$_REQUEST['reset2']=''; }
    if ( 'save_options2' == $_REQUEST['action'] )
     {
 		foreach ($options2 as $value) {
				if(!isset( $value['id'] )) {$value['id']=''; }
				if(isset( $value['id'] ) && isset($_REQUEST[ $value['id'] ] )){
					update_option( $value['id'], $_REQUEST[ $value['id'] ] ); 
				}

		}
 
        //foreach ($options2 as $value) {
	    //if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } } 
	    } 
     else if( 'reset2' == $_REQUEST['reset2'] )
      {
 	    foreach ($options2 as $value) 
	     {
		delete_option( $value['id'] ); 
        }
      }
    ?>

  <div class="form-table">
  
	<div class="main_tital">
		<h1><?php _e('Header Settings', 'templatemela'); ?></h1> 
	</div>
   <?php
     foreach ($options2 as $value) { 
		if(!isset( $value['type'] )) {$value['type'] =''; }
	switch ( $value['type'] ) {
	
		case 'select':	?>
		
		<?php if( $i % 2 != 0) { ?>
		<div class="odd setting_main">
		<?php } else { ?>
		<div class="even setting_main">
		<?php }?>
			
	  <div class="title"><label for="<?php echo $value['id']; ?>"><?php echo $value['label']; ?></label></div>
	  <div class="content">
	  <select class="select_input" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
	  <?php foreach ($value['options'] as $op_id => $suboption) { ?>
	   <option value="<?php echo $op_id; ?>" <?php if (get_option($value['id']) == $op_id) { echo ' selected="selected"'; } ?>><?php echo $suboption; ?></option>
	   <?php } ?>
	   </select>
	   <span class="description"><?php echo $value['description']; ?></span>
		</div>
		</div><!--even-Odd-->
			
		<?php	break; //end Switch
		
		case 'textbox-3':?>
		
		<?php if( $i % 2 != 0) { ?>
		<div class="odd setting_main">
		<?php } else { ?>
		<div class="even setting_main">
		<?php }?>
        <div class="title"><label for="<?php echo $value['id']; ?>"><?php echo $value['label']; ?></label></div>
		<div class="content">
		<input class="regular-text" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="text" value="<?php if ( get_option( $value['id'] ) != "") { echo stripslashes(get_option( $value['id'] )); } else { echo stripslashes($value['std']); } ?>" />
		<span class="description"><?php echo $value['description']; ?></span>
		</div>
	    </div><!--odd-even-->
		<?php
		break;
		
		case 'textbox-1':?>
		
		<?php if( $i % 2 != 0) { ?>
				<div class="odd setting_main">
				<?php } else { ?>
				<div class="even setting_main">
			<?php }?>
                <div class="title"><label for="<?php echo $value['id']; ?>"><?php echo $value['label']; ?></label></div>
				<div class="content">
				<?php if ( get_option( $value['id'] ) != "") { 
			$stylecolor =  stripslashes(get_option( $value['id'] )); 
			} else { 
			$stylecolor = stripslashes($value['std']); } 
			$stylecolor = 'style="background-color:#'.$stylecolor.'"'; ?>
				<input class="regular-text1" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="text" value="<?php if ( get_option( $value['id'] ) != "") { echo stripslashes(get_option( $value['id'] )); } else { echo stripslashes($value['std']); } ?>" <?php echo $stylecolor; ?> />
				<span class="description"><?php echo $value['description']; echo get_option( $value['id']);?></span>
				</div>
		     </div><!--odd-even-->
			<?php
			
		break;
			
		
case 'texture': 
		
		?>
		  <?php if( $i % 2 != 0) { ?>
				<div class="odd setting_main">
				<?php } else { ?>
				<div class="even setting_main">
			<?php }
	            
				
								$img_dir = get_template_directory_uri().'/templatemela/images/';
								?>
								<div class="title">
									<label for="<?php echo $value['id']; ?>"><?php echo $value['label']; ?></label>
								</div>
			<div class="content">
					<div class="tm_content">
							<div class="thumb-sel">
			      <img class="thumb" src="<?php if ( get_option( $value['id'] ) != ""){echo $img_dir.get_option($value['id']);}else{echo $img_dir.$value['std'];} ?>" />
										<span id="switch" class="close"></span>
							</div>
							<div class="thumb-list">
							<ul>
						<?php foreach ($value['options'] as $opt_key => $opt_val) { 
					    if ( get_option( $value['id'] ) != "")   {
                        if($opt_key == get_option($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = "";}
                        } else {
                        if($opt_key == ($value['std'])) { $checked = "checked=\"checked\""; } else { $checked = ""; }
                         } ?>
								<li>
								<input type="radio" name="<?php echo $value['id'] ?>" value="<?php echo $opt_key ?>" <?php echo $checked; ?>/>
								<img class="thumb" src="<?php echo $img_dir.$opt_key ?>" title="<?php echo $opt_val ?>" />
								</li>				
						<?php } ?>	
							</ul>
						</div>
					</div>
					<span class="description"><?php echo $value['description']; ?></span>
				</div>
			</div>
				<?php
				break;
		case 'upload': ?>
				<?php if( $i % 2 != 0) { ?>
		<div class="odd setting_main">
		<?php } else { ?>
		<div class="even setting_main">
		<?php }?>
		<div class="title"><label for="<?php echo $value['id']; ?>"><?php echo $value['label']; ?></label></div>
		<div class="content">
		<input style=" <?php if($value['id'] != 'tmoption_background_upload') { echo 'display:none' ; } ?> " class="regular-text" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="text" value="<?php echo get_option($value['id']); ?>" />
        <input id="upload_image_button1" class="button-primary" type="button" value="Upload Image" />
	    <span class="description"><?php echo $value['description']; ?></span>
		</div>
		</div><!--even odd setting-->	
		<?php	break;
		
		case 'upload-1': ?>
	
		<?php if( $i % 2 != 0) { ?>
		<div class="odd setting_main">
		<?php } else { ?>
		<div class="even setting_main">
		<?php }?>
	   	<div class="title"><label for="<?php echo $value['id']; ?>"><?php echo $value['label']; ?></label><br /><br />
			
				<?php if(get_option('tmoption_header_background_upload') != '') { ?>	
			<img src="<?php echo get_option('tmoption_header_background_upload');?>" id="slider_backgrounddisplay1" class="thumb"/>&nbsp;<a id="slider_remove_link31" href="javascript:removeImage31();"><img src="<?php echo get_template_directory_uri(); ?>/templatemela/images/remove.png" /></a>
		<?php } ?>
		<script>
			function removeImage31() {
				document.getElementById("tmoption_header_background_upload").value="";
				document.getElementById("slider_backgrounddisplay1").src="";
				document.getElementById("slider_remove_link31").innerHTML="";					
			}
		</script>
			
		</div>
	    <div class="content">
		<input style=" <?php if($value['id'] != 'tmoption_header_background_upload') { echo 'display:none' ; } ?> " class="regular-text" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="text" value="<?php echo get_option($value['id']); ?>" />
        <input id="upload_backgroundimage_button" class="button-primary" type="button" value="Upload Image" />
	    <span class="description"><?php echo $value['description']; ?></span><br />
		</div>
		</div><!--even odd setting-->	
		<?php	break;
		
		case 'textbox':?>		
		<?php if( $i % 2 != 0) { ?>
				<div class="odd setting_main">
				<?php } else { ?>
				<div class="even setting_main">
			<?php }?>
                <div class="title"><label for="<?php echo $value['id']; ?>"><?php echo $value['label']; ?></label></div>
				<div class="content">
				<input class="regular-text" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="text" value="<?php if ( get_option( $value['id'] ) != "") { echo stripslashes(get_option( $value['id'] )); } else { echo stripslashes($value['std']); } ?>" />
				<span class="description"><?php echo $value['description']; ?></span>
				</div>
		     </div><!--odd-even-->
			<?php
			
		break;
		case 'Title-1':		
		 if(!isset( $value['id'] )) {$value['id'] =''; }
		?>  
		<div class="background-title"><label for="<?php echo $value['id']; ?>"><?php echo $value['label']; ?></label></div>
		<?php break;
		
		   }
		$i++;
      }
?>
</div><!--form table-->
     <div class="submit">
      <input type="submit" value="Save Changes" class="button-primary" name="Submit" >
    </div>
  </form>
		<!-- reset Button -->
		<div class="reset-option">
			<form enctype="multipart/form-data" method="post" id="settingForm2" name="settingFormx"   >
				<p class="submit">
					<input type="hidden" name="reset2" value="reset2" />
					<input type="submit" value="Set Default" class="button-primary" name="reset"/>
				</p>
			</form>
		</div><!-- End Reset Button -->
	</div><!---#color-->
<script type="text/javascript">
function Ajax(){

var xmlHttp;
	try{	
		xmlHttp=new XMLHttpRequest();// Firefox, Opera 8.0+, Safari
	}
	catch (e){
		try{
			xmlHttp=new ActiveXObject("Msxml2.XMLHTTP"); // Internet Explorer
		}
		catch (e){
		    try{
				xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch (e){
				alert("No AJAX!?");
				return false;
			}
		}
	}

xmlHttp.onreadystatechange=function(){
	if(xmlHttp.readyState==4){
		document.getElementById('tab_main').innerHTML=xmlHttp.responseText;
		return false;
	}
}
xmlHttp.send(null);
}
window.onload=function(){
}
</script>

<!-- =========================================== footer Settings =========================================== -->

<div id="Footer">

<form enctype="multipart/form-data" method="post" id="settingForm9" name="settingForm9"  >

<input type="hidden" name="action" value="save_options9" />
<?php
	 if(!isset( $_REQUEST['action'])) {$_REQUEST['action']=''; }
	 if(!isset( $_REQUEST['reset9'])) {$_REQUEST['reset9']=''; }

    if ( 'save_options9' == $_REQUEST['action'] )
     {
 		foreach ($options9 as $value) {
				if(!isset( $value['id'] )) {$value['id']=''; }
				if(isset( $value['id'] ) && isset($_REQUEST[ $value['id'] ] )){
					update_option( $value['id'], $_REQUEST[ $value['id'] ] ); 
				}

		}
 
        //foreach ($options2 as $value) {
	    //if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } } 
	    } 
     else if( 'reset9' == $_REQUEST['reset9'] )
      {
 	    foreach ($options9 as $value) 
	     {
		delete_option( $value['id'] ); 
        }
      }
    ?>

  <div class="form-table">
  
	<div class="main_tital">
		<h1><?php _e('Footer Settings', 'templatemela'); ?></h1> 
	</div>
   <?php
     foreach ($options9 as $value) { 
	if(!isset( $value['type'])) {$value['type']=''; }
	switch ( $value['type'] ) {
	
		case 'select':	?>
		
		<?php if( $i % 2 != 0) { ?>
		<div class="odd setting_main">
		<?php } else { ?>
		<div class="even setting_main">
		<?php }?>
			
	  <div class="title"><label for="<?php echo $value['id']; ?>"><?php echo $value['label']; ?></label></div>
	  <div class="content">
	  <select class="select_input" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
	  <?php foreach ($value['options'] as $op_id => $suboption) { ?>
	   <option value="<?php echo $op_id; ?>" <?php if (get_option($value['id']) == $op_id) { echo ' selected="selected"'; } ?>><?php echo $suboption; ?></option>
	   <?php } ?>
	   </select>
	   <span class="description"><?php echo $value['description']; ?></span>
		</div>
		</div><!--even-Odd-->
			
		<?php	break; //end Switch
		
		case 'textbox-3':?>
		
		<?php if( $i % 2 != 0) { ?>
		<div class="odd setting_main">
		<?php } else { ?>
		<div class="even setting_main">
		<?php }?>
        <div class="title"><label for="<?php echo $value['id']; ?>"><?php echo $value['label']; ?></label></div>
		<div class="content">
		<input class="regular-text" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="text" value="<?php if ( get_option( $value['id'] ) != "") { echo stripslashes(get_option( $value['id'] )); } else { echo stripslashes($value['std']); } ?>" />
		<span class="description"><?php echo $value['description']; ?></span>
		</div>
	    </div><!--odd-even-->
		<?php
		break;
		
		case 'textbox-1':?>
		
		<?php if( $i % 2 != 0) { ?>
				<div class="odd setting_main">
				<?php } else { ?>
				<div class="even setting_main">
			<?php }?>
                <div class="title"><label for="<?php echo $value['id']; ?>"><?php echo $value['label']; ?></label></div>
				<div class="content">
				<?php if ( get_option( $value['id'] ) != "") { 
					$stylecolor =  stripslashes(get_option( $value['id'] )); 
					} else { 
					$stylecolor = stripslashes($value['std']); } 
					$stylecolor = 'style="background-color:#'.$stylecolor.'"'; ?>
				<input class="regular-text1" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="text" value="<?php if ( get_option( $value['id'] ) != "") { echo stripslashes(get_option( $value['id'] )); } else { echo stripslashes($value['std']); } ?>" <?php echo $stylecolor; ?> />
				<span class="description"><?php echo $value['description']; echo get_option( $value['id']);?></span>
				</div>
		     </div><!--odd-even-->
			<?php
			
		break;
			
		
case 'texture': 
		
		?>
		  <?php if( $i % 2 != 0) { ?>
				<div class="odd setting_main">
				<?php } else { ?>
				<div class="even setting_main">
			<?php }
	        $img_dir = get_template_directory_uri().'/templatemela/images/';
			?>
			<div class="title">
				<label for="<?php echo $value['id']; ?>"><?php echo $value['label']; ?></label>
			</div>
			<div class="content">
			<div class="tm_content">
			<div class="thumb-sel">
			     <img class="thumb" src="<?php if ( get_option( $value['id'] ) != ""){echo $img_dir.get_option($value['id']);}else{echo $img_dir.$value['std'];} ?>" />
				<span id="switch" class="close"></span>
			</div>
			<div class="thumb-list">
			<ul>
			<?php foreach ($value['options'] as $opt_key => $opt_val) { 
				if ( get_option( $value['id'] ) != "")   {
				if($opt_key == get_option($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = "";}
				} else {
				if($opt_key == ($value['std'])) { $checked = "checked=\"checked\""; } else { $checked = ""; }
				 } ?>
						<li>
						<input type="radio" name="<?php echo $value['id'] ?>" value="<?php echo $opt_key ?>" <?php echo $checked; ?>/>
						<img class="thumb" src="<?php echo $img_dir.$opt_key ?>" title="<?php echo $opt_val ?>" />
						</li>				
				<?php } ?>	
					</ul>
				</div>
			</div>
			<span class="description"><?php echo $value['description']; ?></span>
			</div>
			</div>
			<?php break;
	case 'upload': ?>
		<?php if( $i % 2 != 0) { ?>
		<div class="odd setting_main">
		<?php } else { ?>
		<div class="even setting_main">
		<?php }?>
		<div class="title"><label for="<?php echo $value['id']; ?>"><?php echo $value['label']; ?></label></div>
		<div class="content">
		<input style=" <?php if($value['id'] != 'tmoption_background_upload') { echo 'display:none' ; } ?> " class="regular-text" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="text" value="<?php echo get_option($value['id']); ?>" />
        <input id="upload_image_button1" class="button-primary" type="button" value="Upload Image" />
	    <span class="description"><?php echo $value['description']; ?></span>
		</div>
		</div><!--even odd setting-->	
		<?php	break;
		case 'textbox':?>
		
		<?php if( $i % 2 != 0) { ?>
				<div class="odd setting_main">
				<?php } else { ?>
				<div class="even setting_main">
			<?php }?>
                <div class="title"><label for="<?php echo $value['id']; ?>"><?php echo $value['label']; ?></label></div>
				<div class="content">
				<input class="regular-text" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="text" value="<?php if ( get_option( $value['id'] ) != "") { echo stripslashes(get_option( $value['id'] )); } else { echo stripslashes($value['std']); } ?>" />
				<span class="description"><?php echo $value['description']; ?></span>
				</div>
		     </div><!--odd-even-->
			<?php
			
		break;
		
		   }
		$i++;
      }
?>
</div><!--form table-->
     <div class="submit">
      <input type="submit" value="Save Changes" class="button-primary" name="Submit" >
    </div>
  </form>
		<!-- reset Button -->
		<div class="reset-option">
			<form enctype="multipart/form-data" method="post" id="settingForm9" name="settingFormx"   >
				<p class="submit">
					<input type="hidden" name="reset9" value="reset9" />
					<input type="submit" value="Set Default" class="button-primary" name="reset"/>
				</p>
			</form>
		</div><!-- End Reset Button -->
	</div><!---#color-->

<div id="ajax-response"></div>
<br class="clear">
</div>
</div>
<div id="ajax-response"></div>
