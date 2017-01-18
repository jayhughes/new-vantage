<?php
/**
 * Color: Footer Widgets Background
 *
 * @since 3.5.0
 */

if ( ! defined( 'ABSPATH' ) || ! $wp_customize instanceof WP_Customize_Manager ) {
	exit; // Exit if accessed directly.
}

$wp_customize->add_setting( 'color-footer-widgets-background', array(
	'default' => '#666666'
) );

$wp_customize->add_control( new WP_Customize_Color_Control(
	$wp_customize,
	'color-footer-widgets-background', 
	array(
		'label'   => __( 'Background', 'jobify' ),
		'section' => 'colors-footer-widgets',
		'priority' => 40
	) 
) );
