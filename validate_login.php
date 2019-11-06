
<?php
session_start();
$myadmin = htmlspecialchars(ltrim("admin"));
$myadminpassword = "admin";

$mydoctor = "doctor";
$mydoctorpassword = "doctor";



if(isset($_POST['login'])){
	$admin = $_POST['username'];
	$adminpassword = $_POST['password'];

	$doctor= $_POST['username'];
	$doctorpassword = $_POST['password'];

 
 
	if($myadmin==$admin &&$myadminpassword== $adminpassword){
		if(isset($_POST['remember'])){
			setcookie('admin',$admin,time()+60*60*7);
		
			}
	
	
			session_start();
			$_SESSION['username']=$doctor;
			header("location: AdminDashboard.php");
	
	
	
	}else if($mydoctor==$doctor&&$mydoctorpassword==$doctorpassword){
			if(isset($_POST['remember'])){
			setcookie('doctor','$doctor',time()+60*60*7);
			}
	
	

			$_SESSION['username']=$doctor;
			header("location: DoctorDashboard.php"); 
   
   
    }else{
		header("location: login.php?pwd_error=Password is incorrect");  
			//echo "Incorrect Password!";
	}
			
	}else
	{
		header("location: login.php");
	}

?>