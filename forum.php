<?php
$css = "css/forum.css";
$js = "js/forum.js";

include "header.php";

?>

<!-- Page header  -->
<div class="container forum">
	<div class="row">
		<div class="col-12 text-center forum-title">Forum</div>
	</div>
	<div class="text-center">
		<a href="index.php"><img class="text-center triangle"
			src="images/triangle_image.png" alt=""></a> <br> <br> <br>
		<div class="home_img">
			<img src="images/white_bar.png" alt="">
		</div>
	</div>


	<br> <br> <br>


	<!-- Tour Content -->
	<div class="table-responsive">



		
			<a href="#new-topic" id="create-button" class="btn btn-default" role="button"
				data-toggle="collapse">Create new topic <span class="glyphicon glyphicon-pencil"></span></a>
				<!-- Success message -->
<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Your new post has been submitted</div>
		
		<div id="new-topic" class="collapse">

			<form id="post-form" class="post-form" name="post-form" action="/action_page.php">
			<fieldset>
				<div class="form-group">
					<label for="author">Your name</label> <input type="text"
						class="form-control" id="author" name="author" required>
				</div>
				<div class="form-group">
					<label for="subject">Subject</label> <input type="text"
						class="form-control" id="subject" name="subject" required>
				</div>

				<div class="form-group">
					<label for="message">Message</label>
					<textarea class="form-control" rows="5" id="message" name="message" required></textarea>
				</div>
				
				<div class="form-group post-button">


				<button type="submit" class="btn btn-info"> Post <span class="glyphicon glyphicon-check"></span></button>
				</div>
			</form>
</fieldset>
		</div>
		
		<br>
		<table class="table table-striped table-bordered table-hover" id="forum-table">
			<thead>
				<tr>
					<th class="image-td"></th>
					<th>Topic</th>
					<th>Author</th>
					<th>Replies</th>
					<th>Date</th>
				</tr>
			</thead>
			<tbody>
				<tr class="odd">
					<td class="image-td"><img src="images/post_icon.png" alt="post"></td>
					<td><a href="post.php?id=1" class="">2018 Tours</a></td>
					<td>Jonathan</td>
					<td class="label-td"><span class="label label-primary">2</span></td>
					<td>December 08, 2018 04:26 PM</td>
				</tr>
				<tr class="even">
					<td class="image-td"><img src="images/post_icon.png" alt="post"></td>
					<td><a href="post.php?id=2" class="">New Album</a></td>
					<td>Rich</td>
					<td class="label-td"><span class="label label-primary">1</span></td>
					<td>December 08, 2018 06:00 PM</td>
				</tr>
				<tr class="odd">
					<td class="image-td"><img src="images/post_icon.png" alt="post"></td>
					<td><a href="post.php?id=3" class="">About the band</a></td>
					<td>Ali</td>
					<td class="label-td"><span class="label label-primary">0</span></td>
					<td>December 08, 2018 10:00 PM</td>
				</tr>
				<tr class="even">
					<td class="image-td"><img src="images/post_icon.png" alt="post"></td>
					<td><a href="post.php?id=4" class="">2018 Tours</a></td>
					<td>Jonathan</td>
					<td class="label-td"><span class="label label-primary">0</span></td>
					<td>December 08, 2018 11:00 PM</td>
				</tr>
				<tr class="odd">
					<td class="image-td"><img src="images/post_icon.png" alt="post"></td>
					<td><a href="post.php?id=5" class="">Song Safe 2 Say</a></td>
					<td>Rich</td>
					<td class="label-td"><span class="label label-primary">1</span></td>
					<td>December 08, 2018 11:20 PM</td>
				</tr>
				<tr class="even">
					<td class="image-td"><img src="images/post_icon.png" alt="post"></td>
					<td><a href="post.php?id=6" class="">2018 Tours</a></td>
					<td>Ali</td>
					<td class="label-td"><span class="label label-primary">0</span></td>
					<td>December 08, 2018 11:35 PM</td>
				</tr>


			</tbody>
		</table>


	</div>

	<!-- Bottom Icon -->
	<div class="text-center">
		<img class="bar" src="images/white_bar.png"
			alt="Icon Under Tour Dates">
	</div>

</div>
<!-- Footer -->


<br>
<br>

<?php
include "footer.php";
?>