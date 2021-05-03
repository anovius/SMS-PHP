<?php
	session_start() ;
    include 'connect.php';
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];
    $query = "select * from `admins` where `uname` = '$uname' && `pass` = '$pass'";
    $run = mysqli_query($con,$query);
    $check = mysqli_num_rows($run) ;
    if($check>0){
        $_SESSION ['uname']= $uname ;
        echo "<script>window.location.href='../home.php'</script>";
    }
    else{
        echo "<script>alert('Inncorrect Usename or Password');window.location.href='../index.php'</script>";
    }
?>
