<?php

include 'database.php';

	if (isset($_POST['submit'])) {
		$user = mysqli_real_escape_string($con,$_POST['user']);
		$message = mysqli_real_escape_string($con,$_POST['message']);

		date_default_timezone_set('Asia/Kolkata');
		$time = date('h:i:s a', time());

		if (!isset($user) || empty($user) || !isset($message) || empty($message)) {
			$error = "Please fill in your name and a message ";
			header("Location:index.php?error=".urlencode($error));
			exit();
 		}else{
 			$query = "insert into shouts(user,message,time) values('$user', '$message', '$time')";
 			if (!mysqli_query($con,$query)) {
 				die("Error: ".mysqli_error($con));	
 			}else{
 				header("Location: index.php");
 				exit();
 			}	
		}
	}
?>