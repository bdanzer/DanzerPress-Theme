<?php
/* Template Name: Testing - DanzerPress */
?>
<?php get_header(); ?>
<?php 
	if ( !is_home() && !is_front_page() ) {
		echo '
		<div class="danzerpress-title-area">
			<h1 class="danzerpress-title">' . get_the_title() . '</h1>
		</div>
		';
	}
	?>
<?php
// check current row layout
        if( get_row_layout() == 'icons' ): ?>
        	<?php

        	//Vars
        	$columns = get_sub_field('number_of_rows');
        	$section_title = get_sub_field('section_title');
        	$section_button_text_left = get_sub_field('button_text_left');
        	$section_button_link_left = get_sub_field('button_link_left');
        	$section_button_text_right = get_sub_field('button_text_right');
        	$section_button_link_right = get_sub_field('button_link_right');

        	?>
        	<div class="danzerpress-section <?php echo $section_class; ?>" id="">
				<div class="danzerpress-wrap">
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

							<?php if ( $section_button_text_left || $section_button_text_right ) { ?>
							<p id="" class="" style="margin-top: 20px;text-align: center;">
								<a href="<?php echo $section_button_link_left; ?>" class="danzerpress-button-modern danzerpress-button-left"><?php echo $section_button_text_left; ?></a>
								<a href="<?php echo $section_button_link_right; ?>" class="danzerpress-button-modern-transparent ps2id"><?php echo $section_button_text_right; ?></a>
							</p>
							<?php } ?>

						</div>
					</div>
				</div>
			</div>

        <?php endif; ?>

<style type="text/css">
	i.fa.fa-star {
	    margin: 0 4px;
	    color: #ffb500;
	}
	.danzerpress-image-box img {
	    max-height: 60px;
	}
</style>

<div class="danzerpress-section" id="" style="">
	<div class="danzerpress-wrap">
		<h2 class="danzerpress-title" style="">What others think</h2>
		<p style="text-align: center; font-size: 18px;margin-bottom: 40px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae magna sed<br> massa aliquam porta. Ut vitae pharetra diam. Proin sed nisl eget dolor aliquet sollicitudin.</p>
		<div class="danzerpress-flex-row">
			<div class="danzerpress-four-fifths danzerpress-col-center">

			 	<div class="danzerpress-flex-row">
					<div class="danzerpress-col-3 danzerpress-md-1 danzerpress-xs-1">
						<div class="danzerpress-content wow fadeInUp" style="padding: 40px;background: white;text-align: center;border-radius: 2px;background: #f8f9f9 !important;">
							<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
							<p style="font-size: 16px;line-height: 28px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae magna sed massa aliquam porta. Ut vitae pharetra diam. Proin sed nisl eget dolor aliquet sollicitudin.</p>
							<div class="danzerpress-image-box"><a href=""><img src="https://www.universalmetals.com/wp-content/uploads/2017/07/umnewlogonew.png"></a></div>
							<h4>John Doe</h4>
						</div>
					</div>
					<div class="danzerpress-col-3 danzerpress-md-1 danzerpress-xs-1">
						<div class="danzerpress-content wow fadeInUp" style="padding: 40px;background: white;text-align: center;border-radius: 2px;background: #f8f9f9 !important;">
							<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
							<p style="font-size: 16px;line-height: 28px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae magna sed massa aliquam porta. Ut vitae pharetra diam. Proin sed nisl eget dolor aliquet sollicitudin.</p>
							<div class="danzerpress-image-box"><a href=""><img src="https://theme.danzerpress.com/wp-content/uploads/2017/11/danzerpressofficial2.png"></a></div>
							<h4>Jane Doe</h4>
						</div>
					</div>
					<div class="danzerpress-col-3 danzerpress-md-1 danzerpress-xs-1">
						<div class="danzerpress-content wow fadeInUp" style="padding: 40px;background: white;text-align: center;border-radius: 2px;background: #f8f9f9 !important;">
							<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
							<p style="font-size: 16px;line-height: 28px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae magna sed massa aliquam porta. Ut vitae pharetra diam. Proin sed nisl eget dolor aliquet sollicitudin.</p>
							<div class="danzerpress-image-box"><a href=""><img src="http://pngimg.com/uploads/bmw_logo/bmw_logo_PNG19705.png?i=1"></a></div>
							<h4>Example</h4>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>

