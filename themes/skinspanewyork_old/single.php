<?php
global $options;
foreach ($options as $value) {
    if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; }
    else { $$value['id'] = get_settings( $value['id'] ); }
    }
?>
<?php get_header() ?>



</div><!-- .top-block -->

<div id="content">
	<div class="content-shadow"></div>

<?php the_post(); ?>

<?php get_sidebar('single-top') ?>

			<div id="post-<?php the_ID(); ?>" class="<?php thematic_post_class(); ?>">
    			<h2 class="entry-title"><?php the_title(); ?></h2>
    				    			<div class="breadcrumbs">
					    <?php if(function_exists('bcn_display'))
					    {
					        bcn_display();
					    }?>
					</div>
				<div class="entry-content">
<?php the_content(''.__('Read More <span class="meta-nav">&raquo;</span>', 'thematic').''); ?>

					<?php wp_link_pages('before=<div class="page-link">' .__('Pages:', 'thematic') . '&after=</div>') ?>
				</div>
			</div><!-- .post -->
			
<?php get_sidebar('single-insert') ?>

			<div id="nav-below" class="navigation">
				<div class="nav-previous"><?php previous_post_link('%link', '<span class="meta-nav">&laquo;</span> %title') ?></div>
				<div class="nav-next"><?php next_post_link('%link', '%title <span class="meta-nav">&raquo;</span>') ?></div>
			</div>


<?php get_sidebar('single-bottom') ?>

		</div><!-- #content -->

<?php get_footer() ?>
