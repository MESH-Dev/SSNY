<?php
/**
 * TemplateMela
 * @copyright  Copyright (c) 2010 TemplateMela. (http://www.templatemela.com)
 * @license    http://www.templatemela.com/license/
 */
?>
<?php  // Reference:  http://codex.wordpress.org/Widgets_API
class Offer_sliderWidget extends WP_Widget
{
    function Offer_sliderWidget(){
		$widget_settings = array('description' => 'Offer Slider Widget', 'classname' => 'widgets-testimonial');
		parent::WP_Widget(false,$name='TM - Offer Slider Widget',$widget_settings);
    }
    function widget($args, $instance){
		extract($args);
		$window_target = isset($instance['window_target']) ? $instance['window_target'] : false;
		$is_template_path1 = isset($instance['is_template_path1']) ? $instance['is_template_path1'] : false;
		$imageSrc1 = empty($instance['imageSrc1']) ? '' : $instance['imageSrc1'];
		$linkURL = empty($instance['linkURL']) ? '' : $instance['linkURL'];
		if($is_template_path1 == 1):
			$imageSrc1 = get_template_directory_uri() . '/images/offer_Slider/' . $imageSrc1; 
		endif;
		
	?>
	<li>
	
		<div class="testi-image"> 
			<a href="<?php if($linkURL == ""): echo home_url( '/' ); else:?><?php echo $linkURL; endif;?>" 
				<?php if($window_target == true) echo 'target="_blank"'; ?>> 
				<img src="<?php echo $imageSrc1; ?>" alt="" class="vv" />
			 </a> 
		</div>
		
	</li>
	<?php	
	}
    function update($new_instance, $old_instance){
		$instance = $old_instance;
		
		$instance['window_target'] = false;
		$instance['is_template_path'] = false;
		if (isset($new_instance['window_target'])) $instance['window_target'] = true;
		if (isset($new_instance['is_template_path1'])) $instance['is_template_path1'] = true;
		$instance['linkURL'] = strip_tags($new_instance['linkURL']);
		$instance['imageSrc1'] = strip_tags($new_instance['imageSrc1']);
	
		if($is_template_path1 == 1):
			$imageSrc1 = get_template_directory_uri() . '/images/offer_Slider/' . $imageSrc1; 
		endif;
		return $instance;
	}

    function form($instance){
		$instance = wp_parse_args( (array) $instance, array('imageSrc1'=>'offer_banner1.jpg','linkURL'=>'','author'=>'','description'=>'','company'=>'','window_target'=>'', 'is_template_path1'=>1) );
		$linkURL = esc_attr($instance['linkURL']);		
		$imageSrc1 = esc_attr($instance['imageSrc1']);
		$window_target =  esc_attr($instance['window_target']);
		$is_template_path1 =  esc_attr($instance['is_template_path1']); 
		
		?>
		<p><label for="<?php echo $this->get_field_id('imageSrc1');?>">Image URL:<br /></label>
			<input class="widefat" id="<?php echo $this->get_field_id('imageSrc1');?>" name="<?php echo $this->get_field_name('imageSrc1');?>" type="text" value="<?php echo $imageSrc1;?>" /><br />
			
			<input class="checkbox" type="checkbox" <?php checked($instance['is_template_path1'], true) ?> id="<?php echo $this->get_field_id('is_template_path1'); ?>" name="<?php echo $this->get_field_name('is_template_path1'); ?>" /><label for="<?php echo $this->get_field_id('is_template_path1'); ?>">Use Template Path for Image</label>
		</p>	
		


<?php
	}

}
add_action('widgets_init', create_function('', 'return register_widget("Offer_sliderWidget");'));
// end ServicesWidget
?>
