<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package DanzerPress
 */

?>

<div class="danzerpress-col-3 wow fadeInUp">
	<article id="post-<?php the_ID(); ?>" <?php post_class( array( "danzerpress-gallery" ) ); ?> style="display: flex;flex-direction: column;height: 100%;">
		<div class="danzerpress-thumbnail">
        	<?php 
        		$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'large');
        		$post_link = get_permalink(); 

        		if (!$featured_img_url) {
        			$featured_img_url = danzerpress_no_image();
        		}
        	?>
        	<a href="<?php echo $post_link; ?>"><img src="<?php echo $featured_img_url; ?>"></a>
		</div>
		<div class="danzerpress-box danzerpress-shadow-3" style="display: flex;justify-content: center;align-items: center;">
			<div class="content-wrap">
				<header class="entry-header">
					<?php
					if ( is_singular() ) :
						the_title( '<h1 class="entry-title">', '</h1>' );
					else :
						the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
					endif;

					?>
				</header><!-- .entry-header -->

				<div class="entry-content">
					<?php echo '<p>' . excerpt(20) . '</p>';

						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'danzerpress' ),
							'after'  => '</div>',
						) );
					?>
				</div><!-- .entry-content -->
			</div>
		</div>
	</article><!-- #post-<?php the_ID(); ?> -->
</div>
