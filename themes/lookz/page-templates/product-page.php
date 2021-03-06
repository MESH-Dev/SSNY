<?php

/* Template Name: Products Page */



get_header(); ?>

<div class="product_page">

	<div id="primary" class="content-area">

		<div id="content" class="site-content" role="main">

			<?php /* The loop */ ?>

			<?php while ( have_posts() ) : the_post(); ?>



				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<header class="entry-header page-title">

						<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>

						<div class="entry-thumbnail">

							<?php the_post_thumbnail(); ?>

						</div>

						<?php endif; ?>



						<h1 class="entry-title"><?php the_title(); ?></h1>

					</header><!-- .entry-header -->



					<div class="entry-content">

						<?php the_content(); ?>

						<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'templatemela' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>

					</div><!-- .entry-content -->



					<footer class="entry-meta">

						<?php edit_post_link( __( 'Edit', 'templatemela' ), '<span class="edit-link">', '</span>' ); ?>

					</footer><!-- .entry-meta -->

				</article><!-- #post -->



				
			<?php endwhile; ?>



		</div><!-- #content -->

	</div><!-- #primary -->
<?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>