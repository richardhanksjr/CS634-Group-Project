<?php
$css = "css/buy.css";
$js = "js/buy.js";

include "header.php";

?>


<div class="container purchase">
	<div class="text-center">
		<a href="index.html"><img class="text-center triangle"
			src="images/hour_zero_logo.png" alt="" style="width: 20%"></a> <br> <br>
		<br>

	</div>

	<div class="row">
		<div class="col-12 text-center purchase-thankyou">Thank you for your
			purchase. The following product will be shipped within 24 hours.<br>
			Please check your email for your confirmation.</div>
	</div>



	<br> <br>


	<div class="container-fluid bg-grey">
		<div class="row text-center">
			<div class="col-sm-8">
				<img
						src="images/<?php echo $_GET['image'];?>.png" alt="Lights" style="width: 25%">
			</div>
			<div class="col-sm-4">
				<h3><?php echo $_GET["product"]; ?></h2>
				
				<p>
					<strong>Price:</strong> $<?php echo $_GET["price"]; ?>
				</p>
			</div>
		</div>
	</div>

<br> <br> <br><br>
	<div class="home_img text_center">
		<img src="images/white_bar.png" alt="">
	</div>
	<br> <br>

	<br> <br>

<?php
include "footer.php";
?>