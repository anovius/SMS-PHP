<?php 
	include('connect.php');
	$query = "UPDATE `students` set fee_status=0";
	$run = mysqli_query($con, $query);
	echo "<script>alert('Succeeded!');window.open('../home.php','_self')</script>";
?>