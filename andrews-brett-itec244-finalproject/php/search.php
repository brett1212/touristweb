
<!DOCTYPE html>
<html lang="en">

	<head>
	
		<meta charset="UTF-8">
		<title> Search Attractions </title>
		<link rel="stylesheet" href="../css/CNSITT.css">
	
	</head>
	
	<body>
	<div id="container5">
	<header>
		
	</header>
	
	<main>
			
	
					<ul>
						<li><a href="../index.html">Home</a></li>
						<li><a href="../php/featurea.php">Featured Attractions</a><li>
						<li><a href="../html/about.html">About Us</a><li>
						<li><a href="../html/contact.html">Contact Us</a></li>
					</ul>
					
						<br><br>
						
						
		<h1> Search Attractions </h1><br><br><br><br>
		
		<div>
					
		<?php

if(isset($_POST['sub'])){
	
	
			//Capture values and store in php variables
			$seach=$_POST['search1'];
			$space='<br><br>';
			

			include 'con_server.php';
			
			
			//Query the table in the database 
		
			
			
			$sql="SELECT * FROM images WHERE tag LIKE '%$seach%'";
			
			
			
			if($result=mysqli_query($con,$sql))
			{
				//fetch data from table images
				$data=mysqli_fetch_array($result);
				
					
				
			}
			
			else
			{
				
				echo mysqli_error($con);	
				
			}
			






}
			
            
			
			$count = mysqli_num_rows($result);


?>
			<div>
			
				
					
					<?php for ($i=0; $i<$count; $i++) 
					{
					$user = $data['user']; 
					
					$image_name =$data['image_name']; 
					$image_des=$data["image_des"];
					$image=$data["image"];
					echo $space;
					echo $user; echo $space; 
					echo $image_name; echo $space;  
					echo $image_des; echo $space;
					echo $image; 
					$data=mysqli_fetch_array($result);//fetch data and display it here?>
					
					
					
					
					<?php  }?>	
				
				<?php mysqli_close($con);?>
					
					<br> <br>
			</div>
			</div>
	
				
		</main>
				
			
		      
		
			
					
		
	</body>
	
</html>