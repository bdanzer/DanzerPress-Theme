<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package DanzerPress
 */

get_header(); ?>

	<div id="primary" class="danzerpress-container-fw" style="padding: 40px 0;">
		<main id="main" class="danzerpress-wrap">
			<div class="danzerpress-flex-row">
				<div class="danzerpress-main-ns" style="overflow: hidden;">

					<?php
					if ( have_posts() ) : ?>
						<div class="danzerpress-flex-row">

						<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post();

							/*
							 * Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'template-parts/content', 'gallery' );

						endwhile; ?>

						</div>

						<?php the_posts_navigation();

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif; ?>

				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
