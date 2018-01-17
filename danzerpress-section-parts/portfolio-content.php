<?php
//Vars

?>

<div class="danzerpress-flex-row">
	<div class="danzerpress-two-thirds danzerpress-col-center">
		<h2 class="danzerpress-title" style="margin-bottom: 40px;"><?php echo $section_title; ?></h2>

		<?php if( have_rows('portfolio_repeater') ): ?>

			<div class="danzerpress-flex-row">

				<?php while( have_rows('portfolio_repeater') ): the_row(); 

					// vars
					$image = get_sub_field('image');
					$link = get_sub_field('link');

					?>

					<div class="danzerpress-col-3 danzerpress-md-2 portfolio-section wow fadeInUp danzerpress-tilt" data-tilt>
						<div class="danzerpress-image-wrap">
							<a href="<?php echo $link; ?>">
								<img src="<?php echo $image; ?>">
							</a>
						</div>
					</div>

				<?php endwhile; ?>

			</div>

		<?php endif; ?>

	</div>
</div>