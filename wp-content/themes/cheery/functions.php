<?php
/**
 * Cheery functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package cheery
 */

if ( ! function_exists( 'cheery_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function cheery_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Cheery, use a find and replace
		 * to change 'cheery' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'cheery', get_template_directory() . '/languages' );

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
		set_post_thumbnail_size( 600, 700, true );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' 	=> esc_html__( 'Primary Menu', 'cheery' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'cheery_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add theme support for page excerpt.
		add_post_type_support( 'page', 'excerpt' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 400,
			'flex-width'  => true,
			'flex-height' => true,
			'header-text' => array( 'site-title', 'site-description' ),
		) );

		// Enable support for footer widgets.
		add_theme_support( 'footer-widgets', 4 );

		// Load Footer Widget Support.
		require_if_theme_supports( 'footer-widgets', get_template_directory() . '/inc/footer-widget.php' );

		// Gutenberg support
		add_theme_support( 'editor-color-palette', array(
	       	array(
	           	'name' => esc_html__( 'Vulcan', 'cheery' ),
	           	'slug' => 'vulcan',
	           	'color' => '#101020',
	       	),
	       	array(
	           	'name' => esc_html__( 'Sundown', 'cheery' ),
	           	'slug' => 'sundown',
	           	'color' => '#FFB5B5',
	       	),
	       	array(
	           	'name' => esc_html__( 'Tundora', 'cheery' ),
	           	'slug' => 'tundora',
	           	'color' => '#444',
	       	),
	   	));

		add_theme_support( 'align-wide' );
		add_theme_support( 'editor-font-sizes', array(
		   	array(
		       	'name' => esc_html__( 'small', 'cheery' ),
		       	'shortName' => esc_html__( 'S', 'cheery' ),
		       	'size' => 12,
		       	'slug' => 'small'
		   	),
		   	array(
		       	'name' => esc_html__( 'regular', 'cheery' ),
		       	'shortName' => esc_html__( 'M', 'cheery' ),
		       	'size' => 16,
		       	'slug' => 'regular'
		   	),
		   	array(
		       	'name' => esc_html__( 'large', 'cheery' ),
		       	'shortName' => esc_html__( 'L', 'cheery' ),
		       	'size' => 36,
		       	'slug' => 'larger'
		   	),
		   	array(
		       	'name' => esc_html__( 'extra large', 'cheery' ),
		       	'shortName' => esc_html__( 'XL', 'cheery' ),
		       	'size' => 48,
		       	'slug' => 'huge'
		   	)
		));
		add_theme_support('editor-styles');
		add_theme_support( 'wp-block-styles' );
	}
endif;
add_action( 'after_setup_theme', 'cheery_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function cheery_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'cheery_content_width', 819 );
}
add_action( 'after_setup_theme', 'cheery_content_width', 0 );

if ( ! function_exists( 'cheery_fonts_url' ) ) :
/**
 * Register Google fonts
 *
 * @return string Google fonts URL for the theme.
 */
function cheery_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';

	/* translators: If there are characters in your language that are not supported by Quicksand, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Quicksand font: on or off', 'cheery' ) ) {
		$fonts[] = 'Quicksand:200,300,400,700';
	}

	/* translators: If there are characters in your language that are not supported by Playfair Display, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Playfair Display font: on or off', 'cheery' ) ) {
		$fonts[] = 'Playfair Display:100,200,300,400,700';
	}

	/* translators: If there are characters in your language that are not supported by Cinzel, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Cinzel font: on or off', 'cheery' ) ) {
		$fonts[] = 'Cinzel:100,200,300,400,500,600,700';
	}

	/* translators: If there are characters in your language that are not supported by Lato, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Lato font: on or off', 'cheery' ) ) {
		$fonts[] = 'Lato:200,300,400,700';
	}

	$query_args = array(
		'family' => urlencode( implode( '|', $fonts ) ),
		'subset' => urlencode( $subsets ),
	);

	if ( $fonts ) {
		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return esc_url_raw( $fonts_url );
}
endif;

/**
 * Add preconnect for Google Fonts.
 *
 * @since Cheery 1.0.0
 *
 * @param array  $urls           URLs to print for resource hints.
 * @param string $relation_type  The relation type the URLs are printed.
 * @return array $urls           URLs to print for resource hints.
 */
