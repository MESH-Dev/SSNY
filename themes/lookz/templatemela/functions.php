<?php
/**
 * TemplateMela
 * @copyright  Copyright (c) TemplateMela. (http://www.templatemela.com)
 * @license    http://www.templatemela.com/license/
 * @author         TemplateMela
 * @version        Release: 1.0
 */
add_image_size('gallery-thumbnail', 145, 145, true);
if ( ! isset( $content_width ) )
	$content_width = 640;
/**  Set Default options : Theme Settings  */
function tm_set_default_options()
{
	add_option("tmoption_featured_title",'Featured products'); // Homepage Featured Product Title
	add_option("tmoption_offer_title",'OFFER OF THE WEEK'); // Homepage Special Product Title 
    add_option("tmoption_testimonial_title",'What People Say'); // Homepage Testimonial Title
    add_option("tmoption_brandlogo_title",'Our Brands'); // Homepage Brand Logo Title  
	add_option("tmoption_aboutteam_title",'About the Team'); // AboutUspage Team title  
	add_option("tmoption_logo_image", get_template_directory_uri()."/images/logo.png"); // set logo image	
	add_option("tmoption_logo_image_alt",'Lookz'); // set logo image alt
	add_option("tmoption_favicon_icon", get_template_directory_uri()."/images/favicon.png"); // set favicon icon		
	add_option("tmoption_contact_email",'mahesh@templatemela.com'); // yes/no, control panel
	add_option("tmoption_responsive",'yes'); // yes/no, Responsive	
	add_option("tmoption_animation",'yes'); // yes/no, Animation	
	add_option("tmoption_control_panel",'no'); // yes/no, control panel	
	add_option("tmoption_Socials_panel",'yes'); // yes/no, social panel
	add_option("tmoption_related_posts",'yes'); // yes/no, related posts
	add_option("tmoption_navigation_option",'2'); // Default/Numbering , posts navigation
	add_option("tmoption_shop_items",'6'); // Default/Numbering , Shop page items
	add_option("tmoption_background_upload",""); // Default, texture specified image
	add_option("tmoption_texture",'body-bg.png'); // Default, extra texture image
	add_option("tmoption_back_repeat","repeat"); // background repeate
	add_option("tmoption_back_position","top+left"); // background position
	add_option("tmoption_back_attachment","scroll"); // background attachment
	add_option("tmoption_bkg_color","FFFFFF"); // background color
	add_option("tmoption_bodyfont_color","666666"); // body font color
	add_option("tmoption_bodyfont",'Lato'); // Lato	
	add_option("tmoption_bodyfont_other",'sans-serif'); // sans-serif
		
	/*  Header Settings  */
	add_option("tmoption_navfont_color",'222222'); // Navigation Font color
	add_option("tmoption_navfont_hover_color",'222222'); // Navigation Font hover color
	add_option("tmoption_submenu_navfont_color",'777777'); // Submenu Navigation Font color
	add_option("tmoption_submenu_navfont_hover_color",'222222'); // Submenu Navigation Font Hover color
	add_option("tmoption_submenu_navbackground_hover_color",'EEEEEE'); // Submenu Navigation Background Hover color
	add_option("tmoption_navfont",'Lato'); // navigation menu font
	add_option("tmoption_navfont_other",'sans-serif'); // navigation menu specified font
	add_option("tmoption_cart_text",'Cart');
	add_option("tmoption_myaccount_text",'My Account'); 
	add_option("tmoption_register_text",'Login / Register'); 
	add_option("tmoption_logout_text",'Logout'); 
	
	/*  Content Settings  */
	add_option("tmoption_h1font",'Lato'); // h1 family google font
	add_option("tmoption_h1font_other",'sans-serif'); // h1 family specified font
	add_option("tmoption_h1color",'555555'); // h1 family font color	 
	add_option("tmoption_h2font",'Lato'); // h2 family google font
	add_option("tmoption_h2font_other",'sans-serif'); // h2 family specified font
	add_option("tmoption_h2color",'555555'); // h2 family font color	
	add_option("tmoption_h3font",'Lato'); // h3 family google font
	add_option("tmoption_h3font_other",'sans-serif'); // h3 family specified font
	add_option("tmoption_h3color",'555555'); // h3 family font color	
	add_option("tmoption_h4font",'Lato'); // h4 family google font
	add_option("tmoption_h4font_other",'sans-serif'); // h4 family specified font
	add_option("tmoption_h4color",'555555'); // h4 family font color	
	add_option("tmoption_h5font",'Lato'); // h5 family google font
	add_option("tmoption_h5font_other",'sans-serif'); // h5 family specified font 
	add_option("tmoption_h5color",'555555'); // h5 family font color	
	add_option("tmoption_h6font",'Lato'); // h6 family google font
	add_option("tmoption_h6font_other",'sans-serif'); // h6 family specified font 
	add_option("tmoption_h6color",'555555'); // h6 family font color	
	add_option("tmoption_link_color","666666"); // link color
	add_option("tmoption_hoverlink_color","222222"); // link hovre color
	add_option("tmoption_button_bg_color","8F8F8F"); // button color
	add_option("tmoption_button_bg_hover_color","555555"); // button hover color
	
	/*  Footer Settings  */	
	add_option("tmoption_footerbkg_color","F7F7F7"); // footer background color
	add_option("tmoption_footerlink_color","666666"); // footer link text color
	add_option("tmoption_footerhoverlink_color","222222"); // footer link hover text color
	add_option("tmoption_footerfont",'Lato'); // footer google font
	add_option("tmoption_footerfont_other",'sans-serif'); // footer specified font
	add_option("tmoption_footer_slog",'Templatemela.'); // copyright statement : Theme By templatemela

	/*  Layout Settings  */
	add_option("tmoption_layout","2"); // page layout

	/*  Portfolio Settings  */
	add_option("tmoption_portfolio_cat","yes"); 
	add_option("tmoption_portfolio_layout","3"); 
	add_option("tmoption_portfolio_perpage","4"); 
	add_option("tmoption_h3font_other","Arial");
	add_option("tmoption_navigation_home_link",'yes'); // yes/no, categories, pages	
	add_option("tmoption_portfolio_cat",'yes'); // asc, desc
	add_option("tmoption_portfolio_layout",'One Column'); // one column, two column, three column, four column
	add_option("tmoption_portfolio_perpage",'6'); // by default 6
	add_option("tmoption_headerfont",'Open Sans');	
	add_option("tmoption_featured_post_title",'Latest News'); // Featured Project Title
	add_option("tmoption_testimonials_title",'Our Clients'); // Testimonials Title   
	}
