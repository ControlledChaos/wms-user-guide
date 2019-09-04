<?php
/**
 * Content for the Inline Scripts help tab.
 *
 * @package    WMS_User_Guide
 * @subpackage Admin\Partials\Help
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 */

namespace WMS_User_Guide\Admin\Partials\Help;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
} ?>
<div>
	<h3><?php _e( 'Inline Scripts', 'wms-user-guide' ); ?></h3>
	<p><?php _e( 'Choose whether to include the plugin scripts as links in the head, using the standard enqueue method, or add them as inline scripts at the bottom of the page.', 'wms-user-guide' ); ?></p>
	<?php echo sprintf( __( '<p>Adding the javascript directy in the HTML will reduce HTTP requests and increase load speed. Additionally, speed checkers like that of Google will give warnings about scripts "above the fold", so putting scripts in the footer will give a better test score. Out of the box, this option only works for the scripts included with this plugin. If your modified version includes additional scripts then you will need to add them to both the <code>%1s</code> function and the <code>%2s</code> function in public/class-public.php, using the included scripts for example.</p>', 'wms-user-guide' ), esc_html( 'enqueue_scripts()' ), esc_html( 'get_scripts()' ) ); ?>
</div>