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
									Destinations		
								</h1>";	
								echo"<p class='text-white link-nav'><a href='index.php'>Home </a>  <span class='lnr lnr-arrow-right'></span>  <a href='dates.php'>Dates</a> <span class='lnr lnr-arrow-right'></span> Destinations</p>";
							echo "</div>";											
						echo "</div>";
					echo "</div>";
				echo "</section>";
			?>
			<!-- End banner Area -->	

			<!--Start of Destination Area -->
			<?php
				
				//Declare variables
				$day = $_POST['day'];
				$month = $_POST['month'];
				$year = $_POST['year'];
				
				echo "<center>";
				
				//Check for empty day option
				if ($day == '')
				{
					//Print error message
					//Redirect to dates.php
					echo"<script>alert('Please choose a day!');
							window.location='dates.php'</script>";
							
				}
				//Check for empty month option
				if ($month == '')
				{	
					//Print error message
					//Redirect to dates.php
					echo"<script>alert('Please choose a month!');
						window.location='dates.php'</script>";
				}
				//Check for empty year option
				if ($year == '')
				{
					//Print error message
					//Redirect to dates.php
					echo"<script>alert('Please choose a year!');
						window.location='dates.php'</script>";
				}
				
				//Print out destinations available according the date
				if ($day == 1 && $month == 8 && $year == 2020)
				{	
					echo "<br /><br /><h1>Destinations available on <b>01-08-2020</b></h1>";
					echo "<br /><br />";
					echo "<ul>";
						echo "<li>Penang to Johor</li>";
						echo "<li>Johor to Penang</li>";
						echo "<li>Penang to Kuala Lumpur</li>";
						echo "<li>Kuala Lumpur to Penang</li>";
						echo "<li>Kuala Lumpur to Singapore</li>";
						echo "<li>Singapore to Kuala Lumpur</li>";
						echo "<li>Alor Setar to Kota Bharu</li>";
						echo "<li>Kota Bharu to Alor Setar</li>";
						echo "<li>Kota Bharu to Puchong</li>";
						echo "<li>Puchong to Kota Bharu</li>";
						echo "<li>Kota Bharu to Shah Alam</li>";
						echo "<li>Shah Alam to Kota Bharu</li>";
					echo "</ul>";
					
				}
				
				
				if ($day == 2 && $month == 8 && $year == 2020)
				{	
					echo "<br /><br /><h1>Destinations available on <b>02-08-2020</b></h1>";
					echo "<br /><br />";
					echo "<ul>";
						echo "<li>Penang to Johor</li>";
						echo "<li>Johor to Penang</li>";
						echo "<li>Penang to Kuala Lumpur</li>";
						echo "<li>Kuala Lumpur to Penang</li>";
						echo "<li>Kuala Lumpur to Singapore</li>";
						echo "<li>Singapore to Kuala Lumpur</li>";
						echo "<li>Alor Setar to Kota Bharu</li>";
						echo "<li>Kota Bharu to Alor Setar</li>";
					echo "</ul>";
					
				}
				
				if ($day == 3 && $month == 8 && $year == 2020)
				{	
					echo "<br /><br /><h1>Destinations available on <b>03-08-2020</b></h1>";
					echo "<br /><br />";
					echo "<ul>";
						echo "<li>Penang to Johor</li>";
						echo "<li>Johor to Penang</li>";
						echo "<li>Penang to Kuala Lumpur</li>";
						echo "<li>Kuala Lumpur to Penang</li>";
						echo "<li>Kuala Lumpur to Singapore</li>";
						echo "<li>Singapore to Kuala Lumpur</li>";
						echo "<li>Alor Setar to Kota Bharu</li>";
						echo "<li>Kota Bharu to Alor Setar</li>";
						echo "<li>Kota Bharu to Puchong</li>";
						echo "<li>Puchong to Kota Bharu</li>";
						echo "<li>Kota Bharu to Shah Alam</li>";
						echo "<li>Shah Alam to Kota Bharu</li>";
						echo "<li>Penang to Malacca</li>";
						echo "<li>Malacca to Penang</li>";
						echo "<li>Penang to Pahang</li>";
						echo "<li>Pahang to Penang</li>";
						echo "<li>Penang to Perak</li>";
						echo "<li>Perak to Penang</li>";
					echo "</ul>";
					
				}
				
				if ($day == 4 && $month == 8 && $year == 2020)
				{	
					echo "<br /><br /><h1>Destinations available on <b>04-08-2020</b></h1>";
					echo "<br /><br />";
					echo "<ul>";
						echo "<li>Penang to Johor</li>";
						echo "<li>Johor to Penang</li>";
						echo "<li>Penang to Kuala Lumpur</li>";
						echo "<li>Kuala Lumpur to Penang</li>";
						echo "<li>Kuala Lumpur to Singapore</li>";
						echo "<li>Singapore to Kuala Lumpur</li>";
						echo "<li>Alor Setar to Kota Bharu</li>";
						echo "<li>Kota Bharu to Alor Setar</li>";
						echo "<li>Kota Bharu to Puchong</li>";
						echo "<li>Puchong to Kota Bharu</li>";
						echo "<li>Kota Bharu to Shah Alam</li>";
						echo "<li>Shah Alam to Kota Bharu</li>";
						echo "<li>Penang to Malacca</li>";
						echo "<li>Malacca to Penang</li>";
						echo "<li>Penang to Pahang</li>";
						echo "<li>Pahang to Penang</li>";
						echo "<li>Penang to Perak</li>";
						echo "<li>Perak to Penang</li>";
					echo "</ul>";
					
				}
				
				if ($day == 5 && $month == 8 && $year == 2020)
				{	
					echo "<br /><br /><h1>Destinations available on <b>05-08-2020</b></h1>";
					echo "<br /><br />";
					echo "<ul>";
						echo "<li>Penang to Johor</li>";
						echo "<li>Johor to Penang</li>";
						echo "<li>Penang to Kuala Lumpur</li>";
						echo "<li>Kuala Lumpur to Penang</li>";
						echo "<li>Kuala Lumpur to Singapore</li>";
						echo "<li>Singapore to Kuala Lumpur</li>";
						echo "<li>Alor Setar to Kota Bharu</li>";
						echo "<li>Kota Bharu to Alor Setar</li>";
						echo "<li>Kota Bharu to Puchong</li>";
						echo "<li>Puchong to Kota Bharu</li>";
						echo "<li>Kota Bharu to Shah Alam</li>";
						echo "<li>Shah Alam to Kota Bharu</li>";
						echo "<li>Penang to Malacca</li>";
						echo "<li>Malacca to Penang</li>";
						echo "<li>Penang to Pahang</li>";
						echo "<li>Pahang to Penang</li>";
						echo "<li>Penang to Perak</li>";
						echo "<li>Perak to Penang</li>";
					echo "</ul>";
					
				}
				
				if ($day == 6 && $month == 8 && $year == 2020)
				{	
					echo "<br /><br /><h1>Destinations available on <b>06-08-2020</b></h1>";
					echo "<br /><br />";
					echo "<ul>";
						echo "<li>Penang to Johor</li>";
						echo "<li>Johor to Penang</li>";
						echo "<li>Penang to Kuala Lumpur</li>";
						echo "<li>Kuala Lumpur to Penang</li>";
						echo "<li>Kuala Lumpur to Singapore</li>";
						echo "<li>Singapore to Kuala Lumpur</li>";
						echo "<li>Alor Setar to Kota Bharu</li>";
						echo "<li>Kota Bharu to Alor Setar</li>";
						echo "<li>Kota Bharu to Puchong</li>";
						echo "<li>Puchong to Kota Bharu</li>";
						echo "<li>Kota Bharu to Shah Alam</li>";
						echo "<li>Shah Alam to Kota Bharu</li>";
						echo "<li>Penang to Malacca</li>";
						echo "<li>Malacca to Penang</li>";
						echo "<li>Penang to Pahang</li>";
						echo "<li>Pahang to Penang</li>";
						echo "<li>Penang to Perak</li>";
						echo "<li>Perak to Penang</li>";
					echo "</ul>";
					
				}
				
				if ($day == 7 && $month == 8 && $year == 2020)
				{	
					echo "<br /><br /><h1>Destinations available on <b>07-08-2020</b></h1>";
					echo "<br /><br />";
					echo "<ul>";
						echo "<li>Penang to Johor</li>";
						echo "<li>Johor to Penang</li>";
						echo "<li>Penang to Kuala Lumpur</li>";
						echo "<li>Kuala Lumpur to Penang</li>";
						echo "<li>Kuala Lumpur to Singapore</li>";
						echo "<li>Singapore to Kuala Lumpur</li>";
						echo "<li>Alor Setar to Kota Bharu</li>";
						echo "<li>Kota Bharu to Alor Setar</li>";
						echo "<li>Kota Bharu to Puchong</li>";
						echo "<li>Puchong to Kota Bharu</li>";
						echo "<li>Kota Bharu to Shah Alam</li>";
						echo "<li>Shah Alam to Kota Bharu</li>";
						echo "<li>Penang to Malacca</li>";
						echo "<li>Malacca to Penang</li>";
						echo "<li>Penang to Pahang</li>";
						echo "<li>Pahang to Penang</li>";
						echo "<li>Penang to Perak</li>";
						echo "<li>Perak to Penang</li>";
					echo "</ul>";
					
				}
				
				if ($day == 8 && $month == 8 && $year == 2020)
				{	
					echo "<br /><br /><h1>Destinations available on <b>08-08-2020</b></h1>";
					echo "<br /><br />";
					echo "<ul>";
						echo "<li>Penang to Johor</li>";
						echo "<li>Johor to Penang</li>";
						echo "<li>Penang to Kuala Lumpur</li>";
						echo "<li>Kuala Lumpur to Penang</li>";
						echo "<li>Kuala Lumpur to Singapore</li>";
						echo "<li>Singapore to Kuala Lumpur</li>";
						echo "<li>Alor Setar to Kota Bharu</li>";
						echo "<li>Kota Bharu to Alor Setar</li>";
						echo "<li>Kota Bharu to Puchong</li>";
						echo "<li>Puchong to Kota Bharu</li>";
						echo "<li>Kota Bharu to Shah Alam</li>";
						echo "<li>Shah Alam to Kota Bharu</li>";
					echo "</ul>";
					
				}
				
				if ($day == 9 && $month == 8 && $year == 2020)
				{	
					echo "<br /><br /><h1>Destinations available on <b>09-08-2020</b></h1>";
					echo "<br /><br />";
					echo "<ul>";
						echo "<li>Penang to Johor</li>";
						echo "<li>Johor to Penang</li>";
						echo "<li>Penang to Kuala Lumpur</li>";
						echo "<li>Kuala Lumpur to Penang</li>";
						echo "<li>Kuala Lumpur to Singapore</li>";
						echo "<li>Singapore to Kuala Lumpur</li>";
						echo "<li>Alor Setar to Kota Bharu</li>";
						echo "<li>Kota Bharu to Alor Setar</li>";
					echo "</ul>";
					
				}
				
				if ($day == 10 && $month == 8 && $year == 2020)
				{	
					echo "<br /><br /><h1>Destinations available on <b>10-08-2020</b></h1>";
					echo "<br /><br />";
					echo "<ul>";
						echo "<li>Penang to Johor</li>";
						echo "<li>Johor to Penang</li>";
						echo "<li>Penang to Kuala Lumpur</li>";
						echo "<li>Kuala Lumpur to Penang</li>";
						echo "<li>Kuala Lumpur to Singapore</li>";
						echo "<li>Singapore to Kuala Lumpur</li>";
						echo "<li>Alor Setar to Kota Bharu</li>";
						echo "<li>Kota Bharu to Alor Setar</li>";
						echo "<li>Kota Bharu to Puchong</li>";
						echo "<li>Puchong to Kota Bharu</li>";
						echo "<li>Kota Bharu to Shah Alam</li>";
						echo "<li>Shah Alam to Kota Bharu</li>";
						echo "<li>Penang to Malacca</li>";
						echo "<li>Malacca to Penang</li>";
						echo "<li>Penang to Pahang</li>";
						echo "<li>Pahang to Penang</li>";
						echo "<li>Penang to Perak</li>";
						echo "<li>Perak to Penang</li>";
					echo "</ul>";
					
				}
				
				if ($day == 11 && $month == 8 && $year == 2020)
				{	
					echo "<br /><br /><h1>Destinations available on <b>11-08-2020</b></h1>";
					echo "<br /><br />";
					echo "<ul>";
						echo "<li>Penang to Johor</li>";
						echo "<li>Johor to Penang</li>";
						echo "<li>Penang to Kuala Lumpur</li>";
						echo "<li>Kuala Lumpur to Penang</li>";
						echo "<li>Kuala Lumpur to Singapore</li>";
						echo "<li>Singapore to Kuala Lumpur</li>";
						echo "<li>Alor Setar to Kota Bharu</li>";
						echo "<li>Kota Bharu to Alor Setar</li>";
						echo "<li>Kota Bharu to Puchong</li>";
						echo "<li>Puchong to Kota Bharu</li>";
						echo "<li>Kota Bharu to Shah Alam</li>";
						echo "<li>Shah Alam to Kota Bharu</li>";
						echo "<li>Penang to Malacca</li>";
						echo "<li>Malacca to Penang</li>";
						echo "<li>Penang to Pahang</li>";
						echo "<li>Pahang to Penang</li>";
						echo "<li>Penang to Perak</li>";
						echo "<li>Perak to Penang</li>";
					echo "</ul>";
					
				}
				
				if ($day == 12 && $month == 8 && $year == 2020)
				{	
					echo "<br /><br /><h1>Destinations available on <b>12-08-2020</b></h1>";
					echo "<br /><br />";
					echo "<ul>";
						echo "<li>Penang to Johor</li>";
						echo "<li>Johor to Penang</li>";
						echo "<li>Penang to Kuala Lumpur</li>";
						echo "<li>Kuala Lumpur to Penang</li>";
						echo "<li>Kuala Lumpur to Singapore</li>";
						echo "<li>Singapore to Kuala Lumpur</li>";
						echo "<li>Alor Setar to Kota Bharu</li>";
						echo "<li>Kota Bharu to Alor Setar</li>";
						echo "<li>Kota Bharu to Puchong</li>";
						echo "<li>Puchong to Kota Bharu</li>";
						echo "<li>Kota Bharu to Shah Alam</li>";
						echo "<li>Shah Alam to Kota Bharu</li>";
						echo "<li>Penang to Malacca</li>";
						echo "<li>Malacca to Penang</li>";
						echo "<li>Penang to Pahang</li>";
						echo "<li>Pahang to Penang</li>";
						echo "<li>Penang to Perak</li>";
						echo "<li>Perak to Penang</li>";
					echo "</ul>";
					
				}
				
				if ($day == 13 && $month == 8 && $year == 2020)
				{	
					echo "<br /><br /><h1>Destinations available on <b>13-08-2020</b></h1>";
					echo "<br /><br />";
					echo "<ul>";
						echo "<li>Penang to Johor</li>";
						echo "<li>Johor to Penang</li>";
						echo "<li>Penang to Kuala Lumpur</li>";
						echo "<li>Kuala Lumpur to Penang</li>";
						echo "<li>Kuala Lumpur to Singapore</li>";
						echo "<li>Singapore to Kuala Lumpur</li>";
						echo "<li>Alor Setar to Kota Bharu</li>";
						echo "<li>Kota Bharu to Alor Setar</li>";
						echo "<li>Kota Bharu to Puchong</li>";
						echo "<li>Puchong to Kota Bharu</li>";
						echo "<li>Kota Bharu to Shah Alam</li>";
						echo "<li>Shah Alam to Kota Bharu</li>";
						echo "<li>Penang to Malacca</li>";
						echo "<li>Malacca to Penang</li>";
						echo "<li>Penang to Pahang</li>";
						echo "<li>Pahang to Penang</li>";
						echo "<li>Penang to Perak</li>";
						echo "<li>Perak to Penang</li>";
					echo "</ul>";
					
				}
				
				if ($day == 14 && $month == 8 && $year == 2020)
				{	
					echo "<br /><br /><h1>Destinations available on <b>14-08-2020</b></h1>";
					echo "<br /><br />";
					echo "<ul>";
						echo "<li>Penang to Johor</li>";
						echo "<li>Johor to Penang</li>";
						echo "<li>Penang to Kuala Lumpur</li>";
						echo "<li>Kuala Lumpur to Penang</li>";
						echo "<li>Kuala Lumpur to Singapore</li>";
						echo "<li>Singapore to Kuala Lumpur</li>";
						echo "<li>Alor Setar to Kota Bharu</li>";
						echo "<li>Kota Bharu to Alor Setar</li>";
						echo "<li>Kota Bharu to Puchong</li>";
						echo "<li>Puchong to Kota Bharu</li>";
						echo "<li>Kota Bharu to Shah Alam</li>";
						echo "<li>Shah Alam to Kota Bharu</li>";
						echo "<li>Penang to Malacca</li>";
						echo "<li>Malacca to Penang</li>";
						echo "<li>Penang to Pahang</li>";
						echo "<li>Pahang to Penang</li>";
						echo "<li>Penang to Perak</li>";
						echo "<li>Perak to Penang</li>";
					echo "</ul>";
					
				}
				
				if ($day == 15 && $month == 8 && $year == 2020)
				{	
					echo "<br /><br /><h1>Destinations available on <b>15-08-2020</b></h1>";
					echo "<br /><br />";
					echo "<ul>";
						echo "<li>Penang to Johor</li>";
						echo "<li>Johor to Penang</li>";
						echo "<li>Penang to Kuala Lumpur</li>";
						echo "<li>Kuala Lumpur to Penang</li>";
						echo "<li>Kuala Lumpur to Singapore</li>";
						echo "<li>Singapore to Kuala Lumpur</li>";
						echo "<li>Alor Setar to Kota Bharu</li>";
						echo "<li>Kota Bharu to Alor Setar</li>";
						echo "<li>Kota Bharu to Puchong</li>";
						echo "<li>Puchong to Kota Bharu</li>";
						echo "<li>Kota Bharu to Shah Alam</li>";
						echo "<li>Shah Alam to Kota Bharu</li>";
					echo "</ul>";
					
				}
				
				if ($day == 16 && $month == 8 && $year == 2020)
				{	
					echo "<br /><br /><h1>Destinations available on <b>16-08-2020</b></h1>";
					echo "<br /><br />";
					echo "<ul>";
						echo "<li>Penang to Johor</li>";
						echo "<li>Johor to Penang</li>";
						echo "<li>Penang to Kuala Lumpur</li>";
						echo "<li>Kuala Lumpur to Penang</li>";
						echo "<li>Kuala Lumpur to Singapore</li>";
						echo "<li>Singapore to Kuala Lumpur</li>";
						echo "<li>Alor Setar to Kota Bharu</li>";
						echo "<li>Kota Bharu to Alor Setar</li>";
					echo "</ul>";
					
				}
				
				if ($day == 17 && $month == 8 && $year == 2020)
				{	
					echo "<br /><br /><h1>Destinations available on <b>17-08-2020</b></h1>";
					echo "<br /><br />";
					echo "<ul>";
						echo "<li>Penang to Johor</li>";
						echo "<li>Johor to Penang</li>";
						echo "<li>Penang to Kuala Lumpur</li>";
						echo "<li>Kuala Lumpur to Penang</li>";
						echo "<li>Kuala Lumpur to Singapore</li>";
						echo "<li>Singapore to Kuala Lumpur</li>";
						echo "<li>Alor Setar to Kota Bharu</li>";
						echo "<li>Kota Bharu to Alor Setar</li>";
						echo "<li>Kota Bharu to Puchong</li>";
						echo "<li>Puchong to Kota Bharu</li>";
						echo "<li>Kota Bharu to Shah Alam</li>";
						echo "<li>Shah Alam to Kota Bharu</li>";
						echo "<li>Penang to Malacca</li>";
						echo "<li>Malacca to Penang</li>";
						echo "<li>Penang to Pahang</li>";
						echo "<li>Pahang to Penang</li>";
						echo "<li>Penang to Perak</li>";
						echo "<li>Perak to Penang</li>";
					echo "</ul>";
					
				}
				
				if ($day == 18 && $month == 8 && $year == 2020)
				{	
					echo "<br /><br /><h1>Destinations available on <b>18-08-2020</b></h1>";
					echo "<br /><br />";
					echo "<ul>";
						echo "<li>Penang to Johor</li>";
						echo "<li>Johor to Penang</li>";
						echo "<li>Penang to Kuala Lumpur</li>";
						echo "<li>Kuala Lumpur to Penang</li>";
						echo "<li>Kuala Lumpur to Singapore</li>";
						echo "<li>Singapore to Kuala Lumpur</li>";
						echo "<li>Alor Setar to Kota Bharu</li>";
						echo "<li>Kota Bharu to Alor Setar</li>";
						echo "<li>Kota Bharu to Puchong</li>";
						echo "<li>Puchong to Kota Bharu</li>";
						echo "<li>Kota Bharu to Shah Alam</li>";
						echo "<li>Shah Alam to Kota Bharu</li>";
						echo "<li>Penang to Malacca</li>";
						echo "<li>Malacca to Penang</li>";
						echo "<li>Penang to Pahang</li>";
						echo "<li>Pahang to Penang</li>";
						echo "<li>Penang to Perak</li>";
						echo "<li>Perak to Penang</li>";
					echo "</ul>";
					
				}
				
				if ($day == 19 && $month == 8 && $year == 2020)
				{	
					echo "<br /><br /><h1>Destinations available on <b>19-08-2020</b></h1>";
					echo "<br /><br />";
					echo "<ul>";
						echo "<li>Penang to Johor</li>";
						echo "<li>Johor to Penang</li>";
						echo "<li>Penang to Kuala Lumpur</li>";
						echo "<li>Kuala Lumpur to Penang</li>";
						echo "<li>Kuala Lumpur to Singapore</li>";
						echo "<li>Singapore to Kuala Lumpur</li>";
						echo "<li>Alor Setar to Kota Bharu</li>";
						echo "<li>Kota Bharu to Alor Setar</li>";
						echo "<li>Kota Bharu to Puchong</li>";
						echo "<li>Puchong to Kota Bharu</li>";
						echo "<li>Kota Bharu to Shah Alam</li>";
						echo "<li>Shah Alam to Kota Bharu</li>";
						echo "<li>Penang to Malacca</li>";
						echo "<li>Malacca to Penang</li>";
						echo "<li>Penang to Pahang</li>";
						echo "<li>Pahang to Penang</li>";
						echo "<li>Penang to Perak</li>";
						echo "<li>Perak to Penang</li>";
					echo "</ul>";
					
				}
				
				if ($day == 20 && $month == 8 && $year == 2020)
				{	
					echo "<br /><br /><h1>Destinations available on <b>21-08-2020</b></h1>";
					echo "<br /><br />";
					echo "<ul>";
						echo "<li>Penang to Johor</li>";
						echo "<li>Johor to Penang</li>";
						echo "<li>Penang to Kuala Lumpur</li>";
						echo "<li>Kuala Lumpur to Penang</li>";
						echo "<li>Kuala Lumpur to Singapore</li>";
						echo "<li>Singapore to Kuala Lumpur</li>";
						echo "<li>Alor Setar to Kota Bharu</li>";
						echo "<li>Kota Bharu to Alor Setar</li>";
						echo "<li>Kota Bharu to Puchong</li>";
						echo "<li>Puchong to Kota Bharu</li>";
						echo "<li>Kota Bharu to Shah Alam</li>";
						echo "<li>Shah Alam to Kota Bharu</li>";
						echo "<li>Penang to Malacca</li>";
						echo "<li>Malacca to Penang</li>";
						echo "<li>Penang to Pahang</li>";
						echo "<li>Pahang to Penang</li>";
						echo "<li>Penang to Perak</li>";
						echo "<li>Perak to Penang</li>";
					echo "</ul>";
					
				}
				
				if ($day == 21 && $month == 8 && $year == 2020)
				{	
					echo "<br /><br /><h1>Destinations available on <b>21-08-2020</b></h1>";
					echo "<br /><br />";
					echo "<ul>";
						echo "<li>Penang to Johor</li>";
						echo "<li>Johor to Penang</li>";
						echo "<li>Penang to Kuala Lumpur</li>";
						echo "<li>Kuala Lumpur to Penang</li>";
						echo "<li>Kuala Lumpur to Singapore</li>";
						echo "<li>Singapore to Kuala Lumpur</li>";
						echo "<li>Alor Setar to Kota Bharu</li>";
						echo "<li>Kota Bharu to Alor Setar</li>";
						echo "<li>Kota Bharu to Puchong</li>";
						echo "<li>Puchong to Kota Bharu</li>";
						echo "<li>Kota Bharu to Shah Alam</li>";
						echo "<li>Shah Alam to Kota Bharu</li>";
						echo "<li>Penang to Malacca</li>";
						echo "<li>Malacca to Penang</li>";
						echo "<li>Penang to Pahang</li>";
						echo "<li>Pahang to Penang</li>";
						echo "<li>Penang to Perak</li>";
						echo "<li>Perak to Penang</li>";
					echo "</ul>";
					
				}
				
				if ($day == 22 && $month == 8 && $year == 2020)
				{	
					echo "<br /><br /><h1>Destinations available on <b>22-08-2020</b></h1>";
					echo "<br /><br />";
					echo "<ul>";
						echo "<li>Penang to Johor</li>";
						echo "<li>Johor to Penang</li>";
						echo "<li>Penang to Kuala Lumpur</li>";
						echo "<li>Kuala Lumpur to Penang</li>";
						echo "<li>Kuala Lumpur to Singapore</li>";
						echo "<li>Singapore to Kuala Lumpur</li>";
						echo "<li>Alor Setar to Kota Bharu</li>";
						echo "<li>Kota Bharu to Alor Setar</li>";
						echo "<li>Kota Bharu to Puchong</li>";
						echo "<li>Puchong to Kota Bharu</li>";
						echo "<li>Kota Bharu to Shah Alam</li>";
						echo "<li>Shah Alam to Kota Bharu</li>";
					echo "</ul>";
					
				}
				
				if ($day == 23 && $month == 8 && $year == 2020)
				{	
					echo "<br /><br /><h1>Destinations available on <b>23-08-2020</b></h1>";
					echo "<br /><br />";
					echo "<ul>";
						echo "<li>Penang to Johor</li>";
						echo "<li>Johor to Penang</li>";
						echo "<li>Penang to Kuala Lumpur</li>";
						echo "<li>Kuala Lumpur to Penang</li>";
						echo "<li>Kuala Lumpur to Singapore</li>";
						echo "<li>Singapore to Kuala Lumpur</li>";
						echo "<li>Alor Setar to Kota Bharu</li>";
						echo "<li>Kota Bharu to Alor Setar</li>";
					echo "</ul>";
					
				}
				
				if ($day == 24 && $month == 8 && $year == 2020)
				{	
					echo "<br /><br /><h1>Destinations available on <b>24-08-2020</b></h1>";
					echo "<br /><br />";
					echo "<ul>";
						echo "<li>Penang to Johor</li>";
						echo "<li>Johor to Penang</li>";
						echo "<li>Penang to Kuala Lumpur</li>";
						echo "<li>Kuala Lumpur to Penang</li>";
						echo "<li>Kuala Lumpur to Singapore</li>";
						echo "<li>Singapore to Kuala Lumpur</li>";
						echo "<li>Alor Setar to Kota Bharu</li>";
						echo "<li>Kota Bharu to Alor Setar</li>";
						echo "<li>Kota Bharu to Puchong</li>";
						echo "<li>Puchong to Kota Bharu</li>";
						echo "<li>Kota Bharu to Shah Alam</li>";
						echo "<li>Shah Alam to Kota Bharu</li>";
						echo "<li>Penang to Malacca</li>";
						echo "<li>Malacca to Penang</li>";
						echo "<li>Penang to Pahang</li>";
						echo "<li>Pahang to Penang</li>";
						echo "<li>Penang to Perak</li>";
						echo "<li>Perak to Penang</li>";
					echo "</ul>";
					
				}
				
				if ($day == 25 && $month == 8 && $year == 2020)
				{	
					echo "<br /><br /><h1>Destinations available on <b>25-08-2020</b></h1>";
					echo "<br /><br />";
					echo "<ul>";
						echo "<li>Penang to Johor</li>";
						echo "<li>Johor to Penang</li>";
						echo "<li>Penang to Kuala Lumpur</li>";
						echo "<li>Kuala Lumpur to Penang</li>";
						echo "<li>Kuala Lumpur to Singapore</li>";
						echo "<li>Singapore to Kuala Lumpur</li>";
						echo "<li>Alor Setar to Kota Bharu</li>";
						echo "<li>Kota Bharu to Alor Setar</li>";
						echo "<li>Kota Bharu to Puchong</li>";
						echo "<li>Puchong to Kota Bharu</li>";
						echo "<li>Kota Bharu to Shah Alam</li>";
						echo "<li>Shah Alam to Kota Bharu</li>";
						echo "<li>Penang to Malacca</li>";
						echo "<li>Malacca to Penang</li>";
						echo "<li>Penang to Pahang</li>";
						echo "<li>Pahang to Penang</li>";
						echo "<li>Penang to Perak</li>";
						echo "<li>Perak to Penang</li>";
					echo "</ul>";
					
				}
				
				if ($day == 26 && $month == 8 && $year == 2020)
				{	
					echo "<br /><br /><h1>Destinations available on <b>26-08-2020</b></h1>";
					echo "<br /><br />";
					echo "<ul>";
						echo "<li>Penang to Johor</li>";
						echo "<li>Johor to Penang</li>";
						echo "<li>Penang to Kuala Lumpur</li>";
						echo "<li>Kuala Lumpur to Penang</li>";
						echo "<li>Kuala Lumpur to Singapore</li>";
						echo "<li>Singapore to Kuala Lumpur</li>";
						echo "<li>Alor Setar to Kota Bharu</li>";
						echo "<li>Kota Bharu to Alor Setar</li>";
						echo "<li>Kota Bharu to Puchong</li>";
						echo "<li>Puchong to Kota Bharu</li>";
						echo "<li>Kota Bharu to Shah Alam</li>";
						echo "<li>Shah Alam to Kota Bharu</li>";
						echo "<li>Penang to Malacca</li>";
						echo "<li>Malacca to Penang</li>";
						echo "<li>Penang to Pahang</li>";
						echo "<li>Pahang to Penang</li>";
						echo "<li>Penang to Perak</li>";
						echo "<li>Perak to Penang</li>";
					echo "</ul>";
					
				}
				
				if ($day == 27 && $month == 8 && $year == 2020)
				{	
					echo "<br /><br /><h1>Destinations available on <b>27-08-2020</b></h1>";
					echo "<br /><br />";
					echo "<ul>";
						echo "<li>Penang to Johor</li>";
						echo "<li>Johor to Penang</li>";
						echo "<li>Penang to Kuala Lumpur</li>";
						echo "<li>Kuala Lumpur to Penang</li>";
						echo "<li>Kuala Lumpur to Singapore</li>";
						echo "<li>Singapore to Kuala Lumpur</li>";
						echo "<li>Alor Setar to Kota Bharu</li>";
						echo "<li>Kota Bharu to Alor Setar</li>";
						echo "<li>Kota Bharu to Puchong</li>";
						echo "<li>Puchong to Kota Bharu</li>";
						echo "<li>Kota Bharu to Shah Alam</li>";
						echo "<li>Shah Alam to Kota Bharu</li>";
						echo "<li>Penang to Malacca</li>";
						echo "<li>Malacca to Penang</li>";
						echo "<li>Penang to Pahang</li>";
						echo "<li>Pahang to Penang</li>";
						echo "<li>Penang to Perak</li>";
						echo "<li>Perak to Penang</li>";
					echo "</ul>";
					
				}
				
				if ($day == 28 && $month == 8 && $year == 2020)
				{	
					echo "<br /><br /><h1>Destinations available on <b>28-08-2020</b></h1>";
					echo "<br /><br />";
					echo "<ul>";
						echo "<li>Penang to Johor</li>";
						echo "<li>Johor to Penang</li>";
						echo "<li>Penang to Kuala Lumpur</li>";
						echo "<li>Kuala Lumpur to Penang</li>";
						echo "<li>Kuala Lumpur to Singapore</li>";
						echo "<li>Singapore to Kuala Lumpur</li>";
						echo "<li>Alor Setar to Kota Bharu</li>";
						echo "<li>Kota Bharu to Alor Setar</li>";
						echo "<li>Kota Bharu to Puchong</li>";
						echo "<li>Puchong to Kota Bharu</li>";
						echo "<li>Kota Bharu to Shah Alam</li>";
						echo "<li>Shah Alam to Kota Bharu</li>";
						echo "<li>Penang to Malacca</li>";
						echo "<li>Malacca to Penang</li>";
						echo "<li>Penang to Pahang</li>";
						echo "<li>Pahang to Penang</li>";
						echo "<li>Penang to Perak</li>";
						echo "<li>Perak to Penang</li>";
					echo "</ul>";
					
				}
				
				if ($day == 29 && $month == 8 && $year == 2020)
				{	
					echo "<br /><br /><h1>Destinations available on <b>29-08-2020</b></h1>";
					echo "<br /><br />";
					echo "<ul>";
						echo "<li>Penang to Johor</li>";
						echo "<li>Johor to Penang</li>";
						echo "<li>Penang to Kuala Lumpur</li>";
						echo "<li>Kuala Lumpur to Penang</li>";
						echo "<li>Kuala Lumpur to Singapore</li>";
						echo "<li>Singapore to Kuala Lumpur</li>";
						echo "<li>Alor Setar to Kota Bharu</li>";
						echo "<li>Kota Bharu to Alor Setar</li>";
						echo "<li>Kota Bharu to Puchong</li>";
						echo "<li>Puchong to Kota Bharu</li>";
						echo "<li>Kota Bharu to Shah Alam</li>";
						echo "<li>Shah Alam to Kota Bharu</li>";
					echo "</ul>";
					
				}
				
				if ($day == 30 && $month == 8 && $year == 2020)
				{	
					echo "<br /><br /><h1>Destinations available on <b>30-08-2020</b></h1>";
					echo "<br /><br />";
					echo "<ul>";
						echo "<li>Penang to Johor</li>";
						echo "<li>Johor to Penang</li>";
						echo "<li>Penang to Kuala Lumpur</li>";
						echo "<li>Kuala Lumpur to Penang</li>";
						echo "<li>Kuala Lumpur to Singapore</li>";
						echo "<li>Singapore to Kuala Lumpur</li>";
						echo "<li>Alor Setar to Kota Bharu</li>";
						echo "<li>Kota Bharu to Alor Setar</li>";
					echo "</ul>";
					
				}
				
				if ($day == 31 && $month == 8 && $year == 2020)
				{
					echo "<br /><br /><h2>We are off for the day.</h2>";
					echo "<br /><br /><h1><b>Happy Merdeka Day!</b></h1>";
					
				}
				
				echo "<br /><p align='center'><a class='text-uppercase primary-btn' href='busbooking.php'>Make Booking</a>";
				echo "&nbsp; <a class='text-uppercase primary-btn' href='dates.php'>Back</a></p>";
				
				echo "</center>";
				
			?>	
		
			<!--End of Destination Area -->


	<!-- Start Footer Area -->
	<?php
		
		//Include footer
		include('footer.php');
		
	?>
	<!-- End Footer Area -->