<?php

//Vars
$section_title = get_sub_field('section_title');
$section_description = get_sub_field('section_description');
$section_image = get_sub_field('section_image');
$section_background = get_sub_field('section_background');

    if ( $section_background == true ) {
    	$url = $section_background; ?>
        <style type="text/css">
        .danzerpress-background-<?php echo $section_number; ?> {
            background-image: url(<?php echo $url; ?>) !important;
            background-image: linear-gradient(rgba(16, 16, 16, 0.74), rgba(99, 99, 99, 0)), url(<?php echo $url; ?>) !important;
            background-image: linear-gradient(rgba(0, 0, 0, 0.85), rgba(45, 45, 45, 0.29)), url(<?php echo $url; ?>) !important;
            background-size: cover !important;
            background-position: 20% 67% !important;
            background-attachment: fixed !important;
        }
        @media screen and (max-width: 768px) {
            .danzerpress-background-<?php echo $section_number; ?> {
                background-image: url(<?php echo $url; ?>) !important;
                background-image: linear-gradient(rgba(16, 16, 16, 0.74), rgba(99, 99, 99, 0)), url(<?php echo $url; ?>) !important;
                background-image: linear-gradient(rgba(0, 0, 0, 0.85), rgba(45, 45, 45, 0.29)), url(<?php echo $url; ?>) !important;
                background-size: cover !important;
                background-position: 50% 67% !important;
                background-attachment: scroll !important;
                padding: 80px 0 !important;
            }
        }
        </style>
    <?php
    } elseif ($hero_section === true) {
    	$url = 'https://unsplash.it/1920/1080/?random';?>
        <style type="text/css">
        .danzerpress-background-<?php echo $section_number; ?> {
            background-image: url(<?php echo $url; ?>) !important;
            background-image: linear-gradient(rgba(16, 16, 16, 0.74), rgba(99, 99, 99, 0)), url(<?php echo $url; ?>) !important;
            background-image: linear-gradient(rgba(0, 0, 0, 0.85), rgba(45, 45, 45, 0.29)), url(<?php echo $url; ?>) !important;
            background-size: cover !important;
            background-position: 20% 67% !important;
            background-attachment: fixed !important;
        }
        @media screen and (max-width: 768px) {
            .danzerpress-background-<?php echo $section_number; ?> {
                background-image: url(<?php echo $url; ?>) !important;
                background-image: linear-gradient(rgba(16, 16, 16, 0.74), rgba(99, 99, 99, 0)), url(<?php echo $url; ?>) !important;
                background-image: linear-gradient(rgba(0, 0, 0, 0.85), rgba(45, 45, 45, 0.29)), url(<?php echo $url; ?>) !important;
                background-size: cover !important;
                background-position: 50% 67% !important;
                background-attachment: scroll !important;
                padding: 80px 0 !important;
            }
        }
        </style>
        <?php 
        $hero_section = 'reset';
    }

if (!$section_image) {
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

<div id="section-<?php echo $section_number; ?>" class="danzerpress-section danzerpress-background-<?php echo $section_number . ' ' . $section_class . ' ' . $section_name; ?>">
<div class="danzerpress-wrap">

<?php
$section_name = '';
?>
