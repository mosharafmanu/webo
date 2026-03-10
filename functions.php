<?php
/**
 * Enqueue child theme styles.
 */
function webo_enqueue_styles() {
	wp_enqueue_style(
		'webo-style',
		get_stylesheet_uri(),
		[ 'hello-elementor', 'hello-elementor-theme-style' ],
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'webo_enqueue_styles', 20 );