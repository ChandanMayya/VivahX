<?php
session_start();

include("connection.php");
include("functions.php");

$userdata=check_login($con);
$user_id=$userdata['user_id'];
$email=$userdata['email'];
$acnt_type=$_SESSION['acnt_type'];
$user_name=$_SESSION['user_name'];
$query1 = "SELECT details,email,rec_id FROM user WHERE uname='$user_name'";
$runquery1=$con->query($query1);
if(mysqli_num_rows($runquery1) != 0){
    $row1=mysqli_fetch_assoc($runquery1);
    $rec_id=$row1['rec_id'];
    $email=$row1['email'];
    if($row1['details']==1){
        header("Location: waiting.html");
    }
}

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $user_name=$user_name;
    $user_id=$_SESSION['uid'];
    $phone=$_POST['phone'];   
    
        $query2 = "SELECT phone FROM details where phone='$phone'";
        $runquery2=$con->query($query2);
        if(mysqli_num_rows($runquery2) == 0){                
                $fname=$_POST['fname'];
                $mname=$_POST['mname'];
                $lname=$_POST['lname'];
                $aphone=$_POST['aphone'];
                $amail=$_POST['amail'];
                $addr=$_POST['address'];
                $height_ft=$_POST['height-ft'];  //$_POST['height'];
                $height_in=$_POST['height-in'];
                $weight=$_POST['weight'];
                $comp=$_POST['compxn'];
                $nakshatra=$_POST['nakshatra'];
                $paada=$_POST['paada'];
                $gotra=$_POST['gotra'];
                $dob=$_POST['date'];
                $graduation=$_POST['grad'];
                $profsn=$_POST['prof'];
                $salary=$_POST['earn'];
                $faname=$_POST['pa'];
                $maname=$_POST['ma'];
                $paoccu=$_POST['paoccu'];
                $maoccu=$_POST['maoccu'];
                $bro=$_POST['brono'];
                $sis=$_POST['sisno'];
                $about=$_POST['about'];
                $requirement=$_POST['req'];
                $query1 = "SELECT details,email,rec_id FROM user WHERE uname='$user_name'";
$runquery1=$con->query($query1);
if(mysqli_num_rows($runquery1) != 0){
    $row1=mysqli_fetch_assoc($runquery1);
    $rec_id=$row1['rec_id'];
                $stmt4="UPDATE `details` SET `fname`='$fname',`minit`='$mname',`lname`='$lname',`phone`='$phone',`aphone`='$aphone',`aemail`='amail',`address`='$addr',`height_ft`='$height-ft',`height_in`='$height-in',`weight`='$weight',`complexion`='$comp',`about`='$about',`profession`='$profsn',`earnings`='$salary',`requirement`='$requirement',`qualification`='$graduation' WHERE `rec_id`='$rec_id'";
                        if($con->query($stmt4)===TRUE){
                            $jtk_id= random_num(4);
                            $query4="INSERT INTO `jaataka`(`jtk_id`, `gotra`, `DOB`, `paada`, `nakshatra`, `user_id`) VALUES ('$jtk_id','$gotra','$dob','$paada','$nakshatra','$user_id')";
                            if($con->query($query4)===TRUE){
                                $fam_id= random_num(4);
                                $query5="INSERT INTO `family`(`family_id`, `father`, `mother`, `fa_occu`, `mo_occu`, `bro_no`, `sis_no`,user_id) VALUES ('$fam_id','$faname','$maname ','$paoccu','$maoccu','$bro','$sis','$user_id')";
                                if($con->query($query5)===TRUE){
                                    $_SESSION['recid']=$rec_id;
                                    header("Location: detail_file.php");
                        }}
            }
        }
    }else
        echo("Phone number already registered.."); 
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

    <title>Details</title>

    <!-- Bootstrap core CSS -->
   <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-574-mexant.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
    <!--link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    -->
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
                         <!-- <img src="assets/images/logo.png" alt="">
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                          <li class="scroll-to-section"><a href="index.html">Home</a></li>
                          <li class="scroll-to-section"><a href="index.html">Services</a></li>
                          <li class="scroll-to-section"><a href="index.html">About</a></li>
                          <li class="has-sub">
                              <a href="javascript:void(0)">Pages</a>
                              <ul class="sub-menu">
                                  <li><a href="about-us.html">About Us</a></li>
                                  <li><a href="our-services.html">Our Services</a></li>
                                  <li><a href="contact-us.html">Contact Us</a></li>
                              </ul>
                          </li>
                          <li class="scroll-to-section"><a href="index.html">Testimonials</a></li>
                          <li><a href="#"><?php echo "$_SESSION[user_name]";?></a></li> 
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
            <h2>Details</h2><br>
            <h6 style="color: rgb(196, 196, 196);">Please enter the following details to activate your account</h6>
            <div class="div-dec"></div>
          </div>
        </div>
      </div>
    </div>
  </div><br>
  <div class="container"><center>
        <form class="form-control form-group" action="" method="post" enctype="multipart/form-data">
            <div class="form-control disp"><br>
                <h5>Basic Information</h5>
                <br>
                <div class="col-12 col-md-12 ">
                    <label for="fname">First Name:
                        <input type="text" name="fname" id="fname" required>
                    </label>
                </div>
                <br>
                <div class="col-12 col-md-12">
                    <label for="mname">Middle Name:
                        <input type="text" name="mname" id="mname" required>
                    </label>
                </div>
                <br>
                <div class="col-12 col-md-12">
                    <label for="lname">Last Name:
                        <input type="text" name="lname" id="lname" required>
                    </label>
                </div>
                <br>
                <div class="col-12 col-md-12">
                    <label for="phone">Primary Phone Number:
                        <input type="number" name="phone" id="phone" min="11111" max="9999999999" required>
                    </label>
                </div><br>
                <div class="col-12 col-md-12">
                    <label for="aphone">Alternate Phone Number:
                        <input type="number" name="aphone" id="aphone" min="11111" max="9999999999" required>
                    </label>
                </div>
                <br>
                <div class="col-12">
                    <label for="mail">Primary Mail Address:
                        <input type="email" name="mail" id="mail" value="<?php echo $email;  ?>" disabled >
                    </label>
                </div>
                <br>
                <div class="col-12">
                    <label for="amail">Alternate Mail Address:
                        <input type="email" name="amail" id="amail" required>
                    </label>
                </div>     
                <br>
                <div class="col-12">
                    <label for="address">Address:<br>
                        <textarea name="address" id="address" cols="40" rows="3" required></textarea>
                    </label>
                </div> <br>
            </div>
            <br>
            <div class="form-control disp">
                <br>
                <h5>PHYSIX</h5>
                <br>
                <div class="row" ><center>
                <div class="col-6 col-md-6 ">
                    <label for="height">Height <br> <br> Feet:
                        <input type="text" name="height-ft" id="height" placeholder="5 feet" required>
                    </label>
                </div><br>
                <div class="col-6 col-md-6 ">
                    <label for="height">inches:
                        <input type="text" name="height-in" id="height" placeholder="2 inches" required>
                    </label>
                </div></center>
                </div>
                <br>
                <div class="col-12 col-md-12 ">
                    <label for="weight">Weight:
                        <input type="text" name="weight" id="weight" required>
                    </label>
                </div>
                <br>
                <div class="col-12 col-md-12 ">
                    <label for="compxn">Complexion:
                        <input type="text" name="compxn" id="compxn" required>
                    </label>
                </div>
                <br>
               
            </div>
            <br>
            <div class="form-control disp">
                <br>
                <h5>Advanced Basics</h5>
                <br>
                <label for="nakshatra">Nakshatra:
                    <select name="nakshatra" id="star" required>
                        <option value="ashwini">Ashwini</option>
                        <option value="bharani">Bharani</option>
                        <option value="krittika">Krittika</option>
                        <option value="rohini">Rohini</option>
                        <option value="mrigashirsha">Mrigashirsha</option>
                        <option value="ardra">Ardra</option>
                        <option value="punarvasu">Punarvasu</option>
                        <option value="pushya">Pushya</option>
                        <option value="ashlesha">Ashlesha</option>
                        <option value="magha">Magha</option>
                        <option value="purvaphalguni">Purva Phalguni</option>
                        <option value="uttaraphalguni">Uttara Phalguni</option>
                        <option value="hasta">Hasta</option>
                        <option value="chitra">Chitra</option>
                        <option value="svati">Svati</option>
                        <option value="Vishakha">Vishakha</option>
                        <option value="Anuradha">Anuradha</option>
                        <option value="Jyeshtha">Jyeshtha</option>
                        <option value="mula">Mula</option>
                        <option value="purvaashadha">Purva Ashadha</option>
                        <option value="uttaraashadha">Uttara Ashadha</option>
                        <option value="shravana">Shravana</option>
                        <option value="dhanishta">Dhanishta</option>
                        <option value="shatabhisha">Shatabhisha</option>
                        <option value="purvabhadrapada">Purva Bhadrapada</option>
                        <option value="uttarabhadrapada">Uttara Bhadrapada</option>
                        <option value="revati">Revati</option>                        
                    </select>
                </label>
                <br><br>
                <label for="paada">Paada:&nbsp;
                    <input type="number" name="paada" id="paada" min="1" max="4" required>
                </label>
                <br><br>
                <label for="gotra">Gotra:
                    <input type="text" name="gotra" id="gotra" required>
                </label>
                <br><br>
                <label for="dob">Birth Date:
                    <input type="date" name="date" id="date" required <?php if($acnt_type=='b'){ ?> max="2004-01-01" <?php }else{ ?>max="2001-01-01" <?php } ?>>
                </label><br><br>
                <br><br>
            </div><br>
            <div class="form-control disp">
                <br>
                <h5>Professional Details</h5><br>
                <label for="grad">Top Graduation:
                    <input type="text" name="grad" id="grad" required>
                </label><br><br>
                <label for="prof">Primary Profesison:
                    <input type="text" name="prof" id="prof" required>
                </label><br><br>
                <label for="earn">Yearly Earnings:
                    <input type="text" name="earn" id="earn" required>
                </label><br><br>
            </div><br>
            <div class="form-control disp">
                <br><h5>Family Details:</h5><br>
                <label for="pa">Father Name:
                    <input type="text" name="pa" id="pa" required>
                </label><br><br>
                <label for="paoccu">Father Occupation:
                    <input type="text" name="paoccu" id="paoccu" required>
                </label><br><br>
                <label for="ma">Mother Name:
                    <input type="text" name="ma" id="ma" required>
                </label><br><br>
                <label for="maoccu">Mother Occupation:
                    <input type="text" name="maoccu" id="maoccu" required>
                </label><br><br>
                <label for="brono">Number of Brothers:
                    <input type="number" name="brono" id="brono" min="0" required>
                </label><br><br>
                <label for="sisno">Number of Sisters:
                    <input type="number" name="sisno" id="sisno" min="0" required>
                </label><br><br>
            </div><br>
            <div class="form-control disp">
                <br>
                <h5>Other Details</h5><br>
                <label for="about">Some words about yourself:
                    <br>
                    <textarea name="about" id="about" cols="30" rows="4" required></textarea>
                </label><br><br>
                <label for="req">Partner Requirements: <br>
                    <textarea name="req" id="req" cols="30" rows="4" required></textarea>
                </label><br><br>

            </div>
            <br>
            <br>
            <div class="form-control disp">
                <br>
                <div class="col-12">
                    <h4>ACKNOLEDGEMENT</h4>
                </div><br>
                <div class="col-12">
                    <input type="submit" value="Submit" class="btn btn-primary" onclick="run();">
                </div><br>
            </div>
            </div>
            </center>
        </form>
    </div>
    <style>
        .disp{
            background-color: aliceblue;
        }
    </style>
    <script>
        
    </script>
</body>
</html>