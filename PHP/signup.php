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
				<form>
					<div class="form-group">
						<h1>SIGN UP</h1>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="Name" placeholder="Name" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="Email" placeholder="Email" required>
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="Password" placeholder="Password" required>
					</div>
					<div class="form-group">
						<input type="number" class="form-control" name="Contact" placeholder="Contact" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="City" placeholder="City" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="Address" placeholder="Address" required>
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