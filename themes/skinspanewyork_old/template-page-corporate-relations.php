<?php 
/**
Template Name:Corporate Relations
 *
 * Template for the corporate relations page of the site
 *
 */
 ?>
<?php get_header() ?>



</div><!-- .top-block -->


<script src="<?php echo get_stylesheet_directory_uri() ?>/js/s3Slider.js" type="text/javascript"></script>
<script type="text/javascript">
	jQuery(document).ready(function() { 
	   jQuery('#corporate-relations-slider').s3Slider({ 
	      timeOut: 1000 
	   });
	});
	</script>

<div id="content">
	<div class="content-shadow"></div>

	<?php the_post() ?>
				<div id="post-<?php the_ID(); ?>" class="<?php thematic_post_class() ?>">
	    			<h2 class="entry-title"><?php the_title(); ?></h2>	
	    			<div class="entry-content">
						<?php include(WP_CONTENT_DIR."/themes/skinspanewyork/partials/_corporate_relations.php") ?>								
						<?php the_content() ?>
						
							
						<?php edit_post_link(__('Edit', 'thematic'),'<span class="edit-link">','</span>') ?>
						
					</div>
				</div><!-- .post -->

</div>

<?php get_footer() ?>