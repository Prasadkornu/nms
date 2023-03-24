<?php 
include("config.php");

$q = $_POST['query'] ;  


$query="INSERT INTO query VALUES('$q')";
	$result=mysqli_query($con,$query);
	echo '<script>alert("Sucessfull")</script>';
	//header("Location:index.html");

?>