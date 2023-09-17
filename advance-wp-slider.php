<?php
/*
 * Plugin Name:        Advance WP Slider
 * Plugin URI:        https://wordpress.org/plugins/advance-wp-slider
 * Description:       Animation slider in WordPress. It easy to install and implement in frontend with shortcode.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Tested up to:      6.3
 * Requires PHP:      7.2
 * Author:            rajubdpro
 * Author URI:        https://profiles.wordpress.org/rajubdpro/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       advance-wp-slider
 * Domain Path:       /languages
 */

if ( ! defined( 'ABSPATH' ) ) exit;
define('AWPSLIDER_PLUGIN_VERSION', '1.0.0');
define('AWPSLIDER_PLUGIN_URL', trailingslashit(plugins_url('/', __FILE__)));
define('AWPSLIDER_PLUGIN_PATH', trailingslashit(plugin_dir_path(__FILE__)));

/**----------------------------------------------------------------*/
/* Include all file
/*-----------------------------------------------------------------*/

/**
 * Include Awp Loader file
 */

include_once(dirname(__FILE__) . '/inc/AwpSlider_Loader.php');

if ( function_exists('awpslider_loader') ) {
    awpslider_loader();
}
