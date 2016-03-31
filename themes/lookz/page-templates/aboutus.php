<?php
/* Template Name: About us */
?>
<?php get_header(); ?>
	
	<div class="aboutus full-width">
		<!--Start #primary-->
		<div id="primary" class="site-content">
			<?php templatemela_breadcrumbs(); ?>
			<!--Start  #content -->
			<div id="content" class="site-content" role="main">	
				<h1 class="entry-title-main page-title"><?php the_title(); ?></h1>
				<div class="about-us-page">
				<?php if ( is_active_sidebar( 'about-us-widget' ) ): ?>
					<div class="aboutus">
						<?php templatemela_get_widget('about-us-widget'); ?>
					</div>
				<?php endif; ?>
				<?php if ( is_active_sidebar( 'about-team-widget' ) ): ?>
					<div class="team aboutteam">
						<div class="title_outer"><span class="title_dot"><span class="title_inner_dot"><span class="widget-title"><?php echo get_option("tmoption_aboutteam_title"); ?></span></span></span></div>
						<?php templatemela_get_widget('about-team-widget'); ?>
					</div>
				<?php endif; ?>
				<?php if ( is_active_sidebar( 'about-latest-news-widget' ) ): ?>
					<div class="aboutnews">
						<?php templatemela_get_widget('about-latest-news-widget'); ?>
					</div>
				<?php endif; ?>
				</div>					
			</div><!-- End #content -->
		</div><!-- End #primary -->		
	</div><!-- End our team -->

<?php get_footer(); ?>