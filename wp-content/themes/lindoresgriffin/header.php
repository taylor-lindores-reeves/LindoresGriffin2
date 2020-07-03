<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Digital Speed. <?php wp_title() ?></title>
    <meta name="description" content="Digital Marketing Specialists working within the automotive and transportation industry. Social media marketing, Facebook pixel installation, website design and development are just some of the services we offer.">
    <meta name="keywords" content="digital marketing, facebook pixel, automotive, cars, racecars, sportscars, web development, marketing, facebook, social media, social media marketing, marketing agency, digital agency, digital marketing agency, classic cars, automobiles, google, advertising, digital advertising, marketing agency, united kingdom, conversions, leads, performance cars, performance vehicles, unobtainable specialist cars, unobtainable specialist vehicles, sought-after specialist cars, luxury cars, performance cars, performance vehicles, digital specialist, digital marketing specialist, specialist cars, Taylor Lindores, William Griffin, luxury cars, performance cars, performance vehicles, unobtainable specialist cars, unobtainable specialist vehicles, sought-after specialist cars, sought-after specialist vehicles, used cars, Cornwall, Penryn, Falmouth, Newquay.">
    <meta name="robots" content="index, follow" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/node_modules/slick-carousel/slick/slick.css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/node_modules/slick-carousel/slick/slick-theme.css">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />
      <!-- Hotjar Tracking Code for www.lindoresgriffin.co.uk -->
      <script>
          (function(h,o,t,j,a,r){
              h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
              h._hjSettings={hjid:1051156,hjsv:6};
              a=o.getElementsByTagName('head')[0];
              r=o.createElement('script');r.async=1;
              r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
              a.appendChild(r);
          })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
      </script>
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-128964435-1"></script>
      <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-128964435-1');
      </script>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
  <div class="container" id="container">
    <div class="pusher">
      <header id="navbar" class="site-header panel <?php if (!is_front_page()) { ?>site-header--full-width<?php } ?>">
        <div>
          <a class="site-header__logo--desktop" href="<?php echo site_url() ?>">
            <img src="https://res.cloudinary.com/campusxchange/image/upload/v1559126559/Lindores%20and%20Griffin/Artboard_1.png" alt="main desktop site logo" />
          </a>
          <div class="site-header__menu group">
            <nav class="main-navigation">
              <ul>
                <li <?php if (is_page('about-us') or wp_get_post_parent_id(0) == 16) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/about') ?>" class="main-navigation--underline">About Us</a></li>
                <li><a href="<?php echo site_url('/digital-marketing') ?>" class="main-navigation--underline">Digital Marketing</a></li>
<!--                <li><a href="--><?php //echo site_url('/case-studies') ?><!--" class="main-navigation--underline">Case Studies</a></li>-->
                <li><a href="<?php echo site_url('/insights') ?>" class="main-navigation--underline">Insights</a></li>
              </ul>
              <a href="#" class="open-modal contact-btn btn--contact main-navigation--right" style="<?php if (!is_front_page()) { ?>right: 0;<?php } ?> <?php if (get_the_ID()==216) { ?> background: #788087; <?php } ?>">Contact</a>
              <a href="#" class="open-modal btn--mobile contact-btn--mobile main-navigation--right" style="<?php if (!is_front_page()) { ?>right: 0;<?php } ?> <?php if (get_the_ID()==216) { ?> background: #788087; <?php } ?>">Contact</a>
            </nav>
          </div>
        </div>
        <?php if (get_the_ID()==187 || is_category() || is_singular('post')) { ?>
        <div class="insights__header" style="<?php if (is_singular('post')) { ?>background: #d1d1d1;<?php } ?>">
              <nav class="insights__header-nav">
                  <?php $args = [
                      'style'     => 'none',
                      'separator' => '', // <-- Removes the default one
                      'echo'                  => 1,
                  ];
                  wp_list_categories( $args ) ?>
              </nav>
          </div>
        <?php } ?>

      </header>

      <label class="mobile-navigation hey" onclick="">
        <input type="checkbox" class='checkbox'>
        <div></div>
        <div></div>
        <div></div>
      </label>
      <div class="mob-logo">
        <a class="mob-logo__logo" href="<?php echo site_url() ?>">
          <img src="https://res.cloudinary.com/campusxchange/image/upload/v1559126559/Lindores%20and%20Griffin/Artboard_1.png"  alt="main mobile site logo" class="mob-logo__logo--img" />
        </a>
      </div>
