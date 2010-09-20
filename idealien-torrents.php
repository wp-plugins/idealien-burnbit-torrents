<?php
/*
    Plugin Name: Idealien Burnbit Torrents
    Plugin URI: http://idealienstudios.com/projects/torrents/
    Description: .torrent files for your content with burnbit.com to share the load that comes with sharing your media
    Author: Jamie Oastler
    Version: 0.1
    License: GPL
    Author URI: http://idealienstudios.com
    Last change: 19.09.2010 - 12:17am
*/

function idealien_burnbit_shortcode( $atts, $content = null ) {
   extract( shortcode_atts( array(
      'style' => 'normal'
      ), $atts ) );
	
	$output = '<a class="burnbit_torrent"';
	$output .= ' burnbit_file="' . do_shortcode($content) . '"';
	
	if ($style != 'normal' && $style != 'compact' && $style != 'custom') {
		$style == 'normal';
	}
	$output .= ' burnbit_style="' . esc_attr($style) . '">';
	
	if ($style == 'custom') {
		$output .= '<span class="burnbit_seeds"></span>';
		$output .= '<span class="burnbit_peers"></span>';
	}
	
	$output .= '</a><script src="http://api.burnbit.com/js/button.js" type="text/javascript"></script>';
	
	if (is_null($content)) { $output = ''; }
	
	return $output;
}

add_shortcode('burnbit', 'idealien_burnbit_shortcode');

?>