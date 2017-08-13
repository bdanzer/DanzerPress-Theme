<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DanzerPress
 */

?>

	</div><!-- #content -->

	<div class="danzerpress-call-to-action">
		<div class="danzerpress-wrap">
			<div class="danzerpress-flex-row">
				<div class="danzerpress-two-thirds">
					<h2 class="danzerpress-title">Get your personalized quote now!</h2>
				</div>
				<div class="danzerpress-one-third">
					<a class="danzerpress-button">Get Quote</a>
				</div>
			</div>
		</div>
	</div>

	<footer id="colophon" class="site-footer danzerpress-footer">
		<div id="">
			<div class="danzerpress-wrap">
				<div class="danzerpress-flex-row">
					<?php
					if(is_active_sidebar('footer-sidebar-1')){
					
						dynamic_sidebar('footer-sidebar-1');

					}
					?>
				</div>
			</div>
		</div>
		<div class="site-info">
			<?php
				if(is_active_sidebar('footer-bottom-bar')){
				
					dynamic_sidebar('footer-bottom-bar');

				}
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

	<script type="text/javascript">
	jQuery(function($) {
	    $('.danzerpress-sidebar').scrollToFixed({
	    marginTop: 75, limit: $('.danzerpress-call-to-action').offset().top - $('.danzerpress-sidebar').outerHeight() - 420,
        zIndex: 1,
	  });
	});
	</script>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
