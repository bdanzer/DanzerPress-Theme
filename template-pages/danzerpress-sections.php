<?php
/* Template Name: Sections - DanzerPress */

get_header(); 

$section = new Sections();
$section->render();

get_footer();