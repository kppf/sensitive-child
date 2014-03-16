<?php
function sensitive_child_enqueue_scripts(){
	wp_enqueue_style('wpeden-prettify',get_stylesheet_directory_uri().'/css/prettify.css');
	wp_enqueue_script('wpeden-prettify',get_stylesheet_directory_uri().'/js/prettify.js');
	wp_enqueue_script('wpeden-child',get_stylesheet_directory_uri().'/js/child.js',array('jquery'));
}

add_action( 'wp_enqueue_scripts', 'sensitive_child_enqueue_scripts');
?>