<?php
/* Template Name: Careers */ 
get_header(); ?>
<div class="content-main">
<?php templatemela_content_before(); ?>
	<?php if (get_option('tmoption_layout')=='3' || get_option('tmoption_layout')=='4' || get_option('tmoption_layout')=='5' ) { ?>	
		<?php get_sidebar('secondary'); ?>
	<?php } ?>
  <div class="content-wrapper">
  	<div id="primary" class="content-area">
  		<?php templatemela_breadcrumbs(); ?>
  		<div id="content" class="site-content" role="main">
  			
  			<h1>Join our Team</h1>

      	<?php
      		$args = array( 'posts_per_page' => 150, 'post_type'=>'careers' );

          $myposts = get_posts( $args );
          foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
      		
      		<?php $jobcode = get_post_meta($post->ID,'jobcode',true); ?>
      		
  
            <div id="job-post post-<?php the_ID() ?>" class="">
                <h2 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                <a class="apply-now" href="<?php the_permalink() ?>/#usermessage2a">Apply now &raquo;</a>
                </h2>
                <div class="entry-content">
                    <?php the_excerpt(); ?>
                    
                </div>
              		
            </div><!-- .post -->
          
          <?php endforeach; ?>
      
      	<?php edit_post_link(__('Edit', 'thematic'),'<span class="edit-link">','</span>') ?>
  			
  		</div><!-- #content -->
  	</div><!-- #primary -->
  </div>
	<?php templatemela_content_after(); ?>
</div>
<?php get_footer(); ?>