<?php 

session_start();

include("connection.php");
include("functions.php");

$user_data=check_login($con);

if(($user_data['acnt_type']=='a')&&($user_data['acnt_type']=='as'))
  header("Location: login.php");

  if(isset($_POST['submit'])) {

    if (($_FILES['csv_file']['size'] > 0)&&($_FILES['csv_file1']['size'] > 0)&&($_FILES['csv_file2']['size'] > 0))
    {
        /*echo "<p>".$_FILES['csv_file']['name']." => file input successfull</p>";
        echo "<p>".$_FILES['csv_file1']['name']." => file input successfull</p>";
        echo "<p>".$_FILES['csv_file2']['name']." => file input successfull</p>";*/

        fileUpload();
    }
}

function fileUpload () {
    
include("connection.php");
//include("functions.php");

    $rec_id=$_SESSION['recid'];
    $uid=$_SESSION['uid'];

$target_dir = "userupolads/document/";
$file_name = $_FILES['csv_file']['name'];
$file_name2=$_FILES['csv_file1']['name'];
$file_name3=$_FILES['csv_file2']['name'];
$file_name4=$_FILES['csv_file3']['name'];
$file_tmp = $_FILES['csv_file']['tmp_name'];
$file_tmp1 = $_FILES['csv_file1']['tmp_name'];
$file_tmp2 = $_FILES['csv_file2']['tmp_name'];
$file_tmp3 = $_FILES['csv_file3']['tmp_name'];

if ((move_uploaded_file($file_tmp, $target_dir.$file_name))&&(move_uploaded_file($file_tmp1, $target_dir.$file_name2))&&(move_uploaded_file($file_tmp2, $target_dir.$file_name3))&&(move_uploaded_file($file_tmp3, $target_dir.$file_name4))) {
    // echo "<h1>File Upload Success</h1>";
    $sql="update details set face_photo='$file_name',body_photo='$file_name2',aadhar='$file_name2' where rec_id='$rec_id'";
                if($con->query($sql)===TRUE){
                  // echo("INSERTED to details");

                  $sql2="update jaataka set document='$file_name4' where user_id='$uid'";
                  if($con->query($sql2)===TRUE){
                    header("Location: index.php");
                    // echo "Inserted to jataka";
                  }
                    
                // }else echo("Fail Again!");
}
else {
    // echo "<h1>File Upload not successfull</h1>";
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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>VivahX - Contact page</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-574-mexant.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
  </head>

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
                          <li class="scroll-to-section"><a href="index.html">Home</a></li>
                          <li class="scroll-to-section"><a href="index.html">Services</a></li>
                          <li class="scroll-to-section"><a href="index.html">About</a></li>
                          <li class="has-sub">
                              <!-- <a href="javascript:void(0)">Pages</a> -->
                              <a href="feedback.html">Details</a>
                              <ul class="sub-menu">
                                <li><a href="contact-us.html">Contact Us</a></li>
                              </ul>
                          </li>
                            <li><a href="contact-us.html">Contact Support</a></li>   
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
            <h2>Details</h2>
            <h6 style="color: rgb(196, 196, 196);">Please upload the files to activate your account</h6>
            <div class="div-dec"></div>
          </div>
        </div>
    </div>
  </div>
  </div>
  <section class="contact-us-form">
    <div class="container"><center>
      <div class="row">        
        <div class="col-lg-10 offset-lg-1">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
            
            <div class="container form-control">
<br>
                <div class="col col-lg-12">
                    <h5>Face Photo</h5>
                    <br>
                    <input type="file" name="csv_file">
                </div><br><br>
                <div class="col col-lg-12">
                    <h5>Body Photo</h5>
                    <br>
                    <input type="file" name="csv_file1">
                </div><br><br>  
                <div class="col col-lg-12">
                    <h5>Jataka Photo</h5>
                    <br>
                    <input type="file" name="csv_file3">
                </div><br><br>
            <div class="col col-lg-12">
                    <h5>Document</h5>
                    <br>
                    <input type="file" name="csv_file2">
                </div><br><br>
                
                <input type="submit" name="submit"><br><br>
                </div>
          </form>
        </div>
      </div>
    </div>
  </section></center>
<br>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2022 VivahaX All Rights Reserved. 
          
          <br>Designed by <a href="#" target="_blank">Parinaya</a></p>
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
</html><?php  ?>