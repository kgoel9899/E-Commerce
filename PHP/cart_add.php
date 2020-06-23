<?php
	require "../includes/common.php";
	$item_id = $_GET['id'];
	$user_id = $_SESSION['user_id'];
	$ins_query = "INSERT INTO users_items (user_id, item_id, status) VALUES ('$user_id', '$item_id', 'Added to cart')";
	mysqli_query($con, $ins_query) or die(mysqli_error($con));
	header("location: products.php")
?>