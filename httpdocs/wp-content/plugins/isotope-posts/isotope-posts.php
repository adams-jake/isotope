<?php
/**
 * Isotope Posts.
 *
 * @wordpress-plugin
 * Plugin Name:       Isotope Posts
 * Version:           2.1
 * Author:            Jake Adams
 * Author URI:        http://jake-adams.com/
 * Text Domain:       isotope-posts
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 * Description:		  Isotope plugin, taken over from Mandi Wise
 *
 * WordPress-Plugin-Boilerplate: v2.6.1
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Define the plugin directory
define( 'ISO_DIR', dirname( __FILE__ ) );

/*----------------------------------------------------------------------------*
 * Public-Facing Functionality
 *----------------------------------------------------------------------------*/

require_once( ISO_DIR . '/public/class-isotope-posts.php' );

register_activation_hook( __FILE__, array( 'Isotope_Posts', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'Isotope_Posts', 'deactivate' ) );

add_action( 'plugins_loaded', array( 'Isotope_Posts', 'get_instance' ) );

/*----------------------------------------------------------------------------*
 * Dashboard and Administrative Functionality
 *----------------------------------------------------------------------------*/

if ( is_admin() ) {

	require_once( ISO_DIR . '/admin/class-isotope-posts-admin.php' );
	add_action( 'plugins_loaded', array( 'Isotope_Posts_Admin', 'get_instance' ) );

}
