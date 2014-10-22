<?php
// skripty
function add_my_script() {
	wp_enqueue_script(
		'lessjs',
		get_template_directory_uri() . '/js/less-1.7.3.min.js',
		array('jquery')
	);

	wp_deregister_script('jquery');
	wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"), false, '1.11.1', true);

	// wp_enqueue_script(
	// 	'init',
	// 	get_template_directory_uri() . '/js/init.js',
	// 	array('jquery'),
	// 	"1.0",
	// 	true
	// );
}
add_action( 'wp_enqueue_scripts', 'add_my_script' );

function register_my_menu() {
  register_nav_menu( 'hlavni', 'Hlavní Menu' );
}
add_action( 'after_setup_theme', 'register_my_menu' );