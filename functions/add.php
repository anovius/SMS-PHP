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
	$que2="SELECT rollno FROM students WHERE rollno='$rollno'";
	$run2=mysqli_query($con,$que2);
	if(mysqli_fetch_array($run2) != 0){
		echo "<script>alert('Roll No. already exists')</script>";
		echo"Change Your Roll No.";
	}
	else{
	$que = "INSERT INTO `students` (`sname`,`fname`,`cnic`,`dob`,`phone`,`class`,`rollno`,`address`) VALUES ('$sname','$fname','$cnic','$dob','$phone','$class','$rollno','$address')";
	$run = mysqli_query($con,$que);
	echo "<script>window.location.href='../display_records.php'</script>";
	}
?>