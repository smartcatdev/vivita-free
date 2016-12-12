<?php

new Smartcat_Featured_Image_Meta_Box;
class Smartcat_Featured_Image_Meta_Box {

    public function __construct() {

        if ( is_admin() ) {
            add_action( 'load-post.php',        array ( $this, 'init_metabox' ) );
            add_action( 'load-post-new.php',    array ( $this, 'init_metabox' ) );
        }
        
    }

    public function init_metabox() {

        add_action( 'add_meta_boxes',           array ( $this, 'add_metabox' ) );
        add_action( 'save_post',                array ( $this, 'save_metabox' ), 10, 2 );
        
    }

    public function add_metabox() {

        add_meta_box( 'page_post_banner_meta', __( 'Featured Image Settings', 'vivita' ), array ( $this, 'render_page_post_banner_metabox' ), array( 'page', 'post' ), 'normal', 'high' );
        
    }

    public function render_page_post_banner_metabox( $post ) {

        // Add nonce for security and authentication.
        wp_nonce_field( 'banner_meta_box_nonce_action', 'banner_meta_box_nonce' );

        // Retrieve an existing value from the database.
        $banner_height      = get_post_meta( $post->ID, 'banner_meta_height', true );
        $banner_img_align   = get_post_meta( $post->ID, 'banner_meta_img_align', true );

        // Set default values.
        if ( empty( $banner_height ) )      { $banner_height = '400'; } 
        if ( empty( $banner_img_align ) )   { $banner_img_align = 'middle'; }
      
        $alignments = array(
            'top'       => __( 'Top', 'vivita' ),
            'middle'    => __( 'Middle', 'vivita' ),
            'bottom'    => __( 'Bottom', 'vivita' ),
        );
        
        // Form fields
        echo '<table class="form-table">';

        echo '	<tr>';
        echo '		<th><label for="banner_meta_height" class="banner_meta_height_label">' . __( 'Banner Height', 'vivita' ) . '</label></th>';
        echo '		<td>';
        echo '			<input type="number" id="banner_meta_height" name="banner_meta_height" class="banner_meta_height_field" value="' . esc_attr__( $banner_height ) . '" min="150" max="1000" step="50">';
        echo '		</td>';
        echo '	</tr>';

        echo '	<tr>';
        echo '		<th><label for="banner_meta_img_align" class="banner_meta_img_align_label">' . __( 'Location', 'vivita' ) . '</label></th>';
        echo '		<td>';
        echo '	                <select id="banner_meta_img_align" name="banner_meta_img_align" class="banner_meta_img_align_field">';
                                    foreach( $alignments as $key => $value ) :
        echo '                          <option value="' . $key . '" ' . selected( $banner_img_align, $key, false ) . '> ' . $value . '</option>';
                                    endforeach;
        echo '	                </select>';
        echo '		</td>';
        echo '	</tr>';
        
        echo '</table>';
        
    }
    
    public function save_metabox( $post_id, $post ) {

        // Add nonce for security and authentication.
        $nonce_name     = isset( $_POST[ 'banner_meta_box_nonce' ] ) ? $_POST[ 'banner_meta_box_nonce' ] : '';
        $nonce_action   = 'banner_meta_box_nonce_action';

        // Check if a nonce is set and valid
        if ( !isset( $nonce_name ) ) { return; }
        if ( !wp_verify_nonce( $nonce_name, $nonce_action ) ) { return; }
            
        // Sanitize user input.
        $banner_height      = isset( $_POST[ 'banner_meta_height' ] ) ? sanitize_text_field( $_POST[ 'banner_meta_height' ] ) : '400';
        $banner_img_align   = isset( $_POST[ 'banner_meta_img_align' ] ) ? sanitize_text_field( $_POST[ 'banner_meta_img_align' ] ) : 'middle';

        // Update the meta field in the database
        update_post_meta( $post_id, 'banner_meta_height', $banner_height );
        update_post_meta( $post_id, 'banner_meta_img_align', $banner_img_align );
        
    }
    
}
