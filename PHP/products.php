<?php
	require "../includes/common.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Products | Lifestyle Store</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../index.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<?php 
		include "../includes/header.php";
		include "../includes/check_if_added.php";
	?>
	<div class="container top">
		<div class="jumbotron">
			<h1>Welcome to our Lifestyle Store!</h1>
			<p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
		</div>
		<div class="row">
			<div class="col-md-3 col-sm-6">
				<div class="thumbnail">
					<img src="../img/5.jpg" class="img-responsive">
					<center>
						<div class="caption">
							<h3>Canon EOS</h3>
							<p>Price: ₹ 36,000.00</p>
							<?php if (!isset($_SESSION['email'])) { ?> 
								<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
							<?php } else {
								if(check_if_added_to_cart(1)) {
									echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
								} else { ?>
									<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
								<?php }
							} ?>
						</div>
					</center>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="thumbnail">
					<img src="../img/2.jpg" class="img-responsive">
					<center>
						<div class="caption">
							<h3>Nikon DSLR</h3>
							<p>Price: ₹ 40,000.00</p>
							<?php if (!isset($_SESSION['email'])) { ?> 
								<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
							<?php } else {
								if(check_if_added_to_cart(2)) {
									echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
								} else { ?>
									<a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
								<?php }
							} ?>
						</div>
					</center>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="thumbnail">
					<img src="../img/3.jpg" class="img-responsive">
					<center>
						<div class="caption">
							<h3>Sony DSLR</h3>
							<p>Price: ₹ 50,000.00</p>
							<?php if (!isset($_SESSION['email'])) { ?> 
								<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
							<?php } else {
								if(check_if_added_to_cart(3)) {
									echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
								} else { ?>
									<a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
								<?php }
							} ?>
						</div>
					</center>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="thumbnail">
					<img src="../img/4.jpg" class="img-responsive">
					<center>
						<div class="caption">
							<h3>Olympus DSLR</h3>
							<p>Price: ₹ 80,000.00</p>
							<?php if (!isset($_SESSION['email'])) { ?> 
								<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
							<?php } else {
								if(check_if_added_to_cart(4)) {
									echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
								} else { ?>
									<a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
								<?php }
							} ?>
						</div>
					</center>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 col-sm-6">
				<div class="thumbnail">
					<img src="../img/9.jpg" class="img-responsive">
					<center>
						<div class="caption">
							<h3>Titan Model #301</h3>
							<p>Price: ₹ 13,000.00</p>
							<?php if (!isset($_SESSION['email'])) { ?> 
								<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
							<?php } else {
								if(check_if_added_to_cart(5)) {
									echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
								} else { ?>
									<a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
								<?php }
							} ?>
						</div>
					</center>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="thumbnail">
					<img src="../img/10.jpg" class="img-responsive">
					<center>
						<div class="caption">
							<h3>Titan Model #201</h3>
							<p>Price: ₹ 3,000.00</p>
							<?php if (!isset($_SESSION['email'])) { ?> 
								<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
							<?php } else {
								if(check_if_added_to_cart(6)) {
									echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
								} else { ?>
									<a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
								<?php }
							} ?>
						</div>
					</center>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="thumbnail">
					<img src="../img/11.jpg" class="img-responsive">
					<center>
						<div class="caption">
							<h3>HMT Milan</h3>
							<p>Price: ₹ 8,000.00</p>
							<?php if (!isset($_SESSION['email'])) { ?> 
								<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
							<?php } else {
								if(check_if_added_to_cart(7)) {
									echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
								} else { ?>
									<a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
								<?php }
							} ?>
						</div>
					</center>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="thumbnail">
					<img src="../img/12.jpg" class="img-responsive">
					<center>
						<div class="caption">
							<h3>Faber Luba #111</h3>
							<p>Price: ₹ 18,000.00</p>
							<?php if (!isset($_SESSION['email'])) { ?> 
								<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
							<?php } else {
								if(check_if_added_to_cart(8)) {
									echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
								} else { ?>
									<a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
								<?php }
							} ?>
						</div>
					</center>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 col-sm-6">
				<div class="thumbnail">
					<img src="../img/8.jpg" class="img-responsive">
					<center>
						<div class="caption">
							<h3>H&W</h3>
							<p>Price: ₹ 800.00</p>
							<?php if (!isset($_SESSION['email'])) { ?> 
								<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
							<?php } else {
								if(check_if_added_to_cart(9)) {
									echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
								} else { ?>
									<a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
								<?php }
							} ?>
						</div>
					</center>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="thumbnail">
					<img src="../img/6.jpg" class="img-responsive">
					<center>
						<div class="caption">
							<h3>Luis Phil</h3>
							<p>Price: ₹ 1,000.00</p>
							<?php if (!isset($_SESSION['email'])) { ?> 
								<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
							<?php } else {
								if(check_if_added_to_cart(10)) {
									echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
								} else { ?>
									<a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
								<?php }
							} ?>
						</div>
					</center>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="thumbnail">
					<img src="../img/13.jpg" class="img-responsive">
					<center>
						<div class="caption">
							<h3>John Zok</h3>
							<p>Price: ₹ 1,500.00</p>
							<?php if (!isset($_SESSION['email'])) { ?> 
								<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
							<?php } else {
								if(check_if_added_to_cart(11)) {
									echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
								} else { ?>
									<a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
								<?php }
							} ?>
						</div>
					</center>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="thumbnail">
					<img src="../img/14.jpg" class="img-responsive">
					<center>
						<div class="caption">
							<h3>Jhalsani</h3>
							<p>Price: ₹ 1,300.00</p>
							<?php if (!isset($_SESSION['email'])) { ?> 
								<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
							<?php } else {
								if(check_if_added_to_cart(12)) {
									echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
								} else { ?>
									<a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
								<?php }
							} ?>
						</div>
					</center>
				</div>
			</div>
		</div>
	</div>
	<?php 
		include "../includes/Footer-Bot.php";
	?>
</body>
</html>