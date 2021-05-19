<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <!-- Title  -->
  <title>South - Real Estate Agency Template | Home</title>
  <link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/img/core-img/favicon.ico">
  <!-- Style CSS -->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css">
  <!-- !! wp head -->
  <?php wp_head(); ?>
</head>


<body>

  <!-- Preloader -->
  <div id="preloader">
    <div class="south-load"></div>
  </div>

  <!-- ##### Header Area Start ##### -->
  <header class="header-area">

    <!-- Top Header Area -->
    <div class="top-header-area">
      <div class="h-100 d-md-flex justify-content-between align-items-center">
        <div class="email-address">
          <a href="mailto:contact@southtemplate.com"><?php the_field('bandeau_email', 'option'); ?></a>
        </div>
        <div class="phone-number d-flex">
          <div class="icon">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/phone-call.png" alt="">
          </div>
          <div class="number">
            <a href="tel:+45 677 8993000 223"><?php the_field('bandeau_tel', 'option'); ?></a>
          </div>
        </div>
      </div>
    </div>

    <!-- Main Header Area -->
    <div class="main-header-area" id="stickyHeader">
      <div class="classy-nav-container breakpoint-off">
        <!-- Classy Menu -->
        <nav class="classy-navbar justify-content-between" id="southNav">
          <!-- Logo -->
          <a class="nav-brand" href="<?php bloginfo('template_directory'); ?>/homepage"><img
              src="<?php bloginfo('stylesheet_directory'); ?>/img/core-img/logo.png" alt=""></a>

          <!-- Navbar Toggler -->
          <div class="classy-navbar-toggler">
            <span class="navbarToggler"><span></span><span></span><span></span></span>
          </div>
          <!-- Menu -->
          <div class="classy-menu">

            <!-- close btn -->
            <div class="classycloseIcon">
              <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
            </div>

            <!-- Nav Start -->
            <div class="classynav">
              <ul>
                <?php wp_nav_menu(array(
                  'menu' => 'main_menu',
                )); ?>
              </ul>
              <!-- Search Form -->
              <!-- TODO: search form fonctionnel + compréhension -->
              <div class="south-search-form">
                <!-- <form action="#" method="post">
                  <input type="search" name="search" id="search" placeholder="Search Anything ...">
                </form> -->
                <?php
                $myTemplateName_unique_id = wp_unique_id('search-form-');
                $myTemplateName_aria_label = !empty($args['aria_label']) ? 'aria-label="' . esc_attr($args['aria_label']) . '"' : '';
                ?>
                <form role="search" <?php echo $myTemplateName_aria_label; ?> method="get" class="search-form"
                  action="<?php echo esc_url(home_url('/')); ?>">
                  <label
                    for="<?php echo esc_attr($myTemplateName_unique_id); ?>"><?php _e('Search&hellip;', 'myTemplateName'); ?></label>
                  <input type="search" id="<?php echo esc_attr($myTemplateName_unique_id); ?>" class="search-field"
                    value="<?php echo get_search_query(); ?>" name="s" />
                  <button type="submit" class="search-submit"
                    value="<?php echo esc_attr_x('Search', 'submit button', 'myTemplateName'); ?>"><i
                      class="fa fa-search" aria-hidden="true"></i></button>
                </form>
              </div>

              <!-- Search Button -->
              <a href="#" class="searchbtn"><i class="fa" aria-hidden="true"></i></a>
            </div>
            <!-- Nav End -->
          </div>
        </nav>
      </div>
    </div>
  </header>
  <!-- ##### Header Area End ##### -->