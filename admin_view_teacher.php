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

$sql="SELECT * FROM teacher";


$result=mysqli_query($data,$sql);

if($_GET['teacher_id'])

{
	$t_id=$_GET['teacher_id'];

	$sql2="DELETE  FROM teacher WHERE id='$t_id' ";

	$result2=mysqli_query($data,$sql2);

	if($result2)

	{
		header('location:admin_view_teacher.php');
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin Dashboard</title>
	<style type="text/css">

		.table_teacher
	{
		font-family:'Courier New', Courier,monospace ;
		font-size: 20px;
		padding: 10px;
		background-color:  #dfd3c3;
		text-align: center;
	}

	.table_td
	{
		padding: 10px;
		color:#ececec ;
		font-family:'Times New Roman', serif ;
		font-size: 20px;
		text-align: center;
	}

	.admin1
	{
		padding-left: 450px;
		padding-bottom: 50px;
		padding-top:20px;
		font-family:'Courier New', Courier,monospace ;
		color: white;
		font-size: 50px;


	}

	.div1
	{
		padding-left: 200px;
	}

	label
		{
			color: white;
		}

		body
		{
			 
			background-image: url("imag06.jpg");
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
	
	
	
		

		<h1 class="admin1" >View All Teacher Data</h1>

		<div class="div1">

		<center>
		<table border="2px">
			

			<tr>
				
				<th class="table_teacher" >Teacher name</th>

				<th class="table_teacher">Description</th>

				<th class="table_teacher">phone</th>

				<th class="table_teacher">email</th>

				<th class="table_teacher">Delete</th>

				<th class="table_teacher">Update</th>
			</tr>

			</tr>

			
			<?php
			while($info=$result->fetch_assoc())

			{






			?>


			<tr>
				<td class="table_td"><?php echo "{$info['name']}"; ?>
</td>
				
				<td class="table_td"><?php echo "{$info['description']}"; ?>
</td>
				
				<td class="table_td"><?php echo "{$info['phone']}"; ?>
</td>
				
				<td class="table_td"><?php echo "{$info['email']}"; ?>

				<td class="table_td">

					<?php

					echo "
					<a onClick=\" javascript:return confirm('Are Your Sure to Delete This');\" class='btn btn-danger' href='admin_view_teacher.php?teacher_id={$info['id']}'>
					Delete
					</a>";
					?>
				</td>

				<td class="table_td">
					<?php

					echo "

					<a 
					href='admin_update_teacher.php?teacher_id={$info['id']}' class='btn btn-primary' >Update <a/>";
					

					?> 
				
				</td> 

 	

			</tr>

			<?php

		}

			?>

		</table>
			

		

	</div>

	</center>

</body>
</html>