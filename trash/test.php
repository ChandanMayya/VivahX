<?php

    session_start();
    
    include("connection.php");
    include("functions.php");

    $userdata=check_login($con);
    $user_id=$userdata['user_id'];

    if(!(check_verified($con,$user_id)))
        header("Location: accountverification.html");

?>