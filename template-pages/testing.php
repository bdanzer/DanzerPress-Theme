<?php
/* Template Name: Testing - DanzerPress */
?>
<?php get_header(); ?>

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
		<h2 class="danzerpress-title" style="margin-bottom: 40px;">Sites Worked On</h2>
		<div class="danzerpress-flex-row">
			<div class="danzerpress-two-thirds danzerpress-col-center">
				<div class="danzerpress-flex-row">
					<div class="danzerpress-col-3 danzerpress-md-2">
						<div class="danzerpress-image-wrap"><img src="https://danzerpress.com/wp-content/uploads/2016/12/xFestIntlLogo500x500.png.pagespeed.ic.v-ssaomuJy.webp"></div>
					</div>
					<div class="danzerpress-col-3 danzerpress-md-2">
						<div class="danzerpress-image-wrap"><img src="https://danzerpress.com/wp-content/uploads/2016/12/xhive300x300-1.png.pagespeed.ic.fopYAXcxXr.webp"></div>
					</div>
					<div class="danzerpress-col-3 danzerpress-md-2">
						<div class="danzerpress-image-wrap"><img src="https://danzerpress.com/wp-content/uploads/2016/12/xsharpescout300x300.png.pagespeed.ic.01IezkbszF.webp"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<style type="text/css">
	iframe {
	    box-shadow: 1px 1px 20px rgba(0, 0, 0, 0.45);
	}
</style>

<div class="danzerpress-section" id="">
	<div class="danzerpress-wrap">
		<h2 class="danzerpress-title" style="margin-bottom: 40px;">Sites Worked On</h2>
		<div class="danzerpress-flex-row">
			<div class="danzerpress-two-thirds danzerpress-col-center">
				<div class="danzerpress-16-9-container">
					<iframe class="danzerpress-ar-items" src="https://www.youtube.com/embed/9ElaH0VmRFQ?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
</div>

<style type="text/css">
.video-background {
  background: #000;
  position: absolute;
  top: 0; right: 0; bottom: 0; left: 0;
  z-index: 0;
  display: flex;
}
.video-foreground,
.video-background iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  pointer-events: none;
}
.video-text {
	z-index: 222222;
    position: absolute;
    width: 100%;
    text-align: center;
    display: flex;
    align-self: center;
    justify-content: center;
}
@media (min-aspect-ratio: 16/9) {
  .video-foreground { height: 300%; top: -100%; }
}
@media (max-aspect-ratio: 16/9) {
  .video-foreground { width: 300%; left: -100%; }
}
</style>
<div class="danzerpress-section" id="" style="position: relative; position: relative; height: calc(100vh - 60px);">
	<div class="video-background">
	    <div class="video-foreground">
	      <iframe src="https://www.youtube.com/embed/W0LHTWG-UmQ?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&playlist=W0LHTWG-UmQ" frameborder="0" allowfullscreen></iframe>
	    </div>
	    <div class="video-text">
	    	<div class="danzerpress-flex-row">
	    		<div class="danzerpress-two-thirds danzerpress-col-center danzerpress-align-center" style="margin:0px;">
					<h2 class="danzerpress-title" style="margin-bottom: 20px; color: white !important;">What others think</h2>
					<p style="text-align: center; font-size: 21px;margin-bottom: 40px;line-height: 36px;color: white !important;">Lorem ipsum dolor sit amet, consectetur<br> adipiscing elit. Nulla vitae magna sed</p>
					<p style="text-align: center;"><a href="" class="danzerpress-button-modern">Call to action</a></p>
				</div>
	    	</div>
	    </div>
  	</div>
</div>


<div class="danzerpress-section danzerpress-odd" id="" style="">
	<div class="danzerpress-wrap">
		<h2 class="danzerpress-title" style="margin-bottom: 40px;">What others think</h2>
		<div class="danzerpress-flex-row">
			<div class="danzerpress-four-fifths danzerpress-col-center">

				<div class="danzerpress-flex-row">
					<?php
					/* Start the Loop */
					$args = array( 'post_type' => 'post', 'posts_per_page' => 2, 'category_name' => '');
					$loop = new WP_Query ( $args );
					while ( $loop->have_posts() ) : $loop->the_post();

					?>
					<div class="danzerpress-col-2">
						<div class="danzerpress-flex-row">
							<div class="danzerpress-col-2-fix danzerpress-zero danzerpress-recent-post-section wow zoomIn">
								<img class="" src="<?php echo get_the_post_thumbnail_url(); ?>">
							</div>

							<div class="danzerpress-col-2-fix danzerpress-zero danzerpress-white wow fadeInUp">
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

			</div>
		</div>
	</div>
</div>


<div class="danzerpress-section danzerpress-team-member-section" id="" style="">
	<div class="danzerpress-wrap">
		<h2 class="danzerpress-title" style="margin-bottom: 40px;">Team Members</h2>
		<div class="danzerpress-flex-row">
			<div class="danzerpress-four-fifths danzerpress-col-center" style="">

				<div class="danzerpress-flex-row">

					<div class="danzerpress-flex-row">
						<div class="danzerpress-one-third-fix danzerpress-team-member-image danzerpress-zero">
							<img class="wow fadeInLeft" src="<?php echo get_the_post_thumbnail_url(); ?>">
						</div>

						<div class="danzerpress-two-thirds-fix danzerpress-zero danzerpress-white wow fadeInUp" style="background: #f8f9f9 !important;">
							<div class="danzerpress-box">
								<h2 style="margin-bottom: 0px;"><?php the_title(); ?></h2>
								<h4 style="margin-bottom: 20px;">Job Title</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae magna sed. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae magna sed</p>
								<p>
									<a href=""><i class="fa fa-facebook"></i></a>
									<a href=""><i class="fa fa-twitter"></i></a>
									<a href=""><i class="fa fa-instagram"></i></a>
								</p>
							</div>
						</div>
					</div>

				</div>

			</div>
		</div>
	</div>
</div>

<div class="danzerpress-section danzerpress-odd" id="" style="">
	<div class="danzerpress-wrap">
		<h2 class="danzerpress-title" style="margin-bottom: 40px;">FAQ</h2>
		<div class="danzerpress-flex-row">
			<div class="danzerpress-four-fifths danzerpress-col-center" style="">

				<div class="danzerpress-flex-row">
					<div class="danzerpress-two-thirds danzerpress-col-center">

						<button class="danzerpress-accordion"><h4>What do we accomplish?</h4></button>
						<div class="danzerpress-panel">
						  <p class="danzerpress-box">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempus lacus ac purus pharetra, nec dictum magna fermentum. Suspendisse viverra, risus eu cursus tempor, diam libero congue ligula, et gravida tellus arcu quis leo. Sed ullamcorper ultrices metus id vestibulum. </p>
						</div>

						<button class="danzerpress-accordion"><h4>Section 2</h4></button>
						<div class="danzerpress-panel">
						  <p class="danzerpress-box">Lorem ipsum...</p>
						</div>

						<button class="danzerpress-accordion"><h4>Section 3</h4></button>
						<div class="danzerpress-panel">
						  <p class="danzerpress-box">Lorem ipsum...</p>
						</div>

					</div>
				</div>

			</div>
		</div>
	</div>
</div>

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


<?php get_footer(); ?>