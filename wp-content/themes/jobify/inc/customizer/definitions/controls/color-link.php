<?php
/**
 * Color: Link
 *
 * @since 3.5.0
 */

if ( ! defined( 'ABSPATH' ) || ! $wp_customize instanceof WP_Customize_Manager ) {
	exit; // Exit if accessed directly.
}

$wp_customize->add_setting( 'color-link', array(
	'default' => '#000000'
) );

$wp_customize->add_control( new WP_Customize_Color_Control(
	$wp_customize,
	'color-link', 
	array(
		'label'   => __( 'Link', 'jobify' ),
		'section' => 'colors-global',
		'priority' => 50
	) 
) );
