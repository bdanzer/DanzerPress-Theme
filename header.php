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

if (get_field('navigation_style', 'option') == 'transparent' && get_field('title_screen_header') != 2) {
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
      if ( is_category() ) {
          /* translators: Category archive title. 1: Category name */
          $title = single_cat_title( '', false );
      } elseif ( is_tag() ) {
          /* translators: Tag archive title. 1: Tag name */
          $title = sprintf( __( 'Tag: %s' ), single_tag_title( '', false ) );
      } elseif ( is_author() ) {
          /* translators: Author archive title. 1: Author name */
          $title = sprintf( __( 'Author: %s' ), '<span class="vcard">' . get_the_author() . '</span>' );
      } elseif ( is_year() ) {
          /* translators: Yearly archive title. 1: Year */
          $title = sprintf( __( 'Year: %s' ), get_the_date( _x( 'Y', 'yearly archives date format' ) ) );
      } elseif ( is_month() ) {
          /* translators: Monthly archive title. 1: Month name and year */
          $title = get_the_date( _x( 'F Y', 'monthly archives date format' ) );
      } elseif ( is_day() ) {
          /* translators: Daily archive title. 1: Date */
          $title = sprintf( __( 'Day: %s' ), get_the_date( _x( 'F j, Y', 'daily archives date format' ) ) );
      } elseif ( is_tax( 'post_format' ) ) {
          if ( is_tax( 'post_format', 'post-format-aside' ) ) {
              $title = _x( 'Asides', 'post format archive title' );
          } elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) {
              $title = _x( 'Galleries', 'post format archive title' );
          } elseif ( is_tax( 'post_format', 'post-format-image' ) ) {
              $title = _x( 'Images', 'post format archive title' );
          } elseif ( is_tax( 'post_format', 'post-format-video' ) ) {
              $title = _x( 'Videos', 'post format archive title' );
          } elseif ( is_tax( 'post_format', 'post-format-quote' ) ) {
              $title = _x( 'Quotes', 'post format archive title' );
          } elseif ( is_tax( 'post_format', 'post-format-link' ) ) {
              $title = _x( 'Links', 'post format archive title' );
          } elseif ( is_tax( 'post_format', 'post-format-status' ) ) {
              $title = _x( 'Statuses', 'post format archive title' );
          } elseif ( is_tax( 'post_format', 'post-format-audio' ) ) {
              $title = _x( 'Audio', 'post format archive title' );
          } elseif ( is_tax( 'post_format', 'post-format-chat' ) ) {
              $title = _x( 'Chats', 'post format archive title' );
          }
      } elseif ( is_post_type_archive() ) {
          /* translators: Post type archive title. 1: Post type name */
          $title = sprintf( post_type_archive_title( '', false ) );
      } elseif ( is_tax() ) {
          $tax = get_taxonomy( get_queried_object()->taxonomy );
          /* translators: Taxonomy term archive title. 1: Taxonomy singular name, 2: Current taxonomy term */
          $title = sprintf( __( '%1$s: %2$s' ), $tax->labels->singular_name, single_term_title( '', false ) );
      } else {
          $title = __( 'Archives' );
      }
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

    if (get_the_post_thumbnail_url()) {
      $url = get_the_post_thumbnail_url();
    } elseif ( is_404() ) {
      $url = 'https://images.unsplash.com/photo-1464802686167-b939a6910659?auto=format&fit=crop&w=1633&q=60&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D';
    } elseif( is_blog() && !get_the_post_thumbnail_url() ) {
      $url = danzerpress_no_image();
    } else {
      $url = 'https://unsplash.it/1920/1070/?random';
    }

    if (get_field('title_screen_header') != 2) {
      echo '
      <div class="danzerpress-title-area parallax-window" data-parallax="scroll" data-image-src="' . $url . '" style="display: flex;align-items: center;justify-content: center;">
        <h1 class="danzerpress-title">' . $title . '</h1>
      </div>
      ';
    }

    ?>
    <style type="text/css">
      .danzerpress-title-area {
          background: linear-gradient(rgba(0, 0, 0, 0.85), rgba(45, 45, 45, 0.29));
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

      <?php
      if ( get_field('full_screen_title_area', 'option') === true ) {
            echo '.danzerpress-non-transparent .danzerpress-title-area {
                      height: calc(100vh - 60px) !important;
                  }';
          }
      ?>

      .danzerpress-transparent .danzerpress-title-area {
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