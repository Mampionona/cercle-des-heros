<?php
/**
 * Theme functions and definitions
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

require_once get_template_directory() . '/includes/assets.php';

/*
 * Set up theme support
 */
if ( ! function_exists( 'hello_elementor_setup' ) ) {
	function hello_elementor_setup() {
		$hook_result = apply_filters_deprecated( 'elementor_hello_theme_load_textdomain', [ true ], '2.0', 'hello_elementor_load_textdomain' );
		if ( apply_filters( 'hello_elementor_load_textdomain', $hook_result ) ) {
			load_theme_textdomain( 'cercle-des-heros', get_template_directory() . '/languages' );
		}

		$hook_result = apply_filters_deprecated( 'elementor_hello_theme_register_menus', [ true ], '2.0', 'hello_elementor_register_menus' );
		if ( apply_filters( 'hello_elementor_register_menus', $hook_result ) ) {
			register_nav_menus( array( 'menu-1' => __( 'Primary', 'cercle-des-heros' ) ) );
		}

		$hook_result = apply_filters_deprecated( 'elementor_hello_theme_add_theme_support', [ true ], '2.0', 'hello_elementor_add_theme_support' );
		if ( apply_filters( 'hello_elementor_add_theme_support', $hook_result ) ) {
			add_theme_support( 'post-thumbnails' );
			add_theme_support( 'automatic-feed-links' );
			add_theme_support( 'title-tag' );
			add_theme_support( 'html5', array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			) );
			add_theme_support( 'custom-logo', array(
				'flex-height' => true,
				'flex-width' => true,
			) );

			/*
			 * Editor Style
			 */
			// add_editor_style( 'editor-style.css' );
		}
	}
}
add_action( 'after_setup_theme', 'hello_elementor_setup' );

/*
 * Theme Scripts & Styles
 */
if ( ! function_exists( 'hello_elementor_scripts_styles' ) ) {
	function hello_elementor_scripts_styles() {
		wp_enqueue_style('cercle-des-heros', asset_path('css/app.css'));
		wp_enqueue_script('cercle-des-heros', asset_path('js/app.js'));
	}
}
add_action( 'wp_enqueue_scripts', 'hello_elementor_scripts_styles' );

/*
 * Register Elementor Locations
 */
if ( ! function_exists( 'hello_elementor_register_elementor_locations' ) ) {
	function hello_elementor_register_elementor_locations( $elementor_theme_manager ) {
		$hook_result = apply_filters_deprecated( 'elementor_hello_theme_register_elementor_locations', [ true ], '2.0', 'hello_elementor_register_elementor_locations' );
		if ( apply_filters( 'hello_elementor_register_elementor_locations', $hook_result ) ) {
			$elementor_theme_manager->register_all_core_location();
		}
	}
}
add_action( 'elementor/theme/register_locations', 'hello_elementor_register_elementor_locations' );
