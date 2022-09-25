<?php
session_start();

include("connection.php");
include("functions.php");

$uid=$_SESSION['uid'];
$basquery="select rec_id from user where user_id='$uid'";
if($basresult=$con->query($basquery)){
     
$basrow=mysqli_fetch_assoc($basresult);
$rec_id=$basrow['rec_id'];
$query1="select *from details where rec_id='$rec_id'";
$result=mysqli_query($con,$query1);
if($result && mysqli_num_rows($result) > 0)
	$user_data = mysqli_fetch_assoc($result);
else 
echo"Some Error";

if($_SERVER['REQUEST_METHOD'] == "POST")
    {
      $uname=$_POST['inpt_uname'];
      $query = "select user_id from user where uname = '$uname'";
      if($res=$con->query($query)){
          $row=mysqli_fetch_assoc($res);
          $user_id=$row['user_id'];
          if($_SESSION['acnt_type']='b'){
               $query5="update astro_req set u1val=1 where user2 = '$user_id' and  user1='$uid'";
               if($con->query($query5))
                    header("Location: my_account.php");
          }


       // header("Location: view_details.php");
      }
    }

if($_SESSION['acnt_type']='b'){
     $query2="select * from astro_req where user1 IN ('$uid')";
     $query4="select * from astro_req where user1 IN ('$uid') and u1val=0";
     $query6="select * from astro_req where user1 IN ('uid') and u1val=1 and u2val=1";
}else{
     $query2="select * from astro_req where user2 IN ('$uid')";
     $query4="select * from astro_req where user2 IN ('$uid') and u0val=0";
     $query6="select * from astro_req where user2 IN ('uid') and u1val=1 and u2val=1";
}
if(($result2=$con->query($query2))&&($result4=$con->query($query4))&&($result6=$con->query($query6))){

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>My Account</title>

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
                              <li class="scroll-to-section"><a href="index.php">Home</a></li>
                              <!-- <li class="scroll-to-section"><a href="index.html">Services</a></li> -->
                              <li class="scroll-to-section"><a href="about-us.html">About</a></li>
                              <li class="has-sub">
                                  <a href="javascript:void(0)">Pages</a>
                                  <ul class="sub-menu">
                                      <li><a href="about-us.html">About Us</a></li>
                                      <!-- <li><a href="our-services.html">Our Services</a></li> -->
                                      <li><a href="contact-us.html">Contact Us</a></li>
                                      
                                  </ul>
                                  <li><a href="logout.php">Logout</a></li>
                              </li>
                              <!-- <li class="scroll-to-section"><a href="index.html">Testimonials</a></li> -->
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
                  <h2>My Account</h2>
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
                              <?php echo $user_data['height_ft'];?> feet and <?php echo $user_data['height_in'];?> inches 
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
                                   <h6>Face Photo</h6>
                                   <p><br>
                                  <img src="./userupolads/document/<?php echo $user_data['face_photo'];?>" alt=""> 
                                   </p> 
                                        <br>
                              </div>
                         <br>
                              <div class="panel-body">
                                   <h6>Body Photo</h6>
                                   <p><br>
                                  <img src="./userupolads/document/<?php echo $user_data['body_photo'];?>" alt=""> 
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
                          <div class="container">
                              <div class="table-responsive"><br><h4>Requests Sent</h4>
                                   <table class="table table-primary"><br>
                                        <thead>
                                             <tr>
                                                  <th scope="col">User Name</th>
                                                  <th scope="col">Accept</th>
                                                  <th scope="col">Validated</th>
                                             </tr>
                                        </thead>
                                        <tbody>
                                             <?php foreach($result2 as $i){ 
                                                  if($_SESSION['acnt_type']='b')
                                                       $itrationID=$i['user2'];
                                                  else
                                                       $itrationID=$i['user1'];
                                                  $query3="select uname from user where user_id='$itrationID'";
                                                  if($result3=$con->query($query3)){
                                                       $row=mysqli_fetch_assoc($result3);
                                             ?>
                                             <tr class="">
                                                  <td scope="row"><?php echo $row['uname'] ?></td>
                                                  <td><?php if($_SESSION['acnt_type']='b') echo $i['u2val']; else  echo $i['u1val'];?></td>
                                                  <td><?php echo $i['validate'];  ?></td>
                                             </tr>
                                             <?php } } ?>
                                        </tbody>
                                   </table>
                              </div>
                              
                          </div>
                          <div class="container">
                              <div class="table-responsive"><br><h4>Connected</h4>
                                   <table class="table table-primary"><br>
                                        <thead>
                                             <tr>
                                                  <th scope="col">User Name</th>
                                                  <th scope="col">Validated</th>
                                             </tr>
                                        </thead>
                                        <tbody>
                                             <?php foreach($result6 as $i){ 
                                                  if($_SESSION['acnt_type']='b')
                                                       $itrationID=$i['user2'];
                                                  else
                                                       $itrationID=$i['user1'];
                                                  $query3="select uname from user where user_id='$itrationID'";
                                                  if($result3=$con->query($query3)){
                                                       $row=mysqli_fetch_assoc($result3);
                                             ?>
                                             <tr class="">
                                                  <td scope="row"><?php echo $row['uname'] ?></td>
                                                  <td><?php echo $i['validate'];  ?></td>
                                             </tr>
                                             <?php } } ?>
                                        </tbody>
                                   </table>
                              </div>
                              
                          </div>
                          <div class="container">
                              <div class="table-responsive"><br><h4>Requests Received</h4>
                                   <table class="table table-primary"><br>
                                        <thead>
                                             <tr>
                                                  <th scope="col">User Name</th>
                                                  <th scope="col">Accept</th>
                                                  <th scope="col">Validated</th>
                                             </tr>
                                        </thead>
                                        <tbody>
                                             <?php foreach($result4 as $i){ 
                                                  if($_SESSION['acnt_type']='b')
                                                       $itrationID=$i['user2'];
                                                  else
                                                       $itrationID=$i['user1'];
                                                  $query3="select uname from user where user_id='$itrationID'";
                                                  if($result3=$con->query($query3)){
                                                       $row=mysqli_fetch_assoc($result3);
                                             ?>
                                             <tr class="">
                                                  <td scope="row"><?php echo $row['uname'] ?></td>
                                                  <td><?php if($_SESSION['acnt_type']='b') echo $i['u1val']; else  echo $i['u2val'];?></td>
                                                  <td><?php echo $i['validate'];  ?></td>
                                             </tr>
                                             <?php } } ?>
                                        </tbody>
                                   </table>
                                   <form action="" method="post">
                                        <label for="submit">Type the user name displayed in requests received to accept the request and pass it for validation
                                             <input type="text" name="inpt_uname" id="">
                                             <input type="submit" value="Accept" class="btn btn-success"><br>
                                            
                                        </label>
                                   </form>
                              </div>
                              
                          </div>
                          
       
                               </strong>
                                                  </p><br><br>
                                                  </div> 
               </div>  
                         <p style="text-align:center ;">In case you want to change the data, with the valid reason, please mail us.. <br> We will surely reply with the responce to move forward.</p>
<center><br><br>
<a href="logout.php"> <input type="button" value="Logout" class="btn btn-danger"></a>
</center>

                    
               <br><br>
 <footer>
     <div class="container">
       <div class="row">
         <div class="col-lg-12">
           <p>Copyright © 2022 VivahX Co., Ltd. All Rights Reserved. 
           
           <br>Designed by <a  rel="sponsored" href="#">Parinaya</a></p>
         </div>
       </div>
     </div>
   </footer>

</body>
</html> <?php }} ?>