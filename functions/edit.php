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
<style type="text/css">
	.form-control{
		background-color: transparent!important;
		color: white!important;
		font-family: navfont;
		margin-top: 5px;
	}
	.box{
		box-shadow:0 8px 16px 0 rgba(0,0,0,0.5),0 6px 20px 0 rgba(0,0,0,0.19);
	}
</style>
<head>
	<title>SMS (Edit Record)</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/main.css" rel="stylesheet">
</head>
<body>
	<center>
		<h1>Edit the Record</h1>
		<form method="post" action="update.php" class="box">
			<div class="form-group">
				<input type="text" name="sname" class="form-control" required="required" value="<?php echo  $sname ?>">
				<input type="text" name="fname" placeholder="Father Name" class="form-control" required="required" value="<?php echo $fname ?>"> 
				<input type="text" name="dob" placeholder="Date of Birth" class="form-control" required="required" value="<?php echo $dob ?>">
				<input type="text" name="phone" placeholder="Phone #" class="form-control" required="required" value="<?php echo  $phone ?>">
				<input type="text" name="cnic" placeholder="Father CNIC #" class="form-control" required="required" value="<?php echo $cnic ?>">
				<input type="text" name="class" placeholder="Class" class="form-control" required="required" value="<?php  echo $class?>">
				<input type="text" name="rollno" id="search" placeholder="Roll #" class="form-control" required="required" autocomplete="off" value="<?php echo  $rollno ?>" style="display: none;">
				<input type="text" name="address" placeholder="Address" class="form-control" required="required" value="<?php echo  $address ?>"><br>
				<input type="reset" class="btn btn-success" value="Reset">
				<input type="submit" class="btn btn-warning" value="Update">  
			</div> 
		</form>
	</center>
</body>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
</script>
</html>