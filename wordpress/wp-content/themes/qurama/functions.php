<?php
/**
* author   : Moch Deden
* homepage : http://selesdepselesnul.com
* company  : qurama studios
*/


define(CSS_PATH, get_template_directory_uri().'/css');

function enqueue_styles() {
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
	wp_enqueue_style('responsive', CSS_PATH . '/responsive.css', 
		array('css-preset'));
}

  // <script type="text/javascript" src="js/jquery.js"></script> !
  // <script type="text/javascript" src="js/bootstrap.min.js"></script>
  // <script type="text/javascript" src="js/wow.min.min.js"></script>
  // <script type="text/javascript" src="js/wow.min.js"></script>
  // <script type="text/javascript" src="js/mousescroll.js"></script>
  // <script type="text/javascript" src="js/smoothscroll.js"></script>
  // <script type="text/javascript" src="js/jquery.countTo.js"></script>
  // <script type="text/javascript" src="js/lightbox.min.js"></script>
  // <script type="text/javascript" src="js/main.js"></script>

define(JS_PATH, get_template_directory_uri().'/js');

function enqueue_scripts() {
	wp_enqueue_script( 
		'jquery.min', 
		JS_PATH.'/jquery.js',
		false,
		false,
		true);
	wp_enqueue_script( 
		'bootstrap.min', 
		JS_PATH.'/bootstrap.min.js', 
		array('jquery.min'), 
		false, 
		true);
	wp_enqueue_script( 
		'jquery.inview', 
		JS_PATH.'/jquery.inview.min.js', 
		array('bootstrap.min'), 
		false, 
		true);
	wp_enqueue_script( 
		'wow.min', 
		JS_PATH.'/wow.min.js', 
		array('jquery.inview'), 
		false, 
		true);
	wp_enqueue_script( 
		'mousescroll', 
		JS_PATH.'/mousescroll.js', 
		array('wow.min'), 
		false, 
		true);
	wp_enqueue_script( 
		'smoothscroll', 
		JS_PATH.'/smoothscroll.js', 
		array('mousescroll'), 
		false, 
		true);
	wp_enqueue_script( 
		'jquery.countTo', 
		JS_PATH.'/jquery.countTo.js', 
		array('smoothscroll'), 
		false, 
		true);
	wp_enqueue_script( 
		'lightbox.min', 
		JS_PATH.'/lightbox.min.js', 
		array('jquery.countTo'), 
		false, 
		true);
	wp_enqueue_script( 
		'main', 
		JS_PATH.'/main.js', 
		array('lightbox.min'), 
		false, 
		true);
}

function add_scripts() {
	enqueue_styles();
	enqueue_scripts();
}

add_action('wp_enqueue_scripts', 'add_scripts');
