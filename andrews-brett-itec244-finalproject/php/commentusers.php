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
		<title> View Attractions </title>
		<link rel="stylesheet" href="../css/CNSITT.css">
		<script src="../js/formval.js"></script>
	</head>
	
	<body>
	<div id="container4">
	<header>
		
	</header>
	
	<main>
			
	
				<ul>
					<li><a href="Browse Attractions.php">Browse Attractions</a></li>
					<li><a href="profile.php">Profile</a><li>
					<li><a href="imageinsert.php">Post Attractions</a><li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
					
						<br><br>
						
						
		<h1> Trinidad and Tobago Attractions </h1><br><br><br><br>
		
					
		
		
		<br><br><br>
		
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
			$user="SELECT user FROM member WHERE email='".$_SESSION['user']."'";
			$result1=mysqli_query($con,$user);
			$data1=mysqli_fetch_array($result1);
			$user='User: '.$data1["user"];
			
			if($result1=mysqli_query($con,$sql1))
			{
				//fetch data from table images
				$data1=mysqli_fetch_array($result1);
				
					
				
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
					
					
					
					<?php echo $data["image"]; //fetch data and display it here?><br><br>
					
					<legend>COMMENTS:</legend><br><br>
					
					<?php for ($i=0; $i<$count; $i++) {
					$summary = $data1['comments']; echo $summary; echo $space;  $data1=mysqli_fetch_array($result1);//fetch data and display it here?>
					
					
					
					
					<?php  }?>	
				
				<?php mysqli_close($con);?>
				<br><br>
				
				<form method="post" action="insertcomm.php" onsubmit="return comment();">
					<label> Post a comment: </label>
				<textarea id="com" name="comment" rows="5" cols="30"></textarea>
				<input type="hidden" name="Id" value="<?php echo $data["image_id"];?>">
				<input type="hidden" name="user" value="<?php echo $user;?>">
				
				<input type="submit" name="post" value="POST">
				</form>
				
					
			</div>		
				
				
				
				

		</div>
		
		
				
				
		</main>
				
			
				      
		
			
					
		
	</body>
	
</html>