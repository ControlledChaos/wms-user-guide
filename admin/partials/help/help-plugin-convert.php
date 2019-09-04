<?php
/**
 * Content for the Convert Plugin help tab.
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
<h3><?php _e( 'Converting the plugin for your website', 'wms-user-guide' ); ?></h3>
<h4><?php _e( 'Directories and file names', 'wms-user-guide' ); ?></h4>
<p><?php _e( 'The names for directories and files are descriptive enough to describe what they do yet generic enough that they likely will not need to be changed. However, you may want to remove some files, such as that in which this code is written.', 'wms-user-guide' ); ?></p>
<h4><?php _e( 'Renaming the code', 'wms-user-guide' ); ?></h4>
<p><?php _e( 'To rename this plugin to convert it specifically for a single website, first rename this file and rename the plugin folder with the same name as this file. Then use a find &amp; replace function to look for the following...', 'wms-user-guide' ); ?></p>
<ol>
<?php echo sprintf( '<li><strong>%1s:</strong> %2s</li>', esc_html__( 'Text Domain', 'wms-user-guide' ), esc_html__( 'The text domain should be the same as this file and the plugin folder. Replace "wms-user-guide".', 'wms-user-guide' ) ); ?>
<?php echo sprintf( '<li><strong>%1s:</strong> %2s</li>', esc_html__( 'Classes', 'wms-user-guide' ), esc_html__( 'Classes are prefixed with the plugin name. Replace "Controlled_Chaos".', 'wms-user-guide' ) ); ?>
<?php echo sprintf( '<li><strong>%1s:</strong> %2s</li>', esc_html__( 'Class Variables', 'wms-user-guide' ), esc_html__( 'Class variables are prefixed with the plugin name. Replace "controlled_chaos".', 'wms-user-guide' ) ); ?>
<?php echo sprintf( '<li><strong>%1s:</strong> %2s</li>', esc_html__( 'Functions', 'wms-user-guide' ), esc_html__( 'There are a few functions prefixed with the plugin name. The above replace of "controlled_chaos" will have given them your new name.', 'wms-user-guide' ) ); ?>
<?php echo sprintf( '<li><strong>%1s:</strong> %2s</li>', esc_html__( 'Filters', 'wms-user-guide' ), esc_html__( 'Filters are prexixed with an abbreviation for the plugin name. Replace "wmsug".', 'wms-user-guide' ) ); ?>
<?php echo sprintf( '<li><strong>%1s:</strong> %2s</li>', esc_html__( 'Pages', 'wms-user-guide' ), esc_html__( 'Admin page URLs are prexixed with an abbreviation for the plugin name. The above replace of "wmsug" will have given them your new prefix.', 'wms-user-guide' ) ); ?>
<?php echo sprintf( '<li><strong>%1s:</strong> %2s</li>', esc_html__( 'Options', 'wms-user-guide' ), esc_html__( 'Options are prexixed with an abbreviation for the plugin name. The above replace of "wmsug" will have given them your new prefix.', 'wms-user-guide' ) ); ?>
<?php echo sprintf( '<li><strong>%1s:</strong> %2s</li>', esc_html__( 'Version', 'wms-user-guide' ), esc_html__( 'The plugin version is all caps and is prexixed with an abbreviation for the plugin name. Replace "WMSUG".', 'wms-user-guide' ) ); ?>
<?php echo sprintf( '<li><strong>%1s:</strong> %2s</li>', esc_html__( 'Author', 'wms-user-guide' ), esc_html__( 'The author name and email is used in class docblocks. Replace "Greg Sweet" and replace "greg@ccdzine.com".', 'wms-user-guide' ) ); ?>
<?php echo sprintf( '<li><strong>%1s:</strong> %2s</li>', esc_html__( 'Plugin Name', 'wms-user-guide' ), esc_html__( 'The plugin name is used in various places. Replace "Controlled Chaos".', 'wms-user-guide' ) ); ?>
</ol>