<?php get_header(); ?>
  <main id="main">
    <section class="content">
      <div class="container">
        <h1 class="page-title">Employment</h1>
        <article>
          <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile; endif; ?>
        </article>
      </div>
    </section>
    <section id="duties">
      <div class="container-fluid container-sm-height">
        <div class="row row-sm-height">
          <div class="col-sm-6 col-sm-height image-side" style="background-image:url(<?php the_field('job_duties_section_image'); ?>);"></div>
          <div class="col-sm-6 col-sm-height text-side">
            <h2>Job Duties</h2>
            <ul class="check-list">
              <?php if(have_rows('job_duties')): while(have_rows('job_duties')): the_row(); ?>
                <li><?php the_sub_field('job_duty'); ?></li>
              <?php endwhile; endif; ?>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section id="requirements" class="text-center">
      <div class="container">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-icon.png" class="img-responsive center-block" alt="" />
        <article>

          <?php if(have_rows('job_requirements')): ?>
            <h2>Requirements</h2>
            <ul>
              <?php while(have_rows('job_requirements')): the_row(); ?>
                <li><?php the_sub_field('requirement'); ?></li>
              <?php endwhile; ?>
            </ul>
          <?php endif; ?>

          <?php if(have_rows('job_benefits')): ?>
            <h2>Benefits</h2>
            <ul>
              <?php while(have_rows('job_benefits')): the_row(); ?>
                <li><?php the_sub_field('benefit'); ?></li>
              <?php endwhile; ?>
            </ul>
          <?php endif; ?>

          <?php echo do_shortcode('[resume-form]'); ?>
        </article>
      </div>
    </section>
    <?php if(get_field('eoe_statement')): ?>
      <section id="eoeStatement">
        <div class="container">
          <article>
            <h2 class="text-center">Equal Opportunity Employment</h2>
            <?php the_field('eoe_statement'); ?>
          </article>
        </div>
      </section>
    <?php endif; ?>
  </main>
<?php get_footer(); ?>