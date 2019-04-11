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
			<div class="col col-lg-4 col-md-5 col-sm-7 col-xs-8" autocomplete="off">
				<div class="form-group">
					<form action="Sign_InPHP.php" method="post" >
						<label class="" >User Name :</label>
						<input class="form-control" type="text" name="userName" required="" autofocus="">
						<label class="">Password :</label>
						<input class="form-control" type="password" name="password" required="">
						<br>
						<input class="btn btn-primary" type="submit" name="" value="Log In">
						<br><br>
					</form>
				</div>
			</div>
		</div>
		<h3>Don't have account?</h3>
		<button class="btn btn-link"><a href="Sign_Up.php">Create Account</a></button>
	</div>
</body>
</html>
