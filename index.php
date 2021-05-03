<html>
<head>
	<title>SMS (LOGIN)</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class=".col-md-12">
			<h1 align="center" style="font-family: navfont;">Welcome Here !</h1>
		</div>	
	</div>
	<center>
	<div class="box" style="font-family: navfont">
	<h2>Login Validation</h2><br>
		<form method="post" action="functions/login.php">
			<div class="form-group">
				<div class="input-group">
                  <span class="input-group-addon "><span class="glyphicon glyphicon-user"></span></span>
                  <input type="text" class ="form-control" name="uname" placeholder="Username" required="required" autocomplete="off">
               </div><br>
               <div class="input-group">
                  <span class="input-group-addon "><span class="glyphicon glyphicon-lock"></span></span>
                  <input type="password" class ="form-control" name="pass" placeholder="Password" required="required">
               </div><br>
               <input type="submit" value="Login" class="btn btn-success">
			</div>
		</form>
	</div>
</center> 
</body>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</html> 