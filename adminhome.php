<?php
error_reporting(0);
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
	
	<?php
	include 'admin_css.php';

	?>

</head>
<body>
	

	<?php
	include 'zoom.php';
	?>
	
	<div class="content">
		
			

		

	</div>

</body>
</html>