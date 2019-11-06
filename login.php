<?php

if(isset($_COOKIE['admin']))
{
	header("location: AdminDashboard.php");
}else if(isset($_COOKIE['doctor']))
{
	header("location: DoctorDashboard.php");
}
?>

<?php
if(isset($_POST['login'])){
		$uname = $_POST['username'];
		$pass = $_POST['password'];
		
		
		if(empty($username) == true || empty($password) == true){
			echo "fill all!";
		}
		else{
            $name='data.txt';
	$read = fopen($name, 'r');
	
		$fetch = fread($read, filesize($name));
	fclose($read);
	$lines=explode("\n", $fetch);
	foreach ($lines as $line) {
		$user = explode("|", $line);
	
		if($user[2] == $username && $user[3] == $password){

					setcookie("name", $user[0], time()+3600, "/");
			$_SESSION['name']=$user[0];
				header("location: AdminDashboard.php");
		}

		
		

	}	
	
	}
	
	
	}

?>








<!DOCTYPE HTML>
<html>
<head>
	<title>Login as Admin or Doctor</title>
<style type="text/CSS">
	body{
		background-image:URL(1.jpg);
		background-size:cover;	
		background-attachment:fixed;
	}
</style>	
</head>
<body>
	




<form method="POST" action="validate_login.php" size="20">

<fieldset style="background-color:#F5F5F5; width: 30%;">
				<legend style="font-size:20px; color:blue;">Login Here As Admin Or As Doctor</legend>
					<table align="center" border="0" align="top" >

<form method="POST" action="validate_login.php">
<p>Username</p>
<input placeholder="USERNAME" type="text" name="username" align="center"/></br>
<p>Password</p>
<input placeholder="PASSWORD" type="password" name="password"/></br></br>

<input type="checkbox" name="remember" value="1" >Remember Me</br></br>
<input type="submit" value="Login" name="login"/></br></br>


<a href="index.html" style="color:DodgerBlue;" align="center"> PortalHomepage</a>
</form>
<?php

if(  isset($_REQUEST["pwd_error"]) ){
	echo $_REQUEST["pwd_error"];
	
}

?>


</body>
	
</html> 

