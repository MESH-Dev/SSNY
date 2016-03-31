jQuery(document).ready(function(){
	jQuery('.accordion .head').click(function() {
		jQuery(this).next().toggle('slow');
		return false;
	}).next().hide();
});