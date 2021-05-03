<?php
include('functions/connect.php');
?>
<html>
<head>
<title>SMS(Fee Records)</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	.box{
		width: 900!important;
		padding: 20px!important;
	}
	td{
		padding: 6px;
	}
	@media screen and (max-width: 400px) {
		.box{
			width: 300px!important;
		}
	}
	.table-responsive{
	border-radius: 10px;
	box-shadow:0 8px 16px 0 rgba(0,0,0,0.5),0 6px 20px 0 rgba(0,0,0,0.19);
}
.tr-head{
	background-color: rgba(205,55,200,.8);
	color: white;
}
td{
	font-size: 16px;
}
.tr-left{
	font-weight: bold;
	color: rgba(205,55,200,.8);
	font-size: 20px;
}
table,th,td,tr{
	border: none !important;
}
 th,td{
	width: 30px !important;
	text-align: center !important;
}
::-webkit-scrollbar{
	display: none;
}
</style>
<body>
	<center>
	<br>
<h2 style="font-family: navfont;">Fee Records</h2>
	<div class="table-responsive">
   <table class="table table-hover" style="font-family: navfont;">
	 <tr>
	 </tr>
	 <thead> 
      <tr class="tr-head"> 
		<td>Student Name</td>
		<td>Father Name</td>
		<td>Class</td>
		<td>Roll No.</td>
		<td>Total Fee</td>
		<td>Fee Paid</td>
		<td>Remaining Blance</td>
		<td>Date Taken</td>
		<td>Taken By</td>
	 </tr>
	 </thead>
<?php
	$que = "select * from feelogs";
	$run = mysqli_query ($con,$que);
while ($row = mysqli_fetch_array($run))
{
	$sname = $row[0];
	$fname = $row[1];
	$class = $row[2];
	$rollno = $row[3];
	$total_fee = $row[4];
	$fee_paid = $row[5];
	$taken_by = $row[6];
	$date_taken = $row[7];
	$remaining_balance = $row[8];
?>
	<tbody>
	 <tr align='center'>
		<td><?php echo $sname ?></td>
		<td><?php echo $fname ?></td>
		<td><?php echo $class ?></td>
		<td><?php echo $rollno ?></td>
		<td><?php echo $total_fee ?></td>
		<td><?php echo $fee_paid ?></td>
		<td><?php echo $remaining_balance ?></td>
		<td><?php echo $date_taken ?></td>
		<td><?php echo $taken_by ?></td>
	 </tr>
	 </tbody>
<?php } ?>	 
 </table>
 </center>
</body>
</html>