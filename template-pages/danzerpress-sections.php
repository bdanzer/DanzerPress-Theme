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
				.home.danzerpress-non-transparent #section-1 {
					height: calc(100vh - 64px);
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
	   		$danzerpressColor = 'danzerpress-white';
	   	} else {
	   		$section_class = '';
	   		$danzerpressColor = 'danzerpress-grey';
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
								<div class="danzerpress-icon-img wow zoomIn">
									<img src="' . $section_image . '">
								</div>
								';
							}

							?>
							<div id="" class="danzerpress-section-content wow fadeIn">
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

	        	// get iframe HTML
	        	if ( get_sub_field('section_video') ) {
					$iframe = get_sub_field('section_video');


					// use preg_match to find iframe src
					preg_match('/src="(.+?)"/', $iframe, $matches);
					$src = $matches[1];


					// add extra params to iframe src
					$params = array(
					    'controls'    => 0,
					    'showinfo'    => 0,
					    'rel'		  => 0,
					);

					$new_src = add_query_arg($params, $src);

					$iframe = str_replace($src, $new_src, $iframe);


					// add extra attributes to iframe html
					$attributes = 'frameborder="0" allowfullscreen';

					$iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);


					// echo $iframe
					//echo $iframe;
				}
				
	        	//Header
	        	include(locate_template('template-parts/content-header.php' )); ?>
					<div class="danzerpress-flex-row">
						<div class="danzerpress-col-1 danzerpress-col-center">
							<div class="danzerpress-flex-row">
								<div class="danzerpress-col-2 <?php echo $order; ?>">
									<div class="danzerpress-image-wrap danzerpress-16-9-container wow <?php echo $wowclass; ?>">

										<?php 
										if ( get_sub_field('image_or_video' ) == 'image') {
											echo'<img class="danzerpress-ar-items" src="' . $section_image . '">';
										} elseif ( get_sub_field('image_or_video') == 'video' ) {
											echo $iframe;
										}

										?>
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
											<div class="danzerpress-col-2 danzerpress-md-2 wow zoomIn">
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

	        if( get_row_layout() == 'simple_gallery_section' ): ?>
	        	<?php
	        	//Vars
	        	$section_name = 'simple-gallery-section';

	        	//Header
	        	include(locate_template('template-parts/content-header.php' )); ?>
					<div class="danzerpress-flex-row">
						<div class="danzerpress-two-thirds danzerpress-col-center">
							<h2 class="danzerpress-title" style=""><?php echo $section_title; ?></h2>
							<p style="text-align: center; font-size: 18px;margin-bottom: 40px;"><?php echo $section_description; ?></p>
							
							<?php 
								$images = get_sub_field('section_gallery');
								$size_ml = 'medium_large'; // (thumbnail, medium, large, full or custom size)
								$size_full = 'full'; // (thumbnail, medium, large, full or custom size)

								if( $images ): ?>
								    <div class="danzerpress-flex-row">
								        <?php foreach( $images as $image ): ?>
								        	<?php
								        		//vars
								        		$image_ml = wp_get_attachment_image_url($image['ID'], $size_ml);
								        		$image_full = wp_get_attachment_image_url($image['ID'], $size_full);

								        	?>
								        	<div class="danzerpress-col-3 danzerpress-md-2 wow slideInUp">
												<div class="danzerpress-image-wrap">
													<a data-fancybox="<?php echo 'simple-gallery-section-' . $section_number; ?>" href="<?php echo $image_full; ?>">
														<img src="<?php echo $image_ml; ?>">
													</a>
												</div>
												<!-- <h4 style="text-align: center; margin-top: 10px;"><?php echo $image['title'] ?></h4> -->
											</div>
								        <?php endforeach; ?>
								    </div>
							<?php endif; ?>

							<?php 
							//Buttons
							include(locate_template('template-parts/content-button.php' )); 
							?>
							
						</div>
					</div>

				<?php danzerpress_sections_footer(); ?>

	        <?php endif;

	        if( get_row_layout() == 'team_member_section' ): ?>
	        	<?php
	        	//Vars
	        	$section_name = 'team-member-section';

	        	//Header
	        	include(locate_template('template-parts/content-header.php' )); ?>
	        		<h2 class="danzerpress-title" style="margin-bottom: 40px;"><?php echo $section_title; ?></h2>
					<div class="danzerpress-flex-row">
						<div class="danzerpress-four-fifths danzerpress-col-center" style="">

							<div class="danzerpress-flex-row">

								<?php 
								// check if the nested repeater field has rows of data
					        	if( have_rows('team_members') ):

								 	echo '<div class="danzerpress-flex-row ' . $section_name . '-wrap' . '">';

								 	// loop through the rows of data
								    while ( have_rows('team_members') ) : the_row();

										// vars
										$section_image = get_sub_field('section_image');
							        	$job_name = get_sub_field('job_name');
							        	$job_title = get_sub_field('job_title');
							        	$section_description = get_sub_field('section_description'); ?>

							        	<?php 
										if (get_sub_field('section_image')) {
											$section_new_image = get_sub_field('section_image');
										} else {
											$section_new_image = get_template_directory_uri() . '/danzerpress-images/no-image.png';
										}
										?>
										<div class="danzerpress-flex-row <?php echo $section_name . '-container'; ?>">
											<div class="danzerpress-one-third-fix danzerpress-team-member-image danzerpress-zero">
												<img class="wow fadeInLeft" src="<?php echo $section_new_image; ?>">
											</div>

											<div class="danzerpress-two-thirds-fix danzerpress-zero <?php echo $danzerpressColor; ?> wow fadeInUp">
												<div class="danzerpress-box">
													<h2 style="margin-bottom: 0px;"><?php echo $job_name ?></h2>
													<h4 style="margin-bottom: 20px;"><?php echo $job_title; ?></h4>
													<p><?php echo $section_description; ?></p>
													<p>
														<?php 
														// check if the nested repeater field has rows of data
											        	if( have_rows('social_media') ):

														 	echo '<div class="danzerpress-flex-row">';

														 	// loop through the rows of data
														    while ( have_rows('social_media') ) : the_row();

																// vars
																$socialLink = get_sub_field('social_media_link');
																$socialMediaNetwork = get_sub_field('social_media_network');

																echo '
																	<a href="' . $socialLink . '"><i class="fa fa-' . $socialMediaNetwork . '"></i></a>
																';

															endwhile;

															echo '</div>';

														endif; ?>

													</p>
												</div>
											</div>
										</div>

									<?php endwhile;

									echo '</div>';

								endif; ?>
								
							</div>

							<?php 
							//Buttons
							include(locate_template('template-parts/content-button.php' )); 
							?>

						</div>
					</div>

				<?php danzerpress_sections_footer(); ?>

	        <?php endif;

	        if( get_row_layout() == 'recent_post_section' ): ?>
	        	<?php
	        	//Vars
	        	$section_name = 'recent_post_section';

	        	//Header
	        	include(locate_template('template-parts/content-header.php' )); ?>
	        		
	        		<h2 class="danzerpress-title" style="margin-bottom: 40px;"><?php echo $section_title; ?></h2>
					<div class="danzerpress-flex-row">
						<div class="danzerpress-four-fifths danzerpress-col-center">

							<div class="danzerpress-flex-row">
								<?php
								/* Vars */
								$post_type = get_sub_field('custom_post_type');
								$posts_per_page = get_sub_field('number_of_posts');
								$category_name = get_sub_field('category_to_display');

								/* Start the Loop */
								$args = array( 
									'post_type' => 'post',
									'posts_per_page' => $posts_per_page,
									'category_name' => $category_name
								);
								$loop = new WP_Query ( $args );
								while ( $loop->have_posts() ) : $loop->the_post();

								?>

								<?php 
								if (get_the_post_thumbnail_url()) {
									$recent_post_url = get_the_post_thumbnail_url();
								} else {
									$recent_post_url = get_template_directory_uri() . '/danzerpress-images/no-image.png';
								}
								?>

								<div class="danzerpress-col-2">
									<div class="danzerpress-flex-row">
										<div class="danzerpress-col-2-fix danzerpress-zero danzerpress-recent-post-section wow zoomIn">
											<img class="" src="<?php echo $recent_post_url; ?>">
										</div>

										<div class="danzerpress-col-2-fix danzerpress-zero <?php echo $danzerpressColor; ?> wow fadeInUp">
											<div class="danzerpress-box">
												<h2><?php the_title(); ?></h2>
												<p><?php the_excerpt(); ?></p>
											</div>
										</div>
									</div>
								</div>
								<?php endwhile; 
								wp_reset_postdata();

								?>
							</div>

							<?php 
							//Buttons
							include(locate_template('template-parts/content-button.php' )); 
							?>

						</div>
					</div>

				<?php danzerpress_sections_footer(); ?>

	        <?php endif;

	        if( get_row_layout() == 'testimonial_section' ): ?>
	        	<?php
	        	//Vars
	        	$section_name = 'testimonial-section';

	        	//Header
	        	include(locate_template('template-parts/content-header.php' )); ?>
	        		
	        		<h2 class="danzerpress-title" style=""><?php echo $section_title; ?></h2>
					<p style="text-align: center; font-size: 18px;margin-bottom: 40px;"><?php echo $section_description; ?></p>
					<div class="danzerpress-flex-row">
						<div class="danzerpress-four-fifths danzerpress-col-center">

						 	<div class="danzerpress-flex-row">
						 		<?php 
								// check if the nested repeater field has rows of data
					        	if( have_rows('testimonial_blocks') ):

								 	echo '<div class="danzerpress-flex-row">';

								 	// loop through the rows of data
								    while ( have_rows('testimonial_blocks') ) : the_row();

										// vars
										$testimonialStars = get_sub_field('testimonial_stars');
										$testimonialContent = get_sub_field('testimonial_content');
										$testimonialImage = get_sub_field('testimonial_image');
										$testimonialName = get_sub_field('testimonial_name');

									

										echo '
											<div class="danzerpress-col-3 danzerpress-md-1 danzerpress-xs-1">
												<div class="danzerpress-content wow fadeInUp ' . $danzerpressColor . '" style="padding: 40px;text-align: center;border-radius: 2px;">
													<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
													<p style="font-size: 16px;line-height: 28px;">' . $testimonialContent . '</p>
													<div class="danzerpress-image-box"><a href=""><img src="' . $testimonialImage . '"></a></div>
													<h4>' . $testimonialName . '</h4>
												</div>
											</div>
										';

									endwhile;

									echo '</div>';

								endif; ?>
							</div>

						</div>
					</div>

				<?php danzerpress_sections_footer(); ?>

	        <?php endif;

	        if( get_row_layout() == 'slider_revolution_section' ): ?>
	        	<?php
	        	//Vars
	        	$section_name = 'slider-revolution-section';

	        	//Header
	        	include(locate_template('template-parts/content-header.php' )); ?>
		        	
		        	<?php echo do_shortcode($section_description); ?>

				<?php danzerpress_sections_footer(); ?>

	        <?php endif;

	        if( get_row_layout() == 'faq_section' ): ?>
	        	<?php
	        	//Vars
	        	$section_name = 'faq-section';

	        	//Header
	        	include(locate_template('template-parts/content-header.php' )); ?>
	        		
	        		<h2 class="danzerpress-title" style="margin-bottom: 40px;"><?php echo $section_title; ?></h2>
					<div class="danzerpress-flex-row">
						<div class="danzerpress-four-fifths danzerpress-col-center">

						 	<div class="danzerpress-flex-row">
						 		<?php 
								// check if the nested repeater field has rows of data
					        	if( have_rows('faq_block') ):

								 	echo '<div class="danzerpress-two-thirds danzerpress-col-center">';

								 	// loop through the rows of data
								    while ( have_rows('faq_block') ) : the_row();

										// vars
										$faqTitle = get_sub_field('faq_title');
										$faqContent = get_sub_field('faq_content');

										echo '
											<button class="danzerpress-accordion"><h4>' . $faqTitle . '</h4></button>
											<div class="danzerpress-panel">
											  <div class="danzerpress-box ' . $danzerpressColor . '">' . $faqContent . '</div>
											</div>
										';

									endwhile;

									echo '</div>';

								endif; ?>
							</div>

						</div>
					</div>

				<?php danzerpress_sections_footer(); ?>

				<script>
				var acc = document.getElementsByClassName("danzerpress-accordion");
				var i;

				for (i = 0; i < acc.length; i++) {
				  acc[i].addEventListener("click", function() {
				    this.classList.toggle("active");
				    var panel = this.nextElementSibling;
				    if (panel.style.maxHeight){
				      panel.style.maxHeight = null;
				    } else {
				      panel.style.maxHeight = panel.scrollHeight + "px";
				    } 
				  });
				}
				</script>


	        <?php endif;

	    if ($section_is_odd == 0) {
	    	$section_is_odd++;
	    } else {
	    	$section_is_odd = 0;
	    }

	    $section_number++;
	    

	    endwhile;

	else : ?>

		<style type="text/css">
			.home-content,
			.page-content {
				display: none;
			}
		</style>
	    <div class="danzerpress-wrap" style="padding-top: 40px;">
	    	<div class="danzerpress-two-thirds danzerpress-col-center">
	    		<div class="danzerpress-box danzerpress-white">
		    		<h4 style="text-align: center;">DanzerPress Setup!</h4>
		    		<p>Looks like you don't have a few things set up yet to show something here. Follow these steps to get started:</p>
		    		<h4 style="text-align: center;">Select what you need help to set up</h4>
		    		<p style="text-align: center;">
		    			<a id="home" class="danzerpress-button-modern danzerpress-button-left">Home Page</a>
		    			<a id="page" class="danzerpress-button-modern">page</a>
		    		</p>
		    		<ol class="home-content danzerpress-box">
		    			<li>Go to WordPress Dashbard.</li>
		    			<li>Go to pages.</li>
		    			<li>Create a new page called home.</li>
		    			<li>On that same page below the update button set the template to: DanzerPress Sections.</li>
		    			<li>Click add row on the new box that shows up and you can choose which section you want to use. Most commonly you'd use "hero section"</li>
		    			<li>Any other issues you can contact me at help@danzerpress.com</li>
		    		</ol>
		    		<ol class="page-content danzerpress-box">
		    			<li>Go to WordPress Dashbard.</li>
		    			<li>Go to pages.</li>
		    			<li>Create a new page called home.</li>
		    			<li>On that same page below the update button set the template to: DanzerPress Sections.</li>
		    			<li>Click add row on the new box that shows up and you can choose which section you want to use. Most commonly you'd use "hero section"</li>
		    			<li>Any other issues you can contact me at help@danzerpress.com</li>
		    		</ol>
		    	</div>
	    	</div>
	    </div>

	    <script type="text/javascript">
	    	$(document).ready(function() {
			  $("#home").click(function() {
			    $(".home-content").slideToggle();
			  });
			  $("#page").click(function() {
			    $(".page-content").slideToggle();
			  });
			});
	    </script>

	<?php endif;

	?>

</div>


<?php get_footer(); ?>