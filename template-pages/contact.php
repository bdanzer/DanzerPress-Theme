<?php

/* Template Name: Contact page - DanzerPress */

get_header(); ?>

	<div id="primary" class="danzerpress-container-fw">
		<main id="main" class="danzerpress-wrap">
			<h1 style="text-align: center;"><? the_title(); ?></h1>
			<div class="danzerpress-flex-row">
				<div class="danzerpress-two-thirds danzerpress-col-center danzerpress-box danzerpress-white">

					<?php
					while ( have_posts() ) : the_post(); ?>
						<?php echo do_shortcode( '[contact-form-7 id="63" title="Contact Page"]' ); ?>

					<?php endwhile; // End of the loop. ?>

				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
