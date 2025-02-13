<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="<?php echo get_theme_file_uri('images/fevicon.png') ?>" type="">

  <title> Carint </title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="<?php echo get_theme_file_uri('css/bootstrap.css') ?>" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="<?php echo get_theme_file_uri('css/font-awesome.min.css') ?>" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="<?php echo get_theme_file_uri('css/style.css') ?>" rel="stylesheet" />
  <!-- responsive style -->
  <link href="<?php echo get_theme_file_uri('css/responsive.css') ?>" rel="stylesheet" />


  <header class="header_section">
    <div class="header_top">
      <div class="container-fluid ">
        <div class="contact_nav">
          <a href="">
            <i class="fa fa-phone" aria-hidden="true"></i>
            <span>
              Call : +01 123455678990
            </span>
          </a>
          <a href="">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <span>
              Email : demo@gmail.com
            </span>
          </a>
          <a href="">
            <i class="fa fa-map-marker" aria-hidden="true"></i>
            <span>
              Location
            </span>
          </a>
        </div>
      </div>
    </div>
    <div class="header_bottom">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="<?php echo home_url(); ?>">   <!-- "home_url();" this is used to redirect to home when someone click the main title of the web -->
            <span>
              Carint
            </span>
          </a>
          
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
          
            <div class="navbar-nav  ">
              <?php
                wp_nav_menu(array(
                'theme_location' => 'primary',
                'container'      => 'div',
                'menu_class'     => 'navbar-nav mr-auto',
                'walker'         => new WP_Bootstrap_Navwalker(),
                ));
              ?>
              <div class="nav-item">
                <a class="nav-link" href="#"> <i class="fa fa-user" aria-hidden="true"></i> Login</a>
              </div>
              <form class="form-inline">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </form>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </header>

</head>

<?php wp_head(); ?>