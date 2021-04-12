<?php
/**
 * Plugin Name: Migrator
 * Plugin URI: https://mrcollins.io
 * Description: Migrate your site to WordPress.
 * Author: MrCollins.io
 * Version: 1.0
 * Author URI: https://mrcollins.io
 *
 * @package Migrator
 */

// Path to this plugin.
use Migrator\Main;

define( 'MIGRATOR_PATH', plugin_dir_path( __FILE__ ) . '/' );

// URL path to this plugin.
define( 'MIGRATOR_URL', plugin_dir_url( __FILE__ ) );

// Autoload our classes.
require_once 'autoload.php';
Main::get_instance();
