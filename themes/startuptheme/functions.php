<?php

function startuptheme_enqueue_styles() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
    $dependencies = array('bootstrap');
    wp_enqueue_style( 'startuptheme-style', get_stylesheet_uri(), $dependencies ); 
}

function startuptheme_enqueue_scripts() {
    $dependencies = array('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/bootstrap/js/bootstrap.min.js', $dependencies, '', true );
}

add_action( 'wp_enqueue_scripts', 'startuptheme_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'startuptheme_enqueue_scripts' );

function startuptheme_wp_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
}

add_action( 'after_setup_theme', 'startuptheme_wp_setup' );

add_theme_support( 'custom-logo' );

function startuptheme_register_menu() {
    register_nav_menu('header-menu', __( 'Header Menu' ));
}
add_action( 'init', 'startuptheme_register_menu' );

function startuptheme_widgets_init() {

	register_sidebar( array(
		'name' 			=> 'Sidebar One',
		'id'   			=> 'sidebar-one',
		'before_widget' => '<div calss="sidebar-module"',
		'after_widget'	=> '</div>',
		'before_title' 	=> '<h4>',
		'after_title' 	=> '</h4>',
	));

    register_sidebar( array(
        'name'          => 'Sidebar Two',
        'id'            => 'sidebar-two',
        'before_widget' => '<div class="sidebar-module sidebar-module-inset">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ));

    register_sidebar( array(
        'name'          => 'Sidebar Three',
        'id'            => 'sidebar-three',
        'before_widget' => '<div class="sidebar-module">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ));

}

	

	register_sidebar( array(
        'name'          => 'Footer One',
        'id'            => 'footer-one',
        'before_widget' => '<div class="footer-one">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ));

    register_sidebar( array(
        'name'          => 'Footer Two',
        'id'            => 'footer-two',
        'before_widget' => '<div class="footer-two">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ));

    register_sidebar( array(
        'name'          => 'Footer Four',
        'id'            => 'footer-four',
        'before_widget' => '<div class="footer-four">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ));

	


?>