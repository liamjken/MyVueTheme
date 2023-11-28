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

// Create custom REST API endpoint for menus
function custom_menu_rest_endpoint(WP_REST_Request $request) {
    $menu_location = $request->get_param('menu_location');
    $menu = wp_get_nav_menu_items($menu_location);

    return new WP_REST_Response($menu, 200);
}

add_action('rest_api_init', function () {
    register_rest_route('custom/v1', '/menu/', array(
        'methods' => 'GET',
        'callback' => 'custom_menu_rest_endpoint',
    ));
});