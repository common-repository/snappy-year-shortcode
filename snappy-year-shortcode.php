<?php
/**
 * Plugin Name: Snappy Year Shortcode
 * Plugin URI:  https://wordpress.org/plugins/snappy-year-shortcode/
 * Description: The easiest way displaying current year and copyright symbol in your copyright footer text or wherever else you like on your site. Just use shortcodes [Y] for current year and [C] for copyright symbol after plugin activation.
 * Version:     2.0
 * Author:      Robert Ekbauer @miniweblab
 * Author URI:  https://profiles.wordpress.org/miniweblab/
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: snappy-year-shortcode
 */
 
 /*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

Copyright 2019 Robert Ekbauer @miniweblab
 */
 
 // make sure we don't expose any info if called directly
if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

// adding meta links
function mwl_plugin_meta_links( $links, $file ) {
    if ( $file === 'snappy-year-shortcode/snappy-year-shortcode.php' ) {
        $links[] = '<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=robert.ekbauer%40gmail.com&currency_code=USD&source=url" target="_blank" title="' . __( 'Donate to this plugin &#187;' ) . '"><span class="dashicons dashicons-awards"></span> <strong>' . __( 'Donate to this plugin &#187;' ) . '</strong></a>';
    }
    return $links;
}
add_filter( 'plugin_row_meta', 'mwl_plugin_meta_links', 10, 2 );


// the hook
 add_action('init', 'sys_register_shortcode');
 
// registering shortcodes
 function sys_register_shortcode(){
	 add_shortcode('this_year', 'sys_year_shortcode');
	 add_shortcode('Y', 'sys_year_shortcode');
	 add_shortcode('y', 'sys_year_shortcode');
	 add_shortcode('C', 'sys_copy_shortcode');
	 add_shortcode('c', 'sys_copy_shortcode');
	 add_shortcode('cc', 'sys_copy_copyright_shortcode');
	 add_shortcode('CC', 'sys_copy_copyright_shortcode');
	 add_shortcode('CY', 'sys_copy_year_shortcode');
	 add_shortcode('cy', 'sys_copy_year_shortcode');
	 add_shortcode('csy', 'sys_copy_since_year_shortcode');
	 add_shortcode('CSY', 'sys_copy_since_year_shortcode');
	 add_shortcode('CCSY', 'sys_copy_copyright_since_year_shortcode');
	 add_shortcode('ccsy', 'sys_copy_copyright_since_year_shortcode');
 }
 
 // current year
 function sys_year_shortcode(){
	 $output = date('Y');
	 return $output;
 }

 // copyright symbol
 function sys_copy_shortcode(){
	$output = "&copy;";
	return $output;
}

 // copyright symbol & copyright
 function sys_copy_copyright_shortcode(){
	$output = "&copy; Copyright";
	return $output;
}

 // copyright symbol & current year
 function sys_copy_year_shortcode(){
	$output = "&copy; " . date('Y');
	return $output;
}

// since year & current year shortcode
function sys_copy_since_year_shortcode ($args){
	$since = '';
if (isset($args['since'])) $since = (int)$args['since'];
    $output = "&copy; " . $since . "-" . date('Y');
	return $output;
}

// copyright symbol & copyright + since year & current year shortcode
function sys_copy_copyright_since_year_shortcode ($args){
	$since = '';
if (isset($args['since'])) $since = (int)$args['since'];
    $output = "&copy; Copyright " . $since . "-" . date('Y');
	return $output;
}