<?php
/**
 * About page media options output.
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
<h2><?php _e( 'Media and Upload Options', 'wms-user-guide' ); ?></h2>
<h3><?php _e( 'Image Sizes', 'wms-user-guide' ); ?></h3>
<ul>
	<li><?php _e( 'Add option to hard crop the medium and/or large image sizes', 'wms-user-guide' ); ?></li>
	<li><?php _e( 'Add option to allow SVG uploads to the Media Library', 'wms-user-guide' ); ?></li>
</ul>
<h3><?php _e( 'Fancybox Presentation', 'wms-user-guide' ); ?></h3>
<h3><?php _e( 'SVG Uploads', 'wms-user-guide' ); ?></h3>