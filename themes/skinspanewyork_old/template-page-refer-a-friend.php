<?php 
/**
Template Name:Refer a Friend
 *
 * Template for the refer a friend page of the site
 *
 */
 ?>
<?php get_header() ?>



</div><!-- .top-block -->

<div id="content">
	<div class="content-shadow"></div>

	<?php the_post() ?>
				<div id="post-<?php the_ID(); ?>" class="<?php thematic_post_class() ?>">
	    			<h2 class="entry-title"><?php the_title(); ?></h2>
					<div class="entry-content">
	<?php the_content() ?>

		<!-- CSS -->

		<style type="text/css">
		span.label,span.spacer,span.multiple span {width:120px;float:left;} 
		span.multiple {float:left;} 
		span.button {padding-left:120px;} 
		div.clear {clear:both;padding-top:5px;} 
		</style> 
				
		<div id="signup" class="deal-box">	
				
			<h3>Sign up!</h3>	
			<p>Sign up for special offers and receive a $25 gift card.</p>	

			<!-- Weekly Deals Form -->
			
			<form action="http://amail.altumdesign.com/t/r/s/yhslrt/" method="post" id="weeklydeals-form" class="deal-form">
			
			<div>
			<span class="label"><label for="yhslrt-yhslrt">Email Address:</label></span>
			<span><input type="text" name="cm-yhslrt-yhslrt" id="yhslrt-yhslrt" size="25" /></span>
			<span class="button"><input type="submit" value="Subscribe" /></span>
			</div>
			<div>
			
			</div>
			</form>
		</div>
		
		<div id="refer-a-friend" class="deal-box">
			
			<h3>Invite your Friends!</h3>		
			<p>Email your friends and invite them to Skin Spa. They'll get $25 off their first order!</p>
							
			<!-- Refer a Friend Form -->
			
			<form action="http://amail.altumdesign.com/t/r/s/jiafu/" method="post" id="referafriend-form" class="deal-form">
		
			<div>
			  <span class="label"><label for="Your Name">Your Name:</label></span>
			  <span><input type="text" name="cm-f-ydjrjlk" id="YourName" size="25" /></span>
			</div>
			<div>
			  <span class="label"><label for="Your Email">Your Email:</label></span>
			  <span><input type="text" name="cm-f-ydjrjyd" id="YourEmail" size="25" /></span>
			</div>
						<div>
			  <span class="label"><label for="name">Friend's Name:</label></span>
			  <span><input type="text" name="cm-name" id="name" size="25" /></span>
			</div>
			<div>
			<span class="label"><label for="jiafu-jiafu">Friend's Email:</label></span>
			<span><input type="text" name="cm-jiafu-jiafu" id="jiafu-jiafu" size="25" /></span>
			<span class="button"><input type="submit" value="Submit" /></span>
			</div>
			<div>
			
			</div>
		
			</form>	

		</div>	
		
		<div id="share" class="deal-box">
			<h3>Share this Deal!</h3>
			<p>Take a minute to let Twitter and Facebook know about this great $25 gift card offer!</p>
			<a href="https://twitter.com/share?text=I got a $25 gift card by signing up for weekly deals @skinspanewyork" class="twitter-share-button" data-related="jasoncosta" data-lang="en" data-related="skinspanewyork: Follow Skin Spa for great spa deals!" data-url="http://skinspanewyork.com/refer-a-friend/" data-size="large" data-count="none">Tweet</a>				
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			
			<div class="fb-like" data-href="http://skinspanewyork.com/refer-a-friend/" data-send="false" data-width="450" data-show-faces="false" data-action="recommend"></div>
		
		</div>
		
	<?php edit_post_link(__('Edit', 'thematic'),'<span class="edit-link">','</span>') ?>
	
					</div>
				</div><!-- .post -->

</div>

<?php get_footer() ?>