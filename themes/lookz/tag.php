<?php
/**
 * The template for displaying Tag pages
 *
 * Used to display archive-type pages for posts in a tag.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Templatemela
 * @since Templatemela 1.0
 */

get_header(); ?>

	<!--- Start Templatemela Laypout Settings --->	
	<?php if (get_option('tmoption_layout')=='3' || get_option('tmoption_layout')=='4' || get_option('tmoption_layout')=='5' ) { ?>	
		<?php get_sidebar('secondary'); ?>
	<?php } ?>
	<!--- End Templatemela Laypout Settings --->

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

		<?php if ( have_posts() ) : ?>
			<header class="archive-header">
				<h1 class="archive-title"><?php printf( __( 'Tag Archives: %s', 'templatemela' ), single_tag_title( '', false ) ); ?></h1>

				<?php if ( tag_description() ) : // Show an optional tag description ?>
				<div class="archive-meta"><?php echo tag_description(); ?></div>
				<?php endif; ?>
			</header><!-- .archive-header -->

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php templatemela_paging_nav(); ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>