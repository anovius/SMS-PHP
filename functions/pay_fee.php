<?php
	include 'connect.php';
	$rollno = $_POST['rollno'];
	$qurey= "select * from students where rollno=$rollno";
	$run = mysqli_query($con,$qurey);
	$check = mysqli_num_rows($run);
	while($row = mysqli_fetch_row($run)){
			$sname = $row[1];
			$fname = $row[2];
			$class = $row[6];
			$rollno = $row[7];
			$remaining_balance = $row[11];
	}
	if (isset($_POST['pay'])) {
		echo "very good";
	}  
	if ($check>0) {
		?>
<html>
<head>
	<title>SMS (Fee Details)</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/main.css" rel="stylesheet">
</head>
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
<body>
<div class="container">
		<div class=".col-md-12">
			<h1 align="center" style="font-family: navfont;">Query Results</h1>
		</div>	
	</div>
	<center>
	<div class="box" style="font-family: navfont">
	<h2>Enter Details</h2><br>
		<form method="post" action="pay_it.php">
			<div class="form-group">
				<input type="text" name="total_fee" placeholder="Total Fee" class="form-control" required="required">
				<input type="text" name="fee_paid" placeholder="Fee Paid" class="form-control" required="required">
				<input type="text" name="rollno" placeholder="Roll No" class="form-control" required="required" value="<?php echo $rollno;?>">
				<input type="text" name="remaining_balance" placeholder="Remaining Balance" class="form-control" required="required" value="<?php echo $remaining_balance;?>" style="display: none;">
				<input type="text" name="taken_by" placeholder="Fee Taken By" class="form-control" required="required"><br>
				<p><b>Remaining Balance : <?php echo $remaining_balance; ?></b></p>
				<br>
				<input type="submit" class="btn btn-primary" value="Pay Fee" name="pay"> 
			</div>
		</form>
	</div>
</center> 
</body>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
</html>
<?php
	}
	else 
		echo "No record found regarding this Roll Number";
?>