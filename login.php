<?php 
session_start();

include("connection.php");
include("functions.php");

$errormsg="";

if($_SERVER['REQUEST_METHOD'] == "POST")
{
      $user_name=($_POST['username']);
      $passwd=($_POST['password']);

      $query = "SELECT validate,uname,user_id,acnt_type FROM user WHERE uname='$user_name' and password='$passwd' limit 1";
     
     $result=mysqli_query($con,$query);
     if(mysqli_num_rows($result)!=1){
         $errormsg="Invalid Credentials....";
     }else{
        $row = mysqli_fetch_assoc($result);
        $_SESSION['user_name']=$user_name;
        $_SESSION['uid']=$row['user_id'];
        $_SESSION['acnt_type']=$row['acnt_type'];
        echo $_SESSION['uid'];
        switch($row['acnt_type']){

        case 'a': 
            header("Location: admin.php");
            break;

        case 'as':
            header("Location: astro_home.php");
            break;

        case 'b':
        case 'bg':
            if($row['validate']==0)
                header("Location: details.php");
           else
                header("Location: index.php");
        }
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

    <title>VivahX</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-574-mexant.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">

    <style>
        .cardi{
            background: linear-gradient(to bottom right, #ffffff 0%, #ffcc66 100%);

        }
        .cardi_base{
            border: 2px solid #ff6600;
            background-color: #e6e6e6;
        }
        .errormsg{
          color:orangered;
        }
    </style>
</head>
<body background="assets/images/slide-01.jpg">
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
                          <!-- <li class="scroll-to-section"><a href="#top" class="active">Home</a></li> -->
                          <!-- <li class="scroll-to-section"><a href="account_listings.php">Meet people</a></li> -->
                          <!-- <li class="scroll-to-section"><a href="about-us.html">About</a></li> -->
                          <!-- <li class="has-sub"> -->
                              <!-- <a href="javascript:void(0)">Pages</a> -->
                              <!-- <ul class="sub-menu"> -->
                                  <li><a href="about-us.html">About Us</a></li>
                                  <li><a href="contact-us.html">Contact Us</a></li>
                                  <li><a href="signup.php">Create Account</a></li>
                              <!-- </ul> -->
                          <!-- </li> -->
                          <!-- <li><a href="my_account.php">Hey <?php echo  $_SESSION['user_name']?> </a></li>  -->
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
            <h2>LOGIN</h2>
            <div class="div-dec"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

<div class="container ">
  <center><br><br><br><br><br><br>
  <div class="form-control cardi rounded-bottom">
  <h1> Login Form </h1>
  <br>
  <form class="from-group" method="post">
    
    <div class="col-6" class="col-sm-12"><br>
      <label for="username" class="form-label">User Name:
          <input type="text" id="user" class="form-control"required name="username" >
      </label>
      <!-- <br><br> -->
    </div>
    
    <div class="col-6"><br>
      <label for="password" class="form-label">Password:
          <input type="password" id="pass" name="password" class="form-control" required >
      </label>
    </div><br><br>
    <div class="cardi_base rounded-bottom">

    <span><p class="errormsg"><?php echo $errormsg; ?></p></span>
      <div class="col-6"><br>
        <input type="reset" value="Reset" class="btn btn-danger"> 
     
      <input type="submit" value="Submit" class="btn btn-success">
      <!-- <div class="btn btn-primary"><a href="signup.php"><p>SignUp</p></a></div> -->
      <br></div><br>
     
    </div>
    </div>
  </form>
  </center>
  </div><br><br><br>
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