<?php
/**
 * Enqueue frontend scripts.
 *
 * @package    WMS_User_Guide
 * @subpackage Frontend
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 */

namespace WMS_User_Guide\Frontend;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The frontend functionality of the plugin.
 *
 * @since  1.0.0
 * @access public
 */
class Enqueue_Frontend_Scripts {

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

		add_action( 'wp_enqueue_scripts', [ $this, 'scripts' ] );

	}

	/**
	 * Enqueue scripts traditionally by default.
	 *
	 * Uses the universal slug partial for admin pages. Set this
     * slug in the core plugin file.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function scripts() {

		// Non-vendor plugin script. Uncomment to use.
		// wp_enqueue_script( WMSUG_ADMIN_SLUG, WMSUG_URL . 'assets/js/frontend.js', [ 'jquery' ], WMSUG_VERSION, true );

		// Fancybox 3.
		if ( get_option( 'wmsug_enqueue_fancybox_script' ) ) {
			wp_enqueue_script( WMSUG_ADMIN_SLUG . '-fancybox', WMSUG_URL . 'assets/js/jquery.fancybox.min.js', [ 'jquery' ], WMSUG_VERSION, true );
		}

		// Slick.
		if ( get_option( 'wmsug_enqueue_slick' ) ) {
			wp_enqueue_script( WMSUG_ADMIN_SLUG . '-slick', WMSUG_URL . 'assets/js/slick.min.js', [ 'jquery' ], WMSUG_VERSION, true );
		}

		// Tabslet.
		if ( get_option( 'wmsug_enqueue_tabslet' ) ) {
			wp_enqueue_script( WMSUG_ADMIN_SLUG . '-tabslet', WMSUG_URL . 'assets/js/jquery.tabslet.min.js', [ 'jquery' ], WMSUG_VERSION, true );
		}

		// Tooltipster.
		if ( get_option( 'wmsug_enqueue_tooltipster' ) ) {
			wp_enqueue_script( WMSUG_ADMIN_SLUG . '-tooltipster', WMSUG_URL . 'assets/js/tooltipster.bundle.min.js', [ 'jquery' ], WMSUG_VERSION, true );
		}

		// FitVids.
		wp_enqueue_script( WMSUG_ADMIN_SLUG . '-fitvids', WMSUG_URL . 'assets/js/jquery.fitvids.min.js', [ 'jquery' ], WMSUG_VERSION, true );

	}

}

/**
 * Put an instance of the class into a function.
 *
 * @since  1.0.0
 * @access public
 * @return object Returns an instance of the class.
 */
function wmsug_enqueue_frontend_scripts() {

	return Enqueue_Frontend_Scripts::instance();

}

// Run an instance of the class.
wmsug_enqueue_frontend_scripts();