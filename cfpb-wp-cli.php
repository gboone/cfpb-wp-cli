<?php
/*
 * Plugin Name: CFPB WP CLI Commands
 * Plugin URI: https://github.com/cfpb/cfpb-wp-cli
 * Description: A collection of wp-cli plugins we use at CFPB
 * Version: 1.0
 * Author: Greg Boone, Kurt Wall, Scott Cranfill
 * Author URI: https://cfpb.github.io/
 * License: Public Domain
 */

if ( defined('WP_CLI') && WP_CLI ) {
	include __DIR__ . '/library.php';
    include __DIR__ . '/migrate.php';
    include __DIR__ . '/randomize.php';
}
?>
