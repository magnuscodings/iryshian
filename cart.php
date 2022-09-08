<!DOCTYPE html>
<html lang="en">
<head>
		<title>Iryshian | Cart page</title>

<?php include('head.php') ?>
<body>

<div class="header">
	<div class="container">
		<div class="navbar">
		<div class="logo">
			<img src="images/logo.png" width="100px">
		</div>
<?php include('navigation.php') ?>
	</div>

<!--------------cart items details----------------->

<div class="small-container cart-page ">
	<table>
		<tr>
			<th>Product</th>
			<th>Quantity</th>
			<th>Subtotal</th>
		</tr>
		<tr>
			<td>
				<div class="cart-info">
					<img src="images/thaiBT.jpg">
					<div>
						<p>Thai Bubble Tea	</p>
						<small>Price: $90.00</small>
						<br>
						<a href="">Remove</a>
					</div>
				</div>
			</td>
			<td><input type="number" name="value1" value="1"></td>
			<td>$90.00</td>
		</tr>
		<tr>
			<td>
				<div class="cart-info">
					<img src="images/oreoBT.jpg">
					<div>
						<p>Oreo Bubble Tea</p>
						<small>Price: $80.00</small>
						<br>
						<a href="">Remove</a>
					</div>
				</div>
			</td>
			<td><input type="number" value="1"></td>
			<td>$80.00</td>
		</tr>
		<tr>
			<td>
				<div class="cart-info">
					<img src="images/matchaBT.jpg">
					<div>
						<p>Matcha Bubble Tea</p>
						<small>Price: $85.00</small>
						<br>
						<a href="">Remove</a>
					</div>
				</div>
			</td>
			<td><input type="number" value="1"></td>
			<td>$85.00</td>
		</tr>
	</table>

	<div class="total-price">
		<table>
				<td>Subtotal</td>
				<td>$255.00</td>
			</tr>
			<tr>
				<td>Tax</td>
				<td>$35.00</td>
			</tr>
			<tr>
				<td>Total</td>
				<td>$220.00</td>
			</tr>
		</table>
	</div>
</div>


</div>
<?php include('footer.php') ?>
</div>
<?php include('jstoggle.php') ?>


</body>
</html>
