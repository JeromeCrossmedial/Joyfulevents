<?php
/**
 * @link              http://nilaypatel.info
 * @since             1.0.0
 * @package           Disable_WP_Theme_Updates_Advance
 *
 * @wordpress-plugin
 * Plugin Name:       Disable WP Theme Updates Advance
 * Plugin URI:        http://nilaypatel.info
 * Description:       This plugin disable your all WordPress theme updates on activation
 * Version:           1.0.0
 * Author:            Nilay Patel
 * Author URI:        http://nilaypatel.info
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       disable-wp-theme-updates-advance
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 */
register_activation_hook( __FILE__, 'activate_disable_wp_theme_advance' );

function activate_disable_wp_theme_advance() {
		update_option('DWTUA_activated_on',@date('d-m-Y h:i:s'));
}

/* This code execute once all plugin loaded */
add_action( 'plugins_loaded', 'disable_wp_theme_update_loaded' );

function disable_wp_theme_update_loaded() {
	
	/* Only works for wordpress 3.0+ */
	remove_action( 'load-update-core.php', 'wp_update_themes' );
	add_filter( 'pre_site_transient_update_themes', '__return_null' );

}

/**
 * The code that runs during plugin deactivation.
 */
register_deactivation_hook( __FILE__, 'deactivate_disable_wp_theme_advance' );

function deactivate_disable_wp_theme_advance() {
	update_option('DWTUA_deactivated_on',@date('d-m-Y h:i:s'));
}


