<?php
/*
 * Child theme
 *	
 * Add custom scripts and code to this file.
*/

add_action( 'wp_enqueue_scripts', 'wpsites_second_style_sheet', 17, 3 );
function wpsites_second_style_sheet() {
    wp_register_style( 'custom-style', get_stylesheet_directory_uri() .'/custom-style.css', array(), '20130608');
    wp_enqueue_style( 'custom-style' );     
}
	
?>