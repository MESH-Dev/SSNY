<?php
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Templatemela
 * @since Templatemela 1.0
 */

get_header(); ?>
<div class="content-main">
	<!--- Start Templatemela Laypout Settings --->	
	<?php if (get_option('tmoption_layout')=='3' || get_option('tmoption_layout')=='4' || get_option('tmoption_layout')=='5' ) { ?>	
		<?php get_sidebar('secondary'); ?>
	<?php } ?>
	<!--- End Templatemela Laypout Settings --->
  <div class="content-wrapper">
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>
				<?php templatemela_post_nav(); ?>
				<?php comments_template(); ?>

			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->
  </div>
</div>
<?php get_footer(); ?>