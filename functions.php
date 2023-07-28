<?php
/**
 * Custom Theme functions and definitions
 *
 * @package MyVueTheme
 */

function enqueue_vue_scripts() {
    wp_enqueue_script( 'vue-app', get_stylesheet_directory_uri() . '/assets/index-b4485de2.js', array(), '1.7', true );
    wp_enqueue_style( 'vue-app', get_stylesheet_directory_uri() . '/assets/index-2a904930.css', array(), '1.7' );
}

add_action( 'wp_enqueue_scripts', 'enqueue_vue_scripts' );