<?php
/**
 * AlViMedia LIB
 * PHP Version 5.5.
 *
 * @see       http://alvimedia.com/
 *
 * @author    Victor G <itconsultsrv@yandex.com>
 * @license   https://www.gnu.org/licenses/gpl-3.0.en.html GNU GENERAL PUBLIC LICENSE
 * @note      This program is distributed in the hope that it will be useful - WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or
 * FITNESS FOR A PARTICULAR PURPOSE.
 */
if ( ! function_exists( 'alvimedia_plugin_action_links' ) ) {
/**
 * AlViMedia Brand Link
 *
 * @param array $args
 * @return array
 */
    function alvimedia_plugin_action_links( $links ) {
        $links[] = '<br /><br /><a target="_blank" href="http://AlViMedia.com/"><u><strong>Check Out More AlViMedia PlugIns</strong></u></a>';
        return $links;
    }
}
