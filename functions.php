<?php

if ( !defined('ABSPATH') ) {
    exit; // Exit if accessed directly
}

// Enqueue styles
function abn_style_enqueue() {
	wp_enqueue_style( 'abn-stylesheet', plugins_url( 'style.css', __FILE__ ) );
	wp_enqueue_style( 'abn-main-style', plugins_url( 'assets/css/main.css', __FILE__ ), array(), '1.0.0' );
}

add_action("wp_head", "abn_style_enqueue");


// Enqueue scripts
function abn_scripts_enqueue() {
    wp_enqueue_script( 'abn-app', plugins_url() . 'assets/js/app.js', array('jQuery'), '1.0.0', true );
}

add_action("wp_footer", "abn_scripts_enqueue");
