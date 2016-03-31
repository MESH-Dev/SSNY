<?php

/* Template Name: Products Page */



get_header(); ?>
<?php if(!is_page('shop') && !wpsc_is_in_category()): ?>
  <div class="overlay-main">	
    <div class="overlay-content-main">
<?php else: ?>
    <div class="content-main">
<?php endif; ?>
    <div class="content-wrapper">
      <div class="product_page">
        <?php get_sidebar(); ?>
      	<div id="primary" class="content-area">
      
      		<div id="content" class="site-content" role="main">
      
      			<?php /* The loop */ ?>
      
      			<?php while ( have_posts() ) : the_post(); ?>
      
      
      
      				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      
      					<header class="entry-header page-title">  
      
      						<h1 class="entry-title"><?php the_title(); ?></h1>
      
      					</header><!-- .entry-header -->
      
      
      
      					<div class="entry-content">
      
      						<?php the_content(); ?>
      
      						<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'templatemela' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
      
      					</div><!-- .entry-content -->
      
      
      
      					<footer class="entry-meta">
      
      						<?php edit_post_link( __( 'Edit', 'templatemela' ), '<span class="edit-link">', '</span>' ); ?>
      
      					</footer><!-- .entry-meta -->
      
      				</article><!-- #post -->
      
      
      
      				
      			<?php endwhile; ?>
      
      
      
      		</div><!-- #content -->
      
      	</div><!-- #primary -->

        <div class="clear">
      </div>
    </div>
  	<?php templatemela_content_after(); ?>
    </div>  	
    
<?php if(!is_page('shop')): ?>  	
  </div><!--overlay-main-->
<?php endif; ?>
<?php get_footer(); ?>