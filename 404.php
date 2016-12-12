<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Vivita
 */

get_header(); ?>

    <div id="primary" class="content-area">

        <main id="main" class="site-main" role="main">
            
            <div id="page-content-wrapper" class="container-fluid">
                
                <div class="row">
                    
                    <div class="col-sm-12">
                        
                        <div id="page-content-inner" class="container">
            
                            <div class="row">
           
                                <div id="error-page-wrapper" class="col-md-12">

                                    <section class="error-404 not-found">

                                        <header class="page-header">

                                            <h1 class="page-title">
                                                <?php echo esc_html( get_theme_mod( 'vivita_error_page_heading', __( 'Oops!', 'vivita' ) ) ); ?>
                                            </h1>

                                            <p class="page-subtitle">
                                                <?php echo esc_html( get_theme_mod( 'vivita_error_page_subheading', __( 'It looks like nothing was found at this location, please check the address and try again!', 'vivita' ) ) ); ?>
                                            </p>
                                            
                                            <?php if ( get_theme_mod( 'vivita_error_page_show_menu', 'show' ) == 'show' ) : ?>
                                            
                                                <?php if ( has_nav_menu( 'primary' ) ) : ?>
                                            
                                                    <nav class="main-nav main-navigation">
                                                        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
                                                    </nav>
                                            
                                                <?php else : ?>

                                                    <div class="menu-testing-menu-container">

                                                        <ul id="primary-menu" class="menu">

                                                            <li class="menu-item menu-item-type-custom menu-item-object-custom">

                                                                <a href="<?php echo esc_url( admin_url( 'nav-menus.php' ) ); ?>">
                                                                   <?php echo __( 'Add a Primary Menu?', 'vivita' ); ?>
                                                                </a>

                                                            </li>

                                                        </ul>

                                                    </div>

                                                <?php endif; ?>
                                            
                                            <?php endif; ?>
                                            
                                            <?php if ( get_theme_mod( 'vivita_error_page_show_search', 'show' ) == 'show' ) : ?>
                                                <?php get_search_form(); ?>
                                            <?php endif; ?>

                                        </header><!-- .page-header -->

                                    </section><!-- .error-404 -->

                                </div>
                            
                            </div>
                            
                        </div>
                        
                    </div>

                </div>

            </div>
                        
        </main><!-- #main -->
        
    </div><!-- #primary -->

<?php
get_footer();
