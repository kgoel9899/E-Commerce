<?php
	require "../includes/common.php";
	if(!isset($_SESSION['email'])) {
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Orders | Lifestyle Store</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../index.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<?php 
		include "../includes/header.php";
	?>
	<div class="container top">
		<div class="jumbotron">
			<center><h2>Your Order History</h1></center>
		</div>
		<div class="row">
			<?php
				$user_id = $_SESSION["user_id"];
				$sel_query = "SELECT item_id FROM users_items WHERE user_id = '$user_id' AND status = 'Confirmed'";
				$sel_query_result = mysqli_query($con, $sel_query) or die(mysqli_error($con));
			?>
			<?php while($row = mysqli_fetch_array($sel_query_result)) {
				$item_id = $row["item_id"];
				$sel_query1 = "SELECT name, price FROM items WHERE id = '$item_id'";
				$sel_query_result1 = mysqli_query($con, $sel_query1) or die(mysqli_error($con));
				$row1 = mysqli_fetch_array($sel_query_result1); ?>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="../img/<?php echo $row["item_id"]; ?>.jpg" class="img-responsive">
						<center>
							<div class="caption">
								<h3><?php echo $row1["name"] ?></h3>
								<p>Price: ₹ <?php echo $row1["price"] ?></p>
							</div>
						</center>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
	<?php 
		include "../includes/Footer-Bot.php";
	?>
</body>
</html>