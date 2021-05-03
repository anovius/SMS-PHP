<?php
	include 'connect.php';
	$rollno = $_GET['rollno'];
	$qurey= "select * from students where rollno=$rollno";
	$run = mysqli_query($con,$qurey);
	while($row = mysqli_fetch_row($run)){
			$id = $row[0];
			$sname = $row[1];
			$fname = $row[2];
			$dob = $row[3];
			$phone = $row[4];
			$cnic = $row[5];
			$class = $row[6];
			$rollno = $row[7];
			$address = $row[8];
			$admission_date = $row[9];
	}
?>
<html>
<head>
	<title>SMS (<?php echo $sname,' ',$fname;?>)</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="../css/bootstrap.min.css" rel="stylesheet">
  	<link href="../css/main.css" rel="stylesheet">
</head>
<style type="text/css">
	.box{
			width: 300px;
			background-color: white;
			padding: 10px;
			color: black;
			margin-top: 100px;
	}
</style>
<body>
<center>
	<div class="box" style="font-family: navfont">
		<img src="../img/user.png" height="150" width="150" style="margin-top: -70px;border-radius: 70px;">
		<h3><?php echo $sname,' ',$fname;?></h3>
		<a class="btn btn-success" href="edit.php?rollno=<?php echo $rollno ?>">Edit</a> 
		<a class="btn btn-warning" href="delete.php?rollno=<?php echo $rollno ?>">Delete</a><br><br>
		<div style="text-align: left">
		<p>Date of Birth : <?php echo $dob ?></p>
		<p>Phone Number : <?php echo $phone ?></p>
		<p>Father Cnic Number : <?php echo $cnic ?></p>
		<p>Class : <?php echo $class ?></p>
		<p>Roll Number : <?php echo $rollno ?></p>
		<p>Address : <?php echo $address ?></p>
		<p>Admission Date : <?php echo $admission_date ?></p>
		</div>
	</div>
</center>
</body>
</html>