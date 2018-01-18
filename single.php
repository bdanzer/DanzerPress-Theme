<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package DanzerPress
 */

get_header(); ?>

	<div id="primary" class="danzerpress-container-fw" style="padding-top: 40px; background: white;">
		<main id="main" class="danzerpress-wrap">
			<div class="danzerpress-flex-row">
				<div class="danzerpress-two-thirds">
					
					<?php if (get_the_post_thumbnail()) { ?>
						<div class="danzerpress-blog-thumbnail">
							<div class="danzerpress-image-wrap"><?php the_post_thumbnail(); ?></div>
						</div>
					<?php } ?>

					<div class="danzerpress-box danzerpress-white" style="padding: 20px 0;">
					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', get_post_type() );

						

						?>
						<div id="cooler-nav" class="navigation danzerpress-flex-row">
								<?php $prevPost = get_previous_post(true);
								if($prevPost) {?>
									<div class="nav-box previous danzerpress-col-2">
										<?php 
											if (get_the_post_thumbnail_url($prevPost->ID)) {
												$prevthumbnail = get_the_post_thumbnail_url($prevPost->ID ); 
											} else {
												$nextthumbnail = danzerpress_no_image();
											}
										?>
										<?php previous_post_link('%link',"  <p class='danzerpress-prev-image' style='background: linear-gradient(rgba(0, 0, 0, 0.63), rgba(45, 45, 45, 0.29)), url(" . $prevthumbnail . ") center / cover;'><span style='margin-bottom: 5px;'>Previous:</span><span style='font-size:18px;'>%title</span></p>", TRUE); ?>
									</div>
									
								<?php } 

								$nextPost = get_next_post(true);
								if($nextPost) { ?>
									<div class="nav-box next danzerpress-col-2" style="float:right;">
										<?php 
											if (get_the_post_thumbnail_url($nextPost->ID)) {
												$nextthumbnail = get_the_post_thumbnail_url($nextPost->ID); 
											} else {
												$nextthumbnail = danzerpress_no_image();
											}
										?>
										<?php next_post_link('%link',"<p class='danzerpress-next-image' style='background: linear-gradient(rgba(0, 0, 0, 0.63), rgba(45, 45, 45, 0.29)), url(" . $nextthumbnail . ") center / cover;'><span style='margin-bottom: 5px;'>Next:</span><span style='font-size:18px;'>%title</span></p>", TRUE); ?>
									</div>
								<?php } ?>
						</div><!--#cooler-nav div -->
					<?php
					endwhile; // End of the loop.
					?>
					</div>

				</div>
				<div id="" class="danzerpress-one-third">
					<div class="danzerpress-box">
						<?php get_sidebar(); ?>
					</div>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<div class="danzerpress-comments">	
	<div class="danzerpress-wrap" style="max-width: 900px;">
		<?php 
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		?>
	</div>
</div>


</main>

<?php get_footer(); ?>
