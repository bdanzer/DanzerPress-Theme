<?php
/**
 * DanzerPress functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package DanzerPress
 */

if ( ! function_exists( 'danzerpress_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function danzerpress_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on DanzerPress, use a find and replace
		 * to change 'danzerpress' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'danzerpress', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'danzerpress' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'danzerpress_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'danzerpress_setup' );


/**
 * Add a widget to the dashboard.
 *
 * This function is hooked into the 'wp_dashboard_setup' action below.
 */
add_action( 'wp_dashboard_setup', 'example_add_dashboard_widgets' );

function example_dashboard_widget_function() {

	// Display whatever it is you want to show.
	//echo '<iframe width="100%" height="315" src="https://www.youtube.com/embed/G7Tim7p8itM?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>';
	echo 'There will be an explaination video added here soon!';
}

function example_add_dashboard_widgets() {
 	wp_add_dashboard_widget( 'example_dashboard_widget', '<img style="height: 60px; width: auto; display: block;" src="'. get_template_directory_uri() . '/danzerpress-images/danzerpress-logo.png"><span>DanzerPress Theme Instructions</span>', 'example_dashboard_widget_function' );
 	
 	// Globalize the metaboxes array, this holds all the widgets for wp-admin
 	global $wp_meta_boxes;
 	
 	// Get the regular dashboard widgets array 
 	// (which has our new widget already but at the end)
 	$normal_dashboard = $wp_meta_boxes['dashboard']['normal']['core'];
 	
 	// Backup and delete our new dashboard widget from the end of the array
 	$example_widget_backup = array( 'example_dashboard_widget' => $normal_dashboard['example_dashboard_widget'] );
 	unset( $normal_dashboard['example_dashboard_widget'] );
 
 	// Merge the two arrays together so our widget is at the beginning
 	$sorted_dashboard = array_merge( $example_widget_backup, $normal_dashboard );
 
 	// Save the sorted array back into the original metaboxes 
 	$wp_meta_boxes['dashboard']['normal']['core'] = $sorted_dashboard;
} 

function remove_dashboard_meta() {
    remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
    remove_meta_box( 'dashboard_secondary', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
    remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
    remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
    //remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
    //remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');//since 3.8
}
add_action( 'admin_init', 'remove_dashboard_meta' );

//add update support
require 'plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/bdanzer/DanzerPress-Theme',
	__FILE__,
	'danzerpress'
);

//Optional: If you're using a private repository, specify the access token like this:
//$myUpdateChecker->setAuthentication('your-token-here');

//Optional: Set the branch that contains the stable release.
$myUpdateChecker->setBranch('master');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function danzerpress_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'danzerpress_content_width', 640 );
}
add_action( 'after_setup_theme', 'danzerpress_content_width', 0 );


