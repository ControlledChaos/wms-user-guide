<?php
/**
 * Enqueue frontend styles.
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
class Enqueue_Frontend_Styles {

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

		add_action( 'wp_enqueue_scripts', [ $this, 'styles' ] );

	}

	/**
	 * Enqueue the stylesheets for the frontend of the site.
	 *
	 * Uses the universal slug partial for admin pages. Set this
     * slug in the core plugin file.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function styles() {

		// Non-vendor plugin styles.
		wp_enqueue_style( WMSUG_ADMIN_SLUG, WMSUG_URL . 'assets/css/frontend.css', [], WMSUG_VERSION, 'all' );

		// Fancybox 3.
		if ( get_option( 'wmsug_enqueue_fancybox_styles' ) ) {

			/**
			 * Bail if the current theme supports ccd-fancybox by
			 * including its own copy of the Fancybox stylesheet.
			 */
			if ( current_theme_supports( 'ccd-fancybox' ) ) {
				return;
			} else {
				wp_enqueue_style( WMSUG_ADMIN_SLUG . '-fancybox', WMSUG_URL . 'assets/css/jquery.fancybox.min.css', [], WMSUG_VERSION, 'all' );
			}
		}

		// Slick.
		if ( get_option( 'wmsug_enqueue_slick' ) ) {
			wp_enqueue_style( WMSUG_ADMIN_SLUG . '-slick', WMSUG_URL . 'assets/css/slick.min.css', [], WMSUG_VERSION, 'all' );
		}

		// Slick theme.
		if ( get_option( 'wmsug_enqueue_slick' ) ) {
			wp_enqueue_style( WMSUG_ADMIN_SLUG . '-slick-theme', WMSUG_URL . 'assets/css/slick-theme.css', [], WMSUG_VERSION, 'all' );
		}

		// Tooltipster.
		if ( get_option( 'wmsug_enqueue_tooltipster' ) ) {
			wp_enqueue_style( WMSUG_ADMIN_SLUG . '-tooltipster', WMSUG_URL . 'assets/css/tooltipster.bundle.min.css', [], WMSUG_VERSION, 'all' );
		}

	}

}

/**
 * Put an instance of the class into a function.
 *
 * @since  1.0.0
 * @access public
 * @return object Returns an instance of the class.
 */
function wmsug_enqueue_frontend_styles() {

	return Enqueue_Frontend_Styles::instance();

}

// Run an instance of the class.
wmsug_enqueue_frontend_styles();