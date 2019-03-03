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
    wp_enqueue_script( 'custom-script', get_stylesheet_directory_uri() . '/js/custom_script.js', array( 'jquery' ) );
    $translation_array = array( 'templateUrl' => get_stylesheet_directory_uri() );
	//after wp_enqueue_script
	wp_localize_script( 'custom-script', 'object_img', $translation_array );
}

function add_slug_body_class( $classes ) {
global $post;
if ( isset( $post ) ) {
$classes[] = $post->post_type . '-' . $post->post_name;
}
return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );

?>