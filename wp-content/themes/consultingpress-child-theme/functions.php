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

function graduates_init() {
    $args = array(
      'label' => 'graduates',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'graduates'),
        'query_var' => true,
        'menu_icon' => 'dashicons-welcome-learn-more',
        'supports' => array(
            'title',
            'thumbnail',

        )
        );
    register_post_type( 'graduates', $args );
}
add_action( 'init', 'graduates_init' );


function kvkoolitus_prices_metabox() {
    add_meta_box( 
        'kvkoolitus_prices_metabox', 
        __( 'Location', 'kvkoolitus'), 
        'kvkoolitus_prices_metabox_callback', 
        'graduates', 
        'normal', 
        'default'
    );
}
add_action( 'add_meta_boxes', 'kvkoolitus_prices_metabox' );

function kvkoolitus_dates_metabox() {
    add_meta_box( 
        'kvkoolitus_dates_metabox', 
        __( 'Passing Year', 'kvkoolitus'), 
        'kvkoolitus_dates_metabox_callback', 
        'graduates', 
        'normal', 
        'default'
    ); 
}
add_action( 'add_meta_boxes', 'kvkoolitus_dates_metabox' );

function kvkoolitus_dates_metabox_callback( $post ) { 

    wp_nonce_field( 'kvkoolitus_dates_metabox_nonce', 'kvkoolitus_dates_nonce' ); ?>

  <?php         
    $duration   = get_post_meta( $post->ID, 'passing_year', true );
  ?>
  <p>
  <label for="passing_year"><?php _e('Year', 'kvkoolitus' ); ?></label><br/> 
  <input type="text" class="widefat" name="passing_year" value="<?php echo esc_attr( $duration ); ?>" />
  </p>

<?php }

function kvkoolitus_prices_metabox_callback( $post ) { 

wp_nonce_field( 'kvkoolitus_prices_metabox_nonce', 'kvkoolitus_prices_nonce' ); ?>

  <?php         
    $price   = get_post_meta( $post->ID, 'branch_location', true );
  ?>

  <p>
  <label for="kvkoolitus_price"><?php _e('Branch Location', 'kvkoolitus' ); ?></label><br/> 
  <input type="text" class="widefat" name="kvkoolitus_price" value="<?php echo esc_attr( $price ); ?>" />
  </p>

<?php }

function kvkoolitus_dates_save_meta( $post_id ) {

  if( !isset( $_POST['kvkoolitus_dates_nonce'] ) || !wp_verify_nonce( $_POST['kvkoolitus_dates_nonce'],'kvkoolitus_dates_metabox_nonce') ) 
    return;

  if ( !current_user_can( 'edit_post', $post_id ))
    return;

  if ( isset($_POST['passing_year']) ) {        
    update_post_meta($post_id, 'passing_year',  sanitize_text_field($_POST['passing_year']));      
  }

}
add_action('save_post', 'kvkoolitus_dates_save_meta');

function kvkoolitus_prices_save_meta( $post_id ) {

  if( !isset( $_POST['kvkoolitus_prices_nonce'] ) || !wp_verify_nonce( $_POST['kvkoolitus_prices_nonce'],'kvkoolitus_prices_metabox_nonce') ) 
    return;

  if ( !current_user_can( 'edit_post', $post_id ))
    return;

  if ( isset($_POST['kvkoolitus_price']) ) {        
    update_post_meta($post_id, 'branch_location', sanitize_text_field($_POST['kvkoolitus_price']));      
  }

}
add_action('save_post', 'kvkoolitus_prices_save_meta');

?>