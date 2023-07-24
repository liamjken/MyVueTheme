<?php
/**
 * Custom Theme functions and definitions
 *
 * @package MyVueTheme
 */

function enqueue_vue_scripts() {
    wp_enqueue_script( 'vue-app', get_stylesheet_directory_uri() . '/assets/index-1822be1f.js', array(), '1.6', true );
    wp_enqueue_style( 'vue-app', get_stylesheet_directory_uri() . '/assets/index-e1d8d0c3.css', array(), '1.6' );
}

add_action( 'wp_enqueue_scripts', 'enqueue_vue_scripts' );