<?php

/**
 * The Store functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package The Store
 */

//add_filter('show_admin_bar', '__return_false');

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
    require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

function the_store_files(){

    wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(), '5.1.0', 'all');
    wp_enqueue_style('animate', get_template_directory_uri().'/css/animate.min.css', '4.1.1', 'all');
    wp_enqueue_style('owl_carousel', get_template_directory_uri().'/css/owl.carousel.min.css', array(), '2.3.4', 'all');
    wp_enqueue_style('owl_theme_default', get_template_directory_uri().'/css/owl.theme.default.min.css', array(), '2.3.4', 'all');
    wp_enqueue_style('styles', get_template_directory_uri().'/css/styles.css', array(), filemtime(get_template_directory().'/css/styles.css'), 'all');
    wp_enqueue_style('plugins', get_template_directory_uri().'/css/plugins.css', array(), filemtime(get_template_directory().'/css/plugins.css'), 'all');
    wp_enqueue_style('store_main_styles', get_stylesheet_uri());

    wp_enqueue_script('owl_carousel', get_template_directory_uri().'/js/owl.carousel.min.js', array('jquery'), '2.3.4', true);
    wp_enqueue_script('plugins', get_template_directory_uri().'/js/plugins.js', array('jquery'), filemtime(get_template_directory().'/js/plugins.js'), true);
//    wp_enqueue_script('jquery', get_template_directory_uri().'/js/jquery-3.6.0.min.js', NULL, 3.6, false);
    wp_enqueue_script('bootstrap_bundle', get_template_directory_uri().'/js/bootstrap.bundle.min.js', array('jquery'), '5.1.0', false);
    wp_enqueue_script('jquery_waypoints', get_template_directory_uri().'/js/jquery.waypoints.min.js', array('jquery'), '4.0.1', false);

}
add_action('wp_enqueue_scripts', 'the_store_files');

function the_store_config(){
    register_nav_menus(
        array(
            'the_store_main_menu' => 'The Store Main Menu'
        )
    );
    add_theme_support('woocommerce', array(
        'thumbnail_image_width' => 255,
        'single_image_width'    => 255,
        'product_grid'          => array(
            'default_rows'     => 10,
            'min_rows'         => 5,
            'max_rows'          => 10,
            'default_columns'  => 3,
            'min_columns'      => 3,
            'max_columns'      => 3
        )
    ));

    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');

    if (isset($content_width)){
        $content_width = 600;
    }

}

add_action('after_setup_theme', 'the_store_config', 0);

require get_template_directory() . '/inc/wc_modifications.php';