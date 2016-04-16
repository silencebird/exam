<?php

add_filter('excerpt_more', 'new_excerpt_more',10);
function new_excerpt_more($more) {
    global $post;
    return '<div class="read-more"> <a href="'. get_permalink($post->ID) . '">Read more</a></div>';
}
add_filter('excerpt_length', 'new_excerpt_length',10);
function new_excerpt_length($length) {
    global $post;
    return 20;
}


function project_scripts(){

//    Style css
    wp_enqueue_style('style', get_stylesheet_uri());

//    Main styles
    wp_enqueue_style('main-style', get_template_directory_uri().'/css/main.css');

//    Bootstrap grid
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css');

//    Animete css
    wp_enqueue_style('animate-css', get_template_directory_uri().'/css/animate.css');



//    FlexSlider Styles
    wp_enqueue_style('flexslider-style', get_template_directory_uri().'/css/flexslider.css');

//    Opensans font
    wp_enqueue_style('opensans-font', 'https://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,600italic,700,700italic,800,800italic');


//    font Awesome
    wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css' );

//Flexslider fonts
    wp_enqueue_style( 'flexslider-fonts', get_template_directory_uri().'/css/fonts.css' );

//    Include jQuery
    wp_enqueue_script('jquery',get_template_directory_uri(). '/js/jquery.js', true);
//    Include Custom JS
    wp_enqueue_script('custom-js',get_template_directory_uri(). '/js/custom.js', array('jquery'), true);

//    FlexSlider JS
    wp_enqueue_script('flexslider-js',get_template_directory_uri(). '/js/flexslider.js', array('jquery'), true);

}

add_action('wp_enqueue_scripts', 'project_scripts');



// Theme setup
function project_setup() {

    // Navigation Menus
    register_nav_menus(array(
        'primary' => __( 'Primary Menu'),
        'footer' => __( 'Footer Menu'),
    ));
// Add featured image support
    add_theme_support('post-thumbnails');
    add_image_size('small-thumbnail', 180, 120);
    add_image_size('banner-image',320 , 240);

}

add_action('after_setup_theme', 'project_setup');

function extra_setup() {
    register_nav_menu ('primary mobile', __( 'Navigation Mobile', 'lesson21' ));
}
add_action( 'after_setup_theme', 'extra_setup' );

function set_container_class ($args) {
    $args['container_class'] = str_replace(' ','-',$args['theme_location']).'-nav'; return $args;
}
add_filter ('wp_nav_menu_args', 'set_container_class');

//Add our widgets location
function ourWidgetsInits(){
    register_sidebar( array(
        'name' => 'Footer navigation',
        'id' => 'footer-widget-nav',
        'before_widget' => '<div class="footer-widget">',
        'after_widget' => '</div>',
        'before_title'  => '<h1 class="footer-widget-title">',
        'after_title'   => '</h1>',
    ));

    register_sidebar( array(
        'name' => 'Footer form',
        'id' => 'footer-form',
        'before_widget' => '<div class="footer-form">',
        'after_widget' => '</div>',
        'before_title'  => '<h1 class="footer-form-title">',
        'after_title'   => '</h1>',
    ));





}
add_action('widgets_init','ourWidgetsInits');