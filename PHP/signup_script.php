<?php
	require "../includes/common.php";
	$name = $_POST['name'];
	$email = $_POST['email'];
	$pwd = $_POST['password'];
	$contact = $_POST['contact'];
	$city = $_POST['city'];
	$address = $_POST['address'];
	$name = mysqli_real_escape_string($con, $name);
	$email = mysqli_real_escape_string($con, $email);
	$pwd = mysqli_real_escape_string($con, $pwd);
	$contact = mysqli_real_escape_string($con, $contact);
	$city = mysqli_real_escape_string($con, $city);
	$address = mysqli_real_escape_string($con, $address);
	$pwd = md5($pwd);
	$sel_query = "SELECT id FROM USERS WHERE email = '" . $email . "'";
	$sel_query_result = mysqli_query($con, $sel_query) or die (mysqli_error($con));
	if(mysqli_num_rows($sel_query_result) > 0) {
		echo "<script>alert('Email already exists.');</script>";
		echo "<script>setTimeout(\"location.href = 'signup.php';\", 1);</script>";
	} else {
		$ins_query = "INSERT INTO USERS (name, email, password, contact, city, address) 
						VALUES ('$name', '$email', '$pwd', '$contact', '$city', '$address')";
		mysqli_query($con, $ins_query) or die (mysqli_error($con));
		$user_id = mysqli_insert_id($con);
		$_SESSION['email'] = $email;
		$_SESSION['user_id'] = $user_id;
		header('location: products.php');
	}
?>