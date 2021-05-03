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
	<title>SMS (Add Admin)</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class=".col-md-12">
			<h1 align="center" style="font-family: navfont;">Add a New Admin</h1>
		</div>	
	</div>
	<center>
	<div class="box" style="font-family: navfont">
	<h2>Enter Details</h2><br>
		<form method="post" action="functions/add_admin.php">
			<div class="form-group">
				<div class="input-group">
                  <span class="input-group-addon "><span class="glyphicon glyphicon-user"></span></span>
                  <input type="text" class ="form-control" name="uname" placeholder="Username" required="required" autocomplete="off">
               </div><br>
               <div class="input-group">
                  <span class="input-group-addon "><span class="glyphicon glyphicon-lock"></span></span>
                  <input type="password" class ="form-control" name="pass" placeholder="Password" required="required">
               </div><br>
               <input type="submit" value="Add Now" class="btn btn-success">
			</div>
		</form>
	</div>
</center> 
</body>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</html> 