function cheery_resource_hints( $urls, $relation_type ) {
	if ( wp_style_is( 'cheery-fonts', 'queue' ) && 'preconnect' === $relation_type ) {
		$urls[] = array(
			'href' => 'https://fonts.gstatic.com',
			'crossorigin',
		);
	}

	return $urls;
}
add_filter( 'wp_resource_hints', 'cheery_resource_hints', 10, 2 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function cheery_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'cheery' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'cheery' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Optional Sidebar', 'cheery' ),
		'id'            => 'optional-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'cheery' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'cheery_widgets_init' );

/**
 * Function to detect SCRIPT_DEBUG on and off.
 * @return string If on, empty else return .min string.
 */
function cheery_min() {
	return defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
}

/**
 * Enqueue scripts and styles.
 */
function cheery_scripts() {

	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'cheery-fonts', cheery_fonts_url(), array(), null );

	// slick
	wp_enqueue_style( 'jquery-slick', get_template_directory_uri() . '/assets/css/slick' . cheery_min() . '.css' );

	// slick theme
	wp_enqueue_style( 'jquery-slick-theme', get_template_directory_uri() . '/assets/css/slick-theme' . cheery_min() . '.css' );

	// blocks
	wp_enqueue_style( 'cheery-blocks', get_template_directory_uri() . '/assets/css/blocks' . cheery_min() . '.css' );

	wp_enqueue_style( 'cheery-style', get_stylesheet_uri() );

	// Load the html5 shiv.
	wp_enqueue_script( 'cheery-html5', get_template_directory_uri() . '/assets/js/html5' . cheery_min() . '.js', array(), '3.7.3' );
	wp_script_add_data( 'cheery-html5', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'cheery-navigation', get_template_directory_uri() . '/assets/js/navigation' . cheery_min() . '.js', array(), '20151215', true );

	$cheery_l10n = array(
		'quote'          => cheery_get_svg( array( 'icon' => 'quote-right' ) ),
		'expand'         => esc_html__( 'Expand child menu', 'cheery' ),
		'collapse'       => esc_html__( 'Collapse child menu', 'cheery' ),
		'icon'           => cheery_get_svg( array( 'icon' => 'angle-down', 'fallback' => true ) ),
	);
	wp_localize_script( 'cheery-navigation', 'cheery_l10n', $cheery_l10n );

	wp_enqueue_script( 'cheery-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix' . cheery_min() . '.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_script( 'jquery-slick', get_template_directory_uri() . '/assets/js/slick' . cheery_min() . '.js', array( 'jquery' ), '', true );

	wp_enqueue_script( 'cheery-custom', get_template_directory_uri() . '/assets/js/custom' . cheery_min() . '.js', array( 'jquery' ), '20151215', true );

}
add_action( 'wp_enqueue_scripts', 'cheery_scripts' );

/**
 * Enqueue editor styles for Gutenberg
 */
function cheery_block_editor_styles() {
	// Block styles.
	wp_enqueue_style( 'cheery-block-editor-style', get_theme_file_uri( '/assets/css/editor-blocks' . cheery_min() . '.css' ) );
	// Add custom fonts.
	wp_enqueue_style( 'cheery-fonts', cheery_fonts_url(), array(), null );
}
add_action( 'enqueue_block_editor_assets', 'cheery_block_editor_styles' );

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
* TGM plugin additions.
*/
require get_template_directory() . '/inc/tgm-plugin/tgm-hook.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * OCDI plugin demo importer compatibility.
 */
if ( class_exists( 'OCDI_Plugin' ) ) {
    require get_template_directory() . '/inc/demo-import.php';
}
