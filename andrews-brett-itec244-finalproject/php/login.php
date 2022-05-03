<?php

if(isset($_POST['login'])){
		
			//Capture values and store in php variables
			$email=$_POST['email'];
			$password=$_POST['pword'];
			
			include 'con_server.php';
			
			//Query the table in the database 
			$sql="SELECT * FROM member WHERE email='$email' AND pword=md5('$password')";
			
			$result=mysqli_query($con,$sql) or die("Error:".mysqli_error());
			
			$rowcount=mysqli_num_rows($result);
			
			if($rowcount==1)
			{
				
				session_start();
				$_SESSION['user']=$email;
				header('location: profile.php');
					
				
			}
			
			else
			{
				
				echo "<script>
							alert('email/password does not exist please try again');
							window.location=\"../html/login.html\";
					 </script>";	
				
			}
			mysqli_close($con);
			
}


?>