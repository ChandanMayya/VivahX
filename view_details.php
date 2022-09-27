<?php
session_start();

include("connection.php");
include("functions.php");

$view_uname=$_SESSION['runame'];

$conversionquery="select user_id,rec_id from user where uname='$view_uname'";

if($result=$con->query($conversionquery)){
     $row=mysqli_fetch_assoc($result);
     $view_recid=$row['rec_id'];
     $view_uid=$row['user_id'];

     $query1="select * from details where rec_id='$view_recid'";
     $result=mysqli_query($con,$query1);

     if($result && mysqli_num_rows($result) > 0)
	     $user_data = mysqli_fetch_assoc($result);
     else 
          echo"Some Error";


     if($_SERVER['REQUEST_METHOD'] == "POST"){
          $uid=$_SESSION['uid'];
          $req_id=random_num(4);
          if($_SESSION['acnt_type']=='b')
               $requery = "INSERT INTO `astro_req`(`req_id`, `user1`, `user2`, `u1val`) VALUES ('$req_id','$uid','$view_uid','1')";
          else
               $requery = "INSERT INTO `astro_req`(`req_id`, `user1`, `user2`, `u2val`) VALUES ('$req_id','$view_uid','$uid','1')";
          if($con->query($requery)){
               header("Location: success.html");
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

    <title>VivahX Details</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-574-mexant.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">

<style>
     p{
          padding-left: 100px;
     }
     h2{
          text-align:center;
     }
     img{
          width: 500px;
     }
</style>

  </head>


     <body>
     <header class="header-area header-sticky" id="hd">
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
                              <li class="scroll-to-section"><a href="index.html">Home</a></li>
                             
                              <li class="has-sub">
                                  <a href="javascript:void(0)">Pages</a>
                                  <ul class="sub-menu">
                                      <li><a href="about-us.html">About Us</a></li>
                                      <!-- <li><a href="our-services.html">Our Services</a></li> -->
                                      <li><a href="contact-us.html">Contact Us</a></li>
                                      <li><a href="feedback.html">Feedback</a></li>
                                  </ul>
                              </li>
                              <li class="scroll-to-section"><a href="index.html">Testimonials</a></li>
                              <li><a href="my_account.php">Account</a></li> 
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

      <div class="page-heading">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="header-text">
                  <h2>Details</h2>
                  <div class="div-dec"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
                    <br>
               <!-- <div class="container"> -->
                    <div class="container border border-success rounded">
               <!-- <div class="col-6"> -->
                    <div class="container col-1">
                     
                    <?php //echo $user_data['face_photo'];?>
                         </div>
                    <div class="panel-heading">
                         <h4> Name </h4>
                    </div>
                    <br>
                    <div class="panel-body">
                         
                         <h6>First Name</h6>
                         <p>
                              <?php echo $user_data['fname'];?>
                         </p>
                         <br>
                         <h6>Middle Name</h6>
                         <p>
                               <?php echo $user_data['minit'];?>
                         </p>     
                              <br>

                         <h6>Last Name</h6>
                         <p>
                               <?php echo $user_data['lname'];?>
                         </p>
                              <br>
                    </div>
               </div>
               </div>
               <br>
               <!-- <div class="panel panel-default"> -->
                    <div class="container border border-success rounded">
                    <div class="panel-heading">
                         <h4>Address</h4>
                    </div>
                    <br>
                    <div class="panel-body">
                         
                         <p>
                                <?php echo $user_data['address'];?>
                         </p>
                              <br>
                    </div>
                    </div>
               <br><br>
               <!-- <div class="panel panel-default"> -->
                    <div class="container border border-success rounded">
                    <div class="panel-heading">
                         <h4>Body</h4>
                    </div>
                    <br>
                    <div class="panel-body">
                         <h6>Height</h6>
                         <p>
                              <?php echo $user_data['height_ft'];?> Feet and <?php echo $user_data['height_in'];?> inches
                         </p> 
                                   <br>
                         <h6>Weight</h6>
                          <p>
                              <?php echo $user_data['weight'];?>
                          </p>
                              <br>
                         <h6>Complexion</h6>
                         <p>
                              <?php echo $user_data['complexion'];?>
                         </p>
                         <br>
                    </div>
                    </div>

                    <br><br>
                    <!-- <div class="panel panel-default"> -->
                         <div class="container border border-success rounded">
                         <div class="panel-heading">
                              <h4>Photo</h4>
                         </div>
                         <br>
                         <div class="row">
                              <div class="panel-body">
                                   <h6>Face Photo</h6>
                                   <p>
                                   <div class="col col-lg-6">
                                   <img class="img-thumbnail" src="./userupolads/document/<?php echo $user_data['face_photo'] ?>" alt=""></img>
                                   </p> </div>
                                        <br>
                                   <div class="panel-body">
                                   <h6>Body Photo</h6>
                                   <p>
                                   <div class="col col-lg-6">
                                   <img class="img-thumbnail" src="./userupolads/document/<?php echo $user_data['body_photo'] ?>" alt=""></img>
                                   </p> </div>
                                        <br>
                         </div>

                              </div>
                         </div></div>
                         <br><br>
                         <div class="container border border-success rounded">
                              <div class="panel-heading">
                                   <h4>Other Details</h4>
                              </div>
                                        <br>
                              <div class="panel-body">
                              <h6>Profession</h6>
                                   <p>
                                   <?php echo $user_data['profession'];?>
                                        </p> 
                                             <br>
                              <!-- <div class="panel-body"> -->
                              <h6>Earnings</h6>
                                    <p>
                                    <?php echo $user_data['earnings'];?>
                                     </p> 
                                                  <br>
                              <!-- <div class="panel-body"> -->
                               <h6>Requirements</h6>
                                        <p>
                                        <?php echo $user_data['requirement'];?>
                                         </p> 
                                                  <br>
                        
                        
                              <!-- </div> -->
                              <!-- </div> -->
                               </div> 
                          </div> 
                              </div>
                          </div>
                          
       
                               </strong>
                         </p>
                    </div> 
               </div>  
         <br><br>
         <div class="container form-control"><br>
          <form action="" method="post"><center>
               <label for="sumbit">If you want to check whether your jayaka matches, the jataka of this person, please press the below button.</label>
               <br><br>
               <input type="submit" value="Request" class="btn btn-success"></center><br>
          </form>
         </div><br>
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
<?php } ?>