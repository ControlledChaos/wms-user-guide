<?php
/**
 * Register taxonomies.
 *
 * @package    WMS_User_Guide
 * @subpackage Includes\Post_Types_Taxes
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 *
 * @link       https://codex.wordpress.org/Function_Reference/register_guide category
 */

namespace WMS_User_Guide\Includes\Post_Types_Taxes;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Register taxonomies.
 *
 * @since  1.0.0
 * @access public
 */
final class Taxes_Register {

    /**
	 * Constructor magic method.
     *
     * @since  1.0.0
	 * @access public
	 * @return self
	 */
	public function __construct() {

        // Register custom taxonomies.
		add_action( 'init', [ $this, 'register' ] );

		add_action( 'admin_menu', [ $this, 'add_submenu' ] );
		add_action( 'parent_file', [ $this, 'set_submenu' ] );

	}

    /**
     * Register custom taxonomies.
     *
     * @since  1.0.0
	 * @access public
	 * @return void
     */
    public function register() {

        /**
         * Guide Categories
         */

        $labels = [
            'name'                       => __( 'Guide Categories', 'wms-user-guide' ),
            'singular_name'              => __( 'Guide Category', 'wms-user-guide' ),
            'menu_name'                  => __( 'Guide Category', 'wms-user-guide' ),
            'all_items'                  => __( 'All Guide Categories', 'wms-user-guide' ),
            'edit_item'                  => __( 'Edit Guide Category', 'wms-user-guide' ),
            'view_item'                  => __( 'View Guide Category', 'wms-user-guide' ),
            'update_item'                => __( 'Update Guide Category', 'wms-user-guide' ),
            'add_new_item'               => __( 'Add New Guide Category', 'wms-user-guide' ),
            'new_item_name'              => __( 'New Guide Category', 'wms-user-guide' ),
            'parent_item'                => __( 'Parent Guide Category', 'wms-user-guide' ),
            'parent_item_colon'          => __( 'Parent Guide Category', 'wms-user-guide' ),
            'popular_items'              => __( 'Popular Guide Categories', 'wms-user-guide' ),
            'separate_items_with_commas' => __( 'Separate Guide Categories with commas', 'wms-user-guide' ),
            'add_or_remove_items'        => __( 'Add or Remove Guide Categories', 'wms-user-guide' ),
            'choose_from_most_used'      => __( 'Choose from the most used Guide Categories', 'wms-user-guide' ),
            'not_found'                  => __( 'No Guide Categories Found', 'wms-user-guide' ),
            'no_terms'                   => __( 'No Guide Categories', 'wms-user-guide' ),
            'items_list_navigation'      => __( 'Guide Categories List Navigation', 'wms-user-guide' ),
            'items_list'                 => __( 'Guide Categories List', 'wms-user-guide' )
        ];

        $options = [
            'label'              => __( 'Guide Categories', 'wms-user-guide' ),
            'labels'             => $labels,
            'public'             => true,
            'hierarchical'       => false,
            'label'              => 'Guide Categories',
            'show_ui'            => true,
            'show_in_menu'       => 'users.php',
            'show_in_nav_menus'  => false,
            'query_var'          => true,
            'rewrite'            => [
                'slug'         => 'user-guide-category',
                'with_front'   => true,
                'hierarchical' => false,
            ],
            'show_admin_column'  => true,
            'show_in_rest'       => true,
            'rest_base'          => 'user-guide-category',
            'show_in_quick_edit' => true
        ];

        /**
         * Register the taxonomy
         */
        register_taxonomy(
            'user_guide_cats',
            [
                'user_guide'
            ],
            $options
        );

	}

	/**
     * Add a submenu of users for guide categories.
     *
     * @since  1.0.0
	 * @access public
	 * @return void
     */
    public function add_submenu() {

		add_submenu_page(
			'users.php',
			__( 'Guide Categories', 'wms-user-guide' ),
			__( 'Guide Categories', 'wms-user-guide' ),
			'manage_options',
			'edit-tags.php?taxonomy=user_guide_cats'
		);

	}

	/**
     * Set guide categories as a submenu of users.
     *
     * @since  1.0.0
	 * @access public
	 * @return object Returns the submenu item parent screen.
     */
    public function set_submenu( $parent_file ) {

		// Access global variables.
		global $current_screen;

		$taxonomy = $current_screen->taxonomy;
		if ( $taxonomy == 'user_guide_cats' ) {
			$parent_file = 'users.php';
		}

		return $parent_file;

	}

}

// Run the class.
$wmsug_taxes = new Taxes_Register;