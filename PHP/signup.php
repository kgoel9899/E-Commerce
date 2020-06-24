<?php
	require "../includes/common.php";
	if(isset($_SESSION['email'])) {
		header('location: products.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Signup | Lifestyle Store</title>
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
		<div class="row">
			<div class="col-xs-6 col-xs-offset-3">
				<form method="post" action="signup_script.php">
					<div class="form-group">
						<h1>SIGN UP</h1>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="name" placeholder="Name" minlength="3" pattern="[A-Za-z\s]+" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="password" placeholder="Password" pattern=".{8,}" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="contact" placeholder="Contact" pattern="[789][0-9]{9}" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="city" placeholder="City" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="address" placeholder="Address" required>
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>
	<?php 
		include "../includes/Footer.php";
	?>
</body>
</html>