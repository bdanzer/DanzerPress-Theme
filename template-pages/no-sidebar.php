<?php
/* Template Name: No Sidebar - Danzerpress */

get_header(); ?>

	<div id="primary" class="danzerpress-container-fw">
		<main id="main" class="danzerpress-wrap">
			<div class="danzerpress-flex-row">
				<div class="danzerpress-main-ns" style="max-width: 900px; margin: auto;">
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
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
