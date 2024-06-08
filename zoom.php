<?php

session_start();

if(!isset($_SESSION['username'])) 
{
	header("location:login.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin Dashboard</title>
	<style type="text/css">
		body
		{
			background-image: url("img20.jpg");
			background-repeat:no-repeat;

		}
		.name
		{
			padding: 10px;
			font-size: 20px;
			padding-top: 20px;
			font-family: 'Courier New', Courier,monospace,Time;
			color: white;

		}

		.input
		{
			font-size: 20px;
			background-color: rgba(0,0,0,0);
			color: white;
			border-radius: 5px;
			text-align: center;

		}

		.input1
		{
			font-size: 20px;
			background-color: rgb(1,1,1,1);
			color: white;
			border-radius: 5px;
			text-align: center;
		}


		.submit1

		{
			padding-top: 15px;

		}

		.div
		{
			text-align: center;
			padding-right: 250px;
			color: white;
			padding-top: 50px;
			padding-bottom: 50px;
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
		<div class="div">
					<h1 class="admin">LIVE CLASS  DETAILS</h1>
		</div>

		<form action="class.php" method="POST">
		


		<center>

		<div>
			

			<form>
				
				<div>
					<label class="name">Class Name : </label>
					<input class="input" type="text" name="classname">
					
				</div>

				<div>
					<label class="name">Class Date : </label>
					<input class="input1" type="date" name="classdate">
					
				</div>



				<div>
					<label class="name">Class Timing : </label>
					<input class="input" type="Time" name="classtime">
					
				</div>

				<div class="submit1">
					 
				<input class="btn btn-primary" type="submit" name="submit">
					
				</div>

			</form>
				


		</div>
			

		

	</div>
	</center>

	</form>

</body>
</html>