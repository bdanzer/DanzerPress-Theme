<?php
//Vars
$section_name = 'danzerpress-hero-section-no-background';

//Header
include(locate_template('danzerpress-section-parts/content-header.php' )); ?>  
	<div class="danzerpress-flex-row">
		<div class="danzerpress-two-thirds danzerpress-col-center">
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
			<div id="" class="danzerpress-section-content wow fadeIn">
				<h2 class="danzerpress-title" style=""><?php echo $section_title; ?></h2>
				<p class="danzerpress-hero-p" style="text-align: center; font-size: 20px;"><?php echo $section_description; ?></p>
				<?php 
				//Buttons
				include(locate_template('danzerpress-section-parts/content-button.php' )); 
				?> 
			</div>
		</div>
	</div>
<?php danzerpress_sections_footer(); ?>