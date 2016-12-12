<?php
/**
 * The widget area in the Promo / Bio section.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Vivita
 */

if ( ! is_active_sidebar( 'sidebar-promo' ) ) { return 0; } ?>

<div class="row">

    <?php dynamic_sidebar( 'sidebar-promo' ); ?>

</div>
    