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
	
	<link rel="stylesheet" href="../css/CNSITT.css">
	<script src="../js/formval.js"></script>
	
		<title> Upload  </title>
		
	</head>

	<body>	
		<main>
		<div id="container1">

				
				<ul>
					<li><a href="Browse Attractions.php">Browse Attractions</a></li>
					<li><a href="profile.php">Profile</a><li>
					<li><a href="edit.php">Update Profile</a><li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
					
						<br><br><br><br>
						
				<h1> If you like please upload your best images to display</h1><br><br>
			
			<form method="post" action="image.php" enctype="multipart/form-data" onsubmit="return vimages();">
				
					<fieldset>
		
		
					<legend>Upload an image:</legend>
			
					<label> Enter Image Name: </label> 				
					<input type="text" id="image2" name="image3"  size="35"><br> <br> <br>
						
					<label> Enter Image Descrpition: </label> 				
					<textarea id="iname1" name="iname" rows="5" cols="30"></textarea> <br> <br> <br>
				
					<label> Enter Image Hashtags: </label>
					<input type="text" id="tags" name="hashtags">
				
					<label> upload: </label> 
						<input type="file" id="image1" name="image"> <br> <br> <br>
			
					
				
					<input type="submit" name="image" value="UPLOAD"> &nbsp; &nbsp;
					<input type="reset" value="RESET">	<br><br>
				  
				
			
					</fieldset>
		
					</form>
					
		
			
			</div>
		
		</main>	
		
	</body>
	
</html>