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
				<div class="entry-content">
					<div id="location-content">
						<?php the_content(''.__('Read More <span class="meta-nav">&raquo;</span>', 'thematic').''); ?>
						
						<?php wp_link_pages('before=<div class="page-link">' .__('Pages:', 'thematic') . '&after=</div>') ?>
					</div>
				</div>
				<div class="location-details">
					<?php $c = get_post_custom(); ?>	
					
					<h2>Address</h2>
					<p class="location-detail-block">
					<?php echo $c['address1'][0]; ?><br />	
					<?php echo $c['address2'][0]; ?><br />
					<?php echo $c['phone'][0]; ?>					
					</p>
					
					<h2>Hours of Operation</h2>
					<ul class="location-detail-block">
						<li>Sunday: <?php print_hours($c['sun-open'][0],$c['sunday-openingtime'][0],$c['sunday-closingtime'][0]); ?></li>
						<li>Monday: <?php print_hours($c['mon-open'][0],$c['monday-openingtime'][0],$c['monday-closingtime'][0]); ?></li>
						<li>Tuesday: <?php print_hours($c['tues-open'][0],$c['tuesday-openingtime'][0],$c['tuesday-closingtime'][0]); ?></li>
						<li>Wednesday: <?php print_hours($c['wed-open'][0],$c['wednesday-openingtime'][0],$c['wednesday-closingtime'][0]); ?></li>
						<li>Thursday: <?php print_hours($c['thurs-open'][0],$c['thursday-openingtime'][0],$c['thursday-closingtime'][0]); ?></li>
						<li>Friday: <?php print_hours($c['fri-open'][0],$c['friday-openingtime'][0],$c['friday-closingtime'][0]); ?></li>
						<li>Saturday: <?php print_hours($c['sat-open'][0],$c['saturday-openingtime'][0],$c['saturday-closingtime'][0]); ?></li>
					</ul>
					
					<a class="book-online desktop" href="<?php echo get_post_meta($post->ID,'spabooker-url',true); ?>" target="_blank">Book Online &raquo;</a>
					<a class="book-online mobile" href="<?php echo get_post_meta($post->ID,'mobile-url',true); ?>" target="_blank">Book Online &raquo;</a>
				
				</div>
				<div class="clear"></div>
				
			</div><!-- .post -->
			
			
<?php get_sidebar('single-insert') ?>

			<div id="nav-below" class="navigation">
				<div class="nav-previous"><?php previous_post_link('%link', '<span class="meta-nav">&laquo;</span> %title') ?></div>
				<div class="nav-next"><?php next_post_link('%link', '%title <span class="meta-nav">&raquo;</span>') ?></div>
			</div>


<?php get_sidebar('single-bottom') ?>

		</div><!-- #content -->

<?php get_footer() ?>
