<?php

//Vars
$section_name = 'danzerpress-hero-section';
$hero_section = true;
include(locate_template('danzerpress-section-parts/content-header.php' )); ?>

	<div class="danzerpress-flex-row">
		<div class="danzerpress-two-thirds danzerpress-col-center danzerpress-align-center">
			<?php
			if ($section_image) {
				echo 
				'
				<div class="danzerpress-icon-img wow zoomIn">
					<img src="' . $section_image . '">
				</div>
				';
			}

			?>
			<div class="danzerpress-section-content">
				<h2 class="danzerpress-title danzerpress-color-white wow fadeIn" style=""><?php echo $section_title; ?></h2>
				<p class="danzerpress-hero-p danzerpress-color-white wow fadeIn" style="font-size: 20px;"><?php echo $section_description; ?></p>
				<?php 
				//Buttons
				include(locate_template('danzerpress-section-parts/content-button.php' )); 
				?> 
			</div>
		</div>
	</div>
		
<?php danzerpress_sections_footer(); ?>