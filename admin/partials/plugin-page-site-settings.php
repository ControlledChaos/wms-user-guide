<?php
/**
 * About page site settings output.
 *
 * Uses the universal slug partial for admin pages. Set this
 * slug in the core plugin file.
 *
 * @package    WMS_User_Guide
 * @subpackage Admin\Partials
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 */

namespace WMS_User_Guide\Admin\Partials;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
} ?>
<h3><?php _e( 'Website settings', 'wms-user-guide' ); ?></h3>
<?php echo sprintf(
	'<p>%1s <a href="%2s">%3s</a> %4s</p>',
	__( 'The plugin is equipped with', 'wms-user-guide' ),
	esc_url( admin_url( '?page=' . WMSUG_ADMIN_SLUG . '-settings' ) ),
	__( 'an admin page', 'wms-user-guide' ),
	__( 'for customizing the user interface of WordPress/ClassicPress, as well as other useful features.', 'wms-user-guide' )
 ); ?>
<h3><?php _e( 'Clean Up the Admin', 'wms-user-guide' ); ?></h3>
<ul>
	<li><?php _e( 'Remove dashboard widgets: WordPress/ClassicPress news, quick press', 'wms-user-guide' ); ?></li>
	<li><?php _e( 'Make Menus and Widgets top level menu items', 'wms-user-guide' ); ?></li>
	<li><?php _e( 'Remove select admin menu items', 'wms-user-guide' ); ?></li>
	<li><?php _e( 'Remove WordPress/ClassicPress logo from admin bar', 'wms-user-guide' ); ?></li>
	<li><?php _e( 'Remove access to theme and plugin editors', 'wms-user-guide' ); ?></li>
</ul>
<h3><?php _e( 'Enchance the Admin', 'wms-user-guide' ); ?></h3>
<ul>
	<li><?php _e( 'Add three admin bar menus', 'wms-user-guide' ); ?></li>
	<li><?php _e( 'Add custom post types to the At a Glance widget', 'wms-user-guide' ); ?></li>
	<li><?php _e( 'Custom admin footer message', 'wms-user-guide' ); ?></li>
</ul>