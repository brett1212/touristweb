<?php

	if(isset($_POST['sub'])){
		
			//Capture values and store in php variables
			$title=$_POST['title1'];
			$feed=$_POST['feed1'];
			
			
			include 'con_server.php';  //connect to database
			
						
			//insert into the database 
			
			
			
			
				 $sql="INSERT INTO feedback(title,feed)
						VALUES('$title','$feed')";
			
			echo "<script>
							alert('Feedback Sent!!! Anymore?');
							window.location=\"../html/contact.html\"
					 </script>";
				
			
				
				
			
			if(mysqli_query($con,$sql)){
				
				mysqli_close($con);
				
				
			}
			
			else{
				
				echo "Error inserting data in the feddback table";
				
				
				
			}
			
			
			
				
			
	}

?>