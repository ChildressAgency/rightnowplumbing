<?php get_header(); ?>
  <main id="main">
    <section class="content">
      <div class="container">
        <h1 class="page-title">Services</h1>
        <article>
          <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile; endif; ?>
        </article>
        <?php if(have_rows('services')): ?>
          <div class="row service-list">
            <?php $i=0; while(have_rows('services')): the_row(); ?>
              <?php if($i%2==0){ echo '<div class="clearfix"></div>'; } ?>
              <div class="col-sm-6">
                <div class="media">
                  <div class="media-left">
                    <img src="<?php the_sub_field('service_image'); ?>" alt="" />
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading"><?php the_sub_field('service_title'); ?></h4>
                    <?php the_sub_field('service_text'); ?>
                  </div>
                </div>
              </div>
            <?php $i++; endwhile; ?>
          </div>
        <?php endif; ?>
      </div>
    </section>
    <?php if(get_field('featured_service_1')): ?>
      <section id="featuredService1">
        <div class="container-fluid container-sm-height">
          <div class="row row-sm-height">
            <div class="col-sm-6 col-sm-height image-side" style="background-image:url(<?php the_field('featured_service_1_image'); ?>);"></div>
            <div class="col-sm-6 col-sm-height text-side">
              <article>
                <?php the_field('featured_service_1'); ?>
              </article>
            </div>
          </div>
        </div>
      </section>
    <?php endif; ?>
    <?php if(get_field('info_bar_content')): ?>
      <section id="infoBar">
        <div class="container">
          <?php the_field('info_bar_content'); ?>
          <h1 class="phone"><?php the_field('phone', 'option'); ?></h1>
        </div>
      </section>
    <?php endif; ?>
    <?php if(get_field('featured_image_2')): ?>
      <section id="featuredService2">
        <div class="container-fluid container-sm-height">
          <div class="row row-sm-height">
            <div class="col-sm-6 col-sm-height text-side">
              <article>
                <?php the_field('featured_service_2'); ?>
              </article>
            </div>
            <div class="col-sm-6 col-sm-height image-side" style="background-image:url(<?php the_field('featured_service_2_image'); ?>);"></div>
          </div>
        </div>
      </section>
    <?php endif; ?>
  </main>
<?php get_footer(); ?>