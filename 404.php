<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package DanzerPress
 */

get_header(); ?>

	<div id="primary" class="danzerpress-container-fw" style="background: #f9f9f9;padding-top: 40px;">
		<main id="main" class="danzerpress-wrap">

			<div class="danzerpress-flex-row">
				<div class="danzerpress-two-thirds danzerpress-col-center" style="">
					
					<div class="danzerpress-box danzerpress-white">
						<h4><?php esc_html_e( 'It looks like nothing was found at this location.', 'danzerpress' ); ?></h4>

						<?php
							get_search_form();
						?>
					</div>

				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
