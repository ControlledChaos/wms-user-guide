<?php
/**
 * Content for the Welcome Panel help tab.
 *
 * Uses the universal slug partial for admin pages. Set this
 * slug in the core plugin file.
 *
 * @package    WMS_User_Guide
 * @subpackage Admin\Partials\Help
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 *
 * @todo       Change this content when the custom welcome
 *             panel is ready to use.
 */

namespace WMS_User_Guide\Admin\Dashboard\Partials\Help;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
} ?>
<h3><?php _e( 'Welcome Panel', 'wms-user-guide' ); ?></h3>
<p><?php _e( 'A custom, widgetized welcome panel is coming soon.', 'wms-user-guide' ); ?></p>
<?php
echo sprintf(
	'<p>%1s <a href="%2s">%3s</a> %4s</p>',
	__( 'View options on the', 'wms-user-guide' ),
	esc_url( 'http://localhost/controlledchaos/wp-admin/index.php?page=' . WMSUG_ADMIN_SLUG . '-settings' ),
	__( 'Dashboard Settings', 'wms-user-guide' ),
	__( 'page.', 'wms-user-guide' )
); ?>