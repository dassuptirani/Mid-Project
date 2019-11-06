<?php

	session_start();
	if(isset($_SESSION['username']))
	{

	$specialization="";
	$Doctor="";
	$consultingfees="";
	$date="";
	$time="";
	if(isset($_REQUEST['submit']))
	{   
		
		echo "specialization:<br>";
		$specialization = $_REQUEST['specialization'];
		echo $specialization."<br><br>";

		echo "Doctor:<br>";
		$Doctor = $_REQUEST['Doctor'];
		echo $Doctor."<br><br>";
		
		echo "Total fees:<br>";
		$consultingfees = $_REQUEST['consultingfees'];
		echo $consultingfees."<br><br>";		
		
		echo "Appointment date:<br>";
		$date = $_REQUEST['date'];
		echo $date."<br><br>";
		
		echo "Appointment time:<br>";
		$time = $_REQUEST['time'];
		echo $time."<br>";
		

	}
	
	}
	else{
		header('location: login.php');
	}	
	
?>

<html>
	<body bgcolor=" #ccddff">
	<table>
	<br/><tr>
			<td><a href="index.html">HomePage</a></td>
			<td></td><td></td><td></td><td></td>
			<td><a href='logout.php' style="color:red;">Logout</a></td>
			<td></td><td></td><td></td><td></td>
			<td><a href='BookAppointment.php' style="color:red;">PreviousPage</a></td>
	</tr>
	</table>
</body>
</html>