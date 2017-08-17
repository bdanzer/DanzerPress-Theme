<div class="danzerpress-section danzerpress-section-one danzerpress-flex-column">
	<div class="danzerpress-wrap">
		<div class="danzerpress-flex-row">
			<div class="danzerpress-two-thirds danzerpress-col-center">
				<?php
					$titlesectionOne = get_field('section_one_title');
					$buttonText = get_field('button_text');
				?>
				<h1 class="danzerpress-title"><?php echo $titlesectionOne; ?></h1>
				<p style="text-align: center;">
					<a id="quote" href="" class="danzerpress-button" style="position: relative;"><?php echo $buttonText; ?><span class="danzerpress-star">*</span></a>
				</p>
				<p style="text-align:center;"><a class="danzerpress-no-thanks" style="color:white;" href="<?php echo get_page_link(60); ?>"><span class="danzerpress-star">*</span>No thanks, I need life insurance that doesn't expire</a></p>
			</div>
		</div>
	</div>
</div>
<div class="danzerpress-section danzerpress-section-number danzerpress-odd">
	<div class="danzerpress-wrap">
		<h2 class="danzerpress-title">Categories</h2>
		<div class="danzerpress-flex-row">

			<?php if( have_rows('categories_section') ): ?>
				<?php while( have_rows('categories_section') ): the_row(); 

					// vars
					$image = get_sub_field('image');
					$link = get_sub_field('link');
					$title = get_sub_field('title');
					$content = get_sub_field('content');

					?>

					<div class="danzerpress-col-4">
						<div class="danzerpress-image-wrap">
							<a href="<? echo $link; ?>">
								<img src="<?php echo $image; ?>">
							</a>
						</div>
						<div class="danzerpress-description">
							<h3><a href="<? echo $link; ?>"><?php echo $title; ?></a></h3>
							<p><?php echo $content; ?></p>
						</div>
					</div>

				<?php endwhile; ?>
			<?php endif; ?>
				   
		</div>
	</div>
</div>
<div class="danzerpress-section danzerpress-section-three">
		<div class="danzerpress-flex-row">

			    <div class="danzerpress-col-2 animated fadeIn danzerpress-flex-column danzerpress-align-center">
			    	<div class="danzerpress-box danzerpress-two-thirds danzerpress-col-center">
			    		<?php
			    			$titleAbout = get_field('title_about');
			    			$contentAbout = get_field('content_about');
			    			$buttonAbout = get_field('button_about');
			    			$imageAbout = get_field('image_about');
			    		?>
				    	<h5><?php echo $titleAbout; ?></h5>
						<p><?php echo $contentAbout; ?></p>
						<p><a id="quote" href="" class="danzerpress-button" style="position: relative;"><?php echo $buttonAbout; ?><span class="danzerpress-star">*</span></a></p>
						<p><a class="danzerpress-no-thanks" href="<?php echo get_page_link(60); ?>" style="text-shadow: none !important;"><span class="danzerpress-star">*</span>No thanks, I need life insurance that doesn't expire</a></p>
					</div>
				</div>
				<div class="danzerpress-col-2 animated fadeIn" style="margin:0;max-width:50%;flex:0 0 50%;width:50%;line-height:0px;">
			    	<img src="<?php echo $imageAbout; ?>">
				</div>
		</div>	
</div>
<div class="danzerpress-section danzerpress-section-four danzerpress-odd">
	<div class="danzerpress-wrap">
		<?php
			$titlehowitWorks = get_field('title_howitworks');
			$contenthowitWorks = get_field('content_howitworks');
		?>
		<h2 class="danzerpress-title"><?php echo $titlehowitWorks; ?></h2>
		<div class="danzerpress-flex-row">
		    <div class="danzerpress-two-thirds danzerpress-col-center danzerpress-box danzerpress-white">
				<?php echo $contenthowitWorks; ?>
			</div>
		</div>
	</div>
</div>
<!-- <div class="danzerpress-section danzerpress-section-six">
	<div class="danzerpress-wrap">
		<h2 class="danzerpress-title">Testimonials</h2>
		<div class="danzerpress-flex-row">

			<?php 
				$x = 1; 

				while($x <= 3) { ?>
				    <div class="danzerpress-col-3">
						<div class="danzerpress-image-wrap">
							<img src="https://unsplash.it/600/300/?random">
						</div>
						<div class="danzerpress-description">
							<p style="font-style: italic;text-align:center;">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec volutpat elit nisi, ut euismod ligula gravida at. Morbi ultrices sapien metus, nec congue orci ornare pharetra."</p>
							<h3 class="danzerpress-author-testimonial" >Name</h3>
						</div>
					</div>
				    <?php $x++;
				} 
			?>
			
		</div>
	</div>
</div> -->
<div class="danzerpress-section danzerpress-section-two">
	<div class="danzerpress-wrap">
		<div class="danzerpress-flex-row">

			<?php if( have_rows('company_logo_section') ): ?>
				<?php while( have_rows('company_logo_section') ): the_row(); 

					// vars
					$image = get_sub_field('image');

					?>

					<div class="danzerpress-col-6 animated fadeIn">
						<div class="danzerpress-image-wrap-two">
							<img src="<?php echo $image; ?>">
						</div>
					</div>

				<?php endwhile; ?>
			<?php endif; ?>
			 
		</div>	
	</div>
</div>