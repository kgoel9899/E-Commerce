<?php 
	require "../includes/common.php";
	$email = $_POST['Email'];
	$pwd = $_POST['Password'];
	$email = mysqli_real_escape_string($con, $email);
	$pwd = mysqli_real_escape_string($con, $pwd);
	$pwd = md5($pwd);
	$check_query = "SELECT email, password FROM USERS where email='" . $email . "'AND password='" . $pwd . "'";
	$check_result = mysqli_query($con, $check_query) or die (mysqli_error($con));
	if(mysqli_num_rows($check_result) == 0) {
		header('location: login.php?error=' . $error);
	}
?>
