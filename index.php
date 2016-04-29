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
      <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="service-icon">
          <i class="fa fa-html5"></i>
        </div>
        <div class="service-info">
          <h3>Website</h3>
          <p>Kami membuat Website Company Profile, Website Event, Online Shop, Sistem Informasi Akademik dll</p>
        </div>
      </div>
      <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
        <div class="service-icon">
          <i class="fa fa-desktop"></i>
        </div>
        <div class="service-info">
          <h3>Desktop Application</h3>
          <p>Kami membuat Aplikasi Desktop seperti Aplikasi POS, Penggajihan, Inventory dll</p>
        </div>
      </div>
      <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="550ms">
        <div class="service-icon">
          <i class="fa fa-android"></i>
        </div>
        <div class="service-info">
          <h3>Android Application</h3>
          <p>Untuk memenuhi kebutuhan Anda, maka kami juga mengembangkan android application</p>
        </div>
      </div>
      <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="650ms">
        <div class="service-icon">
          <i class="fa fa-wordpress"></i>
        </div>
        <div class="service-info">
          <h3>Wordpress Developer</h3>
          <p>Sebagai pengembang Wordpress kami membuat Theme Wordpress dan Plugin serta bisa dipesan sesuai keinginan pelanggan</p>
        </div>
      </div>
      <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="750ms">
        <div class="service-icon">
          <i class="fa fa-image"></i>
        </div>
        <div class="service-info">
          <h3>Design Graphic</h3>
          <p>Brand Identity, Logo, Brochure and Brand Packaging kami buat dengan karakter dan gaya yang sedang booming </p>
        </div>
      </div>
      <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="850ms">
        <div class="service-icon">
          <i class="fa fa-camera"></i>
        </div>
        <div class="service-info">
          <h3>Videographic</h3>
          <p>Kami juga membuat video untuk kebutuhan promosi perusahaan, wedding dan bisa disesuaikan dengan pesanan</p>
        </div>
      </div>
    </div>
  </div>
</div>
</section><!--/#services-->
<section id="about-us" class="parallax">
<div class="container">
  <div class="row">

      <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <?php 
              if ( is_active_sidebar( 'about_widget' ) ) : 
                  dynamic_sidebar('about_widget');
              else:
        ?>
                   <h2>About us</h2>
                   <p>Kami membangun beberapa jenis aplikasi dan desain. Diantaranya yaitu website, desktop aplikasi, android aplikasi, desain logo, brand packaging serta pembuatan video untuk keperluan promosi usaha atau lain-lain. </p>
                   <p>Selain itu dengan semangat spartan kami juga membangun Wordpress Theme dan Plugin yang kami desain secara profesional serta dengan fungsi yang akan sangat membantu client. Para pengembang kami adalah orang-orang yang berpengalaman di bidangnya masing-masing</p>
        <?php endif;?>
      </div>
   

    </div>
  </div>
</div>
</section><!--/#about-us-->