<div class="danzerpress-section danzerpress-odd" id="" style="">
	<div class="danzerpress-wrap">
		
		<div class="danzerpress-flex-row">
			<div class="danzerpress-two-thirds danzerpress-col-center">
				<h2 class="danzerpress-title" style="margin-bottom: 20px;">What others think</h2>
				<p style="text-align: center; font-size: 21px;margin-bottom: 40px;line-height: 36px;">Lorem ipsum dolor sit amet, consectetur<br> adipiscing elit. Nulla vitae magna sed</p>
				<p style="text-align: center;"><a href="" class="danzerpress-button-modern">Call to action</a></p>

			</div>
		</div>
	</div>
</div>

<div class="danzerpress-section" id="" style="background: #242a30; padding: 40px 0;">
	<div class="danzerpress-wrap">
		
		<div class="danzerpress-flex-row">
			<div class="danzerpress-col-1 danzerpress-col-center" style="margin: 0px auto !important;">
				<div class="danzerpress-flex-row">
					<div class="danzerpress-two-thirds danzerpress-align-center" style="margin:0px;">
						<h2 class="danzerpress-title" style="text-align: center; font-size: 20px; color: white !important; margin:0px !important;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae magna sed massa aliquam porta. </h2>
					</div>
					<div class="danzerpress-one-third danzerpress-align-center danzerpress-margin-zero" style="margin:0px;">
						<p style="text-align: center;"><a href="" class="danzerpress-button-modern">Call to action</a></p>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>

<div class="danzerpress-section danzerpress-odd" id="">
	<div class="danzerpress-wrap">
		
		<div class="danzerpress-flex-row">
			<div class="danzerpress-two-thirds danzerpress-col-center">
				<h2 class="danzerpress-title" style="">My Past Work</h2>
				<p style="text-align: center; font-size: 18px;margin-bottom: 40px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae magna sed<br> massa aliquam porta. Ut vitae pharetra diam. Proin sed nisl eget dolor aliquet sollicitudin.</p>
				<div class="danzerpress-flex-row">
					<div class="danzerpress-col-3">
						<img src="https://unsplash.it/500/502/?random">
						<h4 style="text-align: center;">Lorem Ipsum</h4>
					</div>
					<div class="danzerpress-col-3">
						<img src="https://unsplash.it/500/501/?random">
						<h4 style="text-align: center;">Lorem Ipsum</h4>
					</div>
					<div class="danzerpress-col-3">
						<img src="https://unsplash.it/500/499/?random">
						<h4 style="text-align: center;">Lorem Ipsum</h4>
					</div>
					<div class="danzerpress-col-3">
						<img src="https://unsplash.it/500/498/?random">
						<h4 style="text-align: center;">Lorem Ipsum</h4>
					</div>
					<div class="danzerpress-col-3">
						<img src="https://unsplash.it/500/497/?random">
						<h4 style="text-align: center;">Lorem Ipsum</h4>
					</div>
					<div class="danzerpress-col-3">
						<img src="https://unsplash.it/500/496/?random">
						<h4 style="text-align: center;">Lorem Ipsum</h4>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="danzerpress-section" id="">
	<div class="danzerpress-wrap">
		<div class="danzerpress-flex-row">
			<div class="danzerpress-four-fifths danzerpress-col-center">
				<div class="danzerpress-flex-row">
					<div class="danzerpress-col-2 danzerpress-align-center">
						<h2 class="danzerpress-title" style="">My Past Work</h2>
						<p style="text-align: center; font-size: 18px;margin-bottom: 40px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae magna sed massa aliquam porta. Ut vitae pharetra diam. Proin sed nisl eget dolor aliquet sollicitudin.</p>
						<div class="" style="margin:0px;">
							<p style="text-align: center;"><a href="" class="danzerpress-button-modern">Call to action</a></p>
						</div>
					</div>
					<div class="danzerpress-col-2">
						<div class="danzerpress-flex-row">
							<div class="danzerpress-col-2">
								<img src="https://unsplash.it/500/502/?random">
							</div>
							<div class="danzerpress-col-2">
								<img src="https://unsplash.it/500/501/?random">
							</div>
							<div class="danzerpress-col-2">
								<img src="https://unsplash.it/500/499/?random">
							</div>
							<div class="danzerpress-col-2">
								<img src="https://unsplash.it/500/498/?random">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>