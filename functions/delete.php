<?php
include('connect.php');
$rollno =$_GET ['rollno'];
$query = "delete from students where rollno='$rollno'";
$run = mysqli_query ($con,$query);
echo "<script>window.open('../display_records.php','_self')</script>";
?>