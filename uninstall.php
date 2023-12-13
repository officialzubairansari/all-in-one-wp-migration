<?php
require_once dirname( __FILE__ ) .
	DIRECTORY_SEPARATOR .
	'all-in-one-wp-migration.php';

/**
 * Trigger Uninstall process only if WP_UNINSTALL_PLUGIN is defined
 */
if ( defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	global $wpdb, $wp_filesystem;

	// Delete any options or other data stored in the database here
	delete_option( AI1WM_STATUS );
	delete_option( AI1WM_SECRET_KEY );
	delete_option( AI1WM_AUTH_USER );
	delete_option( AI1WM_AUTH_PASSWORD );
}
