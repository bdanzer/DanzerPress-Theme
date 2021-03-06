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

				<?php 

				if (have_posts()) : while (have_posts()) : the_post(); 

					get_template_part( 'template-pages/danzerpress', 'sections' );

				endwhile; endif; 

				?>
				
		</div>
	</div><!-- #primary -->

<?php get_footer(); ?>
