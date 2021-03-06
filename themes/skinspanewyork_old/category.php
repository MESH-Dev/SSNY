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

		<h1 class="page-title"><?php _e('Category Archives:', 'thematic') ?> <span><?php echo single_cat_title(); ?></span></h1>
			<div class="archive-meta"><?php if ( !(''== category_description()) ) : echo apply_filters('archive_meta', category_description()); endif; ?></div>

			<div id="nav-above" class="navigation">
                <?php if(function_exists('wp_pagenavi')) { ?>
                <?php wp_pagenavi(); ?>
                <?php } else { ?>  
				<div class="nav-previous"><?php next_posts_link(__('<span class="meta-nav">&laquo;</span> Older posts', 'thematic')) ?></div>
				<div class="nav-next"><?php previous_posts_link(__('Newer posts <span class="meta-nav">&raquo;</span>', 'thematic')) ?></div>
				<?php } ?>
			</div>

<?php while (have_posts()) : the_post(); ?>

			<div id="post-<?php the_ID(); ?>" class="<?php thematic_post_class(); ?>">
    			<h2 class="entry-title"><?php the_title(); ?></h2>
				<div class="entry-content">
<?php the_excerpt(''.__('Read More <span class="meta-nav">&raquo;</span>', 'thematic').'') ?>

				</div>
				<?php thematic_postfooter(); ?>
			</div><!-- .post -->

<?php endwhile; ?>

			<div id="nav-below" class="navigation">
                <?php if(function_exists('wp_pagenavi')) { ?>
                <?php wp_pagenavi(); ?>
                <?php } else { ?>  
				<div class="nav-previous"><?php next_posts_link(__('<span class="meta-nav">&laquo;</span> Older posts', 'thematic')) ?></div>
				<div class="nav-next"><?php previous_posts_link(__('Newer posts <span class="meta-nav">&raquo;</span>', 'thematic')) ?></div>
				<?php } ?>
			</div>

		</div><!-- #content -->

<?php get_footer() ?>