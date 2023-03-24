<?php 
include("config.php");

//$mess=$_POST['mess'];
$checkbox = $_POST['checkbox'] ;  

for ($i=1; $i<sizeof($checkbox);$i++)
{  
$query="INSERT INTO complaint (problem) VALUES ('".$checkbox[$i]. "')"; 

}
//$query="INSERT INTO complaint VALUES('$p1','$mess')";
	$result=mysqli_query($con,$query);
	echo '<script>alert("Sucessfull")</script>';
	//header("Location:index.html");

?>