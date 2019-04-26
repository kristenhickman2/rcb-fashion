<?php
/**
 * Slider Customizer Options
 *
 * @package cheery
 */

// Add slider section
$wp_customize->add_section( 'cheery_slider_section', array(
	'title'             => esc_html__( 'Slider Section','cheery' ),
	'description'       => esc_html__( 'Slider Setting Options', 'cheery' ),
	'panel'             => 'cheery_theme_options_panel',
) );

// slider menu enable setting and control.
$wp_customize->add_setting( 'cheery_theme_options[enable_slider]', array(
	'default'           => cheery_theme_option('enable_slider'),
	'sanitize_callback' => 'cheery_sanitize_switch',
) );

$wp_customize->add_control( new Cheery_Switch_Control( $wp_customize, 'cheery_theme_options[enable_slider]', array(
	'label'             => esc_html__( 'Enable Slider', 'cheery' ),
	'section'           => 'cheery_slider_section',
	'on_off_label' 		=> cheery_show_options(),
) ) );

// slider social menu enable setting and control.
$wp_customize->add_setting( 'cheery_theme_options[slider_entire_site]', array(
	'default'           => cheery_theme_option('slider_entire_site'),
	'sanitize_callback' => 'cheery_sanitize_switch',
) );

$wp_customize->add_control( new Cheery_Switch_Control( $wp_customize, 'cheery_theme_options[slider_entire_site]', array(
	'label'             => esc_html__( 'Show Entire Site', 'cheery' ),
	'section'           => 'cheery_slider_section',
	'on_off_label' 		=> cheery_show_options(),
) ) );

// slider arrow control enable setting and control.
$wp_customize->add_setting( 'cheery_theme_options[slider_arrow]', array(
	'default'           => cheery_theme_option('slider_arrow'),
	'sanitize_callback' => 'cheery_sanitize_switch',
) );

$wp_customize->add_control( new Cheery_Switch_Control( $wp_customize, 'cheery_theme_options[slider_arrow]', array(
	'label'             => esc_html__( 'Show Arrow Controller', 'cheery' ),
	'section'           => 'cheery_slider_section',
	'on_off_label' 		=> cheery_show_options(),
) ) );

// slider btn label chooser control and setting
$wp_customize->add_setting( 'cheery_theme_options[slider_btn_label]', array(
	'default'          	=> cheery_theme_option('slider_btn_label'),
	'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( 'cheery_theme_options[slider_btn_label]', array(
	'label'             => esc_html__( 'Button Label', 'cheery' ),
	'section'           => 'cheery_slider_section',
	'type'				=> 'text',
) );

for ( $i = 1; $i <= 5; $i++ ) :

	// slider pages drop down chooser control and setting
	$wp_customize->add_setting( 'cheery_theme_options[slider_content_page_' . $i . ']', array(
		'sanitize_callback' => 'cheery_sanitize_page_post',
	) );

	$wp_customize->add_control( new Cheery_Dropdown_Chosen_Control( $wp_customize, 'cheery_theme_options[slider_content_page_' . $i . ']', array(
		'label'             => sprintf( esc_html__( 'Select Page %d', 'cheery' ), $i ),
		'section'           => 'cheery_slider_section',
		'choices'			=> cheery_page_choices(),
	) ) );

endfor;