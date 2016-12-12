<?php
/**
 * Vivita Theme Customizer.
 *
 * @package Vivita
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function vivita_customize_register( $wp_customize ) {
    
        // Header Bar Panel
        require_once('customizer/settings-header-footer.php');
        
        // Site Logo & Title
        require_once('customizer/settings-identity.php');

        // Front Page Panel
        require_once('customizer/settings-front-page.php');

        // Site Appearance Panel
        require_once('customizer/settings-appearance.php');

        // Blog Panel
        require_once('customizer/settings-blog.php');
        
        // Single Post Panel
        require_once('customizer/settings-single.php');
        
        // Extras Panel
        require_once('customizer/settings-extras.php');
    
	$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
        
}
add_action( 'customize_register', 'vivita_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function vivita_customize_preview_js() {
	wp_enqueue_script( 'vivita_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), VIVITA_VERSION, true );
}
add_action( 'customize_preview_init', 'vivita_customize_preview_js' );


/**
 * Sanitization Functions
 */

function vivita_sanitize_integer( $input ) {
    return is_numeric( $input ) ? intval( $input ) : '';
}

function vivita_sanitize_post( $input ) {
    
    $valid_keys = vivita_all_posts_array( true );
    
    if ( array_key_exists( $input, $valid_keys ) ) {
        return $input;
    } else {
        return '';
    }  
    
}

function vivita_sanitize_overlay_decimal( $input ) {
    return is_numeric( $input ) && $input <= 1.0 && $input >= 0.0 ? $input : '';
}

function vivita_sanitize_show_hide( $input ) {
    
    $valid_keys = array(
        'show'      => __( 'Show', 'vivita' ),
        'hide'      => __( 'Hide', 'vivita' ),
    );
    if ( array_key_exists( $input, $valid_keys ) ) {
        return $input;
    } else {
        return '';
    }  
    
}

function vivita_sanitize_logo_portrait_location( $input ) {
    
    $valid_keys = array(
        'header'    => __( 'Site Header', 'vivita' ),
        'promo'     => __( 'Frontpage Promo/Bio Section', 'vivita' ),
    );
    if ( array_key_exists( $input, $valid_keys ) ) {
        return $input;
    } else {
        return '';
    }  
    
}

function vivita_sanitize_logo_portrait_crop( $input ) {
    
    $valid_keys = array(
        'default'   => __( 'Unmodified', 'vivita' ),
        'circle'    => __( 'Circle Cropped', 'vivita' ),
        'rounded'   => __( 'Rounded Rectangle Cropped', 'vivita' ),
    );
    if ( array_key_exists( $input, $valid_keys ) ) {
        return $input;
    } else {
        return '';
    }  
    
}

function vivita_sanitize_link_target( $input ) {
    
    $valid_keys = array(
        'same'      => __( 'Same Window', 'vivita' ),
        'new'       => __( 'New Window', 'vivita' ),
    );
    if ( array_key_exists( $input, $valid_keys ) ) {
        return $input;
    } else {
        return '';
    }  
    
}

function vivita_sanitize_skin_color( $input ) {
    
    $valid_keys = array(
        'blueberry'         => __( 'Blueberry', 'vivita' ),
        'lilac'             => __( 'Lilac', 'vivita' ),
        'pumpkin-spice'     => __( 'Pumpkin Spice', 'vivita' ),
        'freshwater'        => __( 'Freshwater', 'vivita' ),
        'wintergreen'       => __( 'Wintergreen', 'vivita' ),
        'autumn'            => __( 'Autumn', 'vivita' ),
        'jelly'             => __( 'Jelly', 'vivita' ),
        'shade'             => __( 'Shade', 'vivita' ),
    );
    if ( array_key_exists( $input, $valid_keys ) ) {
        return $input;
    } else {
        return '';
    }  
    
}

function vivita_sanitize_social_style( $input ) {
    
    $valid_keys = array(
        'just-icons'    => __( 'No Border (just the icons)', 'vivita' ),
        'rounded-rect'  => __( 'Rounded Rectangles', 'vivita' ),
        'bubbles'       => __( 'Bubbles', 'vivita' ),
    );
    if ( array_key_exists( $input, $valid_keys ) ) {
        return $input;
    } else {
        return '';
    }  
    
}

function vivita_sanitize_blog_roll_style( $input ) {
    
    $valid_keys = array(
        'multi-card'      => __( 'Multi-card', 'vivita' ),
        'full-width'      => __( 'Stacked Full-width', 'vivita' ),
    );
    if ( array_key_exists( $input, $valid_keys ) ) {
        return $input;
    } else {
        return '';
    }  
    
}

function vivita_sanitize_font( $input ) {
    
    $valid_keys = vivita_fonts();
    if ( array_key_exists( $input, $valid_keys ) ) {
        return $input;
    } else {
        return '';
    }  
    
}

