<!-- Start Header Area -->
	<?php
		
		//Include header
		include('header.php');
		
	?>
	<!-- End Header Area -->
	
			<!-- Start banner Area -->
			<?php
				echo "<section class='banner-area relative' id='home'>";
					echo "<div class='overlay overlay-bg'></div>";
					echo "<div class='container'>";
						echo "<div class='row d-flex align-items-center justify-content-center'>";
							echo "<div class='about-content col-lg-12'>";
								echo "<h1 class='text-white'>
									Job Vacancies
								</h1>";	
								echo"<p class='text-white link-nav'><a href='index.php'>Home </a>  <span class='lnr lnr-arrow-right'></span>  <a href='jobvacancies.php'>Job Vacancies</a></p>";
							echo "</div>";											
						echo "</div>";
					echo "</div>";
				echo "</section>";
			?>
			<!-- End Banner Area -->
			
			<!--Start of Job Vacancies Area -->
			<?php
				
				//Create container class
				echo "<section class='product-details spad'>";
					echo "<div class='container'>";
					
						//Align center
						echo "<center>";
						
						//If form is submitted
						if (isset($_POST['submitted'])) {
							
							//Convert first letter of first name to uppercase
							$first_name = ucfirst($_POST['first_name']);
							
							//Convert first letter of last name to uppercase
							$last_name = ucfirst($_POST['last_name']);
							
							//Convert first letter of address to uppercase
							$address = ucfirst($_POST['address']);
							
							$phone_number = $_POST['phone_number'];
							
							//Convert whole string of email to lowercase
							$email = strtolower($_POST['email']);
							
							
							//Check for empty first name field
							if (empty($first_name)) {
								
								//Print error message in script
								echo "<script>alert('First name required!')</script>";
								
							}
							
							//Check for empty last name field
							else if (empty($last_name))
							{
								
								//Print error message in script
								echo "<script>alert('Last name required!')</script>"; 
									
							}
							
							//Check for empty street address field
							else if (empty($address))
							{
								
								//Print error message in script
								echo "<script>alert('Street address required!')</script>"; 
									
							}
							
							//Check for empty phone number field
							else if (empty($phone_number))
							{
								
								//Print error message in script
								echo "<script>alert('Phone number required!')</script>"; 
									
							}
							
							//Check for empty email field
							else if (empty($email))
							{
								
								//Print error message in script
								echo "<script>alert('Email required!')</script>"; 
									
							}
							
							//Check for whitespace characters in first name
							else if (ctype_space($first_name))
							{
								
								//Print error message in script
								echo "<script>alert('First name cannot contain all whitespace characters only!')</script>"; 
									
							}
							
							//Check for whitespace characters in last name
							else if (ctype_space($last_name))
							{
								
								//Print error message in script
								echo "<script>alert('Last name cannot contain all whitespace characters only!')</script>"; 
									
							}
							
							//Check for whitespace characters in street address
							else if (ctype_space($address))
							{
								
								//Print error message in script
								echo "<script>alert('Address cannot contain all whitespace characters only!')</script>"; 
									
							}
							
							//Check for whitespace characters in phone number
							else if (ctype_space($phone_number))
							{
								
								//Print error message in script
								echo "<script>alert('Phone number cannot contain all whitespace characters only!')</script>"; 
									
							}
							
							//Check for whitespace characters in email
							else if (ctype_space($email))
							{
								
								//Print error message in script
								echo "<script>alert('Email cannot contain all whitespace characters only!')</script>"; 
									
							}
							
							//Check if first name has alphabets only
							else if (!ctype_alpha($first_name))
							{
								
								//Print error message in script
								echo "<script>alert('First name should be in alphabets only!')</script>"; 
									
							}
							
							//Check if last name has alphabets only
							else if (!ctype_alpha($last_name))
							{
								
								//Print error message in script
								echo "<script>alert('Last name should be in alphabets only!')</script>"; 
									
							}
							
							//Check if phone number has digits only
							else if (!is_numeric($phone_number))
							{
								
								//Print error message in script
								echo "<script>alert('Phone number should be in digits only!')</script>"; 
									
							}
							
							//Check the length of digits in phone number
							else if (strlen($phone_number) > 11 || strlen($phone_number) < 10)
							{
							
								//Print error message in script
								echo "<script>alert('Phone number should be either 10 or 11 digits!')</script>"; 
								
							}
							
							//Check the format of email
							else if (!filter_var($email, FILTER_VALIDATE_EMAIL))
							{
							
								//Print error message
								echo "<script>alert('E-mail address is in invalid format!')</script>"; 
							}

							else
							{
							
								//Print success message
								echo "<script>alert('Your application has been sent!')</script>"; 

							}
						}

						echo "<form method = 'post' action = 'jobvacancies.php'>";
						echo "<br /><b>First Name:</b><font style='color:#FF0000';>*</font><br /><br /><input name='first_name' type='text' placeholder='First Name' size='25' /><br /><br />";
						echo "<b>Last Name:</b><font style='color:#FF0000';>*</font><br /><br /><input name='last_name' type ='text' placeholder='Last Name' size='25' /><br /><br />";
						echo "<b>Street Address:</b><font style='color:#FF0000';>*</font><br /><br /><input name='address' type='text' placeholder='Street Address' size='25' /><br /><br />";
						echo "<b>Phone Number:</b><font style='color:#FF0000';>*</font><br /><br /><input name='phone_number' type='text' placeholder='Phone Number' size='25' /><br /><br />";
						echo "<b/>E-mail Address:</b><font style='color:#FF0000';>*</font><br /><br /><input name='email' type='text' placeholder='abc@example.com' size='25' />";

						echo "<br /><br />";
						
						echo "<p><b>Job Vacancies:</b><font style='color:#FF0000';>*</font><br /><br />";
						echo "<select name='job_category'>";
							echo "<option>Bus Driver</option>";
							echo "<option>Customer Service</option>";
							echo "<option>Administration</option>";
							echo "<option>Route Supervisor</option>";
							echo "<option>Bus Crew</option>";
							echo "</select></center>";
							
						echo "</p><br /><br />";
						
						echo "<center><input type='submit' value='Apply' class='text-uppercase primary-btn' />";
						echo "&nbsp; <input type='reset' value='Cancel' class='text-uppercase primary-btn' /><br /><br /></center>";
						echo "<input type='hidden' name='submitted' value='true'/>";
	
					echo "</form>";

					echo "</center>";
					echo "</div>";
				echo "</section>"; 
			?>
				
			<!-- End of Job Vacancies Area -->

	<!-- Start Footer Area -->
	<?php
		
		//Include footer
		include('footer.php');
		
	?>
	<!-- End Footer Area -->
