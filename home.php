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
	<title>SMS (Home)</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-default" role="navigation" style="font-family: navfont;margin-top: 10px;"> 
  <div class="navbar-header"> 
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse"> 
         <span class="sr-only"></span> 
         <span class="icon-bar"></span> 
         <span class="icon-bar"></span> 
         <span class="icon-bar"></span> 
    </button> 
      <a class="navbar-brand" href="#">SMS</a> 
   </div> 
   <div class="collapse navbar-collapse" id="example-navbar-collapse"> 
      <ul class="nav navbar-nav"> 
         <li class="active"><a href="#">Home</a></li> 
         <li><a href="display_records.php">Saved Records</a></li> 
         <li><a href="add_record.php">Add Records</a></li>
          <li class="dropdown"> 
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Fee Options <b class="caret"></b></a>
            <ul class="dropdown-menu"> 
               <li><a href="fee_entery.php">Fee Entry</a></li> 
               <li><a href="fee_records.php">Fee Records</a></li> 
               <li><a href="unpaid.php">Unpaid List</a></li> 
               <li><a href="functions/unpaid_all.php">New month?? Unpaid All</a></li>  
            </ul> </li>
           <li class="dropdown"> 
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Other Options <b class="caret"></b></a>
            <ul class="dropdown-menu">
               <li><a href="add_admin.php">Add a New Admin</a></li> 
               <li><a href="functions/logout.php">Logout (<?php echo $uname;?>)</a></li>  
            </ul> </li> 
      </ul> 
   </div> 
   </nav>
   <center>
     <h1>Welcome to the Software</h1>
     <p>By: <a href = "http://facebook.com/oxmanfarooq">Usman Farooq</a></p>
     <img src="img/home_loaders.gif">
     <div class="box">
     <a href="#" class="btn btn-primary btn-lg btn-block" id="button" data-toggle="modal" data-target="#myModal">Search Records</a>
     </div>
   </center>
   <div class="modal fade" id="myModal" tabindex="-1" role="dialog"  
   aria-labelledby="myModalLabel" aria-hidden="true" style="font-family: navfont;"> 
   <div class="modal-dialog"> 
    <div class="modal-content"> 
         <div class="modal-header"> 
            <button type="button" class="close"  
               data-dismiss="modal" aria-hidden="true"> 
                  &times; 
            </button> 
            <h4 class="modal-title" id="myModalLabel" style="color: black;"> 
               Search Here 
            </h4> 
         </div> 
         <div class="modal-body"> 
            <form method="post" action="functions/search.php">
          <div class="form-group">
            <input type="text" name="rollno" placeholder="Enter Roll# " class="form-control" required="required"> 
          </div>
         </div> 
         <div class="modal-footer"> 
            <button type="button" class="btn btn-default"  
               data-dismiss="modal">Close 
            </button> 
            <input type="submit" class="btn btn-primary" value="Search">  
         </div> 
         </form>
      </div>
</div>
</div>
</body>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>