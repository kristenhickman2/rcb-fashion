<?php
/**
 * Global Customizer Options
 *
 * @package cheery
 */

// Add Global section
$wp_customize->add_section( 'cheery_global_section', array(
	'title'             => esc_html__( 'Global Setting','cheery' ),
	'description'       => esc_html__( 'Global Setting Options', 'cheery' ),
	'panel'             => 'cheery_theme_options_panel',
) );

// site layout setting and control.
$wp_customize->add_setting( 'cheery_theme_options[site_layout]', array(
	'sanitize_callback'   => 'cheery_sanitize_select',
	'default'             => cheery_theme_option('site_layout'),
) );

$wp_customize->add_control(  new Cheery_Radio_Image_Control ( $wp_customize, 'cheery_theme_options[site_layout]', array(
	'label'               => esc_html__( 'Site Layout', 'cheery' ),
	'section'             => 'cheery_global_section',
	'choices'			  => cheery_site_layout(),
) ) );

// loader setting and control.
$wp_customize->add_setting( 'cheery_theme_options[enable_loader]', array(
	'default'           => cheery_theme_option( 'enable_loader' ),
	'sanitize_callback' => 'cheery_sanitize_switch',
) );

$wp_customize->add_control( new Cheery_Switch_Control( $wp_customize, 'cheery_theme_options[enable_loader]', array(
	'label'             => esc_html__( 'Enable Loader', 'cheery' ),
	'section'           => 'cheery_global_section',
	'on_off_label' 		=> cheery_show_options(),
) ) );

// loader type control and setting
$wp_customize->add_setting( 'cheery_theme_options[loader_type]', array(
	'default'          	=> cheery_theme_option('loader_type'),
	'sanitize_callback' => 'cheery_sanitize_select',
) );

$wp_customize->add_control( 'cheery_theme_options[loader_type]', array(
	'label'             => esc_html__( 'Loader Type', 'cheery' ),
	'section'           => 'cheery_global_section',
	'type'				=> 'select',
	'choices'			=> cheery_get_spinner_list(),
) );
