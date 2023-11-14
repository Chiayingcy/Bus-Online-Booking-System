	<!-- Start Header Area -->
	<?php
		
		//Include header
		include('header.php');
		
	?>
	<!-- End Header Area -->
	
			<!--Start of List of Buses Output Area -->
			<?php
				//declaration
				$bus = $_GET['bus'];

				//if user clicks on transnasional image
				if ($bus == 'transnasional') {
					
					echo "<section class='banner-area relative' id='home'>";
						echo "<div class='overlay overlay-bg'></div>";
						echo "<div class='container'>";
							echo "<div class='row d-flex align-items-center justify-content-center'>";
								echo "<div class='about-content col-lg-12'>";
									echo "<h1 class='text-white'>
										Transnasional Bus Ticket Pricing			
									</h1>";	
									echo"<p class='text-white link-nav'><a href='index.php'>Home </a>  
									<span class='lnr lnr-arrow-right'></span>  
									<a href='buses.php'>Buses</a>
									<span class='lnr lnr-arrow-right'></span> 
									Transnasional Bus<p>";
								echo "</div>";											
							echo "</div>";
						echo "</div>";
					echo "</section>";
					
					echo "<br/>"; //break line
				
					echo "<table align='center' cellpadding='20' border='2' width='50%'>"; //align table to center and set table style
						echo "<tr align='center'>"; //start table row and align to center
							//insert table column contents and bold font
							echo "<td><b>Destination</b></td>"; 
							echo "<td><b>Price</b></td>";
							echo "<td width='13%'><b>First bus</b></td>";
							echo "<td width='13%'><b>Last bus</b></td>";
							echo "<td><b>ETA</b></td>";
						echo "</tr>"; //end table row
					
						echo "<tr align='center'>"; //start table row and align to center
							//insert table column contents
							echo "<td>Penang to Johor</td>";
							echo "<td>RM 25.00</td>";
							echo "<td width='13%'>10:00</td>";
							echo "<td width='13%'>23:00</td>";
							echo "<td>6 h 57 min</td>";
						echo "</tr>"; //end table row
					
						echo "<tr align='center'>"; //start table row and align to center
							//insert table column contents and bold font
							echo "<td>Johor to Penang</td>";
							echo "<td>RM 25.00</td>";
							echo "<td width='13%'>10:00</td>";
							echo "<td width='13%'>23:00</td>";
							echo "<td>6 h 57 min</td>";
						echo "</tr>"; //end table row
					
						echo "<tr align='center'>"; //start table row and align to center
							//insert table column contents
							echo "<td>Penang to Malacca</td>";
							echo "<td>RM 40.50</td>";
							echo "<td width='13%'>08:00</td>";
							echo "<td width='13%'>22:00</td>";
							echo "<td>5 h 26 min</td>";
						echo "</tr>"; //end table row
					
						echo "<tr align='center'>"; //start table row and align to center
							//insert table column contents
							echo "<td>Malacca to Penang</td>";
							echo "<td>RM 40.50</td>";
							echo "<td width='13%'>08:00</td>";
							echo "<td width='13%'>22:00</td>";
							echo "<td>5 h 26 min</td>";
						echo "</tr>"; //end table row
					
						echo "<tr align='center'>"; //start table row and align to center
							//insert table column contents
							echo "<td>Penang to Kuala Lumpur</td>";
							echo "<td>RM 45.50</td>";
							echo "<td width='13%'>07:30</td>";
							echo "<td width='13%'>21:30</td>";
							echo "<td>3 h 38 min</td>";
						echo "</tr>"; //end table row
					
						echo "<tr align='center'>"; //start table row and align to center
							//insert table column contents
							echo "<td>Kuala Lumpur to Penang</td>";
							echo "<td>RM 45.50</td>";
							echo "<td width='13%'>07:30</td>";
							echo "<td width='13%'>21:30</td>";
							echo "<td>3 h 38 min</td>";
						echo "</tr>"; //end table row
					
						echo "<tr align='center'>"; //start table row and align to center
							//insert table column contents
							echo "<td>Kota Bharu to Puchong</td>";
							echo "<td>RM 47.50</td>";
							echo "<td width='13%'>08:30</td>";
							echo "<td width='13%'>21:30</td>";
							echo "<td>6 h 2 min</td>";
						echo "</tr>"; //end table row
					
						echo "<tr align='center'>"; //start table row and align to center
							//insert table column contents
							echo "<td>Puchong to Kota Bharu</td>";
							echo "<td>RM 47.50</td>";
							echo "<td width='13%'>08:30</td>";
							echo "<td width='13%'>21:30</td>";
							echo "<td>6 h 2 min</td>";
						echo "</tr>"; //end table row
					
						echo "<tr align='center'>"; //start table row and align to center
							//insert table column contents
							echo "<td>Penang to Pahang</td>";
							echo "<td>RM 45.50</td>";
							echo "<td width='13%'>09:00</td>";
							echo "<td>23:30</td>";
							echo "<td>6 h 17 min</td>";
						echo "</tr>"; //end table row
					
						echo "<tr align='center'>"; //start table row and align to center
							//insert table column contents
							echo "<td>Pahang to Penang</td>";
							echo "<td>RM 45.50</td>";
							echo "<td width='13%'>09:00</td>";
							echo "<td width='13%'>23:30</td>";
							echo "<td>6 h 17 min</td>";
						echo "</tr>"; //end table row
					echo "</table>"; //end table
				
					echo "<br/>"; //break line
				
					//insert button with hyperlink as paragraph
					echo "<p align='center'><a class='text-uppercase primary-btn' href='busbooking.php'>Make Booking</a>";
					echo "&nbsp; <a class='text-uppercase primary-btn' href='buses.php'>Back</a></p>";
				}
				
				//if user click aeroline image
				if ($bus == 'aeroline') {
					echo "<section class='banner-area relative' id='home'>";
						echo "<div class='overlay overlay-bg'></div>";
						echo "<div class='container'>";
							echo "<div class='row d-flex align-items-center justify-content-center'>";
								echo "<div class='about-content col-lg-12'>";
									echo "<h1 class='text-white'>
										Aeroline Express Bus Ticket Pricing			
									</h1>";	
									echo"<p class='text-white link-nav'><a href='index.php'>Home </a>  
									<span class='lnr lnr-arrow-right'></span>  
									<a href='buses.php'>Buses</a>
									<span class='lnr lnr-arrow-right'></span> 
									Aeroline Express</p>";
								echo "</div>";											
							echo "</div>";
						echo "</div>";
					echo "</section>";
				
					echo "<br/>"; //break line
				
					echo "<table align='center' cellpadding='20' border='2' width='50%'>"; //align table to center and set table style
						echo "<tr align='center'>"; //start table row and align to center
							//insert table column contents and bold font
							echo "<td><b>Destination</b></td>";
							echo "<td><b>Price</b></td>";
							echo "<td width='13%'><b>First bus</b></td>";
							echo "<td width='13%'><b>Last bus</b></td>";
							echo "<td><b>ETA</b></td>";
						echo "</tr>"; //end table row
					
						echo "<tr align='center'>"; //start table row and align to center
							//insert table column contents
							echo "<td>Kuala Lumpur to Singapore</td>";
							echo "<td>RM 35.50</td>";
							echo "<td width='13%'>11:00</td>";
							echo "<td width='13%'>23:00</td>";
							echo "<td>3 h 51 min</td>";
						echo "</tr>"; //end table row
					
						echo "<tr align='center'>"; //start table row and align to center
							//insert table column contents
							echo "<td>Singapore to Kuala Lumpur</td>";
							echo "<td>RM 35.50</td>";
							echo "<td width='13%'>11:00</td>";
							echo "<td width='13%'>23:00</td>";
							echo "<td>3 h 51 min</td>";
						echo "</tr>"; //end table row
					
						echo "<tr align='center'>"; //start table row and align to center
							//insert table column contents
							echo "<td>Kota Bharu to Alor Setar</td>";
							echo "<td>RM 45.50</td>";
							echo "<td width='13%'>07:00</td>";
							echo "<td width='13%'>22:30</td>";
							echo "<td>7 h 30 min</td>";
						echo "</tr>"; //end table row
					
						echo "<tr align='center'>"; //start table row and align to center
							//insert table column contents
							echo "<td>Alor Setar to Kota Bharu</td>";
							echo "<td>RM 45.50</td>";
							echo "<td width='13%'>07:00</td>";
							echo "<td width='13%'>22:30</td>";
							echo "<td>7 h 30 min</td>";
						echo "</tr>"; //end table row
					
						echo "<tr align='center'>"; //start table row and align to center
							//insert table column contents
							echo "<td>Kota Bharu to Shah Alam</td>";
							echo "<td>RM 45.50</td>";
							echo "<td width='13%'>08:30</td>";
							echo "<td width='13%'>23:45</td>";
							echo "<td>6 h 52 min</td>";
						echo "</tr>"; //end table row
					
						echo "<tr align='center'>"; //start table row and align to center
							//insert table column contents
							echo "<td>Shah Alam to Kota Bharu</td>";
							echo "<td>RM 45.50</td>";
							echo "<td width='13%'>08:30</td>";
							echo "<td width='13%'>23:45</td>";
							echo "<td>6 h 52 min</td>";
						echo "</tr>"; //end table row
					
						echo "<tr align='center'>"; //start table row and align to center
							//insert table column contents
							echo "<td>Kota Bharu to Puchong</td>";
							echo "<td>RM 48.00</td>";
							echo "<td width='13%'>09:30</td>";
							echo "<td width='13%'>22:30</td>";
							echo "<td>6 h 2 min</td>";
						echo "</tr>"; //end table row
					
						echo "<tr align='center'>"; //start table row and align to center
							//insert table column contents
							echo "<td>Puchong to Kota Bharu</td>";
							echo "<td>RM 48.00</td>";
							echo "<td width='13%'>09:30</td>";
							echo "<td width='13%'>22:30</td>";
							echo "<td>6 h 2 min</td>";
						echo "</tr>"; //end table row
					 
						echo "<tr align='center'>"; //start table row and align to center
							//insert table column contents
							echo "<td>Penang to Pahang</td>";
							echo "<td>RM 46.50</td>";
							echo "<td width='13%'>09:00</td>";
							echo "<td width='13%'>23:30</td>";
							echo "<td>6 h 17 min</td>";
						echo "</tr>"; //end table row
					
						echo "<tr align='center'>"; //start table row and align to center
							//insert table column contents
							echo "<td>Pahang to Penang</td>";
							echo "<td>RM 46.50</td>";
							echo "<td width='13%'>09:00</td>";
							echo "<td width='13%'>23:30</td>";
							echo "<td>6 h 17 min</td>";
						echo "</tr>"; //end table row
					
						echo "<tr align='center'>"; //start table row and align to center
							//insert table column contents
							echo "<td>Penang to Perak</td>";
							echo "<td>RM 15.50</td>";
							echo "<td width='13%'>08:30</td>";
							echo "<td width='13%'>22:30</td>";
							echo "<td>1 h 58 min</td>";
						echo "</tr>"; //end table row
						
						echo "<tr align='center'>"; //start table row and align to center
							//insert table column contents
							echo "<td>Perak to Penang</td>";
							echo "<td>RM 15.50</td>";
							echo "<td width='13%'>08:30</td>";
							echo "<td width='13%'>22:30</td>";
							echo "<td>1 h 58 min</td>";
						echo "</tr>"; //end table row
					echo "</table>"; //end table
				
					echo "<br/>"; //break line
				
					//insert button with hyperlink as paragraph
					echo "<p align='center'><a class='text-uppercase primary-btn' href='busbooking.php'>Make Booking</a>";
					echo "&nbsp; <a class='text-uppercase primary-btn' href='buses.php'>Back</a></p>";
				}
				
				//if user click arwana image
				if ($bus == 'arwana') {
					echo "<section class='banner-area relative' id='home'>";
						echo "<div class='overlay overlay-bg'></div>";
						echo "<div class='container'>";
							echo "<div class='row d-flex align-items-center justify-content-center'>";
								echo "<div class='about-content col-lg-12'>";
									echo "<h1 class='text-white'>
										Arwana Express Bus Ticket Pricing			
									</h1>";	
									echo"<p class='text-white link-nav'><a href='index.php'>Home </a>  
									<span class='lnr lnr-arrow-right'></span>  
									<a href='buses.php'>Buses</a>
									<span class='lnr lnr-arrow-right'></span> 
									Arwana Express</p>";
								echo "</div>";											
							echo "</div>";
						echo "</div>";
					echo "</section>";
				
					echo "<br/>"; //break line
				
					echo "<table align='center' cellpadding='20' border='2' width='50%'>"; //align table to center and set table style
						echo "<tr align='center'>"; //start table row and align to center
							//insert table column contents and bold font
							echo "<td><b>Destination</b></td>";
							echo "<td><b>Price</b></td>";
							echo "<td width='13%'><b>First bus</b></td>";
							echo "<td width='13%'><b>Last bus</b></td>";
							echo "<td><b>ETA</b></td>";
						echo "</tr>"; //end table row
				
						echo "<tr align='center'>"; //start table row and align to center
							//insert table column contents
							echo "<td>Kota Bharu to Alor Setar</td>";
							echo "<td>RM 43.50</td>";
							echo "<td width='13%'>07:30</td>";
							echo "<td width='13%'>21:30</td>";
							echo "<td>7 h 30 min</td>";
						echo "</tr>"; //end table row
					
						echo "<tr align='center'>"; //start table row and align to center
							//insert table column contents
							echo "<td>Alor Setar to Kota Bharu</td>";
							echo "<td>RM 43.50</td>";
							echo "<td width='13%'>07:30</td>";
							echo "<td width='13%'>21:30</td>";
							echo "<td>7 h 30 min</td>";
						echo "</tr>"; //end table row
					
						echo "<tr align='center'>"; //start table row and align to center
							//insert table column contents
							echo "<td>Penang to Malacca</td>";
							echo "<td>RM 38.50</td>";
							echo "<td width='13%'>08:30</td>";
							echo "<td width='13%'>23:00</td>";
							echo "<td>5 h 26 min</td>";
						echo "</tr>"; //end table row
					
						echo "<tr align='center'>"; //start table row and align to center
							//insert table column contents
							echo "<td>Malacca to Penang</td>";
							echo "<td>RM 38.50</td>";
							echo "<td width='13%'>08:30</td>";
							echo "<td width='13%'>23:00</td>";
							echo "<td>5 h 26 min</td>";
						echo "</tr>"; //end table row
					
						echo "<tr align='center'>"; //start table row and align to center
							//insert table column contents
							echo "<td>Kota Bharu to Puchong</td>";
							echo "<td>RM 47.00</td>";
							echo "<td width='13%'>09:30</td>";
							echo "<td width='13%'>23:00</td>";
							echo "<td>6 h 2 min</td>";
						echo "</tr>"; //end table row
					
						echo "<tr align='center'>"; //start table row and align to center
							//insert table column contents
							echo "<td>Puchong to Kota Bharu</td>";
							echo "<td>RM 47.00</td>";
							echo "<td width='13%'>09:30</td>";
							echo "<td width='13%'>23:00</td>";
							echo "<td>6 h 2 min</td>";
						echo "</tr>"; //end table row
					
						echo "<tr align='center'>"; //start table row and align to center
							//insert table column contents
							echo "<td>Penang to Pahang</td>";
							echo "<td>RM 46.50</td>";
							echo "<td width='13%'>09:00</td>";
							echo "<td width='13%'>23:30</td>";
							echo "<td>6 h 17 min</td>";
						echo "</tr>"; //end table row
					
						echo "<tr align='center'>"; //start table row and align to center
							//insert table column contents
							echo "<td>Pahang to Penang</td>";
							echo "<td>RM 46.50</td>";
							echo "<td width='13%'>09:00</td>";
							echo "<td width='13%'>23:30</td>";
							echo "<td>6 h 17 min</td>";
						echo "</tr>"; //end table row
					
						echo "<tr align='center'>"; //start table row and align to center
							//insert table column contents
							echo "<td>Penang to Johor</td>";
							echo "<td>RM 23.00</td>";
							echo "<td width='13%'>10:30</td>";
							echo "<td width='13%'>22:30</td>";
							echo "<td>6 h 57 min</td>";
						echo "</tr>"; //end table row
					 
						echo "<tr align='center'>"; //start table row and align to center
							//insert table column contents
							echo "<td>Johor to Penang</td>";
							echo "<td>RM 23.00</td>";
							echo "<td width='13%'>10:30</td>";
							echo "<td width='13%'>22:30</td>";
							echo "<td>6 h 57 min</td>";
						echo "</tr>"; //end table row
					
						echo "<tr align='center'>"; //start table row and align to center
							//insert table column contents
							echo "<td>Penang to Kuala Lumpur</td>";
							echo "<td>RM 45.00</td>";
							echo "<td width='13%'>08:00</td>";
							echo "<td width='13%'>21:00</td>";
							echo "<td>3 h 38 min</td>";
						echo "</tr>"; //end table row
					
						echo "<tr align='center'>"; //start table row and align to center
							//insert table column contents
							echo "<td>Kuala Lumpur to Penang</td>";
							echo "<td>RM 45.00</td>";
							echo "<td width='13%'>08:00</td>";
							echo "<td width='13%'>21:00</td>";
							echo "<td>3 h 38 min</td>";
						echo "</tr>"; //end table row
					
						echo "<tr align='center'>"; //start table row and align to center
							//insert table column contents
							echo "<td>Kota Bharu to Shah Alam</td>";
							echo "<td>RM 42.50</td>";
							echo "<td width='13%'>08:00</td>";
							echo "<td width='13%'>20:00</td>";
							echo "<td>6 h 52 min</td>";
						echo "</tr>"; //end table row
					
						echo "<tr align='center'>"; //start table row and align to center
							//insert table column contents
							echo "<td>Shah Alam to Kota Bharu</td>";
							echo "<td>RM 42.50</td>";
							echo "<td width='13%'>08:00</td>";
							echo "<td width='13%'>20:00</td>";
							echo "<td>6 h 52 min</td>";
						echo "</tr>"; //end table row
					echo "</table>"; //end table
				
					echo "<br/>"; //break line
				
					//insert button with hyperlink as paragraph
					echo "<p align='center'><a class='text-uppercase primary-btn' href='busbooking.php'>Make Booking</a>";
					echo "&nbsp; <a class='text-uppercase primary-btn' href='buses.php'>Back</a></p>";
				}
				
				//if user clicks sri maju image
				if ($bus == 'sri_maju') {
					echo "<section class='banner-area relative' id='home'>";
						echo "<div class='overlay overlay-bg'></div>";
						echo "<div class='container'>";
							echo "<div class='row d-flex align-items-center justify-content-center'>";
								echo "<div class='about-content col-lg-12'>";
									echo "<h1 class='text-white'>
										Sri Maju Express Bus Ticket Pricing			
									</h1>";	
									echo"<p class='text-white link-nav'><a href='index.php'>Home </a>  
									<span class='lnr lnr-arrow-right'></span> 
									<a href='buses.php'>Buses</a>
									<span class='lnr lnr-arrow-right'></span> 
									Sri Maju Express</p>";
								echo "</div>";											
							echo "</div>";
						echo "</div>";
					echo "</section>";
				
					echo "<br/>"; //break line
				
					echo "<table align='center' cellpadding='20' border='2' width='50%'>"; //align table to center and set table style
						echo "<tr align='center'>"; //start table row and align to center
							//insert table column contents and bold font
							echo "<td><b>Destination</b></td>";
							echo "<td><b>Price</b></td>";
							echo "<td width='13%'><b>First bus</b></td>";
							echo "<td width='13%'><b>Last bus</b></td>";
							echo "<td><b>ETA</b></td>";
						echo "</tr>"; //end table row
					
						echo "<tr align='center'>"; //start table row and align to center
							echo "<td>Kota Bharu to Alor Setar</td>";
							echo "<td>RM 44.50</td>";
							echo "<td width='13%'>07:30</td>";
							echo "<td width='13%'>23:30</td>";
							echo "<td>7 h 30 min</td>";
						echo "</tr>"; //end table row
					
						echo "<tr align='center'>"; //start table row and align to center
							//insert table column contents
							echo "<td>Alor Setar to Kota Bharu</td>";
							echo "<td>RM 44.50</td>";
							echo "<td width='13%'>07:30</td>";
							echo "<td width='13%'>23:30</td>";
							echo "<td>7 h 30 min</td>";
						echo "</tr>"; //end table row
					
						echo "<tr align='center'>"; //start table row and align to center
							//insert table column contents
							echo "<td>Kota Bharu to Puchong</td>";
							echo "<td>RM 48.00</td>";
							echo "<td width='13%'>08:00</td>";
							echo "<td width='13%'>23:00</td>";
							echo "<td>6 h 2 min</td>";
						echo "</tr>"; //end table row
					
						echo "<tr align='center'>"; //start table row and align to center
							//insert table column contents
							echo "<td>Puchong to Kota Bharu</td>";
							echo "<td>RM 48.00</td>";
							echo "<td width='13%'>08:00</td>";
							echo "<td width='13%'>23:00</td>";
							echo "<td>6 h 2 min</td>";
						echo "</tr>"; //end table row
					
						echo "<tr align='center'>"; //start table row and align to center
							//insert table column contents
							echo "<td>Penang to Perak</td>";
							echo "<td>RM 17.00</td>";
							echo "<td width='13%'>07:30</td>";
							echo "<td width='13%'>22:30</td>";
							echo "<td>1 h 58 min</td>";
						echo "</tr>"; //end table row
						
						echo "<tr align='center'>"; //start table row and align to center
							//insert table column contents
							echo "<td>Perak to Penang</td>";
							echo "<td>RM 17.00</td>";
							echo "<td width='13%'>07:30</td>";
							echo "<td width='13%'>22:30</td>";
							echo "<td>1 h 58 min</td>";
						echo "</tr>"; //end table row
					
						echo "<tr align='center'>"; //start table row and align to center
							//insert table column contents
							echo "<td>Kota Bharu to Shah Alam</td>";
							echo "<td>RM 44.00</td>";
							echo "<td width='13%'>08:00</td>";
							echo "<td width='13%'>23:00</td>";
							echo "<td>6 h 52 min</td>";
						echo "</tr>"; //end table row
					
						echo "<tr align='center'>"; //start table row and align to center
							//insert table column contents
							echo "<td>Shah Alam to Kota Bharu</td>";
							echo "<td>RM 44.00</td>";
							echo "<td width='13%'>08:00</td>";
							echo "<td width='13%'>23:00</td>";
							echo "<td>6 h 52 min</td>";
						echo "</tr>"; //end table row
					echo "</table>"; //end table
				
					echo "<br/>"; //break line
				
					//insert button with hyperlink as paragraph
					echo "<p align='center'><a class='text-uppercase primary-btn' href='busbooking.php'>Make Booking</a>";
					echo "&nbsp; <a class='text-uppercase primary-btn' href='buses.php'>Back</a></p>";
				}
				
				//if user clicks billionstars image
				if ($bus == 'billionstars') {
					echo "<section class='banner-area relative' id='home'>";
						echo "<div class='overlay overlay-bg'></div>";
						echo "<div class='container'>";
							echo "<div class='row d-flex align-items-center justify-content-center'>";
								echo "<div class='about-content col-lg-12'>";
									echo "<h1 class='text-white'>
										Billion Stars Express Bus Ticket Pricing			
									</h1>";	
									echo"<p class='text-white link-nav'><a href='index.php'>Home </a>  
									<span class='lnr lnr-arrow-right'></span>  
									<a href='buses.php'>Buses</a>
									<span class='lnr lnr-arrow-right'></span> 
									Billion Stars Express</p>";
								echo "</div>";											
							echo "</div>";
						echo "</div>";
					echo "</section>";
				
					echo "<br/>"; //break line
				
					echo "<table align='center' cellpadding='20' border='2' width='50%'>"; //align table to center and set table style
						echo "<tr align='center'>"; //start table row and align to center
							//insert table column contents and bold font
							echo "<td><b>Destination</b></td>";
							echo "<td><b>Price</b></td>";
							echo "<td width='13%'><b>First bus</b></td>";
							echo "<td width='13%'><b>Last bus</b></td>";
							echo "<td><b>ETA</b></td>";
						echo "</tr>"; //end table row
					
						echo "<tr align='center'>"; //start table row and align to center
							//insert table column contents
							echo "<td>Penang to Perak</td>";
							echo "<td>RM 19.00</td>";
							echo "<td width='13%'>06:30</td>";
							echo "<td width='13%'>20:30</td>";
							echo "<td>1 h 58 min</td>";
						echo "</tr>"; //end table row
						
						echo "<tr align='center'>"; //start table row and align to center
							//insert table column contents
							echo "<td>Perak to Penang</td>";
							echo "<td>RM 19.00</td>";
							echo "<td width='13%'>06:30</td>";
							echo "<td width='13%'>20:30</td>";
							echo "<td>1 h 58 min</td>";
						echo "</tr>"; //end table row
					
						echo "<tr align='center'>"; //start table row and align to center
							//insert table column contents
							echo "<td>Penang to Pahang</td>";
							echo "<td>RM 45.00</td>";
							echo "<td width='13%'>07:00</td>";
							echo "<td width='13%'>22:30</td>";
							echo "<td>6 h 17 min</td>";
						echo "</tr>"; //end table row
					
						echo "<tr align='center'>"; //start table row and align to center
							//insert table column contents
							echo "<td>Pahang to Penang</td>";
							echo "<td>RM 45.00</td>";
							echo "<td width='13%'>07:00</td>";
							echo "<td width='13%'>22:30</td>";
							echo "<td>6 h 17 min</td>";
						echo "</tr>"; //end table row
					
						echo "<tr align='center'>"; //start table row and align to center
							//insert table column contents
							echo "<td>Kota Bharu to Puchong</td>";
							echo "<td>RM 46.50</td>";
							echo "<td width='13%'>08:30</td>";
							echo "<td width='13%'>21:30</td>";
							echo "<td>6 h 2 min</td>";
						echo "</tr>"; //end table row
					
						echo "<tr align='center'>"; //start table row and align to center
							//insert table column contents
							echo "<td>Puchong to Kota Bharu</td>";
							echo "<td>RM 46.50</td>";
							echo "<td width='13%'>08:30</td>";
							echo "<td width='13%'>21:30</td>";
							echo "<td>6 h 2 min</td>";
						echo "</tr>"; //end table row
					
						echo "<tr align='center'>"; //start table row and align to center
							//insert table column contents
							echo "<td>Kota Bharu to Alor Setar</td>";
							echo "<td>RM 44.50</td>";
							echo "<td width='13%'>06:30</td>";
							echo "<td width='13%'>21:30</td>";
							echo "<td>7 h 30 min</td>";
						echo "</tr>"; //end table row
					
						echo "<tr align='center'>"; //start table row and align to center
							//insert table column contents
							echo "<td>Alor Setar to Kota Bharu</td>";
							echo "<td>RM 44.50</td>";
							echo "<td width='13%'>06:30</td>";
							echo "<td width='13%'>21:30</td>";
							echo "<td>7 h 30 min</td>";
						echo "</tr>"; //end table row
					
						echo "<tr align='center'>"; //start table row and align to center
							//insert table column contents
							echo "<td>Kuala Lumpur to Singapore</td>";
							echo "<td>RM 36.50</td>";
							echo "<td width='13%'>10:00</td>";
							echo "<td width='13%'>23:00</td>";
							echo "<td>3 h 51 min</td>";
						echo "</tr>"; //end table row
					
						echo "<tr align='center'>"; //start table row and align to center
							//insert table column contents
							echo "<td>Singapore to Kuala Lumpur</td>";
							echo "<td>RM 36.50</td>";
							echo "<td width='13%'>10:00</td>";
							echo "<td width='13%'>23:00</td>";
							echo "<td>3 h 51 min</td>";
						echo "</tr>"; //end table row
					
						echo "<tr align='center'>"; //start table row and align to center
							//insert table column contents
							echo "<td>Penang to Malacca</td>";
							echo "<td>RM 40.50</td>";
							echo "<td width='13%'>08:30</td>";
							echo "<td width='13%'>23:00</td>";
							echo "<td>5 h 26 min</td>";
						echo "</tr>"; //end table row
					
						echo "<tr align='center'>"; //start table row and align to center
							//insert table column contents
							echo "<td>Malacca to Penang</td>";
							echo "<td>RM 40.50</td>";
							echo "<td width='13%'>08:30</td>";
							echo "<td width='13%'>23:00</td>";
							echo "<td>5 h 26 min</td>";
						echo "</tr>"; //end table row
					echo "</table>"; //end table
				
					echo "<br/>"; //break line
				
					//insert button with hyperlink as paragraph
					echo "<p align='center'><a class='text-uppercase primary-btn' href='busbooking.php'>Make Booking</a>";
					echo "&nbsp; <a class='text-uppercase primary-btn' href='buses.php'>Back</a></p>";
				}
				
				//if user clicks plusliner image
				if ($bus == 'plusliner') {
					echo "<section class='banner-area relative' id='home'>";
						echo "<div class='overlay overlay-bg'></div>";
						echo "<div class='container'>";
							echo "<div class='row d-flex align-items-center justify-content-center'>";
								echo "<div class='about-content col-lg-12'>";
									echo "<h1 class='text-white'>
										Plusliner Bus Ticket Pricing			
									</h1>";	
									echo"<p class='text-white link-nav'><a href='index.php'>Home </a>  
									<span class='lnr lnr-arrow-right'></span>  
									<a href='buses.php'>Buses</a>
									<span class='lnr lnr-arrow-right'></span> 
									Plusliner</p>";
								echo "</div>";											
							echo "</div>";
						echo "</div>";
					echo "</section>";
					
					echo "<br/>"; //break line
				
					echo "<table align='center' cellpadding='20' border='2' width='50%'>"; //align table to center and set table style
						echo "<tr align='center'>"; //start table row and align to center
							//insert table column contents and bold font
							echo "<td><b>Destination</b></td>";
							echo "<td><b>Price</b></td>";
							echo "<td width='13%'><b>First bus</b></td>";
							echo "<td width='13%'><b>Last bus</b></td>";
							echo "<td><b>ETA</b></td>";
						echo "</tr>"; //end table row
					
						echo "<tr align='center'>"; //start table row and align to center
							//insert table column contents
							echo "<td>Penang to Pahang</td>";
							echo "<td>RM 45.00</td>";
							echo "<td width='13%'>07:00</td>";
							echo "<td width='13%'>22:30</td>";
							echo "<td>6 h 17 min</td>";
						echo "</tr>"; //end table row
					
						echo "<tr align='center'>"; //start table row and align to center
							//insert table column contents
							echo "<td>Pahang to Penang</td>";
							echo "<td>RM 45.00</td>";
							echo "<td width='13%'>07:00</td>";
							echo "<td width='13%'>22:30</td>";
							echo "<td>6 h 17 min</td>";
						echo "</tr>"; //end table row
					
						echo "<tr align='center'>"; //start table row and align to center
							//insert table column contents
							echo "<td>Penang to Perak</td>";
							echo "<td>RM 16.00</td>";
							echo "<td width='13%'>06:30</td>";
							echo "<td width='13%'>22:30</td>";
							echo "<td>1 h 58 min</td>";
						echo "</tr>"; //end table row
						
						echo "<tr align='center'>"; //start table row and align to center
							//insert table column contents
							echo "<td>Perak to Penang</td>";
							echo "<td>RM 16.00</td>";
							echo "<td width='13%'>06:30</td>";
							echo "<td width='13%'>22:30</td>";
							echo "<td>1 h 58 min</td>";
						echo "</tr>"; //end table row
					
						echo "<tr align='center'>"; //start table row and align to center
							//insert table column contents
							echo "<td>Kota Bharu to Shah Alam</td>";
							echo "<td>RM 43.00</td>";
							echo "<td width='13%'>07:00</td>";
							echo "<td width='13%'>22:00</td>";
							echo "<td>6 h 52 min</td>";
						echo "</tr>"; //end table row
					
						echo "<tr align='center'>"; //start table row and align to center
							//insert table column contents
							echo "<td>Shah Alam to Kota Bharu</td>";
							echo "<td>RM 43.00</td>";
							echo "<td width='13%'>07:00</td>";
							echo "<td width='13%'>22:00</td>";
							echo "<td>6 h 52 min</td>";
						echo "</tr>"; //end table row
					echo "</table>"; //end table
				
					echo "<br/>"; //break line
				
					//insert button with hyperlink as paragraph
					echo "<p align='center'><a class='text-uppercase primary-btn' href='busbooking.php'>Make Booking</a>";
					echo "&nbsp; <a class='text-uppercase primary-btn' href='buses.php'>Back</a></p>";
				}
				
			?>
			<!-- End of List of Buses Output Area -->

	<!-- Start Footer Area -->
	<?php
		
		//Include footer
		include('footer.php');
		
	?>
	<!-- End Footer Area -->

				
	
