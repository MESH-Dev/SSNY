<?php
/* Template Name: Corporate Relations */ 
get_header(); ?>

<script src="<?php echo get_stylesheet_directory_uri() ?>/js/s3Slider.js" type="text/javascript"></script>
<script type="text/javascript">
	jQuery(document).ready(function() { 
	   jQuery('#corporate-relations-slider').s3Slider({ 
	      timeOut: 1000 
	   });
	});
	</script>


	<?php if (get_option('tmoption_layout')=='3' || get_option('tmoption_layout')=='4' || get_option('tmoption_layout')=='5' ) { ?>	
		<?php get_sidebar('secondary'); ?>
	<?php } ?>
<div class="overlay-main">	
  <div class="overlay-content-main">
    <div class="content-wrapper">
    	<div id="primary" class="content-area">
    		<?php templatemela_breadcrumbs(); ?>
    		<div id="content" class="site-content" role="main">
          	<?php /* The loop */ ?>
    			<?php while ( have_posts() ) : the_post(); ?>
    
    				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    					<header class="entry-header page-title">
    						<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
    						<div class="entry-thumbnail">
    							<?php the_post_thumbnail(); ?>
    						</div>
    						<?php endif; ?>
    
    						<h1 class="entry-title page-title"><?php the_title(); ?></h1>
    						
    						<?php include(get_stylesheet_directory().'/partials/_corporate_relations.php'); ?>
    					</header><!-- .entry-header -->
    
    					<div class="entry-content">
    						<?php the_content(); ?>
    						<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'templatemela' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
    					</div><!-- .entry-content -->
    
    					<footer class="entry-meta">
    						<?php edit_post_link( __( 'Edit', 'templatemela' ), '<span class="edit-link">', '</span>' ); ?>
    					</footer><!-- .entry-meta -->
    				</article><!-- #post -->
    
    				<?php //comments_template(); ?>
    			<?php endwhile; ?>
    			
    		</div><!-- #content -->
    	</div><!-- #primary -->
    </div>
  </div>
</div>
<?php get_footer(); ?>