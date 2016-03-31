<?php
$temp_slide = $slide;

do{
	$slide = round(rand(1,5));	
} while ($temp_slide == $slide)


?>
<li>
	<img src="<?php echo WP_CONTENT_URL; ?>/themes/skinspanewyork/images/slide<?php echo $slide; ?>.jpg" alt="New York Spa" class="newyork-img"/>
</li>
