<?php
/*
Plugin Name: Remove Google Fonts
Plugin URI: https://github.com/JustThomas/WordPress-Remove-Google-Fonts
Description: Prevents WordPress from loading Google Fonts
Version: 0.1
Author: Thomas Ulrich
Author URI: https://github.com/JustThomas
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

function tu_remove_google_fonts_css( $url ) {
	$host = parse_url( $url, PHP_URL_HOST );
	if ( $host === 'fonts.googleapis.com' ) {
		return false;
	}
	return $url;
}
add_filter( 'style_loader_src', 'tu_remove_google_fonts_css' );
