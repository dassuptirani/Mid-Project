<?php
	
	session_start();
	if(isset($_SESSION['username']))
	{
?>

<!DOCTYPE html>
<html>
<head>
	<title> Appointment Management</title>
</head>
	<body bgcolor=" #ccddff">
	<h1 style="color: #003399; text-size:30px;">Appoinment Management</h1>
		<form  method="POST" action="ShowBookAppointment.php">
			<fieldset  style="width:35%; height:80%;" >
				<table >
					<tr>
						Appoinment Management
					</tr><br/><br/>
					<tr style="font-size:10px;">
						Doctor specialization
					</tr><br/>
					<tr>
						<select style="font-size:20px; width:500px;" name="specialization">
							<option style="font-size:20px;" value="Select Specialization">Select Specialization</option>
							<option style="font-size:20px;" value="BARIATRIC AND METABOLIC DIET AND PHYCLOGY">BARIATRIC AND METABOLIC DIET AND PHYCLOGY</option>
							<option style="font-size:20px;" value="CARDIAC ELECTROPHYSIOLOGY AND HEART FAILURE">CARDIAC ELECTROPHYSIOLOGY AND HEART FAILURE</option>
							<option style="font-size:20px;" value="GASTRO ENTROLOGY">GASTRO ENTROLOGY</option>
							<option style="font-size:20px;" value="NEUROLOGY">NEUROLOGY</option>
							<option style="font-size:20px;" value="PHYSICAL MEDICINE">PHYSICAL MEDICINE</option>
							<option style="font-size:20px;" value="GENERAL AND LAP SURGERY">GENERAL AND LAP SURGERY</option>
						</select>
					</tr><br/><br/>
					
					<tr style="font-size:10px;">
						Doctor name
					</tr><br/>
					
					<tr>
						<select style="font-size:20px; width:500px;" name="Doctor">
							<option style="font-size:20px;" value="">Select Doctor</option>
							<option style="font-size:20px;" value="ABC">ABC</option>
							<option style="font-size:20px;" value="DEF">DEF</option>
							<option style="font-size:20px;" value="XXX">XXX</option>
							<option style="font-size:20px;" value="UUU">UUU</option>
							<option style="font-size:20px;" value="MMM">MMM</option>
							<option style="font-size:20px;" value="KKK">KKK</option>
						</select>
					</tr><br/><br/>
					
					<tr style="font-size:25px;">
						Consulting fees
					</tr><br/>
					<tr>
						<input type="" name="consultingfees" size="50" placeholder="*****" style="font-size:25px; width:500px;"/>
					</tr><br/><br/>
					<tr style="font-size:10px;">Date</tr><br/>
					<tr><input type="date" name="date" style="font-size:25px; width:500px;"><br/><br/>
					<tr style="font-size:10px;">Time</tr><br/>
					<tr><input type="time" name="time" style="font-size:25px; width:500px;"><br/><br/>
					<tr>
						<td style="width:250px;"><input type="submit" name="submit" style="width:80px; background-color:blue; color:white;"></td>
						<td style="width:250px; align:right;"><a href="AdminDashboard.php" style="color:Blue;">PreviousPage</a></td>
					</tr>
				</table>
			</fieldset>
		</form>
	</body>
</html>

<?php		
	}
	else{
		header('location: login.php');
	}

?>