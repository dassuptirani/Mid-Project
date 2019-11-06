


<!DOCTYPE html>
<html>
<style>
body {
  background-image: url('ste.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>
<body>
<h1 align="center"style="font-size:65px;color:Tomato;border: 2px solid Tomato;">DOCTOR'S DASHBOARD</h1>
</body>



<?php

	session_start();
	echo "<font color='White'>";
	echo "Welcome ".$_SESSION['username'];

?> 

<ul>

<a href="Dmyaccount.html"><li><h1 style="font-size:30px;color:Tomato;">My account</h1></li></a>
<a href="Dmyappoinments.html">
<li><h1 style="font-size:30px;color:Tomato;">My Appoinments</h1></li></a>

<a href="DVisitingTime.php"><li><h1 style="font-size:30px;color:Tomato;">Visiting Time</h1></li></a>
<a href="DPatientsHistory.php"><li><h1 style="font-size:30px;color:Tomato;">Patients History</h1></li></a>
<a href="DAddPrescription.php"><li><h1 style="font-size:30px;color:Tomato;">Add Prescription's</h1></li></a>
<a href="DViewPatient.php"><li><h1 style="font-size:30px;color:Tomato;">View Patient's Profile</h1></li></a>

</ul></br>


<?php


	echo "<a href='logout.php'>Logout</a>";

?> 
