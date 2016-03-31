<?php
/* Template Name: Our Team */
?>
<?php get_header(); ?>
	<div class="top-border"></div>	
	<!--Start our-team-->
	<div class="our-team full-width">
		<!--Start #primary-->
		<div id="primary" class="site-content">
			<?php templatemela_breadcrumbs(); ?>
			<!--Start  #content -->
			<div id="content" class="site-content" role="main">	
				<h1 class="entry-title-main page-title"><?php the_title(); ?></h1>
				<div class="our-team-content">
					<?php /*?><?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; endif; ?><?php */?>
					<div class="team">
						<?php templatemela_get_widget('our-team-widget'); ?>
					</div>
				</div>					
			</div><!-- End #content -->
		</div><!-- End #primary -->		
	</div><!-- End our team -->

<?php get_footer(); ?>