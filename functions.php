<?php

/**
 * The Space Coworking functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package The_Space_Coworking
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

if (!function_exists('the_space_coworking_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function the_space_coworking_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on The Space Coworking, use a find and replace
		 * to change 'the-space-coworking' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('the-space-coworking', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__('Primary', 'the-space-coworking'),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'the_space_coworking_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action('after_setup_theme', 'the_space_coworking_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function the_space_coworking_content_width()
{
	$GLOBALS['content_width'] = apply_filters('the_space_coworking_content_width', 640);
}
add_action('after_setup_theme', 'the_space_coworking_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function the_space_coworking_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'the-space-coworking'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'the-space-coworking'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'the_space_coworking_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function the_space_coworking_scripts()
{



	wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css', array(), _S_VERSION);
	wp_style_add_data('bootstrap-style', 'rtl', 'replace');

	wp_enqueue_style('dock-no-11', get_template_directory_uri() . '/assets/css/Dock_No_11.css', array(), _S_VERSION);
	wp_style_add_data('dock-no-11', 'rtl', 'replace');

	wp_enqueue_style('proxima-nova', get_template_directory_uri() . '/assets/css/ProximaNova.css', array(), _S_VERSION);
	wp_style_add_data('proxima-nova', 'rtl', 'replace');

	wp_enqueue_style('the-space-coworking-style', get_template_directory_uri() . '/sass/style.css', array(), _S_VERSION);
	wp_style_add_data('the-space-coworking-style', 'rtl', 'replace');



	// wp_enqueue_script( 'jquery-script', get_template_directory_uri() . '/assets/js/jquery.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script('jquery');

	wp_enqueue_script('bootstrap-script', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', array(), _S_VERSION, true);

	wp_enqueue_script('particles', get_template_directory_uri() . '/assets/js/particles.js', array(), _S_VERSION, true);

	wp_register_script('parallax', 'https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js', null, null, true);
	wp_enqueue_script('parallax');

	wp_enqueue_script('app', get_template_directory_uri() . '/assets/js/app.js', array(), _S_VERSION, true);




	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'the_space_coworking_scripts');

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
new Custom_Customizer();

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

// add class to anchor tags in menu
add_filter('nav_menu_link_attributes', 'add_class_to_anchors', 10, 3);

function add_class_to_anchors($classes, $item, $args)
{
	if (isset($args->add_link_class)) {
		$classes['class'] = $args->add_link_class;
	}
	return $classes;
}

// add classes to custom logo 
add_filter('get_custom_logo', 'change_logo_class');


function change_logo_class($html)
{


	$html = str_replace('custom-logo-link', 'navbar-brand', $html);

	return $html;
}


// Allow SVG
add_filter('wp_check_filetype_and_ext', function ($data, $file, $filename, $mimes) {

	global $wp_version;
	if ($wp_version !== '4.7.1') {
		return $data;
	}

	$filetype = wp_check_filetype($filename, $mimes);

	return [
		'ext'             => $filetype['ext'],
		'type'            => $filetype['type'],
		'proper_filename' => $data['proper_filename']
	];
}, 10, 4);

function cc_mime_types($mimes)
{
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function fix_svg()
{
	echo '<style type="text/css">
		  .attachment-266x266, .thumbnail img {
			   width: 100% !important;
			   height: auto !important;
		  }
		  </style>';
}
add_action('admin_head', 'fix_svg');

remove_all_filters('wp_nav_menu_args');
