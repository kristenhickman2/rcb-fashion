<?php
/**
 * Default Theme Customizer Values
 *
 * @package cheery
 */

function cheery_get_default_theme_options() {
	$cheery_default_options = array(
		// default options

		// Slider
		'enable_slider'			=> true,
		'slider_entire_site'	=> false,
		'slider_arrow'			=> true,

		// Footer
		'slide_to_top'			=> true,
		'copyright_text'		=> esc_html__( 'Copyright &copy; 2018 | All Rights Reserved.', 'cheery' ),

		// blog / archive
		'latest_blog_title'		=> esc_html__( 'Blogs', 'cheery' ),
		'read_more_text'		=> esc_html__( 'View Details', 'cheery' ),
		'excerpt_count'			=> 25,
		'pagination_type'		=> 'numeric',
		'sidebar_layout'		=> 'right-sidebar',
		'column_type'			=> 'column-1',
		'show_date'				=> true,
		'show_category'			=> true,
		'show_author'			=> true,
		'show_comment'			=> true,

		// single post
		'sidebar_single_layout'	=> 'right-sidebar',
		'show_single_date'		=> true,
		'show_single_category'	=> true,
		'show_single_tags'		=> true,
		'show_single_author'	=> true,

		// page
		'sidebar_page_layout'	=> 'right-sidebar',

		// global
		'enable_loader'			=> false,
		'loader_type'			=> 'spinner-dots',
		'site_layout'			=> 'full',

	);

	$output = apply_filters( 'cheery_default_theme_options', $cheery_default_options );
	return $output;
}