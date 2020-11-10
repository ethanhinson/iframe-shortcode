<?php

/**
 * @package iframe-shortcode
 * @version 0.1
 */
/*
Plugin Name: Iframe Shortcode
Plugin URI: https://github.com/ethanhinson/iframe-shortcode
Description: Display iframes with a shortcode.
Author: developers@ethanhinsondesign.com
Version: 0.1
Author URI: https://github.com/ethanhinson
*/

function iframe_render($atts = []) {
    $a = shortcode_atts([
      'url' => '',
    ], $atts );

    if(!$a['url']) {
      return "Iframe shortcode: A a 'URL' attribute is required";
    }
    
    return "<iframe src=\"{$a['url']}\"></iframe>";
}

add_shortcode('iframe', 'iframe_render');
