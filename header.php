<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DanzerPress
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>


</head>

<body <?php body_class( array( "drawer", "drawer--top", "drawer--navbarTopGutter" ) ); ?>>
  <header class="drawer-navbar drawer-navbar--fixed" role="banner">
    <div class="drawer-container">
      <div class="drawer-navbar-header">
        <?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) : ?>
					<!-- <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1> -->
				<?php else : ?>
					<!-- <a class="drawer-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a> -->
				<?php endif;?>
        <button type="button" class="drawer-toggle drawer-hamburger">
          <span class="sr-only">toggle navigation</span>
          <span class="drawer-hamburger-icon"></span>
        </button>
      </div>
      <nav class="drawer-nav" role="navigation">
        <?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'menu_class'     => 'danzerpress-right',
				) );
			?>
      </nav>
    </div>
  </header>

<?php
if ( is_page() && get_the_post_thumbnail_url() !== false ) {
	$url = get_the_post_thumbnail_url();
} elseif ( is_page() && get_the_post_thumbnail_url() === false ) {
	$url = 'https://unsplash.it/1920/1080/?random';
}
?>

<style type="text/css">
.danzerpress-home-background {
    background-image: url(<?php echo $url; ?>) !important;
    background-image: linear-gradient(rgba(16, 16, 16, 0.74), rgba(99, 99, 99, 0)), url(<?php echo $url; ?>) !important;
    background-size: cover !important;
    background-position: 20% 67% !important;
    background-attachment: fixed !important;
    padding: 170px 0 !important;
}
</style>

	<div id="content" class="site-content">
