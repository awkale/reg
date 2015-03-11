<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <title><?php global $page, $paged;  wp_title( '|', true, 'right' ); bloginfo( 'name' ); $site_description = get_bloginfo( 'description', 'display' ); if ( $site_description && ( is_home() || is_front_page() ) ) echo " | $site_description"; ?></title>
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <!--[if lt IE 9]>
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
  <![endif]-->
  <script>(function(){document.documentElement.className='js'})();</script>
  <?php wp_head(); ?>

  <!-- Styles -->
  <!-- Bootstrap CSS -->
  <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font awesome CSS -->
  <link href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" rel="stylesheet">
  <!-- Magnific Popup -->
  <link href="<?php echo get_template_directory_uri(); ?>/css/magnific-popup.css" rel="stylesheet">
  <!-- Owl carousel -->
  <link href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css" rel="stylesheet">

  <!-- CSS for this page -->
  <!-- Revolution Slider -->
  <link href="<?php echo get_template_directory_uri(); ?>/css/settings.css" rel="stylesheet">

  <!-- Base style -->
  <link href="<?php echo get_template_directory_uri(); ?>/css/styles/style.css" rel="stylesheet">
  <!-- Skin CSS -->
  <link href="<?php echo get_template_directory_uri(); ?>/css/styles/skin-lblue.css" rel="stylesheet" id="color_theme">

  <!-- Custom CSS. Type your CSS code in custom.css file -->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />

  <!-- Favicon -->
  <link rel="shortcut icon" href="#">
</head>
<body>
  <!-- Outer Starts -->
  <div class="outer">

    <!-- Top bar starts -->
    <div class="top-bar">
      <div class="container">

        <!-- Contact starts -->
        <div class="tb-contact pull-left">
          <!-- Email -->
          <i class="fa fa-envelope color"></i> &nbsp; <a href="mailto:contact@domain.com">contact@domain.com</a>
          &nbsp;&nbsp;
        </div>
        <!-- Contact ends -->

        <!-- Langauge starts -->
        <div class="tb-language dropdown pull-right">
          <a href="#" data-target="#" data-toggle="dropdown"><i class="fa fa-globe"></i> English <i class="fa fa-angle-down color"></i></a>
          <!-- Dropdown menu with languages -->
          <ul class="dropdown-menu dropdown-mini" role="menu">
            <li><a href="#">Hindi</a></li>
            <li><a href="#">Tamil</a></li>
            <li><a href="#">Kanada</a></li>
          </ul>
        </div>
        <!-- Language ends -->

        <!-- Search section for responsive design -->
        <div class="tb-search pull-left">
          <a href="#" class="b-dropdown"><i class="fa fa-search square-2 rounded-1 bg-color white"></i></a>
          <div class="b-dropdown-block">
            <form role="form">
              <!-- Input Group -->
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Type Something">
                <span class="input-group-btn">
                  <button class="btn btn-color" type="button">Search</button>
                </span>
              </div>
            </form>
          </div>
        </div>
        <!-- Search section ends -->

        <!-- Social media starts -->
        <div class="tb-social pull-right">
          <div class="brand-bg text-right">
            <!-- Brand Icons -->
            <a target="_blank" href="https://www.facebook.com/raisingforeffectivegiving" class="facebook"><i class="fa fa-facebook square-2 rounded-1"></i></a>
            <a target="_blank" href="https://twitter.com/REGcharity" class="twitter"><i class="fa fa-twitter square-2 rounded-1"></i></a>
            <a target="_blank" href="https://www.youtube.com/channel/UC9Gkhg-FeQjWqcLnaal_Fdg" class="youtube"><i class="fa fa-youtube square-2 rounded-1"></i></a>
          </div>
        </div>
        <!-- Social media ends -->

        <div class="clearfix"></div>
      </div>
    </div>

    <!-- Top bar ends -->

    <!-- Header two Starts -->
    <div class="header-2">

      <!-- Container -->
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            <!-- Logo section -->
            <div class="logo">
            <img src="<?php echo wp_get_attachment_url( 234 ); ?>" alt="" class="img-responsive">
            </div>
          </div>
          <div class="col-md-9">

            <!-- Navigation starts.  -->
            <div class="navy">
              <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
            </div>
            <!-- Navigation ends -->

          </div>

          <div class="col-md-1">

            <!-- Search section -->
            <div class="head-search pull-right">
              <a href="#" class="b-dropdown"><i class="fa fa-search square-2 rounded-1 bg-color white"></i></a>
              <div class="b-dropdown-block">
                <form role="form">
                  <!-- Input Group -->
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Type Something">
                    <span class="input-group-btn">
                      <button class="btn btn-color" type="button">Search</button>
                    </span>
                  </div>
                </form>
              </div>
            </div>
            <!-- Search section ends -->
            <div class="clearfix"></div>

          </div>

        </div>
      </div>
    </div>

    <!-- Header two ends -->
