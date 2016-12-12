<?php

// ---------------------------------------------
// Custom Modules Panel
// ---------------------------------------------
$wp_customize->add_panel( 'smartcat_custom_modules_panel', array (
    'title'                 => __( 'Custom Modules', 'vivita' ),
    'description'           => __( 'Customize the inclusion of various Widgets and Custom Post Types', 'vivita' ),
    'priority'              => 10
) );

// ---------------------------------------------
// Modules Section
// ---------------------------------------------
$wp_customize->add_section( 'smartcat_custom_modules_section', array (
    'title'                 => __( 'Modules', 'vivita' ),
    'panel'                 => 'smartcat_custom_modules_panel',
) );

    // Call to Action
    $wp_customize->add_setting( 'smartcat_toggle_call_to_action', array (
        'default'               => 'include',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'vivita_sanitize_on_off',
    ) );
    $wp_customize->add_control( 'smartcat_toggle_call_to_action', array(
        'type'                  => 'radio',
        'section'               => 'smartcat_custom_modules_section',
        'label'                 => __( 'Call to Action', 'vivita' ),
        'choices'               => array(
            'include'       => __( 'Enable', 'vivita' ),
            'exclude'       => __( 'Disable', 'vivita' ),
    ) ) );

    // Clients
    $wp_customize->add_setting( 'smartcat_toggle_clients', array (
        'default'               => 'include',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'vivita_sanitize_on_off',
    ) );
    $wp_customize->add_control( 'smartcat_toggle_clients', array(
        'type'                  => 'radio',
        'section'               => 'smartcat_custom_modules_section',
        'label'                 => __( 'Clients', 'vivita' ),
        'choices'               => array(
            'include'       => __( 'Enable', 'vivita' ),
            'exclude'       => __( 'Disable', 'vivita' ),
    ) ) );

    // Contact Form
    $wp_customize->add_setting( 'smartcat_toggle_contact_form', array (
        'default'               => 'include',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'vivita_sanitize_on_off',
    ) );
    $wp_customize->add_control( 'smartcat_toggle_contact_form', array(
        'type'                  => 'radio',
        'section'               => 'smartcat_custom_modules_section',
        'label'                 => __( 'Contact Form', 'vivita' ),
        'choices'               => array(
            'include'       => __( 'Enable', 'vivita' ),
            'exclude'       => __( 'Disable', 'vivita' ),
    ) ) );

    // Contact Info
    $wp_customize->add_setting( 'smartcat_toggle_contact_info', array (
        'default'               => 'include',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'vivita_sanitize_on_off',
    ) );
    $wp_customize->add_control( 'smartcat_toggle_contact_info', array(
        'type'                  => 'radio',
        'section'               => 'smartcat_custom_modules_section',
        'label'                 => __( 'Contact Info', 'vivita' ),
        'choices'               => array(
            'include'       => __( 'Enable', 'vivita' ),
            'exclude'       => __( 'Disable', 'vivita' ),
    ) ) );

    // Events
    $wp_customize->add_setting( 'smartcat_toggle_events', array (
        'default'               => 'include',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'vivita_sanitize_on_off',
    ) );
    $wp_customize->add_control( 'smartcat_toggle_events', array(
        'type'                  => 'radio',
        'section'               => 'smartcat_custom_modules_section',
        'label'                 => __( 'Events', 'vivita' ),
        'choices'               => array(
            'include'       => __( 'Enable', 'vivita' ),
            'exclude'       => __( 'Disable', 'vivita' ),
    ) ) );

    // FAQS
    $wp_customize->add_setting( 'smartcat_toggle_faqs', array (
        'default'               => 'include',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'vivita_sanitize_on_off',
    ) );
    $wp_customize->add_control( 'smartcat_toggle_faqs', array(
        'type'                  => 'radio',
        'section'               => 'smartcat_custom_modules_section',
        'label'                 => __( 'FAQs', 'vivita' ),
        'choices'               => array(
            'include'       => __( 'Enable', 'vivita' ),
            'exclude'       => __( 'Disable', 'vivita' ),
    ) ) );

    // Gallery
    $wp_customize->add_setting( 'smartcat_toggle_gallery', array (
        'default'               => 'include',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'vivita_sanitize_on_off',
    ) );
    $wp_customize->add_control( 'smartcat_toggle_gallery', array(
        'type'                  => 'radio',
        'section'               => 'smartcat_custom_modules_section',
        'label'                 => __( 'Gallery', 'vivita' ),
        'choices'               => array(
            'include'       => __( 'Enable', 'vivita' ),
            'exclude'       => __( 'Disable', 'vivita' ),
    ) ) );

    // News
    $wp_customize->add_setting( 'smartcat_toggle_news', array (
        'default'               => 'include',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'vivita_sanitize_on_off',
    ) );
    $wp_customize->add_control( 'smartcat_toggle_news', array(
        'type'                  => 'radio',
        'section'               => 'smartcat_custom_modules_section',
        'label'                 => __( 'News', 'vivita' ),
        'choices'               => array(
            'include'       => __( 'Enable', 'vivita' ),
            'exclude'       => __( 'Disable', 'vivita' ),
    ) ) );

    // Pricing Table
    $wp_customize->add_setting( 'smartcat_toggle_pricing_table', array (
        'default'               => 'include',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'vivita_sanitize_on_off',
    ) );
    $wp_customize->add_control( 'smartcat_toggle_pricing_table', array(
        'type'                  => 'radio',
        'section'               => 'smartcat_custom_modules_section',
        'label'                 => __( 'Pricing Table', 'vivita' ),
        'choices'               => array(
            'include'       => __( 'Enable', 'vivita' ),
            'exclude'       => __( 'Disable', 'vivita' ),
    ) ) );

    // Projects
    $wp_customize->add_setting( 'smartcat_toggle_projects', array (
        'default'               => 'include',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'vivita_sanitize_on_off',
    ) );
    $wp_customize->add_control( 'smartcat_toggle_projects', array(
        'type'                  => 'radio',
        'section'               => 'smartcat_custom_modules_section',
        'label'                 => __( 'Projects', 'vivita' ),
        'choices'               => array(
            'include'       => __( 'Enable', 'vivita' ),
            'exclude'       => __( 'Disable', 'vivita' ),
    ) ) );

    // Testimonials
    $wp_customize->add_setting( 'smartcat_toggle_testimonials', array (
        'default'               => 'include',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'vivita_sanitize_on_off',
    ) );
    $wp_customize->add_control( 'smartcat_toggle_testimonials', array(
        'type'                  => 'radio',
        'section'               => 'smartcat_custom_modules_section',
        'label'                 => __( 'Testimonials', 'vivita' ),
        'choices'               => array(
            'include'       => __( 'Enable', 'vivita' ),
            'exclude'       => __( 'Disable', 'vivita' ),
    ) ) );

    // Work History
    $wp_customize->add_setting( 'smartcat_toggle_work_history', array (
        'default'               => 'include',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'vivita_sanitize_on_off',
    ) );
    $wp_customize->add_control( 'smartcat_toggle_work_history', array(
        'type'                  => 'radio',
        'section'               => 'smartcat_custom_modules_section',
        'label'                 => __( 'Work History', 'vivita' ),
        'choices'               => array(
            'include'       => __( 'Enable', 'vivita' ),
            'exclude'       => __( 'Disable', 'vivita' ),
    ) ) );