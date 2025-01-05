<?php include "admin/connection.php" ?>
<?php session_start(); ?>

<!doctype html>
<html lang="en">
  <head>
    <title>Eazy Bank</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    <style>
      li:hover{
        font-weight:bold;
        transform: scale(1.2);
        text-decoration: underline;
      }
    </style>
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  

  <div id="overlayer"></div>
  <div class="loader">
    <!-- <div class="spinner-border text-primary" role="status"> -->
      <span class="sr-only">Loading...</span>
    </div>
  </div>


  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    <header class="site-navbar js-sticky-header site-navbar-target" style="background-color:rgba(247, 250, 248,0.5)"role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="index.html" class="h2 mb-0"style="color:#007BFF !important">Eazy Bank<span class="text-primary"></span> </a></h1>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="index.php" class="nav-link"style="color:black !important">Home</a></li>
                <li>
                  <a href="about.php" class="nav-link" style="color:black !important">About Us</a>
                </li>
                <li><a href="blog.php" class="nav-link"style="color:black !important">Blog</a></li>
                <li><a href="contact.php" class="nav-link"style="color:black !important">Contact</a></li>
                <li class="social"><a href="https://www.facebook.com/" class="nav-link"><span class="icon-facebook"style="color:#007BFF !important"></span></a></li>
                <li class="social"><a href="https://www.twitter.com/" class="nav-link"><span class="icon-twitter"style="color:#007BFF !important"></span></a></li>
                <li class="social"><a href="https://www.linkedin.com/" class="nav-link"><span class="icon-linkedin"style="color:#007BFF !important"></span></a></li>
                <?php if(isset($_SESSION['login_user_id'])){
                  
                  ?>
                <li class="btn text-right ml-5 font-weight-bold"><a href="user_acount.php" >User Acount</a></li>
                  <?php
                }
                ?>
                <?php if(!isset($_SESSION['login_user_id'])){
                  ?>
                <li class="btn text-right ml-5 font-weight-bold "><a href="user_login.php" >Login/Sign Up</a></li>
                  <?php
                }
                ?>
              </ul>
              
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>