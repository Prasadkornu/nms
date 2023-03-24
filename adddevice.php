<?php 
include("config.php");

$loc=$_POST['loc'];
$mac=$_POST['mac'];
$status=$_POST['status'];

	$query="INSERT INTO devices VALUES('$loc','$mac','$status')";
	$result=mysqli_query($con,$query);
	echo '<script>alert("Sucessfull")</script>';
	//header("Location:index.html");

?>