<?php get_header(); ?>
  <div class="about-hero">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/right-now-van.jpg" class="" alt="The Right Now Plumbing Van" />
  </div>
  <main id="main">
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
      <section class="content">
        <div class="container">
          <h1 class="page-title">About Us</h1>
          <article>
            <?php the_content(); ?>
          </article>
        </div>
      </section>
    <?php endwhile; endif; ?>
    <section id="craftsmanship">
      <div class="container">
        <h1>Guaranteed Craftsmanship</h1>
      </div>
    </section>
    <section class="content">
      <div class="container">
        <article>
          <?php the_field('installation_repair_section_content'); ?>
          <p class="text-center"><a href="<?php echo home_url('services'); ?>" class="btn-main">All Services</a></p>
        </article>
      </div>
    </section>
    <section class="content">
      <div class="container">
        <article class="text-center">
          <?php the_field('why_choose_section_content'); ?>
        </article>
      </div>
    </section>
  </main>
<?php get_footer(); ?>