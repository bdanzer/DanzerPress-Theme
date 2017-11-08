<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package DanzerPress
 */

get_header(); ?>

	<div id="primary" class="danzerpress-container-fw" style="padding-top: 40px;">
		<main id="main" class="danzerpress-wrap">

			<?php
			if ( have_posts() ) : ?>

				<header class="page-header">
					<h1 class="danzerpress-title"><?php
						/* translators: %s: search query. */
						printf( esc_html__( 'Search Results for: %s', 'danzerpress' ), '<span>' . get_search_query() . '</span>' );
					?></h1>
				</header><!-- .page-header -->

			<div class="danzerpress-flex-row">
				<div class="danzerpress-two-thirds">
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

				<?php
				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>

				<div class="danzerpress-one-third">
					<?php get_sidebar(); ?>
				</div>
			</div>

		</main><!-- #main -->

	

	</section><!-- #primary -->

<?php get_footer();
