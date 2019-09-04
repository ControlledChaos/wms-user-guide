<?php
/**
 * Schema meta tags.
 *
 * @package    WMS_User_Guide
 * @subpackage Frontend\Meta_Tags
 * @since      controlled-chaos 1.0.0
 */

namespace WMS_User_Guide\Frontend\Meta_Tags;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
} ?>

<!-- Schema meta -->
<meta itemprop="url" content="<?php do_action( 'wmsug_meta_url_tag' ); ?>" />
<meta itemprop="name" content="<?php do_action( 'wmsug_meta_title_tag' ); ?>" />
<meta itemprop="description" content="<?php do_action( 'wmsug_meta_description_tag' ); ?>">
<meta itemprop="author" content="<?php do_action( 'wmsug_meta_author_tag' ); ?>" />
<meta itemprop="datePublished" content="<?php do_action( 'wmsug_meta_date_pub_tag' ); ?>" />
<meta itemprop="dateModified" content="<?php do_action( 'wmsug_meta_date_mod_tag' ); ?>" />
<meta itemprop="image" content="<?php do_action( 'wmsug_meta_image_tag' ); ?>" />
