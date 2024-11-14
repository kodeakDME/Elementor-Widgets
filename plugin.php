<?php
/**
 * @package My_Widgets
 * @version 1.0
 */
/*
Plugin Name: My Widgets
Description: This plugin runs all of the widgets used in your theme. Do not disable or remove this plugin or your website will break. 
Author: Kodeak Digital Marketing Experts
Author URI: https://kodeak.com
Version: 1.0
Text Domain: my-widgets
*/

if ( ! defined( 'WPINC' ) ) {
    die;
}
// Register new Elementor Widgets
function add_elementor_widget_categories( $elements_manager ) {
	$elements_manager->add_category(
		'my-category',
		[
			'title' => esc_html__( 'My Widgets', 'textdomain' ),
			'icon' => 'fa fa-plug',
		]
	);
}
add_action( 'elementor/elements/categories_registered', 'add_elementor_widget_categories' );

function register_my_widgets( $widgets_manager ) {
	require_once( __DIR__ . '/widgets/my-widget.php' );
  $widgets_manager->register( new \Elementor_My_Widget() );
}
add_action( 'elementor/widgets/register', 'register_my_widgets' );
