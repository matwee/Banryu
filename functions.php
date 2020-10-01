<?php

/*
	Template Name: functions.php
	Description: Add features to wordpress theme
*/



// creating function to include css stylesheets to wordpress 
function fn_theme_scripts(){
	wp_enqueue_style('style', get_stylesheet_directory_uri() . '/style.css', array(), 1.0, 'all');
}
add_action('wp_enqueue_scripts', 'fn_theme_scripts');


//adding features to wordpress theme
function fn_theme_supports(){
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support('html5', array('search-form'));
	add_theme_support('custom-logo');
	add_theme_support('custom-header');
	add_theme_support('custom-background');
	add_theme_support('post-formats', array('aside', 'image', 'video'));
	add_theme_support('menus');
}
add_action('after_setup_theme', 'fn_theme_supports');


//adding javascript files to wordpress
function custom_scripts(){
	wp_enqueue_script('main', get_stylesheet_directory_uri() . '/js/main.js', false,  null, true );
}
add_action('wp_enqueue_scripts', 'custom_scripts');

?>