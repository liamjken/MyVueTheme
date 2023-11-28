<?php
/**
 * Custom Theme functions and definitions
 *
 * @package MyVueTheme
 */

add_theme_support( 'wp-block-styles' );
add_theme_support( 'align-wide' );
add_theme_support( 'editor-styles' );


function enqueue_vue_scripts() {
    wp_enqueue_script( 'vue-app', get_stylesheet_directory_uri() . '/assets/index-061e8ef7.js', array(), '1.8', true );
    wp_enqueue_style( 'vue-app', get_stylesheet_directory_uri() . '/assets/index-2a904930.css', array(), '1.7' );
}

add_action( 'wp_enqueue_scripts', 'enqueue_vue_scripts' );

add_theme_support('menus');

function myvuetheme_setup() {
    // Add theme support for menus
    add_theme_support('menus');

    // Register your menus
    register_nav_menus(
        array(
            'primary-menu' => __('Primary Menu', 'myvuetheme'),
            // Add more menus if needed
        )
    );
}

add_action('after_setup_theme', 'myvuetheme_setup');

function myvuetheme_register_menus() {
    register_nav_menus(
        array(
            'primary-menu' => __('Primary Menu', 'myvuetheme'),
            // Add more menus if needed
        )
    );
}

add_action('after_setup_theme', 'myvuetheme_register_menus');