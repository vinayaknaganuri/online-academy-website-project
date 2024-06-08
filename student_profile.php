 <?php

session_start();
if (!isset($_SESSION['username'])) 
{
	header("location:login.php");
}



$host="localhost";
$user="root";
$password="";
$db="schoolproject";


$data=mysqli_connect($host,$user,$password,$db);

$name=$_SESSION['username'];

$sql="SELECT * FROM user WHERE username='$name' ";

$result=mysqli_query($data,$sql);

$info=mysqli_fetch_assoc($result);


if(isset($_POST['update_profile']))
{
	$s_phone=$_POST['phone'];
	$s_email=$_POST['email'];
	$s_password=$_POST['password'];


	$sql2="UPDATE user SET phone='$s_phone',email='$s_email',password='$s_password' WHERE username='$name'  ";

	$result2=mysqli_query($data,$sql2);

	if($result2)
	{
		
		header('location:student_profile.php');
	}
}


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Update Profile</title>

	<style type="text/css">

		.pro
		{
			 
			font-family:'Courier New', Courier,monospace;
			background-color: #aeccc6;
			width: 400px;
			border-radius: 5px;
		 
		}
	

		label
		{
			display: inline-block;
			text-align: right;
			width: 100px;
			padding-top: 10px;
			padding-bottom: 10px;
			font-family:  'Courier New', Courier,monospace;
		}

		.div_deg
		{
			background-color:#aeccc6;
			width: 500px;
			padding-top: 70px;
			padding: 70px;
			font-size: 16px;

		}

		.sub
		{
			padding-top: 20px;

		}
		.inp
		{
			padding: 3px;
			font-family: normal;
			 
		}
		body
		{
			background-image: url("imag02.jpg");
			background-size: 2000px;
			background-position: center;
			background-repeat: no-repeat;

		}

		.hlo
		{
			padding-left: 100px;
			padding-top: 50px;
		}

		


	</style>
	<?php

	include 'student_css.php'




	?>

	

</head>
<body>

	

	<?php

	include 'student_sidebar.php'




	?>
	<div class="hlo">
	 
	 <center>
	 	<div class="pro">
	 	<h1>Update Profile</h1>
	 </div>
	</center>
	 


	<div>
		<center>
			 
		<form action="#" method="POST">

			<div class="div_deg">
	
			<div>
				<label>Phone :</label>
				<input class="inp" type="number" name="phone" value="<?php echo "{$info['phone']}" ?>">

			</div>


			<div>
				<label>Email :</label>
				<input class="inp" type="text" name="email"  value="<?php echo "{$info['email']}" ?>">

			</div>


			<div>
				<label>Password :</label>
				<input class="inp" type="text" name="password"  value="<?php echo "{$info['password']}" ?>">

			</div>

			<div class="sub" >
				<input class="btn btn-primary" type="submit" name="update_profile" value="Update">

			</div>

			</div>







		</form>	
		</center>


	</div>

	</div>


	 

</body>
</html>