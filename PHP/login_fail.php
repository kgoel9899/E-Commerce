<?php 
	require "../includes/common.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login | Lifestyle Store</title>
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
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h4>LOGIN</h4>
					</div>
					<div class="panel-body">
						<p class="text-warning cols">Login to make a purchase</p>
						<form method="post" action="login_submit.php">
							<div class="form-group">
								<input type="text" class="form-control" name="Email" placeholder="Email" required>
							</div>
							<div class="form-group">
								<input type="password" class="form-control" name="Password" placeholder="Password" required>
							</div>
							<p class="text-warning">Email and/or password is incorrect. Try Again!</p>
							<button type="submit" class="btn btn-primary">Submit</button>
						</form>
					</div>
					<div class="panel-footer">
						<p>Don't have an account? <a href="signup.php">Register</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php 
		include "../includes/Footer.php";
	?>
</body>
</html>