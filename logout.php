<?php
		session_start();
		session_destroy();
		//echo "Logged Out Successfully,click here to <a href='login.php'>login again</a>";


		setcookie('admin',"",time()-(86400*50));
		setcookie('doctor',"",time()-(86400*50));
		header("location:login.php");

		
?>