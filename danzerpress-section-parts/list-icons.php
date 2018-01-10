<?php
//Vars
$columns = get_sub_field('number_of_rows');
$section_name = 'danzerpress-list-icons-section';

?>
<style type="text/css">
	.danzerpress-content-box ul {
		padding-left:20px;
	}
</style>
<?php
//Header
include(locate_template('danzerpress-section-parts/content-header.php' )); ?>
	<h2 id="danzerpress-title-1" class="danzerpress-title" style="margin-bottom: 20px;"><?php echo $section_title; ?></h2>
	<div class="danzerpress-flex-row">
		<div class="danzerpress-four-fifths danzerpress-col-center">

			<?php
        	// check if the nested repeater field has rows of data
        	if( have_rows('icons_repeater') ):

			 	echo '<div class="danzerpress-flex-row">';

			 	// loop through the rows of data
			    while ( have_rows('icons_repeater') ) : the_row();

					// vars
					$image = get_sub_field('image');
					$title = get_sub_field('title');
					$description = get_sub_field('description');

					echo '
					<div class="danzerpress-col-' . $columns . ' danzerpress-md-2 danzerpress-xs-1">
						<div id="" class="danzerpress-icon-box">
							<img src="' . $image . '">
						</div>
						<div id="" class="danzerpress-content-box">
							<h4>' . $title . '</h4>
							<div>' . $description . '</div>
						</div>
					</div>
					';

				endwhile;

				echo '</div>';

			endif; ?>

			<?php 
			//Buttons
			include(locate_template('danzerpress-section-parts/content-button.php' )); 
			?> 

		</div>
	</div>
<?php danzerpress_sections_footer(); ?>