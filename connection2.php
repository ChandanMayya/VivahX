<?php

$dbhost = "localhost";
$dbuser = "svarnavi_svarnavaha";
$dbpass = "Vivahx@486";
$dbname = "svarnavi_vivahx";

$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if($con->connect_error)
{
	die("failed to connect!".$con->connect_error);
}
?>
