<?php
/**
 * Lion City Travel functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Lion_City_Travel
 */

if ( ! defined( 'LION_CITY_TRAVEL_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'LION_CITY_TRAVEL_VERSION', '0.1.0' );
}

if ( ! function_exists( 'lion_city_travel_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function lion_city_travel_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Lion City Travel, use a find and replace
		 * to change 'lion-city-travel' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'lion-city-travel', get_template_directory() . '/languages' );

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

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'menu-1' => __( 'Primary', 'lion-city-travel' ),
				'menu-2' => __( 'Footer Menu', 'lion-city-travel' ),
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

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style-editor.css' );

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Remove support for block templates.
		remove_theme_support( 'block-templates' );

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
add_action( 'after_setup_theme', 'lion_city_travel_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function lion_city_travel_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Footer', 'lion-city-travel' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your footer.', 'lion-city-travel' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'lion_city_travel_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function lion_city_travel_scripts() {
	wp_enqueue_style( 'lion-city-travel-style', get_stylesheet_uri(), array(), LION_CITY_TRAVEL_VERSION );
	wp_enqueue_script( 'lion-city-travel-script', get_template_directory_uri() . '/js/script.min.js', array(), LION_CITY_TRAVEL_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'lion_city_travel_scripts' );

/**
 * Add the block editor class to TinyMCE.
 *
 * This allows TinyMCE to use Tailwind Typography styles.
 *
 * @param array $settings TinyMCE settings.
 * @return array
 */
function lion_city_travel_tinymce_add_class( $settings ) {
	$settings['body_class'] = 'block-editor-block-list__layout';
	return $settings;
}
add_filter( 'tiny_mce_before_init', 'lion_city_travel_tinymce_add_class' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Functions adding all CPTUI post types to the archives.
 */
function cptui_add_post_types_to_archives( $query ) {
	// We do not want unintended consequences.
	if ( is_admin() || ! $query->is_main_query() ) {
		return;
	}

	if ( is_category() || is_tag() && empty( $query->query_vars['suppress_filters'] ) ) {
		$cptui_post_types = cptui_get_post_type_slugs();

		$query->set(
			'post_type',
			array_merge(
				array( 'post' ),
				$cptui_post_types
			)
		);
	}
}
add_filter( 'pre_get_posts', 'cptui_add_post_types_to_archives' );
