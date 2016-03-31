<?php
add_action( 'wp_head', 'tm_customstyle' );
function tm_customstyle() { ?>
<?php
$font_family1 = get_option('tmoption_bodyfont');
$font_family1 = str_replace(' ', '+', $font_family1);
$font_family2 = get_option('tmoption_navfont');
$font_family2 = str_replace(' ', '+', $font_family2);
$font_family3 = get_option('tmoption_h1font');
$font_family3 = str_replace(' ', '+', $font_family3);
$font_family4 = get_option('tmoption_h2font');
$font_family4 = str_replace(' ', '+', $font_family4);
$font_family5 = get_option('tmoption_h3font');
$font_family5 = str_replace(' ', '+', $font_family5);
$font_family6 = get_option('tmoption_h4font');
$font_family6 = str_replace(' ', '+', $font_family6);
$font_family7 = get_option('tmoption_h5font');
$font_family7 = str_replace(' ', '+', $font_family7);
$font_family8 = get_option('tmoption_h6font');
$font_family8 = str_replace(' ', '+', $font_family8);
$font_family9 = get_option('tmoption_footerfont');
$font_family9 = str_replace(' ', '+', $font_family9);

// REMOVES DUPLICATE GOOGLE FONT CALL
$fonts_array = array($font_family1,$font_family2,$font_family3,$font_family4,$font_family5,$font_family6,$font_family7,$font_family8,$font_family9);

// REMOVES DUPLICATE GOOGLE FONT CALL
$fonts_array= array_unique($fonts_array);
foreach ($fonts_array as $key => $val) {
	if($val!='' && $val!='please-select' && $val!='Other+Fonts' && $val!='Open+Sans'){ ?>
		<link href='https://fonts.googleapis.com/css?family=<?php echo $val; ?>' rel='stylesheet' type='text/css' />
	<?php }
}
// end REMOVES DUPLICATE GOOGLE FONT CALL
?>
<style type="text/css">
	<?php if( (get_option('tmoption_h1font') == "Other+Fonts") || get_option('tmoption_h1font') == "please-select"){  
	if	(get_option('tmoption_h1font_other') != ""){ ?>
	h1 {	
		font-family:'<?php echo str_replace('+',' ',get_option('tmoption_h1font_other')); ?>', Arial, Helvetica, sans-serif;		
	}	
	<?php } } elseif(get_option('tmoption_h1font') != "" && get_option('tmoption_h1font') != "please-select"){ ?>
	h1 {	
		font-family:'<?php echo str_replace('+',' ',get_option('tmoption_h1font')); ?>', Arial, Helvetica, sans-serif;
	}	
	<?php } ?>
	
	<?php if (get_option('tmoption_h1color') != ""){ ?>
	h1 {	
		color:#<?php echo get_option('tmoption_h1color'); ?>;	
	}	
	<?php } ?>
		
	<?php if( (get_option('tmoption_h2font') == "Other+Fonts") || get_option('tmoption_h2font') == "please-select"){  
	if	(get_option('tmoption_h2font_other') != ""){ ?>
	h2 {	
		font-family:'<?php echo str_replace('+',' ',get_option('tmoption_h2font_other')); ?>', Arial, Helvetica, sans-serif;	
	}	
	<?php } } elseif(get_option('tmoption_h2font') != "" && get_option('tmoption_h2font') != "please-select"){ ?>
	h2 {	
		font-family:'<?php echo str_replace('+',' ',get_option('tmoption_h2font')); ?>', Arial, Helvetica, sans-serif;
	}	
	<?php } ?>
	
	<?php if(get_option('tmoption_h2color') != ""){ ?>
	h2 {	
		color:#<?php echo get_option('tmoption_h2color'); ?>;	
	}	
	<?php } ?>

	<?php 
	if( (get_option('tmoption_h3font') == "Other+Fonts") || get_option('tmoption_h3font') == "please-select"){  
	if	(get_option('tmoption_h3font_other') != ""){ ?>
	h3 {	
		font-family:'<?php echo str_replace('+',' ',get_option('tmoption_h3font_other')); ?>', Arial, Helvetica, sans-serif;
	}	
	<?php } } elseif(get_option('tmoption_h3font') != "" && get_option('tmoption_h3font') != "please-select"){ ?>
	h3 {	
		font-family:'<?php echo str_replace('+',' ',get_option('tmoption_h3font')); ?>', Arial, Helvetica, sans-serif;
	}	
	<?php } ?>
	
	<?php if (get_option('tmoption_h3color') != ""){ ?>
	h3 { color:#<?php echo get_option('tmoption_h3color'); ?>;}
	<?php } ?>
	
	<?php if( (get_option('tmoption_h4font') == "Other+Fonts") || get_option('tmoption_h4font') == "please-select"){  
	if	(get_option('tmoption_h4font_other') != ""){ ?>
	h4 {	
		font-family:'<?php echo str_replace('+',' ',get_option('tmoption_h4font_other')); ?>', Arial, Helvetica, sans-serif;
	}	
	<?php } } elseif(get_option('tmoption_h4font') != "" && get_option('tmoption_h4font') != "please-select"){ ?>
	h4 {	
		font-family:'<?php echo str_replace('+',' ',get_option('tmoption_h4font')); ?>', Arial, Helvetica, sans-serif;
	}	
	<?php } ?>	
	
	<?php if(get_option('tmoption_h4color') != ""){ ?>
	h4 {	
		color:#<?php echo get_option('tmoption_h4color'); ?>;	
	}	
	<?php } ?>
	
	<?php if( (get_option('tmoption_h5font') == "Other+Fonts") || get_option('tmoption_h5font') == "please-select"){  
	if	(get_option('tmoption_h5font_other') != ""){ ?>
	h5 {	
		font-family:'<?php echo str_replace('+',' ',get_option('tmoption_h5font_other')); ?>', Arial, Helvetica, sans-serif;
	}	
	<?php } } elseif(get_option('tmoption_h5font') != "" && get_option('tmoption_h5font') != "please-select"){ ?>
	h5 {	
		font-family:'<?php echo str_replace('+',' ',get_option('tmoption_h5font')); ?>', Arial, Helvetica, sans-serif;
	}	
	<?php } ?>
	
	<?php if(get_option('tmoption_h5color') != ""){ ?>
	h5 {	
		color:#<?php echo get_option('tmoption_h5color'); ?>;	
	}	
	<?php } ?>
	
	<?php if( (get_option('tmoption_h6font') == "Other+Fonts") || get_option('tmoption_h6font') == "please-select"){  
	if	(get_option('tmoption_h6font_other') != ""){ ?>
	h6 {	
		font-family:'<?php echo str_replace('+',' ',get_option('tmoption_h6font_other')); ?>', Arial, Helvetica, sans-serif;
	}	
	<?php } } elseif(get_option('tmoption_h6font') != "" && get_option('tmoption_h6font') != "please-select"){ ?>
	h6 {	
		font-family:'<?php echo str_replace('+',' ',get_option('tmoption_h6font')); ?>', Arial, Helvetica, sans-serif;
	}	
	<?php }  ?>	
	<?php 
	if(get_option('tmoption_h6color') != ""){ ?>
	h6 {	
		color:#<?php echo get_option('tmoption_h6color'); ?>;	
	}	
	<?php } ?>
	
	<?php if( (get_option('tmoption_h3font') == "Other+Fonts") || get_option('tmoption_h3font') == "please-select"){  
	if	(get_option('tmoption_h3font_other') != ""){ ?>
	.home-service h3.widget-title {	
		font-family:'<?php echo str_replace('+',' ',get_option('tmoption_h3font_other')); ?>', Arial, Helvetica, sans-serif;	
	}	
	<?php } } elseif(get_option('tmoption_h3font') != "" && get_option('tmoption_h3font') != "please-select"){ ?>
	.home-service h3.widget-title {	
		font-family:'<?php echo str_replace('+',' ',get_option('tmoption_h3font')); ?>', Arial, Helvetica, sans-serif;
	}	
	<?php } ?>
	
	<?php if( (get_option('tmoption_navfont') == "Other+Fonts") || get_option('tmoption_navfont') == "please-select"){  
	if	(get_option('tmoption_navfont_other') != ""){ ?>
	.navbar .nav-menu li a{	
		font-family:'<?php echo str_replace('+',' ',get_option('tmoption_navfont_other')); ?>', sans-serif, Arial, Helvetica;	
	}	
	<?php } } elseif(get_option('tmoption_navfont') != "" && get_option('tmoption_navfont') != "please-select"){ ?>
	.navbar .nav-menu li a{	
		font-family:'<?php echo str_replace('+',' ',get_option('tmoption_navfont')); ?>', sans-serif, Arial, Helvetica;
	}	
	<?php } ?>
	.nav-menu li a{
		color:#<?php echo get_option('tmoption_navfont_color'); ?>;
	}	
	.nav-menu li a:hover{
		color:#<?php echo get_option('tmoption_navfont_hover_color'); ?>;
	}	
	.nav-menu li li a{
		color:#<?php echo get_option('tmoption_submenu_navfont_color'); ?>;
	}
	.nav-menu .sub-menu a:hover, .nav-menu .children a:hover
	{
		color:#<?php echo get_option('tmoption_submenu_navfont_hover_color'); ?>;
		background-color:#<?php echo get_option('tmoption_submenu_navbackground_hover_color'); ?>;
	}	
	
	
	a {
		color:#<?php echo get_option('tmoption_link_color'); ?>;
	}
	a:hover {
		color:#<?php echo get_option('tmoption_hoverlink_color'); ?>;
	}
	.footer a, .site-footer a{
		color:#<?php echo get_option('tmoption_footerlink_color'); ?>; 
	}
	.footer a:hover, .footer .footer-links li a:hover, .site-footer a:hover{
		color:#<?php echo get_option('tmoption_footerhoverlink_color'); ?>;		 
	}
	
	button, input[type="submit"], input[type="button"], input[type="reset"], a.forgot, a.button, button.button, input.button, #review_form #submit, .lost_password, .input-submit, .forgot, input[type="submit"], a.button-alt
{
background:#<?php echo get_option('tmoption_button_bg_color') ; ?>;
 border: 1px solid #<?php echo get_option('tmoption_button_bg_color') ; ?>;
}
button:hover, button:focus, input[type="submit"]:hover, input[type="button"]:hover, input[type="reset"]:hover, input[type="submit"]:focus, input[type="button"]:focus, input[type="reset"]:focus, a.button:focus, a.button:hover, button.button:hover, input.button:hover, #review_form #submit:hover, .lost_password:hover, .input-submit:hover, .forgot:hover, input[type="submit"]:hover, ul.products li a.add_to_cart_button:hover, .products_block ul.products li .product-block:hover a.button
{
background:#<?php echo get_option('tmoption_button_bg_hover_color') ; ?>;
border: 1px solid #<?php echo get_option('tmoption_button_bg_hover_color') ; ?>;

	
	
	<?php 
	if( (get_option('tmoption_h3font') == "Other+Fonts") || get_option('tmoption_h3font') == "please-select"){  
	if	(get_option('tmoption_h3font_other') != ""){ ?>
	h3 {	
		font-family:'<?php echo str_replace('+',' ',get_option('tmoption_h3font_other')); ?>', Arial, Helvetica, sans-serif;	
	}	
	<?php } } elseif(get_option('tmoption_h3font') != "" && get_option('tmoption_h3font') != "please-select"){ ?>
	h3 {	
		font-family:'<?php echo str_replace('+',' ',get_option('tmoption_h3font')); ?>', Arial, Helvetica, sans-serif;	
	}	
	<?php } ?>	
	
	<?php 
	if( (get_option('tmoption_footerfont') == "Other+Fonts") || get_option('tmoption_footerfont') == "Please-Select"){  
	if	(get_option('tmoption_footerfont_other') != ""){ ?>
	.footer-main {	
		font-family:'<?php echo str_replace('+',' ',get_option('tmoption_footerfont_other')); ?>', Arial, Helvetica, sans-serif;
	}	
	<?php } } elseif(get_option('tmoption_footerfont') != "" && get_option('tmoption_footerfont') != "please-select"){ ?>
	.footer-main {	
		font-family:'<?php echo str_replace('+',' ',get_option('tmoption_footerfont')); ?>', Arial, Helvetica, sans-serif;	
	}	
	<?php } ?>	

	.site-footer{
		background-color:#<?php echo get_option('tmoption_footerbkg_color') ; ?> ;
	}
	.title-dec .expy-home a:hover {
		color:#<?php echo get_option('tmoption_footerhoverlink_color'); ?>;
	}
	.navbar, .navbar-mobile {
		background-color:#<?php echo get_option('tmoption_navigationbkg_color') ; ?> ;
	}
	
	body {
		background-color:#<?php echo get_option('tmoption_bkg_color') ; ?> ;
		<?php if(get_option('tmoption_background_upload')==''){ ?>
		background-image: url("<?php echo get_template_directory_uri(); ?>/css/images/<?php echo get_option('tmoption_texture'); ?>");
		background-position:<?php echo str_replace('+',' ',get_option('tmoption_back_position')); ?> ;
		background-repeat:<?php echo get_option('tmoption_back_repeat'); ?>;
		background-attachment:<?php echo get_option('tmoption_back_attachment'); ?>;
		<?php } else { ?>
		background-image: url("<?php echo get_option('tmoption_background_upload'); ?>");
		background-position:<?php echo str_replace('+',' ',get_option('tmoption_back_position')); ?>;
		background-repeat:<?php echo get_option('tmoption_back_repeat'); ?>;
		background-attachment:<?php echo get_option('tmoption_back_attachment'); ?>;
		<?php } ?>			
		color:#<?php echo get_option('tmoption_bodyfont_color'); ?>;
	} 
	
	.site-header {
		background-color:#<?php echo get_option('tmoption_header_background_upload') ; ?>;
		<?php if(get_option('tmoption_header_background_upload')!=''){ ?>
		background-image: url("<?php echo get_option('tmoption_header_background_upload'); ?>");
		background-position:<?php echo str_replace('+',' ',get_option('tmoption_header_back_position')); ?>;
		background-repeat:<?php echo get_option('tmoption_header_back_repeat'); ?>;
		background-attachment:<?php echo get_option('tmoption_header_back_attachment'); ?>;
		<?php } ?>
	} 
	
	<?php 
	if( (get_option('tmoption_bodyfont') == "Other+Fonts") || get_option('tmoption_bodyfont') == "please-select"){  
	if	(get_option('tmoption_bodyfont_other') != ""){ ?>
	body {	
		font-family: '<?php echo str_replace('+',' ',get_option('tmoption_bodyfont_other')); ?>', Arial, Helvetica, sans-serif;	
	}	
	<?php } } elseif(get_option('tmoption_bodyfont') != "" && get_option('tmoption_bodyfont') != "please-select"){ ?>
	body {	
		font-family: '<?php echo str_replace('+',' ',get_option('tmoption_bodyfont')); ?>', Arial, Helvetica, sans-serif;	
	}	
	<?php }  ?>		
</style>
<?php if(get_option('tmoption_control_panel') == 'no') return; 
	$bkg_color = get_option('tmoption_bkg_color') ;
	$texture = get_option('tmoption_texture');
	$bodyfont = str_replace('+',' ',get_option('tmoption_bodyfont'));
	$bodyfont_color = get_option('tmoption_bodyfont_color');
	$headerfont = str_replace('+',' ',get_option('tmoption_headerfont'));
	$headerfont_color = get_option('tmoption_h1color');
	$navfont = str_replace('+',' ',get_option('tmoption_navfont'));
	$navfont_color = get_option('tmoption_navlink_color');
	$link_color = get_option('tmoption_link_color');
	$link_color_hover = get_option('tmoption_hoverlink_color');
	$footer_link_color = get_option('tmoption_footerlink_color');
?>
<script type="text/javascript">
var bkg_color_default = '<?php echo $bkg_color; ?>',
	bodyfont_color_default = '<?php echo $bodyfont_color; ?>',
	headerfont_color_default = '<?php echo $headerfont_color; ?>',
	navfont_color_default = '<?php echo $navfont_color; ?>',
	link_color_default = '<?php echo $link_color; ?>',
	footer_link_color_default = '<?php echo $footer_link_color; ?>';
</script>
<?php } 

add_action( 'wp_head', 'tm_panel_head' );
function tm_panel_head(){
	
	if(get_option('tmoption_control_panel') == 'no') return;
	
	//=========================================== Background Settings ===========================================//
	$tm_bkgcolor = isset($_COOKIE['tm_bkgcolor']) ? $_COOKIE['tm_bkgcolor'] : '';
	
	$tm_texture = isset($_COOKIE['tm_texture']) ? $_COOKIE['tm_texture'] : '';
	
	$style = '';
	if ( $tm_bkgcolor != '' || $tm_texture != '' ) {
		if ( $tm_bkgcolor != '' ) $style .= '<style type="text/css">body{ background-color: #' .$tm_bkgcolor. '; }</style>';
		if ( $tm_texture != '' ) $style .= '<style type="text/css">body{ background-image: url('.get_template_directory_uri().'/css/images/'.$tm_texture.'.png) }</style>';
		echo $style;
	}	
	
	//=========================================== Body Settings ===========================================//
	$tm_bodyfont_tag = 'body';

	$tm_bodyfont = isset($_COOKIE['tm_bodyfont']) ? $_COOKIE['tm_bodyfont'] : '';
	
	$tm_bodyfont_color = isset($_COOKIE['tm_bodyfont_color']) ? $_COOKIE['tm_bodyfont_color'] : '';

	$body_style = '';					
	if ( $tm_bodyfont != '' || $tm_bodyfont_color != '') {
		
		if ( $tm_bodyfont != '' ) {
			$tm_bodyfont_family = str_replace(' ', '+', $tm_bodyfont);
			
			$body_style .= '<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family='.$tm_bodyfont_family.'" />';
			$body_style .= '<style type="text/css">'.$tm_bodyfont_tag.' { font-family: '.$tm_bodyfont.'; }</style>';
		}
		
		if ( $tm_bodyfont_color != '' ) {
			$body_style .= '<style type="text/css">'.$tm_bodyfont_tag.' { color: #'.$tm_bodyfont_color.'; }</style>';
		}

		
		echo $body_style;
	}
	
	//=========================================== Header Settings ===========================================//
	$tm_headerfont_tag = 'h1,h2,h3,h4,h5,h6,.entry-title, .entry-title a,#secondary .widget-title,.widget-title,#footer-widget-area .widget-title,h3.service-block1,.block2 .widget-title,h3.featured-title-slide,.page h2,.block3 h3,.block3 h3,.entry-content a';
			
	$tm_headerfont = isset($_COOKIE['tm_headerfont']) ?	$_COOKIE['tm_headerfont'] : '';
	
	$tm_headerfont_color = isset($_COOKIE['tm_headerfont_color']) ? $_COOKIE['tm_headerfont_color'] : '';
	
	$header_style = '';
	if ( $tm_headerfont != '' || $tm_headerfont_color != '' ) {

		if ( $tm_headerfont != '' ) {
			$tm_headerfont_family = str_replace(' ', '+', $tm_headerfont);
			
			$header_style .= '<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family='.$tm_headerfont_family.'" />';
			$header_style .= '<style type="text/css">'.$tm_headerfont_tag.' { font-family: '.$tm_headerfont.'; }</style>';
		}
		
		if ( $tm_headerfont_color != '' ) {
			$header_style .= '<style type="text/css">'.$tm_headerfont_tag.' { color: #'.$tm_headerfont_color.'; }</style>';
		}
		
		echo $header_style;
	}
	
	//=========================================== Navigation Settings ===========================================//
	$tm_navfont_tag = '.main-navigation ul > li > a > span';
	
	$tm_navfont = isset($_COOKIE['tm_navfont']) ? $_COOKIE['tm_navfont'] : '';
	
	$tm_navfont_color = isset($_COOKIE['tm_navfont_color']) ? $_COOKIE['tm_navfont_color'] : '';
					
	$nav_style = '';
	if ( $tm_navfont != '' || $tm_navfont_color != '') {
		
		if ( $tm_navfont != '' ) {
			$tm_navfont_family = str_replace(' ', '+', $tm_navfont);
			
			$nav_style .= '<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family='.$tm_navfont_family.'" />';
			$nav_style .= '<style type="text/css">'.$tm_navfont_tag.' { font-family: '.$tm_navfont.'; }</style>';
		}
		
		if ( $tm_navfont_color != '' ) {
			$nav_style .= '<style type="text/css">'.$tm_navfont_tag.' { color: #'.$tm_navfont_color.'; }</style>';
		}
		
		echo $nav_style;
	}
	
	//=========================================== Link Settings ===========================================//
	$tm_linkcolor = isset($_COOKIE['tm_linkcolor']) ? $_COOKIE['tm_linkcolor'] : '';
	
	$link_style = '';
	if ($tm_linkcolor != '') {
		$link_style .= '<style type="text/css">a { color: #' .$tm_linkcolor. '; }</style>';
		echo $link_style;
	}
	
	//=========================================== Footer Link Settings ===========================================//
	$tm_footercolor_tag = '.footer a';
	
	$tm_footercolor = isset($_COOKIE['tm_footercolor']) ? $_COOKIE['tm_footercolor'] : '';
	
	$footer_style = '';
	if ($tm_footercolor != '') {
		$footer_style .= '<style type="text/css">'.$tm_footercolor_tag.' { color: #' .$tm_footercolor. '; }</style>';
		echo $footer_style;
	}	
}
add_action('tm_show_panel','tm_control_panel');
function tm_control_panel(){
	$google_fonts = array('Droid+Sans','Antic','Bitter','Droid+Serif','Philosopher','Oxygen','Rokkitt','Galdeano','Open+Sans','Oswald','play','varela','Andika'); ?>
<div id="tm-control-panel">
  <div id="tm-panel-container">
    <div class="tm-panel-bg"> <a id="tm-panel-switch" href="#"><span class="icon-settings"></span></a>
      <div id="tm-panel-inner">
        <div class="tm-panel-title-main"> <span class="main-title">Theme Settings</span> </div>
        <!--tm-panel-title-main-->
        <form method="post" id="panel_form" name="panel_form">
          <div class="tm-panel-block">
            <div class="tm-panel-title-back">Background Color</div>
            <?php
						$bkgcolor = (isset($_COOKIE['tm_bkgcolor'])) ? $_COOKIE['tm_bkgcolor'] : (get_option('tmoption_bkg_color'));
						if($bkgcolor == ''){$bkgcolor_style='style="background-color:#767676"';}else{$bkgcolor_style = ($bkgcolor != (get_option('tmoption_bkg_color'))) ? 'style="background-color:#'.$bkgcolor.'"' : 'style="background-color:#'.(get_option('tmoption_bkg_color')).'"';}
						?>
            <div class="tm-panel-colorpicker">
              <input id="tm-panel-bkgcolor" class="tm-item" type="text" name="tm-panel-bkgcolor" <?php echo $bkgcolor_style ?>>
            </div>
          </div>
          <!--tm-panel-block-->
          <div class="tm-panel-block">
            <div class="tm-panel-title-text-back">Background Texture</div>
            <div class="clear"></div>
            <?php 
							for ( $i=1; $i<=18; $i++ ) { ?>
            <a id="tm-bkg-texture<?php echo $i; ?>" class="tm-panel-item" href="#" title="body-bg<?php echo $i; ?>"></a>
            <?php } ?>
          </div>
          <!--tm-panel-block-->
          <div class="tm-panel-block">
            <div class="tm-panel-title">Body font</div>
            <?php 
						$bodyfont_color = (isset($_COOKIE['tm_bodyfont_color'])) ? $_COOKIE['tm_bodyfont_color'] : (get_option('tmoption_bodyfont_color'));
						if($bodyfont_color == ''){$bodyfont_color_style='style="background-color:#555555"';}else{$bodyfont_color_style = ($bodyfont_color != (get_option('tmoption_bodyfont_color'))) ? 'style="background-color:#'.$bodyfont_color.'"' : 'style="background-color:#'.(get_option('tmoption_bodyfont_color')).'"';}
						?>
            <?php
						$body_font = '';
						$body_font = ( isset( $_COOKIE['tm_bodyfont'] ) ) ? $_COOKIE['tm_bodyfont'] : str_replace('+', ' ', get_option('tmoption_bodyfont')); ?>
            <select name="tm-panel-body-font" id="tm-panel-body-font">
              <?php foreach( $google_fonts as $font ) { ?>
              <?php $encoded_value = str_replace( '+', ' ', $font ); ?>
              <option value="<?php echo $encoded_value; ?>" <?php selected( $body_font, $encoded_value ); ?>><?php echo $encoded_value; ?></option>
              <?php } ?>
            </select>
            <div class="tm-panel-colorpicker">
              <input id="tm-panel-body-font-color" class="tm-item" type="text" name="tm-panel-body-font-color" <?php echo $bodyfont_color_style ?>>
            </div>
          </div>
          <!--tm-panel-block-->
          <div class="tm-panel-block">
            <div class="tm-panel-title">
              <?php _e('Header font','templatemela');?>
            </div>
            <?php 
						$headerfont_color = (isset($_COOKIE['tm_headerfont_color'])) ? $_COOKIE['tm_headerfont_color'] : (get_option('tmoption_h1color'));
						if($headerfont_color == ''){$headerfont_color_style='style="background-color:#767676"';}else{	$headerfont_color_style = ($headerfont_color != (get_option('tmoption_h1color'))) ? 'style="background-color:#'.$headerfont_color.'"' : 'style="background-color:#'.(get_option('tmoption_h1color')).'"';}	
						?>
            <?php
						$header_font = '';
						$header_font = ( isset( $_COOKIE['tm_headerfont'] ) ) ? $_COOKIE['tm_headerfont'] : str_replace('+', ' ', get_option('tmoption_headerfont')); ?>
            <select name="tm-panel-header-font" id="tm-panel-header-font">
              <?php foreach( $google_fonts as $font ) { ?>
              <?php $encoded_value = str_replace( '+', ' ', $font ); ?>
              <option value="<?php echo $encoded_value; ?>" <?php selected( $header_font, $encoded_value ); ?>><?php echo $encoded_value; ?></option>
              <?php } ?>
            </select>
            <div class="tm-panel-colorpicker">
              <input id="tm-panel-header-font-color" class="tm-item" type="text" name="tm-panel-header-font-color" <?php echo $headerfont_color_style ?>>
            </div>
          </div>
          <!--tm-panel-block-->
          <div class="tm-panel-block">
            <div class="tm-panel-title">Navigation font</div>
            <?php 
						$navfont_color = (isset($_COOKIE['tm_navfont_color'])) ? $_COOKIE['tm_navfont_color'] : (get_option('tmoption_navlink_color'));
						if($navfont_color == ''){$navfont_color_style='style="background-color:#333333"';}else{$navfont_color_style = ($navfont_color != (get_option('tmoption_navlink_color'))) ? 'style="background-color:#'.$navfont_color.'"' : 'style="background-color:#'.(get_option('tmoption_navlink_color')).'"';}
						
						?>
            <?php
						$nav_font = '';
						$nav_font = ( isset( $_COOKIE['tm_navfont'] ) ) ? $_COOKIE['tm_navfont'] : str_replace('+', ' ', get_option('tmoption_navfont')); ?>
            <select name="tm-panel-nav-font" id="tm-panel-nav-font">
              <?php foreach( $google_fonts as $font ) { ?>
              <?php $encoded_value = str_replace( '+', ' ', $font ); ?>
              <option value="<?php echo $encoded_value; ?>" <?php selected( $nav_font, $encoded_value ); ?>><?php echo $encoded_value; ?></option>
              <?php } ?>
            </select>
            <div class="tm-panel-colorpicker">
              <input id="tm-panel-nav-font-color" class="tm-item" type="text" name="tm-panel-nav-font-color" <?php echo $navfont_color_style ?>>
            </div>
          </div>
          <!--tm-panel-block-->
          <div class="tm-panel-block">
            <div class="tm-panel-title">
              <?php _e('Link Color','templatemela');?>
            </div>
            <?php
						$linkcolor = (isset($_COOKIE['tm_linkcolor'])) ? $_COOKIE['tm_linkcolor'] : (get_option('tmoption_link_color'));
						if($linkcolor == ''){$linkcolor_style='style="background-color:#767676"';}else{$linkcolor_style = ($linkcolor != (get_option('tmoption_link_color'))) ? 'style="background-color:#'.$linkcolor.'"' : 'style="background-color:#'.(get_option('tmoption_link_color')).'"';}
						
						?>
            <div class="tm-panel-colorpicker">
              <input id="tm-panel-linkcolor" class="tm-item" type="text" name="tm-panel-linkcolor" <?php echo $linkcolor_style ?>>
            </div>
          </div>
          <!--tm-panel-block-->
          <div class="tm-panel-block">
            <div class="tm-panel-title-back">
              <?php _e('Footer Link Color','templatemela');?>
            </div>
            <?php
						$footercolor = (isset($_COOKIE['tm_footercolor'])) ? $_COOKIE['tm_footercolor'] : (get_option('tmoption_footerlink_color'));
						if($footercolor == ''){$footercolor_style='style="background-color:#9a9a9a"';}else{$footercolor_style = ($footercolor != (get_option('tmoption_footerlink_color'))) ? 'style="background-color:#'.$footercolor.'"' : 'style="background-color:#'.(get_option('tmoption_footerlink_color')).'"';}
						
						?>
            <div class="tm-panel-colorpicker">
              <input id="tm-panel-footercolor" class="tm-item" type="text" name="tm-panel-footercolor" <?php echo $footercolor_style ?> />
            </div>
          </div>
          <!--tm-panel-block-->
          <div class="more-set"> <a style="color:#000; font-size:12px;" href="<?php echo admin_url(); ?>admin.php?page=tm_theme_settings" target="_blank">
            <?php _e('See more settings in admin panel','templatemela');?>
            </a> </div>
          <!--more-set-->
        </form>
        <!--panel_form-->
        <?php
					if ( isset($_REQUEST['apply']) ) {
						$tm_bkgcolor = $_COOKIE['tm_bkgcolor'];
						
						$tm_texture = $_COOKIE['tm_texture'];
			
						$tm_bodyfont = $_COOKIE['tm_bodyfont'];
						$tm_bodyfont_color = $_COOKIE['tm_bodyfont_color'];
						
						$tm_headerfont = $_COOKIE['tm_headerfont'];
						$tm_headerfont_color = $_COOKIE['tm_headerfont_color'];
						
						$tm_navfont = $_COOKIE['tm_navfont'];
						$tm_navfont_color = $_COOKIE['tm_navfont_color'];
						
						$tm_linkcolor = $_COOKIE['tm_linkcolor'];
						
						$tm_footercolor = $_COOKIE['tm_footercolor'];
						
					} 
					elseif ( isset($_REQUEST['reset']) || !(isset($_REQUEST['reset'])) ) {
						$tm_bkgcolor = $tm_texture = $tm_bodyfont = $tm_bodyfont_color = $tm_headerfont = $tm_headerfont_color = $tm_navfont = $tm_navfont_color = $tm_linkcolor = $tm_footercolor ='';
 					} 
				?>
      </div>
      <!--tm-panel-inner-->
    </div>
    <!--tm-panel-bg-->
  </div>
  <!--tm-panel-container-->
</div>
<!--tm-control-panel-->
<?php		
}

?>
