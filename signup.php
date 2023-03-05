<?php 
include("config.php");

$name=$_POST['name'];
$id=$_POST['id'];
$email=$_POST['email'];
$pass1=$_POST['pass'];
$pass2=$_POST['cpass'];

$pass=password_hash($pass1, PASSWORD_DEFAULT);
if($pass1==$pass2)
{
	$query="INSERT INTO registration VALUES('$name','$id','$email','$pass')";
	$result=mysqli_query($con,$query);
	echo '<script>alert("Sign Up Sucessfull")</script>';
	header("Location:index.html");
}
else 
{   
	echo '<script>alert("Password not matched")</script>';
	header("Location:signup.html");
}
?>