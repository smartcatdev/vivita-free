<?php

// ---------------------------------------------
// Extras Panel
// ---------------------------------------------
$wp_customize->add_panel('vivita_extras_panel', array(
    'title'         => __('Extras', 'vivita'),
    'description'   => __('Extra options in the theme', 'vivita'),
    'priority'      => 10
));

// ---------------------------------------------
// 404 Error Page Section
// ---------------------------------------------
$wp_customize->add_section( 'vivita_error_page_section', array(
    'title'                 => __( '404 Error Page', 'vivita'),
    'description'           => __( 'Customize the 404 error page appearance', 'vivita' ),
    'panel'                 => 'vivita_extras_panel'
) );

    // Error Page Primary Heading
    $wp_customize->add_setting( 'vivita_error_page_heading', array (
        'default'               => __( 'Oops!', 'vivita' ),
        'transport'             => 'refresh',
        'sanitize_callback'     => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'vivita_error_page_heading', array(
        'type'                  => 'text',
        'section'               => 'vivita_error_page_section',
        'label'                 => __( 'The primary error page heading', 'vivita' ),
    ) );   

    // Error Page Secondary Heading
    $wp_customize->add_setting( 'vivita_error_page_subheading', array (
        'default'               => __( 'It looks like nothing was found at this location, please check the address and try again!', 'vivita' ),
        'transport'             => 'refresh',
        'sanitize_callback'     => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'vivita_error_page_subheading', array(
        'type'                  => 'text',
        'section'               => 'vivita_error_page_section',
        'label'                 => __( 'The secondary, smaller error page heading', 'vivita' ),
    ) );   
    
    // Include Primary Menu on 404 Page?
    $wp_customize->add_setting('vivita_error_page_show_menu', array(
        'default'               => 'show',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'vivita_sanitize_show_hide',
    ));
    $wp_customize->add_control('vivita_error_page_show_menu', array(
        'type'                  => 'radio',
        'section'               => 'vivita_error_page_section',
        'label'                 => __('Display Primary Menu?', 'vivita'),
        'choices' => array(
            'show'      => __( 'Show', 'vivita' ),
            'hide'      => __( 'Hide', 'vivita' ),
        )
    ));

    // Include Search Bar on 404 Page?
    $wp_customize->add_setting('vivita_error_page_show_search', array(
        'default'               => 'show',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'vivita_sanitize_show_hide',
    ));
    $wp_customize->add_control('vivita_error_page_show_search', array(
        'type'                  => 'radio',
        'section'               => 'vivita_error_page_section',
        'label'                 => __('Display Search Form?', 'vivita'),
        'choices' => array(
            'show'      => __( 'Show', 'vivita' ),
            'hide'      => __( 'Hide', 'vivita' ),
        )
    ));