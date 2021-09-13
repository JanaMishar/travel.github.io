<?php
	session_start();
	session_destroy();

	setcookie('emailcookie','',time()-8400);
	setcookie('passwordcookie','',time()-8400);


	header('location:login.php');


?>