add_action('init', 'tm_set_default_options');
function tm_get_logo() {
	if (trim(get_option('tmoption_logo_image_alt')) != '') $logo_alt = get_option('tmoption_logo_image_alt') ; else $logo_alt = esc_attr(get_bloginfo('name', 'display' ));
	if (trim(get_option('tmoption_logo_image')) != ''){ echo '<img alt="'.get_option('tmoption_logo_image_alt').'" src="'.get_option('tmoption_logo_image').'" />';}
	           else{echo '<img alt="'.get_option('tmoption_logo_image_alt').'" src=" '.get_template_directory_uri(). '/images/logo.png">';}
}

function tm_get_sort_column() {
	$sort_column=''; 
	if(trim(get_option('tmoption_navigation_type'))=='categories'){
		if( trim(get_option('tmoption_navigation_sort_column')) =='id' || trim(get_option('tmoption_navigation_sort_column'))=='menu_order')
			$sort_column = 'ID';
		elseif(trim(get_option('tmoption_navigation_sort_column'))=='name' || trim(get_option('tmoption_navigation_sort_column'))=='post_title')
			$sort_column = 'name';
		elseif(trim(get_option('tmoption_navigation_sort_column'))=='count')
			$sort_column = 'count';
	}
	elseif(trim(get_option('tmoption_navigation_type'))=='pages'){
	
		if(trim(get_option('tmoption_navigation_sort_column'))=='id')
			$sort_column = 'ID';
		elseif(trim(get_option('tmoption_navigation_sort_column'))=='menu_order')
			$sort_column = 'menu_order';
		elseif(trim(get_option('tmoption_navigation_sort_column'))=='post_title' || trim(get_option('tmoption_navigation_sort_column'))=='name')
			$sort_column = 'post_title';
	}
	return $sort_column;
}
function tm_get_sort_order() {
	$sort_order='';
	if(trim(get_option('tmoption_navigation_sort_order'))=='asc')
		return 'asc';
	if(trim(get_option('tmoption_navigation_sort_order'))=='desc')
		return 'desc';
	return $sort_order;
}
function tm_get_all_categories() {
	global $wp_query; 
	if (isset($wp_query->post->ID)) $postid = $wp_query->post->ID; 
	$categories = wp_get_post_categories( $postid );
	$cats = ', ';
	
	foreach($categories as $c){
		$cat = get_category( $c );	
		$cats .= $cat->name. ',';
	}
	$cats=strtolower(rtrim($cats, " ,"));
	return $cats;
}
function tm_get_all_tags() {
	global $wp_query; 
	if (isset($wp_query->post->ID)) $postid = $wp_query->post->ID; 

	$alltags = wp_get_post_tags( $postid );
	$tags = ', ';
	
	foreach($alltags as $tag){
		$tags .= $tag->name. ',';
	}
	$tags=strtolower(rtrim($tags, " ,"));
	return $tags;
}
function extra_head(){
	$themeinfo = wp_get_theme(get_template_directory() . '/style.css');	
	echo '<meta name="generator" content="'.$themeinfo['Name'].' - '.$themeinfo['Version'].'" />';
}
add_action('wp_head','extra_head');

