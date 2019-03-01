<?php

if ( ! function_exists( 'ampae_bool' ) ) {
/**
 * My Awesome shared function is awesome
 *
 * @param $args
 * @return value
 */
    function ampae_bool($value){
        return ($value == 'yes' || $value == 'on' || $value == '1');
    }
}

if ( ! function_exists( 'ampae_hex2rgb' ) ) {
/**
 * My Awesome shared function is awesome
 *
 * @param $args
 * @return value
 */
    function ampae_hex2rgb($hex, $alpha = '0.4') {
        $hex = str_replace("#", "", $hex);

        if(strlen($hex) == 3) {
            $r = hexdec(substr($hex,0,1).substr($hex,0,1));
            $g = hexdec(substr($hex,1,1).substr($hex,1,1));
            $b = hexdec(substr($hex,2,1).substr($hex,2,1));
        } else {
            $r = hexdec(substr($hex,0,2));
            $g = hexdec(substr($hex,2,2));
            $b = hexdec(substr($hex,4,2));
        }
        $rgb = array($r, $g, $b);
        return 'rgba(' . join(', ', $rgb) . ', ' . $alpha .')';
    }
}
