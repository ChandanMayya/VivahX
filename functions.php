<?php

function check_login($con)
{

	if(isset($_SESSION['uid']))
	{

		
		$id = $_SESSION['uid'];
		$query = "select * from user where user_id = '$id' limit 1";

		$result = mysqli_query($con,$query);
		if($result && mysqli_num_rows($result) > 0)
		{
			
			$user_data = mysqli_fetch_assoc($result);
			 if($user_data['withheld']==1)
			 	header("Location: withheld.php");
			else
				return $user_data;
		}
	}
	//echo $_SESSION['uid'];
	//redirect to login
	header("Location: login.php");
	die;

}

function random_num($length)
{

	$text = "";
	if($length < 5)
	{
		$length = 5;
	}

	$len = rand(4,$length);

	for ($i=0; $i < $len; $i++) { 
		# code...

		$text .= rand(0,9);
	}

	return $text;
}

function  check_verified($con,$user_id){
	if(check_login($con)){
		$query2="select * from user where validate = '1' and user_id='$user_id'";
		if(mysqli_num_rows($result=$con->query($query2))>0)
			return true;
		else
			return false;
	}
}
