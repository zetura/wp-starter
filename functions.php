<?php
/**
 * WP-Starter functions and definitions
 *
 * Sets up the theme and provides some helper functions, which are used
 * in the theme as custom template tags. Others are attached to action and
 * filter hooks in WordPress to change core functionality.
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development and
 * http://codex.wordpress.org/Child_Themes), you can override certain functions
 * (those wrapped in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before the parent
 * theme's file, so the child theme functions would be used.
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are instead attached
 * to a filter or action hook.
 *
 * For more information on hooks, actions, and filters, @link http://codex.wordpress.org/Plugin_API
 *
 * @package WordPress
 * @subpackage WP_Starter
 * @since WP-Starter 3.0
 */

/**
 * Setup WP-Starter's textdomain.
 *
 * Declare a textdomain for WP-Starter.
 * Translations can be filed in the /languages/ directory.
 */
function wpstarter_theme_setup() {
	load_child_theme_textdomain( 'wpstarter', get_stylesheet_directory() . '/language' );
}
add_action( 'after_setup_theme', 'wpstarter_theme_setup' );

/**
 * Enqueue or style sheets and scripts
 */
function wpstarter_style_scripts() {
    wp_dequeue_style('wpforge');
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_uri(), array( 'parent-style' ) );
    wp_enqueue_script( 'child-js', get_stylesheet_directory_uri() . '/js/script.js', array(), '', true );
}
add_action( 'wp_enqueue_scripts', 'wpstarter_style_scripts');
?>