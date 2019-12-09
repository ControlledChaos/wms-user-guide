<?php
/**
 * Post types and taxonomies.
 *
 * @package    WMS_User_Guide
 * @subpackage Includes\Post_Types_Taxes
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 */

namespace WMS_User_Guide\Includes\Post_Types_Taxes;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Post types and taxonomies class.
 *
 * @since  1.0.0
 * @access public
 */
class Post_Types_Taxes {

	/**
	 * Get an instance of the class.
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
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void Constructor method is empty.
	 *              Change to `self` if used.
	 */
	public function __construct() {

		// Make User Guide post type private by default.
		add_action( 'transition_post_status', [ $this, 'private_posts' ], 10, 3 );
		add_action( 'post_submitbox_misc_actions', [ $this, 'private_posts_metabox' ] );

	}

	/**
     * Class dependency files.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
     */
	public function dependencies() {

		// Resister cutsom post types.
		require_once WMSUG_PATH . 'includes/post-types-taxes/class-register-post-types.php';

		// Resister cutsom taxonomies.
		require_once WMSUG_PATH . 'includes/post-types-taxes/class-register-taxonomies.php';

	}

	/**
	 * Make User Guide post type private by default
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function private_posts( $new_status, $old_status, $post ) {

		if ( 'user_guide' == $post->post_type && 'publish' == $new_status && $old_status != $new_status ) {
			$post->post_status = 'private';
			wp_update_post( $post );
		}

	}

	/**
	 * User Guide post type publish metabox
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string Returns CSS and JavaScript for the metabox.
	 */
	public function private_posts_metabox() {

		// Access global variables.
		global $post;

		// Bail if not user guide post type.
		if ( ! 'user_guide' == $post->post_type ) {
			return;
		}

		// Function variables.
		$message = __( '<strong>Note:</strong> User Guide posts are always <strong>private</strong>.', 'wms-user-guide' );
		$post->post_password = '';
		$visibility = 'private';
		$visibility_text = __( 'Private', 'wms-user-guide' );
		?>
		<style type="text/css">
			.private-nosts-note {
				margin: 0;
				padding: 1em;
			}
		</style>
		<script type="text/javascript">
			(function($){
				try {
					$('#post-visibility-display').text('<?php echo $visibility_text; ?>');
					$('#hidden-post-visibility').val('<?php echo $visibility; ?>');
				} catch(err){}
			}) (jQuery);
		</script>
		<div class="private-nosts-note">
			<?php echo $message; ?>
		</div>
		<?php

	}

}

/**
 * Put an instance of the class into a function.
 *
 * @since  1.0.0
 * @access public
 * @return object Returns an instance of the class.
 */
function wmsug_types_taxes() {

	return Post_Types_Taxes::instance();

}

// Run an instance of the class.
wmsug_types_taxes();