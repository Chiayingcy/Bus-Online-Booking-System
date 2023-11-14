<!-- Start Header Area -->
	<?php
		
		//Include header
		include('header.php');
		
	?>
	<!-- End Header Area -->

			<!-- start banner Area -->
			<?php
				echo "<section class='banner-area relative' id='home'>";
					echo "<div class='overlay overlay-bg'></div>";
					echo "<div class='container'>";
						echo "<div class='row d-flex align-items-center justify-content-center'>";
							echo "<div class='about-content col-lg-12'>";
								echo "<h1 class='text-white'>
									Register
								</h1>";	
								echo"<p class='text-white link-nav'><a href='index.php'>Home </a>  <span class='lnr lnr-arrow-right'></span>  <a href='register.php'>Register</a></p>";
							echo "</div>";											
						echo "</div>";
					echo "</div>";
				echo "</section>";
			?>
			<!-- End banner Area -->	

			<!--Start of Register Area -->
			<?php
				
				//align center
				echo "<center>";
				include("busdatabase.php");
				
				//if user click submit button
				if (isset($_POST['submitted'])) {
					//variables declaration
					$fname = $_POST['fname'];
					$lname = $_POST['lname'];
					$username = $_POST['username'];
					$email = $_POST['email'];
					$password = $_POST['password'];
					$pswrepeat = $_POST['pswrepeat'];
					$gender = $_POST['gender'];
					$contact = $_POST['contact'];
					
					//formatting variables
					$upperP = preg_match('@[A-Z]@', $password);
					$lowerP = preg_match('@[a-z]@', $password);
					$numberP = preg_match('@[0-9]@', $password);
					$charP = preg_match('@[^\w]@', $password);
					
					$fname = mysqli_real_escape_string($store, $fname);
					$lname = mysqli_real_escape_string($store, $lname);
					$username = mysqli_real_escape_string($store, $username);
					$email = mysqli_real_escape_string($store, $email);
					$password = mysqli_real_escape_string($store, $password);
					$gender = mysqli_real_escape_string($store, $gender);
					$contact = mysqli_real_escape_string($store, $contact);
					
					
					//if user did not fill in first name
					if (empty($fname)) {
						//print error message in script
						echo "<script>alert('First name required!')</script>";
					}
					
					//if first name format is incorrect
					else if (!preg_match('/^[a-zA-Z\s]+$/', $fname)) {
						//print error message in script
						echo "<script>alert('First name must be in alphabets only!')</script>";
					}
					
					//if user did not fill in last name
					else if (empty($lname)) {
						//print error message in script
						echo "<script>alert('Last name required!')</script>";
					}
					
					//if last name format is incorrect
					else if (!preg_match('/^[a-zA-Z\s]+$/', $lname)) {
						//print error message in script
						echo "<script>alert('Last name must be in alphabets only!')</script>";
					}
					
					//if user did not fill in username
					else if (empty($username)) {
						//print error message in script
						echo "<script>alert('Username required!')</script>";
					}
					
					//if user did not fill in e-mail
					else if (empty($email)) {
						//print error message in script
						echo "<script>alert('E-mail required!')</script>";
					}
					
					//if e-mail format is incorrect
					else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
						//print error message in script
						echo "<script>alert('Invalid e-mail format!')</script>";
					}
					
					//if user did not fill in password
					else if (empty($password)) {
						//print error message in script
						echo "<script>alert('Password required!')</script>";
					}
					
					//if password format is incorrect
					else if (!$upperP || !$lowerP || !$numberP || !$charP) {
						//print error message in script
						echo "<script>alert('Invalid password format!')</script>";
					}
					
					//if password length is less than 8 characters
					else if (strlen($password) < 8) {
						//print error message in script
						echo "<script>alert('Password length is too short!')</script>";
					}
					
					//if user did not fill in repeated password
					else if (empty($pswrepeat)) {
						//print error message in script
						echo "<script>alert('Please confirm your password.')</script>";
					}
					
					//if repeated password does not match initial password
					else if (!($pswrepeat == $password)) {
						//print error message in script
						echo "<script>alert('Repeated password does not match the initial password!')</script>";
					}
					
					//if user did not select gender
					else if ($gender == '') {
						//print error message in script
						echo "<script>alert('Please select your gender.')</script>";
					}
					
					//if user did not fill in phone number
					else if (empty($contact)) {
						//print error message in script
						echo "<script>alert('Phone number required!')</script>";
					}
					
					//if phone number is not in number format
					else if (!is_numeric($contact)) {
						//print error message in script
						echo "<script>alert('Invalid phone number!')</script>";
					}
					
					//if there are no errors
					else {
						
						//success store data and display message
						$query = mysqli_query($store, "INSERT INTO register
						(fname, lname, username, email, password, gender, contact ) VALUES
						('$fname', '$lname', '$username', '$email ', '$password', '$gender', '$contact')");
						if ($query)
						{
							echo "<script>alert('Registration successful!');
							window.location='index.php'</script>";
						}
						
					}
				}

			
				echo "<br/><br/>"; //break line twice
			
				echo "<form method='post' action='register.php'>"; //insert form method with action
			
					echo "<label for='fname'><b>First name:</b></label>"; //insert label and bold font
					echo "<br/>"; //break line
					echo "<input type='text' name='fname' placeholder='First name'/>"; //insert text field
			
					echo "<br/><br/>"; //break line twice
			
					echo "<label for='lname'><b>Last name:</b></label>"; //insert label and bold font
					echo "<br/>"; //break line
					echo "<input type='text' name='lname' placeholder='Last name'/>"; //insert text field
			
					echo "<br/><br/>"; //break line twice
			
					echo "<label for='username'><b>Username:</b></label>"; //insert label and bold font
					echo "<br/>"; //break line
					echo "<input type='text' name='username' placeholder='Username'/>"; //insert text field
			
					echo "<br/><br/>"; //break line twice
			
					echo "<label for='email'><b>E-mail:</b></label>"; //insert label and bold font
					echo "<br/>"; //break line
					echo "<input type='text' name='email' placeholder='E-mail (eg. example123@hotmail.com)'/>"; //insert text field
			
					echo "<br/><br/>"; //break line twice
					
					echo "<label for='password'><b>Password:</b></label>"; //insert label and bold font
					echo "<br/>"; //break line
					echo "<input type='text' name='password' placeholder='Password'/>"; //insert text field
					echo "<br/>"; //break line
					echo "<font color='#CC9900' size='-1'>*Your password must have a combination of characters and numbers, eg. Abcd@123</font>"; //set font color and size
			
					echo "<br/><br/>"; //break line twice
			
					echo "<label for='pswrepeat'><b>Repeat password:</b></label>"; //insert label and bold font
					echo "<br/>"; //break line
					echo "<input type='text' name='pswrepeat' placeholder='Repeat password'/>"; //insert text field
			
					echo "<br/><br/>"; //break line twice
			
					echo "<label for='gender'><b>Gender:</b></label>"; //insert label and bold font
					echo "&nbsp; <input type='radio' name='gender' value='male'/>&nbsp; Male"; //insert radio button
					echo "&nbsp; <input type='radio' name='gender' value='female'/>&nbsp; Female"; //insert radio button
			
					echo "<br/><br/>"; //break line twice
			
					echo "<label for='contact'><b>Phone number:</b></label>"; //insert label and bold font
					echo "<br/>"; //break line
					echo "<input type='text' name='contact' placeholder='Phone number (eg. 0124578484)'/>"; //insert text field
				
					echo "<br/><br/>"; //break line twice
				
					echo "<center>By creating an account, you agree to our <font color='#0033FF'><u>Terms and Conditions</font></u>.</center>"; //set font color, underline font, and align to center
				
					echo "<br/>"; //break line
				
					echo "<div style='text-align: center'>"; //align section to center
						echo "<input type='submit' name='submit' value='Register' class='text-uppercase primary-btn'/>"; //insert submit button
						echo "<input type='hidden' name='submitted' value='true'/>";
						echo " "; //insert a space between buttons
						echo "<a class='text-uppercase primary-btn' href='index.php'>Cancel</a>"; //insert cancel button
					echo "</div>"; //end section
				
					echo "<br/>"; //break line
				
				echo "</form>"; //end form
				
				echo "</center>";
			
			?>

		
			<!--End of Register Area -->

	<!-- Start Footer Area -->
	<?php
		
		//Include footer
		include('footer.php');
		
	?>
	<!-- End Footer Area -->