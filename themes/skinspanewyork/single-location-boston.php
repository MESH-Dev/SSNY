<?php get_header(); ?>
<div class="content-main">
<?php templatemela_content_before(); ?>
	<!--Start blog-->
	<div class="left-sidebar">
    <ul class="locations-menu">
  <?php
    $args = array(
      'post_type' => 'location-boston',
      'title_li'  => 'BOSTON <br>LOCATIONS'
    );
    wp_list_pages( $args ); 
  ?>
  </ul>
  	<div id="primary" class="content-area">
  		<?php templatemela_breadcrumbs(); ?>
  		<div id="content" class="site-content" role="main">
  			<?php /* The loop */ ?>
  			<?php while ( have_posts() ) : the_post(); ?>
  
  				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  					<header class="entry-header page-title">
  					  <h1><?php the_title(); ?></h1>
  					  <a class="book-online-btn desktop" href="<?php echo get_post_meta($post->ID,'spabooker-url',true); ?>">Book Online</a>
  					  <a class="book-online-btn mobile" href="<?php echo get_post_meta($post->ID,'mobile-url',true); ?>">Book Online</a>
  					  
  					</header><!-- .entry-header -->
  
  					<div class="entry-content">
  					  <div class="location-gallery">
  					    <?php 
                  if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                  	the_post_thumbnail();
                  }else{ 
                ?>
<!--       					  <img class="location-image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/hallway.jpg" /> -->
                <?php } ?>
  					  </div>
  						<?php the_content(); ?>
              						
  						
      				<div class="location-details">
      				
      					<?php $c = get_post_custom(); ?>	
      					
      					<div class="location-address">
        					<h2>Contact</h2>
        					<p class="location-detail-block">
        					<?php echo $c['address1'][0]; ?><br />	
        					<?php echo $c['address2'][0]; ?><br />
        					<span class="phone-icon"></span><a id="<?php the_title(); ?>" class="location-phone" href="tel:<?php echo $c['phone'][0];  ?>"><?php echo $c['phone'][0]; ?></a>				
        					</p>
      					</div>
      				
                <div class="location-hours">
        					<h2>Hours</h2>
        					<ul class="location-detail-block">
        						<li>Sunday: <?php print_hours($c['sun-open'][0],$c['sunday-openingtime'][0],$c['sunday-closingtime'][0]); ?></li>
        						<li>Monday: <?php print_hours($c['mon-open'][0],$c['monday-openingtime'][0],$c['monday-closingtime'][0]); ?></li>
        						<li>Tuesday: <?php print_hours($c['tues-open'][0],$c['tuesday-openingtime'][0],$c['tuesday-closingtime'][0]); ?></li>
        						<li>Wednesday: <?php print_hours($c['wed-open'][0],$c['wednesday-openingtime'][0],$c['wednesday-closingtime'][0]); ?></li>
        						<li>Thursday: <?php print_hours($c['thurs-open'][0],$c['thursday-openingtime'][0],$c['thursday-closingtime'][0]); ?></li>
        						<li>Friday: <?php print_hours($c['fri-open'][0],$c['friday-openingtime'][0],$c['friday-closingtime'][0]); ?></li>
        						<li>Saturday: <?php print_hours($c['sat-open'][0],$c['saturday-openingtime'][0],$c['saturday-closingtime'][0]); ?></li>
        					</ul>
                </div>
            
      					
      				</div>
  						<div class="location-map">
  						  <?php echo do_shortcode('[mappress]'); ?>
  						</div>
  						<div class="clear"></div>
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
  
  	
  	
	</div><!-- End left-sidebar -->
	<?php templatemela_content_after(); ?>
</div>
<?php get_footer(); ?>