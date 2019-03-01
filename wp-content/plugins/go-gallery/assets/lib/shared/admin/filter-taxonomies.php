<?php
if ( ! function_exists( 'gogoshared_add_image_category_filter' ) && is_admin() ) {
/**
 * ADMIN - Shared Admin function - Add a category filter to images
 *
 * @uses   apply_filters
 * @since   1.0.0
 * @param
 * @void
 */
    function gogoshared_add_image_category_filter() {
        $screen = get_current_screen();
        if ( 'upload' == $screen->id ) {
            $dropdown_options = array (
                'show_option_all' => __( 'View all categories', 'ct' ),
		        'taxonomy' => 'attachment_category',
                'value_field' => 'slug',
                'name' => 'attachment_category',
                'hide_empty' => false,
                'hierarchical' => true,
                'orderby' => 'name',
            );
            wp_dropdown_categories( $dropdown_options );
        }
    }
    add_action( 'restrict_manage_posts', 'gogoshared_add_image_category_filter' );
}
