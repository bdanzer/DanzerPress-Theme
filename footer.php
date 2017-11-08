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

	<?php if(is_active_sidebar('footer-bottom-bar')){ ?>
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
	<?php } ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
