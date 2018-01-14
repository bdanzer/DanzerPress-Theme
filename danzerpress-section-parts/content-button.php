<?php 

$section_button_text_left = get_sub_field('button_text_left');
$section_button_link_left = get_sub_field('button_link_left');
$section_button_text_right = get_sub_field('button_text_right');
$section_button_link_right = get_sub_field('button_link_right');


if ( $section_button_text_left || $section_button_text_right ) { ?>
	<p class="danzerpress-button-wrap" style="margin-top: 20px;">
		<a href="<?php echo $section_button_link_left; ?>" class="danzerpress-button-modern danzerpress-button-left ps2id wow rubberBand"><?php echo $section_button_text_left; ?></a>
		<a href="<?php echo $section_button_link_right; ?>" class="danzerpress-button-modern-transparent ps2id wow fadeIn"><?php echo $section_button_text_right; ?></a>
	</p>
	
<?php } ?>