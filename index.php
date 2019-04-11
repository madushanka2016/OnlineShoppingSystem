<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
	<?php
		include 'menu.php';
		// session_start();
  //  		$logInUserName=$_SESSION['logInUserName'];

  //  		$priceCheck=$_SESSION['priceCheck'];
		// $lowPrice=$_SESSION['lowPrice'];
		// $highPrice=$_SESSION['highPrice'];
	?>
	<div class="container-fluid">
	<div class="row">
		<div class="col col-lg-2">
			<form action="priceCheck.php" method="POST">
				<div class="form-group">
					<h2>Price</h2>
					<label class="">From:</label>
					<input class="form-control" type="number" name="lowPrice" value="0">
					<label class="">To:</label>
					<input class="form-control" type="number" name="highPrice" value="0">

					<h2>Condition</h2>
				
					<label class=""><input type="radio" name="all">All</label>
					<label class=""><input type="radio" name="new">New</label>
					<label class=""><input type="radio" name="used">Used</label>
					<label class=""><input type="radio" name="notWorking">Not Working</label>
				

					<br><br>
					<input class="btn btn-primary" type="submit" name="" value="Find">
				</div>
			</form>
		</div>
		<div class="col col-lg-8">
			<?php
				$link=mysqli_connect("localhost","root","");
				mysqli_select_db($link,"MKSD");
				if($priceCheck==0){
					$img= mysqli_query($link,"SELECT * FROM iteamdetails ");
					if($search){
						$img= mysqli_query($link,"SELECT * FROM iteamdetails WHERE title LIKE '%".$search."%' ");
					}
					else{
						$img= mysqli_query($link,"SELECT * FROM iteamdetails ");
					}
				}else if ($priceCheck==1) {
					$img= mysqli_query($link,"SELECT * FROM iteamdetails WHERE price>=$lowPrice AND price<=$highPrice");
				}
				// $row=mysqli_fetch_array($img);
				while ($row=mysqli_fetch_array($img)) {
					$itemId=$row['itemId'];
					$_SESSION['itemId']=$itemId;
			?>
				<div class="row">
					<div class="col">
						<a href="itemDetails.php?id=<?php echo $row["itemId"];?>">
							<img class="img-rounded"> src="<?php echo $row['image']; 
								$_SESSION['aaa']=$row['image'];
							?>"></a>
					</div>
					<div class="col">
						<!-- <a href="itemDetails.php ?id= <?php echo $row['itemId'];?>">go</a> -->
						<p class=""><?php echo $row['title']; ?></p>
						<p class=""><?php echo $row['conditio']; ?></p>
						<p class="">Rs :<?php echo $row['price']; ?></p>
						<!-- <p class="quantity"><?php echo $row['quantity']; ?> more</p> -->

						<p class=""><?php $quantity=$row['quantity']-$row['sellquantity'];
						echo $quantity; ?> more</p>

						<!-- <p><?php echo $row['itemdescription']; ?></p>
						<button>Buy</button> -->
					</div>
				</div>
				<div class="">
					<div class="">
	
					</div>
					<div class="">
						
					</div>
				</div>
			<?php
				}
			?>
		</div>
		<div class="col col-lg-2">
			<a href="#ad1"><img class="addver" src="photo\ad1.jpg" ></a>
			<a href="#ad2"><img class="addver" src="photo\ad2.jpg"></a>
			<a href="#ad3"><img class="addver" src="photo\ad3.jpg"></a>
			<a href="#ad4"><img class="addver" src="photo\ad4.jpg"></a>
		</div>
	</div>
	</div>	
</body>
</html>