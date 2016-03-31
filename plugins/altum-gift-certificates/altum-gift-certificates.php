<?php
/*
Plugin Name: Altum Gift Certificates
Plugin URI: http://altumdesign.com/
Description: Gift Certificate Management to handle fulfillment of gift certificates sold through WP E-Commerce
Version: 0.4
Author: Altum Design
Author URI: http://altumdesign.com/
*/

/*  Copyright 2013 Altum Design Studios (email : services@altumdesign.com)

    This program is owned by Altum Design and may not be redistributed in and/or modified
    in any way. 

    This program is distributed to Altum Design clients only and may not be sold or used
    in any other context.
*/
?>

<?php
/**
 * Register with hook 'wp_enqueue_scripts', which can be used for front end CSS and JavaScript
 */
add_action( 'admin_print_styles', 'altumgc_add_my_stylesheet' );

/**
 * Enqueue plugin style-file
 */
function altumgc_add_my_stylesheet() {
    // Respects SSL, Style.css is relative to the current file
    wp_register_style( 'altumgc-style', plugins_url('style.css', __FILE__) );
    wp_enqueue_style( 'altumgc-style' );
}


	
add_action('admin_menu', 'altum_gift_certificates_menu');


function altum_gift_certificates_menu() {

  add_menu_page('Gift Certificate Manager', 'Gift Certificate Manager', 'gift_certificate_management', 'altum-gift-certificates', 'view_certificates_page');

}


 
function view_certificates_page() {

  if (!current_user_can('gift_certificate_management'))  {
    wp_die( __('You do not have sufficient permissions to access this page.') );
  }

  include "pages/view-certificates.php"; 

}
?>