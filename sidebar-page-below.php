<?php
/**
 * The Page widget area BELOW content.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Vivita
 */

if ( ! is_active_sidebar( 'sidebar-page-below' ) ) {
    return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
    <div class="row">
        <?php dynamic_sidebar( 'sidebar-page-below' ); ?>
    </div>
</aside><!-- #secondary -->
