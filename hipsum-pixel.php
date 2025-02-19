<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://www.sinawiwebdesign.com
 * @since             1.0
 * @package           Hipsum_Pixel
 *
 * @wordpress-plugin
 * Plugin Name:       Hipsum Pixel
 * Plugin URI:        http://www.sinawiwebdesign.com/wordpress-plugins/hipsum-pixel
 * Description:       Creates a button on the WordPress editor toolbar to insert a configurable amount of Lorem Ipsum or Gibberish placeholder text and random images using two data services to retrieve data (randomtext.me and lorempixel.com or placekitten.com)
 * Version:           2.2
 * Author:            Laith Sinawi
 * Author URI:        http://www.sinawiwebdesign.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       hipsum-pixel
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-hipsum-pixel-activator.php
 */
function activate_hipsum_pixel() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-hipsum-pixel-activator.php';
	Hipsum_Pixel_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-hipsum-pixel-deactivator.php
 */
function deactivate_hipsum_pixel() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-hipsum-pixel-deactivator.php';
	Hipsum_Pixel_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_hipsum_pixel' );
register_deactivation_hook( __FILE__, 'deactivate_hipsum_pixel' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-hipsum-pixel.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_hipsum_pixel() {

	$plugin = new Hipsum_Pixel();
	$plugin->run();

}
run_hipsum_pixel();
