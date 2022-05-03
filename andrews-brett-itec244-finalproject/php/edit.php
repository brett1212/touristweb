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
		<title> SIGN UP  </title>
		
	</head>
	
	<body>	

		<div id="container1">
			<header>
			
		
			
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
			
			
			<?php 
		
			//Define variables and set to empty values

			    $title='';      $titleErr='';
				$fname='';      $fnameErr='';
				$lname='';      $lnameErr='';
				$address='';    $addressErr='';
				$gender='';     $genderErr='';
				$vhobby='';     $vhobbyErr='';
				$user='';      	$userErr='';
				$email='';      $emailErr='';
				$pword='';      $pwordErr='';
				$cpword='';     $cpwordErr='';
			
			
			if ($_SERVER["REQUEST_METHOD"]=="POST")
			{
			
			
			
			
				if(empty($_POST["title"]))	
					{
						
						$titleErr="Please pick a title";
						
					}
				else
					{
						
						$title=test_input($_POST["title"]);
						
					}
			
			
				if(empty($_POST["fname"]))
					
					{
						
						$fnameErr="Please enter a First Name";
						
					}
				else
				{
					
					$fname=test_input($_POST["fname"]);
					
					if(!preg_match("/^[a-zA-Z\s\-]+$/",$fname))
						
						{
							
							$fnameErr="Only letters, whitespaces and hyphens allowed";
							
						}
					
				}
				
				
				if(empty($_POST["lname"]))
					
					{
						
						$lnameErr="Please enter a Last Name";
						
					}
				else
				{
					
					$lname=test_input($_POST["lname"]);
					
					if(!preg_match("/^[a-zA-Z\s\-]+$/",$lname))
						
						{
							
							$lnameErr="Only letters, whitespaces and hyphens allowed";
							
						}
					
				}
				
				if(empty($_POST["address"]))
				{
					
					$addressErr="Please enter an Address";
					
				}
				else
				{
					
					$address=test_input($_POST["address"]);
					
				}
				
				
				if (empty($_POST["gender"]))
				{
					
					$genderErr="Please select a Gender";
					
				}
				else
				{
						
						$gender=test_input($_POST["gender"]);
						
				}
				
				
				if(empty($_POST["vhobby"]))					
					{
						
						$vhobbyErr="Please choose at least one hobby";
						
					}
					
					else
					{
						
						$vhobby=test_input(join(", ",$_POST['vhobby']));
						
					}
				
				
				
				if(empty($_POST["user"]))
				{
					
					$userErr="Please enter a Username";
					
				}
				else
				{
					
					$user=test_input($_POST["user"]);
					
				}
				
				
				if(empty($_POST["email"]))
				{
					
					$emailErr="Please enter an Email";
					
				}
				else
				{
					
					$email=test_input($_POST["email"]);
					
				}
				
				if(empty($_POST["pword"]))
				{
					
					$pwordErr="Please enter a password";
					
				}
				else
				{
					
					$pword=test_input($_POST["pword"]);
					
				}
				
				
				
				
				
					
		
					
				if(!empty($title)&&!empty($fname)&&!empty($lname)&&!empty($address)&&!empty($gender)&&!empty($vhobby)&&!empty($user)&&!empty($email)&&!empty($pword))
				{
					
								include 'con_server.php';
			
						//Query the table in the database 
						$sql="SELECT email,pword FROM member WHERE email='$email' AND pword=md5('$pword')";
			
			
			
			
						if($result=mysqli_query($con,$sql))
						{
				
							$rowcount=mysqli_num_rows($result);
				
							if($rowcount==1)
							{
		
								//Update data into member table
								$sql="UPDATE member
									SET title='$title', fname='$fname', lname='$lname', address='$address', gender='$gender', vhobby='$vhobby', user='$user'
									WHERE email='$email'";
					
						
									if(mysqli_query($con,$sql))
									{
							
										mysqli_close($con);
							
										echo "<script>
											alert('Update Successful');
											window.location=\"profile.php\"
											</script>";
					
				
									}							
									else
									{
				
				
				
										echo "<script>
											alert('Update Unsuccesful');
											window.location=\"profile.php\"
											</script>";
									}
						
							}
				
							else
							{
					
					
								echo "<script>
									alert('Password incorrect');
									window.location=\"edit.php\"
									</script>";
					 
							}
					 
						}
			
					else
					{
				
						mysqli_error($con);
				
					}
				}
			}
			
			function test_input($data)
			{
				
				$data=trim($data);// removes whitespaces or other characters from both sides of a string
				$data=stripslashes($data); //unquotes a string quoted with addslashes(). removes backslashes (\) from the user input data
				$data=htmlspecialchars($data); //converts some predefined characters to html entities
				return $data;
				
			}
		
		?>
		
		
				<ul>
					<li><a href="Browse Attractions.php">Browse Attractions</a></li>
					<li><a href="profile.php">Profile</a><li>
					<li><a href="imageinsert.php">Post Attractions</a><li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
					
					<h1> UPDATE PROFILE </h1>
					
					<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return Validateform();">
				
					<fieldset>
		
		
					<legend> User Personal Information </legend>
			
					<label> Title: </label>
					
						<select id="title" name="title">
						
							<option value="<?php
					
					echo $data["title"];
					
					?>"> <?php
					
					echo $data["title"];
					
					?> </option>
							<option  value="Ms.">Ms.</option>
							<option  value="Mr.">Mr.</option>
							<option  value="Mrs.">Mrs.</option>					
						</select> 
                        <span class="errorMsg"> <?php echo $titleErr;?> </span>	<br><br>
						
					<label> First Name: </label>
						<input type="text" id="fname" name="fname" value="<?php echo $data["fname"]; ?>" size="25">
						<span class="errorMsg"> <?php echo $fnameErr;?> </span><br><br>
				
					<label> Last Name: </label> 
						<input type="text" id="lname" name="lname" value="<?php echo $data["lname"]; ?>" size="25"> 
						<span class="errorMsg"> <?php echo $lnameErr;?> </span><br> <br> 
			
					<label> Tell us a little about yourself: </label>  
						<textarea id="address" name="address" rows="5" cols="30"><?php echo $data["address"]; ?></textarea> 
						<span class="errorMsg"> <?php echo $addressErr;?> </span><br> <br> 
			
					<label> Gender: </label> 
						Male <input type="radio" id="m_sex" name="gender" value="Male" <?php if($data["gender"]=="Male"){echo 'checked="checked"';} ?>>
						Female <input type="radio" id="f_sex" name="gender"  value="Female" <?php if($data["gender"]=="Female"){echo 'checked="checked"';} ?>> 
						<span class="errorMsg"> <?php echo $genderErr;?> </span><br> <br> <br>
			
					<label> Vacation Hobbies: </label> 
						Hiking <input type="checkbox" id="r_hobby" name="vhobby[]"  value="Hiking" <?php if(strpos($data["vhobby"],"Hiking")!==false){echo'checked="checked"';}?>> &nbsp;
						Swimming <input type="checkbox" id="r_hobby1" name="vhobby[]"  value="Swimming" <?php if(strpos($data["vhobby"],"Swimming")!==false){echo'checked="checked"';}?>> &nbsp;
						Taking Photos <input type="checkbox" id="r_hobby2" name="vhobby[]"   value="Taking Photos" <?php if(strpos($data["vhobby"],"Taking Photos")!==false){echo'checked="checked"';}?>> 
						<span class="errorMsg"> <?php echo $vhobbyErr;?> </span><br> <br> <br>
			
					 User Basic Information:  <br> <br> <br>
			
					<label> Username: </label> 
						<input type="text" id="user" name="user" value="<?php echo $data["user"]; ?>" size="40"> 
						<span class="errorMsg"> <?php echo $userErr;?> </span><br> <br> <br>
			
					<label> Email: </label>
						<input type="email" id="email" name="email" value="<?php echo $data["email"]; ?>" size="40"> 
						<span class="errorMsg"> <?php echo $emailErr;?> </span><br> <br> <br>
			
					<label> Current Password: </label> 
						<input type="password" id="pword" name="pword"> 
                        <span class="errorMsg"> <?php echo $pwordErr;?> </span><br> <br> <br>
					
				
				
					<input type="submit" name="post" value="EDIT"> &nbsp; &nbsp;
					<input type="reset" value="RESET">	<br><br>
					
			
					</fieldset>
		
					</form>
				
				
				
			</main>	
			
		</div>
		
	</body>
	
</html>