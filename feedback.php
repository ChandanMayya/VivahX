<?php 

session_start();

include("connection.php");
include("functions.php");

$errormsg = "Feel free to message us";

$user_data=check_login($con);
$user_id=$user_data['user_id'];

if(!(check_verified($con,$user_id)))
header("Location: accountverification.html");
if($_SESSION['feed']==1)
{  $errormsg = "Feedback Sent!";
  $_SESSION['feed']=0;
}

if($user_data['acnt_type']=='a' )
  header("Location: login.php");

  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    $feedid=random_num(4);
    $userid=$_SESSION['uid'];
    $sub=$_POST['subject'];
    $cont=$_POST['message'];
    $query="INSERT INTO `feedback`(`feed_id`, `title`, `content`, `user_id`) VALUES ('$feedid','$sub','$cont','$userid')";
    if($res=$con->query($query)){
      $_SESSION['feed']=1;
      header("Location: feedback.php");
    }

  }
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="assets/css/poppins.css" rel="stylesheet">

    <title>VivahX - Contact page</title>

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
      <div class="container">
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
                          <!-- <li class="scroll-to-section"><a href="index.html">About</a></li> -->
                          <!-- <li class="has-sub"> -->
                              <!-- <a href="javascript:void(0)">Pages</a> -->
                              
                              <!-- <ul class="sub-menu"> -->
                                  <li><a href="about-us.html">About Us</a></li>
                                  <li><a href="contact-us.html">Contact Us</a></li>
                              <!-- </ul> -->
                          <!-- </li> -->
                            <li><a href="my_account.php">Account</a></li>
                           <!-- <li><a href="feedback.html">Feedback</a></li>   -->
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
            <h2>Reach Us!</h2>
            <div class="div-dec"></div>
          </div>
        </div>
      </div><br><h5 style="color: #ffd3b7;"><?php echo $errormsg; ?></h5>
    </div>
  </div>

  <section class="contact-us-form">
    <div class="container">
      <div class="row">
        
        <div class="col-lg-10 offset-lg-1">
          <form id="contact" action="" method="post">
            <div class="row">
              <div class="col-lg-12">
                <fieldset>
                  <input type="subject" name="subject" id="subject" placeholder="Subject..." autocomplete="on" >
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <textarea name="message" id="message" placeholder="Your Message"></textarea>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="orange-button">Send Message</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
<br>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2022 vivahX Co., Ltd. All Rights Reserved. 
          
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

  </body>
</html>