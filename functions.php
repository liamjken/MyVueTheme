<?php
/**
 * Custom Theme functions and definitions
 *
 * @package MyVueTheme
 */

function enqueue_vue_scripts() {
    wp_enqueue_script( 'vue-app', get_stylesheet_directory_uri() . '/assets/index-94e77084.js', array(), '1.1', true );
    wp_enqueue_style( 'vue-app', get_stylesheet_directory_uri() . '/assets/index-3822d8a5.css', array(), '1.1' );
}

add_action( 'wp_enqueue_scripts', 'enqueue_vue_scripts' );