<?php
include(WP_CONTENT_DIR."/themes/skinspanewyork/partials/_home_offers_single.php");

include(WP_CONTENT_DIR."/themes/skinspanewyork/partials/_home_offers_single.php");

do{
	$third_slide = round(rand(1,5));	
} while ($third_slide == $temp_slide || $third_slide == $slide)

?>
<li>
	<img src="<?php echo WP_CONTENT_URL; ?>/themes/skinspanewyork/images/slide<?php echo $third_slide; ?>.jpg" alt="New York Spa" class="newyork-img"/>
</li>
