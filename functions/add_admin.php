<?php
	include 'connect.php';
	$uname = $_POST['uname'];
	$pass = $_POST['pass'];
	$que = "INSERT INTO admins (uname,pass) VALUES ('$uname','$pass')";
	$run = mysqli_query($con,$que);
	echo "<script>alert('Added Successfully!')</script>";
	echo "<script>window.location.href='../home.php'</script>";
?>