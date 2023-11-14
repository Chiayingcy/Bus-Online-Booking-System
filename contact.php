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
									Contact Us
								</h1>";	
								echo"<p class='text-white link-nav'><a href='index.php'>Home </a>  
								<span class='lnr lnr-arrow-right'></span>  
								<a href='contact.php'>Contact</a></p>";
							echo "</div>";											
						echo "</div>";
					echo "</div>";
				echo "</section>";
				
			?>
			<!-- End banner Area -->
			
			<!-- End banner Area -->
			

			<!--Start of Contact Area -->
			<?php
				echo "<div class='contact-form spad'>";
					echo "<div class='container'>";
						echo "<center>";
					
						//If the form is submitted
						if (isset($_POST['submitted'])) {
							
							//Initialize variables
							//Convert first letter of id string to uppercase
							$id = ucfirst($_POST['id']);
							//Convert whole email string to lowercase
							$email = strtolower($_POST['email']);
							//Converts new lines of message into break tags
							$message = nl2br($_POST['message']);
							//Post snippet of message
							$message = substr($message, 0, 50);
							
							//Check for empty id field
							if (empty($id)) {
								
								//Print error message in script
								echo "<script>alert('ID required!')</script>";
								
							}
							
							//Check for empty email field
							else if (empty($email))
							{
								
								//Print error message in script
								echo "<script>alert('Email required!')</script>"; 
									
							}
							
							//Check for empty message field
							else if (empty($message))
							{
								
								//Print error message in script
								echo "<script>alert('Message required!')</script>"; 
									
							}
							
							//Check for whitespace characters in ID
							else if (ctype_space($id))
							{
								
								//Print error message in script
								echo "<script>alert('ID cannot contain all whitespace characters only!')</script>"; 
									
							}
							
							//Check for whitespace characters in email
							else if (ctype_space($email))
							{
								
								//Print error message in script
								echo "<script>alert('E-mail address cannot contain all whitespace characters only!')</script>"; 
									
							}
							
							//Check for whitespace characters in phone numbers
							else if (ctype_space($message))
							{
								
								//Print error message in script
								echo "<script>alert('Message cannot contain all whitespace characters only!')</script>"; 
									
							}
							
							else if (!filter_var($email, FILTER_VALIDATE_EMAIL))
							{
								//Print error message in script
								echo "<script>alert('E-mail is in invalid format!')</script>"; 
							}
							
							//Successful input
							else
							{
								
								//Print preview of message
								echo "<script>alert('Your message has been submitted!')</script>"; 
								echo "<script>alert('Preview of Your Message: $message')</script>"; 
							}
							
							//Go back button
							
							
						}
					
						//Start of form
						echo "<div class='row'>";
							echo "<div class='col-lg-12'>";
								echo "<div class='contact__form__title'>";
									echo "<h2 align='center'>Leave Message</h2>";
								echo "</div>";
							echo "</div>";
						echo "</div>";
						
						echo "<form method = 'post' action = 'contact.php'>";;
									
									//Input fields
									echo "<br /><b>ID:</b><br /><input type='text' placeholder='ID' name='id'>";
									echo "<br /><br /><b>E-mail Address:</b><br /><input type='text' placeholder='abc@example.com' name='email'>";
									echo "<br /><br /><b>Message:</b><br /><textarea placeholder='Message' name='message'></textarea>";
									//Submit button
									echo "<br /><br /><input type='submit' name='submit' value='SEND MESSAGE' class='text-uppercase primary-btn'/><br /><br />"; //insert submit button
									//Hidden submitted
									echo "<input type='hidden' name='submitted' value='true'/>";
								echo "</div>";
							echo "</div>";
							
					//End of form	
					echo "</form>";
					
						//End of align center
						echo "</center>";
					echo "</div>";
				echo "</div>";
				echo "</div>";
			echo "</section>";
			?>
		
			<!--End of Contact Area -->

	<!-- Start Footer Area -->
	<?php
		
		//Include footer
		include('footer.php');
		
	?>
	<!-- End Footer Area -->