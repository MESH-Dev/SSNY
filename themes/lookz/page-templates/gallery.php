<?php
/* Template Name: Gallery */ 
?>
<?php get_header(); ?>
	<!--Start gallery-page-->
	<div class="gallery-page full-width">
		<!--Start #primary-->
		<div id="primary" class="content-area">
	 
			<!--Start  #content -->
			<div id="content" class="site-content" role="main">	
 			
				<?php while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
					<?php //comments_template( '', true ); ?>
				<?php endwhile; // end of the loop. ?>
	
			</div><!-- End #content -->
		</div><!-- End #primary -->	
	</div><!--Start gallery-page-->

<?php get_footer(); ?>