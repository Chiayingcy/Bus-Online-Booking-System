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
									Book Bus Tickets
								</h1>";	
								echo"<p class='text-white link-nav'><a href='index.php'>Home </a>  <span class='lnr lnr-arrow-right'></span>  <a href='booking.php'>Payment</a></p>";
							echo "</div>";											
						echo "</div>";
					echo "</div>";
				echo "</section>";
			?>
			<!-- End banner Area -->



<?php
	//form
		echo "<div class='container'>";
			echo "<div class='row justify-content-center'>";
			echo "<div class='col-lg-10'>";
			
			include("busdatabase.php");
			
			//If user click submit button
			if (isset($_POST['submitted'])) {
				
				//Variables declaration
				//Convert first letter of name to uppercase
				$fullname =  ucfirst($_POST['fullname']);
				
				//Convert whole string of email to lowercase
				$email = strtolower($_POST['email']);
				
				$address = $_POST['address'];
				
				//Convert first letter of city to uppercase
				$city = ucfirst($_POST['city']);
				
				//Convert first letter of state to uppercase
				$state = ucfirst($_POST['state']);
				
				$zip = $_POST['zip'];
				
				//Convert first letter of card name to uppercase
				$cardname = ucfirst($_POST['cardname']);
				$cardnumber = $_POST['cardnumber'];
				$checkcard_number = filter_var($cardnumber, FILTER_SANITIZE_NUMBER_INT);
				//remove "-" from card number
				$checkcard_number = str_replace("-","",$checkcard_number);
				$expmonth = $_POST['expmonth'];
				$expyear = $_POST['expyear'];
				$cvv = $_POST['cvv'];
				
				$valid = true;
				
				$fullname = mysqli_real_escape_string($store, $fullname);
				$email = mysqli_real_escape_string($store, $email);
				$address = mysqli_real_escape_string($store, $address);
				$city = mysqli_real_escape_string($store, $city);
				$state = mysqli_real_escape_string($store, $state);
				$zip = mysqli_real_escape_string($store, $zip);
				$cardname = mysqli_real_escape_string($store, $cardname);
				$cardnumber = mysqli_real_escape_string($store, $cardnumber);
				$expmonth = mysqli_real_escape_string($store, $expmonth);
				$expyear = mysqli_real_escape_string($store, $expyear);
				$cvv = mysqli_real_escape_string($store, $cvv);
					
				//Check for empty full namfield
				if (empty($fullname)) {
								
					//Print error message in script
					echo "<script>alert('Full name required!')</script>";
								
				}
				//Check for empty email field
				else if (empty($email)) {
								
					//Print error message in script
					echo "<script>alert('Email required!')</script>";
								
				}
				
				//Check for empty street address field
				else if (empty($address)) {
								
					//Print error message in script
					echo "<script>alert('Street address required!')</script>";
								
				}
				
				//Check for empty city field
				else if (empty($city)) {
								
					//Print error message in script
					echo "<script>alert('City required!')</script>";
								
				}
				
				//Check for empty state field
				else if (empty($state)) {
								
					//Print error message in script
					echo "<script>alert('State required!')</script>";
								
				}
				
				//Check for empty zip field
				else if (empty($zip)) {
								
					//Print error message in script
					echo "<script>alert('Zip required!')</script>";
								
				}
				
				//Check for empty card name field
				else if (empty($cardname)) {
								
					//Print error message in script
					echo "<script>alert('Card name required!')</script>";
								
				}
				
				//Check for empty card number field
				else if (empty($cardnumber)) {
								
					//Print error message in script
					echo "<script>alert('Card number required!')</script>";
								
				}
				
				//Check for empty expiry month field
				else if (empty($expmonth)) {
								
					//Print error message in script
					echo "<script>alert('Expiry month required!')</script>";
								
				}
				
				//Check for empty expiry year field
				else if (empty($expyear)) {
								
					//Print error message in script
					echo "<script>alert('Expiry year required!')</script>";
								
				}
				
				
				//Check for empty cvv field
				else if (empty($cvv)) {
								
					//Print error message in script
					echo "<script>alert('CVV required!')</script>";
								
				}
				
				//Check for whitespace characters in full name
				else if (ctype_space($fullname)) {
								
					//Print error message in script
					echo "<script>alert('Full name cannot contain all whitespace characters only!')</script>";
								
				}
				
				//Check for whitespace characters in email
				else if (ctype_space($email)) {
								
					//Print error message in script
					echo "<script>alert('Email cannot contain all whitespace characters only!')</script>";
								
				}
				
				//Check for whitespace characters in street address
				else if (ctype_space($address)) {
								
					//Print error message in script
					echo "<script>alert('Street address cannot contain all whitespace characters only!')</script>";
								
				}
				
				//Check for whitespace characters in city
				else if (ctype_space($city)) {
								
					//Print error message in script
					echo "<script>alert('City cannot contain all whitespace characters only!')</script>";
								
				}
				
				//Check for whitespace characters in state
				else if (ctype_space($state)) {
								
					//Print error message in script
					echo "<script>alert('State cannot contain all whitespace characters only!')</script>";
								
				}
				
				//Check for whitespace characters in zip
				else if (ctype_space($zip)) {
								
					//Print error message in script
					echo "<script>alert('Zip cannot contain all whitespace characters only!')</script>";
								
				}
				
				//Check for whitespace characters in card name
				else if (ctype_space($cardname)) {
								
					//Print error message in script
					echo "<script>alert('Card name cannot contain all whitespace characters only!')</script>";
								
				}
				
				//Check for whitespace characters in card number
				else if (ctype_space($cardnumber)) {
								
					//Print error message in script
					echo "<script>alert('Card number cannot contain all whitespace characters only!')</script>";
								
				}
				
				
				//Check for whitespace characters in cvv
				else if (ctype_space($cvv)) {
								
					//Print error message in script
					echo "<script>alert('CVV cannot contain all whitespace characters only!')</script>";
								
				}
				
				//Check the format of email
				else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
								
					//Print error message in script
					echo "<script>alert('E-mail address is in invalid format!')</script>";
								
				}
				
				//Check if zip has digits only
				else if (!is_numeric($zip)) {
								
					//Print error message in script
					echo "<script>alert('Zip should be in digits only!')</script>";
								
				}
				
				//Check the length of digits in phone number
				else if (strlen($zip) != 5)
				{
							
						//Print error message in script
						echo "<script>alert('Zip should be 5 digits!')</script>"; 
								
				}
				
				else if (empty($cardnumber)) {
								
					//Print error message in script
					echo "<script>alert('Please fill in your card number!')</script>";
								
				}
				
				//Check for the length of digits in card number
				else if (strlen($checkcard_number) < 16 || strlen($checkcard_number) > 16) {
								
					//Print error message in script
					echo "<script>alert('Card number should be 16 digits!')</script>";
								
				}
				
				//Check if CVV has digits only
				else if (!is_numeric($cvv)) {
								
					//Print error message in script
					echo "<script>alert('CVV should be in digits only!')</script>";
								
				}
				
				//Check for the length of digits in CVV
				else if (strlen($cvv) != 3) {
								
					//Print error message in script
					echo "<script>alert('Card number should be 16 digits!')</script>";
								
				}
				else 
				{
					//success store data and display message
					$query = mysqli_query($store, "INSERT INTO payment
					(fullname, email, address, city, state, zip, cardname, cardnumber, expmonth, expyear, cvv ) VALUES
					('$fullname', '$email', '$address', '$city', '$state', '$zip', '$cardname', '$cardnumber', '$expmonth', '$expyear ', '$cvv' )");
					if ($query)
					{
						echo"<script>alert('You have done payment successfully!')</script>";
					}
				}
			}
				
			echo "<form action='booking.php' method = 'post'>";
				
			//Provide a container
			echo "<fieldset>";
			
			echo "<h3>Payment Details</h3>";
			echo "<br />";
			
			//Display message
			echo "<p><font size='+1'>Please fill in your details correctly!</font></p>";
			
			//Let user know when there is * Required the must type something in the form
			echo "<p><font color = 'red'> * Required </font></p>";
			
			//Line
			echo "<hr/>";
			
				echo "<label for='fname'>Full Name</label>";
				echo "<br /><input type='text' id='fname' name='fullname' placeholder='John Tan' size='120'>";
				
				echo"<br/>";
				
				echo "<label for='email'>Email</label>";
				echo "<br /><input type='text' id='email' name='email' placeholder='john@example.com' size='120'>";

				echo"<br/>";

				echo "<label for='adr'>Address</label>";
				echo "<br /><input type='text' id='adr' name='address' placeholder='12 Jalan Hijau' size='120'>";
								
				echo"<br/>";
				
				echo "<label for='city'>City</label>";
				echo "<br /><input type='text' id='city' name='city' placeholder='Georgetown' size='120'>";
				
				echo"<br/>";
					echo "<label for='state'>State</label>";
					echo "<br /><input type='text' id='state' name='state' placeholder='Penang' size='120'>";
								
				echo"<br/>";
				
					echo "<label for='zip'>Zip</label>";
					echo "<br /><input type='text' id='zip' name='zip' placeholder='11700' size='120'>";
							
				echo"<br/>";
				
				echo"<hr>";
		
			echo "<label for='fname'>Accepted Cards</label>";
			echo "&nbsp; <img src = 'img/payment.jpg' alt='payment' height = '80px' width = '300px'></a>";
			
			echo"</br>";
			echo"</br>";
			
			echo "<label for='cardname'>Name on Card</label>";
				echo "<br /><input type='text' id='cardname' name='cardname' placeholder='John Tan' size='120'>";
				
				echo"</br>";
				
				echo "<label for='cardnumber'>Credit card number</label>";
				echo "<br /><input type='text' id='cardnumber' name='cardnumber' placeholder='1111-2222-3333-4444' size='120'>";
				
				echo"</br>";
				
				echo "<br /><table>";
					echo "<tr>";
					echo "<th><label for='expmonth'>Exp Month</label></th>";
					echo "<th><label for='expyear'>Exp Year</label></th>";
					echo "</tr>";
					echo "<tr>";
					echo"<td><select name = 'expmonth' style = 'background-color:#f1f1f1;'>";
					echo"<option></option>";
					echo"<option>JANUARY</option>";
					echo"<option>FEBRUARY</option>";
					echo"<option>MARCH</option>";
					echo"<option>APRIL</option>";
					echo"<option>MAY</option>";
					echo"<option>JUNE</option>";
					echo"<option>JULY</option>";
					echo"<option>AUGUST</option>";
					echo"<option>SEPTEMBER</option>";
					echo"<option>OCTOBER</option>";
					echo"<option>NOVEMBER</option>";
					echo"<option>DECEMBER</option>";
					echo"</select></td>";
					
					echo"<td><select name = 'expyear' style = 'background-color:#f1f1f1;'>";
					echo"<option></option>";
					echo"<option>2020</option>";
					echo"<option>2021</option>";
					echo"<option>2022</option>";
					echo"<option>2023</option>";
					echo"<option>2024</option>";
					echo"<option>2025</option>";
					echo"<option>2026</option>";
					echo"<option>2027</option>";
					echo"<option>2028</option>";
					echo"<option>2029</option>";
					echo"<option>2030</option>";
					echo"</select></td>";
					
				echo "</tr>";
				echo "</table>";
				echo"</br>";
				
				echo "<label for='cvv'>CVV</label>";
				echo "<br /><input type='text' id='cvv' name='cvv' placeholder='352' size='120'>";
				 
				echo"</br>";
		
				
				echo"</br>";
			
				echo "<input type='submit' name='submit' value='Submit' class='text-uppercase primary-btn'/>"; //insert submit button
					echo "<input type='hidden' name='submitted' value='true'/>";
					echo " "; //insert a space between buttons
					echo "<input type='reset' name='reset' value='Cancel' class='text-uppercase primary-btn'/>"; //insert cancel button
			//submit button
			


		echo"</fieldset>";

		  echo "</form>";	//end form
		  
			echo "</div>";
			echo "</div>";
			echo "</div>";
			
		?>
		<!-- End of Order Bus Ticket Area -->
			

	<!-- Start Footer Area -->
	<?php
		
		
		//Include footer 
		include('footer.php');
		
	?>
	<!-- End Footer Area -->