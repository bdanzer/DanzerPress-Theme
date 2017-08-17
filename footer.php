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
					<h2 class="danzerpress-title">Get your free term life quote now!</h2>
				</div>
				<div class="danzerpress-one-third danzerpress-flex-column">
					<a id="quote" href="" class="danzerpress-button" style="position: relative;">I need a free term life quote<span class="danzerpress-star">*</span></a>
					<p style="text-align:center;"><a class="danzerpress-no-thanks" style="color:white;" href="<?php echo get_page_link(60); ?>"><span class="danzerpress-star">*</span>No thanks, I need life insurance that doesn't expire</a></p>
				</div>
			</div>
		</div>
	</div>

	<footer id="colophon" class="site-footer danzerpress-footer">
		<?php if(is_active_sidebar('footer-sidebar-1')){ ?>
			<div class="danzerpress-wrap">
				<div class="danzerpress-flex-row">
					
					
						<?php dynamic_sidebar('footer-sidebar-1'); ?>
				</div>
			</div>
		<?php } ?>
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
	<script type="text/javascript">
	jQuery(function($) {
	$('.nqwgt-btn').click(function() {
	     PUM.close(92);
	    });
	});
	</script>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
