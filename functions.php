<?php
/**
 * Custom Theme functions and definitions
 *
 * @package MyVueTheme
 */

 function myVueThemeSupports_support() {

    // Add support for block styles.
    add_theme_support( 'wp-block-styles' );

    // Enqueue editor styles.
    add_editor_style( 'style.css' );

}


add_action( 'init', 'myVueThemeSupports_support' );

function enqueue_default_block_styles() {
    wp_enqueue_style('wp-block-library'); // Enqueue default block styles.
}

add_action('enqueue_block_editor_assets', 'enqueue_default_block_styles');


function enqueue_vue_scripts() {
    wp_enqueue_script( 'vue-app', get_stylesheet_directory_uri() . '/assets/index-8f2e947b.js', array(), '1.8', true );
    wp_enqueue_style( 'vue-app', get_stylesheet_directory_uri() . '/assets/index-2a904930.css', array(), '1.7' );
}

add_action( 'wp_enqueue_scripts', 'enqueue_vue_scripts' );