<?php
	require "../includes/common.php";
	$email = $_POST['email'];
	$sel_query = "SELECT id FROM USERS WHERE email = '" . $email . "'";
	$sel_query_result = mysqli_query($con, $sel_query) or die (mysqli_error($con));
	if(mysqli_num_rows($sel_query_result) == 0) {
		header("location: signup.php");
	}
?>