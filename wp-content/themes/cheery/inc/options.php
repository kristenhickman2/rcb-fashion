<?php
/**
 * Options functions
 *
 * @package cheery
 */

if ( ! function_exists( 'cheery_show_options' ) ) :
    /**
     * List of custom Switch Control options
     * @return array List of switch control options.
     */
    function cheery_show_options() {
        $arr = array(
            'on'        => esc_html__( 'Yes', 'cheery' ),
            'off'       => esc_html__( 'No', 'cheery' )
        );
        return apply_filters( 'cheery_show_options', $arr );
    }
endif;

if ( ! function_exists( 'cheery_page_choices' ) ) :
    /**
     * List of pages for page choices.
     * @return Array Array of page ids and name.
     */
    function cheery_page_choices() {
        $pages = get_pages();
        $choices = array();
        $choices[0] = esc_html__( 'None', 'cheery' );
        foreach ( $pages as $page ) {
            $choices[ $page->ID ] = $page->post_title;
        }
        return $choices;
    }
endif;

if ( ! function_exists( 'cheery_category_choices' ) ) :
    /**
     * List of categories for category choices.
     * @return Array Array of category ids and name.
     */
    function cheery_category_choices() {
        $args = array(
                'type'          => 'post',
                'child_of'      => 0,
                'parent'        => '',
                'orderby'       => 'name',
                'order'         => 'ASC',
                'hide_empty'    => 0,
                'hierarchical'  => 0,
                'taxonomy'      => 'category',
            );
        $categories = get_categories( $args );
        $choices = array();
        $choices[0] = esc_html__( 'None', 'cheery' );
        foreach ( $categories as $category ) {
            $choices[ $category->term_id ] = $category->name;
        }
        return $choices;
    }
endif;

if ( ! function_exists( 'cheery_site_layout' ) ) :
    /**
     * site layout
     * @return array site layout
     */
    function cheery_site_layout() {
        $cheery_site_layout = array(
            'full'    => get_template_directory_uri() . '/assets/uploads/full.png',
            'boxed'   => get_template_directory_uri() . '/assets/uploads/boxed.png',
        );

        $output = apply_filters( 'cheery_site_layout', $cheery_site_layout );

        return $output;
    }
endif;

if ( ! function_exists( 'cheery_sidebar_position' ) ) :
    /**
     * Sidebar position
     * @return array Sidebar position
     */
    function cheery_sidebar_position() {
        $cheery_sidebar_position = array(
            'right-sidebar' => get_template_directory_uri() . '/assets/uploads/right.png',
            'no-sidebar'    => get_template_directory_uri() . '/assets/uploads/full.png',
        );

        $output = apply_filters( 'cheery_sidebar_position', $cheery_sidebar_position );

        return $output;
    }
endif;

if ( ! function_exists( 'cheery_get_spinner_list' ) ) :
    /**
     * List of spinner icons options.
     * @return array List of all spinner icon options.
     */
    function cheery_get_spinner_list() {
        $arr = array(
            'spinner-dots'          => esc_html__( 'Dots', 'cheery' ),
            'spinner-one-way'       => esc_html__( 'One Way', 'cheery' ),
        );
        return apply_filters( 'cheery_spinner_list', $arr );
    }
endif;

if ( ! function_exists( 'cheery_selected_sidebar' ) ) :
    /**
     * Sidebars options
     * @return array Sidbar positions
     */
    function cheery_selected_sidebar() {
        $cheery_selected_sidebar = array(
            'sidebar-1'             => esc_html__( 'Default Sidebar', 'cheery' ),
            'optional-sidebar'      => esc_html__( 'Optional Sidebar', 'cheery' ),
        );

        $output = apply_filters( 'cheery_selected_sidebar', $cheery_selected_sidebar );

        return $output;
    }
endif;
