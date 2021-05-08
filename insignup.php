<?php
include("dbconnect.php");
$a=mysqli_real_escape_string($conn,$_REQUEST['name']);
$b=mysqli_real_escape_string($conn,$_REQUEST['phone']);
$c=mysqli_real_escape_string($conn,$_REQUEST['email']);
//$d=mysqli_real_escape_string($conn,$_REQUEST['username']);
//$e=mysqli_real_escape_string($conn,$_REQUEST['password']);
$password=implode('',$_REQUEST['password']);

$sql="INSERT INTO signup_tb(name,phone,email,password)VALUES('$a','$b','$c','$password')";
if (mysqli_query($conn,$sql))
{
	header("location:success.php");
}
?>