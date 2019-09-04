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
 * @link       https://codex.wordpress.org/Function_Reference/register_taxonomy
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
         * Taxonomy: Sample taxonomy (Taxonomy).
         *
         * Renaming:
         * Search case "Taxonomy" and replace with your post type singular name.
         * Search case "Taxonomies" and replace with your post type plural name.
         * Search case "wmsug_taxonomy" and replace with your taxonomy database name.
         * Search case "taxonomies" and replace with your taxonomy permalink slug.
         */

        $labels = [
            'name'                       => __( 'Taxonomies', 'wms-user-guide' ),
            'singular_name'              => __( 'Taxonomy', 'wms-user-guide' ),
            'menu_name'                  => __( 'Taxonomy', 'wms-user-guide' ),
            'all_items'                  => __( 'All Taxonomies', 'wms-user-guide' ),
            'edit_item'                  => __( 'Edit Taxonomy', 'wms-user-guide' ),
            'view_item'                  => __( 'View Taxonomy', 'wms-user-guide' ),
            'update_item'                => __( 'Update Taxonomy', 'wms-user-guide' ),
            'add_new_item'               => __( 'Add New Taxonomy', 'wms-user-guide' ),
            'new_item_name'              => __( 'New Taxonomy', 'wms-user-guide' ),
            'parent_item'                => __( 'Parent Taxonomy', 'wms-user-guide' ),
            'parent_item_colon'          => __( 'Parent Taxonomy', 'wms-user-guide' ),
            'popular_items'              => __( 'Popular Taxonomies', 'wms-user-guide' ),
            'separate_items_with_commas' => __( 'Separate Taxonomies with commas', 'wms-user-guide' ),
            'add_or_remove_items'        => __( 'Add or Remove Taxonomies', 'wms-user-guide' ),
            'choose_from_most_used'      => __( 'Choose from the most used Taxonomies', 'wms-user-guide' ),
            'not_found'                  => __( 'No Taxonomies Found', 'wms-user-guide' ),
            'no_terms'                   => __( 'No Taxonomies', 'wms-user-guide' ),
            'items_list_navigation'      => __( 'Taxonomies List Navigation', 'wms-user-guide' ),
            'items_list'                 => __( 'Taxonomies List', 'wms-user-guide' )
        ];

        $options = [
            'label'              => __( 'Taxonomies', 'wms-user-guide' ),
            'labels'             => $labels,
            'public'             => true,
            'hierarchical'       => false,
            'label'              => 'Taxonomies',
            'show_ui'            => true,
            'show_in_menu'       => true,
            'show_in_nav_menus'  => true,
            'query_var'          => true,
            'rewrite'            => [
                'slug'         => 'taxonomies',
                'with_front'   => true,
                'hierarchical' => false,
            ],
            'show_admin_column'  => true,
            'show_in_rest'       => true,
            'rest_base'          => 'taxonomies',
            'show_in_quick_edit' => true
        ];

        /**
         * Register the taxonomy
         */
        register_taxonomy(
            'wmsug_taxonomy',
            [
                'wmsug_post_type' // Change to your post type name.
            ],
            $options
        );

    }

}

// Run the class.
$wmsug_taxes = new Taxes_Register;