<?php
/**
 * Customizer helper functions and template tags.
 *
 * @package Jobify
 * @category Customizer
 * @since 3.0.0
 */

/**
 * Return a single theme mod, or its default.
 *
 * @since 3.0.0
 *
 * @param string $key The mod key.
 * @return string $mod The mod.
 */
function jobify_theme_mod( $key, $default = null ) {
	return get_theme_mod( $key, $default );
}

/**
 * Stub until full color packs are implemented
 *
 * @since 3.5.0
 *
 * @param string $key
 * @return string $mod
 */
function jobify_theme_color( $key, $default ) {
	return get_theme_mod( $key, $default );
}
