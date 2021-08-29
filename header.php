<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The Store
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0 viewport-fit=cover">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="profile" href="http://gmpg.org/xfn/11"/>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <!-- Navigation -->
        <div id="home" data-target="#navbarResponse">
            <nav class="navbar navbar-expand-lg fixed-top solid">
                <div class="container-fluid nav_sub_container">
                    <a href="#home" class="navbar-brand">
                        <img src="<?php echo get_theme_file_uri('img/logo-no-txt.png') ?>" alt="">
                        <span>The Store</span>
                    </a>
                    <button class="navbar-toggler custom-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarResponsive">
                        <span class="custom-toggler-icon icon-bars"></span>
                    </button>
                    <?php
                    wp_nav_menu( array(
                        'theme_location'    => 'the_store_main_menu',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse',
                        'container_id'      => 'navbarResponsive',
                        'menu_class'        => 'nav navbar-nav mx-auto',
                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker(),
                    ) );
                    ?>
                </div>
            </nav>
            <!-- End Navigation -->

        </div>
        <div>
            <?php
//            wp_nav_menu(
//                array(
//                    'theme_location' => 'the_store_main_menu'
//                )
//            )
            ?>
        </div>
