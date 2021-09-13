<?php
	include 'connection.php';

	if(isset($_GET['token'])){
		$token=$_GET['token'];
		$query="update finaltour set status='active' where token='$token'";
		$processquery=mysqli_query($con,$query);
		if($processquery){
			echo "activated";
			header ('location:login.php');

		}else{
			echo "not activated";
			header('location:register.php');
		}



	}

?>