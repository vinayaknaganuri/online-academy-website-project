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

$id=$_GET['student_id'];

$sql="SELECT * FROM user WHERE id='$id' ";

$result=mysqli_query($data,$sql);

$info=$result->fetch_assoc();



if (isset($_POST['update'])) 
{
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$password=$_POST['password'];



	$query="UPDATE user SET username='$name', phone='$phone', email='$email',password='$password' WHERE  id='$id' ";

	$result2=mysqli_query($data,$query);

	if($result2)
	{
		header("location:view_student.php");
	}

}



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin Dashboard</title>
	
	<?php
	include 'admin_css.php';

	?>

	<style type="text/css">

		h1
		{
			padding-top: 45px;

		}
		

		label
		{
			display: inline-block;
		 	font-size: 20px;
			text-align: right;
			padding-top: 15px;
			padding-bottom: 10px;

		}

		.div_deg
		{
			color: white;
			padding-top: 15px;
			font-family:  'Courier New', Courier,monospace;
			font-size: 16px;

		}


		.admin
		{
			padding-left: 545px;
		}


		.admin
		{
			color: white;
		}

		body
		{
			background-image: url("imag01.jpg");
			background-size: 2000px;
			background-position: center;
			background-repeat: no-repeat;

		}

		input
		{
			border-radius: 5px;
			font-size: 20px;
			color: white;
			background-color: transparent;
		}

	

	</style>

</head>
<body>
	
	<?php
	include 'admin_sidebar.php';
	?>
	
	<div class="content">
		
		<h1 class="admin">Update Student</h1>

				 
		
			
			<div>
				<center>
					<div class="div_deg"> 
				<form  action="#" method="POST">
				

					<div>
						
						<label>Username :</label>
						<input type="text" name="name" value="<?php echo "{$info['username']}"; ?>">

					</div>

					<div>
						
						<label>Phone :</label>
						<input type="number" name="phone"  value="<?php echo "{$info['phone']}"; ?>">
						
					</div>


					<div>
						
						<label>Email :</label>
						<input type="text" name="email"  value="<?php echo "{$info['email']}"; ?>">
						
					</div>


					


					<div>
						
						<label>Password :</label>
						<input type="text" name="password"  value="<?php echo "{$info['password']}"; ?>">
						
					</div>


					<div class="tn">
						
						<input class="btn btn-success" type="submit" name="update" value="update">
						
					</div>







					</div>

				</form>

				</center>


			</div>

		

	</div>

</body>
</html>