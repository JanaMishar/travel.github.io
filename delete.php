<?php
	include 'connection.php';

	$id=$_GET['ide'];
	$deletequery="delete from finaltour where id='$id'";
	$processquery=mysqli_query($con,$deletequery);
	
	if($processquery){
		?>

	<script>
		alert('data deleted');
	</script>
	<?php
	header ('location:show.php');
}else{
	?>
	<script>
		alert('data not deleted');
	</script>
	<?php
}


	

?>