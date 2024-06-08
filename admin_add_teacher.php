<?php
error_reporting(0);
session_start();

 
if(!isset($_SESSION['username'])) 
{
	header("location:login.php");
}

$host="localhost";
$user="root";
$password="";
$db="schoolproject";

$data=mysqli_connect($host,$user,$password,$db);

if(isset($_POST['add_teacher']))
{
	$t_name=$_POST['name'];

	$t_description=$_POST['description'];

	$t_phone=$_POST['phone'];

	$t_email=$_POST['email'];


	$sql="INSERT INTO teacher (name,description,phone,email) VALUES ('$t_name','$t_description','$t_phone','$t_email')";


	$result=mysqli_query($data,$sql);
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin Dashboard</title>

	<style type="text/css">
		.admin_color
		{
			font-size: 50px;
			font-family: 'Courier New', Courier,monospace;
			color: white;
			border: 2px;
			padding-top: 15px;
			padding-bottom: 5px;
		}

		.frm
		{
			padding: 10px;
			font-family: 'Courier New', Courier,monospace;
			font-size: 20px;

		}

		.div
		{
			
			width: 500px;
			padding-top: 40px;
			padding-bottom: 50px;
			border-radius: 5px;

		}


		.label1
		{
			padding-left: 70px;
		}

		label
		{
			color: white;
		}

		body
		{
			background-image: url("imag10.jpg");
			background-size: 2000px;
			background-position: center;
			background-repeat: no-repeat;

		}

		.input
		{
			background-color: rgba(0,0,0,0);
			color: white;
			font-family: all;
		}






		



		

		



	</style>
	
	<?php
	include 'admin_css.php';

	?>

</head>
<body>
	
	<?php
	include 'admin_sidebar.php';
	?>
	
	<div class="content">
			
	<center>

				 <form action="#" method="POST">
				<div class="teacher" enctype="multipart/form-data">


				<div class="hlo">
			
					
			<h1 class="admin_color">Add Teacher</h1>
						
					
					 
					
					 
				</div>

				<div class="div">




				 	<div class="frm">
				 		<label>Teacher Name:</label>
				 		<input class="input" type="text" name="name" required/>
				 	</div>


				 	<div class="frm">
				 		<label class="label1">Phone :</label>
				 		<input class="input" type="text" name="phone">
				 	</div>

				 	<div class="frm">
				 		<label class="label1">Email :</label>
				 		<input class="input" type="text" name="email">

				 	</div>

				 	<div class="frm">
				 		<label>Description  :</label>
				 		<textarea class="input" name="description" required/></textarea>
				 	</div>

				 	<div class="frm">
				 	
				 		<input  class="btn btn-primary" type="submit" name="add_teacher" value="Add Teacher">
				 	</div>

				</div>

				 	</div>


			 </form>

	</div>
	</center>

</body>
</html>