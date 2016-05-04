<?php
/**
* author   : Moch Deden
* homepage : http://selesdepselesnul.com
* company  : qurama studios
*/
add_filter('widget_text', 'do_shortcode');
define('CSS_PATH', get_template_directory_uri().'/css');
define('JS_PATH', get_template_directory_uri().'/js');
define('IMAGE_PATH', get_template_directory_uri() . '/images');

add_shortcode('slider', function($atts, $content) {
	$a = shortcode_atts( array(
		'image' => '',
		'title' => '',
		'title-imp' => '',
		'active' => ''
	), $atts );
	if($a['active'] == 'active')
		$active = $a['active'];
	else
		$active = '';
	?>
	<div class="item <?php echo $active ?>" style="background-image: url(
        <?php echo "'" . IMAGE_PATH .'/slider'.'/'.$a['image']."'".');'; ?>">
          <div class="caption">
            <h1 class="animated fadeInLeftBig"><?php echo $a['title'] ?> 
            	<span> <?php echo $a['title-imp'] ?></span></h1>
            <p class="animated fadeInRightBig"><?php echo $content ?></p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Start now</a>
          </div>
    </div>
    <?php
});

add_shortcode('portofolio', function ($atts, $content) {
	$a = shortcode_atts( array(
		'preview' => '',
		'detail' => '',
		'title' => ''
	), $atts );
	?>
	<div class="col-sm-3">
      <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="400ms">
        <div class="folio-image">
          <img class="img-responsive" src="<?php echo IMAGE_PATH . '/portofolio/preview' . '/' . $a['preview']; ?>" alt="">
        </div>
        <div class="overlay">
          <div class="overlay-content">
            <div class="overlay-text">
              <div class="folio-info">
                <h3><?php echo $a['title'];?></h3>
                <p><?php echo $content;?></p>
              </div>
              <div class="folio-overview">
                <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                <span class="folio-expand">
                <a href="<?php echo IMAGE_PATH . '/portofolio/detail'. '/'.$a['detail']; ?>" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php	
});

add_shortcode('team', function($atts) {
	  $a = shortcode_atts( array(
	  	'photo' => '',
		'name' => '',
		'job' => '',
		'facebook' => '',
		'twitter' => '',
		'github' => '',
		'web' => ''
	  ), $atts );
	  ?>
	  <div class="col-sm-3">
        <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="1100ms">
          <div class="member-image">
            <img class="img-responsive" src="<?php echo IMAGE_PATH . '/team'.'/'.$a['photo'] ?>" alt="">
          </div>
          <div class="member-info">
            <h3><?php echo $a['name'];?></h3>
            <h4><?php echo $a['job'];?></h4>       
          </div>
          <div class="social-icons">
            <ul>
              <?php if(!empty($a['web'])):?>
              	     <li class="contact-person"><a href="<?php echo $a['web'] ?>"><i class="fa fa-home"></i></a></li>
              <?php endif;?>    
              <?php if(!empty($a['facebook'])):?>
              	     <li class="contact-person"><a href="<?php echo $a['facebook'] ?>"><i class="fa fa-facebook"></i></a></li>
              <?php endif;?>
              <?php if(!empty($a['twitter'])):?>
              	     <li class="contact-person"><a href="<?php echo $a['twitter'] ?>"><i class="fa fa-twitter"></i></a></li>
              <?php endif;?>
              <?php if(!empty($a['github'])):?>
              	     <li class="contact-person"><a href="<?php echo $a['github'] ?>"><i class="fa fa-github"></i></a></li>
              <?php endif;?>
            
            </ul>
          </div>
        </div>
      </div>
      <?php
});

add_shortcode('contact', function($atts) {
	$a = shortcode_atts( array(
	  	'address' => '',
		'phone' => '',
		'email' => '',
		'facebook' => '',
		'twitter' => ''
	), $atts );
	?>
	<li><i class="fa fa-map-marker"></i> <?php echo $a['address']?></li>
    <li><i class="fa fa-phone"></i> <?php echo $a['phone']?></li>
    <li><i class="fa fa-envelope"></i><a href="mailto:<?php echo $a['email']?>"> <?php echo $a['email']?></a></li>
    <li><i class="fa fa-facebook"></i><a href="<?php echo $a['facebook']?>"> <?php echo $a['facebook']?></a></li>
    <li><i class="fa fa-twitter"></i><a href="<?php echo $a['twitter']?>"> <?php echo $a['twitter']?></a></li>
	<?php        
});

add_shortcode('service', function($atts, $content) {
	  
	$a = shortcode_atts( array(
	  	'icon' => '',
	  	'title' => ''
	), $atts );
	?>	

	<div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
	<div class="service-icon">
	  <i class="fa fa-<?php echo $a['icon'] ?>"></i>
	</div>
	<div class="service-info">
	  <h3><?php echo $a['title'] ?></h3>
	  <p><?php echo $content ?></p>
	</div>
	</div>
    <?php
});

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

add_action('wp_enqueue_scripts', function() {
	enqueue_styles();
	enqueue_scripts();
});

add_action( 'widgets_init', function() {

	register_sidebar( array(
		'name'          => 'Slider Widget Area',
		'id'            => 'slider_widget_area'
	) );

	register_sidebar( array(
		'name'          => 'Service Widget Area',
		'id'            => 'service_widget_area'
	) );


	register_sidebar( array(
		'name'          => 'About Widget Area',
		'id'            => 'about_widget_area',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>'
	) );
	

	register_sidebar( array(
		'name'          => 'Portofolio Widget Area',
		'id'            => 'portofolio_widget_area'
	) );	

	register_sidebar( array(
		'name'          => 'Team Widget Area',
		'id'            => 'team_widget_area'
	) );	

	register_sidebar( array(
		'name'          => 'Contact Widget Area',
		'id'            => 'contact_widget_area'
	) );	


} );


