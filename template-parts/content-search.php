<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package DanzerPress
 */

?>
<div class="danzerpress-col-3 wow fadeInUp">
	<div class="danzerpress-thumbnail">
    	<?php 
    		$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'large');
    		$post_link = get_permalink(); 
    		if ( $featured_img_url ) {
    			$image = $featured_img_url;
    		} else {
    			$image = get_template_directory_uri() . '/danzerpress-images/no-image.png';
    		}
    	?>
    	<a href="<?php echo $post_link; ?>">
    		<img src="<?php echo $image; ?>">
    	</a>
	</div>
	<div class="danzerpress-box danzerpress-white">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="margin: 0px;">
			<header class="entry-header">
				<?php the_title( sprintf( '<h4 class="entry-title" style="text-align:center;"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' ); ?>
			</header><!-- .entry-header -->
		</article><!-- #post-<?php the_ID(); ?> -->
	</div>
</div>
