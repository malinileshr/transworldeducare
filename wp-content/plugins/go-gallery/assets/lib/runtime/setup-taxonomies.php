<?php
/**
 * EMTLY LIB
 * PHP Version 5.5.
 *
 * @see       http://emtly.com/
 *
 * @author    EMTLY <info@emtly.com>
 * @license   https://www.gnu.org/licenses/gpl-3.0.en.html GNU GENERAL PUBLIC LICENSE
 * @note      This program is distributed in the hope that it will be useful - WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or
 * FITNESS FOR A PARTICULAR PURPOSE.
 */
if ( ! function_exists( 'go_setup_taxonomies' ) ) {
/**
 * Setup Taxonomies
 * Creates 'attachment_tag' and 'attachment_category' taxonomies.
 * Enhance via filter `ct_attachment_taxonomies`
 *
 * @uses    register_taxonomy
 * @since   1.0.0
 * @return  void
 */
    function go_setup_taxonomies() {
        $labels = array(
            'name'              => _x('Media Categories', 'taxonomy general name', 'go_gallery'),
            'singular_name'     => _x('Media Category', 'taxonomy singular name', 'go_gallery'),
            'search_items'      => __('Search Media Categories', 'go_gallery'),
            'all_items'         => __('All Media Categories', 'go_gallery'),
            'parent_item'       => __('Parent Media Category', 'go_gallery'),
            'parent_item_colon' => __('Parent Media Category:', 'go_gallery'),
            'edit_item'         => __('Edit Media Category', 'go_gallery'),
            'update_item'       => __('Update Media Category', 'go_gallery'),
            'add_new_item'      => __('Add New Media Category', 'go_gallery'),
            'new_item_name'     => __('New Media Category Name', 'go_gallery'),
            'menu_name'         => __('Media Categories', 'go_gallery'),
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
    add_action('init', 'go_setup_taxonomies');
}
