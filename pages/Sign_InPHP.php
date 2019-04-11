<!DOCTYPE html>
<html>
<head>
	<title>Sign In PHP</title>
</head>
<body>
	<?php
		$userName=$_REQUEST['userName'];
		$password=$_REQUEST['password'];


		$link=mysqli_connect("localhost","root","");
		mysqli_select_db($link,"MKSD");


		$resultUserName=mysqli_query($link,"SELECT userName FROM accountdetails WHERE userName='$userName'");
		$resultPassword=mysqli_query($link,"SELECT userName FROM accountdetails WHERE password='$password'");
		$result=mysqli_query($link,"SELECT userName FROM accountdetails WHERE userName='$userName' AND password='$password'");



		$row=mysqli_fetch_array($resultUserName);
		$logInUserName=$row['userName'];



		$countUserName=mysqli_num_rows($resultUserName);
		$countPassword=mysqli_num_rows($resultPassword);
		$count=mysqli_num_rows($result);
		if($count==1){
			session_start();
   			$_SESSION['logInUserName'] = $logInUserName;
   			header("location:Home.php");
			// header("Location:HomeWithLogIn.php");
		}else{
			if($countUserName==0){
				// echo "Enter User name does not exit<br>";
				?>
				<script>
					alert("Enter User name does not exit");
					window.open("Sign_In.php");
				</script>
				<?php 
				// header("location:Sign_In.php");
				// session_start();
				// $_SESSION['madushanka']=$count;

				//header("location:Sign_In.php");
			}
			elseif($countUserName==1 AND $countPassword==0){
				?>
				<script>
					alert("Enter password is incorrect. Try again");
					window.open.("Sign_In.php");
				</script>
				<?php
				// header("location:Sign_In.php");
			}
		}


	?>
</body>
</html>