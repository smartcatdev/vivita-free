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
// Social Sharing Section
// ---------------------------------------------
$wp_customize->add_section('vivita_social_sharing_section', array(
    'title' => __( 'Social Sharing', 'vivita' ),
    'panel' => 'vivita_extras_panel',
));
    
    // Social Sharing Toggle
    $wp_customize->add_setting('vivita_social_share_toggle', array(
        'default'           => 'show',
        'transport'         => 'refresh',
        'sanitize_callback' => 'vivita_sanitize_show_hide'
    ));
    $wp_customize->add_control('vivita_social_share_toggle', array(
        'type'              => 'radio',
        'section'           => 'vivita_social_sharing_section',
        'label'             => __( 'Social Sharing on Posts', 'vivita' ),
        'choices' => array(
            'show'      => __( 'Show', 'vivita' ),
            'hide'      => __( 'Hide', 'vivita' ),
        )
    ));
    
// ---------------------------------------------
// Custom CSS Section
// ---------------------------------------------
$wp_customize->add_section('vivita_custom_css_section', array(
    'title' => __( 'Custom CSS', 'vivita' ),
    'panel' => 'vivita_extras_panel',
));

    $wp_customize->add_setting( 'vivita_custom_css', array(
        'default'               => '',
        'transport'             => 'refresh',
        'capability'            => 'edit_theme_options',
        'sanitize_callback'     => 'wp_filter_nohtml_kses',
        'sanitize_js_callback'  => 'wp_filter_nohtml_kses'
    ));

    $wp_customize->add_control( 'vivita_custom_css', array(
        'type'                  => 'textarea',
        'section'               => 'vivita_custom_css_section',
        'label'                 => __( 'Custom CSS', 'vivita' )
    ));
    
// ---------------------------------------------
// Custom JS / Analytics Section
// ---------------------------------------------
$wp_customize->add_section('vivita_custom_js_section', array(
    'title' => __('Google Analytics Code', 'vivita'),
    'panel' => 'vivita_extras_panel',
));

    $wp_customize->add_setting('vivita_custom_js', array(
        'default'           => '',
        'transport'         => 'refresh',
        'sanitize_callback' => 'vivita_sanitize_text'
    ));

    $wp_customize->add_control('vivita_custom_js', array(
        'type'              => 'textarea',
        'section'           => 'vivita_custom_js_section',
        'label'             => __('Analytics Code / JS Tracking Code', 'vivita'),
        // 'description'       => __('All code added here should be within a set of open and close <script></script> tags.', 'vivita'),
    ));
    
// ---------------------------------------------
// Gallery Options
// ---------------------------------------------
$wp_customize->add_section('vivita_gallery_options_section', array(
    'title'     => __('Gallery Options', 'vivita'),
    'panel'     => 'vivita_extras_panel',
));
    
    // Gallery Enable / Disable
    $wp_customize->add_setting('vivita_gallery_toggle', array(
        'default'               => 'include',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'vivita_sanitize_on_off'
    ));
    $wp_customize->add_control('vivita_gallery_toggle', array(
        'type'                  => 'radio',
        'section'               => 'vivita_gallery_options_section',
        'label'                 => __('Enable/Disable Gallery', 'vivita'),
        'description'           => __('If you do not want to use the Gallery feature of Vivita, or if you prefer to use a plugin, we advise that you turn off the gallery feature here. Turning this off will not erase any Gallery items, you can safely turn it off and back on any time.', 'vivita'),
        'choices'               => array(
            'include'       => __( 'Enable', 'vivita' ),
            'exclude'       => __( 'Disable', 'vivita' ),
        )
    ));
    
    // Gallery Randomize
    $wp_customize->add_setting('vivita_randomize_gallery', array(
        'default'               => 'normal',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'vivita_sanitize_gallery_order'
    ));
    $wp_customize->add_control('vivita_randomize_gallery', array(
        'type'                  => 'radio',
        'section'               => 'vivita_gallery_options_section',
        'label'                 => __( 'Ordering of Gallery Photos', 'vivita'),
        'description'           => __( 'Setting this to Randomize will display Gallery item photos in a different order each time the page loads.', 'vivita'),
        'choices' => array(
            'normal'    => __( 'Default', 'vivita'),
            'random'    => __( 'Randomize', 'vivita'),
        )
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
        'sanitize_callback'     => 'vivita_sanitize_text',
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
        'sanitize_callback'     => 'vivita_sanitize_text',
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