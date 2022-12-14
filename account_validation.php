<?php

session_start();

include("connection.php");
include("functions.php");

$user_name=$_SESSION['validation_id'];

if($_SERVER['REQUEST_METHOD'] == "POST")
{
  if(isset($_POST['approve']))
    $query3="update user set validate='1' where uname='$user_name'";
  elseif(isset($_POST['deny']))
    $query3="update user set withheld='1' where uname='$user_name'";
  if($con->query($query3)){
    $_SESSION['src']="ADMIN_URS_VAL";
    header("Location: success.php");
  }
}

$query1="select rec_id from user where uname='$user_name'";
if(mysqli_num_rows($result=$con->query($query1))>0){
    $row=mysqli_fetch_assoc($result);
    $rec_id=$row['rec_id'];
    $query2="select face_photo,aadhar from details where rec_id='$rec_id'";
    if($result2=$con->query($query2)){
        $row2=mysqli_fetch_assoc($result2);
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="assets/css/poppins.css" rel="stylesheet">

    <title>Account Verification</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-574-mexant.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">
<style>
    .iimg{
        width: 850px;
    }
</style>

  </head>

<body>


  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
      <div class="container ">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="admin.php" class="logo">
                          <img src="assets/images/logo.png" alt="">
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                          <li class="scroll-to-section"><a href="index.php">Home</a></li>
                          <li class="scroll-to-section"><a href="about-us.html">About</a></li>
                          <li class="has-sub">
                              <a href="javascript:void(0)">Pages</a>
                              <ul class="sub-menu">
                                  <li><a href="about-us.html">About Us</a></li>
                                  <li><a href="contact-us.html">Contact Us</a></li>
                                  <!-- <li><a href="feedback.php">FeedBack</a></li> -->
                              </ul>
                          </li>
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
            <h2>Validation Panel</h2>
            <div class="div-dec"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
<footer>

<div class="container">
    <div class="row">
        <div class="col col-lg-6">
            <h3 style="color: #ffd3b7  ;">Aadhar Card:</h3><br>
            <img class="img-thumbnail iimg" src="./userupolads/document/<?php echo $row2['aadhar'] ?>" alt=""></img>
        </div><div class="col col-lg-6">
            <h3 style="color: #ffd3b7  ;">Face Photo:</h3><br>
            <img class="img-thumbnail iimg" src="./userupolads/document/<?php echo $row2['face_photo'] ?>" alt=""></img>
        </div><br><center><br>
        <div class="col col-lg-6">
          <form action="" method="post">
            <label for="inp" style="color:#ffd3b7;">Provide access to the website to this account by clicking the below button: 
              <br><br>
              <input type="submit" value="Approve" name="approve" class="btn btn-primary">&nbsp;&nbsp;
              <input type="submit" value="Deny" name="deny" class="btn btn-danger" style="width:100px ;">
            </label>
          </form>
        </div></center>
    </div>
</div>
  <div class="row">
        <div class="col-lg-12"><br><br>
          <p>Copyright ?? 2022 Mexant Co., Ltd. All Rights Reserved. 
          
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
</html> <?php } }else echo "Rows not found" ?>