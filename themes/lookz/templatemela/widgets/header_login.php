<?php
/**
 * TemplateMela
 * @copyright  Copyright (c) 2010 TemplateMela. (http://www.templatemela.com)
 * @license    http://www.templatemela.com/license/
 */
?>
<?php  // Reference:  http://codex.wordpress.org/Widgets_API
class HeaderLoginWidget extends WP_Widget
{
    function HeaderLoginWidget(){
		$widget_settings = array('description' => 'Header Login Widget', 'classname' => 'widgets-headerlogin');
		parent::WP_Widget(false,$name='TM - Header Login Widget',$widget_settings);
    }
    function widget($args, $instance){
		extract($args);		
		$title = empty($instance['title']) ? '' : $instance['title']; 
		echo $before_widget; ?>
		<?php 
		/*echo $before_title;			
		if($title)
			echo $title;
		echo $after_title;*/ ?> 
		
		<?php if ( in_array( 'wp-e-commerce/wp-shopping-cart.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) :	
				global $logout_url;
				$account_text = get_option("tmoption_myaccount_text");
				$login_text = get_option("tmoption_register_text");
				$logout_text = get_option("tmoption_logout_text");
				?>
				<div class="header_login">					
			<?php if ( is_user_logged_in() ) { ?>
			<a href="<?php echo get_option( 'user_account_url' ); ?>" title="<?php echo $account_text; ?>" class="account"><?php echo $account_text; ?></a>
			<a href="<?php echo wp_logout_url( get_option( 'siteurl' ) ); ?>" title="<?php echo $logout_text; ?>" class="logout" ><?php echo $logout_text; ?></a>
			<?php }
			else { ?>
			<a href="<?php echo get_option( 'user_account_url' ); ?>" title="<?php echo $login_text; ?>" class="login show-login-link" id="show-login-link" ><?php echo $login_text; ?></a>
			<?php } ?>  
		</div>
 				<?php endif; ?>  
		<?php echo $after_widget;					
	}
    function update($new_instance, $old_instance){
		$instance = $old_instance;	
		$instance['title'] =($new_instance['title']);
	
		return $instance;
	}

    function form($instance){
		$instance = wp_parse_args( (array) $instance, array('title'=>'') );			
		$title = esc_attr($instance['title']);
	
		?>
<p><label for="<?php echo $this->get_field_id('title');?>">Title:</label>
			<input class="widefat" id="<?php echo $this->get_field_id('title');?>" name="<?php echo $this->get_field_name('title');?>" type="text" value="<?php echo $title;?>" />
		</p>
<?php
	}

}
add_action('widgets_init', create_function('', 'return register_widget("HeaderLoginWidget");'));
// end BlogWidget
?>
