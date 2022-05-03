<?php

if(isset($_POST['post'])){
		
			//Capture values and store in php variables
			$comment=$_POST['comment'];
			$id=$_POST['Id'];
			$user=$_POST['user'].'  <br><br> '.$comment;


			
			include 'con_server.php';
			
				
			
						
							//Insert data into comments_pic table
							$sql="INSERT INTO comments_pic (image_id, comments)
									VALUES('$id','$user')";
			
						if(mysqli_query($con,$sql)){
				
							mysqli_close($con);
							
							echo "<script>
								alert('Comment Posted');
								window.location=\"Browse Attractions.php\"
								</script>";
				
						}
			
						else
						{
				
							echo "<script>
								alert('Error posting comment');
								window.location=\"Browse Attractions.php\"
								</script>";
				
				
				
						}
			
			
						
					
			
}


?>