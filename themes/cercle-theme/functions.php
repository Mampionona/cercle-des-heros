<?php
/**
 * Theme functions and definitions
 *
 */

if ( ! defined('ABSPATH') ) {
	exit; // Exit if accessed directly
}

require_once get_template_directory() . '/includes/assets.php';
require_once get_template_directory() . '/includes/customizer.php';
require_once get_template_directory() . '/includes/nav-walker.php';

/*
 * Set up theme support
 */
if ( ! function_exists('hello_elementor_setup')) {
	function hello_elementor_setup() {
		$hook_result = apply_filters_deprecated('elementor_hello_theme_load_textdomain', [true], '2.0', 'hello_elementor_load_textdomain');
		if ( apply_filters('hello_elementor_load_textdomain', $hook_result)) {
			load_theme_textdomain('cercle-des-heros', get_template_directory() . '/languages');
		}

		$hook_result = apply_filters_deprecated('elementor_hello_theme_register_menus', [true], '2.0', 'hello_elementor_register_menus');
		if (apply_filters('hello_elementor_register_menus', $hook_result)) {
			register_nav_menus(array(
				'primary' => __('Primary', 'cercle-des-heros'),
				'footer' => __('Footer', 'cercle-des-heros')
			));
		}

		$hook_result = apply_filters_deprecated('elementor_hello_theme_add_theme_support', [true], '2.0', 'hello_elementor_add_theme_support');
		if ( apply_filters('hello_elementor_add_theme_support', $hook_result) ) {
			add_theme_support('post-thumbnails');
			add_theme_support('automatic-feed-links');
			add_theme_support('title-tag');
			add_theme_support('html5', array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			));
			add_theme_support('custom-logo', array(
				'flex-height' => true,
				'flex-width' => true,
			));

			/*
			 * Editor Style
			 */
			// add_editor_style( 'editor-style.css' );
		}
	}
}
add_action('after_setup_theme', 'hello_elementor_setup');

/*
 * Theme Scripts & Styles
 */
if ( ! function_exists('hello_elementor_scripts_styles')) {
	function hello_elementor_scripts_styles() {
		wp_enqueue_style('cercle-des-heros', asset_path('css/app.css'));
		wp_enqueue_script('cercle-des-heros', asset_path('js/app.js'));
	}
}
add_action('wp_enqueue_scripts', 'hello_elementor_scripts_styles');

/*
 * Register Elementor Locations
 */
if (!function_exists( 'hello_elementor_register_elementor_locations')) {
	function hello_elementor_register_elementor_locations($elementor_theme_manager) {
		$hook_result = apply_filters_deprecated('elementor_hello_theme_register_elementor_locations', [true], '2.0', 'hello_elementor_register_elementor_locations');
		if ( apply_filters('hello_elementor_register_elementor_locations', $hook_result)) {
			$elementor_theme_manager->register_all_core_location();
		}
	}
}

add_action('elementor/theme/register_locations', 'hello_elementor_register_elementor_locations');

function setupOnePage($current_page_id) {
	$args = array('post_type' => 'page');

	// checking menu exist in location "primary"
	if (($locations = get_nav_menu_locations()) && $locations['primary']) {
		$menu = wp_get_nav_menu_object($locations['primary']);
		$menu_items = wp_get_nav_menu_items($menu->term_id);

		$post_ids = array();
		foreach ($menu_items as $items) {
			if ($items->object == 'page') $post_ids[] = $items->object_id;
		}

		$args = array('post_type' => 'page', 'post__in' => $post_ids, 'posts_per_page' => count($post_ids), 'orderby' => 'post__in');
	}

	return new WP_Query($args);
}

add_filter('one_page', 'setupOnePage');

// Register sidebars
function widgets_init() {
  register_sidebar(array(
		'name'          => __('Footer', 'cercle-des-heros'),
    'id'            => 'sidebar-footer',
    'before_widget' => '<section class="col-xl footer-menu widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h4 class="widget-title">',
    'after_title'   => '</h4>'
	));
}

add_action('widgets_init', 'widgets_init');

add_action('after_setup_theme', 'wpdocs_theme_setup');
function wpdocs_theme_setup() {
  add_image_size('vision-thumb', 2242, 732, true);
  add_image_size('expertise-thumb', 2242, 682, true);
  add_image_size('offre-thumb', 517, 285, true);
  add_image_size('equipe-thumb', 386, 423, true);
  add_image_size('expert-thumb', 675, 807, true);
  add_image_size('blog-thumb', 1088, 400, true);
  add_image_size('blog-large', 1920, 1200, true);
}

function excerptMore() {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Lire plus', 'cercle-des-heros') . '</a>';
}

add_filter('excerpt_more', 'excerptMore');

function bodyClass($classes) {
  if (!is_front_page()) {
		$classes[] = 'internal-pages';
	}
  return $classes;
}

add_filter('body_class', 'bodyClass');
