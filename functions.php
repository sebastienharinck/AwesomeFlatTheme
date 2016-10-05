<?php

show_admin_bar(false);

function awesomeflat_add_theme_scripts() {

	if( ! is_admin() ) {
		wp_enqueue_style( 'materialize', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css', array(), '0.97.6', 'all');
		wp_enqueue_style( 'googlefonts', 'https://fonts.googleapis.com/icon?family=Material+Icons', array(), '1.0.0', 'all');
		wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css', array(), '0.0.1', 'all');
		wp_enqueue_style( 'wordpress-core', get_template_directory_uri() . '/css/wordpress-core.css', array(), '0.0.1', 'all');

		wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js', array ( 'jquery' ), 1.1, true);
		wp_enqueue_script( 'materialize', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js', 1.1, true);
		wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', 1.1, true);
	}
}
add_action( 'wp_enqueue_scripts', 'awesomeflat_add_theme_scripts' );



function awesomeflat_setup() {

	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 500, 281.25, array( 'center', 'center')  );

}
add_action( 'after_setup_theme', 'awesomeflat_setup' );


function awesomeflat_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Widget Area', 'awesomeflat' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'awesomeflat' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'awesomeflat_widgets_init' );