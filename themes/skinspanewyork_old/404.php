<?php @header("HTTP/1.1 404 Not found", TRUE, 404); ?>
<?php get_header() ?>



</div><!-- .top-block -->

<div id="content">
	<div class="content-shadow"></div>

			<div id="post-0" class="post error404">
    			<?php thematic_postheader(); ?>
				<div class="entry-content">
					<p><?php _e('Apologies, but we were unable to find what you were looking for. Perhaps  searching will help.', 'thematic') ?></p>
				</div>
				<form id="error404-searchform" method="get" action="<?php bloginfo('home') ?>">
					<div>
						<input id="error404-s" name="s" type="text" value="<?php echo wp_specialchars(stripslashes($_GET['s']), true) ?>" size="40" />
						<input id="error404-searchsubmit" name="searchsubmit" type="submit" value="<?php _e('Find', 'thematic') ?>" />
					</div>
				</form>
			</div><!-- .post -->

		</div><!-- #content -->

<?php get_footer() ?>