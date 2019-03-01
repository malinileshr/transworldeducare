<?php
/**
 * EMTLY Qt LightBox Template
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
if ( ! function_exists( 'qtlb_popup_tmpl_function' ) ) {
    function qtlb_popup_tmpl_function() {
        $content = '<!-- Qt LightBox Template  -->
<div id="qt_popup_lb">
<div class="qt_popup_header">
<span id="qt_popup_close" class="qt-popup-close-button">X</span>
</div>
<div class="qt_popup_body">
<div class="qt_popup_content"></div>
</div>
<div class="qt_popup_footer"></div>
</div>
<!-- End of Qt LightBox Template -->';
        echo $content;
    }
    add_action('wp_footer', 'qtlb_popup_tmpl_function');
}
