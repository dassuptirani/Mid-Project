<?php
if(isset($_POST['login'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$cpassword = $_POST['cpassword'];
		$gender =$_POST["gender"];
		$day =$_POST["day"];
		$month =$_POST["month"];
		$year =$_POST["year"];
		
		
		if(empty($name)==true ||empty($username)==true || empty($email)==true || empty($password) == true ||empty($cpassword) == true || empty($gender)==true ||empty($year)==true ||empty($day)==true ||empty($month)==true){
			echo "fill all!";
		}
		elseif ($password!=$cpassword) {
		echo "passwordword doesn't match";	
		}
		

		else{
            //$_POST['name'] = $name;

			$user = fopen('data.txt', 'a+');
			$data=fwrite($user, "$name"."|"."$email"."|"."$username"."|"."$password"."|"."$cpassword"."|"."$gender"."|"."$day"."/"."$month"."/"."$year"."\n");
			
	fclose($user);
		header('location: login.php');
	}
			}
		

	
		
		
		
		


?>


<!DOCTYPE html>
<html>
<head>

</head>
<body>
	 
	<table width="100%" style="border:1px solid #888;" height="100">

         
		  <tr width="100%" height="100" style="border: none;">
		  <td colspan="4" style="border-bottom:1px solid #888;">
		  <form method="POST" action="Registration.php">
		<fieldset>	
			<legend><b>REGISTRATION</b></legend>
			<table cellpadding="5px">
			<tr>
				<td>
			Username:<br><input type="text" name="name" value="">
			</td>
			</tr>
			<tr>
				<td>
			Email:<br><input type="email" name="email" value="">
			</td>
			</tr>
			<tr>
			<tr>
				<td>
			Username:<br><input type="text" name="username" value="">
			</td>
			</tr>
				<td>
			passwordword <br><input type="passwordword" name="password" value="">
			</td>
			</tr>
			<tr>
				<td>
			Confirm password<br><input type="passwordword" name="cpassword" value="">
			</td>
			</tr>
			
			<tr>
			
			
			<td style="border-top:1px solid #888;"><fieldset>
			<legend> Gender</legend>
			<input type="radio" name="gender" value="Male"/>Male
			<input type="radio" name="gender" value="Female"/>Female
			<input type="radio" name="gender" value="Other"/>Other
			</fieldset>
			</td>
			
			
			</tr>
			<tr><td><fieldset>
			<legend> Date of Birth</legend>
			<input type="text" name="day" value="">/
			<input type="text" name="month" value="">/
			<input type="text" name="year" value="">(dd/mm/yyyy)
			</fieldset>
			</td>
			</tr>
			
			<tr>
			<td style="border-top:1px solid #888;">
			<input type="submit" name="login" value="Submit"/>
			<input type="submit" name="reset" value="reset"/><br>
			Already a menmber? <a href="login.php">Log In</a>
			</td>
			</tr>
			
			</table>

		</fieldset>	


	</form>
 </td>
			
          
		  </table>
		  
          	   
</body>
</html>



