<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Templatemela
 * @since Templatemela 1.0
 */
?>
		<?php templatemela_content_after(); ?>
			</div>
		</div><!-- #main -->
		<?php templatemela_main_after(); ?>
	<?php if ( 'page' == get_option('show_on_front') && is_front_page() ) :?>
	</div>
	<?php endif; ?>

		<?php templatemela_go_top(); ?>
		<?php templatemela_footer_before(); ?>
		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="footer-main">
				<?php templatemela_footer_inside(); ?>

				<?php get_sidebar('footer'); ?>
				<div class="footer-bottom">
				<?php if ( is_active_sidebar( 'fifth-footer-widget-area' ) ) : ?>
				<div id="fifth" class="fifth-widget widget hb-animate-element right-to-left">
					<?php templatemela_get_widget( 'fifth-footer-widget-area' ); ?>
				</div><!-- #fifth .widget-area -->
				<?php endif; ?>

				<?php if ( is_active_sidebar( 'sixth-footer-widget-area' ) ) : ?>
				<div id="sixth" class="sixth-widget widget hb-animate-element left-to-right">
					<?php templatemela_get_widget( 'sixth-footer-widget-area' ); ?>
				</div><!-- #sixth .widget-area -->
				<?php endif; ?>
				</div>


			<div class="footer-bottom-border"><!--Start footer-bottom-border -->
				<div class="site-info-outer">
					<div class="site-info">
						Copyright &copy; <?php echo date("Y"); ?>  <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<?php //bloginfo( 'name' ); ?></a><?php echo get_option('tmoption_footer_slog');?>
						<?php do_action( 'templatemela_credits' ); ?>

					</div>
				</div><!-- .site-info -->

				<div class="footer-menu-links test">				
					<?php
					$tm_footer_menu=array(
					'menu' => 'TM Footer Navigation',
					'depth'=> 1,
					'echo' => false,
					'menu_class'      => 'footer-menu',
					'container'       => '',
					'container_class' => '',
					'theme_location' => 'footer-menu'
					);
					echo wp_nav_menu($tm_footer_menu);
					?>
				</div><!-- #footer-menu-links -->

				</div><!-- End footer-bottom-border-->
			</div>
		</footer><!-- #colophon -->
		<?php templatemela_footer_after(); ?>
	</div><!-- #page -->

<?php
if(trim(get_option('tmoption_google_analytics_id'))!=''):
?>

<?php endif; ?>
<?php templatemela_get_widget('before-end-body-widget'); ?>
<style>
<?php templatemela_custom_css(); ?>
</style>
<?php wp_footer(); ?>

</body>
</html>