<section id="portfolio">
<div class="container">
  <div class="row">
    <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
      <h2>Our Portfolio</h2>
      <p>Sebagai bukti kami telah berpengalaman dalam pengembangan website, wordpress dan desain. Silakan lihat semua portfolio kami</p>
    </div>
  </div> 
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-3">
      <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="folio-image">
          <img class="img-responsive" src="<?php echo IMAGE_PATH . '/portfolio/1.jpg'; ?>" alt="">
        </div>
        <div class="overlay">
          <div class="overlay-content">
            <div class="overlay-text">
              <div class="folio-info">
                
                <p>Application, Inventory and POS</p>
              </div>
              <div class="folio-overview">
                <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                <span class="folio-expand">
                <a href="<?php echo IMAGE_PATH . '/portfolio/portfolio-details.jpg'; ?>" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="400ms">
        <div class="folio-image">
          <img class="img-responsive" src="<?php echo IMAGE_PATH . '/portfolio/2.jpg'; ?>" alt="">
        </div>
        <div class="overlay">
          <div class="overlay-content">
            <div class="overlay-text">
              <div class="folio-info">
                <h3>Time Hours</h3>
                <p>Design, Photography</p>
              </div>
              <div class="folio-overview">
                <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                <span class="folio-expand">
                <a href="<?php echo IMAGE_PATH . '/portfolio/portfolio-details.jpg'; ?>" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="500ms">
        <div class="folio-image">
          <img class="img-responsive" 
          src="<?php echo IMAGE_PATH . '/portfolio/3.jpg'; ?>" alt="">
        </div>
        <div class="overlay">
          <div class="overlay-content">
            <div class="overlay-text">
              <div class="folio-info">
                
                <p>Application, Point Of Sale</p>
              </div>
              <div class="folio-overview">
                <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                <span class="folio-expand">
                <a href="<?php echo IMAGE_PATH . '/portfolio/portfolio-details-2.jpg'; ?>" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="600ms">
        <div class="folio-image">
          <img class="img-responsive" src="<?php echo IMAGE_PATH . '/portfolio/4.jpg'; ?>" alt="">
        </div>
        <div class="overlay">
          <div class="overlay-content">
            <div class="overlay-text">
              <div class="folio-info">
                <h3>Time Hours</h3>
                <p>Design, Photography</p>
              </div>
              <div class="folio-overview">
                <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                <span class="folio-expand">
                <a href="<?php echo IMAGE_PATH . '/portfolio/portfolio-details.jpg'; ?>" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="700ms">
        <div class="folio-image">
          <img class="img-responsive" src="<?php echo IMAGE_PATH . '/portfolio/5.jpg'; ?>" alt="">
        </div>
        <div class="overlay">
          <div class="overlay-content">
            <div class="overlay-text">
              <div class="folio-info">
                <h3>Time Hours</h3>
                <p>Design, Photography</p>
              </div>
              <div class="folio-overview">
                <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                <span class="folio-expand">
                <a href="<?php echo IMAGE_PATH . '/portfolio/portfolio-details.jpg'; ?>" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="800ms">
        <div class="folio-image">
          <img class="img-responsive" src="<?php echo IMAGE_PATH . '/portfolio/6.jpg'; ?>" alt="">
        </div>
        <div class="overlay">
          <div class="overlay-content">
            <div class="overlay-text">
              <div class="folio-info">
                <h3>Time Hours</h3>
                <p>Design, Photography</p>
              </div>
              <div class="folio-overview">
                <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                <span class="folio-expand">
                <a href="<?php echo IMAGE_PATH . '/portfolio/portfolio-details.jpg'; ?>" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="900ms">
        <div class="folio-image">
          <img class="img-responsive" src="<?php echo IMAGE_PATH . '/portfolio/7.jpg'; ?>" alt="">
        </div>
        <div class="overlay">
          <div class="overlay-content">
            <div class="overlay-text">
              <div class="folio-info">
                <h3>Time Hours</h3>
                <p>Design, Photography</p>
              </div>
              <div class="folio-overview">
                <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                <span class="folio-expand">
                <a href="<?php echo IMAGE_PATH . '/portfolio/portfolio-details.jpg'; ?>" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="1000ms">
        <div class="folio-image">
          <img class="img-responsive" src="<?php echo IMAGE_PATH . '/portfolio/8.jpg'; ?>" alt="">
        </div>
        <div class="overlay">
          <div class="overlay-content">
            <div class="overlay-text">
              <div class="folio-info">
                <h3>Time Hours</h3>
                <p>Design, Photography</p>
              </div>
              <div class="folio-overview">
                <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                <span class="folio-expand">
                <a href="<?php echo IMAGE_PATH . '/portfolio/portfolio-details.jpg'; ?>" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
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
      <p>Kami mempunyai team yang berkompten dan bersemangat tinggi</p>
    </div>
  </div>
  <div class="team-members">
    <div class="row">
      <div class="col-sm-3">
        <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
          <div class="member-image">
            <img class="img-responsive" src="<?php echo IMAGE_PATH . '/team/1.jpg'; ?>" alt="">
          </div>
          <div class="member-info">
            <h3>Mochamad Iqbal Kurniawan</h3>
            <h4>CEO &amp; Founder</h4>
          </div>
          <div class="social-icons">
            <ul>
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              
            </ul>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="500ms">
          <div class="member-image">
            <img class="img-responsive" 
            src="<?php echo IMAGE_PATH . '/team/2.jpg'; ?>" alt="">
          </div>
          <div class="member-info">
            <h3>Darul Sandi</h3>
            <h4>Product Manager</h4>
          </div>
          <div class="social-icons">
            <ul>
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              
            </ul>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="800ms">
          <div class="member-image">
            <img class="img-responsive" src="<?php echo IMAGE_PATH . '/team/3.jpg'; ?>" alt="">
          </div>
          <div class="member-info">
            <h3>Mochamad Deden</h3>
            <h4>Analyst & Programmer</h4>
            
          </div>
          <div class="social-icons">
            <ul>
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              
            </ul>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="1100ms">
          <div class="member-image">
            <img class="img-responsive" src="<?php echo IMAGE_PATH . '/team/4.jpg'; ?>" alt="">
          </div>
          <div class="member-info">
            <h3>Rendi Rizki</h3>
            <h4>UI/UX Designer</h4>
            
          </div>
          <div class="social-icons">
            <ul>
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              
            </ul>
          </div>
        </div>
      </div>
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
            <p>Untuk memudahkan Anda dalam pemesanan, bisa menghubungi melalui email atau datang langsung di kantor kami.</p>
            <ul class="address">
              <li><i class="fa fa-map-marker"></i> <span> Address:</span> Jl. Pakar Barat 1 No 37, Bandung</li>
              <li><i class="fa fa-phone"></i> <span> Phone:</span> +62 896 2426 9426</li>
              <li><i class="fa fa-envelope"></i> <span> Email:</span><a href="mailto:quramastudios@gmail.com"> quramastudios@gmail.com</a></li>
              <li><i class="fa fa-globe"></i> <span> Website:</span> <a href="#">www.quramastudios.com</a></li>
            </ul>
          </div>                            
        </div>
      </div>
    </div>
  </div>
</div>        
</section><!--/#contact-->
<?php get_footer(); ?>