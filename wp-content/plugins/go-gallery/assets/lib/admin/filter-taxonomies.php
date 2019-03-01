<?php
/**
 * Go Gallery (LTE) - Responsive filterable gallery plugin with media categories. Shortcode driven, easy to use, lightweight yet powerful. Display beautiful galleries without slowing down your page load.
 * PHP Version 5.5.
 *
 * @see       http://alvimedia.com/go-gallery-pro/ Go Gallery PRO
 *
 * @author    Victor G <itconsultsrv@yandex.com>
 * @author    Tim de Jong
 * @license   https://www.gnu.org/licenses/gpl-3.0.en.html GNU GENERAL PUBLIC LICENSE
 * @note      This program is distributed in the hope that it will be useful - WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or
 * FITNESS FOR A PARTICULAR PURPOSE.
 */
if ( ! function_exists( 'go_add_image_category_filter' ) && is_admin() ) {
/**
 * ADMIN - Add a category filter to images
 *
 * @uses   apply_filters
 * @since   1.0.0
 * @param
 * @void
 */
    function go_add_image_category_filter() {
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
    add_action( 'restrict_manage_posts', 'go_add_image_category_filter' );
}
