<?php 
/**
Template Name:Services
 *
 * Template for the Services page and Sub-Services pages of the site
 *
 */
 ?>
<?php get_header() ?>



</div><!-- .top-block -->


<div id="content">
	<div class="content-shadow"></div>

	<?php the_post() ?>
				<div id="post-<?php the_ID(); ?>" class="<?php thematic_post_class() ?>">
	    			<h2 class="entry-title"><?php the_title(); ?></h2>
	    			<div class="breadcrumbs">
					    <?php if(function_exists('bcn_display'))
					    {
					        bcn_display();
					    }?>
					</div>
					<div class="entry-content">
						<div id="services-content">
						<?php the_content() ?>
						</div>
						
						<?php 
						$post_id = $post->ID;
						$children = get_pages("child_of=$post_id");
					    if( count( $children ) != 0 ) { $child_of = $post->ID; } // Has Children
					    else { $child_of = $post->post_parent; } // No children
						
						$args = array(
							'depth'        => 1,
							'show_date'    => '',
							'date_format'  => get_option('date_format'),
							'child_of'     => $child_of,
							'exclude'      => '',
							'include'      => '',
							'title_li'     => '',
							'echo'         => 1,
							'authors'      => '',
							'sort_column'  => 'menu_order, post_title',
							'link_before'  => '',
							'link_after'   => '',
							'walker'       => '',
							'post_type'    => 'page',
						    'post_status'  => 'publish' 
						);	?>
						<ul class='submenu'>
						<?php wp_list_pages($args); ?>
						</ul>
						<div class="clear"></div>
	<?php edit_post_link(__('Edit', 'thematic'),'<span class="edit-link">','</span>') ?>
	
					</div>
				</div><!-- .post -->

</div>

<?php get_footer() ?>