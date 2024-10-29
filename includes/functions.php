<?php

// API Option
function shaped_plugin_option( $option, $section, $default = '' ) {

	$options = get_option( $section );

	if ( isset( $options[ $option ] ) ) {
		return $options[ $option ];
	}

	return $default;

}

/**
 * Enqueue scripts and styles.
 */
function aitasi_plugin_scripts() {
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'bootstrap-js', plugins_url( '../assets/js/bootstrap.min.js', __FILE__ ), array( 'jquery' ) );
	wp_enqueue_script( 'countdown-js', plugins_url( '../assets/js/countdown.js', __FILE__ ), array( 'jquery' ) );
	wp_enqueue_script( 'smoothscroll-js', plugins_url( '../assets/js/smoothscroll.js', __FILE__ ), array( 'jquery' ) );

	wp_enqueue_style( 'bootstrap-css', aitasi_coming_soon_plugin_url . 'assets/css/bootstrap.min.css' );
	wp_enqueue_style( 'font-awesome', aitasi_coming_soon_plugin_url . 'assets/css/font-awesome.min.css' );
	wp_enqueue_style( 'style', aitasi_coming_soon_plugin_url . 'assets/css/style.css' );

}
add_action( 'wp_enqueue_scripts', 'aitasi_plugin_scripts' );
