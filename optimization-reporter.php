<?php
/**
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://wpoptimizationreporter.com
 * @since             1.0.0
 * @package           WP Optimization Reporter
 *
 * Plugin Name: WP Optimization Reporter
 * Plugin URI: http://wpoptimizationreporter.com
 * Description: A plugin for your wordpress blog or website to fetch your optimization scores for any page from popular services like gtmetrix, pingdom, and google pagespeed insights.
 * Version: 1.0.0
 * Author: Justin Voelkel
 * Author URI: http://justinvoelkel.me
 * License: GPL2
 */

namespace optimization_reporter;

if (!defined('WPINC')) {
    die;
}

require_once 'vendor/autoload.php';
require_once 'src/Optimization_Reporter.php';

$plugin = new Optimization_Reporter();
$plugin->run();