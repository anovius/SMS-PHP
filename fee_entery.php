<?php
  session_start();
  if(isset($_SESSION ['uname'])){
    $uname = $_SESSION ['uname'];
  }
  else{
    echo "You are not logged in. Click <a href='index.php'>here</a> to login in.<br/> ";
    exit();
  }
?>
<html>
<head>
	<title>SMS (Fee Entery)</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
</head>
<body>
<div class="container">
		<div class=".col-md-12">
			<h1 align="center" style="font-family: navfont;">Fee Entery</h1>
		</div>	
	</div>
	<center>
	<div class="box" style="font-family: navfont">
	<h2>Roll # Here</h2><br>
		<form method="post" action="functions/pay_fee.php">
			<div class="form-group">
				<div class="input-group">
                  <span class="input-group-addon "><span class="glyphicon glyphicon-user"></span></span>
                  <input type="text" class ="form-control" name="rollno" placeholder="Enter Roll Number" required="required" autocomplete="off">
               </div><br>
               <input type="submit" value="SUBMIT" class="btn btn-success">
			</div>
		</form>
	</div>
</center> 
</body>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>