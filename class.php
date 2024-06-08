<?php

session_start();

$host="localhost";

$user="root";

$password="";

$db="schoolproject";


$data=mysqli_connect($host,$user,$password,$db);

if ($data===false)
{
	die("connection error");
}


if(isset($_POST['submit']))

{
	$class_name=$_POST['classname'];

	$class_email=$_POST['classdate'];

	$class_phone=$_POST['classtime'];



	$sql="INSERT INTO notes(classname,classdate,classtime)VALUES ('$class_name','$class_email','$class_phone')";



	$result=mysqli_query($data,$sql);

	if ($result) 
	{
		$_SESSION['message']="your application sent successful" ;
		header("location:school.php");
	}

	else
	{
		echo "Apply Failed";
	}





}


?>

