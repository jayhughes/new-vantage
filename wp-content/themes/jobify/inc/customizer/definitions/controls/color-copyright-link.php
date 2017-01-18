<?php
/**
 * Color: Copyright Link
 *
 * @since 3.5.0
 */

if ( ! defined( 'ABSPATH' ) || ! $wp_customize instanceof WP_Customize_Manager ) {
	exit; // Exit if accessed directly.
}

$wp_customize->add_setting( 'color-copyright-link', array(
	'default' => '#b2b2b2'
) );

$wp_customize->add_control( new WP_Customize_Color_Control(
	$wp_customize,
	'color-copyright-link', 
	array(
		'label'   => __( 'Link', 'jobify' ),
		'section' => 'colors-footer-copyright',
		'priority' => 10
	) 
) );
