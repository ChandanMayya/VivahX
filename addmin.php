<?php 

session_start();

include("connection.php");
include("functions.php");

$user_data=check_login($con);

if($user_data['acnt_type']!='a' )
  header("Location: login.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $user_name=($_POST['username']);
    $psw=($_POST['password']);
    $mail=($_POST['email']);
    $acnt_type='a';

    $query = "SELECT uname FROM user WHERE uname='$user_name'";
    $query2= "SELECT email FROM user WHERE email='$mail'";
    $runquery=$con->query($query);
    $runquery2=$con->query($query2);
    if(mysqli_num_rows($runquery) == 0)
            if(strlen($psw)>5)
                if( preg_match('([a-zA-Z].*[0-9]|[0-9].*[a-zA-Z])', $psw) )
                    if(mysqli_num_rows($runquery2)==0)
                    {
                        $uid=random_num(4);
                        $recid=random_num(4);
                        $stmt2="insert into details (rec_id) values ('$recid')";
                        if($con->query($stmt2)===TRUE){
                            $stmt = "insert into user (user_id,uname,password,acnt_type,email,rec_id) values ('$uid','$user_name','$psw','$acnt_type','$mail','$recid')";
                            if($con->query($stmt)===TRUE){
                                echo("INSERTED");
                                header("Location: admin.php");
                            }else
                                echo("Some error");
                        }else{echo"Error in details linkage..";}
                    }
                    else
                        echo("Use some other mail id");
                else    
                    echo("Passwords must be alpha numeric");
            else
                echo("passowrd must be more than 5 charcters");
    else
        echo("user name exists");
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

  </head>

<body>


  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
      <div class="container">
          <div class="row">
            <div class="col-12" class="col-sm-6">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="admin.php" class="logo">
                          <img src="assets/images/logo.png" alt="">
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                          <li class="scroll-to-section"><a href="admin.php">Home</a></li>
                          <!-- <li class="scroll-to-section"><a href="index.html">Services</a></li> -->
                          <li class="scroll-to-section"><a href="about-us.html">About</a></li>
                          <li class="has-sub">
                              <a href="javascript:void(0)">Pages</a>
                              <ul class="sub-menu">
                                  <!-- <li><a href="about-us.html">About Us</a></li> -->
                                  <!-- <li><a href="our-services.html">Our Services</a></li> -->
                                  <li><a href="contact-us.html">Contact Us</a></li>
                              </ul>
                          </li>
                          <!-- <li class="scroll-to-section"><a href="index.php">Testimonials</a></li> -->
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
            <h2> Admin</h2>
            <div class="div-dec"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <center>
  <div class="page-container" class="col-6" class="col-sm-12">
    <!-- <div class="col-6" class="col-sm-12"> -->
        
        <br><br><br><br><br><br> 
    <h1> Add Admin</h1>
    <br>
    <form class="from-group"  method="post" action="#">
        <div class="col-6">
        <label for="username" class="form-label">User Name:
            <input type="text" class="form-control"  name="username" id="un" required>
        </div>
        <div class="col-6">
            <label for="email" class="form-label">Email:
                <input type="email" class="form-control" name="email" id="mail" required>
            </label>
        </div>
        </label>
        <!-- <br><br> -->
        <div class="col-6">
        <label for="password" class="form-label">Password:
            <input type="password" class="form-control"  name="password" id="pw" required>
        </label>
        <!-- <br><br> -->
    </div>
        <!-- <br><br> -->
   
        <!-- <br><br> -->
        <!-- <br><br>     -->
        <span id="error_msg"></span> 
        <input type="reset" value="Reset" class="btn btn-danger"> 
        <input type="submit" class="btn btn-success"value="Submit">
       
    </form>
    </center> 
    </div>
</div>
<br><br>

<footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2022 VivahX Co., Ltd. All Rights Reserved. 
          
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