<?php

class UAMSWP_Admin_Alert {
	/**
	 * @var WSUWP_WordPress_Dashboard
	 */
	private static $instance;

	/**
	 * Maintain and return the one instance. Initiate hooks when
	 * called the first time.
	 *
	 * @since 1.6.0
	 *
	 * @return \UAMSWP_Admin_Alert
	 */
	public static function get_instance() {
		if ( ! isset( self::$instance ) ) {
			self::$instance = new UAMSWP_Admin_Alert();
			self::$instance->setup_hooks();
		}
		return self::$instance;
	}

	/**
	 * Setup hooks to include.
	 *
	 * @since 1.6.0
	 */
	public function setup_hooks() {
		add_action( 'all_admin_notices', array( $this, 'general_admin_notice' ) );
	}


	/**
	 * Add Alert / Notifaction Message to dashboard for all users.
	 */
	public function general_admin_notice(){
	    global $pagenow;
	    if ( $pagenow == 'index.php' ) {
		    $class = 'notice notice-error';
		    $title = 'Notice';
			$message = __( 'Your website will undergo maintenance on <strong>August 22nd and 23rd</strong>. Content updates made to your site during this time may need to be recreated and republished.', 'uamswp-admin-alert' );

			printf( '<div class="%1$s"><h2>%2$s</h2><h3>%3$s</h3><br/></div>', esc_attr( $class ), esc_html( $title ), $message );
	    }
	}

}
