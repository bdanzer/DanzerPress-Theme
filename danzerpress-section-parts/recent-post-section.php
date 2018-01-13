<?php

//Vars
$section_name = 'recent_post_section';

//Header
include(locate_template('danzerpress-section-parts/content-header.php' )); ?>
	
	<h2 class="danzerpress-title" style="margin-bottom: 40px;"><?php echo $section_title; ?></h2>
	<div class="danzerpress-flex-row">
		<div class="danzerpress-col-1 danzerpress-col-center">

			<div class="danzerpress-flex-row">

				<?php

				/* Vars */
				$post_type = get_sub_field('custom_post_type');
				$posts_per_page = get_sub_field('number_of_posts');
				$category_name = get_sub_field('category_to_display');
				$column_number = get_sub_field('column_number');
				$half_or_whole = get_sub_field('half_or_whole');
				$new_excerpt = get_sub_field('excerpt_length');

				if ($column_number == 2) {
					$class = ' danzerpress-lg-1';
				} else {
					$class = '';
				}

				/* Start the Loop */
				$args = array( 
					'post_type' => 'post',
					'posts_per_page' => $posts_per_page,
					'category_name' => $category_name
				);
				$loop = new WP_Query ( $args );
				while ( $loop->have_posts() ) : $loop->the_post();

				if (get_the_post_thumbnail_url()) {
					$recent_post_url = get_the_post_thumbnail_url();
				} else {
					$recent_post_url = get_template_directory_uri() . '/danzerpress-images/no-image.png';
				}
				?>

				<div class="danzerpress-col-<?php echo $column_number . $class; ?>">
					<div class="danzerpress-flex-row" style="height: 100%; overflow: hidden;">
						<div class="danzerpress-col-<?php echo $half_or_whole; ?>-fix danzerpress-zero danzerpress-recent-post-section wow zoomIn">
							<img class="" src="<?php echo $recent_post_url; ?>">
						</div>

						<div class="danzerpress-col-<?php echo $half_or_whole; ?>-fix danzerpress-zero <?php echo $danzerpressColor; ?> wow fadeIn" style="height: 100%;">
							<div class="danzerpress-box">
								<h2><?php the_title(); ?></h2>
								<p><?php echo excerpt($new_excerpt); ?></p>
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
			include(locate_template('danzerpress-section-parts/content-button.php' )); 
			?>

		</div>
	</div>

<?php danzerpress_sections_footer(); ?>