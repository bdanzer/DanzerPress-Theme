<?php
//Vars
$section_name = 'raw-code-section';

//Header
include(locate_template('danzerpress-section-parts/content-header.php' )); ?>


	<h2 class="danzerpress-title" style="margin-bottom: 40px;"><?php echo $section_title; ?></h2>
	<div class="danzerpress-flex-row">
		<div class="danzerpress-four-fifths danzerpress-col-center">

		 	<?php echo get_sub_field('raw_code'); ?>

		</div>
	</div>

<?php danzerpress_sections_footer(); ?>