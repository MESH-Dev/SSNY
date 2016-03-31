<?php
$slide1 = round(rand(1,5));

do{
$slide2 = round(rand(1,5));
} while ($slide1 == $slide2);

do{
$slide3 = round(rand(1,5));
} while ($slide1 == $slide3 || $slide2 == $slide3);

?>
<li>
	<img src="<?php echo WP_CONTENT_URL; ?>/themes/skinspanewyork/images/slide<?php echo $slide1; ?>.jpeg" alt="New York Spa" class="newyork-img-big"/>
</li>
<li>
	<img src="<?php echo WP_CONTENT_URL; ?>/themes/skinspanewyork/images/slide<?php echo $slide2; ?>.jpeg" alt="New York Spa" class="newyork-img-big"/>
</li>
<li>
	<img src="<?php echo WP_CONTENT_URL; ?>/themes/skinspanewyork/images/slide<?php echo $slide3; ?>.jpeg" alt="New York Spa" class="newyork-img-big"/>
</li>