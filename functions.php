<?php
/**
 * Custom Theme functions and definitions
 *
 * @package MyVueTheme
 */

add_theme_support( 'wp-block-styles' );
add_theme_support( 'align-wide' );
add_theme_support( 'editor-styles' );
add_theme_support( 'post-thumbnails' );


function enqueue_vue_scripts() {
    wp_enqueue_script( 'vue-app', get_stylesheet_directory_uri() . '/assets/index-f7c1f477.js', array(), '2', true );
    wp_enqueue_style( 'vue-app', get_stylesheet_directory_uri() . '/assets/index-de5b7d6f.css', array(), '2' );
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
    $menu_name = $request->get_param('menu_name');
    
    // Get the menu ID based on the menu name
    $menu = wp_get_nav_menu_object($menu_name);

    if (!$menu) {
        return new WP_REST_Response('Menu not found', 404);
    }

    // Get the menu items
    $menu_items = wp_get_nav_menu_items($menu->term_id);

    return new WP_REST_Response($menu_items, 200);
}

add_action('rest_api_init', function () {
    register_rest_route('vt/v1', '/menu/', array(
        'methods' => 'GET',
        'callback' => 'custom_menu_rest_endpoint',
    ));
});