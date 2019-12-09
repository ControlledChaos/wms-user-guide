<?php
/**
 * Admin functiontionality and settings.
 *
 * @package    WMS_User_Guide
 * @subpackage Admin
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 */

namespace WMS_User_Guide\Admin;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Admin functiontionality and settings.
 *
 * @since  1.0.0
 * @access public
 */
class Admin {

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
	 * @access private
	 * @return self
	 */
	private function __construct() {

		// Add the page to the admin menu.
		add_action( 'admin_menu', [ $this, 'guide_page' ], 9 );

	}

	/**
	 * Add a page for the user guide
	 *
	 * Uses the universal slug partial for admin pages. Set this
     * slug in the core plugin file.
	 *
	 * Displays a foreach loop of the user guide post type.
	 *
	 * @since  1.0.0
	 * @access public
	 * @global string pagenow Gets the current admin screen URL.
	 * @return void
	 */
    public function guide_page() {

		// Apply a filter to the page title.
		$page_title = apply_filters( 'wmsug_guide_page_title', __( 'User Guide - Instructions & Tutorials', 'mixes-plugin' ) );

		// Apply a filter to the menu title.
		$menu_title = apply_filters( 'wmsug_guide_menu_title', __( 'User Guide', 'mixes-plugin' ) );

		// Get the guide location option.
		$location = get_option( 'wms_user_guide_location' );

		// If guide location option is set to `users`.
		if ( 'users' == $location ) {

			$this->help_about_plugin = add_submenu_page(
                'users.php',
                $page_title,
				$menu_title,
                'manage_options',
                WMSUG_ADMIN_SLUG,
                [ $this, 'guide_page_output' ]
			);

		// If guide location option is set to `top`.
		} elseif ( 'top' == $location ) {

			$this->page_help_section = add_menu_page(
				$page_title,
				$menu_title,
				'manage_options',
				WMSUG_ADMIN_SLUG,
				[ $this, 'guide_page_output' ],
				'dashicons-welcome-learn-more',
				3
			);

		// Otherwise default to dashboard.
		} else {

			$this->help_about_plugin = add_submenu_page(
                'index.php',
                $page_title,
				$menu_title,
                'manage_options',
                WMSUG_ADMIN_SLUG,
                [ $this, 'guide_page_output' ]
			);

		}

		// Add content to the Help tab.
		add_action( 'load-' . $this->page_help_section, [ $this, 'guide_page_help_section' ] );

	}

	/**
     * Output for the guide page contextual help tab.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
     */
    public function guide_page_help_section() {

		// Add to the plugin settings pages.
		$screen = get_current_screen();
		if ( $screen->id != $this->page_help_section ) {
			return;
		}

		// Inline Scripts.
		$screen->add_help_tab( [
			'id'       => 'inline_scripts',
			'title'    => __( 'Guide Posts', 'mixes-plugin' ),
			'content'  => null,
			'callback' => [ $this, 'help_guide_post_type' ]
		] );

		// Add a help sidebar.
		$screen->set_help_sidebar(
			$this->guide_page_help_section_sidebar()
		);

	}

	/**
     * Get guide page help content.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
     */
	public function help_guide_post_type() {

		// include_once WMSUG_PATH . 'admin/partials/help/help-guide-post-type.php';

	}

	/**
     * Get guide page contextual tab sidebar content.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
     */
    public function guide_page_help_section_sidebar() {

		$html = '';

		return $html;

	}

	/**
	 * Guide page output.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
    public function guide_page_output() {

		// Get the partial that contains the settings page HTML.
		require WMSUG_PATH . 'admin/partials/guide-page.php';

	}

}

/**
 * Put an instance of the class into a function.
 *
 * @since  1.0.0
 * @access public
 * @return object Returns an instance of the class.
 */
function wmsug_admin() {

	return Admin::instance();

}

// Run an instance of the class.
wmsug_admin();