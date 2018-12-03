<?php 
$css = "css/account.css";
$js = "js/login.js";

include "header.php";

?>




	<!-- sign in form Content -->
	<div class="container text-center">
	<h3>Sign In</h3> <br>
    <div class="row">
		<div class="col-md-4 col-md-offset-4">
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Please sign in</h3>
			 	</div>
			  	<div class="panel-body">
			    	<form action="index.php" method="post">
                    <fieldset>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="E-mail" name="email" type="text">
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="Password" name="password" type="password" value="">
			    		</div>
			    		<div class="checkbox">
			    	    	<label>
			    	    		<input name="remember" type="checkbox" value="Remember Me"><span class="remember">Remember Me</span>
			    	    	</label>
			    	    </div>
			    		<input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
			    	</fieldset>
			      	</form>
			    </div>
			</div>
		</div>
	</div>
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