add_action('admin_menu', 'TM_main_menu'); 
function TM_main_menu(){	
templatemela_add_admin_menu_separator(1);  // Add a new top-level menu :
add_menu_page(__('TemplateMela','templatemela'), __('TemplateMela','templatemela'), 'manage_options', 'tm_info', 'templatemela_info_page' , get_template_directory_uri() .'/templatemela/favicon.ico',3);
global $my_settings_page, $my_settings_page1;
$my_settings_page = add_submenu_page('tm_info', __('Theme Settings','templatemela'), __('Theme Settings','templatemela'), 'manage_options', 'templatemela_theme_settings', 'templatemela_theme_settings_page');

$my_settings_page1 = add_submenu_page('tm_info', __('Hook Manager','templatemela'), __('Hook Manager','templatemela'), 'manage_options', 'templatemela_hook_manage', 'templatemela_hook_manage_page');

add_action( "admin_enqueue_scripts", 'templatemela_admin_scripts');
add_action( "admin_enqueue_scripts", 'templatemela_admin_styles');
}
function templatemela_admin_scripts() {
	wp_enqueue_script( 'pscript_admin', get_template_directory_uri() . '/js/pscript_admin.js');
	wp_enqueue_script( 'jscolor', get_template_directory_uri() . '/js/jscolor/jscolor.js');
	wp_enqueue_script( 'jquery-easytabs-min', get_template_directory_uri() . '/js/jquery.easytabs.min.js');
	wp_enqueue_script('media-upload');
	wp_enqueue_script('thickbox');
	wp_register_script('my-upload', get_template_directory_uri() . '/js/my-script.js', array('jquery','media-upload','thickbox'));
	wp_enqueue_script('my-upload');	
}

function templatemela_admin_styles() { 
	//Styles
	wp_enqueue_style('tm_admin', get_template_directory_uri() . '/templatemela/css/tm_admin.css');
	wp_enqueue_style('tab', get_template_directory_uri() . '/templatemela/css/tab.css');
	wp_enqueue_style('thickbox');
}

function templatemela_info_page() {
	$locale_file = get_template_directory() . "/templatemela/admin/templatemela.php";
	if (is_readable( $locale_file ))
		require_once( $locale_file );
}
function templatemela_theme_settings_page() {
	$locale_file = get_template_directory() . "/templatemela/admin/theme_setting.php";
	if (is_readable( $locale_file ))
		require_once( $locale_file );
}

function templatemela_hook_manage_page() {
	$locale_file = get_template_directory() . "/templatemela/admin/theme_hook.php";
	if (is_readable( $locale_file ))
		require_once( $locale_file );
}
function templatemela_add_admin_menu_separator($position) {
  global $menu;
  $index = 0;
  foreach($menu as $offset => $section) {
    if (substr($section[2],0,9)=='separator')
      $index++;
    if ($offset>=$position) {
      $menu[$position] = array('','read',"separator{$index}",'','wp-menu-separator');
      break;
    }
  }
  ksort($menu);
}
if ( ! function_exists( 'templatemela_admin_header_style' ) ) :
	function templatemela_admin_header_style() {}
endif;

/**
 * Sets the post excerpt length to 40 characters.
 * To override this length in a child theme, remove the filter and add your own
 * function tied to the excerpt_length filter hook.
 * @return int
 */
function templatemela_excerpt_length( $length ) {
	return 200;
}
remove_filter( 'excerpt_length', 'templatemela_excerpt_length' ); 
add_filter( 'excerpt_length', 'templatemela_excerpt_length' );

/**
 * Returns a "Continue Reading" link for excerpts
 * @return string "Continue Reading" link
 */
function templatemela_continue_reading_link() {
	return ' <a class="read-more" href="'. get_permalink() . '">' . __( 'Read More', 'templatemela' ) . '</a>';
}
add_filter( 'excerpt_length', 'templatemela_excerpt_length' );
/**
 * Replaces "[...]" (appended to automatically generated excerpts) with an ellipsis and templatemela_continue_reading_link().
 * To override this in a child theme, remove the filter and add your own
 * function tied to the excerpt_more filter hook.
 * @return string An ellipsis
 */
function templatemela_auto_excerpt_more( $more ) {
	return  '&hellip;' .templatemela_continue_reading_link();
}
add_filter( 'excerpt_more', 'templatemela_auto_excerpt_more' );
/**
 * Adds a pretty "Continue Reading" link to custom post excerpts.
 * To override this link in a child theme, remove the filter and add your own
 * function tied to the get_the_excerpt filter hook.
 * @return string Excerpt with a pretty "Continue Reading" link
 */
function templatemela_custom_excerpt_more( $output ) {
	if ( has_excerpt() && ! is_attachment() ) {
		$output = '&hellip;'. templatemela_continue_reading_link();
	}
	return $output;
}

