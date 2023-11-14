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
									Book Bus Tickets
								</h1>";	
								echo"<p class='text-white link-nav'><a href='index.php'>Home </a>  <span class='lnr lnr-arrow-right'></span>  <a href='busbooking.php'>Booking</a></p>";
							echo "</div>";											
						echo "</div>";
					echo "</div>";
				echo "</section>";
			?>
			<!-- End banner Area -->	

			<!--Start of Order Bus Ticket Area -->
			<!--Form-->
			<?php
			
			include("busdatabase.php");
	
			//Validation
			if(isset($_POST['submitted']))
			{
				$Username = $_POST['Username'];
				$fromDestination = $_POST['fromDestination'];
				$toDestination = $_POST['toDestination'];
				$departureDate = $_POST['departureDate'];
				$time = $_POST['time'];
				$returnDate = $_POST['returnDate'];
				$busTypes = $_POST['busTypes'];
				$seatingTypes = $_POST['seatingTypes'];
				
				$valid = true;
				
				$Username = mysqli_real_escape_string($store, $Username);
				$fromDestination = mysqli_real_escape_string($store, $fromDestination);
				$toDestination = mysqli_real_escape_string($store, $toDestination);
				$departureDate = mysqli_real_escape_string($store, $departureDate);
				$time = mysqli_real_escape_string($store, $time);
				$returnDate = mysqli_real_escape_string($store, $returnDate);
				$busTypes = mysqli_real_escape_string($store, $busTypes);
				$seatingTypes = mysqli_real_escape_string($store, $seatingTypes);
				
				if(empty($Username))
				{
					echo"<script>alert('You are require to fill the Username!')</script>";
				}
				
				else if($fromDestination == 'FROM')
				{
					echo"<script>alert('You are require to choose the from!')</script>";
				}
				
				else if($toDestination == 'TO')
				{
					echo"<script>alert('You are require to choose the to!')</script>";
				}
				
				else if(empty($departureDate))
				{
					echo"<script>alert('You are require to choose the departureDate!')</script>";
				}
				
				else if(empty($returnDate))
				{
					echo"<script>alert('You are require to choose the returnDate!')</script>";
				}
				
				else
				{
					//success store data and display message
					$query = mysqli_query($store, "INSERT INTO booking
					(Username, fromDestination, toDestination, departureDate, time, returnDate, busTypes, seatingTypes) VALUES
					('$Username', '$fromDestination', '$toDestination', '$departureDate', '$time', '$returnDate', '$busTypes', '$seatingTypes')");
					if ($query)
					{
						echo"<script>alert('Your booking is successful!');
						window.location='booking.php'</script>";
					}
					
				}
			
			
			}
			echo "<div class='container'>";
			echo "<div class='row justify-content-center'>";
			echo "<div class='col-lg-10'>";
			echo "<center>";
			echo "<form method = 'post' action = 'busbooking.php' align='center'>";
			
			//Provide a container
			echo "<fieldset align = 'center'>";
			
			echo "<br />";
			
			//Display message
			echo "<p><font size='+1'>Please fill in your details correctly!</font></p>";
			
			//Let user know when there is * Required the must type something in the form
			echo "<p><font color = 'red'> * Required </font></p>";
			echo "<br /><font>Username:</font>";
			echo "<br /><input type='text' name='Username' placeholder='John Tan' size='70'>";
			
			//Line
			echo "<hr/>";

			echo "<input type = 'radio' name = 'type' value = 'One Way'>";
			echo "&nbsp; <label for = 'One Way'><font color = 'blue' size='4px'>One Way</font></label>";
			echo "&nbsp; <input type = 'radio' name = 'type' value = 'Round Trip'>";
			echo "&nbsp; <label for = 'Round Trip'><font color = 'blue' size = '4px'>Round Trip</font></label>";
			echo "</input>";
			echo "</input>";
			echo "</h2>";
			
			echo "<div class = 'dropDownList'>";
			
			//List of destination in table format
			
			echo "<table align = 'center' bgcolor = #40E0D0 cellspacing = '50' width='870' height='500' style='font-size:23px'>";
				echo "<tr align='center'>";
					echo "<th>FROM</th>";
					echo "<th>TO</th>";
					echo "<th>DEPARTURE DATE</th>";
					echo "<th>RETURN DATE</th>";
				echo "</tr>";
				
				echo "<tr align='center'>";
					//From dropdown list
					echo "<td><select name = 'fromDestination'>";
						echo "<option>FROM</option>";
						echo "<option>PENANG</option>";
						echo "<option>KUALA LUMPUR</option>";
						echo "<option>MELAKA</option>";
						echo "<option>IPOH</option>";
						echo "<option>JOHOR</option>";
						echo "<option>KEDAH</option>";
						echo "<option>KELANTAN</option>";
						echo "<option>SELANGOR</option>";
						echo "</select>";
					echo "</td>"; 
					
					//TO dropdown list
					echo "<td><select name = 'toDestination'>";
						echo "<option>TO</option>";
						echo "<option>PENANG</option>";
						echo "<option>KUALA LUMPUR</option>";
						echo "<option>MELAKA</option>";
						echo "<option>IPOH</option>";
						echo "<option>JOHOR</option>";
						echo "<option>KEDAH</option>";
						echo "<option>KELANTAN</option>";
						echo "<option>SELANGOR</option>";
						echo "</select>";
					echo "</td>"; 
					
					//User select the date
					echo "<td><input type='date' align = 'center' name = 'departureDate' style = 'background-color: #778899; color:white; width:180px; height:50px; border:none; border-radius:4px; font-size:15px;'/></td>";
					echo "<td><input type='date' align = 'center' name = 'returnDate' style = 'background-color: #778899; color:white; width:180px; height:50px; border:none; border-radius:4px; font-size:15px;'/></td>";
				
					//TIME dropdown list	
				echo "<tr align='center'>";
					echo "<td><select name = 'time'>";
						echo "<option>TIME</option>";
						echo "<option>7.30 AM</option>";
						echo "<option>8.00 AM</option>";
						echo "<option>9.00 AM</option>";
						echo "<option>10.00 AM</option>";
						echo "<option>11.00 AM</option>";
						echo "<option>12.00 PM</option>";
						echo "<option>1.00 PM</option>";
						echo "<option>2.00 PM</option>";
						echo "<option>3.00 PM</option>";
						echo "<option>4.00 PM</option>";
						echo "<option>5.00 PM</option>";
						echo "<option>6.00 PM</option>";
						echo "<option>7.00 PM</option>";
						echo "<option>8.00 PM</option>";
						echo "<option>9.00 PM</option>";
						echo "<option>10.00 PM</option>";
						echo "<option>11.00 PM</option>";
						echo "<option11.30 PM</option>";
						echo "<option>12.00 PM</option>";
					echo "</td>"; 
				
					echo "<td><select name = 'busTypes'>";
						echo "<option>BUS TYPES</option>";
						echo "<option>TRANSNASIONAL BUS</option>";
						echo "<option>AEROLINE EXPRESS</option>";
						echo "<option>ARWANA EXPRESS</option>";
						echo "<option>SRI MAJU EXPRESS</option>";
						echo "<option>BILLION STARS</option>";
						echo "<option>PLUSLINER</option>";
					echo "</td>";

					echo "<td><select name = 'seatingTypes'>";
						echo "<option>SEATING TYPES</option>";
						echo "<option>NORMAL (120°)</option>";
						echo "<option>SEMI-CAMA (140°)</option>";
						echo "<option>CAMA (160°)</option>";
					echo "</td>";
					
					echo"<input type = 'hidden' name = 'submitted' value = 'true'/>";
					//This is the book order button for list destination
					echo "<td><button class = 'search-button'>BOOK THE ORDER</button></td>";
					
				echo "</tr>";
			echo "</center>";
			echo "</table>";
			echo "</div>";
			
			
			//Break
			echo "<br/>";
			
			
			echo "</fieldset>";
			
			echo "</form>";
			echo "</center>";
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