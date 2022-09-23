<?php
session_start();

include("connection.php");
include("functions.php");

$query1="select * from details where rec_id='9805'";
$result=mysqli_query($con,$query1);

if($result && mysqli_num_rows($result) > 0)

	$user_data = mysqli_fetch_assoc($result);
else 
echo"Some Error";

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>VivahX Details</title>

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
<style>
     p{
          padding-left: 100px;
     }
     h2{
          text-align:center;
     }
</style>

  </head>


     <body>
     <header class="header-area header-sticky" id="hd">
          <div class="container">
              <div class="row">
                  <div class="col-12">
                      <nav class="main-nav">
                          <!-- ***** Logo Start ***** 
                          <a href="index.html" class="logo">
                              <img src="assets/images/logo.png" alt="">
                          </a>
                           ***** Logo End ***** -->
                          <!-- ***** Menu Start ***** -->
                          <ul class="nav">
                              <li class="scroll-to-section"><a href="index.html">Home</a></li>
                              <li class="scroll-to-section"><a href="index.html">Services</a></li>
                              <li class="scroll-to-section"><a href="index.html">About</a></li>
                              <li class="has-sub">
                                  <a href="javascript:void(0)">Pages</a>
                                  <ul class="sub-menu">
                                      <li><a href="about-us.html">About Us</a></li>
                                      <!-- <li><a href="our-services.html">Our Services</a></li> -->
                                      <li><a href="contact-us.html">Contact Us</a></li>
                                  </ul>
                              </li>
                              <li class="scroll-to-section"><a href="index.html">Testimonials</a></li>
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
                              <?php echo $user_data['height'];?>
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
                              <div class="panel-body">
                                   <h6>Body Photo</h6>
                                   <p>
                                   <?php echo $user_data['body_photo'];?>
                                   </p> 
                                        <br>
                              </div>
                         </div>
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

</body>
</html> 