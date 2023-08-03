<?php
/*
* Theme Functions File
*/
function Jobi_Theme_setup() {

    register_nav_menus( array(
        'primary-menu'   => __( 'Primary Menu', 'Jobi_Theme' ),
    ) );
    
};
add_action('after_setup_theme', 'Jobi_Theme_setup');


// Include custom walker class for navigation menu
require_once get_template_directory() . '/walker-nav-menu-custom.php';

function Jobi_Theme_scripts(){

    wp_enqueue_style('style', get_stylesheet_uri());

    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery',  get_template_directory_uri(). '/assets/js/jquery.min.js');
    wp_enqueue_script('jquery');

    wp_enqueue_script('Jobi_Theme-browser', get_template_directory_uri(). '/assets/js/browser.min.js');
    wp_enqueue_script('Jobi_Theme-main', get_template_directory_uri(). '/assets/js/main.js');

}
add_action('wp_enqueue_scripts', 'Jobi_Theme_scripts');

function partners_post_type() {
	$labels = array(
		'name'                => _x( 'partners', 'Post Type General Name', 'Jobi_Theme' ),
		'singular_name'       => _x( 'partners', 'Post Type Singular Name', 'Jobi_Theme' ),
		'menu_name'           => __( 'partners', 'Jobi_Theme' ),
		'parent_item_colon'   => __( 'Partners Section', 'Jobi_Theme' ),
		'all_items'           => __( 'All partners', 'Jobi_Theme' ),
		'view_item'           => __( 'View partners', 'Jobi_Theme' ),
		'add_new_item'        => __( 'Add New partners', 'Jobi_Theme' ),
		'add_new'             => __( 'Add New', 'Jobi_Theme' ),
		'edit_item'           => __( 'Edit partners', 'Jobi_Theme' ),
		'update_item'         => __( 'Update partners', 'Jobi_Theme' ),
		'search_items'        => __( 'Search partners', 'Jobi_Theme' ),
		'not_found'           => __( 'Not Found', 'Jobi_Theme' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'Jobi_Theme' ),
	);
	$args = array(
		'label'               => __( 'partners', 'Jobi_Theme' ),
		'description'         => __( 'partners news and reviews', 'Jobi_Theme' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail','comments',),
		'taxonomies'          => array( 'genres' ),	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-spotify',
		'can_export'          => true,
		'has_archive'         => false,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
		'taxonomies'          => array( 'category' ),
	);
	register_post_type( 'partners', $args );
}
add_action( 'init', 'partners_post_type', 0 );
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
}
add_action( 'widgets_init', 'Jobi_Theme_widgets_init' );

// Register Custom Post type with unique category
// =============================================
 function slider_custom_post_type() {
    register_post_type( 'sliders', array(
            'labels' => array(
                'name' => __( 'Sliders' ),
                'singular_name' => __( 'sliders' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'sliders'),
            'show_in_rest' => true,
            'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            'taxonomies' => array('category' ),
        )
    );
 }
add_action( 'init', 'slider_custom_post_type' );


// Add Li Classes in Custom Menu Bar
// =============================================

function add_additional_class_on_li($classes, $items, $args){
    if(isset($args->add_li_class)){
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3); 

// Add a Classes in Custom Menu Bar
// =============================================

function add_additional_class_on_a($classes, $items, $args){
    if(isset($args->add_a_class)){
        $classes['class'] = $args->add_a_class;
    }
    return $classes;
} 
add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3); 


        


