<?php
/**
 * Awesome initial setup and constants
 */
function awesome_setup() {
  // Make theme available for translation
  load_theme_textdomain('awesome', get_template_directory() . '/lang');

  // Register wp_nav_menu() menus (http://codex.wordpress.org/Function_Reference/register_nav_menus)
  register_nav_menus(array(
    'primary_navigation' => __('Primary Navigation', 'awesome'),
  ));

  // Add post thumbnails (http://codex.wordpress.org/Post_Thumbnails)
  add_theme_support('post-thumbnails');

	add_image_size( 'awesome-140px' , 140, 140, true );
	add_image_size( 'awesome-300px' , 300, 130, true );
	add_image_size( 'awesome-700px' , 700, 300, true );
	add_image_size( 'awesome-620px' , 620, 350, true );
	add_image_size( 'awesome-460px' , 460, 300, true );


/**
 * Adds custom image sizes custom name.
 *
 * @since 1.0
 */

    //$sizes['awesome-140px'] = __( 'Small Thumbnail' , 'awesome' );
    //$sizes['awesome-300px'] = __( 'Medium Thumbnail', 'awesome' );
    //$sizes['awesome-700px'] = __( 'Featured'        , 'awesome' );
    //$sizes['awesome-620px'] = __( 'Medium Featured' , 'awesome' );
    //$sizes['awesome-460px'] = __( 'Home Slides'     , 'awesome' );

  // set_post_thumbnail_size(150, 150, false);
  // add_image_size('category-thumb', 300, 9999); // 300px wide (and unlimited height)

  // Add post formats (http://codex.wordpress.org/Post_Formats)
  // add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));

  // Tell the TinyMCE editor to use a custom stylesheet
  add_editor_style('/assets/css/editor-style.css');
}
add_action('after_setup_theme', 'awesome_setup');
