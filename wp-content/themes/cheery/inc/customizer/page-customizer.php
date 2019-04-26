<?php
/**
 * Page Customizer Options
 *
 * @package cheery
 */

// Add excerpt section
$wp_customize->add_section( 'cheery_page_section', array(
	'title'             => esc_html__( 'Page Setting','cheery' ),
	'description'       => esc_html__( 'Page Setting Options', 'cheery' ),
	'panel'             => 'cheery_theme_options_panel',
) );

// sidebar layout setting and control.
$wp_customize->add_setting( 'cheery_theme_options[sidebar_page_layout]', array(
	'sanitize_callback'   => 'cheery_sanitize_select',
	'default'             => cheery_theme_option('sidebar_page_layout'),
) );

$wp_customize->add_control(  new Cheery_Radio_Image_Control ( $wp_customize, 'cheery_theme_options[sidebar_page_layout]', array(
	'label'               => esc_html__( 'Sidebar Layout', 'cheery' ),
	'section'             => 'cheery_page_section',
	'choices'			  => cheery_sidebar_position(),
) ) );
