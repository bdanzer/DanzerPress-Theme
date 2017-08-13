<?php

/* Template Name: Contact page - DanzerPress */

get_header(); ?>

	<div id="primary" class="danzerpress-container-fw">
		<main id="main" class="danzerpress-wrap">
			<div class="danzerpress-flex-row">
				<div class="danzerpress-main-ws">

					<?php
					while ( have_posts() ) : the_post(); ?>
					
						<h1><? the_title(); ?></h1>
						<?php echo do_shortcode( '[contact-form-7 id="63" title="Contact Page"]' ); ?>

					<?php endwhile; // End of the loop. ?>

				</div>

				<div class="danzerpress-sidebar">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
