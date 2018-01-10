<?php

//Vars
$section_title = get_sub_field('section_title');
$section_description = get_sub_field('section_description');
$section_image = get_sub_field('section_image');
$section_background = get_sub_field('section_background');
$section_background_color = get_sub_field('background_color');
$sections_with_background = array(
        'danzerpress-hero-section',
        'danzerpress-hero-section-w-side-image'
    );

    if ( $section_background == true ) {
        $url = $section_background; ?>
    <?php
    } elseif ($section_background_color == true) { ?>
        <style type="text/css">
        .danzerpress-background-<?php echo $section_number; ?> {
            background: <?php echo $section_background_color; ?> !important;
        }
        </style>
        <?php 
    } elseif (in_array( $section_name, $sections_with_background )) {
        $url = 'https://unsplash.it/1920/1080/?random';?>
        <?php 
    }

if (!$section_image && $section_name == 'danzerpress-image-section' || !$section_image && $section_name == 'danzerpress-hero-section-w-side-image' ) {
    $section_image = 'https://unsplash.it/1920/1080/?random';
}

$image_side = get_sub_field('image_side');

if ( $image_side == 'right' ) {
    $order = 'danzerpress-order-1';
    $wowclass = 'slideInRight';
} elseif ($image_side == 'left') {
    $order = 'danzerpress-order-0';
    $wowclass = 'slideInLeft';
} else {
    //Do Nothing
}

?>
<div 
    id="section-<?php echo $section_number; ?>" 
    class="danzerpress-section danzerpress-background-<?php echo $section_number . ' ' . $section_class . ' ' . $section_name; ?> 
        <?php if (in_array( $section_name, $sections_with_background )) { 
            echo 'parallax-window" data-parallax="scroll" data-image-src="' . $url; 
        } ?>">
<div class="danzerpress-wrap">

<?php
?>