<?php
/**
* author   : Moch Deden
* homepage : http://selesdepselesnul.com
* company  : qurama studios
*/

define(CSS_PATH, get_template_directory_uri().'/css');
function add_scripts() {
	wp_enqueue_style('bootstrap.min', CSS_PATH . '/bootstrap.min.css');
}

add_action('wp_enqueue_scripts', 'add_scripts');