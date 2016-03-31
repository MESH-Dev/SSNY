jQuery(document).ready(function(){
	jQuery('.accordion .head').click(function() {
		jQuery(this).next().toggle('slow');
		return false;
	}).next().hide();
	
	jQuery("#accordion").accordion({ collapsible: true, heightStyle: "content", active: false });
	jQuery(".accordion").accordion({ collapsible: true, heightStyle: "content", active: false });
});