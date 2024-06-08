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
$sql="SELECT * from notes";

$result=mysqli_query($data,$sql);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>LIVE CLASS DETAILS</title>
	

	<?php
	include 'admin_css.php';

	?>

	<style type="text/css">
		body
		{
			background-image: url("imag09.jpg");
			background-size: 2000px;
			background-position: center;
			background-repeat: no-repeat;

		}





	</style>

</head>
<body>
	<?php
	include 'student_sidebar.php';
	?>

	<div class="content">
		
		<center>

		<h1 class="apply" style="padding-left: 20px ;font-family: 'Courier New', Courier, monospace ; color: white">LIVE CLASS DETAILS</h1>
			
			<br>

			<br>

		<table  border=2px; style="border-collapse: collapse; margin: 25px 0; font-size: 0.9em; font-family: 'Courier New', Courier, monospace ; min-width: 400px;  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);">
			
			<tr style=" background-color: #009879;color: #ffffff; text-align: left;">
				<th style="padding: 20px;font-size: 15px;">Class Name</th>

				<th style="padding: 20px;font-size: 15px;">Class Date</th>

				<th style="padding: 20px;font-size: 15px;">Class Timing</th>

			</tr>

			<?php

			while($info=$result->fetch_assoc())
			{
			?>

			<tr>
				
				<td style="padding: 20px;font-size: 15px; color: white"><?php echo "{$info['classname']}";?> </td>
				


				<td style="padding: 20px;font-size: 15px;color: white">
				<?php echo "{$info['classdate']}";?> </td>


				<td style="padding: 20px;font-size: 15px; color: white">
				<?php echo "{$info['classtime']}";?> </td>



			</tr>

			<?php



		}
			?>




		</table>
		</center>

	</div>

</body>
</html>