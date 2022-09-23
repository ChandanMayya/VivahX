<?php 
session_start();

include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
      $user_name=($_POST['username']);
      $passwd=($_POST['password']);

      $query = "SELECT validate,uname,user_id,acnt_type FROM user WHERE uname='$user_name' and password='$passwd' limit 1";
     
     $result=mysqli_query($con,$query);
     if(mysqli_num_rows($result)!=1){
         echo "Invalid Credentials....";

     }else{
        echo "Record FOund!";
        $row = $result->fetch_assoc();
        $_SESSION['user_name']=$user_name;
        $_SESSION['uid']=$row['user_id'];
        $_SESSION['acnt_type']=$user_data['acnt_type'];
        //echo $_SESSION['uid'];
        switch($row['acnt_type']){

        case 'a': 
            header("Location: admin.html");
            break;

        case 'as':
            header("Location: astro_home.html");
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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>VivahX</title>

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
    <!-- ***** Header Area Start ***** 
  <header class="header-area header-sticky bg-success">
    <div class="container">
        <div class="row">
            <div class="col-12" class="col-sm-6">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -
                    <a href="index.html" class="logo">
                        <img src="assets/images/logo.png" alt="">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                        <li class="scroll-to-section"><a href="#services">Services</a></li>
                        <li class="scroll-to-section"><a href="#about">About</a></li>
                        <li class="has-sub">
                            <a href="javascript:void(0)">Pages</a>
                            <ul class="sub-menu">
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="our-services.html">Our Services</a></li>
                                <li><a href="contact-us.html">Contact Us</a></li>
                            </ul>
                        </li>
                        <li class="scroll-to-section"><a href="#testimonials">Testimonials</a></li>
                        <li><a href="contact-us.html">Contact Support</a></li> 
                    </ul>        
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** 
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->
<div class="container">
  <center><br><br><br><br><br><br>
  <h1> Login Form </h1>
  <br>
  <form class="from-group" method="post">
    <div class="col-6" class="col-sm-12">
      <label for="username" class="form-label">User Name:
          <input type="text" id="user" class="form-control"required name="username" >
      </label>
      <!-- <br><br> -->
    </div>
    <div class="col-6">
      <label for="password" class="form-label">Password:
          <input type="password" id="pass" name="password" class="form-control" required >
      </label>
    </div>

      <div class="col-6">
        <input type="reset" value="Reset" class="btn btn-danger"> 
      <input type="submit" value="Submit" class="btn btn-success">
     
    </div>
  </form>
  </center>
  </div>
</body>
</html>