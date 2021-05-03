<?php
	include 'connect.php';
	$rollno = $_POST['rollno'];
	$total_fee = $_POST['total_fee'];
	$fee_paid = $_POST['fee_paid'];
	$remaining_balance = $_POST['remaining_balance'];
	$taken_by = $_POST['taken_by'];
	$qurey= "select * from students where rollno=$rollno";
	$run = mysqli_query($con,$qurey);
	while($row = mysqli_fetch_row($run)){
			$sname = $row[1];
			$fname = $row[2];
			$class = $row[6];
	}
	$remain=$total_fee-$fee_paid;
	$balance=$remaining_balance+$remain;
	$query2 ="UPDATE `students`
			set
				fee_status=1,
				remaining_balance='$balance'
				where rollno='$rollno'";
	$run = mysqli_query($con,$query2);
	$que = "INSERT INTO `feelogs` (`sname`,`fname`,`class`,`rollno`,`total_fee`,`fee_paid`,`taken_by`,`remaining_balance`) VALUES ('$sname','$fname','$class','$rollno','$total_fee','$fee_paid','$taken_by','$balance')";
	$run = mysqli_query($con,$que);	
?>
<html>
<head>
	<title>Fee Done!</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/main.css" rel="stylesheet">
</head>
<body>
<center>
	<div class="box" style="font-family: navfont" id="printableArea">
	<h3>Bab-e-Arqam Group of School</h3>
	<p>Fee has been taken from <br><?php echo $sname?> S/O <?php echo $fname?> .<br>
	Class : <?php echo $class?><br>
	Roll Number : <?php echo $rollno?><br>
	Total Fee : <?php echo $total_fee?><br>
	Fee Paid : <?php echo $fee_paid?><br>
	Remaining Balance : <?php echo $balance?><br>
	Taken By : <?php echo $taken_by?>
	</p>
	</div>
	<input type="button" onclick="printDiv('printableArea')" value="Print it!" />
</center>
</body>
<script type="text/javascript">
	function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
</html>