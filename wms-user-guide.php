<?php
/**
 * User Guide
 *
 * @package     WMS_User_Guide
 * @version     1.0.0
 * @author      Greg Sweet <greg@ccdzine.com>
 * @copyright   Copyright © 2019, Greg Sweet
 * @link        https://github.com/ControlledChaos/wms-user-guide
 * @license     GPL-3.0+ http://www.gnu.org/licenses/gpl-3.0.txt
 *
 * Plugin Name:  WMS User Guide
 * Plugin URI:   https://github.com/ControlledChaos/wms-user-guide
 * Description:  Create instructions and tutorials for WordPress/ClassicPress users.
 * Version:      1.0.0
 * Author:       Controlled Chaos Design
 * Author URI:   https://ccdzine.com/
 * License:      GPL-3.0+
 * License URI:  https://www.gnu.org/licenses/gpl.txt
 * Text Domain:  wms-user-guide
 * Domain Path:  /languages
 * Tested up to: 5.2.2
 */

/**
 * License & Warranty
 *
 * WMS User Guide is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * any later version.
 *
 * WMS User Guide is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with WMS User Guide. If not, see {URI to Plugin License}.
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The core plugin class
 *
 * Defines constants, gets the initialization class file
 * plus the activation and deactivation classes.
 *
 * @since  1.0.0
 * @access public
 */

// First check for other classes with the same name.
if ( ! class_exists( 'WMS_User_Guide' ) ) :
	final class WMS_User_Guide {

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

				// Define plugin constants.
				$instance->constants();

				// Require the core plugin class files.
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
		 * @return void Constructor method is empty.
	 *              Change to `self` if used.
		 */
		private function __construct() {}

		/**
		 * Define plugin constants
		 *
		 * Change the prefix, the text domain, and the default meta image
		 * to that which suits the needs of your website.
		 *
		 * Change the version as appropriate.
		 *
		 * @since  1.0.0
		 * @access private
		 * @return void
		 */
		private function constants() {

			/**
			 * Plugin version
			 *
			 * Keeping the version at 1.0.0 as this is a starter plugin but
			 * you may want to start counting as you develop for your use case.
			 *
			 * @since  1.0.0
			 * @return string Returns the latest plugin version.
			 */
			if ( ! defined( 'WMSUG_VERSION' ) ) {
				define( 'WMSUG_VERSION', '1.0.0' );
			}

			/**
			 * Text domain
			 *
			 * @since  1.0.0
			 * @return string Returns the text domain of the plugin.
			 *
			 * @todo   Replace all strings with constant.
			 */
			if ( ! defined( 'WMSUG_DOMAIN' ) ) {
				define( 'WMSUG_DOMAIN', 'wms-user-guide' );
			}

			/**
			 * Plugin folder path
			 *
			 * @since  1.0.0
			 * @return string Returns the filesystem directory path (with trailing slash)
			 *                for the plugin __FILE__ passed in.
			 */
			if ( ! defined( 'WMSUG_PATH' ) ) {
				define( 'WMSUG_PATH', plugin_dir_path( __FILE__ ) );
			}

			/**
			 * Plugin folder URL
			 *
			 * @since  1.0.0
			 * @return string Returns the URL directory path (with trailing slash)
			 *                for the plugin __FILE__ passed in.
			 */
			if ( ! defined( 'WMSUG_URL' ) ) {
				define( 'WMSUG_URL', plugin_dir_url( __FILE__ ) );
			}

			/**
			 * Universal slug
			 *
			 * This URL slug is used for various plugin admin & settings pages.
			 *
			 * @since  1.0.0
			 * @return string Returns the URL slug of the admin pages.
			 */
			if ( ! defined( 'WMSUG_ADMIN_SLUG' ) ) {
				define( 'WMSUG_ADMIN_SLUG', 'user-guide' );
			}

		}

		/**
		 * Throw error on object clone.
		 *
		 * @since  1.0.0
		 * @access public
		 * @return void
		 */
		public function __clone() {

			// Cloning instances of the class is forbidden.
			_doing_it_wrong( __FUNCTION__, __( 'This is not allowed.', 'wms-user-guide' ), '1.0.0' );

		}

		/**
		 * Disable unserializing of the class.
		 *
		 * @since  1.0.0
		 * @access public
		 * @return void
		 */
		public function __wakeup() {

			// Unserializing instances of the class is forbidden.
			_doing_it_wrong( __FUNCTION__, __( 'This is not allowed.', 'wms-user-guide' ), '1.0.0' );

		}

		/**
		 * Require the core plugin class files.
		 *
		 * @since  1.0.0
		 * @access private
		 * @return void Gets the file which contains the core plugin class.
		 */
		private function dependencies() {

			// The hub of all other dependency files.
			require_once WMSUG_PATH . 'includes/class-init.php';

			// Include the activation class.
			require_once WMSUG_PATH . 'includes/class-activate.php';

			// Include the deactivation class.
			require_once WMSUG_PATH . 'includes/class-deactivate.php';

		}

	}
	// End core plugin class.

	/**
	 * Put an instance of the plugin class into a function.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object Returns the instance of the `WMS_User_Guide` class.
	 */
	function wmsug_plugin() {

		return WMS_User_Guide::instance();

	}

	// Begin plugin functionality.
	wmsug_plugin();

