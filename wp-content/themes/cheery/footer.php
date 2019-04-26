<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cheery
 */

/**
 * cheery_site_content_ends_action hook
 *
 * @hooked cheery_site_content_ends -  10
 *
 */
do_action( 'cheery_site_content_ends_action' );

/**
 * cheery_footer_start_action hook
 *
 * @hooked cheery_footer_start -  10
 *
 */
do_action( 'cheery_footer_start_action' );

/**
 * cheery_site_info_action hook
 *
 * @hooked cheery_site_info -  10
 *
 */
do_action( 'cheery_site_info_action' );

/**
 * cheery_footer_ends_action hook
 *
 * @hooked cheery_footer_ends -  10
 * @hooked cheery_slide_to_top -  20
 *
 */
do_action( 'cheery_footer_ends_action' );

/**
 * cheery_page_ends_action hook
 *
 * @hooked cheery_page_ends -  10
 *
 */
do_action( 'cheery_page_ends_action' );

wp_footer();

/**
 * cheery_body_html_ends_action hook
 *
 * @hooked cheery_body_html_ends -  10
 *
 */
do_action( 'cheery_body_html_ends_action' );
