<?php
include ("config.php");
$id=$_POST['id'];
$pass4=$_POST['pass'];
$query="SELECT password,name FROM registration where id='$id'";
$result=mysqli_query($con,$query);
session_start();
$_SESSION['id']=$id;
while($temp= $result->fetch_assoc())
{
	$dbpass=$temp["password"];
	$dbname=$temp["name"];
}
$pass=password_verify($pass4, $dbpass);

if($pass)
{
	if($dbname=="itinfra")
	{
		header("Location:itinfra.html");
	}

	else if($dbname=="admin")
	{
		header("Location:admin.html");
	}
	else
	{
			header("Location:student.html");

	}
}

else
{  
	echo '<script>alert("Password not matched")</script>';
	header("Location:index.html");
	exit();
	
}
?>