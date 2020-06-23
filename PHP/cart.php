<?php
	require "../includes/common.php";
	if(!isset($_SESSION['email'])) {
		header("location: products.php");
	}
?>
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
						<?php 
							$user_id = $_SESSION['user_id'];
							$sel_query = "SELECT items.id, items.name, items.price FROM users_items 
										INNER JOIN items ON users_items.item_id = items.id
										WHERE users_items.user_id='$user_id' AND status = 'Added to cart'";
							$sel_query_result = mysqli_query($con, $sel_query) or die(mysqli_error($con));
							if(mysqli_num_rows($sel_query_result) == 0) {
								echo "<center><h2>Cart is empty! Add items to the cart first!</h2></center>";
							} else { 
						?>
								<tr>
									<th>Item Number</th>
									<th>Item Name</th>
									<th>Price</th>
									<th></th>
								</tr>
								<?php 
									$sum = 0;
									$id = "";
									while($row = mysqli_fetch_array($sel_query_result)) {
										$sum += $row["price"];
										$id .= $row["id"] . ", "; 
								?>
										<tr>
											<td><?php echo "#" . $row["id"]; ?></td>
											<td><?php echo $row["name"]; ?></td>
											<td><?php echo "₹ " . $row["price"]; ?></td>
											<td><a href="cart-remove.php?id={$row['id']}" class="remove_item_link"> Remove</a></td>
										</tr>
								<?php 
									}
								?>
									<tr>
										<td></td>
										<td><?php echo "Total"; ?></td>
										<td><?php echo "₹ " . $sum; ?></td>
										<td><a href="success.php?itemsid='.$id .'"class="btn btn-primary">Confirm Order</a></td>
									</tr>
									<?php echo substr($id, 0, -1); ?>
							<?php } ?>
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