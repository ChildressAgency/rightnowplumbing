<?php get_header(); ?>
  <div class="banner">
    <div class="container-fluid">
      <div class="seven">
        <p>7 Days A Week<span>7AM-7PM</span></p>
      </div>
      <div class="call">
        <div class="row">
          <div class="col-sm-5">
            <p>Need a Plumber?</p>
            <p>Call RIGHT<span>NOW</span></p>
          </div>
          <div class="col-sm-7">
            <p class="phone-number"><a href="tel:<?php the_field('phone', 'option'); ?>"><?php the_field('phone', 'option'); ?></a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="hp-hero" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/images/fixing-sink-drain.jpg); background-position:left center;">
    <div class="container">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-icon-large.png" class="img-responsive center-block" alt="" />
      <div class="quick-links">
        <div class="row">
          <div class="col-xs-4">
            <a href="<?php echo home_url('contact'); ?>" class="get-quote">Get A Quote</a>
          </div>
          <div class="col-xs-3 col-sm-4 left-border">
            <a href="<?php echo home_url('services'); ?>" class="services">Services</a>
          </div>
          <div class="col-xs-4 left-border">
            <a href="<?php echo home_url('employment'); ?>" class="employment">Employment</a>
          </div>
        </div>
      </div>
    </div>
    <div class="white-overlay"></div>
  </div>
  <section id="hp-services">
    <div class="container">
      <h1>Our Services</h1>
      <?php the_field('services_section_content'); ?>
      <ul class="list-unstyled list-inline service-icons">
        <li><a href="<?php echo home_url('services'); ?>" class="water-heaters">Water Heaters</a></li>
        <li><a href="<?php echo home_url('services'); ?>" class="water-filtration">Water Filtration</a></li>
        <li><a href="<?php echo home_url('services'); ?>" class="drain-cleaning">Drain Cleaning</a></li>
        <li><a href="<?php echo home_url('services'); ?>" class="sump-pumps">Sump Pump</a></li>
      </ul>
      <a href="<?php echo home_url('services'); ?>" class="btn-main">All Services</a>
    </div>
  </section>
  <section id="hp-craftsmanship">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 text-side">
          <h1>Guaranteed Craftsmanship.</h1>
          <?php the_field('craftsmanship_section_content'); ?>
          <a href="<?php echo home_url('about'); ?>" class="btn-main">Read More</a>
        </div>
        <div class="col-sm-6">

        </div>
      </div>
    </div>
  </section>

  <?php if(have_rows('testimonials', 'option')):
    $rows = get_field('testimonials', 'option');
    $row_count = count($rows);
    $new_row_number = ($row_count / 2);
    $i = 0; ?>
    <section id="hp-testimonials">
      <div class="container">
        <h1>Testimonials</h1>
        <div class="row">
          <div class="col-sm-6">
            <?php while(have_rows('testimonials', 'option')): the_row();
              if($i == $new_row_number){ echo '</div><div class="col-sm-6">'; } 

              if(get_sub_field('row_layout') == 'image'): ?>
                <img src="<?php the_sub_field('image'); ?>" class="full-width" alt="" />
              <?php else: ?>
                <div class="testimonial-block">
                  <?php the_sub_field('testimonial'); ?>
                  <div class="testimonial-footer">
                    <p><?php the_sub_field('testimonial_author'); ?><span><?php the_sub_field('testimonial_city'); ?></span></p>
                  </div>
                </div>
              <?php endif; ?>

            <?php $i++; endwhile; ?>
          </div>
        </div>
        <a href="<?php echo home_url('services'); ?>" class="btn-main">View All services</a>
        <a href="<?php echo home_url('contact'); ?>" class="btn-main">Leave A Testimonial</a>
      </div>
    </section>
  <?php endif; ?>

<?php get_footer(); ?>