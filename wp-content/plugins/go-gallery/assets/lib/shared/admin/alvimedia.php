<?php
if ( ! function_exists( 'alvimedia_plugin_action_links' ) ) {
/**
 * AlViMedia Shared - Brand Link
 *
 * @param array $args
 * @return array
 */
    function alvimedia_plugin_action_links( $links ) {
        $links[] = '<br /><br /><a target="_blank" href="http://AlViMedia.com/"><u><strong>Check Out More AlViMedia PlugIns</strong></u></a>';
        return $links;
    }
}
