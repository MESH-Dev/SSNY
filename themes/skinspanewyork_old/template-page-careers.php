<?php
/*
Template Name: Careers
*/
?>

<?php get_header() ?>

</div><!-- .top-block -->

<div id="content">
	<div class="content-shadow"></div>
	
	<h1>Join our Team</h1>

	<?php
		$wp_query = new WP_Query( array(
		'post_type' => 'careers',
		'posts_per_page' => 150
		) );

	
		while ( have_posts() ) : the_post() ?>
		
		<?php $jobcode = get_post_meta($post->ID,'jobcode',true); ?>
		
	
                    <div id="job-post post-<?php the_ID() ?>" class="<?php thematic_post_class() ?>">
                        <h2 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                        <a class="apply-now" href="<?php the_permalink() ?>/#usermessage2a">Apply now &raquo;</a>
                        </h2>
                        <div class="entry-content">
                            <?php the_excerpt(); ?>
                            
                        </div>
                      		
                    </div><!-- .post -->
    
    <?php endwhile; ?>

	<?php edit_post_link(__('Edit', 'thematic'),'<span class="edit-link">','</span>') ?>
	
					</div>
				</div><!-- .post -->

</div>

<?php get_footer() ?>