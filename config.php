<?php


$host="localhost";
$user="root";
$pass="";
$db="major";

$con=mysqli_connect($host,$user,$pass,$db);
if($con)
{
    echo "";
}

else
{
    echo"failed";
}

?>