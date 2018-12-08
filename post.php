<?php
$css = "css/post.css";
$js = "js/post.js";

include "header.php";

?>

<!-- Page header  -->
<div class="container post">
	<div class="row">
		<div class="col-12 text-center .page-caption">Zero Hour</div>
	</div>
	<div class="text-center">
		<a href="index.php"><img class="text-center triangle"
			src="images/triangle_image.png" alt=""></a> <br> <br> <br>
		<div class="home_img">
			<img src="images/white_bar.png" alt="">
		</div>
	</div>


	<br> <br> <br>
	
  <div class="row post-row">
    <div class="col-sm-2">
     <img src="images/profile.png" alt="profile" style="width: 50%"><br>
     <h4>By Jonathan</h4><br>
     <span class="post-date">Dec 08, 2018 08:00 PM</span>
    </div>
    <div class="col-sm-10">
      <h3>2018 tours</h3><br>
      <p><strong>EXCITING NEWS!! </strong> Zero Hour's newest tour begins December 24, 2018 in Boston, MA. For further information and tour dates currently setup, click here <a href="tours.php">Tours<a></a></a></p>
    </div>
  </div>
  <hr>
  <div class="row post-row">
    <div class="col-sm-2">
     <img src="images/profile.png" alt="profile" style="width: 50%"><br>
     <h4>By Rich</h4><br>
     <span class="post-date">Dec 08, 2018 09:00 PM</span>
    </div>
    <div class="col-sm-10">
      <h4>RE: 2018 tours</h4><br>
      <p>Thank you for this wonderful news!!!</p>
    </div>
  </div>
  <br>
  <div class="text-center"><a href="forum.php"  class="btn btn-default" role="button">Back to forum <span class="glyphicon glyphicon-pencil"></span></a></div>



	

	<!-- Bottom Icon -->
	<div class="text-center">
		<img class="bar" src="images/white_bar.png"
			alt="Icon Under Post">
	</div>

</div>
<!-- Footer -->


<br>
<br>

<?php
include "footer.php";
?>