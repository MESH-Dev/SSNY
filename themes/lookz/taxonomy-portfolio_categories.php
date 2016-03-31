<?php
/* Template Name: Portfolio List */ 
?>
<?php 
$taxonomy = 'portfolio_categories';
$term = get_query_var($taxonomy);
$prod_term = get_terms($taxonomy, 'slug='.$term.''); 
$term_slug = $prod_term[0]->slug;
?>
<?php get_header(); ?>
<div class="full-width">
<!--Start #primary-->
	<section id="primary" class="site-content">
		<?php templatemela_breadcrumbs(); ?>
		<!--Start  #content -->
		<div id="content" role="main">				
			<h1 class="entry-title-main page-title"><?php the_title(); ?></h1>
			<!-- Start Porfolio Items -->
			<div class="portfolio_wrapper">	
				<?php 
					$this_term = get_query_var('portfolio_categories');
						
					$args=array(
					'post_type'=> 'portfolio',
					'portfolio_categories'=> $this_term,
					'post_status'=> 'publish',
					'caller_get_posts'=>1,
					'paged'=>$paged
				);
				
				get_template_part( 'portfolio_loop', 'portfolio_categories' );	?>
			
			</div><!-- End #content -->
		</div><!-- End #primary -->
	</section><!--Start gallery-page-->
</div>
<?php get_footer();?>