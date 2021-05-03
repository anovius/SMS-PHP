<style type="text/css">
	.error{
		color: red;
	}
</style>
<?php
include 'connect.php';
$search = $_POST['search'];
		$que = "SELECT * FROM `students` where rollno LIKE '%".$search."%'";
		$run = mysqli_query($con,$que);
		if (mysqli_num_rows($run) >0) {
?>
<p class="error"><b>
	<?php
		echo "Roll # Already Exists";
	?>
</b></p>
<?php
	}
	else{

	}
?>