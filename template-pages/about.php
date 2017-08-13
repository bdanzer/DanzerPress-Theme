<?php

/* Template Name: About page - DanzerPress */

get_header(); ?>

	<div id="primary" class="danzerpress-container-fw">
		<main id="main" class="danzerpress-wrap">
			<div class="danzerpress-flex-row">
				<div class="danzerpress-main-ws">
					<?php
					while ( have_posts() ) : the_post(); ?>

						<div class="danzerpress-section danzerpress-section-three danzerpress-about">
							<div class="danzerpress-flex-row">

							    <div class="danzerpress-col-2 animated fadeIn danzerpress-flex-column danzerpress-align-center">
							    	<div class="danzerpress-box">
								    	<h1 style="margin-top: 0px;">About Kevin</h1>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec volutpat elit nisi, ut euismod ligula gravida at. Morbi ultrices sapien metus, nec congue orci ornare pharetra.</p>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec volutpat elit nisi, ut euismod ligula gravida at. Morbi ultrices sapien metus, nec congue orci ornare pharetra.</p>
										<p><a href="" class="danzerpress-button">Button</a></p>
										<p><a class="danzerpress-no-thanks" href="#contact">No thanks, I need life insurance that doesn't expire</a></p>
									</div>
								</div>
								<div class="danzerpress-col-2 animated fadeIn" style="margin:0;max-width:50%;flex:0 0 50%;width:50%;line-height:0px;order:-1;">
							    	<img src="https://unsplash.it/700/700/?random">
								</div>
							</div>	
						</div>

						<div style="margin-top: 20px;" class="danzerpress-section danzerpress-box danzerpress-section-two-about">
							<h1 style="margin-top: 0px;text-align: center;">Why Choose Us?</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec volutpat elit nisi, ut euismod ligula gravida at. Morbi ultrices sapien metus, nec congue orci ornare pharetra.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec volutpat elit nisi, ut euismod ligula gravida at. Morbi ultrices sapien metus, nec congue orci ornare pharetra.</p>
							<div class="danzerpress-flex-row">
							<?php 
								$x = 1; 

								while($x <= 6) { ?>
								    <div class="danzerpress-col-3" style="text-align: center;">
										<i class="fa fa-fighter-jet" aria-hidden="true"></i>
										<h5>Title</h5>
									</div>
								    <?php $x++;
								} 
							?>
							</div>
						</div>

					<?php endwhile; // End of the loop.
					?>
				</div>
				<div class="danzerpress-sidebar">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
