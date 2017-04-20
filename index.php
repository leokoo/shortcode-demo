<?php
/*
Plugin Name: WPShout Demo Shortcode
*/

add_shortcode( 'wpshout_demo_shortcode', 'wpshout_color_demo_shortcode' );

// The shortcode handler function
function wpshout_color_demo_shortcode( $attributes, $content = '' ) {
	$attributes = shortcode_atts( array( 
		'background' => 'gold',
		'color' => 'blue'
	), $attributes, 'wpshout_color_demo_shortcode' );

	return '<p style="background: ' . $attributes['background'] . '; color: ' . $attributes['color'] . ';">' . $content . '</p>';
}