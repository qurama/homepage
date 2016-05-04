<?php get_header(); ?>
<section id="services">
<div class="container">
  <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
    <div class="row">
      <div class="text-center col-sm-8 col-sm-offset-2">
        <h2>Our Services</h2>
      </div>
    </div> 
  </div>
  <div class="text-center our-services">
    <div class="row">
      <?php 
          if ( is_active_sidebar( 'service_widget_area' ) ) : 
              dynamic_sidebar('service_widget_area');
          endif;
      ?>
    </div>
  </div>
</div>
</section><!--/#services-->

<section id="about-us" class="parallax">
<div class="container">
  <div class="row">
      <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <?php 
              if ( is_active_sidebar( 'about_widget_area' ) ) : 
                  dynamic_sidebar('about_widget_area');
              endif;
        ?>
      </div>
    </div>
  </div>
</section><!--/#about-us-->

<section id="portfolio">
<div class="container">
  <div class="row">
    <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
      <h2>Our Portfolio</h2>
  </div> 
</div>
<div class="container-fluid">
  <div class="row">
    <?php 
      if ( is_active_sidebar( 'portofolio_widget_area' ) ) : 
          dynamic_sidebar('portofolio_widget_area');
      endif;
    ?>
  </div>
</div>
<div id="portfolio-single-wrap">
  <div id="portfolio-single">
  </div>
</div><!-- /#portfolio-single-wrap -->
</section><!--/#portfolio-->

<section id="team">
<div class="container">
  <div class="row">
    <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
      <h2>The Team</h2>
    </div>
  </div>
  <div class="team-members">
    <div class="row">
        <?php 
          if ( is_active_sidebar( 'team_widget_area' ) ) : 
            dynamic_sidebar('team_widget_area');
          endif;
        ?>
    </div>
  </div>            
</div>
</section><!--/#team-->

<section id="contact">

<div id="contact-us" class="parallax">
  <div class="container">
    <div class="row">
      <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <h2>Contact Us</h2>
        
      </div>
    </div>
    <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
      <div class="row">
        <div class="col-sm-6">
          <form id="main-contact-form" name="contact-form" method="post" action="#">
            <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
              <div class="col-sm-6">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" placeholder="Name" required="required">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input type="email" name="email" class="form-control" placeholder="Email Address" required="required">
                </div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" name="subject" class="form-control" placeholder="Subject" required="required">
            </div>
            <div class="form-group">
              <textarea name="message" id="message" class="form-control" rows="4" placeholder="Enter your message" required="required"></textarea>
            </div>                        
            <div class="form-group">
              <button type="submit" class="btn-submit">Send Now</button>
            </div>
          </form>   
        </div>
        <div class="col-sm-6">
          <div class="contact-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <p>If you want to hire us, please feel free to get in touch</p>
            <ul class="address">
            <?php 
                if ( is_active_sidebar( 'contact_widget_area' ) ) : 
                  dynamic_sidebar('contact_widget_area');
                endif;
            ?>
            </ul>
          </div>                            
        </div>
      </div>
    </div>
  </div>
</div>        
</section><!--/#contact-->
<?php get_footer(); ?>