<?php

add_action('admin_menu', 'homepage_settings_menu');

function homepage_settings_menu() {
	add_theme_page( 'Homepage Settings', 'Homepage', 'manage_options', 'homepage_settings','homepage_settings_callback');
}

function homepage_settings_callback(){ ?>
		<div class="wrap">
		<div class="icon32" id="icon-options-general"></div>
		<h2>Homepage Settings</h2>
		
		<form action="options.php" method="post">
			<?php 
			// http://codex.wordpress.org/Function_Reference/settings_fields
			settings_fields('show_default'); 
			
			// http://codex.wordpress.org/Function_Reference/do_settings_sections
			do_settings_sections('homepage_settings'); 
			?>

		
			<p class="submit">
				<input name="Submit" type="submit" class="button-primary" value="Save Changes" />
			</p>
			
		</form>
	</div><!-- wrap -->
<?php }

?> 

<?php 
 // ------------------------------------------------------------------
 // Add all your sections, fields and settings during admin_init
 // ------------------------------------------------------------------
 //
 
 function homepage_settings_api_init() {
	 	 	// Add the section to reading settings so we can add our
 	// fields to it
 	add_settings_section('homepage_display_setting_section',
		'Options for what to display on the Homepage',
		'homepage_display_setting_section_callback_function',
		'homepage_settings');
 	
 	// Add the field with the names and function to use for our new
 	// settings, put it in our new section
 	add_settings_field('show_default',
		'Display Default Image w/ No Campaign',
		'homepage_show_default_callback_function',
		'homepage_settings',
		'homepage_display_setting_section');
 	
 	// Register our setting so that $_POST handling is done for us and
 	// our callback function just has to echo the <input>
 	register_setting('show_default','show_default');
 }// eg_settings_api_init()
 
 add_action('admin_init', 'homepage_settings_api_init');
 
  
 // ------------------------------------------------------------------
 // Settings section callback function
 // ------------------------------------------------------------------
 //
 // This function is needed if we added a new section. This function 
 // will be run at the start of our section
 //
 
 function homepage_display_setting_section_callback_function() {
 	echo '';
 }
 
 // ------------------------------------------------------------------
 // Callback function for our example setting
 // ------------------------------------------------------------------
 //
 // creates a checkbox true/false option. Other types are surely possible
 //
 
 function homepage_show_default_callback_function() {
 	echo '<input name="show_default" id="gv_thumbnails_insert_into_excerpt" type="checkbox" value="1" class="code" ' . checked( 1, get_option('show_default'), false ) . ' /> Yes';
 }
?> 