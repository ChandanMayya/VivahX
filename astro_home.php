<?php

session_start();

include("connection.php");
include("functions.php");

$user_data=check_login($con);

if($user_data['acnt_type']!='as' )
  header("Location: login.php");

  
if($_SERVER['REQUEST_METHOD'] == "POST")
{
  $_SESSION['validation_id']=$_POST['inp-req-id'];
  header("Location: jataka_validation.php");
}

$query="select * from astro_req";
if($result=$con->query($query)){
   

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="assets/css/poppins.css" rel="stylesheet">

    <title>Astrologer Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-574-mexant.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">

  </head>

<body>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
      <div class="container ">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="index.php" class="logo">
                          <img src="assets/images/logo.png" alt="">
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                          <li class="scroll-to-section"><a href="index.php">Home</a></li>
                          <!-- <li class="scroll-to-section"><a href="index.html">Services</a></li> -->
                          <!-- <li class="scroll-to-section"><a href="index.html">About</a></li> -->
                          <li class="has-sub">
                              <a href="javascript:void(0)">Pages</a>
                              <ul class="sub-menu">
                                  <li><a href="about-us.html">About Us</a></li>
                                  <!-- <li><a href="our-services.html">Our Services</a></li> -->
                                  <li><a href="contact-us.html">Contact Us</a></li>
                                  <li><a href="feedback.php">Feedback</a></li>
                              </ul>
                          </li>
                          <!-- <li class="scroll-to-section"><a href="index.html">Testimonials</a></li> -->
                          <li><a href="logout.php">Logout</a></li> 
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
            <h2>ASTROLOGER DASHBOARD</h2>
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
        <div class="col-lg-12">
            <table class="table table-light">
                <tr>
                  <th>Record ID</th>
                    <th>GIRL</th>
                    <th>BOY</th>
                    <th>Validated</th>
                </tr>
                <?php foreach ($result as $i){ 
                    $uid1=$i['user1'];
                    $uid2=$i['user2'];
                     $query2="select uname from user where user_id='$uid1'";
                     $query3="select uname from user where user_id='$uid2'";
                     if(($res2=$con->query($query2))&&($res3=$con->query($query3)))
                      $row2=mysqli_fetch_assoc($res2);
                      $row3=mysqli_fetch_assoc($res3);
                ?>
                <tr>
                    <td><?php echo $i['req_id']  ?></td>
                    <td><?php echo $row2['uname']  ?></td>
                    <td><?php echo $row3['uname']  ?></td>
                    <td><?php echo $i['validate']  ?></td>
                </tr>
                <?php } ?>
            </table>
            </div>
            <form action="" method="POST"><br>
                <input type="text" name="inp-req-id" id=""placeholder="Record ID to open">
                <input type="submit" value="Open" class="btn btn-success">
            </form>
       <br><br>

      <div class="row">
        <div class="col-lg-12"><br>
          <p>Copyright © 2022 VivahX Co., Ltd. All Rights Reserved. 
          
          <br>Designed by <a href="#">Parinaya</a></p>
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
</html><?php } ?>