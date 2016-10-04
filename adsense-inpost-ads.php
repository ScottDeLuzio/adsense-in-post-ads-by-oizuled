<?php
   /*
   Plugin Name: AdSense In-Post Ads
   Plugin URI: https://surpriseazwebservices.com/wordpress-plugins/in-post-google-adsense-wordpress-plugin/
   Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6UHZNUWTHW9W2
   Description: A plugin to display a shortcode to insert your Google AdSense ads inside your posts.
   Version: 1.0.8
   Author: Scott DeLuzio
   Author URI: https://surpriseazwebservices.com
   License: GPL2
   */
   
	/*  Copyright 2016  Scott DeLuzio  (email : scott (at) surpriseazwebservices.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
	*/

/* Settings Page */

// Hook for adding admin menus
add_action('admin_menu', 'oizuled_adsense_add_pages');

// action function for above hook
function oizuled_adsense_add_pages() {
    // Add a new submenu under Settings:
    add_options_page('AdSense In-Post Options','AdSense In-Post', 'manage_options', 'oizuledadsenseinpost', 'oizuled_adsense_settings_page');
}

add_action('admin_init', 'register_oizuled_adsense_settings');

function activate_adsense_inpost() {
  add_option('oizuled-adsense-unit-a', '');
  add_option('oizuled-adsense-unit-b', '');
  add_option('oizuled-adsense-unit-c', '');
}

function deactive_adsense_inpost() {
  delete_option('oizuled-adsense-unit-a');
  delete_option('oizuled-adsense-unit-b');
  delete_option('oizuled-adsense-unit-c');
}

register_activation_hook(__FILE__, 'activate_adsense_inpost');
register_deactivation_hook(__FILE__, 'deactive_adsense_inpost');

function register_oizuled_adsense_settings() {
	register_setting( 'oizuled-adsense-option-group', 'oizuled-adsense-unit-a');
	register_setting( 'oizuled-adsense-option-group', 'oizuled-adsense-unit-b');
	register_setting( 'oizuled-adsense-option-group', 'oizuled-adsense-unit-c');
}

// Display the page content for the AdSense submenu
function oizuled_adsense_settings_page() {
	include(WP_PLUGIN_DIR.'/adsense-in-post-ads-by-oizuled/options.php');  
}

/* Set Shortcodes */
function oizuled_adsense_a() {
if(!isset($oizuledadsense_a)) {
	$oizuledadsense_a = get_option('oizuled-adsense-unit-a');
}
	return $oizuledadsense_a;
}
add_shortcode('AdSense-A', 'oizuled_adsense_a');

function oizuled_adsense_b() {
if(!isset($oizuledadsense_b)) {
	$oizuledadsense_b = get_option('oizuled-adsense-unit-b');
}
	return $oizuledadsense_b;
}
add_shortcode('AdSense-B', 'oizuled_adsense_b');

function oizuled_adsense_c() {
if(!isset($oizuledadsense_c)) {
	$oizuledadsense_c = get_option('oizuled-adsense-unit-c');
}
	return $oizuledadsense_c;
}
add_shortcode('AdSense-C', 'oizuled_adsense_c');

?>