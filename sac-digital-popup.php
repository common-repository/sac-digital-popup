<?php

/**
 * 
 * @link              https://sac.digital
 * @since             1.0.0
 * @package           Sac_Digital_Popup
 *
 * @wordpress-plugin
 * Plugin Name:       SAC Digital Popup
 * Plugin URI:        https://sac.digital
 * Description:       O Sistema de Auto Atendimento via Whatsapp da SAC DIGITAL é a Melhor Plataforma do Brasil, Atendendo a Pequenas, Médias e Grandes Empresas.
 * Version:           3.0.0
 * Author:            Alertrack Soluções
 * Author URI:        https://alertrack.com.br
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       sac-digital-popup
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'PLUGIN_NAME_VERSION', '3.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-sac-digital-popup-activator.php
 */
function activate_sac_digital_popup() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-sac-digital-popup-activator.php';
	Sac_Digital_Popup_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-sac-digital-popup-deactivator.php
 */
function deactivate_sac_digital_popup() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-sac-digital-popup-deactivator.php';
	Sac_Digital_Popup_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_sac_digital_popup' );
register_deactivation_hook( __FILE__, 'deactivate_sac_digital_popup' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-sac-digital-popup.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_sac_digital_popup() {

	$plugin = new Sac_Digital_Popup();
	$plugin->run();

}
run_sac_digital_popup();
