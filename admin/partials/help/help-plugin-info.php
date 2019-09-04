<?php
/**
 * Content for the plugin More Information help tab.
 *
 * @package    WMS_User_Guide
 * @subpackage Admin\Partials
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 */

namespace WMS_User_Guide\Admin\Partials\Help;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
} ?>
<h3><?php echo sprintf(
	'%1s %2s %3s',
	__( 'More information about the', 'wms-user-guide' ),
	get_bloginfo( 'name' ),
	__( 'plugin', 'wms-user-guide' )
); ?></h3>
<h4><?php _e( 'The plugin source', 'wms-user-guide' ); ?></h4>
<p><?php _e( 'Following is the the link to this plugin as it comes out of the box. Change this information to complement your site-specific version.', 'wms-user-guide' ); ?></p>
<p><a href="https://github.com/ControlledChaos/wms-user-guide" target="_blank">https://github.com/ControlledChaos/wms-user-guide</a></p>
<h4><?php _e( 'Ask for development help', 'wms-user-guide' ); ?></h4>
<?php echo sprintf(
	'<p>%1s <a href="mailto:greg@ccdzine.com">greg@ccdzine.com</a></p>',
	__( 'If you would like help developing this plugin for your project, contact the plugin author, Greg Sweet, at' )
 ); ?>