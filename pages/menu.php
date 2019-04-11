<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
	<?php
		session_start();
   		// $priceCheck=$_SESSION['priceCheck'];
		// $lowPrice=$_SESSION['lowPrice'];
		// $highPrice=$_SESSION['highPrice'];
		// $search=$_SESSION['search'];
		if(isset($_SESSION['priceCheck'])){
			$priceCheck=$_SESSION['priceCheck'];
		}
		else{
			$priceCheck=0;
		}
		if(isset($_SESSION['lowPrice'])){
			$lowPrice=$_SESSION['lowPrice'];
		}
		if(isset($_SESSION['highPrice'])){
			$highPrice=$_SESSION['highPrice'];
		}
		if(isset($_SESSION['search'])){
			$search=$_SESSION['search'];
		}else{
			$search='';
		}
	?>
	<div class="container-fluid">
		<div class="typewriter">
  			<h1 id="h11" align="center"><marquee width="50%" >M K S D</marquee></h1>
  			<p id="p11"><marquee>|| Easy to shopping ||</marquee></p>
		</div>
	</div>



	<div class="container">
		<div class="row">
			<nav class="navbar navbar-expand navbar-light bg-light ">
  				<a class="navbar-brand" href="#">Navbar</a>
  				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    				<span class="navbar-toggler-icon"></span>
  				</button>

  				<div class="collapse navbar-collapse" id="navbarSupportedContent">
    				<ul class="navbar-nav mr-auto">
      					<li class="nav-item active">
        					<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      					</li>
      					<li class="nav-item">
        					<a class="nav-link" href="#">Link</a>
      					</li>
      					<li class="nav-item">
        					<a class="nav-link" href="#">Link</a>
      					</li>
      					<li class="nav-item dropdown">
        					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown
        					</a>
        					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
          						<a class="dropdown-item" href="#">Action</a>
          						<a class="dropdown-item" href="#">Another action</a>
          						<div class="dropdown-divider">
          						</div>
          						<a class="dropdown-item" href="#">Something else here</a>
        					</div>
      					</li>
      					<li class="nav-item">
        					<a class="nav-link disabled" href="#">Disabled</a>
      					</li>
    				</ul>
    				
  				</div>
			</nav>
			
		</div>
	</div>
					<!-- <form class="form-inline my-2 my-lg-0 ">
      					<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      						<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    				</form> -->

  



	<div class="row-1">
		<div class="topnav">
	  		<a href="Home.php">Home</a>
	  		<?php  if(isset($_SESSION['logInUserName'])){?>
	  		<a href="userDetails.php">Hi! <?php echo $_SESSION['logInUserName'] ?></a>
	  		<a href="logout.php">Log Out</a>
	  		<a href="sellItem.php" target="">Sell Product</a>
	  	<?php }else{ ?>
	  		<!-- <a href="Sign_In.php" id="registerOrLogIn">Register Or <br>Log in</a>-->
	  		<a href="Sing_Up.php" >Register</a>
	  		<a href="Sign_In.php" >Log in</a>
	  	<?php } ?>
	  		<a href="#about">About</a>
	  		<form action="search.php">
	  			<input type="search" name="search" placeholder="Search" list="category">
	  			<datalist id="category">
				    <option value="Men">
				    <option value="Shirt">
				    <option value="Watch">
				    <option value="Jeans">
				</datalist>	
	  		</form>
		</div>
	</div>
</body>
</html>