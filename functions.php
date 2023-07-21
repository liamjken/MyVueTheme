<?php
/**
 * Custom Theme functions and definitions
 *
 * @package MyVueTheme
 */

function enqueue_vue_scripts() {
    wp_enqueue_script( 'vue-app', get_stylesheet_directory_uri() . '/assets/index-1cd05537.js', array(), '1.5', true );
    wp_enqueue_style( 'vue-app', get_stylesheet_directory_uri() . '/assets/index-e1d8d0c3.css', array(), '1.5' );
}

add_action( 'wp_enqueue_scripts', 'enqueue_vue_scripts' );