<?php
	include 'connect.php';
	$sname = $_POST['sname'];
	$fname = $_POST['fname'];
	$cnic = $_POST['cnic'];
	$dob = $_POST['dob'];
	$phone = $_POST['phone'];
	$class = $_POST['class'];
	$rollno = $_POST['rollno'];
	$address = $_POST['address'];
	$query = "
		UPDATE  `students` 
		set sname='$sname',
			fname='$fname',
			cnic='$cnic',
			dob='$dob',
			phone='$phone',
			class='$class',
			rollno='$rollno',
			address='$address'
			where rollno='$rollno'
			";
		$run = mysqli_query($con, $query);
		echo "<script>window.open('../display_records.php','_self')</script>";
?>
