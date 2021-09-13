<?php
	$server='localhost';
	$uname='root';
	$pass='';
	$db='finaltour';
	$con=mysqli_connect($server,$uname,$pass,$db);
	if($con){
		?>
		<script>
			alert('connection successful');
		</script>
		<?php
	
	}else{
		?>
		<script>
			alert('connection failed');
		</script>
		<?php
	}

?>