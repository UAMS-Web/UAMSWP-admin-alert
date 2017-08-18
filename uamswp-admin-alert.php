<?php
/*
Plugin Name: UAMSWP Alert
Version: 0.0.1
Description: A plugin to admin an alert notification for all users.
Author: uams, Todd McKee, MEd
Author URI: https://web.uams.edu/
Plugin URI: https://github.com/uams-web/UAMSWP-admin-alert
Text Domain: uamswp-admin-alert
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// The core plugin class.
require dirname( __FILE__ ) . '/includes/class-uamswp-admin-alert.php';

add_action( 'init', 'UAMSWP_Admin_Alert' );
/**
 * Start things up.
 *
 * @since 1.6.0
 *
 * @return \WSUWP_WordPress_Dashboard
 */
function UAMSWP_Admin_Alert() {
	return UAMSWP_Admin_Alert::get_instance();
}

