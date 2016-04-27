<?php
/**
* author   : Moch Deden
* homepage : http://selesdepselesnul.com
* company  : qurama studios
*/
// <link href="css/animate.min.css" rel="stylesheet"> 
// <link href="css/font-awesome.min.css" rel="stylesheet">
// <link href="css/lightbox.css" rel="stylesheet">
// <link href="css/main.css" rel="stylesheet">
// <link id="css-preset" href="css/presets/preset1.css" rel="stylesheet">
// <link href="css/responsive.css" rel="stylesheet">


define(CSS_PATH, get_template_directory_uri().'/css');
function add_scripts() {
	wp_enqueue_style('bootstrap.min', CSS_PATH . '/bootstrap.min.css');
	wp_enqueue_style('animate.min', CSS_PATH . '/animate.min.css', 
		array('bootstrap.min'));
	wp_enqueue_style('font-awesome.min', CSS_PATH . '/font-awesome.min.css', 
		array('animate.min'));
	wp_enqueue_style('lightbox', CSS_PATH . '/lightbox.css', 
		array('font-awesome.min'));
	wp_enqueue_style('main', CSS_PATH . '/main.css', 
		array('lightbox'));
	wp_enqueue_style('css-preset', CSS_PATH . '/presets/preset1.css', 
		array('main'));
	wp_enqueue_style('responsive', CSS_PATH . 'responsive.css', 
		array('css-preset'));
}

add_action('wp_enqueue_scripts', 'add_scripts');
