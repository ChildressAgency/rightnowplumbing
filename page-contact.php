<?php get_header(); ?>
  <div class="hero" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/images/pipes-with-overlay.jpg);">
    <div class="container">
      <h2>Need a Plumber Right Now?<span><?php the_field('phone', 'option'); ?></span></h2>
    </div>
  </div>
  <main id="main">
    <section class="content">
      <div class="container">
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
          <h1 class="page-title">Contact Us</h1>
          <article>
            <?php the_content(); ?>
          </article>
        <?php endwhile; endif; ?>

        <div class="row contact-info-map">
          <div class="col-sm-5">
            <div class="contact-info">
              <p><strong>PHONE</strong><br /><?php the_field('phone', 'option'); ?></p>
              <p><strong>ADDRESS</strong><br /><?php the_field('address', 'option'); ?><br /><?php the_field('city_state_zip', 'option'); ?></p>
              <p><strong>EMAIL</strong><br /><?php the_field('email', 'option'); ?></p>
              <p><strong>HOURS</strong><br />7 AM - 7 PM<br />Sunday - Saturday</p>
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/credit-cards-2.png" class="img-responsive" alt="" />
            </div>
          </div>
          <div class="col-sm-7">
            <div class="map">
              <?php the_field('location', 'option'); ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
      <div class="container">
        <h1 class="page-title">Get A Quote</h1>
        <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]'); ?>
      </div>
    </section>
  </main>
<?php get_footer(); ?>