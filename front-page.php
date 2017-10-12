<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package DanzerPress
 */

get_header(); ?>

	<div id="primary" class="danzerpress-container-fw">
		<div class="danzerpress-flex-row">
			<div class="danzerpress-main-ns">

				<?php
					get_template_part( 'template-parts/content', 'home' );
				?>

			</div>
		</div>
	</div><!-- #primary -->

<?php get_footer(); ?>
