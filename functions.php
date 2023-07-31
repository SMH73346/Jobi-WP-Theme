<?php
/*
* Theme Functions File
*/
function Jobi_Theme_setup() {
    
    add_theme_support('custom-logo');

    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

    add_image_size ('home-featured', 680, 400, array('center', 'center'));
    add_image_size ('single-post', 580, 272, array('center', 'center'));
    add_image_size ('portfolio-thumb', 374, 260, array('center', 'center'));

    add_theme_support('automatic-feed-links');

    register_nav_menus( array(
        'primary'   => __( 'Primary Menu', 'Jobi_Theme' ),
        'header'   => __( 'Header Menu', 'Jobi_Theme' ),
        'footer'   => __( 'Footer Menu', 'Jobi_Theme' ),
    ) );
    
};
add_action('after_setup_theme', 'Jobi_Theme_setup');

function Jobi_Theme_scripts(){

    wp_enqueue_style('style', get_stylesheet_uri());

    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery',  get_template_directory_uri(). '/assets/js/jquery.min.js');
    wp_enqueue_script('jquery');

    wp_enqueue_script('Jobi_Theme-browser', get_template_directory_uri(). '/assets/js/browser.min.js');
    wp_enqueue_script('Jobi_Theme-main', get_template_directory_uri(). '/assets/js/main.js');

}
add_action('wp_enqueue_scripts', 'Jobi_Theme_scripts');

function Jobi_Theme_widgets_init() {

    register_sidebar( array(
        'name'          => __( 'Primary Sidebar', 'Jobi_Theme' ),
        'id'            => 'main-sidebar',
        'description'   => 'Main Sidebar on Right Side',
        'before_widget' => '<section id="%1$s" class="box %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<header><h3 class="widget-title">',
        'after_title'   => '</h3></header>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Home Banner', 'Jobi_Theme' ),
        'id'            => 'home-banner',
        'description'   => 'Banner Area on Homepage',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Home Services', 'Jobi_Theme' ),
        'id'            => 'home-services',
        'description'   => 'Services Area on Homepage',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer Widget 1', 'Jobi_Theme' ),
        'id'            => 'footer-1',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<header><h2 class="widget-title">',
        'after_title'   => '</h2></header>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer Widget 2', 'Jobi_Theme' ),
        'id'            => 'footer-2',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<header><h2 class="widget-title">',
        'after_title'   => '</h2></header>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer Widget 3', 'Jobi_Theme' ),
        'id'            => 'footer-3',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<header><h2 class="widget-title">',
        'after_title'   => '</h2></header>',
    ) );
}
add_action( 'widgets_init', 'Jobi_Theme_widgets_init' );

//Custom Post Types
// require get_template_directory().'/inc/portfolio.php';

//TGM Plugin Activation
// require_once get_template_directory().'/inc/class-tgm-plugin-activation.php';
// require get_template_directory().'/inc/install-plugins.php';