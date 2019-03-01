<?php
if ( ! function_exists( 'gogoshared_setup_taxonomies' ) ) {
/**
 * Shared Function Setup Taxonomies
 * Creates 'attachment_tag' and 'attachment_category' taxonomies.
 * Enhance via filter `ct_attachment_taxonomies`
 *
 * @uses    register_taxonomy
 * @since   1.0.0
 * @return  void
 */
    function gogoshared_setup_taxonomies() {
        $labels = array(
            'name'              => _x('Media Categories', 'taxonomy general name', 'gogomedia'),
            'singular_name'     => _x('Media Category', 'taxonomy singular name', 'gogomedia'),
            'search_items'      => __('Search Media Categories', 'gogomedia'),
            'all_items'         => __('All Media Categories', 'gogomedia'),
            'parent_item'       => __('Parent Media Category', 'gogomedia'),
            'parent_item_colon' => __('Parent Media Category:', 'gogomedia'),
            'edit_item'         => __('Edit Media Category', 'gogomedia'),
            'update_item'       => __('Update Media Category', 'gogomedia'),
            'add_new_item'      => __('Add New Media Category', 'gogomedia'),
            'new_item_name'     => __('New Media Category Name', 'gogomedia'),
            'menu_name'         => __('Media Categories', 'gogomedia'),
        );
        $args = array(
            'hierarchical'      => TRUE,
            'labels'            => $labels,
            'show_ui'           => TRUE,
            'show_admin_column' => TRUE,
            'query_var'         => TRUE,
            'rewrite'           => TRUE,
        );
        register_taxonomy('attachment_category', 'attachment',  $args );
    }
    add_action('init', 'gogoshared_setup_taxonomies');
}