function is_blog () {
	global  $post;
	$posttype = get_post_type($post );
	return ( ((is_archive()) || (is_author()) || (is_category()) || (is_home()) || (is_single()) || (is_tag())) && ( $posttype == 'post')  ) ? true : false ;
}

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function danzerpress_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'danzerpress' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'danzerpress' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name' => 'Footer',
		'id' => 'footer-sidebar-1',
		'description' => 'Appears in the footer area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s danzerpress-col-3">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
		) );
	register_sidebar( array(
		'name' => 'Footer Bottom Bar',
		'id' => 'footer-bottom-bar',
		'description' => 'Appears in the footer area, do no use a title',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
		) );
	register_sidebar( array(
		'name' => 'Emergency Header',
		'id' => 'emergency-header',
		'description' => 'This appears at the top of the website',
		'before_widget' => '<aside id="%1$s" class="widget %2$s wow shake danzerpress-emergency-header">',
		'after_widget' => '</aside>',
		) );
}
add_action( 'widgets_init', 'danzerpress_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function danzerpress_scripts() {

	//Enqueue Main Style Sheet
	wp_enqueue_style( 'danzerpress-style', get_stylesheet_uri() );

	//wp_enqueue_script( 'danzerpress-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'danzerpress-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

  	// jquery libraries
	wp_enqueue_script( 'jquery-2.1.1', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js', array('jquery'), null, false );

  	// Drawer
    wp_enqueue_style( 'drawer-min-css', 'https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/css/drawer.min.css' );
	wp_enqueue_style( 'drawer-css', get_template_directory_uri() . '/css/drawer.css' );

	// jquery & iscroll
	wp_enqueue_script('drawer-iscroll', 'https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js', array('jquery'), null, true );
	wp_enqueue_script('drawer-min-js', 'https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js', array('jquery'), null, true );

	// Animate.css
	wp_enqueue_style('animate-css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css');

	//wow-js
	wp_enqueue_script('wow-min-js', get_template_directory_uri() . '/js/wow.min.js', array(), null, true );

	// Danzerpress Layouts
	wp_enqueue_style( 'danzerpress-layouts', get_template_directory_uri() . '/css/danzerpress-layouts.css' );

	// Danzerpress Sections
	wp_enqueue_style( 'danzerpress-sections', get_template_directory_uri() . '/css/danzerpress-sections.css' );

	// Font Awesome
    wp_enqueue_script( 'fontawesome', 'https://use.fontawesome.com/3be2183bb5.js', array(), null, true );
    
    // Google Fonts
    wp_enqueue_style( 'google fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i|Raleway:400,500,700,800|Roboto', false);

    //Fancybox
    wp_enqueue_script( 'fancybox.js', get_template_directory_uri() . '/js/jquery.fancybox.min.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_style( 'fancybox.css', get_template_directory_uri() . '/js/jquery.fancybox.min.css' );

    //Tabulous
    //wp_enqueue_script( 'jquery-1.7.2', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'tabulous.js', get_template_directory_uri() . '/js/tabulous.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'tabulous-init.js', get_template_directory_uri() . '/js/tabulous-init.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_style( 'tabulous.css', get_template_directory_uri() . '/css/tabulous.css' );

    //Parallax
    wp_enqueue_script( 'parallax.js', get_template_directory_uri() . '/js/parallax.js', array( 'jquery' ), '1.0.0', true );

    //Tocify
    wp_enqueue_style( 'jquery.tocify.css', get_template_directory_uri() . '/css/jquery.tocify.css' );
    wp_enqueue_script( 'jqueryui-1.9.1', get_template_directory_uri() . '/js/jquery-ui-1.9.1.custom.min.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'jquery.tocify.js', get_template_directory_uri() . '/js/jquery.tocify.js', array( 'jquery' ), '1.0.0', true );

	//Danzerpress Scroll to fix
    wp_enqueue_script( 'danzerpress-scroll-to-fix', get_template_directory_uri() . '/js/jquery-scrolltofixed.js', array( 'jquery' ), '1.0.0');

    // Waypoints
	wp_enqueue_script( 'jquery-waypoints', 'https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.0/jquery.waypoints.min.js', array(), null, true );
	wp_enqueue_script( 'waypoints-min-js', 'https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.5/waypoints.min.js', array(), null, true );
	wp_enqueue_script( 'danzerpress-js', get_template_directory_uri() . '/js/danzerpress.js', array('jquery'), null, true );
	wp_enqueue_script( 'waypoints-debug', get_template_directory_uri() . '/js/waypoints.debug.js', array(), null, true  );

	//Tilt
	wp_enqueue_script( 'tilt-js', 'https://cdnjs.cloudflare.com/ajax/libs/tilt.js/1.2.1/tilt.jquery.min.js', array(), null, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
add_action( 'wp_enqueue_scripts', 'danzerpress_scripts' );

add_filter( 'walker_nav_menu_start_el', 'wpse_add_arrow',10,4);
function wpse_add_arrow( $item_output, $item, $depth, $args ){
    //Only add class to 'top level' items on the 'primary' menu.
    if('primary' == $args->theme_location && $depth ==0){
        $item_output .='<span class="arrow"></span>';
    }
    return $item_output;
}

// Replaces the excerpt "Read More" text by a link
function new_excerpt_more() {
    global $post;
	return '...<br><p><a class="danzerpress-button-modern" href="'. get_permalink($post->ID) . '"> Read more</a></p>';
}
add_filter('excerpt_more', 'new_excerpt_more');

function excerpt($limit) {
    return wp_trim_words(get_the_excerpt(), $limit, new_excerpt_more());
}

function modify_read_more_link() {
    return '<a class="danzerpress-button" href="' . get_permalink() . '">Your Read More Link Text</a>';
}
add_filter( 'the_content_more_link', 'modify_read_more_link' );

function danzerpress_excerpt_length( $length ) {
    return 100;
}
add_filter( 'excerpt_length', 'danzerpress_excerpt_length', 999 );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * DanzerPress Sections functions
 */
require get_template_directory() . '/inc/danzerpress-sections-functions.php';

/**
 * DanzerPress show current template
 */
require get_template_directory() . '/show-current-template/show-current-template.php';


// 1. customize ACF path
add_filter('acf/settings/path', 'my_acf_settings_path');
 
function my_acf_settings_path( $path ) {
 
    // update path
    $path = get_template_directory() . '/acf/';
    
    // return
    return $path;
    
}

// 2. customize ACF dir
add_filter('acf/settings/dir', 'my_acf_settings_dir');
 
function my_acf_settings_dir( $dir ) {
 
    // update path
    $dir = get_template_directory_uri() . '/acf/';
    
    // return
    return $dir;
    
}
 
// 3. Hide ACF field group menu item
//add_filter('acf/settings/show_admin', '__return_false');

// 4. Include ACF
include_once( get_template_directory() . '/acf/acf.php' );

if( function_exists('acf_add_options_page') ) {	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'DanzerPress Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
}

include_once( get_template_directory() . '/inc/theme-options.php' );

 
add_filter('acf/settings/save_json', 'my_acf_json_save_point');
 
function my_acf_json_save_point( $path ) {
    
    // update path
    $path = get_template_directory() . '/acf-json';

    // return
    return $path;
    
}


add_filter('acf/settings/load_json', 'my_acf_json_load_point');

function my_acf_json_load_point( $paths ) {
    
    // remove original path (optional)
    unset($paths[0]);
    
    // append path
    $paths[] = get_template_directory() . '/acf-json';
    
    // return
    return $paths;
    
}

/**
 * Function that will automatically update ACF field groups via JSON file update.
 *
 * @link http://www.advancedcustomfields.com/resources/synchronized-json/
 */
function jp_sync_acf_fields($json_dirs) {
	$groups = acf_get_field_groups();
	if (empty($groups)) {
		return;
	}
	// find JSON field groups which have not yet been imported
	$sync 	= array();
	foreach ($groups as $group) {
		$local 		= acf_maybe_get($group, 'local', false);
		$modified 	= acf_maybe_get($group, 'modified', 0);
		$private 	= acf_maybe_get($group, 'private', false);
		// ignore DB / PHP / private field groups
		if ($local !== 'json' || $private) {
			// do nothing
		} elseif (! $group['ID']) {
			$sync[$group['key']] = $group;
		} elseif ($modified && $modified > get_post_modified_time('U', true, $group['ID'], true)) {
			$sync[$group['key']]  = $group;
		}
	}
	if (empty($sync)) {
		return;
	}
	foreach ($sync as $key => $group) { //foreach ($keys as $key) {
		// append fields
		if (acf_have_local_fields($key)) {
			$group['fields'] = acf_get_local_fields($key);
		}
		// import
		$field_group = acf_import_field_group($group);
	}
	// sync groups that have been deleted
	if (!is_array($json_dirs) || !$json_dirs) {
		throw new \Exception('JSON dirs missing');
	}
	$delete = array();
	foreach ($groups as $group) {
		$found = false;
		foreach ($json_dirs as $json_dir) {
			$json_file = rtrim($json_dir, '/') . '/' . $group['key'] . '.json';
			if (is_file($json_file)) {
				$found = true;
				break;
			}
		}
		if (!$found) {
			$delete[] = $group['key'];
		}
	}
	if (!empty($delete)) {
		foreach ($delete as $group_key) {
			acf_delete_field_group($group_key);
		}
	}
}

?>