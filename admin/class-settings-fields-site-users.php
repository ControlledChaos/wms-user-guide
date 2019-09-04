<?php
/**
 * Settings fields for user options.
 *
 * @package    WMS_User_Guide
 * @subpackage Admin
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 */

namespace WMS_User_Guide\Admin;

use WMS_User_Guide\Admin\Partials\Field_Callbacks\Users_Callbacks as Callbacks;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Settings fields for user options.
 *
 * @since  1.0.0
 * @access public
 */
class Settings_Fields_Users {

    /**
	 * Instance of the class
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object Returns the instance.
	 */
	public static function instance() {

		// Varialbe for the instance to be used outside the class.
		static $instance = null;

		if ( is_null( $instance ) ) {

			// Set variable for new instance.
			$instance = new self;

			// Require the class files.
			$instance->dependencies();

		}

		// Return the instance.
		return $instance;

	}

    /**
	 * Constructor method
	 *
	 * @since  1.0.0
	 * @access public
	 * @return self
	 */
    public function __construct() {

        // Media settings.
        add_action( 'admin_init', [ $this, 'settings' ] );

	}

	/**
	 * Class dependency files.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function dependencies() {

		// Callbacks for the Dashboard tab.
		require WMSUG_PATH . 'admin/partials/field-callbacks/class-users-callbacks.php';

	}

    /**
	 * User settings.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function settings() {

        // User settings section.
        add_settings_section(
            'wmsug-site-users',
            __( 'User Settings', 'wms-user-guide' ),
            [],
            'wmsug-site-users'
        );

        // Local avatars only (no Gravatars).
		add_settings_field(
			'wmsug_block_gravatar',
			__( 'Block Gravatars', 'wms-user-guide' ),
			[ Callbacks::instance(), 'block_gravatar' ],
			'wmsug-site-users',
			'wmsug-site-users',
			[ esc_html__( 'Prevent avatar requests from Gravatar.com', 'wms-user-guide' ) ]
		);

		register_setting(
			'wmsug-site-users',
			'wmsug_block_gravatar'
		);

    }

}

/**
 * Put an instance of the class into a function.
 *
 * @since  1.0.0
 * @access public
 * @return object Returns an instance of the class.
 */
function wmsug_settings_fields_users() {

	return Settings_Fields_Users::instance();

}

// Run an instance of the class.
wmsug_settings_fields_users();