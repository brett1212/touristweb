
<!DOCTYPE html>
<html lang="en">

	<head>
	
		<meta charset="UTF-8">
		<title> View Attractions </title>
		<link rel="stylesheet" href="../css/CNSITT.css">
		
	</head>
	
	<body>
	<div id="container2">
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
		
					
				
			<?php


			include 'con_server.php';
			
			
			//Query the table in the database 
			$val = $_GET["val"];
			$sql="SELECT * FROM images WHERE image_id=$val";
			$space='<br><br>';
			
			
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
			include 'con_server.php';
			$sql1="SELECT comments FROM comments_pic WHERE image_id=$val";
			
			if($result1=mysqli_query($con,$sql1))
			{
				//fetch data from table images
				$data1=mysqli_fetch_array($result1);
				mysqli_close($con);
					
				
			}
			
			else
			{
				
				echo mysqli_error($con);	
				
			}

    
			$count = mysqli_num_rows($result1);
			
				





?>

			<div>
			
			
			
					<?php
					
					echo $data["user"];  //fetch data and display it here
					
					?> <br> <br>
					
					
					<?php
					
					echo $data["image_name"];  //fetch data and display it here
					
					?><br> <br>
			
			
			
					<?php
					
					echo $data["image_des"];  //fetch data and display it here
					
					?> <br> <br>
					
					
		
					<?php echo $data["image"]; //fetch data and display it here?>
					
					<br> <br>
					

					<?php for ($i=0; $i<$count; $i++) {
					$summary = $data1['comments']; echo $summary; echo $space; $data1=mysqli_fetch_array($result1); //fetch data and display it here?>
					
					
					
					
					<?php  }?>
					
					<br> <br>
					
					
				
			</div>		
				
				
				
				

		</div>
				
		</main>
				
			
				      
		
			
					
		
	</body>
	
</html>