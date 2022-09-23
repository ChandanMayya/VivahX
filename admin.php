<?php

session_start();

include("connection.php");
include("functions.php");

$user_data=check_login($con);

if($user_data['acnt_type']!='a' )
  header("Location: login.php");

  ?>



<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Mexant HTML5 Template - About page</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-574-mexant.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
<!--

TemplateMo 574 Mexant

https://templatemo.com/tm-574-mexant

-->

  </head>

<body>


  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
      <div class="container ">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="admin.html" class="logo">
                          <img src="assets/images/logo.png" alt="">
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                          <li class="scroll-to-section"><a href="index.html">Home</a></li>
                          <li class="scroll-to-section"><a href="index.html">Services</a></li>
                          <li class="scroll-to-section"><a href="index.html">About</a></li>
                          <li class="has-sub">
                              <a href="javascript:void(0)">Pages</a>
                              <ul class="sub-menu">
                                  <li><a href="about-us.html">About Us</a></li>
                                  <li><a href="our-services.html">Our Services</a></li>
                                  <li><a href="contact-us.html">Contact Us</a></li>
                              </ul>
                          </li>
                          <li class="scroll-to-section"><a href="index.html">Testimonials</a></li>
                          <li><a href="contact-us.html">Contact Support</a></li> 
                      </ul>        
                      <a class='menu-trigger'>
                          <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="header-text">
            <h2>ADMIN PANEL</h2>
            <div class="div-dec"></div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- ***** Main Banner Area End ***** -->

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
            <a href="view_users.php"><div class="square">
                <h3><i class="fa fa-user" aria-hidden="true"></i>
                <br> User <br> Accounts</h3>
                </a>
            </div>
            </div>
        <div class="col-lg-4">
            <a href="view_admin.php"><div class="square">
                <h3><i class="fa fa-user" aria-hidden="true"></i>
                <br> Admin <br> Accounts</h3>
                </a>
        </div>
      </div>
      <div class="col-lg-4">
        <a href="view_astro.php"><div class="square">
            <h3><i class="fa fa-user" aria-hidden="true"></i>
            <br> Astrologer <br> Accounts</h3>
            </a>
    </div>
    </div>
    <div class="col-lg-4">
      <a href="add_astro.php">
        <div class="square">
        <h3>
          <i class="fa fa-user" aria-hidden="true"></i>
          <br>Add Astrologer
        </h3>
        </div>
      </a>
    

    </div>
    <div class="col col-lg-4"><div class="square"><a href="addmin.php"><h3><i class="fa fa-user" aria-hidden="true"></i><br>Add Admin</h3></a></div></div>
        
    <div class="col col-lg-4"><div class="square"><a href="addmin.php"><h3><i class="fa fa-user" aria-hidden="true"></i><br>View Feedbacks  </h3></a></div></div>


    <div class="row">
        <div class="col-lg-12"><br><br>
          <p>Copyright © 2022 Mexant Co., Ltd. All Rights Reserved. 
          
          <br>Designed by <a title="CSS Templates" rel="sponsored" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
        </div>
      </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/swiper.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        var interleaveOffset = 0.5;

      var swiperOptions = {
        loop: true,
        speed: 1000,
        grabCursor: true,
        watchSlidesProgress: true,
        mousewheelControl: true,
        keyboardControl: true,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev"
        },
        on: {
          progress: function() {
            var swiper = this;
            for (var i = 0; i < swiper.slides.length; i++) {
              var slideProgress = swiper.slides[i].progress;
              var innerOffset = swiper.width * interleaveOffset;
              var innerTranslate = slideProgress * innerOffset;
              swiper.slides[i].querySelector(".slide-inner").style.transform =
                "translate3d(" + innerTranslate + "px, 0, 0)";
            }      
          },
          touchStart: function() {
            var swiper = this;
            for (var i = 0; i < swiper.slides.length; i++) {
              swiper.slides[i].style.transition = "";
            }
          },
          setTransition: function(speed) {
            var swiper = this;
            for (var i = 0; i < swiper.slides.length; i++) {
              swiper.slides[i].style.transition = speed + "ms";
              swiper.slides[i].querySelector(".slide-inner").style.transition =
                speed + "ms";
            }
          }
        }
      };

      var swiper = new Swiper(".swiper-container", swiperOptions);
    </script>
    <style>
        .square {
    height: 150px;
    width: 150px;
    display: block;
    border-radius: 7%;
    margin-bottom: 30px;
    float: left;
    margin-right: 20px;
    margin-top: 30px;
    margin-left: 30px;
    text-align: center;
    border: 3px outset #51c5fc;
    background-color: #8fdbff;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    transform-style: preserve-3d;
  }
  .square:hover{
    border: 3px outset #5977ff;
  background: #8fdbff;
  /*-webkit-transform: scale(1.1);
  -ms-transform: scale(1.1);*/
  transform: scale(1.1);
  color: #000000;
  }
    </style>

  </body>
</html>