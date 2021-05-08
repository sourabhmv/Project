<?php
session_start();
include("dbconnect.php");
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$a=$_POST['email'];
	$b=$_POST['password'];
	//$password=implode('',$_POST['password']);
	$query=mysqli_query($conn,"SELECT * FROM signup_tb WHERE email='$a'and password='$b'");
	if(mysqli_num_rows($query)<1)
	{
		$_SESSION['msg']="Login Failed,User not Found!";
		header("location:index.php");
	}
	else
	{
		$row=mysqli_fetch_array($query);
		$_SESSION['id']=$row['id'];
		$_SESSION['email']=$row['email'];
		header("location:home.php");

	}
}
?>
