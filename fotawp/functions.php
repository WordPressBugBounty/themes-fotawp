<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Define theme constants and functions.
 */

define( 'FOTAWP_VERSION', wp_get_theme()->get( 'Version' ) );
define( 'FOTAWP_DEBUG', defined( 'WP_DEBUG' ) && WP_DEBUG === true );
define( 'FOTAWP_DIR', trailingslashit( get_template_directory() ) );
define( 'FOTAWP_URL', trailingslashit( get_template_directory_uri() ) );

if ( ! function_exists( 'fotawp_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since fotawp 1.0.0
	 *
	 * @return void
	 */
	function fotawp_support() {
		load_theme_textdomain( 'fotawp', get_template_directory() . '/languages' );
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'post-thumbnails' );
		// Enqueue editor styles.
		add_editor_style( 'style.css' );
		// Removing default patterns.
		remove_theme_support( 'core-block-patterns' );
	}

endif;
add_action( 'after_setup_theme', 'fotawp_support' );



/*
----------------------------------------------------------------------------------
Enqueue Styles
-----------------------------------------------------------------------------------*/
if ( ! function_exists( 'fotawp_styles' ) ) :
	function fotawp_styles() {
		// registering style for theme
		wp_enqueue_style( 'fotawp-style', get_stylesheet_uri(), array(), FOTAWP_VERSION );
		wp_enqueue_style( 'fotawp-aos-style', get_template_directory_uri() . '/assets/css/aos.css', array(), FOTAWP_VERSION );
		if ( is_rtl() ) {
			wp_enqueue_style( 'rtl-css', get_template_directory_uri() . '/assets/css/rtl.css', 'rtl_css', array(), FOTAWP_VERSION );
		}
		// registering js for theme
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'fotawp-aos-scripts', get_template_directory_uri() . '/assets/js/aos.js', array(), FOTAWP_VERSION, true );
		wp_enqueue_script( 'fotawp-scripts', get_template_directory_uri() . '/assets/js/fotawp-scripts.js', array(), FOTAWP_VERSION, true );
	}
endif;

add_action( 'wp_enqueue_scripts', 'fotawp_styles' );

/**
 * Enqueue assets scripts for both backend and frontend
 */
function fotawp_block_assets() {
	wp_enqueue_style( 'fotawp-blocks-style', get_template_directory_uri() . '/assets/css/blocks.css', array(), FOTAWP_VERSION );
}
add_action( 'enqueue_block_assets', 'fotawp_block_assets' );
/**
 * Load core file.
 */
require_once get_template_directory() . '/inc/core/init.php';

/**
 * Load welcome page file.
 */
function fotawp_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'fotawp_add_woocommerce_support' );

function fotawp_premium_access() {
	$status = false;

	if ( function_exists( 'cozy_addons_premium_access' ) ) {
		$status = cozy_addons_premium_access();
	}

	return $status;
}

function fotawp_is_plugin_installed( $plugin_slug ) {
	$plugin_path = WP_PLUGIN_DIR . '/' . $plugin_slug;
	return file_exists( $plugin_path );
}
function fotawp_is_plugin_activated( $plugin_slug ) {
	return is_plugin_active( $plugin_slug );
}

/* Admin init */
if ( is_admin() ) {
	require_once FOTAWP_DIR . 'admin/class-admin.php';
	FotaWP_Admin::get_instance();
}
