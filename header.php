<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="">

  <meta http-equiv="cache-control" content="public">
  <meta http-equiv="cache-control" content="private">

  <title>RightNOW Plumbing</title>

  <?php wp_head(); ?>

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  <!--[if gte IE 9]
    <style type="text/css">
      footer {
        filter: none;
      }
    </style>
  <![endif]-->
</head>
<body>
  <nav id="header-nav">
    <div class="container-fluid">
      <div class="navbar-header">
        <a href="<?php echo home_url(); ?>" class="header-logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/header-logo.jpg" class="img-responsive" alt="Right Now Plumbing Logo" /></a>

        <?php if(is_front_page()): ?>
          <ul class="list-unstyled list-inline hidden-xs accredations">
            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home-advisor-top-rated.jpg" class="img-responsive center-block" alt="" /></li>
            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/best-of-home-advisor.jpg" class="img-responsive center-block" alt="" /></li> 
            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/screened-approved-home-advisor.jpg" class="img-responsive center-block" alt="" /></li>
            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bbb-logo.jpg" class="img-responsive center-block" alt="" /></li>
          </ul>
        <?php else: ?>
          <ul class="list-unstyled list-inline hidden-xs">
            <li>
              <p>Need a Plumber?</p>
              <p class="call-now">Call RIGHT<span>NOW</span></p>
              <p><span><?php the_field('phone', 'option'); ?></span></p>
            </li>
            <li>
              <p>7 Days A Week</p>
              <p class="hours">7AM-7PM</p>
            </li>
          </ul>
        <?php endif; ?>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="expanded" aria-control="navbar">
          <span class="sr-only">Toggle Navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li<?php if(is_front_page()){ echo ' class="active"'; } ?>><a href="<?php echo home_url(); ?>">Home</a></li>
          <li<?php if(is_page('about')){ echo ' class="active"'; } ?>><a href="<?php echo home_url('about'); ?>">About</a></li>
          <li<?php if(is_page('services')){ echo ' class="active"'; } ?>><a href="<?php echo home_url('services'); ?>">Services</a></li>
          <li<?php if(is_page('employment')){ echo ' class="active"'; } ?>><a href="<?php echo home_url('employment'); ?>">Employment</a></li>
          <li<?php if(is_page('contact')){ echo ' class="active"'; } ?>><a href="<?php echo home_url('contact'); ?>">Contact</a></li>
          <li>
            <a href="<?php echo home_url('contact'); ?>" class="btn-main">Get A Quote</a>
            <?php 
              $facebook = get_field('facebook', 'option'); 
              $twitter = get_field('twitter', 'option');
              $instagram = get_field('instagram', 'option');
            ?>
            <div class="social">
              <?php if($facebook): ?>
                <a href="<?php echo $facebook; ?>" target="_blank"><i class="fa fa-facebook-official"></i></a>
              <?php endif; if($twitter): ?>
                <a href="<?php echo $twitter; ?>" target="_blank"><i class="fa fa-twitter"></i></a>
              <?php endif; if($instagram): ?>
                <a href="<?php echo $instagram; ?>" target="_blank"><i class="fa fa-instagram"></i></a>
              <?php endif; ?>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
