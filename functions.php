<?php
/**
 * Custom Theme functions and definitions
 *
 * @package MyVueTheme
 */

 if ( ! function_exists( 'myvuetheme_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function myvuetheme_support() {

		// Add support for block styles.


		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'myvuetheme_support' );


function enqueue_vue_scripts() {
    wp_enqueue_script( 'vue-app', get_stylesheet_directory_uri() . '/assets/index-8f2e947b.js', array(), '1.8', true );
    wp_enqueue_style( 'vue-app', get_stylesheet_directory_uri() . '/assets/index-2a904930.css', array(), '1.7' );
}

add_action( 'wp_enqueue_scripts', 'enqueue_vue_scripts' );