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
if($_GET['teacher_id'])
{
	$t_id=$_GET['teacher_id'];
	
	$sql="SELECT * FROM  teacher WHERE id='$t_id' ";

	$result=mysqli_query($data,$sql);

	$info=$result->fetch_assoc();
}

if(isset($_POST['update_teacher']))
{
	$A_id=$_POST['id'];
	$t_name=$_POST['name'];
	$t_phone=$_POST['phone'];
	$t_description=$_POST['description'];
	$t_email=$_POST['email'];
	

	$query="UPDATE teacher SET name='$t_name',email='$t_email',phone='$t_phone',description='$t_description' WHERE id='$A_id' ";

	$result2=mysqli_query($data,$query);

	if($result2)
	{
		echo "Update success";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin Dashboard</title>

	<style type="text/css">
		.label2
		{
			padding: 20px;
			padding-top: 10px;
			text-align: center;
			font-size: 20px;
		 

		}

		.label3	
		{
			padding: 20px;
			padding-top: 10px;
			text-align: center;
			font-size: 20px;
			padding-left: 100px;
		}

		.div2
		{
			
			padding-top: 15px;
			padding-bottom: 15px;
			font-family: Courier New;
			border-radius: 5px;
		
		}

		.input2
		{
			font-size: 20px;
			border-radius: 5px;
			background-color: rgba(0, 0, 0, 0);
			color: white;
		}

		.submit1
		{
			padding-top: 10px;
			padding-left: 10px;
			padding-left: 20px;
		}

		.admin1
		{
		 
			color: white;
			font-size: 45px;
			font-family: time ;
		

		}

		label
		{
			color: white;
		}

		body
		{
			background-image: url("imag07.jpg");
			background-size: 2000px;
			background-position: center;
			background-repeat: no-repeat;

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

		<center>
	
	<div class="content">

		<div class="admin1"><h1>Update Teacher Data</h1></div>
		

		

	
		<form action="admin_update_teacher.php" method="POST">

			<input type="text" name="id" value="<?php echo "{$info['id']}" ?>" hidden>


			<div class="div2">
			
			<div>
				<label class="label2">Teacher Name :</label>

				<input class="input2" type="text" name="name" value="<?php echo "{$info['name']}" ?>">
			</div>

			

			<div>
				<label class="label3">Phone :</label>

				<input  class="input2" type="text" name="phone" value="<?php echo "{$info['phone']}" ?>">
			</div>

			<div>
				<label class="label3">Email :</label>

				<input class="input2" type="text" name="email" 
				value="<?php echo "{$info['email']}" ?>">
			</div>


			<div>
				<label class="label2">description :</label>

				<textarea class="input2" name="description" > <?php echo "{$info['description']}" ?></textarea>
			</div>

			<div class="submit1">
			
			<input class="btn btn-success" type="submit" name="update_teacher">
			</div>

		</div>


		</form>
		</center>
			

		

	</div>

</body>
</html>