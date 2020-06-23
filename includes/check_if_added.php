<?php 
	function check_if_added_to_cart($item_id) {
		require "common.php";
		$user_id = $_SESSION['user_id'];
		$sel_query = "SELECT * FROM users_items WHERE user_id = '$user_id' AND item_id = 'item_id' AND status = 'Added to cart'";
		$sel_query_result = mysqli_query($con, $sel_query) or die(mysqli_error($con));
		if(mysqli_num_rows($sel_query_result) >= 1) {
			return 1;
		} else {
			return 0;
		}
	}
?>