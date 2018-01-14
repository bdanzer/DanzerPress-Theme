<?php
//Vars
$section_name = 'testimonial-section';
$starCounter = 0;

//Header
include(locate_template('danzerpress-section-parts/content-header.php' )); ?>
	
	<h2 class="danzerpress-title" style=""><?php echo $section_title; ?></h2>
	<div class="danzerpress-flex-row">
		<div class="danzerpress-two-thirds danzerpress-col-center">
			<p style="text-align: center; font-size: 18px;margin-bottom: 40px;"><?php echo $section_description; ?></p>
		</div>
	</div>
	<div class="danzerpress-flex-row">
		<div class="danzerpress-four-fifths danzerpress-col-center">

		 	<div class="danzerpress-flex-row">
		 		<?php 
				// check if the nested repeater field has rows of data
	        	if( have_rows('testimonial_blocks') ):

				 	echo '<div class="danzerpress-flex-row">';

				 	// loop through the rows of data
				    while ( have_rows('testimonial_blocks') ) : the_row();

						// vars
						$testimonialStars = get_sub_field('testimonial_stars');
						$testimonialContent = get_sub_field('testimonial_content');
						$testimonialImage = get_sub_field('testimonial_image');
						$testimonialName = get_sub_field('testimonial_name');

					

						echo '
							<div class="danzerpress-col-3 danzerpress-md-1 danzerpress-xs-1">
								<div class="danzerpress-content wow fadeInUp ' . $danzerpressColor . '" style="padding: 40px;text-align: center;border-radius: 2px;">';
									
							while ( $starCounter < $testimonialStars ) {
								echo '<i class="fa fa-star"></i>';
								$starCounter++;
							}
									
						echo'
							<p style="font-size: 16px;line-height: 28px;">' . $testimonialContent . '</p>
									<div class="danzerpress-image-box"><a href=""><img src="' . $testimonialImage . '"></a></div>
									<h4>' . $testimonialName . '</h4>
								</div>
							</div>
						';

					endwhile;

					echo '</div>';

				endif; ?>
			</div>

		</div>
	</div>

<?php danzerpress_sections_footer(); ?>