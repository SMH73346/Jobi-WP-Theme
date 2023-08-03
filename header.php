<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="keywords" content="Digital marketing agency, Digital marketing company, Digital marketing services" />
  <meta name="description" content="Jobi is a beautiful website template designed for job board websites." />
  <meta property="og:site_name" content="Jobi" />
  <meta property="og:url" content="https://creativegigstf.com/" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Jobi - Responsive Job Board HTML Template" />
  <meta name="og:image" content="<?php echo get_template_directory_uri(); ?>/images/assets/ogg.png" />
  <!-- For IE -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- For Resposive Device -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- For Window Tab Color -->
  <!-- Chrome, Firefox OS and Opera -->
  <meta name="theme-color" content="#244034" />
  <!-- Windows Phone -->
  <meta name="msapplication-navbutton-color" content="#244034" />
  <!-- iOS Safari -->
  <meta name="apple-mobile-web-app-status-bar-style" content="#244034" />
  <title>
    <?php bloginfo('name'); ?> -
    <?php the_title(); ?>
  </title>

  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="56x56"
    href="<?php echo get_template_directory_uri(); ?>/images/fav-icon/icon.png" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css"
    media="all" />
  <!-- Main style sheet -->
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.min.css"
    media="all" />
  <!-- responsive style sheet -->
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css"
    media="all" />

  <!-- Fix Internet Explorer ______________________________________-->
  <!--[if lt IE 9]>
      <script src="/http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <script src="/vendor/html5shiv.js"></script>
      <script src="/vendor/respond.js"></script>
    <![endif]-->
  <?php wp_head() ?>
</head>

<body>
  <!-- ===================================================
    Loading Transition
==================================================== -->
  <!-- <div id="preloader">
      <div id="ctn-preloader" class="ctn-preloader">
        <div class="icon">
          <img
            src="<?php echo get_template_directory_uri(); ?>/images/loader.svg"
            alt=""
            class="m-auto d-block"
            width="60"
          />
        </div>
        <div class="txt-loading">
          <span data-text-preloader="j" class="letters-loading"> j </span>
          <span data-text-preloader="o" class="letters-loading"> o </span>
          <span data-text-preloader="b" class="letters-loading"> b </span>
          <span data-text-preloader="i" class="letters-loading"> i </span>
        </div>
      </div>
    </div> -->

  <!-- 
    =============================================
        Theme Main Menu
    ============================================== 
    -->
  <header class="theme-main-menu menu-overlay menu-style-one sticky-menu">
    <div class="inner-content position-relative">
      <div class="top-header">
        <div class="d-flex align-items-center">
        <nav class="navbar navbar-expand-lg p0 ms-lg-5 ms-3 order-lg-2">
          <div class="logo order-lg-0">
            <a href="<?php echo home_url(); ?>" class="d-flex align-items-center">
              <?php if (has_custom_logo()) {
                the_custom_logo();
              } else { ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo/logo_01.png" alt="" />
              <?php } ?>
            </a>
          </div>
          <!-- logo -->

          <div class="right-widget ms-auto order-lg-3">
            <?php if (is_user_logged_in()) { ?>
              <ul class="d-flex align-items-center style-none">
                <li><a href="<?php echo wp_logout_url(home_url()); ?>" class="login-btn-one">Logout</a></li>
              </ul>
            <?php } else { ?>
              <ul class="d-flex align-items-center style-none">
                <li><a href="<?php echo wp_login_url(); ?>" class="login-btn-one">Login</a></li>
                <li class="d-none d-md-block ms-4"><a href="<?php echo site_url('Find-A-Developer'); ?>"
                    class="btn-one">Hire Top Talents</a></li>
              </ul>
            <?php } ?>
            <button class="navbar-toggler d-block d-lg-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          </div>
          <!--/.right-widget-->
          <?php
          $args = array(
            'theme_location' => 'primary-menu',
            'container' => 'nav',
            'container_class' => 'navbar navbar-expand-lg p0 ms-lg-5 ms-3 order-lg-2',
            'menu_class' => 'navbar-nav align-items-lg-center',
            // 'link_class' => 'nav-link dropdown-toggle',
            // Add nav-link class to anchor tags
            'walker' => new Walker_Nav_Menu_Custom(),
            // 'depth' => 2, // Specify the depth for dropdown levels
            'add_li_class' => 'nav-item dropdown', // Add custom class to <li> elements
            'add_a_class' => 'nav-link dropdown-toggle', // Add custom class to <a> elements
            'items_wrap' => '<ul id="%1$s" class="%2$s collapse navbar-collapse">%3$s</ul>',
          
          );
          wp_nav_menu($args);
          ?>
        </nav>
        </div>
      </div>
      <!--/.top-header-->
    </div>
    <!-- /.inner-content -->
  </header>
  <!-- /. End Theme-main-menu -->