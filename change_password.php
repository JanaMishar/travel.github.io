<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

	<form action="" method="POST">
		<input type="password" name="password">
		<br>
		<br>
		<input type="password" name="cpassword">
		<br>
		<br>
		<input type="submit" name="submit">
		
	</form>
	
	<?php
		include 'connection.php';
		if (isset($_POST['submit'])) {
			$password=$_POST['password'];
			$cpassword=$_POST['cpassword'];
			if(isset($_GET['token'])){
				$token=$_GET['token'];

				$pass=password_hash($password,PASSWORD_BCRYPT);
				
				$query="update finaltour set password='$pass' where token='$token'";

				$processquery=mysqli_query($con,$query);

				if($processquery){
					echo "password updated";
					header('location:login.php');
				}else{
					echo 'password not updated';
					header('location:change_password.php');
				}

			}
			
		}

	?>

</body>
</html>