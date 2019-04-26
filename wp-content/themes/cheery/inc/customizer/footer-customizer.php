<?php
/**
 * Footer Customizer Options
 *
 * @package cheery
 */

// Add footer section
$wp_customize->add_section( 'cheery_footer_section', array(
	'title'             => esc_html__( 'Footer Section','cheery' ),
	'description'       => esc_html__( 'Footer Setting Options', 'cheery' ),
	'panel'             => 'cheery_theme_options_panel',
) );

// slide to top enable setting and control.
$wp_customize->add_setting( 'cheery_theme_options[slide_to_top]', array(
	'default'           => cheery_theme_option('slide_to_top'),
	'sanitize_callback' => 'cheery_sanitize_switch',
) );

$wp_customize->add_control( new Cheery_Switch_Control( $wp_customize, 'cheery_theme_options[slide_to_top]', array(
	'label'             => esc_html__( 'Show Slide to Top', 'cheery' ),
	'section'           => 'cheery_footer_section',
	'on_off_label' 		=> cheery_show_options(),
) ) );

// copyright text
$wp_customize->add_setting( 'cheery_theme_options[copyright_text]',
	array(
		'default'       		=> cheery_theme_option('copyright_text'),
		'sanitize_callback'		=> 'cheery_santize_allow_tags',
	)
);
$wp_customize->add_control( 'cheery_theme_options[copyright_text]',
    array(
		'label'      			=> esc_html__( 'Copyright Text', 'cheery' ),
		'section'    			=> 'cheery_footer_section',
		'type'		 			=> 'textarea',
    )
);
