<?php
/**
 * Color: Primary
 *
 * @since 3.5.0
 */

if ( ! defined( 'ABSPATH' ) || ! $wp_customize instanceof WP_Customize_Manager ) {
	exit; // Exit if accessed directly.
}

$wp_customize->add_setting( 'color-primary', array(
	'default' => '#7dc246'
) );

$wp_customize->add_control( new WP_Customize_Color_Control(
	$wp_customize,
	'color-primary', 
	array(
		'label'   => __( 'Primary', 'jobify' ),
		'section' => 'colors-global',
		'priority' => 20
	) 
) );
