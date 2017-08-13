<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package DanzerPress
 */

get_header(); ?>

	<div id="primary" class="danzerpress-container-fw">
		<main id="main" class="danzerpress-wrap">
			<div class="danzerpress-flex-row">
				<div class="danzerpress-main-ws">
					<div class="danzerpress-box danzerpress-white">
					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', get_post_type() );

						

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>
					</div>

					

					<?php the_post_navigation( array(
				            'prev_text'                  => __( 'Last Post: %title' ),
				            'next_text'                  => __( 'Next Post: %title' ),
				        ) ); ?>
				</div>
				<div id="danzerpress-main-sidebar" class="danzerpress-sidebar">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->



</main>

<?php get_footer(); ?>
