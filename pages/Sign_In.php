<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>
</head>
<body>
	<?php
		include ('menu.php');
	?>
	<div class="container-fluid">
		<div class="row">
			<div class="col col-xl-4 col-lg-5 col-md-6 col-sm-8 col-12 offset-sm-1" autocomplete="off" style="border: solid;">
				<div class="form-group">
					<form action="Sign_InPHP.php" method="post" >
						<label class="" >User Name :</label>
						<input class="form-control" type="text" name="userName" required="" autofocus="">
						<label class="">Password :</label>
						<input class="form-control" type="password" name="password" required="">
						<br>
						<div class="row justify-content-center">
							<input class="btn btn-primary" type="submit" name="" value="Log In">
						</div>
					</form>
				</div>
				<h3>Don't have account?</h3>
				<button class="btn btn-link"><a href="Sign_Up.php">Create Account</a></button>
			</div>
		</div>
	</div>
</body>
</html>