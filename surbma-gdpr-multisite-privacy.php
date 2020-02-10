<?php
/*
Plugin Name: Surbma | GDPR Multisite Privacy
Plugin URI: https://surbma.com/wordpress-plugins/
Description: A GDPR Multisite plugin, that adds special privileges to a subsite Administrator for Privacy settings.
Network: true

Version: 2.0

Author: Surbma
Author URI: https://surbma.com/

License: GPLv2

Text Domain: surbma-gdpr-multisite-privacy
Domain Path: /languages/
*/

// Prevent direct access to the plugin
if ( !defined( 'ABSPATH' ) ) exit( 'Good try! :)' );

/**
 * Multisite Privileges
 *
 * @author PH
 */
class Surbma_GDPR_Multisite_Privacy {

	/**
	 * Current User object
	 *
	 * @var WP_User
	 */
	private $user;

	/**
	 * Determines if user should have privacy cap
	 *
	 * @var bool
	 */
	private $privacy = false;

	/**
	 * Privacy capabilities
	 *
	 * @var array
	 */
	private $privacy_caps = array(
		'manage_network',
		'delete_users',
		'manage_privacy_options',
		'export_others_personal_data',
		'erase_others_personal_data',
	);

	/**
	 * Constructor
	 *
	 * @author PH
	 * @return void
	 */
	public function __construct() {
		$this->__actions();
		$this->__filters();
	}

	/**
	 * Sets determinant
	 *
	 * Function checks if current user should have access to privacy settings
	 * based on email. If current user email is the same as admin email, the
	 * system adds privileges to see privacy settings page.
	 *
	 * @author PH
	 * @return void
	 */
	public function set_privacy() {
		if ( is_user_logged_in() ) {
			$user = wp_get_current_user();

			if ( ! empty( $user ) ) {
				$e_user  = ( ! empty( $user->user_email ) ) ? $user->user_email : '';
				$e_admin = get_bloginfo( 'admin_email' );

				if ( $e_user === $e_admin ) {
					$this->privacy = true;
				}
			}
		}
	}

	/**
	 * Adds WP capabilities
	 *
	 * Function adds capabilities to current user if they
	 * have privileges to view specify settings.
	 *
	 * @author PH
	 * @return void
	 */
	public function set_caps() {
		foreach ( $this->privacy_caps as $cap ) {
			if ( $this->privacy ) {
				$this->user->add_cap( $cap );
			} else {
				$this->user->remove_cap( $cap );
			}
		}
	}

	/**
	 * Sets user
	 *
	 * @author PH
	 * @return void
	 */
	public function set_user() {
		$this->user = wp_get_current_user();
	}

	/**
	 * Filters meta_cap
	 *
	 * This function is required for using "Erase Personal Data".
	 * User needs delete_users privileges to use that.
	 *
	 * IMPORTANT | WP DOCS
	 * Require both caps in order to make it explicitly clear that delegating
	 * erasure from network admins to single-site admins will give them the
	 * ability to affect global users, rather than being limited to the site
	 * that they administer.
	 *
	 * @author PH
	 * @return void
	 */
	public function map_meta_cap( $caps, $cap ) {
		switch( $cap ) {
			case 'delete_users':
				$caps = array( $cap );
				break;
		}
		return $caps;
	}

	/**
	 * Inits WP Actions
	 *
	 * @author PH
	 * @return void
	 */
	public function __actions() {
		add_action( 'init', [ $this, 'set_user' ] );
		add_action( 'init', [ $this, 'set_privacy' ] );
		add_action( 'init', [ $this, 'set_caps' ] );
	}

	/**
	 * Inits filters
	 *
	 * @author PH
	 * @return void
	 */
	public function __filters() {
		add_filter( 'map_meta_cap', [ $this, 'map_meta_cap' ], 10, 2 );
	}
}

new Surbma_GDPR_Multisite_Privacy();
