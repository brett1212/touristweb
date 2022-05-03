<?php

	session_start();

	if(!isset($_SESSION['user']))
	{
		
		header("location:../html/login.html");
		
	}


?>
<!DOCTYPE html>
<html lang="en">

	<head>
	
		<meta charset="UTF-8">
		<title> View Profile </title>
		<link rel="stylesheet" href="../css/CNSITT.css">
	</head>
	
	<body>
		<div id="container1">
	<header>
		<h1> WELCOME <BR><BR> PROFILE INFORMATION </h1>
		
	</header>
	
	<main>
		
		
		<?php

			include 'con_server.php';
			
			
			//Query the table in the database 
			$sql="SELECT * FROM member WHERE email='". $_SESSION['user']. "'";
			
			
			
			if($result=mysqli_query($con,$sql))
			{
				
				$data=mysqli_fetch_array($result);
				mysqli_close($con);
					
				
			}
			
			else
			{
				
				echo mysqli_error($con);	
				
			}
			

?> 
			
		
				<ul>
					<li><a href="Browse Attractions.php">Browse Attractions</a></li>
					<li><a href="edit.php">Update Profile</a><li>
					<li><a href="imageinsert.php">Post Attractions</a><li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			
			<label> Title: </label> &nbsp; &nbsp;
					<?php
					
					echo $data["title"];
					
					?> <br> <br>
			
				
			<label> First Name: </label>  &nbsp; &nbsp;
					<?php
					
					echo $data["fname"];
					
					?> <br> <br>
					
			<label> Last Name: </label>  &nbsp; &nbsp;
					<?php
					
					echo $data["lname"];
					
					?> <br> <br>
			
			<label> Address: </label>   &nbsp; &nbsp;
					<?php
					
					echo $data["address"];
					
					?> <br> <br>
			
			<label> Gender: </label>  &nbsp; &nbsp;
					<?php
					
					echo $data["gender"]; 
					
					?> <br> <br>
			
			<label> Vacation Hobbies: </label> &nbsp; &nbsp;
					<?php
					
					echo $data["vhobby"]; 
					
					?> <br> <br>
			
			<label> Username: </label> &nbsp; &nbsp;
					<?php
					
					echo $data["user"]; 
					
					?> <br> <br>
			
			<label> Email: </label> &nbsp; &nbsp;
					<?php
					
					echo $data["email"];
					
					?> <br> <br>
			
			
			
			
	</main>
				
			
				      
		
			
					
		</div>
	</body>
	
</html>