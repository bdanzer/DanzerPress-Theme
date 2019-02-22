<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package DanzerPress
 */

get_header(); 

$single = new Single('template-parts/content-single.php');
$single->render();

get_footer();