<?php
include("dbconnect.php");
if(isset($_POST['upload']))
{
$a=mysqli_real_escape_string($conn,$_REQUEST['cat']);	
$images=$_FILES['image']['name'];
$target="photo/".basename($images);
$sql="INSERT INTO photo_tb(cat,image)VALUES('$a','$target')";
if (mysqli_query($conn,$sql))
{
	header("location:photo.php");
}
if (move_uploaded_file($_FILES['image']['tmp_name'],$target))
{
	$msg="image uploaded successfully";
}
else
{
	$msg="failed";
}
}
?>