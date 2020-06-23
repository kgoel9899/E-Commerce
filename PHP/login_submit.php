<?php 
	require "../includes/common.php";
	$email = $_POST['Email'];
	$pwd = $_POST['Password'];
	$email = mysqli_real_escape_string($con, $email);
	$pwd = mysqli_real_escape_string($con, $pwd);
	$pwd = md5($pwd);
	$check_query = "SELECT id, email FROM USERS where email='" . $email . "'AND password='" . $pwd . "'";
	$check_result = mysqli_query($con, $check_query) or die (mysqli_error($con));
	if(mysqli_num_rows($check_result) == 0) {
		header('location: login_fail.php');
	} else {
		$row = mysqli_fetch_array($check_result);
		$_SESSION['email'] = $row['email'];
		$_SESSION['user_id'] = $row['id'];
		header('location: products.php');
	}
?>
