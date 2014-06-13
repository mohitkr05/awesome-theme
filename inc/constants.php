<?php
/**
 * Defines constants used by the theme.
 * 
 * @since      1.7
 * @author     Satrya <satrya@satrya.me>
 * @copyright  Copyright (c) 2012 - 2014, Satrya
 * @link       http://satrya.me/wordpress-themes/awesome/
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

/* Do constants setup on the 'after_setup_theme' hook. */
add_action( 'after_setup_theme', 'AWESOME_constants' );

/**
 * Set up the constants for theme usage.
 *
 * @since 0.0.1
 */
function AWESOME_constants() {

	/* Sets the theme version number. */
	define( 'AWESOME_VERSION', 2.0 );

	/* Sets the path to the theme directory. */
	define( 'THEME_DIR', get_template_directory() );

	/* Sets the path to the theme directory URI. */
	define( 'THEME_URI', get_template_directory_uri() );

	/* Sets the path to the includes directory. */
	define( 'AWESOME_INCLUDES', trailingslashit( THEME_DIR ) . 'includes' );

	/* Sets the path to the includes directory. */
	define( 'AWESOME_CLASSES', trailingslashit( AWESOME_INCLUDES ) . 'classes' );

	/* Sets the path to the assets directory. */
	define( 'AWESOME_ASSETS', trailingslashit( THEME_URI ) . 'assets' );

	/* Sets the path to the img directory. */
	define( 'AWESOME_IMAGE', trailingslashit( AWESOME_ASSETS ) . 'img' );

	/* Sets the path to the css directory. */
	define( 'AWESOME_CSS', trailingslashit( AWESOME_ASSETS ) . 'css' );

	/* Sets the path to the js directory. */
	define( 'AWESOME_JS', trailingslashit( AWESOME_ASSETS ) . 'js' );

}
