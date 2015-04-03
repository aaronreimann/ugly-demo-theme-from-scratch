<?php

add_action( 'wp_enqueue_scripts', 'fs_scripts' );
function fs_scripts() {
	wp_enqueue_style( 'normalize', get_template_directory_uri().'/css/normalize.css' );
	wp_enqueue_style( 'foundation', get_template_directory_uri().'/css/foundation.min.css' );
	wp_enqueue_style( 'the-stylesheet', get_stylesheet_uri() );
}

add_action( 'after_setup_theme', 'fs_setup_menus' );
function fs_setup_menus() {
	register_nav_menu( 'utility-menu', __( 'Utility Menu' ) );
	register_nav_menu( 'header-menu', __( 'Header Menu' ) );
	register_nav_menu( 'footer-menu', __( 'Footer Menu' ) );
}

add_action( 'widgets_init', 'fs_widgets_init' );
function fs_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Main Sidebar', 'from-scratch' ),
		'id' => 'sidebar-1',
		'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'from-scratch' ),
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
	) );
}
