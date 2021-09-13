<?php
	session_start();

?>

	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<form action="" method="POST">
			<input type="email" name="email">
			<br>
			<br>
			<input type="submit" name="submit">
		</form>
<?php
	include 'connection.php';
	if(isset($_POST['submit'])){
		$email=$_POST['email'];



		$selectquery="select * from finaltour where email='$email'";
		$processquery=mysqli_query($con,$selectquery);
		$countmail=mysqli_num_rows($processquery);
		$db_data=mysqli_fetch_assoc($processquery);

		$db_name=$db_data['name'];
		$db_token=$db_data['token'];

		if($countmail>0){

			$db_name=$db_data['name'];
		$db_token=$db_data['token'];

			$subject="reset your password";
			$body='hi '. $db_data['name'] . "please chick on the link to reset your password  http://localhost/final%20tour/change_password.php?token=$db_token ";
			$sender="Form:admon3472@gmail.com";

			if(mail($email, $subject, $body,$sender)){
				echo "mail has send to $email";
			}else{
				echo "mail sending failed";
			}

		}else{
			echo 'mail not exisist';
		}
	}

?>
	
	</body>
	</html>


