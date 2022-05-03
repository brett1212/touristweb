<?php

	if(isset($_POST['image'])){
		
		
			session_start();
		
			//Capture values and store in php variables
			$imagen=$_POST['image3'];
			$fdes=$_POST['iname'];
			$tag=$_POST['hashtags'];
			$uploader=$_SESSION["user"];
			$user;
			
			$target_dir="../img/";
			$file_name=$_FILES["image"]["name"];
			$file_size=$_FILES["image"]["size"];
			$file_tmp_name=$_FILES["image"]["tmp_name"];
			$target_file=$target_dir.$file_name;
			$file_ext=strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); //Holds the file extension
			$error=false;
		
			$field_array=array($file_name,$fdes,$uploader);
			$valid=true;
			
			
			
			//the foreach loop works here by looping through to see in it is empty if it is empty the form would be recalled.
		foreach($field_array as $field)
		{
				if(empty($field))
				{
					
					$valid=false;
					
				}
		}
		if(!$valid)
		{
			
			header('location: imageinsert.php');
			
		}
			
		
		//Check if file already exists
		if(file_exists($target_file))
		{
			
			echo "<script>
					alert('File already exists.');
					window.location=\"imageinsert.php\";
				  </script>";
			$error=true;
			
		}	
			
		//check file size
		
		if($file_size > 2000000)
		{
			
			echo "<script>
						alert('File limit of 2MB exceeded.');
						window.loaction=\"imageinsert.php\";
						</script>";
			$error=true;
			
		}
		
		
		//Allow certain file formats
		
		if($file_ext!="jpg" && $file_ext!="png"&& $file_ext!="jpeg" && $file_ext!="gif")
		{
			
			echo "<script>
						alert('Only JPG, JPEG, PNG & GIF file are allowed.');
						window.loaction=\"imageinsert.php\";
					</script>";
				$error=true;
			
		}
		
		
		//check if image file is authentic
		
		$check=getimagesize($file_tmp_name);
		if($check==false)
		{
			
			echo "<script>
						alert('File is not a real image');
						window.loaction=\"imageinsert.php\";
					</script>";
				$error=true;
			
		}
		
		
		
		//if everything is ok, try to upload and insert data into images table
		if($error==false)
		{
			
			if(move_uploaded_file($file_tmp_name, $target_file))
			{
				
				include 'con_server.php';		//connect to database
				
				$user="SELECT user FROM member WHERE email='".$_SESSION['user']."'";
				$result=mysqli_query($con,$user);
				$data=mysqli_fetch_array($result);
				$file_name='<img class="img4" src="../img/'.$_FILES["image"]["name"].'">';
				$user='Uploader: '.$data["user"];
				
				$sql="INSERT INTO images (user, image_name,	image_des, tag,	image)
				            VALUES('$user','$imagen','$fdes','$tag','$file_name')";
				
				
				
				if(mysqli_query($con, $sql))
				{
					
					echo "<script>
							alert('Insert sucessful');
							window.location=\"profile.php\";
						 </script>";
					
				}
				else
				{
					
					echo "<script>
							alert('Error inserting data into images table');
							window.location=\"imageinsert.php\";
							</script>";
					
				}
				mysqli_close($con);
			}
			else
			{
				
				echo  "<script>
						alert('There was an error uploading your file');
						window.loaction=\imageinsert.php\";
						</script>";				
			}
			
		}
		
		
			
			
			
			
			
	}

?>