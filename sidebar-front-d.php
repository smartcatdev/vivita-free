<?php
/**
 * The fourth front page widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Vivita
 */
if ( ! is_active_sidebar( 'sidebar-front-d' ) ) { return 0; } ?>

<div class="container-fluid area-d">
                
    <div class="row">

        <div class="col-sm-12">

            <div class="container">

                <section class="front-page-widget area-d">

                    <div class="row">

                        <?php dynamic_sidebar( 'sidebar-front-d' ); ?>

                    </div>

                </section>
    
            </div>
            
        </div>
        
    </div>
    
</div>