// End the check for the plugin class.
endif;

// Bail out now if the core class was not run.
if ( ! function_exists( 'wmsug_plugin' ) ) {
	return;
}

/**
 * Register the activaction & deactivation hooks.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
register_activation_hook( __FILE__, '\wmsug_activate_plugin' );
register_deactivation_hook( __FILE__, '\wmsug_deactivate_plugin' );

/**
 * The code that runs during plugin activation.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function wmsug_activate_plugin() {

	// Run the activation class.
	wmsug_activate();

}

/**
 * The code that runs during plugin deactivation.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function wmsug_deactivate_plugin() {

	// Run the deactivation class.
	wmsug_deactivate();

}

/**
 * Add links to the plugin's admin pages
 *
 * Uses the universal slug partial for admin pages. Set this
 * slug in the core plugin file.
 *
 * @param  array $links Default plugin links on the 'Plugins' admin page.
 * @since  1.0.0
 * @access public
 * @return mixed[] Returns an HTML string for the guide page link.
 *                 Returns an array of the guide page link with the default plugin links.
 */
function wmsug_about_link( $links ) {

	if ( is_admin() ) {

		// Get the guide location option.
		$location = get_option( 'wms_user_guide_location' );

		// Conditional URL for the user guide page.
		if ( 'top' == $location ) {
			$guide_url = admin_url( WMSUG_ADMIN_SLUG );
		} elseif ( 'users' == $location ) {
			$guide_url = admin_url( 'users.php?page=' . WMSUG_ADMIN_SLUG );
		} else {
			$guide_url = admin_url( 'index.php?page=' . WMSUG_ADMIN_SLUG );
		}

		// Link to the guide page.
		$guide_page = [
			sprintf(
				'<a href="%1s">%2s</a>',
				esc_url( $guide_url ),
				esc_attr( 'User Guide', 'wms-user-guide' )
			),
		];

		// Link to the guide post type management screen.
		$posts_page = [
			sprintf(
				'<a href="%1s">%2s</a>',
				esc_url( admin_url( 'edit.php?post_type=user_guide' ) ),
				esc_attr( 'Manage', 'wms-user-guide' )
			),
		];

		// Merge the new settings array with the default array.
		return array_merge( $guide_page, $posts_page, $links );

	}

}
// Filter the default settings links with new array.
add_filter( 'plugin_action_links_' . plugin_basename( __FILE__ ), 'wmsug_about_link' );

/**
 * Add links to the plugin settings pages on the plugins page.
 *
 * @param  array  $links Default plugin links on the 'Plugins' admin page.
 * @param  object $file Reference the root plugin file with header.
 * @since  1.0.0
 * @return mixed[] Returns HTML strings for the settings pages link.
 *                 Returns an array of custom links with the default plugin links.
 */
function wmsug_settings_links( $links, $file ) {

	if ( is_admin() ) {

		if ( $file == plugin_basename( __FILE__ ) ) {

			$links[] = sprintf(
				'<a href="%1s">%2s</a>',
				admin_url( 'options-reading.php#user-guide-location' ),
				esc_attr( 'Guide Location', 'wms-user-guide' )
			);

		}

		// Return the full array of links.
		return $links;

	}

}
add_filter( 'plugin_row_meta', 'wmsug_settings_links', 10, 2 );

/**
 * Check if WordPress is 5.0 or greater.
 *
 * @since  1.0.0
 * @access public
 * @return bool Returns true if the WordPress version is 5.0 or greater.
 */
function wmsug_new_cms() {

	// Get the WordPress version.
	$version = get_bloginfo( 'version' );

	if ( $version >= 5.0 ) {
		return true;
	} else {
		return false;
	}

}

/**
 * Check if the CMS is ClassicPress.
 *
 * @since  1.0.0
 * @access public
 * @return bool Returns true if ClassicPress is running.
 */
function wmsug_classicpress() {

	if ( function_exists( 'classicpress_version' ) ) {
		return true;
	} else {
		return false;
	}

}