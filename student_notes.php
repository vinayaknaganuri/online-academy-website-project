 <?php

session_start();
if (!isset($_SESSION['username'])) 
{
	header("location:login.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>My Class Notes</title>

	<?php

	include 'student_css.php'
	
	?>
	<style type="text/css">
		.notes
		{
			padding-top: 5px;
			padding-bottom: 10px;
			font-size: 35px;
			font-family: 'Courier New', Courier,monospace ;
			

		}

		.th_notes
		{
			padding: 10px;
			text-align: center;
			font-size: 20px;
			font-family: 'Courier New', Courier,monospace ;
			background-color: #fdffcd;
		}

		.td_notes
		{
			padding: 10px;
			text-align: center;
			font-size: 20px;
			font-family: 'Courier New', Courier,monospace ;
			color: white;


		}

		
	
		.tab
		{
			padding-top: 15px;
		}

		
		.not
		{
			background-color: #f3d7ca;
			width: 750px;
			border-radius: 5px;
		}
		
		body
		{
			background-image: url("note.jpg");
		 	width: 100%;
		}

		

	</style>

	

	

</head>
<body>
	<div><?php

	include 'student_sidebar.php'

	?>
		
	</div>
	

	<center>
		
		<div class="not">
			<h1 class="notes"> Class Notes And Softwares Links  </h1>
		</div>
	</center>




	
		

		<center>
				 

	<table  border="2px" >

		
		

		<div class="tab">

		<tr>
			<th class="th_notes">Subject  Name</th>
			<th class="th_notes">Notes</th>
			<th class="th_notes">Software  Links</th>
		</tr>

		<tr>
			<td class="td_notes">HTML</td>
			<td class="td_notes"><a href="https://github.com/vinayaknaganuri/HTML-NOTES.git" >Download</a></td>
			<td class="td_notes"><a href="https://code.visualstudio.com/" >Download For HTML</a></td>		
		</tr>

		<tr>
			<td class="td_notes">CSS</td>
			<td class="td_notes"><a href="https://github.com/vinayaknaganuri/CSS_NOTES.git" >Download</a></td>
			<td class="td_notes"><a href="https://code.visualstudio.com/" >Download For CSS</a></td>		
		</tr>

		<tr>
			<td class="td_notes">Javascript</td>
			<td class="td_notes"><a href="https://github.com/vinayaknaganuri/javascript.git" >Download</a></td>
			<td class="td_notes"><a href="" >Download For JavaScript</a></td>	
		</tr>

		<tr>
			<td class="td_notes">Mysql</td>
			<td class="td_notes"><a href="https://github.com/vinayaknaganuri/Mysql.git" >Download</a></td>
			<td class="td_notes"><a href="https://dev.mysql.com/downloads/installer/" >Download For Mysql</a></td>	
		</tr>

		<tr>
			<td class="td_notes">Php</td>
			<td class="td_notes"><a href="https://github.com/vinayaknaganuri/Php.git" >Download</a></td>
			<td class="td_notes"><a href="https://windows.php.net/download#php-8.2" >Download For Php</a></td>
		</tr>
		<tr>
			<td class="td_notes">Java</td>
			<td class="td_notes"><a href="https://github.com/vinayaknaganuri/Java.git" >Download</a></td>
			<td class="td_notes"><a href="https://www.java.com/en/download/manual.jsp" >Download For Java</a></td>
		</tr>
		<tr>
			<td class="td_notes">Python</td>
			<td class="td_notes"><a href="https://github.com/vinayaknaganuri/Python.git" >Download</a></td>
			<td class="td_notes"><a href="https://www.python.org/downloads/" >Download For Python</a></td>
		</tr>

		</div>
		

	</table>
	</center>


	

</body>
</html>