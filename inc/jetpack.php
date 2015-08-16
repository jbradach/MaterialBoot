<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.me/
 *
 * @package Material Boot
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function materialboot_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'materialboot_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function materialboot_jetpack_setup
add_action( 'after_setup_theme', 'materialboot_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function materialboot_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function materialboot_infinite_scroll_render
