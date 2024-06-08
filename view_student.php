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

$sql="SELECT *FROM user WHERE usertype='student'";


$result=mysqli_query($data,$sql)

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Student Data</title>
	<style type="text/css">

	.STUDENT_DATA
	{
		font-family:'Courier New', Courier,monospace ;
		color: white;
		font-size: 55px;
	}


	.table_th
	{
		font-family:cursive ;
		text-align: center;
		font-size: 15px;
		padding: 20px;
		background-color:  #dfd3c3;
	}

	.table_td
	{
		padding: 20px;
		font-family: time;
		font-size: 19px;
		color: white;
	}

	.red
	{
		padding: 20px;
		font-family: time;
		font-size: 19px;
		color: red;
	}

	label
		{
			color: white;
		}

		body
		{
			background-image: url("imag09.jpg");
			background-size: 2000px;
			background-position: center;
			background-repeat: no-repeat;

		}

		.content
		{
			padding-left: 200px;
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
		<h1 class="STUDENT_DATA">Student Data</h1>

		<?php
		if($_SESSION['message'])
		{

			echo $_SESSION['message'];
		}

		unset($_SESSION['message']);

		?>

		<table border="4px">

			<tr>
				<th class="table_th">Username</th>
				<th class="table_th">Phone</th>
				<th class="table_th">Email</th>
				<th class="table_th">Password</th>
			
				<th class="table_th">Delete</th>
			

				<th class="table_th">Update</th>
			</tr>



			<?php
			while ($info=$result->fetch_assoc()) 
			{
			

			?>

			<tr>
				<td class="table_td">
					<?php echo "{$info['username']}"; ?>
				</td>
				<td class="table_td"> 
					<?php echo "{$info['phone']}"; ?></td>
				<td class="table_td">
					<?php echo "{$info['email']}"; ?>
				</td>
				<td class="table_td"><?php echo "{$info['password']}"; ?></td>

				<td class="red"><?php echo "<a onClick=\" javascript:return confirm('Are Your Sure to Delete This');\" class='btn btn-danger' href='delete.php?student_id={$info['id']}'>Delete </a>"; ?></td>

				<td class="table_td"><?php echo "<a class='btn btn-primary' href='update_student.php?student_id={$info['id']}'>Upadate</a>"; ?>
					
				</td>

			</tr>

			<?php

			}


			?>

		</table>
			

		
</center>
	</div>

</body>
</html>