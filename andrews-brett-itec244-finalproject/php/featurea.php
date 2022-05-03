
<!DOCTYPE html>
<html lang="en">

	<head>
	
		<meta charset="UTF-8">
		<title> View Attractions </title>
		<link rel="stylesheet" href="../css/CNSITT.css">
	
	</head>
	
	<body>
	<div id="container4">
	<header>
		
	</header>
	
	<main>
			
	
					<ul>
						<li><a href="../index.html">Home</a></li>
					
						<li><a href="../html/about.html">About Us</a><li>
						<li><a href="../html/contact.html">Contact Us</a></li>
					</ul>
					
						<br><br>
						
						
		<h1> Trinidad and Tobago Attractions </h1><br><br><br><br>
		
		<p>Want to be apart of our family then please <a href="insert.php">sign up here</a>. Already a part of the family then please <a href="../html/login.html">login here</a>.</p>
		
		<div id="div1">
					
		<?php

			include 'con_server.php';
			
			
			//Query the table in the database 
		
			$sql1="SELECT MAX(image_id) FROM images";
			$result1=mysqli_query($con,$sql1);
			$data1=mysqli_fetch_array($result1);
			$id=$data1["MAX(image_id)"];
			
			$sql="SELECT * FROM images WHERE image_id=$id";
			
			
			
			if($result=mysqli_query($con,$sql))
			{
				//fetch data from table images
				$data=mysqli_fetch_array($result);
				mysqli_close($con);
					
				
			}
			
			else
			{
				
				echo mysqli_error($con);	
				
			}
			









?>
			<div id="left">
			
				
					<?php
					
					echo $data["user"];  //fetch data and display it here
					
					?> <br> <br>
					
					
					<?php
					
					echo $data["image_name"];  //fetch data and display it here
					
					?> <br> <br>
			
				
					
					<?php
					
					 echo $data["image_des"];  //fetch data and display it here
					
					?> <br> <br>
					
					
					
					<?php echo $data["image"]; //fetch data and display it here?>
					
					
					
					<br> <br>
			</div>
			
						<?php

			include 'con_server.php';
			
			
			//Query the table in the database 
			$sql="SELECT * FROM images WHERE image_id=$id-1";
			
			
			
			if($result=mysqli_query($con,$sql))
			{
				//fetch data from table images
				$data=mysqli_fetch_array($result);
				mysqli_close($con);
					
				
			}
			
			else
			{
				
				echo mysqli_error($con);	
				
			}
			









?>	
				<div id="right">	
				
				
				
					
					<?php
					
					echo $data["user"];  //fetch data and display it here
					
					?> <br> <br>
					
					
					<?php
					
					echo $data["image_name"];  //fetch data and display it here
					
					?></a> <br> <br>
			
				
				
					<?php
					
					 echo $data["image_des"];  //fetch data and display it here
					
					?> <br> <br>
					
					
					
					<?php echo $data["image"]; //fetch data and display it here?>
					
					
					<br> <br>
					
				</div>	
					
				<?php

			include 'con_server.php';
			
			
			//Query the table in the database 
			$sql="SELECT * FROM images WHERE image_id=$id-2";
			
			
			
			if($result=mysqli_query($con,$sql))
			{
				//fetch data from table images
				$data=mysqli_fetch_array($result);
				mysqli_close($con);
					
				
			}
			
			else
			{
				
				echo mysqli_error($con);	
				
			}
			









?>

			<div id="left">
			
			<br><br><br><br><br><br><br><br><br><br><br><br>
			
			
					
					<?php
					
					echo $data["user"];  //fetch data and display it here
					
					?> <br> <br>
					
					
					<?php
					
					echo $data["image_name"];  //fetch data and display it here
					
					?></a> <br> <br>
			
				
					
					<?php
					
					echo $data["image_des"];  //fetch data and display it here
					
					?> <br> <br>
					
					
				
					<?php echo $data["image"]; //fetch data and display it here?>
					
					
					<br> <br>
					
					
					
			</div>	
				
				
				
			<?php

			include 'con_server.php';
			
			
			//Query the table in the database 
			$sql="SELECT * FROM images WHERE image_id=$id-3";
			
			
			
			if($result=mysqli_query($con,$sql))
			{
				//fetch data from table images
				$data=mysqli_fetch_array($result);
				mysqli_close($con);
					
				
			}
			
			else
			{
				
				echo mysqli_error($con);	
				
			}
			









?>

			<div id="right">
		

			<br><br><br><br><br><br><br><br><br><br><br><br>
			
					
					<?php
					
					echo $data["user"];  //fetch data and display it here
					
					?> <br> <br>
					
					
					<?php
					
					echo $data["image_name"];  //fetch data and display it here
					
					?></a> <br> <br>
			
				
					
					<?php
					
					echo $data["image_des"];  //fetch data and display it here
					
					?> <br> <br>
					
					
					
					<?php echo $data["image"]; //fetch data and display it here?>
					
					
					<br> <br>
					
					
					
			</div>		
				
				
				
				

		</div>
				
		</main>
				
			
				      
		
			
					
		
	</body>
	
</html>