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
function go_gallery_shortcode($atts, $content = null) 
{
    $atts = shortcode_atts(array(
        'cat' => '',
        'menu_show' => '1',
        'menu_pos' => 'center',
        'lightbox' => 'yes',
        'limit' => 20,
        'border_size' => 5,
        'border_color' => '#fff',
        'overlay_color' => '#fff',
        'menu_button' => 'All',
        'menu_color' => '#fff',
        'menu_bg' => '#000',
        'menu_bg_hover' => '#aaa',
        'menu_gap' => 4,
        'hover_data' => 'yes',
        'bg' => '#eee',
        'desc_color' => '#000',
        'gap' => 10,
        'style' => 'normal',
        'size' => 'medium'
    ) , $atts, 'go_gallery');
    
    $args = array(
        'post_type' => 'attachment',
        'post_status' => 'inherit',
        'posts_per_page' => $atts['limit'],
        'order' => 'DESC',
        'orderby' => 'modified',
        'post_mime_type' => 'image/jpeg,image/gif,image/jpg,image/png'
    );
    
    add_filter( 'wp_calculate_image_srcset', '__return_false' );
    
    $thumb_size = 'large';
    
    $categories = array();
    
    $atts['cat'] = array_map('sanitize_title', explode(',', $atts['cat']));
    
    foreach($atts['cat'] as $category) {
        if ($term = get_term_by('slug', $category, 'attachment_category')) {
            $categories[$term->term_id] = $term;
        }
    }

    if (!empty($categories)) {
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'attachment_category',
                'field' => 'term_id',
                'terms' => array_keys($categories)
            )
        );
    }

    $atts['menu_gap'] = min($atts['menu_gap'], 100);
    
    $classes[] = 'go-gallery';
    $classes[] = 'menu-' . $atts['menu_pos'];
    $classes[] = alvimedia_bool($atts['menu_show']) ? 'menu-show' : '';
    $classes[] = 'size-' . $atts['size'];
    $classes[] = 'style-' . $atts['style'];
    
    $attributes = array();
    
    $attributes['class'] = join(' ', $classes);
    $attributes['id'] = 'go-' . substr(md5(mt_rand(0, PHP_INT_MAX)) , 0, 6);
    $attributes['data-gap'] = intval($atts['gap']);
    $attributes['data-border-color'] = $atts['border_color'];
    $attributes['data-lightbox'] = alvimedia_bool($atts['lightbox']) ? 'yes' : 'no';
    $attributes['data-desc-color'] = $atts['desc_color'];
    $attributes['data-menu-color'] = $atts['menu_color'];
    $attributes['data-menu-bg'] = $atts['menu_bg'];
    $attributes['data-menu-bg-hover'] = $atts['menu_bg_hover'];
    $attributes['data-menu-gap'] = $atts['menu_gap'];
    $attributes['data-bg'] = $atts['bg'];
    $attributes['data-border-size'] = $atts['border_size'];
    $attributes['data-overlay-color'] = alvimedia_hex2rgb($atts['overlay_color']);
    
    foreach($attributes as $attribute => $value) {
        $attributes[$attribute] = $attribute . '="' . $value . '"';
    }

//    $thumb_size = 'medium';
//    if ($atts['size'] == 'large' || ($atts['style'] == 'squared' && in_array($atts['size'], array('medium', 'large')))) {}

    $query = new WP_Query($args);

    $output = '';
    $output.= '<div ' . join(' ', $attributes) . '>';
    $output.= '<ul class="go-gallery-filters">';
    $output.= '<li>';
    $output.= '<a data-filter="" href="#">' . __($atts['menu_button'], 'go_gallery') . '</a>';
    $output.= '</li>';
    
    foreach($categories as $category) {
        if (!empty($category)) {
            $output.= '<li>';
            $output.= '<a data-filter="' . $category->slug . '" href="#">' . $category->name . '</a>';
            $output.= '</li>';
        }
    }

    $output.= '</ul>';
    $output.= '<div class="go-gallery-list-wrapper">';
    $output.= '<ul class="go-gallery-list">';
    
    foreach($query->posts as $post) {
    
        $category_terms = wp_get_post_terms($post->ID, 'attachment_category');
        $classes = array();
        $classes[] = 'go-gallery-item';
        $classes[] = 'qt-lightbox';
        
        foreach($category_terms as $category_term) {
            $classes[] = 'category-' . $category_term->slug;
        }

        $image_source = wp_get_attachment_image_src($post->ID, 'full');
        
        $output.= '<li data-source="' . $image_source[0] . '"';
        
        if (alvimedia_bool($atts['hover_data'])) {
            $output.= ' title="' . $post->post_title . '" ';
            $output.= ' desc="' . $post->post_content . '" ';
        }

        $output.= ' class="' . join(' ', $classes) . '">';
        $output.= '<a class="image-wrap" href="' . $image_source[0] . '">';
        $output.= '<figure>';
        
        $output.= wp_get_attachment_image($post->ID, $thumb_size);
        
        $output.= '<div class="image-overlay">';
        
        if (alvimedia_bool($atts['hover_data'])) {
            $output.= '<h3>' . $post->post_title . '</h3>';
            $output.= '<h4>' . $post->post_content . '</h4>';
        }

        $output.= '</div>';
        $output.= '</figure>';
        $output.= '</a>';
        $output.= '</li>';
    }

    $output.= '</ul>';
    $output.= '</div>';
    $output.= '</div>';
    
    return $output;
}
add_shortcode('go_gallery', 'go_gallery_shortcode');
