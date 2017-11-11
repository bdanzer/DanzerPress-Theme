<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package DanzerPress
 */

get_header(); ?>

	<div id="primary" class="danzerpress-container-fw" style="padding-top: 40px; background: white;">
		<main id="main" class="danzerpress-wrap">
			<div class="danzerpress-flex-row">
				<div class="danzerpress-two-thirds">
					<div class="danzerpress-blog-thumbnail"><div class="danzerpress-image-wrap"><?php the_post_thumbnail(); ?></div></div>
					<div class="danzerpress-box danzerpress-white" style="padding: 20px 0;">
					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', get_post_type() );

						

						?>
						<div id="cooler-nav" class="navigation danzerpress-flex-row">
		<?php $prevPost = get_previous_post(true);
			if($prevPost) {?>
				<div class="nav-box previous danzerpress-col-2">
					<?php $prevthumbnail = get_the_post_thumbnail_url($prevPost->ID );?>
					<?php previous_post_link('%link',"  <p style='background: linear-gradient(rgba(0, 0, 0, 0.63), rgba(45, 45, 45, 0.29)), url(" . $prevthumbnail . ");
    height: 200px;
    background-size: cover;
    align-items: center;
    justify-content: center;
    display: flex;
    flex-direction: column;
    color: white;
    font-size: 22px;
    letter-spacing: 2px;
    text-transform: uppercase;
    text-align: center;
    font-weight: 700;
    border: 1px solid #201927;
    box-shadow: 1px 1px 20px rgba(0, 0, 0, 0.2);'><span style='margin-bottom: 5px;'>Previous:</span><span style='font-size:18px;'>%title</span></p>", TRUE); ?>
				</div>
				
				<?php } $nextPost = get_next_post(true);
				if($nextPost) { ?>
				<div class="nav-box next danzerpress-col-2" style="float:right;">
					<?php $nextthumbnail = get_the_post_thumbnail_url($nextPost->ID); ?>
					<?php next_post_link('%link',"<p style='background: linear-gradient(rgba(0, 0, 0, 0.63), rgba(45, 45, 45, 0.29)), url(" . $nextthumbnail . ");
    height: 200px;
    background-size: cover;
    align-items: center;
    justify-content: center;
    display: flex;
    flex-direction: column;
    color: white;
    font-size: 22px;
    letter-spacing: 2px;
    text-transform: uppercase;
    text-align: center;
    font-weight: 700;
    border: 1px solid #201927;
    box-shadow: 1px 1px 20px rgba(0, 0, 0, 0.2);'><span style='margin-bottom: 5px;'>Next:</span><span style='font-size:18px;'>%title</span></p>", TRUE); ?>
				</div>
		<?php } ?>
	</div><!--#cooler-nav div -->
					<?php
					endwhile; // End of the loop.
					?>
					</div>

				</div>
				<div id="" class="danzerpress-one-third">
					<div class="danzerpress-box">
						<?php get_sidebar(); ?>
					</div>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<div class="danzerpress-wrap" style="max-width: 900px;">
	
<?php 
	// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) :
		comments_template();
	endif;

?>
</div>


</main>

<?php get_footer(); ?>
