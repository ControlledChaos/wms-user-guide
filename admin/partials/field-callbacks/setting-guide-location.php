<?php
/**
 * Select where in the admin menu to display the guide link
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

// Get the guide location option.
$location = get_option( 'wms_user_guide_location' );

?>
<fieldset id="user-guide-location">
	<legend class="screen-reader-text"><span><?php _e( 'User Guide Location', 'wms-user-guide' ); ?> </span></legend>
	<p>
		<label for="wms_user_guide_location"><?php echo $args[0]; ?></label>
	</p>
	<select name="wms_user_guide_location">
		<option value="dashboard" <?php selected( $location, 'dashboard' ); ?>><?php _e( 'Under Dashboard', 'wms-user-guide' ); ?></option>
		<option value="users" <?php selected( $location, 'users' ); ?>><?php _e( 'Under Users', 'wms-user-guide' ); ?></option>
		<option value="top" <?php selected( $location, 'top' ); ?>><?php _e( 'Top Level', 'wms-user-guide' ); ?></option>
	</select>
</fieldset>