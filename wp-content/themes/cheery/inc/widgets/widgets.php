<?php
/**
 * Register Widgets
 *
 * @package cheery
 */

/**
 * Load dynamic logic for the widgets.
 */
function cheery_widget_js( $hook ) {
	if ( 'widgets.php' === $hook ) :
		wp_enqueue_script( 'media-upload' );
	   	wp_enqueue_media();
	   	
		// Choose from select jquery.
		wp_enqueue_style( 'cheery-admin-css', get_template_directory_uri() . '/assets/css/admin' . cheery_min() . '.css' );
		wp_enqueue_style( 'jquery-chosen-css', get_template_directory_uri() . '/assets/css/chosen' . cheery_min() . '.css' );
		wp_enqueue_script( 'jquery-chosen', get_template_directory_uri() . '/assets/js/chosen' . cheery_min() . '.js', array( 'jquery' ), '1.4.2', true );
		wp_enqueue_script( 'cheery-admin-script', get_template_directory_uri() . '/assets/js/admin' . cheery_min() . '.js', array( 'jquery', 'jquery-chosen' ), '1.0.0', true );
	endif;

}
add_action( 'admin_enqueue_scripts', 'cheery_widget_js' );

/*
 * Add social widget
 */
require get_template_directory() . '/inc/widgets/social-widget.php';

/**
 * Register widgets
 */
function cheery_register_widgets() {
	
	register_widget( 'Cheery_Social_Links_Widget' );

}
add_action( 'widgets_init', 'cheery_register_widgets' );