<?php 
/**
Template Name:Home Page
 *
 * Template for the home page of the site
 *
 */
 ?>
<?php get_header() ?>


				<div class="offers-block">
					<?php
					  	$args = array(
					  			'post_type' => 'wpsc-product',
								'posts_per_page' => 4,
								'orderby' => 'menu_order',
								'order' => 'ASC',
								'tax_query' => array(
									array(
										'taxonomy' => 'wpsc_product_category',
										'field' => 'slug',
										'terms'	=>	'special-offers'
										)
								)
						);
						$special_offers = new WP_Query( $args );
					?>
				
					<? if ($special_offers->have_posts()): ?>
						<h2>Special Offers</h2>
					<?php endif; ?>
					
					<ul>

					<?php query_posts(); while ($special_offers->have_posts()): $special_offers->the_post(); ?>
					
						<li>
							<figure>
								<a href="<?php the_permalink(); ?>">
									<?php if ( wpsc_the_product_thumbnail() ) : ?>
										<img src="<?php echo wpsc_the_product_image(); ?>" alt="<?php the_title(); ?>" width="122" height="82" />
									<?php else: ?>
										<img class="no-image" id="product_image_<?php echo wpsc_the_product_id(); ?>" alt="No Image" title="<?php echo wpsc_the_product_title(); ?>" src="<?php echo WP_CONTENT_URL; ?>/themes/skinspanewyork/wpsc-images/noimage.png" width="122" height="82" />
									<?php endif; ?>
								</a>
								
								<figcaption>
									<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
									<strong class="price">
										<sup>$ </sup><?php echo get_post_meta($post->ID,'_wpsc_special_price',true); ?><span> (Reg $<?php echo get_post_meta($post->ID,'_wpsc_price',true); ?>)</span>
									</strong>
								</figcaption>
							</figure>
							<span class="shadow">&nbsp;</span>
						</li>
						
						<?php endwhile; ?>
						
					
					<?php 
						if($special_offers->found_posts == 0){
							include(WP_CONTENT_DIR."/themes/skinspanewyork/partials/_new_york_images.php");
						}
						if($special_offers->found_posts == 1){
							include(WP_CONTENT_DIR."/themes/skinspanewyork/partials/_home_offers_triple.php");
						}elseif($special_offers->found_posts == 2){
							include(WP_CONTENT_DIR."/themes/skinspanewyork/partials/_home_offers_double.php");
						}elseif($special_offers->found_posts == 3){
							include(WP_CONTENT_DIR."/themes/skinspanewyork/partials/_home_offers_single.php");
						};
					?>	
						
						
					</ul>
					<form action="http://amail.altumdesign.com/t/r/s/yhslrt/" method="post" id="mobileForm" class="mail-form">
						<fieldset>
							<label for="text01">SIGN UP FOR SPECIAL OFFERS & GET A $25 GIFT CARD!</label>
							<div class="row">
								<input type="text" name="cm-yhslrt-yhslrt" id="yhslrt-yhslrt" placeholder="Email Address..." />
								<input type="submit" value="Subscribe" />
							</div>
						</fieldset>
					</form>
				</div>
			</div><!-- .top-block -->

			<div class="boxes">
				<section class="box blog-box">
					<h1>BLOG</h1>
					
					
					<?php
					  	$args = array(
					  			'post_type' => 'post',
								'posts_per_page' => 3,
								'order' => 'DESC'
						);
						$post_query = new WP_Query( $args );
					?>

					<?php query_posts(); while ($post_query->have_posts()): $post_query->the_post(); ?>

						<article id="post-<?php the_ID() ?>" class="<?php thematic_post_class() ?>">
							<time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php the_date('l, F j, Y'); ?></time>
							<h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
							<?php the_excerpt(); ?>
						</article>
			
					<?php endwhile; ?>
					
				</section>
				<section class="box review-box">
					<h1>REVIEWS</h1>
					
					<?php
					  	$args = array(
					  			'post_type' => 'reviews',
								'posts_per_page' => 5,
								'orderby' => 'menu_order',
								'order' => 'ASC'
						);
						$reviews_query = new WP_Query( $args );
					?>

					<?php query_posts(); while ($reviews_query->have_posts()): $reviews_query->the_post(); ?>
					
						<article id="post-<?php the_ID() ?>" class="<?php thematic_post_class() ?> post">
							<header>
								<a href="<?php the_permalink(); ?>">
								
								<?php if(has_post_thumbnail()){
									the_post_thumbnail('',array('class'=>'ico'));
									}
								?>
								<div class="title-box">
									<strong class="name"><a href="<?php the_permalink(); ?>" title="the_title();"><?php the_title(); ?></a></strong>
									<div class="star-rating">
										<a href="<?php the_permalink(); ?>">
											<?php 
											
											$review_rating = get_post_meta($post->ID, 'rating', TRUE); 
											if ($review_rating == '4'){	?>
											<img src="<?php echo WP_CONTENT_URL;?>/themes/skinspanewyork/images/star-rating02.png" alt="image description" width="102" height="20" />
											<?php }else{ ?>
											<img src="<?php echo WP_CONTENT_URL;?>/themes/skinspanewyork/images/star-rating.png" alt="image description" width="102" height="20" />
											<?php } ?>
											
										</a>
									</div>
								</div>
							</header>
							<?php the_excerpt(); ?>
						</article>


					<?php endwhile; ?>
								
				</section>
				<section class="box location-box">
					<h1>LOCATIONS</h1>
					<ul class="location-list">
					
					
						<?php
					  	$args = array(
					  			'post_type' => 'locations',
								'posts_per_page' => -1,
								'orderby' => 'menu_order',
								'order' => 'ASC'
						);
						$locations_query = new WP_Query( $args );
					?>
	
					<?php query_posts(); while ($locations_query->have_posts()): $locations_query->the_post(); ?>					
					
						<li>
							<a href="<?php the_permalink(); ?>">
								<?php if(has_post_thumbnail()){
									the_post_thumbnail('',array('class'=>'img'));
									}
								?>
							</a>
							<div class="info">
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								<address>
									<span><?php echo get_post_meta($post->ID,'address1',true); ?></span>
									<span><?php echo get_post_meta($post->ID,'address2',true); ?></span>
									<span><?php echo get_post_meta($post->ID,'phone',true); ?></span>
								</address>
							</div>
						</li>
						
					<?php endwhile; ?>
						
						
					</ul>
				</section>
			</div><!-- .boxes -->
	
<?php get_footer() ?>