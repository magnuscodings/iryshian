<!DOCTYPE html>
<html lang="en">
<head>
		<title>Iryshian | Homepage</title>
<?php include('head.php') ?>
<body>

	<div class="header">
	<div class="container">
		<div class="navbar">
		<div class="logo">
			<a href="index.html"><img src="images/logo.png" width="100px"></a>
		</div>
<?php include('navigation.php') ?>
	</div>
		<div class="row">
			<div class="col-2">
				<h1>Give Your Self<br> A New Taste!</h1>
				<p>Success isn't always about greatness. It's about consitency. Consistent <br>
					hard work gains success. Greatness will come.</p>
				<a href="products.php" class="btn">Explore now &#8594;</a>
			</div>
			<div class="col-2">
				<img src="images/image1.png" class="zoomA">
			</div>
		</div>
	</div>
</div>

<!---------Featured categories----------------->
<div class="categories">
	<div class="small-container">
		<div class="row">
		<div class="col-3">
			<img src="images/category-1.jpg">
		</div>
		<div class="col-3">
			<img src="images/category-2.jpg">
		</div>
		<div class="col-3">
			<img src="images/category-3.jpg">
		</div>
	</div>
	</div>
</div>
<!---------Featured Products----------------->
<div class="small-container">
	<h2 class="title">Featured Products</h2>
	<div class="row">
		<div class="col-4">
			<a href="product/thaiBT.php"><img src="images/thaiBT.jpg"></a>
			<a href="productdetails.php"><h4>Thai Bubble Tea</h4></a>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>
			</div>
			<p>P80 Medium Cup <br> P90 Large Cup</p>
		</div>
				<div class="col-4">
			<a href="product/thaiBT.php"><img src="images/oreoBT.jpg"></a>
			<a href="product/thaiBT.php"><h4>Oreo Bubble Tea</h4></a>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
			</div>
			<p>P80 Medium Cup <br> P90 Large Cup</p>
		</div>
				<div class="col-4">
			<a href="product/caramelBT.php"><img src="images/caramelBT.jpg"></a>
			<a href="product/thaiBT.php"><h4>Caramel Sugar Bubble Tea</h4></a>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-half-o"></i>
				<i class="fa fa-star-o"></i>
			</div>
			<p>P80 Medium Cup <br> P90 Large Cup</p>
		</div>
				<div class="col-4">
			<a href="product/matchaBT.php"><img src="images/matchaBT.jpg"></a>
		<a href="product/matchaBT.php"><h4>Matcha Bubble Tea</h4></a>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-half-o"></i>
			</div>
			<p>P85 Medium Cup <br> P95 Large Cup</p>
		</div>
	</div>
</div>
<!---------Offer----------------->
<div class="offer">
	<div class="small-container">
		<div class="row">
			<div class="col-2">
				<img src="images/offer.png" class="offer-img">
			</div>
		<div class="col-2">
			<p>Introducing our very own..</p>
			<h1> Oreo Matcha CBT</h1>
			<small>The Excelence Taste of this product is 100%, (Highly Recomended).<br> This is the best seller of our shop.<br> </small>
			<a href="product/oreomatcha.php" class="btn">Buy Now &#8594;</a>
		</div>

	</div>
	</div>
</div>
<!--------------Testimonial	----------------->

<div class="testimonial">
	<div class="small-container">
		<div class="row">
			<div class="col-3">
				<i class="fa fa-quote-left"></i>
				<p>I have to say, I enjoyed every single drops of drinks. Considering the quality, the price is reasonable. Ideal for bigger groups</p>
				<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-half-o"></i>
			</div>
			<img src="images/user-1.png">
			<h3>Sean Parker</h3>
			</div>
			<div class="col-3">
				<i class="fa fa-quote-left"></i>
				<p>The food was fresh, properly prepared and a great value for the price. We highly recommend it. The breakfast buffet on Sunday was equally as good.</p>
				<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-half-o"></i>
			</div>
			<img src="images/user-2.png">
			<h3>Bruno Martin</h3>
			</div>
			<div class="col-3">
				<i class="fa fa-quote-left"></i>
				<p>It was beautiful-peaceful and relaxing. Staff was outstanding. The restaurant was exceptional along with the hosts and servers.</p>
				<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-half-o"></i>
			</div>
			<img src="images/user-3.png">
			<h3>Mabel Joe</h3>
			</div>
		</div>
	</div>
</div>
<!--------------Testimonial	----------------->

<?php include('footer.php') ?>
<?php include('jstoggle.php') ?>

</body>
</html>
