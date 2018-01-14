<?php
/* Template Name: Sections - DanzerPress */

//Table of contents
// #Hero Section
// #Hero Section with Side Image
// #Hero Section no Background
// #Icons
// #List Icons
// #Simple Icons
// #Long Image Section
// #Image Section

?>

<?php get_header(); ?>

<div class="danzerpress-container-fw" style="background: transparent;">

	<?php 

	if (is_home() || is_front_page()) {
		if ( get_field('full_screen_section_1', 'option') === true ) { ?>
			<style type="text/css">
				.home #section-1 {
				    height: 100vh;
				    display: flex;
				    flex-direction: column;
				}
				.home.danzerpress-non-transparent #section-1 {
					height: calc(100vh - 64px);
				}
			</style>
		<?php
		}
	}
$danzerpressSectionClass = array(
	'danzerpress-section',
);

	// check if the flexible content field has rows of data
	if( have_rows('flexible_layout') ):
			$section_is_odd = 0;
			$section_number = 1;

		 	// loop through the rows of data
		    while ( have_rows('flexible_layout') ) : the_row();

			    $section_id = 'section-' . $section_number;

			   	if ($section_is_odd == 1) {
			   		$section_class = 'danzerpress-odd';
			   		$danzerpressColor = 'danzerpress-white';
			   	} else {
			   		$section_class = '';
			   		$danzerpressColor = 'danzerpress-grey';
			   	}	

		   		// #Hero Section
		        if( get_row_layout() == 'hero_section' ): 
		        	include(locate_template('danzerpress-section-parts/hero-section.php' ));
		        endif; //end hero section

		        // #Hero Section with Side Image
		        if( get_row_layout() == 'hero_section_w_side_image' ): 
		        	include(locate_template('danzerpress-section-parts/hero-section-w-side-image.php' ));
		       	endif; //end hero section with side image

		        // #Hero Section no Background
		        if( get_row_layout() == 'hero_section_no_background' ):
		        	include(locate_template('danzerpress-section-parts/hero-section-no-background.php'));
		        endif;

				// #Icons
		        if( get_row_layout() == 'icons' ):
		        	include(locate_template('danzerpress-section-parts/icons.php'));
		        endif;

		        // #List Icons
		        if( get_row_layout() == 'list_icons' ):
		        	include(locate_template('danzerpress-section-parts/list-icons.php'));
		        endif;

		        // #Simple Icons
		        if( get_row_layout() == 'simple_icons' ):
		        	include(locate_template('danzerpress-section-parts/simple-icons.php'));
				endif;

		        // #Image Section
		        if( get_row_layout() == 'image_section' ):
		        	include(locate_template('danzerpress-section-parts/image-section.php'));
		        endif;

		        // #Long Image Section
		        if( get_row_layout() == 'long_image_section' ):
		        	include(locate_template('danzerpress-section-parts/long-image-section.php'));
		        endif;

		        if( get_row_layout() == 'block_text_section' ):
		        	include(locate_template('danzerpress-section-parts/block-text-section.php'));
		        endif;

		        if( get_row_layout() == 'four_image_section' ):
		        	include(locate_template('danzerpress-section-parts/four-image-section.php'));
		        endif;

		        if( get_row_layout() == 'simple_gallery_section' ):
		        	include(locate_template('danzerpress-section-parts/simple-gallery-section.php'));
		        endif;

		        if( get_row_layout() == 'team_member_section' ):
		        	include(locate_template('danzerpress-section-parts/team-member-section.php'));
		        endif;

		        if( get_row_layout() == 'recent_post_section' ):
		        	include(locate_template('danzerpress-section-parts/recent-post-section.php'));
		        endif;

		        if( get_row_layout() == 'testimonial_section' ):
		        	include(locate_template('danzerpress-section-parts/testimonial-section.php'));
		        endif;

		        if( get_row_layout() == 'slider_revolution_section' ):
		        	include(locate_template('danzerpress-section-parts/slider-revolution-section.php'));
				endif;

		        if( get_row_layout() == 'faq_section' ):
		        	include(locate_template('danzerpress-section-parts/faq-section.php'));
		        endif;

		        if( get_row_layout() == 'tabs_section' ):
		        	include(locate_template('danzerpress-section-parts/tabs-section.php'));
		        endif;

		        if( get_row_layout() == 'raw_code_section' ):
		        	include(locate_template('danzerpress-section-parts/raw-code-section.php'));
		        endif;

			    if ($section_is_odd == 0) {
			    	$section_is_odd++;
			    } else {
			    	$section_is_odd = 0;
			    }

			    $section_number++;

		    endwhile;

	else :

		include(locate_template('danzerpress-section-parts/danzerpress-sections-start.php'));

	endif;

	?>

</div>


<?php get_footer(); ?>