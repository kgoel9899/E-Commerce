<!DOCTYPE html>
<html>
<head>
	<title>Success | Lifestyle Store</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../index.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<?php 
		include "../includes/header.php";
		if(!isset($_SESSION['email'])) {
			header('location: index.php');
		}
		//do here
	?>
	<div class="container top">
		<center>
			<h4 class="cols">
				Your order is confirmed. Thank you for shopping with us. 
				<a href="products.php">Click here</a> to purchase any other item.
			</h4>
		</center>
	</div>
	<?php 
		include "../includes/Footer.php";
	?>
</body>
</html>