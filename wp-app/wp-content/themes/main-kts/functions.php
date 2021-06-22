<?php

/**
 * Siteorigin Corp functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package siteorigin-corp
 * @license GPL 2.0
 */

define('SITEORIGIN_THEME_VERSION', '1.17.3');
define('SITEORIGIN_THEME_JS_PREFIX', '.min');
define('SITEORIGIN_THEME_CSS_PREFIX', '.min');

if (!function_exists('siteorigin_corp_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function siteorigin_corp_setup()
	{
		/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on siteorigin-corp, use a find and replace
	 * to change 'siteorigin-corp' to the name of your theme in all the template files.
	 */
		load_theme_textdomain('siteorigin-corp', get_template_directory() . '/languages');

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

		// Custom image sizes.
		add_image_size('siteorigin-corp-500x500-crop', 500, 500, true);
		add_image_size('siteorigin-corp-720x480-crop', 720, 480, true);

		/*
	 * Enable support for the custom logo.
	 */
		add_theme_support('custom-logo');

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(array(
			'menu-header' => 'Меню в шапке',
			'menu-2' => 'Меню в подвале',
		));

		/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
		add_theme_support('html5', array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		));

		/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
		add_theme_support('post-formats', array(
			'gallery',
			'image',
			'video',
		));

		// Set up the WordPress core custom background feature.
		add_theme_support('custom-background', apply_filters('siteorigin_corp_custom_background_args', array(
			'default-color' => 'f9f9f9',
			'default-image' => '',
		)));

		/*
	 * Enable support for Gutenberg Editor Styles.
	 * https://wordpress.org/gutenberg/handbook/extensibility/theme-support/#editor-styles
	 */
		add_theme_support('editor-styles');

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		// Add theme support for SiteOrigin Page Template Settings.
		add_theme_support('siteorigin-template-settings');
	}
endif;
add_action('after_setup_theme', 'siteorigin_corp_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function siteorigin_corp_content_width()
{
	$GLOBALS['content_width'] = apply_filters('siteorigin_corp_content_width', 1140);
}
add_action('after_setup_theme', 'siteorigin_corp_content_width', 0);

/**
 * Add the viewport tag.
 */
function siteorigin_corp_viewport_tag()
{ ?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<?php }
add_action('wp_head', 'siteorigin_corp_viewport_tag');

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function siteorigin_corp_widgets_init()
{
	register_sidebar(array(
		'name'          => esc_html__('Боковой блок', 'siteorigin-corp'),
		'id'            => 'sidebar-main',
		'description'   => esc_html__('Visible on posts and pages that use the Default or Full Width, With Sidebar layout.', 'siteorigin-corp'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));

	register_sidebar(array(
		'name'          => esc_html__('Подвал', 'siteorigin-corp'),
		'id'            => 'sidebar-footer',
		'description'   => esc_html__('A column will be automatically assigned to each widget inserted', 'siteorigin-corp'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));

	// if ( function_exists( 'is_woocommerce' ) ) {
	// 	register_sidebar( array(
	// 		'name' 			=> esc_html__( 'Магазин', 'siteorigin-corp' ),
	// 		'id' 			=> 'shop-sidebar',
	// 		'description' 	=> esc_html__( 'Displays on WooCommerce pages.', 'siteorigin-corp' ),
	// 		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	// 		'after_widget' 	=> '</aside>',
	// 		'before_title' 	=> '<h2 class="widget-title">',
	// 		'after_title' 	=> '</h2>',
	// 	) );
	// }
}
add_action('widgets_init', 'siteorigin_corp_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function siteorigin_corp_scripts()
{
	// Theme stylesheet.
	wp_enqueue_style('main-style', get_template_directory_uri() . '/style.css', array(), SITEORIGIN_THEME_VERSION);

	// FitVids.
	//wp_enqueue_script('jquery-fitvids', get_template_directory_uri() . '/js/jquery.fitvids' . SITEORIGIN_THEME_JS_PREFIX . '.js', array('jquery'), '1.1', true);

	// Flexslider.
	//wp_register_script('jquery-flexslider', get_template_directory_uri() . '/js/jquery.flexslider' . SITEORIGIN_THEME_JS_PREFIX . '.js', array('jquery'), '2.6.3', true);

	// if (is_home()) {
	//
	wp_enqueue_script('svg-loader', 'https://unpkg.com/external-svg-loader@1.2.1/svg-loader.min.js', array(), null, false);
	// }

	// if (is_home() && siteorigin_corp_has_featured_posts()) {
	// 	wp_enqueue_script('jquery-flexslider');
	// }

	// Jetpack Portfolio.
	// if (post_type_exists('jetpack-portfolio')) {
	// 	wp_register_script('jquery-isotope', get_template_directory_uri() . '/js/isotope.pkgd' . SITEORIGIN_THEME_JS_PREFIX . '.js', array('jquery'), '3.0.4', true);
	// }

	// Theme JavaScript.
	wp_enqueue_script('siteorigin-corp-script', get_template_directory_uri() . '/js/jquery.theme' . SITEORIGIN_THEME_JS_PREFIX . '.js', array('jquery'), SITEORIGIN_THEME_VERSION, true);

	// Mobile Menu Collapse and Sticky Logo Scaling localisation.
	// $logo_sticky_scale = apply_filters('siteorigin_corp_logo_sticky_scale', 0.755);
	// wp_localize_script('siteorigin-corp-script', 'siteoriginCorp', array(
	// 	'collapse' => siteorigin_setting('navigation_mobile_menu_collapse'),
	// 	'logoScale' => is_numeric($logo_sticky_scale) ? $logo_sticky_scale : 0.755,
	// ));

	// Theme icons.
	wp_enqueue_style('siteorigin-corp-icons', get_template_directory_uri() . '/css/siteorigin-corp-icons' . SITEORIGIN_THEME_JS_PREFIX . '.css', array(), SITEORIGIN_THEME_JS_PREFIX);

	// Skip link focus fix.
	wp_enqueue_script('siteorigin-corp-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix' . SITEORIGIN_THEME_JS_PREFIX . '.js', array(), SITEORIGIN_THEME_VERSION, true);

	// Comment reply.
	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'siteorigin_corp_scripts');

/**
 * Enqueue Flexslider.
 */
function siteorigin_corp_enqueue_flexslider()
{
	wp_enqueue_script('jquery-flexslider');
}

/**
 * Enqueue Block Editor styles.
 */
function siteorigin_corp_block_editor_styles()
{
	wp_enqueue_style('siteorigin-corp-block-editor-styles', get_template_directory_uri() . '/style-editor.css', SITEORIGIN_THEME_VERSION);
}
add_action('enqueue_block_editor_assets', 'siteorigin_corp_block_editor_styles');


/**
 * Main Home Menu
 */
require get_template_directory() . '/inc/main-header-menu.php';


/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Jetpack compatibility file.
 */
// if (class_exists('Jetpack')) {
// 	require get_template_directory() . '/inc/jetpack.php';
// }

/**
 * SiteOrigin Settings framework.
 */
require get_template_directory() . '/inc/settings/settings.php';

/**
 * Настройки темы
 */
require get_template_directory() . '/inc/settings.php';

/**
 * Конструктор страниц через файл совместимости SiteOrigin.
 */
if (defined('SITEORIGIN_PANELS_VERSION')) {
	require get_template_directory() . '/inc/siteorigin-panels.php';
}

/**
 * Пользовательские теги шаблонов для этой темы.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Deprecated functions.
 */
require get_template_directory() . '/inc/deprecated.php';


/* IMPORTANT NOTICE: Please don't edit this file; any changes made here will be lost during the theme update process.
If you need to add custom functions, use the Code Snippets plugin (https://wordpress.org/plugins/code-snippets/) or a child theme. */


/**
 * Виджет основная шапка
 */
require get_template_directory() . '/widgets/main-header-hero-widget.php';

/**
 * Виджет новостей
 */
require get_template_directory() . '/widgets/news/news-widget.php';


/**
 * Виджет поступай к нам
 */
//require get_template_directory() . '/widgets/gotocation/gotoaction-widget.php';