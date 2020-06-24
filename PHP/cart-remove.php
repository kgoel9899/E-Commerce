<?php
	require "../includes/common.php";
	$item_id = $_GET["id"];
	$user_id = $_SESSION["user_id"];
	$del_query = "DELETE FROM users_items WHERE user_id = '$user_id' AND item_id = '$item_id' AND status = 'Added to cart'";
	mysqli_query($con, $del_query) or die(mysqli_error($con));
	header("location: cart.php");
?>