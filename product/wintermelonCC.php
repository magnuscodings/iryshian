<!DOCTYPE html>
<html lang="en">
<head>
		<title>Iryshian | Product Details</title>
<?php include('../head.php') ?>
<body>
	<div class="container">
		<div class="navbar header">
		<div class="logo">
			<img src="../images/logo.png" width="100px">
		</div>
<?php include('productnavigation.php') ?>
	</div>

<!------------Single product Details------------------------------>

<div class="small-container single-product " >
	<div class="row">
		<div class="col-2">
			<img src="../images/wintermelonCC.jpg" width="80%" height="90%">
</div>
		<div class="col-2">
			<h1>Wintermelon cream cheese</h1>
			<h4>P115.00</h4>
			<select>
				<option>Select Size</option>
				<option>Large</option>
				<option>Medium</option>
			</select>
			<input type="number" value="1">
			<a href="../cart.php" class="btn">Add to Cart</a>
			<h3>Product Details<i class="fa fa-indent"></i></h3>
			<p>Gives your summer food style upgraded with the Fresh ingredients. Team it with a french-fries for an afternoon with the guys.</p>
		</div>
	</div>
</div>

<!---------TITLE-------------->
<div class="small-container">
	<div class="row row-2">
		<h2></h2>
		<a href="../products.php"><p>Add More</p></a>
	</div>
</div>

<?php include('../footer.php') ?>
<?php include('../jstoggle.php') ?>


</body>
</html>
