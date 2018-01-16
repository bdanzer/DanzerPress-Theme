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

	<div id="primary" class="danzerpress-container-fw" style="padding: 40px 0;">
		<main id="main" class="danzerpress-wrap">
			<div class="danzerpress-flex-row">
				<div class="danzerpress-two-thirds">
					<div class="danzerpress-box danzerpress-white">
						<?php
						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/content', 'page' );

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop.
						?>
					</div>
				</div>
				<div class="danzerpress-one-third">
					<div class="danzerpress-box">
						<?php get_sidebar(); ?>
					</div>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
