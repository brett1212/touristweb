<?php

//Create and check connection to the server
			$db_host="localhost";
			$db_user="root";
			$db_password="";
			
			$con=mysqli_connect($db_host,$db_user,$db_password) or die(mysqli_connect_error());
			
			//Select the database you want to query
			mysqli_select_db($con,'tourist_attractions') or die(mysqli_error($con));
			
			
?>