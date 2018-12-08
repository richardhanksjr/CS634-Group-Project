<!DOCTYPE html>
<html lang="en">
<head>
<title>ZERO HOUR</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/general.css">
<?php
echo '<link rel="stylesheet" href="' . $css . '">';
?>

<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<?php
echo '<script src="' . $js . '"></script>';
?>

</head>
<body>

	<nav class="navbar navbar-inverse">
		<div class="container-fluid">

			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target="#myNavbar">
					<span class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-left">
					<li><a href="index.php">Home</a></li>
					<li class="dropdown"><a class="dropdown-toggle"
						data-toggle="dropdown" href="#">Media <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="index.php#songs">Songs</a></li>
							<li><a href="index.php#videos">Videos</a></li>

						</ul></li>
					<li><a href="tours.php">Tour</a></li>
					<li><a href="about.php">About</a></li>
					<li class="dropdown"><a class="dropdown-toggle"
						data-toggle="dropdown" href="#">Account <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="login.php">Sign-in</a></li>
							<li><a href="signup.php">Create Account</a></li>

						</ul></li>
						<li><a href="store.php">Store</a></li>
						<li><a href="forum.php">Forum</a></li>


				</ul>
				<ul class="nav navbar-nav navbar-right">

					<li
						style="width: 30px; height: 30px; margin-bottom: 0; margin-right: 5px; display: inline-block">
						<a href="http://www.facebook.com/ZeroHourHC" target="_blank"
						data-content="http://www.facebook.com/">
							<div style="width: 30px; height: 30px;">
								<img alt="White Facebook Icon" data-type="image"
									src="images/facebook_icon.png"
									style="width: 30px; height: 30px;">
							</div>
					</a>
					</li>
					<li
						style="width: 30px; height: 30px; margin-bottom: 0; margin-right: 5px; display: inline-block">
						<a href="http://www.twitter.com/HourZero" target="_blank"
						data-content="http://www.twitter.com/">
							<div style="width: 30px; height: 30px;">
								<img alt="White Twitter Icon" data-type="image"
									src="images/twitter_icon.png"
									style="width: 30px; height: 30px;">
							</div>
					</a>
					</li>

					<li
						style="width: 30px; height: 30px; margin-bottom: 0; margin-right: 5px; display: inline-block">
						<a href="http://www.instigram.com/HourZero" target="_blank"
						data-content="http://www.instigram.com/">
							<div style="width: 30px; height: 30px;">
								<img alt="White Instigram Icon" data-type="image"
									src="images/instigram_icon.png"
									style="width: 30px; height: 30px;">
							</div>
					</a>
					</li>

					<li
						style="width: 30px; height: 30px; margin-bottom: 0; margin-right: 35px; display: inline-block">
						<a href="http://www.youtube.com/HourZero" target="_blank"
						data-content="http://www.youtube.com/">
							<div style="width: 30px; height: 30px;">
								<img alt="White Media Player Icon" data-type="image"
									src="images/play_icon.png" style="width: 30px; height: 30px;">
							</div>
					</a>
					</li>
				</ul>

			</div>
		</div>
	</nav>