/**
 * Deprecated way to remove inline styles printed when the gallery shortcode is used.
 * This function is no longer needed or used. Use the use_default_gallery_style
 * filter instead, as seen above.
 * @deprecated Deprecated in TemplateMela for WordPress 3.1
 * @return string The gallery style filter, with the styles themselves removed.
 */
function templatemela_remove_gallery_css( $css ) {
	return preg_replace( "#<style type='text/css'>(.*?)</style>#s", '', $css );
}
// Backwards compatibility with WordPress 3.0.
if ( version_compare( $GLOBALS['wp_version'], '3.3.2', '<' ) )
	add_filter( 'gallery_style', 'templatemela_remove_gallery_css' );
	
/**
 * Return the URL for the first link found in the post content.
 *
 * @since Twenty Eleven 1.0
 * @return string|bool URL or false when no link is present.
 */
function templatemela_url_grabber() {
	if ( ! preg_match( '/<a\s[^>]*?href=[\'"](.+?)[\'"]/is', get_the_content(), $matches ) )
		return false;

	return esc_url_raw( $matches[1] );
}

/**
 * Count the number of footer sidebars to enable dynamic classes for the footer
 */
function templatemela_footer_sidebar_class() {
	$count = 0;

	if ( is_active_sidebar( 'sidebar-3' ) )
		$count++;

	if ( is_active_sidebar( 'sidebar-4' ) )
		$count++;

	if ( is_active_sidebar( 'sidebar-5' ) )
		$count++;

	$class = '';

	switch ( $count ) {
		case '1':
			$class = 'one';
			break;
		case '2':
			$class = 'two';
			break;
		case '3':
			$class = 'three';
			break;
	}
	if ( $class )
		echo 'class="' . $class . '"';
}


