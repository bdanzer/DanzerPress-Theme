<?php
//Vars
$section_name = 'danzerpress-long-image-section';

//Header
include(locate_template('danzerpress-section-parts/content-header.php' )); ?>
	<div class="danzerpress-flex-row">
		<div id="" class="danzerpress-one-third <?php echo $order; ?>">
			<div class="danzerpress-image-wrap wow <?php echo $wowclass; ?>">
				<img src="<?php echo $section_image; ?>">
			</div>
		</div>
		<div class="danzerpress-two-thirds danzerpress-align-center">
			<h2 class="danzerpress-title" style="margin:0px;text-align:left;"><?php echo $section_title; ?></h2>
			<div style="margin-bottom: 20px;"><?php echo $section_description; ?></div>
			<?php 
			//Buttons
			include(locate_template('danzerpress-section-parts/content-button.php' )); 
			?> 
		</div>
	</div>
<?php danzerpress_sections_footer(); ?>