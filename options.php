<?php
/**
 * Custom Option Framework file.
 *
 * @since      0.0.1
 * @author     Satrya <satrya@satrya.me>
 * @copyright  Copyright (c) 2012 - 2014, Satrya
 * @link       http://satrya.me/wordpress-themes/awesome/
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

function optionsframework_option_name() {

	/* This gets the theme name from the stylesheet. */
	$themename = wp_get_theme();
	$themename = preg_replace("/\W/", "_", strtolower($themename) );

	$optionsframework_settings       = get_option( 'optionsframework' );
	$optionsframework_settings['id'] = $themename;

	update_option( 'optionsframework', $optionsframework_settings );
}

/**
 * Returns a select list of Google fonts
 * Feel free to edit this, update the fallbacks, etc.
 */
function options_typography_get_google_fonts() {
	// Google Font Defaults
	$google_faces = array(
		'Arvo, serif' => 'Arvo',
		'Copse, sans-serif' => 'Copse',
		'Droid Sans, sans-serif' => 'Droid Sans',
		'Droid Serif, serif' => 'Droid Serif',
		'Lobster, cursive' => 'Lobster',
		'Nobile, sans-serif' => 'Nobile',
		'Open Sans, sans-serif' => 'Open Sans',
		'Oswald, sans-serif' => 'Oswald',
		'Pacifico, cursive' => 'Pacifico',
		'Rokkitt, serif' => 'Rokkit',
		'PT Sans, sans-serif' => 'PT Sans',
		'Quattrocento, serif' => 'Quattrocento',
		'Raleway, cursive' => 'Raleway',
		'Ubuntu, sans-serif' => 'Ubuntu',
		'Yanone Kaffeesatz, sans-serif' => 'Yanone Kaffeesatz'
	);
	return $google_faces;
}


/**
 * Defines an array of options that will be used to generate the 
 * settings page and be saved in the database.
 *
 * @since 1.0
 */
