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

<?php
if(is_active_sidebar('emergency-header')){
  $emergencyheaderStatus = 'emergency-header-active';
} else {
  $emergencyheaderStatus = 'emergency-header-inactive';
}

$danzerpress_body = array( 
  "drawer", 
  "drawer--top", 
  "drawer--navbarTopGutter"
);

$danzerpress_navigation = array();

if (get_field('navigation_style', 'option') == 'transparent') {
  array_push($danzerpress_navigation, 'transparent');
  array_push($danzerpress_body, 'danzerpress-transparent');
} else {
  array_push($danzerpress_navigation, 'non-transparent');
  array_push($danzerpress_body, 'danzerpress-non-transparent');
}
?>

<body <?php body_class( $danzerpress_body ); ?>>
  <header class="drawer-navbar drawer-navbar--fixed <?php foreach ($danzerpress_navigation as $value) { echo $value; } ?>" role="banner">
  	<?php
    if(is_active_sidebar('emergency-header')){
    
      dynamic_sidebar('emergency-header');

    }
    ?>
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

	<div id="content" class="site-content">
