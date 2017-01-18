<?php
/**
 * Color: CTA Background
 *
 * @since 3.5.0
 */

if ( ! defined( 'ABSPATH' ) || ! $wp_customize instanceof WP_Customize_Manager ) {
	exit; // Exit if accessed directly.
}

$wp_customize->add_setting( 'color-cta-background', array(
	'default' => '#7dc246'
) );

$wp_customize->add_control( new WP_Customize_Color_Control(
	$wp_customize,
	'color-cta-background', 
	array(
		'label'   => __( 'Background', 'jobify' ),
		'section' => 'colors-cta',
		'priority' => 20
	) 
) );