function optionsframework_options() {
	
	/* Image path. */
	$layoutpath  =  trailingslashit( AWESOME_IMAGE ) . 'layouts/';
	$patternpath =  trailingslashit( AWESOME_IMAGE ) . 'bg/';
	
	/* Create an array of background options. */
	$background = array(
		'color'      => '',
		'image'      => '',
		'repeat'     => 'repeat',
		'position'   => 'top center',
		'attachment' =>'scroll' 
	);
	
	/* Create an array of select options. */
	$select = array(
		'enable'  => __( 'Enable' , 'awesome' ), 
		'disable' => __( 'Disable', 'awesome' ) 
	);

	/* Create an array of pattern options. */
	$patterns = array(
		'pattern-0'  => $patternpath . '0.png',
		'pattern-1'  => $patternpath . '1.png',
		'pattern-2'  => $patternpath . '2.png',
		'pattern-3'  => $patternpath . '3.png',
		'pattern-4'  => $patternpath . '4.png',
		'pattern-5'  => $patternpath . '5.jpg',
		'pattern-6'  => $patternpath . '6.jpg',
		'pattern-7'  => $patternpath . '7.png',
		'pattern-8'  => $patternpath . '8.png',
		'pattern-9'  => $patternpath . '9.png',
		'pattern-10' => $patternpath . '10.png'
	);
		
	/* Empty array */
	$options = array();

	$options[] = array( 
		'name' => __( 'Welcome', 'awesome' ),
		'type' => 'heading'
	);

	$options[] = array(
		'name' => 'About Us',
		'desc' => '',
		'type' => 'info'
	);
	
	/* Start GENERAL settings. */
	$options[] = array( 
		'name' => __( 'General', 'awesome' ),
		'type' => 'heading'
	);
								
	$options[] = array( 
		'name' => __( 'Custom Favicon', 'awesome' ),
		'desc' => __( 'Upload a favicon for your website, or specify the image address of your online favicon. (http://example.com/favicon.png)', 'awesome' ),
		'id'   => 'awesome_custom_favicon',
		'type' => 'upload'
	);
						
	$options[] = array( 
		'name'    => __( 'Iframe Blocker', 'awesome' ),
		'desc'    => __( 'Iframe blocker is for block iframe to your site such as google image.', 'awesome' ),
		'id'      => 'awesome_iframe_blocker',
		'std'     => 'disable',
		'type'    => 'select',
		'options' => $select
	);

	$options[] = array( 
		'name' => __( 'Disable credit links', 'awesome' ),
		'desc' => __( 'Are you sure want to disable the credit link for WordPress and theme author?', 'awesome' ),
		'id'   => 'awesome_credits',
		'type' => 'checkbox'
	);
						
	/* ============================== End General Settings ================================= */	
	
	/* ============================== Start featured content Settings ================================= */					
	$options[] = array( 
		'name' => __( 'Featured', 'awesome' ),
		'type' => 'heading'
	);
	
	$options[] = array( 
		'name' => __( 'Featured Image 1', 'awesome' ),
		'desc' => __( 'Upload a featured image for the front page slider' , 'awesome' ),
		'id'   => 'awesome_featured_image_a',
		'type' => 'upload'
	);
	$options[] = array( 
		'name' => __( 'Featured Image 2', 'awesome' ),
		'desc' => __( 'Upload a featured image for the front page slider' , 'awesome' ),
		'id'   => 'awesome_featured_image_b',
		'type' => 'upload'
	);
	$options[] = array( 
		'name' => __( 'Featured Image 3', 'awesome' ),
		'desc' => __( 'Upload a featured image for the front page slider' , 'awesome' ),
		'id'   => 'awesome_featured_image_c',
		'type' => 'upload'
	);
	
	$options[] = array( 
		'name' => __( 'Featured Image 1 content', 'awesome' ),
		'desc' => __( 'Add the content for featured image', 'awesome' ),
		'id'   => 'awesome_featured_content_a',
		'type' => 'textarea'
	); 		 	 

	$options[] = array( 
		'name' => __( 'Featured Image 2 content', 'awesome' ),
		'desc' => __( 'Add the content for featured image', 'awesome' ),
		'id'   => 'awesome_featured_content_b',
		'type' => 'textarea'
	);
		$options[] = array( 
		'name' => __( 'Featured Image 3 content', 'awesome' ),
		'desc' => __( 'Add the content for featured image', 'awesome' ),
		'id'   => 'awesome_featured_content_c',
		'type' => 'textarea'
	);
	
	/* ============================== End Featured slider Settings ================================= */					
	$options[] = array( 
		'name' => __( 'Theme', 'awesome' ),
		'type' => 'heading'
	);
	
	$options[] = array( 
		'name'    => __( 'Bootswatch Themes', 'awesome' ),
		'desc'    => __( 'Select the Bootswatch themes', 'awesome' ),
		'id'      => 'awesome_bootswatch',
		'std'     => 'cosmo',
		'type'    => 'images',
		'options' => array(
			'amelia'  => $layoutpath . 'bs1.png',
			'cerulean'  => $layoutpath . 'bs2.png',
			'cosmo' => $layoutpath . 'bs3.png',
			'cyborg' => $layoutpath . 'bs4.png',
			'darkly' => $layoutpath . 'bs5.png',
			'flatly' => $layoutpath . 'bs6.png',
			'journal' => $layoutpath . 'bs7.png',
			'lumen' => $layoutpath . 'bs8.png',
			'readable' => $layoutpath . 'bs9.png',
			'simplex' => $layoutpath . 'bs10.png',
			'slate' => $layoutpath . 'bs11.png',
			'spacelab' => $layoutpath . 'bs12.png',
			'superhero' => $layoutpath . 'bs13.png',
			'united' => $layoutpath . 'bs14.png',
			'yeti' => $layoutpath . 'bs15.png'
		)
	);
						
	$options[] = array( 
		'name'    => __( 'Global Layouts', 'awesome' ),
		'desc'    => __( 'Left content, right content or one column', 'awesome' ),
		'id'      => 'awesome_layouts',
		'std'     => 'lcontent',
		'type'    => 'images',
		'options' => array(
			'lcontent'  => $layoutpath . '2cr.png',
			'rcontent'  => $layoutpath . '2cl.png',
			'onecolumn' => $layoutpath . '1col.png',
		)
	);
	
	
	$options[] = array( 
		'name'    => __( 'Content Layouts', 'awesome' ),
		'desc'    => __( 'Fixed or Fluid layouts', 'awesome' ),
		'id'      => 'awesome_content_layouts',
		'std'     => 'content_fixed',
		'type'    => 'images',
		'options' => array(
			'fixed' => $layoutpath . 'l-mag.png',
			'fluid'  => $layoutpath . 'l-standard.png'
		)
	);

	$options[] = array( 
		'name'    => __( 'Home Page Layouts', 'awesome' ),
		'desc'    => __( 'Two columns or one column', 'awesome' ),
		'id'      => 'awesome_home_layouts',
		'std'     => 'one-col',
		'type'    => 'images',
		'options' => array(
			'two-cols' => $layoutpath . 'l-mag.png',
			'one-col'  => $layoutpath . 'l-standard.png'
		)
	);
	
	$options[] = array( 
		'name'    => __( 'Background Pattern', 'awesome' ),
		'desc'    => __( 'Available background pattern to customize your site', 'awesome' ),
		'id'      => 'awesome_pattern',
		'std'     => 'pattern-0',
		'type'    => 'images',
		'options' => $patterns
	);
	
	/* ============================== End Theme Settings ================================= */	
	
	$options[] = array( 
		'name' => __( 'Typography', 'awesome' ),
		'type' => 'heading'
	);
/*
	$options[] = array( 
		'name' => __( 'Disable custom typography', 'awesome' ),
		'desc' => __( 'Disable custom typography and use theme defaults.', 'awesome' ),
		'id'   => 'awesome_disable_typography',
		'std'  => true,
		'type' => 'checkbox' 
	);


	$options[] = array( 'name' => 'Selected Google Fonts',
	'desc' => 'Fifteen of the top google fonts.',
	'id' => 'google_font',
	'std' => array( 'size' => '36px', 'face' => 'Rokkitt, serif', 'color' => '#00bc96'),
	'type' => 'typography',
	'options' => array(
		'faces' => options_typography_get_google_fonts(),
		'styles' => false )
	);*/
	$options[] = array( 
		'name'    => __( 'Content typography', 'awesome' ),
		'desc'    => __( 'This font is used for content text.', 'awesome' ),
		'id'      => 'awesome_content_font',	
		'std'     => array('size' => '13px','face' => '"Open Sans", sans-serif', 'color' => '#333333' ),
		'type'    => 'typography',	
		'options' => array(
			'sizes' => array( '12','13','14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24' ),
			'faces' => options_typography_get_google_fonts(),
			'styles' => array( 'normal' => 'Normal', 'bold' => 'Bold' )
		)
	);

	$options[] = array( 
		'name'    => __( 'Content heading typography', 'awesome' ),
		'desc'    => __( 'Select the headline font (h1,h2,h3 etc)', 'awesome' ),
		'id'      => 'awesome_heading_font',
		'std'     => array('size' => '13px','face' => '"Francois One", sans-serif', 'color' => '#333333' ),
		'type'    => 'typography',
		'options' => array(
			'sizes' => false,
			'faces' => options_typography_get_google_fonts(),
			'styles' => array( 'normal' => 'Normal',  'bold' => 'Bold' )
		)
	);

	/* ============================== End Typography Settings ================================= */

	$options[] = array( 
		'name' => __( 'Page', 'awesome' ),
		'type' => 'heading'
	);
						
	$options[] = array( 
		'name' => __( 'Display author box', 'awesome' ),
		'desc' => __( 'Check this option if you want display the author box on single posts', 'awesome' ),
		'id'   => 'awesome_author_box',
		'type' => 'checkbox'
	);

	/* ============================== End Page Settings ================================= */

	$options[] = array( 
		'name' => __( 'Custom Code', 'awesome' ),
		'type' => 'heading'
	);

	$options[] = array( 
		'name' => __( 'Custom CSS', 'awesome' ),
		'desc' => __( 'Quickly add some CSS to your theme by adding it to this block.', 'awesome' ),
		'id'   => 'awesome_custom_css',
		'std'  => '',
		'type' => 'textarea'
	); 
						
	$options[] = array( 
		'name' => __( 'Header Code', 'awesome' ),
		'desc' => __( 'Add any custom script like the meta verification from various search engine. It will be inserted before the closing head tag of your theme', 'awesome' ),
		'id'   => 'awesome_header_code',
		'type' => 'textarea'
	); 	
						
	$options[] = array( 
		'name' => __( 'Footer Code', 'awesome' ),
		'desc' => __( 'Add your analytic code or you can add any custom script here. It will be inserted before the closing body tag of your theme', 'awesome' ),
		'id'   => 'awesome_footer_code',
		'type' => 'textarea'
	); 		 	 

	/* ============================== End Custom Code Settings ================================= */

	return $options;
	
}
?>
