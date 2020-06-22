<!DOCTYPE html>
<html>
<head>
	<title>Cart | Lifestyle Store</title>
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
				<table class="table table-default">
					<tbody>
						<tr>
							<th>Item Number</th>
							<th>Item Name</th>
							<th>Price</th>
							<th></th>
						</tr>
						<tr>
							<td></td>
							<td>Total</td>
							<td>₹ 0</td>
							<td><a href="success.php" class="btn btn-primary">Confirm Order</a></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<?php 
		include "../includes/Footer.php";
	?>
</body>
</html>