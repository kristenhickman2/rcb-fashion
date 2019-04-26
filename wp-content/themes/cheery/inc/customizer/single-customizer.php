<?php
/**
 * Single Post Customizer Options
 *
 * @package cheery
 */

// Add excerpt section
$wp_customize->add_section( 'cheery_single_section', array(
	'title'             => esc_html__( 'Single Post Setting','cheery' ),
	'description'       => esc_html__( 'Single Post Setting Options', 'cheery' ),
	'panel'             => 'cheery_theme_options_panel',
) );

// sidebar layout setting and control.
$wp_customize->add_setting( 'cheery_theme_options[sidebar_single_layout]', array(
	'sanitize_callback'   => 'cheery_sanitize_select',
	'default'             => cheery_theme_option('sidebar_single_layout'),
) );

$wp_customize->add_control(  new Cheery_Radio_Image_Control ( $wp_customize, 'cheery_theme_options[sidebar_single_layout]', array(
	'label'               => esc_html__( 'Sidebar Layout', 'cheery' ),
	'section'             => 'cheery_single_section',
	'choices'			  => cheery_sidebar_position(),
) ) );

// Archive date meta setting and control.
$wp_customize->add_setting( 'cheery_theme_options[show_single_date]', array(
	'default'           => cheery_theme_option( 'show_single_date' ),
	'sanitize_callback' => 'cheery_sanitize_switch',
) );

$wp_customize->add_control( new Cheery_Switch_Control( $wp_customize, 'cheery_theme_options[show_single_date]', array(
	'label'             => esc_html__( 'Show Date', 'cheery' ),
	'section'           => 'cheery_single_section',
	'on_off_label' 		=> cheery_show_options(),
) ) );

// Archive category meta setting and control.
$wp_customize->add_setting( 'cheery_theme_options[show_single_category]', array(
	'default'           => cheery_theme_option( 'show_single_category' ),
	'sanitize_callback' => 'cheery_sanitize_switch',
) );

$wp_customize->add_control( new Cheery_Switch_Control( $wp_customize, 'cheery_theme_options[show_single_category]', array(
	'label'             => esc_html__( 'Show Category', 'cheery' ),
	'section'           => 'cheery_single_section',
	'on_off_label' 		=> cheery_show_options(),
) ) );

// Archive category meta setting and control.
$wp_customize->add_setting( 'cheery_theme_options[show_single_tags]', array(
	'default'           => cheery_theme_option( 'show_single_tags' ),
	'sanitize_callback' => 'cheery_sanitize_switch',
) );

$wp_customize->add_control( new Cheery_Switch_Control( $wp_customize, 'cheery_theme_options[show_single_tags]', array(
	'label'             => esc_html__( 'Show Tags', 'cheery' ),
	'section'           => 'cheery_single_section',
	'on_off_label' 		=> cheery_show_options(),
) ) );

// Archive author meta setting and control.
$wp_customize->add_setting( 'cheery_theme_options[show_single_author]', array(
	'default'           => cheery_theme_option( 'show_single_author' ),
	'sanitize_callback' => 'cheery_sanitize_switch',
) );

$wp_customize->add_control( new Cheery_Switch_Control( $wp_customize, 'cheery_theme_options[show_single_author]', array(
	'label'             => esc_html__( 'Show Author', 'cheery' ),
	'section'           => 'cheery_single_section',
	'on_off_label' 		=> cheery_show_options(),
) ) );
