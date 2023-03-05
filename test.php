<?php 
include("config.php");

$name="admin";
$pass1="admin";
$id="admin";
$email="admin@gmail.com";
$pass=password_hash($pass1, PASSWORD_DEFAULT);

    $query="INSERT INTO registration (`name`, `id`, `email`, `password`) VALUES('$name','$id','$email','$pass')";
    $result=mysqli_query($con,$query);
     echo "success";

?>