<?php
/**
 * Thor
 *
 * @package           Thor
 * @author            Dorin Lazar
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       Thor
 * Plugin URI:        https://github.com/codebjorn/thor
 * Description:       WP Plugin Boilerplate
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.1
 * Author:            Dorin Lazar
 * Text Domain:       thor
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

/*
|--------------------------------------------------------------------------
| Register The Composer Auto Loader
|--------------------------------------------------------------------------
*/
if (!file_exists(__DIR__ . '/vendor/autoload.php')) {
    wp_die(__('Error locating autoloader. Please run <code>composer install</code>.', 'Thor'));
}

require_once __DIR__ . '/vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Boot application
|--------------------------------------------------------------------------
*/
\Thor\App::boot(__DIR__);
