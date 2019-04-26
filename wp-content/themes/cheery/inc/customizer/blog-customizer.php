<?php
/**
 * Blog / Archive / Search Customizer Options
 *
 * @package cheery
 */

// Add blog section
$wp_customize->add_section( 'cheery_blog_section', array(
	'title'             => esc_html__( 'Blog/Archive Page Setting','cheery' ),
	'description'       => esc_html__( 'Blog/Archive/Search Page Setting Options', 'cheery' ),
	'panel'             => 'cheery_theme_options_panel',
) );

// latest blog title drop down chooser control and setting
$wp_customize->add_setting( 'cheery_theme_options[latest_blog_title]', array(
	'sanitize_callback' => 'sanitize_text_field',
	'default'          	=> cheery_theme_option( 'latest_blog_title' ),
) );

$wp_customize->add_control( 'cheery_theme_options[latest_blog_title]', array(
	'label'             => esc_html__( 'Latest Blog Title', 'cheery' ),
	'description'       => esc_html__( 'Note: This title is displayed when your homepage displays option is set to latest posts.', 'cheery' ),
	'section'           => 'cheery_blog_section',
	'type'				=> 'text',
) );

// sidebar layout setting and control.
$wp_customize->add_setting( 'cheery_theme_options[sidebar_layout]', array(
	'sanitize_callback'   => 'cheery_sanitize_select',
	'default'             => cheery_theme_option('sidebar_layout'),
) );

$wp_customize->add_control(  new Cheery_Radio_Image_Control ( $wp_customize, 'cheery_theme_options[sidebar_layout]', array(
	'label'               => esc_html__( 'Sidebar Layout', 'cheery' ),
	'description'         => esc_html__( 'Note: Option for Archive and Search Page.', 'cheery' ),
	'section'             => 'cheery_blog_section',
	'choices'			  => cheery_sidebar_position(),
) ) );

// column control and setting
$wp_customize->add_setting( 'cheery_theme_options[column_type]', array(
	'default'          	=> cheery_theme_option('column_type'),
	'sanitize_callback' => 'cheery_sanitize_select',
) );

$wp_customize->add_control( 'cheery_theme_options[column_type]', array(
	'label'             => esc_html__( 'Column Layout', 'cheery' ),
	'description'         => esc_html__( 'Note: Option for Archive and Search Page.', 'cheery' ),
	'section'           => 'cheery_blog_section',
	'type'				=> 'select',
	'choices'			=> array( 
		'column-1' 		=> esc_html__( 'One Column', 'cheery' ),
		'column-2' 		=> esc_html__( 'Two Column', 'cheery' ),
	),
) );

// excerpt count control and setting
$wp_customize->add_setting( 'cheery_theme_options[excerpt_count]', array(
	'default'          	=> cheery_theme_option('excerpt_count'),
	'sanitize_callback' => 'cheery_sanitize_number_range',
	'validate_callback' => 'cheery_validate_excerpt_count',
	'transport'			=> 'postMessage',
) );

$wp_customize->add_control( 'cheery_theme_options[excerpt_count]', array(
	'label'             => esc_html__( 'Excerpt Length', 'cheery' ),
	'description'       => esc_html__( 'Note: Min 1 & Max 50.', 'cheery' ),
	'section'           => 'cheery_blog_section',
	'type'				=> 'number',
	'input_attrs'		=> array(
		'min'	=> 1,
		'max'	=> 50,
		),
) );

// View More text control and setting
$wp_customize->add_setting( 'cheery_theme_options[read_more_text]', array(
	'sanitize_callback' => 'sanitize_text_field',
	'default'          	=> cheery_theme_option( 'read_more_text' ),
) );

$wp_customize->add_control( 'cheery_theme_options[read_more_text]', array(
	'label'             => esc_html__( 'View More Text', 'cheery' ),
	'section'           => 'cheery_blog_section',
	'type'				=> 'text',
) );

// pagination control and setting
$wp_customize->add_setting( 'cheery_theme_options[pagination_type]', array(
	'default'          	=> cheery_theme_option('pagination_type'),
	'sanitize_callback' => 'cheery_sanitize_select',
) );

$wp_customize->add_control( 'cheery_theme_options[pagination_type]', array(
	'label'             => esc_html__( 'Pagination Type', 'cheery' ),
	'section'           => 'cheery_blog_section',
	'type'				=> 'select',
	'choices'			=> array( 
		'default' 		=> esc_html__( 'Default', 'cheery' ),
		'numeric' 		=> esc_html__( 'Numeric', 'cheery' ),
	),
) );

// Archive date meta setting and control.
$wp_customize->add_setting( 'cheery_theme_options[show_date]', array(
	'default'           => cheery_theme_option( 'show_date' ),
	'sanitize_callback' => 'cheery_sanitize_switch',
) );

$wp_customize->add_control( new Cheery_Switch_Control( $wp_customize, 'cheery_theme_options[show_date]', array(
	'label'             => esc_html__( 'Show Date', 'cheery' ),
	'section'           => 'cheery_blog_section',
	'on_off_label' 		=> cheery_show_options(),
) ) );

// Archive category meta setting and control.
$wp_customize->add_setting( 'cheery_theme_options[show_category]', array(
	'default'           => cheery_theme_option( 'show_category' ),
	'sanitize_callback' => 'cheery_sanitize_switch',
) );

$wp_customize->add_control( new Cheery_Switch_Control( $wp_customize, 'cheery_theme_options[show_category]', array(
	'label'             => esc_html__( 'Show Category', 'cheery' ),
	'section'           => 'cheery_blog_section',
	'on_off_label' 		=> cheery_show_options(),
) ) );

// Archive author meta setting and control.
$wp_customize->add_setting( 'cheery_theme_options[show_author]', array(
	'default'           => cheery_theme_option( 'show_author' ),
	'sanitize_callback' => 'cheery_sanitize_switch',
) );

$wp_customize->add_control( new Cheery_Switch_Control( $wp_customize, 'cheery_theme_options[show_author]', array(
	'label'             => esc_html__( 'Show Author', 'cheery' ),
	'section'           => 'cheery_blog_section',
	'on_off_label' 		=> cheery_show_options(),
) ) );

// Archive comment meta setting and control.
$wp_customize->add_setting( 'cheery_theme_options[show_comment]', array(
	'default'           => cheery_theme_option( 'show_comment' ),
	'sanitize_callback' => 'cheery_sanitize_switch',
) );

$wp_customize->add_control( new Cheery_Switch_Control( $wp_customize, 'cheery_theme_options[show_comment]', array(
	'label'             => esc_html__( 'Show Comment', 'cheery' ),
	'section'           => 'cheery_blog_section',
	'on_off_label' 		=> cheery_show_options(),
) ) );