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
								echo"<p class='text-white link-nav'><a href='index.php'>Home </a>  <span class='lnr lnr-arrow-right'></span>  <a href='username.php'>Username</a></p>";
							echo "</div>";											
						echo "</div>";
					echo "</div>";
				echo "</section>";
			?>
			<!-- End banner Area -->


	<?php 
	
	$connection = mysqli_connect("localhost", "root", "", "bus_database");
	
			$username = $_GET['username'];
			$queryslt = "SELECT * FROM booking WHERE Username = '$username'";
			
			$r = mysqli_query($connection,$queryslt);
			
			echo "<table align='center' width = '90%' border = '1'>";
				echo "<tr align = 'center'>";
					echo"<th align = 'center'>From</th>";
					echo"<th align = 'center'>To</th>";
					echo"<th align = 'center'>Departure Date</th>";
					echo"<th align = 'center'>Time</th>";
					echo"<th align = 'center'>Return Date</th>";
					echo"<th align = 'center'>Bus Types</th>";
					echo"<th align = 'center'>Seating Types</th>";
				echo "</tr>";	
			
			if(mysqli_query($connection,$queryslt)) 
			{
				echo "<script>alert('Your booking had been found.')</script>";
				echo "<br />";
					while($row = mysqli_fetch_array($r))
					{

						echo"<br/><br/>";
						echo"<tr>";
						echo"<td align = 'center'><font color = 'black'>{$row['fromDestination']}</font></td>";
						echo"<td align = 'center'><font color = 'black'>{$row['toDestination']}</font></td>";
						echo"<td align = 'center'><font color = 'black'>{$row['departureDate']}</font></td>";
						echo"<td align = 'center'><font color = 'black'>{$row['time']}</font></td>";
						echo"<td align = 'center'><font color = 'black'>{$row['returnDate']}</font></td>";
						echo"<td align = 'center'><font color = 'black'>{$row['busTypes']}</font></td>";
						echo"<td align = 'center'><font color = 'black'>{$row['seatingTypes']}</font></td>";
						echo"</tr>";
					}
				
			}
			
			else
			{
				echo "<script>alert('Purchase history is failed to delete from database.')</script>";
			}
			
		echo "</table>";
	echo"<br><br>";

	mysqli_close($connection);
	
	
	?>
	
<!-- Start Footer Area -->
	<?php
		
		
		//Include footer 
		include('footer.php');
		
	?>
	<!-- End Footer Area -->