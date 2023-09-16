<?php
/**
 * Theme functions and definitions
 *
 * @author     ManeshTimilsina
 * @copyright  (c) Copyright by ManeshTimilsina
 * @link       https://wpmanesh.com/
 * @package    Zino
 */

if ( !defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

define( 'ZINO_VERSION', '1.0.4' );
define( 'ZINO_DIR', rtrim( get_template_directory(), '/' ) );
define( 'ZINO_URI', rtrim( get_template_directory_uri(), '/' ) );

// Load autoload.
if ( file_exists( ZINO_DIR . '/vendor/autoload.php' ) ) {
	require_once ZINO_DIR . '/vendor/autoload.php';
}

/*--------------------------------------------------------------
# Theme Supports
--------------------------------------------------------------*/

if ( !function_exists( 'zino_setup' ) ) {
  function zino_setup() {
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'editor-styles' );
    add_theme_support( 'html5', array( 'comment-form', 'comment-list' ) );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'customize-selective-refresh-widgets' );
  }
}

add_action( 'after_setup_theme', 'zino_setup' );

/*--------------------------------------------------------------
# Enqueue Styles
--------------------------------------------------------------*/

if ( !function_exists( 'zino_styles' ) ) {
  function zino_styles() {
    wp_register_style( 'zino-style', ZINO_URI . '/assets/css/style.css' );
    wp_enqueue_style( 'zino-style' );
  }
}

add_action( 'wp_enqueue_scripts', 'zino_styles' );

/**
 * Add admin notice.
 *
 * @since 1.0.2
 */
function zino_add_admin_notice() {
	\Nilambar\AdminNotice\Notice::init(
		array(
			'slug' => 'zino',
			'type' => 'theme',
			'name' => esc_html__( 'Zino', 'zino' ),
		)
	);
}

add_action( 'admin_init', 'zino_add_admin_notice' );

function zino_add_donate_link() {
	echo '<span style="font-weight: bold;"><a href="https://www.buymeacoffee.com/maneshtimilsina" target="_blank">Buy Me a Coffee</a></span>';
}

add_action( 'zino_after_admin_notice_link_items', 'zino_add_donate_link' );
