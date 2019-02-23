<?php if ( function_exists( 'add_theme_support' ) )
add_theme_support( 'post-thumbnails' );
function custom_excerpt_length() {
	$length = 80;
	return $length;
}
add_filter('excerpt_length', 'custom_excerpt_length'); ?>