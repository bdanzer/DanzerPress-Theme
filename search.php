<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package DanzerPress
 */

get_header(); ?>

	<div id="primary" class="danzerpress-container-fw" style="padding: 40px 0;">
		<main id="main" class="danzerpress-wrap">

			<?php
			if ( have_posts() ) : ?>

			<div class="danzerpress-flex-row">
				<div class="danzerpress-col-1">
					<div class="danzerpress-flex-row">
					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post();

						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'search' );

					endwhile;

					the_posts_navigation(); ?>
					</div>
				</div>

				<?php
				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>

			</div>

		</main><!-- #main -->

	

	</section><!-- #primary -->

<?php get_footer();
