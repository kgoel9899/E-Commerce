<?php
	require "../includes/common.php";
	if(!isset($_SESSION['email'])) {
		header('location: index.php');
	}
	$email = $_SESSION['email'];
	$user_id = $_SESSION["user_id"];
	$oldp = $_POST["old_password"];
	$newp = $_POST["new_password"];
	$nnewp = $_POST["nnew_password"];
	$oldp = mysqli_real_escape_string($con, $oldp);
	$newp = mysqli_real_escape_string($con, $newp);
	$nnewp = mysqli_real_escape_string($con, $nnewp);
	$oldp = md5($oldp);
	$newp = md5($newp);
	$nnewp = md5($nnewp);
	if($oldp === $newp) {
		echo "<script>alert('You cannot choose your existing password as new one! Please enter a new password.');</script>";
		echo "<script>setTimeout(\"location.href = 'settings.php';\", 1);</script>";
	} else {
		if($newp !== $nnewp) {
			echo "<script>alert('New passwords do not match!');</script>";
			echo "<script>setTimeout(\"location.href = 'settings.php';\", 1);</script>";
		} else {
			$sel_query = "SELECT * FROM users where email = '$email' AND password = '$oldp' AND id = '$user_id'";
			$sel_query_result = mysqli_query($con, $sel_query) or die (mysqli_error($con));;
			if(mysqli_num_rows($sel_query_result) == 0) {
				echo "<script>alert('Please enter correct old password.');</script>";
				echo "<script>setTimeout(\"location.href = 'settings.php';\", 1);</script>";
			} else {
				$upd_query = "UPDATE users SET password = '$newp' WHERE id = '$user_id' AND email = '$email'";
				mysqli_query($con, $upd_query) or die (mysqli_error($con));
				echo "<script>alert('Password successfully changed.');</script>";
				echo "<script>setTimeout(\"location.href = 'products.php';\", 1);</script>";
			}
		}
	}
?>