<?php
/**
 * The core plugin class
 *
 * @package    WMS_User_Guide
 * @subpackage Includes
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 */

namespace WMS_User_Guide\Includes;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Get plugins path to check for active plugins.
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

/**
 * Define the core functionality of the plugin.
 *
 * @since  1.0.0
 * @access public
 */
final class Init {

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

			// Get class dependencies.
			$instance->dependencies();

		}

		// Return the instance.
		return $instance;

	}

	/**
	 * Constructor method
	 *
	 * @since  1.0.0
	 * @access private
	 * @return self
	 */
	private function __construct() {

		// User guide settings.
        add_action( 'admin_init', [ $this, 'settings' ] );

	}

	/**
	 * Load the required dependencies for this plugin.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function dependencies() {

		// Post types and taxonomies.
		require_once WMSUG_PATH . 'includes/post-types-taxes/class-post-type-tax.php';

		// Admin/backend functionality, scripts and styles.
		require_once WMSUG_PATH . 'admin/class-admin.php';

		// Frontend functionality, scripts and styles.
		require_once WMSUG_PATH . 'frontend/class-frontend.php';

		// Translation functionality.
		require_once WMSUG_PATH . 'includes/class-i18n.php';

	}

	/**
	 * Media settings.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function settings() {

		// Guide location setting.
		add_settings_field(
			'wms_user_guide_location',
			__( 'User Guide Location', 'wms-user-guide' ),
			[ $this, 'guide_location' ],
			'reading',
			'default',
			[ __( 'Select where in the admin menu to display the guide link.', 'wms-user-guide' ) ]
		);

		register_setting(
            'reading',
            'wms_user_guide_location'
        );

	}

	/**
     * Guide location setting
     *
     * @since  1.0.0
	 * @access public
	 * @return string
     */
    public function guide_location( $args ) {

		// Get the setting HTML output.
		include_once WMSUG_PATH . 'admin/partials/field-callbacks/setting-guide-location.php';

    }

}

/**
 * Put an instance of the class into a function.
 *
 * @since  1.0.0
 * @access public
 * @return object Returns an instance of the class.
 */
function wmsug_init() {

	return Init::instance();

}

// Run an instance of the class.
wmsug_init();