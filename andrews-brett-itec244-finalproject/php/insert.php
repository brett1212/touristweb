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
				
				
				
				if(empty($_POST["cpword"]))
					
					{
						
						$cpwordErr="Please enter a conformation password";
						
					}
				else
				{
					
					$cpword=test_input($_POST["cpword"]);
					
					if($_POST["pword"]!=$_POST["cpword"])
						
						{
							
							$cpwordErr="Your conformation password does not match your password";
							
						}
						else
						
						{
							
							if(!empty($title)&&!empty($fname)&&!empty($lname)&&!empty($address)&&!empty($gender)&&!empty($vhobby)&&!empty($user)&&!empty($email)&&!empty($pword)&&!empty($cpword))
				{
					
							include 'con_server.php';
			
						
							//Query the database 
							$sql="SELECT * FROM member WHERE email='$email'";
			
							$result=mysqli_query($con,$sql) or die("Error:".mysqli_error());
			
							$rowcount=mysqli_num_rows($result);
						
							$sql1="SELECT * FROM member WHERE user='$user'";
			
							$result1=mysqli_query($con,$sql1) or die("Error:".mysqli_error());
			
							$rowcount1=mysqli_num_rows($result1);
						
			
							if($rowcount>=1){
				
								echo "<script>
											alert('Email already exist');
											window.location=\"insert.php\"
									</script>";	
				
							}
							elseif($rowcount1>=1){
				
								echo "<script>
											alert('Username already exist');
											window.location=\"insert.php\"
									</script>";	
				
							}
							else{
								//Insert data into member table
								$sql="INSERT INTO member
										VALUES('$title','$fname','$lname','$address','$gender','$vhobby','$user','$email',md5('$pword'))";
			
							if(mysqli_query($con,$sql))
								{
				
								mysqli_close($con);
							
								echo "<script>
									alert('User created');
									window.location=\"../html/login.html\"
									</script>";
				
								}
			
							else
							{
				
							echo "Error inserting data in the member table";
				
				
				
							}
			
			
							}
					
					
					
					
				}
							
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
						<li><a href="../index.html">Home</a></li>
						<li><a href="../php/featurea.php">Featured Attractions</a><li>
						<li><a href="about.html">About Us</a><li>
						<li><a href="contact.html">Contact Us</a></li>
					</ul>
					
					<h1> REGISTRATION FORM </h1>
					
					<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				
					<fieldset>
		
		
					<legend> User Personal Information </legend>
			
					<label> Title: </label>
					
						<select id="title" name="title">
						
							<option value="" selected="selected">Select a Title</option>
							<option <?php if($title=="Ms.") echo 'selected="selected"'; ?> value="Ms.">Ms.</option>
							<option <?php if($title=="Mr.") echo 'selected="selected"'; ?> value="Mr.">Mr.</option>
							<option <?php if($title=="Mrs.") echo 'selected="selected"'; ?> value="Mrs.">Mrs.</option>					
						</select> 
                        <span class="errorMsg"> <?php echo $titleErr;?> </span>	<br><br>
						
					<label> First Name: </label> <!-- Input type text -->
						<input type="text" id="fname" name="fname" value="<?php echo $fname; ?>" size="25">
						<span class="errorMsg"> <?php echo $fnameErr;?> </span><br><br>
				
					<label> Last Name: </label> <!-- Input type text -->
						<input type="text" id="lname" name="lname" value="<?php echo $lname; ?>" size="25"> 
						<span class="errorMsg"> <?php echo $lnameErr;?> </span><br> <br> 
			
					<label> Tell us a little about yourself: </label>  <!-- Textarea -->
						<textarea id="address" name="address" rows="5" cols="30"><?php echo $address; ?></textarea> 
						<span class="errorMsg"> <?php echo $addressErr;?> </span><br> <br> 
			
					<label> Gender: </label> <!-- Input type radio -->
						Male <input type="radio" id="m_sex" name="gender" <?php if(isset($gender) && $gender=="Male") echo "checked"; ?> value="Male">
						Female <input type="radio" id="f_sex" name="gender" <?php if(isset($gender) && $gender=="Female") echo "checked"; ?>  value="Female"> 
						<span class="errorMsg"> <?php echo $genderErr;?> </span><br> <br> <br>
			
					<label> Vacation Hobbies: </label> <!-- Input type checkbox form control -->
						Hiking <input type="checkbox" id="r_hobby" name="vhobby[]" <?php if ((!empty($_POST["vhobby"]) && in_array("Hiking", $_POST["vhobby"]))) {echo "checked";} ?> value="Hiking"> &nbsp;
						Swimming <input type="checkbox" id="r_hobby1" name="vhobby[]" <?php if ((!empty($_POST["vhobby"]) && in_array("Swimming", $_POST["vhobby"]))) {echo "checked";} ?> value="Swimming"> &nbsp;
						Taking Photos <input type="checkbox" id="r_hobby2" name="vhobby[]" <?php if ((!empty($_POST["vhobby"]) && in_array("Taking Photos", $_POST["vhobby"]))) {echo "checked";} ?>  value="Taking Photos"> 
						<span class="errorMsg"> <?php echo $vhobbyErr;?> </span><br> <br> <br>
			
					 User Basic Information:  <br> <br> <br>
			
					<label> Username: </label> <!-- Input type url -->
						<input type="text" id="user" name="user" value="<?php echo $user; ?>" size="40"> 
						<span class="errorMsg"> <?php echo $userErr;?> </span><br> <br> <br>
			
					<label> Email: </label>
						<input type="email" id="email" name="email" value="<?php echo $email; ?>" size="40"> 
						<span class="errorMsg"> <?php echo $emailErr;?> </span><br> <br> <br>
			
					<label> Password: </label> <!-- Input type password -->
						<input type="password" id="pword" name="pword"> 
                        <span class="errorMsg"> <?php echo $pwordErr;?> </span><br> <br> <br>
					
					<label> Confirm Password: </label> <!-- Input type password -->
						<input type="password" id="cpword" name="cpword"> 
						<span class="errorMsg"> <?php echo $cpwordErr;?> </span><br> <br> <br>
				
				
					<input type="submit" name="post" value="SUBMIT"> &nbsp; &nbsp;
					<input type="reset" value="RESET">	&nbsp; &nbsp;
				
			
					</fieldset>
		
					</form>
				
				
				
			</main>	
			
		</div>
		
	</body>
	
</html>