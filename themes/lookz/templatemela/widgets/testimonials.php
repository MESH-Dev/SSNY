<?php
/**
 * TemplateMela
 * @copyright  Copyright (c) 2010 TemplateMela. (http://www.templatemela.com)
 * @license    http://www.templatemela.com/license/
 */
?>
<?php  // Reference:  http://codex.wordpress.org/Widgets_API
class TestimonialWidget extends WP_Widget
{
    function TestimonialWidget(){
		$widget_settings = array('description' => 'Testimonials Widget', 'classname' => 'widgets-testimonial');
		parent::WP_Widget(false,$name='TM - Testimonials Widget',$widget_settings);
    }
    function widget($args, $instance){
		extract($args);
		$window_target = isset($instance['window_target']) ? $instance['window_target'] : false;
		$linkURL = empty($instance['linkURL']) ? '' : $instance['linkURL'];
		$author = empty($instance['author']) ? '' : $instance['author'];
		$description = empty($instance['description']) ? '' : $instance['description'];
		?>
		<li>
		<div class="testimonial_description"><?php echo wpautop($description); ?></div>
		<span class="tringle"></span>
		<div class="author-test">		 
		<a href="<?php if($linkURL == ""): echo home_url( '/' ); else:?><?php echo $linkURL; endif;?>" <?php if($window_target == true) ?>>
		<p class="more-text">-<?php echo $author; ?></a><br/>
		</div>
		</li>
		
	<?php	
	}
    function update($new_instance, $old_instance){
		$instance = $old_instance;
		
		$instance['window_target'] = false;
		$instance['is_template_path'] = false;
		if (isset($new_instance['window_target'])) $instance['window_target'] = true;
		if (isset($new_instance['is_template_path'])) $instance['is_template_path'] = true;
		$instance['linkURL'] = strip_tags($new_instance['linkURL']);
		$instance['author'] = strip_tags($new_instance['author']);		
		$instance['description'] = strip_tags($new_instance['description']);
		return $instance;
	}

    function form($instance){
		$instance = wp_parse_args( (array) $instance, array('title'=>'','linkURL'=>'#','author'=>'John mack','description'=>'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 ','company'=>'','window_target'=>'') );
		$linkURL = esc_attr($instance['linkURL']);		
		$author = esc_attr($instance['author']);
		$description = esc_attr($instance['description']);
		$window_target =  esc_attr($instance['window_target']);
		
		?>
<p>
  <label for="<?php echo $this->get_field_id('linkURL');?>">Link URL:<br />
  </label>
  <input class="widefat" id="<?php echo $this->get_field_id('linkURL');?>" name="<?php echo $this->get_field_name('linkURL');?>" type="text" value="<?php echo $linkURL;?>" />
  <label>(e.g. http://www.yoursite.com/...)</label>
  <br />
  <input class="checkbox" type="checkbox" <?php checked($instance['window_target'], true) ?> id="<?php echo $this->get_field_id('window_target'); ?>" name="<?php echo $this->get_field_name('window_target'); ?>" />
  <label for="<?php echo $this->get_field_id('window_target'); ?>">Open Link In New Window</label>
</p>

<p>
  <label for="<?php echo $this->get_field_id('author');?>">Author:<br />
  </label>
  <input class="widefat" id="<?php echo $this->get_field_id('author');?>" name="<?php echo $this->get_field_name('author');?>" type="text" value="<?php echo $author;?>" />
</p>

<p>
  <label for="<?php echo $this->get_field_id('description');?>">Description:</label>
  <textarea cols="18" rows="3" class="widefat" id="<?php echo $this->get_field_id('description');?>" name="<?php echo $this->get_field_name('description');?>" ><?php echo $description;?></textarea>
</p>
<?php
	}

}
add_action('widgets_init', create_function('', 'return register_widget("TestimonialWidget");'));
// end ServicesWidget
?>
