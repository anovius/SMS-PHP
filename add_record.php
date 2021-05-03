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
	<title>SMS (Add Record)</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
</head>
<body>
	<center>
		<h1>Add a new Record</h1>
		<form method="post" action="functions/add.php" class="box">
			<div class="form-group">
				<input type="text" name="sname" placeholder="Student Name" class="form-control" required="required">
				<input type="text" name="fname" placeholder="Father Name" class="form-control" required="required">
				<input type="text" name="dob" placeholder="Date of Birth" class="form-control" required="required">
				<input type="text" name="phone" placeholder="Phone #" class="form-control" required="required">
				<input type="text" name="cnic" placeholder="Father CNIC #" class="form-control" required="required">
				<input type="text" name="class" placeholder="Class" class="form-control" required="required">
				<div id="result"></div>
				<input type="text" name="rollno" id="search" placeholder="Roll #" class="form-control" required="required" autocomplete="off">
				<input type="text" name="address" placeholder="Address" class="form-control" required="required"><br>
				<input type="reset" class="btn btn-primary" value="Reset">
				<input type="submit" class="btn btn-primary" value="Add Record">  
			</div> 
		</form>
	</center>
</body>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
  $(document).ready(function () {
    $('#search').keyup(function(){
      var text = $('#search').val();
      if(text == ''){
        $('#result').html('');
      }
      else{
        $.ajax({
          url : "functions/rollchk.php",
          method : "post",
          data : {search : text},
          dataType : "text",
          success:function(data)
          {
            $('#result').html(data);  
          }
        });
      }
    });
  })
</script>
</html>