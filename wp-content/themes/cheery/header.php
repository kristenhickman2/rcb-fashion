<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cheery
 */

/**
 * cheery_doctype_action hook
 *
 * @hooked cheery_doctype -  10
 *
 */
do_action( 'cheery_doctype_action' );

/**
 * cheery_head_action hook
 *
 * @hooked cheery_head -  10
 *
 */
do_action( 'cheery_head_action' );

/**
 * cheery_body_start_action hook
 *
 * @hooked cheery_body_start -  10
 *
 */
do_action( 'cheery_body_start_action' );
 
/**
 * cheery_page_start_action hook
 *
 * @hooked cheery_page_start -  10
 * @hooked cheery_loader -  20
 *
 */
do_action( 'cheery_page_start_action' );

/**
 * cheery_header_start_action hook
 *
 * @hooked cheery_header_start -  10
 *
 */
do_action( 'cheery_header_start_action' );

/**
 * cheery_site_branding_action hook
 *
 * @hooked cheery_site_branding -  10
 *
 */
do_action( 'cheery_site_branding_action' );

/**
 * cheery_primary_nav_action hook
 *
 * @hooked cheery_primary_nav -  10
 *
 */
do_action( 'cheery_primary_nav_action' );

/**
 * cheery_header_ends_action hook
 *
 * @hooked cheery_header_ends -  10
 *
 */
do_action( 'cheery_header_ends_action' );

/**
 * cheery_site_content_start_action hook
 *
 * @hooked cheery_site_content_start -  10
 *
 */
do_action( 'cheery_site_content_start_action' );

/**
 * cheery_primary_content_action hook
 *
 * @hooked cheery_add_slider_section -  10
 *
 */
do_action( 'cheery_primary_content_action' );