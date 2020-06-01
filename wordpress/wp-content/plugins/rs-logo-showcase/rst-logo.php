<?php
/*
Plugin Name: RS Logo Showcase
Plugin URI:
Description: Fully Responsive and Mobile Friendly Logo Showcase  plugin for partner, clients, brands and more  with Grid, Slider and Isotope View.
Version: 1.1
Author: rs-theme
Author URI:https://rstheme.com
License: GPLv2 or later
Text Domain: rst-logo
Domain Path: /languages/
*/


/**
langugaes file added
*/
function rstlogo_load_textdomain(){
	load_plugin_textdomain('rst-logo', false, dirname(__FILE__)."/languages");
}
add_action('plugins_loaded', 'rstlogo_load_textdomain');


add_filter( 'plugin_action_links_' . plugin_basename(__FILE__), 'rstlogo_add_action_links' );
function rstlogo_add_action_links ( $links ) {
	$mylinks = array(
		'<a href="http://rstheme.com/plugins/logoshowcase/" target="_blank">Demo</a>',
		'<a href="http://rstheme.com/rs-logo-showcase-doccumentation/" target="_blank">Documentation</a>',
		'<a class="rst-upgrade-pro" href="http://rstheme.com/portfolio/rs-logo-showcase-pro-wordpress-plugin/" target="_blank">Upgrade to Pro</a>',
	);
	return array_merge( $links, $mylinks );
}

//Adding Necessary Files
$dir = plugin_dir_path( __FILE__ );
require('includes/init.php');