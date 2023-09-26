<?php
/*
 * Plugin Name: WFEA Toggle
 * Description: Toggle between calendar and list view
 * Author:      Alan
 * Version:     1.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// enqueue a jquery script

add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_script( 'wfea-toggle', plugin_dir_url( __FILE__ ) . 'wfea-toggle.js', array( 'jquery' ), '1.0', true );
} );
add_action( 'wp_enqueue_styles', function () {
	wp_enqueue_style( 'wfea-toggle', plugin_dir_url( __FILE__ ) . 'wfea-toggle.css', array(), '1.0' );
} );
// add a shortcode
add_shortcode( 'wfea-toggle', function ( $atts ) {
	// return the html
	return '<div class="wfea-toggle">
	<div class="wfea-toggle__buttons">
		<button class="wfea-toggle__button wfea-toggle__button--cal">' . esc_html__( 'Calendar View', 'widget-for-eventbrite-api' ) . '</button>
		<button class="wfea-toggle__button wfea-toggle__button--list">' . esc_html__( 'List View', 'widget-for-eventbrite-api' ) . '</button>
	</div>
	<div class="wfea-toggle__wrap">
		<div class="wfea-toggle__cal">' . do_shortcode( '[wfea layout=cal limit=9999]' ) . '</div>
		<div class="wfea-toggle__list">' . do_shortcode( '[wfea layout=short_date limit=5]' ) . '</div>
	</div>
</div>';
} );
