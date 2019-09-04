<?php
/**
 * Settings page for script loading and more.
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
 * Settings page for script loading and more.
 *
 * @since  1.0.0
 * @access public
 */
class Settings_Page_Scripts {

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

		// Add the page to the admin menu.
		add_action( 'admin_menu', [ $this, 'settings_page' ] );

	}

	/**
	 * Add scripts settings page.
	 *
	 * Uses the universal slug partial for admin pages. Set this
     * slug in the core plugin file.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
    public function settings_page() {

		$this->page_help_section = add_options_page(
			__( 'Script Options', 'wms-user-guide' ),
			__( 'Script Options', 'wms-user-guide' ),
			'manage_options',
			WMSUG_ADMIN_SLUG . '-scripts',
			[ $this, 'page_output' ]
		);

		// Add content to the Help tab.
		add_action( 'load-' . $this->page_help_section, [ $this, 'page_help_section' ] );

	}

	/**
	 * Script Options page output.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
    public function page_output() {

		require WMSUG_PATH . 'admin/partials/settings-page-scripts.php';

	}

	/**
     * Output for the Script Options page contextual help tab.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
     */
    public function page_help_section() {

		// Add to the plugin settings pages.
		$screen = get_current_screen();
		if ( $screen->id != $this->page_help_section ) {
			return;
		}

		// Inline Scripts.
		$screen->add_help_tab( [
			'id'       => 'inline_scripts',
			'title'    => __( 'Inline Scripts', 'wms-user-guide' ),
			'content'  => null,
			'callback' => [ $this, 'help_inline_scripts' ]
		] );

		// Inline Scripts.
		$screen->add_help_tab( [
			'id'       => 'inline_jquery',
			'title'    => __( 'Inline jQuery', 'wms-user-guide' ),
			'content'  => null,
			'callback' => [ $this, 'help_inline_jquery' ]
		] );

		// Remove Emoji Scripts.
		$screen->add_help_tab( [
			'id'       => 'remove_emoji',
			'title'    => __( 'Emoji Script', 'wms-user-guide' ),
			'content'  => null,
			'callback' => [ $this, 'help_remove_emoji' ]
		] );

		// Add a help sidebar.
		$screen->set_help_sidebar(
			$this->page_help_section_sidebar()
		);

	}

	/**
     * Get Inline Scripts help content.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
     */
	public function help_inline_scripts() {

		include_once WMSUG_PATH . 'admin/partials/help/help-inline-scripts.php';

	}

	/**
     * Get Inline jQuery help content.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
     */
	public function help_inline_jquery() {

		include_once WMSUG_PATH . 'admin/partials/help/help-inline-jquery.php';

	}

	/**
     * Get Remove Emoji Script help content.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
     */
	public function help_remove_emoji() {

		include_once WMSUG_PATH . 'admin/partials/help/help-remove-emoji.php';

	}

	/**
     * Get Script Options page contextual tab sidebar content.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
     */
    public function page_help_section_sidebar() {

		$html = '<ul>
			<li><a href="https://github.com/kenwheeler/slick" target="_blank" style="text-decoration: none;">' . __( 'Slick on GitHub', 'wms-user-guide' ) . '</a></li>
			<li><a href="https://github.com/vdw/Tabslet" target="_blank" style="text-decoration: none;">' . __( 'Tabslet on GitHub', 'wms-user-guide' ) . '</a></li>
			<li><a href="https://github.com/leafo/sticky-kit" target="_blank" style="text-decoration: none;">' . __( 'Sticky-kit on GitHub', 'wms-user-guide' ) . '</a></li>
			<li><a href="https://github.com/iamceege/tooltipster" target="_blank" style="text-decoration: none;">' . __( 'Tooltipster on GitHub', 'wms-user-guide' ) . '</a></li>
		</ul>';

		return $html;

	}

}

/**
 * Put an instance of the class into a function.
 *
 * @since  1.0.0
 * @access public
 * @return object Returns an instance of the class.
 */
function wmsug_settings_page_scripts() {

	return Settings_Page_Scripts::instance();

}

// Run an instance of the class.
wmsug_settings_page_scripts();