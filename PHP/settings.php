<?php 
	require "../includes/common.php";
	if(!isset($_SESSION['email'])) {
		header('location: index.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Settings | Lifestyle Store</title>
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
				<form method="post" action="settings_script.php">
					<div class="form-group">
						<h1>Change Password</h1>
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="old_password" placeholder="Old Password" required>
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="new_password" placeholder="New Password" required>
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="nnew_password" placeholder="Re-type New Password" required>
					</div>
					<button type="submit" class="btn btn-primary">Change</button>
				</form>
			</div>
		</div>
	</div>
	<?php 
		include "../includes/Footer.php";
	?>
</body>
</html>