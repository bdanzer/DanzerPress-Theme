<?php 
//Vars
$hero_section = true;
$section_name = 'danzerpress-hero-section-w-side-image';

//Header
include(locate_template('danzerpress-section-parts/content-header.php' )); ?> 

	<div class="danzerpress-flex-row">
		<div class="danzerpress-col-1 danzerpress-col-center">
			<div class="danzerpress-flex-row">
				<div class="danzerpress-col-2 <?php echo $order; ?>">
					<div class="danzerpress-image-wrap wow <?php echo $wowclass; ?>">
						<img src="<?php echo $section_image; ?>">
					</div>
				</div>
				<div id="" class="danzerpress-col-2 danzerpress-flex-row">
					<div class="danzerpress-align-center">
						<h2 class="danzerpress-title wow fadeIn" style="color:white !important; text-align: left;"><?php echo $section_title; ?></h2>
						<p class="danzerpress-content wow fadeIn" style="color: white; text-align: left;"><?php echo $section_description; ?></p>
						
						<?php 
						//Buttons
						include(locate_template('danzerpress-section-parts/content-button.php' )); 
						?> 

					</div>
				</div>
			</div>
		</div>
	</div>

<?php danzerpress_sections_footer(); ?>