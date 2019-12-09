<?php
/**
 * Register post types.
 *
 * @package    WMS_User_Guide
 * @subpackage Includes\Post_Types_Taxes
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 *
 * @link       https://codex.wordpress.org/Function_Reference/register_post_type
 */

namespace WMS_User_Guide\Includes\Post_Types_Taxes;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Register post types.
 *
 * @since  1.0.0
 * @access public
 */
final class Post_Types_Register {

    /**
	 * Constructor magic method.
     *
     * @since  1.0.0
	 * @access public
	 * @return self
	 */
	public function __construct() {

        // Register custom post types.
		add_action( 'init', [ $this, 'register' ] );

	}

    /**
     * Register custom post types.
     *
     * Note for WordPress 5.0 or greater:
     * If you want your post type to adopt the block edit_form_image_editor
     * rather than using the classic editor then set `show_in_rest` to `true`.
     *
     * @since  1.0.0
	 * @access public
	 * @return void
     */
    public function register() {

        /**
         * Post Type: User Guide
         */

        $labels = [
            'name'                  => __( 'User Guide', 'wms-user-guide' ),
            'singular_name'         => __( 'Guide Page', 'wms-user-guide' ),
            'menu_name'             => __( 'User Guide', 'wms-user-guide' ),
            'all_items'             => __( 'User Guide', 'wms-user-guide' ),
            'add_new'               => __( 'Add New', 'wms-user-guide' ),
            'add_new_item'          => __( 'Add New Guide Page', 'wms-user-guide' ),
            'edit_item'             => __( 'Edit Guide Page', 'wms-user-guide' ),
            'new_item'              => __( 'New Guide Page', 'wms-user-guide' ),
            'view_item'             => __( 'View Guide Page', 'wms-user-guide' ),
            'view_items'            => __( 'View Guide Pages', 'wms-user-guide' ),
            'search_items'          => __( 'Search', 'wms-user-guide' ),
            'not_found'             => __( 'No Guide Pages Found', 'wms-user-guide' ),
            'not_found_in_trash'    => __( 'No Guide Pages Found in Trash', 'wms-user-guide' ),
            'parent_item_colon'     => __( 'Parent Guide Page', 'wms-user-guide' ),
            'featured_image'        => __( 'Featured image for this Guide Page', 'wms-user-guide' ),
            'set_featured_image'    => __( 'Set featured image for this Guide Page', 'wms-user-guide' ),
            'remove_featured_image' => __( 'Remove featured image for this Guide Page', 'wms-user-guide' ),
            'use_featured_image'    => __( 'Use as featured image for this Guide Page', 'wms-user-guide' ),
            'archives'              => __( 'Guide Page archives', 'wms-user-guide' ),
            'insert_into_item'      => __( 'Insert into Guide Page', 'wms-user-guide' ),
            'uploaded_to_this_item' => __( 'Uploaded to this Guide Page', 'wms-user-guide' ),
            'filter_items_list'     => __( 'Filter Guide Pages', 'wms-user-guide' ),
            'items_list_navigation' => __( 'Guide Pages list navigation', 'wms-user-guide' ),
            'items_list'            => __( 'Guide Pages List', 'wms-user-guide' ),
            'attributes'            => __( 'Guide Page Attributes', 'wms-user-guide' ),
            'parent_item_colon'     => __( 'Parent Guide Page', 'wms-user-guide' ),
        ];

        // Apply a filter to labels for customization.
        $labels = apply_filters( 'instruction_labels', $labels );

        $options = [
            'label'               => __( 'User Guide Pages', 'wms-user-guide' ),
            'labels'              => $labels,
            'description'         => __( 'Guide pages for providing user instructions.', 'wms-user-guide' ),
            'public'              => true,
            'publicly_queryable'  => true,
            'show_ui'             => true,
            'show_in_rest'        => false,
            'rest_base'           => '',
            'has_archive'         => false,
            'show_in_menu'        => 'users.php',
			'exclude_from_search' => true,
			'capabilities'        => [
				'manage_options'
			],
			'capability_type'     => 'post',
            'map_meta_cap'        => true,
            'hierarchical'        => false,
            'rewrite'             => false,
            'query_var'           => 'user-guide',
            'menu_position'       => 55,
            'menu_icon'           => 'dashicons-welcome-learn-more',
            'supports'            => [
                'title',
				'editor',
				'excerpt',
				'revisions'
            ],
            'taxonomies'          => [
				'user_guide_cats'
			],
        ];

        // Register the Guide Page post type.
        register_post_type(
            'user_guide',
            $options
        );

    }

}

// Run the class.
$wmsug_post_types = new Post_Types_Register;