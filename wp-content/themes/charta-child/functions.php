<?php
/**
 * Charta child functions and definitions
 *
 * @package Charta child
 */

/**
 * Load parent theme styles.
 */
function enqueue_parent_theme_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_parent_theme_styles' );

/**
 * Load child theme styles.
 */
function enqueue_child_theme_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_uri(), array( 'parent-style' ) );
}
add_action( 'wp_enqueue_scripts', 'enqueue_child_theme_styles', 11 );






function enqueue_child_theme_setup() {

	// Set default Post Thumbnail size.
	set_post_thumbnail_size( 1530, 765 );

	// Enqueue editor styles.
	add_editor_style( get_template_directory_uri() . '/style.css' );
}
add_action( 'after_setup_theme', 'enqueue_child_theme_setup' );