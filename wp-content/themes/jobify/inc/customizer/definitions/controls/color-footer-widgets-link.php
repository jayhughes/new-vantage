<?php
/**
 * Color: Footer Widgets Link
 *
 * @since 3.5.0
 */

if ( ! defined( 'ABSPATH' ) || ! $wp_customize instanceof WP_Customize_Manager ) {
	exit; // Exit if accessed directly.
}

$wp_customize->add_setting( 'color-footer-widgets-link', array(
	'default' => '#d1d1d1'
) );

$wp_customize->add_control( new WP_Customize_Color_Control(
	$wp_customize,
	'color-footer-widgets-link', 
	array(
		'label'   => __( 'Link', 'jobify' ),
		'section' => 'colors-widgets',
		'priority' => 10
	) 
) );
