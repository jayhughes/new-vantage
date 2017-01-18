<?php
/**
 * Color: Accent
 *
 * @since 3.5.0
 */

if ( ! defined( 'ABSPATH' ) || ! $wp_customize instanceof WP_Customize_Manager ) {
	exit; // Exit if accessed directly.
}

$wp_customize->add_setting( 'color-accent', array(
	'default' => '#7dc246'
) );

$wp_customize->add_control( new WP_Customize_Color_Control(
	$wp_customize,
	'color-accent', 
	array(
		'label'   => __( 'Accent', 'jobify' ),
		'section' => 'colors-global',
		'priority' => 30
	) 
) );
