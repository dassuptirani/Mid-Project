


<!DOCTYPE html>
<html>
<style>
body {
  background-image: url('WWue0Km.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>
<body>

<h1 align="center"style="font-size:65px;color:DodgerBlue;border: 2px solid DodgerBlue;">ADMIN'S DASHBOARD</h1>
</body>



<?php
session_start();
	echo "<font color='Crimson'>";
	echo "Welcome ".$_SESSION['username'];

?> 

<ul>


<a href="Aaccount.html"><li><h3 style="font-size:30px;color:Tomato;">My Account</h3></li></a>
<a href="BookAppointment.php"><li><h3 style="font-size:30px;color:Tomato;">Appoinment Management</h3></li></a>
<a href="AdocSCH.html"><li><h3 style="font-size:30px;color:Tomato;">Doctor's Management</h3></li></a>
<a href="APATTIENT.html"><li><h3 style="font-size:30px;color:Tomato;">Patients's Management</h3></li></a>
<a href="Atestreport.php"><li><h3 style="font-size:30px;color:Tomato;">Test Report Management</h3></li></a>

</ul></br>


<?php


	echo "<a href='logout.php'>Logout</a>";

?> 

