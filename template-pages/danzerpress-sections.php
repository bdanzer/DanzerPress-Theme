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

<div class="danzerpress-container-fw">

	<?php 

	if (is_home() || is_front_page()) {
		if ( get_field('full_screen_section_1', 'option') === true ) { ?>
			<style type="text/css">
				.home #section-1 {
				    height: 100vh;
				    display: flex;
				    flex-direction: column;
				}
			</style>
		<?php
		}
	}

	
	?>

	<?php
	// check if the flexible content field has rows of data
	if( have_rows('flexible_layout') ):
		$section_is_odd = 0;
		$section_number = 1;

		$hero_section = '';

	 	// loop through the rows of data
	    while ( have_rows('flexible_layout') ) : the_row();

	    $section_id = 'section-' . $section_number;

	   	if ($section_is_odd == 1) {
	   		$section_class = 'danzerpress-odd';
	   	} else {
	   		$section_class = '';
	   	}
	    	

	   		// #Hero Section
	        if( get_row_layout() == 'hero_section' ): ?>
	        	
	        	<?php
	        	//Vars
	        	$section_name = 'danzerpress-hero-section';
	        	$hero_section = true;
	        	include(locate_template('template-parts/content-header.php' )); ?>

					<div class="danzerpress-flex-row">
						<div class="danzerpress-two-thirds danzerpress-col-center danzerpress-align-center">
							<?php
							if ($section_image) {
								echo 
								'
								<div class="danzerpress-icon-img wow zoomIn">
									<img src="' . $section_image . '">
								</div>
								';
							}

							?>
							<div class="danzerpress-section-content">
								<h2 class="danzerpress-title danzerpress-color-white wow fadeIn" style=""><?php echo $section_title; ?></h2>
								<p class="danzerpress-hero-p danzerpress-color-white wow fadeIn" style="font-size: 20px;"><?php echo $section_description; ?></p>
								<?php 
								//Buttons
								include(locate_template('template-parts/content-button.php' )); 
								?> 
							</div>
						</div>
					</div>
						
				<?php danzerpress_sections_footer(); ?>

	        <?php endif;

	        // #Hero Section with Side Image
	        if( get_row_layout() == 'hero_section_w_side_image' ): ?>

				<?php 
				//Vars
	        	$hero_section = true;
	        	$section_name = 'danzerpress-hero-section-w-side-image';

	        	//Header
	        	include(locate_template('template-parts/content-header.php' )); ?> 

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
										include(locate_template('template-parts/content-button.php' )); 
										?> 

									</div>
								</div>
							</div>
						</div>
					</div>

				<?php danzerpress_sections_footer(); ?>

	        <?php endif;

	        // #Hero Section no Background
	        if( get_row_layout() == 'hero_section_no_background' ): ?>
	        	<?php
	        	//Vars
	        	$section_name = 'danzerpress-hero-section-no-background';


	        	//Header
	        	include(locate_template('template-parts/content-header.php' )); ?>  
					<div class="danzerpress-flex-row">
						<div class="danzerpress-two-thirds danzerpress-col-center">
							<?php
							if ($section_image) {
								echo 
								'
								<div class="danzerpress-icon-img">
									<img src="' . $section_image . '">
								</div>
								';
							}

							?>
							<div id="" class="danzerpress-section-content animated fadeIn">
								<h2 class="danzerpress-title" style=""><?php echo $section_title; ?></h2>
								<p class="danzerpress-hero-p" style="text-align: center; font-size: 20px;"><?php echo $section_description; ?></p>
								<?php 
								//Buttons
								include(locate_template('template-parts/content-button.php' )); 
								?> 
							</div>
						</div>
					</div>
				<?php danzerpress_sections_footer(); ?>

	        <?php endif;

			// #Icons
	        if( get_row_layout() == 'icons' ): ?>
	        	<?php
	        	//Vars
	        	$section_name = 'danzerpress-icons-section';
	        	$hero_section = false;
	        	$columns = get_sub_field('number_of_rows');

	        	//Header
	        	include(locate_template('template-parts/content-header.php' )); ?> 
					<h2 id="danzerpress-title-1" class="danzerpress-title" style="margin-top: 0px; margin-bottom: 50px;"><?php echo $section_title; ?></h2>
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
										<div class="danzerpress-icon-box wow zoomIn">
											<img src="' . $image . '">
										</div>
										<div class="danzerpress-content-box wow fadeInUp">
											<h4>' . $title . '</h4>
											<p>' . $description . '</p>
										</div>
									</div>
									';

								endwhile;

								echo '</div>';

							endif; ?>

							<?php 
							//Buttons
							include(locate_template('template-parts/content-button.php' )); 
							?> 

						</div>
					</div>
				<?php danzerpress_sections_footer(); ?>

	        <?php endif;

	        // #List Icons
	        if( get_row_layout() == 'list_icons' ): ?>
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
	        	include(locate_template('template-parts/content-header.php' )); ?>
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
							include(locate_template('template-parts/content-button.php' )); 
							?> 

						</div>
					</div>
				<?php danzerpress_sections_footer(); ?>

	        <?php endif;

	        // #Simple Icons
	        if( get_row_layout() == 'simple_icons' ): ?>
	        	<?php
	        	//Vars
	        	$columns = get_sub_field('number_of_rows');

	        	?>
	        	<style type="text/css">
	        		.danzerpress-simple-icons {
					    max-width: 44px;
					    position: relative;
					    margin: auto;
					}
					.danzerpress-simple-icons h4 {
					    text-align: center;
					}
	        	</style>

	        	<?php
	        	//Header
	        	include(locate_template('template-parts/content-header.php' )); ?>
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

									echo '
									<div class="danzerpress-col-' . $columns . ' danzerpress-md-2 danzerpress-xs-2 danzerpress-simple-icons">
										<div id="danzerpress-icon-box-1" class="danzerpress-icon-box">
											<img src="' . $image . '">
										</div>
										<div id="" class="danzerpress-content-box">
											<h4>' . $title . '</h4>
										</div>
									</div>
									';

								endwhile;

								echo '</div>';

							endif; ?>

							<?php 
							//Buttons
							include(locate_template('template-parts/content-button.php' )); 
							?> 

						</div>
					</div>
				<?php danzerpress_sections_footer(); ?>

	        <?php endif;

	        // #Image Section
	        if( get_row_layout() == 'image_section' ): ?>
	        	<?php
	        	//Vars
	        	$section_name = 'danzerpress-image-section';

	        	//Header
	        	include(locate_template('template-parts/content-header.php' )); ?>
					<div class="danzerpress-flex-row">
						<div class="danzerpress-col-1 danzerpress-col-center">
							<div class="danzerpress-flex-row">
								<div class="danzerpress-col-2 <?php echo $order; ?>">
									<div class="danzerpress-image-wrap wow <?php echo $wowclass; ?>">
										<img src="<?php echo $section_image; ?>">
									</div>
								</div>
								<div class="danzerpress-col-2 danzerpress-flex-row">
									<div class="danzerpress-section-content danzerpress-align-center">
										<h2 class="danzerpress-title wow fadeIn"><?php echo $section_title; ?></h2>
										<p class="wow fadeIn image-section-p"><?php echo $section_description; ?></p>
										<?php 
										//Buttons
										include(locate_template('template-parts/content-button.php' )); 
										?> 
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php danzerpress_sections_footer(); ?>

	        <?php endif;

	        // #Long Image Section
	        if( get_row_layout() == 'long_image_section' ): ?>
	        	<?php
	        	//Vars
	        	$section_name = 'danzerpress-long-image-section';

	        	//Header
	        	include(locate_template('template-parts/content-header.php' )); ?>
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
							include(locate_template('template-parts/content-button.php' )); 
							?> 
						</div>
					</div>
				<?php danzerpress_sections_footer(); ?>

	        <?php endif;

	        if( get_row_layout() == 'block_text_section' ): ?>
	        	<?php
	        	//Vars
	        	$section_name = 'danzerpress-block-text-section';

	        	//Header
	        	include(locate_template('template-parts/content-header.php' )); ?>
					<div class="danzerpress-icon-img wow zoomIn">
						<img src="<?php echo $section_image; ?>">
					</div>
					<div class="danzerpress-flex-row">
						<div class="danzerpress-two-thirds danzerpress-col-center wow fadeInUp" style="text-align: justify;">
							<h2 class="danzerpress-title"><?php echo $section_title; ?></h2>
							<div><?php echo $section_description; ?></div>
						</div>
					</div>
					<?php 
					//Buttons
					include(locate_template('template-parts/content-button.php' )); 
					?>
				<?php danzerpress_sections_footer(); ?>

	        <?php endif;

	        if( get_row_layout() == 'four_image_section' ): ?>
	        	<?php
	        	//Vars
	        	$section_name = 'four-image-section';

	        	//Header
	        	include(locate_template('template-parts/content-header.php' )); ?>
					<div class="danzerpress-flex-row">
						<div class="danzerpress-four-fifths danzerpress-col-center">
							<div class="danzerpress-flex-row">

								<div class="danzerpress-col-2 <?php echo $order; ?>">

									<?php 
									// check if the nested repeater field has rows of data
						        	if( have_rows('image_repeater') ):

									 	echo '<div class="danzerpress-flex-row">';

									 	// loop through the rows of data
									    while ( have_rows('image_repeater') ) : the_row();

											// vars
											$image = get_sub_field('image');

											echo '
											<div class="danzerpress-col-2 danzerpress-md-2 wow ' . $wowclass . '">
												<div class="danzerpress-image-wrap">
												<a data-fancybox="four-image-section" href="' . $image . '"><img src="' . $image . '"></a>
												</div>
											</div>
											';

										endwhile;

										echo '</div>';

									endif; ?>

								</div>
								<div class="danzerpress-col-2 danzerpress-align-center">
									<h2 class="danzerpress-title" style=""><?php echo $section_title; ?></h2>
									<p style="text-align: center; font-size: 18px;margin-bottom: 40px;"><?php echo $section_description; ?></p>
									<?php 
									//Buttons
									include(locate_template('template-parts/content-button.php' )); 
									?>
								</div>
							</div>

						</div>
					</div>

				<?php danzerpress_sections_footer(); ?>

	        <?php endif;

	    if ($section_is_odd == 0) {
	    	$section_is_odd++;
	    } else {
	    	$section_is_odd = 0;
	    }

	    $section_number++;
	    

	    endwhile;

	else :

	    // no layouts found
	    echo "no layouts";

	endif;

	?>

</div>


<?php get_footer(); ?>