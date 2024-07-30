<?php

/*
* Plugin Name:       Abn Basic Plugin
* Plugin URI:        https://example.com/plugins/the-basics/
* Description:       This is an basic plugin. This is for enqueue style and script files. 
* Version:           1.0.1
* Requires at least: 5.2
* Requires PHP:      7.2
* Author:            Abdullah Islam shanto
* Author URI:        #
* License:           GPL v2 or later
* License URI:       https://www.gnu.org/licenses/gpl-2.0.html
* Update URI:        https://example.com/my-plugin/
* Text Domain:       abn-basics-plugin
*/


if ( !defined('ABSPATH') ) {
    exit; // Exit if accessed directly
}

// Include the functions.php file
require_once( plugin_dir_path(__FILE__) . 'functions.php' );

