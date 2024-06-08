 <?php

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


if(isset($_POST['add_student']))
{
	$username=$_POST['name'];
	$user_email=$_POST['email'];
	$user_phone=$_POST['phone'];
	$user_password=$_POST['password'];
	$usertype="student";

	$check="SELECT * FROM user WHERE username =' $username' ";

	$check_user=mysqli_query($data,$check);


	$row_count=mysqli_num_rows($check_user);


	if($row_count==1)
	{

		echo  "<script type='text/javascript'>
		alert('Data Uploaded Success');
		  </script";
		  
		echo "Username Already Exist.";
	}

	else 
	{
		
	

	$sql="INSERT INTO user(username,email,phone,usertype,password) VALUES('$username','$user_email','$user_phone','$usertype','$user_password')";

	$result=mysqli_query($data,$sql);


	if($result)
	{
		echo  "<script type='text/javascript'>
		alert('Data Uploaded Success');
		  </script";
	}

	else
	{
		echo "Uploaded Failed";
	}
	
	}

}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin Dashboard</title>

	<style type="text/css">
	
	label
	{
		display: inline-block;
		text-align: right;
		width: 200px;
		padding-top: 10px;
		padding-bottom: 10px;
		font-family: 'Courier New', Courier,monospace ;
		font-size: 25px;

	}

	

	.Add
	{
		padding-top: 25px;
		padding-left: 155px;
	}

	.stu
	{
		display: inline-block;
		text-align: right;
		padding-top: 10px;
		padding-bottom: 10px;
		font-family: 'Courier New', Courier,monospace ;
		font-size: 52px;
		color: white;
		padding-left: 85px;

	}

	label
		{
			color: white;
		}

		body
		{
			background-image: url("imag03.jpg");
			background-size: 2000px;
			background-position: center;
			background-repeat: no-repeat;

		}

		 .input2
		{
			background-color: rgba(0,0,0,0);
			color: white;
			font-size: 20px;
			border-radius: 10px;
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

		<h1 class="stu">Add Student</h1>

		<div class="div_deg">
			

			<form action="#" method="POST">
				
				<div>
					<label>Username :</label>
					<input class="input2" type="text" name="name">
				</div>

				<div>
					<label>Phone :</label>
					<input class="input2" type="text" name="phone">
				</div>


				<div>
					<label>Email :</label>
					<input class="input2" type="text" name="email">
				</div>

				

				<div>
					<label>Password :</label>
					<input class="input2" type="text" name="password">
				</div>

				<div class="Add">
					
					<input type="submit" class="btn btn-primary"  name="add_student" value="Add Student">
				</div>


				
			</form>
		</div>
			
		</center>
		

	</div>

</body>
</html>