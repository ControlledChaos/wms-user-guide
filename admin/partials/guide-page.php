<?php
/**
 * User guide page output
 *
 * Displays a foreach loop of the user guide post type.
 * Empty actions provided for customization.
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

// Apply a filter to the page title.
$page_title = apply_filters( 'wmsug_guide_page_title', __( 'User Guide - Instructions & Tutorials', 'mixes-plugin' ) );

// Access the post object.
global $post;

// Post query arguments.
$args = [
	'post_type'              => [ 'user_guide' ],
	'post_status'            => [ 'private' ],
	'nopaging'               => true,
	'posts_per_page'         => -1,
	'ignore_sticky_posts'    => false,
	'order'                  => 'ASC',
	'orderby'                => 'menu_order',
];

// Get posts as a variable for foreach loops.
$posts = get_posts( $args );
foreach( $posts as $post ) {
	$tab = $post->ID;

	/**
	 * Active tab switcher.
	 *
	 * @since  1.0.0
	 * @return void
	 */
	if ( isset( $_GET[ 'tab' ] ) ) {
		$active_tab = $_GET[ 'tab' ];
	} else {
		$active_tab = 'first';
	}
}

?>
<div class="wrap">
    <h1><?php echo $page_title; ?></h1>

    <hr />

	<?php do_action( 'wmsug_before_guide_tabbed_content' ); ?>
	<div class="backend-tabbed-content">
		<?php do_action( 'wmsug_before_guide_tabs' ); ?>
		<ul>
		<?php foreach( $posts as $post ) :
			echo sprintf(
				'<li><a href="#%1s"><span class="dashicons %2s"></span> %3s</a></li>',
				$post->ID,
				'', // get_field( 'instructions_tab_icon' ),
				the_title() // get_field( 'instructions_tab_text' )
			);
		endforeach; ?>
		</ul>
		<?php do_action( 'wmsug_after_guide_tabs' ); ?>
		<?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
			<?php do_action( 'wmsug_before_guide_article' ); ?>
			<article id="<?php echo $post->ID; ?>" class="entry-content">
				<header class="instructions-tab-header">
					<?php do_action( 'wmsug_before_guide_tab_title' ); ?>
					<h2><?php the_title(); ?></h2>
					<?php do_action( 'wmsug_after_guide_tab_title' ); ?>
				</header>
				<div class="instructions-tab-content">
					<?php do_action( 'wmsug_before_guide_tab_content' ); ?>
					<?php the_content(); ?>
					<?php do_action( 'wmsug_after_guide_tab_content' ); ?>
				</div>
			</article>
			<?php do_action( 'wmsug_after_guide_article' ); ?>
		<?php endforeach; wp_reset_postdata(); ?>
	</div>
	<?php do_action( 'wmsug_after_guide_tabbed_content' ); ?>
</div>