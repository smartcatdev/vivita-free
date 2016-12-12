<?php

// ---------------------------------------------
// Blog Panel
// ---------------------------------------------
$wp_customize->add_panel( 'vivita_blog_panel', array (
    'title'                 => __( 'Blog', 'vivita' ),
    'description'           => __( 'Customize the appearance of the Blog', 'vivita' ),
    'priority'              => 10
) );

// ---------------------------------------------
// Layout Section
// ---------------------------------------------

$wp_customize->add_section( 'vivita_blog_layout_section', array (
    'title'                 => __( 'Layout', 'vivita' ),
    'description'           => __( 'Customize the layout of your blog template', 'vivita' ),
    'panel'                 => 'vivita_blog_panel',
) );

    // Blog Section Title Toggle
    $wp_customize->add_setting( 'vivita_blog_title_toggle', array (
        'default'               => 'hide',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'vivita_sanitize_show_hide',
    ) );
    $wp_customize->add_control( 'vivita_blog_title_toggle', array(
        'type'                  => 'radio',
        'section'               => 'vivita_blog_layout_section',
        'label'                 => __( 'Show Blog Roll Title?', 'vivita' ),
        'choices'               => array(
            'show'      => __( 'Show', 'vivita' ),
            'hide'      => __( 'Hide', 'vivita' ),
    ) ) );

    // Blog Section Title
    $wp_customize->add_setting( 'vivita_blog_title', array (
        'default'               => __( 'Blog', 'vivita' ),
        'transport'             => 'refresh',
        'sanitize_callback'     => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'vivita_blog_title', array(
        'type'                  => 'text',
        'section'               => 'vivita_blog_layout_section',
        'label'                 => __( 'Blog Roll Title', 'vivita' ),
    ) );
    
    // Blog Roll Posts - Word Count to Trim To
    $wp_customize->add_setting( 'vivita_blog_roll_words_trim', array (
        'default'               => 50,
        'transport'             => 'refresh',
        'sanitize_callback'     => 'vivita_sanitize_integer',
    ) );
    $wp_customize->add_control( 'vivita_blog_roll_words_trim', array(
        'type'                  => 'number',
        'section'               => 'vivita_blog_layout_section',
        'label'                 => __( 'Number of words to trim content to for blog roll post cards', 'vivita' ),
        'input_attrs'           => array(
            'min' => 10,
            'max' => 100,
            'step' => 5,
    ) ) );
    
    // Blog Roll - Show Author Tab
    $wp_customize->add_setting( 'vivita_blog_roll_author', array (
        'default'               => 'show',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'vivita_sanitize_show_hide',
    ) );
    $wp_customize->add_control( 'vivita_blog_roll_author', array(
        'type'                  => 'radio',
        'section'               => 'vivita_blog_layout_section',
        'label'                 => __( 'Show Author tab on posts in the blog roll?', 'vivita' ),
        'choices'               => array(
            'show'      => __( 'Show', 'vivita' ),
            'hide'      => __( 'Hide', 'vivita' ),
    ) ) );
    
    // Blog Roll - Show Post Date Tab
    $wp_customize->add_setting( 'vivita_blog_roll_date', array (
        'default'               => 'show',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'vivita_sanitize_show_hide',
    ) );
    $wp_customize->add_control( 'vivita_blog_roll_date', array(
        'type'                  => 'radio',
        'section'               => 'vivita_blog_layout_section',
        'label'                 => __( 'Show Post Date tab on posts in the blog roll?', 'vivita' ),
        'choices'               => array(
            'show'      => __( 'Show', 'vivita' ),
            'hide'      => __( 'Hide', 'vivita' ),
    ) ) );
    
    // Blog Roll - Show Author Tab
    $wp_customize->add_setting( 'vivita_blog_roll_comments', array (
        'default'               => 'show',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'vivita_sanitize_show_hide',
    ) );
    $wp_customize->add_control( 'vivita_blog_roll_comments', array(
        'type'                  => 'radio',
        'section'               => 'vivita_blog_layout_section',
        'label'                 => __( 'Show Comments tab on posts in the blog roll?', 'vivita' ),
        'choices'               => array(
            'show'      => __( 'Show', 'vivita' ),
            'hide'      => __( 'Hide', 'vivita' ),
    ) ) );

    // Blog Roll - Card Layout Style
    $wp_customize->add_setting( 'vivita_blog_roll_style', array (
        'default'               => 'multi-card',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'vivita_sanitize_blog_roll_style',
    ) );
    $wp_customize->add_control( 'vivita_blog_roll_style', array(
        'type'                  => 'radio',
        'section'               => 'vivita_blog_layout_section',
        'label'                 => __( 'Show multiple columns of blog roll cards or stack at full width?', 'vivita' ),
        'choices'               => array(
            'multi-card'      => __( 'Multi-card', 'vivita' ),
            'full-width'      => __( 'Stacked Full-width', 'vivita' ),
    ) ) );