	<!-- Start Header Area -->
	<?php
		
		//Include header
		include('header.php');
		
	?>
	<!-- End Header Area -->

			<!-- start Banner Area -->
			<?php
				echo "<section class='banner-area relative' id='home'>";
					echo "<div class='overlay overlay-bg'></div>";
					echo "<div class='container'>";
						echo "<div class='row d-flex align-items-center justify-content-center'>";
							echo "<div class='about-content col-lg-12'>";
								echo "<h1 class='text-white'>
									Destination Dates			
								</h1>";	
								echo"<p class='text-white link-nav'><a href='index.php'>Home </a>  <span class='lnr lnr-arrow-right'></span>  <a href='dates.php'>Dates</a></p>";
							echo "</div>";											
						echo "</div>";
					echo "</div>";
				echo "</section>";
			?>
			<!-- End Banner Area -->	

			<!--Start of Destination Dates Area -->
			<?php

				echo "<br /><br /><p align='center'><font size='+1'><b>Select a date to view the destinations available!</b></font></p>";
				echo "<p align='center'>Bus ticket bookings can only be made for the following month</p>";
				
				//Align center
				echo "<center>";
				//Start of form
				echo "<form method='post' action='destinations.php'>";
				
				//Select day dropdown menu
				echo "Day: <select name='day'>";
						echo "<option value=''>Day</option>";
					
						for ($d=1; $d<=31; $d++) {
						echo "<option value=\"$d\">$d</option>\n";
						}
				
					echo "</select>";
				
				//Select month dropdown menu
				echo "<br /><br />Month: <select name='month'>";
						echo "<option value=''>Month</option>";
						
						for ($m=8; $m<=8; $m++) {
						echo "<option value=\"$m\">$m</option>\n";
						}
						
					echo "</select>";
				
				//Select year dropdown menu
				echo "<br /><br />Year: <select name='year'>";
						echo "<option value=''>Year</option>";
						
						for ($y=2020; $y<=2020; $y++) {
						echo "<option value=\"$y\">$y</option>\n";
						}
					
					echo "</select>";
					
				echo "<br /></br /><input type='submit' name='submit' value='Check' class='text-uppercase primary-btn' /><br /><br />";
				
				//End of form
				echo "</form>";
				echo "</center>";
				
			?>	
		
			<!--End of Destination Dates Area -->


		<!-- Start Footer Area -->
		<?php
				
			//Include footer
			include('footer.php');
				
		?>
		<!-- End Footer Area -->