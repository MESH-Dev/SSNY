<?php
/*
Template Name: Archives Page
*/
?>
<?php get_header() ?>



</div><!-- .top-block -->

<div id="content">
	<div class="content-shadow"></div>

<?php the_post() ?>

			<div id="post-<?php the_ID() ?>" class="<?php thematic_post_class() ?>">
    			<h2 class="entry-title"><?php the_title(); ?></h2>
				<div class="entry-content">
<?php the_content(); ?>

					<ul id="archives-page" class="xoxo">
						<li id="category-archives" class="content-column">
							<h2><?php _e('Archives by Category', 'thematic') ?></h2>
							<ul>
								<?php wp_list_categories('optioncount=1&feed=RSS&title_li=&show_count=1') ?> 
							</ul>
						</li>
						<li id="monthly-archives" class="content-column">
							<h2><?php _e('Archives by Month', 'thematic') ?></h2>
							<ul>
								<?php wp_get_archives('type=monthly&show_post_count=1') ?>
							</ul>
						</li>
					</ul>
<?php edit_post_link(__('Edit', 'thematic'),'<span class="edit-link">','</span>') ?>

				</div>
			</div><!-- .post -->

<?php if ( get_post_custom_values('comments') ) comments_template() // Add a key/value of "comments" to enable comments on pages! ?>

		</div><!-- #content -->

<?php get_footer() ?>