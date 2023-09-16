<?php
/**
* LiquidThemes WooCommerce init
*
*/

if( !defined( 'ABSPATH' ) )
	exit; // Exit if accessed directly

/**
 * Load WooCommerce compatibility files.
 */
require get_template_directory() . '/liquid/vendors/woocommerce/hooks.php';
require get_template_directory() . '/liquid/vendors/woocommerce/functions.php';
require get_template_directory() . '/liquid/vendors/woocommerce/template-tags.php';
require get_template_directory() . '/liquid/vendors/woocommerce/options.php';
require get_template_directory() . '/liquid/vendors/woocommerce/metaboxes.php';

if( apply_filters( 'liquid_ajax_add_to_cart_single_product', true ) ) {

	function liquid_single_woo_scripts() {
		
		
			wp_enqueue_script( 'liquid_add_to_cart_ajax', get_template_directory_uri() . '/liquid/vendors/woocommerce/js/liquid_add_to_cart_ajax.js', array( 'jquery' ), null, true );
			wp_localize_script( 'liquid_add_to_cart_ajax', 'liquid_ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
	
		
	}
	add_action( 'wp_enqueue_scripts', 'liquid_single_woo_scripts' );

}