<?php
/**
 * Basic Astoundify ThemeCustomizer integration.
 */

$lib = dirname( dirname( __FILE__ ) );

// require the library
// include_once( $lib . '/astoundify-themecustomizer.php' );

// load the customizer
astoundify_themecustomizer( array(
	// the handle of the stylesheet inline styles should be attached to
	'stylesheet' => 'astoundify', 

	// the url of where the library is located
	'install_url' => plugin_dir_url( $lib . '/astoundify-themecustomizer.php' ) . '/app',

	// the dir of where the library is located
	'install_dir' => $lib,

	// the path of where definitions are located
	'definitions_dir' => $lib . '/examples/sample-data'
) );
