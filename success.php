<?php 
session_start();
error_reporting(0);
?>


<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="description" content="">
     <meta name="author" content="">
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
 
     <title>VivahX - Verify</title>
 
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

 
<!-- <body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50"> -->
     <body>
      <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
     <div class="container">
         <div class="row">
             <div class="col-12">
                 <nav class="main-nav">
                     <!-- ***** Logo Start ***** -->
                     <a href="index.html" class="logo">
                         <img src="assets/images/logo.png" alt="">
                     </a>
                     <!-- ***** Logo End ***** -->
                     <!-- ***** Menu Start ***** -->
                     <ul class="nav">
                         <li class="scroll-to-section"><a href="index.php">Home</a></li>
                         <!-- <li class="scroll-to-section"><a href="index.html">Services</a></li> -->
                         <li class="scroll-to-section"><a href="about-us.html">About</a></li>
                         <li class="has-sub">
                             <a href="javascript:void(0)">Pages</a>
                             <ul class="sub-menu">
                                 <li><a href="about-us.html">About Us</a></li>
                                 <!-- <li><a href="our-services.html">Our Services</a></li> -->
                                 <li><a href="contact-us.html">Contact Us</a></li>
                             </ul>
                         </li>
                         <!-- <li class="scroll-to-section"><a href="index.html">Testimonials</a></li> -->
                         <!-- <li><a href="contact-us.html">Contact Support</a></li>  -->
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
           <h2>Woohoo.. Success!</h2>
           <div class="div-dec"></div>
         </div>
       </div>
     </div>
   </div>
 </div>
     </section>

    <!-- Main PArt-->

    <div class="container">
      <br>
      <!--<h1 style="text-align:center;">Woohoo!</h1>-->
      <center> 
      <div class="imgcontainer">
        <img src="assets/images/yes.png" alt="Avatar" style=" width:30%;" id="grn">
      </div>
      
    
      <?php if($_SESSION['src']=="ADMIN_URS_VAL"){  ?>
        <h3> The account hav been added Successfuly!</h3>
        <br>
        <label for="btn">Click below button to move to dashboard:
          <br><br>
          <a href="admin.php">
            <input type="button" value="ADMIN DASHBOARD">
          </a>
        </label>
      <?php }elseif($_SESSION['src']=="request"){?>
        <h3> The request has been sent Successfuly!</h3>
        <br>
        <label for="btn">Click below button to view your requests
          <br><br>         
          <a href="my_account.php">
            <input type="button" class="btn btn-success" value="ACCOUNT">
          </a>
        </label>
      <?php } ?>
                

      </center>
    </div>

  <!-- FOOTER -->
  <br>
<br>
<br>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2022 vivahX Co., Ltd. All Rights Reserved. 
          
          <br>Designed by <a title="CSS Templates" rel="sponsored" href="https://templatemo.com" target="_blank">Parinaya</a></p>
        </div>
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

  </body>
</html>