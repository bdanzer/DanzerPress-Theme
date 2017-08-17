<?php

/* Template Name: About page - DanzerPress */

get_header(); ?>

	<div id="primary" class="danzerpress-container-fw">
		<main id="main" class="danzerpress-wrap">
			<div class="danzerpress-flex-row" style="flex-wrap: inherit !important;">
				<div class="danzerpress-main-ws">
					<?php
					while ( have_posts() ) : the_post(); ?>

						<div class="danzerpress-section danzerpress-section-three danzerpress-about">
							<div class="danzerpress-flex-row">

							    <div class="danzerpress-col-2 animated fadeIn danzerpress-flex-column danzerpress-align-center">
							    	<div class="danzerpress-box">
								    	<?php
								    		$buttontextaboutPage = get_field('button_text_about_page');
								    		$imageaboutPage = get_field('image_about_page');
								    	?>
								    	<h1 style="margin-top: 0px;"><?php the_title(); ?></h1>
								    	<?php the_content(); ?>
										<p><a href="" class="danzerpress-button" style="position: relative;"><?php echo $buttontextaboutPage; ?><span class="danzerpress-star">*</span></a></p>
										<p><a class="danzerpress-no-thanks" href="#contact" style="text-shadow: none !important;">No thanks, I need life insurance that doesn't expire<span class="danzerpress-star">*</span></a></p>
									</div>
								</div>
								<div class="danzerpress-col-2 animated fadeIn" style="margin:0;max-width:50%;flex:0 0 50%;width:50%;line-height:0px;order:-1;">
							    	<img src="<?php echo $imageaboutPage; ?>">
								</div>
							</div>	
						</div>

						<div style="margin-top: 20px;" class="danzerpress-section danzerpress-box danzerpress-section-two-about">
							<?php
								$sectiontwoaboutTitle = get_field('section_two_about_title');
								$sectiontwoaboutContent = get_field('section_two_about_content');
							?>
							<h1 style="margin-top: 0px;text-align: center;"><?php echo $sectiontwoaboutTitle; ?></h1>
								<?php echo $sectiontwoaboutContent; ?>
							<div class="danzerpress-flex-row">

								<?php if( have_rows('icons_section_two_about') ): ?>
									<?php while( have_rows('icons_section_two_about') ): the_row(); 

										// vars
										$fontAwesome = get_sub_field('fontawesome');
										$title = get_sub_field('title');

										?>
										
									    <div class="danzerpress-col-3" style="text-align: center;">
											<i class="fa <?php echo $fontAwesome; ?>" aria-hidden="true"></i>
											<h5><?php echo $title ?></h5>
										</div>

									<?php endwhile; ?>
								<?php endif; ?>

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
