  <section id="contact">
    <div class="container">
      <?php if(!is_page('contact')): ?>
        <div class="row">
          <div class="col-sm-6">
            <div class="contact-info">
              <p>Need A Plumber Right Now?</p>
              <h1>Contact Us</h1>
              <h2><?php the_field('phone', 'option'); ?></h2>
              <div class="map">
                <?php the_field('location', 'option'); ?>
                <div id="mapInfo" class="map-info">
                  <p><?php the_field('address', 'option'); ?><br /><?php the_field('city_state_zip', 'option'); ?></p>
                  <p><span>24-Hour Service</span><br />Sunday Emergency Service Only</p>
                  <p><?php the_field('email', 'option'); ?></p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]'); ?>
          </div>
        </div>
      <?php endif; ?>

      <?php 
        $facebook = get_field('facebook', 'option');
        $twitter = get_field('twitter', 'option');
        $instagram = get_field('instagram', 'option');
        $google_plus = get_field('google_plus', 'option');
      ?>
      <div class="social">
        <?php if($facebook): ?>
          <a href="<?php echo $facebook; ?>" target="_blank"><i class="fa fa-facebook-official"></i></a>
        <?php endif; if($twitter): ?>
          <a href="<?php echo $twitter; ?>" target="_blank"><i class="fa fa-twitter"></i></a>
        <?php endif; if($instagram): ?>
          <a href="<?php echo $instagram; ?>" target="_blank"><i class="fa fa-instagram"></i></a>
        <?php endif; if($google_plus): ?>
          <a href="<?php echo $google_plus; ?>" target="_blank"><i class="fa fa-google-plus"></i></a>
        <?php endif; ?>
      </div>
      <div class="accredations">
        <ul class="list-unstyled list-inline">
          <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/phcc-logo.png" class="img-responsive center-block" alt="" /></li>
          <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home-advisor-top-rated.jpg" class="img-responsive center-block" alt="" /></li>
          <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/best-of-home-advisor.jpg" class="img-responsive center-block" alt="" /></li>
          <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/screened-approved-home-advisor.jpg" class="img-responsive center-block" alt="" /></li>
          <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bbb-logo.jpg" class="img-responsive center-block" alt="" /></li>
          <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/chamber-logo.jpg" class="img-responsive center-block" alt="" /></li>
        </ul>
      </div>
    </div>
  </section>
  <div class="cc-section">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/credit-cards.jpg" class="img-responsive center-block" alt="" />
        </div>
        <div class="col-sm-8">
          <p>Service Areas Include: <?php the_field('service_areas', 'option'); ?></p>
        </div>
      </div>
    </div>
  </div>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-2">
          <a href="<?php echo home_url(); ?>" class="footer-logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-white.png" class="img-responsive center-block" alt="" /></a>
        </div>
        <div class="col-sm-5">
          <ul id="footer-nav" class="list-unstyled list-inline">
            <li><a href="<?php echo home_url(); ?>">Home</a></li>
            <li><a href="<?php echo home_url('about'); ?>">About</a></li>
            <li><a href="<?php echo home_url('services'); ?>">Services</a></li>
            <li><a href="<?php echo home_url('get-a-quote'); ?>">Get A Quote</a></li>
            <li><a href="<?php echo home_url('employment'); ?>">Employment</a></li>
            <li><a href="<?php echo home_url('contact'); ?>">Contact</a></li>
          </ul>
        </div>
        <div class="col-sm-5">
          <div class="row">
            <div class="col-sm-4">
              <p><strong>ADDRESS</strong><br /><?php the_field('address', 'option'); ?><br /><?php the_field('city_state_zip', 'option'); ?></p>
            </div>
            <div class="col-sm-4">
              <p><strong>PHONE</strong><br /><?php the_field('phone', 'option'); ?></p>
            </div>
            <div class="col-sm-4">
              <p><strong>24-HOUR SERVICE</strong><br />Sunday Emergency Service Only</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <div class="copyright">
    <div class=container>
      <p>&copy;<?php echo date('Y'); ?> RightNOW Plumbing</p>
      <p>website created by <a href="https://childressagency.com" target="_blank">The Childress Agency</a></p>
    </div>
  </div>
  <?php wp_footer(); ?>
</body>
</html>