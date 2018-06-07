<?php

function assignment_bootstrapping(){
	load_theme_textdomain("assignment");
	add_theme_support("post-thumbnails");
	add_theme_support("title-tag");
}
add_action("after_setup_theme", "assignment_bootstrapping");

function assignment_assets(){
	wp_enqueue_style("assignment", get_stylesheet_uri());
	wp_enqueue_style("bootstrap", "//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css");
}
add_action("wp_enqueue_scripts", "assignment_assets");
