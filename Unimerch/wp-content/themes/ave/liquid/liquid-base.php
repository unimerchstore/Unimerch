<?php
/**
* LiquidThemes Theme Framework
* The Liquid_Base
*/

if( !defined( 'ABSPATH' ) )
	exit; // Exit if accessed directly

if( !class_exists( 'Liquid_Base' ) ) :
/**
* Liquid Base
*/
class Liquid_Base {

	/**
	 * [add_action description]
	 * @method add_action
	 * @param  [type]     $hook            [description]
	 * @param  [type]     $function_to_add [description]
	 * @param  integer    $priority        [description]
	 * @param  integer    $accepted_args   [description]
	 */
	public function add_action( $hook, $function_to_add, $priority = 10, $accepted_args = 1 ) {
		add_action( $hook, array( &$this, $function_to_add ), $priority, $accepted_args );
	}

	/**
	 * [add_filter description]
	 * @method add_filter
	 * @param  [type]     $tag             [description]
	 * @param  [type]     $function_to_add [description]
	 * @param  integer    $priority        [description]
	 * @param  integer    $accepted_args   [description]
	 */
	public function add_filter( $tag, $function_to_add, $priority = 10, $accepted_args = 1 ) {
		add_filter( $tag, array( &$this, $function_to_add ), $priority, $accepted_args );
	}

	/**
	 * [load_extension description]
	 * @method load_extension
	 * @param  string         $name [description]
	 * @return [type]               [description]
	 */
	public function load_extension( $name = '' ) {

		// check: not empty
		if( !$name ) {
			return;
		}

		// check: if extension exists
		$located = locate_template( "liquid/extensions/{$name}/liquid-{$name}.php", false, false );

		if( !$located ) {
			wp_die( sprintf( wp_kses_post( __( '<strong>Extension Load Fail for:</strong> %1$s<br>No such file "%2$s" exists.', 'ave' ) ), strtoupper( $name ), "liquid/extensions/{$name}/liquid-{$name}.php" ), esc_html__( 'Load Extension', 'ave' ), null );
			return;
		}

		require $located;
	}
}

endif;

// Helper Function ---------------------------------------

if( ! function_exists( 'liquid_action' ) ) :
	function liquid_action() {

		$args   = func_get_args();

		if( !isset( $args[0] ) || empty( $args[0] ) ) {
			return;
		}

		$action = 'liquid_' . $args[0];
		unset( $args[0] );

		do_action_ref_array( $action, $args );
	}
endif;
