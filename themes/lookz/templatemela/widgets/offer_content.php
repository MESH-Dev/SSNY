<?php
/**
 * TemplateMela
 * @copyright  Copyright (c) 2010 TemplateMela. (http://www.templatemela.com)
 * @license    http://www.templatemela.com/license/
 */
?><?php  // Reference:  http://codex.wordpress.org/Widgets_API
class Offer_contentWidget extends WP_Widget
{
    function Offer_contentWidget(){
		$widget_settings = array('description' => 'Offer Content Widget', 'classname' => 'widgets-about');
		parent::WP_Widget(false,$name='TM - Offer Content Widget',$widget_settings);
    }
    function widget($args, $instance){
		extract($args);
		$title = apply_filters('widget_title', empty($instance['title']) ? 'Our Offer' : $instance['title']);
		$is_template_path = isset($instance['is_template_path']) ? $instance['is_template_path'] : false;
        $window_target = isset($instance['window_target']) ? $instance['window_target'] : false;
		$imageSrc = empty($instance['imageSrc']) ? '' : $instance['imageSrc'];
		$description = empty($instance['description']) ? '' : $instance['description']; 
		$link_text = empty($instance['link_text']) ? '' : $instance['link_text']; 
		$linkURL = empty($instance['linkURL']) ? '' : $instance['linkURL'];
		if($is_template_path == 1):
			$imageSrc= get_template_directory_uri() . '/' . $imageSrc; 
		endif;		
		echo $before_widget;
		 ?>
		 <div class="home_offer hb-animate-element right-to-left"> 	
		 		<div class="offer_title"><?php echo $title;?></div>
				<div class="offer_description">					
					<?php if(strlen($description) > 170) { echo substr(wpautop($description), 0, 170) . '..';}else {echo wpautop($description); } ?>
				</div>
				<div class="border">
					<div class="border_main">&nbsp;</div>
				</div>
				
				
							
		</div>
		<?php
		echo $after_widget;					
	}
    function update($new_instance, $old_instance){
		$instance = $old_instance;
		$instance['window_target'] = false;
		$instance['is_template_path'] = false;
		if (isset($new_instance['window_target'])) $instance['window_target'] = true;
		if (isset($new_instance['is_template_path'])) $instance['is_template_path'] = true;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['imageSrc'] = strip_tags($new_instance['imageSrc']);
		$instance['description'] = strip_tags($new_instance['description']);
		$instance['link_text'] = strip_tags($new_instance['link_text']);
		$instance['linkURL'] = strip_tags($new_instance['linkURL']);
		return $instance;
	}
    function form($instance){
		$instance = wp_parse_args( (array) $instance, array('title'=>'Styles & Fashion', 'description' => 'We have the largest collection of the latest fashion and lifestyle', 'imageSrc'=>'', 'link_text'=>'', 'linkURL'=>'') );
		$title = esc_attr($instance['title']);
		$imageSrc = esc_attr($instance['imageSrc']);
		$description = esc_attr($instance['description']);
		$link_text = esc_attr($instance['link_text']);
		$linkURL = esc_attr($instance['linkURL']);
		?>
		
		<p><label for="<?php echo $this->get_field_id('title');?>">Title:</label>
			<input class="widefat" id="<?php echo $this->get_field_id('title');?>" name="<?php echo $this->get_field_name('title');?>" type="text" value="<?php echo $title;?>" />
		</p>
		
		<p><label for="<?php echo $this->get_field_id('description');?>">Description:</label>
			<textarea cols="18" rows="3" class="widefat" id="<?php echo $this->get_field_id('description');?>" name="<?php echo $this->get_field_name('description');?>" ><?php echo $description;?></textarea>
		</p>
		
		
		
		<?php
	}
}
add_action('widgets_init', create_function('', 'return register_widget("Offer_contentWidget");'));
// end AboutWidget
?>