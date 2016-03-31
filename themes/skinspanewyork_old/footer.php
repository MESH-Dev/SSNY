<?php
global $options;
foreach ($options as $value) {
    if (get_settings( $value['id'] ) === FALSE) { $value['id'] = $value['std']; }
    else { $value['id'] = get_settings( $value['id'] ); }
    }
?>
    
<?php thematic_abovefooter(); ?>    

			<?php //if (!is_page('home')){ echo '</div><!-- .top-block -->';} ?>
		</div><!-- #main -->
	</div><!-- #wrapper -->

	<div class="clear"></div>
	<footer id="footer">
		<div class="footer-t">
			<strong class="logo"><a href="#">Skin Spa New York</a></strong>
			<div class="address-box">
				<span class="bkt">{</span>
				<span class="bkt bkt-r">}</span>
				<div class="holder">
				
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

				
					<div class="info">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<address>
							<span><?php echo get_post_meta($post->ID,'address1',true); ?></span>
							<span><?php echo get_post_meta($post->ID,'address2',true); ?></span>
							<span><?php echo get_post_meta($post->ID,'phone',true); ?></span>
						</address>
					</div>
					
					
					<?php endwhile; ?>
					<?php wp_reset_query(); ?>
				</div><!-- .holder -->
			</div>
		</div>
		<div class="container">
			<div class="add-nav">
				<h3>Services</h3>
				<?php do_action('wp_menubar','Services'); ?>
			</div>
			<div class="add-nav">
				<h3>Products</h3>
				<?php do_action('wp_menubar','Products'); ?>
			</div>
			<div class="add-nav">
				<h3>Company</h3>
				<?php do_action('wp_menubar','Company'); ?>			
			</div>
			<div class="add-nav">
				<h3>Media</h3>
				<?php do_action('wp_menubar','Media'); ?>
			</div>
			
			<form action="http://amail.altumdesign.com/t/r/s/yhslrt/" method="post" id="footerForm" class="mail-form">
				<fieldset>
					<h3>Special Offers</h3>
					<a class="btn gradient" href="<?php bloginfo('url')?>/store/special-offers/"><span>See current special offers</span></a>
					<div class="area gradient">
						<label for="text2-01">Get special offers in your email!</label>
						<span class="text">
							<input type="text" name="cm-yhslrt-yhslrt" id="yhslrt-yhslrt" placeholder="Email Address..." />
						</span>
						<div class="submit">
							<input type="submit" value="Subscribe" />
						</div>
					</div>
				</fieldset>
			</form>
		</div>
		<p class="copy">Copyright &copy; <?php echo date('Y'); ?>  Skin Spa New York</p>
		
	</footer>
		<?php
				//TODO: Figure out how to have the appropriate label on the Special Offers Page.
				//This outputs the conversion label for the last product on the page instead of the page itself
				$custom = get_post_custom($post->ID);
				$google_conversion_label = $custom["google-conversion-label"][0];	
		?>
		<script type="text/javascript">
		/* <![CDATA[ */
		var google_conversion_id = 998697320;
		var google_conversion_label = "<?php if($google_conversion_label){ echo $google_conversion_label; }else{ echo 'HHsrCKj7oAQQ6NKb3AM'; }?>";
		var google_custom_params = window.google_tag_params;
		var google_remarketing_only = true;
		/* ]]> */
		</script>
		<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
		</script>
		<noscript>
		<div style="display:inline;">
		<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/998697320/?value=0&amp;label=HHsrCKj7oAQQ6NKb3AM&amp;guid=ON&amp;script=0"/>
		</div>
		</noscript>

</body>
</html>

<?php wp_footer() ?>

</body>
</html>