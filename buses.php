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
									Buses			
								</h1>";	
								echo"<p class='text-white link-nav'><a href='index.php'>Home </a>  <span class='lnr lnr-arrow-right'></span>  <a href='buses.php'>Buses</a></p>";
							echo "</div>";											
						echo "</div>";
					echo "</div>";
				echo "</section>";
			?>
			<!-- End banner Area -->	

			<!--List of Buses Area -->
			<?php
			
				echo "<form method = 'get'>";
				echo "<br /><br /><p align='center'><font size='+1'>Click on the images of the buses to get more info!</font></p>"; //insert paragraph and align to center
				
				echo "<br/>"; //break line
				
				echo "<table align='center' border='1'>"; //align table to center and set border to 1
					echo "<tr>"; //start table row
						//insert table columns with bus images with hyperlink and align to center
						echo "<td align='center'><a href='busesOut.php?bus=transnasional'><img src='img/transnasional.jpg' alt='Transnasional' width='300px' height='200px'/></a></td>";
						echo "<td align='center'><a href='busesOut.php?bus=aeroline'><img src='img/aeroline.jpg' width='300px' height='200px'/></a></td>";
						echo "<td align='center'><a href='busesOut.php?bus=arwana'><img src='img/arwana.jpg' width='300px' height='200px'/></a></td>";
					echo "</tr>"; //end table row
						
					echo "<tr>"; //start table row
						//insert table columns with bus names and align to center
						echo "<td align='center'>Transnasional Bus</td>";
						echo "<td align='center'>Aeroline Express</td>";
						echo "<td align='center'>Arwana Express</td>";
					echo "</tr>"; //end table row
				echo "</table>"; //end table
					
				echo "<br/>"; //break line
				
				echo "<table align='center' border='1'>"; //align table to center and set border to 1
					echo "<tr>"; //start table row
						//insert table columns with bus images with hyperlink and align to center
						
						echo "<td align='center'><a href='busesOut.php?bus=sri_maju'><img src='img/maju.jpg' alt='Sri Maju' width='300px' height='200px'/></a></td>";
						echo "<td align='center'><a href='busesOut.php?bus=billionstars'><img src='img/star.jpg' alt='Billionstars' width='300px' height='200px'/></a></td>";
						echo "<td align='center'><a href='busesOut.php?bus=plusliner'><img src='img/plusliner.jpg' alt='Plusliner' width='300px' height='200px'/></a></td>";
					echo "</tr>"; //end table row
					
					echo "<tr>"; //start table row
						//insert table columns with bus names and align to center
						echo "<td align='center'>Sri Maju Express</td>";
						echo "<td align='center'>Billion Stars Express</td>";
						echo "<td align='center'>Plusliner</td>";
					echo "</tr>"; //end table row
				echo "</table><br /><br />"; //end table
				
				echo"</form>";
		
			?>
			<!-- End of List of Buses Area -->

	<!-- Start Footer Area -->
	<?php
		
		//Include footer
		include('footer.php');
		
	?>
	<!-- End Footer Area -->