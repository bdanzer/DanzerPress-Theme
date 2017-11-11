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

<?php

if ( !is_front_page() ) {
    if ( is_archive() ) {
      $title = get_the_archive_title();
    } elseif ( is_home() ) {
      $title = get_the_archive_title();
    } elseif ( is_page() ) {
      $title = get_the_title();
    } elseif ( is_single() ) {
      $title = get_the_title();
    } elseif ( is_search() ) {
      $title = 'Search results for: ' . get_search_query();
    } elseif ( is_404() ) {
      $title = 'Uh oh, seems you\'re lost';
    }
    echo '
    <div class="danzerpress-title-area" style="display: flex;align-items: center;justify-content: center;">
      <h1 class="danzerpress-title">' . $title . '</h1>
    </div>
    ';

    if (get_the_post_thumbnail_url()) {
      $url = get_the_post_thumbnail_url();
    } elseif ( is_404() ) {
      $url = 'https://images.unsplash.com/photo-1464802686167-b939a6910659?auto=format&fit=crop&w=1633&q=60&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D';
    } else {
      $url = 'https://unsplash.it/1920/1070/?random';
    }
    ?>
    <style type="text/css">
      .danzerpress-title-area {
          background-image: url(<?php echo $url; ?>);
          background-image: linear-gradient(rgba(16, 16, 16, 0.3), rgba(255, 255, 255, 0.3)), url(<?php echo $url; ?>);
          background-size: cover;
          background-position: 100% 100%;
          padding: 170px 0;
          background-attachment: fixed;
          <?php
          if ( get_field('full_screen_title_area', 'option') === true ) {
            echo 'height: 100vh;';
          }

          if (get_field('title_section_color', 'option')) {
            echo 'background:' . get_field('title_section_color', 'option') . ';';
          }

          if ( get_field('title_section_padding', 'option') ) {
            echo get_field('title_section_padding', 'option');
          } else {
            echo 'padding: 170px 0;';
          }
   
          ?>
      }
      .danzerpress-non-transparent .danzerpress-title-area {
          height: calc(100vh - 60px) !important;
      }
      .danzerpress-transparent .danzerpress-title-area {
          background-image: linear-gradient(rgba(0, 0, 0, 0.85), rgba(45, 45, 45, 0.29)), url(<?php echo $url; ?>);
          background-size: cover;
          background-position: 100% 100%;
          padding: 170px 0;
          background-attachment: fixed;
          margin-top: -62px;
          <?php
          if ( get_field('full_screen_title_area', 'option') === true ) {
            echo 'height: 100vh;';
          }

          if (get_field('title_section_color', 'option')) {
            echo 'background:' . get_field('title_section_color', 'option') . ';';
          }

          if ( get_field('title_section_padding', 'option') ) {
            echo get_field('title_section_padding', 'option');
          }
   
          ?>
      }

      @media screen and (max-width: 768px) {
          .danzerpress-title-area {
              background-attachment: fixed;
              background-position: 50% 67% !important;
              background-attachment: scroll !important;
          }
      }
    </style>
  <?php }
?>

