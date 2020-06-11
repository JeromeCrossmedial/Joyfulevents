<?php
/**
 * --------------------------------------------
 * Enqueue scripts and styles for the backend.
 *
 * @since Faith 1.0.2
 * --------------------------------------------
 */

if ( ! function_exists( 'photoframe_scripts_admin' ) ) {
	/**
	 * Enqueue admin styles and scripts
	 *
	 * @since  1.0.2
	 * @return void
	 */
	function photoframe_scripts_admin( $hook ) {

		// Styles
		wp_enqueue_style(
			'photoframe-style-admin',
			get_template_directory_uri() . '/ilovewp-admin/css/ilovewp_theme_settings.css',
			'', ILOVEWP_VERSION, 'all'
		);
	}
}
add_action( 'admin_enqueue_scripts', 'photoframe_scripts_admin' );

