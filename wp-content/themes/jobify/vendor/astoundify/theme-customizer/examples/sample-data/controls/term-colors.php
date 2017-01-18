<?php
/**
 * Term Colors
 *
 * Example of assigning a color to a term.
 *
 * @uses $wp_customize
 * @since 1.2.0
 */

if ( ! defined( 'ABSPATH' ) || ! $wp_customize instanceof WP_Customize_Manager ) {
	exit; // Exit if accessed directly.
}

$wp_customize->add_control( new Astoundify_ThemeCustomizer_Control_TermMeta_Color(
	$wp_customize,
	'my-term-colors',
	array(
		'settings' => array(),
		'taxonomy' => 'category',
		'label' => 'Assign colors to terms...',
		'labels' => array(
			'choose' => 'Choose a Color',
			'add' => 'Add',
			'remove' => 'Remove'
		),
		'values' => array( array(
			'id' => 3,
			'label' => 'Some Term', 
			'value' => '#fff000'
		) ),
		'priority' => 999,
		'section' => 'title_tagline'
	) 
) );