function tm_comment_form( $args = array(), $post_id = null ) {
	global $user_identity, $id;

	if ( null === $post_id )
		$post_id = $id;
	else
		$id = $post_id;
	$commenter = wp_get_current_commenter();

	$req = get_option( 'require_name_email' );
	//$aria_req = ( $req ? ' aria-required="true"' : '' );
	$aria_req ='';
	$valid_req_class = ( $req ? " required " : '' );
	
	$fields =  array(
					
		'author'        => '<div class="comment-form-author"><div class="fiels-test"><label for="author">Name</label><em>*</em></div><input id="author" name="author" size="25" class="required author" minlength="2" /></div>',
						
		'email'        => '<div class="comment-form-email"><div class="fiels-test"><label for="email">E-Mail</label><em>*</em></div><input id="email" name="email" size="25" class="required email" /></div>',
		
		'url'        => '<div class="comment-form-url"><div class="fiels-test"><label for="url">Website</label></div><input id="url" name="url" size="25" class="url" /></div>',
	);

	$defaults = array(
		'fields'               => apply_filters( 'comment_form_default_fields', $fields ),
		'comment_field'        => '<div class="comment-form-comment"><div class="fiels-test"><label for="comment">Your comment</label><em>*</em></div><textarea id="comment" name="comment" cols="45" rows="8" class="required" ' . $aria_req . '></textarea></div>',
		'must_log_in'          => '<div class="must-log-in">' .  sprintf( __( 'You must be <a href="%s">logged in</a> to post a comment.' ), wp_login_url( apply_filters( 'the_permalink', get_permalink( $post_id ) ) ) ) . '</div>',
		'logged_in_as'         => '<div class="logged-in-as">' . sprintf( __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>' ), admin_url( 'profile.php' ), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( $post_id ) ) ) ) . '</div>',
		'id_form'              => 'commentform',
		'id_submit'            => 'submit',
		'title_reply'          => __( 'Leave a Reply','templatemela'),
		'title_reply_to'       => __( 'Leave a Reply to %s','templatemela'),
		'cancel_reply_link'    => __( 'Cancel reply','templatemela'),
		'label_submit'         => __( 'Post Comment','templatemela'),
	);

	$args = wp_parse_args( $args, apply_filters( 'comment_form_defaults', $defaults ) );

			if ( comments_open() ) : 
				do_action( 'comment_form_before' ); ?>

<div class="respond" id="respond">
  <h3 id="reply-title">
    <?php comment_form_title( $args['title_reply'], $args['title_reply_to'] ); ?>
    <small>
    <?php cancel_comment_reply_link( $args['cancel_reply_link'] ); ?>
    </small></h3>
  <?php if ( get_option( 'comment_registration' ) && !is_user_logged_in() ) : 
						echo $args['must_log_in']; 
						do_action( 'comment_form_must_log_in_after' ); 
					 else : ?>
  <form action="<?php echo site_url( '/wp-comments-post.php' ); ?>" name="commentform" method="post" id="<?php echo esc_attr( $args['id_form'] ); ?>">
    <?php do_action( 'comment_form_top' ); 
						 
						 if ( is_user_logged_in() ) : 
								 echo apply_filters( 'comment_form_logged_in', $args['logged_in_as'], $commenter, $user_identity ); 
								 do_action( 'comment_form_logged_in_after', $commenter, $user_identity ); 
						 else : 
							 echo $args['comment_notes_before']; 
							do_action( 'comment_form_before_fields' );
							foreach ( (array) $args['fields'] as $name => $field ) {
								echo apply_filters( "comment_form_field_{$name}", $field ) . "\n";
							}
							do_action( 'comment_form_after_fields' );
							
						endif; 
							  echo apply_filters( 'comment_form_field_comment', $args['comment_field'] ); 
						      echo $args['comment_notes_after']; ?>
    <div class="form-submit">
      <button class="button btn-save" title="Submit" name="submit" value="submit" type="submit" id="PostComment"><span><span><?php echo esc_attr( $args['label_submit'] ); ?></span></span></button>
      <?php comment_id_fields(); ?>
    </div>
    <?php do_action( 'comment_form', $post_id ); ?>
  </form>
  <?php endif; ?>
</div>
<!-- #respond -->
<?php do_action( 'comment_form_after' ); 

		 else : 
			 do_action( 'comment_form_comments_closed' ); 
		 endif; 
	
}
function templatemela_get_widget($location = '') {
	if ( is_active_sidebar($location) ) { 
		dynamic_sidebar($location); 
	}
}
if (version_compare( $GLOBALS['wp_version'], '3.3', '>=' )) 
	include_once(get_template_directory() . '/templatemela/widgets.php'); 

/**
 * Removes the default styles that are packaged with the Recent Comments widget.
 *
 * To override this in a child theme, remove the filter and optionally add your own
 * function tied to the widgets_init action hook.
 * This function uses a filter (show_recent_comments_widget_style) new in WordPress 3.1
 * to remove the default style. Using TemplateMela in WordPress 3.0 will show the styles,
 * but they won't have any effect on the widget in default TemplateMela styling.
 *
 */
function templatemela_remove_recent_comments_style() {
	add_filter( 'show_recent_comments_widget_style', '__return_false' );
}
add_action( 'widgets_init', 'templatemela_remove_recent_comments_style' );
if ( ! function_exists( 'templatemela_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 *
 */
function templatemela_posted_on() {
		printf( __( '%2$s <br/><span class="meta-sep">by</span> %3$s', 'templatemela' ),
		'meta-prep meta-prep-author',
		sprintf( '<a href="%1$s" title="%2$s" rel="bookmark"><span class="entry-date">%3$s</span></a>',
			get_permalink(),
			esc_attr( get_the_time() ),
			get_the_date()
		),
		sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s">%3$s</a></span>',
			get_author_posts_url( get_the_author_meta( 'ID' ) ),
			sprintf( esc_attr__( 'View all posts by %s', 'templatemela' ), get_the_author() ),
			get_the_author()
		)
	);
}
endif;

if ( ! function_exists( 'templatemela_posted_on_other' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 *
 */
function templatemela_posted_on_other() {
		$str=get_the_date(d);
		$str1=get_the_date(M);
		printf( __( '%2$s <span class="meta-sep">by</span> %3$s', 'templatemela' ),
		'meta-prep meta-prep-author',
		sprintf( '<a href="%1$s" title="%2$s" rel="bookmark"><span class="entry-date">'.$str.'</span></a>',
			get_permalink(),
			esc_attr( get_the_time() ),
			get_the_date()
		),
		sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s">%3$s</a></span>',
			get_author_posts_url( get_the_author_meta( 'ID' ) ),
			sprintf( esc_attr__( 'View all posts by %s', 'templatemela' ), get_the_author() ),
			get_the_author()
		)
	);
}
endif;

if ( ! function_exists( 'templatemela_posted_in' ) ) :
/**
 * Prints HTML with meta information for the current post (category, tags and permalink).
 *
 */
function templatemela_posted_in() {
	// Retrieves tag list of current post, separated by commas.
	$tag_list = get_the_tag_list( '', ', ' );
	if ( $tag_list ) {
		$posted_in = __( 'This entry was posted in %1$s and tagged %2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'templatemela' );
	} elseif ( is_object_in_taxonomy( get_post_type(), 'category' ) ) {
		$posted_in = __( 'This entry was posted in %1$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'templatemela' );
	} else {
		$posted_in = __( 'Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'templatemela' );
	}
	// Prints the string, replacing the placeholders.
	printf(
		$posted_in,
		get_the_category_list( ', ' ),
		$tag_list,
		get_permalink(),
		the_title_attribute( 'echo=0' )
	);
}
endif;


function templatemela_get_pagination($range = 4){  
	// $paged - number of the current page  
	global $paged, $wp_query, $max_page;  
	// How much pages do we have?  
	if ( !$max_page ) {  
		$max_page = $wp_query->max_num_pages;  
	}  
	// We need the pagination only if there are more than 1 page  
	if($max_page > 1){  
		if(!$paged){  
			$paged = 1;  
		}  
		// On the first page, don't put the First page link  
		if($paged != 1){  
			echo '<a class="first" href=" '. get_pagenum_link(1) .' "> << </a>';  
		}
		
		
		// To the previous page  
		previous_posts_link(' < ');
		// We need the sliding effect only if there are more pages than is the sliding range  
		if($max_page > $range){  
		 // When closer to the beginning  
			 if($paged < $range){  
			   for($i = 1; $i <= ($range + 1); $i++){  
			   	 if($i==$paged){$class = "current number"; }else { $class = "number"; } 
				 echo "<a class='".$class."' href='" . get_pagenum_link($i). "'>$i</a>";  
			   }  
			 }  
			 // When closer to the end  
			 elseif($paged >= ($max_page - ceil(($range/2)))){  
			   for($i = $max_page - $range; $i <= $max_page; $i++){  
				  if($i==$paged){$class = "current number"; }else { $class = "number"; } 
				 echo "<a class='".$class."' href='" . get_pagenum_link($i). "'>$i</a>";   
			   }  
			 }  
			 // Somewhere in the middle  
			 elseif($paged >= $range && $paged < ($max_page - ceil(($range/2)))){  
			   for($i = ($paged - ceil($range/2)); $i <= ($paged + ceil(($range/2))); $i++){  
				  if($i==$paged){$class = "current number"; }else { $class = "number"; } 
				 echo "<a class='".$class."' href='" . get_pagenum_link($i). "'>$i</a>";  
			   }  
			 }  
		}  
		// Less pages than the range, no sliding effect needed  
		else{  
		 for($i = 1; $i <= $max_page; $i++){  
		  if($i==$paged){$class = "current number"; }else { $class = "number"; } 
		   echo "<a class='".$class."' href='" . get_pagenum_link($i). "'>$i</a>";  
		 }  
		}  
		// Next page  
		next_posts_link(' > ');  
		// On the last page, don't put the Last page link  
		if($paged != $max_page){  
		 echo '<a class="last" href=" '. get_pagenum_link($max_page) .' "> >> </a>';  
		}  
	}  
}  	

//============================== Extra Function for this theme =====================================

add_filter('next_posts_link_attributes', 'templatemela_posts_next_link_attributes');
add_filter('previous_posts_link_attributes', 'templatemela_posts_previous_link_attributes');

function templatemela_posts_next_link_attributes() {
    return 'class="next"';
}
function templatemela_posts_previous_link_attributes() {
    return 'class="previous"';
}

function templatemela_imageurl() {
	return get_template_directory_uri() ; 
}
add_shortcode('TemplateUrl', 'templatemela_imageurl');

function templatemela_shortcode_recent_post($atts){
	extract(shortcode_atts(array('numberposts' => '5'), $atts));
	global $post;
	$output.='<ul>';	
	$args = array( 'numberposts' => '5' );
	$recent_posts = wp_get_recent_posts( $args );	
	foreach( $recent_posts as $post ){
	 $output.='<li><a href="' . get_permalink($post["ID"]) . '" title="Look '.$post["post_title"].'" >' .   $post["post_title"].'</a><div>' .   $post["post_date"].'</div> </li> ';
	}
	$output.='</ul>';

return $output;
} 
add_shortcode('tm_recent_post', 'templatemela_shortcode_recent_post');

function templatemela_get_first_post_images($post_ID)
{
	global $post, $posts;
	$first_img_src = '';
	ob_start();
	ob_end_clean();
	$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
	if (isset($matches[1][0]))
	$first_img_src = $matches[1][0];
	if(empty($first_img_src)){ //Defines a default image
		return 0;
	}
	return $first_img_src;
}
function templatemela_print_images_thumb($src,$alttext, $width=200,$height=200,$align='left')
{	
	echo "---".$src;
$parse = parse_url($src);
echo "==========". $parse['host'];
	$return = '';
	$return .= '<img src="'.mr_image_resize($src, $width, $height, true, $align, false).'"';
	$return .= " title='$alttext' alt='$alttext' width='$width' height='$height' />";	
	echo $return;
}
function templatemela_excerpt($limit) 
{
      $excerpt = explode(' ', get_the_excerpt(), $limit);
      if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).'&nbsp;.<div class="read-more"><a class="sort-read" href="'.get_permalink().'">read more...</a></div>';
      } else {
        $excerpt = implode(" ",$excerpt);
      } 
      $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
      return $excerpt;
}

add_filter('body_class', 'templatemela_add_slug_to_body_class');
function templatemela_add_slug_to_body_class($classes) {
	switch (get_option('tmoption_layout')) {
		case '1': ?>
<?php $classes[] = 'body_rightcallout' ?>
<?php break;
		case '2': ?>
<?php $classes[]= 'body_leftcallout' ?>
<?php break;
		case '3': ?>
<?php $classes[]= 'body_twoleftcallout' ?>
<?php break;
		case '4': ?>
<?php $classes[]= 'body_tworightcallout' ?>
<?php break;
		case '5': ?>
<?php $classes[]= 'body_threecallout' ?>
<?php break;
	} 
	if ( in_array( 'wp-e-commerce/wp-shopping-cart.php.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) :
		if ( is_shop() ) {
		$classes[] = 'shop';
 	 }
	endif;
	
	return $classes;
}

if ( ! function_exists( 'templatemela_check_referrer' ) ) :
	function templatemela_check_referrer() {
		if (!isset($_SERVER['HTTP_REFERER']) || $_SERVER['HTTP_REFERER'] == "") {
			wp_die( __('Please enable referrers in your browser, or, if you\'re a spammer, bugger off!','templatemela') );
		}
	}
endif;
add_action('check_comment_flood', 'templatemela_check_referrer'); 

if ( ! function_exists( 'templatemela_go_top' ) ) :
function templatemela_go_top(){ ?>
<a href="#" class="go-top color-white" >Go Top</a>
<?php } 
endif;

if ( ! function_exists( 'templatemela_strip_images' ) ) :
function templatemela_strip_images($content){	
   $content = preg_replace('/<img[^>]+./','',$content);
   return preg_replace('/<\/?a[^>]*>/','',$content);
}
endif;

/**
 * Remove inline styles printed when the gallery shortcode is used.
 * Galleries are styled by the theme in TemplateMela's style.css. This is just
 * a simple filter call that tells WordPress to not use the default styles.
 */
add_filter( 'use_default_gallery_style', '__return_false' );

// Mega Tags Function Includes //
include_once(get_template_directory() . '/templatemela/metatags.php'); 

// Shortcode Function Includes //
include_once(get_template_directory() . '/templatemela/shortcode/shortcode.php'); 

// Control Panel Tags Function Includes //
include_once(get_template_directory() . '/templatemela/controlpanel/tm_control_panel.php'); 
include_once(get_template_directory() . '/templatemela/hook-manager/admin-hooks.php'); 
include_once(get_template_directory() . '/templatemela/custom-post/portfolio.php'); 
include_once(get_template_directory() . '/templatemela/custom-post/faqs.php');
include_once(get_template_directory() . '/mr-image-resize.php');

if ( in_array( 'wp-e-commerce/wp-shopping-cart.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) :
	include_once(get_template_directory() . '/templatemela/wp-e-commerce-functions.php');
endif;

/**
 * Enqueue Templatemela Fonts
 */
if ( ! function_exists( 'templatemela_load_fonts' ) ) :
function templatemela_load_fonts() {
	$protocol = is_ssl() ? 'https' : 'http';
	wp_enqueue_style( 'Lato', "$protocol://fonts.googleapis.com/css?family=Lato:300,700" );
	wp_enqueue_style( 'Oswald', "$protocol://fonts.googleapis.com/css?family=Oswald:300" );
	wp_enqueue_style( 'Nova Square', "$protocol://fonts.googleapis.com/css?family=Nova Square" );
}
endif;
add_action( 'get_header', 'templatemela_load_fonts' );

/**
 * Enqueue Templatemela Styles
 */
if ( ! function_exists( 'templatemela_load_styles' ) ) :
function templatemela_load_styles() {
	wp_enqueue_style('isotop-port', get_template_directory_uri() . '/css/isotop-port.css');
	wp_enqueue_style('expand', get_template_directory_uri() . '/css/expand.css');
	wp_enqueue_style('custom', get_template_directory_uri() . '/custom.css');
	wp_enqueue_style('screen', get_template_directory_uri() . '/css/screen.css');
	wp_enqueue_style('lightbox', get_template_directory_uri() . '/css/lightbox.css');
	wp_enqueue_style('easy-responsive-tabs', get_template_directory_uri() . '/css/easy-responsive-tabs.css');
	wp_enqueue_style('font-awesome.min', get_template_directory_uri() . '/css/font-awesome.min.css');
	wp_enqueue_style('tm_flexslider', get_template_directory_uri() . '/css/tm_flexslider.css');
	if(get_option('tmoption_control_panel') == 'yes'):
		wp_enqueue_style('tm-style', get_template_directory_uri() . '/css/tm-style.css');
	endif; 
	if ( in_array( 'wp-e-commerce/wp-shopping-cart.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) :
		wp_enqueue_style('wp-e-commerce', get_template_directory_uri() . '/css/wp-e-commerce.css');
	endif;
		
	if(get_option('tmoption_animation') == 'yes'):
	wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css');
	endif;
}
endif;
add_action('get_header', 'templatemela_load_styles');

/**
 * Enqueue Templatemela Scripts
 */
if ( ! function_exists( 'templatemela_load_scripts' ) ) :
function templatemela_load_scripts() {	
	wp_enqueue_script( 'jquery-jqtransform', get_template_directory_uri() . '/js/jquery.jqtransform.js', array(), '', true);
	wp_enqueue_script( 'jquery-jqtransform-script', get_template_directory_uri() . '/js/jquery.jqtransform.script.js', array(), '', true);
	wp_enqueue_script( 'jquery-custom-min', get_template_directory_uri() . '/js/jquery.custom.min.js', array(), '', true);
	
	if(get_option('tmoption_animation') == 'yes'): 
	wp_enqueue_script( 'inview', get_template_directory_uri() . '/js/inview.js', array(), '', true);
	wp_enqueue_script( 'waypoints.min', get_template_directory_uri() . '/js/waypoints.min.js', array(), '', true);
	endif;
	
	wp_enqueue_script( 'carousel-min', get_template_directory_uri() . '/js/carousel.min.js', array(), '', true);
	wp_enqueue_script( 'megnor-min', get_template_directory_uri() . '/js/megnor.min.js', array(), '', true);
	wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array(), '', true);
	wp_enqueue_script( 'imagelink', get_template_directory_uri() . '/js/imagelink.js', array(), '', true);
	wp_enqueue_script( 'jquery-formalize-min', get_template_directory_uri() . '/js/jquery.formalize.min.js', array(), '', true);
	wp_enqueue_script( 'respond-min', get_template_directory_uri() . '/js/respond.min.js', array(), '', true);	
	wp_enqueue_script( 'jquery-validate', get_template_directory_uri() . '/js/jquery.validate.js', array(), '', true);	
	wp_enqueue_script( 'visuallightbox', get_template_directory_uri() . '/js/lightbox-2.6.min.js', array(), '', true);
	wp_enqueue_script( 'easyResponsiveTabs', get_template_directory_uri() . '/js/easyResponsiveTabs.js', array(), '', true);
	wp_enqueue_script( 'tm_jquery.flexslider', get_template_directory_uri() . '/js/tm_jquery.flexslider.js', array(), '', true);
	?>
<!--[if lt IE 9]>
	<?php wp_enqueue_script( 'html5', get_template_directory_uri() . '/js/html5.js', array(), '', true); ?>
	<![endif]-->
<?php }
endif;
add_action( 'wp_enqueue_scripts', 'templatemela_load_scripts' );

/**
 * Enqueue Templatemela Control Panel Scripts
 */
if ( ! function_exists( 'templatemela_load_controlpanel_script' ) ) :
function templatemela_load_controlpanel_script() {		
	if(get_option('tmoption_control_panel') == 'yes') : ?>
<script type="text/javascript">
	var tm_theme_path = "<?php echo get_template_directory_uri() ?>";			
</script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/colorpicker.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.cookie.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/pscript.js"></script>
<?php	
	endif; 
}
endif;
add_action( 'wp_footer', 'templatemela_load_controlpanel_script' );

function templatemela_portfolio_scripts() {
	global $post;
	if(!empty( $post )):
		if ( 'taxonomy-portfolio_categories.php' == get_page_template_slug( $post->ID ) ) :
			wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-1.8.3.min.js', array(), '', true );
			wp_enqueue_script( 'jquery-isotope', get_template_directory_uri() . '/js/jquery.isotope.min.js', array(), '', true);
		endif;	
	endif;
}
add_action( 'wp_enqueue_scripts', 'templatemela_portfolio_scripts' );
// Templatemela Extra Functions //

if ( ! function_exists( 'templatemela_breadcrumbs' ) ) :
function templatemela_breadcrumbs() { ?>
<div class="breadcrumbs">
  <?php if ( function_exists('yoast_breadcrumb') ) { ?>
  <?php yoast_breadcrumb('<p id="breadcrumbs">','</p>'); ?>
  <?php } ?>
</div>
<?php }
endif;

function templatemela_search_form( $form ) {
    $form = '<form role="search" method="get" id="searchform" class="search-form" action="' . home_url( '/' ) . '" >
    <div>
    <input class="search-field" type="text" value="' . get_search_query() . '" name="s" id="s" />
    <input class="search-submit" type="submit" id="searchsubmit" value="'. esc_attr__( 'Go' ) .'" />
    </div>
    </form>';
    return $form;
}

add_filter( 'get_search_form', 'templatemela_search_form' );


// Adds custom image height X width for small thumbnails
add_image_size( 'small-thumb', 50, 50, true );

// Setting up menus to menu locations
add_action('after_setup_theme', 'templatemela_menus_setup');
function templatemela_menus_setup() {
	$locations = get_theme_mod( 'nav_menu_locations' ); // registered menu locations in theme
	$menus = wp_get_nav_menus(); // registered menus
	if($menus){
		foreach($menus as $menu)
		{
			if($menu->slug == 'mainmenu'){
				$locations['primary'] = $menu->term_id;
				$locations['footer-menu'] = $menu->term_id;
			}
			if($menu->slug == 'header-top-links')
				$locations['contact-header-menu'] = $menu->term_id;			
		}	
		set_theme_mod( 'nav_menu_locations', $locations );
	}
}
?>
