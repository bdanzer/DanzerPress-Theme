<?php

/* Template Name: Quote page - DanzerPress */

get_header(); ?>

	<div id="primary" class="danzerpress-container-fw">
		<main id="main" class="danzerpress-wrap">
			<div class="danzerpress-flex-row">
				<div class="danzerpress-main-ns">

					<?php
					while ( have_posts() ) : the_post(); ?>
					
						<h1 style="text-align: center;"><? the_title(); ?></h1>
						<p><? the_content(); ?></p>

					<?php endwhile; // End of the loop. ?>

				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
